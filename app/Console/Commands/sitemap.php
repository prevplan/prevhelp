<?php

namespace App\Console\Commands;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\Tags\Url;

class sitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $courses = Course::where([
            ['start', '>', Carbon::now()],
            ['bookable', 1],
        ])
            ->orderBy('start')
            ->get();

        // generate course_sitemap.xml
        $map = \Spatie\Sitemap\Sitemap::create();

        foreach ($courses as $course) { // run all courses
            foreach (LaravelLocalization::getSupportedLanguagesKeys() as $languagesKey) { // run every language
                $url = Url::create(LaravelLocalization::getLocalizedURL($languagesKey, route('event.book', ['course' => $course]), [], true)); // add the url for every language

                foreach (LaravelLocalization::getSupportedLanguagesKeys() as $languagesKey) { // and the alternate url for every language
                    $alternateUrl = LaravelLocalization::getLocalizedURL($languagesKey, route('event.book', ['course' => $course]), [], true);
                    $url->addAlternate($alternateUrl, $languagesKey);
                }

                $url->addAlternate( // and the x-default
                preg_replace(
                    '/\/'.LaravelLocalization::getDefaultLocale().'/',
                    '',
                    LaravelLocalization::getLocalizedURL(
                        LaravelLocalization::getDefaultLocale(),
                        route('event.book', ['course' => $course])
                    ),
                    1
                ),
                'x-default');

                $url->setLastModificationDate($course->updated_at);

                $map->add($url);
            }
        }

        $map->writeToFile(public_path('course_sitemap.xml'));

        // generate page_sitemap.xml
        SitemapGenerator::create(config('app.url'))
            ->hasCrawled(function (Url $url) {

                // exclude events and booking from sitemap
                if (strpos($url->url, 'buchen') !== false || strpos($url->url, 'booking') !== false || strpos($url->url, 'termine') !== false || strpos($url->url, 'events') !== false) {
                    return;
                }

                foreach (LaravelLocalization::getSupportedLanguagesKeys() as $languagesKey) {
                    $alternateUrl = LaravelLocalization::getLocalizedURL($languagesKey, $url->url, [], true);
                    $url->addAlternate($alternateUrl, $languagesKey);
                }

                $url->addAlternate(
                    preg_replace(
                        '/\/'.LaravelLocalization::getDefaultLocale().'/',
                        '',
                        LaravelLocalization::getLocalizedURL(
                            LaravelLocalization::getDefaultLocale(),
                            $url->url
                        ),
                        1
                    ),
                    'x-default');

                return $url;
            })
            ->getSitemap()
/*            ->add(Url::create('/erste-hilfe-kurs/wuppertal')
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.8))*/
            ->writeToFile(public_path('page_sitemap.xml'));

        // generate sitemap.xml
        SitemapIndex::create()
            ->add('page_sitemap.xml')
            ->add('course_sitemap.xml')
            ->writeToFile(public_path('sitemap.xml'));
    }
}

<header id="header" class="@yield('header_class', 'header-effect-shrink')" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 header-body-bottom-border">
        <div class="header-top header-top-default border-bottom-0">
            <div class="container">
                <div class="header-row py-2">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills text-uppercase text-2">
                                    {{--
                                    maybe used later...
                                    <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                        <a class="nav-link pl-0" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
                                    </li>
                                    --}}
                                    <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                        <a class="nav-link" href="{{ route('contact.show') }}"><i class="fas fa-angle-right"></i> {{ t('Contact') }}</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-center">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <!-- TrustBox widget - Micro Review Count -->
                                <div class="trustpilot-widget" data-locale="{{ LaravelLocalization::getCurrentLocale() }}" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="5fc93273eb082400017637c1" data-style-height="24px" data-style-width="350px" data-theme="light">
                                    <a href="https://{{ (LaravelLocalization::getCurrentLocale() == 'en' ? 'www' : LaravelLocalization::getCurrentLocale()) }}.trustpilot.com/review/prevhelp.de" target="_blank" rel="noopener">{{ t('Trustpilot reviews') }}</a>
                                </div>
                                <!-- End TrustBox widget -->
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item d-none d-md-block">
                                        <a href="mailto:info@prevhelp.de"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> info@prevhelp.de</a>
                                    </li>
                                    <li class="nav-item d-none d-md-block">
                                        <a href="tel:0800-77384357"><i class="far fa-phone text-4 text-color-primary" style="top: 0;"></i> 0800-PREVHELP</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-top header-top-default border-bottom-0 bg-color-primary">
            <div class="container">
                <div class="header-row py-2">
                    <div class="header-column justify-content-center">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills text-uppercase text-2">
                                    <li class="nav-item">
                                        <a class="nav-link pl-0 text-light opacity-7" href="{{ route('corona') }}">{{ t('current corona information') }}</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="PrevHelp"  height="48" data-sticky-height="40" src="{{ asset('img/logo-klein.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item" href="/">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle
                                            {{ request()->is(LaravelLocalization::getCurrentLocale() . '/' . LaravelLocalization::transRoute('routes.first-aid-course-drivers-license')) ||
                                                request()->is(LaravelLocalization::getCurrentLocale() . '/' . LaravelLocalization::transRoute('routes.first-aid-course/wuppertal')) ||
                                                request()->is(LaravelLocalization::getCurrentLocale() . '/' . LaravelLocalization::transRoute('routes.first-aid-course-business'))
                                                ? 'active' : ''
                                            }}" href="#">
                                                {{ t('first aid courses') }}
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('fa.wuppertal') }}">... {{ t('for the driver\'s license') }}</a></li>
                                                <li><a class="dropdown-item" href="{{ route('fa.business') }}">... {{ t('for companies') }}</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item {{ request()->is(LaravelLocalization::getCurrentLocale() . '/' . LaravelLocalization::transRoute('routes.events') . '*') ? 'active' : ''}}" href="{{ route('event.overview') }}">
                                                {{ t('Events') }}
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item {{ request()->is(LaravelLocalization::getCurrentLocale() . '/' . LaravelLocalization::transRoute('routes.faq')) ? 'active' : ''}}" href="{{ route('question.index') }}">
                                                {{ t('FAQ') }}
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item {{ request()->is(LaravelLocalization::getCurrentLocale() . '/' . LaravelLocalization::transRoute('routes.warranty')) ? 'active' : ''}}" href="{{ route('warranty') }}">
                                                {{ t('warranty') }}
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle
                                            {{ request()->is(LaravelLocalization::getCurrentLocale() . '/' . LaravelLocalization::transRoute('routes.imprint')) ||
                                                request()->is(LaravelLocalization::getCurrentLocale() . '/' . LaravelLocalization::transRoute('routes.privacy')) ||
                                                request()->is(LaravelLocalization::getCurrentLocale() . '/' . LaravelLocalization::transRoute('routes.gtc')) ||
                                                request()->is(LaravelLocalization::getCurrentLocale() . '/' . LaravelLocalization::transRoute('routes.revocation'))
                                                ? 'active' : ''
                                            }}" href="#">
                                                {{ t('legal') }}
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('legal.imprint') }}">{{ t('imprint') }}</a></li>
                                                <li><a class="dropdown-item" href="{{ route('legal.privacy') }}">{{ t('privacy') }}</a></li>
                                                <li><a class="dropdown-item" href="{{ route('legal.conditions') }}">{{ t('GTC') }}</a></li>
                                                <li><a class="dropdown-item" href="{{ route('legal.revocation') }}">{{ t('revocation') }}</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                <i class="far fa-language text-5" style="top: 0;"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <li>
                                                        <a
                                                            rel="alternate" hreflang="{{ $localeCode }}"
                                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                                            class="dropdown-item">
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    </li>
                                                    @if( $loop->last)
                                                        <a
                                                            style="display:none;"
                                                            rel="alternate" hreflang="x-default"
                                                            href="{{ preg_replace( '/\/' . LaravelLocalization::getDefaultLocale() . '/', '', LaravelLocalization::getLocalizedURL(LaravelLocalization::getDefaultLocale() , ''), 1) }}"
                                                            class="dropdown-item">
                                                            x-default
                                                        </a>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        {{--
                        <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
                                    <form role="search" action="page-search-results.html" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                            <span class="input-group-append">
															<button class="btn" type="submit">
																<i class="fa fa-search header-nav-top-icon"></i>
															</button>
														</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

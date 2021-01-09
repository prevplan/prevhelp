@extends('layouts.frontend')

@section('meta.title', t('our guarantee') . ' | PrevHelp')
@section('meta.description', t('Successful learning at the best price in town? ✅ We guarantee you what others only promise. 🤝'))

@section('body')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{ asset('img/shaking-hands-1920.jpg') }});">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1>{!! html_entity_decode(t('our <strong>guarantee</strong>')) !!}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-color-white section-height-3 border-0 mt-5 mb-0">
        <div class="container">

            <div class="row">
                <div class="col">

                    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('img/people-460.png') }}" alt="people" />
                        </div>
                        <div class="col-md-8 pl-md-5">
                            <h2 class="font-weight-normal text-6 mb-3">{!! html_entity_decode(t('<strong class="font-weight-extra-bold">guaranteed</strong> learning success')) !!}</h2>
                            <p class="text-4">{!! html_entity_decode(t('You can get the feeling that you won\'t take much with some other providers (apart from the certificate). We, therefore, give a <em>guarantee of learning success</em> in our courses. In our courses, you will receive the necessary security and practical skills to apply the content and practices taught safely. If we failed in doing this during the regular course time, our instructor would practice with you until you feel confident.')) !!}</p>
                            <p>{!! html_entity_decode(t('If contrary to expectations and despite our instructor\'s efforts, you do not have a good command of the course content and practices even after further exercises, the course is <em>on us</em>, and you will get your money back! We only want to be paid if you are satisfied with us.')) !!}</p>
                        </div>
                    </div>

                    <hr class="solid my-5">

                    <div class="row align-items-center pt-5 pb-3 appear-animation" data-appear-animation="fadeInRightShorter">
                        <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                            <h2 class="font-weight-normal text-6 mb-3">{!! html_entity_decode(t('best-price-in-town <strong class="font-weight-extra-bold">guarantee</strong>')) !!}</h2>
                            <p class="text-4">{!! html_entity_decode(t('We are <strong>guaranteed</strong> to offer our courses at the <em>best price</em> in town. Here we work without strike prices, discount campaigns, vouchers, and the like. We are permanently cheap for everyone, <em>no ifs or buts</em>. With us, there is no <em>punishment</em> because you don\'t have the right <em>voucher/flyer</em>! If contrary to expectations, you find a comparable course at a lower price, we will undercut this offer by 10%. We offer you good courses without long price comparisons.')) !!}</p>
                            <p>{!! html_entity_decode(t('Special offers for members of individual organizations, (strongly) limited offers for purely advertising purposes, vouchers, etc., are <em>generally</em> excluded. If you send us these individual cases, we will be happy to make you an offer.')) !!}</p>
                        </div>
                        <div class="col-md-4 px-5 px-md-3">
                            <img class="img-fluid scale-2 my-4" src="{{ asset('img/calculator-460.png') }}" alt="calculator" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

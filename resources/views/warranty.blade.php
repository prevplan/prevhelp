@extends('layouts.frontend')

@section('title', 'Unsere Garantie')
@section('meta.description', 'Lernerfolg zum besten Preis der Stadt? ✅ Wir garantieren Ihnen, was andere nur versprechen. 🤝')

@section('body')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{ asset('img/shaking-hands-1920.jpg') }});">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1>Unsere <strong>Garantie</strong></h1>
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
                            <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="img/people-460.png" alt="people" />
                        </div>
                        <div class="col-md-8 pl-md-5">
                            <h2 class="font-weight-normal text-6 mb-3">Lernerfolg <strong class="font-weight-extra-bold">garantiert</strong></h2>
                            <p class="text-4">Bei manch anderem Anbieter kann man das Gef&uuml;hl bekommen, dass man (au&szlig;er der Bescheinigung) nicht viel mitnehmen wird. Daher geben wir auf unsere Kurse eine <i>Erfolgsgarantie</i>. Sie erhalten in unseren Kursen die notwendige Sicherheit und Handlungskompetenz, um die vermittelten Inhalte und Praktiken sicher anwenden zu können. Sollte uns dies während der regulären Kurszeit nicht gelungen sein, wird unser Referent mit Ihnen üben, bis Sie sich sicher fühlen.</p>
                            <p>Falls Sie, wider Erwarten und den Bemühungen unseres Referenten zum Trotz, die zu vermittelnden Kursinhalte und Praktiken auch nach weiteren Übungen nicht sicher beherrschen, geht der Kurs <i>auf uns</i> und Sie erhalten Ihr Geld zurück! Wir möchten nur bezahlt werden, wenn Sie mit uns zufrieden sind.</p>
                        </div>
                    </div>

                    <hr class="solid my-5">

                    <div class="row align-items-center pt-5 pb-3 appear-animation" data-appear-animation="fadeInRightShorter">
                        <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                            <h2 class="font-weight-normal text-6 mb-3">best-price-in-town <strong class="font-weight-extra-bold">Garantie</strong></h2>
                            <p class="text-4">Wir bieten unsere Kurse <strong>garantiert</strong> zum <i>besten Preis</i> der Stadt an. Hierbei arbeiten wir ohne Streichpreise, Rabatt Aktionen, Gutscheine und &auml;hnlichem. Wir sind dauerhaft g&uuml;nstig, f&uuml;r jeden, ohne <i>wenn und aber</i>. Bei uns gibt es keine <i>Bestrafung</i>, weil Ihnen gerade der passende <i>Voucher / Flyer</i> fehlt! Sollten Sie wider Erwarten doch einen vergleichbaren Kurs zu einem g&uuml;nstigeren Preis finden, unterbieten wir dieses Angebot um 10%. Wir bieten Ihnen gute Kurse, ohne langen Preisvergleich.</p>
                            <p>Sonderangebote f&uuml;r Mitglieder einzelner Organisationen, (stark) befristete Angebote zu reinen Werbezwecken, Gutscheine o.&auml;. sind <i>grunds&auml;tzlich</i> ausgenommen. Wenn Sie uns diese Einzelf&auml;lle zusenden, machen wir Ihnen jedoch auch hierzu gerne ein Angebot.</p>
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

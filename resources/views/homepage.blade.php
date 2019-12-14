@extends('layouts.app')

@section('title', $siteName . ' | ' . $siteSlogan)

@section('content')
    <section id="sluzby" class="services-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">Náš postoj</h4>
                        <p class="text">Tvorba webových stránek nás baví. Chceme lidem ukázat, že kvalita práce je
                            důležitější než nejlevnější nabízené řešení. Investice do kvalitně zpracovaného webu se vždy
                            vrátí - správně vytvořené webové stránky totiž vydělávají. Web je totiž nejlepší obchodník
                            na světě, protože oslovuje lidi 24 hodin denně po celý rok bez přestávky. Rozhodně se tedy
                            vyplatí koupit vašemu obchodníkovi pěkné sako a&nbsp;naučit ho mluvit na zákazníky tak, že
                            se&nbsp;k&nbsp;němu budou rádi vracet.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-bolt"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">Efektivita</h4>
                                    <p class="text">Vybereme pro vás to&nbsp;správné řešení na&nbsp;míru. Žádné
                                        krabicové řešení u&nbsp;nás nenajdete.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-bar-chart"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">SEO</h4>
                                    <p class="text">Nejste na&nbsp;internetu vidět? Pomůžeme vám zvýšit počet
                                        návštěvníků a&nbsp;proměníme je&nbsp;v&nbsp;zákazníky.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-brush"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">Design</h4>
                                    <p class="text">Chtěli byste stylovou grafiku k&nbsp;webovým stránkám nebo e-shopu?
                                        I&nbsp;v&nbsp;této oblasti rádi pomůžeme.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-bulb"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">Inovace</h4>
                                    <p class="text">Programování webů nás baví, sledujeme aktuální trendy a aplikujeme
                                        je do praxe.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="o-nas" class="pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">O nás</h4>
                        <p class="text">
                            Tvorba webových stránek nás baví. Chceme lidem ukázat, že kvalita práce je důležitější než
                            nejlevnější nabízené řešení. Investice do kvalitně zpracovaného webu se vždy vrátí - správně
                            vytvořené webové stránky totiž vydělávají. Web je totiž nejlepší obchodník na světě, protože
                            oslovuje lidi 24 hodin denně po celý rok bez přestávky. Rozhodně se tedy vyplatí koupit
                            vašemu obchodníkovi pěkné sako a naučit ho mluvit na zákazníky tak, že se k němu rádi budou
                            vracet kupovat nové zboží.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kontakt" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">Kontaktujte nás</h4>
                        <p class="text">Přestaňte utrácet čas a peníze za web, který nepřináší výsledky. Napište nám a
                            společně najdeme řešení.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="contact-form" action="/send/email" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="name" placeholder="Jméno"
                                               data-error="Jméno je povinné."
                                               required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="email" name="email" placeholder="Email"
                                               data-error="Validní email je povinný." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                    <textarea placeholder="Zpráva" name="message" data-error="Prosím, napište nám něco."
                                              required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <button type="submit" class="main-btn">Odeslat zprávu</button>
                                    </div>
                                </div>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

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

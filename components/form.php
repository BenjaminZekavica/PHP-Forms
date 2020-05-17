<section class="event-form global-padding">
    <div class="event-form__container container">
        <form id="bestellung" class="event-form__wrapper" data-toggle="validator" method="POST" accept-charset="utf-8">
            <ul class="event-form__navi">
                <li class="event-form__navi-item">
                    <a href="#step-1">
                        Persönliche Angaben  
                    </a>
                </li>
                <li class="event-form__navi-item">
                    <a href="#step-2">
                        Tanzschule
                    </a>
                </li>
                <li class="event-form__navi-item">
                    <a href="#step-3">
                        Bezahlung
                    </a>
                </li>
            </ul>
            <div class="event-form__wrapper">
                <fieldset id="step-1" class="event-form__fieldset">
                    <h2 class="event-form__headline">Persönliche Angaben</h2>
                    <h3 class="event-form__subheadline">Schritt 1</h3>
                    <div class="event-form__fields">
                        <div class="form__part form__part--man">
                            <h4>
                                Mann
                            </h4>
                            <div class="event-form__field-col row">
                                <div class="event-form__field-wrapper col-sm-6 form-group" role="form" data-toggle="validator">
                                    <label class="event-form__field-label" for="form-vorname">Vorname * </label>
                                    <input class="event-form__field form-control" type="text" name="form-vorname" id="form-vorname" placeholder="Vornamen eingeben" required />
                                <?php errorMessage(); ?>
                                </div>
                                <div class="event-form__field-wrapper col-sm-6 form-group">
                                    <label class="event-form__field-label" for="form-nachname">Nachname *</label>
                                    <input class="event-form__field form-control" type="text" name="form-nachname" id="form-nachname" placeholder="Nachname eingeben" required />
                                    <?php errorMessage(); ?>
                                </div>
                            </div>
                            <div class="event-form__field-col row">
                                <div class="event-form__field-wrapper col-sm-8 form-group">
                                    <label class="event-form__field-label" for="form-street">Straße*</label>
                                    <input class="event-form__field form-control" type="text" name="form-street" id="form-street" placeholder="Straße eingeben" required />
                                    <?php errorMessage(); ?>
                                </div>
                                <div class="event-form__field-wrapper col-sm-4 form-group">
                                    <label class="event-form__field-label" for="form-house-num">Hausnummer * </label>
                                    <input class="event-form__field form-control" type="text" name="form-house-num" id="form-house-num" placeholder="Hausnummer eingeben" required />
                                    <?php errorMessage(); ?>
                                </div>
                            </div>
                            <div class="event-form__field-col row">
                                <div class="event-form__field-wrapper col-sm-3 form-group">
                                    <label class="event-form__field-label" for="form-plz">PLZ *</label>
                                    <input class="event-form__field form-control" type="number" name="form-plz" id="form-plz" placeholder="Postleitzahl eingeben" required />
                                    <?php errorMessage(); ?>
                                </div>
                                <div class="event-form__field-wrapper col-sm-9 form-group">
                                    <label class="event-form__field-label" for="form-ort">Stadt *</label>
                                    <input class="event-form__field form-control" type="text" name="form-ort" id="form-ort" placeholder="Wohnort eingeben" required />
                                    <?php errorMessage(); ?>
                                </div>
                            </div>
                            <div class="event-form__field-col row">
                                <div class="event-form__field-wrapper col-sm-6 form-group">
                                    <label class="event-form__field-label" for="form-birthday">Geburtsdatum *</label>
                                    <input class="event-form__field form-control" type="date" name="form-birthday" id="form-birthday" required />
                                    <?php errorMessage(); ?>
                                </div>
                                <div class="event-form__field-wrapper col-sm-6 form-group">
                                    <label class="event-form__field-label" for="form-email">E-Mail *</label>
                                    <input class="event-form__field form-control" type="email" name="form-email" id="form-email" placeholder="E-Mail Adresse eingeben" required />
                                    <?php errorMessage(); ?>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="form__part form__part--woman">
                            <h4>
                                Frau
                            </h4>
                            <div class="event-form__field-col row">
                                <div class="event-form__field-wrapper col-sm-6 form-group" role="form" data-toggle="validator">
                                    <label class="event-form__field-label" for="form-vorname-woman">Vorname * </label>
                                    <input class="event-form__field form-control" type="text" name="form-vorname-woman" id="form-vorname-woman" placeholder="Vornamen eingeben" required />
                                <?php errorMessage(); ?>
                                </div>
                                <div class="event-form__field-wrapper col-sm-6 form-group">
                                    <label class="event-form__field-label" for="form-nachname-woman">Nachname *</label>
                                    <input class="event-form__field form-control" type="text" name="form-nachname-woman" id="form-nachname-woman" placeholder="Nachname eingeben" required />
                                    <?php errorMessage(); ?>
                                </div>
                            </div>
                            <div class="event-form__field-col row">
                                <div class="event-form__field-wrapper col-sm-8 form-group">
                                    <label class="event-form__field-label" for="form-street-woman">Straße*</label>
                                    <input class="event-form__field form-control" type="text" name="form-street-woman" id="form-street-woman" placeholder="Straße eingeben" required />
                                    <?php errorMessage(); ?>
                                </div>
                                <div class="event-form__field-wrapper col-sm-4 form-group">
                                    <label class="event-form__field-label" for="form-house-num-woman">Hausnummer * </label>
                                    <input class="event-form__field form-control" type="text" name="form-house-num-woman" id="form-house-num-woman" placeholder="Hausnummer eingeben" required />
                                    <?php errorMessage(); ?>
                                </div>
                            </div>
                            <div class="event-form__field-col row">
                                <div class="event-form__field-wrapper col-sm-3 form-group">
                                    <label class="event-form__field-label" for="form-plz-woman">PLZ *</label>
                                    <input class="event-form__field form-control" type="number" name="form-plz-woman" id="form-plz-woman" placeholder="Postleitzahl eingeben" required />
                                    <?php errorMessage(); ?>
                                </div>
                                <div class="event-form__field-wrapper col-sm-9 form-group">
                                    <label class="event-form__field-label" for="form-ort-woman">Stadt *</label>
                                    <input class="event-form__field form-control" type="text" name="form-ort-woman" id="form-ort-woman" placeholder="Wohnort eingeben" required />
                                    <?php errorMessage(); ?>
                                </div>
                            </div>
                            <div class="event-form__field-col row">
                                <div class="event-form__field-wrapper col-sm-6 form-group">
                                    <label class="event-form__field-label" for="form-birthday-woman">Geburtsdatum *</label>
                                    <input class="event-form__field form-control" type="date" name="form-birthday-woman" id="form-birthday-woman" required />
                                    <?php errorMessage(); ?>
                                </div>
                                <div class="event-form__field-wrapper col-sm-6 form-group">
                                    <label class="event-form__field-label" for="form-email-woman">E-Mail *</label>
                                    <input class="event-form__field form-control" type="email" name="form-email-woman" id="form-email-woman" placeholder="E-Mail Adresse eingeben" required />
                                    <?php errorMessage(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="infos-fields">
                        * Pflichtfelder
                    </p>
                </fieldset>
                <fieldset id="step-2" class="event-form__fieldset">
                    <h2 class="event-form__headline">Tanzschule</h2>
                    <h3 class="event-form__subheadline">Schritt 2</h3>
                    <div class="event-form__fields">
                        <div class="event-form__field-col">
                            <div class="event-form__field-wrapper">
                                <div class="event-form__field-radio form-group">
                                    <div class="event-form__field-wrapper event-form__field-wrapper--desc">
                                        <p>
                                            Welche Tanzschule möchten Sie besuchen? *
                                        </p>
                                    </div>
                                    <div class="event-form__field-wrapper radio">
                                        <label class="event-form__field-label" for="school-el-tanguito">
                                            <input class="event-form__field" value="El tanguito" type="radio" name="school" id="school-el-tanguito" required />
                                            El tanguito
                                        </label>
                                    </div>
                                    <div class="event-form__field-wrapper radio">
                                        <label class="event-form__field-label" for="school-la-boca">
                                            <input class="event-form__field" value="La Boca" type="radio" name="school" id="school-la-boca" required />
                                            La Boca
                                        </label>
                                    </div>
                                    <div class="event-form__field-wrapper radio">
                                        <label class="event-form__field-label" for="school-bailando">
                                            <input class="event-form__field" value="Bailando" type="radio" name="school" id="school-bailando" required />
                                            Bailando
                                        </label>
                                    </div>
                                    <div class="event-form__field-wrapper radio">
                                        <label class="event-form__field-label" for="school-none">
                                            <input class="event-form__field" value="Keine Praeferenz" type="radio" name="school" id="school-none" required />
                                            Keine Präferenz
                                        </label>
                                    </div>
                                    <?php errorMessage(); ?>
                                </div>
                            </div>
                        </div>  
                        <div class="event-form__field-col">
                            <div class="event-form__field-wrapper">
                                <div class="event-form__field-radio form-group">
                                    <div class="event-form__field-wrapper event-form__field-wrapper--desc">
                                        <p>
                                            Haben Sie unser Festival besucht? (20% Nachlass) *
                                        </p>
                                    </div>
                                    <div class="event-form__field-wrapper radio">
                                        <label class="event-form__field-label" for="visited-yes">
                                            <input class="event-form__field" value="Ja" type="radio" name="visited-event" id="visited-yes" required />
                                            Ja
                                        </label>
                                    </div>
                                    <div class="event-form__field-wrapper radio">
                                        <label class="event-form__field-label" for="visited-no">
                                            <input class="event-form__field" value="Nein" type="radio" name="visited-event" id="visited-no" required />
                                            Nein
                                        </label>
                                    </div>
                                    <?php errorMessage(); ?>
                                </div>
                            </div>
                        </div>  
                        <div class="event-form__field-col">
                            <div class="event-form__field-wrapper">
                                <div class="event-form__field-radio form-group">
                                    <div class="event-form__field-wrapper event-form__field-wrapper--desc">
                                        <p>
                                            Wie stufen Sie ihre Erfahrungen im Tango ein? *
                                        </p>
                                    </div>
                                    <div class="event-form__field-wrapper radio">
                                        <label class="event-form__field-label" for="tango-ex-beginner">
                                            <input class="event-form__field" value="Anfänger" type="radio" name="experience" id="tango-ex-beginner" required/>
                                            Anfänger
                                        </label>
                                    </div>
                                    <div class="event-form__field-wrapper radio">
                                        <label class="event-form__field-label" for="tango-ex-basics">
                                            <input class="event-form__field" value="Grundkenntnisse" type="radio" name="experience" id="tango-ex-basics" required />
                                            Grundkenntnisse
                                        </label>
                                    </div>
                                    <div class="event-form__field-wrapper radio">
                                        <label class="event-form__field-label" for="tango-ex-advanced">
                                            <input class="event-form__field" value="Fortgeschritten" type="radio" name="experience" id="tango-ex-advanced" required />
                                            Fortgeschritten
                                        </label>
                                    </div>
                                    <?php errorMessage(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="infos-fields">
                        * Pflichtfelder
                    </p>
                </fieldset>
                <fieldset id="step-3" class="event-form__fieldset">
                    <h2 class="event-form__headline">Bezahlung</h2>
                    <h3 class="event-form__subheadline">Schritt 3</h3>
                    <div class="event-form__fields">
                        <div class="event-form__field-wrapper form-group">
                            <label class="event-form__field-label" for="form-payment">Zahlungsinformationen *</label>
                            <select class="event-form__field col-sm-6 form-control" name="payment" id="form-payment" required>
                                <option value="" disabled selected>Zahlungsart auswählen</option>
                                <option value="Bar">Bar</option>    
                                <option value="Vorkasse"> Vorkasse (Überweisung)</option>
                                <option value="PayPal">PayPal</option>
                                <option value="Kreditkarte">Kreditkarte</option>
                            </select>
                            <?php errorMessage(); ?>
                        </div>
                        <div class="event-form__field-wrapper row form-group" id="creditcard-field">
                            <div class="event-form__field-card col-sm-6">
                                <label class="event-form__field-label" for="form-credit-num">Kreditkartennummer * </label>
                                <input class="event-form__field form-control" type="number" name="form-creditcard" id="form-credit-num"  placeholder="Kreditkartennummer eingeben" />
                            <?php errorMessage(); ?>
                            </div>
                        </div>
                        <div class="event-form__field-wrapper form-group">
                            <label class="event-form__field-label event-form__field-label--checkbox checkbox" for="data-check">
                                <input class="event-form__field form-control" type="checkbox" name="datenschutz" id="data-check" required />
                                Ich habe die AGBs gelesen und erkläre mich einverstanden. * 
                            </label>
                            <?php errorMessage(); ?>
                        </div>
                        <div class="event-form__field-wrapper form-group">
                            <label class="event-form__field-label event-form__field-label--checkbox checkbox" for="demo-training">
                                <input class="event-form__field form-control" type="checkbox" name="schnupperkurs" id="demo-training"  />
                                Hiermit buche ich verbindlich einen Schnupperkurs für 2 Personen.
                            </label>
                        </div>
                    </div>
                    <p class="infos-fields">
                        * Pflichtfelder
                    </p>
                </fieldset>
            </div>
        </form>
    </div>
</section>
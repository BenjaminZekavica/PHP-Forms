 <!-- Bootstraps Modal – Error -->
 <div class="modal fade" id="error-message" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title modal-title--red">Bitte korrigieren Sie Ihre Eingabe!</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <p>
                Leider ist ein Fehler aufgetaucht! Bitte kontrollieren Sie alle rot makierten 
                Felder und verfollständigen Sie.  
            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger modal-button--red" data-dismiss="modal">
                Schließen
            </button>
        </div>
        </div>
    </div>
</div>

<!-- Bootstraps Modal – Submit -->
<div class="modal fade" id="submit-message" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ihr Anmeldung war erfolgreich</h5>

                <button type="button" class="close" id="submit-reload-close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <p>
                Vielen Dank für Ihre Anmeldung! Sie haben sich erfolgreich angemeldet 
                und wir werden uns in Kürze bei Ihnen melden. 
            </p>
            <p>
                <strong>
                    Weitere Details und Informationen finden Sie auf unserer Webseite.
                </strong>
            </p>
        </div>
        <div class="modal-footer">
            <button id="submit-reload" type="button" class="btn btn-success modal-button--green">
                Schließen
            </button>
        </div>
        </div>
    </div>
</div>
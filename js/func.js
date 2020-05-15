jQuery(document).ready( function($){

    // Hide creditcard field
    $('#form-payment').on('change', function() {
        if( this.value  === 'Kreditkarte') {
            $('#creditcard-field').show();
            $('#form-credit-num').attr('required','');
        }else{
            $('#creditcard-field').hide();
            $('#form-credit-num').removeAttr('required');
        }
    });

    function refreshPageAfterSubmit(){
        // Refresh Page 
        location.reload();

        // Reset Form
        $('#bestellung').trigger("reset");
    }

     // Toolbar extra buttons
     var btnFinish = $('<input name="submit" type="submit" /> ').val('absenden').addClass('btn btn-info')
        .on('click', function(e){
            if( !$(this).hasClass('disabled')){
                var formular = $("#bestellung");

                if( formular ){
                    formular.validator('validate');
                    var formError = formular.find('.has-error');

                    if( formError && formError.length > 0){
                        // Open Modal
                        $('#error-message').modal('show');

                        return false;
                    }else{
                        e.preventDefault();
                        
                        // Send data via Ajax to PHP Server
                        $.ajax({
                            type: 'POST',
                            url: 'event-builder.php',
                            data: formular.serialize(),
                            error: function (e) { 
                                // Show red modal 
                                $('#error-message').modal('show');
                            },
                            success: function (e) {
                                // Add Done class to tab
                                if( $('.event-form__navi-item').hasClass('active') ) {
                                    $('.event-form__navi-item').removeClass('active').addClass('done');
                                }

                                // Show green modal
                                $('#submit-message').modal('show');
                            }
                        });
                        
                        // Reset Form
                        $('#submit-reload, #submit-reload-close').on('click', function(e){
                            refreshPageAfterSubmit();
                        });
                    }
                }
            }
            return true;
        }
    );

    // Add Button Class
    $("#bestellung").on("showStep", function( e, anchorObject, stepNumber, stepDirection ) {
        if( stepNumber === 2 ){
            $('.btn-finish').removeClass('disabled');
            $('input[type="submit"]').addClass('open');
        }else{
            $('.btn-finish').addClass('disabled');
            $('input[type="submit"]').removeClass('open');
        }
    });

    // Init Bootstrap Validation
    $('#bestellung').validator({
        focus: false
    });

    // Init jQuery Plugin Smart Wizard
    $('#bestellung').smartWizard({
        selected: 0,
        transitionEffect:'fade',
        keyNavigation:false,
        autoAdjustHeight: false,
        useURLhash: false, 
        showStepURLhash: false,
        lang: {
            next: 'weiter',
            previous: 'zurück'
        },
        toolbarSettings: {
            toolbarPosition: 'bottom',
            toolbarExtraButtons: [btnFinish]
        }
    });

    // Validation of inputs and programming for next button
    $("#bestellung").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
        
        // Update settings and validate
        $(this).validator('validate');
        
        // GET Event current tab
        if( stepDirection === 'forward' ){

            // Helpers 
            var number      = stepNumber+1;
            var elmForm     = $('#step-'+number);
            var itemsError  = elmForm.find('.form-group.has-error');
            
            // Check if errors exists else continue form
            if( elmForm && itemsError.length > 0 ){
                // Open Modal
                $('#error-message').modal('show');

                return false;
            }else{
                return true;
            }
        }
    });


});
<?php
// Helpers 
$formValues = $_POST;

// Felder für den männlichen Partner
$vorname    = $formValues['form-vorname'];
$nachname   = $formValues['form-nachname'];
$strasse    = $formValues['form-street'];
$hausnummer = $formValues['form-house-num'];
$plz        = $formValues['form-plz'];
$ort        = $formValues['form-ort'];
$geburtstag = $formValues['form-birthday'];
$email      = $formValues['form-email'];

// Felder für den weiblichen Partner
$vornameWo    = $formValues['form-vorname-woman'];
$nachnameWo   = $formValues['form-nachname-woman'];
$strasseWo    = $formValues['form-street-woman'];
$hausnummerWo = $formValues['form-house-num-woman'];
$plzWo        = $formValues['form-plz-woman'];
$ortWo        = $formValues['form-ort-woman'];
$geburtstagWo = $formValues['form-birthday-woman'];
$emailWo      = $formValues['form-email-woman'];

// Allgemeines
$schule     = $formValues['school'];
$event      = $formValues['visited-event'];
$erfahrung  = $formValues['experience'];
$bezahlung  = $formValues['payment'];
$creditcard = $formValues['form-creditcard'];
$dataProt   = $formValues['datenschutz'];
$schnupper  = $formValues['schnupperkurs'];

// Write file with data in subfolder – anfragen
if( isset( $vorname ) && isset( $nachname ) && isset( $_POST ) ) {

    // Helpers 
    $subfolder  = 'anfragen';
    $timestamp   = time();
    $fileName   = $vorname.$nachname.$timestamp;

    // Create File and read file 
    $createFile = fopen("$subfolder/$fileName.txt", "w") or die("Diese Datei kann nicht geöffnet werden.");

    fwrite( $createFile, 'Männlicher Partner');
    fwrite( $createFile, "\n\n");
    
    // Vorname
    if( isset( $vorname ) && !empty( $vorname ) ) {
        fwrite( $createFile, 'Vorname : ');
        fwrite( $createFile, htmlspecialchars($vorname) ."\n");
    }
    
    // Nachname
    if( isset( $nachname ) && !empty( $nachname ) ) {
        fwrite( $createFile, 'Nachname : ');
        fwrite( $createFile, htmlspecialchars($nachname) ."\n");
    }

    // Strasse
    if( isset( $strasse ) && !empty( $strasse ) ) {
        fwrite( $createFile, 'Strasse : ');
        fwrite( $createFile, htmlspecialchars($strasse) ."\n");
    }

    // Hausnummer
    if( isset( $hausnummer ) && !empty( $hausnummer ) ) {
        fwrite( $createFile, 'Hausnummer : ');
        fwrite( $createFile, htmlspecialchars($hausnummer) ."\n");
    }

    // Postleitzahl
    if( isset( $plz ) && !empty( $plz ) ) {
        fwrite( $createFile, 'Postleitzahl : ');
        fwrite( $createFile, htmlspecialchars($plz) ."\n");
    }

    // Ort
    if( isset( $ort ) && !empty( $ort ) ) {
        fwrite( $createFile, 'Stadt : ');
        fwrite( $createFile, htmlspecialchars($ort) ."\n");
    }

    // Geburtstag
    if( isset( $geburtstag ) && !empty( $geburtstag ) ) {
        $bithdayFormat = date("d.m.Y", strtotime( $geburtstag ));

        fwrite( $createFile, 'Geboren am : ');
        fwrite( $createFile, $bithdayFormat ."\n");
    }

    // E-Mail
    if( isset( $email ) && !empty( $email )  ) {
        fwrite( $createFile, 'E-Mail : ');
        fwrite( $createFile, htmlspecialchars($email) ."\n\n");
    }
    
    // Angaben für den weiblichen Partner
    fwrite( $createFile, "\n");
    fwrite( $createFile, 'Weiblicher Partner');
    fwrite( $createFile, "\n\n");

    // Vorname
    if( isset( $vornameWo ) && !empty( $vornameWo ) ) {
        fwrite( $createFile, 'Vorname : ');
        fwrite( $createFile, htmlspecialchars($vornameWo) ."\n");
    }
    
    // Nachname
    if( isset( $nachnameWo ) && !empty( $nachnameWo ) ) {
        fwrite( $createFile, 'Nachname : ');
        fwrite( $createFile, htmlspecialchars($nachnameWo) ."\n");
    }

    // Strasse
    if( isset( $strasseWo ) && !empty( $strasseWo )  ) {
        fwrite( $createFile, 'Strasse : ');
        fwrite( $createFile, htmlspecialchars($strasseWo) ."\n");
    }

    // Hausnummer
    if( isset( $hausnummerWo ) && !empty( $hausnummerWo )  ) {
        fwrite( $createFile, 'Hausnummer : ');
        fwrite( $createFile, htmlspecialchars($hausnummerWo) ."\n");
    }

    // Postleitzahl
    if( isset( $plzWo ) && !empty( $plzWo ) ) {
        fwrite( $createFile, 'Postleitzahl : ');
        fwrite( $createFile, htmlspecialchars($plzWo) ."\n");
    }

    // Ort
    if( isset( $ortWo ) && !empty( $ortWo ) ) {
        fwrite( $createFile, 'Stadt : ');
        fwrite( $createFile, htmlspecialchars($ortWo) ."\n");
    }

    // Geburtstag
    if( isset( $geburtstagWo ) && !empty( $geburtstagWo ) ) {
        $bithdayFormat = date("d.m.Y", strtotime( $geburtstagWo ));

        fwrite( $createFile, 'Geboren am : ');
        fwrite( $createFile, $bithdayFormat ."\n");
    }

    // E-Mail
    if( isset( $emailWo ) && !empty( $emailWo )  ) {
        fwrite( $createFile, 'E-Mail : ');
        fwrite( $createFile, htmlspecialchars($emailWo) ."\n");
    }

    // Allgemeine Fragen zu allen Personen
    fwrite( $createFile, "\n\n");
    fwrite( $createFile, 'Allgemeine Fragen');
    fwrite( $createFile, "\n\n");

    // Schule 
    if( isset( $schule ) && !empty( $schule ) ) {
        fwrite( $createFile, 'Welche Tanzschule möchten Sie besuchen? : ');
        fwrite( $createFile, htmlspecialchars($schule) ."\n");
    }

    // Event
    if( isset( $event ) && !empty( $event )) {
        fwrite( $createFile, 'Haben Sie unser Festival besucht? : ');
        fwrite( $createFile, htmlspecialchars($event) ."\n");
    }

    // Erfahrungen
    if( isset( $erfahrung ) && !empty( $erfahrung ) ) {
        fwrite( $createFile, 'Erfahrungen : ');
        fwrite( $createFile, htmlspecialchars($erfahrung) ."\n");
    }

    // Bezahlung
    if( isset( $bezahlung ) && !empty( $bezahlung ) ) {
        fwrite( $createFile, 'Bezahlung mit : ');
        fwrite( $createFile, htmlspecialchars($bezahlung) ."\n");
    }

    // Kreditkarte
    if( isset( $creditcard ) && !empty( $creditcard ) && $bezahlung === 'Kreditkarte' ) {
        fwrite( $createFile, 'Kreditkartennummer : ');
        fwrite( $createFile, htmlspecialchars($creditcard) ."\n");
    }

    // Datenschutz
    if( isset( $dataProt ) && !empty( $dataProt ) && $dataProt === 'on'  ){
        fwrite( $createFile, 'Datenschutz : ');
        fwrite( $createFile, 'Ja, zugestimmt.' ."\n");
    }

    // Schnupperkurs
    if( isset( $schnupper ) && !empty( $schnupper ) && $schnupper === 'on' ){
        fwrite( $createFile, 'Schnupperkurs für 2 Personen : ');
        fwrite( $createFile, 'Ja, zugestimmt.' ."\n");
    }else {
        fwrite( $createFile, 'Schnupperkurs für 2 Personen : ');
        fwrite( $createFile, 'Nein, ist nicht erwünscht.' ."\n");
    }

    // Close file
    fclose( $createFile );

}else {
   die('Es wurden keine Daten gefunden, die man verarbeiten kann.');
}
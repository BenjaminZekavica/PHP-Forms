<?php

// Helpers 
$formValues = $_POST;

// Fields
$anrede     = $formValues['anrede'];
$vorname    = $formValues['form-vorname'];
$nachname   = $formValues['form-nachname'];
$strasse    = $formValues['form-street'];
$hausnummer = $formValues['form-house-num'];
$plz        = $formValues['form-plz'];
$ort        = $formValues['form-ort'];
$geburtstag = $formValues['form-birthday'];
$email      = $formValues['form-email'];

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

    // Anrede
    if( isset( $anrede ) ) {
        fwrite( $createFile, 'Anrede : ');
        fwrite( $createFile, $anrede ."\n");
    }
    
    // Vorname
    if( isset( $vorname ) ) {
        fwrite( $createFile, 'Vorname : ');
        fwrite( $createFile, $vorname ."\n");
    }
    
    // Nachname
    if( isset( $nachname ) ) {
        fwrite( $createFile, 'Nachname : ');
        fwrite( $createFile, $nachname ."\n");
    }

    // Strasse
    if( isset( $strasse  ) ) {
        fwrite( $createFile, 'Strasse : ');
        fwrite( $createFile, $strasse ."\n");
    }

    // Hausnummer
    if( isset( $hausnummer  ) ) {
        fwrite( $createFile, 'Hausnummer : ');
        fwrite( $createFile, $hausnummer ."\n");
    }

    // Postleitzahl
    if( isset( $plz ) ) {
        fwrite( $createFile, 'Postleitzahl : ');
        fwrite( $createFile, $plz ."\n");
    }

    // Ort
    if( isset( $ort ) ) {
        fwrite( $createFile, 'Stadt : ');
        fwrite( $createFile, $ort ."\n");
    }

    // Geburtstag
    if( isset( $geburtstag ) ) {
        $bithdayFormat = date("d.m.Y", strtotime( $geburtstag ));

        fwrite( $createFile, 'Geboren am : ');
        fwrite( $createFile, $bithdayFormat ."\n");
    }

    // E-Mail
    if( isset( $email ) ) {
        fwrite( $createFile, 'E-Mail : ');
        fwrite( $createFile, $email ."\n");
    }

    // Schule 
    if( isset( $schule ) ) {
        fwrite( $createFile, 'Welche Tanzschule möchten Sie besuchen? : ');
        fwrite( $createFile, $schule ."\n");
    }

    // Event
    if( isset( $event ) ) {
        fwrite( $createFile, 'Haben Sie unser Festival besucht? : ');
        fwrite( $createFile, $event ."\n");
    }

    // Erfahrungen
    if( isset( $erfahrung ) ) {
        fwrite( $createFile, 'Erfahrungen : ');
        fwrite( $createFile, $erfahrung ."\n");
    }

    // Bezahlung
    if( isset( $bezahlung ) ) {
        fwrite( $createFile, 'Bezahlung mit : ');
        fwrite( $createFile, $bezahlung ."\n");
    }

    // Kreditkarte
    if( isset( $creditcard ) && $bezahlung === 'Kreditkarte' ) {
        fwrite( $createFile, 'Kreditkartennummer : ');
        fwrite( $createFile, $creditcard ."\n");
    }

    // Datenschutz
    if( isset( $dataProt ) && $dataProt === 'on'  ){
        fwrite( $createFile, 'Datenschutz : ');
        fwrite( $createFile, 'Ja, zugestimmt.' ."\n");
    }

    // Schnupperkurs
    if( isset( $schnupper ) && $schnupper === 'on' ){
        fwrite( $createFile, 'Schnupperkurs für 2 Personen : ');
        fwrite( $createFile, 'Ja, zugestimmt.' ."\n");
    }

    // Close file
    fclose( $createFile );

}else {
   die('Es wurden keine Daten gefunden, die man verarbeiten kann.');
}
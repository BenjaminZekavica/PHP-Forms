<?php

// Bootstrap Mesage
function errorMessage(){
    echo '<div class="help-block with-errors"></div>';
}

// Title header
function titleHeader( $title = 'Anmeldeformular', $tag = 'h2' ){ ?>
    <div class="title">
        <<?=$tag;?> class="title__content">
            <?= $title; ?>  
        </<?=$tag; ?>>
    </div>
<?php 
}
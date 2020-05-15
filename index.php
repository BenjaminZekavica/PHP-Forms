<?php 
    require('components/header.php'); 
    require('components/functions.php');
?>
        <main class="module">
            <header class="header--eventform"></header>
    
            <?php
                // Paste main title
                titleHeader('Anmeldeformular', 'h1'); 

                // Load contactform file
                require('components/form.php'); 

                // Paste contact title            
                titleHeader('Kontakt'); 

                // Load contact section
                require('components/contact.php'); 
            ?>      
        </main>

        <?php 
            // Load Footer file
            require('components/footer.php'); 
        ?>      
    </div> 

<?php 
    // Load Modal and JavaScript files
    require('components/modal.php'); 
    require('components/js-scripts.php');
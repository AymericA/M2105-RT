<?php
    #Permet  d'insérer l'en-tête HTLM5 d'une page
    function getHeader($startsession,$title){

        if ($startsession) {
            session_start();
            echo "
                <!DOCTYPE html>
                <htmtl>
                    <head>
                        <meta charset='UTF-8'>
                        <title>".$title."</title>
	                    <link rel='stylesheet' href='css/bootstrap-theme.css'>
                    </head>
                    <body>";
        }
    }

    function getFooter(){
        echo"</body></html>";
    }
?>

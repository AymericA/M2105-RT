<?php
    #Permet  d'insérer l'en-tête HTLM5 d'une page
    function getHeader($startsession,$title){

        if ($startsession==False) {
            session_start();
            echo "<!DOCTYPE html><htmtl><head><meta charset='UTF-8'><title>$title</title></head><body>";
        }
        else {
            echo "<!DOCTYPE html><htmtl><head><meta charset='UTF-8'><title>$title</title></head><body>";
        }
    }

    function getFooter(){
        echo"</body></html>";
    }
?>

<?php

    function  adminLogin() {
        session_start();
        if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
            echo "<script>
                window.location.href='index.php';
            </script>";

            exit;
        }
    }

    function redirect($url){
        echo "<script>
            window.location.href='$url';
        </script>";

        exit;
    }

    function alert($type,$msg){
        $bs_class = ($type == "sucess") ? "alert-success" : "alert-danger";
        echo <<< alert
            <div class="me-3 custom-alert alert $bs_class alert-dismissible fade show" role="alert">
                <strong>$msg</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>   
        alert;
    }


?>
<?php

    class MuontraCtrl{
        function getAll(){
            include_once 'app/view/muontra_view.php';
        }
    }
    $muontra = new MuontraCtrl();
    $method = isset($_GET['method'])? $_GET['method']: 'getAll';
    $muontra->$method();

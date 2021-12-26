<?php
include_once "../common/define.php";
include_once '../view/header&footer/head_view.php';
    class MuontraCtrl{
        function getAll(){
            include_once '../view/muontra_view.php';
        }
    }
    $muontra = new MuontraCtrl();
    $method = isset($_GET['method'])? $_GET['method']: 'getAll';
    $muontra->$method();

    include_once '../view/header&footer/footer_view.php';
<?php
    class MuontraCtrl{
        function getAll(){
            include_once 'app/views/book/muontra_view.php';
        }
    }
    $sach = new MuontraCtrl();
    $method = isset($_GET['method'])? $_GET['method']: 'getAll';
    $sach->$method();
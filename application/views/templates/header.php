<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b91f07c834.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/bootstrap.css">
    <title><?= $title ?></title>
    <style>
        .amikom-clr-2 {
            color: #FFAC00;
        }
        .amikom-bg {
            background-color: #4A1B9D;
        }
        .amikom-clr {
            color: #4A1B9D;
        }
        .amikom-btn {
            background-color: #4A1B9D;
            color: white;
        }
        .amikom-btn:hover {
            background-color: #5d2eae;
            color: white;
        }
        .amikom-btn-2 {
            letter-spacing: 2px;
            background-color: #5d2eae;
            color: white;
        }
        .amikom-btn-2:hover {
            background-color: #3b0e88;
            color: white;
        }
        .aktif {
            background-color: #3b0e88;
        }
        table a {
            text-decoration: none;
            color: black;
        }
        table a:hover {
            color: #4A1B9D;
        }
        #search {
            border: 3px solid #4A1B9D;
            font-size: 14px;
            border-radius: 15px;
            padding: 0 10px;
            width: 15%;
        }
        .btnSearch {
            width: auto;
            border-radius: 15px;
            padding: 1px 15px;
            font-size: 14px;
            border: 2px solid #4A1B9D;
            margin-left: -30px;
        }
        .modal-lg label, #myTabContent label {
            margin-top: 10px;
            margin-left: 8px;
            color: #4A1B9D;
        }
        .modal-lg input, #myTabContent select, input {
            border: 2px solid #4A1B9D;
            font-size: 14px;
            width: 50%;
            height: 27px;
            border-radius: 10px;
            padding: 0 10px;
        }
        .modal-lg textarea, #myTabContent textarea {
            margin-bottom: 15px;
            border: 2px solid #4A1B9D;
            font-size: 14px;
            border-radius: 10px;
            padding: 0 10px;
        }
        #detail {
            width: 50%;
        }
        #detail label {
            display: inline;
            font-size: 14px;
        }
        #detail input {
            float: right;
            width: 100px;
            height: 21px;
            display: inline;
            font-size: 12px;
        }
        #nm_dosen, #nik_dosen {
            width: 100%;
        }
        #dosen {
            width: 100%;
        }
        #rencana form label {
            margin-top: 10px;
            margin-bottom: 4px;
            color: #4A1B9D;
            text-align: center;
        }
        #rencana form select, #rencana form input, #rencana form textarea {
            border: 2px solid #4A1B9D;
            font-size: 14px;
            width: 100%;
            border-radius: 10px;
            padding: 0 10px;
        }
        #rencanaEdit form label, #rencanaTambah form label {
            margin-top: 10px;
            margin-bottom: 4px;
            color: #4A1B9D;
            text-align: center;
        }

        #rencanaEdit form select, #rencanaEdit form input, #rencanaEdit form textarea, #rencanaTambah form select, #rencanaTambah form input, #rencanaTambah form textarea {
            border: 2px solid #4A1B9D;
            font-size: 14px;
            width: 100%;
            border-radius: 10px;
            padding: 0 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
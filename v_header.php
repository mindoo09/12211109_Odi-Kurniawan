<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>web prog 2 | Merancang Template sederhana dengan codeigneter</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/pustaka-booking/assets/css/css.css">

</head>
<body>
    <div id="wreaper">
        <header>
            <hgoup>
                <h1>Rentalbuku.net</h1>
                <h3>Membuat Template sederhana dengan codeigneter</h3>
            </hgoup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url().'index.php/web' ?>">home</a></li>
                    <li><a href="<?php echo base_url().'index.php/web/about' ?>">about</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>

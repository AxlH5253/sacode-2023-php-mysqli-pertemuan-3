<?php
    // Kata selamat datang
    $welcome = 'SELAMAT DATANG';

    // nama saya 
    $nama = 'AXL';

    $keterangan = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi tenetur rerum velit veniam voluptatem aliquid ullam, aliquam quasi assumenda pariatur dolor nulla dolore magni eius numquam ipsam sint modi facere deserunt temporibus obcaecati accusamus. Amet quibusdam minima tempore provident nam.';
    $footer = 'copyright by axl';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?= $welcome .' '. $nama; ?> </h1>
    <p> <?= $keterangan; ?></p>
    <p> <?= $footer; ?></p>
</body>
</html>
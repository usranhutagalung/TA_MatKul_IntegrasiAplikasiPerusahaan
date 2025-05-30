<?php

// $mahasiswa = [
//     [
//         "nama" => "Usran Bangun Fajar HUtagalung",
//         "nim" => "2217020150",
//         "email" => "usranhutagalung04@gmail.com"
//     ],
//     [
//         "nama" => "Muhammad Nurul Fajri",
//         "nim" => "2217020054",
//         "email" => "nurulfajri@gmail.com"
//     ],
//     [
//         "nama" => "M-Irfandi Atarza",
//         "nim" => "22170200053",
//         "email" => "afandiatarza@gmail.com"
//     ]
// ];

$dbh = new PDO(
    'mysql:host=localhost; dbname=mahasiswa',
    'root',
    ''
);
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>
<?php
namespace Valarep;


use\PDO; // PHP Data Objects
use \Exception;

require_once "vendor/autoload.php";

$driver = "mysql";
$server = "127.0.0.1";
$port = "3306";
$user = "animalerieHorse";
$password = "T6We32kF7WQUJuDe";
$database = "animaleriehorse";
$charset = "utf8";

// Data Source Name

$dsn = "$driver:host=$server;port=$port;dbname=$database;charset=$charset;";

// Ouverturen de la connexion
$dbh = new PDO($dsn, $user, $password);

$query = "SELECT * FROM `animal`;";

// Sécurisation de la requête SQL
//STatement Handler
$sth = $dbh ->prepare($query);

// Exécution et récupération du résultat
$res = $sth ->execute();
if (!$res){
    $error = $sth->errorInfo();
    throw new Exception("Erreur : " . $error[2]);
}

$sth->setFetchMode(
    PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
        "Valarep\\classes\hero"
);

$items = $sth->fetchAll();

$response =  (object)[ " items" => $items ];

$json = json_encode($response);

var_dump($json);

// $response =  (object)[
//     "items"=>[//* liste des chatons *//
        
//        (object)[// 1er chaton 
//             "img_src" => 'images/hero.png',
//                "title" => 'super héro',
//               "text"=> 'ceci est un vrai test bla bla bla je ne sais ce que cela veut dire ',
//               "btn_label" => 'Adopter',
//               "a_href" =>'#',

//         ],
//         (object)[// 2eme chaton 
//             "img_src" => 'images/hero.png',
//                "title" => 'super héro',
//               "text"=> 'ceci est un vrai test bla bla bla je ne sais ce que cela veut dire ',
//               "btn_label" => 'Adopter',
//               "a_href" =>'#',
//               ]

//     ]
// ];



// header('Content-type: application/json');
// echo json_encode($response);

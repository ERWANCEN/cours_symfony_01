<?php

$activeApiVersion= "api/v1";

$path = trim($_SERVER['REQUEST_URI']);
var_dump($path);
// je supprime le leading slash
if($path[0] === "/") {
    $path = substr($path, 1);
}

// Je supprime le trailing slash
if(strlen($path) > 0 && $path[strlen($path)-1] === "/") {
   $path = substr($path, 0, strlen($path)-1); 
}

$urlTable = explode("/", $path);

echo $path."<br>";

$l = count($urlTable);

echo $l."<br>";

// var_dump($urlTable);
// exit();


// Notre router
if($path === "api/v1/article/all") {
    include $activeApiVersion . '/read.php';
    exit();
}

if($path === "api/v1/article/new") {
    include $activeApiVersion . '/create.php';
    exit();
}

if($path === "api/v1/article/update") {
    include $activeApiVersion . '/update.php';
    exit();
}

if($path === "api/v1/article/delete") {
    include $activeApiVersion . '/delete.php';
    exit();
}

include $activeApiVersion . '/not-found.php';
exit();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friendly urls</title>
    <link rel="stylesheet" href="http://localhost:8002/assets/css/style.css">
</head>
<body>
    <h1>Ma structure HTML de base</h1>
    <p class="red">Ce texte est coloré par le fichier css</p>

    <script src="http://localhost:8002/assets/js/app.js"></script>
</body>
</html>

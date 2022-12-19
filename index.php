<?php

include_once __DIR__ . '/classi/categoria.php';
include_once __DIR__ . '/classi/cibo.php';
include_once __DIR__ . '/classi/accessorio.php';
include_once __DIR__ . '/classi/giocattolo.php';


$categories = [
    'cane' => new Categoria('Cane', 'iconaCane'),
    'uccello' => new Categoria('Uccello', 'iconaUccello'),
    'gatto' => new Categoria('Gatto', 'iconaGatto')
];
var_dump($categories);

$products = [
    new Cibo('https://picsum.photos/200/300', 'Royal Canin', 43.99, $categories['cane'], '300g', 'pollo'),
    new Cibo('https://picsum.photos/200/300', 'Almo Nature', 43.99, $categories['uccello'], '300g', 'grano'),
    new Accessorio('https://picsum.photos/200/300', 'Voliera', 185.99, $categories['uccello'], 'Legno', '10x10x10'),
    new Giocattolo('https://picsum.photos/200/300', 'Topini peluche', 5.99, $categories['gatto'], 'morbido', '5x2x2')

];

var_dump($products);

foreach ($products as $elem) {
    echo $elem->immagine . "<br>" . $elem->nome . "<br>" . $elem->prezzo . "<br>" . $elem->oggettoCategoria->nome . "<br>" . $elem->oggettoCategoria->icon . "<br>";
    echo $elem->printAttributiSpecificiClasse();
    echo "<hr>";
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
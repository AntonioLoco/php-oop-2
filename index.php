<?php
require_once __DIR__ . "/Models/Prodotto.php";
require_once __DIR__ . "/Models/Categoria.php";
require_once __DIR__ . "/Models/ProdottoCibo.php";
require_once __DIR__ . "/Models/ProdottoGiochi.php";
require_once __DIR__ . "/Models/ProdottoCucce.php";


$listaProdotti = [
    new ProdottoCibo("Crocchette Royal Canin", "https://m.media-amazon.com/images/I/610V5yI-3yL._AC_SX425_.jpg", new Categoria("Cane"), 10.99, 5000, "15/12/2023", "Manzo"),
    new ProdottoCucce("Cuccia di legno", "https://m.media-amazon.com/images/I/A1Hy-EwvScL._AC_SX425_.jpg", new Categoria("Cani"), 149.99, 5000, 150, 100, "marrone"),
    new ProdottoGiochi("Tira Graffi", "https://m.media-amazon.com/images/I/71PQ7m+-OcL._AC_SY450_.jpg", new Categoria("Gatti"), 119.99, 2000, "grigio")
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <main class="container">
        <div class="row row-cols-5">
            <?php foreach ($listaProdotti as $prodotto) { ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $prodotto->poster ?>" class="card-img-top" style="max-width: 250px" alt="<?php echo $prodotto->nome ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotto->nome ?></h5>
                            <p class="card-text">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Tipologia: <?php echo $prodotto->getTipologia(); ?></li>
                                <li class="list-group-item">Categoria: <?php echo $prodotto->categoria->name ?></li>
                                <li class="list-group-item">Prezzo: <?php echo $prodotto->getPrezzo(); ?>$</li>
                                <li class="list-group-item">Peso: <?php echo $prodotto->getPeso(); ?> gr</li>
                                <?php if ($prodotto->getTipologia() === "Cibo") { ?>
                                    <li class="list-group-item">Scadenza: <?php echo $prodotto->getDataScadenza(); ?></li>
                                    <li class="list-group-item">Gusto: <?php echo $prodotto->getGusto(); ?></li>
                                <?php } elseif ($prodotto->getTipologia() === "Cucce") { ?>
                                    <li class="list-group-item">Largezza: <?php echo $prodotto->getLarghezza(); ?> cm</li>
                                    <li class="list-group-item">Altezza: <?php echo $prodotto->getAltezza(); ?> cm</li>
                                    <li class="list-group-item">Colore: <?php echo $prodotto->getColore(); ?></li>
                                <?php } elseif ($prodotto->getTipologia() === "Giochi") { ?>
                                    <li class="list-group-item">Colore: <?php echo $prodotto->getColore(); ?></li>
                                <?php } ?>
                            </ul>
                            </p>
                            <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>
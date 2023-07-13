<?php 

    include_once __DIR__ . '/models/accessori.php';
    include_once __DIR__ . '/models/prodotto.php';
    include_once __DIR__ . '/models/category.php';
    include_once __DIR__ . '/models/cibo.php';
    include_once __DIR__ . '/models/giocattoli.php';

    $category = [
        'cane' => new Categorie('cane', 'fa-solid fa-dog'),
        'uccello' => new Categorie('uccello', 'fa-solid fa-dove'),
        'gatto' => new Categorie('gatto', 'fa-solid fa-cat'),
        'pesce' => new Categorie('pesce', 'fa-solid fa-fish')
    ];

    $prodotti = [
        new Cibo('https://cdn.royalcanin-weshare-online.io/v2k6a2QBG95Xk-RBN9oV/v196/packshot-mini-ad-shn17', 'Royal Canin', 43.99, $category['cane'], 545, 'prosciutto, riso'),

        new Cibo('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Mangime per Pesci Guppy in Fiocchi', 2.95, $category['pesce'], 30, 'Pesci, Sottoprodotti dei pesci, Cereali, Lieviti, Alghe'),

        new Accessori('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Voliera Wilma in Legno', 184.99, $category['uccello'], 'legno', 'M: L83 x P67 x H153 cm '),

        new Giocattoli('https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Topini di Peluche Trixie', 4.99, $category['gatto'], 'Morbido e salutare', '8.5 cm x 10 cm'),

        new Giocattoli('https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'Kong Classic', 13.49, $category['cane'], 'Galleggia e rimbalza', '8.5 cm x 10 cm'),

        new Accessori('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Cartucce Filtranti per Filtro EasyCrystal', 2.29, $category['pesce'], 'Materiale Espanso', 'ND'),

        new Cibo('https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Almo Nature Cat Daily Lattina', 34.99, $category['gatto'], 400, 'Tonno, pollo, prosciutto'),

        new Cibo('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 44.99, $category['cane'], 600, 'Tonno e cereali',),

    ];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Boolshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  </head>

  <body>

    <div class="container">
        <h1>Boolshop</h1>
        <h2>I nostri prodotti</h2>
        <div class="row">
            <?php
            foreach ($prodotti as $element) {
                if ($element->category->nome == 'cane') {
            ?>
            <div class="col-3 mt-3">
                <div class="card">
                    <img  style="height: 304px;" src="<?php echo $element->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            <?php echo $element->nome ?>
                        </h4>
                        <h6 class="card-title ">
                            <?php echo $element->category->nome ?>
                            <i class="<?php echo $element->category->icona ?>"></i>
                        </h6>
                        <h5 class="card-title opacity-75">
                            <?php echo $element->prezzo ?> €
                        </h5>
                        <?php if ($element instanceof Cibo){?>
                        <p class="card-text opacity-75">
                            peso netto:
                            <?php echo $element->pesonetto ?> g
                        </p>
                        <p class="card-text opacity-75">
                            ingredienti:
                            <?php echo $element->ingredienti ?>
                        </p>
                        <?php } ?>
                        <?php if ($element instanceof Giocattoli){?>
                        <p class="card-text opacity-75">
                            caratteristiche:
                            <?php echo $element->caratteristiche ?>
                        </p>
                        <p class="card-text opacity-75">
                            dimensioni:
                            <?php echo $element->dimensioni ?>
                        </p>
                        <?php } ?>
                        <?php if ($element instanceof Accessori){?>
                        <p class="card-text opacity-75">
                            caratteristiche:
                            <?php echo $element->materiale ?>
                        </p>
                        <p class="card-text opacity-75">
                            dimensioni:
                            <?php echo $element->dimensioni ?>
                        </p>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>

            <?php

            foreach ($prodotti as $element) {
                if ($element->category->nome == 'uccello') {
            ?>
            <div class="col-3 mt-3">
                <div class="card">
                    <img  style="height: 304px;" src="<?php echo $element->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            <?php echo $element->nome ?>
                        </h4>
                        <h6 class="card-title ">
                            <?php echo $element->category->nome ?>
                            <i class="<?php echo $element->category->icona ?>"></i>
                        </h6>
                        <h5 class="card-title opacity-75">
                            <?php echo $element->prezzo ?> €
                        </h5>
                        <?php if ($element instanceof Cibo){?>
                        <p class="card-text opacity-75">
                            peso netto:
                            <?php echo $element->pesonetto ?> g
                        </p>
                        <p class="card-text opacity-75">
                            ingredienti:
                            <?php echo $element->ingredienti ?>
                        </p>
                        <?php } ?>
                        <?php if ($element instanceof Giocattoli){?>
                        <p class="card-text opacity-75">
                            caratteristiche:
                            <?php echo $element->caratteristiche ?>
                        </p>
                        <p class="card-text opacity-75">
                            dimensioni:
                            <?php echo $element->dimensioni ?>
                        </p>
                        <?php } ?>
                        <?php if ($element instanceof Accessori){?>
                        <p class="card-text opacity-75">
                            caratteristiche:
                            <?php echo $element->materiale ?>
                        </p>
                        <p class="card-text opacity-75">
                            dimensioni:
                            <?php echo $element->dimensioni ?>
                        </p>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>

            <?php

            foreach ($prodotti as $element) {
                if ($element->category->nome == 'gatto') {
            ?>
            <div class="col-3 mt-3">
                <div class="card">
                    <img  style="height: 304px;" src="<?php echo $element->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            <?php echo $element->nome ?>
                        </h4>
                        <h6 class="card-title ">
                            <?php echo $element->category->nome ?>
                            <i class="<?php echo $element->category->icona ?>"></i>
                        </h6>
                        <h5 class="card-title opacity-75">
                            <?php echo $element->prezzo ?> €
                        </h5>
                        <?php if ($element instanceof Cibo){?>
                        <p class="card-text opacity-75">
                            peso netto:
                            <?php echo $element->pesonetto ?> g
                        </p>
                        <p class="card-text opacity-75">
                            ingredienti:
                            <?php echo $element->ingredienti ?>
                        </p>
                        <?php } ?>
                        <?php if ($element instanceof Giocattoli){?>
                        <p class="card-text opacity-75">
                            caratteristiche:
                            <?php echo $element->caratteristiche ?>
                        </p>
                        <p class="card-text opacity-75">
                            dimensioni:
                            <?php echo $element->dimensioni ?>
                        </p>
                        <?php } ?>
                        <?php if ($element instanceof Accessori){?>
                        <p class="card-text opacity-75">
                            caratteristiche:
                            <?php echo $element->materiale ?>
                        </p>
                        <p class="card-text opacity-75">
                            dimensioni:
                            <?php echo $element->dimensioni ?>
                        </p>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>

<?php
            foreach ($prodotti as $element) {
                if ($element->category->nome == 'pesce') {
            ?>
            <div class="col-3 mt-3">
                <div class="card">
                    <img  style="height: 304px;" src="<?php echo $element->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            <?php echo $element->nome ?>
                        </h4>
                        <h6 class="card-title ">
                            <?php echo $element->category->nome ?>
                            <i class="<?php echo $element->category->icona ?>"></i>
                        </h6>
                        <h5 class="card-title opacity-75">
                            <?php echo $element->prezzo ?> €
                        </h5>
                        <?php if ($element instanceof Cibo){?>
                        <p class="card-text opacity-75">
                            peso netto:
                            <?php echo $element->pesonetto ?> g
                        </p>
                        <p class="card-text opacity-75">
                            ingredienti:
                            <?php echo $element->ingredienti ?>
                        </p>
                        <?php } ?>
                        <?php if ($element instanceof Giocattoli){?>
                        <p class="card-text opacity-75">
                            caratteristiche:
                            <?php echo $element->caratteristiche ?>
                        </p>
                        <p class="card-text opacity-75">
                            dimensioni:
                            <?php echo $element->dimensioni ?>
                        </p>
                        <?php } ?>
                        <?php if ($element instanceof Accessori){?>
                        <p class="card-text opacity-75">
                            caratteristiche:
                            <?php echo $element->materiale ?>
                        </p>
                        <p class="card-text opacity-75">
                            dimensioni:
                            <?php echo $element->dimensioni ?>
                        </p>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>

        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  </body>
</html>
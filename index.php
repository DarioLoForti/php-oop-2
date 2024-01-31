<?php  
class prodotti{
    public $nome;
    public $immagine;
    public $prezzo;
    public $categoria;

    function __construct($_nome, $_immagine, $_prezzo, categoria $_categoria) {
        $this->nome = $_nome;
        $this->immagine = $_immagine;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
    }

}

class categoria {
    public $nome;

    function __construct($_nome) {
        $this->nome = $_nome;
    }
}

class cibo extends prodotti{
    public $tipo;
    function __construct($_nome, $_immagine, $_prezzo, $_categoria, $_tipo){
        parent::__construct($_nome, $_immagine, $_prezzo, $_categoria);
        $this->tipo = $_tipo;
    }
}

class gioco extends prodotti{
    public $tipo;
    function __construct($_nome, $_immagine, $_prezzo, $_categoria, $_tipo){
        parent::__construct($_nome, $_immagine, $_prezzo, $_categoria);
        $this->tipo = $_tipo;
    }
}

class accessorio extends prodotti{
    public $tipo;
    function __construct($_nome, $_immagine, $_prezzo, $_categoria, $_tipo){
        parent::__construct($_nome, $_immagine, $_prezzo, $_categoria);
        $this->tipo = $_tipo;
    }
}
 // creo oggetti per la classe categoria

$categoriaCane = new Categoria("Cane");
$categoriaGatto = new Categoria("Gatto");
$categoriaUccelli = new Categoria("Uccelli");
$categoriaPesci = new Categoria("Pesci");

// creo oggetti per la classe cibo

$prodotto1 = new Cibo("Royal Canin Mini Adult", "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000", "25.99 €", $categoriaCane, "Crocchette");
$prodotto2 = new Cibo("Almo Nature Holistic Medium Large Tonno e Riso", "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", "32.99 €", $categoriaCane, "Crocchette");
$prodotto3 = new Cibo("Almo Nature Cat Daily Lattina", "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", "12.99 €", $categoriaGatto, "carne in scatola");
$prodotto4 = new Cibo("Mangime per Pesci Guppy in Fiocchi", "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", "5.99€", $categoriaPesci, "Fiocchi");

// creo oggetti per la classe gioco

$prodotto5 = new Gioco("Kong Classic", "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", "15.99 €", $categoriaCane, "sonaglio");
$prodotto6 = new Gioco("Topini di peluche Trixie", "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", "7.99 €", $categoriaGatto, "peluche");

// creo oggetti per la classe accessorio

$prodotto7 = new Accessorio("Voliera Wilma in Legno", "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", "89.99 €", $categoriaUccelli, "Voliera");
$prodotto8 = new Accessorio("Cartucce Filtranti per Filtro EasyCrystal", "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", "8.99 €", $categoriaPesci, "Cartuccia filtrante");

// creo array dei prodotti
$prodotti = [

    $prodotto1,
    $prodotto2,
    $prodotto3,
    $prodotto4,
    $prodotto5,
    $prodotto6,
    $prodotto7,
    $prodotto8,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1>Animal Shop</h1>
        </div>
        <?php foreach ($prodotti as $prodotto) { ?>
            <div class="col-6 my-5">
                <div class="card">
                    <img src="<?php echo $prodotto->immagine; ?>" class="card-img-top" alt="<?php echo $prodotto->nome; ?>" >
                    <div class="card-body">
                        <h2><?php echo $prodotto->nome; ?></h2>
                        <h5> Prezzo: <?php echo $prodotto->prezzo; ?></h5> 
                        <h5>Adatto per: <?php echo $prodotto->categoria->nome; ?></h5>
                        <h5>Tipologia: <?php echo $prodotto->tipo; ?></h5>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>

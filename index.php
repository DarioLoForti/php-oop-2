<?php  
class prodotti{
    public $nome;
    public $immagine;
    public $prezzo;
    public $categoria;
    public $tipo;
    private $codice_prodotto;

    function __construct($_nome, $_immagine, $_prezzo, categoria $_categoria, $_tipo) {
        $this->nome = $_nome;
        $this->immagine = $_immagine;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
        $this->tipo = $_tipo;
        $this->setCodiceProdotto();
    }
    private function setCodiceProdotto() {
        
        $this->codice_prodotto = rand(1, 999); 
    }

    public function getCodiceProdotto() {
        return $this->codice_prodotto;
    }

}

class categoria {
    public $nome;

    function __construct($_nome) {
        $this->nome = $_nome;
    }
}

class cibo extends prodotti{
    public $gusto;
    function __construct($_nome, $_immagine, $_prezzo, $_categoria, $_tipo, $_gusto){
        parent::__construct($_nome, $_immagine, $_prezzo, $_categoria, $_tipo);
        $this->gusto = $_gusto;
    }
}

class gioco extends prodotti{
    public $materiale;
    function __construct($_nome, $_immagine, $_prezzo, $_categoria, $_tipo, $_materiale){
        parent::__construct($_nome, $_immagine, $_prezzo, $_categoria, $_tipo);
        $this->materiale = $_materiale;
    }
}

class accessorio extends prodotti{
    public $dimensione;
    function __construct($_nome, $_immagine, $_prezzo, $_categoria, $_tipo, $_dimensione){
        parent::__construct($_nome, $_immagine, $_prezzo, $_categoria, $_tipo);
        $this->dimensione = $_dimensione;
    }
}
 // creo oggetti per la classe categoria

$categoriaCane = new Categoria("Cane");
$categoriaGatto = new Categoria("Gatto");
$categoriaUccelli = new Categoria("Uccelli");
$categoriaPesci = new Categoria("Pesci");

// creo oggetti per la classe cibo

$prodotto1 = new Cibo("Royal Canin Mini Adult", "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000", "25.99 €", $categoriaCane, "Crocchette", "pollo");
$prodotto2 = new Cibo("Almo Nature Holistic Medium Large Tonno e Riso", "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", "32.99 €", $categoriaCane, "Crocchette", "tonno e riso");
$prodotto3 = new Cibo("Almo Nature Cat Daily Lattina", "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", "12.99 €", $categoriaGatto, "carne in scatola", "manzo");
$prodotto4 = new Cibo("Mangime per Pesci Guppy in Fiocchi", "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", "5.99€", $categoriaPesci, "Fiocchi","alghe");

// creo oggetti per la classe gioco

$prodotto5 = new Gioco("Kong Classic", "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", "15.99 €", $categoriaCane, "sonaglio", "plastica morbida");
$prodotto6 = new Gioco("Topini di peluche Trixie", "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", "7.99 €", $categoriaGatto, "peluche", "tessuto");

// creo oggetti per la classe accessorio

$prodotto7 = new Accessorio("Voliera Wilma in Legno", "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", "89.99 €", $categoriaUccelli, "Voliera", "158,5L x 67l x 83H cm");
$prodotto8 = new Accessorio("Cartucce Filtranti per Filtro EasyCrystal", "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", "8.99 €", $categoriaPesci, "Cartuccia filtrante", "16,69 x 9,19 x 9,19 cm");

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
            <div class="col-3 my-5">
                <div class="card">
                    <img src="<?php echo $prodotto->immagine; ?>" class="card-img-top" alt="<?php echo $prodotto->nome; ?>" >
                    <div class="card-body">
                        <h3><?php echo $prodotto->nome; ?></h3>
                        <h5> Prezzo: <?php echo $prodotto->prezzo; ?></h5> 
                        <h5>Adatto per: <?php echo $prodotto->categoria->nome; ?></h5>
                        <h5>Tipologia: <?php echo $prodotto->tipo; ?></h5>
                        <?php if ($prodotto instanceof cibo && $prodotto->gusto) { ?>
                            <h5>Gusto: <?php echo $prodotto->gusto; ?></h5>
                        <?php } elseif ($prodotto instanceof gioco && $prodotto->materiale) { ?>
                            <h5>Materiale: <?php echo $prodotto->materiale; ?></h5>
                        <?php } elseif ($prodotto instanceof accessorio && $prodotto->dimensione) { ?>
                            <h5>Dimensione: <?php echo $prodotto->dimensione; ?></h5>
                        <?php } ?>
                        <h5>Codice Prodotto: <?php echo $prodotto->getCodiceProdotto(); ?></h5>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>

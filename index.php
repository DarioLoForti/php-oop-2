<?php  
class prodotti{
    private $nome;
    private $immagine;
    private $prezzo;
    private $categoria;

    function __construct($_nome, $_immagine, $_prezzo, $_categoria) {
        $this->nome = $_nome;
        $this->immagine = $_immagine;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
    }

}

class alimento extends prodotti{
    public $tipo;
    function __construct($_nome, $_immagine, $_prezzo, $_categoria, $_tipo){
        parent::__construct($_nome, $_immagine, $_prezzo, $_categoria);
        $this->tipo = $_tipo;
    }
}
?>
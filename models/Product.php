<?php




    class Product {

        public $ime;
        public $opis;
        public $cena;
        public $kolicina;

        function __construct($ime, $opis, $cena, $kolicina) {

            $this->ime = $ime;
            $this->opis = $opis;
            $this->cena = $cena;
            $this->kolicina = $kolicina;
        }

        public function save() {

            $baza = mysqli_connect("localhost", "root", "","web_shop");

            $ime = mysqli_real_escape_string($baza, $this->ime);
            $opis = mysqli_real_escape_string($baza, $this->opis);
            $cena = mysqli_real_escape_string($baza, $this->cena);
            $kolicina = mysqli_real_escape_string($baza, $this->kolicina);

            $baza->query("INSERT INTO proizvodi (ime,opis,cena,kolicina) VALUES ('$ime','$opis',$cena,$kolicina)");

        }

    }


<?php




    class Baza {

        public $konekcija;

        public function __construct() {

            $this->konekcija = new mysqli("localhost", "root", "", "web_shop");

        }

    }


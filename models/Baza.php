

<?php




    class Baza {

        public $konekcija;

        public function __construct() {

            $this->konekcija = mysqli("localhost", "root", "", "web_shop");

        }

    }


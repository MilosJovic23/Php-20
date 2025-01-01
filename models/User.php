<?php




    class User {

        public $email;
        public $sifra;

        public function __construct( $email,$sifra ) {
            $this->email = $email;
            $this->sifra = $sifra;
            echo "napravljen objekat";
        }

        public function save() {

            $baza = mysqli_connect("localhost", "root", "", "web_shop");
            $email = mysqli_real_escape_string( $baza, $this->email );
            $sifra = mysqli_real_escape_string( $baza, $this->sifra );

            $baza->query("INSERT INTO korisnici (email, sifra) VALUES ('$email','$sifra')");
        }

    }
<?php

  header('Content-Type: application/json');

  class Cube {

    public $base;
    public $altezza;
    public $larghezza;

    public function __construct($base, $altezza, $larghezza) {

        $this -> base = $base;
        $this -> altezza = $altezza;
        $this -> larghezza = $larghezza;

    }

    public function getArea() {

      $area = 2 * ($this -> base * $this -> altezza + $this -> base * $this -> larghezza + $this -> altezza * $this -> larghezza);
      return $area;
    }
    public function getPer() {

      $volume = $this -> base * $this -> altezza * $this -> larghezza;
      return $volume;
    }
  };

  $cubes = [];

  $cube1 = new Cube($_GET["base"], $_GET["altezza"], $_GET["larghezza"]);



  $str1 = "Dimensioni del cubo: " . $_GET["base"] . " " . "base" . " " . $_GET["altezza"] . " " . "altezza" . " " . $_GET["larghezza"] . " " . "larghezza" . "<br>" .
          "Area del cubo: " . $cube1 -> getArea() . "<br>"
          . "Volume del cubo: " . $cube1 -> getPer() . "<br>";

  $cubes = [$str1];

  echo json_encode($cubes);
?>

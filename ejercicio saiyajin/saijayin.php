
<?php

class Saiyajin{


    public string $nombre = "Goku";
    public int $nivel_pelea = 1000;

    public function Saludar(){
        return "Hola soy " . $this->nombre."".$this->NivelDePelea();
    }


    public function NivelDePelea(){
    

        return $this->nombre . " tiene un nivel de pelea de " . $this->nivel_pelea;
    }
}

$goku = new Saiyajin();
echo $goku->Saludar();

$veguetta = new Saiyajin();
<?php
  class BangunDatar {
    public function area() {
    }

    public function circumference() {
    }

    public function enlarge($scale) {
    }

    public function shrink($scale) {
    }
}

class Lingkaran extends BangunDatar {
    private $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function area() {
        return 3.14 * $this->jari_jari ** 2;
    }

    public function circumference() {
        return 2 * 3.14 * $this->jari_jari;
    }

    public function enlarge($scale) {
        $this->jari_jari *= $scale;
    }

    public function shrink($scale) {
        $this->jari_jari /= $scale;
    }
}

class Persegi extends BangunDatar {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function area() {
        return $this->sisi ** 2;
    }

    public function circumference() {
        return 4 * $this->sisi;
    }

    public function enlarge($scale) {
        $this->sisi *= $scale;
    }

    public function shrink($scale) {
        $this->sisi /= $scale;
    }
}

class PersegiPanjang extends BangunDatar {
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function area() {
        return $this->panjang * $this->lebar;
    }

    public function circumference() {
        return 2 * ($this->panjang + $this->lebar);
    }

    public function enlarge($scale) {
        $this->panjang *= $scale;
        $this->lebar *= $scale;
    }

    public function shrink($scale) {
        $this->panjang /= $scale;
        $this->lebar /= $scale;
    }
}

class Descriptor {
    public static function describe($bangun_datar) {
        if ($bangun_datar instanceof Lingkaran) {
            $shape = "Lingkaran";
        } elseif ($bangun_datar instanceof Persegi) {
            $shape = "Persegi";
        } elseif ($bangun_datar instanceof PersegiPanjang) {
            $shape = "Persegi Panjang";
        }

        $area = $bangun_datar->area();
        $circumference = $bangun_datar->circumference();

        echo "Bangun datar ini adalah $shape yang memiliki luas $area dan keliling $circumference PHP.";
    }
}
    

?>
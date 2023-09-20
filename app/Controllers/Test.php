<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index()
    {
        $tgl_awal = '2001-01-01';
        $tgl_akhir = '2001-05-24';

        // result, jumlah selisih hari.
        $awal_date = strtotime($tgl_awal);
        $akhir_date = strtotime($tgl_akhir);
        $datediff = $akhir_date - $awal_date;

        $day = round($datediff / (60 * 60 * 24));
        echo $day." hari";
    }

    public function test2() {
        $angka = "5432247";
        $arr = explode(",", chunk_split($angka, 1, ','));
        $len = strlen($angka);

        foreach ($arr as $key => $val) {
            $jmlh = $len-($key+1);
            $nol = "";
            for ($i=0; $i < $jmlh; $i++) { 
                $nol = $nol . "0";
            }
            echo $val . $nol . "<br>";
        }
    }

    public function test3() {
        $pertama = ['Apel', 'Pisang', 'Jeruk'];
        $kedua   = ['mangga', 'anggur'];
        print_r(array_merge($pertama, $kedua));
    }

    public function test4() {
        $integerr = array(3, 5, 22, 2, 54, 73, 1, 6);
        $average = array_sum($integerr)/count($integerr);
        
        print_r($integerr);
        echo "<br>";

        echo $average."<br>";
        echo min($integerr)." min nya<br>";
        echo max($integerr). " max nya";
    }

    public function test5() {
        // $integerr = array('Luthfi', 'Akhdan', 'Muhammad', 'Mochammed', 'ZZZ', 'Genshin');
        $integerr = array(3, 5, 22, 2, 54, 73, 1, 6);
        sort($integerr);

        $arrlength = count($integerr);
        for($x = 0; $x < $arrlength; $x++) {
            echo $integerr[$x] . "<br>";
        }
    }
}

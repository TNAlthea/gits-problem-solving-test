<?php
/*
Nama : Sabian Annaya Havid
Universitas/Program Studi : Ilmu Komputer/C2
NIM : 2005021
Deskripsi: Jawaban soal problem solving test no.2 `Dense Ranking`
*/

$jumlahPemain = (int)readline();
$skorSeluruh = array();
$indexSkorSeluruh = 0;

$i = 0;
while ($i < $jumlahPemain) {
    $temporary = (int)readline();
    /*asumsikan inputan skor selalu berurutan, abaikan nilai yang sama pada index -1 */
    if ($i > 0) {
        if ($temporary != $skorSeluruh[$indexSkorSeluruh - 1]) {
            array_push($skorSeluruh, $temporary);
            $indexSkorSeluruh++;
        }
    } else {
        array_push($skorSeluruh, $temporary);
        $indexSkorSeluruh++;
    }
    $i++;
}

$jumlahPermainan = (int)readline();
$skorSendiri = array();
$indexSkorSendiri = 0;
$peringkatSendiri = array();
$indexPeringkatSendiri = 0;

for ($i = 0; $i < $jumlahPermainan; $i++) {
    $temporary = (int)readline();
    array_push($skorSendiri, $temporary);

    /* masuk ke array SkorSeluruh */
    $j = 0;
    $found = 0;
    while ($j < $indexSkorSeluruh && $found == 0) {
        if ($temporary == $skorSeluruh[$j]) $found = 1;
        elseif ($temporary > $skorSeluruh[$j]) {
            array_splice($skorSeluruh, $j, 0, $temporary);
            $found++;
        }
        $j++;
    }
    if ($found == 0) {
        if ($temporary != $skorSeluruh[$indexSkorSeluruh - 1]) {
            array_push($skorSeluruh, $temporary);
        }
    }
}

$indexSkorSeluruh = count($skorSeluruh);
$indexSkorSendiri = count($skorSendiri);

/* mencari peringkat sendiri */
for ($i = 0; $i < $indexSkorSendiri; $i++) {
    $found = 0;
    $j = 0;
    while ($j < $indexSkorSeluruh && $found == 0) {
        if ($skorSendiri[$i] == $skorSeluruh[$j]) {
            $found = 1;
            array_push($peringkatSendiri, $j+1);
        }
        $j++;
    }
}

$indexPeringkatSendiri = count($peringkatSendiri);

for ($i = 0; $i < $indexPeringkatSendiri; $i++)
{
    if ($i != $indexPeringkatSendiri-1) echo $peringkatSendiri[$i] . " ";
    else echo $peringkatSendiri[$i];
}

<?php
/*
Nama : Sabian Annaya Havid
Universitas/Program Studi : Ilmu Komputer/C2
NIM : 2005021
Deskripsi: Jawaban soal problem solving test no.1 `A000124 of Sloane’s OEIS`
*/
$input = (int)readline();
$answer = array();

for ($i = 0; $i < $input; $i++)
{
    $answer[$i] = ($i * ($i+1) / 2) + 1;

    if ($i != $input-1) echo $answer[$i] . "-";
    else echo $answer[$i];
}

?>
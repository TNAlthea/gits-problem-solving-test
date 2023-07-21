<?php
/*
Nama : Sabian Annaya Havid
Universitas/Program Studi : Ilmu Komputer/C2
NIM : 2005021
Deskripsi: Jawaban soal problem solving test no.3 `Balanced Bracket`
*/

$input = (string)readline();
$array = str_split($input);
$arrayIndex = count($array);

$check = array();
$i = 0;
/* apabila jumlah char ganjil, dapat dipastikan imbalance */
if ($arrayIndex % 2 == 0) {
    /* cek character */
    while (($i < $arrayIndex)) {
        if ($array[$i] == '{' || $array[$i] == '(' || $array[$i] == '[') {
            array_push($check, $array[$i]);
        } 
        /* apabila bracket tutup, cek apakah bracket tersebut akan menutup bracket buka terakhir. jika ya maka keluarkan dari pengecekan*/
        else if ($array[$i] == '}') {
            if ($check[count($check) - 1] != '{') {
                break;
            } else {
                array_pop($check);
            }
        } else if ($array[$i] == ')') {
            if ($check[count($check) - 1] != '(') {
                break;
            } else {
                array_pop($check);
            }
        } else if ($array[$i] == ']') {
            if ($check[count($check) - 1] != '[') {
                break;
            } else {
                array_pop($check);
            }
        }
        $i++;
    }

    if (count($check) == 0) echo "YES"; 
    else echo "NO";
} else {
    echo "NO";
}

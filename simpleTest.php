<?php

/**
Ini digunakan untuk pernyataan yang mendeklarasikan penggunaan kelas TestCase 
dari kerangka kerja PHPUnit. dan digunakan untuk menurunkan kelas tes dari TestCase.
*/
use PHPUnit\Framework\TestCase;

//?  digunakan untuk memanggil file yang akan di testing dengan menggunakan require_once
require_once 'test.php';

//? Ini mendefinisikan kelas tes SimpleTest yang menurunkan fungsionalitas dari kelas TestCase PHPUnit.
class SimpleTest extends TestCase
{
    //? sebah function metode tes yang menunjukkan bahwa ini adalah tes untuk metode countWords. 
    //? Metode tes diawali dengan kata "test" dan akan dijalankan oleh PHPUnit.
    public function testWordCount()
    {
        //? Membuat instansiasi dari kelas WordCount. Ini membuat objek yang nantinya akan digunakan untuk memanggil metode countWords
        $wc = new WordCount();
        //? Mendefinisikan kalimat yang akan diuji oleh metode countWords.
        $TestSentence = "My name is agung";
        //? Memanggil metode countWords dari objek WordCount dan menyimpan hasilnya dalam variabel $wordCount.
        $wordCount = $wc->countWords($TestSentence);
        $this->assertEquals(4, $wordCount); //? Mengganti 2 menjadi 4 jika Anda mengharapkan hasilnya adalah jumlah kata dalam kalimat ini.
    }
}

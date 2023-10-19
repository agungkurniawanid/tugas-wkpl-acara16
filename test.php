<?php
//? Mendefinisikan kelas WordCount
class WordCount {
    //? Metode untuk menghitung jumlah kata dalam sebuah teks
    public function countWords($text) {
        //? Memecah teks menjadi array kata berdasarkan spasi
        $words = explode(' ', $text);
        //? Menghitung jumlah elemen dalam array kata dan mengembalikannya
        return count($words);
    }
} 
?>

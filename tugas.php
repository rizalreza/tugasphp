<?php
//PHP OOP Part 2  Pengertian Class, Object, Property dan Method
//class mobil
class mobil{
    //property
    var $merk;
    var $warna;
    var $jenis;
    
    //method mobil
    function tampilkan_merk(){
        return "Mobil bermerk Avanza  ";
    }
    
    function tampilkan_warna(){
        return " warnanya hitam  ";
    }
    
    function tampilkan_jenis(){
        return " jenisnya minibus  ";
    }
}
//instansiasi class mobil
$mobil = new mobil();

//memanggil method dari class mobil
echo $mobil->tampilkan_merk();
echo $mobil->tampilkan_warna();
echo $mobil->tampilkan_jenis();
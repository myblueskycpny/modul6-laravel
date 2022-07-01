@extends('layouts.front.app')
@section('content')
<!-- php -->
<?php

class coffeeShop{
  var $namaCoffeeShop="Tampara";
  var $namaOwner="Zaki";
  var $produk =array("Kopi","Susu","Pisang Goreng","Kentang Goreng");
  

  function sambutan(){
    echo '<p style="padding-top: 20px;padding-left:20px;">Selamat Datang!</p>';
    
  }
  function listProduk(){
    
    echo '<p style="padding-left:20px;">List Produk Kami :</p>';
   
    for($i=0;$i<count($this->produk);$i++){
      echo '<p style="padding-left: 20px;">- '.$this->produk[$i].'</p>';
    }
    echo "<br>";
  }
}

class infoKedai extends coffeeShop{
  function tampil_namaCoffeeShop(){
    echo '<p style="padding-left:20px;">'.$this->namaCoffeeShop.' Coffee</p>';
    echo "<br>";
  }
  function tampil_namaPemilik(){
    echo '<p style="padding-left:20px;">Saya '.$this->namaOwner.', Pemilik Kedai</p>';
  }
}
$tmpl = new infoKedai();

$tmpl->sambutan();
$tmpl->tampil_namaPemilik();
$tmpl->tampil_namaCoffeeShop();
$tmpl->listProduk();

abstract class karyawan{
  abstract public function karyawan();
  abstract public function gaji();
}

class olahData extends karyawan{
  var $namaKaryawan = array("Dayat","Irfan","Gata","Diqhan","Kholil");
  var $daftarGaji = array(1000000,2000000,3000000,4000000,5000000);

  public function karyawan(){
   echo '<p style="padding-left:20px;">Karyawan Kami :</p>';
    for($i=0;$i<count($this->namaKaryawan);$i++){
      echo '<p style="padding-left:20px;">- '.$this->namaKaryawan[$i].'</p>';
    }
    echo "<br>";
  }
  public function gaji(){
    echo "";
    echo '<p style="padding-left:20px;">Gaji Karyawan :</p>';
      for($i=0;$i<count($this->daftarGaji);$i++){
      echo '<p style="padding-left:20px;">- Rp. '.$this->daftarGaji[$i].',00</p>';
    }
  }
}

trait tampil_DataKaryawan{
  public function karyawan(){
    parent::karyawan();
    echo "";
  }
}
trait tampil_DataGaji{
  public function gaji(){
    parent::gaji();
    echo "";
  }
}

class tampil_Semua extends olahData{
  use tampil_DataKaryawan,tampil_DataGaji;
}

$tpl = new tampil_Semua();
$tpl->karyawan();
$tpl->gaji();

?>
<!-- php end -->
@endsection
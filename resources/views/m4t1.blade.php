@extends('layouts.front.app')
@section('content')
<?php
    $text =  "Andi Belajar Pemrograman Web";
    $array = explode(" ",$text);
    $length = count($array);

    echo "Array($length) : ";
    for($i=0;$i<$length;$i++){
        echo "[".$i."] => string(".strlen($array[$i]).") \"$array[$i]\"";
        echo " ";
    }
    ?>
@endsection
@extends('layouts.front.app')
@section('content')
<form action="{{url('m4t3form')}}" method="post">
    @csrf
    Name:<br>
    <input type="text" name="name" required><br>
    <br>
    NIM:<br>
    <input type="text" name="nim" required><br>
    <br>
    E-mail:<br>
    <input type="text" name="email" required><br>
    <br>
    Tanggal Lahir:<br>
    <input type="datetime-local" name="ttl" required><br>
    <br>
    Jenis Kelamin:<br>
    <input type="radio" id="jenkel1" name="jenkel" value="Laki-Laki" required>
    <label for="jenkel1">Laki-Laki</label>
    <input type="radio" id="jenkel2" name="jenkel" value="Perempuan" required>
    <label for="jenkel2">Perempuan</label><br>
    <br>
    Hobi : <br>
    <input type="checkbox" id="hobi1" name="hobi[]" value="Olahraga">
    <label for="hobi1"> Olahraga</label>
    <input type="checkbox" id="hobi2" name="hobi[]" value="Bermusik">
    <label for="hobi2"> Bermusik</label>
    <input type="checkbox" id="hobi3" name="hobi[]" value="Berenang">
    <label for="hobi3"> Berenang</label><br>
    <br>
    Deskripsi:<br>
    <textarea rows="4" cols="50" name="deskripsi" required>Enter text here...</textarea><br>
    <input type="submit" value="Submit">
</form>

@endsection
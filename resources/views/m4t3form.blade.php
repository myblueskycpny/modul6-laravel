@extends('layouts.front.app')
@section('content')
<div style="padding-top: 20px;padding-left:20px;">
    <h4>Hasil Input Form:</h4><br>
    Nama : <?php echo $_POST["name"]; ?><br><br>
    NIM : <?php echo $_POST["nim"]; ?><br><br>
    Email: <?php echo $_POST["email"]; ?><br><br>
    Tanggal Lahir: <?php echo $_POST["ttl"]; ?><br><br>
    Jenis Kelamin : <?php echo $_POST["jenkel"]; ?><br><br>
    Hobi : <?php $hobi= $_POST['hobi']; foreach($hobi as $hobbies){echo "- ".$hobbies;echo" ";} ?><br><br>
    Deskripsi : <?php echo $_POST["deskripsi"]; ?><br>
</div>
@endsection
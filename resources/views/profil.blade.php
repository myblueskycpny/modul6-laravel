@extends('layouts.front.app')
@section('content')
<!-- container profile -->
<div class="profile">
    <div style="display: inline-block; vertical-align: top">
        <img src="{{asset('assets/profile.jpg')}}" alt="Olahraga" height="260" width="180" />
        <div style="display: inline-block; vertical-align: top; margin-left: 20px">
            <label for="headnews1" style="font-size: large; font-weight: bold">
                Biodata
                <p style="font-size: 14px; font-weight: normal; color: gray; padding-top: 20px">Nama <span
                        style="padding-left: 14px">:</span> Ahmad Faiz</p>
                <p style="font-size: 14px; font-weight: normal; color: gray; padding-top: 20px">NIM <span
                        style="padding-left: 20px">:</span> 202010370311021</p>
                <p style="font-size: 14px; font-weight: normal; color: gray; padding-top: 20px">Fakultas : Teknik</p>
                <p style="font-size: 14px; font-weight: normal; color: gray; padding-top: 20px">Jurusan <span
                        style="padding-left: 4px">:</span> Informatika</p>
                <p style="font-size: 14px; font-weight: normal; color: gray; padding-top: 20px">Email <span
                        style="padding-left: 12px">:</span> ahmdfaiz27@gmail.com</p>
            </label>
        </div>
    </div>
</div>
<!-- container profile end -->
@endsection
 @extends('layouts.front.app')
 @section('content')
 <!-- Header Halaman -->
 <header>
     <h1 class="title-site">Berita Terkini</h1>
     <p class="description">Halaman ini menampilkan top 5 berita terkini yang sedang trending!</p>
     <br />
     <div class="headerline"></div>
 </header>
 <!-- Header Halaman End -->
 <div class="col-md-4 sidebar" id="site-sidebar">
     <aside class="widgets">
         <h3 class="widget-title" style="margin-left: 20px; margin-bottom: 10px;">Topic</h3>
         <div class="search-container" style="padding-left: 20px;">
             <form action="">
                 <input type="text" placeholder="Search..." name="search" style="border: none;padding: 1px;">
                 <button type="submit" style="border: none; padding: 1px;"><i class="fa fa-search"></i></button>
             </form>
         </div>
         <ul>
             <li><a href="#">Olahraga</a></li>
             <li><a href="#">Politik</a></li>
             <li><a href="#">Hiburan</a></li>
             <li><a href="#">Games</a></li>
             <li><a href="#">Sepakbola</a></li>
         </ul>
     </aside>
 </div>
 <div class="pagination">
     <a href="#">&laquo;</a>
     <a class="active" href="#">1</a>
     <a href="#">2</a>
     <a href="#">3</a>
     <a href="#">4</a>
     <a href="#">5</a>
     <a href="#">6</a>
     <a href="#">&raquo;</a>
 </div>
 <!-- Berita 1 -->
 <div class="headnews1">
     <div style="display: inline-block; vertical-align: top">
         <img src="{{asset('assets/berita-olahraga.jpeg')}}" alt="Olahraga" height="180" width="260" />
         <div style="display: inline-block; vertical-align: top; margin-left: 20px; margin-top: 60px">
             <label for="headnews1" style="font-size: large; font-weight: bold">
                 <a style="color: black;" href="{{url('b1')}}">
                     Indonesia Kirim 5 Wakil ke Semifinal <br />
                     Korea Open: Derbi Ganda Putra <br />
                 </a>
                 <p style="font-size: 12px; font-weight: normal;color: gray; ">Jumat, 08 Apr 2022 20:30 WIB</p>
                 <p style="font-size: 12px; font-weight: normal; color: red">Olahraga<span
                         style="font-size: 12px; font-weight: normal; color: black"> . Category</span></p>
             </label>
         </div>
     </div>
 </div>
 <!-- Berita 1 End -->

 <!-- Berita 2  -->
 <div class="headnews2">
     <div style="display: inline-block; vertical-align: top">
         <img src="{{asset('assets/berita-politik.jpeg')}}" alt="Olahraga" height="180" width="260" />
         <div style="display: inline-block; vertical-align: top; margin-left: 20px; margin-top: 60px">
             <label for="headnews2" style="font-size: large; font-weight: bold">
                 <a style="color: black;" href="{{url('b2')}}">Survei CSIIS: Khofifah Capres Pilihan Warga NU, <br>
                     Ungguli Cak Imin</a>
                 <p style="font-size: 12px; font-weight: normal;color: gray; ">Jumat, 08 Apr 2022 18:55 WIB</p>
                 <p style="font-size: 12px; font-weight: normal; color: red">Politik<span
                         style="font-size: 12px; font-weight: normal; color: black"> . Category</span></p>
             </label>
         </div>
         <!-- Berita 2 End -->

         <!-- Berita 3 -->
         <div class="headnews3">
             <div style="display: inline-block; vertical-align: top">
                 <img src="{{asset('assets/berita-hiburan.jpeg')}}" alt="Olahraga" height="180" width="260" />
                 <div style="display: inline-block; vertical-align: top; margin-left: 20px; margin-top: 60px">
                     <label for="headnews3" style="font-size: large; font-weight: bold">
                         <a style="color: black;" href="{{url('b3')}}">Bikin Emosi Kolaborator dan Fan BTS, <br>
                             Produser Musik AS Minta Maaf
                         </a>
                         <p style="font-size: 12px; font-weight: normal;color: gray; ">
                             Jumat, 08 Apr 2022 21:52 WIB</p>
                         <p style="font-size: 12px; font-weight: normal; color: red">Hiburan<span
                                 style="font-size: 12px; font-weight: normal; color: black"> . Category</span></p>
                     </label>
                 </div>
                 <!-- Berita 3 End -->

                 <!-- Berita 4 -->
                 <div class="headnews4">
                     <div style="display: inline-block; vertical-align: top">
                         <img src="{{asset('assets/berita-games.jpg')}}" alt="Olahraga" height="180" width="260" />
                         <div style="display: inline-block; vertical-align: top; margin-left: 20px; margin-top: 60px">
                             <label for="headnews4" style="font-size: large; font-weight: bold">
                                 <a style="color: black;" href="{{url('b4')}}">Alter Ego Amankan Playoffs MPL S9,
                                     <br> Udil & Nasduk Akui Tertekan</a>
                                 <p style="font-size: 12px; font-weight: normal;color: gray; ">Jumat, 08 Apr 2022
                                     18:08 WIB</p>
                                 <p style="font-size: 12px; font-weight: normal; color: red">Games<span
                                         style="font-size: 12px; font-weight: normal; color: black"> .
                                         Category</span></p>
                             </label>
                         </div>
                         <!-- Berita 4 End-->

                         <!-- Berita 5 -->
                         <div class="headnews5">
                             <div style="display: inline-block; vertical-align: top">
                                 <img src="{{asset('assets/berita-sepakbola.jpeg')}}" alt="Olahraga" height="180"
                                     width="260" />
                                 <div
                                     style="display: inline-block; vertical-align: top; margin-left: 20px; margin-top: 60px">
                                     <label for="headnews5" style="font-size: large; font-weight: bold">
                                         <a style="color: black;" href="{{url('b1')}}">Ozil Serukan Doa Tak Hanya
                                             untuk Ukraina, <br> Singgung Palestina</a>
                                         <p style="font-size: 12px; font-weight: normal;color: gray; ">Jumat, 08 Apr
                                             2022 21:52 WIB</p>
                                         <p style="font-size: 12px; font-weight: normal; color: red">Sepakbola<span
                                                 style="font-size: 12px; font-weight: normal; color: black"> .
                                                 Category</span></p>
                                     </label>
                                 </div>
                                 @endsection
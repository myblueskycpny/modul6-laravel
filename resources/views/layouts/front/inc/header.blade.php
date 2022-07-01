<!-- Navbar -->
<nav>
    <label class="logo">Ahmad Faiz</label>
    <ul>
        <li><a href="{{url('home')}}">Home</a></li>
        <li><a href="{{url('dashboard')}}">Admin-Side</a></li>
        <li><a href="{{url('profil')}}">Profile</a></li>
        <li class="drop">
            <span class="dropbtn">
                Category
                <i class="fa fa-caret-down"></i>
            </span>
            <div class="dropdown-content">
                <a href="{{url('b1')}}">Olahraga</a>
                <a href="{{url('b2')}}">Politik</a>
                <a href="{{url('b3')}}">Hiburan</a>
                <a href="{{url('b4')}}">Games</a>
                <a href="{{url('b5')}}">Sepakbola</a>
            </div>
        </li>
        <li><a href="{{url('m4t1')}}">Modul 4 (1)</a></li>
        <li><a href="{{url('m4t2')}}">Modul 4 (2)</a></li>
        <li><a href="{{url('m4t3')}}">Modul 4 (3)</a></li>
        <li><a href="{{url('kalkulator')}}">Calculator</a></li>
        <li><a href="{{url('movie')}}">Watch List</a></li>
    </ul>
</nav>
<!-- Navbar End -->
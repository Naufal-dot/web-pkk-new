@extends('template')

@section('content')
<div class="pembukaan">
    <div class="row">
        <div class="col-md-6">
            <h1 class="d-grid ms-4 mt-3">Lorem ipsum dolor <span class="fw-bold" style="color: #FFB423 ;"> sit amet, consectetur </span> adipiscing elit. Placerat ac massa</h1>
            <p class="ms-4 mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, impedit.</p>
            <!-- <label for="inputPassword5" class="form-label ms-4">Password</label> -->
            <!-- <input type="text" id="inputPassword5" class="form-control ms-4 mt-5 rounded-pill" aria-describedby="passwordHelpBlock" placeholder="Cari yang kamu butuh"> -->
            <div class="d-flex justify-content-center px-5">
                <div class="search">
                    <input type="text" class="search-input" placeholder="Cari yang kamu butuh" name="">
                    <a href="#" class="search-icon"> <i class="bi bi-search"></i> </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{asset('img/hp (1).png')}}" width="380px" class="" alt="" style="margin-left:auto; margin-right:auto ; margin: top 10px; margin-bottom:auto; display:block;">
        </div>
    </div>


</div>
<!-- Ini adalah Konten -->
<div class="konten">
    <div class="row">
        <h3 class="text-center">Kamu bisa melihat spesifikasi komputer <br> di semua lab RPL</h3>
    </div>
    <div class="row">
        <div class="col-md-4 mt-4">

            <div class="container">
                <div class="card" style="margin: 0 auto ;">
                    <div class="imgBx">
                         <img src="{{ asset('img/bro.png') }}"> 
                    </div>
                    <div class="contentBx">
                        <h2>Lab 1</h2>
                        <div class="size">
                            <p>Lihat spesifikasi PC yang ada di Lab 1</p>
                        </div>
                        <a href="/labsatu">Lihat Lab</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="container">
                <div class="card" style="margin: 0 auto ;">
                    <div class="imgBx">
                        <img src="{{ asset('img/bro.png') }}"> 
                    </div>
                    <div class="contentBx">
                        <h2>Lab 2</h2>
                        <div class="size">
                            <p>Lihat spesifikasi PC yang ada di Lab 2</p>
                        </div>
                        <a href="/labdua">Lihat Lab</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="container">
                <div class="card" style="margin: 0 auto ;">
                    <div class="imgBx">
                        <img src="{{ asset('img/bro.png') }}"> 
                    </div>
                    <div class="contentBx">
                        <h2>Lab 3</h2>
                        <div class="size">
                            <p>Lihat spesifikasi PC yang ada di Lab 3</p>
                        </div>
                        <a href="/labtiga">Lihat Lab</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
</div>

</div>
<!-- Ini adalah Footer -->

<footer class="py-3 footer">

    <p class="text-center mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem perferendis atque alias temporibus magnam. Voluptatum!</p>
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <div class="icon-sosmed">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><img width="30" src="{{asset('img/Group 8.png')}}" alt=""></a></li>
        </div>
        <div class="icon-sosmed">
            <li class="nav-item "><a href="#" class="nav-link px-2 text-muted"><img width="30" src="{{asset('img/Group 9.png')}}" alt=""></a></li>
        </div>
        <div class="icon-sosmed">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><img width="30" src="{{asset('img/Group 10.png')}}" alt=""></a></li>
        </div>
        <div class="icon-sosmed">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><img width="30" src="{{asset('img/Group 11.png')}}" alt=""></a></li>
        </div>

    </ul>
    <p class="text-center">&copy; 2022. All Right Reserved</p>
</footer>



@endsection
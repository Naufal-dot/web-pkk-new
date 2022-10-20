@extends('template')

@section('content')
<div class="row">
    <div class="col-md-12 ms-4 mt-3">
        <p><span><a style="color: black ;" href="/">Home</a></span>/Lab Dua</p>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="cards">
            <div class="card card-1">
                <div class="card__icon"><i class="bi bi-1-circle"></i></div>
                <p class="card__exit"><i class="fas fa-times"></i></p>
                <h2 class="card__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                <p class="card__apply">
                    <a class="card__link" href="#">Lihat Selengkapnya <i class="bi bi-arrow-right"></i></a>
                </p>
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="cards">
            <div class="card card-1">
                <div class="card__icon"><i class="bi bi-2-circle"></i></div>
                <p class="card__exit"><i class="fas fa-times"></i></p>
                <h2 class="card__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                <p class="card__apply">
                    <a class="card__link" href="#">Lihat Selengkapnya <i class="bi bi-arrow-right"></i></a>
                </p>
            </div>
        </div>
    </div>

</div>
</div>

@endsection
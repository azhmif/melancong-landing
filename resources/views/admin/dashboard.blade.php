@extends('admin/template')
@section('content')

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                <h1>{{ $tools['title2'] }}</h1>
                    <div class="separator mb-5"></div>
                </div>
                <div class="col-lg-12 col-xl-6">
                    <div class="icon-cards-row">
                        <div class="glide dashboard-numbers">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-map2"></i>
                                                <p class="card-text mb-0">Paket Wisata</p>
                                                <p class="lead text-center">{{ $paket }}</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-bus-2"></i>
                                                <p class="card-text mb-0">Bus Pariwisata</p>
                                                <p class="lead text-center">{{ $bus }}</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-car"></i>
                                                <p class="card-text mb-0">Rental Mobil</p>
                                                <p class="lead text-center">{{ $mobil }}</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="card h-60">
                                <div class="position-absolute card-top-buttons">
                                    <button class="btn btn-header-light icon-button">
                                        <i class="simple-icon-refresh"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Respon Terakhir</h5>
                                    <div class="scroll dashboard-list-with-thumbs">
                                        @foreach($respon as $r)
                                        <div class="d-flex flex-row mb-3">
                                            <a class="d-block position-relative" href="#">
                                                <img src="{{ url('data/respon/'.$r->foto)}}" alt="Marble Cake"
                                                    class="list-thumbnail border-0" />
                                            </a>
                                            <div class="pl-3 pt-2 pr-2 pb-2">
                                                <a href="#">
                                                    <p class="list-item-heading">{{ $r->nama }}</p>
                                                    <div class="pr-4 d-none d-sm-block">
                                                        <p class="text-muted mb-1 text-small">{{ $r->komentar }}</p>
                                                    </div>
                                                    <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                    {{ $r->created_at }}</div>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card h-80">
                        <div class="card-body">
                            <h5 class="card-title">Kalender</h5>
                            <div class="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @endsection

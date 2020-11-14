@extends('admin/template')
@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <h1>{{ $tools['title2'] }}</h1>
                <div class="separator mb-5"></div>
            </div>

            <div class="card col-12">
                <div class="card-body">
                    <h5 class="mb-12">Ganti Kontak</h5>
                    @if ($message = Session::get('sukses'))
                        <div class="alert alert-info alert-dismissible fade show rounded mb-0" role="alert">
                            <strong>Berhasil !!</strong> Data Berhasil Diganti !!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div><br><br>
                    @endif
                    @if ($message = Session::get('gagal'))
                        <div class="alert alert-danger alert-dismissible fade show rounded mb-0" role="alert">
                            <strong>Gagal Login !!</strong> Username atau Password salah !!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div><br><br>
                    @endif
                    <form method="POST" action="{{ url('contact/update/') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                            <input type="hidden" name="id" id="id" value="{{ $data2[0]->id }}">
                            <input type="email" class="form-control" name="email" id="email" value="{{ $data2[0]->email }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="telepon" id="telepon" value="{{ $data2[0]->telepon }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Facebook</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="facebook" id="facebook" value="{{ $data2[0]->facebook }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Twitter</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="twitter" id="twitter" value="{{ $data2[0]->twitter }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Instagram</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="instagram" id="instagram" value="{{ $data2[0]->instagram }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Youtube</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="youtube" id="youtube" value="{{ $data2[0]->youtube }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Whats App</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="whatsapp" id="whatsapp" value="{{ $data2[0]->whatsapp }}" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary mb-0" onclick="return confirm('Anda yakin?')">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection

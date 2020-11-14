@extends('admin/template')
@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <h1>{{ $tools['title2'] }}</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
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
                    @foreach($data2 as $data)
        <form method="POST" action="{{ url('about/update') }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body ">
                            <h5 class="mb-4">About US</h5>
                            <input type="hidden" name="id" value="{{ $data->id }}">
                        <textarea name="about" id="ckEditorClassic" >{{ $data->about_us }}</textarea>
                        </div>
                        <div class="form-group row mb-3 ml-3">
                            <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary mb-0" onclick="return confirm('Anda yakin?')">Simpan</button>
                            </div>
                            <a class="btn btn-outline-info mb-1" data-toggle="modal"
                            data-backdrop="static" data-target="#lihat">Lihat Foto</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @endforeach
    </div>
    @foreach($data2 as $l):
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="lihat{{ $l->id_profil }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Lihat Foto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <button class="btn btn-primary mb-1" type="button" data-toggle="collapse"
                                    data-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    Ganti Foto
                                </button>
                <div class="collapse" id="collapseExample">
                    <div class="p-4 border mt-4">
                        <div class="form-group">
                            <form method="POST" action="{{ url('about/update/foto') }}"  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <label>Pilih Foto Baru</label>
                                <input type="hidden" id="id" name="id" class="form-control" value="{{ $l->id }}">
                                <input type="hidden" id="lama" name="lama" class="form-control" value="{{ $l->foto }}">
                                <input type="file" id="foto" name="foto" class="form-control" required><br>
                                <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin?')">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                    <img src="{{ url('data/about/'.$l->foto) }}" style="width: 750px">
                </div>
            </div>
        </div>
    </div>
    @endforeach

</main>
@endsection

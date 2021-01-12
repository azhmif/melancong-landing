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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body ">
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
                            <div id="smartWizardDot">
                                <ul class="card-header">
                                    <li><a href="#dotStep1">Jumbotron 1<br /><small>Ganti Tulisan Dan Foto</small></a></li>
                                    <li><a href="#dotStep2">Jumbotron 2<br /><small>Ganti Tulisan Dan Foto</small></a></li>
                                    <li><a href="#dotStep3">Jumbotron 3<br /><small>Ganti Tulisan Dan Foto</small></a></li>
                                </ul>
                                <div class="card-body">
                                    <div id="dotStep1">
                                        <h4 class="pb-6">Edit Kata dan Gambar pada Jumbotron Pertama</h4>
                                        <form method="POST" action="{{ url('jumbotron/kata-1') }}">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" class="form-control" id="id1" name="id1"
                                                        value="{{ $data2[0]->id_jumbotron }}">
                                                    <input type="text" class="form-control" id="judul1" name="judul1"
                                                        value="{{ $data2[0]->judul }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Kata</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="kata1" name="kata1"
                                                        value="{{ $data2[0]->kata }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Link
                                                    Layanan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="link11" name="link11"
                                                        value="{{ $data2[0]->link1 }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Link
                                                    Pemesanan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="link21" name="link21"
                                                        value="{{ $data2[0]->link2 }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Background</label>
                                                <div class="col-sm-10">
                                                    <img src="{{ url('data/jumbotron/' . $data2[0]->foto) }}"
                                                        style="width:900px">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary mb-0"
                                                        onclick="return confirm('Anda yakin?')">Ganti</button>
                                                    <a class="btn btn-outline-info mb-1" data-toggle="modal"
                                                        data-backdrop="static" data-target="#gambar1">Ganti Background</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="dotStep2">
                                        <h4 class="pb-2">Edit Kata dan Gambar pada Jumbotron Kedua</h4>
                                        <form method="POST" action="{{ url('jumbotron/kata-2') }}">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" class="form-control" id="id2" name="id2"
                                                        value="{{ $data2[1]->id_jumbotron }}">
                                                    <input type="text" class="form-control" id="judul2" name="judul2"
                                                        value="{{ $data2[1]->judul }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Kata</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="kata2" name="kata2"
                                                        value="{{ $data2[1]->kata }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Link
                                                    Layanan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="link12" name="link12"
                                                        value="{{ $data2[0]->link1 }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Link
                                                    Pemesanan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="link22" name="link22"
                                                        value="{{ $data2[0]->link2 }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Background</label>
                                                <div class="col-sm-10">
                                                    <img src="{{ url('data/jumbotron/' . $data2[1]->foto) }}"
                                                        style="width:900px">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary mb-0"
                                                        onclick="return confirm('Anda yakin?')">Ganti</button>
                                                    <a class="btn btn-outline-info mb-1" data-toggle="modal"
                                                        data-backdrop="static" data-target="#gambar2">Ganti Background</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="dotStep3">
                                        <h4 class="pb-2">Edit Kata dan Gambar pada Jumbotron Ketiga</h4>
                                        <form method="POST" action="{{ url('jumbotron/kata-3') }}">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" class="form-control" id="id3" name="id3"
                                                        value="{{ $data2[2]->id_jumbotron }}">
                                                    <input type="text" class="form-control" id="judul3" name="judul3"
                                                        value="{{ $data2[2]->judul }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Kata</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="kata3" name="kata3"
                                                        value="{{ $data2[2]->kata }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Link
                                                    Layanan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="link13" name="link13"
                                                        value="{{ $data2[0]->link1 }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Link
                                                    Pemesanan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="link23" name="link23"
                                                        value="{{ $data2[0]->link2 }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Background</label>
                                                <div class="col-sm-10">
                                                    <img src="{{ url('data/jumbotron/' . $data2[2]->foto) }}"
                                                        style="width:900px">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary mb-0"
                                                        onclick="return confirm('Anda yakin?')">Ganti</button>
                                                    <a class="btn btn-outline-info mb-1" data-toggle="modal"
                                                        data-backdrop="static" data-target="#gambar3">Ganti Background</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-right" id="gambar1" tabindex="-1" role="dialog" aria-labelledby="exampleModalRight"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ganti Background</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('jumbotron/gambar-1') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="hidden" class="form-control" id="id1" name="id1"
                                    value="{{ $data2[0]->id_jumbotron }}">
                                <input type="hidden" class="form-control" id="lama1" name="lama1"
                                    value="{{ $data2[0]->foto }}">
                                <input type="file" id="gambar1" name="gambar1" class="form-control" required>
                                <small>*Ukuran File Maksimal 10MB</small>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <div class="separator mb-5"></div>
        </div>
        <div class="modal fade modal-right" id="gambar2" tabindex="-1" role="dialog" aria-labelledby="exampleModalRight"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ganti Background</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('jumbotron/gambar-2') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="hidden" class="form-control" id="id2" name="id2"
                                    value="{{ $data2[1]->id_jumbotron }}">
                                <input type="hidden" class="form-control" id="lama2" name="lama2"
                                    value="{{ $data2[1]->foto }}">
                                <input type="file" id="gambar2" name="gambar2" class="form-control" required>
                                <small>*Ukuran File Maksimal 10MB</small>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <div class="separator mb-5"></div>
        </div>
        <div class="modal fade modal-right" id="gambar3" tabindex="-1" role="dialog" aria-labelledby="exampleModalRight"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ganti Background</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('jumbotron/gambar-3') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="hidden" class="form-control" id="id3" name="id3"
                                    value="{{ $data2[2]->id_jumbotron }}">
                                <input type="hidden" class="form-control" id="lama3" name="lama3"
                                    value="{{ $data2[2]->foto }}">
                                <input type="file" id="gambar3" name="gambar3" class="form-control" required>
                                <small>*Ukuran File Maksimal 10MB</small>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <div class="separator mb-5"></div>
        </div>
    </main>
@endsection

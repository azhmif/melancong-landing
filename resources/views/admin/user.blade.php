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
                    <form method="POST" action="{{ url('user/update/') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                            <input type="hidden" name="id" id="id" value="{{ $data2[0]->id }}">
                            <input type="email" class="form-control" name="email" id="email" value="{{ $data2[0]->email }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" id="username" value="{{ $data2[0]->username }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password" id="password" value="{{ $data2[0]->password }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary mb-0" onclick="return confirm('Anda yakin?')">Simpan</button>
                                <a class="btn btn-outline-info mb-1" data-toggle="modal" data-backdrop="static" data-target="#ganti">
                                    Ganti Password
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade modal-right" id="ganti" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Response</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('user/password') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input type="hidden" name="id" value="{{ $data2[0]->id }}">
                            <input type="text" id="pass_baru" name="pass_baru" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Verifikasi Password Baru</label>
                            <input type="text" id="pass_baru2" name="pass_baru2" class="form-control" required>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin?')" disabled>Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

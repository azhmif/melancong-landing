@extends('admin/template')
@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>{{ $tools['title2'] }}</h1>

                <div class="top-right-button-container">
                    <div class="btn-group">
                        <button class="btn btn-outline-primary btn-lg" type="button"
                        data-toggle="modal" data-backdrop="static" data-target="#tambah">
                            Tambah
                        </button>
                    </div>
                </div>

                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                    </ol>
                </nav>
                <div class="mb-2">
                    <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
                        role="button" aria-expanded="true" aria-controls="displayOptions">
                        Display Options
                        <i class="simple-icon-arrow-down align-middle"></i>
                    </a>
                    <div class="collapse dont-collapse-sm" id="displayOptions">
                        <div class="d-block d-md-inline-block">
                            <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                <input class="form-control" placeholder="Search Table" id="searchDatatable">
                            </div>
                        </div>
                        <div class="float-md-right dropdown-as-select" id="pageCountDatatable">
                            <span class="text-muted text-small">Displaying 1-10 of 40 items </span>
                            <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                10
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">5</a>
                                <a class="dropdown-item active" href="#">10</a>
                                <a class="dropdown-item" href="#">20</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator"></div>
            </div>
        </div>
        @if ($message = Session::get('sukses'))
                    <div class="alert alert-info alert-dismissible fade show rounded mb-0" role="alert">
                        <strong>Berhasil !!</strong> {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if ($message = Session::get('gagal'))
                    <div class="alert alert-danger alert-dismissible fade show rounded mb-0" role="alert">
                        <strong>Gagal Login !!</strong> {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
        <div class="row">
            <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
                <table id="datatableRows" class="data-table responsive nowrap"
                    data-order="[[ 1, &quot;desc&quot; ]]">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Keterangan</th>
                            <th>Tipe</th>
                            <th></th>
                            <th class="empty">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 0; @endphp
                        @foreach($data2 as $data):
                        @php $no++ @endphp
                        <tr>
                            <td>
                                <p class="list-item-heading">{{ $data->foto }}</p>
                            </td>
                            <td>
                                <p class="text-muted">{{ $data->keterangan }}</p>
                            </td>
                            <td>
                                <p class="text-muted">@if ($data->tipe == 1)
                                    Gambar
                                @endif
                                @if ($data->tipe == 2)
                                    Video Youtube
                                @endif
                            </p>
                            </td>
                            <td>
                            </td>
                            <td style="width: 250px">
                                <a class="btn btn-outline-info mb-1" data-toggle="modal" data-backdrop="static" data-target="#lihat{{ $data->id_galeri }}">
                                    Lihat
                                </a>
                                <a class="btn btn-outline-info mb-1" data-toggle="modal" data-backdrop="static" data-target="#update{{ $data->id_galeri }}">
                                    Edit
                                </a>
                                <a class="btn btn-outline-info mb-1" href="{{ url('galeri/delete/'.$data->id_galeri) }}" onclick="return confirm('Anda yakin?')">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade modal-right" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah galeri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('galeri/create') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tipe Galeri</label>
                            <select class="custom-select" id="tipe" name="tipe" onchange="tukar(this.value)" required>
                                <option value="1">Gambar</option>
                                <option value="2">Video Youtube</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label id="label">Foto</label>
                            <input type="file" id="foto" name="foto" class="form-control" required>
                            <small>*Ukuran File Maksimal 3MB</small>
                        </div>
                        <div class="form-group">
                            <label>keterangan</label>
                            <input type="text" id="keterangan" name="keterangan" class="form-control" required>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin?')">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    @foreach($data2 as $l):
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="lihat{{ $l->id_galeri }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Lihat Galeri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if($l->tipe == 1)
                    <button class="btn btn-primary mb-1" type="button" data-toggle="collapse"
                                    data-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    Ganti Foto
                    </button>
                    @endif
                    @if($l->tipe == 2)
                    <button class="btn btn-primary mb-1" type="button" data-toggle="collapse"
                                    data-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    Ganti Video
                    </button>
                    @endif
                <div class="collapse" id="collapseExample">
                    <div class="p-4 border mt-4">
                        <div class="form-group">
                            <form method="POST" action="{{ url('galeri/update/foto') }}"  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @if($l->tipe == 1)
                                <label>Pilih Foto Baru</label>
                                <input type="hidden" id="id" name="id" class="form-control" value="{{ $l->id_galeri }}">
                                <input type="hidden" id="lama" name="lama" class="form-control" value="{{ $l->foto }}">
                                <input type="hidden" id="tipe" name="tipe" class="form-control" value="{{ $l->tipe }}">
                                <input type="file" id="foto" name="foto" class="form-control" required><br>
                                <small>*Ukuran File Maksimal 3MB</small>
                                @endif
                                @if($l->tipe == 2)
                                <label>Masukkan Link Video Youtube Baru</label>
                                <input type="hidden" id="id" name="id" class="form-control" value="{{ $l->id_galeri }}">
                                <input type="hidden" id="tipe" name="tipe" class="form-control" value="{{ $l->tipe }}">
                                <input type="text" id="foto" name="foto" class="form-control" required><br>
                                @endif
                                <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin?')">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                    @if($l->tipe == 1)
                        <img src="{{ url('data/galeri/'.$l->foto) }}" style="width: 750px">
                    @endif
                    @if($l->tipe == 2)
                    <iframe width="750" height="400" src="{{ $l->foto }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
            @foreach($data2 as $u):
            <div class="modal fade modal-right" id="update{{ $u->id_galeri }}" tabindex="-1" role="dialog" aria-labelledby="update" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ubah Keterangan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ url('galeri/update/ket') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>keterangan</label>
                                    <input type="hidden" id="id" name="id" class="form-control" value="{{ $u->id_galeri }}">
                                    <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ $u->keterangan }}" required>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin?')">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
</main>
@endsection

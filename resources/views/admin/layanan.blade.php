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
                        <li class="breadcrumb-item active" aria-current="page">Layanan</li>
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
                            <th>Nama Layanan</th>
                            <th>Jenis Layanan</th>
                            <th>Harga</th>
                            <th>Diskon</th>
                            <th class="empty">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 0; @endphp
                        @foreach($data2 as $data):
                        @php $no++ @endphp
                        <tr>
                            <td>
                                <p class="text-muted">{{ $data->nama_layanan }}</p>
                            </td>
                            <td>
                                <p class="text-muted">@if($data->jenis_layanan == 1)
                                    Rental Mobil
                                    @endif
                                    @if($data->jenis_layanan == 2)
                                    Bus Pariwisata
                                    @endif
                                    @if($data->jenis_layanan == 3)
                                    Paket Wisata
                                    @endif
                                </p>
                            </td>
                            <td>
                                <p class="text-muted">Rp. {{ $data->harga }}</p>
                            </td>
                            <td>
                                <p class="text-muted">{{ $data->diskon }} %</p>
                            </td>
                            <td style="width: 250px">
                                <a class="btn btn-outline-info mb-1" data-toggle="modal" data-backdrop="static" data-target="#update{{ $data->id_layanan }}">
                                    Edit
                                </a>
                                <a class="btn btn-outline-info mb-1" href="{{ url('layanan/delete/'.$data->id_layanan) }}" onclick="return confirm('Anda yakin?')">
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
                    <h5 class="modal-title">Tambah layanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('layanan/create') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Nama Layanan</label>
                            <input type="text" id="nama_layanan" name="nama_layanan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis layanan</label>
                            <select class="custom-select" id="jenis_layanan" name="jenis_layanan" required>
                                <option value="">Pilih Jenis Layanan</option>
                                <option value="1">Rental Mobil</option>
                                <option value="2">Bus Pariwisata</option>
                                <option value="3">Paket Wisata</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" id="harga" name="harga" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Diskon</label>
                            <input type="number" id="diskon" name="diskon" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
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

            @foreach($data2 as $u):
            <div class="modal fade modal-right" id="update{{ $u->id_layanan }}" tabindex="-1" role="dialog" aria-labelledby="update" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ubah Keterangan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ url('layanan/update') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Nama Layanan</label>
                                    <input type="hidden" id="id" name="id" class="form-control" value="{{ $u->id_layanan }}" required>
                                    <input type="text" id="nama_layanan" name="nama_layanan" class="form-control" value="{{ $u->nama_layanan }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Jenis layanan</label>
                                    <select class="custom-select" id="jenis_layanan" name="jenis_layanan" required>
                                        <option value="">Pilih Jenis Layanan</option>
                                        <option value="1"
                                        @if($u->jenis_layanan == 1)
                                            Selected
                                        @endif
                                        >Rental Mobil</option>
                                        <option value="2"
                                        @if($u->jenis_layanan == 2)
                                            Selected
                                        @endif
                                        >Bus Pariwisata</option>
                                        <option value="3"
                                        @if($u->jenis_layanan == 3)
                                        Selected
                                        @endif
                                        >Paket Wisata</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" id="harga" name="harga" class="form-control" value="{{ $u->harga }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Diskon</label>
                                    <input type="number" id="diskon" name="diskon" class="form-control" value="{{ $u->diskon }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
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

@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Pelayanan</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-video"></i> Tambah Pelayanan</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama:</strong>
                                <input type="text" value="{{ old('nama') }}" name="nama" class="form-control"
                                    placeholder="Nama">
                                @error('nama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Keterangan:</strong>
                                <input type="text" value="{{ old('keterangan') }}" name="keterangan" class="form-control"
                                    placeholder="keterangan">
                                @error('keterangan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Link:</strong>
                                <input type="text" value="{{ old('link') }}" name="link" class="form-control" value="#"
                                    placeholder="Link">
                                @error('link')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Icon:</strong>
                                <input type="file" name="icon" class="form-control" placeholder="Icon">
                                @error('icon')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                            <button type="submit" class="btn btn-primary"
                                onClick="return confirm('Simpan ?')">Simpan</button>
                            <a class="btn btn-light" href="{{ route('admin.service.index') }}">Batal</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

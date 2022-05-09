@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Informasi Instansi</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-video"></i> Tambah Informasi Instansi</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.instansi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Nama Instansi</label>
                            <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Instansi"
                                class="form-control @error('nama') is-invalid @enderror">

                            @error('Nama')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="kategori" id="kategori">
                                    <option value="">Pilih Kategori</option>
                                    <option value="dinas">Dinas</option>
                                    <option value="badandaerah">Badan Daerah</option>
                                    <option value="kecamatan">Kecamatan</option>
                                    <option value="desa">Desa</option>
                                    <option value="puskesmas">Puskesmas</option>
                                </select>
                            </div>
                            @error('kategori')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <strong>Alamat:</strong>
                            <textarea class="form-control" style="height:150px" name="alamat"
                                placeholder="Masukan Alamat">{{ old('alamat') }}</textarea>
                            @error('alamat')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <strong>Link Website:</strong>
                            <textarea class="form-control" style="height:150px" name="link"
                                placeholder="Masukan Link Website">{{ old('alalinkmat') }}</textarea>
                            @error('link')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            SIMPAN</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

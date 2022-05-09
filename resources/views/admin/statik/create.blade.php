@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Halaman</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-video"></i> Tambah Halaman</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.statik.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Pilih
                                            Halaman</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="halaman" id="halaman">
                                        <option value="">Pilih Halaman</option>
                                        <option value="visimisi">Visi dan Misi</option>
                                        <option value="struktur">Struktur</option>
                                        <option value="sambutan">Sambutan</option>
                                        <option value="sejarah">Sejarah</option>
                                        <option value="detailsejarah">Detail Sejarah</option>
                                        <option value="artilambang">Arti lambang</option>
                                    </select>
                                </div>
                                @error('halaman')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Caption:</strong>
                                <input type="text" name="caption" value="{{ old('caption') }}"
                                    placeholder="Masukkan Caption"
                                    class="form-control @error('caption') is-invalid @enderror">

                                @error('caption')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Body:</strong>
                                <textarea class="form-control" style="height:150px" name="body"
                                    placeholder="Body">{{ old('body') }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Image:</strong>
                                <input type="file" name="image" class="form-control" placeholder="image" value="#">
                                @error('image')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                            <button type="submit" class="btn btn-primary"
                                onClick="return confirm('Simpan ?')">Simpan</button>
                            <a class="btn btn-light" href="{{ route('admin.statik.index') }}">Batal</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

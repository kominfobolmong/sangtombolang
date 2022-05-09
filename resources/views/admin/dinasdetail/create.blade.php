@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Informasi Dinas</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-video"></i> Tambah Informasi Dinas</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.dinasdetail.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama Dinas:</strong>
                                <input type="text" name="dinas" value="{{ old('dinas') }}"
                                    placeholder="Masukkan Nama Dinas"
                                    class="form-control @error('caption') is-invalid @enderror">

                                @error('dinas')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Pimpinan:</strong>
                                <input type="text" name="pimpinan" value="{{ old('pimpinan') }}"
                                    placeholder="Masukkan Nama Pimpinan"
                                    class="form-control @error('pimpinan') is-invalid @enderror">

                                @error('pimpinan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Jabatan:</strong>
                                <input type="text" name="jabatan" value="{{ old('jabatan') }}"
                                    placeholder="Masukkan Jabatan"
                                    class="form-control @error('jabatan') is-invalid @enderror">

                                @error('jabatan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Alamat:</strong>
                                <textarea class="form-control" style="height:150px" name="alamat"
                                    placeholder="Masukan Alamat Dinas">{{ old('alamat') }}</textarea>
                                @error('alamat')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Telepon:</strong>
                                <input type="text" name="telepon" value="{{ old('telepon') }}"
                                    placeholder="Masukkan Nomor Telepon Dinas"
                                    class="form-control @error('telepon') is-invalid @enderror">

                                @error('telepon')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Website:</strong>
                                <input type="text" name="website" value="{{ old('website') }}"
                                    placeholder="Masukkan Alamat Website"
                                    class="form-control @error('website') is-invalid @enderror">

                                @error('website')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>EMAIL</label>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan Email"
                                    class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
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
                            <a class="btn btn-light" href="{{ route('admin.dinasdetail.index') }}">Batal</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

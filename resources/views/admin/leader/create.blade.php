@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Pimpinan</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-video"></i> Tambah Pimpinan</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.leader.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama"
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
                                    <label class="input-group-text" for="inputGroupSelect01">Jabatan</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="jabatan" id="jabatan">
                                    <option value="">Pilih Jabatan</option>
                                    <option value="Bupati">Bupati</option>
                                    <option value="WakilBupati">Wakil Bupati</option>
                                    <option value="Sekda">Sekda</option>
                                </select>
                            </div>
                            @error('jabatan')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>GAMBAR</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">

                            @error('image')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <strong>Body:</strong>
                            <textarea class="form-control" style="height:150px" name="body"
                                placeholder="Body">{{ old('body') }}</textarea>
                            @error('body')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <strong>Linkedin:</strong>
                            <input type="text" value="{{ old('linkedin') }}" name="linkedin" class="form-control"
                                placeholder="linkedin">
                            @error('linkedin')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <strong>Twitter:</strong>
                            <input type="text" value="{{ old('twitter') }}" name="twitter" class="form-control"
                                placeholder="twitter">
                            @error('twitter')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <strong>Facebook:</strong>
                            <input type="text" value="{{ old('facebook') }}" name="facebook" class="form-control"
                                placeholder="facebook">
                            @error('facebook')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <strong>Instagram:</strong>
                            <input type="text" value="{{ old('instagram') }}" name="instagram" class="form-control"
                                placeholder="instagram">
                            @error('instagram')
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

@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Informasi Instansi</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-video"></i> Edit Informasi Instansi</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.instansi.update',$instansi->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="card-body">
                                    <div class="card card-primary" style="margin-top:10px;">
                                        <div class="card-header">
                                            Edit Informasi Instansi
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Nama:</strong>
                                                <input type="text" name="nama" value="{{ $instansi->nama }}"
                                                    class="form-control" placeholder="Nama">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text"
                                                            for="inputGroupSelect01">Kategori</label>
                                                    </div>
                                                    <select class="custom-select" id="inputGroupSelect01" name="kategori"
                                                        id="kategori">
                                                        <option selected>{{ $instansi->kategori }}</option>
                                                        <option value="dinas">Dinas</option>
                                                        <option value="badandaerah">Badan Daerah</option>
                                                        <option value="kecamatan">Kecamatan</option>
                                                        <option value="desa">Desa</option>
                                                        <option value="puskesmas">Puskesmas</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Alamat:</strong>
                                                <textarea class="form-control" style="height:150px" name="alamat"
                                                    placeholder="Alamat">{{ $instansi->alamat }}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Link:</strong>
                                                <textarea class="form-control" style="height:150px" name="link"
                                                    placeholder="link">{{ $instansi->link }}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-light" href="{{ route('admin.leader.index') }}">Cancel</a>
                            </div>


                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

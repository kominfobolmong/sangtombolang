@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Video</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-video"></i> Edit Video</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.service.update',$service->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama:</strong>
                                <input type="text" name="nama" value="{{ $service->nama }}" class="form-control"
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
                                <input type="text" name="keterangan" value="{{ $service->keterangan }}" class="form-control"
                                    placeholder="Keterangan Layanan">
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
                                <input type="text" name="link" class="form-control" value="{{ $service->link }}"
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
                                <img src="/storage/service-images/{{ $service->icon }}" width="300px"
                                    style="padding-top: 20px;">
                                @error('icon')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                            <button type="submit" class="btn btn-primary"
                                onClick="return confirm('Ubah Data ?')">Submit</button>
                            <a class="btn btn-light" href="{{ route('admin.service.index') }}">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

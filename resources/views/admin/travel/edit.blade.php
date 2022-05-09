@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Halaman</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-video"></i> Edit Halaman</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.travel.update',$travel->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" value="{{ old('nama', $travel->nama) }}"
                                    placeholder="Masukkan Nama"
                                    class="form-control @error('nama') is-invalid @enderror">

                                @error('nama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Embed</label>
                                <input type="text" name="embed" value="{{ old('embed', $travel->embed) }}"
                                    placeholder="Masukkan Embed"
                                    class="form-control @error('embed') is-invalid @enderror">

                                @error('embed')
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
                                    placeholder="Body">{{ $travel->body }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Image:</strong>
                                <input type="file" name="image" class="form-control" placeholder="image">
                                <img src="{{ $travel->image }}" width="300px" style="padding-top: 20px;">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                            <button type="submit" class="btn btn-primary"
                                onClick="return confirm('Ubah Data ?')">Submit</button>
                            <a class="btn btn-light" href="{{ route('admin.travel.index') }}">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

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
                    <form action="{{ route('admin.statik.update',$statik->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Pilih
                                            Halaman</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="halaman" id="halaman">
                                        <option value="{{$statik->halaman}}">{{$statik->halaman}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>CAPTION</label>
                                <input type="text" name="caption" value="{{ old('title', $statik->caption) }}"
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
                                    placeholder="Body">{{ $statik->body }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Image:</strong>
                                <input type="file" name="image" class="form-control" placeholder="image">
                                <img src="{{ $statik->image }}" width="300px" style="padding-top: 20px;">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                            <button type="submit" class="btn btn-primary"
                                onClick="return confirm('Ubah Data ?')">Submit</button>
                            <a class="btn btn-light" href="{{ route('admin.statik.index') }}">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

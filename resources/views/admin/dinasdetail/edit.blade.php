@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Informasi Dinas</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-video"></i> Edit Informasi Dinas</h4>
                </div>

                <div class="card-body">
                <form action="{{ route('admin.dinasdetail.update',$dinasdetail->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Dinas</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="dinas" id="dinas">
                                            <option selected>{{ $dinasdetail->dinas }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Pimpinan:</strong>
                                    <input type="text" name="pimpinan" value="{{ $dinasdetail->pimpinan }}"
                                        class="form-control" placeholder="Pimpinan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Jabatan:</strong>
                                    <input type="text" name="jabatan" value="{{ $dinasdetail->jabatan }}"
                                        class="form-control" placeholder="Jabatan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Alamat:</strong>
                                    <textarea class="form-control" style="height:150px" name="alamat"
                                        placeholder="Alamat">{{ $dinasdetail->alamat }}"</textarea>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Telepon.:</strong>
                                    <input type="text" name="telepon" value="{{ $dinasdetail->telepon }}" class="form-control"
                                        placeholder="No Telepon">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Website:</strong>
                                    <input type="text" name="website" value="{{ $dinasdetail->website }}"
                                        class="form-control" placeholder="Website">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="email" name="email" value="{{ $dinasdetail->email }}"
                                        class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Image:</strong>
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                    <img src="/image/dinas/{{ $dinasdetail->image }}" width="300px"
                                        style="padding-top: 20px;">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                <button type="submit" class="btn btn-primary"
                                    onClick="return confirm('Ubah Data ?')">Submit</button>
                                <a class="btn btn-light" href="{{ route('admin.dinasdetail.index') }}">Cancel</a>
                            </div>

                        </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

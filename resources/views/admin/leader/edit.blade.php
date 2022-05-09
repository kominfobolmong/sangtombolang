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
                    <form action="{{ route('admin.leader.update',$leader->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-4">
                                <div class="card-body">
                                    <div class="card card-primary" style="margin-top:10px;">
                                        <div class="card-header">
                                            Tambah Pimpinan
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Nama:</strong>
                                                <input type="text" name="nama" value="{{ $leader->nama }}"
                                                    class="form-control" placeholder="Nama">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text"
                                                            for="inputGroupSelect01">Jabatan</label>
                                                    </div>
                                                    <select class="custom-select" id="inputGroupSelect01" name="jabatan"
                                                        id="jabatan">
                                                        <option selected>{{ $leader->jabatan }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Image:</strong>
                                                <input type="file" name="image" class="form-control"
                                                    placeholder="image">
                                                    <td class="text-center"><img src="{{ $leader->image }}" style="width: 20%; padding-top: 20px;"></td>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Body:</strong>
                                                <textarea class="form-control" style="height:150px" name="body"
                                                    placeholder="Body">{{ $leader->body }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-8">
                                <div class="card-body">
                                    <div class="card card-secondary" style="margin-top:10px;">
                                        <div class="card-header">
                                            Media Sosial leader (Optional)
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Linkedin:</strong>
                                                <input type="text" name="linkedin" value="{{ $leader->linkedin }}"
                                                    class="form-control" placeholder="Linkedin">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Twitter:</strong>
                                                <input type="text" name="twitter" value="{{ $leader->twitter }}"
                                                    class="form-control" placeholder="Twitter">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Facebook:</strong>
                                                <input type="text" name="facebook" value="{{ $leader->facebook }}"
                                                    class="form-control" placeholder="facebook">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Instagram:</strong>
                                                <input type="text" name="instagram" value="{{ $leader->instagram }}"
                                                    class="form-control" placeholder="Instagram">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a class="btn btn-light" href="{{ route('admin.leader.index') }}">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

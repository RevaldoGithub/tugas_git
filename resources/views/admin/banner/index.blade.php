@extends('admin.layout')
@section('content')

<div class="page-header">
    <h1 class="page-title">Banner</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Banner</li>
        </ol>
    </div>
</div>
<div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
</div>

<!-- COL-END -->
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="panel panel-primary">
                <div class="tab-menu-heading tab-menu-heading-boxed">
                    <div class="tabs-menu-boxed">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li><a href="#tab25" class="active" data-bs-toggle="tab">Banner</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab25">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Maaf Ygy ada masalah saat di input!!</strong>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <form action="{{ route('banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-row">
                                            <div class="col-xl-12 mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="hidden" name="oldImage" value="{{ $banner->image }}">
                                                @if($banner->image)
                                                <img src="{{ asset('storage/' . $banner->image ) }}" alt="No Image" class="img-fluid mt-3 d-block" style="width: 300px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="image" name="image" value="{{ $banner->image }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Nama</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="nama" value="{{ $banner->nama }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-12 mb-3">
                                                <strong>Perkenalan:</strong>
                                                <textarea name="intro" id="cnt" cols="30" rows="10">{{ $banner->intro }}</textarea>
                                                <script>
                                                    CKEDITOR.replace('cnt');
                                                </script>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COL-END -->

@endsection
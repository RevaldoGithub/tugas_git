@extends('admin.layout')
@section('content')


<div class="page-header">
    <h1 class="page-title">Job</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Job</li>
        </ol>
    </div>
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
                            <li><a href="#" class="active">Job</a></li>
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
                                    <form action="{{ route('job.update', $job->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-row">
                                            <div class="col-xl-12 mb-3">
                                                <label for="icon" class="form-label">job</label>
                                                <input type="hidden" name="oldImage" value="{{ $job->icon }}">
                                                @if($job->icon)
                                                <img src="{{ asset('storage/' . $job->icon ) }}" alt="No Image" class="img-fluid mt-3 d-block" style="width: 180px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="icon" name="icon" value="{{ $job->icon }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Job</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="job" value="{{ $job->job }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <strong>Content:</strong>
                                                <textarea name="content" id="cnt" cols="30" rows="10">{{ $job->content }}</textarea>
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
</div>
<!-- COL-END -->

@endsection
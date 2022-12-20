@extends('admin.layout')
@section('content')
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Email-Read</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Email-Read</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- Row -->
<div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
                <div class="mt-4 mx-4 mb-4 text-center">
                    <a href="#" class="btn btn-primary btn-lg d-grid">Pesan-Pesan</a>
                </div>
                <a href="{{route('form_contact.index')}}" class="list-group-item d-flex align-items-center active mx-4">
                    <span class="icons"><i class="ri-mail-line"></i></span> Inbox <span class="ms-auto badge bg-secondary bradius">{{$count_form}}</span>
                </a>
            </div>
            <div class="card-body border-top p-0 py-3">
            </div>
        </div>
    </div>
    <div class="col-xl-9">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Mail Read</h3>
            </div>
            <div class="card-body">
                <div class="email-media">
                    <div class="mt-0 d-sm-flex">
                        <div class="media-body pt-0">
                            <div class="float-end d-none d-md-flex fs-15">
                                <small class="me-3 mt-3 text-muted">{{$form_show->tanggal}}</small>
                                <div class="me-3">
                                    <a href="javascript:void(0)" class="text-danger email-icon bg-danger-transparent" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="{{ route('form_contact.destroy', $form_show->id) }}"><i class="fe fe-trash me-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="media-title text-dark font-weight-semibold mt-1">{{$form_show->nama}}<span class="text-muted font-weight-semibold"> ( {{$form_show->email}} )</span></div>
                        </div>
                    </div>
                </div>
                <div class="eamil-body mt-5">

                    <h6>Isi Pesan</h6><br><br>

                    <p>{{$form_show->pesan}}</p>
                    <br><br>
                    <hr>
                </div>
            </div>
            <form action="{{ route('form_contact.destroy', $form_show->id) }}" method="POST">
                <div class="card-footer">

                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mt-1 mb-1" type="submit">
                        <i class="fa fa-trash me-2"></i>
                        DELETE
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--End  Row -->

@endsection
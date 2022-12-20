@extends('admin.layout')
@section('content')
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Mail-Inbox</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mail-Inbox</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
</div>
<!-- Row -->
<div class="row">
    <div class="col-xl-3">
        <div id="scroll-stickybar" class="position-lg-relative w-100">
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
    </div>
    <div class="col-xl-9">
        <div class="card">
            <div class="card-body p-6">
                <div class="inbox-body">
                    <div class="mail-option">
                        <!-- <div class="chk-all">
                            <div class="btn-group">
                                <a data-bs-toggle="dropdown" href="javascript:void(0)" class="btn mini all" aria-expanded="false">
                                    All
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-start">
                                    <li><a href="javascript:void(0)"> None</a></li>
                                    <li><a href="javascript:void(0)"> Read</a></li>
                                    <li><a href="javascript:void(0)"> Unread</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn mini tooltips">
                                <i class=" fa fa-refresh"></i>
                            </a>
                        </div>
                        <div class="btn-group hidden-phone">
                            <a data-bs-toggle="dropdown" href="javascript:void(0)" class="btn mini blue" aria-expanded="false">
                                More
                                <i class="fa fa-angle-down "></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="fa fa-pencil me-2"></i> Mark as Read</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-ban me-2"></i> Spam</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-trash-o me-2"></i> Delete</a></li>
                            </ul>
                        </div>
                        <ul class="unstyled inbox-pagination">
                            <li><span class="fs-13">1-50 of 234</span></li>

                            <li>
                                <a class="np-btn" href="javascript:void(0)"><i class="fa fa-angle-right pagination-right"></i></a>
                            </li>
                        </ul> -->
                    </div>
                    <div class="table-responsive">
                        <table class="table table-inbox table-hover text-nowrap mb-0">
                            <tbody>
                                @foreach($form as $fr)
                                <tr>
                                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                    <td class="view-message dont-show fw-semibold clickable-row" data-href='{{route('form_contact.show', $fr->slug)}}'>{{$fr->nama}}</td>
                                    <td class="view-message clickable-row" data-href='{{route('form_contact.show', $fr->slug)}}'>{{$fr->email}}</td>
                                    <td class="view-message text-end fw-semibold clickable-row" data-href='{{route('form_contact.show', $fr->slug)}}'>{{$fr->tanggal}}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <ul class="pagination mb-4">
            <!-- <li class="page-item page-prev disabled">
                <a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
            </li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
            <li class="page-item page-next">
                <a class="page-link" href="javascript:void(0)">Next</a>
            </li> -->
        </ul>
    </div>
</div>
<!-- ROW-1 CLOSED -->
@endsection
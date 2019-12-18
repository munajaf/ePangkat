@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>@lang('strings.backend.dashboard.welcome') {{ $logged_in_user->name }}!</strong>
                </div><!--card-header-->
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>Nama</td>
                            <td>Type</td>
                            <td>Date Requested</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        @foreach($data as $list)
                            <tr>
                                <td>{{$list->users->full_name}}</td>
                                <td>{{$list->type}}</td>
                                <td>{{$list->created_at}}</td>
                                <td>
                                    @if($list->status == "rejected")
                                        <h5><span class="badge badge-danger">Rejected</span></h5>
                                    @elseif($list->status == "pending")
                                        <h5><span class="badge badge-warning">Pending</span></h5>
                                    @elseif($list->status == "accepted")
                                        <h5><span class="badge badge-success">Accepted</span></h5>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.request.show', $list->id)}}" >View</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div><!--card-body-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection

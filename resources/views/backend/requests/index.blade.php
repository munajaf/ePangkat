@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>
                        <i class="fas fa-tachometer-alt"></i> Request Lists
                    </strong>
                </div><!--card-header-->

                <div class="card-body">
                    <div class="row">
                        <table class="table">
                            <thead>
                            <tr>
                                <td>#</td>
                                <td>Jawatan Dipohon</td>
                                <td>Tarikh Dipohon</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->type}}</td>
                                    <td>{{$data->created_at}}</td>
                                    <td>
                                        @if($data->status == "rejected")
                                            <span class="label label-danger">Rejected</span>
                                        @elseif($data->status == "pending")
                                            <span class="label label-warning">Pending</span>
                                        @else
                                            <span class="label label-success">Accepted</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.request.show', $data->id)}}" >View</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- row -->
                </div> <!-- card-body -->
            </div><!-- card -->
        </div><!-- row -->
    </div><!-- row -->
@endsection

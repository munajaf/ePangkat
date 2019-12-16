@extends('frontend.layouts.app')

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
                        <a class="btn btn-primary fa-pull-right" href="/request/create" role="button">Pohon Kenaikan Pangkat</a>
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
                                            <h5><span class="badge badge-danger">Rejected</span></h5>
                                        @elseif($data->status == "pending")
                                            <h5><span class="badge badge-warning">Pending</span></h5>
                                        @elseif($data->status == "accepted")
                                            <h5><span class="badge badge-success">Accepted</span></h5>
                                        @elseif($data->status == "draft")
                                            <h5><span class="badge badge-warning">Drafted</span></h5>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/request/{{$data->id}}" >View</a>
                                        @if($data->status != "draft")
                                            <a href="/request/{{$data->id}}/pdf" >Download</a>
                                        @endif
                                        <a href="/request/{{$data->id}}/edit" >Edit</a>
                                        <a href="{{ route('frontend.user.request.destroy', $data->id) }}"
                                           data-method="delete"
                                           data-trans-button-cancel="@lang('buttons.general.cancel')"
                                           data-trans-button-confirm="@lang('buttons.general.crud.delete')"
                                           data-trans-title="@lang('strings.backend.general.are_you_sure')"
                                           >@lang('buttons.general.crud.delete')</a>

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

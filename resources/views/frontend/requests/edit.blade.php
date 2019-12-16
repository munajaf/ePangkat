@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>
                        <i class="fas fa-tachometer-alt"></i> @lang('navs.frontend.dashboard')
                    </strong>
                </div><!--card-header-->

                <div class="card-body">


                    @if(!isset(request()->page))
                        @include('frontend.requests.edit.kategori')
                    @endif
                    @if(request()->page == 1)
                        @include('frontend.requests.edit.kategori1')
                    @endif
                    @if(request()->page == 2)
                        @include('frontend.requests.edit.kategori2')
                    @endif

                    @if(request()->page == 3)
                        @include('frontend.requests.edit.kategori3')
                    @endif

                    @if(request()->page == 4)
                        @include('frontend.requests.edit.kategori4')
                    @endif


                </div><!-- card -->
            </div><!-- row -->
        </div>
    </div>
    <script>

        const getSelect = (selected) => {
            if (selected.value === "VK7") {
                console.log("vk7")
            } else {

            }
        };


        const addFields = (e, chosenWrapper, copyDiv) => {
            var wrapper = $(`#${chosenWrapper}`); //Fields wrapper
            e.preventDefault();
            wrapper.append('<div class="row col-md-12" id="kategori2_syarat1">' + $(`#${copyDiv}`).html() + '<div class="col-md-1"><button class="btn btn-danger btn-sm" style="margin-top: 2px" onclick="deleteFields(event, this)"><i class="fas fa-trash-alt"></i></button></div></div>');
        };

        const deleteFields = (e, deleteButton) => {
            e.preventDefault();
            $(deleteButton).parent('div').parent('div').remove();

        };
    </script>
    <!-- Laravel Javascript Validation -->
@endsection

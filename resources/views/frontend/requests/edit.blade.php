@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <form method="POST" action="{{route('frontend.user.request.update', $data->id)}}"
          enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row mb-4">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <strong>
                            <i class="fas fa-tachometer-alt"></i> @lang('navs.frontend.dashboard')
                        </strong>
                    </div><!--card-header-->

                    <div class="card-body">
                        @include('frontend.requests.edit.kategori')
                        <div class="container">
                            @include('frontend.requests.edit.kategori1')
                        </div>
                        <div class="container">
                            @include('frontend.requests.edit.kategori2')
                        </div>

                        <div class="container">
                            @include('frontend.requests.edit.kategori3')
                        </div>

                        <div class="container">
                            @include('frontend.requests.edit.kategori4')
                        </div>
                        {{ form_submit(__('labels.frontend.contact.button')) }}
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>

        const addFields = (e, chosenWrapper, copyDiv) => {
            var wrapper = $(`#${chosenWrapper}`); //Fields wrapper
            e.preventDefault();
            wrapper.append('<div class="row col-md-12" id="kategori2_syarat1">' + $(`#${copyDiv}`)
            .html() + '<div class="col-md-1"><button class="btn btn-danger btn-sm" style="margin-top: 2px" onclick="deleteFields2(event, this)"><i class="fas fa-trash-alt"></i></button></div></div>');
        };

        const deleteFields = (e, deleteButton, changeToRequired = null) => {
            e.preventDefault();
            $(deleteButton).parent('div').remove();
            if (changeToRequired) {
                $(`#${changeToRequired}`).prop('required', true);
            }
        };

        const deleteFields2 = (e, deleteButton, changeToRequired = null) => {
            e.preventDefault();
            $(deleteButton).parent('div').parent('div').remove();
            if (changeToRequired) {
                $(`#${changeToRequired}`).prop('required', true);
            }
        };

        const handleSubmit = () => {
            let data = 0;
            $('select[name="kategori2_syarat1[jenis][]"] option:selected').map((val, key) => data = (data + parseInt(key.value)));
            console.log(data);
            if (parseInt(data) >= 3) {
                $('#submitMe').click();
            } else {
                alert('Kriteria untuk Menghasilkan TIGA (3) Modul Pengajaran / bab atau SATU (1) Buku ilmiah dalam bidang berkaitan yang diterbitkan oleh penerbit yang diiktiraf tidak ditepati');
            }
        };
    </script>
@endsection

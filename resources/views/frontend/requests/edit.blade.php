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

        var kategori2Syarat1n = 1;
        var kategori2Syarat2n = 1;

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

        const deleteGeranBukanSainsAttachment = (e, myself) => {
            e.preventDefault();
            let selectedName = $('input[name="kategori2_syarat3[attach][bukan_sains]"]');
            selectedName.parent('div').append('<input type="file" name="kategori2_syarat3[attach][bukan_sains]" accept="application/pdf" required/>');
            selectedName.remove();
            $('#derpy1').remove();
            $(myself).remove();
        };

        const deleteGeranSainsAttachment = (e, myself) => {
            e.preventDefault();
            let selectedName = $('input[name="kategori2_syarat3[attach][sains]"]');
            selectedName.parent('div').append('<input type="file" name="kategori2_syarat3[attach][sains]" accept="application/pdf" required/>');
            selectedName.remove();
            $('#derpy2').remove();
            $(myself).remove();
        };

        const addRowKategori2Syarat1 = (e) => {
            e.preventDefault();
            $('#kategori2_syarat1w').append(
                "<div class=\"row col-md-12\" id=\"kategori2_syarat1c\">\n" +
                "        <div class=\"form-group col-xs-10 col-sm-3 col-md-3 col-lg-3\">\n" +
                "            <label>Tajuk</label>\n" +
                "            <input type=\"text\" name=\"kategori2_syarat1[tajuk][" + kategori2Syarat1n + "]\" class=\"form-control\" id=\"\">\n" +
                "        </div>\n" +
                "        <div class=\"form-group col-xs-10 col-sm-3 col-md-3 col-lg-3\">\n" +
                "            <label>Jenis</label>\n" +
                "            <select name=\"kategori2_syarat1[jenis][" + kategori2Syarat1n + "]\" class=\"custom-select\">\n" +
                "                <option value=\"1\">Modul Pengajaran</option>\n" +
                "                <option value=\"3\">Buku Ilmiah</option>\n" +
                "            </select>\n" +
                "        </div>\n" +
                "        <div class=\"form-group col-xs-10 col-sm-3 col-md-3 col-lg-3\">\n" +
                "            <label>Nama Penerbit</label>\n" +
                "            <input type=\"text\" name=\"kategori2_syarat1[penerbit][" + kategori2Syarat1n + "]\" class=\"form-control\"/>\n" +
                "        </div>\n" +
                "        <div class=\"form-group col-xs-10 col-sm-3 col-md-3 col-lg-3\">\n" +
                "            <label>Attachment</label>\n" +
                "            <input type=\"file\" name=\"kategori2_syarat1[attach][" + kategori2Syarat1n + "]\" accept=\"application/pdf\"/>\n" +
                "        </div>\n" +
                "<div class=\"col-md-1\"><button class=\"btn btn-danger btn-sm\" style=\"margin-top: 2px\" onclick=\"deleteFields2(event, this)\"><i class=\"fas fa-trash-alt\"></i></button></div></div>" +
                "    </div>");
            kategori2Syarat1n++;
        };

        const addRowKategori2Syarat2 = (e) => {
            e.preventDefault();
            $('#kategori2_syarat2w').append(
                "<div class=\"row col-md-12\" id=\"kategori2_syarat2c\">\n" +
                "        <div class=\"form-group col-xs-10 col-sm-3 col-md-3 col-lg-4\">\n" +
                "            <label>Tajuk</label>\n" +
                "            <input type=\"text\" class=\"form-control\" name=\"kategori2_syarat2[tajuk][" + kategori2Syarat2n + "]\">\n" +
                "        </div>\n" +
                "        <div class=\"form-group col-xs-10 col-sm-3 col-md-3 col-lg-4\">\n" +
                "            <label>Peranan</label>\n" +
                "            <select class=\"custom-select\" name=\"kategori2_syarat2[peranan][" + kategori2Syarat2n + "]\">\n" +
                "                <option value=\"1\">Ketua Penyelidik</option>\n" +
                "                <option value=\"3\">Lain-Lain</option>\n" +
                "            </select>\n" +
                "        </div>\n" +
                "        <div class=\"form-group col-xs-10 col-sm-3 col-md-3 col-lg-4\">\n" +
                "            <label>Harta Intelek</label>\n" +
                "            <input type=\"file\" name=\"kategori2_syarat2[attach][" + kategori2Syarat2n + "]\" accept=\"application/pdf\"/>\n" +
                "        </div>\n" +
                "<div class=\"col-md-1\"><button class=\"btn btn-danger btn-sm\" style=\"margin-top: 2px\" onclick=\"deleteFields2(event, this)\"><i class=\"fas fa-trash-alt\"></i></button></div></div>" +
                "    </div>");
            kategori2Syarat2n++;
        };

        var kategori2Syarat4n = 1;
        const addRowKategori2Syarat4 = (e) => {
            e.preventDefault();
            $('#kategori2_syarat4w').append(
                "<div id=\"kategori2_syarat4c\" class=\"col-md-12 row\">\n" +
                "        <div class=\"form-group col-xs-10 col-sm-12 col-md-4 col-lg-4\">\n" +
                "            <label>Tajuk</label>\n" +
                "            <input type=\"text\" class=\"form-control\" name=\"kategori2_syarat4[tajuk][" + kategori2Syarat4n + "]\">\n" +
                "        </div>\n" +
                "        <div class=\"form-group col-xs-10 col-sm-12 col-md-4 col-lg-4\">\n" +
                "            <label>Jenis Penerbitan</label>\n" +
                "            <select name=\"kategori2_syarat4[jenis_penerbitan][" + kategori2Syarat4n + "]\" class=\"custom-select\">\n" +
                "                <option value=\"prosiding\">Prosiding</option>\n" +
                "                <option value=\"kertas_polisi\">Kertas Polisi</option>\n" +
                "            </select>\n" +
                "\n" +
                "        </div>\n" +
                "        <div class=\"form-group col-xs-10 col-sm-12 col-md-4 col-lg-3\">\n" +
                "            <label>Attach</label>\n" +
                "            <input type=\"file\" name=\"kategori2_syarat4[attach][" + kategori2Syarat4n + "]\" accept=\"application/pdf\"/>\n" +
                "        </div>\n" +
                "<div class=\"col-md-1\"><button class=\"btn btn-danger btn-sm\" style=\"margin-top: 2px\" onclick=\"deleteFields2(event, this)\"><i class=\"fas fa-trash-alt\"></i></button></div></div>" +
                "    </div>");
            kategori2Syarat4n++;
        };

        var kategori2Syarat5n = 1;
        const addRowKategori2Syarat5 = (e) => {
            e.preventDefault();
            $('#kategori2_syarat5w').append("<div id=\"kategori2_syarat5c\" class=\"row col-md-12\">\n" +
                "        <div class=\"form-group col-xs-10 col-sm-3 col-md-3 col-lg-6\">\n" +
                "                <label>Jawatan</label>\n" +
                "            <select class=\"custom-select\" name=\"kategori2_syarat5[jawatan]["+kategori2Syarat5n+"]\">\n" +
                "                <option value=\"1\">Pengerusi</option>\n" +
                "                <option value=\"2\">Ahli Jawatankuasa\n" +
                "                </option>\n" +
                "            </select>\n" +
                "        </div>\n" +
                "        <div class=\"form-group col-xs-10 col-sm-3 col-md-3 col-lg-5\">\n" +
                "            <label>Attachment</label><br>\n" +
                "            <input type=\"file\" name=\"kategori2_syarat5[attach]["+kategori2Syarat5n+"]\" accept=\"application/pdf\"/>\n" +
                "        </div>\n" +
                "<div class=\"col-md-1\"><button class=\"btn btn-danger btn-sm\" style=\"margin-top: 2px\" onclick=\"deleteFields2(event, this)\"><i class=\"fas fa-trash-alt\"></i></button></div></div>" +
                "    </div>");
            kategori2Syarat5n++;
        };

        var kategori3Syarat1n = 1;
        const addRowKategori3Syarat1 = (e) => {
            e.preventDefault();
            $("#kategori3_syarat1w").append("<div class=\"col-md-11 row\" id=\"kategori3_syarat1c\">\n" +
                "        <div class=\"form-group col-xs-10 col-sm-3 col-md-3 col-lg-4\">\n" +
                "            <label>Penglibatan</label>\n" +
                "            <input type=\"text\" class=\"form-control\" name=\"kategori3_syarat1[penglibatan]["+kategori3Syarat1n+"]\" value=\"\">\n" +
                "        </div>\n" +
                "        <div class=\"form-group col-xs-10 col-sm-3 col-md-3 col-lg-4\">\n" +
                "            <label>Peringkat</label>\n" +
                "            <select class=\"custom-select\" name=\"kategori3_syarat1[peringkat]["+kategori3Syarat1n+"]\">\n" +
                "                <option value=\"1\">Dalam UPNM</option>\n" +
                "                <option value=\"3\">Luar UPNM</option>\n" +
                "            </select>\n" +
                "        </div>\n" +
                "        <div class=\"form-group col-xs-10 col-sm-3 col-md-3 col-lg-3\">\n" +
                "            <label>Attachment</label>\n" +
                "            <input type=\"file\" name=\"kategori3_syarat1[attach]["+kategori3Syarat1n+"]\" accept=\"application/pdf\"/>\n" +
                "        </div>\n" +
                "<div class=\"col-md-1\"><button class=\"btn btn-danger btn-sm\" style=\"margin-top: 2px\" onclick=\"deleteFields2(event, this)\"><i class=\"fas fa-trash-alt\"></i></button></div></div>" +
                "    </div>");
            kategori3Syarat1n++;
        };

        var kategori4Syarat2 = 1;
        const addRowKategori4Syarat2 = (e) => {
            e.preventDefault();
            $('#kategori4_syarat2w').append("<div class=\"row col-md-12\" id=\"kategori4_syarat2c\">\n" +
                "        <div class=\"form-group col-xs-10 col-sm-3 col-md-3 col-lg-4\">\n" +
                "            <label>Jawatan</label>\n" +
                "            <input type=\"text\" class=\"form-control\" name=\"kategori4_syarat2[jawatan]["+kategori4Syarat2+"]\">\n" +
                "        </div>\n" +
                "        <div class=\"form-group col-xs-10 col-sm-3 col-md-3 col-lg-4\">\n" +
                "            <label>Peringkat</label>\n" +
                "            <select class=\"custom-select\" name=\"kategori4_syarat2[peringkat]["+kategori4Syarat2+"]\">\n" +
                "                <option value=\"1\">Kebangsaan</option>\n" +
                "                <option value=\"3\">Antarabangsa</option>\n" +
                "            </select>\n" +
                "        </div>\n" +
                "        <div class=\"form-group col-xs-10 col-sm-3 col-md-3 col-lg-3\">\n" +
                "            <label>Attachment</label>\n" +
                "            <input type=\"file\" name=\"kategori4_syarat2[attach]["+kategori4Syarat2+"]\" accept=\"application/pdf\"/>\n" +
                "        </div>\n" +
                "<div class=\"col-md-1\"><button class=\"btn btn-danger btn-sm\" style=\"margin-top: 2px\" onclick=\"deleteFields2(event, this)\"><i class=\"fas fa-trash-alt\"></i></button></div></div>" +
                "    </div>");
            kategori4Syarat2++;
        }

    </script>
@endsection

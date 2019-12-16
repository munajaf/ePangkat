@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <form method="POST" action="/request" enctype="multipart/form-data" id="form">
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
                    <div class="row">

                        <label>
                            <select name="type">
                                <option value="DS54">DS54</option>
                                <option value="VK7">VK7</option>
                            </select>
                        </label>
                    </div><!-- row -->
                    <div class="container">
                        <h1>Pengajaran dan Penyeliaan</h1>
                        <small>Memenuhi BTA pengajaran untuk TIGA (3) tahun (berdasarkan polisi Universiti)</small>
                        <div class="row pb-5">
                            <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-43">
                                <label for="exampleInputEmail1">Tahun 1</label>
                                <input type="file" required name="kategori1_syarat1_1" accept="application/pdf"/>
                            </div>
                            <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                                <label for="exampleInputEmail1">Tahun 2</label>
                                <input type="file" required name="kategori1_syarat1_2" accept="application/pdf"/>
                            </div>
                            <div class="form-group col-xs-10 col-sm-10 col-md-3 col-lg-3">
                                <label for="exampleInputFile">Tahun 2</label>
                                <input type="file" required name="kategori1_syarat1_3" accept="application/pdf"/>
                            </div>
                        </div>

                        <small>
                            Menghasilkan TIGA (3) Graduan Sarjana (Penyelidikan) atau SEMBILAN (9) Sarjana (Kerja
                            Kursus) di UPNM dan telah disahkan oleh Senat.
                            * Sekurang kurangnya sebagai SATU (1) Penyelia Utama di peringkat (Sarjana)
                            (Penyelidikan)
                            atau TIGA (3) (Sarjana) (Kerja Kursus)
                        </small>
                        <div class="row pb-5">
                            <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                                <div id="kategori1_syarat2_1_wrapper">
                                    <div id="kategori1_syarat2_1">
                                        <div class="col-md-10">
                                            <label>Bilangan PhD</label>
                                                <input type="file" name="kategori1_syarat2_1[attach][]" accept="application/pdf"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <button onclick="addFields(event, 'kategori1_syarat2_1_wrapper', 'kategori1_syarat2_1')" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                            <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                                <label>Bilangan Sarjana (Penyelidikan)</label>
                                <input type="file" required name="kategori1_syarat2_2[attach][]" accept="application/pdf"/>
                            </div>
                            <div class="form-group col-xs-10 col-sm-10 col-md-3 col-lg-3">
                                <label for="exampleInputFile">Bilangan Sarjana (Kerja Kursus)</label>
                                <input type="file" required name="kategori1_syarat2_3[attach][]" accept="application/pdf"/>
                            </div>
                            {{--<table class="table">
                                <thead>
                                <tr>
                                    <td>Bilangan PhD</td>
                                    <td>Bilangan Sarjana (Penyelidikan)</td>
                                    <td>Bilangan Sarjana (Kerja Kursus)</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div id="kategori1_syarat2_1_wrapper">
                                            <div id="kategori1_syarat2_1">
                                                <input type="file" required name="kategori1_syarat2_1[]" accept="application/pdf"/>
                                            </div>
                                        </div>
                                        <button onclick="addFields(event, 'kategori1_syarat2_1_wrapper', 'kategori1_syarat2_1')">Add</button>
                                    </td>
                                    <td>
                                        <div id="kategori1_syarat2_2_wrapper">
                                            <div id="kategori1_syarat2_2">
                                                <input type="file" required name="kategori1_syarat2_2[]" accept="application/pdf"/>
                                            </div>
                                        </div>
                                        <button onclick="addFields(event, 'kategori1_syarat2_2_wrapper', 'kategori1_syarat2_2')">Add</button>
                                    </td>
                                    <td>
                                        <div id="kategori1_syarat2_3_wrapper">
                                            <div id="kategori1_syarat2_3">
                                                <input type="file" required name="kategori1_syarat2_3[]" accept="application/pdf"/>
                                            </div>
                                        </div>
                                        <button onclick="addFields(event, 'kategori1_syarat2_3_wrapper', 'kategori1_syarat2_3')">Add</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>--}}
                        </div>

                        <small>
                            Aktif dalam pengajaran teradun
                        </small>
                        <div class="row pb-5">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>Bilangan MOOC / E-Learning:</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div id="kategori1_syarat3_1_wrapper">
                                            <div id="kategori1_syarat3_1">
                                                <input type="file" required name="kategori1_syarat3_1[attach][]" accept="application/pdf"/>
                                            </div>
                                        </div>
                                        <button onclick="addFields(event, 'kategori1_syarat3_1_wrapper', 'kategori1_syarat3_1')">Add</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <small>
                            Mendapat Anugerah (Anugerah Akademik Cemerlang atau Pingat Pengajaran) atau Purata
                            Penilaian
                            Pengajaran 4.5 (bagi tempoh TIGA (3) tahun)
                        </small>
                        <div class="row pb-5">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>Bilangan Anugerah</td>
                                    <td>Penilaian Pengajaran</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div id="kategori1_syarat4_1_wrapper">
                                            <div id="kategori1_syarat4_1">
                                                <input type="file" required name="kategori1_syarat4_1[attach][]" accept="application/pdf"/>
                                            </div>
                                        </div>
                                        <button onclick="addFields(event, 'kategori1_syarat4_1_wrapper', 'kategori1_syarat4_1')">Add</button>
                                    </td>
                                    <td>
                                        <div id="kategori1_syarat4_2_wrapper">
                                            <div id="kategori1_syarat4_2">
                                                <input type="file" required name="kategori1_syarat4_2[attach][]" accept="application/pdf"/>
                                            </div>
                                        </div>
                                        <button onclick="addFields(event, 'kategori1_syarat4_2_wrapper', 'kategori1_syarat4_2')">Add</button>

                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="container">
                        <h1>Penyelidikan dan Penerbitan</h1>
                        <div class="row">
                            <small>
                                Menghasilkan TIGA (3) Modul Pengajaran / bab atau SATU (1) Buku ilmiah dalam bidang
                                berkaitan yang diterbitkan oleh penerbit yang diiktiraf
                            </small>
                        </div>
                        <div class="row pb-5">
                            <div class="row col-md-11" id="kategori2_syarat1_wrapper">
                                <div class="row col-md-12" id="kategori2_syarat1">
                                    <div class="col-md-2">
                                        Tajuk : <input type="text" name="kategori2_syarat1[tajuk][]" id="" value="">
                                    </div>
                                    <div class="col-md-2">
                                        Jenis : <select name="kategori2_syarat1[jenis][]" id="">
                                            <option value="1">Modul Pengajaran</option>
                                            <option value="3">Buku Ilmiah</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        Nama Penerbit : <input type="text" name="kategori2_syarat1[penerbit][]"/>
                                    </div>
                                    <div class="cold-md-2">
                                        <input type="file" required name="kategori2_syarat1[attach][]" accept="application/pdf"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-md-1">
                                <button onclick="addFields(event, 'kategori2_syarat1_wrapper', 'kategori2_syarat1')">Add
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <small>
                                Minimum DUA (2) Penyelidikan (Sekurang-kurangnya SATU (1) sebagai Ketua Penyelidik) atau
                                SATU (1) harta intelek (IP) (Kumulatif)
                            </small>
                        </div>
                        <div class="row pb-5">
                            <div class="row col-md-11" id="kategori2_syarat2_wrapper">
                                <div class="row col-md-12" id="kategori2_syarat2">
                                    <label for="">Tajuk : </label>
                                    <div class="col-md-3">
                                        <input type="text"
                                               name="kategori2_syarat2[tajuk][]"
                                               id=""/>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Peranan : </label>
                                        <select name="kategori2_syarat2[peranan][]" id="">
                                            <option value="1">Ketua Penyelidik</option>
                                            <option value="0">Lain-Lain</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="">Harta Intelek</label>
                                        <input type="file" required name="kategori2_syarat2[attach][]" accept="application/pdf"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-md-1">
                                <button onclick="addFields(event, 'kategori2_syarat2_wrapper', 'kategori2_syarat2')">Add
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <small>
                                Geran Penyelidikan minimum (Kumulatif):
                                Bukan Sains- RM20,000.00
                                Sains dan Teknologi- RM40,000.00
                            </small>
                        </div>
                        <div class="row pb-5">
                            <div class="row col-md-11" id="kategori2_syarat3_wrapper">
                                <div class="row col-md-12" id="kategori2_syarat3">
                                    <label>Jumlah Geran : </label>
                                    <div class="col-md-3">
                                        <input type="text"
                                               name="kategori2_syarat3[jumlah_geran][]"
                                               id="">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="file" required name="kategori2_syarat3[attach][]" accept="application/pdf"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-md-1">
                                <button onclick="addFields(event, 'kategori2_syarat3_wrapper', 'kategori2_syarat3')">Add
                                </button>
                            </div>
                        </div>


                        <div class="row">
                            <small>
                                Minimum TUJUH (7) penerbitan majalah berindeks google / Scopus / Jurnal Zulfakar,
                                Prosiding
                                yang
                                berindeks, Kertas Polisi

                                (Tiga (3) Prosiding = Dua (2) Penerbitan)
                            </small>
                        </div>
                        <div class="row pb-5">
                            <div class="row col-md-11" id="kategori2_syarat4_wrapper">
                                <div class="row col-md-12" id="kategori2_syarat4">
                                    <label>Jenis Penerbitan : </label><input type="text"
                                                                             name="kategori2_syarat4[jenis_penerbitan][]"
                                                                             id="">
                                </div>
                            </div>
                            <div class="row col-md-1">
                                <button onclick="addFields(event, 'kategori2_syarat4_wrapper', 'kategori2_syarat4')">Add
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <small>
                                Menjadi Pengerusi / Ahli jawatankuasa dalam penubuhan program atau silibus baharu atau
                                semakan kurikulum
                            </small>
                        </div>
                        <div class="row pb-5">
                            <div class="row col-md-11" id="kategori2_syarat5_wrapper">
                                <div class="row col-md-12" id="kategori2_syarat5">
                                    <label>Jawatan : </label>
                                    <div class="col-md-3">
                                        <select name="kategori2_syarat5[jawatan][]" id="">
                                            <option value="1">Pengerusi</option>
                                            <option value="2">Ahli Jawatankuasa</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="file" required name="kategori2_syarat5[attach][]" accept="application/pdf"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-md-1">
                                <button onclick="addFields(event, 'kategori2_syarat5_wrapper', 'kategori2_syarat5')">Add
                                </button>
                            </div>

                        </div>
                    </div>
                    <div class="container">
                        <h1>Perkhidmatan dan Rundingan</h1>

                        <div class="row">
                            <small>DUA (2) Projek Rundingan atau Editor atau Penilai (Dalam atau luar UPNM)</small>
                        </div>
                        <div class="row pb-5">
                            <div class="row col-md-11" id="kategori3_syarat1_wrapper">
                                <div class="row col-md-12" id="kategori3_syarat1">
                                    <label>Penglibatan : </label>
                                    <div class="col-md-3">
                                        <input type="text" name="kategori3_syarat1[penglibatan][]"/>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Peringkat : </label>
                                        <select name="kategori3_syarat1[peringkat][]" id="">
                                            <option value="1">Dalam UPNM</option>
                                            <option value="2">Luar UPNM</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="file" required name="kategori3_syarat1[attach][]" accept="application/pdf"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-md-1">
                                <button onclick="addFields(event, 'kategori3_syarat1_wrapper', 'kategori3_syarat1')">Add
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <small>SATU (1) Invited Speaker peringkat kebangsaan</small>
                        </div>
                        <div class="row pb-5">
                            <div class="row col-md-11" id="kategori3_syarat2_wrapper">
                                <div class="row col-md-12" id="kategori3_syarat2">
                                    Nama Program : <input type="text" name="kategori3_syarat2[nama_program][]"/>
                                    {{--                                    <input type="file" required  name="kategori3_attach2" accept="application/pdf"/>--}}
                                </div>
                            </div>
                            <div class="row col-md-1">
                                <button onclick="addFields(event, 'kategori3_syarat2_wrapper', 'kategori3_syarat2')">Add
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <h1>Kepimpinan dan Pengurusan</h1>
                        <div class="row">
                            <small>Menjadi Ahli Badan Profesional yang diiktiraf / Sub kepakaran</small>
                        </div>
                        <div class="row pb-5">
                            <div class="row col-md-11" id="kategori4_syarat1_wrapper">
                                <div class="row col-md-12" id="kategori4_syarat1">
                                    <label>Keahlian : </label>
                                    <div class="cold-md-3">
                                        <input type="text" name="kategori4_syarat1[keahlian][]"
                                               id="">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Tarikh Sertai : </label>
                                        <input type="text"
                                               name="kategori4_syarat1[tarikh_sertai][]"
                                               id="">
                                    </div>
                                    {{--                                    <input type="file" required  name="kategori4_attach1[]" accept="application/pdf"/>--}}
                                </div>
                            </div>
                            <div class="row col-md-1">
                                <button onclick="addFields(event, 'kategori4_syarat1_wrapper', 'kategori4_syarat1')">Add
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <small>SATU (1) Keahlian jawatankuasa di peringkat kebangsaan atau antarabangsa (Di luar
                                tugas
                                rasmi)
                            </small>
                        </div>
                        <div class="row pb-5">
                            <div class="row col-md-11" id="kategori4_syarat2_wrapper">
                                <div class="row col-md-12" id="kategori4_syarat2">
                                    <label>Jawatan : </label>
                                    <div class="col-md-3">
                                        <input type="text" name="kategori4_syarat2[jawatan][]" id="">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Peringkat : </label>
                                        <select name="kategori4_syarat2[peringkat][]" id="">
                                            <option value="1">Kebangsaan</option>
                                            <option value="2">Antarabangsa</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="file" required name="kategori4_syarat2[attach][]" accept="application/pdf"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-md-1">
                                <button onclick="addFields(event, 'kategori4_syarat2_wrapper', 'kategori4_syarat2')">Add
                                </button>
                            </div>
                        </div>
                        <div class="row pb-5">
                            {{ form_submit(__('labels.frontend.contact.button')) }}
                        </div>

                    </div> <!-- card-body -->
                </div><!-- card -->
            </div><!-- row -->
        </div>
    </div>
    {{ html()->form()->close() }}
    <!-- Laravel Javascript Validation -->



    <script>
        const addFields = (e, chosenWrapper, copyDiv) => {
            var wrapper = $(`#${chosenWrapper}`); //Fields wrapper
            e.preventDefault();
            wrapper.append('<div class="row col-md-10" id="kategori2_syarat1">' + $(`#${copyDiv}`).html() + '<div class="col-md-2"><button class="btn btn-danger" style="margin-top: 2px" onclick="deleteFields(event, this)"><i class="fas fa-trash-alt"></i></button></div></div>');
        };

        const deleteFields = (e, deleteButton) => {
            e.preventDefault();
            $(deleteButton).parent('div').parent('div').remove();

        };
    </script>
@endsection

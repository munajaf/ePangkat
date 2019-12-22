@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

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
                        <div class="row col-md-12 mb-5">
                            <label>Jenis</label>
                            <select name="type" class="custom-select" disabled>
                                <option value="DS54">DS54</option>
                                <option value="VK7">VK7</option>
                            </select>
                        </div><!-- row -->
                        <div class="container">
                            <h1>Pengajaran dan Penyeliaan</h1>
                            <small>Memenuhi BTA pengajaran untuk TIGA (3) tahun (berdasarkan polisi Universiti)</small>
                            <div class="row pb-5">
                                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-43">
                                    <a class="btn btn-primary btn-block" href="/{{$data->kategori1_syarat1[0]}}" target="_blank">Tahun 1 Attachment</a>
                                </div>
                                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                                    <a class="btn btn-primary btn-block" href="/{{$data->kategori1_syarat1[1]}}" target="_blank">Tahun 2 Attachment</a>
                                </div>
                                <div class="form-group col-xs-10 col-sm-10 col-md-3 col-lg-3">
                                    <a class="btn btn-primary btn-block" href="/{{$data->kategori1_syarat1[2]}}" target="_blank">Tahun 3 Attachment</a>
                                </div>
                            </div>

                            @if($data->type == "DS54")
                                <small>
                                    Menghasilkan TIGA (3) Graduan Sarjana (Penyelidikan) atau SEMBILAN (9) Sarjana (Kerja
                                    Kursus) di UPNM dan telah disahkan oleh Senat.
                                    * Sekurang kurangnya sebagai SATU (1) Penyelia Utama di peringkat (Sarjana)
                                    (Penyelidikan)
                                    atau TIGA (3) (Sarjana) (Kerja Kursus)
                                </small>
                            @else
                                <small>
                                    Menghasilkan graduan SATU (1) PhD dan DUA (2) Sarjana (Penyelidikan) di UPNM sebagai Penyelia Utama
                                    serta telah disahkan oleh Senat

                                    (SATU (1) PhD = TIGA (3) Sarjana (Penyelidikan)

                                </small>
                            @endif
                            <div class="row pb-5">
                                <div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div id="kategori1_syarat2_1_wrapper">
                                        <div id="kategori1_syarat2_1">
                                            <div class="col-md-10">
                                                <label>Bilangan PhD</label><br>
                                                @foreach($data->kategori1_syarat2[0] as $key => $list)
                                                    <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">Attachment {{$key + 1}}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <label>Bilangan Sarjana (Penyelidikan)</label><br />
                                    @foreach($data->kategori1_syarat2[1] as $key => $list)
                                        <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">Attachment {{$key + 1}}</a>
                                    @endforeach
                                </div>
                                <div class="form-group col-xs-12 col-sm-10 col-md-4 col-lg-4">
                                    <label>Bilangan Sarjana (Kerja Kursus)</label><br />
                                    @foreach($data->kategori1_syarat2[2] as $key => $list)
                                        <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">Attachment {{$key + 1}}</a>
                                    @endforeach
                                </div>
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
                                                    <?php $i = 1; ?>
                                                    @foreach($data->kategori1_syarat3[0] as $key => $list)
                                                        <a class="btn btn-primary" href="/{{$list}}" target="_blank">Attachment {{$i++}}</a>
                                                    @endforeach
                                                </div>
                                            </div>
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
                                                    @foreach($data->kategori1_syarat4[0] as $key => $list)
                                                        <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">Attachment {{$key + 1}}</a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div id="kategori1_syarat4_2_wrapper">
                                                <div id="kategori1_syarat4_2">
                                                    @foreach($data->kategori1_syarat4[1] as $key => $list)
                                                        <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">Attachment {{$key + 1}}</a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container">
                            <h1>Penyelidikan dan Penerbitan</h1>
                            <div class="row">
                                @if($data->type == "DS54")
                                    <small>
                                        Menghasilkan TIGA (3) Modul Pengajaran / bab atau SATU (1) Buku ilmiah dalam bidang
                                        berkaitan yang diterbitkan oleh penerbit yang diiktiraf
                                    </small>
                                @else
                                    <small>
                                        Menghasilkan ENAM (6) Modul Pengajaran atau DUA (2) Buku ilmiah dalam bidang berkaitan yang
                                        diterbitkan oleh penerbit yang diiktiraf
                                    </small>
                                @endif
                            </div>
                            <div class="row pb-5">
                                <div class="row col-md-11" id="kategori2_syarat1_wrapper">
                                    @foreach($data->kategori2_syarat1 as $key => $list)
                                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                                        @if($key == 0)
                                            <label>Tajuk</label>
                                        @endif
                                        <input type="text" name="kategori2_syarat1[tajuk][]" class="form-control" id="" value="{{$list['tajuk']}}" disabled>
                                    </div>
                                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                                        @if($key == 0)
                                            <label>Jenis</label>
                                        @endif
                                        <select name="kategori2_syarat1[jenis][]" class="custom-select" disabled>
                                            <option value="1" {{($list['jenis'] == 1) ? 'selected' : ''}}>Modul Pengajaran</option>
                                            <option value="3" {{($list['jenis'] == 3) ? 'selected' : ''}}>Buku Ilmiah</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                                        @if($key == 0)
                                            <label>Nama Penerbit</label>
                                        @endif
                                        <input type="text" name="kategori2_syarat1[penerbit][]" class="form-control" value="{{$list['penerbit']}}" disabled/>
                                    </div>
                                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                                        @if($key == 0)
                                            <label>Attachment</label>
                                        @endif
                                        <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">File {{$key + 1}}</a>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="row col-md-1">
                                </div>
                            </div>

                            <div class="row">
                                @if($data->type == "DS54")
                                    <small>
                                        Minimum DUA (2) Penyelidikan (Sekurang-kurangnya SATU (1) sebagai Ketua Penyelidik)
                                        atau
                                        SATU (1) harta intelek (IP) (Kumulatif)
                                    </small>
                                @else
                                    <small>
                                        Minimum LIMA (5) Penyelidikan (Sekurang-kurangnya DUA (2) Ketua Penyelidik) atau harta intelek (IP)
                                        (Kumulatif)

                                        Dua (2) Penyelidikan = Satu (1) harta intelek
                                    </small>
                                @endif
                            </div>
                            <div class="row pb-5">
                                <div class="row col-md-11" id="kategori2_syarat2_wrapper">
                                    @foreach($data->kategori2_syarat2 as $key => $list)
                                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                                        @if($key == 0)
                                            <label>Tajuk</label>
                                        @endif
                                        <input type="text" class="form-control" id="" value="{{$list['tajuk']}}" disabled>
                                    </div>
                                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                                        @if($key == 0)
                                            <label>Peranan</label>
                                        @endif
                                        <select class="custom-select" disabled>
                                            <option value="1" {{($list['peranan'] == 1) ? 'selected' : ''}}>Ketua Penyelidik</option>
                                            <option value="3" {{($list['peranan'] == 3) ? 'selected' : ''}}>Lain-Lain</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                                        @if($key == 0)
                                            <label>Harta Intelek</label>
                                        @endif
                                        <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">File {{$key + 1}}</a>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="row col-md-1">
                                </div>
                            </div>

                            <div class="row">
                                @if($data->type == "DS54")
                                    <small>
                                        Geran Penyelidikan minimum (Kumulatif):
                                        Bukan Sains- RM20,000.00
                                        Sains dan Teknologi- RM40,000.00
                                    </small>
                                @else
                                    <small>
                                        Geran Penyelidikan minimum (Kumulatif):

                                        Bukan Sains - RM50,000.00
                                        Sains dan Teknologi - RM100,000.00
                                    </small>
                                @endif
                            </div>
                            <div class="row pb-5">
                                <div class="row col-md-11" id="kategori2_syarat3_wrapper">

                                    <div class="form-group col-xs-10 col-sm-3 col-md-6 col-lg-6">
                                        <label>Jumlah Geran Bukan Sains</label>
                                        <input type="text" class="form-control" value="{{$data->kategori2_syarat3['bukan_sains']['jumlah_geran']}}"
                                               min="{{($data->type == "DS54" ? 20000:50000)}}"
                                        >
                                    </div>

                                    <div class="form-group col-xs-10 col-sm-3 col-md-6 col-lg-6">
                                        <label>Attachment</label>
                                        <a class="btn btn-primary btn-block" href="/{{$data->kategori2_syarat3['bukan_sains']['attach']}}" target="_blank">File</a>
                                    </div>

                                    <div class="form-group col-xs-10 col-sm-3 col-md-6 col-lg-6">
                                        <label>Jumlah Geran Sains dan Teknologi</label>
                                        <input type="text" class="form-control" value="{{$data->kategori2_syarat3['sains']['jumlah_geran']}}"
                                               min="{{($data->type == "DS54" ? 40000:100000)}}"
                                        >
                                    </div>

                                    <div class="form-group col-xs-10 col-sm-3 col-md-6 col-lg-6">
                                        <label>Attachment</label>
                                        <a class="btn btn-primary btn-block" href="/{{$data->kategori2_syarat3['sains']['attach']}}" target="_blank">File</a>
                                    </div>

                                </div>
                                <div class="row col-md-1">
                                </div>
                            </div>


                            <div class="row">
                                @if($data->type == "DS54")
                                    <small>
                                        Minimum TUJUH (7) penerbitan majalah berindeks google / Scopus / Jurnal Zulfakar,
                                        Prosiding
                                        yang
                                        berindeks, Kertas Polisi

                                        (Tiga (3) Prosiding = Dua (2) Penerbitan)
                                    </small>
                                @else
                                    <small>
                                        Minimum penerbitan LIMA BELAS (15) majalah berindeks Google / Scopus / Jurnal Zulfakar, Prosiding
                                        yang
                                        berindeks dan Kertas Polisi

                                        (TIGA (3) jurnal hendaklah dalam jurnal ISI / Scopus sebagai Penulis Utama)
                                    </small>
                                @endif
                            </div>
                            <div class="row pb-5">
                                <div class="row col-md-11" id="kategori2_syarat4_wrapper">
                                    @foreach($data->kategori2_syarat4 as $key => $list)
                                        <div id="kategori2_syarat4" class="col-md-12 row">
                                            <div class="form-group col-xs-10 col-sm-12 col-md-4 col-lg-4">
                                                @if($key == 0)
                                                    <label>Tajuk</label>
                                                @endif
                                                <input type="text" class="form-control" id="" value="{{$list['tajuk']}}" disabled>
                                            </div>
                                            <div class="form-group col-xs-10 col-sm-12 col-md-4 col-lg-4">
                                                @if($key == 0)
                                                    <label>Jenis Penerbitan</label>
                                                @endif
                                                <select name="kategori2_syarat4[jenis_penerbitan][]" class="custom-select" id="" disabled>
                                                    <option value="prosiding" {{($list['jenis_penerbitan'] == "prosiding") ? 'selected': ''}}>Prosiding</option>
                                                    <option value="kertas_polisi" {{($list['jenis_penerbitan'] != "prosiding") ? 'selected': ''}}>Kertas Polisi</option>
                                                </select>

                                            </div>
                                            <div class="form-group col-xs-10 col-sm-12 col-md-4 col-lg-4">
                                                @if($key == 0)
                                                    <label>Attach</label>
                                                @endif
                                                <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">File</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row col-md-1">
                                </div>
                            </div>

                            <div class="row">
                                @if($data->type == "DS54")
                                    <small>
                                        Menjadi Pengerusi / Ahli jawatankuasa dalam penubuhan program atau silibus baharu
                                        atau
                                        semakan kurikulum
                                    </small>
                                @else
                                    <small>
                                        TIGA (3) Pengerusi / Ahli jawatankuasa dalam penubuhan program atau silibus baharu atau semakan
                                        kurikulum
                                    </small>
                                @endif
                            </div>
                            <div class="row pb-5">
                                <div class="row col-md-11" id="kategori2_syarat5_wrapper">
                                    @foreach($data->kategori2_syarat5 as $key => $list)
                                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-6">
                                            @if($key == 0)
                                                <label>Jawatan</label>
                                            @endif
                                            <select class="custom-select" disabled>
                                                <option value="1" {{($list['jawatan'] == 1) ? 'selected' : ''}}>Pengerusi</option>
                                                <option value="2" {{($list['jawatan'] == 2) ? 'selected' : ''}}>Ahli Jawatankuasa</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-6">
                                            @if($key == 0)
                                                <label>Attachment</label>
                                            @endif
                                            <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">File {{$key + 1}}</a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row col-md-1">
                                </div>

                            </div>
                        </div>
                        <div class="container">
                            <h1>Perkhidmatan dan Rundingan</h1>

                            <div class="row">
                                @if($data->type == "DS54")
                                    <small>DUA (2) Projek Rundingan atau Editor atau Penilai (Dalam atau luar UPNM)</small>
                                @else
                                    <small>TIGA (3) Projek Rundingan atau Editor/Penilai (Di dalam atau luar UPNM) </small>
                                @endif
                            </div>
                            <div class="row pb-5">
                                <div class="row col-md-11" id="kategori3_syarat1_wrapper">
                                    @foreach($data->kategori3_syarat1 as $key => $list)
                                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                                            @if($key == 0)
                                                <label>Penglibatan</label>
                                            @endif
                                            <input type="text" class="form-control" id="" value="{{$list['penglibatan']}}" disabled>
                                        </div>
                                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                                            @if($key == 0)
                                                <label>Peringkat</label>
                                            @endif
                                            <select class="custom-select" disabled>
                                                <option value="1" {{($list['peringkat'] == 1) ? 'selected' : ''}}>Dalam UPNM</option>
                                                <option value="3" {{($list['peringkat'] == 2) ? 'selected' : ''}}>Luar UPNM</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                                            @if($key == 0)
                                                <label>Attachment</label>
                                            @endif
                                            <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">File {{$key + 1}}</a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row col-md-1">
                                </div>
                            </div>

                            <div class="row">
                                @if($data->type == "DS54")
                                    <small>SATU (1) Invited Speaker peringkat kebangsaan</small>
                                @else
                                    <small>SATU (1) keynote speaker atau Invited Speaker peringkat antarabangsa</small>
                                @endif
                            </div>
                            <div class="row pb-5">
                                <div class="row col-md-11" id="kategori3_syarat2_wrapper">
                                    @foreach($data->kategori3_syarat2 as $key => $list)
                                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                                            @if($key == 0)
                                                <label>Nama Program</label>
                                            @endif
                                            <input type="text" class="form-control" id="" value="{{$list['nama_program']}}" disabled>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row col-md-1">
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <h1>Kepimpinan dan Pengurusan</h1>
                            <div class="row">
                                @if($data->type == "DS54")
                                    <small>Menjadi Ahli Badan Profesional yang diiktiraf / Sub kepakaran</small>

                                @else
                                    <small>
                                        Menjadi Ahli Badan Profesional / Pertubuhan Akademik yang diiktiraf
                                    </small>
                                @endif
                            </div>
                            <div class="row pb-5">
                                <div class="row col-md-11" id="kategori4_syarat1_wrapper">
                                    @foreach($data->kategori4_syarat1 as $key => $list)
                                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                                            @if($key == 0)
                                                <label>Keahlian</label>
                                            @endif
                                            <input type="text" class="form-control" id="" value="{{$list['keahlian']}}" disabled>
                                        </div>
                                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                                            @if($key == 0)
                                                <label>Tarikh Sertai</label>
                                            @endif
                                            <input type="text" class="form-control" id="" value="{{$list['tarikh_sertai']}}" disabled>
                                        </div>

                                    @endforeach
                                </div>
                                <div class="row col-md-1">
                                </div>
                            </div>

                            <div class="row">
                                @if($data->type == "DS54")
                                    <small>SATU (1) Keahlian jawatankuasa di peringkat kebangsaan atau antarabangsa (Di luar
                                        tugas
                                        rasmi)
                                    </small>

                                @else
                                    <small>
                                        DUA (2) Keahlian jawatankuasa di peringkat kebangsaan dan antarabangsa (Di luar tugas rasmi)

                                    </small>
                                @endif
                            </div>
                            <div class="row pb-5">
                                <div class="row col-md-11" id="kategori4_syarat2_wrapper">
                                    @foreach($data->kategori4_syarat2 as $key => $list)
                                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                                            @if($key == 0)
                                                <label>Jawatan</label>
                                            @endif
                                            <input type="text" class="form-control" id="" value="{{$list['jawatan']}}" disabled>
                                        </div>
                                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                                            @if($key == 0)
                                                <label>Peringkat</label>
                                            @endif
                                            <select class="custom-select" disabled>
                                                <option value="1" {{($list['peringkat'] == 1) ? 'selected' : ''}}>Kebangsaan</option>
                                                <option value="3" {{($list['peringkat'] == 2) ? 'selected' : ''}}>Antarabangsa</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                                            @if($key == 0)
                                                <label>Attachment</label>
                                            @endif
                                            <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">File {{$key + 1}}</a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row col-md-1">
                                </div>
                            </div>
                            <form method="post" action="{{route('admin.request.update', $data->id)}}">
                                @method('patch')
                                @csrf
                                <input type="text" name="status" id="status" value="accepted" hidden>
                                <button type="submit" class="btn btn-success" onclick="defineStatus('accepted')">Terima Permohonan</button>
                                <button type="submit" class="btn btn-danger" onclick="defineStatus('rejected')">Tolak Permohonan</button>
                            </form>
                        </div> <!-- card-body -->
                    </div><!-- card -->
                </div><!-- row -->
            </div>
        </div>

    <script>
        const defineStatus = (status) => {
            $('#status').val(status);
        };
    </script>
@endsection

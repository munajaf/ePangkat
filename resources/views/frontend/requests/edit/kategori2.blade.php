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
            <div class="row col-md-12">
                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                    @if($key == 0)
                        <label>Tajuk</label>
                    @endif
                    <input type="text" name="kategori2_syarat1[tajuk][]" class="form-control" value="{{$list['tajuk']}}">
                </div>
                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                    @if($key == 0)
                        <label>Jenis</label>
                    @endif
                    <select name="kategori2_syarat1[jenis][]" class="custom-select">
                        <option value="1" {{($list['jenis'] == 1) ? 'selected' : ''}}>Modul
                            Pengajaran
                        </option>
                        <option value="3" {{($list['jenis'] == 3) ? 'selected' : ''}}>Buku Ilmiah
                        </option>
                    </select>
                </div>
                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                    @if($key == 0)
                        <label>Nama Penerbit</label>
                    @endif
                    <input type="text" name="kategori2_syarat1[penerbit][]" class="form-control" value="{{$list['penerbit']}}"/>
                </div>
                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-2">
                    @if($key == 0)
                        <label>Attachment</label>
                    @endif
                    <input class="form-control-file" name="kategori2_syarat1[attach][]" value="{{$list['attach']}}" hidden/>
                    <a class="btn btn-primary btn-block" href="/{{$list['attach']}}"
                       target="_blank">File {{$key + 1}}</a>
                </div>
                <div class="col-md-1 row ml-0">
                    <button class="btn btn-danger btn-sm" style="margin-top: 2px"
                            onclick="deleteFields(event, this)"><i class="fas fa-trash-alt"></i>
                    </button>
                </div>

            </div>
    </div>
    @endforeach
    <div class="row col-md-12" id="kategori2_syarat1c">
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label>Tajuk</label>
            <input type="text" name="kategori2_syarat1[tajuk][]" class="form-control" id="">
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label>Jenis</label>
            <select name="kategori2_syarat1[jenis][]" class="custom-select">
                <option value="1">Modul Pengajaran</option>
                <option value="3">Buku Ilmiah</option>
            </select>
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label>Nama Penerbit</label>
            <input type="text" name="kategori2_syarat1[penerbit][]" class="form-control"/>
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label>Attachment</label>
            <input type="file" name="kategori2_syarat1[attach][]" accept="application/pdf"/>
        </div>
    </div>
    <div id="kategori2_syarat1w" class="row col-md-12"></div>


</div>
<button
    onclick="addFields(event, 'kategori2_syarat1w', 'kategori2_syarat1c')"
    class="btn btn-primary">Add
</button>

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
            <div class="row col-md-12">
                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                    @if($key == 0)
                        <label>Tajuk</label>
                    @endif
                    <input type="text" class="form-control" name="kategori2_syarat2[tajuk][]" value="{{$list['tajuk']}}">
                </div>
                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                    @if($key == 0)
                        <label>Peranan</label>
                    @endif
                    <select class="custom-select" name="kategori2_syarat2[peranan][]">
                        <option value="1" {{($list['peranan'] == 1) ? 'selected' : ''}}>Ketua
                            Penyelidik
                        </option>
                        <option value="3" {{($list['peranan'] == 3) ? 'selected' : ''}}>Lain-Lain
                        </option>
                    </select>
                </div>
                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                    @if($key == 0)
                        <label>Harta Intelek</label>
                    @endif
                    <input class="form-control-file" name="kategori2_syarat2[attach][]" value="{{$list['attach']}}" hidden/>
                    <a class="btn btn-primary btn-block" href="/{{$list['attach']}}"
                       target="_blank">File {{$key + 1}}</a>
                </div>
                <div class="col-md-1 row ml-0">
                    <button class="btn btn-danger btn-sm" style="margin-top: 2px"
                            onclick="deleteFields(event, this)"><i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row col-md-12" id="kategori2_syarat2c">
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
            <label>Tajuk</label>
            <input type="text" class="form-control" name="kategori2_syarat2[tajuk][]">
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
            <label>Peranan</label>
            <select class="custom-select" name="kategori2_syarat2[peranan][]">
                <option value="1">Ketua Penyelidik</option>
                <option value="3">Lain-Lain</option>
            </select>
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
            <label>Harta Intelek</label>
            <input type="file" name="kategori2_syarat2[attach][]" accept="application/pdf"/>
        </div>
    </div>
    <div id="kategori2_syarat2w"></div>
    <div class="row col-md-1">
        <button
            onclick="addFields(event, 'kategori2_syarat2w', 'kategori2_syarat2c')"
            class="btn btn-primary">Add
        </button>
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
                <input type="text" class="form-control" name="kategori2_syarat3[jumlah_geran][bukan_sains]"
                       value="{{$data->kategori2_syarat3['bukan_sains']['jumlah_geran']}}"
                       min="{{($data->type == "DS54" ? 20000:50000)}}"
                >
            </div>

            <div class="form-group col-xs-10 col-sm-3 col-md-6 col-lg-6">
                <label>Attachment</label>
                <input class="form-control-file" name="kategori2_syarat3[attach][]"
                       value="{{$data->kategori2_syarat3['bukan_sains']['attach']}}" hidden/>
                <a class="btn btn-primary btn-block" href="/{{$data->kategori2_syarat3['bukan_sains']['attach']}}" target="_blank">File</a>
            </div>

            <div class="form-group col-xs-10 col-sm-3 col-md-6 col-lg-6">
                <label>Jumlah Geran Sains dan Teknologi</label>
                <input type="text" class="form-control" name="kategori2_syarat3[jumlah_geran][sains]"
                       value="{{$data->kategori2_syarat3['sains']['jumlah_geran']}}"
                       min="{{($data->type == "DS54" ? 40000:100000)}}"
                >
            </div>

            <div class="form-group col-xs-10 col-sm-3 col-md-6 col-lg-6">
                <label>Attachment</label>
                <input class="form-control-file" name="kategori2_syarat3['sains'][attach]"
                       value="{{$data->kategori2_syarat3['sains']['attach']}}" hidden/>
                <a class="btn btn-primary btn-block" href="/{{$data->kategori2_syarat3['sains']['attach']}}" target="_blank">File</a>
            </div>
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
                    <input type="text" class="form-control" name="kategori2_syarat4[tajuk][]"
                           value="{{$list['tajuk']}}">
                </div>
                <div class="form-group col-xs-10 col-sm-12 col-md-4 col-lg-4">
                    @if($key == 0)
                        <label>Jenis Penerbitan</label>
                    @endif
                    <select name="kategori2_syarat4[jenis_penerbitan][]" class="custom-select">
                        <option
                            value="prosiding" {{($list['jenis_penerbitan'] == "prosiding") ? 'selected': ''}}>
                            Prosiding
                        </option>
                        <option
                            value="kertas_polisi" {{($list['jenis_penerbitan'] != "prosiding") ? 'selected': ''}}>
                            Kertas Polisi
                        </option>
                    </select>

                </div>
                <div class="form-group col-xs-10 col-sm-12 col-md-4 col-lg-3">
                    @if($key == 0)
                        <label>Attach</label>
                    @endif
                    <input class="form-control-file" name="kategori2_syarat4[attach][]"
                           value="{{$list['attach']}}" hidden/>
                    <a class="btn btn-primary btn-block" href="/{{$list['attach']}}"
                       target="_blank">File</a>
                </div>
                <div class="row col-md-1">
                    <button class="btn btn-danger btn-sm" style="margin-top: 2px"
                            onclick="deleteFields2(event, this)"><i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
    <div id="kategori2_syarat4c" class="col-md-12 row">
        <div class="form-group col-xs-10 col-sm-12 col-md-4 col-lg-4">
            <label>Tajuk</label>
            <input type="text" class="form-control" name="kategori2_syarat4[tajuk][]">
        </div>
        <div class="form-group col-xs-10 col-sm-12 col-md-4 col-lg-4">
            <label>Jenis Penerbitan</label>
            <select name="kategori2_syarat4[jenis_penerbitan][]" class="custom-select">
                <option value="prosiding">Prosiding</option>
                <option value="kertas_polisi">Kertas Polisi</option>
            </select>

        </div>
        <div class="form-group col-xs-10 col-sm-12 col-md-4 col-lg-3">
            <label>Attach</label>
            <input type="file" name="kategori2_syarat4[attach][]" accept="application/pdf"/>
        </div>
    </div>
    <div id="kategori2_syarat4w" class="row col-md-12"></div>
    <button
        onclick="addFields(event, 'kategori2_syarat4w', 'kategori2_syarat4c')"
        class="btn btn-primary">Add
    </button>
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
            <div class="row col-md-12">
                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-6">
                    @if($key == 0)
                        <label>Jawatan</label>
                    @endif
                    <select class="custom-select" name="kategori2_syarat5[jawatan][]">
                        <option value="1" {{($list['jawatan'] == 1) ? 'selected' : ''}}>Pengerusi
                        </option>
                        <option value="2" {{($list['jawatan'] == 2) ? 'selected' : ''}}>Ahli
                            Jawatankuasa
                        </option>
                    </select>
                </div>
                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-5">
                    @if($key == 0)
                        <label>Attachment</label>
                    @endif
                    <input class="form-control-file" name="kategori2_syarat5[attach][]"
                           value="{{$list['attach']}}" hidden/>
                    <a class="btn btn-primary btn-block" href="/{{$list['attach']}}"
                       target="_blank">File {{$key + 1}}</a>
                </div>
                <button class="btn btn-danger btn-sm" style="margin-top: 2px"
                        onclick="deleteFields2(event, this)"><i class="fas fa-trash-alt"></i>
                </button>
            </div>
        @endforeach
    </div>
    <div id="kategori2_syarat5c" class="row col-md-12">
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-6">
            @if($key == 0)
                <label>Jawatan</label>
            @endif
            <select class="custom-select" name="kategori2_syarat5[jawatan][]">
                <option value="1" {{($list['jawatan'] == 1) ? 'selected' : ''}}>Pengerusi</option>
                <option value="2" {{($list['jawatan'] == 2) ? 'selected' : ''}}>Ahli Jawatankuasa
                </option>
            </select>
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-5">
            <label>Attachment</label><br>
            <input type="file" name="kategori2_syarat5[attach][]" accept="application/pdf"/>
        </div>
    </div>
    <div id="kategori2_syarat5w" class="row col-md-12"></div>
    <button
        onclick="addFields(event, 'kategori2_syarat5w', 'kategori2_syarat5c')"
        class="btn btn-primary">Add
    </button>

</div>

<h1>Pengajaran dan Penyeliaan</h1>
<small>Memenuhi BTA pengajaran untuk TIGA (3) tahun (berdasarkan polisi Universiti)</small>
<div class="row pb-5">
    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4 row">
        <div class="row col-md-12">
            <div class="row col-md-11 mb-2">
                <input class="form-control-file" name="kategori1_syarat1_1" value="{{$data->kategori1_syarat1[0]}}" hidden/>
                <a class="btn btn-primary btn-block" href="/{{$data->kategori1_syarat1[0]}}" target="_blank">Tahun 1 Attachment</a>
            </div>
            <div class="row col-md-1 ml-0 mb-2">
                <button class="btn btn-danger btn-sm" style="margin-top: 2px" onclick="deleteFields2(event, this, 'kategori1_syarat1_1')"><i class="fas fa-trash-alt"></i></button>
            </div>
        </div>
        <input type="file" id="kategori1_syarat1_1" name="kategori1_syarat1_1" accept="application/pdf"/>
    </div>
    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4 row">
        <div class="row col-md-12">
            <div class="col-md-11 row mb-2">
                <input class="form-control-file" name="kategori1_syarat1_2" value="{{$data->kategori1_syarat1[1]}}" hidden/>
                <a class="btn btn-primary btn-block" href="/{{$data->kategori1_syarat1[1]}}" target="_blank">Tahun 2 Attachment</a>
            </div>
            <div class="col-md-1 row ml-0 mb-2">
                <button class="btn btn-danger btn-sm" style="margin-top: 2px" onclick="deleteFields2(event, this, 'kategori1_syarat1_2')"><i class="fas fa-trash-alt"></i></button>
            </div>
        </div>
        <input type="file" id="kategori1_syarat1_2" name="kategori1_syarat1_2" accept="application/pdf"/>
    </div>
    <div class="form-group col-xs-10 col-sm-10 col-md-3 col-lg-4 row">
        <div class="row col-md-12">
            <div class="col-md-11 row mb-2">
                <input class="form-control-file" name="kategori1_syarat1_3" value="{{$data->kategori1_syarat1[2]}}" hidden/>
                <a class="btn btn-primary btn-block" href="/{{$data->kategori1_syarat1[2]}}" target="_blank">Tahun 3 Attachment</a>
            </div>
            <div class="col-md-1 row ml-0 mb-2">
                <button class="btn btn-danger btn-sm" style="margin-top: 2px" onclick="deleteFields2(event, this, 'kategori1_syarat1_3')"><i class="fas fa-trash-alt"></i></button>
            </div>
        </div>
        <input type="file" id="kategori1_syarat1_3" name="kategori1_syarat1_3" accept="application/pdf"/>
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
        <div id="">
            <div id="kategori1_syarat2_1">
                <div class="col-md-12">
                    <label>Bilangan PhD</label><br>
                    @foreach($data->kategori1_syarat2[0] as $key => $list)
                        <div class="row col-md-12 row">
                            <div class="row col-md-11 mb-2">
                                <input class="form-control-file" name="kategori1_syarat2_1[attach][{{$key+10}}]" value="{{$list['attach']}}" hidden/>
                                <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">Attachment</a>
                            </div>
                            <div class="col-md-1 ml-0 mb-2">
                                <button class="btn btn-danger btn-sm" style="margin-top: 2px" onclick="deleteFields(event, this)"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </div>
                    @endforeach
                    <div id="kategori1_syarat2_1_copy">
                        <input type="file" name="kategori1_syarat2_1[attach][]" accept="application/pdf"/>
                    </div>
                    <div id="kategori1_syarat2_1_wrapper"></div>
                    <button
                        onclick="addFields(event, 'kategori1_syarat2_1_wrapper', 'kategori1_syarat2_1_copy')"
                        class="btn btn-primary btn-block">Add
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-10">
        </div>
    </div>
    <div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4 row">
        <label>Bilangan Sarjana (Penyelidikan)</label><br />
        @foreach($data->kategori1_syarat2[1] as $key => $list)
            <div class="col-md-12 row mb-2">
                <div class="col-md-11 row">
                    <input class="form-control-file" name="kategori1_syarat2_2[attach][{{$key+10}}]" value="{{$list['attach']}}" hidden/>
                    <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">Attachment</a>
                </div>
                <div class="col-md-1 row ml-0">
                    <button class="btn btn-danger btn-sm" style="margin-top: 2px" onclick="deleteFields2(event, this)"><i class="fas fa-trash-alt"></i></button>
                </div>
            </div>
        @endforeach
        <div id="kategori1_syarat2_2_copy">

            <input type="file" name="kategori1_syarat2_2[attach][]" accept="application/pdf"/>
        </div>

        <div id="kategori1_syarat2_2_wrapper"></div>
        <button
            onclick="addFields(event, 'kategori1_syarat2_2_wrapper', 'kategori1_syarat2_2_copy')"
            class="btn btn-primary btn-block">Add
        </button>
    </div>
    <div class="form-group col-xs-12 col-sm-10 col-md-4 col-lg-4">
        <label>Bilangan Sarjana (Kerja Kursus)</label><br />
        @foreach($data->kategori1_syarat2[2] as $key => $list)
            <div class="col-md-12 row mb-2">
                <div class="row col-md-11 row">
                    <input class="form-control-file" name="kategori1_syarat2_3[attach][{{$key + 10}}]" value="{{$list['attach']}}" hidden/>
                    <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">Attachment</a>
                </div>
                <div class="col-md-1 row ml-0">
                    <button class="btn btn-danger btn-sm" style="margin-top: 2px" onclick="deleteFields2(event, this)"><i class="fas fa-trash-alt"></i></button>
                </div>
            </div>

        @endforeach
        <div id="kategori1_syarat2_3_copy">
            <input type="file" name="kategori1_syarat2_3[attach][]" accept="application/pdf"/>
        </div>

        <div id="kategori1_syarat2_3_wrapper"></div>
        <button
            onclick="addFields(event, 'kategori1_syarat2_3_wrapper', 'kategori1_syarat2_3_copy')"
            class="btn btn-primary btn-block">Add
        </button>
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
                <div id="">
                    <div id="kategori1_syarat3_1">
                        <?php $i = 10; ?>
                        @foreach($data->kategori1_syarat3[0] as $key => $list)
                            <div class="row col-md-12 mb-2">
                                <div class="col-md-3 row">
                                    <input class="form-control-file" name="kategori1_syarat3_1[attach][{{$i++}}]" value="{{$list}}" hidden/>
                                    <a class="btn btn-primary" href="/{{$list}}" target="_blank">Attachment</a>
                                </div>
                                <div class="row col-md-1 ml-0">
                                    <button class="btn btn-danger btn-sm" style="margin-top: 2px" onclick="deleteFields2(event, this)"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                        @endforeach
                        <div id="kategori1_syarat3_1_copy" class="mb-2 row col-md-12">
                            <input type="file" name="kategori1_syarat3_1[attach][]" accept="application/pdf"/>
                        </div>
                        <div id="kategori1_syarat3_1_wrapper" class="mb-2"></div>
                        <button
                            onclick="addFields(event, 'kategori1_syarat3_1_wrapper', 'kategori1_syarat3_1_copy')"
                            class="btn btn-primary">Add
                        </button>

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
                            <div class="row col-md-12 mb-2">
                                <div class="col-md-11 row">
                                    <input class="form-control-file" name="kategori1_syarat4_1[attach][{{$key+10}}]" value="{{$list['attach']}}" hidden/>
                                    <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">Attachment</a>
                                </div>
                                <div class="col-md-1 row ml-0">
                                    <button class="btn btn-danger btn-sm" style="margin-top: 2px" onclick="deleteFields2(event, this)"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                        @endforeach
                        <div id="kategori1_syarat4_1c">
                            <input type="file" name="kategori1_syarat4_1[attach][]" accept="application/pdf"/>
                        </div>
                        <div id="kategori1_syarat4_1w"></div>
                        <button
                            onclick="addFields(event, 'kategori1_syarat4_1w', 'kategori1_syarat4_1c')"
                            class="btn btn-primary">Add
                        </button>
                    </div>
                </div>
            </td>
            <td>
                <div id="kategori1_syarat4_2_wrapper">
                    <div id="kategori1_syarat4_2">
                        @foreach($data->kategori1_syarat4[1] as $key => $list)
                            <div class="row col-md-12 mb-2">
                                <div class="col-md-11 row">
                                    <input class="form-control-file" name="kategori1_syarat4_2[attach][{{$key+10}}]" value="{{$list['attach']}}" hidden/>
                                    <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">Attachment</a>
                                </div>
                                <div class="col-md-1 row ml-0">
                                    <button class="btn btn-danger btn-sm" style="margin-top: 2px" onclick="deleteFields2(event, this)"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                        @endforeach
                        <div id="kategori1_syarat4_2c">
                            <input type="file" name="kategori1_syarat4_2[attach][]" accept="application/pdf"/>
                        </div>
                        <div id="kategori1_syarat4_2w"></div>
                        <button
                            onclick="addFields(event, 'kategori1_syarat4_2w', 'kategori1_syarat4_2c')"
                            class="btn btn-primary">Add
                        </button>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>

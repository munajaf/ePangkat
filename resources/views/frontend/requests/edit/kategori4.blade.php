<h1>Kepimpinan dan Pengurusan</h1>
<div class="row">
    @if($data->type == "DS54")
        <small>Menjadi Ahli Badan Profesional yang diiktiraf / Sub kepakaran</small>

    @else
        <small>
            Menjadi Ahli Badan Profesional / Pertubuhan Akademik yang diiktiraf
        </small>
    @endif</div>
<div class="row pb-5">
    <div class="row col-md-11" id="kategori4_syarat1_wrapper">
        @foreach($data->kategori4_syarat1 as $key => $list)
            <div class="row col-md-12">
                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                    @if($key == 0)
                        <label>Keahlian</label>
                    @endif
                    <input type="text" class="form-control" name="kategori4_syarat1[keahlian][]" value="{{$list['keahlian']}}">
                </div>
                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                    @if($key == 0)
                        <label>Tarikh Sertai</label>
                    @endif
                    <input type="text" class="form-control" name="kategori4_syarat1[tarikh_sertai][]" value="{{$list['tarikh_sertai']}}">
                </div>
                <div class="form-group col-md-2">
                    <button class="btn btn-danger btn-sm" style="margin-top: 2px" onclick="deleteFields2(event, this)"><i class="fas fa-trash-alt"></i></button>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row col-md-12" id="kategori4_syarat1c">
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
            <label>Keahlian</label>
            <input type="text" class="form-control" name="kategori4_syarat1[keahlian][]">
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
            <label>Tarikh Sertai</label>
            <input type="text" class="form-control" name="kategori4_syarat1[tarikh_sertai][]">
        </div>
    </div>
    <div id="kategori4_syarat1w" class="col-md-12 row"></div>
    <button
        onclick="addFields(event, 'kategori4_syarat1w', 'kategori4_syarat1c')"
        class="btn btn-primary">Add
    </button>
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
            <div class="row col-md-12">
                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                    @if($key == 0)
                        <label>Jawatan</label>
                    @endif
                    <input type="text" class="form-control" name="kategori4_syarat2[jawatan][]" value="{{$list['jawatan']}}">
                </div>
                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                    @if($key == 0)
                        <label>Peringkat</label>
                    @endif
                    <select class="custom-select" name="kategori4_syarat2[peringkat][]">
                        <option value="1" {{($list['peringkat'] == 1) ? 'selected' : ''}}>Kebangsaan</option>
                        <option value="3" {{($list['peringkat'] == 2) ? 'selected' : ''}}>Antarabangsa</option>
                    </select>
                </div>
                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                    @if($key == 0)
                        <label>Attachment</label>
                    @endif
                    <input class="form-control-file" name="kategori4_syarat2[attach][]" value="{{$list['attach']}}" hidden/>
                    <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">File {{$key + 1}}</a>
                </div>
                <div class="col-md-1 row">
                    <button class="btn btn-danger btn-sm" style="margin-top: 2px" onclick="deleteFields2(event, this)"><i class="fas fa-trash-alt"></i></button>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row col-md-12" id="kategori4_syarat2c">
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
            <label>Jawatan</label>
            <input type="text" class="form-control" name="kategori4_syarat2[jawatan][]">
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
            <label>Peringkat</label>
            <select class="custom-select" name="kategori4_syarat2[peringkat][]">
                <option value="1">Kebangsaan</option>
                <option value="3">Antarabangsa</option>
            </select>
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label>Attachment</label>
            <input type="file" name="kategori4_syarat2[attach][]" accept="application/pdf"/>
        </div>
    </div>
    <div id="kategori4_syarat2w" class="col-md-12 row"></div>
    <button
        onclick="addFields(event, 'kategori4_syarat2w', 'kategori4_syarat2c')"
        class="btn btn-primary">Add
    </button>
</div>

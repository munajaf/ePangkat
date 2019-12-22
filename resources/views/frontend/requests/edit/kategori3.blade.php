<h1>Perkhidmatan dan Rundingan</h1>

<div class="row">
    @if($data->type == "DS54")
        <small>DUA (2) Projek Rundingan atau Editor atau Penilai (Dalam atau luar UPNM)</small>
    @else
        <small>TIGA (3) Projek Rundingan atau Editor/Penilai (Di dalam atau luar UPNM) </small>
    @endif</div>
<div class="row pb-5">
    <div class="row col-md-11" id="kategori3_syarat1_wrapper">
        @foreach($data->kategori3_syarat1 as $key => $list)
            <div class="row col-md-12">
                <div class="col-md-11 row">
                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                            <label>Penglibatan</label>
                        <input type="text" class="form-control" name="kategori3_syarat1[penglibatan][{{$key+30}}]" value="{{$list['penglibatan']}}">
                    </div>
                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                            <label>Peringkat</label>
                        <select class="custom-select" name="kategori3_syarat1[peringkat][{{$key+30}}]">
                            <option value="1" {{($list['peringkat'] == 1) ? 'selected' : ''}}>Dalam UPNM</option>
                            <option value="3" {{($list['peringkat'] == 2) ? 'selected' : ''}}>Luar UPNM</option>
                        </select>
                    </div>
                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                            <label>Attachment</label>
                        <input class="form-control-file" name="kategori3_syarat1[attach][{{$key+30}}]" value="{{$list['attach']}}" hidden/>
                        <a class="btn btn-primary btn-block" href="/{{$list['attach']}}" target="_blank">File</a>
                    </div>
                </div>
                <div class="col-md-1 row">
                    <button class="btn btn-danger btn-sm" style="margin-top: 2px" onclick="deleteFields2(event, this)"><i class="fas fa-trash-alt"></i></button>
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-md-11 row" id="kategori3_syarat1c">
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
            <label>Penglibatan</label>
            <input type="text" class="form-control" name="kategori3_syarat1[penglibatan][0]" value="">
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
            <label>Peringkat</label>
            <select class="custom-select" name="kategori3_syarat1[peringkat][0]">
                <option value="1">Dalam UPNM</option>
                <option value="3">Luar UPNM</option>
            </select>
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label>Attachment</label>
            <input type="file" name="kategori3_syarat1[attach][0]" accept="application/pdf"/>
        </div>
    </div>
    <div class="row col-md-12" id="kategori3_syarat1w"></div>
    <button
        onclick="addRowKategori3Syarat1(event)"
        class="btn btn-primary">Add
    </button>

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
            <div class="col-md-12 row">
                <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                        <label>Nama Program</label>
                    <input type="text" class="form-control" name="kategori3_syarat2[nama_program][]" value="{{$list['nama_program']}}">
                </div>
                <div class="row col-md-1">
                    <button class="btn btn-danger btn-sm" style="margin-top: 2px" onclick="deleteFields2(event, this)"><i class="fas fa-trash-alt"></i></button>
                </div>
            </div>
        @endforeach
    </div>
    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4" id="kategori3_syarat2c">
        <label>Nama Program</label>
        <input type="text" class="form-control" name="kategori3_syarat2[nama_program][]" value="">
    </div>
    <div id="kategori3_syarat2w" class="row col-md-12"></div>
    <button
        onclick="addFields(event, 'kategori3_syarat2w', 'kategori3_syarat2c')"
        class="btn btn-primary">Add
    </button>
</div>

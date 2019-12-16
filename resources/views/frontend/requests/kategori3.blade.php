<form method="POST" action="{{route('frontend.user.extend.update', $data->id)}}" enctype="multipart/form-data"
      id="form">
    @method('patch')
    @csrf
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
            <div class="row col-md-10" id="kategori3_syarat1_wrapper">
                <?php ($data->type == "DS54") ? $limit = 2: $limit = 3 ?>
                @for($i=0; $i < $limit; $i++)
                    <div id="kategori3_syarat1" class="row col-md-12">

                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                            <label>Penglibatan</label>
                            <input type="text" class="form-control"
                                   name="kategori3_syarat1[penglibatan][]" required/>
                        </div>
                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                            <label>Peringkat</label>
                            <select class="custom-select" name="kategori3_syarat1[peringkat][]">
                                <option value="1">
                                    Dalam UPNM
                                </option>
                                <option value="3">
                                    Luar UPNM
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                            <label>Attachment</label>
                            <input type="file" required name="kategori3_syarat1[attach][]"
                                   accept="application/pdf"/>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-2 col-lg-2">
                <button
                    onclick="addFields(event, 'kategori3_syarat1_wrapper', 'kategori3_syarat1')"
                    class="btn btn-primary btn-block">Add
                </button>
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
            <div class="row col-md-10" id="kategori3_syarat2_wrapper">
                <div id="kategori3_syarat2" class="row col-md-12">
                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                        <label>Nama Program</label>
                        <input type="text" name="kategori3_syarat2[nama_program][]"
                               class="form-control"/>
                    </div>
                </div>
            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-2 col-lg-2">
                <button
                    onclick="addFields(event, 'kategori3_syarat2_wrapper', 'kategori3_syarat2')"
                    class="btn btn-primary btn-block">Add
                </button>
            </div>
        </div>
        <input type="text" name="page" value="3" hidden>
        {{ form_submit(__('labels.frontend.contact.button')) }}
    </div>
</form>

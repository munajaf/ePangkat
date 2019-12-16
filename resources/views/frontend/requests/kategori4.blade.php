<form method="POST" action="{{route('frontend.user.extend.update', $data->id)}}" enctype="multipart/form-data"
      id="form">
    @method('patch')
    @csrf
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
            <div class="row col-md-10" id="kategori4_syarat1_wrapper">

                <div id="kategori4_syarat1" class="row col-md-12">
                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                        <label>Keahlian</label>
                        <input type="text" name="kategori4_syarat1[keahlian][]"
                               class="form-control">
                    </div>
                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                        <label>Tarikh Sertai</label>
                        <input type="text"
                               name="kategori4_syarat1[tarikh_sertai][]"
                               class="form-control"
                               id="">
                    </div>
                </div>

            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-2 col-lg-2">
                <button
                    onclick="addFields(event, 'kategori4_syarat1_wrapper', 'kategori4_syarat1')"
                    class="btn btn-primary btn-block">Add
                </button>
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
            <div class="row col-md-10" id="kategori4_syarat2_wrapper">
                <?php ($data->type == "DS54") ? $limit = 1 : $limit = 2 ?>
                @for($i=0; $i < $limit; $i++)
                    <div id="kategori4_syarat2" class="col-md-12 row">
                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                            <label>Jawatan</label>
                            <input type="text" class="form-control" name="kategori4_syarat2[jawatan][]"
                                   id="">
                        </div>
                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                            <label>Peringkat</label>
                            <select name="kategori4_syarat2[peringkat][]" class="custom-select">
                                <option value="1">Kebangsaan</option>
                                <option value="3">Antarabangsa</option>
                            </select>
                        </div>
                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                            <label>Attachment</label>
                            <input type="file" required name="kategori4_syarat2[attach][]"
                                   accept="application/pdf"/>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-2 col-lg-2">
                <button
                    onclick="addFields(event, 'kategori4_syarat2_wrapper', 'kategori4_syarat2')"
                    class="btn btn-primary btn-block">Add
                </button>
            </div>
        </div>
        <div class="row pb-5">
            <input type="text" name="page" value="4" hidden>
            {{ form_submit(__('labels.frontend.contact.button')) }}
        </div>
    </div>

<form method="POST" action="{{route('frontend.user.request.update', $data->id)}}" enctype="multipart/form-data"
      id="form">
    @method('patch')
    @csrf
    <div class="container">
        <h1>Pengajaran dan Penyeliaan</h1>
        <small>Memenuhi BTA pengajaran untuk TIGA (3) tahun (berdasarkan polisi Universiti)</small>
        <div class="row pb-5 form-group">
            <div class="row col-md-12">
                <div class="form-group col-xs-10 col-sm-10 col-md-4 col-lg-4">
                    <label>Tahun 1</label><br/>
                    @if(isset($data->kategori1_syarat1[0]))
                        <a class="btn btn-primary btn-block mb-2" href="/{{$data->kategori1_syarat1[0]}}"
                           target="_blank">Tahun 1 Attachment</a>
                    @endif
                    <input type="file" class="form-control-file" required name="kategori1_syarat1_1"
                           accept="application/pdf"/>
                </div>
                <div class="form-group col-xs-10 col-sm-10 col-md-4 col-lg-4">
                    <label>Tahun 2</label>
                    @if(isset($data->kategori1_syarat1[1]))
                        <a class="btn btn-primary btn-block mb-2" href="/{{$data->kategori1_syarat1[1]}}"
                           target="_blank">Tahun 2 Attachment</a>
                    @endif
                    <input type="file" class="form-control-file" required name="kategori1_syarat1_2"
                           accept="application/pdf"/>
                </div>
                <div class="form-group col-xs-10 col-sm-10 col-md-4 col-lg-4">
                    <label>Tahun 3</label>
                    @if(isset($data->kategori1_syarat1[2]))
                        <a class="btn btn-primary btn-block mb-2" href="/{{$data->kategori1_syarat1[2]}}"
                           target="_blank">Tahun 3 Attachment</a>
                    @endif
                    <input type="file" class="form-control-file" required name="kategori1_syarat1_3"
                           accept="application/pdf"/>
                </div>
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
            <div class="row col-md-10">

                @if($data->type == "VK7")
                    <div class="form-group col-xs-12 col-sm-10 col-md-4 col-lg-4">
                        <div id="kategori1_syarat2_1_wrapper">
                            <label>Bilangan PhD</label>
                            <div id="kategori1_syarat2_1">
                                <div class="col-md-10 pl-0 pb-2">
                                    <input type="file" name="kategori1_syarat2_1[attach][]"
                                           accept="application/pdf"/>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button
                                onclick="addFields(event, 'kategori1_syarat2_1_wrapper', 'kategori1_syarat2_1')"
                                class="btn btn-primary btn-block">Add
                            </button>
                        </div>
                    </div>
                @endif

                <div class="form-group col-xs-12 col-sm-10 col-md-4 col-lg-4">
                    <div id="kategori1_syarat2_2_wrapper">
                        <label>Bilangan Sarjana (Penyelidikan)</label>
                        <?php ($data->type == "DS54") ? $limit = 1 : $limit = 3 ?>
                        @for($i=0; $i < $limit; $i++)
                            <div id="kategori1_syarat2_2">
                                <div class="col-md-10 pl-0 pb-2">
                                    <input type="file" required name="kategori1_syarat2_2[attach][]"
                                           accept="application/pdf"/>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div>
                        <button
                            onclick="addFields(event, 'kategori1_syarat2_2_wrapper', 'kategori1_syarat2_2')"
                            class="btn btn-primary btn-block">Add
                        </button>
                    </div>
                </div>

                <div class="form-group col-xs-12 col-sm-10 col-md-4 col-lg-4">

                    <div id="kategori1_syarat2_3_wrapper">
                        <label>Bilangan Sarjana (Kerja Kursus)</label>
                        <?php ($data->type == "DS54") ? $limit = 3 : $limit = 1 ?>
                        @for($i=0; $i < $limit; $i++)
                            <div id="kategori1_syarat2_3">
                                <div class="col-md-10 pl-0 pb-2">
                                    <input type="file" required name="kategori1_syarat2_3[attach][]"
                                           accept="application/pdf"/>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div>
                        <button
                            onclick="addFields(event, 'kategori1_syarat2_3_wrapper', 'kategori1_syarat2_3')"
                            class="btn btn-primary btn-block">Add
                        </button>
                    </div>
                </div>

            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-2 col-lg-2">
            </div>
        </div>

        <small>
            Aktif dalam pengajaran teradun
        </small>
        <div class="row pb-5">
            <div class="row col-md-12">

                <div class="form-group col-xs-12 col-sm-10 col-md-10 col-lg-5">
                    <div id="kategori1_syarat3_1_wrapper">
                        <label>Bilangan MOOC / E-Learning:</label>
                        <div id="kategori1_syarat3_1">
                            <div class="col-md-10 pl-0 pb-2">
                                <input type="file" required name="kategori1_syarat3_1[attach][]"
                                       accept="application/pdf"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-xs-10 col-sm-10 col-md-2 col-lg-2">
                    <button
                        onclick="addFields(event, 'kategori1_syarat3_1_wrapper', 'kategori1_syarat3_1')"
                        class="btn btn-primary btn-block">Add
                    </button>
                </div>
            </div>
        </div>

        <div class="row pb-5">
            <div class="row col-md-10" id="kategori1_syarat4_1">
                <div class="form-group col-xs-10 col-sm-10 col-md-6 col-lg-6">
                    <div id="kategori1_syarat4_1_wrapper">
                        <label>Bilangan Anugerah</label>
                        <div id="kategori1_syarat4_1">
                            <div class="col-md-10 pl-0 pb-2">
                                <input type="file" required name="kategori1_syarat4_1[attach][]"
                                       accept="application/pdf"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-xs-10 col-sm-10 col-md-12 col-lg-12 pl-0 pt-2">
                        <button
                            onclick="addFields(event, 'kategori1_syarat4_1_wrapper', 'kategori1_syarat4_1')"
                            class="btn btn-primary btn-block">Add
                        </button>
                    </div>
                </div>
                <div class="form-group col-xs-10 col-sm-12 col-md-6 col-lg-6">
                    <div id="kategori1_syarat4_2_wrapper">
                        <label>Penilaian Pengajaran</label>
                        <div id="kategori1_syarat4_2">
                            <div class="col-md-10 pl-0 pb-2">
                                <input type="file" required name="kategori1_syarat4_2[attach][]"
                                       accept="application/pdf"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-xs-10 col-sm-10 col-md-2 col-lg-12 pl-0 pt-2">
                        <button
                            onclick="addFields(event, 'kategori1_syarat4_2_wrapper', 'kategori1_syarat4_2')"
                            class="btn btn-primary btn-block">Add
                        </button>
                    </div>
                </div>
            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-2 col-lg-2">
            </div>
        </div>
        <input type="text" name="page" value="1" hidden>
        {{ form_submit(__('labels.frontend.contact.button')) }}
    </div>
</form>

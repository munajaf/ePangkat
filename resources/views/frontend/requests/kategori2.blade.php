<form method="POST" action="{{route('frontend.user.extend.update', $data->id)}}" enctype="multipart/form-data"
      id="form">
    @method('patch')
    @csrf
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
            <div class="row col-md-10" id="kategori2_syarat1_wrapper">
                <div id="kategori2_syarat1" class="row col-md-12">
                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                        <label>Tajuk</label>
                        <input type="text" name="kategori2_syarat1[tajuk][]" class="form-control" required>
                    </div>
                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                        <label>Jenis</label>
                        <select name="kategori2_syarat1[jenis][]" class="custom-select" id="jenis">
                            <option value="1">Modul Pengajaran</option>
                            <option value="3">Buku Ilmiah</option>
                        </select>
                    </div>
                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                        <label>Nama Penerbit</label>
                        <input type="text" name="kategori2_syarat1[penerbit][]" class="form-control" required/>
                    </div>
                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                        <label>Attachment</label>
                        <input type="file" required name="kategori2_syarat1[attach][]" accept="application/pdf"/>
                    </div>
                </div>
            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-2 col-lg-2">
                <button onclick="addFields(event, 'kategori2_syarat1_wrapper', 'kategori2_syarat1')"
                        class="btn btn-primary btn-block">Add
                </button>
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
            <?php ($data->type == "DS54") ? $limit = 2 : $limit = 5 ?>
            <div class="row col-md-10" id="kategori2_syarat2_wrapper">
                @for($i=0; $i < $limit; $i++)
                    <div id="kategori2_syarat2" class="row col-md-11">

                        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-4">
                            <label>Tajuk</label>
                            <input type="text"
                                   name="kategori2_syarat2[tajuk][]"
                                   class="form-control"/>
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
                            <input type="file" required name="kategori2_syarat2[attach][]"
                                   accept="application/pdf"/>
                        </div>

                    </div>
                @endfor
            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-2 col-lg-2">
                <button
                    onclick="addFields(event, 'kategori2_syarat2_wrapper', 'kategori2_syarat2')"
                    class="btn btn-primary btn-block">Add
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
            <div class="row col-md-10" id="kategori2_syarat3_wrapper">
                <div id="kategori2_syarat3" class="row col-md-12">
                    <div class="form-group col-xs-10 col-sm-3 col-md-6 col-lg-6">
                        <label>Jumlah Geran Bukan Sains</label>
                        <input type="number"
                               name="kategori2_syarat3[jumlah_geran][bukan_sains]"
                               class="form-control"
                               min="{{($data->type == "DS54" ? 20000:50000)}}"
                        >
                    </div>

                    <div class="form-group col-xs-10 col-sm-3 col-md-6 col-lg-6">
                        <label>Attachment</label>
                        <input type="file" required name="kategori2_syarat3[attach][bukan_sains]"
                               accept="application/pdf" multiple/>
                    </div>
                </div>
                <div id="kategori2_syarat3" class="row col-md-12">
                    <div class="form-group col-xs-10 col-sm-3 col-md-6 col-lg-6">
                        <label>Jumlah Geran Sains dan Teknologi</label>
                        <input type="number"
                               name="kategori2_syarat3[jumlah_geran][sains]"
                               class="form-control"
                               min="{{($data->type == "DS54" ? 40000:100000)}}"
                        >
                    </div>

                    <div class="form-group col-xs-10 col-sm-3 col-md-6 col-lg-6">
                        <label>Attachment</label>
                        <input type="file" required name="kategori2_syarat3[attach][sains]"
                               accept="application/pdf" multiple/>
                    </div>
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
            <div class="row col-md-10" id="kategori2_syarat4_wrapper">
                <?php ($data->type == "DS54") ? $limit = 7 : $limit = 15 ?>
                @for($i=0; $i < $limit; $i++)
                    <div id="kategori2_syarat4" class="col-md-12 row">
                        <div class="form-group col-xs-10 col-sm-12 col-md-4 col-lg-4">
                            <label>Tajuk</label>
                            <input type="text"
                                   name="kategori2_syarat4[tajuk][]"
                                   class="form-control"
                                   id="">
                        </div>
                        <div class="form-group col-xs-10 col-sm-12 col-md-4 col-lg-4">
                            <label>Jenis Penerbitan</label>
                            <select name="kategori2_syarat4[jenis_penerbitan][]" class="custom-select" id="">
                                <option value="prosiding">Prosiding</option>
                                <option value="kertas_polisi">Kertas Polisi</option>
                            </select>

                        </div>
                        <div class="form-group col-xs-10 col-sm-12 col-md-4 col-lg-4">
                            <label>Attach</label>
                            <input type="file" required name="kategori2_syarat4[attach][]"
                                   accept="application/pdf"/>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-2 col-lg-2">
                <button
                    onclick="addFields(event, 'kategori2_syarat4_wrapper', 'kategori2_syarat4')"
                    class="btn btn-primary btn-block">Add
                </button>
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
            <div class="row col-md-10" id="kategori2_syarat5_wrapper">
                <div id="kategori2_syarat5" class="row">
                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-6">
                        <label>Jawatan</label>
                        <select class="custom-select" name="kategori2_syarat5[jawatan][]">
                            <option value="1">
                                Pengerusi
                            </option>
                            <option value="2">
                                Ahli Jawatankuasa
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-6">
                        <label>Attachment</label>
                        <input type="file" required name="kategori2_syarat5[attach][]"
                               accept="application/pdf"/>
                    </div>
                </div>
            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-2 col-lg-2">
                <button
                    onclick="addFields(event, 'kategori2_syarat5_wrapper', 'kategori2_syarat5')"
                    class="btn btn-primary btn-block">Add
                </button>
            </div>
        </div>
        <input type="text" name="page" value="2" hidden>
        <input type="button" value="Submit" onclick="checkField()">
        <input type="submit" value="Submit" hidden id="submitMe">
        {{--        {{ form_submit(__('labels.frontend.contact.button'))->hidden() }}--}}
    </div>


    <script>
        const checkField = () => {
            let data = 0;
            $('select[name="kategori2_syarat1[jenis][]"] option:selected').map((val, key) => data = (data + parseInt(key.value)));
            console.log(data);
            if (parseInt(data) >= 3) {
                $('#submitMe').click();
            } else {
                alert('Kriteria untuk Menghasilkan TIGA (3) Modul Pengajaran / bab atau SATU (1) Buku ilmiah dalam bidang berkaitan yang diterbitkan oleh penerbit yang diiktiraf tidak ditepati');
            }
        };
    </script>
</form>

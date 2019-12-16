<form method="POST" action="{{route('frontend.user.request.update', $data->id)}}" enctype="multipart/form-data"
      id="form">
    @method('patch')
    @csrf
    <div class="container">
        <h1>Penyelidikan dan Penerbitan</h1>
        <div class="row">
            <small>
                Menghasilkan TIGA (3) Modul Pengajaran / bab atau SATU (1) Buku ilmiah dalam bidang
                berkaitan yang diterbitkan oleh penerbit yang diiktiraf
            </small>
        </div>
        <div class="row pb-5">
            <div class="row col-md-10" id="kategori2_syarat1_wrapper">
                <div id="kategori2_syarat1" class="row col-md-12">
                    <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
                        <label>Tajuk</label>
                        <input type="text" name="kategori2_syarat1[tajuk][]" class="form-control">
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
            <small>
                Minimum DUA (2) Penyelidikan (Sekurang-kurangnya SATU (1) sebagai Ketua Penyelidik)
                atau
                SATU (1) harta intelek (IP) (Kumulatif)
            </small>
        </div>
        <div class="row pb-5">
            <div class="row col-md-10" id="kategori2_syarat2_wrapper">
                <div id="kategori2_syarat2" class="row col-md-12">
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

            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-2 col-lg-2">
                <button
                    onclick="addFields(event, 'kategori2_syarat2_wrapper', 'kategori2_syarat2')"
                    class="btn btn-primary btn-block">Add
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
            <small>
                Minimum TUJUH (7) penerbitan majalah berindeks google / Scopus / Jurnal Zulfakar,
                Prosiding
                yang
                berindeks, Kertas Polisi

                (Tiga (3) Prosiding = Dua (2) Penerbitan)
            </small>
        </div>
        <div class="row pb-5">
            <div class="row col-md-10" id="kategori2_syarat4_wrapper">
                <div id="kategori2_syarat4" class="col-md-12 row">
                    <div class="form-group col-xs-10 col-sm-12 col-md-12 col-lg-12">
                        <label>Jenis Penerbitan</label>
                        <input type="text"
                               name="kategori2_syarat4[jenis_penerbitan][]"
                               class="form-control"
                               id="">
                    </div>
                </div>
            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-2 col-lg-2">
                <button
                    onclick="addFields(event, 'kategori2_syarat4_wrapper', 'kategori2_syarat4')"
                    class="btn btn-primary btn-block">Add
                </button>
            </div>
        </div>

        <div class="row">
            <small>
                Menjadi Pengerusi / Ahli jawatankuasa dalam penubuhan program atau silibus baharu
                atau
                semakan kurikulum
            </small>
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
        {{ form_submit(__('labels.frontend.contact.button')) }}
    </div>
</form>

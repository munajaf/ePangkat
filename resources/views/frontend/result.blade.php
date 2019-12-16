<table>
    <tr><td>Jenis : </td><td>{{$data->type}}</td></tr>
</table>

<h1>Pengjaran Dan Penyeliaan</h1>

<h3>Syarat 1</h3>
<table>
    <tr>
        <td style="width: 30%">Tahun 1</td>
        <td style="width: 30%">Tahun 2</td>
        <td style="width: 30%">Tahun 3</td>
    </tr>
    <tr>
        <td style="width: 30%">{{(!empty($data->kategori1_syarat1[0])) ? 'Di Hantar' : 'Tidak Hantar'}}</td>
        <td style="width: 30%">{{(!empty($data->kategori1_syarat1[1])) ? 'Di Hantar' : 'Tidak Hantar'}}</td>
        <td style="width: 30%">{{(!empty($data->kategori1_syarat1[2])) ? 'Di Hantar' : 'Tidak Hantar'}}</td>
    </tr>
</table>

<h3>Syarat 2</h3>
<table>
    <tr>
        <td style="width: 30%">Bilangan PhD</td>
        <td style="width: 30%">Bilangan Sarjana (Penyelidikan)</td>
        <td style="width: 30%">Bilangan Sarjana (Kerja Kursus)</td>
    </tr>
    <tr>
        <td style="width: 30%">Di hantar : {{(isset($data->kategori1_syarat2[0])) ? count($data->kategori1_syarat2[0]) : 0}}</td>
        <td style="width: 30%">Di hantar : {{(isset($data->kategori1_syarat2[1])) ? count($data->kategori1_syarat2[1]) : 0}}</td>
        <td style="width: 30%">Di hantar : {{(isset($data->kategori1_syarat2[2])) ? count($data->kategori1_syarat2[2]) : 0}}</td>
    </tr>
</table>

<h3>Syarat 3</h3>
<table>
    <tr>
        <td style="width: 30%">Bilangan MOOC / E-Learning</td>
    </tr>
    <tr>
        <td style="width: 30%">Di hantar : {{(isset($data->kategori1_syarat3[0])) ? count($data->kategori1_syarat3[0]) : 0}}</td>
    </tr>
</table>

<h3>Syarat 4</h3>
<table>
    <tr>
        <td style="width: 30%">Bilangan Anugerah</td>
        <td style="width: 30%">Bilangan Penilaian Pengajaran</td>
    </tr>
    <tr>
        <td style="width: 30%">Di hantar : {{(isset($data->kategori1_syarat4[0])) ? count($data->kategori1_syarat4[0]) : 0}}</td>
        <td style="width: 30%">Di hantar : {{(isset($data->kategori1_syarat4[0])) ? count($data->kategori1_syarat4[1]) : 0}}</td>
    </tr>
</table>


<h1>Penyelidikan dan Penerbitan</h1>

<h3>Syarat 1</h3>
<table>
    <tr>
        <td style="width: 30%">Tajuk</td>
        <td style="width: 30%">Jenis</td>
        <td style="width: 30%">Nama Penerbit</td>
        <td style="width: 30%">Attachment</td>
    </tr>
    @foreach($data->kategori2_syarat1 as $key => $list)
        <tr>
            <td style="width: 30%">{{$list['tajuk']}}</td>
            <td style="width: 30%">{{($list['jenis'] == 1) ? 'Modul Pengajaran' : 'Buku Ilmiah'}}</td>
            <td style="width: 30%">{{$list['penerbit']}}</td>
            <td style="width: 30%">{{(isset($list['attach'])) ? 'Di hantar' : 'Tidak Hantar'}}</td>
        </tr>
    @endforeach
</table>

<h3>Syarat 2</h3>
<table>
    <tr>
        <td style="width: 30%">Tajuk</td>
        <td style="width: 30%">Peranan</td>
        <td style="width: 30%">Harta Intelek</td>
    </tr>
    @foreach($data->kategori2_syarat2 as $key => $list)
        <tr>
            <td style="width: 30%">{{$list['tajuk']}}</td>
            <td style="width: 30%">{{($list['peranan'] == 1) ? 'Ketua Penyelidik' : 'Lain-Lain'}}</td>
            <td style="width: 30%">{{(isset($list['attach'])) ? 'Di hantar' : 'Tidak Hantar'}}</td>
        </tr>
    @endforeach
</table>

<h3>Syarat 3</h3>
<table>
    <tr>
        <td style="width: 30%">Jumlah Geran</td>
        <td style="width: 30%">Peranan</td>
    </tr>
    @foreach($data->kategori2_syarat3 as $key => $list)
        <tr>
            <td style="width: 30%">{{$list['jumlah_geran']}}</td>
            <td style="width: 30%">{{(isset($list['attach'])) ? 'Di hantar' : 'Tidak Hantar'}}</td>
        </tr>
    @endforeach
</table>

<h3>Syarat 4</h3>
<table>
    <tr>
        <td style="width: 30%">Tajuk</td>
        <td style="width: 30%">Jenis Penerbitan</td>
        <td style="width: 30%">Attachment</td>
    </tr>
    @foreach($data->kategori2_syarat4 as $key => $list)
        <tr>
            <td style="width: 30%">{{$list['tajuk']}}</td>
            <td style="width: 30%">{{($list['jenis_penerbitan'] == 'prosiding') ? 'Prosiding' : 'Kertas Polisi'}}</td>
            <td style="width: 30%">{{(isset($list['attach'])) ? 'Di hantar' : 'Tidak Hantar'}}</td>
        </tr>
    @endforeach
</table>

<h3>Syarat 5</h3>
<table>
    <tr>
        <td style="width: 30%">Jawatan</td>
        <td style="width: 30%">Attachment</td>
    </tr>
    @foreach($data->kategori2_syarat5 as $key => $list)
        <tr>
            <td style="width: 30%">{{($list['jawatan'] == '1') ? 'Pengerusi' : 'Ahli Jawatankuasa'}}</td>
            <td style="width: 30%">{{(isset($list['attach'])) ? 'Di hantar' : 'Tidak Hantar'}}</td>
        </tr>
    @endforeach
</table>

<h1>Perkhidmatan dan Rundingan</h1>

<h3>Syarat 1</h3>
<table>
    <tr>
        <td style="width: 30%">Penglibatan</td>
        <td style="width: 30%">Peringkat</td>
        <td style="width: 30%">Attachment</td>
    </tr>
    @foreach($data->kategori3_syarat1 as $key => $list)
        <tr>
            <td style="width: 30%">{{$list['penglibatan']}}</td>
            <td style="width: 30%">{{($list['peringkat'] == 1) ? 'Dalam UPNM' : 'Luar UPNM'}}</td>
            <td style="width: 30%">{{(isset($list['attach'])) ? 'Di hantar' : 'Tidak Hantar'}}</td>
        </tr>
    @endforeach
</table>

<h3>Syarat 2</h3>
<table>
    <tr>
        <td style="width: 30%">Nama Program</td>
    </tr>
    @foreach($data->kategori3_syarat2 as $key => $list)
        <tr>
            <td style="width: 30%">{{$list['nama_program']}}</td>
        </tr>
    @endforeach
</table>

<h1>Kepimpinan dan Pengurusan</h1>

<h3>Syarat 1</h3>
<table>
    <tr>
        <td style="width: 30%">Keahlian</td>
        <td style="width: 30%">Tarikh Sertai</td>
    </tr>
    @foreach($data->kategori4_syarat1 as $key => $list)
        <tr>
            <td style="width: 30%">{{$list['keahlian']}}</td>
            <td style="width: 30%">{{$list['tarikh_sertai']}}</td>
        </tr>
    @endforeach
</table>

<h3>Syarat 2</h3>
<table>
    <tr>
        <td style="width: 30%">Jawatan</td>
        <td style="width: 30%">Peringkat</td>
        <td style="width: 30%">Attachment</td>
    </tr>
    @foreach($data->kategori4_syarat2 as $key => $list)
        <tr>
            <td style="width: 30%">{{$list['jawatan']}}</td>
            <td style="width: 30%">{{($list['peringkat'] == 1) ? 'Kebangsaan' : 'Antarabangsa'}}</td>
            <td style="width: 30%">{{(isset($list['attach'])) ? 'Di hantar' : 'Tidak Hantar'}}</td>

        </tr>
    @endforeach
</table>

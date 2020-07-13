<div class="row">
    <div class="col-12">
        <label class="h3">
            Detail Biodata Calon Siswa
        </label>
        <p>
            dashboard ini berfungsi untuk melihat hasil pendaftaran calon siswa
            <br>
        </p>
    </div>
    <div class="col-6">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center"></th>
                    <th>
                        
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>nama</td>
                    <td>{{ $dt_pendaftaran->xs1 }}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>{{ $dt_pendaftaran->pendaftar_status_id }}</td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>anak ke <label class="text-bold">{{ $detail->xn2 }}</label> dari <label class="text-bold">{{ $detail->xn3 }} bersaudara</label></td>
                </tr>
                <tr>
                    <td>Kontak</td>
                    <td>{{ $detail2->xs2 }}</td>
                </tr>
                <tr>
                    <td>Email Orang Tua</td>
                    <td>{{ $detail2->xs1 }}</td>
                </tr>
                <tr>
                    <td>Tinggal Bersama</td>
                    <td>{{ $detail2->xs4 }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{{ $detail2->xs3 }}</td>
                </tr>
                <!-- <tr>
                    <td>Jarak Sekolah</td>
                    <td>{{ $detail2->xn4 }}</td>
                </tr> -->
                <tr>
                    <td>Golongan Darah</td>
                    <td>{{ $detail2->xs5 }}</td>
                </tr>
                <tr>
                    <td>Penyakit</td>
                    <td>{{ $detail2->xs6 }}</td>
                </tr>
                <tr>
                    <td>Berkebutuhan Khusus</td>
                    <td>{{ $detail2->xs7 }}</td>
                </tr>

                <!-- <tr>
                    <td>Kelainan</td>
                    <td>{{ $detail2->xs4 }}</td>
                </tr> -->
                <tr>
                    <td>Tgl Daftar</td>
                    <td>{{ $dt_pendaftaran->created_at }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col-6">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center"></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tempat, Tgl Lahir</td>
                    <td>{{ $detail->xs5 }},{{ $detail->xs4 }}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>{{ $detail->xs6 }}</td>
                </tr>
                <tr>
                    <td>Berat badan</td>
                    <td>{{ $detail2->xn2 }}</td>
                </tr>
                <tr>
                    <td>Tinggi badan</td>
                    <td>{{ $detail2->xn3 }}</td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>{{ $detail2->xs9 }}</td>
                </tr>
                <tr>
                    <td>Alamat asal sekolah</td>
                    <td>{{ $detail2->xs10 }}</td>
                </tr>

                <tr>
                    <td colspan="2"><label class="font-weight-bold">Hasil</label></td>
                </tr>
                <tr>
                    <td>Nilai</td>
                    <td><label class="font-weight-bold">{{ $dt_pendaftaran->xn3 }}</label></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><label class="font-weight-bold">{{ $dt_pendaftaran->xs3 }}</label></td>
                </tr>
                <tr>
                    <td>Status Pendaftaran</td>
                    <td>
                        <div class="badge badge-primary text-wrap h5" >
                            {{ $status->status->name }}
                        </div>
                    </td>
                </tr>
            
            </tbody>
        </table>

    </div>
</div>
<div class="row">
    <div class="col-12 text-center">
            
          <!-- <iframe src="http://localhost/CI-class/" class="col-12" style="min-height: 500px; border: 0px;">
            <p>Your browser does not support iframes.</p>
          </iframe> -->
    </div>
</div>
<script type="text/javascript">
    if ("{{ $status->status->id }}" >= 2) {
        $("#panel-upload").css('display','block');
        $("#test").css("display",'block');
    }else if("{{ $status->status->id }}" < 2){
        $("#verify").css('display','block');
        $("#test").css("display",'none');
    }
</script>
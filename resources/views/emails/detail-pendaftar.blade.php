<div class="row">
    <div class="col-12">
        <h3 class="h3">
            Informasi Pendaftara Siswa
        </h3>
        <p>Kami telah menerima permintaan pendafataran siswa dengan ringkasan data sebagai berikut,<br>
           jika anda merasa tidak melakukan mohon abaikan pesan ini : </p>
    </div>
</div>
<div class="row">
    <div class="col-12 text-center">
        
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center"></th>
                    <th></th>
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

        <table class="table">
            <thead>
                <tr>
                    <th class="text-center"></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lahir</td>
                    <td>{{ $detail->xs2 }},{{ $detail->xs3 }}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>{{ $detail->xs4 }}</td>
                </tr>
                <tr>
                    <td>Berat badan</td>
                    <td>{{ $detail2->xn5 }}</td>
                </tr>
                <tr>
                    <td>Tinggi badan</td>
                    <td>{{ $detail2->xn6 }}</td>
                </tr>
                <tr>
                    <td>Asal TK</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Alamat TK</td>
                    <td>{{ $detail2->xs3 }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<p>untuk melanjutkan pendaftaran silakan verifikasi dan unggah berkas yang dibutuhkan dengan cara klik <a href="localhost:8000/cek-pendaftaran/{{ $id }}">http://localhost:8000/cek-pendaftaran/{{ $id }}</a></p>

----------------
Panitia 


@extends('layouts.guest')

@section('content')
<style>
#hidden_div { display: none; }
</style>

<div class="card">
    <div class="card-header card-header-text card-header-primary">
        <div class="card-text">
            <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs " data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="satu" href="#keterangan" data-toggle="tab">Data Calon<i class="material-icons">label_important</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="dua" href="#alamat" data-toggle="tab">Alamat<i class="material-icons">label_important</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tiga" href="#kesehatan" data-toggle="tab">Kesehatan<i class="material-icons">label_important</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="empat" href="#pendidikan" data-toggle="tab">Pendidikan & Upload<i class="material-icons">label_important</i></a>
                    </li>
                </ul>
            </div>
        </div>
        </div>

            <button class="btn btn-primary" id="check">Daftar<i class="material-icons">done_outline</i></button>
    </div>
    <div class="card-body min-vh-100">
        <div class="tab-content">
            <div class="tab-pane active" id="keterangan">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Keterangan</li>
                    </ol>
                </nav>
                <form>
                <h3><center><b>ISI BIODATA</b></center></h3>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nama Panggilan" name="nama-panggilan">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label> <br>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki" name="jenis-kelamin"> laki-laki
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan" name="jenis-kelamin"> perempuan
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                    </div>
                  <div class="form-group">
                    <label for="ttl">Tempat Tanggal Lahir</label>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Tempat lahir" name="tempat-lahir">
                            </div>
                            <div class="col">
                                <input type="date" name="tanggal-lahir" class="form-control" placeholder="Tanggal lahir">
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <label for="agama">Agama</label>
                        <select class="form-control selectpicker" data-style="btn btn-link" id="agama" name="agama">
                          <option value="Islam">Islam</option>
                          <option value="Khatolik">Khatolik</option>
                          <option value="Protestan">Protestan</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Budha">Budha</option>
                        </select>
                        <p></p>
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="317508170xxxxxx">
                        <p></p>
                        <label for="kewarganegaraan">Kewarga negaraan</label>
                        <select class="form-control selectpicker" data-style="btn btn-link" id="kewarganegaraan" name="kewarganegaraan">
                          <option value="">-silahkan pilih-</option>
                          <option value="wni">WNI</option>
                          <option value="wna">WNA</option>
                        </select>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="anakke">Anak ke</label>
                          <input type="number" name="anakke" class="form-control" placeholder="2">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>dari</label>
                          <input type="number" name="dari" class="form-control" placeholder="2">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
            </div>

            <div class="tab-pane" id="alamat">
                <nav aria-label="breadcrumb" role="navigation">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Keterangan</li>
                    <li class="breadcrumb-item active" aria-current="page">Alamat</li>
                  </ol>
                </nav>
                <form>
                  <div class="form-group">
                    <label for="email">Email Orang Tua</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <p><p>
                  <div class="form-group">
                    <label for="notelp">Nomor What's App Aktif</label>
                    <input type="number" class="form-control" id="notelp" name="notelp" placeholder="08121828xxx">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat tempat tinggal :</label>
                    <textarea class="form-control" id="alamat" rows="3" name="alamat"  placeholder="Jalan kerja bakti xxxxx"></textarea>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <label for="tinggalbersama">Selama sekolah tinggal bersama : </label>
                        <select class="form-control selectpicker" data-style="btn btn-link" id="tinggalbersama" name="tinggalbersama">
                          <option value="orangtua">Orang Tua</option>
                          <option value="saudara">Saudara</option>
                          <option value="nenek-kakek">Nenek/Kakek</option>
                        </select>
                       </div>
                       <div class="col">
                        <label for="jaraksekolah">Jarak dari rumah ke sekolah : </label>
                        <input type="number" class="form-control" id="jaraksekolah" name="jaraksekolah" placeholder="20 meter">
                      </div>
                    </div>  
                  </div>
                </form>
            </div>

            <div class="tab-pane" id="kesehatan">
                <nav aria-label="breadcrumb" role="navigation">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Keterangan</li>
                    <li class="breadcrumb-item">Alamat</li>
                    <li class="breadcrumb-item active" aria-current="page">Kesehatan</li>
                  </ol>
                </nav>
                <form>
                  <div class="form-group">
                    <label for="beratbadan">Berat badan :</label>
                    <input type="number" class="form-control" id="beratbadan" name="beratbadan"placeholder="00">
                  </div>
                  <div class="form-group">
                    <label for="tinggi">Tinggi :</label>
                    <input type="number" class="form-control" id="tinggi" name="tinggi" placeholder="000">
                  </div>
                  
                  <div class="form-group">
                    <label for="golongandarah">Golongan Darah</label>
                    <select class="form-control selectpicker" data-style="btn btn-link" id="golongandarah" name="golongandarah" >
                            <option value="-">Pilih</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                    </select>
                  </div>

                  <div class="form-group">
                      <label for="penyakit">Penyakit yang pernah di derita</label>
                      <select class="form-control selectpicker" data-style="btn btn-link" id="penyakit" name="penyakit" onchange="showDiv('hidden_div', this)">
                              <option value="-">Tidak Ada</option>
                              <option value="TBC">TBC</option>
                              <option value="Cacar">Cacar</option>
                              <option value="Campak">Campak</option>
                              <option value="Alergi">Alergi</option>
                              <option value="dll">DLL</option>
                      </select>
                      <div id="hidden_div">
                        <input type="text" class="form-control" id="penyakitdll" name="penyakitdll" placeholder="isi penyakit..">
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="kebutuhankhusus">Kebutuhan Khusus </label>
                    <input type="kebutuhankhusus" class="form-control" id="kebutuhankhusus" name="kebutuhankhusus" placeholder="kosongkan jika tidak ada ..">
                  </div>
                  <div class="form-group">
                    <label for="kelainanlainnya">Kelainan Jasmani Lainnya </label>
                    <input type="kelainanlainnya" class="form-control" id="kelainanlainnya" name="kelainanlainnya" placeholder="kosongkan jika tidak ada ..">
                  </div>
                </form> 
            </div>

            <div class="tab-pane" id="pendidikan">
                <nav aria-label="breadcrumb" role="navigation">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Keterangan</li>
                    <li class="breadcrumb-item">Alamat</li>
                    <li class="breadcrumb-item active">Kesehatan</li>
                    <li class="breadcrumb-item active" aria-current="page">Pendidikan</li>
                  </ol>
                </nav>

                <!-- <form> -->
                <!-- pendidikan anak calon siswa -->
                <h3>
                  <center> Keterangan Pendidikan Calon Siswa </center>
                </h3>
                <div class="form-group">
                  <label for="namatk">Nama TK/RA</label>
                  <input type="text" class="form-control" id="namatk" name="namatk" placeholder="isi kan nama TK asal">
                </div>
                <div class="form-group">
                  <label for="alamattk">Alamat TK/RA</label>
                  <input type="text" class="form-control" id="alamattk" name="alamattk" placeholder="alamat TK asal">
                </div>


               <!-- Upload foto dan berkas berkas -->
                <h3>
                  <center>Upload</center>
                </h3>
                  
                    <label>Foto</label><br>
				          	<input type="file" class="form-control" name="foto">
				          	<br>

				          	<label>KTP ORANG TUA</label><br>
				          	<input type="file" class="form-control" name="ktportu">
				          	<br>

				          	<label>KARTU KELUARGA</label><br>
				          	<input type="file" class="form-control" name="kk">
				          	<br>

				          	<label>KARTU IDENTITAS ANAK(KIA)</label><br>
				          	<input type="file" class="form-control" name="kia">
				          	<br>
                    
				          	<label>AKTE ANAK</label><br>
				          	<input type="file" class="form-control" name="akte">
				          	<br>
                    
				          	<label>Lain-lain(kartu imunisasi)</label><br>
				          	<input type="file" class="form-control" name="kimun">
				          	<br>
                    
<!-- 
                <div class="form-group form-file-upload form-file-multiple">
                <label for="ktp">KTP ORANG TUA</label>
                  <input type="file"  multiple="" class="inputFileHidden">
                  <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Single File">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-fab btn-round btn-primary">
                              <i class="material-icons">attach_file</i>
                          </button>
                      </span>
                  </div>
                </div>
                <div class="form-group form-file-upload form-file-multiple">
                <label for="ktp">KARTU KELUARGA</label>
                  <input type="file" multiple="" class="inputFileHidden">
                  <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Single File">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-fab btn-round btn-primary">
                              <i class="material-icons">attach_file</i>
                          </button>
                      </span>
                  </div>
                </div>
                <div class="form-group form-file-upload form-file-multiple">
                  <label for="ktp">KARTU IDENTITAS ANAK(KIA)</label>
                  <input type="file" multiple="" class="inputFileHidden">
                  <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Single File">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-fab btn-round btn-primary">
                              <i class="material-icons">attach_file</i>
                          </button>
                      </span>
                  </div>
                </div>
                <div class="form-group form-file-upload form-file-multiple">
                  <label for="ktp">AKTE ANAK</label>
                  <input type="file" multiple="" class="inputFileHidden">
                  <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Single File">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-fab btn-round btn-primary">
                              <i class="material-icons">attach_file</i>
                          </button>
                      </span>
                  </div>
                </div>     
                <div class="form-group form-file-upload form-file-multiple">
                  <label for="ktp">Lain-lain</label>
                  <input type="file" multiple="" class="inputFileHidden">
                  <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Single File">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-fab btn-round btn-primary">
                              <i class="material-icons">attach_file</i>
                          </button>
                      </span>
                  </div>
                </div>                        -->
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript">
      
      function usia(_tgllahir) {
        let lahir = new Date(_tgllahir);
        let now = new Date();
        let year = 0;
        let usia = 0;
        if (now.getMonth()<lahir.getMonth()) {
          year = 1;
        }else if ((now.getMonth() == lahir.getMonth)&&(now.getDate() < lahir.getDate())){
          year =1;
        }
        usia = now.getFullYear() - lahir.getFullYear() - year;
        return usia;
      }
      
      $("#check").click(function(){
        let _nama_lengkap    =$("input[name=name]").val();
        let _nama_Panggilan  =$("input[name=nama-panggilan]").val();
        let _jenis_kelamin   =$("input[name=jenis_kelamin]").val();
        let _tempat_Lahir    =$("input[name=tempat-lahir]").val();
        let _tanggal_lahir   =$("input[name=tanggal-lahir]").val();
        let _agama           =$("select[name=agama]").val();
        let _anak_Ke         =$("input[name=anakke]").val();
        let _dari            =$("input[name=dari]").val();
        let _nik_Anak        =$("input[name=nik]").val();
        let _bahasa          =$("select[name=bahasa]").val();
        let _status_anak     =$("input[name=status_anak]").val();
        let _kewarga_negaraan=$("select[name=kewarganegaraan]").val();
        let _email           =$("input[name=email]").val();
        let _notelp          =$("input[name=notelp]").val();
        let _alamat          =$("textarea[name=alamat]").val();
        let _tinggalbersama  =$("select[name=tinggalbersama]").val();
        let _jaraksekolah    =$("input[name=jaraksekolah]").val();
        let _beratbadan      =$("input[name=beratbadan]").val();
        let _tinggi          =$("input[name=tinggi]").val();
        let _golongandarah   =$("select[name=golongandarah]").val();
        let _penyakit        =$("select[name=penyakit]").val();
        let _penyakitdll        =$("select[name=penyakitdll]").val();
        let _kebutuhankhusus =$("input[name=kebutuhankhusus]").val();
        let _kelainanlainnya =$("input[name=kelainanlainnya]").val(); 
        let _namatk          =$("input[name=namatk]").val();
        let _alamattk        =$("input[name=alamattk]").val();


          var data_siswa = {
                  keterangan:{
                          nama_lengkap   : _nama_lengkap,
                          nama_Panggilan   : _nama_Panggilan,
                          jenis_kelamin   : _jenis_kelamin,
                          tempat_Lahir   : _tempat_Lahir,
                          tanggal_lahir : _tanggal_lahir,
                          agama   : _agama,
                          anak_Ke   : _anak_Ke,
                          dari   : _dari,
                          nik_Anak   : _nik_Anak,
                          // bahasa   : _bahasa,
                          // status_anak   : _status_anak,
                          kewarga_negaraan   : _kewarga_negaraan
                  },
                  tempat_tinggal:{	
						              email   : _email,
						              notelp	: _notelp,
						              alamat	: _alamat,
						              tinggalbersama : _tinggalbersama,
						              jaraksekolah : _jaraksekolah
                  },
                  kesehatan :{
                          		
						            beratbadan		 : _beratbadan,		
						            tinggi         : _tinggi,
                        golongandarah  : _golongandarah,
						            penyakit       : _penyakit,
                        penyakitdll       : _penyakitdll,
                        kebutuhankhusus: _kebutuhankhusus,
                        kelainanlainnya: _kelainanlainnya

                  },
                  pendidikan:{
						            namatk		:_namatk,
						            alamattk	:_alamattk
                  }	
                };

          let str = JSON.stringify(data_siswa);
          let tgl = data_siswa.keterangan.tanggal_lahir;
          let umur;
          if (tgl) {
              umur  = usia(tgl);
          }
          if (umur >= 6 ) {
            $.ajax({
              method: "post",
              url: "/do_register",
              data: {param: str}
            })
            .done(function( result ) {
              // $("#result-data").html(result);
              let res = JSON.stringify( result );
              alert(res);
            });
          }else{
            alert("usia tidak memenuhi persyaratan");
          }
      });

      //menampilkan form penyakit dll
      function showDiv(divId, element){
          document.getElementById(divId).style.display = element.value == 'dll' ? 'block' : 'none';
      };
      
    </script>
@endsection


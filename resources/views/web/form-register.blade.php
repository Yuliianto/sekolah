@extends('layouts.guest')

@section('content')
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
                        <a class="nav-link" id="empat" href="#pendidikan" data-toggle="tab">Pendidikan<i class="material-icons">done_outline</i></a>
                    </li>
                </ul>
            </div>
        </div>
        </div>

            <button class="btn btn-primary" id="check">check</button>
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
                        <input type="text" name="nik" class="form-control" placeholder="948893888">
                        <p></p>
                        <label for="kewarganegaraan">Kewarga negaraan</label>
                        <input type="text" name="kewarganegaraan" class="form-control" placeholder="WNI">
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="anakke">Anaka</label>
                          <input type="number" name="anakke" class="form-control" placeholder="2">
                          <p></p>
                          <label>dari</label>
                          <input type="number" name="dari" class="form-control" placeholder="2">
                          <p></p>
                          <label for="status">Status anak</label>
                          <input type="text" name="status" class="form-control" placeholder="Kandung">
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
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                  </div>
                  <p><p>
                  <div class="form-group">
                    <label for="notelp">Nomor Telpon</label>
                    <input type="number" class="form-control" id="notelp" placeholder="08121828xxx">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat tempat tinggal :</label>
                    <textarea class="form-control" id="alamat" rows="3" placeholder="Jalan kerja bakti xxxxx"></textarea>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <label for="tinggalbersama">Selama sekolah tinggal bersama : </label>
                        <input type="text" class="form-control" id="tinggalbersama" placeholder="Jalan kerja bakti xxxxx">
                       </div>
                       <div class="col">
                        <label for="jaraksekolah">Jarak dari rumah ke sekolah : </label>
                        <input type="number" class="form-control" id="jaraksekolah" placeholder="20 meter">
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
                    <input type="number" class="form-control" id="beratbadan" placeholder="34">
                  </div>
                  <div class="form-group">
                    <label for="tinggi">Tinggi :</label>
                    <input type="number" class="form-control" id="tinggi" placeholder="90">
                  </div>
                  
                  <div class="form-group">
                    <label for="golongandarah">Golongan Darah</label>
                    <select class="form-control selectpicker" data-style="btn btn-link" id="golongandarah">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="penyakit">Penyakit yang pernah di derita</label>
                    <select class="form-control selectpicker" data-style="btn btn-link" id="golongandarah" onchange="showDiv('hidden_div', this)">
                            <option value="TBC">TBC</option>
                            <option value="Cacar">Cacar</option>
                            <option value="Campak">Campak</option>
                            <option value="Alergi">Alergi</option>
                            <option value="dll">DLL</option>
                    </select>
                    <div id="hidden_div" >
                      <input type="text" class="form-control" id="penyakit" placeholder="isi penyakit..">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kebutuhankhusus">Kebutuhan Khusus :</label>
                    <input type="kebutuhankhusus" class="form-control" id="kebutuhankhusus" placeholder="Masukan keterangan ..">
                  </div>
                  <div class="form-group">
                    <label for="kelainanlainnya">Kelainan Jasmani Lainnya :</label>
                    <input type="kelainanlainnya" class="form-control" id="kelainanlainnya" placeholder="Masukan keterangan ..">
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

                <form>
                  
                  <h1>
                    <center><label for="KeteranganPendidikan"><B>Keterangan Pendidikan Calon Siswa</B></label><center>
                  </h1>
                  
                  <div class="form-group">
                    <label for="namatk">Nama TK/RA</label>
                    <input type="text" class="form-control" id="namatk" placeholder="isi kan nama TK asal">
                  </div>
                  <div class="form-group">
                    <label for="alamattk">Alamat TK/RA</label>
                    <input type="text" class="form-control" id="alamattk" placeholder="alamat TK asal">
                  </div>


                  <h1>
                    <center><label for="KeteranganPendidikan"><B>Upload</B></label><center>
                  </h1>

                  <div class="form-group form-file-upload form-file-multiple">
                    <label for="ktp">KTP</label>
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
                    <label for="ktp">KK</label>
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
                    </div>                  
                </form>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript">

      $("#check").click(function(){
        let _nama_lengkap   =$("input[name=name]").val();
        let _nama_Panggilan  =$("input[name=nama-panggilan]").val();
        let _jenis_kelamin   =$("input[name=jenis-kelamin]").val();
        let _tempat_Lahir    =$("input[name=tempat-lahir]").val();
        let _tanggal_lahir   =$("input[name=tanggal-lahir]").val();
        let _agama           =$("input[name=agama]").val();
        let _anak_Ke         =$("input[name=anakke]").val();
        let _dari            =$("input[name=dari]").val();
        let _nik_Anak        =$("input[name=name]").val();
        let _bahasa          =$("input[name=name]").val();
        let _status_anak     =$("input[name=status]").val();
        let _kewarga_negaraan=$("input[name=name]").val();

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
                          bahasa   : _bahasa,
                          status_anak   : _status_anak,
                          kewarga_negaraan   : _kewarga_negaraan
                  },
                  tempat_tinggal:{
                        
                  },
                  kesehatan :{

                  },
                  pendidikan:{

                  }
                };
          let str = JSON.stringify(data_siswa);
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
      });
    </script>
@endsection


@extends('layouts.guest')

@section('content')
<style>
#hidden_div { display: none; }
</style>

<div class="card">
    <!-- Do what you wont -->
    <div class="form-group label-floating has-success">
    <h2><center><label class="control-label">MASUKAN NOMOR PENDAFTARAN</label></center></h2>
    <p><p>
          <input type="text" class="form-control" name="nopendaftaran" placeholder="masukan nomor pendaftaran.." />
    <br><p><p>

  </div>

  <div class="result">
  </div>
</div>

    <script type="text/javascript">
      
      $("#check").click(function(){
        let _nama_lengkap    =$("input[name=name]").val();


          var no_pendaftaran = {
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
                        kebutuhankhusus: _kebutuhankhusus,
                        kelainanlainnya: _kelainanlainnya

                  },
                  pendidikan:{
						            namatk		:_namatk,
						            alamattk	:_alamattk
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


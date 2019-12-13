@extends('layouts.guest')

@section('content')
<style>
#hidden_div { display: none; }
</style>

<div class="card">
    <!-- Do what you wont -->

</div>

    <script type="text/javascript">
      
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
        let _kewarga_negaraan=$("input[name=kewarganegaraan]").val();
        let _email           =$("input[name=email]").val();
        let _notelp          =$("input[name=notelp]").val();
        let _alamat          =$("textarea[name=alamat]").val();
        let _tinggalbersama  =$("input[name=tinggalbersama]").val();
        let _jaraksekolah    =$("input[name=jaraksekolah]").val();
        let _beratbadan      =$("input[name=beratbadan]").val();
        let _tinggi          =$("input[name=tinggi]").val();
        let _golongandarah   =$("select[name=golongandarah]").val();
        let _penyakit        =$("select[name=penyakit]").val();
        let _kebutuhankhusus =$("input[name=kebutuhankhusus]").val();
        let _kelainanlainnya =$("input[name=kelainanlainnya]").val(); 
        let _namatk=$("input[name=namatk]").val();
        let _alamattk=$("input[name=alamattk]").val();


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

      //menampilkan form penyakit dll
      function showDiv(divId, element){
          document.getElementById(divId).style.display = element.value == 'dll' ? 'block' : 'none';
      };
      
    </script>
@endsection


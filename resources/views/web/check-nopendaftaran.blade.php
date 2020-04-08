@extends('layouts.guest')

@section('content')
<style>
#hidden_div { display: none; }
.dropzone{
  border: 8px dashed  #3498db;
  border-radius: 15px;

}
</style>

<div class="card">
    <!-- Do what you wont -->
    <div class="container">
      @isset($id)
      <p></p>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>ID Pendaftar : {{ $id }}</strong> silakan klik form dibawah kemdian tekan enter untuk lanjut
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <script type="text/javascript">
    
      $( document ).ready(function(){
        if (true) {
          let _nik   = <?= $id ?> ;
            $.ajax({
              method: "post",
              url: "/get_detail",
              data: {nik: _nik}
            })
            .done(function( result ) {
              $("#result .card-body").html(result);
              // let res = JSON.stringify( result );
              // alert(result);
            });
        }
      }); 

    </script>
      @endisset
        <div class="card">
          <div class="card-body">
            Check Nomor pendaftaran
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="material-icons">group</i>
                </span>
              </div>
              @isset($id)
                <input type="text" class="form-control" placeholder="Nomor pendaftaran" name="nik" value="{{ $id }}">
              @endisset
              @empty($id)
                <input type="text" class="form-control" placeholder="Nomor pendaftaran" name="nik" >
              @endempty
            </div>
          </div>
        </div>

<div class="jumbotron">
  <h1 class="display-4">Check Pendaftaran</h1>
  <p class="lead">Untuk melanjutkan proses pendaftaran mohon untuk selesaikan tahapan yang ada di halaman ini </p>
  <hr class="my-4">
  <p>lakukan verikasi untuk lanjut proses berikutnya</p>
  <p class="lead">
    <button class="btn btn-primary btn-lg text-center" id="verify">verifikasi</button>
    <a href="http://localhost:8000/ujian" target="_blank" class="btn btn-success btn-lg text-center" id="test">Test</a>
  </p>
</div>

        <div class="card" id="result">
          <div class="card-body">
            

          </div>
        </div>
        

        <div class="card" id="panel-upload">
          <div class="card-body">
                
       <!--  <label class="h3">
            Upload Berkas dan Verifikasi Pendaftaran
        </label> -->
                <form action="/file-upload" class="dropzone" id="myDropzone">
                  {{ csrf_field() }}
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                    @isset($id)
                    <input type="number" name="id" value="{{ $id }}" hidden="true">
                    @endisset
                    @empty($id)
                    <input type="number" name="id" value="" hidden="true">
                    @endempty
                </form>
                
          </div>
        </div>

    </div>
</div>
  
    <script type="text/javascript">
      Dropzone.autoDiscover =false;
      var _id = $("input[name=id]").val();
      var myDropZone = new Dropzone($('#myDropzone').get(0), {
      acceptedFiles: ".pdf,.doc,.docx,.jpg,.jpeg,.png",
      maxFilesize: 2, // MB
      addRemoveLinks: true,
      
      removedfile: function(file) {
        var name = file.name;
        let _id = $("input[name=id]").val();

        $.ajax({
          type: "post",
          url: "/remove",
          data: { file: name, id:_id },
          dataType: 'html'
        });

        // remove the thumbnail
        var previewElement;
        return (previewElement = file.previewElement) != null ? (previewElement.parentNode.removeChild(file.previewElement)) : (void 0);
      },
      init: function() {
        var me = this;

        $.get("/list-file/"+_id, function(data) {
          // if any files already in server show all here
          data = JSON.parse(data);
          if (data.length > 0) {
            $.each(data, function(key, value) {
              var mockFile = value;
              me.emit("addedfile", mockFile);
              me.emit("thumbnail", mockFile,value.file_url);
              me.emit("complete", mockFile);
            });
          }
        });
      }
      });

      $("input").keypress(function(e){
        if (e.which == 13) {
          let _nik   =$("input[name=nik]").val();
          $("input[name=id]").val(_nik);
          myDropZone;
            $.ajax({
              method: "post",
              url: "/get_detail",
              data: {nik: _nik}
            })
            .done(function( result ) {
              $("#result .card-body").html(result);
              // let res = JSON.stringify( result );
              // alert(result);
            });
        }
      }); 

      $("#verify").click(function(){
        let _nik   =$("input[name=nik]").val();
            $.ajax({
              method: "post",
              url: "/verify",
              data: {nik: _nik}
            })
            .done(function( result ) {
              // $("#result .card-body").html(result);
              // let res = JSON.stringify( result );
              // alert(result);
               $.notify({
                    icon: "add_alert",
                    message: "Kami telah menerima verifikasi anda, untuk tahap seleksi selanjutnya akan kami infokan melalui email anda terimakasih "

                },{
                    type: 'success',
                    timer: 4000,
                    placement: {
                        from: "top",
                        align: "center"
                    }
                });
               location.reload();
            });
      });

      $( document ).ready(function(){
        $("#panel-upload").css('display','none');
        $("#verify").css('display','none');
        $("#test").css("display",'none');
      });
    </script>
@endsection


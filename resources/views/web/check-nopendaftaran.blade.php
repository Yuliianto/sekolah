@extends('layouts.guest')

@section('content')
<style>
#hidden_div { display: none; }
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
<<<<<<< HEAD
              @isset($id)
                <input type="text" class="form-control" placeholder="Nomor pendaftaran" name="nik" value="{{ $id }}">
              @endisset
              @empty($id)
                <input type="text" class="form-control" placeholder="Nomor pendaftaran" name="nik" >
              @endempty
=======
              <input type="text" class="form-control" placeholder="Nomor pendaftaran" name="nik" required>
>>>>>>> a7a27920abcda77d7b80083f0e6a62eddcdb5815
            </div>
          </div>
        </div>
        
        <div class="card" id="result">
          <div class="card-body">
            
          </div>
        </div>
        
    </div>
</div>

    <script type="text/javascript">
      
      $("input").keypress(function(e){
        if (e.which == 13) {
          let _nik   =$("input[name=nik]").val();
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
@endsection


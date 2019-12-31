@extends('layouts.guest')

@section('content')
<style>
#hidden_div { display: none; }
</style>

<div class="card">
    <!-- Do what you wont -->
    <div class="container">
        <div class="card">
          <div class="card-body">
            Check Nomor pendaftaran
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="material-icons">group</i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Nomor pendaftaran" name="nik" required>
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


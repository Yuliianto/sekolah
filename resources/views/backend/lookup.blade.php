
<?php
$date = date_create($details->created_at);
$path = "storage/".date_format($date,'Y/m/d')."/".$details->nik."_foto.jpg";
// echo $path;
?>

<button class="btn btn-primary" id="btn-test">click</button>
<div class="row">
    <div class="col">
        <div class="card card-profile ml-auto mr-auto" style="max-width: 360px">
            <div class="card-header card-header-image">
                <a href="#pablo">
                    <img class="img" src="{{ asset($path) }}">
                </a>
            </div>

            <div class="card-body ">
                <h4 class="card-title">{{ $details->nik }}</h4>
                <h6 class="card-category text-gray">{{ $details->name }}</h6>
            </div>
            <div class="card-footer justify-content-center">
                <a href="#pablo" class="btn btn-just-icon btn-twitter btn-round">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-facebook btn-round">
                    <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-google btn-round">
                    <i class="fa fa-google"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col">

        <hr>
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col" colspan="3"><label class="h5">CALON MAHASISWA</label></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">NIK</th>
                    <td colspan="2">{{ $details->nik }}</td>
                </tr>
                <tr>
                    <th scope="row">Nama</th>
                    <td colspan="2">{{ $details->nama }}</td>
                </tr>
                <tr>
                    <th scope="row">Lahir</th>
                    <td colspan="2">{{ $details->tempat_lahir }}, {{ $details->tgl_lahir }}</td>
                </tr>
                <tr>
                    <th scope="row">Gender</th>
                    <td colspan="2">{{ $details->jenkel }}</td>
                </tr>

                <tr>
                    <th scope="row">Asal Sekolah</th>
                    <td colspan="2">{{ $details->asal_sekolah }}, {{ $details->alamat_asel }}</td>
                </tr>
                <tr>
                    
                    <td colspan="3">
                            <input type="hidden" name="nik" value="{{ $details->nik }}">
                            <div class="row">
                                <div class="col">
                                    <input type="number" id="Disiplin" class="form-control" placeholder="Disiplin" min="0" value="{{ $details->xn4 }}">
                                </div>
                                <div class="col">
                                    <input type="number" id="Motivasi" class="form-control" placeholder="Motivasi" min="0" value="{{ $details->xn5 }}">
                                </div>
                                <div class="col">
                                    <input type="number" id="Kerapihan" class="form-control" placeholder="Kerapihan" min="0" value="{{ $details->xn6 }}">
                                </div>
                            </div>
                        
                    </td>
                </tr>
            </tbody>
        </table>

        <span class="lead">Kelengkapan Document</span>
        <p>

            @foreach($documents as $doc)
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="" disabled checked="true">
                    {{ $doc['name'] }}
                    <span class="form-check-sign">
                        <span class="check"></span>
                    </span>
                </label>
            </div>
            @endforeach
        </p>
    </div>

</div>

<script type="text/javascript">
    function updateInterview(_data){
        let inputdata = _data;
        
        if (inputdata.disiplin.length != 0  && inputdata.motivasi.length != 0 && inputdata.kerapihan.length !=0) {
             $.ajax({
                    method : "POST",
                    url: "/updateInterview",
                    data : inputdata}).done(function (result){
                        console.log(result);
                    });
        }
    }

    $("#Disiplin").keyup(function(){
      let data = {nik : $("input[name=nik]").val(), disiplin : $("#Disiplin").val(), motivasi:$("#Motivasi").val(), kerapihan:$("#Kerapihan").val()}
      updateInterview(data);
    });

    $("#Motivasi").keyup(function(){
      let data = {nik : $("input[name=nik]").val(), disiplin : $("#Disiplin").val(), motivasi:$("#Motivasi").val(), kerapihan:$("#Kerapihan").val()}
      updateInterview(data);
    });

    $("#Kerapihan").keyup(function(){
      let data = {nik : $("input[name=nik]").val(), disiplin : $("#Disiplin").val(), motivasi:$("#Motivasi").val(), kerapihan:$("#Kerapihan").val()}
      updateInterview(data);
    });
</script>
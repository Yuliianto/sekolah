@extends('layouts.backend')

@section('content')
<div class="content">
    <div class="container-fluid">
        <!-- your content here -->
            <div class="card">
                <div class="card-body">
                    <div class="form-inline">

                        <div class="input-group">
                          <select class="custom-select" id="kelas_idselected" name="kelas_id">
                            <option>pilih nama kelas</option>
                            @foreach($kuiz as $value)
                            <option value="{{ $value->kuiz_id}}">{{ $value->deskrip }}</option>
                            @endforeach
                          </select>
                          <select class="custom-select" id="enrolSelected" name="enrolSelected">
                            <option>pilih enrol key</option>
                            <!-- @foreach($dt_enrol as $value)
                            <option value="{{ $value->enrol}}">{{ $value->enrol }}</option>
                            @endforeach -->
                          </select>
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="generate">Generate Nilai</button>
                          </div>

                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="send-enrol-masal">send enrol</button>
                          </div>
                          <!-- <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="send-pengumuman">send-pengumuman <i class="material-icons">email</i></button>
                          </div> -->
                        </div>

                    </div>
                </div>
            </div>
        

        
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="myTable">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th>Asal sekolah</th>
                                <!-- <th>Alamat</th> -->
                                <th>Kontak</th>
                                <th>Nilai</th>
                                <th>Status</th>
                                <th>Lulus</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="Tgetpendaftar">
                            @foreach($pendaftar as $column)
                            <tr>
                                <td class="text-center">{{ $loop->index+1 }}</td>
                                <td>{{ $column->xs1 }}</td>
                                <td>{{ $column->xs9 }}</td>
                                <!-- <td>{{ $column->xs3 }}</td> -->
                                <td>{{ $column->xs2 }}</td>
                                <td>{{ $column->xn3 }}</td>
                                <td>{{ $column->name }}</td>
                                <td>{{ $column->lulus }}</td>
                                
                                <td class="td-actions text-center">

                                    <button type="button" rel="tooltip" class="btn btn-success btn-round btn-lookup" data-toggle="modal" data-target="#lookUp"  value="{{ $column->xn1 }}">
                                        <i class="material-icons">send</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-info btn-round btn-lookup" data-toggle="modal" data-target="#lookUp"  value="{{ $column->xn1 }}">
                                        <i class="material-icons">visibility</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-round" data-toggle="modal" data-target="#remarkModal"  data-whatever="{{ $column->xn1 }}">
                                        <i class="material-icons">delete</i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        

    </div>
</div>

<script type="text/javascript">
    $( document ).ready(function(){

        $("#kelas_idselected").change(function() {
            let kelas_id = $(this).val();
            $.get("/get_enrol/"+kelas_id,function( result ){
                // console.log( result.enrol );
                // $dt = JSON.parse(result);
                $("#enrolSelected").html("<option value = "+result.enrol+">"+result.enrol+"</option>");
            });
        });
    });
</script>


@endsection

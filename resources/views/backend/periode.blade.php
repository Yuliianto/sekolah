@extends('layouts.backend')

@section('content')
<div class="content">
    <div class="container-fluid">
        <!-- your content here -->
            <div class="card">
                <div class="card-body">
                    <div class="form-inline">

                        <div class="input-group">
                          <select class="custom-select" id="inputGroupSelect04" name="perioder_selectbox">
                            <option value="{{ '' }}">{{ '' }}</option>
                            <option value="{{ 'Periode 2020 - 2021' }}">{{ 'Periode 2020 - 2021' }}</option>
                          </select>
                          <div class="input-group-append">
                            <button class="btn btn-success" type="button" id="add_periode" data-toggle="modal" data-target="#form_insert_periode">
                                <i class="material-icons">playlist_add</i>
                            </button>
                          </div>
                          <div class="input-group-append">
                            <button class="btn btn-danger" type="button" id="delete-periode">
                                <i class="material-icons">delete</i>
                            </button>
                          </div>
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
                                <th>Nama</th>
                                <th>Periode</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="Tgetpendaftar">
                            @foreach($dt_content as $column)
                            <tr>
                                <td class="text-center">{{ $loop->index+1 }}</td>
                                <td>{{ $column->xs1 }}</td>
                                <!-- <td>{{ $column->xs9 }}</td> -->
                                <!-- <td>{{ $column->xs3 }}</td> -->
                                <td>{{ $column->xs2 }}</td><!-- 
                                <td>{{ $column->xn3 }}</td>
                                <td>{{ 'data' }}</td>
                                <td>{{ 'data' }}</td>
                                 -->
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
@endsection

@extends('layouts.backend')

@section('content')
<div class="content">
    <div class="container-fluid">
        <!-- your content here -->
            <div class="card">
                <div class="card-body">
                    <div class="form-inline">
                        <div class="form-group mb-2">
                            <label for="staticEmail2" class="sr-only">Generate Nilai</label>
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Generate Nilai">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="inputPassword2" class="sr-only">Password</label>
                            <select class="form-control" name="kelas_id">
                                @foreach($kuiz as $value)
                                <option value="{{ $value->kuiz_id}}">{{ $value->deskrip }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success mb-2" id="generate">Generate</button>
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
                                <th>Alamat</th>
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
                                <td>{{ $column->xs3 }}</td>
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
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-round" data-toggle="modal" data-target="#remarkModal"  value="{{ $column->xn1 }}">
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

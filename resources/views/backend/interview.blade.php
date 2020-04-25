@extends('layouts.backend')

@section('content')


      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header card-chart card-header-warning">
                      <div class="ct-chart" id="dailySalesChart"></div>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Daily Sales</h4>
                      <p class="card-category"><span class="text-success"><i class="fa fa-long-arrow-up"></i> 55%  </span>increase in today sales.</p>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">access_time</i>Updated 4 minutes ago
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header card-chart card-header-success">
                      <div class="ct-chart" id="completedTasksChart"></div>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Completed Tasks</h4>
                      <p class="card-category">Last Campaign Performance</p>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">access_time</i>
                        Updated 2 minutes ago
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <div class="row">
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
          </div>
          <div class="row">
            <div class="card">
            	<div class="card-body">
            		<div class="row" style="display: none;">
                  <!-- content -->
                  @foreach($dt_tes as $value)
                  {{ $value->xn1 }} | {{ $value->detail->where('pendaftar_detail_type_id',2)->first() }} <br>

                  @endforeach
            		</div>
            		
                      <div class="row">
                           <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            
                                            <th>Name</th>
                                            <th>Asal sekolah</th>
                                            <th>Alamat</th>
                                            <th>Kontak</th>
                                            <th>Nilai</th>
                                            <th>Status</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @foreach($pendaftar as $column)
                                        <tr>
                                            <td class="text-center">{{ $loop->index+1 }}</td>
                                            <td>{{ $column->xs1 }}</td>
                                            <td>{{ $column->xs9 }}</td>
                                            <td>{{ $column->xs3 }}</td>
                                            <td>{{ $column->xs2 }}</td>
                                            <td>{{ $column->xn3 }}</td>
                                            <td>{{ $column->name }}</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" class="btn btn-info btn-round btn-lookup" data-toggle="modal" data-target="#lookUp"  value="{{ $column->xn1 }}">
                                                    <i class="material-icons">visibility</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-round" data-toggle="modal" data-target="#remarkModal"  value="{{ $column->xn1 }}">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                           </div>
                      </div>
            		
            	</div>
            </div>
          </div>
        </div>
      </div>
@endsection

<script type="text/javascript">
  $( document ).ready(function() {
    // body...
  });
</script>
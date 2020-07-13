@extends('layouts.backend')

@section('content')
<div class="content">
    <div class="container-fluid">
        <!-- your content here -->

          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Pendaftar</p>
                  <h3 class="card-title">{{ $summary['total'] }}
                    <small>org</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    terkini
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Verifikas</p>
                  <h3 class="card-title">{{ $summary['terverifikasi'] }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> update
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Lulus</p>
                  <h3 class="card-title">{{ $summary['lulus'] }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> siswa
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <p class="card-category">Tidak Lulus</p>
                  <h3 class="card-title">{{ $summary['tidak_lulus'] }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> peserta
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header card-chart card-header-warning">
                                <div class="ct-chart" id="dailySalesChart"></div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Total Pendaftar</h4>
                                <p class="card-category"><span class="text-success"><i class="fa fa-long-arrow-up"></i>  </span>increase in today sales.</p>
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
                    <div class="col-md-12">


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

            </div>
        </div>
    </div>
</div>
@endsection
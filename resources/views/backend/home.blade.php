@extends('layouts.backend')

@section('content')
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
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
          						<p class="card-category"><span class="text-success"><i class="fa fa-long-arrow-up"></i> {{ $count }}  </span>increase in today sales.</p>
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
                              <table class="table">
                                  <thead>
                                      <tr>
                                          <th class="text-center">#</th>
                                          <th>NIK</th>
                                          <th>Status</th>
                                          <th>Anak ke</th>
                                          <th>Name</th>
                                          <th class="text-right">Actions</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                   @foreach($pendaftar as $column)
                                      <tr>
                                          <td class="text-center">{{ $loop->index+1 }}</td>
                                          <td>{{ $column->xn1 }}</td>
                                          <td>{{ $column->name }}</td>
                                          <td>{{ $column->xn2 }}</td>
                                          <td>{{ $column->xs1 }}</td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" class="btn btn-info btn-round btn-lookup" data-toggle="modal" data-target="#lookUp" id="person" value="{{ $column->xn1 }}">
                                                  <i class="material-icons">person</i>
                                              </button>
                                              <button type="button" rel="tooltip" class="btn btn-success btn-round btn-lookup" data-toggle="modal" data-target="#lookUp" id="edit" value="{{ $column->xn1 }}">
                                                  <i class="material-icons">edit</i>
                                              </button>
                                              <button type="button" rel="tooltip" class="btn btn-danger btn-round" data-toggle="modal" data-target="#remarkModal" id="btn-del" value="{{ $column->xn1 }}">
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
@endsection
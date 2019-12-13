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
          		
          		
          	</div>
          </div>
        </div>
      </div>
@endsection
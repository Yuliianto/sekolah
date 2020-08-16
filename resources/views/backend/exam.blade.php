@extends('layouts.backend')

@section('content')
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->

          <iframe src="http://localhost/CI-class/index.php/web/index/{{ base64_encode($user->email) }}" class="col-12" style="min-height: 500px; border: 0px;">
          	<p>Your browser does not support iframes.</p>
          </iframe>
        </div>
      </div>
@endsection
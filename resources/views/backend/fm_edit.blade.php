@extends('layouts.backend')

@section('content')


      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="card">
			<div class="container">
				&nbsp;
<div class="row">
    <div class="col-md-2">
        <ul class="nav nav-pills nav-pills-primary flex-column">
          <li class="nav-item"><a class="nav-link " href="#tab1" data-toggle="tab">Profile</a></li>
          <li class="nav-item"><a class="nav-link active" href="#tab2" data-toggle="tab">Content</a></li>
          <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab">Options</a></li>
        </ul>
    </div>
    <div class="col-md-10" style="border-left: 2px solid #bdc3c7; min-height: 500px;">
        <div class="tab-content">
            <div class="tab-pane" id="tab1">

            	<div class="card card-nav-tabs card-plain">
    <div class="card-header card-header-danger">
        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home" data-toggle="tab"><i class="material-icons">where_to_vote</i>Alamat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#updates" data-toggle="tab"><i class="material-icons">local_phone</i>Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#history" data-toggle="tab"><i class="material-icons">star_border</i>Visi & Misi</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-body " >
        <div class="tab-content text-right">
            <div class="tab-pane active" id="home">
            	<div>
            		<div class="form-group">
            			<label for="inputAddress">Address</label>
            			<input type="text" class="form-control" id="inputAddress" placeholder="{{ $lk_alamat->xs2 }}">
            		</div>
            		<div class="form-group">
            			<label for="inputAddress2">Address 2</label>
            			<input type="text" class="form-control" id="inputAddress2" placeholder="{{ $lk_alamat->xs3 }}">
            		</div>
            		<div class="form-row">
            			<div class="form-group col-md-6">
            				<label for="inputCity">City</label>
            				<input type="text" class="form-control" id="inputCity" value="{{ $lk_alamat->xs4 }}">
            			</div>
            			<div class="form-group col-md-3">
            				<label for="inputState">State</label>
            				<select id="inputState" class="form-control">
            					<option value="Indonesia" selected>Indonesia</option>
            					@foreach($dt_negara as $negara)
            						<option>{{ $negara->xs2 }}</option>
            					@endforeach
            				</select>
            			</div>
            			<div class="form-group col-md-2 ml-auto">
            				<label for="inputZip">Zip</label>
            				<input type="text" class="form-control" id="inputZip" value="{{ $lk_alamat->xs6 }}">
            			</div>
            		</div>
            		<div class="form-group">
            			<div class="form-check">
            				<label class="form-check-label">
            					<input class="form-check-input" type="checkbox" value="">
            					Check me out
            					<span class="form-check-sign">
            						<span class="check"></span>
            					</span>
            				</label>
            			</div>
            		</div>
            		<button type="submit" class="btn btn-primary" id="update-address">Save</button>
            	</div>
            </div>
            <div class="tab-pane" id="updates">
                
            	
            		<div>
            			<div class="form-row">
            				<div class="col">
            					<input type="text" class="form-control" placeholder="First name" id="iKontakname">
            				</div>
            				<div class="col">
            					<input type="number" class="form-control" placeholder="Number" id="iKontaknumber">
            				</div>
            			</div>
        					<button type="submit" class="btn btn-primary" id="update-kontak">Save</button>
            		</div>
            		

                <table class="table table-hover">
                    <thead class="text-warning">
                      <tr><th>ID</th>
                      <th>Name</th>
                      <th>Number</th>
                      <th>Delete</th>
                    </tr></thead>
                    <tbody>

                    @foreach($list_kontak as $ls_kontak)
                      <tr>
                        <td>1</td>
                        <td>{{ $ls_kontak->xs4 }}</td>
                        <td>{{ $ls_kontak->xs3 }}</td>
                        <td>
                              <a class="btn btn-danger btn-round"  href="/hapus-kontak/{{ $ls_kontak->xs3 }}">
                                  <i class="material-icons">delete</i>
                              </a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
	            <hr>
                
            </div>
            <div class="tab-pane" id="history">
                    
                <form action="/update-visi-misi" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputAddress">Visi</label>
                        <textarea class="form-control" name="iVisi" placeholder="" rows="5">{{ $lk_visimisi->xs2 }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Misi</label>
                        <textarea class="form-control" name="iMisi" placeholder="" rows="5">{{ $lk_visimisi->xs3 }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" id="update-address">Save</button>
                </form>

            </div>
        </div>
    </div>
  </div>

            </div>
            <div class="tab-pane active" id="tab2">


                <div>
                    <div class="form-group">
                        <label for="inputTitle">Title</label> 
                        <input type="hidden" name="id_content" value="{{ $id_content }}" id="id_content">
                        <input type="text" class="form-control" id="inputTitle" value="{{ $dt_content->xs1 }}">
                    </div>
                    <div class="form-group">
                        <textarea id="inputContent">{!! $dt_content->xs2 !!}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="1" id="inputHighlight">
                                Highlight
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="edit-content">Save</button>

                    <button type="submit" class="btn btn-danger" id="close-content">Close</button>
                </div>
                

            </div>
            <div class="tab-pane" id="tab3">
                Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                <br><br>Dynamically innovate resource-leveling customer service for state of the art customer service.
            </div>
        </div>
    </div>
</div>
				&nbsp;
  			</div>
          </div>
        </div>
      </div>
@endsection
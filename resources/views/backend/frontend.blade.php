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
          <li class="nav-item"><a class="nav-link active" href="#tab1" data-toggle="tab">Profile</a></li>
          <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">Content</a></li>
          <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab">Options</a></li>
        </ul>
    </div>
    <div class="col-md-10" style="border-left: 2px solid #bdc3c7; min-height: 500px;">
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">

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
                  <label for="inputBrand">Brand</label>
                  <input type="text" class="form-control" id="inputLogo" value="{{ $profil->xs2 }}">
                </div>
                <div class="form-group">
                  <label for="inputKontak">Kontak</label>
                  <input type="text" class="form-control" id="inputKontak" value="{{ $lk_alamat->xs7 }}">
                </div>
            		<div class="form-group">
            			<label for="inputAddress">Address</label>
            			<input type="text" class="form-control" id="inputAddress" value="{{ $lk_alamat->xs2 }}">
            		</div>
            		<div class="form-group">
            			<label for="inputAddress2">Address 2</label>
            			<input type="text" class="form-control" id="inputAddress2" value="{{ $lk_alamat->xs3 }}">
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
            <div class="tab-pane" id="tab2">


                <div id="form-content">
                    <div class="form-group">
                        <label for="inputTitle">Title</label>
                        <input type="text" class="form-control" id="inputTitle" placeholder="Write title content hire..">
                    </div>
                    <div class="form-group">
                        <textarea id="inputContent"></textarea>
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
                    <button type="submit" class="btn btn-primary" id="save-content">Save</button>

                    <button type="submit" class="btn btn-danger" id="close-content">Close</button>
                </div>
                <button type="button" class="btn btn-primary" id="add">create</button>  
                <div class="card" id="content-list">

                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Content:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">bug_report</i> Post
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">code</i> Website
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">cloud</i> Server
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <tbody id="tbody-content">
                          <!-- list content -->
                          <!-- <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                <i class="material-icons">edit</i>
                              <div class="ripple-container"></div></button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr> -->
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="messages">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="settings">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
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
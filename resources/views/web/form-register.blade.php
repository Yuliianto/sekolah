@extends('layouts.guest')

@section('content')
<div class="card">
    <div class="card-header card-header-text card-header-primary">
        <div class="card-text">
            <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs " data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="satu" href="#keterangan" data-toggle="tab">Data Calon<i class="material-icons">label_important</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="dua" href="#alamat" data-toggle="tab">Alamat<i class="material-icons">label_important</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tiga" href="#kesehatan" data-toggle="tab">Kesehatan<i class="material-icons">label_important</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="empat" href="#pendidikan" data-toggle="tab">Pendidikan<i class="material-icons">done_outline</i></a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </div>
    <div class="card-body min-vh-100">
        <div class="tab-content">
            <div class="tab-pane active" id="keterangan">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Keterangan</li>
                    </ol>
                </nav>
                <form>
                  
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nama Lengkap">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nama Panggilan">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label> <br>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki"> laki-laki
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan"> perempuan
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                    </div>
                  <div class="form-group">
                    <label for="ttl">Tempat Tanggal Lahir</label>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="text" name="tempat" class="form-control" placeholder="Tempat lahir">
                            </div>
                            <div class="col">
                                <input type="date" name="tanggal" class="form-control" placeholder="Tanggal lahir">
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <label for="agama">Agama</label>
                        <select class="form-control selectpicker" data-style="btn btn-link" id="agama">
                          <option value="Islam">Islam</option>
                          <option value="Khatolik">Khatolik</option>
                          <option value="Protestan">Protestan</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Budha">Budha</option>
                        </select>
                        <p></p>
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="948893888">
                        <p></p>
                        <label for="kewarganegaraan">Kewarga negaraan</label>
                        <input type="text" name="kewarganegaraan" class="form-control" placeholder="WNI">
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="anakke">Anaka</label>
                          <input type="number" name="anakke" class="form-control" placeholder="2">
                          <p></p>
                          <label>dari</label>
                          <input type="number" name="dari" class="form-control" placeholder="2">
                          <p></p>
                          <label for="status">Status anak</label>
                          <input type="text" name="status" class="form-control" placeholder="Kandung">
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="#alamat" data-toggle="tab" class="btn btn-primary">Lanjut</a>
                </form>
            </div>
            <div class="tab-pane" id="alamat">
                <nav aria-label="breadcrumb" role="navigation">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Keterangan</li>
                    <li class="breadcrumb-item active" aria-current="page">Alamat</li>
                  </ol>
                </nav>
                <form>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control selectpicker" data-style="btn btn-link" id="exampleFormControlSelect2">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  
                </form>
            </div>
            <div class="tab-pane" id="kesehatan">
                <nav aria-label="breadcrumb" role="navigation">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Keterangan</li>
                    <li class="breadcrumb-item">Alamat</li>
                    <li class="breadcrumb-item active" aria-current="page">Kesehatan</li>
                  </ol>
                </nav>
                <form>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control selectpicker" data-style="btn btn-link" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control selectpicker" data-style="btn btn-link" id="exampleFormControlSelect2">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  
                </form>
            </div>

            <div class="tab-pane" id="pendidikan">
                <nav aria-label="breadcrumb" role="navigation">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Keterangan</li>
                    <li class="breadcrumb-item">Alamat</li>
                    <li class="breadcrumb-item active">Kesehatan</li>
                    <li class="breadcrumb-item active" aria-current="page">Pendidikan</li>
                  </ol>
                </nav>
                <form>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control selectpicker" data-style="btn btn-link" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control selectpicker" data-style="btn btn-link" id="exampleFormControlSelect2">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

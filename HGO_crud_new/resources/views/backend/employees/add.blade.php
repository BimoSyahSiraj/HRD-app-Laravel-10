@extends('backend.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Employees</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Add</a></li>
              <li class="breadcrumb-item active">Employees</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Employee</h3>
              </div>

              <!-- awal nama -->
              <form class="form-horizontal" method="post" accept="{{ url('admin/employees/add') }}" enctype="multipart/form-data">
                {{ csrf_field()}}
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">First Name <span style="color:red;"></span> *</label>
                    <div class="col-sm-10">
                      <input type="text" value="{{ old('name') }}" name="name" class="form-control" required placeholder="Enter First Name">
                    </div>
                  </div>
              <!-- akhir nama -->

              <!-- awal last name -->
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Last Name <span style="color:red;"></span></label>
                    <div class="col-sm-10">
                      <input type="text" value="{{ old('last_name') }}" name="last_name" class="form-control" placeholder="Enter Last Name">
                    </div>
                  </div>
              <!-- akhir last name  -->

              <!-- awal email -->
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Email <span style="color:red;"></span> *</label>
                    <div class="col-sm-10">
                      <input type="email" value="{{ old('email') }}" name="email" class="form-control" required placeholder="Enter Email">
                      <span style="color:red">{{ $errors->first('email') }}</span>
                    </div>
                  </div>
              <!-- akhir email -->

              <!-- awal nomor telfon -->
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Nomor handphone <span style="color:red;"></span> *</label>
                    <div class="col-sm-10">
                      <input type="number" value="{{ old('phone_number') }}" name="phone_number" class="form-control" required placeholder="Enter Phone number">
                      <!-- <span style="color:red">{{ $errors->first('phone_number') }}</span> -->
                    </div>
                  </div>
              <!-- akhir nomor telfon -->

              <!-- awal tanggal dihire -->
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Hire date <span style="color:red;"></span> *</label>
                    <div class="col-sm-10">
                      <input type="date" value="{{ old('hire_date') }}" name="hire_date" class="form-control" required placeholder="Enter Hire date">
                    </div>
                  </div>
              <!-- akhir tanggal dihire -->

              <!-- awal job id -->
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Job Title <span style="color:red;"></span> *</label>
                    <div class="col-sm-10">
                      <select name="job_id" id="" class="form-control" required>
                        <option value="">Select Job Title</option>
                        <option value="1">Web Developer</option>
                        <option value="2">Mobile Developer</option>
                      </select>
                    </div>
                  </div>
              <!-- akhir job id -->

              <!-- awal gaji -->
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Salary <span style="color:red;"></span> *</label>
                    <div class="col-sm-10">
                      <input type="number" value="{{ old('salary') }}" name="salary" class="form-control" required placeholder="Enter Salary">
                      <!-- <span style="color:red">{{ $errors->first('salary') }}</span>  -->
                    </div>
                  </div>
              <!-- akhir gaji -->

              <!-- awal commison PTC -->
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Commision PCT <span style="color:red;"></span> *</label>
                    <div class="col-sm-10">
                      <input type="number" value="{{ old('commision_pct') }}" name="commision_pct" class="form-control" required placeholder="Enter Commision PCT">
                      <!-- <span style="color:red">{{ $errors->first('commision_pct') }}</span> -->
                    </div>
                  </div>
              <!-- akhir commison PTC -->

              <!-- awal manager -->
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Manager Name <span style="color:red;"></span> *</label>
                    <div class="col-sm-10">
                      <select name="manager_id" id="" class="form-control" required>
                        <option value="">Select Manager</option>
                        <option value="1">Sugana</option>
                        <option value="2">Effendi</option>
                      </select>
                    </div>
                  </div>
              <!-- akhir manager -->

              <!-- awal department -->
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Department Name <span style="color:red;"></span> *</label>
                    <div class="col-sm-10">
                      <select name="department_id" id="" class="form-control" required>
                        <option value="">Select Department</option>
                        <option value="1">Keuangan</option>
                        <option value="2">IT</option>
                      </select>
                    </div>
                  </div>
                <div class="card-footer">
                  <a href="{{ url('admin/employees')}}" class="btn btn-default">Cancel</a>
                  <button class="btn btn-primary float-right" type="submit">Add</button>
                </div>
              <!-- akhir department -->
              </form>
              <!-- akhir form -->
            </div>
          </div>
        </div>
      </div>
    </section>

        
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
 @extends('layouts.master')
@section('title','Admin | Records')
@section('content')

 <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Records</h1>
         <!--  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List of Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Photo</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Role</th>
                      <th>Event</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Photo</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Role</th>
                      <th>Event</th>
                       <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($getRecord as $record)
                    <tr>
                      <td ><img src="{{ $record->image}}" width="50" height="50"></td>
                      <td>{{$record->firstname}}</td>
                      <td>{{$record->lastname}}</td>
                      <td>{{$record->role}}</td>
                      <td>{{$record->event}}</td>
                       <td><a href="/viewsinglerecord/{{$record->id}}" class="btn btn-primary" title="Get Qr Code"><i class="fas fa-eye"></i></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>
                    Copyright © College of Information and Technology Education
                </span>
            </div>
        </div>
    </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  @endsection
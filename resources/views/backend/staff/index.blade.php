@extends('layouts.admin')
@section('content')
<div class="content-wrapper kanban">
    <section class="content-header">
      <div class="container-fluid">
        <a class="btn btn-success" href="{{ route('staff.create') }}">
          <i class="nav-icon fas fa-plus"></i>
           Buat Data Baru</a>
        <br>
        <br>
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Staff Report</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover" style="text-align: center;">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Gaji</th>
                    <th>Status Karyawan</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($staff as $staffs)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $staffs->nama }}</td>
                        <td>{{ $staffs->tanggal_lahir }}</td>
                        <td>{{ $staffs->gaji }}</td>
                        <td>
                          <?php
                            if ($staffs->status_karyawan == 1) {
                              echo "aktif";
                            } else {
                              echo "non aktif";
                            }
                          ?>
                        </td>
                        <td>
                            <form action="{{ route('staff.destroy',$staffs->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('staff.edit',$staffs->id) }}">
                                  <i class="nav-icon fas fa-pen"></i>
                                  Edit</a>
            
            
                                {!! csrf_field() !!}
                                <input name="_method" type="hidden" value="DELETE">
            
               
                                <button type="submit" class="btn btn-danger">
                                  <i class="nav-icon fas fa-trash"></i>
                                  Delete</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
                {{-- {!! $ids->links() !!} --}}
              </table>
            </div>
            <!-- /.card-body -->
          </div>
      </div>
    </section>
</div>
@endsection

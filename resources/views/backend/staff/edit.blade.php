@extends('layouts.admin')
@section('content')
<div class="content-wrapper kanban">
    <section class="content-header">
        <div class="container-fluid">
            <form action="{{ route('staff.update',$staff->id) }}" method="POST">
                {!! csrf_field() !!}
                {{ method_field('PUT') }}
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('staff.index') }}"> 
                        <i class="nav-icon fas fa-arrow-left"></i>
                        Kembali</a>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create Data Staff</h3>
                            </div>
                            <form action="{{ route('staff.store') }}" method="POST">
                            {!! csrf_field() !!}
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" value="{{ $staff->nama }}" id="exampleInputPassword1" name="nama" placeholder="nama">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" value="{{ $staff->tanggal_lahir }}" id="exampleInputPassword1" name="tanggal_lahir" placeholder="tanggal lahir">
                                </div>
                                <div class="form-group">
                                    <label>Gaji</label>
                                    <input type="number" class="form-control "value="{{ $staff->gaji }}" id="exampleInputPassword1" name="gaji" placeholder="gaji">
                                </div>
                                <div class="form-group">
                                    <label>Status Karyawan</label>
                                    <select class="custom-select" name="status_karyawan">
                                        <option value="1">aktif</option>
                                        <option value="0">Non Aktif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection




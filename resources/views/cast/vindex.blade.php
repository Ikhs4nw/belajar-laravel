@extends('layouts/main')

@push('dt-css')
<link rel="stylesheet" href="admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endpush


@section('content-header')
     <!-- Content Header (Page header) -->
     <section class="content-header">
        <h1>
          Data Cast
          <small>{{ date('l, d M Y') }}</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/cast/create') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Master Data</a></li>
          <li class="active">Data Cast</li>
        </ol>
      </section>
@endsection

@section('content')
 <!-- Main content -->
 <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <div class="text-right" style="margin-top: 4px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" style="margin-right: 4px;"></i>Add Data</button>
              </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th class="text-center">No</th>
                <th>Nama Cast</th>
                <th>Umur</th>
                <th>Bio</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($data_cast as $key => $item)
                  <tr>
                    <td class="text-center">{{ $key + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->bio }}</td>
                    <td class="text-center">
                        <a href="#edit{{ $item->id }}" data-toggle="modal" title="Edit Cast"><button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <a href="{{ url('/cast/' . $item->id . '/destroy') }}" title="Delete Cast" onclick="return confirm('Confirm delete?')"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>
                        <a href="#show{{ $item->id }}" data-toggle="modal" title="Preview Data"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                    </td>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
          @include('cast.vupdate');
          @include('cast.vshow')
          @include('cast.vstore')
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
  <!-- page script -->
@endsection

@push('child-scripts')
<!-- DataTables -->
<script src="admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    $(function () {
      $('#example1').DataTable();
    })
</script>
@endpush






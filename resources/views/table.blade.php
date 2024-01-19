@extends('layouts/main')

@section('content-header')
 <!-- Content Header (Page header) -->
 <section class="content-header">
    <h1>
      Simple Tables
      <small>preview of simple tables</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ 'home' }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ 'table' }}">Tables</a></li>
      <li class="active">Simple</li>
    </ol>
  </section>
@endsection

@section('content')
 <!-- Main content -->
 <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Table</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                <th style="width: 10px">#</th>
                <th>Task</th>
                <th>Progress</th>
                <th style="width: 40px">Label</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>1.</td>
                <td>Update software</td>
                <td>
                <div class="progress progress-xs">
                <div class="progress-bar progress-bar-blue" style="width: 55%"></div>
                </div>
                </td>
                <td><span class="badge bg-red">55%</span></td>
                </tr>
                <tr>
                <td>2.</td>
                <td>Clean database</td>
                <td>
                <div class="progress progress-xs">
                <div class="progress-bar bg-yellow" style="width: 70%"></div>
                </div>
                </td>
                <td><span class="badge bg-yellow">70%</span></td>
                </tr>
                <tr>
                <td>3.</td>
                <td>Cron job running</td>
                <td>
                <div class="progress progress-xs progress-striped active">
                <div class="progress-bar bg-blue" style="width: 30%"></div>
                </div>
                </td>
                <td><span class="badge bg-blue">30%</span></td>
                </tr>
                <tr>
                <td>4.</td>
                <td>Fix and squish bugs</td>
                <td>
                <div class="progress progress-xs progress-striped active">
                <div class="progress-bar bg-green" style="width: 90%"></div>
                </div>
                </td>
                <td><span class="badge bg-green">90%</span></td>
                </tr>
                </tbody>
                </table>
          </div>
  </section>
  <!-- /.content -->
@endsection

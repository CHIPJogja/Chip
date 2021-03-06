@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#">Categories</a> <a href="#" class="current">Lihat Kategori</a> </div>
        <h1>Kategori</h1>
        @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        <strong>{{ session('flash_message_error') }}</strong>
        </div>
        @endif
        @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        <strong>{{ session('flash_message_success') }}</strong>
        </div>
        @endif
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>View Categories</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>Id Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Level Kategori</th>
                    <th>URL</th>
                    <th>Edit/Hapus</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                  <tr class="gradeX">
                  <td>{{ $category->id }}</td>
                    <td>{{ $category->Name }}</td>
                    <td>{{ $category->Parent_id }}</td>
                    <td>{{ $category->url }}</td>
                  <td class="center"><div class="fr"><a href="{{url('/admin/edit-category/'.$category->id)}}" class="btn btn-primary btn-mini">Edit</a>
                    <a  rel="{{$category->id}}" rel1="delete-category"
                        href="javascript:" class="btn btn-danger btn-mini deleteRecord">Hapus</a></div></td>              
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
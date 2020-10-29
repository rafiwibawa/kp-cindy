@extends('layouts.header')

@section('content')
<div class="container-fluid">
   
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Karyawan</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
      </div>
    <div class="row">

      
      <div class="col-lg-12 mb-4">

        <!-- Illustrations -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
          </div>
          <div class="card-body">
            <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead class="table-dark">
                <tr>
                  <th class="th-sm">No
            
                  </th>
                  <th class="th-sm">Username
            
                  </th>
                  <th class="th-sm">Name
            
                  </th>
                  <th class="th-sm">Email
            
                  </th>
                  <th class="th-sm">No Hp
            
                  </th>
                  <th class="th-sm">Aksi
            
                  </th>
                </tr>
              </thead>
              @php $no=1; @endphp
              <tbody>
                @foreach ($user as $item)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->no_hp}}</td>
                    <td></td>
                  </tr>
                @endforeach
              </tbody>
              
            </table> 
          </div>
        </div>

     

      </div>

    </div>
    
@endsection

@include('user.modal')

@push('script')
@include('user.script')
@endpush
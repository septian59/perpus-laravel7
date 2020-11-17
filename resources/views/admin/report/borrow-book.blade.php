@extends('admin.templates.default')

@section('content')
   

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Laporan Histori Buku </h3>
            <a href="export" class="btn btn-primary pull-right ">Export</a>
        </div>

        <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Judul</th>
                        <th>Admin</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Keterangan</th>
                        
                    </tr>
                </thead>
                
                <tbody>

                    @php
                        $page = 1;
                        if (request()->has('page')) {
                            $page = request('page');
                        }

                        $no = (10 * $page) - (10 - 1);

                        
                    @endphp


                    @foreach ($borrows as $borrow)
                        <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $borrow->user->name }}</td>
                        <td>{{ $borrow->book->title }}</td>
                        <td>{{ $borrow->admin_id}}</td>
                        <td>{{ $borrow->created_at }}</td>
                        <td>{{ $borrow->returned_at }}</td>
                        <td> <label class="label {{ ($borrow->returned_at == null ) ? 'label-danger' : 'label-success' }}">
                             {{($borrow->returned_at == null ) ? 'Dipinjam' : 'Dikembalikan' }}
                            </label> 
                            </td>
                            
                    @endforeach
                </tbody>
            </table>

            {{ $borrows->links() }}
         
        </div>
    </div>

   

@endsection
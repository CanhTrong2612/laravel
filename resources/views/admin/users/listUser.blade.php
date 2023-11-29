@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên người dùng</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Create</th>
            <th>Operation</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->created_at}}</td>
                <td>
                  
                    <a class="btn btn-danger btn-sm" href={{"/admin/sliders/destroy/". $user->id }}>
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
{{-- 
    <div class="card-footer clearfix">
        {!! $products->links() !!}
    </div> --}}
@endsection



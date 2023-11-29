@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên Sản Phẩm</th>
            <th>Danh Mục</th>
            <th>Giá tiền</th>
            <th>Update</th>
            <th>Operation</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
            @foreach($products as $key => $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category}}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->created_at }}</td>


                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/products/edit/{{ $product->id }}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" href={{"/admin/products/destroy/". $product->id }}>
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



@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <form action="/admin/products/edit" method="POST">
        @csrf
        <div class="card-body">
            <input type="hidden" name="id" value="{{$product->id}}">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Tên Sản Phẩm</label>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                               placeholder="Nhập tên sản phẩm">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Tên danh mục</label>
                        <input type="text" name="danhmuc" value="{{ $product->category }}" class="form-control"
                               placeholder="Nhập tên danh mục">
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Giá tiền</label>
                        <input type="number" name="price" value="{{ $product->price }}"  class="form-control" >
                    </div>
                </div>

               
            </div>

            <div class="form-group">
                <label>Mô Tả </label>
                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            </div>

      
            <div class="form-group">
                <label>Link Url </label>
                <textarea name="thumb" class="form-control">{{ $product->gallery }}</textarea>
            </div>

            <div class="form-group">
                <label>Kích Hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                        {{ $product->active == 1 ? ' checked=""' : '' }}>
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active"
                        {{ $product->active == 0 ? ' checked=""' : '' }}>
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập Nhật Sản Phẩm</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection

@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Продукты</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.product.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Добавить Продукты
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Титул</th>
                                <th scope="col">Текст</th>
                                <th scope="col">Фото</th>
                                <th scope="col">Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td class="col-1">{{$product->id}}</td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->text}}</td>
                                <td>
                                    <img src="{{asset('/storage/products/' . $product->img)}}" style="width: 100%" alt="">
                                </td>

                                <td class="col-2">
                                    <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.product.edit', $product->id)}}">
                                            <span class="btn-label">
                                                <i class="fa fa-pen"></i>
                                            </span>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <span class="btn-label"><i class="fa fa-trash"></i></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Добавить новости</h1></div>
                </div>
                <hr>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.solution.update',$solution->id)}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Титул(Ру)</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Титул" value="{{$solution->title}}">
                        </div>

                        <div class="form-group">
                            <label for="description_ru">Текст (Ру)</label>
                            <textarea  class="form-control"  name="text" id="description_ru" rows="10">{{$solution->text}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="img">Добавьте рисунок <b><i>РАЗМЕР РИСУНОК:(600x300)</i></b></label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

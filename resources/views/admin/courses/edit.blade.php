@extends('layouts.app')
@section('content')
    @include('admin.includes.errors')
    <div class="panel-default">
        <div class="panel-heading">
             Изменить курс: {{$course->name}}
        </div>
        <div class="panel-body">
            <form action="{{ route('course.update',['id'=>$course->id]) }}" method="post" >
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name"> Название </label>
                    <input type="text" name="name" value="{{$course->name}}" class="form-control">
                </div>

                <div class="form-group">
                    <div class="tex-center">
                        <button class="btn btn-success" type="submit">
                            Сохранить
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
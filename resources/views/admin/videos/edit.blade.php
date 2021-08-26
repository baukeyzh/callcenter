@extends('layouts.app')
@section('content')
    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="group-item text-danger">
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif
    <div class="panel-default">
        <div class="panel-heading">
            Добавить видео
        </div>
        <div class="panel-body">
            <form action="{{ route('video.update',['id' => $video->id]) }}" method="post" >
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name"> Название </label>
                    <input type="text" name="name" value="{{$video->name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name"> Ссылка </label>
                    <input type="text" name="link" value="{{$video->link}}" class="form-control">
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
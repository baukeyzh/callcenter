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
            Добавить урок
        </div>
        <div class="panel-body">
            <form action="{{ route('lessons.store') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title"> Название </label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description"> Описание </label>
                    <textarea type="text" name="description" id="description" cols="5" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                        <label for="course">
                            Выберите курс
                        </label>
                        <select name="course_id" id="course" class="form-control">
                            @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <label for="videos">
                        Выберите видео
                    </label>
                        @foreach($videos as $video)
                        <br><label><input type="checkbox" name="videos[]" value="{{$video->id}}">{{$video->name}}</label>
                        @endforeach
                </div>
                <div class="form-group">
                    <label for="homework"> Название </label>
                    <input type="text" name="homework"  class="form-control">
                </div>
                <div class="form-group">
                    <div class="tex-center">
                        <button class="btn btn-success" type="submit">
                            Добавить
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
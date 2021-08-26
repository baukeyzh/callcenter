@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Название курса
                </th>
                <th>
                    Изменть
                </th>
                <th>
                    Удалить
                </th>
                </thead>
                <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>
                            {{$course->name}}
                        </td>
                        <td>
                            <a href="{{ route('course.edit',['id'=>$course->id])}}" class="btn btn-xs btn-info">
                                <span>Изменить</span>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('course.delete',['id'=>$course->id])}}" class="btn btn-xs btn-danger">
                                <span class="">Удалить </span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
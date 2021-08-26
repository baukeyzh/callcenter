@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Название урока
                </th>
                <th>
                    Название курса
                </th>
                <th>
                    Домащняя работа
                </th>
                <th>
                    Востановить
                </th>
                <th>
                    Стереть
                </th>
                </thead>
                <tbody>
                @if ($lessons->count() > 0)
                @foreach($lessons as $lesson)
                    <tr>
                        <td>
                            {{$lesson->title}}
                        </td>
                        <td>
                            {{$lesson->course->name}}
                        </td>
                        <td>
                            <a href=" {{$lesson->homework}}" target="_blank">
                                <button class="btn btn-xs">
                                    <i class="fa fa-download"></i> Посмотреть
                                </button>
                            </a>

                        </td>
                        <td>
                            <a href="{{ route('lesson.restore',['id'=>$lesson->id])}}" class="btn btn-xs btn-success">
                                <span class="">Восстановить </span>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('lesson.kill',['id'=>$lesson->id])}}" class="btn btn-xs btn-danger">
                                <span>Стереть</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                    @else
                <th class="text-center" colspan="5"> Нет удаленных уроков </th>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@stop
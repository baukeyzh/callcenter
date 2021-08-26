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
                    Изменть
                </th>
                <th>
                    Удалить
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
                            <a href="{{ route('lesson.edit',['id'=>$lesson->id])}}" class="btn btn-xs btn-info">
                                <span>Изменить</span>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('lesson.delete',['id'=>$lesson->id])}}" class="btn btn-xs btn-danger">
                                <span class="">Удалить </span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                @else
                    <th class="text-center" colspan="5"> Нет уроков </th>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@stop
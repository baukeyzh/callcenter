@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Название видео
                </th>
                <th>
                    Изменть
                </th>
                <th>
                    Удалить
                </th>
                </thead>
                <tbody>
                @if ($videos->count() > 0)
                @foreach($videos as $video)
                    <tr>
                        <td>
                            {{$video->name}}
                        </td>
                        <td>
                            <a href="{{ route('video.edit',['id'=>$video->id])}}" class="btn btn-xs btn-info">
                                <span>Изменить</span>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('video.delete',['id'=>$video->id])}}" class="btn btn-xs btn-danger">
                                <span class="">Удалить </span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                @else
                    <th class="text-center" colspan="5"> Нет видео </th>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@stop
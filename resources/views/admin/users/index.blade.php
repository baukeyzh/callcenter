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
                    Роль
                </th>
                <th>
                    Изменть
                </th>
                <th>
                    Удалить
                </th>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            {{$user->name}}
                        </td>
                        <td>
                            @if (!$user->admin)
                                Пользователь
                            @else
                                Администратор
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('user.edit',['id'=>$user->id])}}" class="btn btn-xs btn-info">
                                <span>Изменить</span>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('user.delete',['id'=>$user->id])}}" class="btn btn-xs btn-danger">
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
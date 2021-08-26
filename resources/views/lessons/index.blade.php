@extends('layouts.student')
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
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
                            <td style="text-align: right">
                                <a href="{{ route('lessons.show',['id'=>$lesson->id])}}" class="btn btn-xs btn-info btn-pill">
                                    <span>Көру</span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <th class="text-center" colspan="5"> Сабақтар жоқ </th>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@stop
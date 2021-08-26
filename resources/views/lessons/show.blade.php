@extends('layouts.student')
@section('content')
    <div class="panel panel-default">
        <div class="panel-body" >
            <table class="table table-hover">
                <tbody>
                @if ($lesson->id)
                <tr>
                    <th style="text-align: center">
                        {{$lesson->title}}
                    </th>
                </tr>
                <tr>
                    <td style="text-align: justify">
                        {{$lesson->description}}
                    </td>
                </tr>
                @foreach($videos as $video)
                    <tr>
                       <th style="text-align: center">
                           {{$video->name}}
                       </th>
                    </tr>
                    <tr>
                        <td style="text-align: center">
                            <iframe id="player" type="text/html" width="640" height="390"
                                    src="{{'http://www.youtube.com/embed/'.substr($video->link,32)}}"
                                    frameborder="0">
                            </iframe>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <th style="text-align: center">
                        <a href="{{$lesson->homework}}" target="_blank">Үй жұмысына сілтеме</a>
                    </th>
                </tr>
                <tr>

                </tr>
                @else
                    <th class="text-center" colspan="5"> Нет уроков </th>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@stop
@extends('layouts.app')
@section('title')
    Finish
@endsection

@section('content')
    <div class="row col-md-8 m-auto">
        <div class="card  w-100 text-center">

            <div class="card-body">
                <img width="300" src="{{$result['avatar']}}" alt="">
                <h1>Поздравляем, {{$result['email']}}!</h1>
                <p>Твоя оценка <b>{{$result['points']}}</b> баллов</p>
                <p>Общее время прохождения теста  {{$result['seconds']}} секунд</p>
                <a class="btn btn-primary" href="/"> Перейти в начало </a>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('title')
    Задание №4
@endsection

@section('content')
    <div class="row col-md-8 m-auto">
        <div class="card  w-100">
            <div class="card-header">
                Какой сегодня день недели?
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('next')}}" class="ml-auto mr-5 mt-5">
                    @csrf
                    <input type="radio" id="dayChoice1"
                           name="day" value="1">
                    <label for="dayChoice1">Понедельник</label><br>

                    <input type="radio" id="dayChoice2"
                           name="day" value="2">
                    <label for="dayChoice2">Вторник</label><br>

                    <input type="radio" id="dayChoice3"
                           name="day" value="3">
                    <label for="dayChoice3">Среда</label><br>

                    <input type="radio" id="dayChoice4"
                           name="day" value="4">
                    <label for="dayChoice4">Четверг</label><br>

                    <input type="radio" id="dayChoice5"
                           name="day" value="5">
                    <label for="dayChoice5">Пятница</label><br>

                    <input type="radio" id="dayChoice6"
                           name="day" value="6">
                    <label for="dayChoice6">Суббота</label><br>

                    <input type="radio" id="dayChoice0"
                           name="day" value="0">
                    <label for="dayChoice0">Воскресенье</label><br>

                    <div class="row">
                        <button type="submit" class="btn btn-success ml-auto mr-5" >Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

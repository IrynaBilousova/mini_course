@extends('layouts.app')
@section('title')
    Задание №2
@endsection

@section('content')
    <div class="row col-md-8 m-auto">
        <div class="card  w-100">
            <div class="card-body">
                <form method="POST" action="{{route('next')}}" class="text-center mt-5">
                    @csrf
                    <input type="hidden" name="num1" value="{{$num1}}">
                    <input type="hidden" name="num2" value="{{$num2}}">

                    {{$num1}} + {{$num2}} = <input type="text" name="sum">
                    <div class="row">
                        <button type="submit" class="btn btn-success ml-auto mr-5 mt-2" >Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

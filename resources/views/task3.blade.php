@extends('layouts.app')
@section('title')
    Задание №3
@endsection

@section('content')
    <div class="row col-md-8 m-auto">
        <div class="card  w-100">
            <div class="card-header">
               Какие языки программирования ты знаешь?
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('next')}}" class="ml-auto mr-5 mt-5">
                   @csrf
                    <input type="checkbox" id="PHP" name="PHP">
                    <label for="PHP">PHP</label><br>
                    <input type="checkbox" id="Python" name="Python">
                    <label for="Python">Python</label><br>
                    <input type="checkbox" id="JS" name="JS">
                    <label for="JS">JS</label><br>
                    <input type="checkbox" id=".net" name=".net">
                    <label for=".net">.net</label><br>
                    <input type="checkbox" id="visualBasic" name="visualBasic">
                    <label for="visualBasic">Visual Basic</label><br>
                    <div class="row">
                        <button type="submit" class="btn btn-success ml-auto mr-5" >Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

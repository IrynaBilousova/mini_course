@extends('layouts.app')
@section('title')
    Задание №1
@endsection

@section('content')
    <div class="row col-md-8 m-auto">
        <div class="card  w-100">
            <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                <div class="row">
                    <form action="{{route('next')}}" method="POST" class="ml-auto mr-5 mt-5">
                        @csrf
                        <button type="submit" class="btn btn-success">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

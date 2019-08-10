@extends('layouts.app')
@section('title')
    Start
@endsection

@section('content')
<div class="row col-md-8 m-auto">
    <div class="card  w-100">
        <div class="card-header">
            Start
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="/" enctype='multipart/form-data'>
                @csrf
                <div class="form-group">
                    <label for="email">Введите ваш Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Email" required>
                </div>
                <label for="avatar">Загрузить аватар</label>
                <input name="avatar" type="file" id="avatar" required>
                <br>
                <button type="submit" class="btn btn-success">Next</button>
            </form>
        </div>
    </div>
    @if($results)
        <table class="table table-striped mt-3">
            <thead>
            <tr>
                <th scope="col">Email</th>
                <th scope="col">Кол-во баллов</th>
                <th scope="col">Затрачено времени (секунд)</th>
            </tr>
            </thead>
            <tbody>
            @foreach($results as $result)
                <tr>
                    <td>{{ $result->email }}</td>
                    <td>{{ $result->points }}</td>
                    <td>{{ $result->seconds }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

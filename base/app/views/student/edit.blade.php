@extends('layout.main')
@section('content')
@if(isset($_SESSION['errors']) && isset($_GET['msg']))
    <ul>
        @foreach($_SESSION['errors'] as $item)
        <li>{{$item}}</li>
        @endforeach
    </ul>
    @endif
    @if(isset($_SESSION['success']) && isset($_GET['msg']))
    <span>{{$_SESSION['success']}}</span>
    @endif
    <form action="{{route('update/'.$listStudent->id)}}" method="POST">
    <form action="{{route('update/'.$listStudent>id)}}" method="POST">
        <label>Họ và tên</label>
        <input type="text" name="name" value="{{$listStudent->name}}">
        <label>Năm sinh</label>
        <input type="text" name="{{$listStudent->year_of_birth}}">
        <label>Số điện thoại</label>
        <input type="text" name="{{$listStudent->phone_number}}">
        <button type="submit" name="sua" value="gui">Gửi</button>
    </form>
    </form>
@endsection
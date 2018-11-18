@extends('layouts.loginForm')


@section('guard')
    TEACHER
@stop


@section('linkSubmitForm')
    {{ url('teacher/postLogin') }}
@stop
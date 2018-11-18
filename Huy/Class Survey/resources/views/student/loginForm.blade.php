@extends('layouts.loginForm')


@section('guard')
    STUDENT
@stop


@section('linkSubmitForm')
    {{ url('student/postLogin') }}
@stop
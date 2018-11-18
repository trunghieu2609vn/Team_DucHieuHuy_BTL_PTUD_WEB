@extends('layouts.loginForm')


@section('guard')
    ADMIN
@stop


@section('linkSubmitForm')
    {{ url('admin/postLogin') }}
@stop



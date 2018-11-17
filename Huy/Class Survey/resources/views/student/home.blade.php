@extends('layouts.app')


@section('guard')
    <a class="navbar-brand" href="{{ route('student.home') }}">STUDENT</a>
@stop


@section('Authentication_Links')
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->ho_ten }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                
                <form id="logout-form" action="{{ route('student.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
@stop


@section('content')
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên môn học</th>
                <th scope="col">Mã môn học</th>
                <th scope="col">Tên giảng viên</th>
                <th scope="col">Đã đánh giá</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td class="name-subject">Hệ quản trị cơ sở dữ liệu</td>
                <td class="id-subject">int 123456</td>
                <td class="name-teacher">TS. Lê Hồng Hải</td>
                <td class="evaluated">60</td>
            </tr>
            </tbody>
        </table>
    </div>
@stop



@extends('layouts/auth-master')
@section('content')
    <div class='form'>
        <div class='form__header'>
            <h1 class='form__header-text'>Login</h1>
            <span>Don't have an account? <a href="{{ route('showRegisterForm') }}">Register Now</a></span>
            <span>or back to <a href="/">Homepage</a></span>
        </div>
        <form class="form__body" method="post" action="{{ route('login') }}">
            @csrf
            @include('components.message')
            <div class="form__field">
                <label class="form__field-label" for="email">Email</label>
                <input class="form__field-input" placeholder="Email" type="text" name="email"/>
            </div>
            <div class="form__field">
                <label class="form__field-label" for="password">Password</label>
                <input class="form__field-input" placeholder="Password" type="password" name="password"/>
            </div>
            <input type="submit" class="form__submit form__button--success" value="Login" />
        </form>
    </div>
@endsection

@extends ('layouts.master')

@section ('title', 'Home')

@section ('description', 'Welcome to our website.')

@section ('content')
    @include ('partials.hero')
    @include ('partials.stat')
    @include ('partials.info')
    @include ('partials.layanan')
    @include ('partials.about')
    @include ('partials.katalog')
    @include ('partials.konsultasi')

@endsection

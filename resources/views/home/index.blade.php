@inject(carbon, \Carbon\Carbon)

@extends('layouts.app')

@section('content')
    @include('layouts.partials.home.title')

    @include('layouts.partials.home.main_view')
    @include('layouts.partials.home.schedule_view')
@endsection


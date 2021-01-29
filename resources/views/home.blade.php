@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            Welcome <b style="color:red;">{{ Auth::user()->name }} !</b>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard {{ $title }}</div>

                <div class="panel-body">
                    @foreach($people as $p)
                        {{ $p->first_name }}
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

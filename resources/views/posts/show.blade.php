@extends('layouts.app')

@section('content')
    <div id="PostPageContainer">
        <div>
            <x-post :post="$post"/>
        </div>
    </div>
@endsection
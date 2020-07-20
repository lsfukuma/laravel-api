@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h4>Welcome,  <strong>{{ Auth::user()->name }}</strong></h4>
                <h5>You are logged in with your <strong>{{ Auth::user()->email }}</strong> account</h5>
                @if (Auth::user()->api_token)
                    <h5>  <strong> Api Token : </strong>
                        {{Auth::user()->api_token}}
                    </h5>
                @else
                    <form action="{{ route('generate-token') }}" method="post">
                        @csrf
                        <input class="btn btn-md btn-info m-2" type="submit" value="API token">
                    </form>
                @endif
                <h5></h5>
            </div>
        </div>
    </div>
@endsection

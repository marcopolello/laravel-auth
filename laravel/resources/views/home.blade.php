@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="" action="{{route('send-mail')}}" method="post">
                      @csrf
                      @method('POST')

                      <input type="text" name="text" value="">
                      <br><br>
                      <input type="submit" name="" value="invia">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

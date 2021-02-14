@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Update Icon</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="" action="{{ route('update-icon')  }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('POST')

                      <input name="icon" type="file" class="form-control border-0">
                      <br><br>
                      <input type="submit" name="" value="invia">
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Send Mail</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="" action="{{ route('send-mail')  }}" method="post">
                      @csrf
                      @method('POST')

                      <input type="text" name="text" value="">
                      <br><br>
                      <input type="submit" name="" value="invia">
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Send Empty Mail</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="" action="{{ route('send-empty-mail')  }}" method="post">
                      @csrf
                      @method('POST')

                      <input type="submit" name="" value="invia">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

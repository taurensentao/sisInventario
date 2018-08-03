@extends('layouts.app')

@section('content')
<div class="page-header cd-section header-filter" filter-color="purple" style="background-image: url({{asset('/img/bg0.jpg')}});"; background-size: cover; background-position: top center;">
    <div class="section-cd">
        <div class="container">
             <div class="card card-signup">
                <h2 class="card-title text-center">Restablecer Contraseña</h2>
                <div class="row">
          

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" style="font-size:25px; color: gray"class="col-md-4">E-mail:</label>

                            <div class="col-md-6">
                                <input id="email" style="font-size:15px;  border:2px solid gray;" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5" >
                                <button type="submit" style="font-size:15px;" class="btn btn-primary">
                                    Enviar contraseña
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

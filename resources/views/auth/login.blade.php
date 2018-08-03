@extends('layouts.app')

@section('content')
<div class="section">
                   
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="card card-signup">
                       <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="header header-primary text-center   ">
                                <h4 class="card-title">Iniciar Sesión</h4>
                              <!--  <div class="social-line">
                                    <a href="#pablo" class="btn btn-just-icon btn-simple">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-simple">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-simple">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>-->
                            </div>
                            
                            <p class="description text-center">Ingresa con tu e-mail y clave</p>
                            <div class="card-content">

                               

                                <div class="input-group form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <input id="meail" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email..." required autofocus>
                                     @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="input-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                    <input id="password" type="password" placeholder="Password..." class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                        
                                <div class="col-sm-6">
                                     <label class="form-check-label">
                                              <input type="checkbox"  name="remember" value="{{ old('remember') ? 'checked' : '' }}"> Mantener Sesión
                                        </label>
                                    
                                </div>
                                
                                <div class="footer text-center">
                                     <div class="col-md-4">
                                          <div class="col-md-0">
                                    <button type="submit" class="btn btn-primary ">
                                        <a a href="{{ route('login') }}"> </a>Registrarse
                                    </button> </div>
                                    <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary ">
                                        Entrar
                                    </button> </div>
                                   </div>
                                    <p></p>
                                    <a type="submit" class="btn btn-primary btn-simple btn-wd btn-lg" href="{{ route('password.request') }}">
                                        ¿Has olvidado tu contraseña?
                                    </a>
                                </div>
                            </div>
                            
                            
                              

                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection

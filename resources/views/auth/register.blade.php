@extends('layouts.app')

@section('content')

<div class="section">
    <div class="main main-raised" style="background-color: #FED0F5">
            <div style="background-color: #FED0F5" class="container">
       
            <div class="row">
                <div class="col-md-10 col-md-10-offset-0">

                            <div class="col-md-5 col-md-offset-1" style="">
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="header header-primary text-center   ">
                                <h4  style="color:#6C3BD1" class="card-title">Iniciar Sesión</h4>
                            
                            </div>
                            
                            <p style="color:#6C3BD1" class="description text-center">Ingresa con tu e-mail y clave</p>
                            <div class="card-content" >

                               

                                <div class="input-group form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="input-group-addon">
                                        <i style="color:#6C3BD1" class="material-icons">email</i>
                                    </span>
                                    <input style ="background-color:white;  border: 2px solid #FF80DA;"id="meail" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email..." required autofocus>
                                     @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="input-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span class="input-group-addon">
                                        <i style="color:#6C3BD1" class="material-icons">lock_outline</i>
                                    </span>
                                    <input style ="background-color:white;  border: 2px solid #FF80DA;"id="password" type="password" placeholder="Password..." class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-right">
                                <div class="col-sm-6">
                                     <label class="text-center form-check-label">
                                              <input type="checkbox"  name="remember" value="{{ old('remember') ? 'checked' : '' }}"> Mantener Sesión
                                        </label>
                                    
                                </div>
                                </div>
                                <div class="footer text-center">
                                  
                                  <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" style="background: #6C3BD1;"  class="btn btn-primary">
                                            <i class="fa fa-btn fa-user"></i>Entrar
                                        </button>
                                    </div> 
                                   
                                    <p></p>
                                    <a type="submit" class="btn btn-primary btn-simple btn-wd btn-lg" href="{{ route('password.request') }}">
                                        ¿Has olvidado tu contraseña?
                                    </a>
                                </div>
                            </div>
                            
                           
                              

                        </form>
                    </div>
                            <div class="col-md-5 col-md-offset-1">
                              <!--  <div class="social text-center">
                                    <button class="btn btn-just-icon btn-round btn-twitter">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button class="btn btn-just-icon btn-round btn-dribbble">
                                        <i class="fa fa-dribbble"></i>
                                    </button>
                                    <button class="btn btn-just-icon btn-round btn-facebook">
                                        <i class="fa fa-facebook"> </i>
                                    </button>
                                    <h4> or be classical </h4>
                                </div>
-->
                                <form class="form-horizontal " method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                     <div class="header header-primary text-center   ">
                                        <h4 style="color:#6C3BD1" class="card-title">Registrarse</h4>
                            
                                        </div>
                                   
                            <p style="color:#6C3BD1" class="description text-center">Ingrese sus datos</p>
                                    <div class="card-content ">
                                        <div class="input-group form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <span class="input-group-addon">
                                                <i style="color:#6C3BD1" class="material-icons">face</i>

                                            </span>
                                            <input style ="background-color:white;  border: 2px solid #FF80DA;" id="name"  type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="input-group form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                                            <span class="input-group-addon">
                                                <i style="color:#6C3BD1" class="material-icons">face</i>

                                            </span>
                                            <input  style ="background-color:white;  border: 2px solid #FF80DA;" id="apellido"  type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required autofocus placeholder="Apellido...">
                                            @if ($errors->has('apellido'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('apellido') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="input-group form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <span class="input-group-addon">
                                                <i  style="color:#6C3BD1"class="material-icons">email</i>
                                            </span>
                                            <input style ="background-color:white; border: 2px solid #FF80DA;" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email...">
                                             @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        </div>

                                        <div class="input-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <span class="input-group-addon">
                                                <i style="color:#6C3BD1" class="material-icons">lock_outline</i>
                                            </span>
                                            <input style ="background-color:white;border: 2px solid #FF80DA;" id="password" type="password" class="form-control" name="password" required placeholder="Contraseña..."/>
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="input-group form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                            <span class="input-group-addon">
                                                <i style="color:#6C3BD1" class="material-icons">lock_outline</i>
                                            </span>
                                             <input style ="background-color:white; border: 2px solid #FF80DA;" type="password" class="form-control" name="password_confirmation"required
                                            placeholder="Confirmar Contraseña">
                                            @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                          </span>
                                @endif


                                        </div>
                                       
                                            <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button style="background: #6C3BD1;  type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-user"></i>Registrar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>

        </div>
   </div>
   

@endsection
@extends('minimal.layout.hello')

@section('minimal')
<div class="special" style="height:100%;">
    <div class="row top topB">
     <div class="container">
      <div class="col-lg-12 col-md-6">
       <img src="{{ asset('img/M.png') }}"> <h6 class="minimal_h6">Minimal power</h6>
   </div>
</div>
</div>
<div class="container minimal_container">
    <div class="row">
        <div class="col-md-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">AYCRAL</h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Recordar mis Datos
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <a href="index.html" class="btn btn-lg btn-success btn-block">Iingresar</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@extends('minimal.layout.hello')

@section('minimal')
<div>
   <div class="container minimal_container">
    <div class="row">
        <div class="col-md-4">
            <div class="login-panel panel panel-default" style="background:rgba(255,255,255,0.1);">
                <div class="panel-heading">
                    <h3 class="panel-title">AYCRAL</h3>
                </div>
                <div class="panel-body">
                    {{ Form::open(array('url' => URL::route('login'), 'role' => 'form')) }}
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="{{trans('messages.user')}}" name="username" type="text" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="{{trans('messages.password')}}" name="password" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">{{trans('messages.rememberMe')}}
                            </label>
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                    </fieldset>
                    {{ Form::submit(trans('messages.login'), array('class' => 'btn btn-success')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
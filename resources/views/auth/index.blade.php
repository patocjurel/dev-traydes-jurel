@extends('layout.master')

@section('content')

    <div class="container">
        <div class="row">
            {{--login--}}
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        {!! Form::open(array('url' => '/auth/login', 'class' => 'form-horizontal', 'role' => 'form')) !!}
                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    {!! Form::text('email', null, array('placeholder' => 'E-Mail Address', 'class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    {!! Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <a href="#">Request Password ?</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {!! Form::submit('Sign Me In', array('class' => 'btn btn-success')) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                    {{--<div class="panel-footer">--}}
                        {{--<a href="#">Forgot Password?</a>--}}
                        {{--<button class="btn btn-success">Login</button>--}}
                    {{--</div>--}}
                </div>
            </div>

            {{--registration--}}
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Create</div>
                    <div class="panel-body">
                        {!! Form::open(array('url' => '/auth/register', 'class' => 'form-horizontal', 'role' => 'form')) !!}
                            <div class="form-group">
                                <label class="col-md-4 control-label">First Name</label>
                                <div class="col-md-6">
                                    {!! Form::text('first_name', null, array('placeholder' => 'First Name', 'class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Last Name</label>
                                <div class="col-md-6">
                                    {!! Form::text('last_name', null, array('placeholder' => 'Last Name', 'class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    {!! Form::text('email', null, array('placeholder' => 'E-Mail Address', 'class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    {!! Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Password Confirmation</label>
                                <div class="col-md-6">
                                    {!! Form::password('password_confirmation', array('placeholder' => 'Password Confirmation', 'class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {!! Form::submit('Sign Me Up', array('class' => 'btn btn-success')) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                    {{--<div class="panel-footer">--}}
                        {{--<button class="btn btn-success">Submit</button>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>

@stop

<html>
    <head>
        <title>
            User Login | Codeline
        </title>
    </head>
    <body>

        <h1 align="center">Codeline Film Project</h1><hr>
        

        <div align="center">
            <h3><span style="color:Green;">
                    @if(Session::has('login_success_mgs'))
                    {{ Session::get('user_create_mgs') }}
                    {{ Session::put('user_create_mgs', '')}}
                    @endif
                      
                </span>
            </h3>
            <h3><span style="color:red;">
                    @if(Session::has('invalid_login_mgs'))
                    {{ Session::get('invalid_login_mgs') }}
                    {{ Session::put('invalid_login_mgs', '')}}
                    @endif
                      
                </span>
            </h3>
            <h3><span style="color:red;">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                    @endforeach
                </span>
            </h3>
            <h2>User Login</h2>
            {!! Form::open(array('url' => '/user/login_check', 'method' => 'post')) !!}
            <table style="font-size: 22px;">
                <tr>
                    <td>{!! Form::label('Email') !!}</td>
                    <td>{!! Form::email('email', null, array('required', 'placeholder'=>'Enter You Email')) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('Password') !!}</td>
                    <td>{!! Form::password('password', null, array('required', 'placeholder'=>'Enter Your Password')) !!}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>{!! Form::submit('Login') !!}</td>
                </tr>
            </table>
            {!! Form::close() !!}
            
            <h3><a href="{{ URL::to('/user/registration') }}">Create An Account</a></h3>
        </div>



    </body>
</html>
<html>
    <head>
        <title>
            User Registration | Codeline
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
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                    @endforeach
                </span>
            </h3>
            <div class="content" align="center">
            <h2>Create An Account</h2>
            
            <table style="font-size: 22px;">
            {!! Form::open(array('url' => '/user/save_user', 'method' => 'post')) !!}
                
                <tr>
                    <td>{!! Form::label('Name') !!}</td>
                    <td>{!! Form::text('name', null, array('required', 'placeholder'=>'Enter You Full Name')) !!}</td>
                </tr>
                <tr>
                   <td>{!! Form::label('Email') !!}</td>
                    <td>{!! Form::email('email', null, array('required', 'placeholder'=>'Enter You Email')) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('Password') !!}</td>
                    <td>{!! Form::password('password', null, array('required', 'placeholder'=>'Enter Your Password')) !!}</td>
                </tr>
                
                <tr>
                    <td>{!! Form::label('Gender') !!}</td>
                    <td>{!! Form::radio('gender', 'male'); !!} Male  {!! Form::radio('gender', 'female'); !!} Female</td>
                </tr>
                <tr>
                    <td>{!! Form::label('Birthday') !!}</td>
                    <td>{!! Form::date('birthday', null, array('required')) !!}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>{!! Form::submit('Create') !!}</td>
                </tr>


            </table>
            {!! Form::close() !!}
        </div>


    </body>
</html>
<html>
    <head>
        <title>
            {{ $film->title }} | Codeline Page
        </title>
    </head>
    <body>

        <h1 align="center">Codeline Film Project</h1><hr>
        <div class="" style="margin-bottom: 20px;">
            <div class="row">
                <div class="" style="font-size: 22px; margin-left: 13%">
                    <a href="{{ URL::to('/') }}">
                        <button type="button">
                            <span></span>
                            Home
                        </button>
                    </a> |
                   <a href="{{ URL::to('user/add_film') }}" target="blank">
                        <button type="button">
                            <span></span>
                            Add New Film
                        </button>
                    </a> |
                    <a href="{{ URL::to('admin/add_film') }}" target="blank">
                        <button type="button">
                            <span></span>
                            Admin Panel
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <?php 
         //   dd($films);
        ?>


        <div class="content" align="center">
            <table style="font-size: 22px;">
               
                
                <div>
                    <a href="{{ URL('details/'.$film->slug) }}"><img src="{!! asset($film->photo) !!}" alt="{{ $film->title }}" /></a>
                </div>   
                
                
                        <div style="font-size: 22px;">
                            <a href="{{ URL('details/'.$film->slug) }}">{{ $film->title }}</a>
                        </div>        
                
                <tr>
                    <td>Rating :</td>
                    <td>
                        {{ $film->rating }}
                    </td>
                </tr>
                <tr>
                    <td>Realease Date :</td>
                    <td>
                         {{ \Carbon\Carbon::parse($film->realease_date)->format('F j, Y')}} 
                    </td>
                </tr>
                <tr>
                    <td>Genres :</td>
                    <td>
                        {{ $film->genre }}
                    </td>
                </tr>
                <tr>
                    <td>Country :</td>
                    <td>
                        {{ $film->country }}
                    </td>
                </tr>
                <tr>
                    <td>Ticket Price :</td>
                    <td>
                        {{ $film->ticket }} Tk
                    </td>
                </tr>
                
               
               
                    
                   
            </table>
            <div style="width: 900px; text-align: justify;"> {{ $film->description }} </div>
        </div>
        
        @if(Session::has('user_id'))
        <div align="center">
            <h3><span style="color:Green;">
                    @if(Session::has('s_mgs'))
                    {{ Session::get('s_mgs') }}
                    {{ Session::put('s_mgs', '') }}
        @endif
        
        
                </span>
            </h3>
            {!! Form::open(array('url' => 'save_comment', 'method' => 'post')) !!}
            <table>
                {{ Form::hidden('slug', $film->slug) }}
                {{ Form::hidden('film_id', $film->id) }}
                <tr>
                    <td>{!! Form::label('Name') !!}</td>
                    <td>{!! Form::text('name', null, array('required', 'placeholder'=>'Enter Your Name')) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('Email') !!}</td>
                    <td>{!! Form::email('email', null, array('required', 'placeholder'=>'Enter Your Email')) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('Comment') !!}</td>
                    <td>{!! Form::textarea('comment', null, array('required', 'placeholder'=>'Write Your Comment')) !!}</td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>{!! Form::submit('Submit') !!}</td>
                </tr>
            </table>
            {!! Form::close() !!}
        </div>
        @endif
        
        <div align="center">
            <h3>Comments(<?php echo count($comments);?>)</h3>
            <?php
            $user_id =Session::has('user_id');
        ?>
        @if(empty($user_id))
         <h3><span style="color:Green;">LOgin For Comment</span> | <a href="{{ URL::to('/user/login') }}"><button type="button">Login</button></a></h3>
        @endif
            <table>
            @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->name }} |</td>
                    <td>{{ $comment->comment }}</td>
                </tr>
            @endforeach
            </table>
        </div><hr>

    </body>
</html>
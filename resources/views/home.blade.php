<html>
    <head>
        <title>
            Film | Codeline Page
        </title>
        <style>
            .pagination {}
            .pagination ul{}
            .pagination ul li{display: inline; list-style: none;}
            .pagination ul li a{padding: 5px}
        </style>
    </head>
    <body>

        <h1 align="center">Codeline Film Project</h1><hr>
        <h3><span style="color:Green;">
                    @if(Session::has('user_login_success_mgs'))
                    {{ Session::get('user_login_success_mgs') }}
                    {{ Session::put('user_login_success_mgs', '')}}
                    @endif
                      
                </span>
            </h3>
        <h3><span style="color:red;">
                    @if(Session::has('logout_mgs'))
                    {{ Session::get('logout_mgs') }}
                    {{ Session::put('logout_mgs', '')}}
                    @endif
                      
                </span>
            </h3>
        <div class="" style="margin-bottom: 20px;">
            <div class="row">
                <div class="" style="font-size: 22px; margin-left: 13%">
                    @if(Session::has('user_id'))
                        <a href="{{ URL::to('user/logout') }}">
                        <button type="button">
                            Logout
                        </button>
                        </a> |
                    @else
                    <a href="{{ URL::to('/user/login') }}">
                        <button type="button">
                            Login
                        </button>
                        </a> |
                    @endif
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
               
                @foreach($films as $film)
                
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
               
                @endforeach
                    
                   
            </table>
            <div class="pagination">
                        {!! $films->links() !!}
            </div>            

        </div>


    </body>
</html>
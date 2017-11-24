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
                    <a href="create.php">
                        <button type="button" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                            Add New Film
                        </button>
                    </a> |
                    <a href="{{ URL::to('admin/add_film') }}" target="blank">
                        <button type="button" class="btn btn-info">
                            <span class="glyphicon glyphicon-erase" aria-hidden="true"></span>
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
                <tr>
                    <td>
                        {{ $film->description }}
                    </td>
                </tr>
                    
                   
            </table>

        </div>


    </body>
</html>
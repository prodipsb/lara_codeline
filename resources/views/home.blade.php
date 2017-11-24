<html>
    <head>
        <title>
            Film | Codeline Page
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
                    <a href="{{ URL::to('/admin/login') }}" target="blank">
                        <button type="button" class="btn btn-info">
                            <span class="glyphicon glyphicon-erase" aria-hidden="true"></span>
                            Admin Panel
                        </button>
                    </a>
                </div>
            </div>
        </div>




        <div class="content" align="center">
            <div class="row" id="mgs" style="font-size: 20px; color: green; font-weight: bold;">
                
            </div>
            <table border='1'style="font-size: 22px;">
                <th>SI</th>
                <th>ID</th>
                <th>Title</th>
                <th>Author Name</th>
                <th>Book Cover Image</th>
                <th>Action</th>
               
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="">
                                <button type="button" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                                    View
                                </button>
                            </a> | 
                            <a href="">
                                <button type="button" class="btn btn-success">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    Edit
                                </button>
                            </a> | 
                            <a href="">
                                <button type="button" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    Delete
                                </button>
                            </a>
                        </td>
                    </tr>
            </table>
            

        </div>


    </body>
</html>
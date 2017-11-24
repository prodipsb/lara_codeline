




<div class="content" align="center">
    <h1>Admin Panel</h1>
</div>

<a href=""><button>ADD FILM</button></a>

{!! Form::open(array('url' => 'admin/add_film', 'method' => 'post', 'files' => true)) !!}
<table>
    <tr>
        <td>{!! Form::label('Name') !!}</td>
        <td>{!! Form::text('title', null, array('required', 'placeholder'=>'Enter Film Title')) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('Description') !!}</td>
        <td>{!! Form::textarea('description', null, array('required', 'placeholder'=>'Film Description')) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('Realease Date') !!}</td>
        <td>{!! Form::date('realease_date', null, array('required')) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('Rating') !!}</td>
        <td>{!! Form::select('rating', ['1' => 'one', '2' => 'Two', '3' => 'Three', '4' => 'Four', '5' => 'Five'], null, ['placeholder' => 'Please Rate This Film']) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('Ticket') !!}</td>
        <td>{!! Form::text('ticket', null, array('required', 'placeholder' => 'Ticket')) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('Country') !!}</td>
        <td>{!! Form::select('country', ['Canada' => 'CD', 'United State' => 'USA', 'Bangladesh' => 'BD', 'United Kingdom' => 'UK', 'Japan' => 'JP'], null, ['placeholder' => 'Please Select Your Country']) !!} </td>
    </tr>
    <tr>
        <td>{!! Form::label('Genre') !!}</td>
        <td>{!! Form::date('genre', null, array('required')) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('Photo') !!}</td>
        <td>{!! Form::file('photo', null, array('required')) !!}</td>
    </tr>
</table>


{!! Form::close() !!}





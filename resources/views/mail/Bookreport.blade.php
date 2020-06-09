<h1>El usuario {{ Auth::user()->name }} {{$titulo}}</h1>
<h3>El {{$date->format('d-m-Y')}} a las {{$date->format('H:i')}}</h3>
<table class="striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Autor</th>
            <th>Descripción</th>
            <th>Categoría</th>
            <th>Imagen</th>
        </tr>

        <tbody>
            <tr>
                <td>{{$book->book_name}}</td>
                <td>{{$book->book_author}}</td>
                <td>{{$book->book_description}}</td>
                <td>{{$book->category_id}}</td>
                <td>{{$book->book_image}}</td>
            </tr>
        </tbody>
    </thead>
</table>

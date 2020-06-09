<h1>{{$titulo}}</h1>
<table class="striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Autor</th>
            <th>Descripción</th>
            <th>Categoría</th>
            <th>Imagen</th>
            <th>Fecha y hora</th>
        </tr>

        <tbody>
            <tr>
                <td>{{$book->book_name}}</td>
                <td>{{$book->book_author}}</td>
                <td>{{$book->book_description}}</td>
                <td>{{$book->category_id}}</td>
                <td>{{$book->book_image}}</td>
                <td>{{$book->created_at}}</td>
            </tr>
        </tbody>
    </thead>
</table>

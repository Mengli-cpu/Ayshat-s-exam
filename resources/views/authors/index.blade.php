@extends("loyauts.head")

@section("main-content")
<div class="container-lg">
    <div class="h1 py-3 text-center fw-semibold text-secondary">
        Authors:
    </div>
    
    <div>
        <table class="table table-hover h5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                <tr>
                    <th scope="row">{{ $author->id }}</th>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->surname }}</td>
                    <td>{{ $author->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
    <main class="container">
        <h1>
            Lista Progetti
        </h1>

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Slug</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($projects as $project )
                        
                    <tr class="">
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->content }}</td>
                        <td>{{ $project->slug }}</td>
                    </tr>
                    @endforeach
                    <tr class="">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>
@endsection

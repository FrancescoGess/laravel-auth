@extends('layouts.app')

@section('content')
    <main class="container">
        <h1>
            Lista Progetti
        </h1>

        <form method="POST" action="{{ route('dashboard.projects.store') }}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input 
                type="text" 
                class="form-control" 
                name="title" 
                id="title" 
                required/>

                @error('title')

                    <div class="alert alert-danger">

                        {{ $message }}

                    </div>

                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" name="content" id="content" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary ">Crea nuovo Progetto</button>


        </form>

    </main>
@endsection

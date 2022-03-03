@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear articulo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Titulo *</label>
                                <input type="text" name="title" class="form-control" id="" required>
                            </div>
                            <div class="form-group">
                                <label for="">Imagen </label>
                                <input type="file" name="file">
                            </div>
                            <div class="form-group">
                                <label for="">Contenido *</label>
                                <textarea name="body" id="" rows="6" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Embebido </label>
                                <textarea name="iframe" id="" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                @csrf
                                <input type="submit" value="Enviar" class="btn btn-sm btn-success">
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

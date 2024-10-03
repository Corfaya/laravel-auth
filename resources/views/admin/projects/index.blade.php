@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="text-center pb-3">Projects</h1>
                    <a href="{{route('admin.projects.create')}}" class="text-decoration-none">
                        <i class="bi bi-plus-circle"></i>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-12">
                <table class="table table-striped mx-auto">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Stack</th>
                            <th>Preview url</th>
                            <th>Description</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->name}}</td>
                                <td>{{$p->date_of_upload}}</td>
                                <td>{{$p->stack}}</td>
                                <td>{{$p->preview}}</td>
                                <td>{{$p->description}}</td>
                                <td class="d-flex justify-content-around">
                                    <a href="{{route('admin.projects.show', ['project' => $p->id])}}"><i class="bi bi-eyeglasses"></i></a>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('admin.projects.store')}}">
                    @csrf
                    <div class="row gy-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="name">Name of your project:</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" value="{{old('name')}}" placeholder="Name" name="name">
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="date_of_upload">Date of upload:</label>
                            <input class="form-control @error('date_of_upload') is-invalid @enderror" type="date" value="{{old('date_of_upload')}}" name="date_of_upload">
                            @error('date_of_upload')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="row gy-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="stack">Stack:</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" value="{{old('stack')}}" placeholder="Stack you used" name="stack">
                            @error('stack')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="preview">Preview URL</label>
                            <input class="form-control @error('preview') is-invalid @enderror" type="text" value="{{old('preview')}}" placeholder="Url" name="preview">
                            @error('preview')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label" for="description">Small description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" cols="10">{{old('description')}}</textarea>
                            @error('description')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-end my-3"><button type="submit" class="btn btn-success fw-bolder">Save</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.admin')
@section('title')
MetaTags | Law Office of Zaidi and Moersdorf, LLP
@endsection
@section('contents')


<!-- Start -->

<div class="container-fluid pt-4 px-4">
    <div class="row vh-20 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="d-flex align-items-center justify-content-between my-4">
            <h3 class="mb-0">MetaTags </h6>
            {{-- <a href="" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#metatagModel">Add New</a> --}}
        </div>
    </div>
</div>
<!-- End -->

<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="table-responsive">
            @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @elseif(session('warning'))
            <div class="alert alert-danger" role="alert">
                {{ session('warning') }}
            </div>
            @endif
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Page Name</th>
                            <th scope="col">MetaTags</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($metatags as $metatag)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$metatag->page_name}}</td>
                            <td>{{$metatag->meta_tag}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('/edit-metatag/'.$metatag->id) }}" class="btn btn-warning"><i
                                            class="fa fa-pen"></i> </a></a>
                                    {{-- <a href="{{ url('/delete-metatag/'.$metatag->id) }}" class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete?')"><i
                                            class="fa fa-trash"></i></a> --}}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- Add Eco System Modal -->

<div class="modal fade" id="metatagModel" tabindex="-1" aria-labelledby="metatagModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="metatagModelLabel">Add Item</h5>
                <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('add-metatag')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="page_name"> <b>Page Name<span class="text-danger">*</span></b> </label>
                                <input type="text" name="page_name" class="form-control @error('page_name') is-invalid @enderror" placeholder="Enter Page Name" required>
                                <span class="text-danger">
                                    @error('page_name')
                                        <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </span>
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="meta_tag"> <b>Meta Tags<span class="text-danger">*</span></b> </label>
                                <input type="text" name="meta_tag" class="form-control @error('meta_tag') is-invalid @enderror" placeholder="Enter Meta Tags" required>
                                <span class="text-danger">
                                    @error('meta_tag')
                                        <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </span>
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group text-right">
                                <input type="submit" value="Save" class="btn btn-success">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
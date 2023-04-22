@extends('layouts.admin')
@section('title')
Reviews | Law Office of Zaidi and Moersdorf, LLP
@endsection
@section('contents')

<!-- Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-20 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="d-flex align-items-center justify-content-between my-4">
            <h3 class="mb-0">Reviews</h6>
            <a href="" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#reviewModal">Add New</a>
        </div>
    </div>
</div>
<!-- End -->

<div class="container-fluid pt-4 px-4">
    <div class="row bg-light rounded mx-0">
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
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Occupation</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reviews as $review)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img class="" src="{{asset('upload/review/'.$review->image)}}"
                            alt="" style="width: 150px"></td>
                        <td>{{$review->name}}</td>
                        <td>{{$review->occupation}}</td>
                        <td>{!! substr($review->description, 0, 80)."......" !!}</td>
                        <td>
                            @if ($review->status == 0)
                            <b class="text-danger">Inactive</b>
                            <a href="{{url('make-review-active/'.$review->id)}}" class="btn btn-success btn-sm"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Active">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                            @else
                            <b class="text-success">Active</b>
                            <a href="{{url('make-review-deactive/'.$review->id)}}" class="btn btn-warning btn-sm"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Inactive">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ url('/edit-review/'.$review->id) }}" class="btn btn-warning"><i
                                        class="fa fa-pen"></i> </a></a>
                                <a href="{{ url('/delete-review/'.$review->id) }}" class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete?')"><i
                                        class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Add Review Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content bg-light">
        <div class="modal-header">
        <h5 class="modal-title" id="reviewModalLabel">Add Review Item</h5>
        <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{-- <form action="{{url('add-review')}}" method="POST">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="name" class="form-label"><b>Name <span class="text-danger">*</span></b></label>
                    <input type="text" name="name" class="form-control" placeholder="Enter a title" required>
                </div>
                <div class="mb-3">
                    <label for="occupation" class="form-label"><b>Occupation</b></label>
                    <input type="text" name="occupation" class="form-control" placeholder="Enter a occupation">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label"><b>Description<span class="text-danger">*</span></b></label>
                    <textarea name="description" class="form-control description" id="description" cols="30" rows="5" required placeholder="Write A Description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label"><b>Image (Square)</b> <sup>[Size: To maintain the design, please use image of same size]</sup></label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label"><b>Status</b></label>
                    <input type="checkbox" name="status" class="">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form> --}}
            <form action="{{url('add-review')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"><b>Name <span class="text-danger">*</span></b></label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" required>
                    <span class="text-danger">
                        @error('name')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="occupation" class="form-label"><b>Occupation</b></label>
                    <input type="text" name="occupation" class="form-control" placeholder="Enter Occupation">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label"><b>Description<span class="text-danger">*</span></b></label>
                    <textarea name="description" class="form-control description @error('description') is-invalid @enderror" id="description" cols="30" rows="5" placeholder="Enter Text" required>
                    </textarea>
                    <span class="text-danger">
                        @error('description')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>   
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label"><b>Image</b> <sup>[Size: To maintain the design, please use image of same size]</sup></label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label"><b>Status</b></label>
                    <input type="checkbox" name="status" class="">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
    </div>
</div>    


@endsection
@extends('layouts.admin')
@section('title')
Team | Law Office of Zaidi and Moersdorf, LLP
@endsection
@section('contents')

<!-- Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-20 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="d-flex align-items-center justify-content-between my-4">
            <h3 class="mb-0">Team</h6>
            <a href="" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#teamModal">Add New</a>
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
                        <th scope="col">Email</th>
                        <th scope="col">Occupation</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img class="" src="{{asset('upload/team/'.$team->image)}}"
                            alt="" style="width: 150px"></td>
                        <td>{{$team->name}}</td>
                        <td>{{$team->email}}</td>
                        <td>{{$team->occupation}}</td>
                        <td>{!! substr($team->description, 0, 80)."......" !!}</td>
                        <td>
                            @if ($team->status == 0)
                            <b class="text-danger">Inactive</b>
                            <a href="{{url('make-team-active/'.$team->id)}}" class="btn btn-success btn-sm"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Active">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                            @else
                            <b class="text-success">Active</b>
                            <a href="{{url('make-team-deactive/'.$team->id)}}" class="btn btn-warning btn-sm"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Inactive">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ url('/edit-team/'.$team->id) }}" class="btn btn-warning"><i
                                        class="fa fa-pen"></i> </a></a>
                                <a href="{{ url('/delete-team/'.$team->id) }}" class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete?')"><i
                                        class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- @foreach ($teams as $team)
            <div class="col-lg-4 col-md-5 col-sm-12 mx-auto">
                <div class="card bg-secondary text-center m-1">
                    <h5 class="card-title text-light pt-3"> <b>{{$team->name}}</b> </h5>
                    <img class="card-img-top" src="{{asset('upload/team/'.$team->image)}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-light">Occupation: {{$team->occupation}}</p>
                        <p class="card-text text-light">Email: {{$team->email}}</p>
                        <p class="card-text text-light">Description: {!! substr($team->description, 0, 80)."......" !!}</p>
                        @if ($team->status == 0)
                        <p class="card-text alert alert-danger">Inactive</p>
                        @else
                        <p class="card-text alert alert-success">Active</p>
                        @endif

                        <div class="btn-group" role="group" aria-label="Basic example">
                            @if ($team->status == 0)
                            <button type="button" class="btn btn-success">
                                <a href="{{url('make-team-active/'.$team->id)}}" class="text-white"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Popular">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </button>
                            @else
                            <button type="button" class="btn btn-warning">
                                <a href="{{url('make-team-deactive/'.$team->id)}}" class="text-dark"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Inactive">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </button>
                            @endif
                            <button type="button" class="btn btn-info"> <a class="text-dark"
                                    href="{{ url('/edit-team/'.$team->id) }}">
                                    <i class="fa fa-pen"></i> </a></button>
                            <button type="button" class="btn btn-danger"> <a class="text-white"
                                    href="{{ url('/delete-team/'.$team->id) }}"
                                    onclick="return confirm('Are you sure to delete?')"> <i class="fa fa-trash"></i>
                                </a> </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach --}}
    </div>
</div>


<!-- Add Eco System Modal -->
<div class="modal fade" id="teamModal" tabindex="-1" aria-labelledby="teamModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content bg-light">
        <div class="modal-header">
        <h5 class="modal-title" id="teamModalLabel">Add Team Item</h5>
        <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{url('add-team')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"><b>Name <span class="text-danger">*</span></b></label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter a title" required>
                    <span class="text-danger">
                        @error('name')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"><b>Email <span class="text-danger">*</span></b></label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter a Email" required>
                    <span class="text-danger">
                        @error('email')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="occupation" class="form-label"><b>Occupation <span class="text-danger">*</span></b></label>
                    <input type="text" name="occupation" class="form-control @error('occupation') is-invalid @enderror" placeholder="Enter a occupation" required>
                    <span class="text-danger">
                        @error('occupation')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label"><b>Description<span class="text-danger">*</span></b></label>
                    <textarea name="description" class="form-control description @error('description') is-invalid @enderror" id="description" cols="30" rows="5" required placeholder="Write A Description"></textarea>
                    <span class="text-danger">
                        @error('description')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>   
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label"><b>Image (Square) <span class="text-danger">*</span></b> <sup>[Size: To maintain the design, please use image of same size]</sup></label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" required>
                    <span class="text-danger">
                        @error('image')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>
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
@extends('layouts.admin')
@section('title')
Services | Law Office of Zaidi and Moersdorf, LLP
@endsection
@section('contents')


<!-- Start -->

<div class="container-fluid pt-4 px-4">
    <div class="row vh-20 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="d-flex align-items-center justify-content-between my-4">
            <h3 class="mb-0">Services </h6>
            <a href="" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#serviceModal">Add New</a>
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
                            <th scope="col">Font Awesome</th>
                            <th scope="col">Name</th>
                            <th scope="col">Descriptions</th>
                            <th scope="col">Image</th>
                            <th scope="col">Metatags</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="text-center"> <i class="{{$service->fontawesome}} fa-2x"></i> </td>
                            <td>{{$service->name}}</td>
                            <td>{!! substr($service->description, 0, 80)."......" !!}</td>
                            <td><img class="" src="{{asset('upload/service/'.$service->image)}}"
                                alt="" style="width: 150px"></td>
                            <td>{{$service->meta_tag}}</td>
                            <td>{{$service->slug}}</td>
                            <td>
                                @if ($service->status == 0)
                                <b class="text-danger">Inactive</b>
                                <a href="{{url('make-service-active/'.$service->id)}}" class="btn btn-success btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Active">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                                @else
                                <b class="text-success">Active</b>
                                <a href="{{url('make-service-deactive/'.$service->id)}}" class="btn btn-warning btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Inactive">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('/edit-service/'.$service->id) }}" class="btn btn-warning"><i
                                            class="fa fa-pen"></i> </a></a>
                                    <a href="{{ url('/delete-service/'.$service->id) }}" class="btn btn-danger"
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
</div>


<!-- Add Eco System Modal -->

<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModalLabel">Add Item</h5>
                <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('add-service')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="fontawesome"> <b>Font Awesome<span class="text-danger">*</span></b>  <br> 
                                    <small class="text-danger">Please Use an Icon from this website <a href="https://fontawesome.com/search?o=r&m=free"> <i class="fa fa-globe"></i> </a>, see the video below on how to use the icon</small> 
                                </label>
                                <input type="text" name="fontawesome" class="form-control @error('fontawesome') is-invalid @enderror" placeholder="Enter Fontawesome Icon" required>
                                <span class="text-danger">
                                    @error('fontawesome')
                                        <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name"> <b>Name<span class="text-danger">*</span></b> </label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" required>
                                <span class="text-danger">
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="image"> <b>Image <span class="text-danger">*</span></b> <sup>[Size: To maintain the design, please use image of same
                                        size
                                        ]</sup></label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"  accept="image/*" required>
                                <span class="text-danger">
                                    @error('image')
                                        <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="description" class="form-label"><b>Description<span class="text-danger">*</span></b></label>
                                <textarea name="description" class="form-control description @error('description') is-invalid @enderror" id="description" cols="30" rows="5" required>Write a description</textarea>
                                <span class="text-danger">
                                    @error('description')
                                        <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </span>   
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="meta_tag"><b>Metatags</b> </label>
                                <input type="text" name="meta_tag" class="form-control" placeholder="Enter MetaTags">
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="status" class="form-label"><b>Status</b></label>
                                <input type="checkbox" name="status" class="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" value="Save" class="btn btn-success">
                    </div>
                    <br>
                    <div class="col-lg-12">
                        <video autoplay muted loop playsinline="" id="bg-video" width="100%" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                            <source src="{{ asset('admin/img/how to add icon.mp4')}}" type="video/mp4">
                        </video>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
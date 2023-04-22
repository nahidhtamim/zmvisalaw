@extends('layouts.admin')
@section('title')
Dashboard | Law Office of Zaidi and Moersdorf, LLP
@endsection
@section('contents')

<!-- Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-20 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="col-md-6 text-center p-4">

            <h1 class="">Congratulations! 🎉</h1>
            <h1 class="mb-4">Welcome to the Admin Panel</h1>
            <img src="{{asset('admin/img/logo.png')}}" alt="" class="img-fluid" width="250px">
        </div>
    </div>
</div>
<!-- End -->



<div class="container-fluid">
    @if(session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @elseif(session('warning'))
    <div class="alert alert-danger" role="alert">
        {{ session('warning') }}
    </div>
    @endif
</div>

<!-- Links Section Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">About Section</h6>
            {{-- <a href="" class="" data-bs-toggle="modal" data-bs-target="#linkModal">Add New</a> --}}
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">#</th>
                        <th scope="col">Line One</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($abouts as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->line_one}}</td>
                        <td>{!!$item->description!!}</td>
                        <td class="my-auto text-center">
                            <img src="{{ asset('upload/about/'.$item->image)}}" alt="" width="250px">
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ url('/edit-about/'.$item->id) }}" class="btn btn-warning"><i
                                        class="fa fa-pen"></i> </a></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Links Section End -->


<!--Add Link Modal -->
{{-- <div class="modal fade" id="linkModal" tabindex="-1" aria-labelledby="linkModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="linkModalLabel">Add Video</h5>
                <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('add-video')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="video" class="form-label"><b>Video <span class="text-danger">*</span></b></label>
                        <input type="file" name="video" class="form-control @error('video') is-invalid @enderror" required>
                        <span class="text-danger">
                            @error('video')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}


@endsection
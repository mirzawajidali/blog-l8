@extends('admin.admin-layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Main Sliders</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Main Slider</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
        <section class="content">
            <div class="card">
                <div class="card-body table-responsive">
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    @if (Session::has('error'))
                    <div class="alert alert-error">{{ Session::get('error') }}</div>
                    @endif
                    <p class="lead">Upload Slider</p>
                    @error('content')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <!-- Upload  -->
                    <form action="{{ route('main_slider_upload') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                        <div class="my-3 col-4">
                        <label for="forContent">Slider Heading</label>
                        <input type="text" name="heading" class="form-control" placeholder="Heading">
                        <br>
                        <label for="forContent">Slider Sub Heading</label>
                        <input type="text" name="content" class="form-control" placeholder="Content">
                    </div>
                    <span id="filename">Select your file</span>
                    <label for="file-upload">Browse<input type="file" name="image" id="file-upload"></label>
                    <input type="submit" value="Upload" class="btn-upload" />
                    <p><small class="text-success">Allowed types: gif, jpg, png, jpeg, pdf</small></p>
                    </form>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card">
            <table class="table table-hover text-center">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Slider Content</th>
                    <th>Heading</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($main_sliders as $key=>$main_slider)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $main_slider->heading }}</td>
                        <td>{{ $main_slider->content }}</td>
                        <td><img src="{{ asset($main_slider->image) }}" class="img-fluid" width="15%" height="15%" alt=""></td>
                        <td>
                            <a href="{{ URL::to('admin/main-slider/delete/'.$main_slider->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection

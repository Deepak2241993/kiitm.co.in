@extends('layouts.masteradmin')
@section('body')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
       <h2>Dashboard</h2>
        <!-- end page title -->

        <div class="row">
           
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{url('/admin/sliders')}}">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Slider</p>
                                        <h4 class="mb-0">{{App\Models\Slider::all()->count()}}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    

                    <div class="col-md-4">
                        <a href="{{url('/admin/blogs')}}">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Blog</p>
                                        <h4 class="mb-0">{{App\Models\Blog::all()->count()}}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center ">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-archive-in font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{url('/admin/categories')}}">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Category</p>
                                        <h4 class="mb-0">{{App\Models\Category::all()->count()}}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{url('/admin/pages')}}">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Programs</p>
                                        <h4 class="mb-0">{{App\Models\Page::all()->count()}}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{url('/admin/teams')}}">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Teams/Teachers</p>
                                        <h4 class="mb-0">{{App\Models\Team::all()->count()}}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{url('/admin/sliders')}}">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Sliders</p>
                                        <h4 class="mb-0">{{App\Models\Slider::all()->count()}}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{url('/admin/testimonials')}}">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Testimonials</p>
                                        <h4 class="mb-0">{{App\Models\Testimonial::all()->count()}}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{url('/admin/faqs')}}">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">FAQ</p>
                                        <h4 class="mb-0">{{App\Models\Faq::all()->count()}}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <!-- end row -->

            </div>
        </div>
        <!-- end row -->

        

        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Latest Enquiry</h4>
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 20px;">#</th>
                                        <th style="width: 20px;">Date</th>
                                        <th class="align-middle">Full Name</th>
                                        <th class="align-middle">Email</th>
                                        <th class="align-middle">Contact</th>
                                        <th class="align-middle">Job Title</th>
                                        <th class="align-middle">Company</th>
                                        <th class="align-middle">Services</th>
                                        <th class="align-middle">Country</th>
                                        <th class="align-middle">Messge</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contactenquiry as $value)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{date('d-M-Y',strtotime($value->created_at))}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>
                                            {{$value->phone}}
                                        </td>
                                        <td>
                                            {{$value->job_title}}
                                        </td>
                                        <td>
                                            {{$value->company_name}}
                                        </td>
                                        <td>
                                            {{$value->service_id}}
                                        </td>
                                        <td>
                                            {{$value->country}}
                                        </td>
                                        <td>
                                            {{$value->message}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>
        </div> --}}


        <!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
@endsection
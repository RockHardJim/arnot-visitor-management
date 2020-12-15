@extends('layouts.site')


@section('css')
    <style>

        [type=radio] {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* IMAGE STYLES */
        [type=radio] + img {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')






















    <!-- Default Page -->
    <div id="chat-2" class="chat">
        <div class="chat-body">
            <!-- Chat: Header -->
            <div class="chat-header border-bottom py-4 py-lg-6 px-lg-4">
                <div class="container-xxl p-0">
                    <div class="row align-items-center p-0">
                        <!-- Close chat(mobile) -->
                        <div class="col-3 d-xl-none">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="text-muted px-0" href="#" data-chat="open">
                                        <i class="icon-md fe-chevron-left"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Chat photo -->
                        <div class="col-6 col-xl-6">
                            <div class="media text-center text-xl-left">

                                <div class="media-body align-self-center text-truncate">
                                    <h5 class="text-truncate mb-n1">Select Department and Host</h5>
                                    <span class="badge badge-dot badge-success d-inline-block d-xl-none mr-1"></span>
                                </div>
                            </div>
                        </div>

                        <!-- Chat toolbar -->
                        <div class="col-3 col-xl-6 text-right">

                                <!-- Mobile nav -->
                                <li class="nav-item list-inline-item d-block d-xl-none">
                                    <div class="dropdown">
                                        <a class="nav-link text-muted px-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-md fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item d-flex align-items-center" data-toggle="collapse" data-target="#chat-2-search" href="#">
                                                Search <span class="ml-auto pl-5 fe-search"></span>
                                            </a>

                                            <a class="dropdown-item d-flex align-items-center" href="#" data-chat-sidebar-toggle="#chat-2-info">
                                                Chat Info <span class="ml-auto pl-5 fe-more-horizontal"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <!-- Mobile nav -->
                            </ul>
                        </div>

                    </div><!-- .row -->

                </div>
            </div>
            <!-- Chat: Header -->

            <!-- Chat: Search -->
            <div class="collapse border-bottom px-lg-8" id="chat-2-search">
                <div class="container-xxl py-4 py-lg-6">

                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Search this chat" aria-label="Search this chat">

                        <div class="input-group-append">
                            <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                <i class="fe-search"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Chat: Search -->

            <!-- Chat: Content-->
            <div class="chat-content px-lg-4">

                <div class="text-center hide-scrollbar d-flex my-7 scroll-menu ">
                    @foreach($departments as $department)
                    <a class="badge badge-secondary m-1 btn-primary"  onclick="getEmployee({{$department->id}})">{{$department->name}}</a>
                    @endforeach
                </div>

                <!-- Chats -->
                <nav class="nav d-block list-discussions-js mb-n6">
                    <div class="row" id="employeeList">

                    </div>
                </nav>
                <!-- Chats -->
            </div>

            <div class="chat-footer border-top py-4 py-lg-6 px-lg-4">
                @if($employee)
                <form class="form-horizontal" role="form"  method="POST" action="{{ route('check-in.step-one.next') }}" >
                    {{ csrf_field() }}
                    <input  type="hidden" id="employeeID" value="{{$employee->id}}" name="employeeID">

                    <div class="form-row align-items-center">
                        <div class="col">
                            <a href="{{ route('check-in') }}" class="btn btn-lg btn-sm btn-danger float-left text-white">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i> Cancel
                            </a>
                        </div>

                        <!-- Submit button -->
                        <div class="col-auto">
                            <button type="submit" class="btn btn-success btn-sm float-right" id="hide">
                                Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </button>

                        </div>

                    </div>
                </form>
                    @endif
            </div>
            <!-- Chat: Footer -->
        </div>

    </div>


@endsection
@section('scripts')
    <script src="{{ asset('js/booking/index.js') }}"></script>
@endsection

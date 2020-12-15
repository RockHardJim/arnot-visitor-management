@extends('layouts.site')

@push('css')
    <style>
        .retake-photo > img {
            height: 50px;
            float: left;
        }
        #myOnlineCamera video {width:320px;height:240px;margin:15px;float:left;}
        #myOnlineCamera canvas{width:320px;height:240px;margin:15px;float:left;}
        #myOnlineCamera button{clear:both;margin:30px;}
        .has-error > input, select {
            border-color: red;
        }
    </style>
@endpush
@section('sidebar')
    @include('check-in.partials._sidebar')
@endsection

@section('content')
    <!-- Default Page -->
    <div class="chat">

        <!-- Chat: body -->
        <div class="chat-body">

            <!-- Chat: Header -->
            <div class="chat-header border-bottom py-4 py-lg-6 px-lg-8">
                <div class="container-xxl p-0">
                    <div class="row align-items-center">

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
                                    <h6 class="text-truncate mb-n1">Booking information</h6>
                                    <small class="text-muted">Update your Booking details</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Chat: Header -->

            <!-- Chat: Content-->
            <div class="chat-content  py-3 px-lg-8">
                <form id="myForm" class="form-horizontal" role="form"  method="POST" action="{{ route('check-in.step-three.next') }}" >
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12 my-3">
                            <div style="margin: auto" align="center">
                                <video width="180" height="140" id="videos" style="border:5px solid #d3d3d3;" autoplay></video>
                                <canvas id="canvas" width="160" height="130" style="border:5px solid #d3d3d3;"></canvas>
                                <input type="hidden" id="image" name="photo" value="">
                            </div>
                            <button type="button" id="play-video" class='retake-photo btn btn-md btn-dark float-left'>
                                <img src="{{ asset('website/img/retake.png')}}" alt="">
                            </button>
                            <button type="button" id="snap" class='retake-photo btn btn-md btn-danger float-right'>
                                <img class="img" src="{{ asset('website/img/camera.png')}}" alt="">
                            </button>
                        </div>
                        <span class="text-center">{!! $errors->first('photo', '<p class="text-danger">:message</p>') !!}</span>
                    </div>
                    
                    
                </form>
                <div style="width:800px; margin: 0 auto;">
                    <H2>Guidelines Pertaining To Gate Access Card Photograph</H2>
                    <H3>The photograph must:</H3>
                    <ul>
                        <li>Be taken with your eyes open and clearly visible</li>
                        <li>Show your full head without any head coverings, unless if is for reglious beliefs or medical reasons</li>
                        <li>Your gaze must be aimed at the camera lens</li>
                        <li>The photo must be sharp in focus, and have good contrast</li>
                        <li>The background must be white or netural</li>
                        <li>Contain no other objects or people</li>
                        <li>Be facing forward and looking straight at the camera</li>
                    </ul>
                </div>
            </div>
            <div class="chat-footer border-top py-4 py-lg-6 px-lg-8">
                <div class="form-row align-items-center">
                    <div class="col">
                        <a href="{{ route('check-in.step-two') }}" class="btn btn-lg btn-sm btn-danger float-left text-white">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </a>
                    </div>

                    <!-- Submit button -->
                    <div class="col-auto">
                        <button class="btn btn-lg btn-sm btn-success float-left text-white " id="step-three-submit" type="submit">
                            Next <i class="fe-arrow-right ml-auto"></i>
                        </button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/photo.js') }}"></script>
    <script>

        $(document).ready(function(){
            $("#step-three-submit").click(function(){
                $("#myForm").submit(); // Submit the form
            });
        });
    </script>
@endsection

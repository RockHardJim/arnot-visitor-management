@extends('layouts.master')

@section('sidebar')
    @include('admin.booking.partials._sidebar', $bookings)
@endsection

@section('content')
    <!-- Default Page -->
    <div class="chat">

        <!-- Chat: body -->
        <div class="chat-body">

            <!-- Chat: Header -->
            <div class="chat-header border-bottom py-4 py-lg-6 px-lg-4">
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
            <div class="chat-content  py-3 px-lg-4">
                <form  role="form"  method="POST" action="{{ route('admin.bookings.step-three.next') }}" >
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-10"> <div class="form-group {{ $errors->has('purpose') ? 'has-error' : '' }}">
                                <label for="first_name" class="control-label">{{ __('Purpose') }} <span class="required">*</span></label>
                                <input id="first_name" type="text" class="form-control" name="purpose" value="{{ old('purpose') }}" />
                                @if ($errors->has('purpose'))
                                    <span class="text-danger">
                                        {{ $errors->first('purpose') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('start_at') ? 'has-error' : '' }}">
                                <label for="start_at" class="control-label">{{ __('Start Date') }}  <span class="required">*</span></label>
                                <input id="start_at" type="datetime-local" class="form-control" name="start_at" value="{{ old('start_at') }}" autocomplete="start_at">
                                @if ($errors->has('start_at'))
                                    <span class="text-danger">
                                                 {{ $errors->first('start_at') }}
                                              </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('end_at') ? 'has-error' : '' }}">
                                <label for="end_at" class="control-label">{{ __('End Date') }}  <span class="required">*</span></label>
                                <input id="end_at" type="datetime-local" class="form-control" name="end_at" value="{{ old('end_at') }}" autocomplete="end_at">
                                @if ($errors->has('end_at'))
                                    <span class="text-danger">
                                                  {{ $errors->first('end_at') }}
                                               </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="chat-footer border-top py-4 py-lg-6 px-lg-2">
                        <div class="form-row align-items-center">
                            <div class="col">
                                <a href="{{ route('admin.bookings.step-two') }}" class="btn btn-lg btn-sm btn-danger float-left text-white">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                </a>
                            </div>

                            <!-- Submit button -->
                            <div class="col-auto">
                                <button class="btn btn-lg btn-sm btn-success float-left text-white " id="step-one-submit" type="submit">
                                    Next <i class="fe-arrow-right ml-auto"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Chat: body -->
        <div id="chat-2-info" class="chat-sidebar chat-sidebar-visible">
            <div class="d-flex h-100 flex-column" id="employeeProfile">
                <div class="hide-scrollbar flex-fill" >
                    <div class="border-bottom text-center py-9 px-10">
                        <div class="avatar avatar-xl mx-5 mb-5">
                                <img class="avatar-img" src="{{ asset('assets/images/avatars/11.jpg') }}" alt="">
                        </div>
                        <h6>{{$visitor['name']}}</h6>
                    </div>
                    <ul class="list-group list-group-flush mb-8">
                        <li class="list-group-item py-6">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="small text-muted mb-0">{{__('Visitor Name')}}</p>
                                    <p>{{$visitor['name']}}</p>
                                </div>
                                <i class="text-muted icon-sm fe-disc"></i>
                            </div>
                        </li>
                        <li class="list-group-item py-6">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="small text-muted mb-0">{{__('Visitor Email')}}</p>
                                    <p>{{$visitor['email']}}</p>
                                </div>
                                <i class="text-muted icon-sm fe-disc"></i>
                            </div>
                        </li>

                        <li class="list-group-item py-6">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="small text-muted mb-0">{{__('Visitor Phone')}}</p>
                                    <p>{{$visitor['phone']}}</p>
                                </div>
                                <i class="text-muted icon-sm fe-phone"></i>
                            </div>
                        </li>

                        <li class="list-group-item py-6">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="small text-muted mb-0">{{__('Employee Name')}}</p>
                                    <p>{{$employee->name}}</p>
                                </div>
                                <i class="text-muted icon-sm fe-mail"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

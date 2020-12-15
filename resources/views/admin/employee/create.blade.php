@extends('layouts.master')

@section('sidebar')
    @include('admin.employee.partials._sidebar', $employees)
@endsection

@section('content')
    <!-- Default Page -->
    <div class="chat">
        <!-- Chat: body -->
        <div class="chat-body">
            <!-- Chat: Header -->
            <div class="chat-header border-bottom py-4 py-lg-6 px-lg-2">
                <div class="container-xxl">
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
                                    <h6 class="text-truncate mb-n1">{{ trans_choice('entity.employee', 1) }}</h6>
                                    <small class="text-muted">New employee register</small>
                                </div>
                            </div>
                        </div>
                    </div><!-- .row -->
                </div>
            </div>
            <div class="chat-content px-lg-2">
                <div class="container-xxl py-6 ">
                    <!-- Accordion -->
                    <div class=" mb-n6 mb-lg-8">
                        <div class="row">
                            <div class="col-md-10">
                                <form class="form-horizontal" role="form"  method="POST" action="{{ route('admin.employees.store') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                                                <label for="first_name" class="control-label">{{ __('First Name') }}
                                                    <span class="required">*</span>
                                                </label>
                                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" />
                                                @if ($errors->has('first_name'))
                                                    <span class="text-danger">
                                                      {{ $errors->first('first_name') }}
                                                     </span>
                                                @endif
                                            </div>

                                            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                                <label for="phone" class="control-label">{{ __('Phone') }}
                                                    <span class="required">*</span>
                                                </label>
                                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                                                @if ($errors->has('phone'))
                                                    <span class="text-danger">
                                                             {{ $errors->first('phone') }}
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group {{ $errors->has('department_id') ? 'has-error' : '' }}">
                                                <label for="department_id" class="control-label">{{ __('Department') }}
                                                    <span class="required">*</span>
                                                </label>
                                                <select class="form-control" name="department_id" >
                                                    @foreach($departments as $department)
                                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('department_id'))
                                                    <span class="text-danger">
                                                {{ $errors->first('department_id') }}
                                                 </span>
                                                @endif
                                            </div>

                                            <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                                <label for="password-confirm" class="control-label">{{ __('Confirm Password') }}</label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                                                @if ($errors->has('password_confirmation'))
                                                    <span class="text-danger">
                                                {{ $errors->first('password_confirmation') }}
                                                 </span>
                                                @endif
                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                                <label for="last_name" class="control-label">{{ __('Last Name') }}
                                                    <span class="required">*</span>
                                                </label>
                                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" />
                                                @if ($errors->has('last_name'))
                                                    <span class="text-danger">
                                                      {{ $errors->first('last_name') }}
                                                     </span>
                                                @endif
                                            </div>

                                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                                <label for="email" class="control-label">{{ __('E-Mail Address') }}
                                                    <span class="required">*</span>
                                                </label>
                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" />
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">
                                                       {{ $errors->first('email') }}
                                                     </span>
                                                @endif
                                            </div>
  

                                            <div class="form-group {{ $errors->has('designation_id') ? 'has-error' : '' }}">
                                                <label for="designation_id" class="control-label">{{ __('Designation') }}
                                                    <span class="required">*</span>
                                                </label>
                                                <select class="form-control" name="designation_id" >
                                                    @foreach($designations as $designation)
                                                        <option value="{{$designation->id}}">{{$designation->name}}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('designation_id'))
                                                    <span class="text-danger">
                                                {{ $errors->first('designation_id') }}
                                                 </span>
                                                @endif
                                            </div>
                                            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                                <label for="password" class="control-label">{{ __('Password') }}  <span class="required">*</span></label>
                                                <input id="password" type="password" class="form-control" name="password" autocomplete="new-password">
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">
                                                {{ $errors->first('password') }}
                                                 </span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Create') }}
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/setting/index.js') }}"></script>
    <script>
        $('.datepickers').datepicker({
            weekStart: 1,
            autoclose: true,
            todayHighlight: true,
        });
        $('.datepickers').datepicker("setDate", new Date());

        $('.datepickers').change(function () {});
        </script>
@endsection


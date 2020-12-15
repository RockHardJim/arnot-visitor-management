@extends('layouts.site')

@section('sidebar')
    @include('check-in.partials._sidebar')
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
                                    <h6 class="text-truncate mb-n1">{{__('Visitor information')}}</h6>
                                    <small class="text-muted">{{__('Update your profile details')}}</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="chat-content py-3 px-lg-4">
                {!! Form::open(['route' => 'check-in.step-two.next','method' => 'post', 'class' => 'form-horizontal', 'files' => true]) !!}
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-6 {{ $errors->has('name') ? 'has-error' : ''}}">
                        {!! Html::decode(Form::label('name', 'Name <span class="text-danger">*</span>', ['class' => 'control-label col-form-label-sm'])) !!}
                        {!! Form::text('name', isset($visitor->name) ? $visitor->name : null, ('' == 'required') ? ['class' => 'form-control input form-control-sm','id '=>'name', 'placeholder' => 'Your name'] : ['class' => 'form-control input form-control-sm', 'id '=>'name', 'placeholder' => 'Your name']) !!}
                        {!! $errors->first('name', '<p class="text-danger">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-6 {{ $errors->has('email') ? 'has-error' : ''}}">
                        {!! Html::decode(Form::label('email', 'Email <span class="text-danger">*</span>', ['class' => 'control-label col-form-label-sm'])) !!}
                        {!! Form::email('email', isset($visitor->email) ? $visitor->email : null, ('required' == 'required') ? ['class' => 'form-control input form-control-sm', 'id '=>'email',  'placeholder' => 'Your email'] : ['class' => 'form-control input form-control-sm','id '=>'email',  'placeholder' => 'Your email']) !!}
                        {!! $errors->first('email', '<p class="text-danger">:message</p>') !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 {{ $errors->has('company_name') ? 'has-error' : ''}}">
                        {!! Form::label('company_name', 'Company Name', ['class' => 'control-label col-form-label-sm']) !!}
                        {!! Form::text('company_name', isset($visitor->company_name) ? $visitor->company_name : null, ('' == 'required') ? ['class' => 'form-control input form-control-sm', 'id '=>'company_name'] : ['class' => 'form-control input form-control-sm','id '=>'company_name', 'placeholder' => 'Your company name']) !!}
                        {!! $errors->first('company_name', '<p class="text-danger">:message</p>') !!}
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 {{ $errors->has('phone') ? 'has-error' : ''}}">
                        {!! Html::decode(Form::label('phone', 'Phone <span class="text-danger">*</span>', ['class' => 'control-label col-form-label-sm'])) !!}
                        {!! Form::text('phone', isset($visitor->phone) ? $visitor->phone : null, ('' == 'required') ? ['class' => 'form-control input form-control-sm', 'id '=>'phone', 'placeholder' => 'Your phone no'] : ['class' => 'form-control input form-control-sm','id '=>'phone', 'placeholder' => 'Your phone no']) !!}
                        {!! $errors->first('phone', '<p class="text-danger">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-6 {{ $errors->has('national_identification_no') ? 'has-error' : ''}}">
                        {!! Form::label('national_identification_no', 'Identity\Passport Number', ['class' => 'control-label col-form-label-sm']) !!}
                        {!! Form::text('national_identification_no', isset($visitor->national_identification_no) ? $visitor->national_identification_no : null, ('' == 'required') ? ['class' => 'form-control input form-control-sm','id '=>'national_identification_no', 'placeholder' => 'Your  nid no'] : ['class' => 'form-control input form-control-sm','id '=>'national_identification_no', 'placeholder' => 'Your nid no']) !!}
                        {!! $errors->first('national_identification_no', '<p class="text-danger">:message</p>') !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 {{ $errors->has('address') ? 'has-error' : ''}}">
                        {!! Form::label('address', 'Address', ['class' => 'control-label col-form-label-sm']) !!}
                        {!! Form::text('address', isset($visitor->address) ? $visitor->address : null, ('' == 'required') ? ['class' => 'form-control input form-control-sm','id '=>'address', 'placeholder' => 'Your address'] : ['class' => 'form-control input form-control-sm','id '=>'address', 'placeholder' => 'Your address']) !!}
                        {!! $errors->first('address', '<p class="text-danger">:message</p>') !!}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="gender" class="control-label col-form-label-sm">Group Enable
                        </label>
                        <select class="form-control input form-control-sm" name="is_group_enabled"  onchange="showGroup(this);">
                                <option value="10">{{__('No')}}</option>
                                <option value="5">{{__('Yes')}}</option>
                        </select>
                        <small style="color: red;">For group bookings select yes to add your members</small>
                    </div>
                </div>
                <div class="card" id="GroupShow">
                    <div class="card-header"><h5>{{__('Booking Group Details')}}</h5></div>
                    <div class="card-body">
                        <input  type="hidden" id="counter" value="0" name="counter">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group" id="people-name-div">
                                    <label class="control-label col-form-label-sm" for="people_name">{{__('Name')}}<span class="text-danger"> *</span></label>
                                    <input id="people_name" type="text" class="form-control input form-control-sm" value="">
                                </div>
                                <div class="form-group" id="people-email-div">
                                    <label class="control-label col-form-label-sm" for="people_email">{{__('Email')}}<span class="text-danger"> *</span></label>
                                    <input id="people_email" type="email" class="form-control input form-control-sm" value="">
                                </div>
                                <div class="form-group">
                                    <button type="button" id="addPeople" class="btn btn-primary">
                                        {{ __('Add') }}
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="GroupList">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat-footer border-top py-4 px-lg-2">
                    <div class="form-row align-items-center">
                        <div class="col">
                            @if($is_pre_registered)
                                <a href="{{ route('check-in.pre.registered') }}" class="btn btn-lg btn-sm btn-danger float-left text-white">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                </a>
                                @else
                                <a href="{{ route('check-in.step-one') }}" class="btn btn-lg btn-sm btn-danger float-left text-white">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                </a>
                                @endif
                        </div>

                        <!-- Submit button -->
                        <div class="col-auto">
                            <button class="btn btn-lg btn-sm btn-success float-left text-white " id="step-one-submit" type="submit">
                                Next <i class="fe-arrow-right ml-auto"></i>
                            </button>
                        </div>

                    </div>
                </div>
                {!! Form::close() !!}

            </div>

        </div>

    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/booking/index.js') }}"></script>
@endsection

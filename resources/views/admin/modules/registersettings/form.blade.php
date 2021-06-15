@extends('admin.layouts.admin')
@section('content')
<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-clipboard bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>{{ $title }}</h5>
                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                        <li class="breadcrumb-item">
                            <a href="#!">{{ $title }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="card">
                                <div class="card-header">
                                    <h5>{{ $title }}</h5>
                                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                </div>
                                <div class="card-block">
                                    <form action="{{ route('register_settings.update') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Verify Email address in Registration</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>If you set to 'Yes' new user will not be allowed top play until they visit a link that is sent to them in an email when they register.</span>
                                                </div>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>If a user's account is not activated by the user visiting the link, it will remain in the 'Users Awaiting Activation' group.</span>
                                                </div>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Note: Verify Email address in Registration require SMTP Server, SMTP Settings.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-radio">
                                                    @php
                                                        if ($registerSetting->required_verify) {
                                                            $yes = 'checked="checked"';
                                                            $no = '';
                                                        } else {
                                                            $yes = '';
                                                            $no = 'checked="checked"';
                                                        }
                                                    @endphp
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="required_verify" value="1" {{$yes}}>
                                                            <i class="helper"></i>yes
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="required_verify" value="0" {{$no}}>
                                                            <i class="helper"></i>no
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Personal ID</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>When 'Yes' user can put his own custom Personal ID, set the minimum digits (default 12)</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>When 'No' you must set the Personal ID (default 111111111111).</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-radio">
                                                    @php
                                                        if ($registerSetting->required_token) {
                                                            $yes = 'checked="checked"';
                                                            $no = '';
                                                        } else {
                                                            $yes = '';
                                                            $no = 'checked="checked"';
                                                        }
                                                    @endphp
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="required_token" value="1" {{$yes}}>
                                                            <i class="helper"></i>yes
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="required_token" value="0" {{$no}}>
                                                            <i class="helper"></i>no
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Personal ID Length</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Set the length required for Personal ID, default is 12 digits.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="length_token" class="form-control" name="length_token" value="{{$registerSetting->length_token}}" placeholder="12" required="" />
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Pre-set Personal ID</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Set the custom Personal ID, default is 111111111111.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="default_token" class="form-control" name="default_token" value="{{$registerSetting->default_token}}" placeholder="111111111111" required="" />
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-primary waves-effect waves-light" style="float: right;">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="styleSelector">
    </div>
</div>
@endsection
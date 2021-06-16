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
                                    <form action="{{ route('contact_settings.update') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Contact Method</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Select method.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Send Mail - Users will be able to send mail direct from website.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Contact Info - Contact infos will be displayed.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                @php
                                                    if($contactSetting->method == 1) {
                                                        $select1 = 'selected=""';
                                                        $select2 = '';
                                                    }
                                                    
                                                    if($contactSetting->method == 2) {
                                                        $select2 = 'selected=""';
                                                        $select1 = '';
                                                    }
                                                @endphp
                                                <select name="method" class="form-control fill">
                                                <option value="">Select One Value Only</option>
                                                <option value="1" {{$select1}}>Send Mail</option>
                                                <option value="2" {{$select2}}>Contact Info</option>
                                                </select>
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Email Address</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Contact email address.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="email" class="form-control" name="email" value="{{$contactSetting->email}}" placeholder="tuserver@email.com" required="" />
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Message Length</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Set the maximum length of message. This apply only to Send Mail method.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="length" class="form-control" name="length" value="{{$contactSetting->length}}" placeholder="500" required="" />
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
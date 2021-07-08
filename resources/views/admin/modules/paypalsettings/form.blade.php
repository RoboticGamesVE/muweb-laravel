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
                                    <form action="{{ route('paypal_settings.update') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">PayPal Email Address</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Enter paypal email address.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="email" class="form-control" name="email" value="{{$paypalSetting->email}}" placeholder="tuserver@email.com" required="" />
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Chargeback Punish</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>If set to 'Yes' user's account will be blocked if him make an paypal chargeback or payment is refunded.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-radio">
                                                    @php
                                                        if ($paypalSetting->punish) {
                                                            $yes = 'checked="checked"';
                                                            $no = '';
                                                        } else {
                                                            $yes = '';
                                                            $no = 'checked="checked"';
                                                        }
                                                    @endphp
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="punish" value="1" {{$yes}}>
                                                            <i class="helper"></i>Yes
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="punish" value="0" {{$no}}>
                                                            <i class="helper"></i>No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                  
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">PayPal Verification</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>If set to 'Yes' buyer's paypal email will receive mail with confirmation code in order to claim his credits for his paypal transcation.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>If set to 'No' buyer will receive credits after paypal transaction is finihsed.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>This function will need buyers to verify their donation/transaction to avoid chargeback. They will need the verification code sent to their paypal email in order to finish the donation process.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Note: PayPal Verification require SMTP Server, <a href="#">SMTP Settings</a></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-radio">
                                                    @php
                                                        if ($paypalSetting->required_code) {
                                                            $yes = 'checked="checked"';
                                                            $no = '';
                                                        } else {
                                                            $yes = '';
                                                            $no = 'checked="checked"';
                                                        }
                                                    @endphp
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="required_code" value="1" {{$yes}}>
                                                            <i class="helper"></i>Yes
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="required_code" value="0" {{$no}}>
                                                            <i class="helper"></i>No
                                                        </label>
                                                    </div>
                                                </div>
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
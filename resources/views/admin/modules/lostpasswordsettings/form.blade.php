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
                                    <form action="{{ route('lostpassword_settings.update') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Recover Password Method</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Select method that users will use to recover password.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Secret Question - user will need to enter answer of hid secret question.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Restore Password via Email - user will need to enter email address that used on account registration in order to receive instructions on how to reset password.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Note: Restore Password via Email require SMTP Server, SMTP Settings.</span>
                                                </div>
                                            </div>
                                            @php
                                                $selected = '';
                                                $selected1 = '';
                                                if($lostpasswordSetting->method_id == 1){
                                                    $selected = 'selected=""';
                                                }else {
                                                    $selected1 = 'selected=""';
                                                }
                                            @endphp
                                            <div class="col-sm-6">
                                                <select name="method_id" class="form-control fill">
                                                    <option value="" selected="">Select One Value Only</option>
                                                    <option value="1" {{$selected}}>Secret Question</option>
                                                    <option value="2" {{$selected1}}>Restore Password via Email</option>
                                                </select>
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
<script type="text/javascript">
    $(document).ready(function() { 
        $('.form-control fill').select2(); 
    });
</script>
@endsection
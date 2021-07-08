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
                                    <form action="{{ route('addpoint_settings.update') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Strength Limit</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>If character's strength reach this limit, will not be able to add points on strength using add points system.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" id="strength_limit" class="form-control" name="strength_limit" value="{{$addpointSetting->strength_limit}}" placeholder="65000" required="" />
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Agility Limit</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>If character's agylity reach this limit, will not be able to add points on strength using add points system.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" id="agility_limit" class="form-control" name="agility_limit" value="{{$addpointSetting->agility_limit}}" placeholder="65000" required="" />
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Vitality Limit</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>If character's vitality reach this limit, will not be able to add points on strength using add points system.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" id="vitality_limit" class="form-control" name="vitality_limit" value="{{$addpointSetting->vitality_limit}}" placeholder="65000" required="" />
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Energy Limit</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>If character's energy reach this limit, will not be able to add points on strength using add points system.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" id="energy_limit" class="form-control" name="energy_limit" value="{{$addpointSetting->energy_limit}}" placeholder="65000" required="" />
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Command Limit</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>If character's command reach this limit, will not be able to add points on strength using add points system.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" id="command_limit" class="form-control" name="command_limit" value="{{$addpointSetting->command_limit}}" placeholder="65000" required="" />
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
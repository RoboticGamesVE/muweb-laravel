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
                                    <form action="{{ route('grandreset_settings.update') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Resets</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Set how many resets character should have, to use grand reset.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" name="resets" value="{{$grandresetSetting->resets}}" placeholder="50" required="">
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                    <label class="col-form-label">Level</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Set what level character should have, to use grand reset.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" name="level" value="{{$grandresetSetting->level}}" placeholder="400" required="">
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Zen</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Set the amount of zen required to use grand reset.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" name="zen" value="{{$grandresetSetting->zen}}" placeholder="1000000000" required="">
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Credits Bonus</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Set the amount of credits, that character's account will recive after grand reset.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" name="credits" value="{{$grandresetSetting->credits}}" placeholder="0" required="">
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Credits Bonus Formula</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Set formula.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Credits Bonus - Character's account will recive the set amount of credits.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Credits Bonus * Grand Resets Number - Character's account will recive the set amount of credits bonus multiplicated with character's grand resets number.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>e.g: (4000*2) = 8000 points, 4000 is credits bonus amount and 2 is grand resets number.</span>
                                                </div>
                                            </div>
                                            @php
                                                $selected = '';
                                                $selected1 = '';
                                                if($grandresetSetting->credits_formula == 1){
                                                    $selected = 'selected=""';
                                                }else {
                                                    $selected1 = 'selected=""';
                                                }
                                            @endphp
                                            <div class="col-sm-6">
                                                <select name="credits_formula" class="form-control fill">
                                                    <option value="" selected="">Select One Value Only</option>
                                                    <option value="1" {{$selected}}>Credits Bonus</option>
                                                    <option value="2" {{$selected1}}>Credits Bonus * Grand Resets Number</option>
                                                </select>
                                            </div>
                                        </div>                                 
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Levelup Bonus Points</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Set the amount of levelup bonus points, that character will recive after grand reset.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" name="level_points" value="{{$grandresetSetting->level_points}}" placeholder="10000" required="">
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Credits Bonus Formula</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Set formula.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Levelup Bonus Points - Character will recive the set amount of levelup bonus points.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Levelup Bonus Points * Grand Resets Number - Character will recive the set amount of levelup bonus points multiplicated with character's grand resets number.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>e.g: (4000*2) = 8000 points, 4000 is levelup bonus points amount and 2 is grand resets number.</span>
                                                </div>
                                            </div>
                                            @php
                                                $selected = '';
                                                $selected1 = '';
                                                if($grandresetSetting->level_points_formula == 1){
                                                    $selected = 'selected=""';
                                                }else {
                                                    $selected1 = 'selected=""';
                                                }
                                            @endphp
                                            <div class="col-sm-6">
                                                <select name="level_points_formula" class="form-control fill">
                                                    <option value="" selected="">Select One Value Only</option>
                                                    <option value="1" {{$selected}}>Levelup Bonus Points</option>
                                                    <option value="2" {{$selected1}}>Levelup Bonus Points * Grand Resets Number</option>
                                                </select>
                                            </div>
                                        </div>                                 
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Clear Skills</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>When 'Yes' all character's skills will be cleared after grand reset.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-radio">
                                                    @php
                                                        if ($grandresetSetting->clear_skills) {
                                                            $yes = 'checked="checked"';
                                                            $no = '';
                                                        } else {
                                                            $yes = '';
                                                            $no = 'checked="checked"';
                                                        }
                                                    @endphp
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="clear_skills" value="1" {{$yes}}>
                                                            <i class="helper"></i>Yes
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="clear_skills" value="0" {{$no}}>
                                                            <i class="helper"></i>No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                  
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Clear Inventory</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>When 'Yes' all character's items from inventory will be cleared after grand reset.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-radio">
                                                    @php
                                                        if ($grandresetSetting->clear_inventory) {
                                                            $yes = 'checked="checked"';
                                                            $no = '';
                                                        } else {
                                                            $yes = '';
                                                            $no = 'checked="checked"';
                                                        }
                                                    @endphp
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="clear_inventory" value="1" {{$yes}}>
                                                            <i class="helper"></i>Yes
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="clear_inventory" value="0" {{$no}}>
                                                            <i class="helper"></i>No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                  
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Reset Stats</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>When 'Yes' all character's stats (Strength, Agility, Vitality, Energy, Command). will be set to 25.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-radio">
                                                    @php
                                                        if ($grandresetSetting->reset_stats) {
                                                            $yes = 'checked="checked"';
                                                            $no = '';
                                                        } else {
                                                            $yes = '';
                                                            $no = 'checked="checked"';
                                                        }
                                                    @endphp
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="reset_stats" value="1" {{$yes}}>
                                                            <i class="helper"></i>Yes
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="reset_stats" value="0" {{$no}}>
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

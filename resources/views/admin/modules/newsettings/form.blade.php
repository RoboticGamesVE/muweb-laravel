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
                                    <form action="{{ route('new_settings.update') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Display Style</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Choose news display style.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Style 1: Will show full news.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Style 2: Will show short news, user click required to view full news.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Style 3: Will show only news title, user click required to view full news.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-radio">
                                                    @php
                                                        switch ($newSetting->style_id) {
                                                            case 3:
                                                                $Style1 = '';
                                                                $Style2 = '';
                                                                $Style3 = 'checked="checked"';
                                                                break;
                                                            case 1:
                                                                $Style1 = 'checked="checked"';
                                                                $Style2 = '';
                                                                $Style3 = '';
                                                                break;
                                                            case 2:
                                                                $Style1 = '';
                                                                $Style2 = 'checked="checked"';
                                                                $Style3 = '';
                                                                break;
                                                        }
                                                    @endphp
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="style_id" value="1" {{$Style1}}>
                                                            <i class="helper"></i>Style 1
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="style_id" value="2" {{$Style2}}>
                                                            <i class="helper"></i>Style 2
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="style_id" value="3" {{$Style3}}>
                                                            <i class="helper"></i>Style 3
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Style 2 Display Options</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Set how many characters of news should be displayed on short news (Style 2).</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="short_length" class="form-control" name="short_length" value="{{$newSetting->short_length}}" placeholder="240" required="" />
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Social Bookmarking</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Display Social Bookmarking Icons.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Social Bookmarking has evolved as a very effective way of sharing content with others and consequently bringing more traffic to your website. Enable/Disable Social Bookmarking Icons to be displayed in your news pages.</span>
                                                </div>
                                            </div>
                                            @php
                                                $selected = '';
                                                $selected1 = '';
                                                if($newSetting->enabled_bookmarking == 1){
                                                    $selected1 = 'selected=""';
                                                }else {
                                                    $selected = 'selected=""';
                                                }
                                            @endphp
                                            <div class="col-sm-6">
                                                <select name="enabled_bookmarking" class="form-control fill">
                                                    <option value="" selected="">Select One Value Only</option>
                                                    <option value="0" {{$selected}}>Enable</option>
                                                    <option value="1" {{$selected1}}>Disable</option>
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
@endsection
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
                                    <form action="{{ route('rss_settings.update') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">URL of Feed</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Enter URL of the feed to be read.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>e.g: http//your-rss.com</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="url" class="form-control" name="url" value="{{$rssSetting->url}}" placeholder="http//your-rss.com" required="" />
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Title Length</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Set the length title of fetched rss item.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" id="title_length" class="form-control" name="title_length" value="{{$rssSetting->title_length}}" placeholder="20" required="" />
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Maximum Items to Fetch</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Set how many items from feed to be displayed.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" id="count" class="form-control" name="count" value="{{$rssSetting->count}}" placeholder="5" required="" />
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Check Feed Time</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Set minutes. On each % minutes MUCore will check feed url for new items. Default is 60 min.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" id="time_check" class="form-control" name="time_check" value="{{$rssSetting->time_check}}" placeholder="60" required="" />
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
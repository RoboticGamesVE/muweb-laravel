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
                                    <form action="@if(empty($new->title)){{route('news.store')}}@else{{ route('news.update', $new->id)}}@endif" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Title</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>News Title that will appear on news.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="title" class="form-control" name="title" value="{{$new->title ?? ''}}" placeholder="Your Title" required="" />
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Short Title</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>News Title that will appear on news, a single word.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="short_title" class="form-control" name="short_title" value="{{$new->short_title ?? ''}}" placeholder="Your Short Title" required="" />
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">News Content</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <textarea rows="5" cols="5" name="content" class="form-control" placeholder="Default textarea">{{$new->content ?? ''}}</textarea>
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Active</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>When set 'No' this news will not be visibile.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-radio">
                                                    @php
                                                        $yes = '';
                                                        $no = '';
                                                        if (!empty($new->title)){
                                                            if ($new->active) {
                                                                $yes = 'checked="checked"';
                                                                $no = '';
                                                            } else {
                                                                $yes = '';
                                                                $no = 'checked="checked"';
                                                            }
                                                        }
                                                    @endphp
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="active" value="1" {{$yes}}>
                                                            <i class="helper"></i>Yes
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="active" value="0" {{$no}}>
                                                            <i class="helper"></i>No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                  
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">News Archive</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>When set 'Yes' this news will moved to news archive.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Note: archived news are not displayed on news.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-radio">
                                                    @php  
                                                        $yes = '';
                                                        $no = '';     
                                                        if (!empty($new->title)){
                                                            if ($new->archived) {
                                                                $yes = 'checked="checked"';
                                                                $no = '';
                                                            } else {
                                                                $yes = '';
                                                                $no = 'checked="checked"';
                                                            }
                                                        }
                                                    @endphp
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="archived" value="1" {{$yes}}>
                                                            <i class="helper"></i>Yes
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="archived" value="0" {{$no}}>
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
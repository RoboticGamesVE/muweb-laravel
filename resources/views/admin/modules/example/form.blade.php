@extends('admin.layouts.admin')
@section('content')
<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-clipboard bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Basic Form Inputs</h5>
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
                            <a href="#!">Basic Form Inputs</a>
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
                                    <h5>Input Grid</h5>
                                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                </div>
                                <div class="card-block">
                                    <h4 class="sub-title">Basic Inputs</h4>
                                    <form>
                                        <div class="form-group row">
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" placeholder="col-sm-1">
                                            </div>
                                            <div class="col-sm-11">
                                                <input type="text" class="form-control" placeholder="col-sm-11">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" placeholder="col-sm-2">
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="col-sm-10">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" placeholder="col-sm-3">
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="col-sm-9">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" placeholder="col-sm-4">
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder="col-sm-8">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" placeholder="col-sm-5">
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" placeholder="col-sm-7">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <h4 class="sub-title">Radio Fill Button</h4>
                                                <input type="text" class="form-control" placeholder="col-sm-6">
                                            </div>
                                            <div class="col-sm-6">
                                                <h4 class="sub-title">Radio Fill Button</h4>
                                                <input type="text" class="form-control" placeholder="col-sm-6">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="col-sm-12">
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
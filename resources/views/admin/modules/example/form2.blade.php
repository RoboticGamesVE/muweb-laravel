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
                                    <h5>Basic Form Inputs</h5>
                                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                </div>
                                <div class="card-block">
                                    <form>
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Placeholder</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="Type your title in Placeholder">
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Select Box</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>text random</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="select" class="form-control fill">
                                                <option value="opt1">Select One Value Only</option>
                                                <option value="opt2">Type 2</option>
                                                <option value="opt3">Type 3</option>
                                                <option value="opt4">Type 4</option>
                                                <option value="opt5">Type 5</option>
                                                <option value="opt6">Type 6</option>
                                                <option value="opt7">Type 7</option>
                                                <option value="opt8">Type 8</option>
                                                </select>
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Radio Box</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>text random</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-radio">
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="radio" checked="checked">
                                                            <i class="helper"></i>Radio 1
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="radio">
                                                            <i class="helper"></i>Radio 2
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Check Box</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>text random</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                            <div class="border-checkbox-section">
                                                <div class="border-checkbox-group border-checkbox-group-primary">
                                                    <input class="border-checkbox" type="checkbox" id="checkbox1">
                                                    <label class="border-checkbox-label" for="checkbox1">Primary</label>
                                                </div>
                                                <div class="border-checkbox-group">
                                                    <input class="border-checkbox" type="checkbox" id="checkbox6" disabled="">
                                                    <label class="border-checkbox-label" for="checkbox6">Disabled</label>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Textarea Box</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>text random</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-primary waves-effect waves-light" style="float: right;">Primary Button</button>
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
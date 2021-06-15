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
                                    <form action="{{ route('website_settings.update') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Website URL</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>URL of your website, where MUCore is running.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>*Don't add trailing slash ("/") at the end of URL.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="website_url" class="form-control" name="website_url" value="{{$websiteSetting->website_url}}" placeholder="https://yoursite.com">
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Website Title</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Title of your website.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="website_title" class="form-control" name="website_title" value="{{$websiteSetting->website_title}}" placeholder="Title">
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">MU Online database use MD5 Encryption</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>When 'Yes' website will perform functions,checks,features under MD5 encryption method.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-radio">
                                                    @php
                                                        if ($websiteSetting->md5) {
                                                            $yes = 'checked="checked"';
                                                            $no = '';
                                                        } else {
                                                            $yes = '';
                                                            $no = 'checked="checked"';
                                                        }
                                                    @endphp
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="md5" value="1" {{$yes}}>
                                                            <i class="helper"></i>yes
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="md5" value="0" {{$no}}>
                                                            <i class="helper"></i>no
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Encrypt Key</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Provide an encryption key, 8 digits length, letters and nubmers only.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Encryption key will be used in website features and functions in order to protect your users data.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="crypt_key" class="form-control" name="crypt_key" value="{{$websiteSetting->crypt_key}}" placeholder="12345678">
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Administrator Nickname</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Enter an nickname for your Administrator account. (letters,numbers and spaces only)</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="admin_nick" class="form-control" name="admin_nick" value="{{$websiteSetting->admin_nick}}" placeholder="username">
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Administrator Email</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>This is the email address of the webmaster. It will be used as the From address for certain emails sent by the system.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="email" id="admin_mail" class="form-control" name="admin_mail" value="{{$websiteSetting->admin_mail}}" placeholder="user@mail.com">
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Template</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Select website template.</span>
                                                </div>
                                                <div style="font-size: 13px;">
                                                    <span>Note: each template has his own folder that is stored on template folder.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="id_template" class="form-control fill">
                                                <option value="">Select One Value Only</option>
                                                <option value="1" selected="">Template 1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <p class="sub-title"></p>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Copyright Text</label>
                                                <br>
                                                <div style="font-size: 13px;">
                                                    <span>Copyright text will appear in the footer of page.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="copyright" class="form-control" name="copyright" value="{{$websiteSetting->copyright}}" placeholder="copyright">
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
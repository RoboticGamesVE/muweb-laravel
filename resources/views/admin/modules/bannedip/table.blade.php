@extends('admin.layouts.admin')
@section('content')
<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-credit-card bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>{{$title}}</h5>
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
                        <li class="breadcrumb-item"><a href="#!">Bootstrap Tables</a></li>
                        <li class="breadcrumb-item">
                            <a href="#!">Basic Tables</a>
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

                    <div class="card">
                        <div class="card-header">
                            <h5>{{$title}}</h5>
                            <a href="{{route('banned_ip.create')}}" class="btn btn-primary">Crear</a>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                    <li><i class="feather icon-maximize full-card"></i></li>
                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                    <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                    <li><i class="feather icon-trash close-card"></i></li>
                                    <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>IP</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bannedip as $banned)
                                        <tr>
                                            <th scope="row">{{$banned->count()}}</th>
                                            <td>{{$banned->banned_ip}}</td>
                                            <td>
                                                <a href="" class="text-red-400" onclick="event.preventDefault(); deleteForm('delete-{{$banned->id}}')">Borrar</a>
                                            </td>
                                            <form style="display: none;" action="{{ route('banned_ip.destroy', $banned->id) }}" id="delete-{{$banned->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </tr>
                                    @endforeach
                                    <tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div id="styleSelector">
    </div>
</div>
 <script>
    function deleteForm(name) {
        let form = document.getElementById(name);
        form.submit();
    }
</script>
@endsection
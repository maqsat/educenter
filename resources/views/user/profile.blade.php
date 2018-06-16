@extends('layouts.app')

@section('content')
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-block">
                <center class="m-t-30"> <img src="/material-lite/assets/images/users/5.jpg" class="img-circle" width="150" />
                    <h4 class="card-title m-t-10">{{ Auth::user()->name }}</h4>
                    <h6 class="card-subtitle">{{ Auth::user()->uniqid }}</h6>
                    <div class="row text-center justify-content-md-center">
                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-block">
                <form class="form-horizontal form-material">
                    <div class="form-group">
                        <label class="col-md-12">Полное имя</label>
                        <div class="col-md-12">
                            <input type="text" value="{{ Auth::user()->name  }}" class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Логин</label>
                        <div class="col-md-12">
                            <input type="text" value="{{ Auth::user()->uniqid  }}" class="form-control form-control-line" name="example-email" id="example-email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Статус</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="@if(Auth::user()->type_id == 1) Администратор @elseif(Auth::user()->type_id == 2) Преподаватель @else Студент @endif" class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Изменить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
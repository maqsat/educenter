<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">{{ trans('app.'.$route_name) }}</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Главная</a></li>
            <li class="breadcrumb-item active">{{ trans('app.'.$route_name) }}</li>
        </ol>
    </div>
    <div class="col-md-7 col-4 align-self-center">
        <a href="/{{ $route_name }}/create" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Добавить</a>
    </div>
</div>
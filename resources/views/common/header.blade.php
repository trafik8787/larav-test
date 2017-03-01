<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Главная</a></li>
            @foreach($nav_category as $rows)
                <li><a href="#">{{$rows->name}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Header</div>
                <div class="panel-body">
                    meny
                </div>
            </div>
        </div>
    </div>
</div>

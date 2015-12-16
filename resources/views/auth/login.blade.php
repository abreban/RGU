<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please sign in</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="/auth/login" accept-charset="UTF-8" role="form">
                    {!! csrf_field() !!}
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>                      
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    @if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
             <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
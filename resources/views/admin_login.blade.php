
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<link href="{{asset('public/backend/css/bootstrap.min.css')}}" rel="stylesheet">
	
	<link href="{{asset('public/backend/css/mystyle.css')}}" rel="stylesheet">
</head>

<body>
    
    <div class="container-fluid bg">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                
            </div>
            
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="login-panel panel-default">
                        <div class="p-body">
                        <!-- @csrf -->
                            <form role="form" action="{{URL::to('/admin-dashboard')}}" method="post" class="form-container">
                                {{ csrf_field()}}
                              
                               
                                <h3 style="text-align: center;"><b style="color: #f59f00">ĐĂNG NHẬP</b></h3>
                                <hr>
 
                                <fieldset>
                                    @if(session()->has('message'))
                                        <div class="alert alert-danger">
                                            {{session()->get('message')}}
                                        </div>
                                    @elseif(session()->has('error'))
                                        <div class="alert alert-success nn">
                                            {{session()->get('error')}}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="admin_email" type="email" autofocus="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="admin_password" type="password" value="">
                                    </div>
                                    <div class="checkbox" style="color: #f59f00 !important;">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Nhớ đăng nhập
                                            <h6><a href="#">Quên mật khẩu</a></h6>
                                        </label>
                                        
                                    </div>
                                </fieldset>
                                <button type="submit" value="Đăng Nhập" class="btn btn-success btn-block" name="login">Đăng Nhập</buuton>

                            </form>
                        </div>
                    </div>  
            </div>
            
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                
            </div>
        </div><!-- /.row -->
    </div>
        
</body>

</html>
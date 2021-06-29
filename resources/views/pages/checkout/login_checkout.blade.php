@extends('layout')
@section('content')
<section>
        <div class="col-shop">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-5">
                    @if(session()->has('message'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>{{session()->get('message')}}</strong>
                        </div>
                    @endif
						<form action="{{URL::to('/login-customer')}}" method="POST" class="colorlib-form">
							{{csrf_field()}}
                            <h4>Đăng nhập tài khoản</h4>
							<div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Tài khoản</label>
                                        <input type="text" name="email_account" class="form-control" placeholder="Tài khoản">
                                    </div>
                                </div>
								<div class="col-md-6">
									<label for="password">Mật khẩu</label>
									<input type="password" name="password_account" class="form-control" placeholder="Password">
								</div>
							</div>
							<span>
								<input type="checkbox" class="checkbox"> 
								Ghi nhớ đăng nhập
							</span><br><br>
							<button type="submit" class="btn btn-success">Đăng nhập</button>
						</form>
                    </div>
					<div class="col-md-1 mt-5" >
						<div class="col-sm-1" class="colorlib-form">
							<h5 class="or" style="color: #e09200;">Hoặc</h5>
						</div>
					</div>
					<div class="col-md-6">
						
                        <form action="{{URL::to('/add-customer')}}" method="POST" class="colorlib-form">
							{{csrf_field()}}
                            <h4>Đăng ký</h4>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Họ &amp; Tên</label>
                                        <input type="text" name="customer_name" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>
								<div class="form-group">
                                    <div class="col-md-6">
                                        <label for="email">Địa chỉ email</label>
                                        <input type="email" name="customer_email" class="form-control" placeholder="Ex: youremail@domain.com">
                                    </div>
									<div class="col-md-6">
                                        <label for="password">Mật khẩu</label>
                                        <input type="password" name="customer_password" class="form-control" placeholder="Ex: youremail@domain.com">
                                    </div>

                                    <div class="col-md-6 mt-2">
                                        <label for="Phone">Số điện thoại</label>
                                        <input type="text" name="customer_phone" class="form-control" placeholder="Ex: 0123456789">
                                    </div>
                                </div>

								<button type="submit" class="btn btn-success">Đăng ký</button>
                                
                                <div class="form-group">
                                    <div class="col-md-12">

                                    </div>
                                </div>
                            </div>

                        </form>
					</div>
                </div>
            </div>
        </div>
    </section>
	
@endsection
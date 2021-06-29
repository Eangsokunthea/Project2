@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  
  <div class="panel panel-default">
    <header class="panel-heading mb-3 mt-2" style="background-color:beige;text-align:center; padding: 10px; font-size: 20px;">
      Thông tin khách hàng         
    </header>
    <a href="{{URL::to('/manage-order')}}">back</a>
    <br>
    
    <div class="table-responsive">
          @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{session()->get('message')}}</strong>
            </div>
          @endif
      <table class="table table-striped jambo_table bulk_action">
        <thead>
          <tr class="headings">
           
            <th>Tên khách hàng</th>
            <th colspan="2">Số điện thoại</th>
          
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        
          <tr>         
            <td>{{$order_by_id->customer_name}}</td>
            <td colspan="2">{{$order_by_id->customer_phone}}</td>
            <td></td>                
          </tr>
     
        </tbody>
      </table>

    </div>
   
  </div>
</div>
<br>
<div class="table-agile-info">
  
  <div class="panel panel-default">
    <header class="panel-heading mb-3 mt-2" style="background-color:beige;text-align:center; padding: 10px; font-size: 20px;">
      Thông tin vận chuyển         
    </header>
        
    <div class="table-responsive">
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
      <table class="table table-striped jambo_table bulk_action">
        <thead>
          <tr class="headings">          
            <th>Tên người vận chuyển</th>
            <th>Địa chỉ</th>
            <th colspan="2">Số điện thoại</th>
                     
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>       
          <tr>           
            <td>{{$order_by_id->shipping_name}}</td>
            <td>{{$order_by_id->shipping_address}}</td>
            <td colspan="2">{{$order_by_id->shipping_phone}}</td>  
            <td></td>
          </tr>
     
        </tbody>
      </table>

    </div>
   
  </div>
</div>


<br><br>


<div class="table-agile-info">
  
  <div class="panel panel-default">
    <header class="panel-heading mb-3 mt-2" style="background-color:beige;text-align:center; padding: 10px; font-size: 20px;">
      Liệt kê chi tiết đơn hàng         
    </header>

    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    
    <div class="table-responsive">

      <?php

          $message = Session::get('message');
          if($message){
              echo '<span class="text-alert">'.$message.'</span>';
              Session::put('message',null);
          }
      ?>

      <table class="table table-striped jambo_table bulk_action">
        <thead>
          <tr class="headings">
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th colspan="2">Tổng tiền</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>       
          <tr>
           
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$order_by_id->product_name}}</td>
            <td>{{$order_by_id->product_sales_quantity}}</td>
            <td>{{$order_by_id->product_price}}</td>
            <td colspan="2" >{{$order_by_id->product_price*$order_by_id->product_sales_quantity}}</td>
            <td></td>
                  
          </tr>
         
        </tbody>
      </table>

    </div>
   
  </div>
</div>
@endsection
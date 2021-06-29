@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
      <div class="panel panel-default">
          <header class="panel-heading mb-3 mt-2" style="background-color:beige;text-align:center; padding: 10px; font-size: 20px;">
            Liệt kê đơn hàng
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
          @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{session()->get('message')}}</strong>
            </div>
          @endif
          <table class="table table-striped jambo_table bulk_action">
            <thead>
              <tr class="headings">
                <th style="width:20px;">
                  <label class="i-checks m-b-none">
                    <input type="checkbox"><i></i>
                  </label>
                </th>
                <th>Thứ tự</th>
                <th>Tên người đặt</th>
                <th>Tổng giá tiền</th>
                <!-- <th>Ngày tháng đặt hàng</th> -->
                <th colspan="2">Tình trạng</th>
                <th>Hiển thị</th>

                <th></th>
              </tr>
            </thead>
            <tbody>
            @php 
              $i = 0;
            @endphp
              @foreach($all_order as $key => $ord)
                @php 
                  $i++;
                @endphp
             
              <tr>
                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                <td>{{$i}}</td>
                <td>{{ $ord->customer_name }}</td>
                <td colspan="2">{{ $ord->order_total }}</td>
                <!-- <td>{{ $ord->created_at }}</td> -->
                <td>
                    @if($ord->order_status==1)
                        Đơn hàng mới
                    @else 
                        Đã xử lý
                    @endif
                </td>
                
                <td colspan="2">
                  <a href="{{URL::to('/view-order/'.$ord->order_id)}}" class="active styling-edit" ui-toggle-class="">
                    <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                  <a onclick="return confirm('Bạn có chắc là muốn xóa đơn hàng không?')" href="{{URL::to('/delete-order/'.$ord->order_id)}}" class="active styling-edit" ui-toggle-class="">
                    <i class="fa fa-times text-danger text"></i>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
              <ul class="pagination pagination-sm m-t-none m-b-none">
                {!!$all_order->links()!!}
              </ul>
            </div>
        </div>
      
      </div>
  </div>
@endsection
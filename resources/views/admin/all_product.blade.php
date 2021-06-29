@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <header class="panel-heading mb-3 mt-2" style="background-color:beige;text-align:center; padding: 10px; font-size: 20px;">
          Liệt kê sản phẩm
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
                    <th>
                        <input type="checkbox" id="check-all" class="flat">
                    </th>
                    <th class="column-title">Tên sản phẩm</th>
                    <!-- <th class="column-title">Slug</th> -->
                    <th class="column-title">Số lượng</th>
                    <th class="column-title">Giá</th>
                    <th class="column-title">Hình sản phẩm</th>
                    <th class="column-title">Danh mục</th>
                    <th class="column-title">Thương hiệu</th>     
                    <th class="column-title no-link last"><span class="nobr">Hiển thị</span>
                    </th>
                    <th class="column-title"></th>
                    <th class="column-title" colspan="3">View</th>
                    <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach($all_product as $key => $pro)
                <tr class="even pointer">
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>{{ $pro->product_name }}</td>
                    <!-- <td>{{ $pro->product_slug }}</td> -->
                    <td>{{ $pro->product_quantity }}</td>
                    <td>{{ number_format($pro->product_price,0,',','.') }}đ</td>
                    <td><img src="public/uploads/product/{{ $pro->product_image }}" height="100" width="100"></td>
                    
                    <td>{{ $pro->category_name }}</td>
                    <td>{{ $pro->brand_name }}</td>

                    <td class="a-center">
                        <span class="text-ellipsis">
                          <?php
                          if($pro->product_status==0){
                            ?>
                            <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up" style="font-size: 26px; color: blue;"></span></a>
                            <?php
                            }else{
                            ?>  
                            <a href="{{URL::to('/active-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down" style="font-size: 26px; color: red;"></span></a>
                            <?php
                          }
                          ?>
                        </span>
                    </td>
                    <td class="a-center"></td>
                    <td class="a-center">
                        <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit btn btn-info" style="font-size: 13px;" ui-toggle-class="">Edit
                         
                        </a>
                        <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này ko?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active styling-edit btn btn-danger" style="font-size: 13px;" ui-toggle-class="">Delete
                         
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
                {!!$all_product->links()!!}
            </ul>
        </div>
      </div>
      
    </div>
</div>
@endsection
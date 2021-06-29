@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
  <header class="panel-heading mb-2" style="background-color:beige;text-align:center; padding: 10px; font-size: 20px;">
      Liệt kê thương hiệu sản phẩm
    </div>
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
                    <th class="column-title">Tên brand </th>
                    <th class="column-title" colspan="4">Brand Slug </th>
                    <th class="column-title"></th>
                    <th class="column-title no-link last" colspan="3"><span class="nobr">Hiển thị</span> </th>
                    <th class="column-title"></th>
                    <th class="column-title" colspan="3">View</th>
                    <th class="column-title"></th>
                   
                    <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach($all_brand_product as $key => $brand_pro)
                <tr class="even pointer">
                    <td class="a-center">
                        <label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                    </td>
                    <td class="a-center">{{ $brand_pro->brand_name }}</td>
                    <td class="a-center" colspan="4">{{ $brand_pro->brand_slug }}</td>
                    <td class="a-center"></td>
                    <td class="a-center" colspan="3">
                        <span class="text-ellipsis">
                          <?php
                          if($brand_pro->brand_status==0){
                            ?>
                            <a href="{{URL::to('/unactive-brand-product/'.$brand_pro->brand_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up" style="font-size: 26px; color: blue;"></span></a>
                            <?php
                            }else{
                            ?>  
                            <a href="{{URL::to('/active-brand-product/'.$brand_pro->brand_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down" style="font-size: 26px; color: red;"></span></a>
                            <?php
                          }
                          ?>
                        </span>
                    </td>
                    <td class="a-center"></td>
                    <td class="a-center" colspan="4">
                        <a href="{{URL::to('/edit-brand-product/'.$brand_pro->brand_id)}}" class="active styling-edit btn btn-info" style="font-size: 13px;" ui-toggle-class="">Edit                         
                        </a>
                        <a onclick="return confirm('Bạn có chắc là muốn xóa thương hiệu này ko?')" href="{{URL::to('/delete-brand-product/'.$brand_pro->brand_id)}}" class="active styling-edit btn btn-danger" style="font-size: 13px;" ui-toggle-class="">Delete
                        </a>
                    </td>
                </tr>

              @endforeach
            </tbody>
        </table>                      
    </div>
   
  </div>
</div>
@endsection
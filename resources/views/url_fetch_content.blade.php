@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop
@section('content')
    <!-- <form action=""> -->
    	<div class="box box-primary ">
            <div class="box-header with-border">
              <h3 class="box-title">URL Fetch Content</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url(config('adminlte.url_fetch_content', 'url_fetch_content')) }}" method="post" id="urlcontentform">
              {!! csrf_field() !!}
              <div class="box-body">
                <div class="form-group">                
                  <input type="url" name="txt_url" class="form-control" placeholder="URL" required>
                   </div>
                <div class="form-group">
                   <select class="form-control" name ="url_category_" id="url_category_" required>
                    <option value="NULL"> --Select Category-- </option> 
                    <?php foreach ($parameters as  $id => $val) { ?>
                    <option  value="<?php echo $id ?>"><?php echo $val ?></option><?php } ?>  
                  </select>

                </div>  

              </div>             
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          @if (session()->has('success'))
           <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> {{ trans('adminlte::adminlte.successful_alert') }}</h4>
                {{ trans('adminlte::adminlte.successful_message') }}
              </div>
          @endif
          @if (session()->has('unsuccess'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> {{ trans('adminlte::adminlte.unsuccessful_alert')}}</h4>
                {{ trans('adminlte::adminlte.unsuccessful_message') }}
              </div>         
         @endif
         @if (session()->has('missing'))
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i>{{ trans('adminlte::adminlte.missing_alert')}}</h4>
                 {{ trans('adminlte::adminlte.missing_message') }}
              </div>
        @endif
         <div class="box">
    <div class="box-header">
        <h3 class="box-title"> {{ trans('adminlte::adminlte.table_url_content_view') }}</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div id="content_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                <!-- <div class="col-sm-6">
                    <div class="dataTables_length" id="example1_length">
                        <label>Show
                            <select id="select_entry" onchange="myFunction()" name="select_entry" aria-controls="example1" class="form-control input-sm">
                                <?php foreach ($parameters as  $parameter) { ?>
                                   
                                    <option  value="<?php $parameter ?>"><?php echo $parameter ?></option>
                               <?php } ?>  
                                
                            </select> entries</label>
                    </div>
                </div> -->
                <!-- <div class="col-sm-6">
                    <div id="example1_filter" class="dataTables_filter">
                        <label>Search:
                            <input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                        </label>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="tbl_url" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" style="width: 200px;" aria-sort="ascending">
                                {{ trans('adminlte::adminlte.colunm_url') }}</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">
                                  {{ trans('adminlte::adminlte.colunm_url_category') }}</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 65px;">
                                {{ trans('adminlte::adminlte.colunm_url_date') }}</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach($url_contents as $url) { ?>
                            <tr role="row" class="odd">
                              
                                <td class="sorting_1"> <?php echo $url->url ?> </td>
                                <td class="sorting_1"> <?php echo $url->parameter ?> </td>
                                <td class="sorting_1"><?php echo carbon\Carbon::parse($url->created_at)->format('d/m/Y')?></td>                                                     
                            </tr>
                             <?php } ?>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">
                                {{ trans('adminlte::adminlte.colunm_url') }}</th>
                                <th rowspan="1" colspan="1">
                                {{ trans('adminlte::adminlte.colunm_url_category') }}</th>
                                <th rowspan="1" colspan="1">
                                {{ trans('adminlte::adminlte.colunm_url_date') }}</th>
                               
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-sm-5">
                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                     Showing 1 to <label id ="get_selected_entry"></label> of <?php echo $url_counts?> total records.</div>
                </div>
                <div class="col-sm-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        <ul class="pagination">
                            <li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li>
                            <li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
                            <li class="paginate_button next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- /.box-body -->
</div>
   <!--  </form> -->
   
@stop

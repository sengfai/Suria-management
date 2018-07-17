@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop
@section('content')
<!-- ----------------------- editor --------------------------------- -->
	<div class="box">
            <div class="box-header">
              <h3 class="box-title">View Content 
               <!--  <small>Simple and fast</small> -->
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <!-- <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                  <i class="fa fa-times"></i></button> -->
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form role="form" action="{{ url(config('adminlte.manager_new_content', 'manager_new_content')) }}" method="post" id="manager_new_content">
               {!! csrf_field() !!}   
              <div class="form-group">
                <label for="txt_title">Title</label>                
                <input type="text" id="txt_title" name="txt_title" class="form-control" placeholder="" required>
              </div> 
              <div class="form-group">
                  <label for="url_category_">Category URL</label> 
                   <select class="form-control" name ="url_category_" id="url_category_" required>
                    <option value="NULL"> --Select Category-- </option> 
                    <?php foreach ($parameters as  $id => $val) { ?>
                    <option  value="<?php echo $id ?>"><?php echo $val ?></option><?php } ?>  
                  </select>
                </div>  
                <div class="form-group">
                <label for="txt_question">Purpose Question(Optional)</label>                
                <input type="text" id="txt_question" name="txt_question" class="form-control" placeholder="" required>
              </div> 
              <label for="editor1">Content Detail</label>           
              <textarea  id="editor1" name="editor1" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;" placeholder="Place some text here"></textarea>
              </form>
            </div>
          </div>
<!-- ----------------------- end editor --------------------------------- -->
<!-- --------------- content list ------------------------- -->
<div class="box">
    <div class="box-header">
        <h3 class="box-title"> {{ trans('adminlte::adminlte.table_view_mangement_content') }}</h3>
    </div>
        <div class="box-body">
        <div id="content_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="table_manage_content" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" style="width: 30px;" aria-sort="ascending">
                                {{ trans('adminlte::adminlte.colunm_order') }}</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" style="width: 65px;" aria-sort="ascending">
                                {{ trans('adminlte::adminlte.colunm_code') }}</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" style="width: 200px;" aria-sort="ascending">
                                {{ trans('adminlte::adminlte.colunm_title') }}</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">
                                  {{ trans('adminlte::adminlte.colunm_category') }}</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 65px;">
                                {{ trans('adminlte::adminlte.colunm_action') }}</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach($content_lists as $content_list) { ?>
                            <!-- <?php $i=1; ?> -->
                            <tr role="row" class="odd">
                                <td class="sorting_1"> <?php echo $content_list->id ?> </td>
                                 <td class="sorting_1"> <?php echo $content_list->content_code ?> </td>
                                <td class="sorting_1"> <?php echo $content_list->content_title ?> </td>
                                <td class="sorting_1"> <?php echo $content_list->category ?> </td>
                                <td class="btn_view">
                                <div class="btn-group">                                 
                                  <button type="button" id="view_manage_conetnt" name="view_manage_conetnt" class="btn btn-default viewID" data-id="{{$content_list->id}}" >View</button>
                                  <button type="button" class="btn btn-default">Ignore</button>                                                            
                                                               
                                </div> 
                                </td>
                                                                                    
                            </tr>
                             <?php } ?>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                              <th rowspan="1" colspan="1">
                                {{ trans('adminlte::adminlte.colunm_order') }}</th>
                              <th rowspan="1" colspan="1">
                                {{ trans('adminlte::adminlte.colunm_code') }}</th>
                                <th rowspan="1" colspan="1">
                                {{ trans('adminlte::adminlte.colunm_title') }}</th>
                                <th rowspan="1" colspan="1">
                                {{ trans('adminlte::adminlte.colunm_category') }}</th>
                                <th rowspan="1" colspan="1">
                                {{ trans('adminlte::adminlte.colunm_action') }}</th>
                               
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
<!-- --------------- end content list ------------------------- -->

@stop

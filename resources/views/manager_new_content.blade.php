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
            <div class="box-header with-border">
              <h3 class="box-title">Content List </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" width="100%">
                <tbody><tr>
                  <th style="width: 5%">#</th>
                  <th style="width: 45%">{{ trans('adminlte::adminlte.colunm_title') }}</th>
                  <th style="width: 20%">{{ trans('adminlte::adminlte.colunm_category') }}</th>
                  <th style="width: 15%">{{ trans('adminlte::adminlte.colunm_action') }}</th>
                 <!--  <th style="width: 10%">Status</th> -->
                </tr>
                <tr>
                
                 <?php foreach($content_lists as $content_list) { ?>
                      <?php $i=1; ?>
                            <tr role="row" class="odd">
                             
                                <td > <?php echo $i++ ?> </td>
                                <td > <?php echo $content_list->content_title?> </td>
                                <td > <?php echo $content_list->category ?> </td>
                                 <td >
                                <div class="btn-group">
                                <button type="button" class="btn btn-default">View</button>
                                <button type="button" class="btn btn-default">Ignore</button>
                                </div>
                                </td>                                                   
                            </tr>
                         <?php } ?>
                  
                
                </tr>
               
              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <!-- <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul> -->
              {{ $content_lists->links() }} 
            </div>
          </div>
   <!-- --------------- end content list ------------------------- -->

@stop

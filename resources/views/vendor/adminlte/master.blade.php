<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title_prefix', config('adminlte.title_prefix', ''))
    @yield('title', config('adminlte.title', 'AdminLTE 2'))
    @yield('title_postfix', config('adminlte.title_postfix', ''))</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css') }}">
    <!-- ----------- editor css ------------ -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/skins/_all-skins.min.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" type="text/css" href="https://adminlte.io/themes/AdminLTE/bower_components/ckeditor/skins/moono-lisa/editor.css?t=HBDF">
    <link rel="stylesheet" type="text/css" href="https://adminlte.io/themes/AdminLTE/bower_components/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css">
<link rel="stylesheet" type="text/css" href="https://adminlte.io/themes/AdminLTE/bower_components/ckeditor/plugins/scayt/dialogs/dialog.css">
<link rel="stylesheet" type="text/css" href="https://adminlte.io/themes/AdminLTE/bower_components/ckeditor/plugins/tableselection/styles/tableselection.css">
<link rel="stylesheet" type="text/css" href="https://adminlte.io/themes/AdminLTE/bower_components/ckeditor/plugins/wsc/skins/moono-lisa/wsc.css">

<!-- -----------end editor css ------------ -->
    @if(config('adminlte.plugins.select2'))
        <!-- Select2 -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    @endif

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css') }}">

    @if(config('adminlte.plugins.datatables'))
        <!-- DataTables -->
         <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>

    @endif

    @yield('adminlte_css')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition @yield('body_class')">

@yield('body')

<script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- #add jquery to validate field -->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<!-- #end -->
<!-- #add Javascript library files are loaded for use in table -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
<!-- #end -->
 <!-- ----------- editor js ------------ -->
 <<!-- style>
    .cke {
        visibility: hidden;
    }
</style> -->
<script type="text/javascript" src="https://adminlte.io/themes/AdminLTE/bower_components/ckeditor/config.js?t=HBDF"></script>
<script type="text/javascript" src="https://adminlte.io/themes/AdminLTE/bower_components/ckeditor/lang/en-gb.js?t=HBDF"></script>
<script type="text/javascript" src="https://adminlte.io/themes/AdminLTE/bower_components/ckeditor/styles.js?t=HBDF"></script>
<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/dist/js/adminlte.min.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/dist/js/demo.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/bower_components/ckeditor/ckeditor.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<!-- -----------end editor js ------------ -->
@if(config('adminlte.plugins.select2'))
    <!-- Select2 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
@endif

@if(config('adminlte.plugins.datatables'))
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
@endif

@if(config('adminlte.plugins.chartjs'))
    <!-- ChartJS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
@endif

@yield('adminlte_js')
<!-- #add jquery to validate field -->

<script>

     $(document).ready(function() {
    $('#tbl_url').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    // .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
               
            } );
        }
    } );
} );

  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    // $('.textarea').wysihtml5()
  });
    
   // can click button to view
    $(document).ready(function() {
    var table = $('#table_manage_content').DataTable();
     
    $('.viewID').on('click',function () {
        id = $(this).attr('data-id');
        getContent(id);
        // var data = table.row(this).data();
        // //alert( 'You clicked on '+data[0]+'\'s row' );
        // document.getElementById("txt_title").value = data[0];

    } );
} );

    function getContent(id) {

        $.get('{{url('getcontent')}}',{id:id},function(res){
            $('#txt_title').val(res.content_title);
            $('#url_category_').val(res.category_id);
            console.log(res);
        })
    }

 // end #can click button to view 

</script>
<!-- #end -->

</body>
</html>

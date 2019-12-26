@extends('master')
@section('main')
        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">Quản trị viên</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Quản trị viên</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                
                 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" id="div-table2">
                                <h4 class="header-title"></h4>
                                <p class="text-muted font-13 mb-4">
                                    
                                </p>
                                <div class="table-responsive" id="table-goicredit" >
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên đăng nhập</th>
                                            <th>Họ tên</th>
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        @foreach($dsQTV as $QTV)
                                        <tr>
                                            <td>{{$QTV->id}}</td>
                                            <td>{{$QTV->ten_dang_nhap}}</td>
                                            <td>{{$QTV->ho_ten}}</td>
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
        </div>
    </div>
    
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
@endsection
@section('sweetbox')
     <script type="text/javascript">
            !function(t){
                "use strict";
                var e=function(){};
                e.prototype.init=function(){
                    t("#sa-warning").click(function(){
                        Swal.fire({
                            title:"Are you sure?",
                            text:"You won't be able to revert this!",
                            type:"warning",

                            showCancelButton:!0,
                            confirmButtonColor:"#3085d6",
                            cancelButtonColor:"#d33",
                            confirmButtonText:"Yes, delete it!"
                        }).then(function(t){
                            t.value&&Swal.fire("Deleted!","Your file has been deleted.","success")
                        })
                })
            },
            t.SweetAlert=new e,
            t.SweetAlert.Constructor=e}(window.jQuery),
            function(t){
                "use strict";
                window.jQuery.SweetAlert.init()}();
            $(document).on('click','.xoa-goi-credit',function(e){
                e.preventDefault();
                var id=$(this).attr('id');
                 Swal.fire({
                            title:"Are you sure?",
                            text:"You won't be able to revert this!",
                            type:"warning",

                            showCancelButton:!0,
                            confirmButtonColor:"#3085d6",
                            cancelButtonColor:"#d33",
                            confirmButtonText:"Yes, delete it!"
                        }).then(function(t){
                            if(t.value){
                                $.ajax({
                                    url:"{{route('xoa.goi-credit')}}",
                                    method:"get",
                                    data:{id:id},
                                    success:function(data)
                                    {

                                        Swal.fire("Deleted!","Your file has been deleted.","success");
                                        $('#div-table2').load("{{route('trang-chu.goi-credit')}} #table-goicredit");
                                        
                                    }
                                })
                           
                                    }
                        })
            })

        </script>
    @endsection
        
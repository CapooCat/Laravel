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
                                    <li class="breadcrumb-item active">Danh sách người chơi</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Danh sách người chơi</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                
                 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" id="div-table1">
                                <h4 class="header-title"></h4>
                                <p class="text-muted font-13 mb-4">
                                    
                                </p>
                                <div class="table-responsive" id="table-nguoichoi" >
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên đăng nhập</th>
                                            <th>Mật khẩu</th>
                                            <th>Email</th>
                                            <th>Điểm cao nhất</th>
                                            <th>Credit</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        @foreach($dsNguoiChoi as $nguoiChoi)
                                        <tr>
                                            <td>{{$nguoiChoi->id}}</td>
                                            <td>{{$nguoiChoi->ten_dang_nhap}}</td>
                                            <td>{{$nguoiChoi->mat_khau}}</td>
                                            <td>{{$nguoiChoi->email}}</td>
                                            <td>{{$nguoiChoi->diem_cao_nhat}}</td>
                                            <td>{{$nguoiChoi->credit}}</td>
                                            <td>
                                                <a href="{{route('trang-chu.sua-nguoi-choi',$nguoiChoi->id)}}" type="button" class="btn btn-purple waves-effect waves-light" "><i class="mdi mdi-pencil-plus"></i></a></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-danger waves-effect waves-light xoa-nguoi-choi" id="{{$nguoiChoi->id}}"><i class=" mdi mdi-trash-can-outline"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-3"></div>
                                    <div class="col-3"></div>
                                    <div class="col-3">
                                        <div class="card-box" style="text-align: right">
                                            <h4 class="header-title">Thêm người chơi</h4>
                                                <a href="{{route('trang-chu.them-nguoi-choi')}}" type="button"class="btn btn-success">Thêm</a>
                                            </div> <!-- end card-box-->
                                        </div> <!-- end col-->
                                    </div>


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
@section('js')
<!-- third party js -->
        <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
        <!-- third party js ends -->
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
            $(document).on('click','.xoa-nguoi-choi',function(e){
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
                                    url:"{{route('xoa.nguoi-choi')}}",
                                    method:"get",
                                    data:{id:id},
                                    success:function(data)
                                    {

                                        Swal.fire("Deleted!","Your file has been deleted.","success");
                                        $('#div-table1').load("{{route('trang-chu.ql-nguoi-choi')}} #table-nguoichoi");
                                        
                                    }
                                })
                           
                                    }
                        })
            })

        </script>
    @endsection
        
       
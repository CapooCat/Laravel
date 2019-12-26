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
                                    <li class="breadcrumb-item active">Lĩnh vực</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Danh sách lĩnh vực</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title"></h4>
                            <p class="sub-header">
                               
                            </p>

                            <div class="table-responsive" id="div-table" >
                                <table class="table mb-0" id="table-linhvuc">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên lĩnh vực</th>
                                        <th></th>
                                        <th></th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dsLinhVuc as $linhVuc)
                                    <tr>
                                        <th scope="row">{{$linhVuc->id}}</th>
                                        <td>{{$linhVuc->ten_linh_vuc}}
                                        </td>
                                        <th>
                                        <a href="{{route('trang-chu.sua',$linhVuc->id)}}" type="button" class="btn btn-purple waves-effect waves-light" "><i class="mdi mdi-pencil-plus"></i></a>
                                        <a href="" type="button" class="btn btn-danger waves-effect waves-light xoa-linh-vuc" id="{{$linhVuc->id}}" ><i class=" mdi mdi-trash-can-outline"></i></a>
                                    </th>


                                        
                                    </tr>
                                    
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->

                    <!--Them moi-->
                    <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title">Thêm mới lĩnh vực</h4>

                            
                            @if(session('thongbao'))
                               <div class="alert alert-danger">
                                {{session('thongbao')}}
                               </div>
                               @endif
                               @if(session('success'))
                               <div class="alert alert-success">
                                {{session('success')}}
                               </div>
                               @endif
                                @if(Session::has('error'))
                               <div class="alert alert-danger">
                                {{Session::get('error')}}
                               </div>
                               @endif
                            <form action="{{route('trang-chu.them-linh-vuc')}}" method="POST">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="fullname">Tên lĩnh vực   :</label>
                                    <input type="text" class="form-control" name="ten_linh_vuc" id="ten_linh_vuc">
                                </div>

                                
                                 <div class="form-group mb-0">
                                    <input type="submit" class="btn btn-success" value="Thêm">
                                </div>

                            
                               

                            

                            </form>
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->
                </div>

                
            </div> <!-- end container -->
        </div>
    </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <!-- Footer Start -->
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
            $(document).on('click','.xoa-linh-vuc',function(e){
                e.preventDefault();
                var id=$(this).attr('id');
                 Swal.fire({
                            title:"Bạn có muốn xóa ?",
                            text:"Những lĩnh vực bị xóa sẽ đưa vào thùng rác",
                            type:"warning",

                            showCancelButton:!0,
                            confirmButtonColor:"#3085d6",
                            cancelButtonColor:"#d33",
                            confirmButtonText:"Yes, delete it!"
                        }).then(function(t){
                            if(t.value){
                                $.ajax({
                                    url:"{{route('trang-chu.xoa-ajax')}}",
                                    method:"get",
                                    data:{id:id},
                                    success:function(data)
                                    {

                                        Swal.fire("Đã xóa","Xóa lĩnh vực thành công!","success");
                                        $('#div-table').load("{{route('trang-chu.home')}} #table-linhvuc");
                                        
                                    }
                                })
                           
                                    }
                        })
            })

        </script>
    @endsection
        
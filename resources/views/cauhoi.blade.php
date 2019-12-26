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
                                    <li class="breadcrumb-item active">
                                        @if(isset($titleLinhVuc))
                                    {{$titleLinhVuc['ten_linh_vuc']}}
                                        @endif
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">
                                        @if(isset($titleLinhVuc))
                                    {{$titleLinhVuc['ten_linh_vuc']}}
                                        @endif
                            </h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 
                                         <div class="container">
                                        <span class="choose"></span>
                                      
                                          <div class="dropdownn">
                                            <div class="select">
                                              <span>Chọn lĩnh vực</span>
                                              <i class="fa fa-chevron-left"></i>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown-menuu">
                                                @foreach($dsLinhVuc as $linhVuc)
                                              <a href="{{route('trang-chu.chon-linh-vuc',$linhVuc->id)}}" style="color: black"><li>{{$linhVuc->ten_linh_vuc}}</li></a>
                                                @endforeach
                                            </ul>
                                          </div>
                                      
                                      <span class="msg"></span>
                                    </div>
                
                 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title"></h4>
                                <p class="text-muted font-13 mb-4">
                                    
                                    <code></code>
                                </p>
                                @if(session('thongbaosuccess'))
                                <div class="alert alert-success">{{session('thongbaosuccess')}}</div>
                                @endif
                                @if(session('thongbaoloi'))
                                <div class="alert alert-danger">{{session('thongbaoloi')}}</div>
                                @endif
                                <table id="basic-datatable" class="table dt-responsive nowrap" id="table-cauhoi">
                                    @if(isset($dsCauHoi))
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nội dung</th>
                                            <th>Phương án A</th>
                                            <th>Phương án B</th>
                                            <th>Phương án C</th>
                                            <th>Phương án D</th>
                                            <th>Đáp án</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        @foreach($dsCauHoi as $cauHoi)
                                        <tr>
                                            <td>{{$cauHoi->id}}</td>
                                            <td>{{$cauHoi->noi_dung}}</td>
                                            <td>{{$cauHoi->phuong_an_a}}</td>
                                            <td>{{$cauHoi->phuong_an_b}}</td>
                                            <td>{{$cauHoi->phuong_an_c}}</td>
                                            <td>{{$cauHoi->phuong_an_d}}</td>
                                            <td>{{$cauHoi->dap_an}}</td>
                                            <td>
                                                <a href="{{route('trang-chu.sua-cau-hoi',$cauHoi->id)}}" type="button" class="btn btn-purple waves-effect waves-light" "><i class="mdi mdi-pencil-plus"></i></a></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-danger waves-effect waves-light xoa-cau-hoi" id="{{$cauHoi->id}}"><i class=" mdi mdi-trash-can-outline"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    @endif
                                </table>
                                @if(isset($dsCauHoi))
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-3"></div>
                                    <div class="col-3"></div>
                                    <div class="col-3">
                                        <div class="card-box" style="text-align: right">
                                            <h4 class="header-title">Thêm câu hỏi</h4>
                                                <a href="{{route('trang-chu.them-cau-hoi',$titleLinhVuc['id'])}}" type="button"class="btn btn-success">Thêm</a>
                                            </div> <!-- end card-box-->
                                        </div> <!-- end col-->
                                    </div>
                                @endif

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
            $(document).on('click','.xoa-cau-hoi',function(e){
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
                                    url:"{{route('trang-chu.xoa-cau-hoi')}}",
                                    method:"get",
                                    data:{id:id},
                                    success:function(data)
                                    {

                                        Swal.fire("Deleted!","Your file has been deleted.","success");
                                       location.reload();
                                        
                                    }
                                })
                           
                                    }
                        })
            })

        </script>
    @endsection
        
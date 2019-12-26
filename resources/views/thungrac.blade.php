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
                                    <li class="breadcrumb-item active">Thùng rác</li>
                                </ol>
                            </div>
                            <h4 class="page-title"> @if(session('linhvuc'))
                                                    Lĩnh vực
                                                    @elseif(session('cauhoi'))
                                                    Câu hỏi
                                                    @elseif(session('nguoichoi'))
                                                    Người chơi
                                                    @elseif(session('goicredit'))
                                                    Gói Credit
                                                    @else
                                                    
                                                    @endif

                            </h4>
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
                                 <div class="container">
                                        <span class="choose"></span>
                                      
                                          <div class="dropdownn">
                                            <div class="select">
                                              <span>Chọn bảng</span>
                                              <i class="fa fa-chevron-left"></i>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown-menuu" name="cbb">
                                              <a href="{{route('thung-rac-ch')}}" style="color: black" ><li>Câu hỏi</li></a>
                                              <a href="{{route('thung-rac-lv')}}" style="color: black"><li>Lĩnh vực</li></a>
                                              <a href="{{route('thung-rac-nc')}}" style="color: black"><li >Người chơi</li></a>
                                              <a href="{{route('thung-rac-gc')}}" style="color: black"><li >Gói credit</li></a>
                                            </ul>
                                          </div>
                                      
                                      <span class="msg"></span>
                                    </div>
                                  
                                <div class="table-responsive" id="table-goicredit" >
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                     @if(session('linhvuc'))
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
                                            <td>{{$linhVuc->id}}</td>
                                            <td>{{$linhVuc->ten_linh_vuc}}</td>
                                            <td></td>
                                            <td>
                                                <a href="{{route('thung-rac.restoreLV',$linhVuc->id)}}" type="button" class="btn btn-purple waves-effect waves-light" "><i class="fas fa-undo"></i></a>
                                            
                                                <a href="{{route('thung-rac.xoaLV',$linhVuc->id)}}" type="button" class="btn btn-danger waves-effect waves-light" id=""><i class=" mdi mdi-trash-can-outline"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach  
                                    </tbody>
                                    @endif

                                    @if(session('cauhoi'))
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nội dung</th>
                                            <th>Lĩnh vực id</th>
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
                                            <td>{{$cauHoi->linh_vuc_id}}</td>
                                            <td>{{$cauHoi->phuong_an_a}}</td>
                                            <td>{{$cauHoi->phuong_an_b}}</td>
                                            <td>{{$cauHoi->phuong_an_c}}</td>
                                            <td>{{$cauHoi->phuong_an_d}}</td>
                                            <td>{{$cauHoi->dap_an}}</td>
                                            <td></td>
                                            <td>
                                                <a href="{{route('thung-rac.restoreCH',$cauHoi->id)}}" type="button" class="btn btn-purple waves-effect waves-light" "><i class="fas fa-undo"></i></a>
                                            
                                                <a href="{{route('thung-rac.xoaLV',$cauHoi->id)}}" type="button" class="btn btn-danger waves-effect waves-light" id=""><i class=" mdi mdi-trash-can-outline"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach  
                                    </tbody>
                                    @endif

                                     @if(session('nguoichoi'))
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên đăng nhập</th>
                                            <th>Mật khẩu</th>
                                            <th>Email</th>
                                            <th>Hình đại diện</th>
                                            <th>Điểm cao nhất</th>
                                            <th>Credit</th>
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
                                            <td>{{$nguoiChoi->hinh_dai_dien}}</td>
                                            <td>{{$nguoiChoi->diem_cao_nhat}}</td>
                                            <td>{{$nguoiChoi->credit}}</td>
                                            <td></td>
                                            <td>
                                                <a href="{{route('thung-rac.restoreNC',$nguoiChoi->id)}}" type="button" class="btn btn-purple waves-effect waves-light" "><i class="fas fa-undo"></i></a>
                                            
                                                <a href="{{route('thung-rac.xoaNC',$nguoiChoi->id)}}" type="button" class="btn btn-danger waves-effect waves-light" id=""><i class=" mdi mdi-trash-can-outline"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach  
                                    </tbody>
                                    @endif

                                    @if(session('goicredit'))
                                     <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên gói</th>
                                            <th>Credit</th>
                                            <th>Số tiền</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        @foreach($dsGoiCredit as $goiCredit)
                                        <tr>
                                            <td>{{$dsGoiCredit->id}}</td>
                                            <td>{{$dsGoiCredit->ten_goi}}</td>
                                            <td>{{$dsGoiCredit->credit}}</td>
                                            <td>{{$dsGoiCredit->so_tien}}</td>
                                            <td></td>
                                            

                                            <td>
                                                <a href="{{route('thung-rac.restoreGC',$dsGoiCredit->id)}}" type="button" class="btn btn-purple waves-effect waves-light" "><i class="fas fa-undo"></i></a>
                                            
                                                <a href="{{route('thung-rac.xoaNC',$dsGoiCredit->id)}}" type="button" class="btn btn-danger waves-effect waves-light" id=""><i class=" mdi mdi-trash-can-outline"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                       @endif
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

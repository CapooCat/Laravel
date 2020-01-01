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
                                    <li class="breadcrumb-item active">Admin</li>
                                </ol>
                            </div>
                        </div>
                        <h4 class="page-title">Admin's</h4>
                    </div>
                </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <img src="{{asset('/uploads/avatars/huyduc.jpg')}}" style="width: 150px;height: 150px;float: left;border-radius: 50%;margin-right: 25px">
                                    <form method="post" action="" enctype="multipart/form-data">
                                        {!! csrf_field() !!}
                                        <input type="file" name="avatar">
                                        <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">Upload hình ảnh</button>
                                    </form>
                                </div>
                            </div>
                        </div>
    
                <!-- end page title --> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title"></h4>
                                @if(session('thongbaosuccess'))
                                <div class="alert alert-success">{{session('thongbaosuccess')}}</div>
                                @endif

                                <form method="post" action="" >
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        
                                        <input type="hidden" class="form-control" name="id" value="{{$QTV->id}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Họ tên</label>
                                        <input type="text" class="form-control" name="ho_ten" value="{{$QTV->ho_ten}}">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label >Tên đăng nhập</label>
                                        <input type="text" class="form-control" name="ten_dang_nhap" value="{{$QTV->ten_dang_nhap}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Mật khẩu</label>
                                        <input type="text" class="form-control" name="phuong_an_b" value="">
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Sửa thông tin</button>
                                </form>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>

                  
                    
        

                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
@endsection
        
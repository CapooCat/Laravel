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
                                    <li class="breadcrumb-item active">{{$dsLinhVuc->ten_linh_vuc}}</li>
                                </ol>
                            </div>
                            <h4 class="page-title">{{$dsLinhVuc->ten_linh_vuc}}</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Thêm câu hỏi lĩnh vực:  {{$dsLinhVuc->ten_linh_vuc}}</h4>
                                 @if(session('thongbaoloi'))
                               <div class="alert alert-danger">
                                {{session('thongbaoloi')}}
                                @endif
                               </div>
                               @if(session('thongbaosuccess'))
                               <div class="alert alert-success">
                                {{session('thongbaosuccess')}}
                               </div>
                               @endif
                                <form method="POST" action="{{route('trang-chu.them-cau-hoi-lv')}}">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <input type="text" class="form-control" name="noi_dung" required="">
                                        
                                    </div>
                                    <div class="form-group">
                                        
                                        <input type="hidden" class="form-control" name="linh_vuc_id" value="{{$dsLinhVuc->id}}" required="">
                                    </div>
                                    <div class="form-group">
                                        <label >Phương án A</label>
                                        <input type="text" class="form-control" name="phuong_an_a" required="">
                                    </div>
                                    <div class="form-group">
                                        <label >Phương án B</label>
                                        <input type="text" class="form-control" name="phuong_an_b" required="">
                                    </div>
                                    <div class="form-group">
                                        <label >Phương án C</label>
                                        <input type="text" class="form-control" name="phuong_an_c" required="">
                                    </div>
                                    <div class="form-group">
                                        <label >Phương án D</label>
                                        <input type="text" class="form-control" name="phuong_an_d" required="">
                                    </div>
                                    <div class="form-group">
                                        <label >Đáp án</label>
                                        <input type="text" class="form-control" name="dap_an" required="">
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm câu hỏi</button>
                                    <a href="{{route('trang-chu.chon-linh-vuc',$dsLinhVuc->id)}}" class="btn btn-primary waves-effect waves-light">Quản lý câu hỏi</a>
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
       
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
                                @if(session('thongbaosuccess'))
                                <div class="alert alert-success">{{session('thongbaosuccess')}}</div>
                                @endif
                                <form method="post" action="{{route('trang-chu.update-cau-hoi')}}">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        
                                        <input type="hidden" class="form-control" name="id" value="{{$dsCauHoi->id}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <input type="text" class="form-control" name="noi_dung" value="{{$dsCauHoi->noi_dung}}">
                                        
                                    </div>
                                    <div class="form-group">
                                        
                                        <input type="hidden" class="form-control" name="linh_vuc_id" value="{{$dsLinhVuc->id}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Phương án A</label>
                                        <input type="text" class="form-control" name="phuong_an_a" value="{{$dsCauHoi->phuong_an_a}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Phương án B</label>
                                        <input type="text" class="form-control" name="phuong_an_b" value="{{$dsCauHoi->phuong_an_b}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Phương án C</label>
                                        <input type="text" class="form-control" name="phuong_an_c" value="{{$dsCauHoi->phuong_an_c}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Phương án D</label>
                                        <input type="text" class="form-control" name="phuong_an_d" value="{{$dsCauHoi->phuong_an_d}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Đáp án</label>
                                        <input type="text" class="form-control" name="dap_an" value="{{$dsCauHoi->dap_an}}">
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Sửa câu hỏi</button>
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
        
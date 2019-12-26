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
                                    <li class="breadcrumb-item active">Sửa</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Sửa gói credit</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title"></h4>

                                <form method="POST" action="{{route('goi-credit.update-sua')}}">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        
                                        <input type="hidden" class="form-control" name="id" value="{{$dsGoiCredit->id}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Tên gói</label>
                                        <input type="text" class="form-control" name="ten_goi" value="{{$dsGoiCredit->ten_goi}}">
                                        
                                    </div>
                                    
                                    <div class="form-group">
                                        <label >Credit</label>
                                        <input type="text" class="form-control" name="credit" value="{{$dsGoiCredit->credit}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Số tiền</label>
                                        <input type="text" class="form-control" name="so_tien" value="{{$dsGoiCredit->so_tien}}">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Sửa</button>
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
        
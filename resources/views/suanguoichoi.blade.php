    @extends('master')
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
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
                            <h4 class="page-title">Sửa người chơi</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title"></h4>

                                <form method="POST" action="{{route('trang-chu.update-nguoi-choi')}}">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        
                                        <input type="hidden" class="form-control" name="id" value="{{$dsNguoiChoi->id}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Tên đăng nhập</label>
                                        <input type="text" class="form-control" name="ten_dang_nhap" value="{{$dsNguoiChoi->ten_dang_nhap}}">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label >Email</label>
                                        <input type="text" class="form-control" name="email" value="{{$dsNguoiChoi->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Điểm cao nhất</label>
                                        <input type="text" class="form-control" name="diem_cao_nhat" value="{{$dsNguoiChoi->diem_cao_nhat}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Credit</label>
                                        <input type="text" class="form-control" name="credit" value="{{$dsNguoiChoi->credit}}">
                                    </div>
                    
                                    
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Sửa người chơi</button>
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




        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js')}}"></script>

        <!-- Third Party js-->
        <script src="{{ asset('assets/libs/peity/jquery.peity.min.js')}}"></script>
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{ asset('assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{ asset('assets/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js')}}"></script>

        <!-- Dashboard init -->
        <script src="{{ asset('assets/js/pages/dashboard-1.init.js')}}"></script>

        <!-- App js-->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        <!-- Sweet Alerts js -->
        <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('http://code.jquery.com/jquery-1.12.0.min.js')}}"></script>
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
                )}
            },
            t.SweetAlert=new e,
            t.SweetAlert.Constructor=e}(window.jQuery),
            function(t){
                "use strict";
                window.jQuery.SweetAlert.init()}();
        </script>
    </body>
</html>
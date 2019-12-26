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
                                    <li class="breadcrumb-item active">Lịch sử mua credit</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Lịch sử mua credit</h4>
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
                                            <th>Tên người chơi</th>
                                            <th>Gói credit id</th>
                                            <th>Credit</th>
                                            <th>Số tiền</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        @foreach($dsNguoiChoi as $dsNguoiChoi)
                                        <tr>
                                            <td>{{$dsNguoiChoi->id}}</td>
                                            <td>{{$dsNguoiChoi->ten_dang_nhap}}</td>
                                            <td>{{$dsNguoiChoi->goi_credit_id}}</td>
                                            <td>{{$dsNguoiChoi->credit}}</td>
                                            <td>{{$dsNguoiChoi->so_tien}}</td>
                                            <td></td>
                                            

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

        
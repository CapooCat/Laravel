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
                                    <li class="breadcrumb-item active">Lượt chơi của user</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Lượt chơi của user</h4>
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
                                            <th>Câu hỏi</th>
                                            <th>Phương án</th>
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        @foreach($dsCTLuotChoi as $CTLuotChoi)
                                        <tr>
                                            <td>{{$CTLuotChoi->id}}</td>
                                            <td>{{$CTLuotChoi->ten_dang_nhap}}</td>
                                            <td>{{$CTLuotChoi->noi_dung}}</td>
                                            <td>{{$CTLuotChoi->phuong_an}}</td>
                                            

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

        
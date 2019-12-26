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
                                    <li class="breadcrumb-item active">Sửa lĩnh vực</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Sửa lĩnh vực</h4>
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

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên lĩnh vực</th>
                                        <th></th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dsLinhVuc as $linhVuc)
                                    <tr>
                                        <th scope="row">{{$linhVuc->id}}</th>
                                        <td>{{$linhVuc->ten_linh_vuc}}
                                        </td>
                                        

                                        
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
                            <h4 class="header-title">Sửa lĩnh vực</h4>

                           
                              
                            <form action="{{ route('trang-chu.update')}}" method="POST">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="fullname">Tên lĩnh vực   :</label>
                                    <input type="hidden" name="linh_vuc_id" value="{{$linhVuc_sua['id']}}">
                                    <input type="text" class="form-control" name="ten_linh_vuc" id="ten_linh_vuc" value="{{$linhVuc_sua['ten_linh_vuc']}}">
                                </div>

                                
                                 <div class="form-group mb-0">
                                    <input type="submit" class="btn btn-success" value="Sửa">
                                </div>

                            
                               

                            

                            </form>
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->
                </div>

                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        @endsection
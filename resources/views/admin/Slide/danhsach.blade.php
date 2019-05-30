
@extends('admin.layouts.index')
@csrf
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Slide
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                 <div>
                        
                            @if(session('ThongBao'))
                            <div class="alert alert-success">
                                {{session('ThongBao')}}
                            </div>
                            @endif
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Nội Dung</th>
                                <th>Hình</th>
                                <th>Link</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($slide as $sl)
                            <tr class="odd gradeX" align="center">
                            <td>{{$sl->id}}</td>
                            <td>{{$sl->Ten}}</td>
                            <td>{{$sl->NoiDung}}</td>
                            <td>
                                <img width="300px" src=" upload/slide/{{$sl->Hinh}}">
                            </td>
                            <td>{{$sl->link}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/slide/xoa/{{$sl->id}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/slide/sua/{{$sl->id}}">Edit</a></td>
                            @endforeach
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection
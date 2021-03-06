@extends('admin.layouts.index')
@csrf
@section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể Loại
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                            @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                {{$err}}<br>
                                @endforeach
                              </div>
                            @endif
                            
                            @if(session('ThongBao'))
                            <div class="alert alert-success">
                                {{session('ThongBao')}}
                            </div>
                            @endif
                 
                        <form action="admin/theloai/them" method="post">
                          <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group"> 
                                <label>Tên Loai Tin</label>
                                <input class="form-control" name="Ten" placeholder="Nhập Tên Thể loai" />
                            </div>
                          
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm Mới</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
  @endsection

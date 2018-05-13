@extends('admin.layouts.app')
@section('style')
  <link href="https://cdn.bootcss.com/datatables/1.10.12/css/dataTables.bootstrap.min.css"
        rel="stylesheet">
@endsection
@section('content')
  <section class="content">
    <div class="container-fluid">


      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="card">
            <div class="header">
              <h2>
                角色列表
              </h2>
              <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                  <a href="{{route('roles.create')}}"
                     role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">person_add</i>

                  </a>

                </li>
              </ul>
            </div>
            <div class="body">
              <div class="table-responsive">
                <div id="DataTables_Table_1_wrapper"
                     class="dataTables_wrapper form-inline dt-bootstrap">


                  <table
                      class="table table-bordered table-striped table-hover dataTable js-exportable"
                      id="DataTables_Table_1" role="grid"
                      aria-describedby="DataTables_Table_1_info">
                    <thead>
                    <tr>
                      <th>编号</th>
                      <th>角色</th>
                      <th>描述</th>
                      <th>人数</th>
                      <th>权限</th>
                      <th>操作</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                      <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->display_name}}</td>
                        <td>{{$role->description}}</td>
                        <td>{{$role->users_count}}</td>
                        <td>{{$role->permissions_count}}</td>
                        <td>
                          <button class="btn btn-warning">
                            <i class="material-icons">edit</i>

                          </button>
                          <button class="btn btn-danger">
                            <i class="material-icons">delete</i>
                          </button>
                        </td>


                      </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>编号</th>
                      <th>角色</th>
                      <th>描述</th>
                      <th>人数</th>
                      <th>权限</th>
                      <th>操作</th>

                    </tr>

                    </tfoot>

                  </table>
                  {{$roles->links()}}



                </div>
              </div>
            </div>
          </div>

        </div>

      </div>


    </div>
  </section>



@endsection
@section('js')

  {{--<script src="https://cdn.bootcss.com/datatables/1.10.12/js/jquery.dataTables.min.js"></script>--}}
  {{--<script src="https://cdn.bootcss.com/jszip/3.1.5/jszip.min.js"></script>--}}
  {{--<script src="{{asset('/js/admin/plugins/jquery-datatables/buttons.html5.min.js')}}"></script>--}}
  {{--<script src="{{asset('/js/admin/plugins/jquery-datatables/buttons.print.min.js')}}"></script>--}}
  {{--<script src="{{asset('/js/admin/plugins/jquery-datatables/dataTables.buttons.min.js')}}"></script>--}}
  {{--<script src="{{asset('/js/admin/plugins/jquery-datatables/pdfmake.min.js')}}"></script>--}}

  {{--<script>--}}
  {{--$(function () {--}}


  {{--var data = {!! $users !!}--}}
  {{--console.log(data.data)--}}

  {{--//Exportable table--}}
  {{--$('.js-exportable').DataTable({--}}
  {{--// dom: 'Bfrtip',--}}
  {{--// // data: data.data,--}}
  {{--responsive: true,--}}
  {{--buttons: [--}}
  {{--'excel', 'print', 'pdf'--}}
  {{--],--}}
  {{--paging: false,--}}
  {{--// columns: [--}}
  {{--//     {data: 'id'},--}}
  {{--//     {data: 'name'},--}}
  {{--//     {data: 'email'},--}}
  {{--//     {data: 'created_at'},--}}
  {{--// ]--}}
  {{--});--}}
  {{--});--}}
  {{--</script>--}}

  <script>
      function dele(id) {

          swal({
              title: '确定删除该用户么?',
              text: 'You will not be able to recover this data!',
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#DD6B55',
              confirmButtonText: 'Yes, delete it!',
              closeOnConfirm: false,
              showLoaderOnConfirm: true,
              html: false
          }, function () {
              $.post("{{url('/admin/users/')}}/" + id, {
                  '_method': 'delete',
                  '_token': "{{csrf_token()}}"
              }, function (data) {
                  if (data.status == 1) {
                      swal({
                          title: 'Deleted!',
                          text: 'User  has been deleted.',
                          type: 'success',
                          confirmButtonText: 'OK',
                          closeOnConfirm: true
                      })
                  } else {
                      swal({
                          title: 'fail!',
                          text: 'User  has been deleted.',
                          type: 'error',
                          confirmButtonText: 'OK',
                          closeOnConfirm: true
                      })
                  }


              });


          })

      }
  </script>
@endsection
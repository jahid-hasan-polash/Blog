@extends('layouts.default')
    @section('content')
        @include('includes.alert')
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            {!! $title !!}
            <!-- <small>advanced tables</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{!! route('demo.index') !!}">All Demos</a></li>
            <!-- <li class="active">Data tables</li> -->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
          

              <div class="box">
                <!-- <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                @if(count($demos))
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Country</th>                 
                        <th>Status</th>
                        <th>Action</th>
                        <th>#</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($demos as $demo)
                      <tr>
                          <td>{!! $demo->name !!}</td>
                          <td>{!! $demo->email !!}</td>
                          <td></td>
                          <td></td>             
                          <td></td>

                          <td><a href="{!! URL::route('demo.edit', array('id' => $demo->id)) !!}" class="btn btn-success btn-xs btn-archive">Edit</a>
                          </td>
                          <td><a class="btn btn-info btn-xs btn-archive Editbtn" href="{!! URL::route('demo.show', array('id' => $demo->id)) !!}"  style="margin-right: 3px;">Show</a>
                    
                          <a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $demo->id !!}">Delete</a>
                          </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                @else
                    No Data Found
                @endif
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->


    <!-- Modal for delete confirm -->
    <div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                </div>
                <div class="modal-body">
                    Are you sure to delete?
                </div>
                <div class="modal-footer">
                    {!! Form::open(array('route' => array('demo.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) !!}
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    {!! Form::submit('Yes, Delete', array('class' => 'btn btn-success')) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


@stop

@section('style')

  {!! Html::style('plugins/datatables/dataTables.bootstrap.css') !!}

@endsection

@section('script')
    {!! Html::script('plugins/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('plugins/datatables/dataTables.bootstrap.min.js') !!}

<script>

        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });

        $(document).on("click", ".deleteBtn", function() {
                var deleteId = $(this).attr('deleteId');
                var url = "<?php echo URL::route('demo.index'); ?>";
                $(".deleteForm").attr("action", url+'/'+deleteId);
        });
  
</script>
@endsection
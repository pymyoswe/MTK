@extends('admin.layouts.dashboard')

@section('page_heading','Unit measure Lists')

@section('section')
    <!-- /.row -->
    <div class="col-sm-12">
        @if(Session::has('msg'))
            <div class="alert alert-success">
                <strong>{{Session::get('msg')}}</strong>
            </div>
        @endif

        @if(Session::has('updateInfo'))
            <div class="alert alert-success">
                <strong>{{Session::get('updateInfo')}}</strong>
            </div>
        @endif
        <div class="row">
            <table class="jTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($units as $unit)
                    <tr>
                        <td>{{$unit->id}}</td>
                        <td class="text-center">
                            {{$unit->name}}
                            <div class="btn-group pull-right">
                                <button data-toggle="dropdown" class="btn btn-primary"><span class="fa fa-edit"></span></button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <form role="form" action="{{route('edit_measurement')}}" method="post">
                                            {{csrf_field()}}
                                            <div class="input-group">
                                                <input type="text" name="name" value="{{$unit->name}}">
                                            </div>
                                            <div class="input-group">
                                                <input type="hidden" name="id" value="{{$unit->id}}">
                                            </div>
                                            <div class="input-group">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>

                        </td>
                        <td class="center"><button class="btn btn-danger"  data-toggle="modal" data-target="#{{$unit->id}}"><span class="fa fa-trash"></span></button></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Delete</th>
                </tr>
                </tfoot>
            </table>

        @foreach($units as $unit)
            <!-- Modal -->
                <div id="{{$unit->id}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Confirm products delete!</h4>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure want to delete?</p>
                            </div>
                            <div class="modal-footer">
                                <a href="{{route('delete_measurement',['id'=>$unit->id])}}"  class="btn btn-default">Yes</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection





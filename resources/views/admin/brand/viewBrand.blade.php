@extends('admin.layouts.dashboard')

@section('page_heading','Brand Lists')

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
                @foreach($brands as $brand)
                    <tr>
                        <td>{{$brand->id}}</td>
                        <td class="text-center">
                            {{$brand->name}}
                            <div class="btn-group pull-right">
                                <button data-toggle="dropdown" class="btn btn-primary"><span class="fa fa-edit"></span></button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <form role="form" action="{{route('edit_brand')}}" method="post">
                                            {{csrf_field()}}
                                            <div class="input-group">
                                                <input type="text" name="name" value="{{$brand->name}}">
                                            </div>
                                            <div class="input-group">
                                                <input type="hidden" name="id" value="{{$brand->id}}">
                                            </div>
                                            <div class="input-group">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>

                        </td>
                        <td class="center"><button class="btn btn-danger"  data-toggle="modal" data-target="#{{$brand->id}}"><span class="fa fa-trash"></span></button></td>
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

        @foreach($brands as $brand)
            <!-- Modal -->
                <div id="{{$brand->id}}" class="modal fade" role="dialog">
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
                                <a href="{{route('delete_brand',['id'=>$brand->id])}}"  class="btn btn-default">Yes</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection





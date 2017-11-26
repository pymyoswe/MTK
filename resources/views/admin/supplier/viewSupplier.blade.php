@extends('admin.layouts.dashboard')

@section('page_heading','Supplier Lists')

@section('section')
    <!-- /.row -->
    <div class="col-sm-12">
        @if(Session::has('msg'))
            <div class="alert alert-success">
                <strong>{{Session::get('msg')}}</strong>
            </div>
        @endif
        <div class="row">
            <table class="jTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($suppliers as $supplier)
                    <tr>
                        <td>{{$supplier->id}}</td>
                        <td>
                            {{$supplier->name}}
                        </td>
                        <td>{{$supplier->phone}}</td>
                        <td>{{$supplier->address}}</td>
                        <td>
                            <a href="{{route('edit_supplier',['id'=>$supplier->id])}}" class="btn btn-primary"><span class="fa fa-edit"></span> </a>
                            <button class="btn btn-danger"  data-toggle="modal" data-target="#{{$supplier->id}}"><span class="fa fa-trash"></span></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>

        @foreach($suppliers as $supplier)
            <!-- Modal -->
                <div id="{{$supplier->id}}" class="modal fade" role="dialog">
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
                                <a href="{{route('delete_supplier',['id'=>$supplier->id])}}"  class="btn btn-default">Yes</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection





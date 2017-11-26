@extends('admin.layouts.dashboard')

@section('page_heading','New Product')

@section('section')

    <!-- /.row -->
    <div class="col-sm-12">
        <div class="row">
            <div class="col-lg-12">
                @if(Session::has('msg'))
                    <div class="alert alert-success">
                        <strong>{{Session::get('msg')}}</strong>
                    </div>
                @endif
                <form role="form" action="" method="post">
                    {{csrf_field()}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product">Product Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="company">Select Company</label>
                            <select name="company" class="form-control">
                                @foreach($suppliers as $supplier)
                                    <option value="{{$supplier->name}}">{{$supplier->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category">Select Category</label>
                            <select name="category" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->name}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="brand">Select Brand</label>
                            <select name="brand" class="form-control">
                                @foreach($brands as $brand)
                                    <option value="{{$brand->name}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="unit">Select Unit</label>
                            <select name="unit" class="form-control">
                                @foreach($units as $unit)
                                    <option value="{{$unit->name}}">{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Purchase Price</label>
                            <input type="text" class="form-control" name="price" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="itemInPack">Number of Items in a Pack</label>
                            <input type="text" class="form-control" name="itemInPack" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="itemInPackUnit">Select Unit</label>
                            <select name="itemInPackUnit" class="form-control">
                                @foreach($units as $unit)
                                    <option value="{{$unit->name}}">{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="itemUnitCost">Item unit cost</label>
                            <input type="text" class="form-control" name="itemUnitCost" readonly>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="subItemInItem">Number of Sub Items in an Item</label>
                            <input type="text" class="form-control" name="subItemInItem" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="subItemInItemUnit">Select Unit</label>
                            <select name="subItemInItemUnit" class="form-control">
                                @foreach($units as $unit)
                                    <option value="{{$unit->name}}">{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="subItemUnitCost">Sub Item unit cost</label>
                            <input type="text" class="form-control" name="subItemUnitCost" readonly>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="subItemInPack">Number of Sub Items in a Pack</label>
                            <input type="text" class="form-control" name="subItemInPack" readonly>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="quantity">Number of Pack</label>
                            <input type="text" class="form-control" name="quantity" required>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="totalNumberItem">Total number of item</label>
                            <input type="text" class="form-control" name="totalNumberItem" readonly>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="totalNumberSubItem">Total number of sub item</label>
                            <input type="text" class="form-control" name="totalNumberSubItem" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="manufactureDate">Select Date</label>
                            <input type="date" name="manufactureDate" class="dateTimePicker form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ExpireDate">Select Date</label>
                            <input type="date" name="ExpireDate" class="dateTimePicker form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary form-control">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.col-sm-12 -->



@endsection
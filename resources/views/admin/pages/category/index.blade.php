@extends('admin.layout')
@section('content')
    <div class="page-title">
        <h3>Category</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="/admin-dashboard">Home</a></li>
                <li class="active">Category</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="panel panel-white">
            <div class="panel-heading">
                <h4 class="panel-title">Add rows</h4>
            </div>
            <div class="panel-body">
                <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add New
                    Row</button>
                <!-- Modal -->
                <form id="add-row-form" action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">×</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" id="name-input" class="form-control" placeholder="Name"
                                            required="" name="name">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" id="add-row" class="btn btn-success">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <div id="example3_wrapper" class="dataTables_wrapper">
                        <table id="datatable" class="display table dataTable" style="width: 100%;" role="grid"
                            aria-describedby="example3_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="width: 161px;">Name
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                        colspan="1" aria-label="Salary: activate to sort column ascending"
                                        style="width: 163px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $item)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1"><a href="javascript:void(0);"
                                                class="editable editable-click">{{ $item->name }}</a></td>
                                        <td>
                                            <a type="button" class="btn btn-primary m-b-sm"
                                                href="{{ route('category.edit', $item->id) }}"
                                                class="editable editable-click">Edit</a>
                                            <a type="button" class="btn btn-danger m-b-sm"
                                                href="{{ route('category.delete', $item->id) }}"
                                                class="editable editable-click">Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="odd">
                                        <td valign="top" colspan="5" class="dataTables_empty">No data available in
                                            table
                                        </td>
                                    </tr>
                                @endforelse


                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

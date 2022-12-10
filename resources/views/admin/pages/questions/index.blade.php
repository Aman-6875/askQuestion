@extends('admin.layout')
@section('content')
    <div class="page-title">
        <h3>Questions</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="/admin-dashboard">Home</a></li>
                <li class="active">Questions</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="panel panel-white">
            <div class="panel-body">

                <div class="table-responsive">
                    <div id="example3_wrapper" class="dataTables_wrapper">
                        <table id="datatable" class="display table dataTable" style="width: 100%;" role="grid"
                            aria-describedby="example3_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="width: 161px;">Title
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="width: 161px;">Category
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="width: 161px;">User
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="width: 161px;">Total
                                        Comments
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                        colspan="1" aria-label="Salary: activate to sort column ascending"
                                        style="width: 163px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($questions as $item)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1"><a href="javascript:void(0);"
                                                class="editable editable-click">{{ $item->title }}</a>
                                        </td>
                                        <td class="sorting_1"><a href="javascript:void(0);"
                                                class="editable editable-click">{{ $item->category->name }}</a>
                                        </td>
                                        <td class="sorting_1"><a href="javascript:void(0);"
                                                class="editable editable-click">{{ $item->user->name }}</a>
                                        </td>
                                        <td class="sorting_1"><a href="javascript:void(0);"
                                                class="editable editable-click">{{ count($item->comments) }}</a>
                                        </td>
                                        <td>
                                            <a type="button" class="btn btn-danger m-b-sm"
                                                href="{{ route('question.delete', $item->id) }}"
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

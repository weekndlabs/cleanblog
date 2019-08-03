@extends('layouts.admin.layout')

@section('content')
<!-- Main Container -->
<main id="main-container">
 <!-- Page Content -->
 <div class="content">
                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">View <small>Pages</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full js-table-checkable">
                                <thead>
                                    <tr>
                                        <!-- Delete Select checkbox 
                                        https://www.phpflow.com/php/how-to-delete-multiple-selected-rows-using-ajax/
                                        -->
                                        <th class="text-center" style="width: 70px;">
                                            <label class="css-control css-control-primary css-checkbox py-0">
                                                <input type="checkbox" class="css-control-input" id="check-all" name="check-all">
                                                <span class="css-control-indicator"></span>
                                            </label>
                                        </th>
                                        <th>Title</th>
                                        <th class="d-none d-sm-table-cell">Author</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                                        <th class="text-center" style="width: 15%;">Create At</th>
                                        <th class="text-center" style="width: 15%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <label class="css-control css-control-primary css-checkbox">
                                                <input type="checkbox" class="css-control-input" id="1" name="1">
                                                <span class="css-control-indicator"></span>
                                            </label>
                                        </td>
                                        <td class="font-w600"><a href="#">Sample Page</a></td>
                                        <td class="d-none d-sm-table-cell">Fajar Hidayat</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-primary">Publish</span>
                                        </td>
                                        <td class="text-center">
                                            <span>2019-08-03</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <label class="css-control css-control-primary css-checkbox">
                                                <input type="checkbox" class="css-control-input" id="2" name="2">
                                                <span class="css-control-indicator"></span>
                                            </label>
                                        </td>
                                        <td class="font-w600"><a href="#">Sample Page</a></td>
                                        <td class="d-none d-sm-table-cell">Fajar Hidayat</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-primary">Publish</span>
                                        </td>
                                        <td class="text-center">
                                            <span>2019-08-03</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->
</div>
</main>
<!-- END Main Container -->
@endsection
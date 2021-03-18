@extends('layout-admin.index')
@section('title', 'Courier')
@section('content')
<div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>Courier</strong></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                <button class="btn btn-success" onclick="location.href='{{ url('courier-add') }}'"><i class="fas fa-plus"></i></button>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width:10%;">#</th>
                            <th style="width:60%;">Courier Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Jhon</td>
                            <td class="table-action">
                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

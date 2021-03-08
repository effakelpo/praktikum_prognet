@extends('layout-admin.index')
@section('title', 'Transaction')
@section('content')
<div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>Transaction</strong></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-success"><i class="fas fa-plus"></i></button>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width:40%;">Data</th>
                            <th style="width:25%">Data</th>
                            <th class="d-none d-md-table-cell" style="width:25%">Data</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Vanessa Tucker</td>
                            <td>864-348-0485</td>
                            <td class="d-none d-md-table-cell">June 21, 1961</td>
                            <td class="table-action">
                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>William Harris</td>
                            <td>914-939-2458</td>
                            <td class="d-none d-md-table-cell">May 15, 1948</td>
                            <td class="table-action">
                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Sharon Lessman</td>
                            <td>704-993-5435</td>
                            <td class="d-none d-md-table-cell">September 14, 1965</td>
                            <td class="table-action">
                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Christina Mason</td>
                            <td>765-382-8195</td>
                            <td class="d-none d-md-table-cell">April 2, 1971</td>
                            <td class="table-action">
                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Robin Schneiders</td>
                            <td>202-672-1407</td>
                            <td class="d-none d-md-table-cell">October 12, 1966</td>
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

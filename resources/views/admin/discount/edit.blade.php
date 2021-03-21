@extends('layout-admin.index')
@section('title', 'Edit | Discount')
@section('content')
<div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>Edit Discount</strong></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label class="form-label">Percentage</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Start</label>
                            <input type="date" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="form-label">End</label>
                            <input type="date" class="form-control" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

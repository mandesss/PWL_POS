@extends('adminlte::page')

@section('title', 'Dashboard')

@section('subtitle', 'Welcome')

@section('content_header')
    <h1>Dashboard</h1>
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('content')
<div class="card-body">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">General Elements</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Text</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Text Disabled</label>
                            <input type="text" class="form-control" placeholder="Enter ..." disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Textarea</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Textarea Disabled</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Level id</label>
                    <input type="text" class="form-control" placeholder="id">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
</div>
@stop

@push('css')

@endpush

@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!") </script>
@endpush

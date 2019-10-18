@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">            
                <div class="card-header">SperAdmin</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    This is SuperAdmin Dashboard. Only SuperAdmin has privilege to access this!
                </div>
            </div>        
        </div>
    </div>
</div>
@endsection
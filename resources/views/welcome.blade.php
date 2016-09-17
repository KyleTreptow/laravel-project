@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>

                <?php
                   if(DB::connection()->getDatabaseName())
                      {
                        echo "connected successfully to database ".DB::connection()->getDatabaseName();
                      }
               ?>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-success">
                <div class="panel-heading">Dashboard - 
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                    
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-1">
                            <div class="panel panel-primary">
                                <div class="panel-heading">History - Recent 5 Days</div>
                                <div class="panel-body">History contents will be here...</div>
                                <div class="panel-footer"><a href="/history">Go to history</a></div>
                            </div>
                        </div>

                        <div class="col-md-4 col-md-offset-1">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Sell - Recent 5 Sales</div>
                                <div class="panel-body">Click Here to Sell</div>
                                <div class="panel-footer"><a href="/sales">Go to Sales</a></div>
                            </div>
                        </div>

                        <div class="col-md-4 col-md-offset-1">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Settings</div>
                                <div class="panel-body">Customize the settings</div>
                                <div class="panel-footer"><a href="/settings">Go to settings</a></div>
                            </div>
                        </div>

                        <div class="col-md-4 col-md-offset-1">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Help</div>
                                <div class="panel-body">Write to us...</div>
                                <div class="panel-footer"><a href="/help">Go to help</a></div>
                            </div>
                        </div>

                        <div class="col-md-4 col-md-offset-1">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Conclution - Toal Sale <span class="badge">8</span></div>
                                <div class="panel-body">Overview</div>
                                <div class="panel-footer"><a href="/conclusion">Go to Conclusion</a></div>
                            </div>
                        </div>

                        <div class="col-md-4 col-md-offset-1">
                            <div class="panel panel-primary">
                                <div class="panel-heading">User Accounts</div>
                                <div class="panel-body">Manage User Acoounts here..</div>
                                <div class="panel-footer"><a href="/users">Go to User Accounts</a></div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

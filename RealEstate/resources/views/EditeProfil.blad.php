@extends('layouts.pageAdmin')

@section('content')



<div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>Profile</h3>
                    </div>
                    <div class="row">
                     

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">Edit Profile</div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="form-horizontal"  method="POST">
                                        <div class="form-group row">
                                            <label class="col-sm-2">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="username" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Password</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="password" class="form-control" value="">
                                            </div>
                                        </div>
                                        
                                
                                                
                                 
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <div class="col-sm-4 offset-sm-2">
                                                <button type="submit" class="btn btn-secondary mb-2"><i class="fas fa-times"></i> Cancel</button>
                                                <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-save"></i> Save</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>

                       


                    </div>
                </div>
        </div>
@endsection

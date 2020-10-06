@extends('layouts.pageAdmin')

@section('content')



<div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>Properties
                
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>id_f</th>
                                        <th>user_id</th>
                                        <th>full_name</th>
                                        <th>address</th>
                                        <th>email</th>
                                        <th>Phone_Number</th>
                                        <th>cities_name	</th>
                                        <th>price</th>
                                        <th>District</th>
                                        <th>area</th>
                                        <th>number_rooms</th>
                                        <th>floor_number</th>
                                        <th>title</th>
                                        <th>descr</th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                    <input type="hidden" class="input" name="id_c">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-right">
                                            <a href="editCount.php?id_c" ><button type="button" class="btn btn-success">Accept</button></a>
                                            <a href="deleteCount.php?id_c"><button type="button" class="btn btn-danger">Refuse</button></a>
                                        </td>
                                    </tr>
                                
                           
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection

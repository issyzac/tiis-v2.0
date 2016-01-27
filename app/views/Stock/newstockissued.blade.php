@extends('index')
@section('contents')
<div>
   <div class="card" style="margin-left: 30px !important; margin-right: 30px !important">
    <div class="content">
    
         <span class="card-title">Summary</span>
        
        <div class="card-body">
        <div class="row row-sm">
          
         <div class="col-sm-4">
         	<div class="panel panel-card">
         	<br />
              <div class="p ">
              	SHIPPED
              </div>
               <div class="panel-body text-center">
                                            <div class="m-v-sm">
                                                Total Shipped
                                                <div class="h2 text-success font-bold" style="color: green">7</div>
                                            </div>
                                        </div>

                                        <div class="b-t b-light p">
                                            Percentage
                                            <div class="progress progress-striped progress-sm r m-v-sm">
                                                <div class="progress-bar " style="width:39%">39%</div>
                                            </div>
                                        </div>
         	</div>
         </div>

 <div class="col-sm-4">
                                    <div class="panel panel-card">
                                    <br />
                                        <div class="p ">
                                            REQUESTED
                                        </div>
                                        <div class="panel-body text-center">
                                            <div class="m-v-sm">
                                                Total Requested
                                                <div class="h2 text-success font-bold " style="color: green	">17</div>
                                            </div>
                                        </div>
                                        <div class="b-t b-light p">
                                            Percentage
                                            <div class="progress progress-striped progress-sm r m-v-sm">
                                                <div class="progress-bar " style="width:16%">16%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        <div class="col-sm-4">
                                    <div class="panel panel-card">
                                    <br/>
                                        <div class="p ">
                                            CANCELLED
                                        </div>
                                        <div class="panel-body text-center">
                                            <div class="m-v-sm">
                                                Total Shipped
                                                <div class="h2 text-success font-bold" style="color: green">3</div>
                                            </div>
                                        </div>
                                        <div class="b-t b-light p">
                                            Percentage
                                            <div class="progress progress-striped progress-sm r m-v-sm">
                                                <div class="progress-bar" style="width:30%">30%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

        </div>

    </div>
   </div>
</div>


<div class="row">
<div class="card" style="margin-left: 30px !important; margin-right: 30px !important">
  <div class="card-content">
      <div class="card-title">
          <span>Health Facility List</span>
      </div>

       <div class="table-responsive">
                        <table class="table table-bodered">
                            <thead>
                            <tr>
                                <th >Order Number</th>
                                <th >Order Date</th>
                                <th >Health Facility To</th>
                                <th >Carrier</th>
                                <th >Order Status</th>
                          
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="#">1412</a></td>
                                <td>08/01/2016</td>
                                <td>Arusha Region</td>
                                <td></td>
                                <td>Requested</td>
        
                            </tr>
                            <tr>
                                <td><a href="#">1356</a></td>
                                <td>08/05/2015</td>
                                <td>Arusha Region</td>
                                <td></td>
                                <td>Requested</td>
                            
                            </tr>

                            <tr>
                                <td><a href="#">1358</a></td>
                                <td>08/05/2015</td>
                                <td>Arusha Region</td>
                                <td></td>
                                <td>Requested</td>
                                
                            </tr>

                            <tr>
                                <td><a href="#">1359</a></td>
                                <td>12/05/2015</td>
                                <td>Arusha Region</td>
                                <td></td>
                                <td>Requested</td>
                                
                            </tr>

                            <tr>
                                <td><a href="#">1360</a></td>
                                <td>12/05/2015</td>
                                <td> Arusha Region</td>
                                <td></td>
                                <td>Shipped</td>
                               
                     
                            </tr>

                            <tr>
                                <td><a href="#">1364</a></td>
                                <td>12/05/2015</td>
                                <td>Arusha Region</td>
                                <td></td>
                                <td>Shipped</td>
                                
                            </tr>

                            <tr>
                                <td><a  href="#">1365</a></td>
                                <td>12/05/2015</td>
                                <td>Arusha Region</td>
                                <td></td>
                                <td>Requested</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
  </div>

</div>
</div>
@stop

@extends('index')
@section('contents')
<div>
	<div class="row">
       <div class="card" style="margin-left: 30px !important; margin-right: 30px !important">
         <div class="card-content">
          <span class="card-title">Dose List</span>
             <div class="row row-sm">
              
                
                <select class="input-field col s3">
                
                	<option value="" disabled selected>Scheduled Vaccination</option>
                    <option value="1">BCG</option>
                    <option value="2">DTP-HelpB-Hib</option>
                    <option value="3">Measles Rubella</option>
                    <option value="4">measles virus vaccine</option>
                    <option value="5">OPV</option>
                    <option value="6">PVC-13</option>
                    <option value="7">Rota</option>
                    <option value="8">TT</option>
                </select>
                
	            <div class="input-field col s3">
       		       <input id="days" type="text" class="validate disabled">
       		       <label class="active" for="name">Fullname</label>
             	</div>
             	<br />
             	 <div class="col s3 pull-center">
                     <button class="btn waves-effect waves-light pull-center" type="submit" name="action">Search
                     </button>
                </div>
                 <div class="col s3 pull-center">
                     <button class="btn waves-effect waves-light pull-center" type="submit" name="action">ADD NEW
                     </button>
                </div>

             </div>
         		
         </div>
       </div>
	</div>
</div>
<div class="card" style="margin-left: 30px !important; margin-right: 30px !important;">
 <div class="card-content">
      	<span class="card-title">Scheduled Vaccination List</span>
         <div class="table-responsive">
         	<table class="table table-bodered">
         	<thead>
          <tr>


         		                <th data-field="name" style="width:15%">FullName</th>
                                <th data-field="definition" style="width:15%">Age Definition</th>
                                <th data-field="vaccination" style="width:25%">Schedule Vaccination</th>
                                <th data-field="dose " style="width:25%">Dose Number</th>
                                <th data-field="notes " style="width:25%">Notes</th>
                                <th data-field="isactive" style="width:25%">Is Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <td> Rota 1</td>
                                <td>  6 weeks</td>
                                <td> Rota</td>
                                <td> 1</td>
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                               
                                <td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>

                                <tr>
                                <td>  Rota 2</td>
                                <td>  10 weeks</td>
                                <td> Rota</td>
                                <td> 2</td>
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                             

                                <td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                                 <tr>
                                <td>  Measles Rubella 1</td>
                                <td>  9 Months</td>
                                <td>Measles Rubella</td>
                                <td> 1</td>
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                               
                                <td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                        
                                <tr>
                                  <td>  Measles Rubella 1</td>
                                <td>  18 Months</td>
                                <td>Measles Rubella</td>
                                <td> 2</td>
                                
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                               

                                <td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                                   <tr>
                                  <td>  PCV 1</td>
                                <td>  6 Weeks</td>
                                <td> PCV-13</td>
                                <td> 1</td>
                               
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                               

                                <td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                              <tr>
                                 <td>  PCV 2</td>
                                <td>  10 Weeks</td>
                                <td> PCV-13</td>
                                <td> 2</td>
                             
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                                
                                <td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                               <tr>
                                <td>  PCV 3</td>
                                <td>  14 Weeks</td>
                                <td> PCV-13</td>
                                <td> 3</td>
                                
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                           
                                <td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                   

                 
                                </tbody>

                         </div>

        
             </table>
            
                    </div>

                </div>

</div>
</div>
@stop
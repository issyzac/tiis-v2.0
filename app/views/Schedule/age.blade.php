@extends('index')
@section('contents')
<div>
  <div class="row">
     <div class="card" style="margin-left: 30px !important; margin-right: 30px !important">
     	<div class="card-content">
     		 <span class="card-title">Age Definition</span>
             <div class="row row-sm">

             <div class="input-field col s3">
       		<input id="name" type="text" class="validate disabled">
       		<label class="active" for="name">Name</label>
          	</div>

          	<div class="input-field col s3">
       		<input id="days" type="text" class="validate disabled">
       		<label class="active" for="name">Days</label>
       	</div>
           
              	<div class="input-field col s3">
       		<input id="notes" type="text" class="validate disabled">
       		<label class="active" for="name">Notes</label>
       	</div>
         <form action="#">
               <label class="active" for="name">Is Active</label>
       	   	<div >
       	     <input class="group1" type="radio" name="active" value="yes" />
             <label class="radio-label">Yes</label>
             <input class="group1" type="radio" name="notactive" value="no"  />
             <label class="radio-label">No</label>
       	</div>
      
        </form>

                <div class="col s3 pull-right">
                     <button class="btn waves-effect waves-light pull-right" type="submit" name="action">SAVE
                     </button>
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
         		                <th data-field="name" style="width:15%">Name</th>
                                <th data-field="days" style="width:15%">Days</th>
                                <th data-field="notes " style="width:25%">Notes</th>
                                <th data-field="isactive" style="width:25%">Is Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <td>  At birth</td>
                                <td>  0</td>
                          
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                               
                                <td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>

                                <tr>
                                <td>  2 Weeks</td>
                                <td>  14</td>
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                             

                                <td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                                 <tr>
                                <td>  1 Month</td>
                                <td>  30</td>
                                
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                               
                                <td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                        
                                <tr>
                                <td>  6 weeks</td>
                                <td>  42</td>
                                
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                               

                                <td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                                   <tr>
                                <td>  10 weeks</td>
                                <td>  70</td>
                               
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                               

                                <td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                              <tr>
                                <td>  9 Months</td>
                                <td>  274</td>
                             
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                                
                                <td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                               <tr>
                                <td>  18 Months</td>
                                <td>  547</td>
                                
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

@extends('index')
@section('contents')
<div>
	<div class="row">
       <div class="card" style="margin-left: 30px !important; margin-right: 30px !important">
         <div class="card-content">
          <span class="card-title">Non Vaccination Reason</span>
             <div class="row row-sm">
             
                
	            <div class="input-field col s2">
       		       <input id="name" type="text" class="validate disabled">
       		       <label class="active" for="name">Name</label>
             	</div>
              <div class="input-field col s2">
                 <input id="code" type="text" class="validate disabled">
                 <label class="active" for="name">Code</label>
              </div>

              
              <br />
                 <div>
                
               <label class="active" for="name">Keep Child Due</label>
            <div >
             <input class="grp1" type="radio" name="active" id="r1" />
             <label class="radio-label">Yes</label>
             <input class="grp1" type="radio" name="notactive" id="r2"  />
             <label class="radio-label">No</label>
             </div>
  
        </div>



      
        
             	 
                 <div class="col s3 pull-right">
                     <button class="btn waves-effect waves-light pull-right" type="submit" name="action">ADD NEW
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

          
         		                <th data-field="name" style="width:15%">Name</th>
                                <th data-field="code" style="width:15%">Code</th>
                                <th data-field="child" style="width:25%">Keep Child Due</th>
                                <th data-field="notes " style="width:25%">Notes</th>
                                <th data-field="isactive" style="width:25%">Is Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                               <td>  Mtoto ana aleji ya dawa</td>
            
                                <td> 2</td>
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                                <td>Child has an allergies</td>
                              <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>

                                <tr>
                                <td>  Kukosekana chanjo</td>
            
                                <td> 4</td>
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                                <td>Stock out</td>
                              <td>
                                    <input type="checkbox" checked disabled />
                                </td>

                                <td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                                 <tr>
                                <td>  Mtoto kachelewa</td>
            
                                <td> 0</td>
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                                <td>Child came late</td>
                              <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                        
                                <tr>
                              <td>  Mtoto ni mgonjwa</td>
            
                                <td> 5</td>
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                                
                                <td>Child is sick</td>
                              <td>
                                    <input type="checkbox" checked disabled />
                                </td>

                                <td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                                   <tr>
                                 <td>  Mzazi amekataa</td>
            
                                <td> 1</td>
                                <td>
                                    <input type="checkbox" checked disabled />
                                </td>
                                  <td>Mother refuses vaccine</td>
                              <td>
                                    <input type="checkbox" checked disabled />
                                </td>

                                <td>
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                           
                                </tbody>

                         </div>

        
             </table>
               <div class="col s3 pull-right">
                     <button class="btn waves-effect waves-light green-right" type="submit" name="action">EXCEL
                     </button>
                </div>
            
                    </div>

                </div>

</div>
</div>
@stop
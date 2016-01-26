@extends('index')
@section('contents')
<div>
	<div class="row">
	   <div class="card" style="margin-left: 30px !important; margin-right: 30px !important">	
	   <div class="card-content">
       <span class="card-title">Search Filters</span>
       <div class="row row-sm">
       	
       	<div class="input-field col s4">
       		<input id="name" type="text" class="validate disabled">
       		<label class="active" for="name">Name</label>
       	</div>

       	<div class="input-field col s4">
       		    <input  id="code" type="text" class="validate disabled">
                <label class="active" for="code">Code</label>
       	</div>

                <div class="col s3 pull-right">
                     <button class="btn waves-effect waves-light pull-right" type="submit" name="action">Search
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
                                        <th  style="width:15%">Name</th>
                                        <th  style="width:15%">Parent</th>
                                        <th  style="width:25%">Top Level</th>
                                        <th  style="width:25%">Leaf</th>
                                        <th  style="width:15%">Vaccination Point</th>
                                        <th  style="width:15%">Population Data</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <td>Tanzania</td>
                                            <td></td>
                                            <td>
                                                <input type="checkbox" checked disabled />
                                            </td>
                                            <td>
                                                <input type="checkbox"  disabled />
                                            </td>
                                            <td>
                                                <input type="checkbox"  disabled />
                                            </td>
                                              <td>
                                                <input type="checkbox"  disabled />
                                            </td>

                                            <td>
                                                <a href="#"> <i class="fa fa-list"></i></a>
                                            </td>
                            </tr>

                                            <tr>
                                            <td>Arusha Region</td>
                                            <td>TANZANIA</td>
                                            <td>
                                                <input type="checkbox" checked disabled />
                                            </td>
                                            <td>
                                                <input type="checkbox"  disabled />
                                            </td>
                                            <td>
                                                <input type="checkbox"  disabled />
                                            </td>
                                              <td>
                                                <input type="checkbox"  disabled />
                                            </td>

                                            <td>
                                                <a href="#"> <i class="fa fa-list"></i></a>
                                            </td>
                                        </tr>
                                <tr>
                                            <td>Arusha City Council</td>
                                            <td>Arusha Region</td>
                                            <td>
                                                <input type="checkbox" checked disabled />
                                            </td>
                                            <td>
                                                <input type="checkbox"  disabled />
                                            </td>
                                            <td>
                                                <input type="checkbox"  disabled />
                                            </td>
                                              <td>
                                                <input type="checkbox"  disabled />
                                            </td>

                                            <td>
                                                <a href="#"> <i class="fa fa-list"></i></a>
                                            </td>
                                        </tr>

                        
                                <tr>
                                            <td>Arusha District Council</td>
                                            <td>Arusha Region</td>
                                            <td>
                                                <input type="checkbox" checked disabled />
                                            </td>
                                            <td>
                                                <input type="checkbox"  disabled />
                                            </td>
                                            <td>
                                                <input type="checkbox"  disabled />
                                            </td>
                                              <td>
                                                <input type="checkbox"  disabled />
                                            </td>

                                            <td>
                                                <a href="#"> <i class="fa fa-list"></i></a>
                                            </td>
                                        </tr>

                                  <tr>
                                            <td>Karatu District Council</td>
                                            <td>Arusha Region</td>
                                            <td>
                                                <input type="checkbox" checked disabled />
                                            </td>
                                            <td>
                                                <input type="checkbox"  disabled />
                                            </td>
                                            <td>
                                                <input type="checkbox"  disabled />
                                            </td>
                                            <td>
                                                <input type="checkbox"  disabled />
                                            </td>

                                            <td>
                                                <a href="#"> <i class="fa fa-list"></i></a>
                                            </td>
                                        </tr>
                             <tr>
                                            <td>Longido District Council</td>
                                            <td>Arusha Region</td>
                                            <td>
                                                <input type="checkbox" checked disabled />
                                            </td>
                                            <td>
                                                <input type="checkbox"  disabled />
                                            </td>
                                            <td>
                                                <input type="checkbox"  disabled />
                                            </td>
                                              <td>
                                                <input type="checkbox"  disabled />
                                            </td>

                                            <td>
                                                <a href="#"> <i class="fa fa-list"></i></a>
                                            </td>
                                        </tr>
                              
                              <tr>
                                            <td>Meru District Council</td>
                                            <td>Arusha Region</td>
                                            <td>
                                                <input type="checkbox" checked disabled />
                                            </td>
                                            <td>
                                                <input type="checkbox"  disabled />
                                            </td>
                                            <td>
                                                <input type="checkbox"  disabled />
                                            </td>
                                             <td>
                                                <input type="checkbox"  disabled />
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
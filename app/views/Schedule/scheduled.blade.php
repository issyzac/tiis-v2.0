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
                                <th data-field="parent" style="width:15%">Code</th>
                                <th data-field="item " style="width:25%">Item</th>
                                <th data-field="entry" style="width:25%">Entry Date</th>
                                <th data-field="exit" style="width:15%">Exit Date</th>
                                <th data-filed="deseases" style="width:15%">Deseases</th>
                                <th data-field="isactive" style="width:25%">Is Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <td>  BCG</td>
                                <td>  BCG</td>
                                <td>  BCG</td>
                                <td>01-Jan-2000</td>
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
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>

                                <tr>
                                <td>  DTP-HepB-Hib</td>
                                <td>  DTP-HepB-Hib</td>
                                <td>  DTP-HepB-Hib</td>
                                <td>01-Jan-2000</td>
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
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                                 <tr>
                                <td>  Measles Rubella</td>
                                <td>  Measles Rubella</td>
                                <td>  DTP-HepB-Hib</td>
                                <td>01-Jan-2015</td>
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
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                        
                                <tr>
                                <td>  OPV</td>
                                <td>  OPV</td>
                                <td>  OPV</td>
                                <td>01-Jan-2000</td>
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
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                                   <tr>
                                <td>  PCV-13</td>
                                <td>  PCV13</td>
                                <td>  OPV</td>
                                <td>06-Dec-2012</td>
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
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                              <tr>
                                <td>  Rota</td>
                                <td>  Rota</td>
                                <td>  Rota</td>
                                <td>06-Dec-2012</td>
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
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                               <tr>
                                <td>  Tetanus</td>
                                <td>  TT</td>
                                <td>  TT</td>
                                <td>01-Jan-2000</td>
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
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>
                   

                 
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
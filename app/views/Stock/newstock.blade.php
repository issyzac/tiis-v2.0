@extends('index')
@section('contents')
<div>
 <div class="card" style="margin-left: 30px !important; margin-right: 30px !important">	
	   <div class="card-content">
       <span class="card-title">Stock Issues</span>
       <div class="row row-sm">
       	
       	<div class="input-field col s3">
    <select>
    
      <option value="" disabled selected>Health Facility From</option>
      <option value="1">Tanzania</option>
     
    </select>
    
  </div>
       	<div class="input-field col s3">
    <select>
    
      <option value="" disabled selected>Health Facility To</option>
      <option value="1">Tanzania</option>
     
    </select>
    
  </div>

       	<div class="input-field col s3">
       		    <input  id="code" type="text" class="validate disabled">
                <label class="active" for="code">Order Date</label>
       	</div>

                <div class="col s3 pull-right">
                     <button class="btn waves-effect waves-light pull-right" type="submit" name="action">SAVE
                     </button>
                </div>
       </div>
	   </div>
	</div>
</div>

@stop
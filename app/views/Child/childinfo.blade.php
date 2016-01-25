@extends('index')
@section('contents')

<div class="row">

<div class="card" style="margin-left: 30px !important; margin-right: 30px !important">
    
    <div class="card-content">

        <ul class="tabs">
            <li class="tab active">
                <a class="" href="#sectionA">Basic Information</a>
            </li>
            <li class="tab"> 
                <a href="#sectionB">Weight</a>
            </li>
            <li class="tab">
                <a href="#aefi">Aefi</a>
            </li>
            <li class="tab">
                <a href="#immcard">Immunization Card</a>
            </li>
        </ul>

        <div id="sectionA" class="">

            <div class="card" style="">
                
                <div class="card-content">
                <small class="card-title">Child Summary Information</small>
                    <div class="row row-sm">

                        <div class="input-field col s5">
                          <input  id="id_fields" type="text" class="validate disabled" disabled="disabled" value="4D39E9FB92FED199">
                          <label></label>
                        </div>

                        <div class="input-field col s5 offset-s2">
                            <input  id="barcode" type="text" class="validate disabled" value="2143423542">
                            <label> Barcode </label>
                        </div>

                        <div class="input-field col s5">
                            <input  id="motfname" type="text" class="validate disabled" value="Abigael">
                            <label for="motfname">Mother's First Name</label>
                        </div>

                        <div class="input-field col s5 offset-s2">
                            <input  id="motsname" type="text" class="validate disabled" value="Msama">
                            <label for="motsname">Mother's Second Name</label>
                        </div>

                        <div class="col s5" style="padding: 0px !important; margin: 0px !important;">
                            
                            <div class="input-field col s6">
                                <input  id="fname" type="text" class="validate disabled" value="Abigael">
                                <label for="fname"> Firstname </label>
                            </div>

                            <div class="input-field col s6">
                                <input  id="sname" type="text" class="validate disabled" value="">
                                <label for="sname"> Second Name</label>
                            </div>

                        </div>

                        <div class="input-field col s5 offset-s2">
                            <input  id="surname" type="text" class="validate disabled" value="Msama">
                            <label for="surname"> Surname </label>
                        </div>

                        <div class="input-field col s5">
                            <label>Date Of Birth</label>
                            <input type="date" value="30/12/2015" class="datepicker picker__input picker__input--active" id="dob">
                       </div>

                        <div class="col s5 offset-s2">
                            <div class="md-form-group md-input-has-value md-block flex-gt-sm md-input-has-value">
                                <select class="md-input">
                                    <option>Male</option>
                                    <option selected>Female</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="card-content">
                 <small class="card-title">Immunization Information</small>
                    <table class="bordered">
                        <thead>
                          <tr>
                              <th data-field="a">Antigen</th>
                              <th data-field="b">Week 0</th>
                              <th data-field="c">Week 6</th>
                              <th data-field="d">Week 10</th>
                              <th data-field="e">Week 14</th>
                              <th data-field="f">9 Months</th>
                              <th data-field="g">18 Months</th>
                          </tr>
                        </thead>

                            <tbody>
                              <tr>
                                <td>BCG</td>
                                <td><a href="{{ url('imm_details') }}">01-12-15</a></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>

                              <tr>
                                <td>OPV</td>
                                <td><a href="{{ url('imm_details') }}">01-12-15</a></td>
                                <td><a href="{{ url('imm_details') }}">23-12-15</a></td>
                                <td><a href="{{ url('imm_details') }}">26-12-15</a></td>
                                <td><a href="{{ url('imm_details') }}">03-01-16</a></td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                                <td></td>
                              </tr>
                              
                              <tr>
                                <td>DTP</td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                                <td><a href="{{ url('imm_details') }}">10-03-15</a></td>
                                <td><a href="{{ url('imm_details') }}">07-04-15</a></td>
                                <td><a href="{{ url('imm_details') }}">05-05-15</a></td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                              </tr>

                              <tr>
                                <td>PCV</td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                                <td><a href="{{ url('imm_details') }}">10-03-15</a></td>
                                <td><a href="{{ url('imm_details') }}">07-04-15</a></td>
                                <td><a href="{{ url('imm_details') }}">05-05-15</a></td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                              </tr>

                              <tr>
                                <td>Rota</td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                                <td><a href="{{ url('imm_details') }}">10-03-15</a></td>
                                <td><a href="{{ url('imm_details') }}">07-04-15</a></td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                              </tr>

                              <tr>
                                <td>MR</td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                                <td><a href="{{ url('imm_details') }}"></a></td>
                              </tr>

                            </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div id="sectionB" class="">
            <div class="card">
                <div class="card-content">
                <small class="card-title"> Child Weight </small>
                    <div class="row row-sm">

                        <div class="input-field col s3" >
                            <input type="text" value="Abigael" id="name" disabled="disabled">
                            <label for="name"> Name </label>
                        </div>

                        <div class="input-field col s3" >
                            <input type="text" value="30-Dec-2015" id="dob" disabled="disabled">
                            <label for="dob">Birthdate</label>    
                        </div>

                        <div class="input-field col s3">
                            <input type="text" value="25-Jan-2016" id="dt" disabled="disabled">
                            <label for="dt">Date</label>
                        </div>

                        <div class="input-field col s3">
                            <input type="text" id="weight">
                            <label for="weight">Weight</label>
                        </div>

                        <div class="col s3 pull-right">
                             <button class="btn waves-effect waves-light pull-right" type="submit" name="action">Save
                             </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="aefi" class="">

            <div class="card">
                <div class="card-content">
                <small class="card-title">Child AEFI</small>

                <div class="row row-sm">
                <table class="bordered">
                <thead>
                <tr>
                    <th>Vaccine Doses</th>
                    <th>Vaccine Date</th>
                    <th>Health Facility</th>
                    <th>Done</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>BCG, OPV0</td>
                    <td>30-Dec-2015</td>
                    <td>Kaloleni Health Centre</td>
                    <td>
                        <input class="form-control" disabled type="checkbox" checked/>
                    </td>
                </tr>

                </tbody>
                </table>
                <br><br>

                </div>
                </div>
            </div>

            <br>

            <div class="card">
                <div class="card-content">
                <span class="card-title"></span>
                    <div class="row">

                        <div class="col s4">
                            <input class="col s2" type="checkbox" checked/> <span class="col-sm-10"> Child had AEFI on this encounter </span>
                        </div>

                        <div class="col s4">
                            <div class="md-form-group md-input-has-value md-block flex-gt-sm md-input-has-value">
                                <input class="md-input" ng-model="user.lastName" value="12/1/2016" required>
                                <label>Date</label>
                            </div>
                        </div>

                        <div class="input-field col s4">
                            <input type="text" id="weight">
                            <label for="weight">Notes</label>
                        </div>


                        <div class="col s4 pull-right">
                             <button class="btn waves-effect waves-light pull-right" type="submit" name="action">Save
                             </button>
                        </div>

                    </div>
                </div>
            </div>

            <br>

            <div class="card">
                <div class="card-heading">

                </div>
                <div class="card-body">
                    <div class="row row-sm">

                        <table class="table table-bordered table-hover bg-white">
                            <thead>
                            <tr>
                                <th>Vaccine Doses</th>
                                <th>Vaccine Date</th>
                                <th>Health Facility</th>
                                <th>Done</th>
                                <th>AEFI</th>
                                <th>AEFI Dates</th>
                                <th>Notes</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>DTP-HepB-Hib 1, OPV 1, PCV 1, Rota 1</td>
                                <td>18-Feb-2015</td>
                                <td>Kaloleni Health Centre</td>
                                <td>
                                    <input class="form-control" disabled type="checkbox" checked/>
                                </td>
                                <td>
                                    <input class="form-control" disabled type="checkbox"/>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>DTP-HepB-Hib 2, OPV 2, PCV 2, Rota 2</td>
                                <td>18-Mar-2015</td>
                                <td>Kaloleni Health Centre</td>
                                <td>
                                    <input class="form-control" disabled type="checkbox" checked/>
                                </td>
                                <td>
                                    <input class="form-control" disabled type="checkbox"/>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>BCG, OPV0</td>
                                <td>30-Dec-2015</td>
                                <td>Kaloleni Health Centre</td>
                                <td>
                                    <input class="form-control" disabled type="checkbox" checked/>
                                </td>
                                <td>
                                    <input class="form-control" disabled type="checkbox"/>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>

                            </tbody>
                        </table>
                        <br><br>

                    </div>
                </div>
            </div>
        </div>
       <div id="immcard" class="">
            <div class="card">
                <div class="card-heading">
                    <small><b> Child Immunization Card </b></small>
                </div>
                <div class="card-body">
                    <div class="row row-sm">
                        <div class="col-sm-4">
                            <div class="md-form-group md-input-has-value md-block flex-gt-sm md-input-has-value">
                                <input class="md-input" ng-model="user.lastName" value="4D39E9FB92FED199" required disabled>
                                <label>System ID</label>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="md-form-group md-input-has-value md-block flex-gt-sm md-input-has-value">
                                <input class="md-input" ng-model="user.lastName" required disabled>
                                <label>Child ID</label>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="md-form-group md-input-has-value md-block flex-gt-sm md-input-has-value">
                                <input class="md-input" ng-model="user.lastName" value="Abigael" required disabled>
                                <label>Firstname</label>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="md-form-group md-input-has-value md-block flex-gt-sm md-input-has-value">
                                <input class="md-input" ng-model="user.lastName" value="Masan" required disabled>
                                <label>Lastname</label>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="md-form-group md-input-has-value md-block flex-gt-sm md-input-has-value">
                                <input class="md-input" ng-model="user.lastName" value="31/12/2015" required disabled>
                                <label>Birthdate</label>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="md-form-group md-input-has-value md-block flex-gt-sm md-input-has-value">
                                <input class="md-input" ng-model="user.lastName" value="" required disabled>
                                <label>Birth Place</label>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="md-form-group md-input-has-value md-block flex-gt-sm md-input-has-value">
                                <input class="md-input" ng-model="user.lastName" value="F" required disabled>
                                <label>Gender</label>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="md-form-group md-input-has-value md-block flex-gt-sm md-input-has-value">
                                <input class="md-input" ng-model="user.lastName" value="Kaloleni Health Center" required disabled>
                                <label>Health Center</label>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="md-form-group md-input-has-value md-block flex-gt-sm md-input-has-value">
                                <input class="md-input" ng-model="user.lastName" value="Abigael Masam" required disabled>
                                <label>Mother Names</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-heading">
                    <div class="col-sm-3 pull-right">
                        <label></label>
                        <br>
                        <div class="m-b pull-right">
                            <button md-ink-ripple class="md-btn md-raised m-b btn-fw dark-green">Print</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row row-sm">
                        <table class="table table-bordered table-hover bg-white">
                            <thead>
                            <tr>
                                <th>Vaccine Doses</th>
                                <th>Vaccine Lot</th>
                                <th>Health Facility</th>
                                <th>Vaccine Date</th>
                                <th>Done</th>
                                <th>Non Vaccination Reasons</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>Rota 2</td>
                                <td></td>
                                <td>Kaloleni Health Centre</td>
                                <td>18-Feb-2015</td>
                                <td>
                                    <input class="form-control" disabled type="checkbox" checked/>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>PCV 2</td>
                                <td></td>
                                <td>Kaloleni Health Centre</td>
                                <td>18-Feb-2015</td>
                                <td>
                                    <input class="form-control" disabled type="checkbox" checked/>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>OPV 2</td>
                                <td></td>
                                <td>Kaloleni Health Centre</td>
                                <td>18-Feb-2015</td>
                                <td>
                                    <input class="form-control" disabled type="checkbox" checked/>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>DTP-HepB-Hib 2</td>
                                <td></td>
                                <td>Kaloleni Health Centre</td>
                                <td>18-Feb-2015</td>
                                <td>
                                    <input class="form-control" disabled type="checkbox" checked/>
                                </td>
                                <td></td>
                            </tr>

                            </tbody>
                        </table>
                        <br><br>

                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
</div>
</div>
</div>

@stop
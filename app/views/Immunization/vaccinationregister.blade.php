@extends('index')
@section('contents')
 <div class="row">
    <div class="card" style="margin-left: 30px !important; margin-right: 30px !important">
        <div class="card-content">
        <span class="card-title"> Search Filters </span>
            <div class="row row-sm">
        
                <div class="input-field col s4">
                  <input  id="name" type="text" class="validate disabled">
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

    <div class="card" style="margin-left: 30px !important; margin-right: 30px !important;">
                <div class="card-content">
                    <span class="card-title"> Health Facility List </span>
                    <div class="table-responsive">
                        <table  class="table table-bodered">
                            <thead>
                            <tr>
                                <th data-field="name" style="width:15%">Name</th>
                                <th data-field="parent" style="width:15%">Parent</th>
                                <th data-field="top_level" style="width:25%">Top Level</th>
                                <th data-field="leaf" style="width:25%">Leaf</th>
                                <th data-field="vaccination_point" style="width:15%">Vaccination Point</th>
                                <th data-field="view_registeres" style="width:15%">View Registers</th>
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
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>Monduli District Council</td>
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
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>Ngorongoro District Council</td>
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
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>COGI Karangai Dispensary</td>
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
                                    <a href="#"> <i class="fa fa-list"></i></a>
                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
</div>
@stop
@extends('index')
<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 24/01/16
 * Time: 6:26 PM
 */ ?>
 @section('contents')
    <div class="row">
        <div class="card" style="margin-left: 30px !important; margin-right: 30px !important;">
            <div class="card-content">
            <span class="card-title"> Search Filters </span>
                <div class="row row-sm">
                    <div class="col s6">
                        <div class="input-field col s3">
                          <input  id="system_id" type="text" class="validate disabled">
                          <label class="active" for="phone">System Id</label>
                        </div>

                        <div class="input-field col s3">
                          <input  id="id_fields" type="text" class="validate disabled">
                          <label class="active" for="id_fields">Id Fields</label>
                        </div>

                        <div class="input-field col s3">
                          <input  id="barcode" type="text" class="validate disabled">
                          <label class="active" for="barcode">Barcode</label>
                        </div>

                        <div class="input-field col s3">
                            <input  id="tempid" type="text" class="validate disabled">
                            <label class="active" for="tempid">Temp Id</label>
                        </div>

                    </div>

                   <div class="input-field col s3">
                   <label>From</label>
                       <input type="date" class="datepicker picker__input picker__input--active" id="dob">
                   </div>

                   <div class="input-field col s3">
                   <label>To</label>
                       <input type="date" class="datepicker picker__input picker__input--active" id="dob">
                   </div>

                    <div class="col-sm-12">
                        <div class="col s3 pull-right">
                             <button class="btn waves-effect waves-light pull-right" type="submit" name="action">Search
                             </button>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="row">
            <div class="card" style="margin-right: 30px !important; margin-left: 30px !important;">
                <div class="card-content">
                    <div class="card-title">
                        <span>Children List</span>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bodered">
                            <thead>
                            <tr>
                                <th >System ID</th>
                                <th >Firstname</th>
                                <th >Firstname 2</th>
                                <th >Surname</th>
                                <th >Date Of Birth</th>
                                <th >Gender</th>
                                <th >Health Facility</th>
                                <th >Place Of Birth</th>
                                <th >Village/Domicile</th>
                                <th >Status</th>
                                <th >Phone</th>
                                <th >Mother Firstname</th>
                                <th >Mother Lastname</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="{{ url('child/info') }}">6231721</a></td>
                                <td>John</td>
                                <td>S</td>
                                <td>Doe</td>
                                <td>12-3-2015</td>
                                <td>Male</td>
                                <td>Kaloleni Hospital</td>
                                <td>Arusha</td>
                                <td>Sanawari</td>
                                <td>Good</td>
                                <td>0755688675</td>
                                <td>Miryam</td>
                                <td>Doe</td>
                            </tr>
                            <tr>
                                <td><a href="{{ url('child/info') }}">4D39E9FB92FED199</a></td>
                                <td>Abigael</td>
                                <td>S</td>
                                <td>Massam</td>
                                <td>30-Dec-2015</td>
                                <td>Male</td>
                                <td>Kaloleni Hospital</td>
                                <td>Arusha</td>
                                <td>Sanawari</td>
                                <td>Good</td>
                                <td>0755688675</td>
                                <td>Miryam</td>
                                <td>Doe</td>
                            </tr>

                            <tr>
                                <td><a href="{{ url('child/info') }}">151202083539</a></td>
                                <td>Hagga</td>
                                <td></td>
                                <td>Havag</td>
                                <td>12/3/2000</td>
                                <td>Male</td>
                                <td>Baraa RC Dispensary</td>
                                <td>Arusha</td>
                                <td>Moshono</td>
                                <td>Active</td>
                                <td>0755688675</td>
                                <td>Miryam</td>
                                <td>Doe</td>
                            </tr>

                            <tr>
                                <td><a href="{{ url('child/info') }}">151209073106</a></td>
                                <td>John</td>
                                <td></td>
                                <td>Hendry</td>
                                <td>12/3/2000</td>
                                <td>Male</td>
                                <td>Kaloleni Hospital</td>
                                <td>Home</td>
                                <td>Ngaramtoni</td>
                                <td>Active</td>
                                <td>0755688675</td>
                                <td>Marry</td>
                                <td>Jones</td>
                            </tr>

                            <tr>
                                <td><a href="{{ url('child/info') }}">151207030351</a></td>
                                <td>John</td>
                                <td>S</td>
                                <td>Doe</td>
                                <td>12/3/2000</td>
                                <td>Male</td>
                                <td>Kaloleni Hospital</td>
                                <td>Arusha</td>
                                <td>Sanawari</td>
                                <td>Good</td>
                                <td>0755688675</td>
                                <td>Miryam</td>
                                <td>Doe</td>
                            </tr>

                            <tr>
                                <td><a href="{{ url('child/info') }}">151207024748</a></td>
                                <td>Reina</td>
                                <td></td>
                                <td>Mguda</td>
                                <td>5-Nov-2015</td>
                                <td>Femaile</td>
                                <td>Mareu Rural Health Center</td>
                                <td>Hospital</td>
                                <td>Moshono</td>
                                <td>Active</td>
                                <td>0755688675</td>
                                <td>Bland</td>
                                <td>Noah</td>
                            </tr>

                            <tr>
                                <td><a  href="{{ url('child/info') }}">151127030222</a></td>
                                <td>John</td>
                                <td></td>
                                <td>Smith</td>
                                <td>12/3/2000</td>
                                <td>M</td>
                                <td>Faith Arusha City Dispensary</td>
                                <td>Health Facility</td>
                                <td>Sekei</td>
                                <td>Active</td>
                                <td>0755688675</td>
                                <td>Mary</td>
                                <td>Smith</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        </div>
 @stop
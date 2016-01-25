@extends('index')
<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 24/01/16
 * Time: 6:31 PM
 */ ?>
  @section('contents')
    <div class="row" style="padding-left: 50px !important; padding-right: 50px !important;">
        <div class="card" >
            <div class="card-content">
                <span class="card-title"> Child Information </span>
                <div class="row">

                    <div class="input-field col s5">
                      <input  id="systemid" type="text" class="validate disabled">
                      <label class="active" for="systemid">System Id</label>
                    </div>

                    <div class="input-field col s5 offset-s2">
                      <input  id="barcode" type="text" class="validate disabled">
                      <label class="active" for="barcode">Barcode</label>
                    </div>

                    <div class="input-field col s5">
                      <input  id="mfname" type="text" class="validate disabled">
                      <label class="active" for="mfname">Mother's First Name</label>
                    </div>

                    <div class="input-field col s5 offset-s2">
                      <input  id="msname" type="text" class="validate disabled">
                      <label class="active" for="msname">Mother's Last Name</label>
                    </div>

                    <div class="col s5">
                        <div class="input-field col s6">
                          <input  id="fname" type="text" class="validate disabled">
                          <label class="active" for="fname">First Name</label>
                        </div>

                        <div class="input-field col s6">
                          <input  id="sname" type="text" class="validate disabled">
                          <label class="active" for="sname">Second Name</label>
                        </div>
                    </div>

                    <div class="input-field col s5 offset-s2">
                      <input  id="tname" type="text" class="validate disabled">
                      <label class="active" for="tname">Surname</label>
                    </div>

                    <div class="input-field col s5">
                        <input type="date" class="datepicker picker__input picker__input--active" id="dob">
                    </div>

                    <div class="input-field col s5 offset-s2">
                        <select>
                          <option value="0" disabled selected>Gender</option>
                          <option value="1">Male</option>
                          <option value="2">Female</option>
                        </select>
                    </div>

                    <div class="input-field col s5">
                        <select>
                          <option value="0" disabled selected>Place Of Birth</option>
                          <option value="1">Health Facility</option>
                          <option value="2">Home</option>
                          <option value="2">Hospital</option>
                          <option value="2">Unknown</option>
                        </select>
                    </div>

                    <div class="input-field col s5 offset-s2">
                      <input  id="village" type="text" class="validate disabled">
                      <label class="active" for="village">Village/Domicile</label>
                    </div>

                    <div class="input-field col s5">
                      <input  id="health_facility" type="text" class="validate disabled">
                      <label class="active" for="health_facility">Health Facility</label>
                    </div>

                    <div class="input-field col s5 offset-s2">
                      <input  id="community" type="text" class="validate disabled">
                      <label class="active" for="community">community</label>
                    </div>

                     <div class="input-field col s5">
                        <select>
                          <option value="0" disabled selected>Status</option>
                          <option value="1">Active</option>
                          <option value="2">Moved</option>
                          <option value="2">Dead</option>
                          <option value="2">Duplicate</option>
                          <option value="2">Unknown</option>
                        </select>
                    </div>

                    <div class="input-field col s5 offset-s2">
                      <input  id="phone" type="text" class="validate disabled">
                      <label class="active" for="phone">phone</label>
                    </div>

                    <div class="input-field col s12">
                      <textarea id="notes" class="materialize-textarea"></textarea>
                      <label for="notes">Notes</label>
                    </div>
                    <br><br><br>
                     <div class="col s3 pull-right">
                         <button class="btn waves-effect waves-light pull-right" type="submit" name="action">Submit
                         </button>
                     </div>

                     </div>
            </div>
        </div>
    </div>

  @stop
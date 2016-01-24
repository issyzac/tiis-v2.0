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

                         <div class="col-sm-5">
                             <div class="md-form-group float-label">
                                 <input class="md-input" disabled ng-model="child.systemId" required>
                                 <label>System ID</label>
                             </div>
                         </div>

                         <div class="col-sm-2"></div>

                         <div class="col-sm-5">
                             <div class="md-form-group float-label">
                                 <input class="md-input" ng-model="child.barCode" required>
                                 <label>BarCode</label>
                             </div>
                         </div>

                         <div class="col-sm-5">
                             <div class="md-form-group float-label">
                                 <input class="md-input" ng-model="user.firstName" required>
                                 <label>Mother's First Name</label>
                             </div>
                         </div>

                         <div class="col-sm-2"></div>

                         <div class="col-sm-5">
                             <div class="md-form-group float-label">
                                 <input class="md-input" ng-model="user.lastName" required>
                                 <label>Mother's Last Name</label>
                             </div>
                         </div>

                         <div class="col-sm-5" style="padding: 0px !important;">
                             <div class="col-sm-6">
                                 <div class="md-form-group float-label">
                                     <input class="md-input" ng-model="user.firstName" required>
                                     <label>First Name</label>
                                 </div>
                             </div>

                             <div class="col-sm-6">
                                 <div class="md-form-group float-label">
                                     <input class="md-input" ng-model="user.firstName" required>
                                     <label>Second Name</label>
                                 </div>
                             </div>
                         </div>
                         <div class="col-sm-2"></div>

                         <div class="col-sm-5">
                             <div class="md-form-group float-label">
                                 <input class="md-input" ng-model="user.lastName" required>
                                 <label>Surame</label>
                             </div>
                         </div>

                         <div class="col-sm-5">
                             <br>
                             <label>  Date Of Birth </label>
                             <md-datepicker ng-model="birthday"></md-datepicker>
                         </div>

                         <div class="col-sm-2"></div>

                         <div class="col-sm-5">
                             <div class="md-form-group ">
                                 <select class="md-input">
                                     <option>Gender</option>
                                     <option>Male</option>
                                     <option>Female</option>
                                 </select>
                             </div>
                         </div>

                         <div class="col-sm-5">
                             <div class="md-form-group ">
                                 <select class="md-input">
                                     <option>Select Place Of Birth</option>
                                     <option>Health Facility</option>
                                     <option>Home</option>
                                     <option>Hospital</option>
                                     <option>Unknown</option>
                                 </select>
                             </div>
                         </div>

                         <div class="col-sm-2"></div>

                         <div class="col-sm-5">
                             <div class="md-form-group float-label">
                                 <input class="md-input" ng-model="user.lastName" required>
                                 <label>Village/Domicile</label>
                             </div>
                         </div>

                         <div class="col-sm-5">
                             <div class="md-form-group float-label">
                                 <input class="md-input" ng-model="user.lastName" required>
                                 <label>Health Facility</label>
                             </div>
                         </div>

                         <div class="col-sm-2"></div>

                         <div class="col-sm-5">
                             <div class="md-form-group float-label">
                                 <input class="md-input" ng-model="user.lastName" required>
                                 <label>Community</label>
                             </div>
                         </div>

                         <div class="col-sm-5">
                             <div class="md-form-group ">
                                 <select class="md-input">
                                     <option>Status</option>
                                     <option>Active</option>
                                     <option>Moved</option>
                                     <option>Dead</option>
                                     <option>Duplicate</option>
                                     <option>Unknown</option>
                                 </select>
                             </div>
                         </div>

                         <div class="col-sm-2"></div>

                         <div class="col-sm-5">
                             <div class="md-form-group float-label">
                                 <input class="md-input" ng-model="user.lastName" required>
                                 <label>Phone</label>
                             </div>
                         </div>

                         <div class="col-sm-12">
                             <div class="md-form-group">
                                 <textarea class="md-input" ng-model="user.biography" rows="4"></textarea>
                                 <label>Notes</label>
                             </div>
                         </div>

                         <div class="col-sm-3 pull-right">
                             <label></label>
                             <br>
                             <div class="m-b pull-right">
                                 <button md-ink-ripple class="md-btn md-raised m-b btn-fw blue">Save</button>
                             </div>
                         </div>

                     </div>
            </div>
        </div>
    </div>
  @stop
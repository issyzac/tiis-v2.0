@extends('index')
<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 24/01/16
 * Time: 6:32 PM
 */ ?>
 @section('contents')
 <div class="box-row">
     <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">

             <div class="card" style="margin-left: 30px !important; margin-right: 30px !important;">

                 <div class="card-content">

                 <span class="card-title"> Find Duplicates </span>
                 <br><br>
                     <div class="row row-sm">

                         <div class="col s2">
                             <div class="md-form-group">
                                 <input type="checkbox" class="md-input" ng-model="user.lastName" checked disabled>
                                 <label>Surname</label>
                             </div>
                         </div>

                         <div class="col s2">
                             <p>
                                <input type="checkbox" id="fname" />
                                <label for="fname">First Name</label>
                              </p>
                         </div>

                         <div class="col s2">
                             <p>
                                <input type="checkbox" id="dob" />
                                <label for="dob">Date Of Birth</label>
                              </p>
                         </div>

                         <div class="col s2">
                             <p>
                               <input type="checkbox" id="gender" />
                               <label for="gender">Gender</label>
                             </p>
                         </div>

                         <div class="col s12">
                          <div class="col s3 pull-right">
                               <button class="btn waves-effect waves-light pull-right" type="submit" name="action">Search
                               </button>
                           </div>
                         </div>

                     </div>

                 </div>

             </div>

         </div>
     </div>
 </div>
 @stop
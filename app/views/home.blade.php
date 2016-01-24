@extends('index')
<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 23/01/16
 * Time: 9:36 PM
 */ ?>

@section('contents')

    <div style="height: 500px">
              <div class="row no-gutter">
                <div class="col-md-offset-1 col-md-10">

                  <div class="card">
                    <div class="card-content">
                    <span class="card-title">Stock Statistics</span>
                      <div class="row">
                          <div class="col-sm-12">
                            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto">

                            </div>
                          </div>
                    </div>
                  </div>
                  {{--<div class="card-action">--}}
                    {{--<a href="#">This is a link</a>--}}
                    {{--<a href="#">This is a link</a>--}}
                  {{--</div>--}}
                </div>

                <div class="card">
                    <div class="card-content">
                        <span class="card-title"> Vaccination Statistics </span>
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="lower-container" style="min-width: 310px; height: 400px; margin: 0 auto">

                                </div>
                            </div>

                            </div>
                        </div>
                 </div>
            </div>
    </div>
    </div>

@stop
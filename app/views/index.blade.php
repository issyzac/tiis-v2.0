<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 23/01/16
 * Time: 3:48 PM
 */ ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="Tanzania Immunization Information System">
 <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon"/>
 <title>TIIS</title>

 <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

 <link href="{{ asset('css/color.css') }}" rel="stylesheet">

 <link href="{{ asset('css/mega-menu.css') }}" rel="stylesheet">

 <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

 <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">

 <link href="{{ asset('css/tiis/materialize.css') }}" rel="stylesheet">

 <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

 <link href="{{ asset('css/owl.slider.css') }}" rel="stylesheet">

 <link href="{{ asset('css/tiis.css') }}" rel="stylesheet">

 <link href="{{ asset('iconmoon/Material-Design-Icons.eot') }}" rel="stylesheet">

 <link rel="stylesheet" href="{{ asset('css/abn_tree.css') }}" type="text/css" />

 <!--[if lt IE 9]>

       <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->

       <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->

 <!-- <![endif]-->
 
 </head>
 <body>

 <div id="wrapper" class="">
 <div id="cp-header" class="cp-header">
     <div class="cp-topbar">
         <div class="container no-pad">
            <div class="row">
             <div class="col-md-6 pull-left">
                 <ul class="toplinks">
                 <l class=""> <h6 style="color: white"> Tanzania Immunization Information System </h6> </l>
                 </ul>
             </div>
         </div>
    </div>
 </div>


 <div class="cp-logo-row" style="background-color: #007fd1">
     <div class="container">
         <div class="row">
             <div class="col-md-2">
                <div class="logo"><a href="index.html"><img style="height: 70px; width: 70px" src="{{ asset('images/uhurunaumoja.png') }}" alt=""></a></div>
             </div>
             <div class="col-md-8">
                <p style="align-content: center">

                <h4 class="col-md-offset-2" style="font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, FreeSerif, serif; color: #ffffff"> Ministry Of Health And Social Wellfare </h2>
                <h6 class="col-md-offset-5" style="font-family: 'Palatino Linotype'; color: white"> Immunization and Vaccine Development </h4>

                </p>
             </div>
             <div class="col-md-2 pull-right">
                <div class="logo pull-right"><a href="index.html"><img style="height: 70px; width: 70px" src="{{ asset('images/tanzaniaflagmap.png') }}" alt=""></a></div>
             </div>
         </div>
     </div>
 </div>


 <div class="cp-megamenu" style="height: 60px !important;">
 <div class="">
 <div class="row">
 <div class="col-md-12 card">
 <div class="cp-mega-menu">
 <label for="mobile-button"> <i class="fa fa-bars"></i> </label>

 <input id="mobile-button" type="checkbox">
 <ul class="collapse main-menu">

 <li class="slogo"><a href="{{ url('home') }}"><img style="height: 50px; width: 50px" src="{{ asset('images/uhurunaumoja.png') }}" alt=""></a></li>

 <li><a href="{{ url('home') }}">Home</a>
 </li>
 <li> <a href="">Child</a>
     <ul class="drop-down one-column hover-fade">
          <li> <a href="{{ url('child/search') }}">Search Child</a> </li>
          <li> <a href="{{ url('child/register') }}">Register Child</a> </li>
          <li> <a href="{{ url('child/duplicates')}}">Find Duplicates</a> </li>
      </ul>
 </li>

 <li> <a href="">Immunization</a>
      <ul class="drop-down one-column hover-fade">
           <li> <a href="{{ url('immunization/monthlyplan') }}">Monthly Plan</a> </li>
           <li> <a href="{{ url('immunization/vaccinationregister') }}">Vaccination Register</a> </li>
           <li> <a href="#">Population</a> </li>
       </ul>
  </li>

  <li> <a href="">Stock Issue</a>
       <ul class="drop-down one-column hover-fade">
            <li> <a href="#">Stock Issue List</a> </li>
            <li> <a href="#">New Stock Issue</a> </li>
        </ul>
   </li>

   <li> <a href="">Stock</a>
        <ul class="drop-down one-column hover-fade">
             <li> <a href="#">Current Stock</a> </li>
             <li> <a href="#">Stock Count</a> </li>
             <li> <a href="#">Make an Adjustment</a> </li>
             <li> <a href="#">Item Lots</a> </li>
             <li> <a href="#">GTINs</a> </li>
             <li> <a href="#">Stock Policy</a> </li>
             <li> <a href="#">RIVO Receipt</a> </li>
         </ul>
    </li>

    <li><a href="#">Forms</a></li>

    <li><a href="#">Tally Sheet</a>
        <ul class="drop-down one-column hover-fade">
            <li><a href="#">Weight Tally</a></li>
            <li><a href="#">Stock Tally</a></li>
        </ul>
    </li>

    <li><a href="#">Setup</a>
        <ul class="drop-down one-column hover-fade">
            <li><a href="#"> Health Facility </a></li>
            <li><a href="#"> Places </a></li>
            <li><a href="#"> Birth Places </a></li>
            <li><a href="#"> Communities </a></li>
            <li><a href="#"> Health Facility Type </a></li>
            <li><hr></li>
            <li><a href="#"> Item </a></li>
            <li><a href="#"> Manufacturers </a></li>
            <li><a href="#"> Adjustment Reasons </a></li>
            <li><a href="#"> Units Of Measure </a></li>
            <li><hr></li>
            <li><a href="#"> User </a></li>
            <li><a href="#"> Role </a></li>
            <li><a href="#"> Assign Action To Role </a></li>
        </ul>
    </li>

    <li><a href="#">Vaccination Schedule</a>
        <ul class="drop-down one-column hover-fade">
            <li><a href="{{ url('schedule/scheduled') }}">Scheduled Vaccinations</a></li>
            <li><a href="#"> Age Definitions</a></li>
            <li><a href="#"> Doses</a></li>
            <li><a href="#"> Non Vaccination Reasons</a></li>
        </ul>
    </li>
    <li><a href="#">Configuration</a>
        <ul class="drop-down one-column hover-fade">
            <li> <a href="#"> Global Configurations </a> </li>
            <li> <a href="#"> Help </a> </li>
            <li> <hr> </li>
            <li> <a href="#"> Languages </a> </li>
            <li> <a href="#"> Translations </a> </li>
            <li> <hr> </li>
            <li> <a href="#"> Item Categories </a> </li>
        </ul>
    </li>

 </ul>
 </div>
 </div>
 </div>
 </div>
 </div>

 <div class="main-content">
 <div class="">
    @yield('contents')
 </div>
 </div>

 <footer id="footer" class="footer">
 <div class="footer-four">
 <div class="container">
 <div class="row">
 <div class="col-md-12">
    <p>All Rights Reserved 2016 © MOH </p>
 </div>
 </div>
 </div>
 </div>
 </footer>

 </div>

 <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
 <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('js/materialize.min.js') }}"></script>
 <script src="{{ asset('js/highcharts.js') }}"></script>
 <script src="{{ asset('js/module/data.js') }}"></script>
 <script src="{{ asset('js/module/drilldown.js') }}"></script>
 <script src="{{ asset('js/custom.js') }}"></script>
 <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

 <script>

 </script>

 <script type="text/javascript">
 /* <![CDATA[ */
 (function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
 /* ]]> */
 </script>

     <script>
     $(function () {

        $(document).ready(function() {
            $('select').material_select();
        });

        $('.datepicker').pickadate({
             selectMonths: true, // Creates a dropdown to control month
             selectYears: 15 // Creates a dropdown of 15 years to control year
           });

         // Create the chart
         $('#container').highcharts({
             chart: {
                 type: 'column'
             },
             title: {
                 text: 'Stock Status in Doses'
             },
             subtitle: {
                 text: ''
             },
             xAxis: {
                 type: 'category'
             },
             yAxis: {
                 title: {
                     text: 'Total percent market share'
                 }

             },
             legend: {
                 enabled: false
             },
             plotOptions: {
                 series: {
                     borderWidth: 0,
                     dataLabels: {
                         enabled: true,
                         format: '{point.y:.1f}%'
                     }
                 }
             },

             tooltip: {
                 headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                 pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
             },

             series: [{
                 name: 'Brands',
                 colorByPoint: true,
                 data: [{
                     name: 'BCG',
                     y: 56.33,
                     drilldown: 'BCG'
                 }, {
                     name: 'Measles Diluent',
                     y: 24.03,
                     drilldown: 'Measles Diluent'
                 }, {
                     name: 'ROTA',
                     y: 10.38,
                     drilldown: 'ROTA'
                 }, {
                     name: 'Tetanus',
                     y: 5.9,
                     drilldown: 'Tetanus'
                 }]
             }],
             drilldown: {
                 series: [{
                     name: 'Microsoft Internet Explorer',
                     id: 'Microsoft Internet Explorer',
                     data: [
                         [
                             'v11.0',
                             24.13
                         ],
                         [
                             'v8.0',
                             17.2
                         ],
                         [
                             'v9.0',
                             8.11
                         ],
                         [
                             'v10.0',
                             5.33
                         ],
                         [
                             'v6.0',
                             1.06
                         ],
                         [
                             'v7.0',
                             0.5
                         ]
                     ]
                 }, {
                     name: 'Chrome',
                     id: 'Chrome',
                     data: [
                         [
                             'v40.0',
                             5
                         ],
                         [
                             'v41.0',
                             4.32
                         ],
                         [
                             'v42.0',
                             3.68
                         ],
                         [
                             'v39.0',
                             2.96
                         ],
                         [
                             'v36.0',
                             2.53
                         ],
                         [
                             'v43.0',
                             1.45
                         ],
                         [
                             'v31.0',
                             1.24
                         ],
                         [
                             'v35.0',
                             0.85
                         ],
                         [
                             'v38.0',
                             0.6
                         ],
                         [
                             'v32.0',
                             0.55
                         ],
                         [
                             'v37.0',
                             0.38
                         ],
                         [
                             'v33.0',
                             0.19
                         ],
                         [
                             'v34.0',
                             0.14
                         ],
                         [
                             'v30.0',
                             0.14
                         ]
                     ]
                 }, {
                     name: 'Firefox',
                     id: 'Firefox',
                     data: [
                         [
                             'v35',
                             2.76
                         ],
                         [
                             'v36',
                             2.32
                         ],
                         [
                             'v37',
                             2.31
                         ],
                         [
                             'v34',
                             1.27
                         ],
                         [
                             'v38',
                             1.02
                         ],
                         [
                             'v31',
                             0.33
                         ],
                         [
                             'v33',
                             0.22
                         ],
                         [
                             'v32',
                             0.15
                         ]
                     ]
                 }, {
                     name: 'Safari',
                     id: 'Safari',
                     data: [
                         [
                             'v8.0',
                             2.56
                         ],
                         [
                             'v7.1',
                             0.77
                         ],
                         [
                             'v5.1',
                             0.42
                         ],
                         [
                             'v5.0',
                             0.3
                         ],
                         [
                             'v6.1',
                             0.29
                         ],
                         [
                             'v7.0',
                             0.26
                         ],
                         [
                             'v6.2',
                             0.17
                         ]
                     ]
                 }, {
                     name: 'Opera',
                     id: 'Opera',
                     data: [
                         [
                             'v12.x',
                             0.34
                         ],
                         [
                             'v28',
                             0.24
                         ],
                         [
                             'v27',
                             0.17
                         ],
                         [
                             'v29',
                             0.16
                         ]
                     ]
                 }]
             }
         });
     });

     $(function () {
         $('#lower-container').highcharts({
             chart: {
                 type: 'column'
             },
             title: {
                 text: 'Vaccination Coverage'
             },
             subtitle: {
                 text: ''
             },
             xAxis: {
                 categories: [
                     'BCG',
                     'DTB-hepB-Hib',
                     'Measles',
                     'Measles Rubella',
                     'OPV',
                     'PCV-13',
                     'Rota'
                 ],
                 crosshair: true
             },
             yAxis: {
                 min: 0,
                 title: {
                     text: ''
                 }
             },
             tooltip: {
                 headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                 pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                 '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                 footerFormat: '</table>',
                 shared: true,
                 useHTML: true
             },
             plotOptions: {
                 column: {
                     pointPadding: 0.2,
                     borderWidth: 0
                 }
             },
             series: [{
                 name: 'October',
                 data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6]

             }, {
                 name: 'November',
                 data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0]

             }, {
                 name: 'December',
                 data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0]

             }]
         });
     });

     </script>
 </div>
 </body>
 </html>
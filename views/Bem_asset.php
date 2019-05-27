<!DOCTYPE html>
<html>
<head>
     <script src="<?php echo base_url(); ?>js/highcharts.js"></script>
      <script src="<?php echo base_url(); ?>js/highcharts-3d.js"></script> 
<style type="text/css">
  .tblqap, .tblqap tr, .tblqap tr th, .tblqap tr td{
    border: 1px solid black;  
    background: white;
    color: black;
    
  }

  .tblqapp tr td{
    background: white;
    color: black;
    border: 0px;
  }

  .tblqap2, .tblqap2 tr, .tblqap2 tr th, .tblqap2 tr td{
    border-left: 1px solid black;
    border-right: 1px solid black;
    background: white;
    color: black;
    border-bottom:1px solid black;
    border-top: 1px solid black;
    font-size: 15px;
    border-collapse: collapse;
    text-align: center;
  }

  .ui-color-contents-style{
    background: #FFFF99;
    opacity: 0.9;
    filter: alpha(opacity=90);
    -moz-opacity: 0.9;
    -khtml-opacity: 0.9;
    position: relative;
    z-index: 1;
  }
  table.tblqap tr.row-color td{
    background-color: #f5eeee;
  }

 table.tblqap2 tr.row-color td{
    background-color: #f5eeee;
  }
   .bekas
  {
   border: 2px black solid;
   margin-top: 5%; 
   height: 80%; 
   padding-top: 2%; 
   padding-left: 8%; 
   padding-right: 8%;
  }

/* Style the tab */
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #53a4d1;
  opacity: 0.9;
  height: 95%;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: 0.2px solid #ccc;
  outline: none;
  cursor: pointer;
  padding: 0px;
  margin: 0px;
  transition: 0.3s;
  font-size: 13.5px;
  width: 20%;
  height: 10%;
}

h2{
  color: black; 
  margin-top: 0px; 
  margin-bottom: 5%;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: white;
}

/* Style the tab content */
.tabcontent {
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  background-color: white;
  width:
}

/* Style the close button */
.topright {
  float: right;
  cursor: pointer;
  font-size: 28px;
}

.topright:hover {color: red;}

.ui-color-contents-style{
      background: white;
      opacity: 0.9;
      filter: alpha(opacity=90);
      -moz-opacity: 0.9;
      -khtml-opacity: 0.9;
      position: relative;
      z-index: 1;
      }
 
.dropdownn {
  float: left;
  overflow: hidden;
}

.dropdownn .dropbtn {
  border: none;
  outline: none;
  color: white;
  background-color: inherit;
  font-family: inherit;
}

.navbar a:hover, .dropdownn:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  width: 16%;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  font-size: 13px;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdownn:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>
<div style="left: 0px;width: 75px;margin-left: 15px;background: #EE8833">
      <a href="./qap_type_list"><span class="icon-triangle-left-large" valign="middle"></span> BACK   </a>
    </div>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Performance of Service </button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Analysis by QC Code</button>
  <button class="tablinks" onclick="openCity(event, 'Japan')">SIQ triggered for BEMS Asset</button>
  <button class="tablinks" onclick="openCity(event, 'Malaysia')">Top five BEMS Assets</button>
  <button class="tablinks dropdownn">Analysis of effectiveness of Corrective Action taken
    <i class="icon-triangle-down"></i>
    <div class="dropdown-content">
      <a onclick="openCity(event, 'Indonesia')">Current Situation</a>
      <a onclick="openCity(event, 'China')">Identify and Prioritize Root Cause</a>
      <a onclick="openCity(event, 'Chi')">Root-cause Prioritization</a>
      <a onclick="openCity(event, 'Arab')">Identify Possible Solution</a>
      <a onclick="openCity(event, 'Bandung')">Implementation Plan</a>
      <a onclick="openCity(event, 'Jogja')">Conclusion</a>
      </div>
   </button>
    
<div id="London" class="tabcontent">
<div class="bekas">
  <h2>PPM Completed as Scheduled<h2>
      <div style="height: 350px" id = "container"></div>  
</div>
</div>

<div id="Paris" class="tabcontent">
<div class="bekas">
  <h2>Analysis by QC Code<h2>
  <div  style="height: 350px;" id = "container2"></div>
</div>
</div>
<div id="Japan" class="tabcontent">
<div class="bekas">
  <h2>SIQ triggered for BEMS Asset<h2>
  <table class="tblqap" style="margin-left: 5%; margin-top: 5%;">
  <th colspan="4">SIQ triggered for BEMS Asset - Not Meeting Uptime Target  by Asset Type </th>
    <tr style="background-color: #edbbbb;">
      <td rowspan="2">Month</td>
      <td colspan="3">Melaka</td>
    </tr>
    <tr>
    <td>SIQ Triggered</td>
    <td>CAR Generated</td>
    <td>CAR Closed</td>
    </tr>
    <tr class="row-color">
      <td>Jan-13</td>
      <td>15</td>
      <td>16</td>
      <td>16</td>
    </tr>
     <tr>
      <td>Feb-13</td>
      <td>14</td>
      <td>12</td>
      <td>12</td>
    </tr>
     <tr class="row-color">
      <td>Mar-13</td>
      <td>7</td>
      <td>7</td>
      <td>7</td>
    </tr>
     <tr>
      <td>Apr-13</td>
      <td>22</td>
      <td>20</td>
      <td>20</td>
    </tr>
     <tr class="row-color">
      <td>May-13</td>
      <td>5</td>
      <td>5</td>
      <td>5</td>
    </tr>
     <tr>
      <td>Jun-13</td>
      <td>12</td>
      <td>13</td>
      <td>13</td>
    </tr>
  </table>
</div>
</div>

<div id="Malaysia" class="tabcontent">
<div class="bekas">
  <h2>Top five BEMS Assets</h2>
  <table class="tblqap" style="margin-left: 5%; margin-top: 5%;">
    <tr class="row-color">
      <td>No</td>
      <td>Equipment Type Code</td>
      <td>Equipment Description</td>
    </tr>
     <tr>
      <td>1</td>
      <td>12-647</td>
      <td>Physiologic Monitoring Systems, Acute Care</td>
    </tr>
     <tr class="row-color">
      <td>2</td>
      <td>17-429</td>
      <td>Ventilators, Intensive Care</td>
    </tr>
     <tr>
      <td>3</td>
      <td>13-217</td>
      <td>Infusion Pumps, Syringe</td>
    </tr>
     <tr class="row-color">
      <td>4</td>
      <td>17-148</td>
      <td>Oximeters, Pulse</td>
     </tr>
     <tr>
      <td>5</td>
      <td>18-098</td>
      <td>Ventilators, Transport</td>
    </tr>
  </table>
</div>
</div>

<div id="Indonesia" class="tabcontent">
<div class="bekas">
  <div style="color: black; font-size: 1.5em; font-weight: bolder; padding-bottom: 10px; ">Analysis of effectiveness of Corrective Action taken</div>
  <div style="color: black; margin-bottom: 1%; font-size: 15px;">Summary of top 5 BEMS Asset Not Meeting Uptime Target from January to June 2014.</div>
  <table class="tblqap2" style="margin-left: 5%; margin-top: 0%; height: 10%; width: 90%;">
    <tr class="row-color">
      <td>Asset Description</td>
      <td>Total Asset Not Meeting Uptime Target</td>
      <td>Total Asset Meeting Uptime Target</td>
      <td>Total Assets</td>
    </tr>
     <tr class="row-color">
      <td>Physiologic Monitoring Systems, Acute Care</td>
      <td>30</td>
      <td>154</td>
      <td>184</td>
    </tr>
     <tr>
      <td>Ventilator, Intensive Care</td>
      <td>18</td>
      <td>37</td>
      <td>55</td>
    </tr>
     <tr class="row-color">
      <td>Infusion Pumps, Syringe</td>
      <td>14</td>
      <td>423</td>
      <td>86.46</td>
    </tr>
     <tr>
      <td>Oximeters, Pulse3</td>
      <td>11</td>
      <td>108</td>
      <td>119</td>
    </tr>
     <tr class="row-color">
      <td>Ventilators, Transport</td>
      <td>8</td>
      <td>21</td>
      <td>29</td>
    </tr>
    
  </table>


 <div style="color: black; margin-top: 1%; font-size: 15px;">Summary of top 5 BEMS Asset Not Meeting Uptime by asset age group.</div>
  <table class="tblqap2" style="width: 65%; margin-left: 18%; margin-top: 1%; ">
    <tr class="row-color">
      <td rowspan="2">Asset Description</td>
      <td colspan="5">Asset Age Group (Year)</td>
      <td rowspan="2">Total</td>
    </tr>
     <tr class="row-color">
      <td>≤ 1</td>
      <td>1 ≤ 2</td>
      <td>2 ≤ 5</td>
      <td>5 ≤ 10</td>
      <td>>10</td>
    </tr>
     <tr>
      <td>Infusion Pumps, Syringe</td>
      <td>6</td>
      <td>7</td>
      <td>91</td>
      <td>68</td>
      <td>13</td>
      <td>185</td>
    </tr>
     <tr class="row-color">
      <td>Physiologic Monitoring Systems, Acute Care</td>
      <td>20</td>
      <td>35</td>
      <td>223</td>
      <td>70</td>
      <td>7</td>
      <td>355</td>
    </tr>
     <tr>
      <td>Sphygmomanometers, Electronic, Automatic</td>
      <td>1</td>
      <td>1</td>
      <td>93</td>
      <td>34</td>
      <td>2</td>
      <td>130</td>
    </tr>
     <tr class="row-color">
      <td>Oximeters, Pulse</td>
      <td>1</td>
      <td>3</td>
      <td>85</td>
      <td>22</td>
      <td>2</td>
      <td>113</td>
    </tr>
    <tr>
      <td>Ventilator, Intensive Care</td>
      <td>3</td>
      <td>0</td>
      <td>39</td>
      <td>16</td>
      <td>5</td>
      <td>63</td>
    </tr>
  </table>
  </div>
  </div>
 
<div id="China" class="tabcontent">
<div class="bekas">
<div style="color: black; font-size: 1.5em; font-weight: bolder; padding-bottom: 10px; ">Root Cause</div>
 <table class="tblqap" style="width: 65%; margin-left: 8%; margin-top: 2%; ">
     <tr class="row-color" style="font-weight: bold">
      <td>No</td>
      <td>Root Cause</td>
    </tr>
     <tr>
      <td>1</td>
      <td>Delay in repairing /troubleshooting process</td>
    </tr>
     <tr class="row-color">
      <td>2</td>
      <td>High usage because of shortage of asset or good feature</td>
    </tr>
     <tr>
      <td>3</td>
      <td>Unavailability of spare parts</td>
    </tr>
     <tr class="row-color">
      <td>4</td>
      <td>Parts delay</td>
    </tr> 
  </table>
  <!-- <div style="color: black; font-size: 1.5em; font-weight: bolder; padding-bottom: 10px; ">Analysis of effectiveness of Corrective Action taken</div> -->
<!--   <div style="color: black;">QC codes involved for PPM not done as scheduled.</div> -->
</div>
</div>

<div id="Chi" class="tabcontent">
<div class="bekas">
  <div style="color: black; font-size: 1.5em; font-weight: bolder; padding-bottom: 10px; ">Statistic of the root cause that has been identified</div>
  <table class="tblqap" style="width: 65%; margin-left: 8%; margin-top: 2%; ">
    <tr class="row-color" style="font-weight: bold">
      <td rowspan="2">Status Asset Not Available</td>
      <td colspan="3">Asset Age Group</td>
      <td rowspan="2">Grand Total</td>
    </tr>
     <tr class="row-color" style="font-weight: bold">
      <td><5</td>
      <td>5≥10</td>
      <td>>10</td>
    </tr>
     <tr>
      <td>Machine being borrowed or mobilized </td>
      <td>0</td>
      <td>0</td>
      <td>3</td>
      <td>3</td>
    </tr>
     <tr class="row-color">
      <td>Lock in room/not accessible</td>
      <td>0</td>
      <td>1</td>
      <td>0</td>
      <td>1</td>
    </tr>
     <tr>
      <td>Machine not found in location</td>
      <td>18</td>
      <td>18</td>
      <td>14</td>
      <td>50</td>
    </tr>
     <tr class="row-color">
      <td>Transferred to other unit</td>
      <td>0</td>
      <td>1</td>
      <td>1</td>
      <td>2</td>
    </tr> 
    <tr class="row-color" style="font-weight: bold">
      <td><?php echo anchor ('contentcontroller/cause', 'Machine in use','style="font-size:15px;"'); ?></td>
      <td>39</td>
      <td>32</td>
      <td>18</td>
      <td>89</td>
    </tr>
    <tr class="row-color" style="font-weight: bold">
      <td>Grand Total</td>
      <td>57</td>
      <td>52</td>
      <td>36</td>
      <td>145</td>
    </tr>
  </table>
</div>
</div>

<div id="Arab" class="tabcontent">
<div class="bekas">
  <div style="color: black; font-size: 1.5em; font-weight: bolder; padding-bottom: 10px; ">Identify Possible Solution</div>
  <table class="tblqapp" style="width: 65%; margin-left: 8%; margin-top: 2%; ">
    <tr>
      <td>1.</td>
      <td style="text-align: left;">To enhance technical training to staff.</td>
    </tr>
     <tr>
      <td>2.</td>
      <td style="text-align: left;">To prepare Condition Appraisal on replacement asset age above 10 years old and additional asset.</td>
    </tr>
     <t>
      <td>3.</td>
      <td style="text-align: left;">To find alternative sources for original/OEM parts.</td>
    </tr>
     <tr>
      <td>4.</td>
      <td style="text-align: left;">To keep minimun ex-stock of common spare parts.</td>
    </tr>
     <tr>
      <td>5.</td>
      <td style="text-align: left;">To do corrective maintenance.</td>
    </tr>
    <tr>
      <td>6.</td>
      <td style="text-align: left;">To continuous monitoring and analyze data.</td>
    </tr>
  </table>
</div>
</div>

<div id="Bandung" class="tabcontent">
<div class="bekas">
  <div style="color: black; font-size: 1.5em; font-weight: bolder; padding-bottom: 10px; ">Identified possible solution for the problem and prevent it from reoccur</div>
  <table class="tblqap" style="width: 65%; margin-left: 8%; margin-top: 2%; border: 0px solid black !important; ">
    <tr class="row-color" style="font-weight: bold">
      <td>WHAT</td>
      <td>WHO</td>
      <td>STATUS</td>
    </tr>
     <tr>
      <td style="text-align: left;">To prepare a list of common spare part and vendor based on asset that not meet uptime target by model based on analysis.</td>
      <td style="text-align: left;">APSB</td>
      <td>Done/On going</td>
    </tr>
     <tr>
      <td style="text-align: left;">To prepare a list of alternative vendor for backup to make sure operation not interrupted.</td>
      <td style="text-align: left;">APSB</td>
      <td>Done/On going</td>
    </tr>
     <tr>
      <td style="text-align: left;">To identify and planning of technical training (internal/external)</td>
      <td style="text-align: left;">APSB</td>
      <td>Done/On going</td>
    </tr>
     <tr>
      <td style="text-align: left;">To keep and monitor minimum ex-stock.</td>
      <td style="text-align: left;">APSB</td>
      <td>Ongoing</td>
    </tr>
     <tr>
      <td style="text-align: left;">To prepare Condition Appraisal report on replacement asset age above 10 years old and additional asset.</td>
      <td style="text-align: left;">APSB</td>
      <td>On going</td>
    </tr>
    <tr>
      <td style="text-align: left;">Monitoring on performance.</td>
      <td style="text-align: left;">APSB/MSB</td>
      <td>On going</td>
    </tr>
  </table>
</div>
</div>

<div id="Jogja" class="tabcontent">
<div class="bekas">
  <div style="color: black; font-size: 1.5em; font-weight: bolder; padding-bottom: 10px; ">Conclusion</div>
 
</div>
</div>
<script>


function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

 $(document).ready(function() {   
            var title = {
               text: ''   
            };
            var subtitle = {
               text: ''
            };
            var xAxis = {
               categories: ['Jan 2013', 'Feb 2013', 'Mac 2013', 'Apr 2013', 'May 2013', 'June 2013',
                  'Jan 2014', 'Feb 2014', 'Mac 2014', 'Apr 2014', 'May 2014', 'June 2014']
            };
            var yAxis = {
               title: {
                  text: 'Percentange(%)'
               }
            };
            var plotOptions = {
               line: {
                  dataLabels: {
                     enabled: true
                  },   
                  enableMouseTracking: false
               }
            };
            var series = [{
                  name: 'Series 1',
                  data:  [95.80, 97.85, 96.66, 95.20, 93.49, 91.78,99.15,97.81,97.00,94.78,94.25,93.73],
                  hidden: true,
               }

           /*  var series1 = [{
                  name: 'Series 1',
                  data: [99.15, 97.81, 97.00, 94.78, 94.25, 93.73]
               }*/
            ];
   
            var json = {};
            json.title = title;
            json.subtitle = subtitle;
            json.xAxis = xAxis;
            json.yAxis = yAxis;  
            json.series = series;
          /*  json.series1 = series1;*/
            json.plotOptions = plotOptions;
            $('#container').highcharts(json); 
         });

 $(document).ready(function() {  
            var chart = {
               type: 'column'
            };
            var title = {
               text: ''   
            };
            var subtitle = {
               text: ''
            };
           
            var xAxis = {
               categories: ['QC09','QC06','QC19','QC17','QC05','QC12','QC04'],
               crosshair: true
            };
            var yAxis = {
               min: 0,
               title: {
                  text: ''         
               }      
            };
            var tooltip = {
               headerFormat: '<span style = "font-size:10px">{point.key}</span><table>',
               pointFormat: '<tr><td style = "color:{series.color};padding:0">{series.name}: </td>' +
                  '<td style = "padding:0"><b>{point.y:.1f} mm</b></td></tr>',
               footerFormat: '</table>',
               shared: true,
               useHTML: true
            };
            var plotOptions = {
               column: {
                  pointPadding: 0.2,
                  borderWidth: 0
               }
            };  
            var credits = {
               enabled: false
            };
            var series= [
               {
                  name: '',
                  data: [225000.0,150000.0,5000.0,3000.0,0,0,0]
               }
            ];     
         
            var json = {};   
            json.chart = chart; 
            json.title = title;
            json.subtitle = subtitle;
            json.tooltip = tooltip;
            json.xAxis = xAxis;
            json.yAxis = yAxis;  
            json.series = series;
            json.plotOptions = plotOptions;  
            json.credits = credits;
            $('#container2').highcharts(json);
  
         });
</script>
</body>
</html> 

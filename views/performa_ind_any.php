<!DOCTYPE html>
<html>
<head>
     <script src="<?php echo base_url(); ?>js/highcharts.js"></script>
      <script src="<?php echo base_url(); ?>js/highcharts-3d.js"></script> 
<style type="text/css">
  .tblqap, .tblqap tr, .tblqap tr th, .tblqap tr td{
    border-left: 1px solid black;
    border-right: 1px solid black;
    background: white;
    color: black;
    border-bottom:1px solid black;
    border-top: 1px solid black;
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
   margin-top: 6.5%;
   width: 890px; 
   height: 500px; 
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
  margin-left: 20%;
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
  margin-top: 3%;
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

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">PPM Completed as Scheduled</button>
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
      <div id = "container"></div>  
</div>
</div>

<div id="Paris" class="tabcontent">
<div class="bekas">
  <h2>Analysis by QC Code<h2>
  <div id = "container2" style="padding-left: 100px;"></div>
</div>
</div>

<div id="Japan" class="tabcontent">
<div class="bekas">
  <h2>SIQ triggered for BEMS Asset<h2>
  <table class="tblqap" style="margin-left: 5%; margin-top: 5%;">
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
      <td>5</td>
      <td>5</td>
      <td>5</td>
    </tr>
     <tr class="row-color">
      <td>Mar-13</td>
      <td>16</td>
      <td>16</td>
      <td>16</td>
    </tr>
     <tr>
      <td>Apr-13</td>
      <td>17</td>
      <td>17</td>
      <td>17</td>
    </tr>
     <tr class="row-color">
      <td>May-13</td>
      <td>19</td>
      <td>19</td>
      <td>19</td>
    </tr>
     <tr>
      <td>Jun-13</td>
      <td>10</td>
      <td>10</td>
      <td>10</td>
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
      <td>13-215</td>
      <td>Infusion Pumps, Syringe</td>
    </tr>
     <tr class="row-color">
      <td>2</td>
      <td>17-429</td>
      <td>Ventilators, Intensive Care</td>
    </tr>
     <tr>
      <td>3</td>
      <td>12-647</td>
      <td>Physiologic Monitoring Systems, Acute Care</td>
    </tr>
     <tr class="row-color">
      <td>4</td>
      <td>13-215</td>
      <td>Infusion Pumps, General-Purpose</td>
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
  <div style="color: black; margin-bottom: 1%; font-size: 15px;">Below are summary of overall monthly performance for the period of July to  December 2013, 93.03%, and period of January to June 2014, 90.59%.</div>
  <table class="tblqap2" style="margin-left: 5%; margin-top: 0%; height: 10%; width: 90%;">
    <tr class="row-color">
      <td>Month</td>
      <td>% Of PPM Completed as Scheduled</td>
      <td>Month</td>
      <td>% Of PPM Completed as Scheduled</td>
    </tr>
     <tr class="row-color">
      <td>Jul-13</td>
      <td>95.88</td>
      <td>Jan-14</td>
      <td>90.24</td>
    </tr>
     <tr>
      <td>Aug-13</td>
      <td>98.34</td>
      <td>Feb-14</td>
      <td>95.33</td>
    </tr>
     <tr class="row-color">
      <td>Sep-13</td>
      <td>98.02</td>
      <td>Mar-14</td>
      <td>86.46</td>
    </tr>
     <tr>
      <td>Oct-13</td>
      <td>86.94</td>
      <td>Apr-14</td>
      <td>87.47</td>
    </tr>
     <tr class="row-color">
      <td>Nov-13</td>
      <td>91.98</td>
      <td>May-14</td>
      <td>91.22</td>
    </tr>
    <tr>
      <td>Dec-13</td>
      <td>87.00</td>
      <td>Jan-14</td>
      <td>92.79</td>
    </tr>
  </table>


 <div style="color: black; margin-top: 1%; font-size: 15px;">QC codes involved for PPM not done as scheduled.</div>
  <table class="tblqap2" style="width: 65%; margin-left: 18%; margin-top: 1%; ">
    <tr class="row-color">
      <td>Root Cause</td>
      <td>No of Occurrence</td>
    </tr>
     <tr class="row-color">
      <td>QC01 Equipment not made available</td>
      <td>145</td>
    </tr>
     <tr>
      <td>QC07 Equipment Down</td>
      <td>18</td>
    </tr>
     <tr class="row-color">
      <td>QC06 Vendor Delay</td>
      <td>12</td>
    </tr>
     <tr>
      <td>QC19 Equipment not functional and waiting for BER approval</td>
      <td>11</td>
    </tr>
     <tr class="row-color">
      <td>QC03 Delay of closing work order</td>
      <td>8</td>
    </tr>
  </table>
  </div>
  </div>
 
<div id="China" class="tabcontent">
<div class="bekas">
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
  <div style="color: black; font-size: 1.5em; font-weight: bolder; padding-bottom: 10px; ">Identified possible solution for the problem and prevent it from reoccur</div>
  <table class="tblqap" style="width: 65%; margin-left: 8%; margin-top: 2%; ">
    <tr class="row-color" style="font-weight: bold">
      <td>Root Cause</td>
      <td>Possible Solution</td>
    </tr>
     <tr>
      <td rowspan="4">Machine in use</td>
      <td style="text-align: left;"><li>To do equipment usage analysis to ensure optimum number of equipment is available</li></td>
    </tr>
     <tr>
      <td style="text-align: left;""><li> To conduct a briefing to end user about procedure of Plan Preventive Maintenance, implication to QAP and emphasize on user responsibility to make sure equipment available for PPM and asset movement.</li></td>
    </tr>
     <tr>
      <td style="text-align: left"><li>To remind end user of availability of asset based on schedule date of PPM.</li></td>
    </tr>
     <tr>
      <td style="text-align: left;""><li>To advice end user by preparing Conditional Appraisal report for additional equipment.</li></td>
    </tr>
  </table>
</div>
</div>

<div id="Bandung" class="tabcontent">
<div class="bekas">
  <div style="color: black; font-size: 1.5em; font-weight: bolder; padding-bottom: 10px; ">Identified possible solution for the problem and prevent it from reoccur</div>
  <table class="tblqap" style="width: 65%; margin-left: 8%; margin-top: 2%; ">
    <tr class="row-color" style="font-weight: bold">
      <td>WHAT</td>
      <td>WHO</td>
      <td>STATUS</td>
    </tr>
     <tr>
      <td style="text-align: left;">Do equipment usage analysis to ensure optimum number of equipment is available.</td>
      <td style="text-align: left;">APSB</td>
      <td>Done/On going</td>
    </tr>
     <tr>
      <td style="text-align: left;">Emphasizing on user responsibility to make sure equipment available for PPM.</td>
      <td style="text-align: left;">APSB/MSB</td>
      <td>Done/On going</td>
    </tr>
     <tr>
      <td style="text-align: left;">Alert end user by notify them before the PPM schedule date.</td>
      <td style="text-align: left;">APSB/MSB</td>
      <td>Done/On going</td>
    </tr>
     <tr>
      <td style="text-align: left;">To do briefing on PPM procedure, implication to QAP, emphasize on user responsibility to make sure equipment available for PPM and asset movement.</td>
      <td style="text-align: left;">MSB</td>
      <td>Done/On going</td>
    </tr>
     <tr>
      <td style="text-align: left;">Advised end user by preparing Conditional Appraisal report for additional equipment.</td>
      <td style="text-align: left;">APSB</td>
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
               categories: ['July 2013', 'Aug 2013', 'Sept 2013', 'Oct 2013', 'Nov 2013', 'Dec 2013',
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
                  data: [95.88, 98.34, 98.02 , 86.94, 91.98, 87.00, 90.24, 95.33, 86.46, 87.47,91.22,92.79 ]
               }
            ];
   
            var json = {};
            json.title = title;
            json.subtitle = subtitle;
            json.xAxis = xAxis;
            json.yAxis = yAxis;  
            json.series = series;
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
               categories: ['QC01','QC07','QC06','QC19','QC03'],
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
                  data: [145,18,12,11,8]
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


<!doctype html>
<html lang="en" class="no-js">

<head>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
  <script src="js/modernizr.js"></script> <!-- Modernizr -->
  <link rel="stylesheet" href="css/energy_style.css"> <!-- Resource style -->
  
    
  <title>Energy</title>
      <style>
table {
    width:100%;
}
table, th, td {
   
    border-collapse: collapse;
}
th, td {
    padding: 10px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color: #fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>
</head>
<body>
      <?php 
        require "connection.php";
        $village_id = $_GET['village_id'];
        $district = $_GET['district_name'];
        echo $district;
        echo $village_id;
        mysqli_select_db($con,"grasshoppers");
        $sql="SELECT DISTINCT  FROM".$district."WHERE `C7` = '".$village_id."' ";
        $result = mysqli_query($con,$sql);

        if($result==false)
        {
            echo "No Results";
        }

      ?>
  <header class="cd-main-header">
    
    
    

    <a href="#0" class="cd-nav-trigger">Menu<span></span></a>

    <nav class="cd-nav">
      <ul class="cd-top-nav">
        <li><a href="#0">About</a></li>
        <li><a href="#0">Contact Us</a></li>
        <li class="has-children account">
          <a href="#0">
            <img src="img/cd-avatar.png" alt="avatar">
            Account
          </a>

          <ul>

            <li><a href="#0">My Account</a></li>
            <li><a href="#0">Edit Account</a></li>
            <li><a href="#0">Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header> <!-- .cd-main-header -->

  <main class="cd-main-content">
    <nav class="cd-side-nav">
      <ul>
        <li class="cd-label">Main Menu</li>
        <li class="has-children overview">
          <a href="GVP.html">Generic Profiling</a>
          

        </li>
        <li class="has-children comments active">
          <a href="#0">Community Assessment</a>
          
          <ul>
            <li><a href="Community.html">Community</a></li>
            <li><a href="Individual.html">Indiviual</a></li>
            
          </ul>
        </li>
        <li class="has-children notifications active">
          <a href="#0">Domain Specific Profiling</a>
          
          <ul>
            <li><a href="Infra.html">Public Infrastructure</a></li>
            <li><a href="Energy.html">Energy</a></li>
            <li><a href="Agriculture.html">Agriculture</a></li>
            <li><a href="Honey.html">Honey</a></li>
            <li><a href="HDI.html">HDI</a></li>
          </ul>
        </li>

        
      </ul>
        

      <ul>
        <li class="cd-label">Action</li>
        <li class="action-btn"><a href="#0">+ Button</a></li>
      </ul>
    </nav>
<div class="content-wrapper">
    <div class="cd-tabs js-cd-tabs">
    <nav>
      <ul class="cd-tabs__navigation js-cd-navigation">
        <li><a data-content="infra" class="cd-selected" href="#0">Basic Infrastructure</a></li>
        <li><a data-content="demo" href="#0">Demographics</a></li>
        <li><a data-content="edu" href="#0">Education</a></li>
        <li><a data-content="health" href="#0">Health</a></li>
        <li><a data-content="agriculture" href="#0">Agriculture</a></li>
        <li><a data-content="water" href="#0">Water</a></li>
      </ul> <!-- cd-tabs__navigation -->
    </nav>

    <ul class="cd-tabs__content js-cd-content">
      <li data-content="infra" class="cd-selected">
         <h1><span style="font-weight:bold">Chulha Potential</span></h1>
         <h2>Representation </h2>
         <embed src="#" height="470" width="1000">
         <h2> Detailed Overview: </h2>
         <?php
            echo $district;
            echo $village_id;
         ?>
         </li>

      <li data-content="demo">
 
<div id="chartContainer4" style="width: 45%; height: 300px;display: inline-block;"></div><br><br><br><br><br><br>
 <div id="chartContainer1" style="width: 45%; height: 300px;display: inline-block;"></div>
 <div id="chartContainer2" style="width: 45%; height: 300px;display: inline-block;"></div>

<script>

var chart = new CanvasJS.Chart("chartContainer4",
    {
        animationEnabled: true,
        title: {
            text: "Total Population- Amale"
        },
        axisX: {
            interval: 10,
        },
        data: [
        {
            type: "column",
            legendMarkerType: "triangle",
            legendMarkerColor: "green",
            color: "rgba(255,12,32,.3)",
            showInLegend: true,

            dataPoints: [
                { x: 10, y: 263, label: "Total Population" },
                { x: 20, y: 125, label: "Total Male Population" },
                { x: 30, y: 138, label: "Total Female Population" },
                
            ]
        },
        ]
    });
chart.render();

var chart = new CanvasJS.Chart("chartContainer1",
    {
        animationEnabled: true,
        title: {
            text: "Schedule Tribe Population - Amale",
        },
        data: [
        {
            type: "pie",
            showInLegend: true,
            dataPoints: [
               
                { y: 263, legendText: "ST", indexLabel: "Schedule Tribe Population" },
                { y: 0, legendText: "SC", indexLabel: "Schedule Caste Population" }
                
            ]
        },
        ]
    });
chart.render();

var chart = new CanvasJS.Chart("chartContainer2",
    {
        animationEnabled: true,
        title: {
            text: "Schedule Tribe Population - Amale",
        },
        data: [
        {
            type: "pie",
            showInLegend: true,
            dataPoints: [
               
                { y: 125, legendText: "Male ST", indexLabel: "Total Male Schedule Tribe Population" },
                { y: 138, legendText: "Femal ST", indexLabel: "Total Female Schedule Tribe Population" }
                
            ]
        },
        ]
    });
chart.render();

</script>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
      </li>

      <li data-content="edu">
        <table id="t01">
  <tr>
    <th>School</th>
    <th>Government/Private</th>
  <th>Number</th> 
   
  </tr>
  <tr>
    <td>Pre-Primary</td>
    <td>Government</td>
  <td>1 </td>
  
  </tr>
  <tr>
  <td> </td>
  <td>Private</td>
  <td>1 </td>
    
  </tr>
  <tr>
    <td>Primary</td>
    <td>Government</td>
  <td>1 </td>
  
  </tr>
  <tr>
  <td> </td>
  <td>Private</td>
  <td>0 </td>
    
  </tr>
  <tr>
    <td>Middle</td>
    <td>Government</td>
  <td>0 </td>
  
  </tr>
  <tr>
  <td> </td>
  <td>Private</td>
  <td>1 </td>
    
  </tr>
  <tr>
    <td>Secondary</td>
    <td>Government</td>
  <td>0 </td>
  
  </tr>
  <tr>
  <td> </td>
  <td>Private</td>
  <td>0 </td>
    
  </tr>
  <tr>
    <td>Senior Secondary</td>
    <td>Government</td>
  <td>0 </td>
  
  </tr>
  <tr>
  <td> </td>
  <td>Private</td>
  <td>0 </td>
    
  </tr>
</table>
      </li>
      <li data-content="health">
      <table id="t01">
  <tr>
    <th>Health Centres</th>
    <th>Availability</th> 
    
  </tr>
  <tr>
    <td>Community Health Centre</td>
    <td>Yes</td>
    
  </tr>
  <tr>
    <td>Public Health Centre</td>
    <td>No</td>
    
  </tr>
  <tr>
    <td>Public Health Sub-Centre</td>
    <td>No</td>
    
  </tr>
  <tr>
    <td>Vetenary Hospital</td>
    <td>No</td>
    
  </tr>
  
  
</table>  
      </li>
      <li data-content="agriculture">
        <p>Gallery Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque tenetur aut, cupiditate, libero eius rerum incidunt dolorem quo in officia.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ipsa vero, culpa doloremque voluptatum consectetur mollitia, atque expedita unde excepturi id, molestias maiores delectus quos molestiae. Ab iure provident adipisci eveniet quisquam ratione libero nam inventore error pariatur optio facilis assumenda sint atque cumque, omnis perspiciatis. Maxime minus quam voluptatum provident aliquam voluptatibus vel rerum. Soluta nulla tempora aspernatur maiores! Animi accusamus officiis neque exercitationem dolore ipsum maiores delectus asperiores reprehenderit pariatur placeat, quaerat sed illum optio qui enim odio temporibus, nulla nihil nemo quod dicta consectetur obcaecati vel. Perspiciatis animi corrupti quidem fugit deleniti, atque mollitia labore excepturi ut.</p>
      </li>
      <li data-content="water">
    
<body>

<table id="t01">
  <tr>
    <th>Water</th>
    <th>Availability</th> 
    
  </tr>
  <tr>
    <td>Tap Water- Treated</td>
    <td>Yes</td>
    
  </tr>
  <tr>
    <td>Tap Water- Untreated</td>
    <td>Yes</td>
    
  </tr>
  <tr>
    <td>Covered Well</td>
    <td>Yes</td>
    
  </tr>
  <tr>
    <td>Uncovered Well</td>
    <td>Yes</td>
    
  </tr>
  <tr>
    <td>Hand Pump</td>
    <td>Yes</td>
    
  </tr>
  <tr>
    <td>Tubewell/Borehole</td>
    <td>Yes</td>
    
  </tr>
  <tr>
    <td>Spring</td>
    <td>Yes</td>
    
  </tr>
  <tr>
    <td>River/Canal</td>
    <td>Yes</td>
    
  </tr>
  <tr>
    <td>Tank/Pond/Lake</td>
    <td>Yes</td>
    
  </tr>
</table>

      </li>

    </ul> <!-- cd-tabs__content -->
  </div> <!-- cd-tabs -->
    </div>
  </main> <!-- .cd-main-content -->
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script src="js/energy.js"></script>
</body>
</html>
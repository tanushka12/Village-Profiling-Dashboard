<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<script src="js/generic.AJAX.js"></script><!-- AJAX -->
  	
	<title>Responsive Sidebar Navigation | CodyHouse</title>
	
<style>
* {
    box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
    height: 85px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>

<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

#myInput {
    border-box: box-sizing;
    background-image: url('searchicon.png');
    background-position: 14px 12px;
    background-repeat: no-repeat;
    font-size: 16px;
    padding: 14px 20px 12px 45px;
    border: none;
    border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f6f6f6;
    min-width: 230px;
    overflow: auto;
    border: 1px solid #ddd;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>
<body>
	<header class="cd-main-header">
		
		
		<div class="cd-search is-hidden">
			<form action="#0">
				<input type="search" placeholder="Search...">
			</form>
		</div> <!-- cd-search -->

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
	<!--	<nav class="cd-side-nav">
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
		</nav>-->

		<div class="content-wrapper">
			<h1><span style="font-weight:bold">Generic Profiling</span></h1>

			
			<form method="POST" action="filter.php">
				<h3>Select the Area to work in:</h3><br>
				<select name="states" onchange="showUser(this.value)">
				  <option value="">--select state--</option>
				  <option value="Maharashtra">Maharashtra</option>
				  <option value="Gujrat">Gujrat</option>
				  <option value="Rajasthan">Rajasthan</option>
				  <option value="Karnatka">Karnatka</option>
				  </select>
			
			
					<br><br>

			
				<div id="txtHint"><h3 id='heading'></h3></div>
			
				<div id="txtHint1"><h3 id='heading1'></h3></div>
				<br>

				<h3>Filters</h3><br>
				<h5>Poplation:</h5>
				Range: <input type="number" name="pop_lower" min="0" step="100" max="66062" value="0"> to <input type="number" name="pop_higher" min="0" value="0" max="66062" step="100"><br>
				<br>
				<h5>Caste Distribution:</h5>
				<input type="radio" name="caste" value="1"> Unicaste( >90% Popuulation of Same caste )<br>
				<input type="radio" name="caste" value="0"> Multicaste ( < 90% Population of Same Caste )<br><br>

				<h5>Road Connectivity:</h5>
				<input type="radio" name="road" value="1"> Pakka Road<br>
				<input type="radio" name="road" value="0"> Kaccha Road<br><br>

				<input type="submit" value="Go >">


		</form>

			
	
		</div> <!-- .content-wrapper -->
	</main> <!-- .cd-main-content -->
	
	<script>
	var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
	</script>
	
<script>
var countryStateInfo = {
	
	"India": {
		"Maharashtra": {
			"Nashik": ["Demographics", "Health", "Education", "Agriculture"],
			"Thane" : ["Demographics", "Health", "Education", "Agriculture"],
			"Gadchiroli" : ["Demographics", "Health", "Education", "Agriculture"],
			"Wardha" : ["Demographics", "Health", "Education", "Agriculture"]
		}
		
	}
}


window.onload = function () {
	
	//Get html elements
	var countySel = document.getElementById("countySel");
	var stateSel = document.getElementById("stateSel");	
	var citySel = document.getElementById("citySel");
	var zipSel = document.getElementById("zipSel");
	
	//Load countries
	for (var country in countryStateInfo) {
		countySel.options[countySel.options.length] = new Option(country, country);
	}
	
	//County Changed
	countySel.onchange = function () {
		 
		 stateSel.length = 1; // remove all options bar first
		 citySel.length = 1; // remove all options bar first
		 zipSel.length = 1; // remove all options bar first
		 
		 if (this.selectedIndex < 1)
			 return; // done
		 
		 for (var state in countryStateInfo[this.value]) {
			 stateSel.options[stateSel.options.length] = new Option(state, state);
		 }
	}
	
	//State Changed
	stateSel.onchange = function () {		 
		 
		 citySel.length = 1; // remove all options bar first
		 zipSel.length = 1; // remove all options bar first
		 
		 if (this.selectedIndex < 1)
			 return; // done
		 
		 for (var city in countryStateInfo[countySel.value][this.value]) {
			 citySel.options[citySel.options.length] = new Option(city, city);
		 }
	}
	
	//City Changed
	citySel.onchange = function () {
		zipSel.length = 1; // remove all options bar first
		
		if (this.selectedIndex < 1)
			return; // done
		
		var zips = countryStateInfo[countySel.value][stateSel.value][this.value];
		for (var i = 0; i < zips.length; i++) {
			zipSel.options[zipSel.options.length] = new Option(zips[i], zips[i]);
		}
	}	
}

</script>


	

	
<!--<script src="js/jquery-2.1.4.js"></script>-->
<script src="js/jquery.menu-aim.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
	function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
               // document.getElementById("heading").innerHTML = 'Districts';
            }
        };
        xmlhttp.open("GET","getData.php?q="+str,true);
        xmlhttp.send();
    }
}
function showTaluka(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint1").innerHTML = this.responseText;
                //document.getElementById("heading1").innerHTML = 'Sub-Districts';
            }
        };
        xmlhttp.open("GET","getTaluka.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</body>
</html>
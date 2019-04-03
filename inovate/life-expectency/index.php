<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/core/config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $ini['app_title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $ini['app_url'] ?>/assets/css/main.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="<?php echo $ini['app_url'] ?>/assets/img/favicon.jpg" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
main{
	text-align: center;
}
button{
	display: inline-block;
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
	display: none;
}
#chart{
	margin: 1em auto;
	width: 90%;
}
select{
	margin:0 auto;
	padding: 0.5em;
}
</style>
</head>
<body class="nobg">
<?php include_once($ini['app_dir'] . "/templates/header.html") ?>
<?php include_once($ini['app_dir'] . "/templates/nav.html") ?>
    <main>
    <div class="container main">
		<div class="page-title">Inovate</div>
		<div class="page-sub-title">Life Expectency</div>

		<select id = "ddlCountries" ></select>
		
		<button value="World" onclick="selectWorld(value)">World</button> 
		<button value="Low income" onclick="selectWorld(value)">Low Income</button> 
		<button value="Middle income" onclick="selectWorld(value)">Middle Income</button> 
		<button value="High income" onclick="selectWorld(value)">High Income</button> 
		<button value="Low & middle income" onclick="selectWorld(value)">Low & Middle Income</button> 
		<button value="Lower middle income" onclick="selectWorld(value)">Lower Middle Income</button> 
		<button value="Upper middle income" onclick="selectWorld(value)">Upper Middle Income</button> 
		
		<br/>
		<br/>
		<br/>
		
		<div id="chart" class="chart" >
		
			<canvas id="life_expect" width="100" height="20"></canvas>
			
		</div>
		
		 <div id="app"></div>
  
		  <div id="html">
		  
		  </div>


      </div>
</main>
	</body>

 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
 <script src="<?php echo $ini['app_url']; ?>/assets/js/main.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	
	<script type="text/javascript" >
	
	
	//generate country list
	$(function ddl(selectedCountry) {
		$.ajax({
		"url": "<?php echo $ini['app_url']; ?>/assets/js/life_expect_data.json", 
		"dataType": "json",
		"type": "get",
		"success": function(data)
		{
			//get length of array
			var size = data.Root.data.record.length;

			//for each object in array check the country name
			var findCountry = '';
					
			//add default vaule to ddl
			var ddl = document.getElementById("ddlCountries");
			var option = document.createElement("OPTION");
			    
			option.innerHTML = "Select Country...";
			option.value = "Select Country...";
			ddl.options.add(option);

		
					
			//add all countries to ddl		
			for(var i = 0;i<size;i++)
			{
				//if country is a new find
				if(data.Root.data.record[i].field[0]['#text'] != findCountry)
				{			
					//save country name to var
					findCountry = data.Root.data.record[i].field[0]['#text'];
					
					//add to ddl
					var ddl = document.getElementById("ddlCountries");
				    var option = document.createElement("OPTION");
				    
					option.innerHTML = data.Root.data.record[i].field[0]['#text'];
				    option.value = data.Root.data.record[i].field[0]['#text'];
					ddl.options.add(option);
					
				}
				
			}
		}
	});
	
	});
	
	//get clicked button value
	function selectWorld(btnValue) {
	  
		//find value in ddl
		var ddl = document.getElementById('ddlCountries');
		var options = ddl.options.length;
		
		for (var i=0; i<options; i++)
		{
		
			//once found select that value
			if (ddl.options[i].value == btnValue)
			{
				ddl.options[i].selected = true;
				break;
			}
		}
		
		//change to value and call graph creation function
		$("#ddlCountries").change();
		
	}
	
	
	//generate table with selected country
	$("#ddlCountries").change(function graph() {
		$.ajax({
		"url": "<?php echo $ini['app_url']; ?>/assets/js/life_expect_data.json", 
		"dataType": "json",
		"type": "get",
		"success": function(data)
		{
			
			//get length of array
			var size = data.Root.data.record.length;		
			
			
			//get selected country
			var country = $('#ddlCountries').find(":selected").text(); // get selected value
					
					
			// none selected return null
			if(country == "Select Country...")
			{
			
				return null;
			}
					
			//get years
			var yearString = "";
			$x = 1960;
			do
			{
 				yearString = yearString + $x + ", ";
				$x++;
				
			}while($x < 2017);
				
			//remove space and comma from end of string
			yearString = yearString.slice(0, -2);

			
			//get values
			var valueString = '';
		
			//get life expectancy values as a list in a string
			for(var i = 0;i<size;i++)
			{
				if(data.Root.data.record[i].field[0]['#text'] == country) 
				{
					valueString = valueString + ", " + data.Root.data.record[i].field[3]['#text'];
				}
			}
			
			//remove unwanted start and ends of string
			valueString = valueString.substr(2); 
			valueString = valueString.slice(0, -22);
			
			//remove old graph and create new one
			$('#life_expect').remove();
			$('#chart').append('<canvas id="life_expect" width="100" height="20"></canvas>');
			canvas = document.querySelector('#life_expect'); 
			ctx = canvas.getContext('2d');
			  
			
			//add data to the graph
			var options = {
				  type: 'line',
				  data: {
					labels: yearString.split(', '),
					datasets: [
						{
						  label: 'Life Expectancy (Years) for ' + country,
						  data: valueString.split(', '),
						borderWidth:1
						}
						]
				  },
				  options: {
					scales: {
						yAxes: [{
						ticks: {
									reverse: false
						}
					  }]
					}
				  }
				}

				var ctx = document.getElementById('life_expect').getContext('2d');
				new Chart(ctx, options);
			
		}
		

		
		});	
	});
	

</script>

	

</body>

</html>
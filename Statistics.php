<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'links/links.php'; ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Statistics</title>
<style>
    #tbl
       overflow-y:scroll;

    }
    th{
        position:sticky;
        top:0;
    }
</style>

</head>
<body onload="fetch()">


<section class="corona_update container-fluid">
	<div class="mb-5">
		<h3 class="text-uppercase text-center">covid-19 Live Updates of the World</h3>
	</div>
	<div class="table-responsive">
		
		<table class="table sticky table-bordered table-striped text-center" id="tbl">
			<tr style="background-color: #aeb6bf;position:" >
				<th >Country</th>
				<th>TotalConfirmed</th>
				<th>TotalRecovered</th>
				<th>TotalDeaths</th>
				<th>NewConfirmed</th>
				<th>NewRecovered</th>
				<th>NewDeaths</th>
			</tr>
		</table>
	</div>
    <script>
           function fetch() {
            $.get("https://api.covid19api.com/summary",
                function (data) {
                    console.log(data['Countries'].length)  //total countries
                    var tbl = document.getElementById('tbl');
                    for(var i=1;i<(data['Countries'].length);i++)
                    {
                        var x = tbl.insertRow(i);
                        x.insertCell(0);
                        tbl.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                        // tbl.rows[i].cells[0].style.background = '#7a4a91';
                        tbl.rows[i].cells[0].style.color = '#000000';

                        x.insertCell(1);
                        tbl.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                        // tbl.rows[i].cells[1].style.background = '#4bb7d8';

                        x.insertCell(2);
                        tbl.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                        // tbl.rows[i].cells[2].style.background = '#9cc850';

                        x.insertCell(3);
                        tbl.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                        // tbl.rows[i].cells[3].style.background = '#f36e23';

                        x.insertCell(4);
                        tbl.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                        // tbl.rows[i].cells[4].style.background = '#4bb7d8';

                        x.insertCell(5);
                        tbl.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                        // tbl.rows[i].cells[5].style.background = '#9cc850';

                        x.insertCell(6);
                        tbl.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                        // tbl.rows[i].cells[6].style.background = '#f36e23';

                    }
                });
        }

    </script>
</body>
</html>
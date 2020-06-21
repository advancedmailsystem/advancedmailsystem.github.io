<html>
 
    <?php
    $station=$_POST["station"];
    $stan=array("PH WADIA & SONS","PRABHAT PETROLEUM","SHREEJIKRUPA PETROLEUM","SHREE ANJANEY","SHAYONA PETROLEUM");
    $st=array("wadia","mendarda","maliya","anjaney","visavadar");
    for($i=0;$i<5;$i++){
        if($station == $st[$i]){
            $statp=$stan[$i];
            break;
        }
    }
    $fname="stations/".$_POST["station"].".csv";
    
    
    
    
    $fp = fopen($fname, "r");
    while ($rec = fgetcsv($fp)){ 
        $r1 = $rec[0];
        $r2 = $rec[1];
        $r3 = $rec[2];
        $r4 = $rec[3];
        $rr5 = $rec[4];
        $r5= sprintf("%02d", $rr5);
        $rr6 = $rec[5];
        $r6= sprintf("%02d", $rr6);
        $r7 = $rec[6];
        $r8 = $rec[7];
        $r9 = $rec[8];
    } 
    
    //Close the file
    fclose($fp);
    
    
    $yesd=date('d-m-Y',strtotime("-1 days"));
    
    
    ?>
    
    
    
    
    
    <head>
        
        <style>
            table, th, td {
            border: 1px solid black;
            width: 500px;
            text-align: center;
            vertical-align: middle;
            height: 50px;
            margin-left: auto;
            margin-right:auto;
            font-size: 40px;
            }
        
        </style>
        <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    </head>
    
    
    
    
    
<body>
    
    <br>
    <br>
    <br>
    <table>
<tr bgcolor="#f4c430">
<td><a href=https://torrentgas.000webhostapp.com/>Home</a></td>
             <td><a href=stations/Sale_data.html>Sales</a></td>
            
</tr>
</table>
    
    
    <br>
    <br>
    <h1 style="text-align: center">Dispenser Sheet <var id="date"></var> 2020</h1>


<div>
<table style="width:85%" border="5" bordercolordark="black" bgcolor="white">
			<tr>
				<th colspan="2" bgcolor="yellow"><?= $statp ?></th>
				<th bgcolor="grey">Date</th>
				<th bgcolor="yellow"><?= $yesd ?></p></th>
			</tr> 
			<tr bgcolor="grey">
			<td ></td>
			<td>Start</td>
			<td>End</td>
			<td>Difference</td>
			</tr>
			
			<tr >
				<td style="height:10px" bgcolor="white" colspan="4"></td>
			</tr>

<?php   $df1=round($_POST["1a"]-$r1,2);
        $df2=round($_POST["1b"]-$r2,2);
        $df3=round($_POST["2a"]-$r3,2);
        $df4=round($_POST["2b"]-$r4,2);
        $df5=round($_POST["KWH"]-$r7,2);
        $df6=round($_POST["Suction"]-$r8,2);
        $df7=round($_POST["Discharge"]-$r9,2);
        
        $total = $df1+$df2+$df3+$df4;
        
        //time calculations
        $HHH= $_POST["HMR"];
        $MMM= $_POST["HMRmm"];
        $hhh = sprintf("%02d", $HHH);
		$mmm = sprintf("%02d", $MMM);
		 $dhhh=$hhh-$r5;
		if ($mmm >= $r6 ) {
			$dmmm=$mmm-$r6;
		} else {
			$dhhh=$dhhh-1;
			$dmmm=$_POST["HMRmm"]-$r6;
			$dmmm=60+$dmmm;
		}
		$dhs = sprintf("%02d", $dhhh);
		$dms = sprintf("%02d", $dmmm);
		$Hours=$dhs+($dms/60);
		//Calculated Results
		if ( $df7 == 0 ) {
        // don't divide by zero, handle special case
        $cr1 ="No sale";
        } else {
        $cr1 = round($df5/$df7,3);
        }
		$scmm=$df7/0.71;
		if ( $Hours == 0) {
		    $cr2 = 0;
		} else {
		$cr2 = round($scmm/$Hours,2);
		}
		

		
?>


			<tr>
			<td bgcolor="grey">1A</td>
			<td><?= $r1 ?></td>
			<td><?php echo $_POST["1a"]; ?></td>
			<td><?= $df1 ?></td>
			</tr>

			<tr >
				<td style="height:10px" bgcolor="white" colspan="4"></td>
			</tr>


			<tr>
			<td bgcolor="grey">1B</td>
			<td><?= $r2 ?></td>
			<td><?php echo $_POST["1b"]; ?></td>
			<td><?= $df2 ?></td>
			</tr>

			<tr >
				<td style="height:10px" bgcolor="white" colspan="4"></td>
			</tr>

			<tr>
			<td bgcolor="grey">2A</td>
			<td><?= $r3 ?></td>
			<td><?php echo $_POST["2a"]; ?></td>
			<td><?= $df3 ?></td>
			</tr>

			<tr >
				<td style="height:10px" bgcolor="white" colspan="4"></td>
			</tr>

			<tr>
			<td bgcolor="grey">2B</td>
			<td><?= $r4 ?></td>
			<td><?php echo $_POST["2b"]; ?></td>
			<td><?= $df4 ?></td>
			</tr>

			<tr >
				<td style="height:10px" bgcolor="white" colspan="4"></td>
			</tr>

			<tr>
				<td bgcolor="grey" colspan="3" style="text-align: center">Total</td>
				<td bgcolor="yellow"><?= $total ?></td>
			</tr>

			<tr >
				<td style="height:10px" bgcolor="black" colspan="4"></td>
			</tr>
<!--Second Section-->			
			
			<tr>
			<td bgcolor="grey">HMR</td>
			<td><?= $r5 ?>&nbsp;:&nbsp;<?= $r6 ?></td>
			<td><?php echo $hhh; echo " : "; echo $mmm ?></td>
			<td bgcolor="yellow"><?= $dhs ?><?php echo " : "?><?= $dms ?></td>
			</tr>

			<tr >
				<td style="height:10px" bgcolor="white" colspan="4"></td>
			</tr>

			<tr>
			<td bgcolor="grey">KWH</p></td>
			<td><?= $r7 ?></td>
			<td><?php echo $_POST["KWH"]; ?></td>
			<td bgcolor="yellow"><?= $df5 ?></td>
			</tr>

			<tr >
				<td style="height:10px" bgcolor="white" colspan="4"></td>
			</tr>

			<tr>
			<td bgcolor="grey">Suction</td>
			<td><?= $r8 ?></td>
			<td><?php echo $_POST["Suction"]; ?></td>
			<td bgcolor="yellow"><?= $df6 ?></td>
			</tr>

			<tr >
				<td style="height:10px" bgcolor="white" colspan="4"></td>
			</tr>

			<tr>
			<td bgcolor="grey">Discharge</p></td>
			<td><?= $r9 ?></td>
			<td><?php echo $_POST["Discharge"]; ?></td>
			<td bgcolor="yellow"><?= $df7 ?></td>
			</tr>

			<tr >
				<td style="height:10px" bgcolor="white" colspan="4"></td>
			</tr>

			<tr>
				<td bgcolor="grey" colspan="3" style="text-align: center">MCV Pressure</td>
				<td bgcolor="yellow"><?php echo $_POST["Pressure"]; ?></td>
			</tr>
			<tr >
				<td style="height:10px"bgcolor="black" colspan="4"></td>
			</tr>

			<tr >
				<td style="height:10px" bgcolor="white" colspan="4"></td>
			</tr>

			<tr>
			<td bgcolor="grey">KWH/KG</td>
			<td><?= $cr1 ?></td>
			<td bgcolor="grey">SCMH</td>
			<td><?= $cr2 ?></td>
			</tr>	

       
	</table>
</div>




<?php 

   

$data = array( 

    $_POST['1a'], 

    $_POST['1b'], 

    $_POST['2a'],
    
    $_POST['2b'],
    
    $hhh,
    
    $mmm,
    
    $_POST['KWH'],
    
    $_POST['Suction'],
    
    $_POST['Discharge'],
    
    $_POST['Pressure'],
); 

  
// Open file in append mode 

$fp = fopen($fname, 'a'); 

  
// Append input data to the file   

fputcsv($fp, $data); 

  
// close the file 

fclose($fp); 
?> 





















<script>
        var month = new Array();
              month[0] = "January";
              month[1] = "February";
              month[2] = "March";
              month[3] = "April";
              month[4] = "May";
              month[5] = "June";
              month[6] = "July";
              month[7] = "August";
              month[8] = "September";
              month[9] = "October";
              month[10] = "November";
              month[11] = "December";
            var dt = new Date();
            var n = month[dt.getMonth()];
            document.getElementById("date").innerHTML = n;
            document.getElementById("fdate").innerHTML = (("0"+(dt.getDate()-1)).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ 	(dt.getFullYear());
        </script>
        
        <br>
        <br>
        <br>
        <div style="color:white;font-size:12px;">Created By:@PrimeKiller</div>
        
</body>
</html>

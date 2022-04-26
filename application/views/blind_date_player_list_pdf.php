<html>
	<head>
		<title>
			BLIND DATE PLAYER LIST
		</title>
	</head>
    <style>
	
table,th{
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 1px;
  margin-left: 50px;
  font-size:12px;
  }
table,tr{
	margin-left: 100px;
	font-size:10px;
	
}

.red
{
	color:#F00;
}
h2
{
	font-size:11px;
}
hr.vertical
{
	width:5px;
	height:100%;
}
</style>
    <body>
        
     <h1>BLIND DATE PLAYERS LIST</h1>   
	<?php
						
						if(!empty($user))
						{
						?>
						<h2 align="center" style="font-size:13px;color:#0B4977;"></h2>
						
						<br/><br/>
						<table width="100%" border="1" style="margin-right:25px;">
						<thead> 
						<tr style="color:black;background-color:#d3d3d3;font-size:11px;"> 
						<th width="5%" align="left" ><b>Sl. No.</b></th>
						<th width="15%" align="left" ><b>PLAYER NAME</b></th> 	
                        <th width="20%" align="left" ><b>COLLEGE NAME</b></th> 
						<th width="15%" align="left" ><b>DEPARTMENT</b></th> 		
					
						</tr> 
						</thead> 
						<tbody> 
						<?php
						$count='1';
						
						foreach($user  as $r): 
	
						 ?>		
						<tr> 
						<td width="5%" align="left"><?php echo $count;?></td> 
						<td width="15%" align="left"><?php echo $r['name']; ?></td> 
						<td width="20%" align="left"><?php echo $r['college_name']; ?></td> 
						<td width="15%" align="left"><?php echo $r['department'];?></td> 
					   </tr>					
					   
						<?php  
						$count++;						
						endforeach; ?>
							
						</tbody> 
						</table>
						<?php 
						} 
						
						?>
			
			
	</body>
</html>
<!DOCTYPE html>
<html lang="en">  
<head>
		<title>
			
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

    <h1>GROUP DISCUSSION PARTICIPANTS LIST</h1>

<table width="100%" border="1" style="margin-right:25px;">
  <thead>
    <tr>
	  <th>sl. No.</th> 
      <th scope="col">PARTICIPANT'S NAME</th>
	   <th scope="col">COLLEGE NAME</th>
      <th scope="col">DEPARTMENT</th>
     <th scope="col">PHONE No.</th>
    </tr>
  </thead>
  <tbody>
  <?php 
 $count = '1';
  if(!empty($list)){?>
  <?php foreach($list as $list){ ?>
  
    <tr class="table-active">
	  <td><?php echo $count;?></td>
      <td><?php echo $list['name']; ?>,&nbsp;&nbsp;
	   <?php echo $list['name2']; ?>,&nbsp;&nbsp;
	   <?php echo $list['name3']; ?>,&nbsp;&nbsp;
	   <?php echo $list['name4']; ?></td>
	   <td><?php echo $list['college_name']; ?></td>
      <td><?php echo $list['department']; ?></td>
	  <td><?php echo $list['phone']; ?></td>
    </tr>
	
  <?php  $count++;}?>
  
    
  </tbody>
  <?php }else{  echo "No Records Found."; } ?> 
</table>
  

</body>
</html>
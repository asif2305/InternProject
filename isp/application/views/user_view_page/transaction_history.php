<br/><br/>

<div class="row offset1">
		<div class="col-md-7 col-md-offset-1">
		<table class="table table-bordered">
          <caption>limited Data PLans</caption>
          <thead>
                <tr style="background:#428bca;">
		        	<th>ID</th>
		        	<th>Payment_Date</th>
		        	<th>Amount</th>

               </tr>
         </thead>
       <tbody align="center">
     <?php foreach($row as $r) :?>
       	 <tr >
          <td><?php echo $r->id ;?> </td>
        <td><?php echo $r->pay_date ;?></td>
         <td><?php echo $r->amount ;?></td>
         </tr>  
         
       	 <?php endforeach ;?>
       </tbody>
	</table>
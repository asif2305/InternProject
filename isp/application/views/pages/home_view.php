<html>
<body>
	<div class="data">
		<header class="container_12 clearfix">
		    <div class="grid_12">
		    	<br></br>
		    	<br></br>
		    
		        <h1>Welcome <?php echo $this->session->userdata('name');?></h1>
		    
		    </div>
		</header>
	</div>
	<section class="container_12 clearfix">
    <div class="portlet grid_12">
        <header>
            <h2>Inactive this users</h2>
        </header>

        <section class="form has-validation">
        	<p>
        		<?php
        			if($num > 0)
        			{
        				$fl = 0;
        				foreach ($customers as $customer) {
        					if(($customer->paid)=='Defaulter' && ($customer->status)=='active')
        					{
        						if($fl!=0) echo ", ";
        						echo anchor('customer_list_form/update/'.$customer->cu_id,$customer->cu_id,array('class'=>'update'));
        						$fl++;
        					}	
        				}
        				if($fl==0)
        					echo "No pending";
        				echo " .";
        			}	

        		?>
        	</p>
        </section>	
    </div>    
    </section>

    <section class="container_12 clearfix">
    <div class="portlet grid_12">
        <header>
            <h2>Active this users</h2>
        </header>

        <section class="form has-validation">
        	<p>
        		<?php
        			if($num > 0)
        			{
        				$fl = 0;
        				foreach ($customers as $customer) {
        					if(($customer->paid)=='Yes' && ($customer->status)=='inactive')
        					{
        						if($fl!=0) echo ", ";
        						echo anchor('customer_list_form/update/'.$customer->cu_id,$customer->cu_id,array('class'=>'update'));
        						$fl++;
        					}	
        				}
        				if($fl==0)
        					echo "No pending";
        				echo " .";
        			}	

        		?>
        	</p>
        </section>	
    </div>    
    </section>
        	
</body>
</html>
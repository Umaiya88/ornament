	<div style="background-color: #efeae3; margin-top: -5px">
	<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 column text-center">
				

                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="<?php echo base_url();?>assets/img/Slider4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url();?>assets/img/Slider7.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url();?>assets/img/Slider11.jpg" alt="">
                            </div>
							
							  <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url();?>assets/img/Slider5.jpg" alt="">
                            </div>
							<div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url();?>assets/img/Slider9.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2>
                        <small style="color:navy">Welcome to</small>
                    </h2>
					<h1 style="color:navy">
                        <span class="brand">BREITLING<br>Jewllery House</span>
                    </h1>
                    
                    
                </div>
            </div>
        </div><!---Row end--->
	
		 </div>			
	
					
					
					
					
					
		<style>
    /*ul.home-grid{margin-left: 10%}*/
    ul.home-grid li{display: inline-block ; list-style: none; margin:10px 5px}
</style>









<div style="background-color: #efeae3; margin-top: -5px">
    <div class="container" style="margin-top: 8%">
        <div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row">
                            <ul class="home-grid">
                                <?php foreach ($query->result() as $row): ?>
                                <li>
                                    <a  href="<?php echo base_url() ?>report/<?php echo $row->item ?>/<?php echo $row->id ?>" 
									class="btn btn-lg view-report">
									<img class="product" src="<?php echo base_url();?><?php echo $row->picture ?>" height="200px" width="300px"/> <br/>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                    </div>
            </div>
        </div>
    </div>
</div>

<div style="text-align: center; position: relative; color:#250493; margin-top:0px; background-color:#efeae3; padding: 10px; min-height: 300px">
    <h2><i class="glyphicon glyphicon-th-list"></i>&nbsp;&nbsp;Please select a product to see stock report</h2>
</div>

       <?php // echo $this->pagination->create_links();  ?>

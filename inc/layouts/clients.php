
<section id="clientes" class="clients">
    <div class="row">
      <div class="col-4">
        <h3>CLIENTES</h3>
        <h2 class="title">Empresas que utilizam o meu serviço.</h2>
        <hr/>
        <p class="description">
        Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur
        </p>
      </div>

      <div class="col-8">
	  
	  
	  <div id="clients-gallery">
	<?php  
	$images_clients = get_field('galeria_clientes'); 
	if($images_clients){
		foreach($images_clients as $image){			 
	?>
        <a href="#">
          <img alt="<?php echo $image["title"]; ?>"
              src="<?php echo $image["url"]; ?>"
              data-image="<?php echo $image["url"]; ?>"
              data-description="<?php echo $image["title"]; ?>"
              style="display:none">
        </a>
	<?php }}?>
      </div>
	  
        
      </div>
    </div>
  </section>
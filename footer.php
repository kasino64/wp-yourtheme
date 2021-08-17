</div><!-- #content -->
  <footer id="contato">
    <div class="row">
      <div class="t-center">
        <h3>CONTATO</h3>
        <h2 class="title">Entre em contato, vamos tomar um café juntos.</h2>
        <hr class="center">
      </div>
      
      <div class="row">
        <div class="col-4">
          <form id="form-contact" action="" method="post" onsubmit="return false">
            <p>
              <label for="">Nome:</label>
              <input type="text" id="contact-name" required placeholder="Digite seu nome">
            </p>
            <p>
              <label for="">E-mail:</label>
              <input type="email" id="contact-mail" required placeholder="Digite seu E-mail">
            </p>
            <p>
              <label for="">Assunto:</label>
              <input type="text" id="contact-subject" required placeholder="Digite o Assunto">
            </p>
            <p>
              <label for="">Mensagem:</label>
              <textarea id="contact-message" cols="40" required rows="2" placeholder="Digite sua mensagem"></textarea>
            </p>
            <button class="p-button" type="submit">ENVIAR MENSAGEM</button>
          </form>
        </div>

        <div class="col-8">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116922.4493163558!2d-46.66538902434418!3d-23.68216036914335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce448183a461d1%3A0x9ba94b08ff335bae!2zU8OjbyBQYXVsbywgU1A!5e0!3m2!1spt-BR!2sbr!4v1629058669460!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>

    </div>
  </footer>

  <section class="author">

  <div class="row">
    <div class="col-6 name"><p class="name">Feito com amor por Seu Nome</p></div>
    <div class="col-6 socials-media">
      <?php
$args = ['theme_location' => 'redes-sociais', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'walker' => new SocialMedia_Menu_Walker() ];
wp_nav_menu($args);
?>
    </div>
  </div>
  </section>

  </div><!-- #page -->
  <?php wp_footer(); ?>
  <script type="text/javascript">

		jQuery(document).ready(function(){
    jQuery("#form-contact").validate({
      submitHandler: function(form){
        
        var name = jQuery('#contact-name').val();
        var email = jQuery('#contact-mail').val();
        var subject = jQuery('#contact-subject').val();
        var message = jQuery('#contact-message').val();
        jQuery.ajax({
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
            type: "POST",
            cache: false,
            data: {
                action: 'send_email',
                name: name,
                email: email,
                subject: subject,
                message: message,
            },
            success: function(res) {
                alert("Email enviado com sucesso.");
            }
        });
      }
    });
		});
		
	</script>
 
</body>
</html>
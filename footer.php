<div class="footer-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <p class="text-center">
                    <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/images/logo-footer.png" />
                    </a>
                </p>
            </div>
            <div class="col-md-10">
                <p class="text-right copyright">&copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>.  All Rights Reserved.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php if(isset($_POST['login'])){ ?>
<!-- Small modal -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').modal('show')
    });
</script>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php
            if(!email_exists($_POST['login_email'])){
                echo 'Email not found.';
            }else{
                
            }
        ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>
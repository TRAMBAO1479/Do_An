<?php echo form_open('quen-mat-khau'); ?>
<section id="product-detail">
	<div class="container">
		<div class="products-wrap">
			<div class="container">
				<div class="col-md-3 col-sm-3 hidden-xs"></div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div id="login">
						<div class="acctitle acctitlec"><i class="acc-closed "></i>Quên mật khẩu</div>
						<div class="acc_content clearfix" style="display: block;">
							<form accept-charset="UTF-8" action="" id="customer_login" method="post">
								
								<input name="FormType" type="hidden" value="customer_login">
								<input name="utf8" type="hidden" value="true">
								<div class="col_full">
									<label for="login-form-username">Email:<span class="require_symbol">* </span></label>
									<input type="email" id="login-form-username" name="email" value="" class="form-control">
									<!-- <div class="error" id="password_error"><?php echo form_error('username')?></div> -->
								</div>
						        <?php  if(isset($msg)):?>
						            <div class="row">
						                <?php echo $msg; ?>
						            </div>
						        <?php  endif;?>
								<div class="col_full nobottommargin">
									<button class="button button-3d button-black nomargin pull-left" id="login-form-submit" name="login-form-submit" type="submit" value="login">Đăng nhập</button>
									
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 hidden-xs"></div>
			</div>
		</div>
	</div>
</section>
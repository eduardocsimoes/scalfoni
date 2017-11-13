<div class="content">
	<div class="products"> 
		<div class="list-products">
			<?php if(isset($produtos) && !empty($produtos)){ ?>
				<?php foreach($produtos as $produto){ ?>
					<div class="area-product">
						<a href="<?php echo BASE_URL; ?>produtos/produto/<?php echo $produto['id']; ?>" class="image-product" data-id="<?php echo $produto['id']; ?>"><img src="<?php echo $produto['image']; ?>"></a>
						<div class="description-product">
							<div class="left">
								<a href=""><span class="name"><?php echo $produto['name']; ?></span></a><br>
								<a href=""><span class="brand"><?php echo $produto['brand']; ?></span></a>
							</div>
							<div class="right">
								<img class="cart-image" data-id="<?php echo $produto['id']; ?>" data-price="<?php echo $produto['price']; ?>" src="<?php echo BASE_URL; ?>assets/images/general/cart_product.png">
								<span class="price">R$ <?php echo $produto['price']; ?></span><br>
								<span class="count" data-id="<?php echo $produto['id']; ?>"><?php echo (isset($_SESSION['cart'][$produto['id']])) ? $_SESSION['cart'][$produto['id']]["count"] : "0"; ?> em sua lista</span>
							</div>
						</div>
					</div>				
				<?php } ?>
			<?php }else{ ?>
				<div class="noproducts"></div>
			<?php } ?>
		</div>
	</div>
</div>
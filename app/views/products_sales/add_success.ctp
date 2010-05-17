<?php foreach($products_sale as $qtd): ?>
<div class="qtd">
	<?php if($qtd['ProductsSale']['product_id'] == $product['id']):
	$total *= $qtd['ProductsSale']['amount'];
	?>
	<p><?php echo $qtd['ProductsSale']['amount'];?></p>
	<?php endif;?>
</div>
<?php endforeach;?>
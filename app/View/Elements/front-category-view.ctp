<div class="articulo<?php if($ultimo) echo ' ultimo'; ?>">
	<span style="background: #bfcacf; color: #fff;" class="titulo"><?php echo $servicio['Category']['nombre']; ?></span>
	<span class="separador"></span>
	<?php echo $this -> Html -> image('/img/uploads/215x215/' . $servicio['Image']['image']); ?>
	<p><?php echo $servicio['Category']['descripcion']; ?></p>
	<a href="/categories/view/<?php echo $servicio['Category']['id']; ?>" class="mas"><img src="/img/mas.png" /></a>
</div>
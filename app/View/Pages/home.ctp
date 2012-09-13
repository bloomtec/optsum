<?php
	$categories = $this -> requestAction('/categories/get');
	$counter = 0;
	foreach($categories as $key => $category) {
		$counter += 1;
		if (!($counter % 3)) {
			echo $this -> element('front-category-view', array('servicio' => $category, 'ultimo' => 1));
		} else {
			echo $this -> element('front-category-view', array('servicio' => $category, 'ultimo' => 0));
		}
	}
?>
<!--
<div class="articulo">
	<span style="background: #bfcacf; color: #fff;" class="titulo"> Refrigeración industrial </span>
	<span class="separador"></span>
	<img src="/img/refrigeracion.jpg" />
	<p>
		Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.
	</p>
	<a href="#" class="mas"><img src="/img/mas.png" /></a>
</div>
<div class="articulo">
	<span class="titulo"> montajes y mantenimiento </span>
	<span class="separador"></span>
	<img src="/img/montajes.jpg" />
	<p>
		Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.
	</p>
	<a href="#" class="mas"><img src="/img/mas.png" /></a>
</div>
<div class="articulo ultimo">
	<span class="titulo"> tecnologia informática </span>
	<span class="separador"></span>
	<img src="/img/tecnologia.jpg" />
	<p>
		Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.
	</p>
	<a href="#" class="mas"><img src="/img/mas.png" /></a>
</div>
<div style="clear: both;"></div>
-->
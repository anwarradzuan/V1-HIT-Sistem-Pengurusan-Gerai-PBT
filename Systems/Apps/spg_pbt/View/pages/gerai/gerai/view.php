<?php
$s = shops::getBy(["s_id" => url::get(3)]);

if(count($s) > 0){
	$s = $s[0];
}else{
	$s = null;
}
?>

<div class="card">
	<div class="card-header">
		Maklumat Gerai
		
		<a href="<?= PORTAL ?>gerai/gerai" class="btn btn-sm btn-primary">
			Kembali
		</a>
	</div>
	
	<div class="card-body">
	<?php
		$menus = [
			(object)[
				"name"	=> "Info",
				"url"	=> "info"
			],
			(object)[
				"name"	=> "Statistik",
				"url"	=> "statistik"
			],
			(object)[
				"name"	=> "Kebersihan",
				"url"	=> "kebersihan"
			],
			(object)[
				"name"	=> "Utiliti",
				"url"	=> "utiliti"
			],
			

		];
		
		if(!is_null($s)){
		?>
		<ul class="nav nav-tabs">
		<?php
			$p = url::get(4);
				
			if(empty($p)){
				$p = $menus[0]->url;
			}
				
			foreach($menus as $menu){
				if($p == $menu->url){
					$active = "active";
				}else{
					$active = "";
				}
			?>
			<li class="nav-item">
				<a class="nav-link <?= $active ?>" href="<?= PORTAL ?>gerai/gerai/view/<?= $s->s_id ?>/<?= $menu->url ?>"><?= $menu->name ?></a>
			</li>
			<?php
			}
		?>
		</ul>
		
		<div class="tab-content">
			<div class="tab-pane container active">
				<br />
			<?php
				switch($p){
					case "info":
						Page::Load("pages/gerai/gerai/view/info", ["s" => $s]);
					break;
					
					case "statistik":
						Page::Load("pages/gerai/gerai/view/statistik", ["s" => $s]);
					break;
					
					case "kebersihan":
						Page::Load("pages/gerai/gerai/view/kebersihan", ["s" => $s]);
					break;
					
					case "utiliti":
						Page::Load("pages/gerai/gerai/view/utiliti", ["s" => $s]);
					break;
				}
			?>
			<br /><br />
			</div>
		</div>
		<?php
		}else{
			new Alert("error", "Maklumat gerai tidak dijumpai.");
		}
	?>
	</div>
</div>
		
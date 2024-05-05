<?php
$sg = shop_group::getBy(["sg_id" => url::get(3)]);

if(count($sg) > 0){
	$sg = $sg[0];
}else{
	$sg = null;
}
?>

<div class="card">
	<div class="card-header">
		Maklumat Kawasan <strong><?= !is_null($sg) ? $sg->sg_name : "" ?></strong>
		
		<a href="<?= PORTAL ?>gerai/kawasan-perniagaan" class="btn btn-sm btn-primary">
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
				"name"	=> "Gerai Berdaftar",
				"url"	=> "gerai"
			],
			(object)[
				"name"	=> "Statistik Kawasan",
				"url"	=> "statistik"
			],
			(object)[
				"name"	=> "Kebersihan",
				"url"	=> "kebersihan"
			],
			(object)[
				"name"	=> "Aduan",
				"url"	=> "aduan"
			]

		];
		
		if(!is_null($sg)){
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
				<a class="nav-link <?= $active ?>" href="<?= PORTAL ?>gerai/kawasan-perniagaan/view/<?= $sg->sg_id ?>/<?= $menu->url ?>"><?= $menu->name ?></a>
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
						Page::Load("pages/gerai/kawasan/view/info", ["sg" => $sg]);
					break;
					
					case "gerai":
						Page::Load("pages/gerai/kawasan/view/gerai", ["sg" => $sg]);
					break;
					
					case "statistik":
						Page::Load("pages/gerai/kawasan/view/statistik", ["sg" => $sg]);
					break;
					
					case "kebersihan":
						Page::Load("pages/gerai/kawasan/view/kebersihan", ["sg" => $sg]);
					break;
					
					case "aduan":
						Page::Load("pages/gerai/kawasan/view/aduan", ["sg" => $sg]);
					break;
				}
			?>
			<br /><br />
			</div>
		</div>
		<?php
		}else{
			new Alert("error", "Maklumat kawasan tidak dijumpai.");
		}
	?>
	</div>
</div>
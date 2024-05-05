<?php
new Controller(["tutorial"]);
Controller::alert();
?>
<style>
	.list-container {
		display: grid;
		padding: 10px;
		grid-template-columns: repeat(auto-fit, minmax(250px, 300px));
	}

	.vid-list .thumbnail {
		width: 100%;
		height: 50%;
		/* border-radius: 5px; */
	}

	.flex-div {
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.search-box {
		border: 1px solid #ccc;
		margin-top: 15px;
		padding: 8px 12px;
		border-radius: 25px;
	}

	.search-box input {
		width: 400px;
		border: 0;
		outline: 0;
		background: transparent;
	}

	.vid-list .flex-div {
		align-items: flex-start;
		margin-top: 7px;
	}

	.vid-list .flex-div img {
		width: 35px;
		margin-right: 10px;
		border-radius: 50%;
	}

	.vid-info {
		color: #5a5a5a;
		font-size: 13px;
	}

	.vid-info a {
		color: white;
		font-weight: 600;
		display: block;
		margin-bottom: 5px;
	}

	.neg-mag {
		margin-top: -40px;
	}
</style>
<div class="row" style="margin-left: 0; margin-right: 0; margin-bottom: 150px;">

	<div class="col-md-8 col-sm-8 col-8 text-dark mb-2">
		<?php
		if ($_SESSION["user"]->data->u_role == "0") {
		?>

			<button class="btn btn-primary text-light" data-toggle="modal" data-target="#exampleModalLong">
				Tambah Video
			</button>

			<!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Video</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
												<form action="" method="POST" enctype="multipart/form-data">
														<div class="modal-body">
															
																<!-- <input type="hidden" id="add_number_modal_id"> -->
																<div class="form-group">
																	<label for="">Tajuk Video</label>
																	<input type="text" class="form-control" id="title" name="title">
																</div>

																<div class="form-group">
																	<label class="form-label">Gambar Thumbnail</label>
																	<input class="form-control" type="file" name="vidt"   />
																</div>
																
																<div class="form-group">
																	<label class="form-label">Upload Video</label>
																	<input class="form-control" type="file" accept=" video/*" name="vidf"   />
																</div>
																<!-- <div class="form-group">
																	<label for="">Catitan</label>
																	<input type="text" class="form-control" id="catitan" name="description" value="<?= $a[0]->as_description ?? '' ?>">
																</div> -->
															
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
																	<?php
																		Controller::form("tutorial", [
																			"action"    => "add"
																		]);
																	?>
																	<button type="submit" class="btn btn-primary">Simpan</button>
																</div>
														
														</div>
												</form>
                                            </div>
                                        </div>
                                    </div>
		<?php
		}
		?>
	</div>
	<div class="col-md-4 col-sm-4 col-4 neg-mag">
		<div>
			<div></div>
		</div>
	</div>
	<?php

	foreach (tutorial_video::list() as $t) {
	?>
		<div class="list-container">
			<div class="vid-list">
				<a href="<?= PORTAL ?>tutorials/<?= $t->tv_id ?>"><img src="<?= PORTAL ?>assets/tutorial_thumnails/<?= $t->tv_thumbnail ?>" class="thumbnail"></a>
				<div class="flex-div">
					<div class="vid-info">
						<a href="<?= PORTAL ?>tutorials/<?= $t->tv_id ?>" target="_blank" class="text-dark text-center">
							<?= $t->tv_title ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>
</div>
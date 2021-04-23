 <div id="content">
<!-- подключаем модальное окно с видеоплеером -->
     <? include('./components/modal_video.html') ?>

 <?php
    include 'php/video.php';
    if(isset($_GET['season'])) {
        $season = getVidsbySeason($_GET['season']);
		$season_num = $_GET['season'];
		}
    ?>
	<div style="float:left;">
		<img src="season templates/side template/<?php echo $season_num?>.png" width=275px/>
	</div>
	<div style="float:right; width:660px;">
	 <?php
	foreach($season as $item_vid){
                ?>
					<button
                            onclick="showVideoModal('<? echo $season_num ?>', '<? echo $item_vid['episode'] ?>' ,'<?php echo $item_vid['s_name'] ?>','<?php echo $item_vid['description'] ?>' )"
                            class="vid_button"
                            style="background:url('VideoIcons/<?php echo $item_vid['season']?>/<?php echo $item_vid['episode']?>.png'); background-size:cover;">
                        <?php echo $item_vid['episode'] ?>
					</button>
                <?php } ?>
	<div class="clear"></div>
	</div>	
	<div class="clear"></div>
</div>
	<!--<div class="data_type">
                    <h1><?php echo $item_vid['s_name'] ?></h1>
					<h1><?php echo $item_vid['season'] ?></h1>
					<h1><?php echo $item_vid['description'] ?></h1>
					<h1><?php echo $item_vid['episode'] ?></h1>
                    
                </div> 
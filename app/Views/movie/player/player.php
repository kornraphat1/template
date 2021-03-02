
<?php

$ads_video = $adsvideo;
$movie_video = array(
    'img' => $video_data["movie_picture"],
    'file' => $url_play
);

?>

<html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?= $document_root ?>/assets/css/css_size.css">

        <script src="https://sch.aegistrex.com/asset/js/jwplayer.js"></script>
        <script src="https://cdn.jwplayer.com/libraries/rYlCdkEJ.js"></script>
        <script type="text/javascript" src="https://movie.aegistrex.com/streamapi/g23lrur_av.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

    <body class="if-size">
    <!-- <div id="playervideo" style="display: none;">Movie Player</div> -->
        <iframe id="playervideo" src="https://movie.aegistrex.com/api/player/<?= $url_play?>" style="width:100%;height: 140%;border: 0px; overflow: hidden;" allowfullscreen="yes"></iframe>

        
        <?php

            if( !empty($ads_video) ){
                foreach ($ads_video as $key => $value) {
                $hidden = "";

                if ($key != 0) {
                    $hidden .= "style = 'display:none;'";
                }
        ?>

        <div id="ads<?= $key ?>" style="z-index:1000; margin: 0 8px;">
            <div id="adsplayer<?= $key ?>" <?= $hidden ?>>This ads player <?= $key ?> </div>

            <div id="adsclick<?= $key ?>" style="display: none;"></div>

            <div class="registerads" id="registerads<?= $key ?>" style="display: none;z-index: 1000;">
                <a onclick="onClickAds(<?= $value['adsvideo_id'] ?>, <?= $branch ?>)" href="<?= $value['url'] ?>" target="_blank"><span id="register<?= $key ?>">สมัครสมาชิก</span></a>
            </div>

            <div class="skipads" id="skipads<?= $key ?>" style="display: none;">
                <span id="timeer<?= $key ?>">กรุณารอ <?=$value['adsvideo_skip']?> วิ</span>
            </div>

        </div>

        <?php 
            } 
        }
        ?>



        <script>

            $(document).ready(function() {
                $('#playervideo').hide();
                <?php if ( !empty($ads_video) ) { ?>
                    <?php foreach ($ads_video as $key => $value) { ?>

                    $("#adsclick<?= $key ?>").click(function() {
                        window.open("<?= $value['url'] ?>", '_blank');
                    });

                    <?php } ?>

                    setAdsFrist();

                <?php }else{ ?>

                    $('#playervideo').show();

                <?php } ?>

            });


            function setAdsFrist() {
                // วิดีโอโฆษณาตัวแรก
                setAds0();
            }

            <?php 

            foreach ($ads_video as $key => $value) {

                if ($key >= 0 && $key != (count($ads_video) - 1)) {
                    $auto = "true"; 
            ?>

            // วิดีโอโฆษณาทุกตัว แต่ไม่ใช่ตัวสุดท้าย
            function setAds<?= $key ?>() {

                jwplayer("adsplayer<?= $key ?>").setup({
                    "autostart": "<?= $auto ?>",
                    "file": "<?= $value['file'] ?>",
                    "height": "100%",
                    "width": "100%",
                    "aspectratio": "16:9",
                    "androidhls": true,
                    "preload": "auto",
                    "hlshtml": true,
                    "stretching": "uniform",
                    "controls": false,
                    "playbackRateControls": false,
                    "primary": "html5"
                });

                jwplayer("adsplayer<?= $key ?>").on('complete', function() {
                    $('#ads<?= $key ?>').hide();
                    setAds<?= $key + 1 ?>();
                });

                jwplayer("adsplayer<?= $key ?>").on('error', function() {
                    $('#ads<?= $key ?>').hide();
                    $('#skipads<?= $key ?>').hide();
                    $('#registerads<?= $key ?>').hide();
                    setAds<?= $key + 1 ?>();
                    $('#adsplayer<?= $key + 1 ?>').show();
                    $('#adsplayer<?= $key + 1 ?>').load();
                    });

                    jwplayer("adsplayer<?= $key ?>").on('play', function() {

                    $('#adsclick<?= $key ?>').show();
                    $('#skipads<?= $key ?>').show();
                    $('#registerads<?= $key ?>').show();

                    var timeleft = <?=$value['adsvideo_skip']?>; // กรุณารอ
                    var downloadTimer = setInterval(function() {
                        timeleft--;
                        $("#timeer<?= $key ?>").text('กรุณารอ ' + timeleft + ' วิ');

                        if (timeleft <= 0) {
                            $("#timeer<?= $key ?>").text('กดข้ามโฆษณา');
                            $('#skipads<?= $key ?>').click(function() {

                                $('#ads<?= $key ?>').hide();
                                $('#skipads<?= $key ?>').hide();
                                jwplayer("adsplayer<?= $key ?>").remove();
                                setAds<?= $key + 1 ?>();
                                $('#adsplayer<?= $key + 1 ?>').show();
                                $('#adsplayer<?= $key + 1 ?>').load();

                            });
                        }
                    }, 1000);
                });

            }

            <?php } else if ($key == (count($ads_video) - 1)) { ?>

            // วิดีโอโฆษณาตัวสุดท้าย
            function setAds<?= $key ?>() {

                jwplayer("adsplayer<?= $key ?>").setup({
                    "autostart": 'true',
                    "file": "<?= $value['file'] ?>",
                    "height": '100%',
                    "width": "100%",
                    "aspectratio": "16:9",
                    "androidhls": true,
                    "preload": "auto",
                    "hlshtml": true,
                    "stretching": "uniform",
                    "controls": false,
                    "playbackRateControls": true,
                    "primary": "html5"
                });

                jwplayer("adsplayer<?= $key ?>").on('complete', function() {

                    $('#ads<?= $key ?>').hide();
                    $('#playervideo').show();

                });

                jwplayer("adsplayer<?= $key ?>").on('error', function() {

                    $('#ads<?= $key ?>').hide();
                    $('#skipads<?= $key ?>').hide();
                    $('#registerads<?= $key ?>').hide();
                    $('#playervideo').show();
                    $('#playervideo').load();

                });

                jwplayer("adsplayer<?= $key ?>").on('play', function() {

                    $('#adsclick<?= $key ?>').show();
                    $('#skipads<?= $key ?>').show();
                    $('#registerads<?= $key ?>').show();

                    var timeleft = <?=$value['adsvideo_skip']?>; // กรุณารอ
                    var downloadTimer = setInterval(function() {
                        timeleft--;
                        $("#timeer<?= $key ?>").text('กรุณารอ ' + timeleft + ' วิ');

                        if (timeleft <= 0) {

                            $("#timeer<?= $key ?>").text('กดข้ามโฆษณา');
                            $('#skipads<?= $key ?>').click(function() {

                                $('#ads<?= $key ?>').hide();
                                $('#skipads<?= $key ?>').hide();
                                jwplayer("adsplayer<?= $key ?>").remove();
                                $('#playervideo').show();
                                $('#playervideo').load();

                            });

                        }
                    }, 1000);
                });
            }

            <?php } ?>
        <?php } ?>

        </script>

    </body>
</html>
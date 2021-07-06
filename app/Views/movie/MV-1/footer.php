<div id="ads_fox_bottom">




    <div id="ads_fix_footer">



        <?php

        if (!empty($ads['pos4'])) {

            foreach ($ads['pos4'] as $val) {

                if (substr($val['ads_picture'], 0, 4) == 'http') {

                    $ads_picture = $val['ads_picture'];
                } else {

                    $ads_picture = $path_ads . $val['ads_picture'];
                }

        ?>

                <div style="text-align:center;">

                    <div id="fix_footer">



                        <!-- ปุ่ม close ADS ล่าง -->

                        <a href="javascript:void(0)" onclick="document.getElementById('ads_fox_bottom').style.display = 'none';" style="position:absolute;color:black;text-decoration:none;font-size:13px; font-weight:bold;font-family:tahoma,verdana,arial,sans-serif;border:0px solid white;padding:0px;z-index:999;margin-top: -10px;" data-wpel-link="internal"><img alt="close" title="close" src="https://4.bp.blogspot.com/-GXvKu86ra2Q/XWpNe4fvZNI/AAAAAAAACTk/j68WkcK79nYHrlCq67wd2l2gKj4FA9ZKgCLcBGAs/s1600/close.gif"></a>



                    </div>

                </div>



                <a onclick="onClickAds(<?= $val['ads_id'] ?>, <?= $val['branch_id'] ?>)" href="<?= $val['ads_url'] ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">

                    <img class="banners" src="<?= $ads_picture ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">

                </a>

        <?php

            }
        }

        ?>

    </div>

</div>

<div id="footer">

    <div class="footer clearfix">

        <div class="footerleft" style="display: inline-flex;">

            <div id="content">

                <div class="content-web">

                    <center>

                        <a href="<?php echo str_replace('/public', '', base_url()); ?>">

                            <img class="logo-footer" src='<?php echo $path_setting . $setting['setting_logo']; ?>' width="180px" title="<?php echo $setting['setting_title']; ?>" alt="<?php echo $setting['setting_title']; ?>">

                        </a>

                    </center>

                    <p class="content-footer"><strong><a href="">365hdmovies</a></strong> <strong><a href="">ดูหนัง</a></strong> ดูหนังซีรี่ส์ฟรี โหลดไวแบบไม่มีสะดุดภาพคมชัดระดับ HD FullHD 4k ครบทุกเรื่องทุกรสดูได้ทุกที่ทุกเวลาทั้งบนมือถือ แท็บเล็ต เครื่องคอมพิวเตอร์ ระบบปฏิบัติการ Android และ IOS <strong><a href="">ดูหนังออนไลน์</a></strong>

                        <?php foreach ($category_list as $value) {

                            echo $value['category_name'] . " ";
                        } ?> และยังมี ให้รับชมอีกมากมาย <br>สามารถรับชมฟรีได้ทุกที่ทุกเวลาตลอด 24 ชั่วโมงที่ <strong><a href="">365hdmovies.com</a></strong></p>

                </div>

            </div>

            <div style="height: 3.5rem; overflow: hidden; text-overflow: ellipsis">

            </div>

        </div>

        <div class="footeright">

        </div>

    </div>

</div>

</div>

<div id="fb-root" class=" fb_reset">

</div>

<style>
    .btn-ads {

        font-family: 'Lato', 'Lucida Grande', 'Lucida Sans Unicode', Tahoma, Sans-Serif;

        -webkit-appearance: none;

        font-size: 1.1rem;

        text-shadow: none;

        line-height: 1.2;

        display: inline-block;

        padding: 10px 16px;

        margin: 0 10px 0 0;

        position: relative;

        /* border-radius: 4px; */

        border: 3px solid transparent;

        background: #444857;

        color: white;

        cursor: pointer;

        white-space: nowrap;

        text-overflow: ellipsis;

        text-decoration: none !important;

        text-align: center;

        font-weight: normal !important;

        width: 80%;

    }
</style>

</body>

</html>

<script src="<?= $document_root ?>/assets/js/jquery.js"></script>

<script src="<?= $document_root ?>/assets/js/jquery-migrate.min.js"></script>

<script src="<?= $document_root ?>/assets/js/5Npl_DkivWTNCRdzYR204bTSOlo.js"></script>

<script>
    function goReport(id, branch, name, ep) {

        var request = prompt('แจ้งหนังเสืย');

        if (request != null) {

            jQuery.ajax({

                url: "/savereport/branch/" + branch + "/id/" + id + "/reason/" + request + "/name/" + name + "/" + ep,

                type: 'GET',

                crossDomain: true,

                cache: false,

                success: function(data) {

                    console.log(request);

                    alert('เราจะดำเนินการให้เร็วที่สุด');

                }

            });

        } else {}

    };

    function request_movie(branch) {

        console.log(branch);

        var movie = prompt('ขอหนังกับทาง Admin');

        console.log(movie);

        if (movie != null) {

            jQuery.ajax({

                url: "/saverequest/branch/" + branch + "/movie/" + movie,

                type: 'GET',

                async: false,

                success: function(data) {

                    console.log(data);

                    if (data == "OK") {

                        alert("Admin จะรีบดำเนินการให้เร็วที่สุด !");

                    }

                }

            });

        }

    }

    jQuery("#formsearch").submit(function(event) {

        // alert("Esad");

        if (jQuery("#search").val()) {

            var url = "<?= base_url('/search') ?>" + '/' + jQuery("#search").val();

            window.location.href = url;

            event.preventDefault();

        } else {

            var url = "<?= base_url() ?>";

            window.location.href = url;

            event.preventDefault();

        }

    });

    function goView(id, name, type) {

        var names = name.replace("%", "%25");

        count_view(id);
        var url = '';

        if (type == 'se') {

            url = "<?= base_url() ?>/series/" + id + '/' + names;

        } else {

            url = "<?= base_url() ?>/video/" + id + '/' + names;

        }

        window.open(url, '_blank');

    }

    function count_view(id) {

        var base_url = '<?= base_url() ?>';

        var url = base_url + "/countview/" + id;

        // alert();

        jQuery.ajax({

            url: url,

            method: "GET",

            async: true,

            success: function(response) {

                console.log(response); // server response

            }

        });

    }

    function onClickAds(adsid, branch) {

        var backurl = '<?= $backURL ?>';

        debugger;

        jQuery.ajax({

            url: backurl + "ads/sid/<?= session_id() ?>/adsid/" + adsid + "/branch/" + branch,

            async: true,

            success: function(response) {

                console.log(url); // server response

            }

        });

    }
</script>
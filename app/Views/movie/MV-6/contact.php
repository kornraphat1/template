<!-- <section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">
        <?php
        if (!empty($ads['pos1'])) {
          foreach ($ads['pos1'] as $val) {

            if (substr($val['ads_picture'], 0, 4) == 'http') {
              $ads_picture = $val['ads_picture'];
            } else {
              $ads_picture = $path_ads . $val['ads_picture'];
            }
        ?>
            <a href="<?= $val['ads_url'] ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
              <img class="banners" src="<?= $ads_picture ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
            </a>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div> -->
</section>
<!-- Icons Grid -->
  <section>
    <div class="container">
      <div id="movie-contract" class="row">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#request">ขอหนัง</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#contract">ติดต่อลงโฆษณา</a>
          </li>
        </ul>

        <div class="tab-content" id="formrequest">
          <div id="request" class="tab-pane container active">
            <form class="movie-formcontract" novalidate method="POST" action="">
              <textarea rows="4" id="request_text" type="text" class="form-control" required autocomplete="off"  pattern="([^,<>;]+)" ></textarea >
              <center><button type="submit" class="movie-btnrequest">ส่งข้อความ</button></center>
            </form>
          </div>

          <div id="contract" class="tab-pane container fade">
            <form class="movie-formcontract" novalidate method="POST" action="">
              <label for="ads_con_name"> ชื่อ สกุล :</label>
              <input id="ads_con_name" name="ads_con_name" type="text" class="form-control" required autocomplete="off"  pattern="([^,<>;]+)">
              <div class="invalid-feedback">
                กรุณากรอกชื่อ นามสกุล และ ห้ามใช้ เครื่องหมาย  < > , ; 
              </div>
              <label for="ads_con_email"> Email :</label>
              <input id="ads_con_email" type="text" class="form-control" pattern="(^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$)" required autocomplete="off">
              <div class="invalid-feedback">
                กรุณากรอก Email เช่น " xxx@xxx.com " และ ห้ามใช้ เครื่องหมาย  < > , ; 
              </div>
              <label for="ads_con_line"> Line ID :</label>
              <input id="ads_con_line" type="text" class="form-control" required autocomplete="off" pattern="([^,<>;]+)">
              <div class="invalid-feedback">
                กรุณากรอก Line ID และ ห้ามใช้ เครื่องหมาย  < > , ; 
              </div>
              <label for="ads_con_tel"> เบอร์โทรศัพท์ :</label>
              <input id="ads_con_tel" type="text" class="form-control" required autocomplete="off" pattern="(^0([8|9|6])([0-9]{8}$))">
              <div class="invalid-feedback">
                กรุณากรอก เบอร์โทรศัพท์ 10หลัก เช่น " 0600000000 " และ ห้ามใช้ เครื่องหมาย  < > , ; 
              </div>

              <label id="ads_con_all_alt">**กรุณากรอกข้อมูลให้ครบทุกช่อง</label>

              <center><button type="submit" class="movie-btnrequest">ส่งข้อความ</button></center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="movie-banners" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 ">
          <?php
          if (!empty($ads['pos2'])) {
            foreach ($ads['pos2'] as $ads) {
              if (substr($ads['ads_picture'], 0, 4) == 'http') {
                $ads_picture = $ads['ads_picture'];
              } else {
                $ads_picture = $path_ads . $ads['ads_picture'];
              }
          ?>
              <a onclick="onClickAds(<?= $val['ads_id'] ?>, <?= $branch ?>)" href="<?= $ads['ads_url'] ?>" alt="<?= $ads['ads_name'] ?>" title="<?= $ads['ads_name'] ?>">
                <img class="banners" src="<?= $ads_picture ?>" alt="<?= $ads['ads_name'] ?>" title="<?= $ads['ads_name'] ?>">
              </a>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript">
    
    $(document).ready(function() {

      $("#ads_con_email_alt").hide();

    });
  </script>
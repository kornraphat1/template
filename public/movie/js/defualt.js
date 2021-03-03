$(document).ready(function() {
  $('#movie-formsearch').submit(function(e) {
    goSearch();
    return false; //<---- Add this line
  });

  $(".movie-formcontract").on("submit", function() {

    var form = $(this)[0];
    var request_text = $.trim($("#request_text").val());
    var ads_con_name = $.trim($("#ads_con_name").val());
    var ads_con_email = $.trim($("#ads_con_email").val());
    var ads_con_line = $.trim($("#ads_con_line").val());
    var ads_con_tel = $.trim($("#ads_con_tel").val());

    if (form.checkValidity() === false) {

      event.preventDefault();
      event.stopPropagation();

    } else if (request_text) {

      $.ajax({
        url: "/save_requests",
        type: 'POST',
        async: false,
        data: {
          request_text: request_text
        },
        success: function(data) {
          alert('ดำเนินการเรียบร้อยแล้วครับ')
          setInterval(function(){  window.location.href = "<?= base_url() ?>";}, 2000);
        
          return false;

        }
      });
      return false;

    } else {

      $.ajax({
        url: "/con_ads",
        type: 'POST',
        data: {
          ads_con_name: ads_con_name,
          ads_con_email: ads_con_email,
          ads_con_line: ads_con_line,
          ads_con_tel: ads_con_tel,

        },
        success: function(data) {
          alert('ดำเนินการเรียบร้อยแล้วครับ')
          setInterval(function(){  location.reload();}, 2000);
          return false;

        }
      });
      return false;

    }



    form.classList.add('was-validated');

  });

});

function goSearch() {
  var search = $.trim($("#movie-search").val());
  var res = search.replace("%", "%25");
  if (res) {
    window.location.href = "/search/" + res;
  } else {
    window.location.href = location.reload();
  }
}

function onClickAds(adsid, branch) {

  var backurl = '<?= $backURL ?>';
  jQuery.ajax({
      url: backurl + "ads/sid/" + getJSessionId + "/adsid/" + adsid + "/branch/" + branch,
      async: true,
      success: function(response) {
          console.log(response); // server response
      }
  });

}

function moveCursorToEnd(el) {
  if (typeof el.selectionStart == "number") {
      el.selectionStart = el.selectionEnd = el.value.length;
  } else if (typeof el.createTextRange != "undefined") {
      el.focus();
      var range = el.createTextRange();
      range.collapse(false);
      range.select();
  }
}

function getJSessionId(){
  var jsId = document.cookie.match(/JSESSIONID=[^;]+/);
  if(jsId != null) {
      if (jsId instanceof Array)
          jsId = jsId[0].substring(11);
      else
          jsId = jsId.substring(11);
  }
  return jsId;
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}

function goView(id, name, type) {
  countView(id);

  var url = '';
  if(type=='se'){
    url = "/series/" + id + '/' + name ;
  }else{
    url = "/video/" + id + '/' + name ;
  }

  window.open(url, '_blank');

}

function goEP(id, name, index, epname) {
  countView(id);
  window.location.href = "/series/" + id + '/' + name + '/' + index + '/' + epname ;
}

function countView(id) {

  $.ajax({

    url: "/countview/" + id,
    method: "GET",

    async: true,

    success: function(response) {

      console.log(response); // server response

    }


  });

}

function goCate(id, name) {
  name = name.replace("/", "|");
  window.location.href = "/category/" + id + '/' + name ;
}



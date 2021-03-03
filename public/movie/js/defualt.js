$(document).ready(function() {
  $('#movie-formsearch').submit(function(e) {
    goSearch();
    return false; //<---- Add this line
  });
});

function goSearch() {
  var search = $.trim($("#movie-search").val());
  var res = search.replace("%", "%25");
  if (res) {
    window.location.href = "/search/" + res;
  } else {
    window.location.href = "<?= base_url() ?>";
  }
}

function onClickAds(adsid, branch) {

  var backurl = '<?= $backURL ?>';
  debugger;
  jQuery.ajax({
      url: backurl + "ads/sid/<?= session_id() ?>/adsid/" + adsid + "/branch/" + branch,
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
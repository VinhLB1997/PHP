$(document).ready(function() {
  const base = window.location.origin + "/PHP/hihichaocau/";
  var total = $("table.table-list-song tfoot").data("count");
  var page = 0;
  var totalPage = Math.ceil(total / 10);
  var pageGift = 0;

  $("body div:last").attr("style", "display:none !important");
  $("input[name=mode]").click(function() {
    $("div.wrapper-content-mode1").toggleClass("d-none");
    $("div.wrapper-content-mode2").toggleClass("d-none");
  });

  $(document).on("change", "input[name=mode]", function() {
    if ($(this).is(":checked")) {
      $("div.wrapper-content-mode1").addClass("d-none");
      $("div.wrapper-content-mode2").removeClass("d-none");
    }
  });

  $(document).on("click", "i.play-music", function() {
    $this = $(this);
    if ($this.hasClass("play")) {
      $("i.play-music")
        .removeClass("pause")
        .addClass("play");
      let song_id = $this.closest("td").data("song-id");
      var src = "https://www.nhaccuatui.com/mh/background/" + song_id;
      $("#control-music").attr("src", src);
    } else if ($this.hasClass("pause")) {
      $("#control-music").removeAttr("src");
    }
    $this.toggleClass("play pause");
  });

  $("input[name=firework]").click(function() {
    if ($(this).is(":checked")) {
      $("body").fireworks({
        sound: true,
        opacity: 1,
        width: "100%",
        height: "100%"
      });
      $("div.wrapper-header").remove();
      $(".modal").modal("hide");
      $("html, body").css({
        overflow: "hidden"
      });
    } else {
      location.reload();
    }
  });

  $(document).on("click", "i.gift", function() {
    $this = $(this);
    $("div#modal-gift")
      .find("input, textarea")
      .val("")
      .removeClass("error")
      .end()
      .find("div.basic.red")
      .remove()
      .end();
    $trParent = $this.closest("tr");
    $song_name = $trParent.find("td:nth-child(1) span").text();
    $song_key = $trParent.data("song-key");
    $("#show-name-song")
      .removeClass("d-none")
      .text("Bài hát được tặng:  " + $song_name);
    $("#form-gift")
      .find("input[name=song_key]")
      .val($song_key);
    $("#modal-gift").modal("show");
  });

  $("#form-gift").submit(function(event) {
    $("div.basic.red").remove();
    event.preventDefault();
    $("#form-gift input, textarea").each(function() {
      if (!$(this).val()) {
        $(this).addClass("error");
        $(
          '<div class="ui basic red pointing prompt label transition visible">Bỏ trống làm gì</div>'
        ).insertAfter($(this));
      } else if ($(this).is("input") && $(this).val().length > 20) {
        $(this).addClass("error");
        $(
          '<div class="ui basic red pointing prompt label transition visible">Tên éo gì dài thế < 20 kí tự thôi</div>'
        ).insertAfter($(this));
      } else if ($(this).is("textarea") && $(this).val().length > 269) {
        $(this).addClass("error");
        $(
          '<div class="ui basic red pointing prompt label transition visible">Tâm sự éo dài thế</div>'
        ).insertAfter($(this));
      } else {
        $(this).removeClass("error");
        $(this)
          .next("div.basic.red")
          .remove();
      }
    });
    $("#form-gift input, textarea").keyup(function() {
      if ($(this).val()) {
        $(this).removeClass("error");
        $(this)
          .next("div.basic.red")
          .remove();
      }
    });
    let error = $("#form-gift").find(".error").length;
    if (error > 0) {
      return false;
    } else {
      // let url = base + "/Home/handleSubmitSongGift";
      $.ajax({
        method: "POST",
        url: `${base}/Home/handleSubmitSongGift`,
        data: $("#form-gift").serialize(),
        success: function(result) {
          if (result == "false") {
            alert("Có lỗi xảy ra. Vui lòng thử lại");
            location.reload();
          } else {
            pageGift = 0;
            $(".modal").modal("hide");
            $confirm = confirm("Xem bài hát đã tặng");
            if (!$confirm) {
              return;
            }
            $.ajax({
              async: false,
              method: "POST",
              url: `${base}/Home/paginationSongGift`,
              data: { pageGift: pageGift },
              success: function(result) {
                $(
                  "table.table-list-song-gift tbody, table.table-list-song-gift tfoot"
                ).remove();
                $("table.table-list-song-gift thead").after(result);
              }
            });
            $("input#mode")
              .prop("checked", true)
              .trigger("change");
          }
        }
      });
    }
  });

  $(document).on("click", "i.message-gift", function() {
    $this = $(this);
    $tdParent = $this.parent();
    $song_name = $tdParent.find("input[name=song]").val();
    $song_sender = $tdParent.find("input[name=sender]").val();
    $song_receiver = $tdParent.find("input[name=receiver]").val();
    $song_time = $tdParent.find("input[name=time-send]").val();
    $song_message = $tdParent.find("input[name=messsage]").val();
    $image = $tdParent.find("input[name=image]").val();
    $modal_infor = $("#modal-infor-song-gift");
    $modal_infor.find("#song-name-gift").text($song_name);
    $modal_infor.find("#song-sender-gift").text($song_sender);
    $modal_infor.find("#song-receiver-gift").text($song_receiver);
    $modal_infor.find("#song-time-gift").text($song_time);
    $modal_infor.find("#song-message-gift").text($song_message);
    $modal_infor.find("img.image-song").attr("src", $image);
    $modal_infor.modal("show");
  });

  // Pagination list song

  $(document).on("click", "i.next", function() {
    ++page;
    if (page >= totalPage) {
      page = 0;
    }
    $.ajax({
      method: "POST",
      url: `${base}/Home/pagination`,
      data: { page: page },
      success: function(result) {
        $("table.table-list-song tbody, table.table-list-song tfoot").remove();
        $("table.table-list-song thead").after(result);
      }
    });
  });

  $(document).on("click", "i.previous", function() {
    --page;
    if (page <= 0) {
      page = totalPage - 1;
    }
    $.ajax({
      method: "POST",
      url: `${base}/Home/pagination`,
      data: { page: page },
      success: function(result) {
        $("table.table-list-song tbody, table.table-list-song tfoot").remove();
        $("table.table-list-song thead").after(result);
      }
    });
  });

  $(document).on("keyup", "#search-song", function() {
    var key_word = $("#search-song")
      .val()
      .trim();
    $.ajax({
      method: "POST",
      url: `${base}/Home/pagination`,
      data: { page: page, keyword: key_word },
      success: function(result) {
        $("table.table-list-song tbody, table.table-list-song tfoot").remove();
        $("table.table-list-song thead").after(result);
      }
    });
  });

  // Pagination list song gift
  $(document).on("click", "i.next-gift", function() {
    let totalGift = $("table.table-list-song-gift tfoot").data("count-gift");
    let totalPageGift = Math.ceil(totalGift / 5);
    ++pageGift;
    if (pageGift >= totalPageGift) {
      pageGift = 0;
    }
    $.ajax({
      method: "POST",
      url: `${base}/Home/paginationSongGift`,
      data: { pageGift: pageGift },
      success: function(result) {
        $(
          "table.table-list-song-gift tbody, table.table-list-song-gift tfoot"
        ).remove();
        $("table.table-list-song-gift thead").after(result);
      }
    });
  });

  $(document).on("click", "i.previous-gift", function() {
    let totalGift = $("table.table-list-song-gift tfoot").data("count-gift");
    let totalPageGift = Math.ceil(totalGift / 5);
    --pageGift;
    if (pageGift < 0) {
      pageGift = totalPageGift - 1;
    }
    $.ajax({
      method: "POST",
      url: `${base}/Home/paginationSongGift`,
      data: { pageGift: pageGift },
      success: function(result) {
        $(
          "table.table-list-song-gift tbody, table.table-list-song-gift tfoot"
        ).remove();
        $("table.table-list-song-gift thead").after(result);
      }
    });
  });
});

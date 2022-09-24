
  $(document).ready(function() {
    alert("HELOOOOO")
    $("#fetchTopic").on('change', function() {
      var value = $(this).val();
      $.ajax({
        url: "viewTopics1.php",
        type: "POST",
        data: "request=" + value,
        beforeSend: function() {
          $(".container").html("<span>Working....</span>");
        },
        success: function(data) {
          $(".container").html(data);
        }

      });
    });
  });


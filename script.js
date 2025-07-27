$("#page_1").show();
$("#page_2").hide();

$(document).ready(function () {
  $.validator.addMethod(
    "onlyAlphabets",
    function (value, element) {
      return this.optional(element) || /^[a-zA-Z\s]+$/.test(value.trim());
    },
    "Only alphabets and spaces are allowed"
  );

  $("#form").validate({
    rules: {
      own_home: {
        required: true,
        notDefault: true,
      },
      own_solar: {
        required: true,
        notDefault: true,
      },
      electric_bill: {
        required: true,
        notDefault: true,
      },
      how_soon: {
        required: true,
        notDefault: true,
      },
      best_time: {
        required: true,
        notDefault: true,
      },
      full_name: {
        required: true,
        onlyAlphabets: true,
      },
      email: {
        required: true,
        email: true,
      },
      p_number: {
        required: true,
        digits: true,
        maxlength: 10,
        minlength: 10,
      },
    },
    messages: {
      own_home: "Please select an option",
      own_solar: "Please select an option",
      electric_bill: "Please select an option",
      how_soon: "Please select an option",
      best_time: "Please select an option",
      full_name: {
        required: "First name is required",
      },
      email: {
        required: "Email is required",
        email: "Email is not in valid form",
      },
      p_number: {
        required: "Phone number is required",
        maxlength: "Phone number lenght must be 10",
        minlength: "Phone number lenght must be 10",
      },
    },
    submitForm: function (form) {
      $("#submit").prop("disabled", true);
      $.ajax({
        type: "POST",
        url: "to_database.php",
        data: $(form).serialize(),
        success: function (response) {
          alert(response);
          form.reset();
          $("#page_1").show();
          $("#page_2").hide();
          $("#submit").prop("disabled", false);
        },
      });
    },
  });

  $.validator.addMethod(
    "notDefault",
    function (value) {
      return value !== "Select one" && value !== "";
    },
    "Select one"
  );

  $("#next").click(function () {
    if (
      $("#own_home").valid() &&
      $("#own_solar").valid() &&
      $("#electric_bill").valid() &&
      $("#how_soon").valid()
    ) {
      $("#page_1").hide();
      $("#page_2").show();
    }
  });

  $("#prev_page").click(function () {
    $("#page_1").show();
    $("#page_2").hide();
  });

  $("#submit").click(function () {
    $("#form").submit();
  });
});

if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

$(document).ready(function () {
  $(".brands-logos").owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 2,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
      },
      768: {
        items: 3,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
      },
      992: {
        items: 4,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
      },
      1200: {
        items: 5,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
      },
      1400: {
        items: 5,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
      },
    },
  });
  $(".work-items").owlCarousel({
    loop: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000,
      },

      768: {
        items: 2,
        autoplay: true,
        autoplayTimeout: 3000,
        stagePadding: 10,
      },
      992: {
        items: 3,
        autoplay: true,
        autoplayTimeout: 3000,
        stagePadding: 5,
      },
      1400: {
        items: 4,
        autoplay: true,
        autoplayTimeout: 3000,
        stagePadding: 5,
      },
    },
  });
  $(".price-cards").owlCarousel({
    loop: true,
    margin: 15,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000,
      },
      768: {
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000,
      },
      992: {
        items: 3,
        autoplay: false,
        mouseDrag: false,
        touchDrag: false,
      },
    },
  });
});

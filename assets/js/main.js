/**
 * Created by oleg on 05.10.17.
 */

$(document).ready(function () {

    $(document).on("click", "#enter", function () {
        var countCity = $('.class_city').length + 1;
        $.ajax({
            dataType: "html",
            url: 'ajax.php',
            type: "post",
            data: {number: countCity},
            success: function (response) {
                // console.log(response);
                $('#response').append('<div class="class_city">'+response+'</div>');
            }
        });

    });
});





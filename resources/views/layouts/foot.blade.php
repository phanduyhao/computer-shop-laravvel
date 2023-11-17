<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#decreaseButton").on("click", function() {
            var currentValue = parseInt($("#numberInput").val(), 10);
            if (currentValue > 0) {
                $("#numberInput").val(currentValue - 1);
            }
        });
        $("#increaseButton").on("click", function() {
            var currentValue = parseInt($("#numberInput").val(), 10);
            $("#numberInput").val(currentValue + 1);
        });
    });
</script>
<script src="/temp/build/js/main.min.js"></script>
<script src="/temp/assets/js/bootstrap.min.js"></script>
<script src="/temp/assets/js/wow.min.js"></script>
<script src="/temp/assets/js/tiny-slider.js"></script>
<script src="/temp/assets/js/glightbox.min.js"></script>
<script src="/temp/assets/js/main.js"></script>
<script src="/temp/build/js/main.min.js"></script>
<script type="text/javascript">
    //========= Category Slider
    tns({
        container: '.category-slider',
        items: 3,
        slideBy: 'page',
        autoplay: false,
        mouseDrag: true,
        gutter: 0,
        nav: false,
        controls: true,
        controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 2,
            },
            768: {
                items: 4,
            },
            992: {
                items: 5,
            },
            1170: {
                items: 6,
            }
        }
    });
</script>

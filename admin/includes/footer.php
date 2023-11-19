</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

<!-- Dashboard 1 -->
<script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>
<script src="js/demo.js"></script>
<script src="js/styleSwitcher.js"></script>

<!-- Apex Chart -->
<script src="vendor/apexchart/apexchart.js"></script>
<script src="vendor/chart.js/Chart.bundle.min.js"></script>
<script src="vendor/moment/moment.min.js"></script>

<!-- Calendar Scripts -->
<script src="vendor/fullcalendar/js/main.min.js"></script>
<script src="js/plugins-init/calendar.js"></script>
<script src="js/plugins-init/fullcalendar-init.js"></script>

<!-- Chart piety plugin files -->
<script src="vendor/peity/jquery.peity.min.js"></script>
<!-- Dashboard 1 -->
<script src="js/dashboard/dashboard-1.js"></script>

<script src="vendor/owl-carousel/owl.carousel.js"></script>

<!-- Datatable -->
<script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="./js/plugins-init/datatables.init.js"></script>

<!-- Daterangepicker -->
<!-- momment js is must -->
<script src="vendor/moment/moment.min.js"></script>
<script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- clockpicker -->
<script src="vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<!-- asColorPicker -->
<script src="vendor/jquery-asColor/jquery-asColor.min.js"></script>
<script src="vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
<script src="vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
<!-- Material color picker -->
<script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<!-- pickdate -->
<script src="vendor/pickadate/picker.js"></script>
<script src="vendor/pickadate/picker.time.js"></script>
<script src="vendor/pickadate/picker.date.js"></script>

<!-- Daterangepicker -->
<script src="js/plugins-init/bs-daterange-picker-init.js"></script>
<!-- Clockpicker init -->
<script src="js/plugins-init/clock-picker-init.js"></script>
<!-- asColorPicker init -->
<script src="js/plugins-init/jquery-asColorPicker.init.js"></script>
<!-- Material color picker init -->
<script src="js/plugins-init/material-date-picker-init.js"></script>
<!-- Pickdate -->
<script src="js/plugins-init/pickadate-init.js"></script>

<script>
    function cardsCenter() {
        /*  testimonial one function by = owl.carousel.js */

        jQuery(".card-slider").owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            //center:true,
            slideSpeed: 3000,
            paginationSpeed: 3000,
            dots: true,
            navText: [
                '<i class="fas fa-arrow-left"></i>',
                '<i class="fas fa-arrow-right"></i>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                576: {
                    items: 1,
                },
                800: {
                    items: 1,
                },
                991: {
                    items: 1,
                },
                1200: {
                    items: 1,
                },
                1600: {
                    items: 1,
                },
            },
        });
    }

    jQuery(window).on("load", function() {
        setTimeout(function() {
            cardsCenter();
        }, 1000);
    });

    var userSession = JSON.parse(localStorage.getItem("userData"));

    if (userSession==null) {
        window.location.href = "../"
    }else{
        if (userSession.type == undefined) {
            window.location.href = "tenant"
        }
    }

    $("#menu li").each(function(){
        var dataType = $(this).attr("data-type");

        if (userSession.type!='admin') {
            if (dataType!=undefined) {
                console.log(dataType!=userSession.type);
                console.log(dataType!="all");

                if (dataType!="all"&&dataType!=userSession.type) {
                    $(this).remove();
                }
            }
        }

        
    })
</script>
</body>

</html>
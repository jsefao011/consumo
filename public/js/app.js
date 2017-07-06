"use strict";
$(window).on("load", function() {
    setTimeout(function() {
        $(".page-loader").fadeOut()
    }, 500)
}), $(document).ready(function() {
    $("body").on("change", ".theme-switch input:radio", function() {
        var a = $(this).val();
        $("body").attr("data-ma-theme", a)
    }), $("body").on("focus", ".search__text", function() {
        $(this).closest(".search").addClass("search--focus")
    }), $("body").on("blur", ".search__text", function() {
        $(this).val(""), $(this).closest(".search").removeClass("search--focus")
    }), $("body").on("click", ".navigation__sub > a", function(a) {
        a.preventDefault(), $(this).parent().toggleClass("navigation__sub--toggled"), $(this).next("ul").slideToggle(250)
    }), $(".form-group--float")[0] && ($(".form-group--float").each(function() {
        0 == !$(this).find(".form-control").val().length && $(this).find(".form-control").addClass("form-control--active")
    }), $("body").on("blur", ".form-group--float .form-control", function() {
        0 == $(this).val().length ? $(this).removeClass("form-control--active") : $(this).addClass("form-control--active")
    }))
}), $("#dropzone-upload")[0] && (Dropzone.autoDiscover = !1), $(document).ready(function() {
    if ($(".btn")[0] && (Waves.init(), Waves.attach(".btn")), $("#data-table")[0]) {
        $("#data-table").DataTable({
            autoWidth: !1,
            responsive: !0,
            lengthMenu: [
                [15, 30, 45, -1],
                ["15 Rows", "30 Rows", "45 Rows", "Everything"]
            ],
            language: {
                searchPlaceholder: "Search for records..."
            },
            dom: "Blfrtip",
            buttons: [{
                extend: "excelHtml5",
                title: "Export Data"
            }, {
                extend: "csvHtml5",
                title: "Export Data"
            }, {
                extend: "print",
                title: "Material Admin"
            }],
            initComplete: function(a, b) {
                $(this).closest(".dataTables_wrapper").prepend('<div class="dataTables_buttons hidden-sm-down actions"><span class="actions__item zmdi zmdi-print" data-table-action="print" /><span class="actions__item zmdi zmdi-fullscreen" data-table-action="fullscreen" /><div class="dropdown actions__item"><i data-toggle="dropdown" class="zmdi zmdi-download" /><ul class="dropdown-menu dropdown-menu-right"><a href="" class="dropdown-item" data-table-action="excel">Excel (.xlsx)</a><a href="" class="dropdown-item" data-table-action="csv">CSV (.csv)</a></ul></div></div>')
            }
        }), $(".dataTables_filter input[type=search]").focus(function() {
            $(this).closest(".dataTables_filter").addClass("dataTables_filter--toggled")
        }), $(".dataTables_filter input[type=search]").blur(function() {
            $(this).closest(".dataTables_filter").removeClass("dataTables_filter--toggled")
        }), $("body").on("click", "[data-table-action]", function(a) {
            a.preventDefault();
            var b = $(this).data("table-action");
            if ("excel" === b && $(this).closest(".dataTables_wrapper").find(".buttons-excel").trigger("click"), "csv" === b && $(this).closest(".dataTables_wrapper").find(".buttons-csv").trigger("click"), "print" === b && $(this).closest(".dataTables_wrapper").find(".buttons-print").trigger("click"), "fullscreen" === b) {
                var c = $(this).closest(".card");
                c.hasClass("card--fullscreen") ? (c.removeClass("card--fullscreen"), $("body").removeClass("data-table-toggled")) : (c.addClass("card--fullscreen"), $("body").addClass("data-table-toggled"))
            }
        })
    }
    if ($(".textarea-autosize")[0] && autosize($(".textarea-autosize")), $("input-mask")[0] && $(".input-mask").mask(), $("select.select2")[0]) {
        var a = $(".select2-parent")[0] ? $(".select2-parent") : $("body");
        $("select.select2").select2({
            dropdownAutoWidth: !0,
            width: "100%",
            dropdownParent: a
        })
    }
    if ($("#dropzone-upload")[0] && $("#dropzone-upload").dropzone({
            url: "/file/post",
            addRemoveLinks: !0
        }), $(".datetime-picker")[0] && $(".datetime-picker").flatpickr({
            enableTime: !0,
            nextArrow: '<i class="zmdi zmdi-long-arrow-right" />',
            prevArrow: '<i class="zmdi zmdi-long-arrow-left" />'
        }), $(".date-picker")[0] && $(".date-picker").flatpickr({
            enableTime: !1,
            nextArrow: '<i class="zmdi zmdi-long-arrow-right" />',
            prevArrow: '<i class="zmdi zmdi-long-arrow-left" />'
        }), $(".time-picker")[0] && $(".time-picker").flatpickr({
            noCalendar: !0,
            enableTime: !0
        }), $("#input-slider")[0]) {
        var b = document.getElementById("input-slider");
        noUiSlider.create(b, {
            start: [20],
            connect: "lower",
            range: {
                min: 0,
                max: 100
            }
        }), b.noUiSlider.on("update", function(a, b) {
            document.getElementById("input-slider-value").value = a[b]
        })
    }
    if ($("#input-slider-range")[0]) {
        var c = document.getElementById("input-slider-range"),
            d = document.getElementById("input-slider-range-value-1"),
            e = document.getElementById("input-slider-range-value-2"),
            f = [d, e];
        noUiSlider.create(c, {
            start: [20, 80],
            connect: !0,
            range: {
                min: 0,
                max: 100
            }
        }), c.noUiSlider.on("update", function(a, b) {
            f[b].value = a[b]
        })
    }
    if ($(".input-slider")[0])
        for (var g = document.getElementsByClassName("input-slider"), h = 0; h < g.length; h++) noUiSlider.create(g[h], {
            start: [20],
            connect: "lower",
            range: {
                min: 0,
                max: 100
            }
        });
    if ($(".color-picker")[0] && ($(this).each(function() {
            var a = $(this).find(".color-picker__value").data("horizontal") || !1;
            $(this).find(".color-picker__value").colorpicker({
                horizontal: a
            })
        }), $("body").on("change", ".color-picker__value", function() {
            $(this).closest(".color-picker").find(".color-picker__preview").css("backgroundColor", $(this).val())
        })), $(".wysiwyg-editor")[0] && $(".wysiwyg-editor").trumbowyg({
            autogrow: !0,
            btns: [
                ["viewHTML"],
                ["formatting"],
                ["link"],
                ["insertImage"], "btnGrp-justify", "btnGrp-lists", ["horizontalRule"],
                ["removeformat"],
                ["fullscreen"]
            ]
        }), $(".lightbox")[0] && $(".lightbox").lightGallery({
            enableTouch: !0
        }), $('[data-toggle="popover"]')[0] && $('[data-toggle="popover"]').popover(), $('[data-toggle="tooltip"]')[0] && $('[data-toggle="tooltip"]').tooltip(), $(".widget-calendar__body")[0]) {
        $(".widget-calendar__body").fullCalendar({
            contentHeight: "auto",
            theme: !1,
            buttonIcons: {
                prev: " zmdi zmdi-long-arrow-left",
                next: " zmdi zmdi-long-arrow-right"
            },
            header: {
                right: "next",
                center: "title, ",
                left: "prev"
            },
            defaultDate: "2016-08-12",
            editable: !0,
            events: [{
                title: "Dolor Pellentesque",
                start: "2016-08-01",
                className: "bg-cyan"
            }, {
                title: "Purus Nibh",
                start: "2016-08-07",
                className: "bg-amber"
            }, {
                title: "Amet Condimentum",
                start: "2016-08-09",
                className: "bg-green"
            }, {
                title: "Tellus",
                start: "2016-08-12",
                className: "bg-blue"
            }, {
                title: "Vestibulum",
                start: "2016-08-18",
                className: "bg-cyan"
            }, {
                title: "Ipsum",
                start: "2016-08-24",
                className: "bg-teal"
            }, {
                title: "Fringilla Sit",
                start: "2016-08-27",
                className: "bg-blue"
            }, {
                title: "Amet Pharetra",
                url: "http://google.com/",
                start: "2016-08-30",
                className: "bg-amber"
            }]
        });
        var i = moment().format("YYYY"),
            j = moment().format("dddd, MMM D");
        $(".widget-calendar__year").html(i), $(".widget-calendar__day").html(j)
    }
    if ($(".notes__body")[0]) {
        var k;
        $(".notes__body").each(function(a, b) {
            k = $(this).prev().is(".notes__title") ? 4 : 6, $clamp(b, {
                clamp: k
            })
        })
    }
    $(".scrollbar-inner")[0] && $(".scrollbar-inner").scrollbar().scrollLock()
}), $(document).ready(function() {
    function a(a) {
        a.requestFullscreen ? a.requestFullscreen() : a.mozRequestFullScreen ? a.mozRequestFullScreen() : a.webkitRequestFullscreen ? a.webkitRequestFullscreen() : a.msRequestFullscreen && a.msRequestFullscreen()
    }
    $("body").on("click", "[data-ma-action]", function(b) {
        b.preventDefault();
        var c = $(this),
            d = c.data("ma-action"),
            e = "";
        switch (d) {
            case "search-open":
                $(".search").addClass("search--toggled");
                break;
            case "search-close":
                $(".search").removeClass("search--toggled");
                break;
            case "aside-open":
                e = c.data("ma-target"), c.addClass("toggled"), $(e).addClass("toggled"), $(".content, .header").append('<div class="ma-backdrop" data-ma-action="aside-close" data-ma-target=' + e + " />");
                break;
            case "aside-close":
                e = c.data("ma-target"), $('[data-ma-action="aside-open"], ' + e).removeClass("toggled"), $(".content, .header").find(".ma-backdrop").remove();
                break;
            case "fullscreen":
                a(document.documentElement);
                break;
            case "print":
                window.print();
                break;
            case "clear-localstorage":
                swal({
                    title: "Are you sure?",
                    text: "This can not be undone!",
                    type: "warning",
                    showCancelButton: !0,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "Yes, clear it",
                    cancelButtonText: "No, cancel"
                }).then(function() {
                    localStorage.clear(), swal("Cleared!", "Local storage has been successfully cleared", "success")
                });
                break;
            case "login-switch":
                e = c.data("ma-target"), $(".login__block").removeClass("active"), $(e).addClass("active");
                break;
            case "notifications-clear":
                b.stopPropagation();
                var f = $(".top-nav__notifications .listview__item"),
                    g = f.length,
                    h = 0;
                c.fadeOut(), f.each(function() {
                    var a = $(this);
                    setTimeout(function() {
                        a.addClass("animated fadeOutRight")
                    }, h += 150)
                }), setTimeout(function() {
                    f.remove(), $(".top-nav__notifications").addClass("top-nav__notifications--cleared")
                }, 180 * g);
                break;
            case "toolbar-search-open":
                $(this).closest(".toolbar").find(".toolbar__search").fadeIn(200), $(this).closest(".toolbar").find(".toolbar__search input").focus();
                break;
            case "toolbar-search-close":
                $(this).closest(".toolbar").find(".toolbar__search input").val(""), $(this).closest(".toolbar").find(".toolbar__search").fadeOut(200)
        }
    })
});
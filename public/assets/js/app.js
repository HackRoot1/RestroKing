class Components {
    initBootstrapComponents() {
        [...document.querySelectorAll('[data-bs-toggle="popover"]')].map(
            (e) => new bootstrap.Popover(e)
        ),
            [...document.querySelectorAll('[data-bs-toggle="tooltip"]')].map(
                (e) => new bootstrap.Tooltip(e)
            ),
            [...document.querySelectorAll(".offcanvas")].map(
                (e) => new bootstrap.Offcanvas(e)
            );
        var e = document.getElementById("toastPlacement");
        e &&
            document
                .getElementById("selectToastPlacement")
                .addEventListener("change", function () {
                    e.dataset.originalClass ||
                        (e.dataset.originalClass = e.className),
                        (e.className =
                            e.dataset.originalClass + " " + this.value);
                });
        [].slice.call(document.querySelectorAll(".toast")).map(function (e) {
            return new bootstrap.Toast(e);
        });
        const t = document.getElementById("liveAlertBtn");
        t &&
            t.addEventListener("click", () => {
                alert("Nice, you triggered this alert message!", "success");
            });
    }
    initfullScreenListener() {
        var e = document.querySelector('[data-toggle="fullscreen"]');
        e &&
            e.addEventListener("click", function (e) {
                e.preventDefault(),
                    document.body.classList.toggle("fullscreen-enable"),
                    document.fullscreenElement ||
                    document.mozFullScreenElement ||
                    document.webkitFullscreenElement
                        ? document.cancelFullScreen
                            ? document.cancelFullScreen()
                            : document.mozCancelFullScreen
                            ? document.mozCancelFullScreen()
                            : document.webkitCancelFullScreen &&
                              document.webkitCancelFullScreen()
                        : document.documentElement.requestFullscreen
                        ? document.documentElement.requestFullscreen()
                        : document.documentElement.mozRequestFullScreen
                        ? document.documentElement.mozRequestFullScreen()
                        : document.documentElement.webkitRequestFullscreen &&
                          document.documentElement.webkitRequestFullscreen(
                              Element.ALLOW_KEYBOARD_INPUT
                          );
            });
    }
    initCounter() {
        var e = document.querySelectorAll(".counter-value");
        function a(e) {
            return e.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        e &&
            e.forEach(function (i) {
                !(function e() {
                    var t = +i.getAttribute("data-target"),
                        n = +i.innerText,
                        o = t / 250;
                    o < 1 && (o = 1),
                        n < t
                            ? ((i.innerText = (n + o).toFixed(0)),
                              setTimeout(e, 1))
                            : (i.innerText = a(t)),
                        a(i.innerText);
                })();
            });
    }
    init() {
        this.initBootstrapComponents(),
            this.initfullScreenListener(),
            this.initCounter();
    }
}
class FormValidation {
    initFormValidation() {
        document.querySelectorAll(".needs-validation").forEach((t) => {
            t.addEventListener(
                "submit",
                (e) => {
                    t.checkValidity() ||
                        (e.preventDefault(), e.stopPropagation()),
                        t.classList.add("was-validated");
                },
                !1
            );
        });
    }
    init() {
        this.initFormValidation();
    }
}
document.addEventListener("DOMContentLoaded", function (e) {
    new Components().init(), new FormValidation().init();
});
class ThemeLayout {
    constructor() {
        (this.html = document.getElementsByTagName("html")[0]),
            (this.config = {}),
            (this.defaultConfig = window.config);
    }
    initVerticalMenu() {
        const e = document.querySelectorAll(".navbar-nav li .collapse"),
            t = document.querySelectorAll(
                ".navbar-nav li [data-bs-toggle='collapse']"
            );
        t.forEach((e) => {
            e.addEventListener("click", function (e) {
                e.preventDefault();
            });
        }),
            e.forEach((e) => {
                e.addEventListener("show.bs.collapse", function (n) {
                    const o = n.target.closest(".collapse.show");
                    document
                        .querySelectorAll(".navbar-nav .collapse.show")
                        .forEach((e) => {
                            if (e !== n.target && e !== o) {
                                const t = new bootstrap.Collapse(e);
                                t.hide();
                            }
                        });
                });
            }),
            document.querySelector(".navbar-nav") &&
                (document
                    .querySelectorAll(".navbar-nav a")
                    .forEach(function (t) {
                        var e = window.location.href.split(/[?#]/)[0];
                        if (t.href === e) {
                            t.classList.add("active"),
                                t.parentNode.classList.add("active");
                            let e = t.closest(".collapse");
                            for (; e; )
                                e.classList.add("show"),
                                    e.parentElement.children[0].classList.add(
                                        "active"
                                    ),
                                    e.parentElement.children[0].setAttribute(
                                        "aria-expanded",
                                        "true"
                                    ),
                                    (e = e.parentElement.closest(".collapse"));
                        }
                    }),
                setTimeout(function () {
                    var e,
                        o,
                        i,
                        a,
                        c,
                        l,
                        t = document.querySelector(".nav-item li a.active");
                    function r() {
                        var e,
                            t,
                            n =
                                ((e = l += 20),
                                (n = a),
                                (t = c),
                                (e /= i / 2) < 1
                                    ? (t / 2) * e * e + n
                                    : (-t / 2) * (--e * (e - 2) - 1) + n);
                        (o.scrollTop = n), l < i && setTimeout(r, 20);
                    }
                    null != t &&
                        ((e = document.querySelector(
                            ".app-sidebar .simplebar-content-wrapper"
                        )),
                        (t = t.offsetTop - 300),
                        e &&
                            100 < t &&
                            ((i = 600),
                            (a = (o = e).scrollTop),
                            (c = t - a),
                            (l = 0),
                            r()));
                }, 200));
    }
    initConfig() {
        (this.defaultConfig = JSON.parse(JSON.stringify(window.defaultConfig))),
            (this.config = JSON.parse(JSON.stringify(window.config))),
            this.setSwitchFromConfig();
    }
    changeMenuColor(e) {
        (this.config.menu.color = e),
            this.html.setAttribute("data-sidebar-color", e),
            this.setSwitchFromConfig();
    }
    changeMenuSize(e, t = !0) {
        this.html.setAttribute("data-sidebar-size", e),
            t && ((this.config.menu.size = e), this.setSwitchFromConfig());
    }
    changeThemeMode(e) {
        (this.config.theme = e),
            this.html.setAttribute("data-bs-theme", e),
            this.setSwitchFromConfig();
    }
    changeTopbarColor(e) {
        (this.config.topbar.color = e),
            this.html.setAttribute("data-topbar-color", e),
            this.setSwitchFromConfig();
    }
    resetTheme() {
        (this.config = JSON.parse(JSON.stringify(window.defaultConfig))),
            this.changeMenuColor(this.config.menu.color),
            this.changeMenuSize(this.config.menu.size),
            this.changeThemeMode(this.config.theme),
            this.changeTopbarColor(this.config.topbar.color),
            this._adjustLayout();
    }
    initSwitchListener() {
        var n = this;
        document
            .querySelectorAll("input[name=data-sidebar-color]")
            .forEach(function (t) {
                t.addEventListener("change", function (e) {
                    n.changeMenuColor(t.value);
                });
            }),
            document
                .querySelectorAll("input[name=data-sidebar-size]")
                .forEach(function (t) {
                    t.addEventListener("change", function (e) {
                        n.changeMenuSize(t.value);
                    });
                }),
            document
                .querySelectorAll("input[name=data-bs-theme]")
                .forEach(function (t) {
                    t.addEventListener("change", function (e) {
                        n.changeThemeMode(t.value);
                    });
                }),
            document
                .querySelectorAll("input[name=data-topbar-color]")
                .forEach(function (t) {
                    t.addEventListener("change", function (e) {
                        n.changeTopbarColor(t.value);
                    });
                });
        var e = document.getElementById("light-dark-mode");
        e &&
            e.addEventListener("click", function (e) {
                "light" === n.config.theme
                    ? n.changeThemeMode("dark")
                    : n.changeThemeMode("light");
            });
        e = document.querySelector("#reset-layout");
        e &&
            e.addEventListener("click", function (e) {
                n.resetTheme();
            });
        e = document.querySelector(".button-toggle-menu");
        e &&
            e.addEventListener("click", function () {
                var e = n.config.menu.size,
                    t = n.html.getAttribute("data-sidebar-size", e);
                "hidden" !== t
                    ? "condensed" === t
                        ? n.changeMenuSize("condensed" == e ? "default" : e, !1)
                        : n.changeMenuSize("condensed", !1)
                    : n.showBackdrop(),
                    n.html.classList.toggle("sidebar-enable");
            });
    }
    showBackdrop() {
        const t = document.createElement("div");
        (t.classList = "offcanvas-backdrop fade show"),
            document.body.appendChild(t),
            (document.body.style.overflow = "hidden"),
            1040 < window.innerWidth &&
                (document.body.style.paddingRight = "15px");
        const n = this;
        t.addEventListener("click", function (e) {
            n.html.classList.remove("sidebar-enable"),
                document.body.removeChild(t),
                (document.body.style.overflow = null),
                (document.body.style.paddingRight = null);
        });
    }
    initWindowSize() {
        var t = this;
        window.addEventListener("resize", function (e) {
            t._adjustLayout();
        });
    }
    _adjustLayout() {
        window.innerWidth <= 1140
            ? this.changeMenuSize("hidden", !1)
            : this.changeMenuSize(this.config.menu.size);
    }
    setSwitchFromConfig() {
        sessionStorage.setItem(
            "__Darkone_CONFIG__",
            JSON.stringify(this.config)
        ),
            document
                .querySelectorAll(".settings-bar input[type=radio]")
                .forEach(function (e) {
                    e.checked = !1;
                });
        var e,
            t,
            n,
            o = this.config;
        o &&
            ((e = document.querySelector(
                "input[type=radio][name=data-bs-theme][value=" + o.theme + "]"
            )),
            (t = document.querySelector(
                "input[type=radio][name=data-topbar-color][value=" +
                    o.topbar.color +
                    "]"
            )),
            (n = document.querySelector(
                "input[type=radio][name=data-sidebar-size][value=" +
                    o.menu.size +
                    "]"
            )),
            (o = document.querySelector(
                "input[type=radio][name=data-sidebar-color][value=" +
                    o.menu.color +
                    "]"
            )),
            e && (e.checked = !0),
            t && (t.checked = !0),
            n && (n.checked = !0),
            o && (o.checked = !0));
    }
    init() {
        this.initVerticalMenu(),
            this.initConfig(),
            this.initSwitchListener(),
            this.initWindowSize(),
            this._adjustLayout(),
            this.setSwitchFromConfig();
    }
}
new ThemeLayout().init();

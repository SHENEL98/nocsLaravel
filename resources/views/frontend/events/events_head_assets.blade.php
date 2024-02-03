<script type="text/javascript">
    window._wpemojiSettings = {
      baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
      ext: ".png",
      svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
      svgExt: ".svg",
      source: {
        concatemoji:
          "https:\/\/themetechmount.com\/ttm-business\/free\/demo28\/js/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3.2",
      },
    };
    /*! This file is auto-generated */
    !(function (i, n) {
      var o, s, e;
      function c(e) {
        try {
          var t = { supportTests: e, timestamp: new Date().valueOf() };
          sessionStorage.setItem(o, JSON.stringify(t));
        } catch (e) { }
      }
      function p(e, t, n) {
        e.clearRect(0, 0, e.canvas.width, e.canvas.height),
          e.fillText(t, 0, 0);
        var t = new Uint32Array(
          e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
        ),
          r =
            (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
              e.fillText(n, 0, 0),
              new Uint32Array(
                e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
              ));
        return t.every(function (e, t) {
          return e === r[t];
        });
      }
      function u(e, t, n) {
        switch (t) {
          case "flag":
            return n(
              e,
              "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
              "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
            )
              ? !1
              : !n(
                e,
                "\ud83c\uddfa\ud83c\uddf3",
                "\ud83c\uddfa\u200b\ud83c\uddf3"
              ) &&
              !n(
                e,
                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
              );
          case "emoji":
            return !n(
              e,
              "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
              "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff"
            );
        }
        return !1;
      }
      function f(e, t, n) {
        var r =
          "undefined" != typeof WorkerGlobalScope &&
            self instanceof WorkerGlobalScope
            ? new OffscreenCanvas(300, 150)
            : i.createElement("canvas"),
          a = r.getContext("2d", { willReadFrequently: !0 }),
          o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
        return (
          e.forEach(function (e) {
            o[e] = t(a, e, n);
          }),
          o
        );
      }
      function t(e) {
        var t = i.createElement("script");
        (t.src = e), (t.defer = !0), i.head.appendChild(t);
      }
      "undefined" != typeof Promise &&
        ((o = "wpEmojiSettingsSupports"),
          (s = ["flag", "emoji"]),
          (n.supports = { everything: !0, everythingExceptFlag: !0 }),
          (e = new Promise(function (e) {
            i.addEventListener("DOMContentLoaded", e, { once: !0 });
          })),
          new Promise(function (t) {
            var n = (function () {
              try {
                var e = JSON.parse(sessionStorage.getItem(o));
                if (
                  "object" == typeof e &&
                  "number" == typeof e.timestamp &&
                  new Date().valueOf() < e.timestamp + 604800 &&
                  "object" == typeof e.supportTests
                )
                  return e.supportTests;
              } catch (e) { }
              return null;
            })();
            if (!n) {
              if (
                "undefined" != typeof Worker &&
                "undefined" != typeof OffscreenCanvas &&
                "undefined" != typeof URL &&
                URL.createObjectURL &&
                "undefined" != typeof Blob
              )
                try {
                  var e =
                    "postMessage(" +
                    f.toString() +
                    "(" +
                    [JSON.stringify(s), u.toString(), p.toString()].join(
                      ","
                    ) +
                    "));",
                    r = new Blob([e], { type: "text/javascript" }),
                    a = new Worker(URL.createObjectURL(r), {
                      name: "wpTestEmojiSupports",
                    });
                  return void (a.onmessage = function (e) {
                    c((n = e.data)), a.terminate(), t(n);
                  });
                } catch (e) { }
              c((n = f(s, u, p)));
            }
            t(n);
          })
            .then(function (e) {
              for (var t in e)
                (n.supports[t] = e[t]),
                  (n.supports.everything =
                    n.supports.everything && n.supports[t]),
                  "flag" !== t &&
                  (n.supports.everythingExceptFlag =
                    n.supports.everythingExceptFlag && n.supports[t]);
              (n.supports.everythingExceptFlag =
                n.supports.everythingExceptFlag && !n.supports.flag),
                (n.DOMReady = !1),
                (n.readyCallback = function () {
                  n.DOMReady = !0;
                });
            })
            .then(function () {
              return e;
            })
            .then(function () {
              var e;
              n.supports.everything ||
                (n.readyCallback(),
                  (e = n.source || {}).concatemoji
                    ? t(e.concatemoji)
                    : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
            }));
    })((window, document), window._wpemojiSettings);
  </script>
  <style type="text/css">
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 0.07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
    }
  </style>
  <link rel="stylesheet" id="wp-block-library-css"
    href="{{asset('assets/frontend/js/wp-includes/css/dist/block-library/style.mine35d.css?ver=6.3.2')}}" type="text/css" media="all" />
  <style id="classic-theme-styles-inline-css" type="text/css">
    /*! This file is auto-generated */
    .wp-block-button__link {
      color: #fff;
      background-color: #32373c;
      border-radius: 9999px;
      box-shadow: none;
      text-decoration: none;
      padding: calc(0.667em + 2px) calc(1.333em + 2px);
      font-size: 1.125em;
    }

    .wp-block-file__button {
      background: #32373c;
      color: #fff;
      text-decoration: none;
    }
  </style>
  <style id="global-styles-inline-css" type="text/css">
    body {
      --wp--preset--color--black: #000000;
      --wp--preset--color--cyan-bluish-gray: #abb8c3;
      --wp--preset--color--white: #ffffff;
      --wp--preset--color--pale-pink: #f78da7;
      --wp--preset--color--vivid-red: #cf2e2e;
      --wp--preset--color--luminous-vivid-orange: #ff6900;
      --wp--preset--color--luminous-vivid-amber: #fcb900;
      --wp--preset--color--light-green-cyan: #7bdcb5;
      --wp--preset--color--vivid-green-cyan: #00d084;
      --wp--preset--color--pale-cyan-blue: #8ed1fc;
      --wp--preset--color--vivid-cyan-blue: #0693e3;
      --wp--preset--color--vivid-purple: #9b51e0;
      --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
          rgba(6, 147, 227, 1) 0%,
          rgb(155, 81, 224) 100%);
      --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
          rgb(122, 220, 180) 0%,
          rgb(0, 208, 130) 100%);
      --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
          rgba(252, 185, 0, 1) 0%,
          rgba(255, 105, 0, 1) 100%);
      --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
          rgba(255, 105, 0, 1) 0%,
          rgb(207, 46, 46) 100%);
      --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
          rgb(238, 238, 238) 0%,
          rgb(169, 184, 195) 100%);
      --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
          rgb(74, 234, 220) 0%,
          rgb(151, 120, 209) 20%,
          rgb(207, 42, 186) 40%,
          rgb(238, 44, 130) 60%,
          rgb(251, 105, 98) 80%,
          rgb(254, 248, 76) 100%);
      --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
          rgb(255, 206, 236) 0%,
          rgb(152, 150, 240) 100%);
      --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
          rgb(254, 205, 165) 0%,
          rgb(254, 45, 45) 50%,
          rgb(107, 0, 62) 100%);
      --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
          rgb(255, 203, 112) 0%,
          rgb(199, 81, 192) 50%,
          rgb(65, 88, 208) 100%);
      --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
          rgb(255, 245, 203) 0%,
          rgb(182, 227, 212) 50%,
          rgb(51, 167, 181) 100%);
      --wp--preset--gradient--electric-grass: linear-gradient(135deg,
          rgb(202, 248, 128) 0%,
          rgb(113, 206, 126) 100%);
      --wp--preset--gradient--midnight: linear-gradient(135deg,
          rgb(2, 3, 129) 0%,
          rgb(40, 116, 252) 100%);
      --wp--preset--font-size--small: 13px;
      --wp--preset--font-size--medium: 20px;
      --wp--preset--font-size--large: 36px;
      --wp--preset--font-size--x-large: 42px;
      --wp--preset--spacing--20: 0.44rem;
      --wp--preset--spacing--30: 0.67rem;
      --wp--preset--spacing--40: 1rem;
      --wp--preset--spacing--50: 1.5rem;
      --wp--preset--spacing--60: 2.25rem;
      --wp--preset--spacing--70: 3.38rem;
      --wp--preset--spacing--80: 5.06rem;
      --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
      --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
        6px 6px rgba(0, 0, 0, 1);
      --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
      gap: 0.5em;
    }

    :where(.is-layout-grid) {
      gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
      float: left;
      margin-inline-start: 0;
      margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
      float: right;
      margin-inline-start: 2em;
      margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
      float: left;
      margin-inline-start: 0;
      margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
      float: right;
      margin-inline-start: 2em;
      margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
      max-width: var(--wp--style--global--content-size);
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
      max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
      display: flex;
    }

    body .is-layout-flex {
      flex-wrap: wrap;
      align-items: center;
    }

    body .is-layout-flex>* {
      margin: 0;
    }

    body .is-layout-grid {
      display: grid;
    }

    body .is-layout-grid>* {
      margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
      gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
      gap: 2em;
    }

    :where(.wp-block-post-template.is-layout-flex) {
      gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
      gap: 1.25em;
    }

    .has-black-color {
      color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
      color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
      color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
      color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
      color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
      color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
      color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
      color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
      color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
      color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
      color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
      color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
      background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
      background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
      background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
      background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
      background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
      background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
      background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
      background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
      background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
      background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
      border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
      border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
      border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
      border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
      border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
      border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
      border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
      border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
      border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
      border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
      background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
      background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
      background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
      background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
      background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
      background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
      background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
      background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
      background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
      background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
      font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
      font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
      font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
      font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
      color: inherit;
    }

    :where(.wp-block-post-template.is-layout-flex) {
      gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
      gap: 1.25em;
    }

    :where(.wp-block-columns.is-layout-flex) {
      gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
      gap: 2em;
    }

    .wp-block-pullquote {
      font-size: 1.5em;
      line-height: 1.6;
    }
  </style>
  <link rel="stylesheet" id="contact-form-7-css"
    href="{{asset('assets/frontend/content/wp-content/plugins/contact-form-7/includes/css/styles41a3.css?ver=5.8')}}" type="text/css" media="all" />
  <link rel="stylesheet" id="redux-extendify-styles-css"
    href="{{asset('assets/frontend/content/wp-content/plugins/redux-framework/redux-core/assets/css/extendify-utilities4235.css?ver=4.4.5')}}"
    type="text/css" media="all" />
  <link rel="stylesheet" id="elementor-icons-css"
    href="{{asset('assets/frontend/content/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.mind618.css?ver=5.21.0')}}"
    type="text/css" media="all" />
  <link rel="stylesheet" id="elementor-frontend-css"
    href="{{asset('assets/frontend/content/wp-content/plugins/elementor/assets/css/frontend-lite.min6319.css?ver=3.15.2')}}" type="text/css"
    media="all" />
  <link rel="stylesheet" id="swiper-css"
    href="{{asset('assets/frontend/content/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5')}}" type="text/css"
    media="all" />
  <link rel="stylesheet" id="elementor-post-3-css"
    href="{{asset('assets/frontend/content/wp-content/uploads/sites/8/elementor/css/post-31009.css?ver=1691986815')}}" type="text/css" media="all" />
  <link rel="stylesheet" id="elementor-post-7-css"
    href="{{asset('assets/frontend/content/wp-content/uploads/sites/8/elementor/css/post-7048d.css?ver=1692006534')}}" type="text/css" media="all" />
  <link rel="stylesheet" id="bootstrap-css" href="{{asset('assets/frontend/content/wp-content/themes/nocs/css/bootstrap.mincce7.css?ver=4.0.0')}}"
    type="text/css" media="all" />
  <link rel="stylesheet" id="fontawesome-shims-css"
    href="{{asset('assets/frontend/content/wp-content/themes/nocs/fonts/css/v4-shims.minaec5.css?ver=5.11.2')}}" type="text/css" media="all" />
  <link rel="stylesheet" id="fontawesome-css" href="{{asset('assets/frontend/content/wp-content/themes/nocs/fonts/css/all.minaec5.css?ver=5.11.2')}}"
    type="text/css" media="all" />
  <link rel="stylesheet" id="slicknav-css" href="{{asset('assets/frontend/content/wp-content/themes/nocs/css/slicknav1c96.css?ver=1.0.10')}}"
    type="text/css" media="all" />
  <link rel="stylesheet" id="ttm-business-style-css" href="{{asset('assets/frontend/content/wp-content/themes/nocs/stylee35d.css?ver=6.3.2')}}"
    type="text/css" media="all" />
  <link rel="stylesheet" id="ttm-business-google-fonts-css"
    href="http://fonts.googleapis.com/css?family=Roboto%20Slab:400,500,600,700|Roboto:400&amp;display=swap"
    type="text/css" media="all" />
  <link rel="stylesheet" id="ttm-business-main-style-css"
    href="{{asset('assets/frontend/content/wp-content/themes/nocs/css/maine35d.css?ver=6.3.2')}}" type="text/css" media="all" />

  <link rel="stylesheet" id="elementor-post-2220-css"
    href="{{asset('assets/frontend/content/wp-content/uploads/sites/8/elementor/css/post-22209f12.css?ver=1691986816')}}" type="text/css"
    media="all" />
  <link rel="stylesheet" id="eael-2220-css"
    href="{{asset('assets/frontend/content/wp-content/uploads/sites/8/essential-addons-elementor/eael-22207d4b.css?ver=1691986795')}}"
    type="text/css" media="all" />
  <style id="ttm-business-main-style-inline-css" type="text/css">
    :root {
      --prt-skincolor: #306a96;
      --prt-greycolor: #000000;
      --prt-darkcolor: #f2f6fa;
    }

    body {
      font-family: Poppins;
      font-weight: 400;
      font-size: 15px;
      line-height: 28px;
      color: #868686;
    }

    h1 {
      font-family: Poppins;
      font-weight: 600;
      font-size: 90px;
      line-height: 100px;
      color: #000000;
    }

    h2 {
      font-family: Poppins;
      font-weight: 500;
      font-size: 44px;
      line-height: 58px;
      color: #000000;
    }

    article.post p.tm-blockquote-authorname {
      color: #000000;
    }

    h3 {
      font-family: Poppins;
      font-weight: 500;
      font-size: 23px;
      line-height: 33px;
      color: #000000;
    }

    h4 {
      font-family: Poppins;
      font-weight: 500;
      font-size: 26px;
      line-height: 40px;
      color: #000000;
    }

    .ttm-business-blog-classic .prt-blogbox-footer a {
      font-family: Poppins;
    }

    h5 {
      font-family: Poppins;
      font-weight: 500;
      font-size: 22px;
      line-height: 36px;
      color: #000000;
    }

    h6 {
      font-family: Poppins;
      font-weight: 500;
      font-size: 16px;
      line-height: 26px;
      color: #000000;
    }

    .site-header .main-navigation div>ul>li>a {
      font-family: Poppins;
      font-weight: 400;
      font-size: 15px;
      line-height: 25px;
      color: #ffffff;
      letter-spacing: 0px;
    }

    .site-footer {
      background-color: #000000;
    }

    #bottom-footer-text {
      background-color: #000000;
    }

    .bottom-footer-text .footer-right,
    .bottom-footer-text .footer-left {
      color: #ffffff;
    }

    .site-footer .widget.widget_nav_menu a:not(:hover),
    .ttm-business-footer-widgets-wrapper .widget {
      color: #ffffff;
    }

    .site-footer .widget .widget-title {
      color: #ffffff;
    }

    .col-sm-12.prt-footer2-left,
    .col-sm-12.prt-footer2-right {
      color: #ffffff;
    }

    .ttm-business-page-title {
      background-image: url("{{asset('assets/frontend/content/wp-content/uploads/sites/8/2023/07/about.png')}}");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
    }

    .ttm-business-page-title {
      height: 280px;
    }

    .ttm-business-page-title .page-title {
      color: #ffffff;
    }

    .site-header .sticky-site-logo,
    .site-header .site-logo,
    .header-right-side {
      height: 85px;
      line-height: 85px;
    }

    .site-header .main-navigation div>ul>li>a {
      line-height: 85px;
    }

    .site-header {
      background-color: #ffffff;
    }

    .site-footer a,
    .bottom-footer-text a {
      color: #cacaca;
    }

    .site-footer a:hover,
    .bottom-footer-text a:hover {
      color: #306a96;
    }

    .site-header .site-logo img {
      height: 25px;
    }

    @media (min-width: 1200px) {

      .header-layout-2 .site-header .headerlogo,
      .header-layout-2 .site-header .site-logo a {
        width: 370px;
      }
    }

    .header-layout-2 .site-header .main-navigation div>ul>li.logo-after-this {
      margin-right: 70px;
    }

    .site-header .main-navigation div>ul>li.current_page_parent>a,
    .site-header .main-navigation div>ul ul li.current-menu-item>a,
    .ttm-business-copyright .social-icons li a:hover,
    .site-header .main-navigation div>ul>li.current-menu-parent>a,
    .site-header .main-navigation div>ul>li>a:hover,
    .site-header .main-navigation div>ul>li.current-menu-item>a,
    .site-header .main-navigation div>ul ul li.current_page_item>a,
    .site-header .main-navigation div>ul ul li a:hover,
    .skincolor {
      color: #ffffff;
    }

    .site-footer .widget .widget-title,
    .sidebar .widget h2,
    .sidebar .wp-block-search__label {
      font-family: Poppins;
      font-weight: 500;
      font-size: 18px;
      line-height: 30px;
      letter-spacing: 0px;
    }

    .ttm-business-page-title-layer {
      background-color: transparent;
    }

    @media (min-width: 1200px) {
      .tm-header-layout-3 .ttm-business-page-title .page-title {
        padding-top: 85px;
      }
    }

    .site-title-text {
      font-family: Poppins;
      font-weight: 500;
      font-size: 28px;
      line-height: 38px;
      color: #ffffff;
    }

    .site-title-text a:hover {
      color: #ffffff;
    }
  </style>
  <link rel="stylesheet" id="ttm-business-responsive-style-css"
    href="{{asset('assets/frontend/content/wp-content/themes/nocs/css/responsivee35d.css?ver=6.3.2')}}" type="text/css" media="all" />
  <link rel="stylesheet" id="eael-general-css"
    href="{{asset('assets/frontend/content/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min6281.css?ver=5.8.6')}}"
    type="text/css" media="all" />
  <link rel="preload" as="style"
    href="https://fonts.googleapis.com/css?family=Poppins:500,400,600&amp;display=swap&amp;ver=1691986504" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins:500,400,600&amp;display=swap&amp;ver=1691986504" media="print"
    onload="this.media='all'" />
  <noscript>
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Poppins:500,400,600&amp;display=swap&amp;ver=1691986504" />
  </noscript>
  <link rel="stylesheet" id="google-fonts-1-css"
    href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.3.2"
    type="text/css" media="all" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <script type="text/javascript" src="{{asset('assets/frontend/js/wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0')}}"
    id="jquery-core-js"></script>
  <script type="text/javascript" src="{{asset('assets/frontend/js/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1')}}"
    id="jquery-migrate-js"></script>
  <script type="text/javascript" src="{{asset('assets/frontend/content/wp-content/themes/nocs/js/slicknav.min1c96.js?ver=1.0.10')}}"
    id="slicknav-js"></script>
  <link rel="https://api.w.org/" href="{{asset('assets/frontend/json/wp-json/index.html')}}" />
  <link rel="alternate" type="application/json" href="{{asset('assets/frontend/json/wp-json/wp/v2/pages/7.json')}}" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
  <link rel="alternate" type="application/json+oembed"
    href="{{asset('assets/frontend/json/wp-json/oembed/1.0/embed3a5b.json?url=https%3A%2F%2Fthemetechmount.com%2Fttm-business%2Ffree%2Fdemo28%2Fabout-us%2F')}}" />
  <link rel="alternate" type="text/xml+oembed"
    href="{{asset('assets/frontend/json/wp-json/oembed/1.0/embed447b?url=https%3A%2F%2Fthemetechmount.com%2Fttm-business%2Ffree%2Fdemo28%2Fabout-us%2F&amp;format=xml')}}" />
  <meta name="generator" content="Redux 4.4.5" />
  <meta name="generator"
    content="Elementor 3.15.2; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto" />
  <style type="text/css">
    .recentcomments a {
      display: inline !important;
      padding: 0 !important;
      margin: 0 !important;
    }
  </style>
  <style type="text/css" id="wp-custom-css">
    .tp-leftarrow {
      cursor: pointer;
      background: #000;
      background: rgba(0, 0, 0, 0.5);
      width: 40px;
      height: 40px;
      position: absolute;
      display: block;
      z-index: 1000;
    }

    @media (min-width: 1200px) {
      .container-fullwide.site-header-top {
        border-bottom: 1px solid rgb(255 255 255 / 30%);
      }
    }

    .widget p a {
      text-decoration: none;
    }

    @media (max-width: 1366px) and (min-width: 1025px) {
      .tm-div-column-break .elementor-column {
        width: 49%;
        display: inline-block;
        padding: 0 15px;
      }

      .tm-div-column-break.elementor-section .elementor-container {
        display: block;
      }
    }

    @media (max-width: 991px) {
      body.page-sidebar-yes .content-area.col-lg-8 {
        padding-right: 15px;
        padding-top: 50px;
      }

      .site-footer .ttm-business-footer-widgets-wrapper {
        padding-bottom: 0 !important;
      }
    }

    .site-footer .widget .widget-title {
      margin-bottom: 14px;
    }

    .prt-footer2-left,
    .prt-footer2-right {
      font-size: 13px;
    }

    .site-footer .ttm-business-footer-widgets-wrapper {
      padding-bottom: 40px;
    }

    .ttm-business-footer-widgets-wrapper {
      padding-top: 50px;
      padding-bottom: 60px;
    }

    .site-header .main-navigation div>ul ul li.current_page_item>a {
      color: var(--prt-skincolor);
    }
  </style>

<link rel="stylesheet" id="e-animations-css"
    href="{{asset('assets/frontend/content/wp-content/plugins/elementor/assets/lib/animations/animations.min6319.css?ver=3.15.2')}}" type="text/css"
    media="all" />
  <script type="text/javascript" src="{{asset('assets/frontend/content/wp-content/plugins/contact-form-7/includes/swv/js/index41a3.js?ver=5.8')}}"
    id="swv-js"></script>
  <script type="text/javascript" id="contact-form-7-js-extra">
    /* <![CDATA[ */
    var wpcf7 = {
      api: {
        root: "https:\/\/themetechmount.com\/ttm-business\/free\/demo28\/json/wp-json\/",
        namespace: "contact-form-7\/v1",
      },
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="{{asset('assets/frontend/content/wp-content/plugins/contact-form-7/includes/js/index41a3.js?ver=5.8')}}"
    id="contact-form-7-js"></script>
  <script type="text/javascript" src="{{asset('assets/frontend/content/wp-content/themes/nocs/js/bootstrap.mincce7.js?ver=4.0.0')}}"
    id="bootstrap-js"></script>
  <script type="text/javascript" src="{{asset('assets/frontend/content/wp-content/themes/nocs/js/popper.min5152.js?ver=1.0')}}"
    id="popper-js"></script>
  <script type="text/javascript" src="{{asset('assets/frontend/content/wp-content/themes/nocs/js/skip-link-focus-fix5152.js?ver=1.0')}}"
    id="ttm-business-skip-link-focus-fix-js"></script>
  <script type="text/javascript" src="{{asset('assets/frontend/content/wp-content/themes/nocs/js/functions5152.js?ver=1.0')}}"
    id="ttm-business-functions-js"></script>
  <script type="text/javascript" id="eael-general-js-extra">
    /* <![CDATA[ */
    var localize = {
      ajaxurl:
        "https:\/\/themetechmount.com\/ttm-business\/free\/demo28\/wp-admin\/admin-ajax.php",
      nonce: "155bd9de56",
      i18n: { added: "Added ", compare: "Compare", loading: "Loading..." },
      eael_translate_text: {
        required_text: "is a required field",
        invalid_text: "Invalid",
        billing_text: "Billing",
        shipping_text: "Shipping",
        fg_mfp_counter_text: "of",
      },
      page_permalink:
        "https:\/\/themetechmount.com\/ttm-business\/free\/demo28\/about-us\/",
      cart_redirectition: "",
      cart_page_url: "",
      el_breakpoints: {
        mobile: {
          label: "Mobile Portrait",
          value: 767,
          default_value: 767,
          direction: "max",
          is_enabled: true,
        },
        mobile_extra: {
          label: "Mobile Landscape",
          value: 880,
          default_value: 880,
          direction: "max",
          is_enabled: false,
        },
        tablet: {
          label: "Tablet Portrait",
          value: 1024,
          default_value: 1024,
          direction: "max",
          is_enabled: true,
        },
        tablet_extra: {
          label: "Tablet Landscape",
          value: 1200,
          default_value: 1200,
          direction: "max",
          is_enabled: false,
        },
        laptop: {
          label: "Laptop",
          value: 1366,
          default_value: 1366,
          direction: "max",
          is_enabled: false,
        },
        widescreen: {
          label: "Widescreen",
          value: 2400,
          default_value: 2400,
          direction: "min",
          is_enabled: false,
        },
      },
    };
    /* ]]> */
  </script>
  <script type="text/javascript"
    src="{{asset('assets/frontend/content/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min6281.js?ver=5.8.6')}}"
    id="eael-general-js"></script>
  <script type="text/javascript"
    src="{{asset('assets/frontend/content/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min3958.js?ver=0.2.1')}}"
    id="jquery-numerator-js"></script>
  <script type="text/javascript"
    src="{{asset('assets/frontend/content/wp-content/plugins/elementor/assets/js/webpack.runtime.min6319.js?ver=3.15.2')}}"
    id="elementor-webpack-runtime-js"></script>
  <script type="text/javascript"
    src="{{asset('assets/frontend/content/wp-content/plugins/elementor/assets/js/frontend-modules.min6319.js?ver=3.15.2')}}"
    id="elementor-frontend-modules-js"></script>
  <script type="text/javascript"
    src="{{asset('assets/frontend/content/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2')}}"
    id="elementor-waypoints-js"></script>
  <script type="text/javascript" src="{{asset('assets/frontend/js/wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2')}}"
    id="jquery-ui-core-js"></script>
  <script id="elementor-frontend-js-before" type="text/javascript">
    var elementorFrontendConfig = {
      environmentMode: {
        edit: false,
        wpPreview: false,
        isScriptDebug: false,
      },
      i18n: {
        shareOnFacebook: "Share on Facebook",
        shareOnTwitter: "Share on Twitter",
        pinIt: "Pin it",
        download: "Download",
        downloadImage: "Download image",
        fullscreen: "Fullscreen",
        zoom: "Zoom",
        share: "Share",
        playVideo: "Play Video",
        previous: "Previous",
        next: "Next",
        close: "Close",
        a11yCarouselWrapperAriaLabel:
          "Carousel | Horizontal scrolling: Arrow Left & Right",
        a11yCarouselPrevSlideMessage: "Previous slide",
        a11yCarouselNextSlideMessage: "Next slide",
        a11yCarouselFirstSlideMessage: "This is the first slide",
        a11yCarouselLastSlideMessage: "This is the last slide",
        a11yCarouselPaginationBulletMessage: "Go to slide",
      },
      is_rtl: false,
      breakpoints: { xs: 0, sm: 480, md: 768, lg: 1025, xl: 1440, xxl: 1600 },
      responsive: {
        breakpoints: {
          mobile: {
            label: "Mobile Portrait",
            value: 767,
            default_value: 767,
            direction: "max",
            is_enabled: true,
          },
          mobile_extra: {
            label: "Mobile Landscape",
            value: 880,
            default_value: 880,
            direction: "max",
            is_enabled: false,
          },
          tablet: {
            label: "Tablet Portrait",
            value: 1024,
            default_value: 1024,
            direction: "max",
            is_enabled: true,
          },
          tablet_extra: {
            label: "Tablet Landscape",
            value: 1200,
            default_value: 1200,
            direction: "max",
            is_enabled: false,
          },
          laptop: {
            label: "Laptop",
            value: 1366,
            default_value: 1366,
            direction: "max",
            is_enabled: false,
          },
          widescreen: {
            label: "Widescreen",
            value: 2400,
            default_value: 2400,
            direction: "min",
            is_enabled: false,
          },
        },
      },
      version: "3.15.2",
      is_static: false,
      experimentalFeatures: {
        e_dom_optimization: true,
        e_optimized_assets_loading: true,
        e_optimized_css_loading: true,
        additional_custom_breakpoints: true,
        e_swiper_latest: true,
        "landing-pages": true,
        e_global_styleguide: true,
      },
      urls: {
        assets:
          "https:\/\/themetechmount.com\/ttm-business\/free\/demo28\/content/wp-content\/plugins\/elementor\/assets\/",
      },
      swiperClass: "swiper",
      settings: { page: [], editorPreferences: [] },
      kit: {
        active_breakpoints: ["viewport_mobile", "viewport_tablet"],
        global_image_lightbox: "yes",
        lightbox_enable_counter: "yes",
        lightbox_enable_fullscreen: "yes",
        lightbox_enable_zoom: "yes",
        lightbox_enable_share: "yes",
        lightbox_title_src: "title",
        lightbox_description_src: "description",
      },
      post: {
        id: 7,
        title: "About%20Us%20%E2%80%93%20Mordern%20Agency",
        excerpt: "",
        featuredImage: false,
      },
    };
  </script>
  <script type="text/javascript" src="{{asset('assets/frontend/content/wp-content/plugins/elementor/assets/js/frontend.min6319.js?ver=3.15.2')}}"
    id="elementor-frontend-js"></script>

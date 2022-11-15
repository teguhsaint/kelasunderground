<style>
/*reset code*/
html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
    margin: 0;
    padding: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}

/* HTML5 display-role reset for older browsers */
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
    display: block;
}

body {
    line-height: 1;
}

ol,
ul {
    list-style: none;
}

blockquote,
q {
    quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
    content: '';
    content: none;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

border: 0;

/* ----------------------------
base
---------------------------- */
html,
body {
    color: #777;
    background: #fff;
    font-family: 'Kaushan Script', cursive;
}

body {
    margin: 0;
    padding: 0;
    font-size: 1em;
    line-height: 1.3;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0;
    color: #424242;
    line-height: 1.1;
}

img {
    max-width: 100%;
    height: auto;
    border: 0;
    vertical-align: middle;
    display: block;
    margin: auto;
}

a:focus img {
    background: #000;
}

a:hover img {
    background: #3bb2d0;
}

a:active img {
    background: #af0000;
}

blockquote {
    margin: 0;
}

/* ----------------------------
wide
---------------------------- */
@media (min-width: 38em) {
    body {
        font-size: 1.125em;
        /* 18px/16px */
    }
}

/* ----------------------------
layout
---------------------------- */
/* row */
.row {
    clear: both;
    overflow: hidden;
}

/* row-colors */
.row--white {
    background: #fff;
}

.row--grey {
    background: #f8f8f8;
}

.row--blue {
    background: #3bb2d0;
}

.row--dark-grey {
    color: #fff;
    background: #282e37;
}

/* row-padding */
.row--padding-medium {
    padding-top: 2.1875em;
    padding-bottom: 2.1875em;
    /* 35px/16px */
}

.row--padding-wide {
    padding-top: 2.1875em;
    padding-bottom: 2.1875em;
    /* 35px/16px */
}

/* row-padding dl warren */
.row--padding-narrow {
    padding-top: .25em;
    padding-bottom: .25em;
    /* 8px/16px */
}

/* containers */
.container-narrow,
.container-medium,
.container-wide {
    margin: 0 auto;
    padding-left: 1.5em;
    padding-right: 1.5em;
}

.container-narrow {
    max-width: 34em;
}

.container-medium {
    max-width: 52em;
}

.container-wide {
    max-width: 58em;
}

/* columns */
.col-narrow,
.col-narrow--right {
    margin-bottom: 1.5em;
}

/* ----------------------------
wide
---------------------------- */
@media (min-width: 38em) {
    .row--padding-medium {
        padding-top: 3.8889em;
        padding-bottom: 3.8889em;
        /* 70px/18px */
    }

    .row--padding-wide {
        padding-top: 5.5556em;
        padding-bottom: 5.5556em;
        /* 100px/18px */
    }

    .container-narrow,
    .container-medium,
    .container-wide {
        padding-left: 2em;
        padding-right: 2em;
    }

    .col-narrow,
    .col-medium,
    .col-wide {
        float: left;
    }

    .col-narrow--right,
    .col-wide--right {
        float: right;
    }

    .col-wide,
    .col-wide--right {
        width: 61%;
    }

    .col-medium {
        width: 50%;
    }

    .col-narrow,
    .col-narrow--right {
        width: 25%;
        margin-bottom: 0;
    }
}

/* ----------------------------
banner
---------------------------- */
.row--banner {
    background-color: #626e6d;
    background-image: url('img/img4.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100%;
}

@media (min-width: 38em) {
    .row--banner {
        background-image: url(img/img4.jpg);
    }
}

/* ----------------------------
header
---------------------------- */
.header {
    padding: 1.25em 1em;
    /* 20px/16px - 16px/16px */
}

.header__logo {
    float: left;
    padding-top: .2em;
}

.header__nav {
    float: right;
    width: 150px;
}

.header__nav ul {
    margin: 0;
    padding: 0;
    list-style: none;
    text-align: right;
}

.header__nav li {
    display: inline-block;
    margin: 0;
}

.header__nav a {
    display: block;
    margin-right: .2em;
    padding: 0.6em 1em 0.4em;
    border-radius: .3em;
    color: #fff;
    background: none;
    font-size: 0.8125em;
    /* 13px/16px */
    font-weight: bold;
    text-decoration: none;
}

.header__nav-contact a {
    margin-right: 0;
}

.current a {
    color: #fff;
    background: #56b880;
}

.header__nav a:focus {
    background: #000;
}

.header__nav a:hover {
    background: #3bb2d0;
}

.header__nav a:active {
    background: #af0000;
}

@media (min-width: 38em) {
    .header {
        padding: 2.2222em 2em;
        /* 40px/18px - 36px/18px */
    }

    .header__nav {
        width: 12em;
    }

    .header__nav a {
        font-size: 0.8333em;
        /* 15px/18px */
    }
}

/* ----------------------------
banner-content
---------------------------- */
.banner-content {
    padding: 1.875em 1.5em 2.8125em;
    /* 30px/16px - 24px/16px - 45px/16px */
    text-align: center;
}

.banner-content__heading {
    margin: 0 0 1.875em;
    /* 30px/16px */
    font-size: 1.5em;
    /* 24px/16px */
    font-weight: bold;
    color: white;
    text-shadow: 4px 4px 2px #1c313c;
}

@media (min-width: 38em) {
    .banner-content {
        padding: 7.5em 2em;
        /* 135px/18px - 36px/18px */
    }

    .banner-content__heading {
        font-size: 2.5556em;
        /* 46px/18px */
    }
}

/* ----------------------------
features
---------------------------- */
.features {
    text-align: center;
}

.features__row {
    margin-bottom: 2.1875em;
    /* 35px/16px */
}

.features__heading {
    margin: 0 0 .75em;
    /* 12px/16px */
    font-size: 1.125em;
    /* 18px/16px */
}

.features__text {
    margin: 0;
    text-align: left;
}

@media (min-width: 38em) {
    .features {
        text-align: left;
    }

    .features__row {
        margin-bottom: 4.1667em;
        /* 75px/18px */
    }

    .features__row:last-child {
        margin: 0;
    }

    .features__padding {
        padding-top: 4em;
        /* 72px/18px */
    }

    .features__heading {
        font-size: 1.5556em;
        /* 75px/18px */
        font-weight: normal;
    }
}

/* ----------------------------
footer
---------------------------- */
/*! normalize.css v3.0.2 | MIT License | git.io/normalize */
/**
 * 1. Set default font family to sans-serif.
 * 2. Prevent iOS text size adjust after orientation change, without disabling
 *    user zoom.
 */
html {
    font-family: sans-serif;
    /* 1 */
    -ms-text-size-adjust: 100%;
    /* 2 */
    -webkit-text-size-adjust: 100%;
    /* 2 */
}

/**
 * Remove default margin.
 */
body {
    margin: 0;
}

/* HTML5 display definitions
   ========================================================================== */
/**
 * Correct `block` display not defined for any HTML5 element in IE 8/9.
 * Correct `block` display not defined for `details` or `summary` in IE 10/11
 * and Firefox.
 * Correct `block` display not defined for `main` in IE 11.
 */
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
    display: block;
}

/**
 * 1. Correct `inline-block` display not defined in IE 8/9.
 * 2. Normalize vertical alignment of `progress` in Chrome, Firefox, and Opera.
 */
audio,
canvas,
progress,
video {
    display: inline-block;
    /* 1 */
    vertical-align: baseline;
    /* 2 */
}

/**
 * Prevent modern browsers from displaying `audio` without controls.
 * Remove excess height in iOS 5 devices.
 */
audio:not([controls]) {
    display: none;
    height: 0;
}

/**
 * Address `[hidden]` styling not present in IE 8/9/10.
 * Hide the `template` element in IE 8/9/11, Safari, and Firefox <style 22.
 */
[hidden],
template {
    display: none;
}

/* Links
   ========================================================================== */
/**
 * Remove the gray background color from active links in IE 10.
 */
a {
    background-color: transparent;
}

/**
 * Improve readability when focused and also mouse hovered in all browsers.
 */
a:active,
a:hover {
    outline: 0;
}

/* Text-level semantics
   ========================================================================== */
/**
 * Address styling not present in IE 8/9/10/11, Safari, and Chrome.
 */
abbr[title] {
    border-bottom: 1px dotted;
}

/**
 * Address style set to `bolder` in Firefox 4+, Safari, and Chrome.
 */
b,
strong {
    font-weight: bold;
}

/**
 * Address styling not present in Safari and Chrome.
 */
dfn {
    font-style: italic;
}

/**
 * Address variable `h1` font-size and margin within `section` and `article`
 * contexts in Firefox 4+, Safari, and Chrome.
 */
h1 {
    font-size: 2em;
    margin: 0.67em 0;
}

/**
 * Address styling not present in IE 8/9.
 */
mark {
    background: #ff0;
    color: #000;
}

/**
 * Address inconsistent and variable font size in all browsers.
 */
small {
    font-size: 80%;
}

/**
 * Prevent `sub` and `sup` affecting `line-height` in all browsers.
 */
sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}

sup {
    top: -0.5em;
}

sub {
    bottom: -0.25em;
}

/* Embedded content
   ========================================================================== */
/**
 * Remove border when inside `a` element in IE 8/9/10.
 */
img {
    border: 0;
}

/**
 * Correct overflow not hidden in IE 9/10/11.
 */
svg:not(:root) {
    overflow: hidden;
}

/* Grouping content
   ========================================================================== */
/**
 * Address margin not present in IE 8/9 and Safari.
 */
figure {
    margin: 1em 40px;
}

/**
 * Address differences between Firefox and other browsers.
 */
hr {
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    height: 0;
}

/**
 * Contain overflow in all browsers.
 */
pre {
    overflow: auto;
}

/**
 * Address odd `em`-unit font size rendering in all browsers.
 */
code,
kbd,
pre,
samp {
    font-family: monospace, monospace;
    font-size: 1em;
}

/* Forms
   ========================================================================== */
/**
 * Known limitation: by default, Chrome and Safari on OS X allow very limited
 * styling of `select`, unless a `border` property is set.
 */
/**
 * 1. Correct color not being inherited.
 *    Known issue: affects color of disabled elements.
 * 2. Correct font properties not being inherited.
 * 3. Address margins set differently in Firefox 4+, Safari, and Chrome.
 */
button,
input,
optgroup,
select,
textarea {
    color: inherit;
    /* 1 */
    font: inherit;
    /* 2 */
    margin: 0;
    /* 3 */
}

/**
 * Address `overflow` set to `hidden` in IE 8/9/10/11.
 */
button {
    overflow: visible;
}

/**
 * Address inconsistent `text-transform` inheritance for `button` and `select`.
 * All other form control elements do not inherit `text-transform` values.
 * Correct `button` style inheritance in Firefox, IE 8/9/10/11, and Opera.
 * Correct `select` style inheritance in Firefox.
 */
button,
select {
    text-transform: none;
}

/**
 * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
 *    and `video` controls.
 * 2. Correct inability to style clickable `input` types in iOS.
 * 3. Improve usability and consistency of cursor style between image-type
 *    `input` and others.
 */
button,
html input[type="button"],
/* 1 */
input[type="reset"],
input[type="submit"] {
    -webkit-appearance: button;
    /* 2 */
    cursor: pointer;
    /* 3 */
}

/**
 * Re-set default cursor for disabled elements.
 */
button[disabled],
html input[disabled] {
    cursor: default;
}

/**
 * Remove inner padding and border in Firefox 4+.
 */
button::-moz-focus-inner,
input::-moz-focus-inner {
    border: 0;
    padding: 0;
}

/**
 * Address Firefox 4+ setting `line-height` on `input` using `!important` in
 * the UA stylesheet.
 */
input {
    line-height: normal;
}

/**
 * It's recommended that you don't attempt to style these elements.
 * Firefox's implementation doesn't respect box-sizing, padding, or width.
 *
 * 1. Address box sizing set to `content-box` in IE 8/9/10.
 * 2. Remove excess padding in IE 8/9/10.
 */
input[type="checkbox"],
input[type="radio"] {
    box-sizing: border-box;
    /* 1 */
    padding: 0;
    /* 2 */
}

/**
 * Fix the cursor style for Chrome's increment/decrement buttons. For certain
 * `font-size` values of the `input`, it causes the cursor style of the
 * decrement button to change from `default` to `text`.
 */
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    height: auto;
}

/**
 * 1. Address `appearance` set to `searchfield` in Safari and Chrome.
 * 2. Address `box-sizing` set to `border-box` in Safari and Chrome
 *    (include `-moz` to future-proof).
 */
input[type="search"] {
    -webkit-appearance: textfield;
    /* 1 */
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box;
    /* 2 */
    box-sizing: content-box;
}

/**
 * Remove inner padding and search cancel button in Safari and Chrome on OS X.
 * Safari (but not Chrome) clips the cancel button when the search input has
 * padding (and `textfield` appearance).
 */
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}

/**
 * Define consistent border, margin, and padding.
 */
fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em;
}

/**
 * 1. Correct `color` not being inherited in IE 8/9/10/11.
 * 2. Remove padding so people aren't caught out if they zero out fieldsets.
 */
legend {
    border: 0;
    /* 1 */
    padding: 0;
    /* 2 */
}

/**
 * Remove default vertical scrollbar in IE 8/9/10/11.
 */
textarea {
    overflow: auto;
}

/**
 * Don't inherit the `font-weight` (applied by a rule above).
 * NOTE: the default cannot safely be changed in Chrome and Safari on OS X.
 */
optgroup {
    font-weight: bold;
}

/* Tables
   ========================================================================== */
/**
 * Remove most spacing between table cells.
 */
table {
    border-collapse: collapse;
    border-spacing: 0;
}

td,
th {
    padding: 0;
}

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400|Raleway:300);
$btn-width: 250px !default;
$btn-height: 80px !default;
$btn-full: $btn-height+$btn-width !default;
$btn-half: $btn-full/2 !default;
$bg-color: #eeeeee !default;

html {
    padding-top: 50px;
    font-family: 'Open Sans', Helvetica, arial, sans-serif;
    text-align: center;
    background-color: $bg-color;

    *,
    *:before,
    *:after {
        box-sizing: border-box;
        transition: 0.5s ease-in-out;
    }

    i,
    em,
    b,
    strong,
    span {
        transition: none;
    }
}

*:before,
*:after {
    z-index: -1;
}

h1,
h4 {
    font-family: 'Raleway', 'Open Sans', sans-serif;
    margin: 0;
    line-height: 1;
}

a {
    text-decoration: none;
    line-height: $btn-height;
    color: black;
}

.center {
    width: 100%;
    margin: 0 auto;
}

@media (min-width: 600px) {
    .wrap {
        width: 50%;
        float: left;
    }
}

.button {
    padding: 15px 25px;
    font-size: 24px;
    text-align: center;
    cursor: pointer;
    outline: none;
    color: #fff;
    background-color: #1F5656;
    border: none;
    border-radius: 15px;
}

.button:hover {
    background-color: #1f5c8b
}

.button:active {
    background-color: #8e3e8b;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
}

.button2 {
    padding: 15px 25px;
    font-size: 20px;
    text-align: center;
    outline: none;
    color: #fff;
    background-color: #4c4cff;
    border: none;
    border-radius: 15px;
    width: 140px;
    margin: 0 auto;
    display: block;


}

.button2:hover {
    background-color: #00E5EE
}

.button2:active {
    background-color: #A26BA2;
    box-shadow: 0 5px #666;
    transform: translateY(2px);
}
</style>

<!-- banner -->
<div class="row row--banner">
    <section class="row container-medium banner-content">
        <h1 class="banner-content__heading">
            Toko Makmur
        </h1>

        <button class="button"><span>Beli Sekarang</span></button>
    </section>
</div>
<!-- features -->
<div class="row row--white row--padding-wide features">
    <div class="row container-medium">
        <div class="row features__row">
            <div class="col-narrow--right features__bike">
            </div>
            <div class="col-wide">
                <h2 class="features__heading">
                    bahan pokok
                </h2>


                <img class="img img-responsive" src="img/img1.jpg"><br>
                <p>Dengan harga terjangkau dengan kualitas bagus jangan sampai di lewatkan</p><br>
                <button class="button2 center"><span>Beli!</span></button><br>
            </div>
        </div>
        <div class="row features__row">
            <div class="col-narrow features__phone">
            </div>
            <div class="col-wide--right features__padding">
                <h2 class="features__heading">
                    bahan tambahan
                </h2>
                <img class="img img-responsive" src="img/img2.jpg"><br>
                <p>
                    Dengan harga terjangkau dengan kualitas bagus
                </p><br>
                <button class="button2 center"><span>Beli!</span></button><br>
            </div>
        </div>
        <div class="row features__row">
            <div class="col-narrow--right features__safe">
            </div>
            <div class="col-wide">
                <h2 class="features__heading">
                    bahan sampingan
                </h2>
                <img class="img img-responsive" src="img/img3.jpg"><br>
                <p class="features">Dengan harga terjangkau dengan kualitas bagus</p>
                <br>
                <button class="button2 center"><span>Beli!</span></button><br><br>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<div class="row row--dark-grey row--padding-narrow">
    <footer class="row container-wide">
        <div class="col-wide">
            <p class="features_text">www.ansoriweb.com</p>
        </div>
    </footer>
</div>
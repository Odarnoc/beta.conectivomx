<?php
include_once '../../scripts_php/conexion.php';

$query="select empresas.*,estados.nombre as estado,municipios.nombre as municipio from empresas inner join estados on state=estados.id inner join municipios on city=municipios.id where empresas.id=".$_GET['empresa'];

$result = mysqli_query($conexion,$query);
$row_cnt = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

$colorPri=$row['cPrimario'];
$colorPri2=$row['cPrimario2'];
$colorSec=$row['cSecundario'];
$colorTer=$row['cTerciario'];

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title><?php echo $row['name'] ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    
    <!--Google Maps-->
    <!--Google Maps-->

    <style type="text/css">

a {
  color: <?php echo $colorPri ?>;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

ul.disc li::before {
  content: "";
  display: inline-block;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: <?php echo $colorPri ?>;
  position: absolute;
  left: -17px;
  top: 11px;
  vertical-align: middle;
}

dt {
  margin: 0;
  color: <?php echo $colorPri ?>;
}

/* ------------------------------------------------------------------- 
 * ## Change Autocomplete styles in Chrome
 * ------------------------------------------------------------------- */
input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus
input:-webkit-autofill,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover
textarea:-webkit-autofill:focus,
select:-webkit-autofill,
select:-webkit-autofill:hover,
select:-webkit-autofill:focus {
  -webkit-text-fill-color: <?php echo $colorPri ?>;
  transition: background-color 5000s ease-in-out 0s;
}

.btn.btn--primary,
button.btn--primary,
input[type="submit"].btn--primary,
input[type="reset"].btn--primary,
input[type="button"].btn--primary {
  background: <?php echo $colorPri ?>;
  border-color: <?php echo $colorPri ?>;
  color: #FFFFFF;
}

.stats-tabs li a:hover {
  color: <?php echo $colorPri ?>;
}

.skill-bars li .progress {
  background: <?php echo $colorPri ?>;
  position: relative;
  height: 100%;
}

.skill-bars li .progress span {
  position: absolute;
  right: 0;
  top: -3.6rem;
  display: block;
  font-family: "Nunito Sans", sans-serif;
  color: #FFFFFF;
  font-size: 1.1rem;
  line-height: 1;
  background: <?php echo $colorPri ?>;
  padding: .6rem .6rem;
  border-radius: 3px;
}

.skill-bars li .progress span::after {
  position: absolute;
  left: 50%;
  bottom: -5px;
  margin-left: -5px;
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  border-top: 5px solid <?php echo $colorPri ?>;
  content: "";
}

.subhead {
  font-family: "Montserrat", sans-serif;
  font-weight: 600;
  font-size: 1.8rem;
  line-height: 1.333;
  text-transform: uppercase;
  letter-spacing: .25rem;
  color: <?php echo $colorPri ?>;
  margin-top: 0;
  margin-bottom: 3rem;
  position: relative;
}

.header-nav h3 {
  display: inline-block;
  font-family: "Montserrat", sans-serif;
  font-weight: 700;
  font-size: 12px;
  line-height: 1.25;
  text-transform: uppercase;
  letter-spacing: .4rem;
  margin-bottom: 7.2rem;
  margin-top: 1.2rem;
  padding-right: 140px;
  color: <?php echo $colorPri ?>;
  position: relative;
}

.header-nav h3::after {
  content: "";
  display: block;
  height: 1px;
  width: 110px;
  background-color: <?php echo $colorPri ?>;
  position: absolute;
  top: 50%;
  right: 0;
}

.header-nav__list a:hover::before {
  color: <?php echo $colorPri ?>;
}

.header-nav__list .current a::before {
  color: <?php echo $colorPri ?>;
}

.home-content__video .video-icon {
  display: inline-block;
  height: 9rem;
  width: 9rem;
  border-radius: 50%;
  background-color: <?php echo $colorPri ?>;
  background-image: url(images/icons/icon-play.svg);
  background-repeat: no-repeat;
  background-position: 55% center;
  background-size: 24px 27px;
  -webkit-transition: background-color 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

.home-content__scroll .scroll-link:hover,
.home-content__scroll .scroll-link:focus {
  color: <?php echo $colorPri ?>;
}

.process h4::before {
  content: counter(ctr);
  counter-increment: ctr;
  display: block;
  font-family: "Montserrat", sans-serif;
  font-size: 2.1rem;
  font-weight: 700;
  text-align: center;
  color: #FFFFFF;
  background-color: <?php echo $colorPri ?>;
  height: 48px;
  width: 48px;
  line-height: 48px;
  border-radius: 50%;
  position: absolute;
  left: 0;
  top: -5px;
}

.item-service__icon {
  float: left;
  color: <?php echo $colorPri ?>;
  font-size: 4.5rem;
  margin-top: -1.8rem;
}

.clients a:hover,
.clients a:focus {
  color: <?php echo $colorPri ?>;
}

.testimonials__author {
  margin-top: 0;
  font-family: "Nunito Sans", sans-serif;
  font-size: 1.5rem;
  font-weight: 800;
  line-height: 1.6;
  text-transform: uppercase;
  letter-spacing: .3rem;
  color: <?php echo $colorPri ?>;
}












/* =================================================================== 
 *
 *  Sublime v1.0 Main Stylesheet
 *  06-10-2018
 *  ------------------------------------------------------------------
 *
 *  TOC:
 *  # base style overrides
 *    ## links
 *  # typography & general theme styles
 *    ## Lists
 *    ## responsive video container
 *    ## floated image
 *    ## tables
 *    ## Spacing 
 *  # preloader
 *  # forms
 *    ## Style Placeholder Text
 *    ## Change Autocomplete styles
 *  # buttons
 *  # additional components
 *    ## alert box
 *    ## additional typo styles
 *    ## skillbars
 *  # reusable and common theme styles
 *    ## display headings
 *    ## section header
 *    ## grid overlay
 *  # header styles
 *    ## header logo
 *    ## main navigation
 *    ## mobile menu toggle 
 *  # home
 *    ## home content
 *    ## home video link
 *    ## home buttons
 *    ## home scroll
 *    ## home social
 *    ## home animations
 *  # about
 *    ## about process
 *  # services  
 *    ## services list
 *  # works
 *    ## bricks/masonry
 *  # clients
 *  # testimonials
 *  # contact
 *    ## contact social
 *  # footer
 *    ## copyright
 *    ## go top
 *
 * =================================================================== */


/* ===================================================================
 * # base style overrides
 *
 * ------------------------------------------------------------------- */
html {
  font-size: 10px;
}

@media only screen and (max-width:400px) {
  html {
    font-size: 9.411764705882353px;
  }

}

html,
body {
  height: 100%;
}

body {
  background: #121212;
  font-family: "Nunito Sans", sans-serif;
  font-size: 1.7rem;
  font-style: normal;
  font-weight: normal;
  line-height: 1.941;
  color: rgba(255, 255, 255, 0.3);
  margin: 0;
  padding: 0;
}

/* ------------------------------------------------------------------- 
 * ## links
 * ------------------------------------------------------------------- */
a:hover,
a:focus,
a:active {
  color: #FFFFFF;
}

a:hover,
a:active {
  outline: 0;
}


/* ===================================================================
 * # typography & general theme styles
 * 
 * ------------------------------------------------------------------- */
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Montserrat", sans-serif;
  font-weight: 600;
  color: #FFFFFF;
  text-rendering: optimizeLegibility;
}

h1, .h1, h2, .h2, h3, .h3, h4, .h4 {
  margin-top: 6rem;
  margin-bottom: 1.8rem;
}

@media only screen and (max-width:600px) {
  h1, .h1, h2, .h2, h3, .h3, h4, .h4 {
    margin-top: 5.1rem;
  }
}

h5, .h5, h6, .h6 {
  margin-top: 4.2rem;
  margin-bottom: 1.5rem;
}

@media only screen and (max-width:600px) {
  h5, .h5, h6, .h6 {
    margin-top: 3.6rem;
    margin-bottom: 0.9rem;
  }
}

h1, .h1 {
  font-size: 3.6rem;
  line-height: 1.25;
  letter-spacing: -.1rem;
}

@media only screen and (max-width:600px) {
  h1, .h1 {
    font-size: 3.3rem;
    letter-spacing: -.07rem;
  }
}

h2, .h2 {
  font-size: 3rem;
  line-height: 1.3;
}

h3, .h3 {
  font-size: 2.4rem;
  line-height: 1.25;
}

h4, .h4 {
  font-size: 2.1rem;
  line-height: 1.286;
}

h5, .h5 {
  font-size: 1.8rem;
  line-height: 1.333;
}

h6, .h6 {
  font-size: 1.6rem;
  line-height: 1.3125;
  text-transform: uppercase;
  letter-spacing: .16rem;
}

p img {
  margin: 0;
}

p.lead {
  font-family: "Nunito Sans", sans-serif;
  font-weight: 300;
  font-size: 2.4rem;
  line-height: 1.625;
  margin-bottom: 3.6rem;
  color: rgba(255, 255, 255, 0.2);
}

@media only screen and (max-width:1200px) {
  p.lead {
    font-size: 2.2rem;
  }

}

@media only screen and (max-width:1000px) {
  p.lead {
    font-size: 2.1rem;
  }

}

@media only screen and (max-width:800px) {
  p.lead {
    font-size: 2rem;
  }

}

em,
i,
strong,
b {
  font-size: inherit;
  line-height: inherit;
}

em,
i {
  font-family: "Nunito Sans", sans-serif;
  font-style: italic;
}

strong,
b {
  font-family: "Nunito Sans", sans-serif;
  font-weight: 700;
}

small {
  font-size: 1.2rem;
  line-height: inherit;
}

blockquote {
  margin: 3.9rem 0;
  padding-left: 4.5rem;
  position: relative;
}

blockquote:before {
  content: "\201C";
  font-size: 10rem;
  line-height: 0px;
  margin: 0;
  color: rgba(255, 255, 255, 0.15);
  font-family: arial, sans-serif;
  position: absolute;
  top: 3.6rem;
  left: 0;
}

blockquote p {
  font-family: "Nunito Sans", sans-serif;
  padding: 0;
  font-size: 2.1rem;
  line-height: 1.857;
  color: rgba(255, 255, 255, 0.7);
}

blockquote cite {
  display: block;
  font-family: "Montserrat", sans-serif;
  font-size: 1.4rem;
  font-style: normal;
  line-height: 1.5;
}

blockquote cite:before {
  content: "\2014 \0020";
}

blockquote cite a,
blockquote cite a:visited {
  color: rgba(255, 255, 255, 0.3);
  border: none;
}

abbr {
  font-family: "Nunito Sans", sans-serif;
  font-weight: 700;
  font-variant: small-caps;
  text-transform: lowercase;
  letter-spacing: .05rem;
  color: rgba(255, 255, 255, 0.2);
}

var,
kbd,
samp,
code,
pre {
  font-family: Consolas, "Andale Mono", Courier, "Courier New", monospace;
}

pre {
  padding: 2.4rem 3rem 3rem;
  background: #F1F1F1;
  overflow-x: auto;
}

code {
  font-size: 1.4rem;
  margin: 0 .2rem;
  padding: .3rem .6rem;
  white-space: nowrap;
  background: #1f1f1f;
  border: 1px solid #252525;
  color: rgba(255, 255, 255, 0.7);
  border-radius: 3px;
}

pre > code {
  display: block;
  white-space: pre;
  line-height: 2;
  padding: 0;
  margin: 0;
}

pre.prettyprint > code {
  border: none;
}

del {
  text-decoration: line-through;
}

abbr[title],
dfn[title] {
  border-bottom: 1px dotted;
  cursor: help;
  text-decoration: none;
}

mark {
  background: #ffd900;
  color: #000000;
}

hr {
  border: solid rgba(255, 255, 255, 0.05);
  border-width: 1px 0 0;
  clear: both;
  margin: 2.4rem 0 1.5rem;
  height: 0;
}

/* ------------------------------------------------------------------- 
 * ## Lists
 * ------------------------------------------------------------------- */
ol {
  list-style: decimal;
}

ul {
  list-style: disc;
}

li {
  display: list-item;
}

ol,
ul {
  margin-left: 1.7rem;
}

ul li {
  padding-left: .4rem;
}

ul ul,
ul ol,
ol ol,
ol ul {
  margin: .6rem 0 .6rem 1.7rem;
}

ul.disc li {
  display: list-item;
  list-style: none;
  padding: 0 0 0 .8rem;
  position: relative;
}

dd {
  margin: 0 0 0 2rem;
}

/* ------------------------------------------------------------------- 
 * ## responsive video container
 * ------------------------------------------------------------------- */
.video-container {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
}

.video-container iframe,
.video-container object,
.video-container embed,
.video-container video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

/* ------------------------------------------------------------------- 
 * ## floated image
 * ------------------------------------------------------------------- */
img.pull-right {
  margin: 1.5rem 0 0 3rem;
}

img.pull-left {
  margin: 1.5rem 3rem 0 0;
}

/* ------------------------------------------------------------------- 
 * ## tables
 * ------------------------------------------------------------------- */
table {
  border-width: 0;
  width: 100%;
  max-width: 100%;
  font-family: "Nunito Sans", sans-serif;
  border-collapse: collapse;
}

th,
td {
  padding: 1.5rem 3rem;
  text-align: left;
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}

th {
  color: #FFFFFF;
  font-family: "Nunito Sans", sans-serif;
  font-weight: 700;
}

td {
  line-height: 1.5;
}

th:first-child,
td:first-child {
  padding-left: 0;
}

th:last-child,
td:last-child {
  padding-right: 0;
}

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

/* ------------------------------------------------------------------- 
 * ## Spacing 
 * ------------------------------------------------------------------- */
button,
.btn {
  margin-bottom: 1.2rem;
}

fieldset {
  margin-bottom: 1.5rem;
}

input,
textarea,
select,
pre,
blockquote,
figure,
table,
p,
ul,
ol,
dl,
form,
.video-container,
.ss-custom-select {
  margin-bottom: 3rem;
}


/* ===================================================================
 * # preloader - (_preloader-dots.scss)
 *
 * ------------------------------------------------------------------- */
#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #151515;
  z-index: 800;
  height: 100vh;
  width: 100%;
  overflow: hidden;
}

.no-js #preloader,
.oldie #preloader {
  display: none;
}

#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  width: 6px;
  height: 6px;
  padding: 0;
  display: inline-block;
  -webkit-transform: translate3d(-50%, -50%, 0);
  -ms-transform: translate3d(-50%, -50%, 0);
  transform: translate3d(-50%, -50%, 0);
}

#loader > div {
  content: "";
  background: #FFFFFF;
  width: 6px;
  height: 6px;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 50%;
}

#loader > div:nth-of-type(1) {
  left: 15px;
}

#loader > div:nth-of-type(3) {
  left: -15px;
}

/* dots jump */
.dots-jump > div {
  -webkit-animation: dots-jump 1.2s infinite ease;
  animation: dots-jump 1.2s infinite ease;
  animation-delay: 0.2s;
}

.dots-jump > div:nth-of-type(1) {
  animation-delay: 0.4s;
}

.dots-jump > div:nth-of-type(3) {
  animation-delay: 0s;
}

@-webkit-keyframes dots-jump {
  0% {
    top: 0;
  }

  40% {
    top: -6px;
  }

  80% {
    top: 0;
  }

}

@keyframes dots-jump {
  0% {
    top: 0;
  }

  40% {
    top: -6px;
  }

  80% {
    top: 0;
  }

}

/* dots fade */
.dots-fade > div {
  -webkit-animation: dots-fade 1.6s infinite ease;
  animation: dots-fade 1.6s infinite ease;
  animation-delay: 0.4s;
}

.dots-fade > div:nth-of-type(1) {
  animation-delay: 0.8s;
}

.dots-fade > div:nth-of-type(3) {
  animation-delay: 0s;
}

@-webkit-keyframes dots-fade {
  0% {
    opacity: 1;
  }

  40% {
    opacity: 0.2;
  }

  80% {
    opacity: 1;
  }

}

@keyframes dots-fade {
  0% {
    opacity: 1;
  }

  40% {
    opacity: 0.2;
  }

  80% {
    opacity: 1;
  }

}

/* dots pulse */
.dots-pulse > div {
  -webkit-animation: dots-pulse 1.2s infinite ease;
  animation: dots-pulse 1.2s infinite ease;
  animation-delay: 0.2s;
}

.dots-pulse > div:nth-of-type(1) {
  animation-delay: 0.4s;
}

.dots-pulse > div:nth-of-type(3) {
  animation-delay: 0s;
}

@-webkit-keyframes dots-pulse {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  40% {
    -webkit-transform: scale(1.1);
    transform: scale(1.3);
  }

  80% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }

}

@keyframes dots-pulse {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  40% {
    -webkit-transform: scale(1.1);
    transform: scale(1.3);
  }

  80% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }

}


/* ===================================================================
 * # forms
 *
 * ------------------------------------------------------------------- */
fieldset {
  border: none;
}

input[type="email"],
input[type="number"],
input[type="search"],
input[type="text"],
input[type="tel"],
input[type="url"],
input[type="password"],
textarea,
select {
  display: block;
  height: 6rem;
  padding: 1.5rem 2.4rem;
  border: 0;
  outline: none;
  color: rgba(255, 255, 255, 0.7);
  font-family: "Nunito Sans", sans-serif;
  font-size: 1.5rem;
  line-height: 3rem;
  max-width: 100%;
  background: rgba(255, 255, 255, 0.05);
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.ss-custom-select {
  position: relative;
  padding: 0;
}

.ss-custom-select select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  text-indent: 0.01px;
  text-overflow: '';
  margin: 0;
  line-height: 3rem;
  vertical-align: middle;
}

.ss-custom-select select option {
  padding-left: 2rem;
  padding-right: 2rem;
  color: #666666;
  background: #FFFFFF;
}

.ss-custom-select select::-ms-expand {
  display: none;
}

.ss-custom-select::after {
  border-bottom: 2px solid rgba(255, 255, 255, 0.5);
  border-right: 2px solid rgba(255, 255, 255, 0.5);
  content: '';
  display: block;
  height: 8px;
  width: 8px;
  margin-top: -7px;
  pointer-events: none;
  position: absolute;
  right: 2.4rem;
  top: 50%;
  -webkit-transform-origin: 66% 66%;
  -ms-transform-origin: 66% 66%;
  transform-origin: 66% 66%;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
  -webkit-transition: all 0.15s ease-in-out;
  transition: all 0.15s ease-in-out;
}

/* IE9 and below */
.oldie .cl-custom-select::after {
  display: none;
}

textarea {
  min-height: 25rem;
}

input[type="email"]:focus,
input[type="number"]:focus,
input[type="search"]:focus,
input[type="text"]:focus,
input[type="tel"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
textarea:focus,
select:focus {
  color: #FFFFFF;
}

label,
legend {
  font-family: "Nunito Sans", sans-serif;
  font-weight: 700;
  font-size: 1.4rem;
  margin-bottom: .9rem;
  line-height: 1.714;
  color: #FFFFFF;
  display: block;
}

input[type="checkbox"],
input[type="radio"] {
  display: inline;
}

label > .label-text {
  display: inline-block;
  margin-left: 1rem;
  font-family: "Nunito Sans", sans-serif;
  font-weight: normal;
  line-height: inherit;
}

label > input[type="checkbox"],
label > input[type="radio"] {
  margin: 0;
  position: relative;
  top: .15rem;
}

/* ------------------------------------------------------------------- 
 * ## Style Placeholder Text
 * ------------------------------------------------------------------- */
::-webkit-input-placeholder {

  /* WebKit, Blink, Edge */
  color: rgba(255, 255, 255, 0.4);
}

:-moz-placeholder {

  /* Mozilla Firefox 4 to 18 */
  color: rgba(255, 255, 255, 0.4);
  opacity: 1;
}

::-moz-placeholder {

  /* Mozilla Firefox 19+ */
  color: rgba(255, 255, 255, 0.4);
  opacity: 1;
}

:-ms-input-placeholder {

  /* Internet Explorer 10-11 */
  color: rgba(255, 255, 255, 0.4);
}

::-ms-input-placeholder {

  /* Microsoft Edge */
  color: rgba(255, 255, 255, 0.4);
}

::placeholder {

  /* Most modern browsers support this now. */
  color: rgba(255, 255, 255, 0.4);
}

.placeholder {
  color: rgba(255, 255, 255, 0.4) !important;
}

/* ===================================================================
 * # buttons
 *
 * ------------------------------------------------------------------- */
.btn,
button,
input[type="submit"],
input[type="reset"],
input[type="button"] {
  display: inline-block;
  font-family: "Nunito Sans", sans-serif;
  font-weight: 700;
  font-size: 1.2rem;
  text-transform: uppercase;
  letter-spacing: .4rem;
  height: 5.4rem;
  line-height: 5rem;
  padding: 0 3rem;
  margin: 0 .3rem 1.2rem 0;
  color: #000000;
  text-decoration: none;
  text-align: center;
  white-space: nowrap;
  cursor: pointer;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  background-color: #c5c5c5;
  border: .2rem solid #c5c5c5;
}

.btn:hover,
button:hover,
input[type="submit"]:hover,
input[type="reset"]:hover,
input[type="button"]:hover,
.btn:focus,
button:focus,
input[type="submit"]:focus,
input[type="reset"]:focus,
input[type="button"]:focus {
  background-color: #b8b8b8;
  border-color: #b8b8b8;
  color: #000000;
  outline: 0;
}

/* button primary
 * ------------------------------------------------- */

.btn.btn--primary:hover,
button.btn--primary:hover,
input[type="submit"].btn--primary:hover,
input[type="reset"].btn--primary:hover,
input[type="button"].btn--primary:hover,
.btn.btn--primary:focus,
button.btn--primary:focus,
input[type="submit"].btn--primary:focus,
input[type="reset"].btn--primary:focus,
input[type="button"].btn--primary:focus {
  background: <?php echo $colorPri2 ?>;
  border-color: <?php echo $colorPri2 ?>;
}

/* button modifiers
 * ------------------------------------------------- */
.btn.full-width,
button.full-width {
  width: 100%;
  margin-right: 0;
}

.btn--medium,
button.btn--medium {
  height: 5.7rem !important;
  line-height: 5.3rem !important;
}

.btn--large,
button.btn--large {
  height: 6rem !important;
  line-height: 5.6rem !important;
}

.btn--stroke,
button.btn--stroke {
  background: transparent !important;
  border: 0.2rem solid #FFFFFF;
  color: #FFFFFF;
}

.btn--stroke:hover,
button.btn--stroke:hover {
  background: #FFFFFF !important;
  border: 0.2rem solid #FFFFFF;
  color: #000000;
}

.btn--pill,
button.btn--pill {
  padding-left: 3rem !important;
  padding-right: 3rem !important;
  border-radius: 1000px !important;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}


/* =================================================================== 
 * # additional components
 *
 * ------------------------------------------------------------------- */

/* ------------------------------------------------------------------- 
 * ## alert box - (_alert-box.scss)
 * ------------------------------------------------------------------- */
.alert-box {
  padding: 2.1rem 4rem 2.1rem 3rem;
  position: relative;
  margin-bottom: 3rem;
  border-radius: 3px;
  font-family: "Nunito Sans", sans-serif;
  font-weight: 600;
  font-size: 1.5rem;
  line-height: 1.6;
}

.alert-box__close {
  position: absolute;
  right: 1.8rem;
  top: 1.8rem;
  cursor: pointer;
}

.alert-box__close.fa {
  font-size: 12px;
}

.alert-box--error {
  background-color: #ffd1d2;
  color: #e65153;
}

.alert-box--success {
  background-color: #c8e675;
  color: #758c36;
}

.alert-box--info {
  background-color: #d7ecfb;
  color: #4a95cc;
}

.alert-box--notice {
  background-color: #fff099;
  color: #bba31b;
}

/* ------------------------------------------------------------------- 
 * ## additional typo styles - (_additional-typo.scss)
 * ------------------------------------------------------------------- */

/* drop cap 
 * ----------------------------------------------- */
.drop-cap:first-letter {
  float: left;
  margin: 0;
  padding: 1.5rem .6rem 0 0;
  font-family: "Nunito Sans", sans-serif;
  font-weight: 700;
  font-size: 8.4rem;
  line-height: 6rem;
  text-indent: 0;
  background: transparent;
  color: rgba(255, 255, 255, 0.7);
}

/* line definition style 
 * ----------------------------------------------- */
.lining dt,
.lining dd {
  display: inline;
  margin: 0;
}

.lining dt + dt:before,
.lining dd + dt:before {
  content: "\A";
  white-space: pre;
}

.lining dd + dd:before {
  content: ", ";
}

.lining dd + dd:before {
  content: ", ";
}

.lining dd:before {
  content: ": ";
  margin-left: -0.2em;
}

/* dictionary definition style 
 * ----------------------------------------------- */
.dictionary-style dt {
  display: inline;
  counter-reset: definitions;
}

.dictionary-style dt + dt:before {
  content: ", ";
  margin-left: -0.2em;
}

.dictionary-style dd {
  display: block;
  counter-increment: definitions;
}

.dictionary-style dd:before {
  content: counter(definitions, decimal) ". ";
}

/** 
 * Pull Quotes
 * -----------
 * markup:
 *
 * <aside class="pull-quote">
 *    <blockquote>
 *      <p></p>
 *    </blockquote>
 *  </aside>
 *
 * --------------------------------------------------------------------- */
.pull-quote {
  position: relative;
  padding: 2.1rem 3rem 2.1rem 0px;
}

.pull-quote:before,
.pull-quote:after {
  height: 1em;
  position: absolute;
  font-size: 10rem;
  font-family: Arial, Sans-Serif;
  color: rgba(255, 255, 255, 0.15);
}

.pull-quote:before {
  content: "\201C";
  top: -3.6rem;
  left: 0;
}

.pull-quote:after {
  content: '\201D';
  bottom: 3.6rem;
  right: 0;
}

.pull-quote blockquote {
  margin: 0;
}

.pull-quote blockquote:before {
  content: none;
}

/** 
 * Stats Tab
 * ---------
 * markup:
 *
 * <ul class="stats-tabs">
 *    <li><a href="#">[value]<em>[name]</em></a></li>
 *  </ul>
 *
 * Extend this object into your markup.
 *
 * --------------------------------------------------------------------- */
.stats-tabs {
  padding: 0;
  margin: 3rem 0;
}

.stats-tabs li {
  display: inline-block;
  margin: 0 1.5rem 3rem 0;
  padding: 0 1.5rem 0 0;
  border-right: 1px solid rgba(255, 255, 255, 0.05);
}

.stats-tabs li:last-child {
  margin: 0;
  padding: 0;
  border: none;
}

.stats-tabs li a {
  display: inline-block;
  font-size: 2.5rem;
  font-family: "Nunito Sans", sans-serif;
  font-weight: 700;
  border: none;
  color: #FFFFFF;
}

.stats-tabs li a em {
  display: block;
  margin: .6rem 0 0 0;
  font-family: "Nunito Sans", sans-serif;
  font-size: 1.4rem;
  font-weight: normal;
  font-style: normal;
}

/* ------------------------------------------------------------------- 
 * ## skillbars  - (_skillbars.scss)
 * ------------------------------------------------------------------- */
.skill-bars {
  list-style: none;
  margin: 6rem 0 3rem;
}

.skill-bars li {
  height: .6rem;
  background: rgba(255, 255, 255, 0.1);
  width: 100%;
  margin-bottom: 6.9rem;
  padding: 0;
  position: relative;
}

.skill-bars li strong {
  position: absolute;
  left: 0;
  top: -3rem;
  font-family: "Nunito Sans", sans-serif;
  font-weight: 700;
  color: #FFFFFF;
  text-transform: uppercase;
  letter-spacing: .2rem;
  font-size: 1.4rem;
  line-height: 2.4rem;
}

.skill-bars li .percent5 {
  width: 5%;
}

.skill-bars li .percent10 {
  width: 10%;
}

.skill-bars li .percent15 {
  width: 15%;
}

.skill-bars li .percent20 {
  width: 20%;
}

.skill-bars li .percent25 {
  width: 25%;
}

.skill-bars li .percent30 {
  width: 30%;
}

.skill-bars li .percent35 {
  width: 35%;
}

.skill-bars li .percent40 {
  width: 40%;
}

.skill-bars li .percent45 {
  width: 45%;
}

.skill-bars li .percent50 {
  width: 50%;
}

.skill-bars li .percent55 {
  width: 55%;
}

.skill-bars li .percent60 {
  width: 60%;
}

.skill-bars li .percent65 {
  width: 65%;
}

.skill-bars li .percent70 {
  width: 70%;
}

.skill-bars li .percent75 {
  width: 75%;
}

.skill-bars li .percent80 {
  width: 80%;
}

.skill-bars li .percent85 {
  width: 85%;
}

.skill-bars li .percent90 {
  width: 90%;
}

.skill-bars li .percent95 {
  width: 95%;
}

.skill-bars li .percent100 {
  width: 100%;
}


/* ===================================================================
 * # reusable and common theme styles
 *
 * ------------------------------------------------------------------- */
body.menu-is-open {
  overflow: hidden;
}

.wide {
  max-width: 1400px;
}

.narrow {
  max-width: 1000px;
}

.bit-narrow {
  max-width: 1120px;
}

.darker {
  background-color: #0f0f0f;
}

/* ------------------------------------------------------------------- 
 * ## display headings
 * ------------------------------------------------------------------- */
.display-1 {
  font-family: "Montserrat", sans-serif;
  font-weight: 600;
  font-size: 4.6rem;
  line-height: 1.5;
  letter-spacing: -0.03rem;
  margin-top: 0;
  margin-bottom: 4.8rem;
}

.item-title {
  font-size: 2.4rem;
  line-height: 1.5;
  margin-top: 0;
  margin-bottom: 2.4rem;
}

/* ------------------------------------------------------------------- 
 * ## section header
 * ------------------------------------------------------------------- */
.section-header.has-bottom-sep {
  padding-bottom: 1.5rem;
  position: relative;
  text-align: center;
}

.section-header.has-bottom-sep::before {
  content: "";
  display: inline-block;
  height: 1px;
  width: 550px;
  background-color: rgba(255, 255, 255, 0.05);
  position: absolute;
  bottom: 0;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}

/* ------------------------------------------------------------------- 
 * ## grid overlay
 * ------------------------------------------------------------------- */
.grid-overlay {
  display: block;
  content: "";
  position: absolute;
  top: 0;
  left: 50%;
  bottom: 0;
  right: 0;
  max-width: 1200px;
  width: 89%;
  height: 100%;
  opacity: .5;
  border-right: 1px solid rgba(255, 255, 255, 0.1);
  border-left: 1px solid rgba(255, 255, 255, 0.1);
  -webkit-transform: translate3d(-50%, 0, 0);
  -ms-transform: translate3d(-50%, 0, 0);
  transform: translate3d(-50%, 0, 0);
  z-index: 3;
}

.grid-overlay > div,
.grid-overlay::before,
.grid-overlay::after {
  background-color: rgba(255, 255, 255, 0.1);
  position: absolute;
  top: 0;
  bottom: 0;
  height: 100%;
  width: 1px;
}

.grid-overlay::before {
  content: "";
  left: 25%;
}

.grid-overlay::after {
  content: "";
  right: 25%;
}

.grid-overlay > div {
  left: 50%;
}

/* ------------------------------------------------------------------- 
 * responsive:
 * reusable and common theme styles
 * ------------------------------------------------------------------- */
@media only screen and (max-width:1600px) {
  .grid-overlay {
    border-right: none !important;
    border-left: none !important;
  }

  .grid-overlay::before {
    left: 22.5%;
  }

  .grid-overlay::after {
    right: 22.5%;
  }

}

@media only screen and (max-width:1200px) {
  .display-1 {
    font-size: 4.5rem;
  }

  .display-1 br {
    display: none;
  }

}

@media only screen and (max-width:1100px) {
  .display-1 {
    font-size: 4.2rem;
  }

}

@media only screen and (max-width:1000px) {
  .display-1 {
    font-size: 4rem;
  }

}

@media only screen and (max-width:800px) {
  .display-1 {
    font-size: 3.6rem;
    margin-bottom: 4.5rem;
  }

  .subhead {
    font-size: 1.6rem;
  }

  .section-header.has-bottom-sep::before {
    width: 300px;
  }

}

@media only screen and (max-width:700px) {
  .display-1 {
    font-size: 3.2rem;
  }

  .subhead {
    font-size: 1.5rem;
  }

}

@media only screen and (max-width:600px) {
  .display-1 {
    font-size: 2.8rem;
    margin-bottom: 4.2rem;
  }

}

@media only screen and (max-width:500px) {
  .display-1 {
    font-size: 2.6rem;
  }

  .section-header.has-bottom-sep::before {
    width: 200px;
  }

}

@media only screen and (max-width:400px) {
  .display-1 {
    font-size: 2.4rem;
  }

  .subhead {
    font-size: 1.4rem;
  }

  .item-title {
    font-size: 2.1rem;
  }

  .grid-overlay > div,
  .grid-overlay::before,
  .grid-overlay::after {
    display: none;
  }

}


/* ===================================================================
 * # header styles
 *
 * ------------------------------------------------------------------- */
.s-header {
  z-index: 500;
  width: 100%;
  height: 78px;
  background-color: transparent;
  position: absolute;
  top: 21px;
}

/* -------------------------------------------------------------------
 * ## header logo
 * ------------------------------------------------------------------- */
.header-logo {
  z-index: 501;
  display: inline-block;
  margin: 0;
  padding: 0;
  position: absolute;
  left: 7.5rem;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.header-logo a {
  display: block;
  padding: 0;
  outline: 0;
  border: none;
}

.header-logo img {
  width: 155px;
  height: 36px;
}

/* ------------------------------------------------------------------- 
 * ## main navigation 
 * ------------------------------------------------------------------- */
.header-nav {
  z-index: 600;
  font-size: 1.6rem;
  line-height: 1.875;
  padding: 3.6rem 3rem 3.6rem 6rem;
  height: 100%;
  width: 50%;
  background: #0C0C0C;
  color: rgba(255, 255, 255, 0.25);
  overflow-y: auto;
  overflow-x: hidden;
  position: fixed;
  right: 0;
  top: 0;
  -webkit-transition: all 0.5s cubic-bezier(0.7, 0.3, 0, 1);
  transition: all 0.5s cubic-bezier(0.7, 0.3, 0, 1);
  -webkit-transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  -webkit-transform: translate3d(100%, 0, 0);
  -ms-transform: translate3d(100%, 0, 0);
  transform: translate3d(100%, 0, 0);
  visibility: hidden;
}

.header-nav a,
.header-nav a:visited {
  color: rgba(255, 255, 255, 0.5);
}

.header-nav a:hover,
.header-nav a:focus,
.header-nav a:active {
  color: white;
}

.header-nav p {
  margin-bottom: 2.7rem;
}

.header-nav__content,
.header-nav h3 {
  left: 100px;
  opacity: 0;
  visibility: hidden;
  -webkit-transform: translateZ(0);
  -webkit-backface-visibility: hidden;
}

.header-nav__content {
  position: relative;
  max-width: 300px;
}

.header-nav__list {
  font-family: "Montserrat", sans-serif;
  font-weight: 600;
  font-size: 2.8rem;
  line-height: 1.286;
  margin: 0 0 4.2rem 0;
  padding: 0;
  list-style: none;
  counter-reset: ctr;
}

.header-nav__list li {
  padding: .9rem 0;
}

.header-nav__list a {
  display: block;
  color: #FFFFFF;
  position: relative;
}

.header-nav__list a::before {
  display: block;
  content: counter(ctr, decimal-leading-zero) ".";
  counter-increment: ctr;
  font-family: "Montserrat", sans-serif;
  font-size: 11px;
  color: rgba(255, 255, 255, 0.25);
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  position: relative;
}

.header-nav__social {
  list-style: none;
  display: inline-block;
  font-size: 2.4rem;
  margin: 0;
}

.header-nav__social li {
  display: inline-block;
  margin-right: 12px;
  padding-left: 0;
}

.header-nav__social li a {
  color: rgba(255, 255, 255, 0.15);
}

.header-nav__social li a:hover,
.header-nav__social li a:focus {
  color: white;
}

.header-nav__social li:last-child {
  margin: 0;
}

.header-nav__close {
  z-index: 601;
  display: block;
  height: 30px;
  width: 30px;
  position: absolute;
  top: 39px;
  right: 30px;
  font: 0/0 a;
  text-shadow: none;
  color: transparent;
}

.header-nav__close span::before,
.header-nav__close span::after {
  content: "";
  display: block;
  height: 2px;
  width: 16px;
  background-color: #FFFFFF;
  position: absolute;
  top: 50%;
  left: 7px;
  margin-top: -1px;
}

.header-nav__close span::before {
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

.header-nav__close span::after {
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

/* menu is open
 * ----------------------------------------------- */
.menu-is-open .header-nav {
  -webkit-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  visibility: visible;
  -webkit-overflow-scrolling: touch;
}

.menu-is-open .header-nav .header-nav__content,
.menu-is-open .header-nav h3 {
  opacity: 1;
  visibility: visible;
  -webkit-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 1s;
  transition-duration: 1s;
  -webkit-transition-timing-function: ease-in-out;
  transition-timing-function: ease-in-out;
  -webkit-transition-delay: 0.5s;
  transition-delay: 0.5s;
  left: 0;
}

/* ------------------------------------------------------------------- 
 * ## mobile menu toggle 
 * ------------------------------------------------------------------- */
.header-menu-toggle {
  width: 48px;
  height: 45px;
  line-height: 45px;
  font-family: "Montserrat", sans-serif;
  font-weight: 600;
  font-size: 13px;
  text-transform: uppercase;
  letter-spacing: .5rem;
  color: #FFFFFF;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  position: fixed;
  right: 8rem;
  top: 30px;
}

.header-menu-toggle.opaque {
  background-color: #000000;
}

.header-menu-icon {
  display: block;
  width: 26px;
  height: 2px;
  margin-top: -1px;
  right: auto;
  bottom: auto;
  background-color: white;
  position: absolute;
  left: 11px;
  top: 50%;
}

.header-menu-icon::before,
.header-menu-icon::after {
  content: '';
  width: 100%;
  height: 100%;
  background-color: inherit;
  position: absolute;
  left: 0;
}

.header-menu-icon::before {
  top: -9px;
}

.header-menu-icon::after {
  bottom: -9px;
}

/* ------------------------------------------------------------------- 
 * responsive:
 * header
 * ------------------------------------------------------------------- */
@media only screen and (max-width:1200px) {
  .header-logo {
    left: 60px;
  }

  .header-menu-toggle {
    right: 60px;
  }

}

@media only screen and (max-width:900px) {
  .header-nav h3 {
    padding-right: 0;
  }

  .header-nav h3::after {
    display: none;
  }

  .header-nav__content {
    max-width: 280px;
  }

  .header-nav__list {
    font-size: 2.5rem;
  }

  .header-nav__list li {
    padding: .6rem 0;
  }

}

@media only screen and (max-width:800px) {
  .header-logo {
    left: 40px;
  }

  .header-nav {
    width: calc(100% - 80px);
    padding: 3.6rem 3rem 3.6rem 5rem;
  }

  .header-menu-toggle {
    right: 40px;
  }

}

@media only screen and (max-width:600px) {
  .s-header {
    height: 90px;
    top: 12px;
  }

  .header-nav {
    padding: 3.6rem 3rem 3.6rem 4rem;
  }

  .header-menu-toggle {
    top: 27px;
    right: 25px;
  }

}

@media only screen and (max-width:400px) {
  .s-header {
    top: 6px;
  }

  .header-logo {
    left: 30px;
  }

  .header-logo img {
    width: 150px;
    height: 35px;
  }

  .header-nav {
    width: calc(100% - 40px);
  }

  .header-nav h3 {
    margin-bottom: 6rem;
  }

  .header-nav__list {
    font-size: 2.2rem;
  }

  .header-menu-toggle {
    top: 21px;
    right: 20px;
  }

  .header-nav__social {
    font-size: 2.2rem;
  }

}


/* ===================================================================
 * # home
 *
 * ------------------------------------------------------------------- */
.s-home {
  width: 100%;
  height: 100vh;
  min-height: 786px;
  background-color: transparent;
  position: relative;
  display: table;
}

.s-home::before {
  display: block;
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #111111;
  opacity: .7;
  z-index: 2;
}

.s-home::after {
  display: block;
  content: "";
  width: 50%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.3);
  opacity: .5;
  z-index: 3;
  position: absolute;
  top: 0;
  left: 50%;
  bottom: 0;
  right: 0;
}

.s-home .grid-overlay > div {
  display: none;
}

.no-js .s-home {
  background: #000000;
}

/* ------------------------------------------------------------------- 
 * ## home content
 * ------------------------------------------------------------------- */
.home-content {
  display: table-cell;
  vertical-align: middle;
  padding-top: 6.6rem;
  width: 100%;
  overflow: hidden;
  position: relative;
  z-index: 4;
}

.home-content h1 {
  font-family: "Montserrat", sans-serif;
  font-weight: 700;
  font-size: 18rem;
  line-height: 1;
  letter-spacing: -.02em;
  color: #FFFFFF;
  margin-top: 0;
  margin-bottom: 0;
}

.home-content h3 {
  margin-top: 1.2rem;
  font-family: "Nunito Sans", sans-serif;
  font-weight: 300;
  font-size: 3.8rem;
  line-height: 1.342;
  font-style: normal;
  color: #9c9c9c;
}

.home-content__main {
  position: relative;
  text-align: center;
}

/* ------------------------------------------------------------------- 
 * ## home video link
 * ------------------------------------------------------------------- */
.home-content__video {
  display: inline-block;
  margin-top: 4.2rem;
}

.home-content__video .video-link {
  display: block;
  text-align: center;
  width: 20rem;
  outline: none;
  position: relative;
}

.home-content__video .video-text {
  display: inline-block;
  text-align: center;
  font-family: "Nunito Sans", sans-serif;
  font-weight: 600;
  font-size: 1.3rem;
  line-height: 1;
  color: #9c9c9c;
  text-transform: uppercase;
  letter-spacing: .5rem;
  -webkit-transition: color 0.3s ease-in-out;
  transition: color 0.3s ease-in-out;
  position: relative;
}

.home-content__video .video-link:hover .video-text {
  color: white;
}

.home-content__video .video-link:hover .video-icon {
  background-color: <?php echo $colorPri2 ?>;
}

/* ------------------------------------------------------------------- 
 * ## home buttons
 * ------------------------------------------------------------------- */
.home-content__button {
  margin-top: 7.8rem;
  position: relative;
}

.home-content__button .btn {
  width: 30rem;
  height: 7.2rem !important;
  line-height: 6.8rem !important;
  margin-right: 0;
  position: absolute;
}

.home-content__button .btn:first-child {
  right: 50%;
  left: auto;
}

.home-content__button .btn:last-child {
  left: 50%;
  right: auto;
}

.home-content__button .btn:not(.btn--primary) {
  background-color: #13161b;
  border-color: #13161b;
  color: #FFFFFF;
}

.home-content__button .btn:not(.btn--primary):hover,
.home-content__button .btn:not(.btn--primary):focus {
  background-color: #080a0c;
  border-color: #080a0c;
}

/* ------------------------------------------------------------------- 
 * ## home scroll
 * ------------------------------------------------------------------- */
.home-content__scroll {
  position: absolute;
  right: 9.5rem;
  bottom: 5.4rem;
  -webkit-transform: rotate(-90deg) translate3d(100%, 50%, 0);
  -ms-transform: rotate(-90deg) translate3d(100%, 50%, 0);
  transform: rotate(-90deg) translate3d(100%, 50%, 0);
  -webkit-transform-origin: right bottom;
  -ms-transform-origin: right bottom;
  transform-origin: right bottom;
}

.home-content__scroll .scroll-link {
  font-family: "Nunito Sans", sans-serif;
  font-weight: 600;
  font-size: 1.2rem;
  text-transform: uppercase;
  letter-spacing: .35rem;
  text-align: left;
  color: #FFFFFF;
  position: relative;
  padding-right: 180px;
}

.home-content__scroll::after {
  content: "";
  display: block;
  background-color: rgba(255, 255, 255, 0.08);
  width: 150px;
  height: 1px;
  position: absolute;
  right: 0;
  top: 50%;
}

/* ------------------------------------------------------------------- 
 * ## home social
 * ------------------------------------------------------------------- */
.home-social {
  list-style: none;
  font-family: "Nunito Sans", sans-serif;
  margin: 0;
  position: absolute;
  bottom: 3.6rem;
  left: 8rem;
  z-index: 5;
}

.home-social a {
  color: white;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}

.home-social li {
  position: relative;
  padding: .6rem 0;
}

.home-social li a {
  display: block;
  width: 30px;
  height: 30px;
  line-height: 30px;
}

.home-social i,
.home-social span {
  position: absolute;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}

.home-social i {
  display: inline-block;
  font-size: 15px;
  text-align: center;
  vertical-align: middle;
  width: 30px;
  height: 30px;
  line-height: 30px;
  top: 3px;
  left: 0;
}

.home-social span {
  background-color: #000000;
  color: #FFFFFF;
  font-size: 1.2rem;
  line-height: 30px;
  top: 0;
  left: 50px;
  padding: 0 15px;
  margin: 3px 0;
  border-radius: 3px;
  opacity: 0;
  visibility: hidden;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transform-origin: 0% 50%;
  -ms-transform-origin: 0% 50%;
  transform-origin: 0% 50%;
}

.home-social span::after {
  display: block;
  content: "";
  width: 0;
  height: 0;
  border-top: 6px solid transparent;
  border-bottom: 6px solid transparent;
  border-right: 6px solid #000000;
  position: absolute;
  top: 50%;
  left: -6px;
  margin-top: -6px;
}

.home-social li:hover span {
  opacity: 1;
  visibility: visible;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

/* animate .home-content__main
 * ------------------------------------------------------------------- */
html.ss-preload .home-content__main {
  opacity: 0;
}

html.ss-loaded .home-content__main {
  animation-duration: 2s;
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
}

html.no-csstransitions .home-content__main {
  opacity: 1;
}

/* ------------------------------------------------------------------- 
 * ## home animations
 * ------------------------------------------------------------------- */

/* fade in */
@-webkit-keyframes fadeIn {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 150%, 0);
    -ms-transform: translate3d(0, 150%, 0);
    transform: translate3d(0, 150%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

}

@keyframes fadeIn {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 150%, 0);
    -ms-transform: translate3d(0, 150%, 0);
    transform: translate3d(0, 150%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

}

/* fade out */
@-webkit-keyframes fadeOut {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -150%, 0);
    -ms-transform: translate3d(0, -150%, 0);
    transform: translate3d(0, -150%, 0);
  }

}

@keyframes fadeOut {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -150%, 0);
    -ms-transform: translate3d(0, -150%, 0);
    transform: translate3d(0, -150%, 0);
  }

}

/* ------------------------------------------------------------------- 
 * responsive:
 * home
 * ------------------------------------------------------------------- */
@media only screen and (max-width:1600px) {
  .home-content h1 {
    font-size: 17rem;
  }

  .home-content h3 {
    font-size: 3.7rem;
  }

}

@media only screen and (max-width:1400px) {
  .home-content h1 {
    font-size: 16rem;
  }

  .home-content h3 {
    font-size: 3.6rem;
  }

  .home-content__video .video-icon {
    height: 8.4rem;
    width: 8.4rem;
    background-size: 22px 24px;
  }

}

@media only screen and (max-width:1200px) {
  .home-content {
    padding-top: 4.5rem;
  }

  .home-content h1 {
    font-size: 14rem;
  }

  .home-content h3 {
    font-size: 3.2rem;
  }

  .home-content__video {
    height: 6.6rem;
    line-height: 6.6rem;
    vertical-align: middle;
  }

  .home-content__video .video-link {
    padding-left: 9rem;
    width: auto;
  }

  .home-content__video .video-icon {
    height: 6.6rem;
    width: 6.6rem;
    background-size: 12px 13px;
    position: absolute;
    top: 0;
    left: 0;
  }

  .home-content__button {
    margin-top: 7.2rem;
  }

  .home-content__button .btn {
    font-size: 11px;
    width: 28rem;
    height: 6.6rem !important;
    line-height: 6.2rem !important;
  }

  .home-content__scroll {
    right: 7rem;
  }

  .home-content__scroll .scroll-link {
    font-size: 1.1rem;
  }

  .home-social {
    left: 5.5rem;
  }

}

@media only screen and (max-width:1000px) {
  .home-content h1 {
    font-size: 13rem;
  }

  .home-content h3 {
    font-size: 3rem;
  }

  .home-content__button .btn {
    width: 24rem;
  }

  .home-content__scroll {
    right: 6rem;
  }

  .home-social {
    left: 4.5rem;
  }

}

@media only screen and (max-width:900px) {
  .home-content h1 {
    font-size: 12rem;
  }

  .home-content h3 {
    font-size: 2.7rem;
  }

  .home-social {
    display: none;
  }

}

@media only screen and (max-width:800px) {
  .home-content h1 {
    font-size: 11.4rem;
  }

  .home-content h3 {
    font-size: 2.6rem;
  }

  .home-content__video {
    margin-top: 3.6rem;
  }

  .home-content__video .video-link {
    padding-left: 8rem;
  }

  .home-content__video .video-icon {
    height: 6rem;
    width: 6rem;
  }

  .home-content__video .video-text {
    top: -6px;
    font-size: 1.2rem;
    line-height: 6rem;
  }

  .home-content__button {
    margin-top: 6.6rem;
  }

  .home-content__button .btn {
    width: 22rem;
  }

}

@media only screen and (max-width:700px) {
  .home-content h1 {
    font-size: 10.2rem;
  }

  .home-content h3 {
    font-size: 2.4rem;
  }

  .home-content__scroll {
    right: 5rem;
    bottom: 4.8rem;
  }

  .home-content__scroll::after {
    display: none;
  }

}

@media only screen and (max-width:600px) {
  .home-content {
    padding-top: 6rem;
  }

  .home-content h1 {
    font-size: 9rem;
  }

  .home-content h3 {
    font-size: 2.1rem;
  }

  .home-content__main {
    padding: 0 35px;
  }

  .home-content__video {
    margin-top: 3rem;
  }

  .home-content__button {
    margin-top: 4.8rem;
  }

  .home-content__button .btn {
    position: static;
    display: block;
    height: 6rem !important;
    line-height: 5.6rem !important;
    width: 100%;
    max-width: 32rem;
    margin-left: auto;
    margin-right: auto;
  }

}

@media only screen and (max-width:500px) {
  .home-content h1 {
    font-size: 7.5rem;
  }

  .home-content h3 {
    font-size: 1.8rem;
  }

}

@media only screen and (max-width:400px) {
  .s-home {
    min-height: 630px;
  }

  .home-content h1 {
    font-size: 6.5rem;
  }

  .home-content__main {
    padding: 0 25px;
  }

  .home-content__video .video-link {
    padding-left: 7.5rem;
  }

  .home-content__video .video-icon {
    height: 5.4rem;
    width: 5.4rem;
  }

  .home-content__video .video-text {
    line-height: 5.4rem;
    font-size: 1.1rem;
  }

  .home-content__button {
    margin-top: 3.6rem;
  }

}

@media only screen and (max-width:350px) {
  .home-content h1 {
    font-size: 6.2rem;
  }

}


/* ===================================================================
 * # about
 *
 * ------------------------------------------------------------------- */
.s-about {
  padding-top: 18rem;
  padding-bottom: 18rem;
  background-color: <?php echo $colorSec ?>;
  position: relative;
}

/* ------------------------------------------------------------------- 
 * ## about process
 * ------------------------------------------------------------------- */
.process {
  margin-top: 6.6rem;
  counter-reset: ctr;
}

.process h4 {
  padding-left: 7rem;
  margin-bottom: 2.1rem;
  position: relative;
}

.item-process {
  position: relative;
  min-height: 24.6rem;
  margin-bottom: 3rem;
}

.item-process:nth-child(2n+1) {
  padding-right: 30px;
}

.item-process:nth-child(2n+2) {
  padding-left: 30px;
}

/* ------------------------------------------------------------------- 
 * responsive:
 * about
 * ------------------------------------------------------------------- */
@media only screen and (max-width:1000px) {
  .item-process:nth-child(2n+1) {
    padding-right: 25px;
  }

  .item-process:nth-child(2n+2) {
    padding-left: 25px;
  }

}

@media only screen and (max-width:1000px) {
  .s-about {
    padding-top: 15rem;
    padding-bottom: 15rem;
  }

  .item-process:nth-child(n) {
    padding: 0 15px;
    min-height: 0;
  }

}

@media only screen and (max-width:600px) {
  .s-about {
    padding-top: 12rem;
    padding-bottom: 12rem;
  }

  .process h4 {
    padding-left: 6rem;
  }

  .process h4::before {
    font-size: 1.8rem;
    height: 42px;
    width: 42px;
    line-height: 42px;
    top: -4px;
  }

  .item-process:nth-child(n) {
    padding: 0 10px;
  }

}

@media only screen and (max-width:400px) {
  .process h4 {
    padding-left: 5.8rem;
  }

  .process h4::before {
    font-size: 1.6rem;
    height: 39px;
    width: 39px;
    line-height: 39px;
    top: -5px;
  }

  .item-process:nth-child(n) {
    padding: 0;
    margin-bottom: 1.5rem;
  }

}


/* ===================================================================
 * # services
 *
 * ------------------------------------------------------------------- */
.s-services {
  padding-top: 18rem;
  padding-bottom: 18rem;
  position: relative;
}

/* ------------------------------------------------------------------- 
 * ## services list
 * ------------------------------------------------------------------- */
.services {
  margin-top: 9rem;
}

.item-service {
  margin-bottom: .9rem;
}

.item-service h3 {
  margin-top: 0;
}

.item-service:nth-child(2n+1) {
  padding-right: 50px;
}

.item-service:nth-child(2n+2) {
  padding-left: 50px;
}

.item-service__text {
  margin-left: 7.2rem;
}

/* ------------------------------------------------------------------- 
 * responsive:
 * services
 * ------------------------------------------------------------------- */
@media only screen and (max-width:1200px) {
  .services {
    max-width: 1000px;
  }

  .services .item-service:nth-child(2n+1) {
    padding-right: 30px;
  }

  .services .item-service:nth-child(2n+2) {
    padding-left: 30px;
  }

}

@media only screen and (max-width:1000px) {
  .s-services {
    padding-top: 15rem;
    padding-bottom: 15rem;
  }

  .services .item-service:nth-child(2n+1) {
    padding-right: 20px;
  }

  .services .item-service:nth-child(2n+2) {
    padding-left: 20px;
  }

  .item-service__text {
    margin-left: 0;
  }

  .item-service__icon {
    float: none;
    margin-top: 0;
    font-size: 4.2rem;
  }

}

@media only screen and (max-width:800px) {
  .services {
    margin-top: 4.2rem;
  }

  .services .item-service:nth-child(n) {
    padding-right: 15px;
    padding-left: 15px;
    max-width: 700px;
  }

  .services .service-icon {
    font-size: 4.2rem;
    float: none;
    margin-top: 0;
  }

}

@media only screen and (max-width:600px) {
  .s-services {
    padding-top: 12rem;
  }

  .services .item-service:nth-child(n) {
    padding-right: 10px;
    padding-left: 10px;
  }

}

@media only screen and (max-width:400px) {
  .services .item-service:nth-child(n) {
    padding-right: 0;
    padding-left: 0;
    margin-bottom: 0;
  }

}


/* ===================================================================
 * # works
 *
 * ------------------------------------------------------------------- */
.s-works {
  padding-top: 18rem;
  padding-bottom: 18rem;
  position: relative;
}

.s-works::before {
  content: "";
  display: block;
  content: "";
  position: absolute;
  top: 0;
  left: 50%;
  bottom: 0;
  right: 0;
  width: 50%;
  height: 100%;
  opacity: .3;
  background-color: rgba(0, 0, 0, 0.9);
  background-image: url(images/pattern.jpg);
  background-size: 760px 380px;
}

/* ------------------------------------------------------------------- 
 * ## bricks/masonry
 * ------------------------------------------------------------------- */
.masonry-wrap {
  margin-top: 7.2rem;
  max-width: 1100px;
  position: relative;
}

.masonry-wrap:after {
  content: "";
  display: table;
  clear: both;
}

.masonry:after {
  content: "";
  display: table;
  clear: both;
}

.masonry .grid-sizer,
.masonry__brick {
  width: 50%;
}

.masonry__brick {
  float: left;
  padding: 0;
}

.item-folio {
  position: relative;
  overflow: hidden;
}

.item-folio__thumb img {
  vertical-align: bottom;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}

.item-folio__thumb a {
  display: block;
}

.item-folio__thumb a::before {
  display: block;
  background-color: rgba(0, 0, 0, 0.8);
  content: "";
  opacity: 0;
  visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  z-index: 1;
}

.item-folio__thumb a::after {
  content: "...";
  font-family: georgia, serif;
  font-size: 2.7rem;
  display: block;
  height: 30px;
  width: 30px;
  line-height: 30px;
  margin-left: -15px;
  margin-top: -15px;
  position: absolute;
  left: 50%;
  top: 50%;
  text-align: center;
  color: rgba(255, 255, 255, 0.8);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-transform: scale(0.5);
  -ms-transform: scale(0.5);
  transform: scale(0.5);
  z-index: 1;
}

.item-folio__text {
  position: absolute;
  left: 0;
  bottom: 3.6rem;
  padding: 0 3.3rem;
  z-index: 2;
  opacity: 0;
  visibility: hidden;
  -webkit-transform: translate3d(0, 100%, 0);
  -ms-transform: translate3d(0, 100%, 0);
  transform: translate3d(0, 100%, 0);
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.item-folio__title {
  font-family: "Nunito Sans", sans-serif;
  font-size: 1.4rem;
  font-weight: 700;
  line-height: 1.286;
  color: #FFFFFF;
  text-transform: uppercase;
  letter-spacing: .2rem;
  margin: 0 0 .3rem 0;
}

.item-folio__cat {
  color: rgba(255, 255, 255, 0.5);
  font-family: "Nunito Sans", sans-serif;
  font-size: 1.4rem;
  font-weight: 300;
  line-height: 1.714;
  margin-bottom: 0;
}

.item-folio__caption {
  display: none;
}

.item-folio__project-link {
  display: block;
  color: #FFFFFF;
  box-shadow: 0 0 0 1px #FFFFFF;
  border-radius: 50%;
  height: 4.2rem;
  width: 4.2rem;
  text-align: center;
  z-index: 500;
  position: absolute;
  top: 3rem;
  left: 3rem;
  opacity: 0;
  visibility: hidden;
  -webkit-transform: translate3d(0, -100%, 0);
  -ms-transform: translate3d(0, -100%, 0);
  transform: translate3d(0, -100%, 0);
}

.item-folio__project-link i {
  font-size: 1.8rem;
  line-height: 4.2rem;
}

.item-folio__project-link::before {
  display: block;
  content: "";
  height: 3rem;
  width: 1px;
  background-color: rgba(255, 255, 255, 0.1);
  position: absolute;
  top: -3rem;
  left: 50%;
}

.item-folio__project-link:hover,
.item-folio__project-link:focus,
.item-folio__project-link:active {
  background-color: #FFFFFF;
  color: #000000;
}

/* on hover 
 * ----------------------------------------------- */
.item-folio:hover .item-folio__thumb a::before {
  opacity: 1;
  visibility: visible;
}

.item-folio:hover .item-folio__thumb a::after {
  opacity: 1;
  visibility: visible;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.item-folio:hover .item-folio__thumb img {
  -webkit-transform: scale(1.05);
  -ms-transform: scale(1.05);
  transform: scale(1.05);
}

.item-folio:hover .item-folio__project-link,
.item-folio:hover .item-folio__text {
  opacity: 1;
  visibility: visible;
  -webkit-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

/* ------------------------------------------------------------------- 
 * responsive:
 * works
 * ------------------------------------------------------------------- */
@media only screen and (max-width:1000px) {
  .s-works {
    padding-top: 15rem;
    padding-bottom: 15rem;
  }

}

@media only screen and (max-width:800px) {
  .item-folio__title,
  .item-folio__cat {
    font-size: 1.3rem;
  }

}

@media only screen and (max-width:600px) {
  .s-works {
    padding-top: 12rem;
  }

  .masonry-wrap {
    padding: 0 35px;
  }

  .masonry__brick {
    float: none;
    width: 100%;
  }

  .item-folio__title,
  .item-folio__cat {
    font-size: 1.4rem;
  }

}

@media only screen and (max-width:400px) {
  .masonry-wrap {
    padding: 0 25px;
  }

}


/* ===================================================================
 * # clients
 *
 * ------------------------------------------------------------------- */
.s-clients {
  padding-top: 16.2rem;
  padding-bottom: 15rem;
  position: relative;
}

.s-clients .grid-overlay {
  border-right: 1px solid rgba(255, 255, 255, 0.05);
  border-left: 1px solid rgba(255, 255, 255, 0.05);
}

.s-clients .grid-overlay > div,
.s-clients .grid-overlay::before,
.s-clients .grid-overlay::after {
  background-color: rgba(255, 255, 255, 0.05);
}

.section-header,
.clients-wrap,
.clients {
  z-index: 3;
}

.clients-wrap {
  margin-top: 6rem;
}

.clients {
  list-style: none;
  text-align: center;
  margin-left: 0;
  font-weight: 700;
  font-size: 4.5rem;
  position: relative;
}

.clients a {
  color: rgba(255, 255, 255, 0.15);
}

.clients li {
  display: inline-block;
  padding: 0 1.5rem;
}

/* ------------------------------------------------------------------- 
 * responsive:
 * clients
 * ------------------------------------------------------------------- */
@media only screen and (max-width:1000px) {
  .s-clients {
    padding-top: 15rem;
  }

  .clients {
    font-size: 4.2rem;
  }

}

@media only screen and (max-width:900px) {
  .clients {
    font-size: 4rem;
  }

}

@media only screen and (max-width:800px) {
  .clients-wrap {
    margin-top: 3.6rem;
  }

  .clients {
    font-size: 3.4rem;
  }

}

@media only screen and (max-width:600px) {
  .s-clients {
    padding-top: 12rem;
    padding-bottom: 10.2rem;
  }

  .clients {
    font-size: 3rem;
  }

}

@media only screen and (max-width:500px) {
  .clients-wrap {
    margin-top: 1.5rem;
  }

  .clients {
    font-size: 2.4rem;
  }

  .clients li {
    padding: 0 1rem;
  }

}

@media only screen and (max-width:400px) {
  .clients {
    font-size: 2.1rem;
  }

  .clients li {
    padding: 0 .6rem;
  }

}


/* ===================================================================
 * # testimonials
 *
 * ------------------------------------------------------------------- */
.s-testimonials {
  padding-top: 16.2rem;
  padding-bottom: 21rem;
  text-align: center;
  position: relative;
  background-image: url(images/hero-bg.jpg);
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

.s-testimonials::before {
  display: block;
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: .9;
  background-color: #111111;
}

.testimonials__icon {
  height: 4.5rem;
  width: 4.5rem;
  background-color: transparent;
  background-image: url(images/icons/icon-quote.svg);
  background-position: center center;
  background-repeat: no-repeat;
  background-size: contain;
  position: absolute;
  top: 15rem;
  left: 50%;
  margin-left: -2.25rem;
}

.testimonials__slider {
  font-size: 3.6rem;
  font-weight: 400;
  line-height: 1.636;
  margin-top: 7.2rem;
  color: #FFFFFF;
  position: relative;
}

.testimonials__slider .slick-slide {
  outline: none;
}

.testimonials__slider .slick-dots {
  display: block;
  list-style: none;
  width: 100%;
  padding: 0;
  margin: 3rem 0 0 0;
  text-align: center;
  position: absolute;
  top: 100%;
  left: 0;
}

.testimonials__slider .slick-dots li {
  display: inline-block;
  width: 27px;
  height: 27px;
  margin: 0;
  padding: 9px;
  cursor: pointer;
}

.testimonials__slider .slick-dots li button {
  display: block;
  width: 10px;
  height: 10px;
  line-height: 10px;
  border-radius: 50%;
  background: white;
  border: none;
  padding: 0;
  margin: 0;
  cursor: pointer;
  font: 0/0 a;
  text-shadow: none;
  color: transparent;
}

.testimonials__slider .slick-dots li button:hover,
.testimonials__slider .slick-dots li button:focus {
  outline: none;
}

.testimonials__slider .slick-dots li.slick-active button,
.testimonials__slider .slick-dots li:hover button {
  background: transparent;
  box-shadow: 0 0 0 2px #FFFFFF;
}

.testimonials__author span {
  display: block;
  font-family: "Nunito Sans", sans-serif;
  font-weight: 400;
  font-size: 1.5rem;
  line-height: 1.6;
  color: rgba(255, 255, 255, 0.5);
  text-transform: none;
  letter-spacing: 0;
}

/* ------------------------------------------------------------------- 
 * responsive:
 * testimonials
 * ------------------------------------------------------------------- */
@media only screen and (max-width:1200px) {
  .testimonials__slider {
    font-size: 3.3rem;
  }

}

@media only screen and (max-width:1000px) {
  .s-testimonials {
    padding-top: 15rem;
    padding-bottom: 19.2rem;
  }

}

@media only screen and (max-width:900px) {
  .testimonials__icon {
    height: 3.9rem;
    width: 3.9rem;
    margin-left: -1.95rem;
  }

  .testimonials__slider {
    font-size: 3rem;
  }

}

@media only screen and (max-width:800px) {
  .testimonials__icon {
    height: 3.6rem;
    width: 3.6rem;
    margin-left: -1.8rem;
  }

  .testimonials__slider {
    font-size: 2.7rem;
  }

}

@media only screen and (max-width:600px) {
  .s-testimonials {
    padding-top: 7.8rem;
    padding-bottom: 15rem;
  }

  .testimonials__icon {
    height: 3.3rem;
    width: 3.3rem;
    margin-left: -1.65rem;
    top: 9rem;
  }

  .testimonials__slider {
    font-size: 2.5rem;
  }

  .testimonials__author {
    font-size: 1.4rem;
  }

  .testimonials__author span {
    font-size: 1.4rem;
  }

}

@media only screen and (max-width:400px) {
  .testimonials__slider {
    font-size: 2.1rem;
  }

}

@media only screen and (max-width:350px) {
  .testimonials__slider {
    font-size: 1.9rem;
  }

}


/* ===================================================================
 * # contact
 *
 * ------------------------------------------------------------------- */
.s-contact {
  padding-top: 16.2rem;
  padding-bottom: 21rem;
  background-color: <?php echo $colorPri ?>;
  color: rgba(255, 255, 255, 0.6);
  text-align: center;
  position: relative;
}

.s-contact a {
  color: #FFFFFF;
}

.s-contact .grid-overlay {
  border-right: 1px solid rgba(255, 255, 255, 0.12);
  border-left: 1px solid rgba(255, 255, 255, 0.12);
  z-index: 2;
}

.s-contact .grid-overlay > div,
.s-contact .grid-overlay::before,
.s-contact .grid-overlay::after {
  background-color: rgba(255, 255, 255, 0.12);
}

.s-contact .subhead {
  color: #2a1538;
}

.s-contact .section-header,
.s-contact .contact-main {
  z-index: 3;
  position: relative;
}

.contact-main {
  font-size: 3.3rem;
  line-height: 1.636;
  margin-top: 9rem;
}

.contact-main [class*="contact-"] {
  margin-bottom: 0;
}

.contact-main .contact-email {
  margin-bottom: 3.6rem;
}

.contact-email a {
  font-size: 9rem;
  font-weight: 700;
  line-height: 1.2;
  color: #FFFFFF;
  border-bottom: 3px solid rgba(0, 0, 0, 0.2);
}

.contact-email a:hover,
.contact-email a:focus {
  border-bottom: 3px solid rgba(255, 255, 255, 0.2);
}

/* ------------------------------------------------------------------- 
 * ## contact social
 * ------------------------------------------------------------------- */
.contact-social {
  list-style: none;
  display: inline-block;
  margin: 4.2rem 0 0 0;
  font-size: 4.2rem;
}

.contact-social li {
  margin-right: 15px;
  padding-left: 0;
  display: inline-block;
}

.contact-social li a {
  color: white;
  border: none !important;
}

.contact-social li a:hover,
.contact-social li a:focus {
  color: #FFFFFF;
}

.contact-social li:last-child {
  margin: 0;
}

/* ------------------------------------------------------------------- 
 * responsive:
 * contact
 * ------------------------------------------------------------------- */
@media only screen and (max-width:1200px) {
  .contact-main {
    font-size: 3.1rem;
  }

  .contact-email a {
    font-size: 7.6rem;
  }

}

@media only screen and (max-width:1000px) {
  .s-contact {
    padding-top: 15rem;
    padding-bottom: 19.8rem;
  }

  .contact-main {
    font-size: 3rem;
  }

  .contact-email a {
    font-size: 7.2rem;
  }

}

@media only screen and (max-width:900px) {
  .contact-main {
    font-size: 2.8rem;
  }

  .contact-email a {
    font-size: 6.2rem;
  }

  .contact-social {
    font-size: 4rem;
  }

}

@media only screen and (max-width:800px) {
  .contact-main {
    font-size: 2.6rem;
  }

  .contact-email a {
    font-size: 5.5rem;
  }

  .contact-social {
    font-size: 3.5rem;
  }

}

@media only screen and (max-width:700px) {
  .contact-main {
    font-size: 2.4rem;
  }

  .contact-email a {
    font-size: 3.8rem;
  }

  .contact-social {
    font-size: 3.2rem;
  }

}

@media only screen and (max-width:600px) {
  .s-contact {
    padding-top: 12rem;
    padding-bottom: 13.2rem;
  }

  .contact-main {
    font-size: 2.1rem;
    margin-top: 7.2rem;
  }

  .contact-social {
    font-size: 3rem;
  }

}

@media only screen and (max-width:500px) {
  .contact-main {
    font-size: 1.8rem;
  }

  .contact-email a {
    font-size: 3rem;
  }

}

@media only screen and (max-width:400px) {
  .contact-main {
    font-size: 1.6rem;
    margin-top: 4.5rem;
  }

  .contact-email a {
    font-size: 2.5rem;
  }

  .contact-social {
    margin: 3rem 0 0 0;
    font-size: 2.4rem;
  }

}

/* ===================================================================
 * # footer
 *
 * ------------------------------------------------------------------- */
footer {
  padding-top: 9rem;
  padding-bottom: 6rem;
  color: rgba(255, 255, 255, 0.6);
  background-color: <?php echo $colorPri ?>;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  text-align: center;
  position: relative;
}

footer a {
  color: #FFFFFF;
}

/* ------------------------------------------------------------------- 
 * ## copyright
 * ------------------------------------------------------------------- */
.ss-copyright span {
  font-size: 16px;
  display: inline-block;
}

.ss-copyright span::after {
  content: "·";
  display: inline-block;
  padding: 0 1rem 0 1.2rem;
  color: white;
}

.ss-copyright span:last-child::after {
  display: none;
}

.ss-go-top a {
  color: #FFFFFF;
  background-color: <?php echo $colorPri1; ?>;
  text-align: center;
  font-family: "Montserrat", sans-serif;
  font-weight: 700;
  font-size: 13px;
  text-transform: uppercase;
  letter-spacing: .3rem;
  height: 75px;
  line-height: 75px;
  padding: 0 4rem 0 7rem;
  position: absolute;
  left: 50%;
  top: -37.5px;
  -webkit-transform: translate3d(-50%, 0, 0);
  -ms-transform: translate3d(-50%, 0, 0);
  transform: translate3d(-50%, 0, 0);
  z-index: 2;
}

/* ------------------------------------------------------------------- 
 * ## go top
 * ------------------------------------------------------------------- */
.ss-go-top a::before {
  content: "";
  display: block;
  height: 16px;
  width: 12px;
  background-image: url(images/icons/icon-up.svg);
  background-repeat: no-repeat;
  background-position: center center;
  background-size: contain;
  position: absolute;
  top: 50%;
  left: 3.5rem;
  margin-top: -9px;
}

.ss-go-top a:hover,
.ss-go-top a:focus {
  background-color: <?php echo $colorPri2; ?>;
}

/* ------------------------------------------------------------------- 
 * responsive:
 * footer
 * ------------------------------------------------------------------- */
@media only screen and (max-width:600px) {
  .ss-copyright span {
    display: block;
  }

  .ss-copyright span::after {
    display: none;
  }

  .ss-go-top a {
    font-size: 10px;
    height: 70px;
    line-height: 70px;
    top: -35px;
    padding: 0 3rem;
  }

  .ss-go-top a::before {
    display: none;
  }

}

@media only screen and (max-width:400px) {
  .cl-copyright span {
    font-size: 15px;
  }

  .ss-go-top a {
    height: 65px;
    line-height: 65px;
    top: -32.5px;
    padding: 0 3rem;
    padding: 0 2rem;
  }

}

/*# sourceMappingURL=main.css.map */
</style>



    <!-- favicons
    ================================================== -->
    <link rel="icon" href="images/icons/favicon.ico">


</head>
    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                //411133719072641
                facebook: "Onatech", // Facebook page ID
                whatsapp: "+<?php echo $row['whats'] ?>", // WhatsApp number
                call: "<?php echo $row['phone'] ?>", // Call phone number
                email: "<?php echo $row['email'] ?>", // Email
                //telegram: "jhgjh", // Telegram bot username
                //snapchat: "kig", // Snapchat username
                //line: "asd", // Line QR code URL
                //vkontakte: "as", // VKontakte page name

                call_to_action: "Contactanos", // Call to action
                button_color: "#FF6550", // Color of button
                position: "absolute", // Position may be 'right' or 'left'
                order: "facebook,whatsapp,call,email", // Order of buttons
                //order: "facebook,whatsapp,call,email,telegram,snapchat,line,vkontakte", // Order of buttons
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /WhatsHelp.io widget -->

<body id="top">
    
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <span><?php echo $row['name'] ?></span></a>
        </div> <!-- end header-logo -->

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Cerrar</span></a>

            <h3>Navegar</h3>

            <div class="header-nav__content">
                
                <ul class="header-nav__list">
                    <li><a class="smoothscroll"  href="#home" title="home">Inicio</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">Conocenos</a></li>
                    <li><a class="smoothscroll"  href="#services" title="services">Servicios</a></li>
                    <li><a class="smoothscroll"  href="#works" title="works">Trabajos</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact">Contactanos</a></li>
                </ul>
    
                <p><a href='<?php echo $row['page'] ?>'><?php echo $row['name'] ?></a></p>
    
                <ul class="header-nav__social">
                    <li>
                        <a href="<?php echo $row['facebook'] ?>"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $row['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $row['youtube'] ?>"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $row['instagram'] ?>"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $row['page'] ?>"><i class="fab fa-dribbble"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $row['googlePlus'] ?>"><i class="fab fa-google"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="../../img/bg-img/<?php echo $row['bg'] ?>" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="grid-overlay">
            <div></div>
        </div>

        <div class="home-content">

            <div class="row home-content__main">

                <h1>
                 <img src="../../img/logosEmp/<?php echo $row['logo'] ?>" alt="">
                </h1>

                <h3>
                Comparte tu Arte
                </h3>

                <div class="home-content__video">
                    <a class="video-link" href="<?php echo $row['video'] ?>" data-lity>
                        <span class="video-icon"></span>
                        <span class="video-text">Ver Video</span>
                    </a>
                </div>

                <div class="home-content__button">
                    <a href="#about" class="smoothscroll btn btn--primary btn--large">
                        Mas sobre nosotros
                    </a>
                    <a href="#contact" class="smoothscroll btn btn--large">
                        Llamanos
                    </a>
                </div>

            </div> <!-- end home-content__main -->

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    Conocenos
                </a>
            </div>

        </div> <!-- end home-content -->

        <ul class="home-social">
            <li>
                <a href="<?php echo $row['facebook'] ?>"><i class="fab fa-facebook"></i></a>
            </li>
            <li>
                <a href="<?php echo $row['twitter'] ?>"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
                <a href="<?php echo $row['youtube'] ?>"><i class="fab fa-youtube"></i></a>
            </li>
            <li>
                <a href="<?php echo $row['instagram'] ?>"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
                <a href="<?php echo $row['page'] ?>"><i class="fab fa-dribbble"></i></a>
            </li>
            <li>
                <a href="<?php echo $row['googlePlus'] ?>"><i class="fab fa-google"></i></a>
            </li>
        </ul> <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="row section-header bit-narrow" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Quienes Somos</h3>
                <h1 class="display-1">
                <?php echo $row['conocenos'] ?>
                </h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row bit-narrow" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
                Filosofía 
                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row bit-narrow">
                
            <div class="about-process process block-1-2 block-tab-full">

                <div class="col-block item-process" data-aos="fade-up">
                    <div class="item-process__text">
                        <h4 class="item-title"><?php echo $row['serviciot1'] ?></h4>
                        <p>
                        <?php echo $row['servicio1'] ?>
                        </p>
                    </div>
                </div>
                <div class="col-block item-process" data-aos="fade-up">
                    <div class="item-process__text">
                        <h4 class="item-title"><?php echo $row['serviciot2'] ?></h4>
                        <p>
                        <?php echo $row['servicio2'] ?>
                        </p>
                    </div>
                </div>
                <div class="col-block item-process" data-aos="fade-up">
                    <div class="item-process__text">
                        <h4 class="item-title"><?php echo $row['serviciot3'] ?></h4>
                        <p>
                        <?php echo $row['servicio3'] ?>
                        </p>
                    </div>
                </div>
                <div class="col-block item-process" data-aos="fade-up">
                    <div class="item-process__text">
                        <h4 class="item-title"><?php echo $row['serviciot4'] ?></h4>
                        <p>
                        <?php echo $row['servicio4'] ?>
                        </p>
                    </div>
                </div>

            </div> <!-- end process -->

        </div> <!-- end row -->

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id='services' class="s-services target-section darker" <?php echo $row['seccionExtra1'] ?>>

        <div class="row section-header bit-narrow" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Como lo Hacemos</h3>
                <h1 class="display-1">
                De una manera divertida centrandonos en el trabajo de nuestros invitados.
                </h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row bit-narrow services block-1-2 block-tab-full">

            <div class="col-block item-service" data-aos="fade-up">
                <div class="item-service__icon">
                    <i class="icon-star"></i>
                </div>
                <div class="item-service__text">
                    <h3 class="item-title">Branding Artistico</h3>
                    <p>Creamos una comunidad de usuarios donde hacemos llegar tu arte para difundirlo y darlo a conocer de manera masiva.
                    </p>
                </div>
            </div>

            <div class="col-block item-service" data-aos="fade-up">
                <div class="item-service__icon">
                    <i class="icon-group"></i>
                </div>
                <div class="item-service__text">
                    <h3 class="item-title">Programas</h3>
                    <p>Realizamos entrevistas divertidas en donde nuestra finalidad es que nuestros usuarios conozcan tu arte de la mejor manera.
                    </p>
                </div>
            </div>

            <div class="col-block item-service" data-aos="fade-up">
                <div class="item-service__icon">
                    <i class="icon-pie-chart"></i>
                </div>  
                <div class="item-service__text">
                    <h3 class="item-title">Marketing</h3>
                    <p>Analizamos nuestro entorno para poder hacer mas ameno nuestra propuesta de valor y la tuya como artista.
                    </p>
                </div>
            </div>

            <div class="col-block item-service" data-aos="fade-up">
                <div class="item-service__icon">
                    <i class="icon-image"></i>
                </div>
                <div class="item-service__text">
                    <h3 class="item-title">Eventos</h3>
                    <p>Promocionamos los eventos mas importantes en nuestra comunidad.
                    </p>
                </div>
            </div>

            <div class="col-block item-service" data-aos="fade-up">
                <div class="item-service__icon">
                    <i class="icon-cube"></i>
                </div>
                <div class="item-service__text">
                    <h3 class="item-title">Diseñon</h3>
                    <p>Diseñamos nuestros visuales para hacer llegar el arte y cultura de forma agradable.
                    </p>
                </div>
            </div>
    
            <div class="col-block item-service" data-aos="fade-up">
                <div class="item-service__icon"><i class="icon-lego-block"></i></div>
                <div class="item-service__text">
                    <h3 class="item-title">Calendario</h3>
                    <p>Contamos con calendario de eventos proximos de gran variedad de gustos.
                    </p>
                </div>
            </div>

        </div> <!-- end services -->
        <div class="row section-header bit-narrow" data-aos="fade-up">
            <a href="mailto:conectivomxtv@gmail.com" class="btn btn-info" style="display: block;margin-left: 30%;margin-right: 30%;">Únete</a>
            
        </div>

    </section> <!-- end s-services -->


    <!-- works
    ================================================== -->
    <section id="works" class="s-works target-section" <?php echo $row['seccionExtra2'] ?>>

        <div class="row section-header has-bottom-sep narrow target-section" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Eventos Próximos</h3>
                <h1 class="display-1">
                Aquí podrás ver los banners de los mejores eventos.
                </h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row masonry-wrap">

            <div class="masonry">
    
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                            
                        <div class="item-folio__thumb">
                            <a href="images/portfolio/2.jpg" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                <img src="images/portfolio/1.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Shutterbug
                            </h3>
                            <p class="item-folio__cat">
                                Branding
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="icon-link"></i>
                        </a>

                        <div class="item-folio__caption">
                            <p>Los mejores evetos en ConectivomxTv.</p>
                        </div>

                    </div>
                </div> <!-- end masonry__brick -->
    
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                            
                        <div class="item-folio__thumb">
                            <a href="images/portfolio/2.jpg" class="thumb-link" title="Woodcraft" data-size="1050x700">
                                <img src="images/portfolio/2.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Woodcraft
                            </h3>
                            <p class="item-folio__cat">
                                Web Design
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="icon-link"></i>
                        </a>

                        <div class="item-folio__caption">
                            <p>Los mejores evetos en ConectivomxTv.</p>
                        </div>

                    </div>
                </div> <!-- end masonry__brick -->
        
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                            
                        <div class="item-folio__thumb">
                            <a href="images/portfolio/3.jpg" class="thumb-link" title="The Beetle Car" data-size="1050x700">
                                <img src="images/portfolio/3.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                The Beetle
                            </h3>
                            <p class="item-folio__cat">
                                Web Development
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="icon-link"></i>
                        </a>

                        <div class="item-folio__caption">
                            <p>Los mejores evetos en ConectivomxTv..</p>
                        </div>

                    </div>
                </div> <!-- end masonry__brick -->
        
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                            
                        <div class="item-folio__thumb">
                            <a href="images/portfolio/4.jpg" class="thumb-link" title="Grow Green" data-size="1050x700">
                                <img src="images/portfolio/4.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Salad
                            </h3>
                            <p class="item-folio__cat">
                                Branding
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="icon-link"></i>
                        </a>

                        <div class="item-folio__caption">
                            <p>Los mejores evetos en ConectivomxTv.</p>
                        </div>

                    </div>
                </div> <!-- end masonry__brick -->
    
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                            
                        <div class="item-folio__thumb">
                            <a href="images/portfolio/5.jpg" class="thumb-link" title="Guitarist" data-size="1050x700">
                                <img src="images/portfolio/5.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Lamp
                            </h3>
                            <p class="item-folio__cat">
                                Web Design
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="icon-link"></i>
                        </a>

                        <div class="item-folio__caption">
                            <p>Los mejores evetos en ConectivomxTv..</p>
                        </div>

                    </div>
                </div> <!-- end masonry__brick -->
        
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                            
                        <div class="item-folio__thumb">
                            <a href="images/portfolio/6.jpg" class="thumb-link" title="Palmeira" data-size="1050x700">
                                <img src="images/portfolio/6.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Fuji
                            </h3>
                            <p class="item-folio__cat">
                                Web Design
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="icon-link"></i>
                        </a>

                        <div class="item-folio__caption">
                            <p>Los mejores evetos en ConectivomxTv.</p>
                        </div>

                    </div>
                </div> <!-- end masonry__brick -->
    
            </div> <!-- end masonry -->

        </div> <!-- end masonry-wrap -->

    </section> <!-- end s-works -->


    <!-- clients
    ================================================== -->
    <section id="clients" class="s-clients target-section darker" <?php echo $row['seccionExtra3'] ?>>

        <div class="grid-overlay">
            <div></div>
        </div>

        <div class="row section-header text-center narrow" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Quienes confian en nosotros</h3>
                <h1 class="display-1">Nuestros Partners</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row clients-wrap" data-aos="fade-up">
            <div class="col-twelve">
                <ul class="clients">
                    <li><a href="#0">Uber</a></li>
                    <li><a href="#0">Spotify</a></li>
                    <li><a href="#0">Grab</a></li>
                    <li><a href="#0">Dropbox</a></li>
                    <li><a href="#0">IBM</a></li>
                    <li><a href="#0">Microsoft</a></li>
                    <li><a href="#0">Xiaomi</a></li>
                    <li><a href="#0">Adidas</a></li>
                    <li><a href="#0">Mozilla</a></li>
                    <li><a href="#0">Apple</a></li>
                    <li><a href="#0">Google</a></li>
                    <li><a href="#0">Asus</a></li>
                </ul>
            </div>
        </div>

    </section> <!-- end s-clients -->


    <!-- testimonies
    ================================================== -->
    <section class="s-testimonials" <?php echo $row['seccionExtra4'] ?>>

        <div class="testimonials__icon" data-aos="fade-up"></div>

        <div class="row testimonials narrow">

            <div class="col-full testimonials__slider" data-aos="fade-up">

                <div class="testimonials__slide">
                    <p>Compartamos nuestra música y redes sociales para hacer crecer esta comunidad</p>
                    <div class="testimonials__author">
                        Alex Hernández
                        <span>CEO, HG Management</span>
                    </div>
                </div> <!-- end testimonials__slide -->

                <div class="testimonials__slide">
                    <p>Muy buena idea de un espacio para hacer llegar nuestra musica en una comunidad a la cual le gusta el arte.</p>
                    <div class="testimonials__author">
                        Peonía
                        <span>CEO, Peoníae</span>
                    </div>
                </div> <!-- end testimonials__slide -->

                <div class="testimonials__slide">
                    <p>En espera del primer programa de tv.</p>
                    <div class="testimonials__author">
                        Luz Michel
                        <span> Lic. Nutrición</span>
                    </div>
                </div> <!-- end testimonials__slide -->
                
            </div> <!-- end testimonials__slider -->

        </div> <!-- end testimonials -->

    </section> <!-- end s-testimonials -->


        <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contactanos</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div>
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form action="enviar.php" method="post">
              <div class="control-group">
                <div >
                  <label>Nombre</label>
                  <input class="form-control" name="name" id="name" type="text" placeholder="Nombre" required="required" data-validation-required-message="Favor de ingresa tu nombre" style="width: 100%">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email</label>
                  <input class="form-control" name="email" id="email" type="email" placeholder="Correo Electronico" required="required" data-validation-required-message="Favor de ingresa tu correo electronico" style="width: 100%">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Telefono</label>
                  <input class="form-control" name="phone" id="phone" type="tel" placeholder="Telefono" required="required" data-validation-required-message="Favor de ingresa tu telefono" style="width: 100%">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Mensaje</label>
                  <textarea class="form-control" name="message" id="message" rows="5" placeholder="Mensaje" required="required" data-validation-required-message="Favor de ingresa tu mensaje" style="width: 100%"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <input type="hidden" name="destinatario" id="destinatario" value="<?php echo $row['email'] ?>">
                <input type="hidden" name="para" id="para" value="<?php echo $row['name'] ?>">
               <input type="submit" value="Enviar" style="margin-left: 30%;margin-right: 30%;width: 40%">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact target-section">

            <div class="grid-overlay">
                <div></div>
            </div>

        <div class="row section-header narrow" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Mantente en Contacto</h3>
                <h1 class="display-1">Contactanos <br> <?php echo $row['subContact'] ?></h1>
            </div>
        </div> <!-- end section-header -->

   <!-- news
    ================================================== -->
  <!--Google map-->
   

    <!-- end section-map -->
        
        <div class="row contact-main" data-aos="fade-up">
            <div class="col-full">
                <p class="contact-email">
                    <a href="mailto:#0"><?php echo $row['email'] ?></a>
                </p>
                <p class="contact-address" <?php echo $row['direcionvisible'] ?>>
                <?php echo $row['address'] ?> <br>
                <?php echo $row['municipio'] ?>, <?php echo $row['estado'] ?>
                </p>
                <p class="contact-numbers">
                <?php echo $row['phone'] ?> &nbsp; <?php echo $row['phone2'] ?>
                </p>
                 <p class="contact-numbers">
                <?php echo $row['phone3'] ?> &nbsp; <?php echo $row['phone4'] ?>
                </p>

                <ul class="contact-social">
                    <li>
                        <a href="<?php echo $row['facebook'] ?>"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $row['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $row['youtube'] ?>"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $row['instagram'] ?>"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $row['page'] ?>"><i class="fab fa-dribbble"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $row['googlePlus'] ?>"><i class="fab fa-google"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d932.7554007560445!2d-103.43832826472206!3d20.749918470807614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af587a75b36d%3A0xb2607b929ebd97a!2sAv+Guadalajara%2C+Jalisco!5e0!3m2!1ses!2smx!4v1539557552672" width="60%" height="450" frameborder="0" style="border:0; margin-top: 50px;" allowfullscreen  <?php echo $row['direcionvisible'] ?>></iframe>

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full ss-copyright">
                <span>© Copyright www.conectivomx.com 2018</span> 
                <span>Design by <a href="../../index.php">Conectivomx</a></span>
            </div>
        </div>

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">Volver al Inicio</a>
        </div>
    </footer>


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
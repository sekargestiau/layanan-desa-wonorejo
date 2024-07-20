<html lang="en" class="v2fLMH8w3xgUEQcl63H9">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Get started with a premium admin dashboard layout built with Tailwind CSS and Flowbite featuring 21 example pages including charts, kanban board, mailing system, and more.">
<meta name="author" content="Themesberg">
<meta name="generator" content="Hugo 0.88.1">

<title>Tailwind CSS Dashboard - Flowbite</title>

<link rel="canonical" href="https://flowbite.com/application-ui/demo/">



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://flowbite.com/application-ui/demo/app.css">
<link rel="apple-touch-icon" sizes="180x180" href="https://flowbite.com/application-ui/demo/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://flowbite.com/application-ui/demo/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://flowbite.com/application-ui/demo/favicon-16x16.png">
<link rel="icon" type="image/png" href="https://flowbite.com/application-ui/demo/favicon.ico">
<link rel="manifest" href="https://flowbite.com/application-ui/demo/site.webmanifest">
<link rel="mask-icon" href="https://flowbite.com/application-ui/demo/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@">
<meta name="twitter:creator" content="@">
<meta name="twitter:title" content="Tailwind CSS Dashboard - Flowbite">
<meta name="twitter:description" content="Get started with a premium admin dashboard layout built with Tailwind CSS and Flowbite featuring 21 example pages including charts, kanban board, mailing system, and more.">
<meta name="twitter:image" content="https://flowbite.com/application-ui/demo">

<!-- Facebook -->
<meta property="og:url" content="https://flowbite.com/application-ui/demo/">
<meta property="og:title" content="Tailwind CSS Dashboard - Flowbite">
<meta property="og:description" content="Get started with a premium admin dashboard layout built with Tailwind CSS and Flowbite featuring 21 example pages including charts, kanban board, mailing system, and more.">
<meta property="og:type" content="website">
<meta property="og:image" content="https://flowbite.com/application-ui/demo/images/og-image.jpg">
<meta property="og:image:type" content="image/png">





<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-7H0P0BZYHB&amp;l=dataLayer&amp;cx=c"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141734189-9');
</script>


<script>
    
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('v2fLMH8w3xgUEQcl63H9');
    } else {
        document.documentElement.classList.remove('v2fLMH8w3xgUEQcl63H9')
    }
</script>
  <style id="apexcharts-css">.apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}


/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}

.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0, 0, 0, .5);
  box-shadow: 0 0 1px rgba(255, 255, 255, .5);
  -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
}


.apexcharts-inner {
  position: relative;
}

.apexcharts-text tspan {
  font-family: inherit;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}

.apexcharts-tooltip.apexcharts-theme-dark {
  color: #fff;
  background: rgba(30, 30, 30, 0.8);
}

.apexcharts-tooltip * {
  font-family: inherit;
}


.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}

.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}

.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-y-value,
.apexcharts-tooltip-text-goals-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-y-label:empty,
.apexcharts-tooltip-text-y-value:empty,
.apexcharts-tooltip-text-goals-label:empty,
.apexcharts-tooltip-text-goals-value:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-y-value,
.apexcharts-tooltip-text-goals-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-text-goals-label, 
.apexcharts-tooltip-text-goals-value {
  padding: 6px 0 5px;
}

.apexcharts-tooltip-goals-group, 
.apexcharts-tooltip-text-goals-label, 
.apexcharts-tooltip-text-goals-value {
  display: flex;
}
.apexcharts-tooltip-text-goals-label:not(:empty),
.apexcharts-tooltip-text-goals-value:not(:empty) {
  margin-top: -6px;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
  opacity: 1;
}

.apexcharts-tooltip-series-group.apexcharts-active,
.apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}

.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}

.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}

.apexcharts-tooltip-box, .apexcharts-custom-tooltip {
  padding: 4px 8px;
}

.apexcharts-tooltip-boxPlot {
  display: flex;
  flex-direction: column-reverse;
}

.apexcharts-tooltip-box>div {
  margin: 4px 0;
}

.apexcharts-tooltip-box span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after,
.apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}

.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after,
.apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after,
.apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}

.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color: #ECEFF1
}

.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after,
.apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}

.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after,
.apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after,
.apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}

.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}

.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
  opacity: 1;
}

.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs,
.apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active,
.apexcharts-ycrosshairs.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_boundingRect, .svg_select_points_rot {
  pointer-events: none;
  opacity: 0;
  visibility: hidden;
}
.apexcharts-selection-rect + g .svg_select_boundingRect,
.apexcharts-selection-rect + g .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}

.apexcharts-selection-rect + g .svg_select_points_l,
.apexcharts-selection-rect + g .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
}

.svg_select_points {
  fill: #efefef;
  stroke: #333;
  rx: 2;
}

.apexcharts-svg.apexcharts-zoomable.hovering-zoom {
  cursor: crosshair
}

.apexcharts-svg.apexcharts-zoomable.hovering-pan {
  cursor: move
}

.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}

.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}

.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
  fill: #008FFB;
}

.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon,
.apexcharts-menu-icon {
  position: relative;
}

.apexcharts-reset-icon {
  margin-left: 5px;
}

.apexcharts-zoom-icon,
.apexcharts-reset-icon,
.apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon {
  transform: scale(0.7)
}

.apexcharts-zoomout-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}

.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}

.apexcharts-pan-icon.apexcharts-selected svg {
  stroke: #008FFB;
}

.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}

.apexcharts-theme-light .apexcharts-menu-item:hover {
  background: #eee;
}

.apexcharts-theme-dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {
  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels,
.apexcharts-datalabel,
.apexcharts-datalabel-label,
.apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-gridline,
.apexcharts-annotation-rect,
.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line,
.apexcharts-zoom-rect,
.apexcharts-toolbar svg,
.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-radar-series path,
.apexcharts-radar-series polygon {
  pointer-events: none;
}


/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}


/* Resize generated styles */

@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers,
.resize-triggers>div,
.contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers>div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
}</style></head>
  <body class="jtAJHOc7mn7b4IKRO59D _1jTZ8KXRZul60S6czNi">
    


    
<nav class="_LPVUrp9Uina5fcERqWC taX5bm_AMmfFooXEd5Ny t6gkcSf0Bt4MLItXvDJ_ _Ybd3WwuTVljUT4vEaM3 EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V _1jTZ8KXRZul60S6czNi _fGhMnSfYmaGrv7DvZ00">
  <div class="i8v96MUlFwGv9qJUkAx7 _Cj_M6jt2eLjDgkBBNgI wekyMYEi8zByMSCgzHQ_ W3VHmE2jAiCd1MN9SdsH">
    <div class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2">
      <div class="YRrCJSr_j5nopfm4duUc _HgeI6Dx9I__pBEYsPz0 Q_jg_EPdNf9eDMn1mLI2">
        <button id="toggleSidebar" aria-expanded="false" aria-controls="sidebar" class="_SmdlCf6eUKB_V9S5IDj FJRldeiG2gFGZfuKgp88 R9nujHypnXyuHrBww9QK iyrgFoJBjXFzXLcq5BhU Y3FxyuXtj2gecrGXvLEI SA5DoMHfwOFtY4h_qzuM N3Gb8rTHzm26fWGpfaqP ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW OPrb_iG5WDy_7F05BDOX">
          <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="FJRldeiG2gFGZfuKgp88 fhCwost7CSNRc2WSHLFW iyrgFoJBjXFzXLcq5BhU Y3FxyuXtj2gecrGXvLEI SA5DoMHfwOFtY4h_qzuM F34pkf_DAj2DlPtfAEMV ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 zm4DJynLOnO_thJwVc_K _017t4M_yp_4rNozqBgD _q0p_O8QLU1paqtuqmI2 XGQIxPVjm_m7D0aLHB7Y yChACvAr1v8czJ2VO22j XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
          <svg id="toggleSidebarMobileHamburger" class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr _SmdlCf6eUKB_V9S5IDj" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          <svg id="toggleSidebarMobileClose" class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <a href="https://flowbite.com/application-ui/demo/" class="YRrCJSr_j5nopfm4duUc YcuQRAYEep0W4L0BFDfG">
          <img src="https://flowbite.com/application-ui/demo/images/logo.svg" class="R9nujHypnXyuHrBww9QK mWvJQyBFgwNGEt0h7bSP" alt="FlowBite Logo">
          <span class="_rCfAafI7lqYALljdSxM q1oXbofRCOhVhOSB8tiU yM_AorRf2jSON3pDsdrz BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">Flowbite</span>
        </a>
        <form action="#" method="GET" class="_SmdlCf6eUKB_V9S5IDj Yv6MasvLpkmInnA0LqbC wA_epBjW1krEYDpD4skr">
          <label for="topbar-search" class="_DVAfiyo21kM68EUVzEQ">Search</label>
          <div class="ahOqFrhzLjivRe8a1kX_ iRFVFKvV59EjIwjCM62m skGrjyHRlWNG_cHY40Cg">
            <div class="YRrCJSr_j5nopfm4duUc pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua TYmpscr1PwuC1dpYXDpM Q_jg_EPdNf9eDMn1mLI2 aa_y6SeayB9fNgBD5ROa qArZHwmmp1ULq_EXc7FF">
              <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" name="email" id="topbar-search" class="jtAJHOc7mn7b4IKRO59D pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk __9sbu0yrzdhGIkLWNXl gx_pYWtAG2cJIqhquLbx mveJTCIb2WII7J4sY22F GdTcGtoKP5_bET3syLDl LceKfSImrGKQrtDGkpBV _Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ phuq9OcM4E3Gy9MJy0RC olxDi3yL6f0gpdsOFDhx jqg6J89cvxmDiFpnV56r Mmx5lX7HVdrWCgh3EpTP H7KQDhgKsqZaTUouEUQL OyABRrnTV_kvHV7dJ0uE KpCMWe32PQyrSFbZVput q6szSHqGtBufkToFe_s5" placeholder="Search">
          </div>
        </form>
      </div>
      <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
          
          <button id="toggleSidebarMobileSearch" type="button" class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F F34pkf_DAj2DlPtfAEMV ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
            <span class="_DVAfiyo21kM68EUVzEQ">Search</span>
            
            <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
          </button>
          
          <button type="button" data-dropdown-toggle="notification-dropdown" class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW OPrb_iG5WDy_7F05BDOX">
            <span class="_DVAfiyo21kM68EUVzEQ">View notifications</span>
            
            <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
          </button>
          
          <div class="_SmdlCf6eUKB_V9S5IDj wBVMFkIGfrKshbvi2gS1 bXWhrLpoBVu4aMI8XQxr Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th ZhzOGpbwY0R4TKKYr5pG d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH cl0mFvgyErwMYM5aRkru PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r" id="notification-dropdown" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(547.2px, 62.4px, 0px);">
            <div class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe ijrOHNoSVGATsWYKl4Id rYHHksRBEMl_guI3q0UQ jtAJHOc7mn7b4IKRO59D jqg6J89cvxmDiFpnV56r XIIs8ZOri3wm8Wnj9N_y">
                Notifications
            </div>
            <div>
              <a href="#" class="YRrCJSr_j5nopfm4duUc i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal Mmx5lX7HVdrWCgh3EpTP">
                <div class="VQS2tmQ_zFyBOC2tkmto">
                  <img class="Rr_S4jo1he4sYSgq5LE_ TZANVyZaogC2vtqxZ7oo RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/bonnie-green.png" alt="Jese image">
                  <div class="YRrCJSr_j5nopfm4duUc pq2JRWtiWcwYnw3xueNl Nm7xMnguzOx6J5Ao7yCU Q_jg_EPdNf9eDMn1mLI2 MNgnvsy4e42uHuBwxxJg XZQ1UNoAcQMIV4si4Jk_ ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o g40_g3BQzYCOX5eZADgY _fGhMnSfYmaGrv7DvZ00">
                    <svg class="nXHmt07_6T25v6kTjTzf bHAdXFPNFeidKlaOkKvl y6GKdvUrd7vp_pxsFb57" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                  </div>
                </div>
                <div class="aa_y6SeayB9fNgBD5ROa t6gkcSf0Bt4MLItXvDJ_">
                    <div class="PeR2JZ9BZHYIH8Ea3F36 _43MO1gcdi2Y0RJW1uHL c8dCx6gnV43hTOLV6ks5 iPpA4AtZi__uabBE5IKW XIIs8ZOri3wm8Wnj9N_y">New message from <span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Bonnie Green</span>: "Hey, what's up? All set for the presentation?"</div>
                    <div class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">a few moments ago</div>
                </div>
              </a>
              <a href="#" class="YRrCJSr_j5nopfm4duUc i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal Mmx5lX7HVdrWCgh3EpTP">
                <div class="VQS2tmQ_zFyBOC2tkmto">
                  <img class="Rr_S4jo1he4sYSgq5LE_ TZANVyZaogC2vtqxZ7oo RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/jese-leos.png" alt="Jese image">
                  <div class="YRrCJSr_j5nopfm4duUc pq2JRWtiWcwYnw3xueNl Nm7xMnguzOx6J5Ao7yCU Q_jg_EPdNf9eDMn1mLI2 MNgnvsy4e42uHuBwxxJg XZQ1UNoAcQMIV4si4Jk_ ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG foDHZclRWUf2bqma2a8U RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o _fGhMnSfYmaGrv7DvZ00">
                    <svg class="nXHmt07_6T25v6kTjTzf bHAdXFPNFeidKlaOkKvl y6GKdvUrd7vp_pxsFb57" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path></svg>
                  </div>
                </div>
                <div class="aa_y6SeayB9fNgBD5ROa t6gkcSf0Bt4MLItXvDJ_">
                    <div class="PeR2JZ9BZHYIH8Ea3F36 _43MO1gcdi2Y0RJW1uHL c8dCx6gnV43hTOLV6ks5 iPpA4AtZi__uabBE5IKW XIIs8ZOri3wm8Wnj9N_y"><span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Jese leos</span> and <span class="ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">5 others</span> started following you.</div>
                    <div class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">10 minutes ago</div>
                </div>
              </a>
              <a href="#" class="YRrCJSr_j5nopfm4duUc i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal Mmx5lX7HVdrWCgh3EpTP">
                <div class="VQS2tmQ_zFyBOC2tkmto">
                  <img class="Rr_S4jo1he4sYSgq5LE_ TZANVyZaogC2vtqxZ7oo RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/joseph-mcfall.png" alt="Joseph image">
                  <div class="YRrCJSr_j5nopfm4duUc pq2JRWtiWcwYnw3xueNl Nm7xMnguzOx6J5Ao7yCU Q_jg_EPdNf9eDMn1mLI2 MNgnvsy4e42uHuBwxxJg XZQ1UNoAcQMIV4si4Jk_ ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG SdPDrbResNmgnA0L4Iki RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o _fGhMnSfYmaGrv7DvZ00">
                    <svg class="nXHmt07_6T25v6kTjTzf bHAdXFPNFeidKlaOkKvl y6GKdvUrd7vp_pxsFb57" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                  </div>
                </div>
                <div class="aa_y6SeayB9fNgBD5ROa t6gkcSf0Bt4MLItXvDJ_">
                    <div class="PeR2JZ9BZHYIH8Ea3F36 _43MO1gcdi2Y0RJW1uHL c8dCx6gnV43hTOLV6ks5 iPpA4AtZi__uabBE5IKW XIIs8ZOri3wm8Wnj9N_y"><span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Joseph Mcfall</span> and <span class="ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">141 others</span> love your story. See it and view more stories.</div>
                    <div class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">44 minutes ago</div>
                </div>
              </a>
              <a href="#" class="YRrCJSr_j5nopfm4duUc i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal Mmx5lX7HVdrWCgh3EpTP">
                <div class="VQS2tmQ_zFyBOC2tkmto">
                  <img class="Rr_S4jo1he4sYSgq5LE_ TZANVyZaogC2vtqxZ7oo RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/leslie-livingston.png" alt="Leslie image">
                  <div class="YRrCJSr_j5nopfm4duUc pq2JRWtiWcwYnw3xueNl Nm7xMnguzOx6J5Ao7yCU Q_jg_EPdNf9eDMn1mLI2 MNgnvsy4e42uHuBwxxJg XZQ1UNoAcQMIV4si4Jk_ ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG _8jNXfz935bbH_fAUIpN RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o _fGhMnSfYmaGrv7DvZ00">
                    <svg class="nXHmt07_6T25v6kTjTzf bHAdXFPNFeidKlaOkKvl y6GKdvUrd7vp_pxsFb57" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                  </div>
                </div>
                <div class="aa_y6SeayB9fNgBD5ROa t6gkcSf0Bt4MLItXvDJ_">
                    <div class="PeR2JZ9BZHYIH8Ea3F36 _43MO1gcdi2Y0RJW1uHL c8dCx6gnV43hTOLV6ks5 iPpA4AtZi__uabBE5IKW XIIs8ZOri3wm8Wnj9N_y"><span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Leslie Livingston</span> mentioned you in a comment: <span class="ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ fZf6W_ZtzEh6EEqmWMA9">@bonnie.green</span> what do you say?</div>
                    <div class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">1 hour ago</div>
                </div>
              </a>
              <a href="#" class="YRrCJSr_j5nopfm4duUc i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                <div class="VQS2tmQ_zFyBOC2tkmto">
                  <img class="Rr_S4jo1he4sYSgq5LE_ TZANVyZaogC2vtqxZ7oo RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/robert-brown.png" alt="Robert image">
                  <div class="YRrCJSr_j5nopfm4duUc pq2JRWtiWcwYnw3xueNl Nm7xMnguzOx6J5Ao7yCU Q_jg_EPdNf9eDMn1mLI2 MNgnvsy4e42uHuBwxxJg XZQ1UNoAcQMIV4si4Jk_ ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG _I92_RswYrnpS0B5dKZO RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o _fGhMnSfYmaGrv7DvZ00">
                    <svg class="nXHmt07_6T25v6kTjTzf bHAdXFPNFeidKlaOkKvl y6GKdvUrd7vp_pxsFb57" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                  </div>
                </div>
                <div class="aa_y6SeayB9fNgBD5ROa t6gkcSf0Bt4MLItXvDJ_">
                    <div class="PeR2JZ9BZHYIH8Ea3F36 _43MO1gcdi2Y0RJW1uHL c8dCx6gnV43hTOLV6ks5 iPpA4AtZi__uabBE5IKW XIIs8ZOri3wm8Wnj9N_y"><span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Robert Brown</span> posted a new video: Glassmorphism - learn how to implement the new design trend.</div>
                    <div class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">3 hours ago</div>
                </div>
              </a>
            </div>
            <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL ijrOHNoSVGATsWYKl4Id __9sbu0yrzdhGIkLWNXl jtAJHOc7mn7b4IKRO59D _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE Eu6DAInc_AYT0KJ7LY1L">
                <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                  <svg class="fhCwost7CSNRc2WSHLFW ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                  View all
                </div>
            </a>
          </div>
          
          <button type="button" data-dropdown-toggle="apps-dropdown" class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW OPrb_iG5WDy_7F05BDOX">
            <span class="_DVAfiyo21kM68EUVzEQ">View notifications</span>
            
            <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
          </button>
          
          <div class="_SmdlCf6eUKB_V9S5IDj wBVMFkIGfrKshbvi2gS1 bXWhrLpoBVu4aMI8XQxr Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th ZhzOGpbwY0R4TKKYr5pG d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH cl0mFvgyErwMYM5aRkru jqg6J89cvxmDiFpnV56r PoeKYEQfG4WfmL9xM6vu" id="apps-dropdown" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(587.2px, 62.4px, 0px);">
            <div class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe ijrOHNoSVGATsWYKl4Id rYHHksRBEMl_guI3q0UQ jtAJHOc7mn7b4IKRO59D jqg6J89cvxmDiFpnV56r XIIs8ZOri3wm8Wnj9N_y">
                Apps
            </div>
            <div class="xCPtuxM4_gihvpPwv9bX VWCEsSASYzme_Objbtiq iHPddplqYvrN6qWgvntn _wYiJGbRZyFZeCc8y7Sf">
              <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Sales</div>
              </a>
              <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Users</div>
              </a>
              <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"></path></svg>
                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Inbox</div>
              </a>
              <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
                  <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Profile</div>
              </a>
              <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Settings</div>
              </a>
              <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path><path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Products</div>
              </a>
              <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path></svg>
                  <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Pricing</div>
              </a>
              <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm2.5 3a1.5 1.5 0 100 3 1.5 1.5 0 000-3zm6.207.293a1 1 0 00-1.414 0l-6 6a1 1 0 101.414 1.414l6-6a1 1 0 000-1.414zM12.5 10a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" clip-rule="evenodd"></path></svg>
                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Billing</div>
              </a>
              <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg>
                  <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Logout</div>
              </a>
            </div>
          </div>
          <button id="theme-toggle" data-tooltip-target="tooltip-toggle" type="button" class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y _7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 _6wdnQrxT_dGdAdNk5AQ yChACvAr1v8czJ2VO22j mveJTCIb2WII7J4sY22F c8dCx6gnV43hTOLV6ks5 olxDi3yL6f0gpdsOFDhx">
            <svg id="theme-toggle-dark-icon" class="_SmdlCf6eUKB_V9S5IDj ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
            <svg id="theme-toggle-light-icon" class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
          </button>
          <div id="tooltip-toggle" role="tooltip" class="VPGGthdu3cy_ZP7AL7dt pq2JRWtiWcwYnw3xueNl ZBSHeVK3dmgzHTRX3hLO QhmQ_v3mmDFIP9VaVOfb b9aD6g2qw84oyZNsMO8j _Cj_M6jt2eLjDgkBBNgI c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 foDHZclRWUf2bqma2a8U mveJTCIb2WII7J4sY22F fzhbbDQ686T8arwvi_bJ Db4Wzva4DMepJJiQLY7M mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf H78G_4yayxs5C3xdFbnK" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(555.2px, 60px, 0px);">
              Toggle dark mode
              <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow="" style="position: absolute; left: 0px; transform: translate3d(68.8px, 0px, 0px);"></div>
          </div>
          
          <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 oA7zcT_42jVeFuWTXQnq">
            <div>
              <button type="button" class="YRrCJSr_j5nopfm4duUc c8dCx6gnV43hTOLV6ks5 RwT9RGumnuqUj7lx7fdb RpVwy4sO7Asb86CncKJ_ _dylIDxYTN3qgvD4U597 KLtw3_OqL54e_zEQU_yi ICV24pqO8p1LJm4GEOgS" id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
                <span class="_DVAfiyo21kM68EUVzEQ">Open user menu</span>
                <img class="yNvZ2JlUalNo5uPPv1sf mWvJQyBFgwNGEt0h7bSP RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/neil-sims.png" alt="user photo">
              </button>
            </div>
            
            <div class="_SmdlCf6eUKB_V9S5IDj Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r PoeKYEQfG4WfmL9xM6vu" id="dropdown-2" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(675.2px, 58.4px, 0px);">
              <div class="i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY" role="none">
                <p class="c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" role="none">
                  Neil Sims
                </p>
                <p class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl vfNYjqjYMlN1XskEucCt EJIoL6514Ry8r7nh011L" role="none">
                  neil.sims@flowbite.com
                </p>
              </div>
              <ul class="_bVaO2NfVVP88LtHWYlv" role="none">
                <li>
                  <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 EJIoL6514Ry8r7nh011L RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 EJIoL6514Ry8r7nh011L RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Settings</a>
                </li>
                <li>
                  <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 EJIoL6514Ry8r7nh011L RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Earnings</a>
                </li>
                <li>
                  <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 EJIoL6514Ry8r7nh011L RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Sign out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>
<div class="YRrCJSr_j5nopfm4duUc wfz9oKCp_svYP9oWrZuR wBVMFkIGfrKshbvi2gS1 jtAJHOc7mn7b4IKRO59D h8KYXnua2NT4kTVzieom">

  <aside id="sidebar" class="YRrCJSr_j5nopfm4duUc _LPVUrp9Uina5fcERqWC uQByIGHtHssL9HoPQXR4 TYmpscr1PwuC1dpYXDpM bXWhrLpoBVu4aMI8XQxr e8VqoQNK0mbkRFDL3LMV VQS2tmQ_zFyBOC2tkmto wfz9oKCp_svYP9oWrZuR nUVQqdd_RQjvvOrcRIpD uLPch_bqyJDXwe5tynMV gZ3KuFw1JESHhOJhjT8j _YtPVN_LlqV6t4rglMAI bNOx3Wgl24m9GoljaM1X eVV36cVCqgCWHoUvdy_7" aria-label="Sidebar">
  <div class="YRrCJSr_j5nopfm4duUc ahOqFrhzLjivRe8a1kX_ e8VqoQNK0mbkRFDL3LMV _74lpPUMEtHf6F0_fjLe Yr1oeNFASSARgkvkNsPa qG4UENFSlNnopb6lM8a8 _Ybd3WwuTVljUT4vEaM3 hEIh0_vxSXD_ZBXYxnd0 qUWbS_LTZujDB4XCd11V _1jTZ8KXRZul60S6czNi _fGhMnSfYmaGrv7DvZ00">
    <div class="YRrCJSr_j5nopfm4duUc _lTTGxW9MVI40FyDCtmr e8VqoQNK0mbkRFDL3LMV _74lpPUMEtHf6F0_fjLe LVS5VhNiuUNp2iESGVfr pjVv_HvtzX_QkbymyvoG">
      <div class="_74lpPUMEtHf6F0_fjLe _Cj_M6jt2eLjDgkBBNgI wezTbYJgxYJp5ZDqX67N _Ybd3WwuTVljUT4vEaM3 Zy1Pypi71Xu6guex6urN NIAblPiyeuYQ0zW671xb _1jTZ8KXRZul60S6czNi XpuPpk9eXhVCrleKmXDr">
        <ul class="hwCTzGuw3Wvg2a388A7l TVHgSaRh3muGJct_epr9">
          <li>
            <form action="#" method="GET" class="F34pkf_DAj2DlPtfAEMV">
              <label for="mobile-search" class="_DVAfiyo21kM68EUVzEQ">Search</label>
              <div class="ahOqFrhzLjivRe8a1kX_">
                <div class="YRrCJSr_j5nopfm4duUc pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua TYmpscr1PwuC1dpYXDpM Q_jg_EPdNf9eDMn1mLI2 aa_y6SeayB9fNgBD5ROa qArZHwmmp1ULq_EXc7FF">
                  <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG PeR2JZ9BZHYIH8Ea3F36" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" name="email" id="mobile-search" class="jtAJHOc7mn7b4IKRO59D pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk __9sbu0yrzdhGIkLWNXl c8dCx6gnV43hTOLV6ks5 mveJTCIb2WII7J4sY22F GdTcGtoKP5_bET3syLDl LceKfSImrGKQrtDGkpBV _Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ phuq9OcM4E3Gy9MJy0RC olxDi3yL6f0gpdsOFDhx jqg6J89cvxmDiFpnV56r Mmx5lX7HVdrWCgh3EpTP H7KQDhgKsqZaTUouEUQL duXR6Hcu_44X_243WcOl KpCMWe32PQyrSFbZVput q6szSHqGtBufkToFe_s5" placeholder="Search">
              </div>
            </form>
          </li>
          <li>
            <a href="https://flowbite.com/application-ui/demo/" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 BpcA_ZTX79XDgSc71n2v duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX">
                <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr PeR2JZ9BZHYIH8Ea3F36 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                <span class="oA7zcT_42jVeFuWTXQnq F34pkf_DAj2DlPtfAEMV ItdDtcpCIGVyCtD9QqGA" sidebar-toggle-item="">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="https://flowbite.com/application-ui/demo/kanban/" class="d3C8uAdJKNl1jzfE9ynq __9sbu0yrzdhGIkLWNXl _43MO1gcdi2Y0RJW1uHL mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 BpcA_ZTX79XDgSc71n2v duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX">
                <svg class="VQS2tmQ_zFyBOC2tkmto YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr PeR2JZ9BZHYIH8Ea3F36 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                <span class="_74lpPUMEtHf6F0_fjLe oA7zcT_42jVeFuWTXQnq BHrWGjM1Iab_fAz0_91H F34pkf_DAj2DlPtfAEMV ItdDtcpCIGVyCtD9QqGA" sidebar-toggle-item="">Kanban</span>
            </a>
          </li>
          <li>
            <a href="https://flowbite.com/application-ui/demo/mailing/inbox/" class="d3C8uAdJKNl1jzfE9ynq __9sbu0yrzdhGIkLWNXl _43MO1gcdi2Y0RJW1uHL mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 BpcA_ZTX79XDgSc71n2v duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX">
                <svg class="VQS2tmQ_zFyBOC2tkmto YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr PeR2JZ9BZHYIH8Ea3F36 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                <span class="_74lpPUMEtHf6F0_fjLe oA7zcT_42jVeFuWTXQnq BHrWGjM1Iab_fAz0_91H F34pkf_DAj2DlPtfAEMV ItdDtcpCIGVyCtD9QqGA" sidebar-toggle-item="">Inbox</span>
                <span class="_k0lTW0vvzboctTxDi2R Nm7xMnguzOx6J5Ao7yCU Q_jg_EPdNf9eDMn1mLI2 sQaK4IH7BIQSgBTGX8Pe oA7zcT_42jVeFuWTXQnq ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe RpVwy4sO7Asb86CncKJ_ mbOxN7eW74XygTKQC_r3 YccXYy5sNIz6FJlLxw0D F34pkf_DAj2DlPtfAEMV ItdDtcpCIGVyCtD9QqGA" sidebar-toggle-item="">3</span>
            </a>
          </li>
          
          <li>
            <button type="button" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 t6gkcSf0Bt4MLItXvDJ_ d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX" aria-controls="dropdown-ecommerce" data-collapse-toggle="dropdown-ecommerce">
                <svg class="VQS2tmQ_zFyBOC2tkmto YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr PeR2JZ9BZHYIH8Ea3F36 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                <span class="_74lpPUMEtHf6F0_fjLe oA7zcT_42jVeFuWTXQnq upQp7iWehfaU8VTbfx_w BHrWGjM1Iab_fAz0_91H F34pkf_DAj2DlPtfAEMV ItdDtcpCIGVyCtD9QqGA" sidebar-toggle-item="">E-commerce</span>
                <svg sidebar-toggle-item="" class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr F34pkf_DAj2DlPtfAEMV ItdDtcpCIGVyCtD9QqGA" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-ecommerce" class="TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j _SmdlCf6eUKB_V9S5IDj">
              <li>
                <a href="https://flowbite.com/application-ui/demo/e-commerce/products/" class="d3C8uAdJKNl1jzfE9ynq __9sbu0yrzdhGIkLWNXl _43MO1gcdi2Y0RJW1uHL mveJTCIb2WII7J4sY22F YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX RZmKBZs1E1eXw8vkE6jY"><span class="_SmdlCf6eUKB_V9S5IDj">Products</span><span class="">P</span></a>
              </li>
              <li>
                <a href="https://flowbite.com/application-ui/demo/e-commerce/billing/" class="d3C8uAdJKNl1jzfE9ynq __9sbu0yrzdhGIkLWNXl _43MO1gcdi2Y0RJW1uHL mveJTCIb2WII7J4sY22F YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX RZmKBZs1E1eXw8vkE6jY"><span class="_SmdlCf6eUKB_V9S5IDj">Billing</span><span class="">B</span></a>
              </li>
              <li>
                <a href="https://flowbite.com/application-ui/demo/e-commerce/invoice/" class="d3C8uAdJKNl1jzfE9ynq __9sbu0yrzdhGIkLWNXl _43MO1gcdi2Y0RJW1uHL mveJTCIb2WII7J4sY22F YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX RZmKBZs1E1eXw8vkE6jY"><span class="_SmdlCf6eUKB_V9S5IDj">Invoice</span><span class="">I</span></a>
              </li>
            </ul>
          </li>
          <li>
            <button type="button" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 t6gkcSf0Bt4MLItXvDJ_ d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX" aria-controls="dropdown-users" data-collapse-toggle="dropdown-users">
                <svg class="VQS2tmQ_zFyBOC2tkmto YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr PeR2JZ9BZHYIH8Ea3F36 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
                <span class="_74lpPUMEtHf6F0_fjLe oA7zcT_42jVeFuWTXQnq upQp7iWehfaU8VTbfx_w BHrWGjM1Iab_fAz0_91H F34pkf_DAj2DlPtfAEMV ItdDtcpCIGVyCtD9QqGA" sidebar-toggle-item="">Users</span>
                <svg sidebar-toggle-item="" class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr F34pkf_DAj2DlPtfAEMV ItdDtcpCIGVyCtD9QqGA" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-users" class="TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j _SmdlCf6eUKB_V9S5IDj">
              <li>
                <a href="https://flowbite.com/application-ui/demo/users/list/" class="d3C8uAdJKNl1jzfE9ynq __9sbu0yrzdhGIkLWNXl _43MO1gcdi2Y0RJW1uHL mveJTCIb2WII7J4sY22F YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX RZmKBZs1E1eXw8vkE6jY"><span class="_SmdlCf6eUKB_V9S5IDj">Users list</span><span class="">U</span></a>
              </li>
              <li>
                <a href="https://flowbite.com/application-ui/demo/users/profile/" class="d3C8uAdJKNl1jzfE9ynq __9sbu0yrzdhGIkLWNXl _43MO1gcdi2Y0RJW1uHL mveJTCIb2WII7J4sY22F YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX RZmKBZs1E1eXw8vkE6jY"><span class="_SmdlCf6eUKB_V9S5IDj">Profile</span><span class="">P</span></a>
              </li>
              <li>
                <a href="https://flowbite.com/application-ui/demo/users/feed/" class="d3C8uAdJKNl1jzfE9ynq __9sbu0yrzdhGIkLWNXl _43MO1gcdi2Y0RJW1uHL mveJTCIb2WII7J4sY22F YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX RZmKBZs1E1eXw8vkE6jY"><span class="_SmdlCf6eUKB_V9S5IDj">Feed</span><span class="">F</span></a>
              </li>
              <li>
                <a href="https://flowbite.com/application-ui/demo/users/settings/" class="d3C8uAdJKNl1jzfE9ynq __9sbu0yrzdhGIkLWNXl _43MO1gcdi2Y0RJW1uHL mveJTCIb2WII7J4sY22F YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX RZmKBZs1E1eXw8vkE6jY"><span class="_SmdlCf6eUKB_V9S5IDj">Settings</span><span class="">S</span></a>
              </li>
            </ul>
          </li>
          <li>
            <button type="button" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 t6gkcSf0Bt4MLItXvDJ_ d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX" aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                <svg class="VQS2tmQ_zFyBOC2tkmto YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr PeR2JZ9BZHYIH8Ea3F36 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd"></path></svg>
                <span class="_74lpPUMEtHf6F0_fjLe oA7zcT_42jVeFuWTXQnq upQp7iWehfaU8VTbfx_w BHrWGjM1Iab_fAz0_91H F34pkf_DAj2DlPtfAEMV ItdDtcpCIGVyCtD9QqGA" sidebar-toggle-item="">Pages</span>
                <svg sidebar-toggle-item="" class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr F34pkf_DAj2DlPtfAEMV ItdDtcpCIGVyCtD9QqGA" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-pages" class="_SmdlCf6eUKB_V9S5IDj b9aD6g2qw84oyZNsMO8j TVHgSaRh3muGJct_epr9">
              <li>
                <a href="https://flowbite.com/application-ui/demo/pages/pricing/" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX RZmKBZs1E1eXw8vkE6jY"><span class="_SmdlCf6eUKB_V9S5IDj">Pricing</span><span class="">P</span></a>
              </li>
              <li>
                <a href="https://flowbite.com/application-ui/demo/pages/maintenance/" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX RZmKBZs1E1eXw8vkE6jY"><span class="_SmdlCf6eUKB_V9S5IDj">Maintenance</span><span class="">M</span></a>
              </li>
              <li>
                <a href="https://flowbite.com/application-ui/demo/pages/404/" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX RZmKBZs1E1eXw8vkE6jY"><span class="_SmdlCf6eUKB_V9S5IDj">404 not found</span><span class="">4</span></a>
              </li>
              <li>
                <a href="https://flowbite.com/application-ui/demo/pages/500/" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX RZmKBZs1E1eXw8vkE6jY"><span class="_SmdlCf6eUKB_V9S5IDj">500 server error</span><span class="">5</span></a>
              </li>
            </ul>
          </li>
          <li>
            <button type="button" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 t6gkcSf0Bt4MLItXvDJ_ d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX" aria-controls="dropdown-auth" data-collapse-toggle="dropdown-auth">
                <svg class="VQS2tmQ_zFyBOC2tkmto YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr PeR2JZ9BZHYIH8Ea3F36 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                <span class="_74lpPUMEtHf6F0_fjLe oA7zcT_42jVeFuWTXQnq upQp7iWehfaU8VTbfx_w BHrWGjM1Iab_fAz0_91H F34pkf_DAj2DlPtfAEMV ItdDtcpCIGVyCtD9QqGA" sidebar-toggle-item="">Authentication</span>
                <svg sidebar-toggle-item="" class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr F34pkf_DAj2DlPtfAEMV ItdDtcpCIGVyCtD9QqGA" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-auth" class="_SmdlCf6eUKB_V9S5IDj b9aD6g2qw84oyZNsMO8j TVHgSaRh3muGJct_epr9">
              <li>
                <a href="https://flowbite.com/application-ui/demo/authentication/sign-in/" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX RZmKBZs1E1eXw8vkE6jY"><span class="_SmdlCf6eUKB_V9S5IDj">Sign in</span><span class="">S</span></a>
              </li>
              <li>
                <a href="https://flowbite.com/application-ui/demo/authentication/sign-up/" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX RZmKBZs1E1eXw8vkE6jY"><span class="_SmdlCf6eUKB_V9S5IDj">Sign up</span><span class="">S</span></a>
              </li>
              <li>
                <a href="https://flowbite.com/application-ui/demo/authentication/forgot-password/" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX RZmKBZs1E1eXw8vkE6jY"><span class="_SmdlCf6eUKB_V9S5IDj">Forgot password</span><span class="">F</span></a>
              </li>
              <li>
                <a href="https://flowbite.com/application-ui/demo/authentication/reset-password/" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX RZmKBZs1E1eXw8vkE6jY"><span class="_SmdlCf6eUKB_V9S5IDj">Reset password</span><span class="">R</span></a>
              </li>
              <li>
                <a href="https://flowbite.com/application-ui/demo/authentication/profile-lock/" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j BpcA_ZTX79XDgSc71n2v _7KA5gD55t2lxf9Jkj20 duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX RZmKBZs1E1eXw8vkE6jY"><span class="_SmdlCf6eUKB_V9S5IDj">Profile lock</span><span class="">P</span></a>
              </li>
            </ul>
          </li>
        </ul>
        <div class="RLVemQvbW8bmzNf3KoDP TVHgSaRh3muGJct_epr9">
          <a href="https://flowbite.com/docs/getting-started/introduction/" target="_blank" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _7KA5gD55t2lxf9Jkj20 BpcA_ZTX79XDgSc71n2v duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX">
            <svg class="VQS2tmQ_zFyBOC2tkmto YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr PeR2JZ9BZHYIH8Ea3F36 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
            <span class="oA7zcT_42jVeFuWTXQnq F34pkf_DAj2DlPtfAEMV ItdDtcpCIGVyCtD9QqGA" sidebar-toggle-item="">Docs</span>
          </a>
          <a href="https://flowbite.com/docs/components/alerts/" target="_blank" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _7KA5gD55t2lxf9Jkj20 BpcA_ZTX79XDgSc71n2v duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX">
            <svg class="VQS2tmQ_zFyBOC2tkmto YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr PeR2JZ9BZHYIH8Ea3F36 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
            <span class="oA7zcT_42jVeFuWTXQnq F34pkf_DAj2DlPtfAEMV ItdDtcpCIGVyCtD9QqGA" sidebar-toggle-item="">Components</span>
          </a>
          <a href="https://github.com/themesberg/flowbite/issues" target="_blank" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _7KA5gD55t2lxf9Jkj20 BpcA_ZTX79XDgSc71n2v duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX">
            <svg class="VQS2tmQ_zFyBOC2tkmto YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr PeR2JZ9BZHYIH8Ea3F36 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
            <span class="oA7zcT_42jVeFuWTXQnq F34pkf_DAj2DlPtfAEMV ItdDtcpCIGVyCtD9QqGA" sidebar-toggle-item="">Help</span>
          </a>
        </div>
      </div>
    </div>
    <div class="_SmdlCf6eUKB_V9S5IDj pq2JRWtiWcwYnw3xueNl VuoyqWQkm5MTiE515qz8 TYmpscr1PwuC1dpYXDpM Nm7xMnguzOx6J5Ao7yCU t6gkcSf0Bt4MLItXvDJ_ _YtPVN_LlqV6t4rglMAI e8VqoQNK0mbkRFDL3LMV UYOSZJ1_pv3B5nt1ujCP FJRldeiG2gFGZfuKgp88" sidebar-bottom-menu="">
      <a href="#" class="_k0lTW0vvzboctTxDi2R Nm7xMnguzOx6J5Ao7yCU FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 Y3FxyuXtj2gecrGXvLEI SA5DoMHfwOFtY4h_qzuM ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
        <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path></svg>
      </a>
      <a href="https://flowbite.com/application-ui/demo/users/settings/" data-tooltip-target="tooltip-settings" class="_k0lTW0vvzboctTxDi2R Nm7xMnguzOx6J5Ao7yCU FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 Y3FxyuXtj2gecrGXvLEI SA5DoMHfwOFtY4h_qzuM ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
        <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
      </a>
      <div id="tooltip-settings" role="tooltip" class="VPGGthdu3cy_ZP7AL7dt pq2JRWtiWcwYnw3xueNl ZBSHeVK3dmgzHTRX3hLO QhmQ_v3mmDFIP9VaVOfb b9aD6g2qw84oyZNsMO8j _Cj_M6jt2eLjDgkBBNgI c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 foDHZclRWUf2bqma2a8U mveJTCIb2WII7J4sY22F fzhbbDQ686T8arwvi_bJ Db4Wzva4DMepJJiQLY7M mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf H78G_4yayxs5C3xdFbnK jqg6J89cvxmDiFpnV56r" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 8px, 0px);" data-popper-reference-hidden="" data-popper-escaped="">
        Settings page
          <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow="" style="position: absolute; left: 0px; transform: translate3d(0px, 0px, 0px);"></div>
      </div>
      <button type="button" data-dropdown-toggle="language-dropdown" class="_k0lTW0vvzboctTxDi2R Nm7xMnguzOx6J5Ao7yCU FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 Y3FxyuXtj2gecrGXvLEI SA5DoMHfwOFtY4h_qzuM ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
        <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ RpVwy4sO7Asb86CncKJ_ xLxy3movqzZW0DK9On8M" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900"><path fill="#b22234" d="M0 0h7410v3900H0z"></path><path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff" stroke-width="300"></path><path fill="#3c3b6e" d="M0 0h2964v2100H0z"></path><g fill="#fff"><g id="d"><g id="c"><g id="e"><g id="b"><path id="a" d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z"></path><use xlink:href="#a" y="420"></use><use xlink:href="#a" y="840"></use><use xlink:href="#a" y="1260"></use></g><use xlink:href="#a" y="1680"></use></g><use xlink:href="#b" x="247" y="210"></use></g><use xlink:href="#c" x="494"></use></g><use xlink:href="#d" x="988"></use><use xlink:href="#c" x="1976"></use><use xlink:href="#e" x="2470"></use></g></svg>
      </button>
      
      <div class="_SmdlCf6eUKB_V9S5IDj Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r" id="language-dropdown" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 10.4px, 0px);" data-popper-reference-hidden="" data-popper-escaped="">
        <ul class="_bVaO2NfVVP88LtHWYlv" role="none">
          <li>
            <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">
              <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                <svg class="OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi RpVwy4sO7Asb86CncKJ_ fhCwost7CSNRc2WSHLFW" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512">
                  <g fill-rule="evenodd">
                    <g stroke-width="1pt">
                      <path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"></path>
                      <path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"></path>
                    </g>
                    <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"></path>
                    <path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"></path>
                  </g>
                </svg>              
                English (US)
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">
              <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                <svg class="OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi RpVwy4sO7Asb86CncKJ_ fhCwost7CSNRc2WSHLFW" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512">
                  <path fill="#ffce00" d="M0 341.3h512V512H0z"></path>
                  <path d="M0 0h512v170.7H0z"></path>
                  <path fill="#d00" d="M0 170.7h512v170.6H0z"></path>
                </svg>
                Deutsch
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">
              <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                <svg class="OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi RpVwy4sO7Asb86CncKJ_ fhCwost7CSNRc2WSHLFW" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it" viewBox="0 0 512 512">
                  <g fill-rule="evenodd" stroke-width="1pt">
                    <path fill="#fff" d="M0 0h512v512H0z"></path>
                    <path fill="#009246" d="M0 0h170.7v512H0z"></path>
                    <path fill="#ce2b37" d="M341.3 0H512v512H341.3z"></path>
                  </g>
                </svg>              
                Italiano
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">
              <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                <svg class="OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi RpVwy4sO7Asb86CncKJ_ fhCwost7CSNRc2WSHLFW" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512">
                  <defs>
                    <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"></path>
                  </defs>
                  <path fill="#de2910" d="M0 0h512v512H0z"></path>
                  <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a"></use>
                  <use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a"></use>
                  <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a"></use>
                  <use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a"></use>
                  <use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a"></use>
                </svg>
                中文 (繁體)
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</aside>

<div class="_LPVUrp9Uina5fcERqWC _DGThsbfFGclb6iwA4_9 QhmQ_v3mmDFIP9VaVOfb _JKsnSqP4tIzydAzf5aP yQK4azPzSPqQ3rmcKxWm" id="sidebarBackdrop"></div>
  
  <div id="main-content" class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_ uLPch_bqyJDXwe5tynMV _lTTGxW9MVI40FyDCtmr jtAJHOc7mn7b4IKRO59D h8KYXnua2NT4kTVzieom Syhv8OuxgyaGMa27BMXo">
    <main>
      
<div class="RZmKBZs1E1eXw8vkE6jY mlwbuv_bMkMhzTA3msA3">
  <div class="_wYiJGbRZyFZeCc8y7Sf _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _YxZw_O8dWkTljptcO7z SWDELhWFjL8JxEtm91_o _1jTZ8KXRZul60S6czNi">
    <div class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2 hD0sTTDgbxakubcHVW2X">
      <div class="VQS2tmQ_zFyBOC2tkmto">
        <span class="q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl cdZDaAM7xDQV_z8X7CiP OyABRrnTV_kvHV7dJ0uE">$45,385</span>
        <h3 class="d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Sales this week</h3>
      </div>
      <div class="YRrCJSr_j5nopfm4duUc _74lpPUMEtHf6F0_fjLe URF_PdoDtDpDi8BZQL94 Q_jg_EPdNf9eDMn1mLI2 d3C8uAdJKNl1jzfE9ynq IOPhczRgtphv6NdNBDjj _slPOgYG58UZfxi9teaV sh9_WSzIEMjMvUiGrRaF">
        12.5%
        <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
        </svg>
      </div>
    </div>
    <div id="main-chart" style="min-height: 435px;"><div id="apexchartse6ic02zli" class="apexcharts-canvas apexchartse6ic02zli apexcharts-theme-light" style="width: 623px; height: 420px;"><svg id="SvgjsSvg4205" width="623" height="420" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="623" height="420"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 210px;"><div class="apexcharts-legend-series" rel="1" seriesname="Revenue" data:collapsed="false" style="margin: 2px 10px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(26, 86, 219); color: rgb(26, 86, 219); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Revenue" data:collapsed="false" style="color: rgb(156, 163, 175); font-size: 14px; font-weight: 500; font-family: Inter, sans-serif;">Revenue</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Revenuexxpreviousxperiodx" data:collapsed="false" style="margin: 2px 10px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(253, 186, 140); color: rgb(253, 186, 140); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Revenue%20(previous%20period)" data:collapsed="false" style="color: rgb(156, 163, 175); font-size: 14px; font-weight: 500; font-family: Inter, sans-serif;">Revenue (previous period)</span></div></div><style type="text/css">	
    	
      .apexcharts-legend {	
        display: flex;	
        overflow: auto;	
        padding: 0 10px;	
      }	
      .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {	
        flex-wrap: wrap	
      }	
      .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
        flex-direction: column;	
        bottom: 0;	
      }	
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
        justify-content: flex-start;	
      }	
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {	
        justify-content: center;  	
      }	
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {	
        justify-content: flex-end;	
      }	
      .apexcharts-legend-series {	
        cursor: pointer;	
        line-height: normal;	
      }	
      .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{	
        display: flex;	
        align-items: center;	
      }	
      .apexcharts-legend-text {	
        position: relative;	
        font-size: 14px;	
      }	
      .apexcharts-legend-text *, .apexcharts-legend-marker * {	
        pointer-events: none;	
      }	
      .apexcharts-legend-marker {	
        position: relative;	
        display: inline-block;	
        cursor: pointer;	
        margin-right: 3px;	
        border-style: solid;
      }	
      	
      .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
        display: inline-block;	
      }	
      .apexcharts-legend-series.apexcharts-no-click {	
        cursor: auto;	
      }	
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
        display: none !important;	
      }	
      .apexcharts-inactive-legend {	
        opacity: 0.45;	
      }</style></foreignObject><g id="SvgjsG4207" class="apexcharts-inner apexcharts-graphical" transform="translate(93.83974838256836, 30)"><defs id="SvgjsDefs4206"><clipPath id="gridRectMaske6ic02zli"><rect id="SvgjsRect4213" width="527.1602516174316" height="343" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaske6ic02zli"></clipPath><clipPath id="nonForecastMaske6ic02zli"></clipPath><clipPath id="gridRectMarkerMaske6ic02zli"><rect id="SvgjsRect4214" width="543.1602516174316" height="363" x="-12" y="-12" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient4232" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop4233" stop-opacity="0" stop-color="rgba(26,86,219,0)" offset="0"></stop><stop id="SvgjsStop4234" stop-opacity="0.15" stop-color="rgba(141,171,237,0.15)" offset="1"></stop><stop id="SvgjsStop4235" stop-opacity="0.15" stop-color="rgba(141,171,237,0.15)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient4254" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop4255" stop-opacity="0" stop-color="rgba(253,186,140,0)" offset="0"></stop><stop id="SvgjsStop4256" stop-opacity="0.15" stop-color="rgba(254,221,198,0.15)" offset="1"></stop><stop id="SvgjsStop4257" stop-opacity="0.15" stop-color="rgba(254,221,198,0.15)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine4212" x1="0" y1="0" x2="0" y2="339" stroke="#374151" stroke-dasharray="10" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="339" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG4260" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4261" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g><line id="SvgjsLine4269" x1="0" y1="340" x2="519.1602516174316" y2="340" stroke="#374151" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><g id="SvgjsG4282" class="apexcharts-grid"><g id="SvgjsG4283" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine4292" x1="0" y1="0" x2="519.1602516174316" y2="0" stroke="#374151" stroke-dasharray="1" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4293" x1="0" y1="84.75" x2="519.1602516174316" y2="84.75" stroke="#374151" stroke-dasharray="1" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4294" x1="0" y1="169.5" x2="519.1602516174316" y2="169.5" stroke="#374151" stroke-dasharray="1" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4295" x1="0" y1="254.25" x2="519.1602516174316" y2="254.25" stroke="#374151" stroke-dasharray="1" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4296" x1="0" y1="339" x2="519.1602516174316" y2="339" stroke="#374151" stroke-dasharray="1" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG4284" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine4285" x1="0" y1="340" x2="0" y2="346" stroke="#374151" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine4286" x1="86.52670860290527" y1="340" x2="86.52670860290527" y2="346" stroke="#374151" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine4287" x1="173.05341720581055" y1="340" x2="173.05341720581055" y2="346" stroke="#374151" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine4288" x1="259.5801258087158" y1="340" x2="259.5801258087158" y2="346" stroke="#374151" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine4289" x1="346.1068344116211" y1="340" x2="346.1068344116211" y2="346" stroke="#374151" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine4290" x1="432.63354301452637" y1="340" x2="432.63354301452637" y2="346" stroke="#374151" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine4291" x1="519.1602516174316" y1="340" x2="519.1602516174316" y2="346" stroke="#374151" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine4298" x1="0" y1="339" x2="519.1602516174316" y2="339" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine4297" x1="0" y1="1" x2="0" y2="339" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG4215" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG4216" class="apexcharts-series" seriesName="Revenue" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath4236" d="M 0 339L 0 188.14499999999998C 30.284348011016842 188.14499999999998 56.24236059188843 246.62249999999995 86.52670860290527 246.62249999999995C 116.81105661392212 246.62249999999995 142.7690691947937 272.895 173.05341720581055 272.895C 203.3377652168274 272.895 229.29577779769897 116.10750000000007 259.5801258087158 116.10750000000007C 289.86447381973267 116.10750000000007 315.82248640060425 188.14499999999998 346.1068344116211 188.14499999999998C 376.39118242263794 188.14499999999998 402.3491950035095 230.51999999999998 432.63354301452637 230.51999999999998C 462.9178910255432 230.51999999999998 488.8759036064148 315.27 519.1602516174316 315.27C 519.1602516174316 315.27 519.1602516174316 315.27 519.1602516174316 339M 519.1602516174316 315.27z" fill="url(#SvgjsLinearGradient4232)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaske6ic02zli)" pathTo="M 0 339L 0 188.14499999999998C 30.284348011016842 188.14499999999998 56.24236059188843 246.62249999999995 86.52670860290527 246.62249999999995C 116.81105661392212 246.62249999999995 142.7690691947937 272.895 173.05341720581055 272.895C 203.3377652168274 272.895 229.29577779769897 116.10750000000007 259.5801258087158 116.10750000000007C 289.86447381973267 116.10750000000007 315.82248640060425 188.14499999999998 346.1068344116211 188.14499999999998C 376.39118242263794 188.14499999999998 402.3491950035095 230.51999999999998 432.63354301452637 230.51999999999998C 462.9178910255432 230.51999999999998 488.8759036064148 315.27 519.1602516174316 315.27C 519.1602516174316 315.27 519.1602516174316 315.27 519.1602516174316 339M 519.1602516174316 315.27z" pathFrom="M -1 2881.5L -1 2881.5L 86.52670860290527 2881.5L 173.05341720581055 2881.5L 259.5801258087158 2881.5L 346.1068344116211 2881.5L 432.63354301452637 2881.5L 519.1602516174316 2881.5"></path><path id="SvgjsPath4237" d="M 0 188.14499999999998C 30.284348011016842 188.14499999999998 56.24236059188843 246.62249999999995 86.52670860290527 246.62249999999995C 116.81105661392212 246.62249999999995 142.7690691947937 272.895 173.05341720581055 272.895C 203.3377652168274 272.895 229.29577779769897 116.10750000000007 259.5801258087158 116.10750000000007C 289.86447381973267 116.10750000000007 315.82248640060425 188.14499999999998 346.1068344116211 188.14499999999998C 376.39118242263794 188.14499999999998 402.3491950035095 230.51999999999998 432.63354301452637 230.51999999999998C 462.9178910255432 230.51999999999998 488.8759036064148 315.27 519.1602516174316 315.27" fill="none" fill-opacity="1" stroke="#1a56db" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaske6ic02zli)" pathTo="M 0 188.14499999999998C 30.284348011016842 188.14499999999998 56.24236059188843 246.62249999999995 86.52670860290527 246.62249999999995C 116.81105661392212 246.62249999999995 142.7690691947937 272.895 173.05341720581055 272.895C 203.3377652168274 272.895 229.29577779769897 116.10750000000007 259.5801258087158 116.10750000000007C 289.86447381973267 116.10750000000007 315.82248640060425 188.14499999999998 346.1068344116211 188.14499999999998C 376.39118242263794 188.14499999999998 402.3491950035095 230.51999999999998 432.63354301452637 230.51999999999998C 462.9178910255432 230.51999999999998 488.8759036064148 315.27 519.1602516174316 315.27" pathFrom="M -1 2881.5L -1 2881.5L 86.52670860290527 2881.5L 173.05341720581055 2881.5L 259.5801258087158 2881.5L 346.1068344116211 2881.5L 432.63354301452637 2881.5L 519.1602516174316 2881.5"></path><g id="SvgjsG4217" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG4219" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaske6ic02zli)"><circle id="SvgjsCircle4220" r="5" cx="0" cy="188.14499999999998" class="apexcharts-marker no-pointer-events wtod2x3ka" stroke="#ffffff" fill="#1a56db" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="5"></circle><circle id="SvgjsCircle4221" r="5" cx="86.52670860290527" cy="246.62249999999995" class="apexcharts-marker no-pointer-events wujs4vive" stroke="#ffffff" fill="#1a56db" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="5"></circle></g><g id="SvgjsG4222" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaske6ic02zli)"><circle id="SvgjsCircle4223" r="5" cx="173.05341720581055" cy="272.895" class="apexcharts-marker no-pointer-events wm8duhxqf" stroke="#ffffff" fill="#1a56db" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="5"></circle></g><g id="SvgjsG4224" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaske6ic02zli)"><circle id="SvgjsCircle4225" r="5" cx="259.5801258087158" cy="116.10750000000007" class="apexcharts-marker no-pointer-events w0xasyyr9" stroke="#ffffff" fill="#1a56db" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="5"></circle></g><g id="SvgjsG4226" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaske6ic02zli)"><circle id="SvgjsCircle4227" r="5" cx="346.1068344116211" cy="188.14499999999998" class="apexcharts-marker no-pointer-events wr3dws1hi" stroke="#ffffff" fill="#1a56db" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="5"></circle></g><g id="SvgjsG4228" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaske6ic02zli)"><circle id="SvgjsCircle4229" r="5" cx="432.63354301452637" cy="230.51999999999998" class="apexcharts-marker no-pointer-events whbqfzs8i" stroke="#ffffff" fill="#1a56db" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="5"></circle></g><g id="SvgjsG4230" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaske6ic02zli)"><circle id="SvgjsCircle4231" r="5" cx="519.1602516174316" cy="315.27" class="apexcharts-marker no-pointer-events wlbkd8zxz" stroke="#ffffff" fill="#1a56db" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="5"></circle></g></g></g><g id="SvgjsG4238" class="apexcharts-series" seriesName="Revenuexxpreviousxperiodx" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath4258" d="M 0 339L 0 103.39499999999998C 30.284348011016842 103.39499999999998 56.24236059188843 31.78125 86.52670860290527 31.78125C 116.81105661392212 31.78125 142.7690691947937 159.32999999999993 173.05341720581055 159.32999999999993C 203.3377652168274 159.32999999999993 229.29577779769897 188.14499999999998 259.5801258087158 188.14499999999998C 289.86447381973267 188.14499999999998 315.82248640060425 90.68249999999989 346.1068344116211 90.68249999999989C 376.39118242263794 90.68249999999989 402.3491950035095 18.644999999999982 432.63354301452637 18.644999999999982C 462.9178910255432 18.644999999999982 488.8759036064148 77.9699999999998 519.1602516174316 77.9699999999998C 519.1602516174316 77.9699999999998 519.1602516174316 77.9699999999998 519.1602516174316 339M 519.1602516174316 77.9699999999998z" fill="url(#SvgjsLinearGradient4254)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaske6ic02zli)" pathTo="M 0 339L 0 103.39499999999998C 30.284348011016842 103.39499999999998 56.24236059188843 31.78125 86.52670860290527 31.78125C 116.81105661392212 31.78125 142.7690691947937 159.32999999999993 173.05341720581055 159.32999999999993C 203.3377652168274 159.32999999999993 229.29577779769897 188.14499999999998 259.5801258087158 188.14499999999998C 289.86447381973267 188.14499999999998 315.82248640060425 90.68249999999989 346.1068344116211 90.68249999999989C 376.39118242263794 90.68249999999989 402.3491950035095 18.644999999999982 432.63354301452637 18.644999999999982C 462.9178910255432 18.644999999999982 488.8759036064148 77.9699999999998 519.1602516174316 77.9699999999998C 519.1602516174316 77.9699999999998 519.1602516174316 77.9699999999998 519.1602516174316 339M 519.1602516174316 77.9699999999998z" pathFrom="M -1 2881.5L -1 2881.5L 86.52670860290527 2881.5L 173.05341720581055 2881.5L 259.5801258087158 2881.5L 346.1068344116211 2881.5L 432.63354301452637 2881.5L 519.1602516174316 2881.5"></path><path id="SvgjsPath4259" d="M 0 103.39499999999998C 30.284348011016842 103.39499999999998 56.24236059188843 31.78125 86.52670860290527 31.78125C 116.81105661392212 31.78125 142.7690691947937 159.32999999999993 173.05341720581055 159.32999999999993C 203.3377652168274 159.32999999999993 229.29577779769897 188.14499999999998 259.5801258087158 188.14499999999998C 289.86447381973267 188.14499999999998 315.82248640060425 90.68249999999989 346.1068344116211 90.68249999999989C 376.39118242263794 90.68249999999989 402.3491950035095 18.644999999999982 432.63354301452637 18.644999999999982C 462.9178910255432 18.644999999999982 488.8759036064148 77.9699999999998 519.1602516174316 77.9699999999998" fill="none" fill-opacity="1" stroke="#fdba8c" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaske6ic02zli)" pathTo="M 0 103.39499999999998C 30.284348011016842 103.39499999999998 56.24236059188843 31.78125 86.52670860290527 31.78125C 116.81105661392212 31.78125 142.7690691947937 159.32999999999993 173.05341720581055 159.32999999999993C 203.3377652168274 159.32999999999993 229.29577779769897 188.14499999999998 259.5801258087158 188.14499999999998C 289.86447381973267 188.14499999999998 315.82248640060425 90.68249999999989 346.1068344116211 90.68249999999989C 376.39118242263794 90.68249999999989 402.3491950035095 18.644999999999982 432.63354301452637 18.644999999999982C 462.9178910255432 18.644999999999982 488.8759036064148 77.9699999999998 519.1602516174316 77.9699999999998" pathFrom="M -1 2881.5L -1 2881.5L 86.52670860290527 2881.5L 173.05341720581055 2881.5L 259.5801258087158 2881.5L 346.1068344116211 2881.5L 432.63354301452637 2881.5L 519.1602516174316 2881.5"></path><g id="SvgjsG4239" class="apexcharts-series-markers-wrap" data:realIndex="1"><g id="SvgjsG4241" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaske6ic02zli)"><circle id="SvgjsCircle4242" r="5" cx="0" cy="103.39499999999998" class="apexcharts-marker no-pointer-events woh3x2f7v" stroke="#ffffff" fill="#fdba8c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="5"></circle><circle id="SvgjsCircle4243" r="5" cx="86.52670860290527" cy="31.78125" class="apexcharts-marker no-pointer-events wa5enlkkh" stroke="#ffffff" fill="#fdba8c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="5"></circle></g><g id="SvgjsG4244" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaske6ic02zli)"><circle id="SvgjsCircle4245" r="5" cx="173.05341720581055" cy="159.32999999999993" class="apexcharts-marker no-pointer-events wvktbjoor" stroke="#ffffff" fill="#fdba8c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="5"></circle></g><g id="SvgjsG4246" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaske6ic02zli)"><circle id="SvgjsCircle4247" r="5" cx="259.5801258087158" cy="188.14499999999998" class="apexcharts-marker no-pointer-events wm2ki5ib6" stroke="#ffffff" fill="#fdba8c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="5"></circle></g><g id="SvgjsG4248" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaske6ic02zli)"><circle id="SvgjsCircle4249" r="5" cx="346.1068344116211" cy="90.68249999999989" class="apexcharts-marker no-pointer-events wxtifpnk2" stroke="#ffffff" fill="#fdba8c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="5"></circle></g><g id="SvgjsG4250" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaske6ic02zli)"><circle id="SvgjsCircle4251" r="5" cx="432.63354301452637" cy="18.644999999999982" class="apexcharts-marker no-pointer-events wd48srn1l" stroke="#ffffff" fill="#fdba8c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="5"></circle></g><g id="SvgjsG4252" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaske6ic02zli)"><circle id="SvgjsCircle4253" r="5" cx="519.1602516174316" cy="77.9699999999998" class="apexcharts-marker no-pointer-events wbrv5bo31" stroke="#ffffff" fill="#fdba8c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="1" default-marker-size="5"></circle></g></g></g><g id="SvgjsG4218" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG4240" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine4299" x1="0" y1="0" x2="519.1602516174316" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4300" x1="0" y1="0" x2="519.1602516174316" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4301" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4302" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4303" class="apexcharts-point-annotations"></g><rect id="SvgjsRect4304" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect4305" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect4211" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG4270" class="apexcharts-yaxis" rel="0" transform="translate(40.83974838256836, 0)"><g id="SvgjsG4271" class="apexcharts-yaxis-texts-g"><text id="SvgjsText4272" font-family="Inter, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;"><tspan id="SvgjsTspan4273">$6800</tspan><title>$6800</title></text><text id="SvgjsText4274" font-family="Inter, sans-serif" x="20" y="116.15" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;"><tspan id="SvgjsTspan4275">$6600</tspan><title>$6600</title></text><text id="SvgjsText4276" font-family="Inter, sans-serif" x="20" y="200.9" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;"><tspan id="SvgjsTspan4277">$6400</tspan><title>$6400</title></text><text id="SvgjsText4278" font-family="Inter, sans-serif" x="20" y="285.65" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;"><tspan id="SvgjsTspan4279">$6200</tspan><title>$6200</title></text><text id="SvgjsText4280" font-family="Inter, sans-serif" x="20" y="370.4" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;"><tspan id="SvgjsTspan4281">$6000</tspan><title>$6000</title></text></g></g><g id="SvgjsG4208" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Inter, sans-serif; font-size: 14px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(26, 86, 219);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(253, 186, 140);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Inter, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
    <!-- Card Footer -->
    <div class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2 wlOthpHGZ8jLLRoA3tl2 KC0h1uHEHnCjmnE_rg8g pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V YJEBMPxJE_MyJtwHjBt6 _fGhMnSfYmaGrv7DvZ00">
      <div>
        <button class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe ijrOHNoSVGATsWYKl4Id PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW" type="button" data-dropdown-toggle="weekly-sales-dropdown">Last 7 days <svg class="t1I6QaLqvCmfaYJcpWU_ E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
        <!-- Dropdown menu -->
        <div class="_SmdlCf6eUKB_V9S5IDj Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r PoeKYEQfG4WfmL9xM6vu" id="weekly-sales-dropdown" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(97.6px, -37.6px, 0px);">
            <div class="i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY" role="none">
              <p class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl vfNYjqjYMlN1XskEucCt OyABRrnTV_kvHV7dJ0uE" role="none">
                Sep 16, 2021 - Sep 22, 2021
              </p>
            </div>
            <ul class="_bVaO2NfVVP88LtHWYlv" role="none">
              <li>
                <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Yesterday</a>
              </li>
              <li>
                <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Today</a>
              </li>
              <li>
                <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 7 days</a>
              </li>
              <li>
                <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 30 days</a>
              </li>
              <li>
                <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 90 days</a>
              </li>
            </ul>
            <div class="_bVaO2NfVVP88LtHWYlv" role="none">
              <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Custom...</a>
            </div>
        </div>
      </div>
      <div class="VQS2tmQ_zFyBOC2tkmto">
        <a href="#" class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe sdSaZcRa4_We5kKaX4pf mveJTCIb2WII7J4sY22F OQflBVxALl1Ntbyc2J2_ gx_pYWtAG2cJIqhquLbx _7KA5gD55t2lxf9Jkj20 fZf6W_ZtzEh6EEqmWMA9 OPrb_iG5WDy_7F05BDOX">
          Sales Report
          <svg class="c2LzVf9SsdSEMBrRjNwS E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus KcFFi0RQeeLbabX2ce8e cetJU7yt52TBxxdaIygU" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </a>
      </div>
    </div>
</div>

    <div class="xCPtuxM4_gihvpPwv9bX Nu4HUn5EQpnNJ1itNkrd iHPddplqYvrN6qWgvntn XJih04pKHf8Cekga6Hj3 t6gkcSf0Bt4MLItXvDJ_ _wDL7UcyA_Sot_H5YE7K sIk4Wc5VFaQpncPF5Sx4">
      <div class="_wYiJGbRZyFZeCc8y7Sf _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _YxZw_O8dWkTljptcO7z SWDELhWFjL8JxEtm91_o _1jTZ8KXRZul60S6czNi">
        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
          <div class="VQS2tmQ_zFyBOC2tkmto">
            <span class="q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl cdZDaAM7xDQV_z8X7CiP OyABRrnTV_kvHV7dJ0uE">2,340</span>
            <h3 class="d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">New products this week</h3>
          </div>
          <div class="YRrCJSr_j5nopfm4duUc _74lpPUMEtHf6F0_fjLe URF_PdoDtDpDi8BZQL94 Q_jg_EPdNf9eDMn1mLI2 QkJPyfv8DpRcr_CZe6OJ SXX5V42dZ6Fw3QpmjvbD d3C8uAdJKNl1jzfE9ynq IOPhczRgtphv6NdNBDjj _slPOgYG58UZfxi9teaV sh9_WSzIEMjMvUiGrRaF">
            14.6%
            <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
          </div>
        </div>
        <div id="new-products-chart" style="min-height: 320px;"><div id="apexchartsmbvveoq4f" class="apexcharts-canvas apexchartsmbvveoq4f apexcharts-theme-light" style="width: 623px; height: 305px;"><svg id="SvgjsSvg4306" width="623" height="305" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG4308" class="apexcharts-inner apexcharts-graphical" transform="translate(12, 30)"><defs id="SvgjsDefs4307"><linearGradient id="SvgjsLinearGradient4311" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop4312" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop4313" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop4314" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskmbvveoq4f"><rect id="SvgjsRect4316" width="610" height="275" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskmbvveoq4f"></clipPath><clipPath id="nonForecastMaskmbvveoq4f"></clipPath><clipPath id="gridRectMarkerMaskmbvveoq4f"><rect id="SvgjsRect4317" width="605" height="274" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect4315" width="85.85714285714286" height="270" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient4311)" class="apexcharts-xcrosshairs" y2="270" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG4353" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4354" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG4363" class="apexcharts-grid"><g id="SvgjsG4364" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine4366" x1="0" y1="0" x2="601" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4367" x1="0" y1="67.5" x2="601" y2="67.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4368" x1="0" y1="135" x2="601" y2="135" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4369" x1="0" y1="202.5" x2="601" y2="202.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4370" x1="0" y1="270" x2="601" y2="270" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG4365" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine4372" x1="0" y1="270" x2="601" y2="270" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine4371" x1="0" y1="1" x2="0" y2="270" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG4318" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG4319" class="apexcharts-series" rel="1" seriesName="Digital" data:realIndex="0"><path id="SvgjsPath4323" d="M 21.464285714285715 270L 21.464285714285715 43.5Q 21.464285714285715 40.5 24.464285714285715 40.5L 34.92857142857143 40.5Q 37.92857142857143 40.5 37.92857142857143 43.5L 37.92857142857143 43.5L 37.92857142857143 270L 37.92857142857143 270z" fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmbvveoq4f)" pathTo="M 21.464285714285715 270L 21.464285714285715 43.5Q 21.464285714285715 40.5 24.464285714285715 40.5L 34.92857142857143 40.5Q 37.92857142857143 40.5 37.92857142857143 43.5L 37.92857142857143 43.5L 37.92857142857143 270L 37.92857142857143 270z" pathFrom="M 21.464285714285715 270L 21.464285714285715 270L 37.92857142857143 270L 37.92857142857143 270L 37.92857142857143 270L 37.92857142857143 270L 37.92857142857143 270L 21.464285714285715 270" cy="40.5" cx="104.82142857142858" j="0" val="170" barHeight="229.5" barWidth="21.464285714285715"></path><path id="SvgjsPath4325" d="M 107.32142857142858 270L 107.32142857142858 30Q 107.32142857142858 27 110.32142857142858 27L 120.7857142857143 27Q 123.7857142857143 27 123.7857142857143 30L 123.7857142857143 30L 123.7857142857143 270L 123.7857142857143 270z" fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmbvveoq4f)" pathTo="M 107.32142857142858 270L 107.32142857142858 30Q 107.32142857142858 27 110.32142857142858 27L 120.7857142857143 27Q 123.7857142857143 27 123.7857142857143 30L 123.7857142857143 30L 123.7857142857143 270L 123.7857142857143 270z" pathFrom="M 107.32142857142858 270L 107.32142857142858 270L 123.7857142857143 270L 123.7857142857143 270L 123.7857142857143 270L 123.7857142857143 270L 123.7857142857143 270L 107.32142857142858 270" cy="27" cx="190.67857142857144" j="1" val="180" barHeight="243" barWidth="21.464285714285715"></path><path id="SvgjsPath4327" d="M 193.17857142857144 270L 193.17857142857144 51.599999999999994Q 193.17857142857144 48.599999999999994 196.17857142857144 48.599999999999994L 206.64285714285717 48.599999999999994Q 209.64285714285717 48.599999999999994 209.64285714285717 51.599999999999994L 209.64285714285717 51.599999999999994L 209.64285714285717 270L 209.64285714285717 270z" fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmbvveoq4f)" pathTo="M 193.17857142857144 270L 193.17857142857144 51.599999999999994Q 193.17857142857144 48.599999999999994 196.17857142857144 48.599999999999994L 206.64285714285717 48.599999999999994Q 209.64285714285717 48.599999999999994 209.64285714285717 51.599999999999994L 209.64285714285717 51.599999999999994L 209.64285714285717 270L 209.64285714285717 270z" pathFrom="M 193.17857142857144 270L 193.17857142857144 270L 209.64285714285717 270L 209.64285714285717 270L 209.64285714285717 270L 209.64285714285717 270L 209.64285714285717 270L 193.17857142857144 270" cy="48.599999999999994" cx="276.53571428571433" j="2" val="164" barHeight="221.4" barWidth="21.464285714285715"></path><path id="SvgjsPath4329" d="M 279.03571428571433 270L 279.03571428571433 77.25Q 279.03571428571433 74.25 282.03571428571433 74.25L 292.50000000000006 74.25Q 295.50000000000006 74.25 295.50000000000006 77.25L 295.50000000000006 77.25L 295.50000000000006 270L 295.50000000000006 270z" fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmbvveoq4f)" pathTo="M 279.03571428571433 270L 279.03571428571433 77.25Q 279.03571428571433 74.25 282.03571428571433 74.25L 292.50000000000006 74.25Q 295.50000000000006 74.25 295.50000000000006 77.25L 295.50000000000006 77.25L 295.50000000000006 270L 295.50000000000006 270z" pathFrom="M 279.03571428571433 270L 279.03571428571433 270L 295.50000000000006 270L 295.50000000000006 270L 295.50000000000006 270L 295.50000000000006 270L 295.50000000000006 270L 279.03571428571433 270" cy="74.25" cx="362.3928571428572" j="3" val="145" barHeight="195.75" barWidth="21.464285714285715"></path><path id="SvgjsPath4331" d="M 364.8928571428572 270L 364.8928571428572 38.099999999999994Q 364.8928571428572 35.099999999999994 367.8928571428572 35.099999999999994L 378.35714285714295 35.099999999999994Q 381.35714285714295 35.099999999999994 381.35714285714295 38.099999999999994L 381.35714285714295 38.099999999999994L 381.35714285714295 270L 381.35714285714295 270z" fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmbvveoq4f)" pathTo="M 364.8928571428572 270L 364.8928571428572 38.099999999999994Q 364.8928571428572 35.099999999999994 367.8928571428572 35.099999999999994L 378.35714285714295 35.099999999999994Q 381.35714285714295 35.099999999999994 381.35714285714295 38.099999999999994L 381.35714285714295 38.099999999999994L 381.35714285714295 270L 381.35714285714295 270z" pathFrom="M 364.8928571428572 270L 364.8928571428572 270L 381.35714285714295 270L 381.35714285714295 270L 381.35714285714295 270L 381.35714285714295 270L 381.35714285714295 270L 364.8928571428572 270" cy="35.099999999999994" cx="448.2500000000001" j="4" val="174" barHeight="234.9" barWidth="21.464285714285715"></path><path id="SvgjsPath4333" d="M 450.7500000000001 270L 450.7500000000001 43.5Q 450.7500000000001 40.5 453.7500000000001 40.5L 464.21428571428584 40.5Q 467.21428571428584 40.5 467.21428571428584 43.5L 467.21428571428584 43.5L 467.21428571428584 270L 467.21428571428584 270z" fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmbvveoq4f)" pathTo="M 450.7500000000001 270L 450.7500000000001 43.5Q 450.7500000000001 40.5 453.7500000000001 40.5L 464.21428571428584 40.5Q 467.21428571428584 40.5 467.21428571428584 43.5L 467.21428571428584 43.5L 467.21428571428584 270L 467.21428571428584 270z" pathFrom="M 450.7500000000001 270L 450.7500000000001 270L 467.21428571428584 270L 467.21428571428584 270L 467.21428571428584 270L 467.21428571428584 270L 467.21428571428584 270L 450.7500000000001 270" cy="40.5" cx="534.107142857143" j="5" val="170" barHeight="229.5" barWidth="21.464285714285715"></path><path id="SvgjsPath4335" d="M 536.607142857143 270L 536.607142857143 63.75Q 536.607142857143 60.75 539.607142857143 60.75L 550.0714285714287 60.75Q 553.0714285714287 60.75 553.0714285714287 63.75L 553.0714285714287 63.75L 553.0714285714287 270L 553.0714285714287 270z" fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmbvveoq4f)" pathTo="M 536.607142857143 270L 536.607142857143 63.75Q 536.607142857143 60.75 539.607142857143 60.75L 550.0714285714287 60.75Q 553.0714285714287 60.75 553.0714285714287 63.75L 553.0714285714287 63.75L 553.0714285714287 270L 553.0714285714287 270z" pathFrom="M 536.607142857143 270L 536.607142857143 270L 553.0714285714287 270L 553.0714285714287 270L 553.0714285714287 270L 553.0714285714287 270L 553.0714285714287 270L 536.607142857143 270" cy="60.75" cx="619.9642857142859" j="6" val="155" barHeight="209.25" barWidth="21.464285714285715"></path><g id="SvgjsG4321" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG4322" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4324" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4326" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4328" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4330" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4332" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4334" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG4336" class="apexcharts-series" rel="2" seriesName="Goods" data:realIndex="1"><path id="SvgjsPath4340" d="M 42.92857142857143 270L 42.92857142857143 111Q 42.92857142857143 108 45.92857142857143 108L 56.39285714285714 108Q 59.39285714285714 108 59.39285714285714 111L 59.39285714285714 111L 59.39285714285714 270L 59.39285714285714 270z" fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmbvveoq4f)" pathTo="M 42.92857142857143 270L 42.92857142857143 111Q 42.92857142857143 108 45.92857142857143 108L 56.39285714285714 108Q 59.39285714285714 108 59.39285714285714 111L 59.39285714285714 111L 59.39285714285714 270L 59.39285714285714 270z" pathFrom="M 42.92857142857143 270L 42.92857142857143 270L 59.39285714285714 270L 59.39285714285714 270L 59.39285714285714 270L 59.39285714285714 270L 59.39285714285714 270L 42.92857142857143 270" cy="108" cx="126.2857142857143" j="0" val="120" barHeight="162" barWidth="21.464285714285715"></path><path id="SvgjsPath4342" d="M 128.7857142857143 270L 128.7857142857143 92.1Q 128.7857142857143 89.1 131.7857142857143 89.1L 142.25000000000003 89.1Q 145.25000000000003 89.1 145.25000000000003 92.1L 145.25000000000003 92.1L 145.25000000000003 270L 145.25000000000003 270z" fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmbvveoq4f)" pathTo="M 128.7857142857143 270L 128.7857142857143 92.1Q 128.7857142857143 89.1 131.7857142857143 89.1L 142.25000000000003 89.1Q 145.25000000000003 89.1 145.25000000000003 92.1L 145.25000000000003 92.1L 145.25000000000003 270L 145.25000000000003 270z" pathFrom="M 128.7857142857143 270L 128.7857142857143 270L 145.25000000000003 270L 145.25000000000003 270L 145.25000000000003 270L 145.25000000000003 270L 145.25000000000003 270L 128.7857142857143 270" cy="89.1" cx="212.14285714285717" j="1" val="134" barHeight="180.9" barWidth="21.464285714285715"></path><path id="SvgjsPath4344" d="M 214.64285714285717 270L 214.64285714285717 47.54999999999998Q 214.64285714285717 44.54999999999998 217.64285714285717 44.54999999999998L 228.1071428571429 44.54999999999998Q 231.1071428571429 44.54999999999998 231.1071428571429 47.54999999999998L 231.1071428571429 47.54999999999998L 231.1071428571429 270L 231.1071428571429 270z" fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmbvveoq4f)" pathTo="M 214.64285714285717 270L 214.64285714285717 47.54999999999998Q 214.64285714285717 44.54999999999998 217.64285714285717 44.54999999999998L 228.1071428571429 44.54999999999998Q 231.1071428571429 44.54999999999998 231.1071428571429 47.54999999999998L 231.1071428571429 47.54999999999998L 231.1071428571429 270L 231.1071428571429 270z" pathFrom="M 214.64285714285717 270L 214.64285714285717 270L 231.1071428571429 270L 231.1071428571429 270L 231.1071428571429 270L 231.1071428571429 270L 231.1071428571429 270L 214.64285714285717 270" cy="44.54999999999998" cx="298.00000000000006" j="2" val="167" barHeight="225.45000000000002" barWidth="21.464285714285715"></path><path id="SvgjsPath4346" d="M 300.50000000000006 270L 300.50000000000006 31.349999999999994Q 300.50000000000006 28.349999999999994 303.50000000000006 28.349999999999994L 313.9642857142858 28.349999999999994Q 316.9642857142858 28.349999999999994 316.9642857142858 31.349999999999994L 316.9642857142858 31.349999999999994L 316.9642857142858 270L 316.9642857142858 270z" fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmbvveoq4f)" pathTo="M 300.50000000000006 270L 300.50000000000006 31.349999999999994Q 300.50000000000006 28.349999999999994 303.50000000000006 28.349999999999994L 313.9642857142858 28.349999999999994Q 316.9642857142858 28.349999999999994 316.9642857142858 31.349999999999994L 316.9642857142858 31.349999999999994L 316.9642857142858 270L 316.9642857142858 270z" pathFrom="M 300.50000000000006 270L 300.50000000000006 270L 316.9642857142858 270L 316.9642857142858 270L 316.9642857142858 270L 316.9642857142858 270L 316.9642857142858 270L 300.50000000000006 270" cy="28.349999999999994" cx="383.85714285714295" j="3" val="179" barHeight="241.65" barWidth="21.464285714285715"></path><path id="SvgjsPath4348" d="M 386.35714285714295 270L 386.35714285714295 77.25Q 386.35714285714295 74.25 389.35714285714295 74.25L 399.82142857142867 74.25Q 402.82142857142867 74.25 402.82142857142867 77.25L 402.82142857142867 77.25L 402.82142857142867 270L 402.82142857142867 270z" fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmbvveoq4f)" pathTo="M 386.35714285714295 270L 386.35714285714295 77.25Q 386.35714285714295 74.25 389.35714285714295 74.25L 399.82142857142867 74.25Q 402.82142857142867 74.25 402.82142857142867 77.25L 402.82142857142867 77.25L 402.82142857142867 270L 402.82142857142867 270z" pathFrom="M 386.35714285714295 270L 386.35714285714295 270L 402.82142857142867 270L 402.82142857142867 270L 402.82142857142867 270L 402.82142857142867 270L 402.82142857142867 270L 386.35714285714295 270" cy="74.25" cx="469.71428571428584" j="4" val="145" barHeight="195.75" barWidth="21.464285714285715"></path><path id="SvgjsPath4350" d="M 472.21428571428584 270L 472.21428571428584 27.299999999999983Q 472.21428571428584 24.299999999999983 475.21428571428584 24.299999999999983L 485.67857142857156 24.299999999999983Q 488.67857142857156 24.299999999999983 488.67857142857156 27.299999999999983L 488.67857142857156 27.299999999999983L 488.67857142857156 270L 488.67857142857156 270z" fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmbvveoq4f)" pathTo="M 472.21428571428584 270L 472.21428571428584 27.299999999999983Q 472.21428571428584 24.299999999999983 475.21428571428584 24.299999999999983L 485.67857142857156 24.299999999999983Q 488.67857142857156 24.299999999999983 488.67857142857156 27.299999999999983L 488.67857142857156 27.299999999999983L 488.67857142857156 270L 488.67857142857156 270z" pathFrom="M 472.21428571428584 270L 472.21428571428584 270L 488.67857142857156 270L 488.67857142857156 270L 488.67857142857156 270L 488.67857142857156 270L 488.67857142857156 270L 472.21428571428584 270" cy="24.299999999999983" cx="555.5714285714287" j="5" val="182" barHeight="245.70000000000002" barWidth="21.464285714285715"></path><path id="SvgjsPath4352" d="M 558.0714285714287 270L 558.0714285714287 79.94999999999999Q 558.0714285714287 76.94999999999999 561.0714285714287 76.94999999999999L 571.5357142857143 76.94999999999999Q 574.5357142857143 76.94999999999999 574.5357142857143 79.94999999999999L 574.5357142857143 79.94999999999999L 574.5357142857143 270L 574.5357142857143 270z" fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmbvveoq4f)" pathTo="M 558.0714285714287 270L 558.0714285714287 79.94999999999999Q 558.0714285714287 76.94999999999999 561.0714285714287 76.94999999999999L 571.5357142857143 76.94999999999999Q 574.5357142857143 76.94999999999999 574.5357142857143 79.94999999999999L 574.5357142857143 79.94999999999999L 574.5357142857143 270L 574.5357142857143 270z" pathFrom="M 558.0714285714287 270L 558.0714285714287 270L 574.5357142857143 270L 574.5357142857143 270L 574.5357142857143 270L 574.5357142857143 270L 574.5357142857143 270L 558.0714285714287 270" cy="76.94999999999999" cx="641.4285714285716" j="6" val="143" barHeight="193.05" barWidth="21.464285714285715"></path><g id="SvgjsG4338" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG4339" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4341" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4343" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4345" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4347" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4349" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4351" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG4320" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG4337" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine4373" x1="0" y1="0" x2="601" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4374" x1="0" y1="0" x2="601" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4375" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4376" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4377" class="apexcharts-point-annotations"></g></g><g id="SvgjsG4362" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG4309" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 152.5px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Inter, sans-serif; font-size: 14px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(26, 86, 219);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(253, 186, 140);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
        <!-- Card Footer -->
        <div class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2 wlOthpHGZ8jLLRoA3tl2 pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V YJEBMPxJE_MyJtwHjBt6 _fGhMnSfYmaGrv7DvZ00">
          <div>
            <button class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe ijrOHNoSVGATsWYKl4Id PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW" type="button" data-dropdown-toggle="new-products-dropdown">Last 7 days <svg class="t1I6QaLqvCmfaYJcpWU_ E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div class="_SmdlCf6eUKB_V9S5IDj Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r PoeKYEQfG4WfmL9xM6vu" id="new-products-dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(97.6px, 467.2px, 0px);">
                <div class="i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY" role="none">
                  <p class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl vfNYjqjYMlN1XskEucCt OyABRrnTV_kvHV7dJ0uE" role="none">
                    Sep 16, 2021 - Sep 22, 2021
                  </p>
                </div>
                <ul class="_bVaO2NfVVP88LtHWYlv" role="none">
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Yesterday</a>
                  </li>
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Today</a>
                  </li>
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 7 days</a>
                  </li>
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 30 days</a>
                  </li>
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 90 days</a>
                  </li>
                </ul>
                <div class="_bVaO2NfVVP88LtHWYlv" role="none">
                  <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Custom...</a>
                </div>
            </div>
          </div>
          <div class="VQS2tmQ_zFyBOC2tkmto">
            <a href="#" class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe sdSaZcRa4_We5kKaX4pf mveJTCIb2WII7J4sY22F OQflBVxALl1Ntbyc2J2_ gx_pYWtAG2cJIqhquLbx _7KA5gD55t2lxf9Jkj20 fZf6W_ZtzEh6EEqmWMA9 OPrb_iG5WDy_7F05BDOX">
              Products Report
              <svg class="c2LzVf9SsdSEMBrRjNwS E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus KcFFi0RQeeLbabX2ce8e cetJU7yt52TBxxdaIygU" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
          </div>
        </div>
      </div>

      <div class="_wYiJGbRZyFZeCc8y7Sf _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _YxZw_O8dWkTljptcO7z SWDELhWFjL8JxEtm91_o _1jTZ8KXRZul60S6czNi">
        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
          <div class="VQS2tmQ_zFyBOC2tkmto">
            <span class="q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl cdZDaAM7xDQV_z8X7CiP OyABRrnTV_kvHV7dJ0uE">5,355</span>
            <h3 class="d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Visitors this week</h3>
          </div>
          <div class="YRrCJSr_j5nopfm4duUc _74lpPUMEtHf6F0_fjLe URF_PdoDtDpDi8BZQL94 Q_jg_EPdNf9eDMn1mLI2 QkJPyfv8DpRcr_CZe6OJ SXX5V42dZ6Fw3QpmjvbD d3C8uAdJKNl1jzfE9ynq IOPhczRgtphv6NdNBDjj _slPOgYG58UZfxi9teaV sh9_WSzIEMjMvUiGrRaF">
            32.9%
            <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
          </div>
        </div>
        <div id="visitors-chart" style="min-height: 305px;"><div id="apexchartsfnd34ph1" class="apexcharts-canvas apexchartsfnd34ph1 apexcharts-theme-light" style="width: 623px; height: 305px;"><svg id="SvgjsSvg4379" width="623" height="305" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG4381" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs4380"><clipPath id="gridRectMaskfnd34ph1"><rect id="SvgjsRect4386" width="631" height="309" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskfnd34ph1"></clipPath><clipPath id="nonForecastMaskfnd34ph1"></clipPath><clipPath id="gridRectMarkerMaskfnd34ph1"><rect id="SvgjsRect4387" width="627" height="309" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient4392" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop4393" stop-opacity="0.65" stop-color="rgba(26,86,219,0.65)" offset="0"></stop><stop id="SvgjsStop4394" stop-opacity="0.5" stop-color="rgba(14,47,120,0.5)" offset="1"></stop><stop id="SvgjsStop4395" stop-opacity="0.5" stop-color="rgba(14,47,120,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine4385" x1="0" y1="0" x2="0" y2="305" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="305" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG4398" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4399" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG4408" class="apexcharts-grid"><g id="SvgjsG4409" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine4411" x1="0" y1="0" x2="623" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4412" x1="0" y1="61" x2="623" y2="61" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4413" x1="0" y1="122" x2="623" y2="122" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4414" x1="0" y1="183" x2="623" y2="183" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4415" x1="0" y1="244" x2="623" y2="244" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4416" x1="0" y1="305" x2="623" y2="305" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG4410" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine4418" x1="0" y1="305" x2="623" y2="305" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine4417" x1="0" y1="1" x2="0" y2="305" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG4388" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG4389" class="apexcharts-series" seriesName="Visitors" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath4396" d="M 0 305L 0 264.33333333333337C 36.34166666666667 264.33333333333337 67.49166666666667 81.33333333333326 103.83333333333334 81.33333333333326C 140.175 81.33333333333326 171.32500000000002 61 207.66666666666669 61C 244.00833333333333 61 275.15833333333336 223.66666666666674 311.5 223.66666666666674C 347.8416666666667 223.66666666666674 378.9916666666667 40.66666666666674 415.33333333333337 40.66666666666674C 451.67500000000007 40.66666666666674 482.82500000000005 162.66666666666674 519.1666666666667 162.66666666666674C 555.5083333333334 162.66666666666674 586.6583333333333 61 623 61C 623 61 623 61 623 305M 623 61z" fill="url(#SvgjsLinearGradient4392)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskfnd34ph1)" pathTo="M 0 305L 0 264.33333333333337C 36.34166666666667 264.33333333333337 67.49166666666667 81.33333333333326 103.83333333333334 81.33333333333326C 140.175 81.33333333333326 171.32500000000002 61 207.66666666666669 61C 244.00833333333333 61 275.15833333333336 223.66666666666674 311.5 223.66666666666674C 347.8416666666667 223.66666666666674 378.9916666666667 40.66666666666674 415.33333333333337 40.66666666666674C 451.67500000000007 40.66666666666674 482.82500000000005 162.66666666666674 519.1666666666667 162.66666666666674C 555.5083333333334 162.66666666666674 586.6583333333333 61 623 61C 623 61 623 61 623 305M 623 61z" pathFrom="M -1 1281L -1 1281L 103.83333333333334 1281L 207.66666666666669 1281L 311.5 1281L 415.33333333333337 1281L 519.1666666666667 1281L 623 1281"></path><path id="SvgjsPath4397" d="M 0 264.33333333333337C 36.34166666666667 264.33333333333337 67.49166666666667 81.33333333333326 103.83333333333334 81.33333333333326C 140.175 81.33333333333326 171.32500000000002 61 207.66666666666669 61C 244.00833333333333 61 275.15833333333336 223.66666666666674 311.5 223.66666666666674C 347.8416666666667 223.66666666666674 378.9916666666667 40.66666666666674 415.33333333333337 40.66666666666674C 451.67500000000007 40.66666666666674 482.82500000000005 162.66666666666674 519.1666666666667 162.66666666666674C 555.5083333333334 162.66666666666674 586.6583333333333 61 623 61" fill="none" fill-opacity="1" stroke="#1a56db" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskfnd34ph1)" pathTo="M 0 264.33333333333337C 36.34166666666667 264.33333333333337 67.49166666666667 81.33333333333326 103.83333333333334 81.33333333333326C 140.175 81.33333333333326 171.32500000000002 61 207.66666666666669 61C 244.00833333333333 61 275.15833333333336 223.66666666666674 311.5 223.66666666666674C 347.8416666666667 223.66666666666674 378.9916666666667 40.66666666666674 415.33333333333337 40.66666666666674C 451.67500000000007 40.66666666666674 482.82500000000005 162.66666666666674 519.1666666666667 162.66666666666674C 555.5083333333334 162.66666666666674 586.6583333333333 61 623 61" pathFrom="M -1 1281L -1 1281L 103.83333333333334 1281L 207.66666666666669 1281L 311.5 1281L 415.33333333333337 1281L 519.1666666666667 1281L 623 1281"></path><g id="SvgjsG4390" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle4424" r="0" cx="0" cy="0" class="apexcharts-marker woa9dns4jf no-pointer-events" stroke="#ffffff" fill="#1a56db" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG4391" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine4419" x1="0" y1="0" x2="623" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4420" x1="0" y1="0" x2="623" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4421" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4422" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4423" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect4384" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG4407" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG4382" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 152.5px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Inter, sans-serif; font-size: 14px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(26, 86, 219);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
        <!-- Card Footer -->
        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V wlOthpHGZ8jLLRoA3tl2 YJEBMPxJE_MyJtwHjBt6 wO2o3nNtGz9p6gHiDV4q _fGhMnSfYmaGrv7DvZ00">
          <div>
            <button class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe ijrOHNoSVGATsWYKl4Id PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW" type="button" data-dropdown-toggle="visitors-dropdown">Last 7 days <svg class="t1I6QaLqvCmfaYJcpWU_ E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div class="_SmdlCf6eUKB_V9S5IDj Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r PoeKYEQfG4WfmL9xM6vu" id="visitors-dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(97.6px, 971.2px, 0px);">
                <div class="i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY" role="none">
                  <p class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl vfNYjqjYMlN1XskEucCt OyABRrnTV_kvHV7dJ0uE" role="none">
                    Sep 16, 2021 - Sep 22, 2021
                  </p>
                </div>
                <ul class="_bVaO2NfVVP88LtHWYlv" role="none">
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Yesterday</a>
                  </li>
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Today</a>
                  </li>
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 7 days</a>
                  </li>
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 30 days</a>
                  </li>
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 90 days</a>
                  </li>
                </ul>
                <div class="_bVaO2NfVVP88LtHWYlv" role="none">
                  <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Custom...</a>
                </div>
            </div>
          </div>
          <div class="VQS2tmQ_zFyBOC2tkmto">
            <a href="#" class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe sdSaZcRa4_We5kKaX4pf mveJTCIb2WII7J4sY22F OQflBVxALl1Ntbyc2J2_ gx_pYWtAG2cJIqhquLbx _7KA5gD55t2lxf9Jkj20 fZf6W_ZtzEh6EEqmWMA9 OPrb_iG5WDy_7F05BDOX">
              Visits Report
              <svg class="c2LzVf9SsdSEMBrRjNwS E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus KcFFi0RQeeLbabX2ce8e cetJU7yt52TBxxdaIygU" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
          </div>
        </div>
      </div>

      <div class="_wYiJGbRZyFZeCc8y7Sf _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _YxZw_O8dWkTljptcO7z SWDELhWFjL8JxEtm91_o _1jTZ8KXRZul60S6czNi">
        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
          <div class="VQS2tmQ_zFyBOC2tkmto">
            <span class="q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl cdZDaAM7xDQV_z8X7CiP OyABRrnTV_kvHV7dJ0uE">385</span>
            <h3 class="d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">User signups this week</h3>
          </div>
          <div class="YRrCJSr_j5nopfm4duUc _74lpPUMEtHf6F0_fjLe URF_PdoDtDpDi8BZQL94 Q_jg_EPdNf9eDMn1mLI2 QkJPyfv8DpRcr_CZe6OJ SXX5V42dZ6Fw3QpmjvbD d3C8uAdJKNl1jzfE9ynq IOPhczRgtphv6NdNBDjj aKB6odMbznaNbQj0JRKh xEwJjoRQELUEmxugJ_gr">
            -2.7%
            <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
          </div>
        </div>
        <div id="week-signups-chart" style="min-height: 320px;"><div id="apexcharts26pwugv1" class="apexcharts-canvas apexcharts26pwugv1 apexcharts-theme-light" style="width: 623px; height: 305px;"><svg id="SvgjsSvg4425" width="623" height="305" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG4427" class="apexcharts-inner apexcharts-graphical" transform="translate(12, 30)"><defs id="SvgjsDefs4426"><linearGradient id="SvgjsLinearGradient4430" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop4431" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop4432" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop4433" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask26pwugv1"><rect id="SvgjsRect4435" width="605" height="270" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask26pwugv1"></clipPath><clipPath id="nonForecastMask26pwugv1"></clipPath><clipPath id="gridRectMarkerMask26pwugv1"><rect id="SvgjsRect4436" width="605" height="274" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect4434" width="21.464285714285715" height="270" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient4430)" class="apexcharts-xcrosshairs" y2="270" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG4462" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4463" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG4472" class="apexcharts-grid"><g id="SvgjsG4473" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine4475" x1="0" y1="0" x2="601" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4476" x1="0" y1="45" x2="601" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4477" x1="0" y1="90" x2="601" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4478" x1="0" y1="135" x2="601" y2="135" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4479" x1="0" y1="180" x2="601" y2="180" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4480" x1="0" y1="225" x2="601" y2="225" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4481" x1="0" y1="270" x2="601" y2="270" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG4474" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine4483" x1="0" y1="270" x2="601" y2="270" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine4482" x1="0" y1="1" x2="0" y2="270" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG4437" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG4438" class="apexcharts-series" rel="1" seriesName="Users" data:realIndex="0"><rect id="SvgjsRect4441" width="21.464285714285715" height="270" x="32.19642857142857" y="0" rx="3" ry="3" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#374151" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath4443" d="M 32.19642857142857 270L 32.19642857142857 120Q 32.19642857142857 117 35.19642857142857 117L 50.660714285714285 117Q 53.660714285714285 117 53.660714285714285 120L 53.660714285714285 120L 53.660714285714285 270L 53.660714285714285 270z" fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask26pwugv1)" pathTo="M 32.19642857142857 270L 32.19642857142857 120Q 32.19642857142857 117 35.19642857142857 117L 50.660714285714285 117Q 53.660714285714285 117 53.660714285714285 120L 53.660714285714285 120L 53.660714285714285 270L 53.660714285714285 270z" pathFrom="M 32.19642857142857 270L 32.19642857142857 270L 53.660714285714285 270L 53.660714285714285 270L 53.660714285714285 270L 53.660714285714285 270L 53.660714285714285 270L 32.19642857142857 270" cy="117" cx="118.05357142857143" j="0" val="34" barHeight="153" barWidth="21.464285714285715"></path><rect id="SvgjsRect4444" width="21.464285714285715" height="270" x="118.05357142857143" y="0" rx="3" ry="3" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#374151" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath4446" d="M 118.05357142857143 270L 118.05357142857143 70.5Q 118.05357142857143 67.5 121.05357142857143 67.5L 136.51785714285714 67.5Q 139.51785714285714 67.5 139.51785714285714 70.5L 139.51785714285714 70.5L 139.51785714285714 270L 139.51785714285714 270z" fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask26pwugv1)" pathTo="M 118.05357142857143 270L 118.05357142857143 70.5Q 118.05357142857143 67.5 121.05357142857143 67.5L 136.51785714285714 67.5Q 139.51785714285714 67.5 139.51785714285714 70.5L 139.51785714285714 70.5L 139.51785714285714 270L 139.51785714285714 270z" pathFrom="M 118.05357142857143 270L 118.05357142857143 270L 139.51785714285714 270L 139.51785714285714 270L 139.51785714285714 270L 139.51785714285714 270L 139.51785714285714 270L 118.05357142857143 270" cy="67.5" cx="203.91071428571428" j="1" val="45" barHeight="202.5" barWidth="21.464285714285715"></path><rect id="SvgjsRect4447" width="21.464285714285715" height="270" x="203.91071428571428" y="0" rx="3" ry="3" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#374151" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath4449" d="M 203.91071428571428 270L 203.91071428571428 34.5Q 203.91071428571428 31.5 206.91071428571428 31.5L 222.375 31.5Q 225.375 31.5 225.375 34.5L 225.375 34.5L 225.375 270L 225.375 270z" fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask26pwugv1)" pathTo="M 203.91071428571428 270L 203.91071428571428 34.5Q 203.91071428571428 31.5 206.91071428571428 31.5L 222.375 31.5Q 225.375 31.5 225.375 34.5L 225.375 34.5L 225.375 270L 225.375 270z" pathFrom="M 203.91071428571428 270L 203.91071428571428 270L 225.375 270L 225.375 270L 225.375 270L 225.375 270L 225.375 270L 203.91071428571428 270" cy="31.5" cx="289.7678571428571" j="2" val="53" barHeight="238.5" barWidth="21.464285714285715"></path><rect id="SvgjsRect4450" width="21.464285714285715" height="270" x="289.7678571428571" y="0" rx="3" ry="3" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#374151" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath4452" d="M 289.7678571428571 270L 289.7678571428571 102Q 289.7678571428571 99 292.7678571428571 99L 308.23214285714283 99Q 311.23214285714283 99 311.23214285714283 102L 311.23214285714283 102L 311.23214285714283 270L 311.23214285714283 270z" fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask26pwugv1)" pathTo="M 289.7678571428571 270L 289.7678571428571 102Q 289.7678571428571 99 292.7678571428571 99L 308.23214285714283 99Q 311.23214285714283 99 311.23214285714283 102L 311.23214285714283 102L 311.23214285714283 270L 311.23214285714283 270z" pathFrom="M 289.7678571428571 270L 289.7678571428571 270L 311.23214285714283 270L 311.23214285714283 270L 311.23214285714283 270L 311.23214285714283 270L 311.23214285714283 270L 289.7678571428571 270" cy="99" cx="375.625" j="3" val="38" barHeight="171" barWidth="21.464285714285715"></path><rect id="SvgjsRect4453" width="21.464285714285715" height="270" x="375.625" y="0" rx="3" ry="3" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#374151" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath4455" d="M 375.625 270L 375.625 25.5Q 375.625 22.5 378.625 22.5L 394.0892857142857 22.5Q 397.0892857142857 22.5 397.0892857142857 25.5L 397.0892857142857 25.5L 397.0892857142857 270L 397.0892857142857 270z" fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask26pwugv1)" pathTo="M 375.625 270L 375.625 25.5Q 375.625 22.5 378.625 22.5L 394.0892857142857 22.5Q 397.0892857142857 22.5 397.0892857142857 25.5L 397.0892857142857 25.5L 397.0892857142857 270L 397.0892857142857 270z" pathFrom="M 375.625 270L 375.625 270L 397.0892857142857 270L 397.0892857142857 270L 397.0892857142857 270L 397.0892857142857 270L 397.0892857142857 270L 375.625 270" cy="22.5" cx="461.4821428571429" j="4" val="55" barHeight="247.5" barWidth="21.464285714285715"></path><rect id="SvgjsRect4456" width="21.464285714285715" height="270" x="461.4821428571429" y="0" rx="3" ry="3" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#374151" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath4458" d="M 461.4821428571429 270L 461.4821428571429 129Q 461.4821428571429 126 464.4821428571429 126L 479.9464285714286 126Q 482.9464285714286 126 482.9464285714286 129L 482.9464285714286 129L 482.9464285714286 270L 482.9464285714286 270z" fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask26pwugv1)" pathTo="M 461.4821428571429 270L 461.4821428571429 129Q 461.4821428571429 126 464.4821428571429 126L 479.9464285714286 126Q 482.9464285714286 126 482.9464285714286 129L 482.9464285714286 129L 482.9464285714286 270L 482.9464285714286 270z" pathFrom="M 461.4821428571429 270L 461.4821428571429 270L 482.9464285714286 270L 482.9464285714286 270L 482.9464285714286 270L 482.9464285714286 270L 482.9464285714286 270L 461.4821428571429 270" cy="126" cx="547.3392857142858" j="5" val="32" barHeight="144" barWidth="21.464285714285715"></path><rect id="SvgjsRect4459" width="21.464285714285715" height="270" x="547.3392857142858" y="0" rx="3" ry="3" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#374151" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath4461" d="M 547.3392857142858 270L 547.3392857142858 111Q 547.3392857142858 108 550.3392857142858 108L 565.8035714285714 108Q 568.8035714285714 108 568.8035714285714 111L 568.8035714285714 111L 568.8035714285714 270L 568.8035714285714 270z" fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask26pwugv1)" pathTo="M 547.3392857142858 270L 547.3392857142858 111Q 547.3392857142858 108 550.3392857142858 108L 565.8035714285714 108Q 568.8035714285714 108 568.8035714285714 111L 568.8035714285714 111L 568.8035714285714 270L 568.8035714285714 270z" pathFrom="M 547.3392857142858 270L 547.3392857142858 270L 568.8035714285714 270L 568.8035714285714 270L 568.8035714285714 270L 568.8035714285714 270L 568.8035714285714 270L 547.3392857142858 270" cy="108" cx="633.1964285714287" j="6" val="36" barHeight="162" barWidth="21.464285714285715"></path><g id="SvgjsG4440" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG4442" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4445" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4448" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4451" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4454" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4457" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4460" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG4439" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine4484" x1="0" y1="0" x2="601" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4485" x1="0" y1="0" x2="601" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4486" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4487" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4488" class="apexcharts-point-annotations"></g></g><g id="SvgjsG4471" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG4428" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 152.5px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Inter, sans-serif; font-size: 14px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(26, 86, 219);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
        <!-- Card Footer -->
        <div class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2 wlOthpHGZ8jLLRoA3tl2 pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V YJEBMPxJE_MyJtwHjBt6 _fGhMnSfYmaGrv7DvZ00">
          <div>
            <button class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe ijrOHNoSVGATsWYKl4Id PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW" type="button" data-dropdown-toggle="week-signups-dropdown">Last 7 days <svg class="t1I6QaLqvCmfaYJcpWU_ E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div class="_SmdlCf6eUKB_V9S5IDj Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r PoeKYEQfG4WfmL9xM6vu" id="week-signups-dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(97.6px, 1476px, 0px);">
                <div class="i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY" role="none">
                  <p class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl vfNYjqjYMlN1XskEucCt OyABRrnTV_kvHV7dJ0uE" role="none">
                    Sep 16, 2021 - Sep 22, 2021
                  </p>
                </div>
                <ul class="_bVaO2NfVVP88LtHWYlv" role="none">
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Yesterday</a>
                  </li>
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Today</a>
                  </li>
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 7 days</a>
                  </li>
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 30 days</a>
                  </li>
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 90 days</a>
                  </li>
                </ul>
                <div class="_bVaO2NfVVP88LtHWYlv" role="none">
                  <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Custom...</a>
                </div>
            </div>
          </div>
          <div class="VQS2tmQ_zFyBOC2tkmto">
            <a href="#" class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe sdSaZcRa4_We5kKaX4pf mveJTCIb2WII7J4sY22F OQflBVxALl1Ntbyc2J2_ gx_pYWtAG2cJIqhquLbx _7KA5gD55t2lxf9Jkj20 fZf6W_ZtzEh6EEqmWMA9 OPrb_iG5WDy_7F05BDOX">
              Users Report
              <svg class="c2LzVf9SsdSEMBrRjNwS E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus KcFFi0RQeeLbabX2ce8e cetJU7yt52TBxxdaIygU" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="xCPtuxM4_gihvpPwv9bX Nu4HUn5EQpnNJ1itNkrd aJF41JQLhtfw_MCGt5Th tVvQ7rZHDN8eqgjOONa2 AWLGIryfLKwkSeUZd4O6">
      <div class="_wYiJGbRZyFZeCc8y7Sf hD0sTTDgbxakubcHVW2X _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _YxZw_O8dWkTljptcO7z SWDELhWFjL8JxEtm91_o _1jTZ8KXRZul60S6czNi a3PhNoZfGyYtBq9oUFmb roTtmJKSiubwdmgJkwrv">
      <div class="hD0sTTDgbxakubcHVW2X">
        <h3 class="TR_P65x9ie7j6uxFo_Cs vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Sessions by country</h3>
        <span class="d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">View website visitors by hovering over the map</span>
      </div>
        <div id="map" class="HpZzxvgSmWLxwGF95rQK svgMap-wrapper"><div class="svgMap-container"><div class="svgMap-map-container"><div class="svgMap-map-wrapper"><svg class="svgMap-map-image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:ev="http://www.w3.org/2001/xml-events" style="overflow: hidden; "><g id="viewport-20240718131107680" class="svg-pan-zoom_viewport" transform="matrix(0.39802997851371763,0,0,0.39802997851371763,-22.52997851371765,-11.214004246115678)" style="transform: matrix(0.39803, 0, 0, 0.39803, -22.53, -11.214);"><path d="M1369.9,333.8h-5.4l-3.8-0.5l-2.5,2.9l-2.1,0.7l-1.5,1.3l-2.6-2.1l-1-5.4l-1.6-0.3v-2l-3.2-1.5l-1.7,2.3l0.2,2.6 l-0.6,0.9l-3.2-0.1l-0.9,3l-2.1-1.3l-3.3,2.1l-1.8-0.8l-4.3-1.4h-2.9l-1.6-0.2l-2.9-1.7l-0.3,2.3l-4.1,1.2l0.1,5.2l-2.5,2l-4,0.9 l-0.4,3l-3.9,0.8l-5.9-2.4l-0.5,8l-0.5,4.7l2.5,0.9l-1.6,3.5l2.7,5.1l1.1,4l4.3,1.1l1.1,4l-3.9,5.8l9.6,3.2l5.3-0.9l3.3,0.8l0.9-1.4 l3.8,0.5l6.6-2.6l-0.8-5.4l2.3-3.6h4l0.2-1.7l4-0.9l2.1,0.6l1.7-1.8l-1.1-3.8l1.5-3.8l3-1.6l-3-4.2l5.1,0.2l0.9-2.3l-0.8-2.5l2-2.7 l-1.4-3.2l-1.9-2.8l2.4-2.8l5.3-1.3l5.8-0.8l2.4-1.2l2.8-0.7L1369.9,333.8L1369.9,333.8z" id="map-map-country-AF" data-id="AF" class="svgMap-country" fill="#4B5563"></path><path d="M1077.5,300.5l-2,3.1l0.5,1.9l0,0l1,1l-0.5,1.9l-0.1,4.3l0.7,3l3,2.1l0.2,1.4l1,0.4l2.1-3l0.1-2.1l1.6-0.9V312 l-2.3-1.6l-0.9-2.6l0.4-2.1l0,0l-0.5-2.3l-1.3-0.6l-1.3-1.6l-1.3,0.5L1077.5,300.5L1077.5,300.5z" id="map-map-country-AL" data-id="AL" class="svgMap-country" fill="#4B5563"></path><path d="M1021,336.9l-3.6,0.4l-2.2-1.5h-5.6l-4.9,2.6l-2.7-1l-8.7,0.5l-8.9,1.2l-5,2l-3.4,2.6l-5.7,1.2l-5.1,3.5l2,4.1 l0.3,3.9l1.8,6.7l1.4,1.4l-1,2.5l-7,1l-2.5,2.4l-3.1,0.5l-0.3,4.7l-6.3,2.5l-2.1,3.2L944,383l-5.4,1l-8.9,4.7l-0.1,7.5v0.4l-0.1,1.2 l20.3,15.5l18.4,13.9l18.6,13.8l1.3,3l3.4,1.8l2.6,1.1l0.1,4l6.1-0.6l7.8-2.8l15.8-12.5l18.6-12.2l-2.5-4l-4.3-2.9l-2.6,1.2l-2-3.6 l-0.2-2.7l-3.4-4.7l2.1-2.6l-0.5-4l0.6-3.5l-0.5-2.9l0.9-5.2l-0.4-3l-1.9-5.6l-2.6-11.3l-3.4-2.6v-1.5l-4.5-3.8l-0.6-4.8l3.2-3.6 l1.1-5.3l-1-6.2L1021,336.9L1021,336.9z" id="map-map-country-DZ" data-id="DZ" class="svgMap-country" fill="#4B5563"></path><path d="M985.4,301.7l0.2-0.4l-0.2-0.2l-0.7-0.2l-0.3-0.1l-0.4,0.3l-0.1,0.3l0.1,0.1v0.4l0.1,0.2h0.4L985.4,301.7 L985.4,301.7z" id="map-map-country-AD" data-id="AD" class="svgMap-country" fill="#4B5563"></path><path d="M1068.3,609.6l-16.6-0.1l-1.9,0.7l-1.7-0.1l-2.3,0.9l-0.5,1.2l2.8,4l1.1,4.3l1.6,6.1l-1.7,2.6l-0.3,1.3l1.3,3.8 l1.5,3.9l1.6,2.2l0.3,3.6l-0.7,4.8l-1.8,2.8l-3.3,4.2l-1.3,2.6l-1.9,5.7l-0.3,2.7l-2,5.9l-0.9,5.5l0.5,4l2.7-1.2l3.3-1l3.6,0.1 l3.2,2.9l0.9-0.4l22.5-0.3l3.7,3l13.4,0.9l10.3-2.5l-3.5-4l-3.6-5.2l0.8-20.3l11.6,0.1l-0.5-2.2l0.9-2.4l-0.9-3l0.7-3l-0.5-2 l-2.6-0.4l-3.5,1l-2.4-0.2l-1.4,0.6l0.5-7.6l-1.9-2.3l-0.3-4l0.9-3.8l-1.2-2.4v-4h-6.8l0.5-2.3h-2.9l-0.3,1.1l-3.4,0.3l-1.5,3.7 l-0.9,1.6l-3-0.9l-1.9,0.9l-3.7,0.5l-2.1-3.3l-1.3-2.1l-1.6-3.8L1068.3,609.6L1068.3,609.6z M1046.5,608.3l0.2-2.7l0.9-1.7l2-1.3 l-2-2.2l-1.8,1.1l-2.2,2.7l1.4,4.8L1046.5,608.3L1046.5,608.3z" id="map-map-country-AO" data-id="AO" class="svgMap-country" fill="#4B5563"></path><path d="M627.9,456.2l0.1-0.2l-0.2-0.1l-0.8,0.5v0.1L627.9,456.2z" id="map-map-country-AI" data-id="AI" class="svgMap-country" fill="#4B5563"></path><path d="M634.3,463.8l0.2-0.1v-0.1v-0.2l-0.1-0.1l-0.1-0.2l-0.4-0.2l-0.5,0.5v0.2l0.1,0.3l0.6,0.1L634.3,463.8L634.3,463.8z M634.5,460.3v-0.5l-0.1-0.2h-0.3l-0.1-0.1h-0.1l-0.1,0.1l0.1,0.6l0.5,0.3L634.5,460.3L634.5,460.3z" id="map-map-country-AG" data-id="AG" class="svgMap-country" fill="#4B5563"></path><path d="M669.8,920.7l0.9-3l-7.3-1.5l-7.7-3.6l-4.3-4.6l-3-2.8l5.9,13.5h5l2.9,0.2l3.3,2.1L669.8,920.7L669.8,920.7z M619.4,712.6l-7.4-1.5l-4,5.7l0.9,1.6l-1.1,6.6l-5.6,3.2l1.6,10.6l-0.9,2l2,2.5l-3.2,4l-2.6,5.9l-0.9,5.8l1.7,6.2l-2.1,6.5 l4.9,10.9l1.6,1.2l1.3,5.9l-1.6,6.2l1.4,5.4l-2.9,4.3l1.5,5.9l3.3,6.3l-2.5,2.4l0.3,5.7l0.7,6.4l3.3,7.6l-1.6,1.2l3.6,7.1l3.1,2.3 l-0.8,2.6l2.8,1.3l1.3,2.3l-1.8,1.1l1.8,3.7l1.1,8.2l-0.7,5.3l1.8,3.2l-0.1,3.9l-2.7,2.7l3.1,6.6l2.6,2.2l3.1-0.4l1.8,4.6l3.5,3.6 l12,0.8l4.8,0.9l2.2,0.4l-4.7-3.6l-4.1-6.3l0.9-2.9l3.5-2.5l0.5-7.2l4.7-3.5l-0.2-5.6l-5.2-1.3l-6.4-4.5l-0.1-4.7l2.9-3.1l4.7-0.1 l0.2-3.3l-1.2-6.1l2.9-3.9l4.1-1.9l-2.5-3.2l-2.2,2l-4-1.9l-2.5-6.2l1.5-1.6l5.6,2.3l5-0.9l2.5-2.2l-1.8-3.1l-0.1-4.8l-2-3.8 l5.8,0.6l10.2-1.3l6.9-3.4l3.3-8.3l-0.3-3.2l-3.9-2.8l-0.1-4.5l-7.8-5.5l-0.3-3.3l-0.4-4.2l0.9-1.4l-1.1-6.3l0.3-6.5l0.5-5.1 l5.9-8.6l5.3-6.2l3.3-2.6l4.2-3.5l-0.5-5.1l-3.1-3.7l-2.6,1.2l-0.3,5.7l-4.3,4.8l-4.2,1.1l-6.2-1l-5.7-1.8l4.2-9.6l-1.1-2.8 l-5.9-2.5l-7.2-4.7l-4.6-1L632,713.7l-1-1.3l-6.3-0.3l-1.6,5.1L619.4,712.6L619.4,712.6z" id="map-map-country-AR" data-id="AR" class="svgMap-country" fill="#4B5563"></path><path d="M1219,325.1l-0.9-4.4l-2.5-1.1l-2.5-1.7l1-2l-3.1-2.2l0.7-1.5l-2.2-1.1l-1.4-1.7l-6.9,1l1.3,2.2v3.1l4.2,1.5 l2.4,1.9l1-0.2l1.8,1.7h2.3l0.2,1l2.8,3.7L1219,325.1L1219,325.1z" id="map-map-country-AM" data-id="AM" class="svgMap-country" fill="#4B5563"></path><path d="M586.6,492.9l-0.1-0.1l-0.3-0.6l-0.3-0.3l-0.1,0.1l-0.1,0.3l0.3,0.3l0.3,0.4l0.3,0.1L586.6,492.9L586.6,492.9z" id="map-map-country-AW" data-id="AW" class="svgMap-country" fill="#4B5563"></path><path d="M1726.7,832l-3-0.5l-1.9,2.9l-0.6,5.4l-2.1,4l-0.5,5.3l3,0.2l0.8,0.3l6.6-4.3l0.6,1.7l4-4.9l3.2-2.2l4.5-7.3 l-2.8-0.5l-4.8,1.2l-3.4,0.9L1726.7,832L1726.7,832z M1776.8,659.7l0.5-2.3l0.1-3.6l-1.6-3.2l0.1-2.7l-1.3-0.8l0.1-3.9l-1.2-3.2 l-2.3,2.4l-0.4,1.8l-1.5,3.5l-1.8,3.4l0.6,2.1l-1.2,1.3l-1.5,4.8l0.1,3.7l-0.7,1.8l0.3,3.1l-2.6,5l-1.3,3.5l-1.7,2.9l-1.7,3.4 l-4.1,2.1l-4.9-2.1l-0.5-2l-2.5-1.6h-1.6l-3.3-3.8l-2.5-2.2l-3.9-2l-3.9-3.5l-0.1-1.8l2.5-3.1l2.1-3.2l-0.3-2.6l1.9-0.2l2.5-2.5 l2-3.4l-2.2-3.2l-1.5,1.2l-2-0.5l-3.5,1.8l-3.2-2l-1.7,0.7l-4.5-1.6l-2.7-2.7l-3.5-1.5l-3.1,0.9l3.9,2.1l-0.3,3.2l-4.8,1.2l-2.8-0.7 l-3.6,2.2l-2.9,3.7l0.6,1.5l-2.7,1.7l-3.4,5.1l0.6,3.5l-3.4-0.6h-3.5l-2.5-3.8l-3.7-2.9l-2.8,0.8l-2.6,0.9l-0.3,1.6l-2.4-0.7 l-0.3,1.8l-3,1.1l-1.7,2.5l-3.5,3.1l-1.4,4.8l-2.3-1.3l-2.2,3.1l1.5,3l-2.6,1.2l-1.4-5.5l-4.8,5.4l-0.8,3.5l-0.7,2.5l-3.8,3.3 l-2,3.4l-3.5,2.8l-6.1,1.9l-3.1-0.2l-1.5,0.6l-1.1,1.4l-3.5,0.7l-4.7,2.4l-1.4-0.8l-2.6,0.5l-4.6,2.3l-3.2,2.7l-4.8,2.1l-3.1,4.4 l0.4-4.8l-3.1,4.6l-0.1,3.7l-1.3,3.2l-1.5,1.5l-1.3,3.7l0.9,1.9l0.1,2l1.6,5l-0.7,3.3l-1-2.5l-2.3-1.8l0.4,5.9l-1.7-2.8l0.1,2.8 l1.8,5l-0.6,5l1.7,2.5l-0.4,1.9l0.9,4.1l-1.3,3.6l-0.3,3.6l0.7,6.5l-0.7,3.7l-2.2,4.4l-0.6,2.3l-1.5,1.5l-2.9,0.8l-1.5,3.7l2.4,1.2 l4,4.1h3.6l3.8,0.3l3.3-2.1l3.4-1.8l1.4,0.3l4.5-3.4l3.8-0.3l4.1-0.7l4.2,1.2l3.6-0.6l4.6-0.2l3-2.6l2.3-3.3l5.2-1.5l6.9-3.2l5,0.4 l6.9-2.1l7.8-2.3l9.8-0.6l4,3.1l3.7,0.2l5.3,3.8l-1.6,1.5l1.8,2.4l1.3,4.6l-1.6,3.4l2.9,2.6l4.3-5.1l4.3-2.1l6.7-5.5l-1.6,4.7 l-3.4,3.2l-2.5,3.7l-4.4,3.5l5.2-1.2l4.7-4.4l-0.9,4.8l-3.2,3.1l4.7,0.8l1.3,2.6l-0.4,3.3l-1.5,4.9l1.4,4l4,1.9l2.8,0.4l2.4,1 l3.5,1.8l7.2-4.7l3.5-1.2l-2.7,3.4l2.6,1.1l2.7,2.8l4.7-2.7l3.8-2.5l6.3-2.7l6-0.2l4.2-2.3l0.9-2l3-4.5l3.9-4.8l3.6-3.2l4.4-5.6 l3.3-3.1l4.4-5l5.4-3.1l5-5.8l3.1-4.5l1.4-3.6l3.8-5.7l2.1-2.9l2.5-5.7l-0.7-5.4l1.7-3.9l1.1-3.7v-5.1l-2.8-5.1l-1.9-2.5l-2.9-3.9 l0.7-6.7l-1.5,1l-1.6-2.8l-2.5,1.4l-0.6-6.9l-2.2-4l1-1.5l-3.1-2.8l-3.2-3l-5.3-3.3l-0.9-4.3l1.3-3.3l-0.4-5.5l-1.3-0.7l-0.2-3.2 l-0.2-5.5l1.1-2.8l-2.3-2.5l-1.4-2.7l-3.9,2.4L1776.8,659.7L1776.8,659.7z" id="map-map-country-AU" data-id="AU" class="svgMap-country" fill="#4B5563"></path><path d="M1060.2,264l-2.3-1.2l-2.3,0.3l-4-1.9l-1.7,0.5l-2.6,2.5l-3.8-2l-1.5,2.9l-1.7,0.8l1,4l-0.4,1.1l-1.7-1.3l-2.4-0.2 l-3.4,1.2l-4.4-0.3l-0.6,1.6l-2.6-1.7l-1.5,0.3l0.2,1.1l-0.7,1.6l2.3,1.1l2.6,0.2l3.1,0.9l0.5-1.2l4.8-1.1l1.3,2.2l7.2,1.6l4.2,0.4 l2.4-1.4l4.3-0.1l0.9-1.1l1.3-4l-1.1-1.3h2.8l0.2-2.6l-0.7-2.1L1060.2,264L1060.2,264z" id="map-map-country-AT" data-id="AT" class="svgMap-country" fill="#4B5563"></path><path d="M1210.1,318.9l-1,0.2l1.2,2.4l3.2,2.9l3.7,0.9l-2.8-3.7l-0.2-1h-2.3L1210.1,318.9L1210.1,318.9z M1220.5,309.6 l-4.3-3.8l-1.5-0.2l-1.1,0.9l3.2,3.4l-0.6,0.7l-2.8-0.4l-4.2-1.8l-1.1,1l1.4,1.7l2.2,1.1l-0.7,1.5l3.1,2.2l-1,2l2.5,1.7l2.5,1.1 l0.9,4.4l5.3-4.7l1.9-0.5l1.9,1.9l-1.2,3.1l3.8,3.4l1.3-0.3l-0.8-3.2l1.7-1.5l0.4-2.2l-0.1-5l4.2-0.5l-2-1.7l-2.5-0.2l-3.5-4.5 l-3.4-3.2l0,0l-2.6,2.5l-0.5,1.5L1220.5,309.6L1220.5,309.6z" id="map-map-country-AZ" data-id="AZ" class="svgMap-country" fill="#4B5563"></path><path d="M574.4,437.3l0.2-0.6l-0.3-0.1l-0.5,0.7l-0.6,0.3h-0.3l-0.7-0.3h-0.5l-0.4,0.5l-0.6,0.1l0.1,0.1v0.2l-0.2,0.3v0.2 l0.1,0.3l1.5-0.1l1.3-0.2l0.7-0.9L574.4,437.3z M575.2,435.3l-0.4-0.3l-0.4,0.3l0.1,0.3L575.2,435.3L575.2,435.3z M575.2,429.5 l-0.4-0.2l-0.3,0.5l0.3,0.1l0.7-0.1l0.5,0.1l0.5,0.4l0.3-0.2l-0.1-0.1l-0.4-0.3l-0.6-0.1h-0.2L575.2,429.5L575.2,429.5z M568.6,430.8l0.7-0.6l0.7-0.3l0.9-1.1l-0.1-0.9l0.2-0.4l-0.6,0.1l-0.1,0.3l-0.1,0.3l0.3,0.4v0.2l-0.2,0.4l-0.3,0.1l-0.1,0.2 l-0.3,0.1l-0.4,0.5l-0.8,0.6l-0.2,0.3L568.6,430.8L568.6,430.8z M569.8,427.6l-0.6-0.2L569,427l-0.4-0.1l-0.1,0.2v0.2l0.1,0.4 l0.2-0.1l0.8,0.4l0.4-0.3L569.8,427.6z M565.7,426.5v-0.7l-0.4-0.5l-0.6-0.4l-0.1-1.2l-0.3-0.7l-0.2-0.6l-0.4-0.8v0.5l0.1,0.1 l0.1,0.6l0.4,0.9l0.1,0.4l-0.1,0.4l-0.4,0.1l-0.1,0.2l0.5,0.3l0.8,0.3l0.5,1.3L565.7,426.5L565.7,426.5z M561.6,423l-0.5-0.3 l-0.2-0.3l-0.7-0.7l-0.3-0.1l-0.2,0.4l0.4,0.1l0.9,0.7l0.4,0.2L561.6,423L561.6,423z M568.9,419l-0.1-0.3h-0.1l-0.3,0.1l-0.3,0.9 h0.3L568.9,419L568.9,419z M551.3,417.9l-0.2-0.3l-0.3,0.2h-0.5l-0.2,0.1h-0.4l-0.3,0.2l0.4,0.8l0.3,0.3l0.1,1l0.2,0.1l-0.1,0.7 l1.1,0.1l0.4-0.8V420v-0.1v-0.2v-0.2v-0.9l-0.3-0.5l-0.4,0.6l-0.4-0.3l0.6-0.4L551.3,417.9L551.3,417.9z M564.2,418.2l-1-1.4v-0.2 l-0.5-1.5l-0.3-0.1l-0.1,0.1l-0.1,0.2l0.4,0.4v0.4l0.3,0.2l0.4,1.1l0.4,0.4l-0.1,0.3l-0.4,0.3l-0.1,0.2h0.1l0.6-0.1h0.4L564.2,418.2 L564.2,418.2z M553.7,413l0.5-0.2l0,0l-0.3-0.2h-0.7l-0.4,0.1l-0.2,0.2l0.1,0.1l0.4,0.1L553.7,413L553.7,413z M551.3,415l-0.5-0.6 l-0.3-0.9l-0.2-0.4l0.1-0.5l-0.3-0.4l-0.6-0.4l-0.3,0.1l0.1,1.1l-0.2,0.6l-0.8,1.1l0.1,0.4l0,0l0.1,0.2l-0.5,0.4v-0.3l-0.6,0.1 l0.3,0.5l0.6,0.4l0.3,0.1l0.3-0.2v0.5l0.3,0.4l0.1,0.4l0.3-0.3l0.6-0.2l0.2-0.2l0.7-0.4v-0.2l0.1-0.6L551.3,415L551.3,415z M558,410 l-0.3-0.5l-0.1,0.1l-0.1,0.4l-0.3,0.4l0.5-0.1l0.4,0.1l0.6,0.5l0.7,0.2l0.3,0.6l0.6,0.6v0.6l-0.4,0.6l-0.1,0.7l-0.6,0.1l0.1,0.1 l0.3,0.3l0.1,0.4l0.2,0.2v-0.7l0.3-0.8l0.4-1.3l-0.1-0.3l-0.3-0.3l-0.7-0.9l-0.7-0.3L558,410L558,410z M549.2,402.1l-0.5-0.4 l-0.2,0.4v0.1l-0.1,0.3l-0.5,0.4l-0.5,0.1l-0.7-0.6l-0.2-0.1l0.8,1.1l0.3,0.1h0.4l0.9-0.3l1.6-0.5l1.7-0.2l0.1-0.2l-0.1-0.3 l-0.8,0.2l-1-0.1l-0.2,0.2h-0.4L549.2,402.1z M555.3,407.3l0.2-0.3l0.4-1.8l0.8-0.6l0.1-1.2l-0.5-0.5l-0.4-0.2l-0.1-0.2l0.1-0.2 l-0.2-0.1l-0.3-0.2l-0.4-0.6l-0.4-0.4l-0.7-0.1l-0.6-0.1l-0.4-0.1l-0.5,0.3h0.8l1.5,0.3l0.7,1.5l0.5,0.4l0.1,0.4l-0.2,0.4v0.4 l-0.3,0.5l-0.1,0.8l-0.3,0.4l-0.7,0.5l0.4,0.2l0.3,0.6L555.3,407.3L555.3,407.3z" id="map-map-country-BS" data-id="BS" class="svgMap-country" fill="#4B5563"></path><path d="M1253,408.3l0.7-3l-0.5-0.9l-1.6,1.2l0.6,0.9l-0.2,0.7L1253,408.3z" id="map-map-country-BH" data-id="BH" class="svgMap-country" fill="#4B5563"></path><path d="M1486.5,431.9l-4.5-10.1l-1.5,0.1l-0.2,4l-3.5-3.3l1.1-3.6l2.4-0.4l1.6-5.3l-3.4-1.1l-5,0.1l-5.4-0.9l-1.2-4.4 l-2.7-0.4l-4.8-2.7l-1.2,4.3l4.6,3.4l-3.1,2.4l-0.8,2.3l3.7,1.7l-0.4,3.8l2.6,4.8l1.6,5.2l2.2,0.6l1.7,0.7l0.6-1.2l2.5,1.3l1.3-3.5 l-0.9-2.6l5.1,0.2l2.8,3.7l1.5,3.1l0.8,3.2l2,3.3l-1.1-5.1l2.1,1L1486.5,431.9L1486.5,431.9z" id="map-map-country-BD" data-id="BD" class="svgMap-country" fill="#4B5563"></path><path d="M644.9,488.9l0.4-0.4l-0.3-0.3l-0.6-0.8l-0.3,0.1v1l0.1,0.3l0.5,0.3L644.9,488.9L644.9,488.9z" id="map-map-country-BB" data-id="BB" class="svgMap-country" fill="#4B5563"></path><path d="M1112.8,219.4l-5.2-1.5l-4.6,2.3l-2.6,1l0.9,2.6l-3.5,2l-0.5,3.4l-4.8,2.2h-4.6l0.6,2.7l1.7,2.3l0.3,2.4l-2.7,1.2 l1.9,2.9l0.5,2.7l2.2-0.3l2.4-1.6l3.7-0.2l5,0.5l5.6,1.5l3.8,0.1l2,0.9l1.6-1.1l1.5,1.5l4.3-0.3l2,0.6l-0.2-3.1l1.2-1.4l4.1-0.3l0,0 l-2-3.9l-1.5-2l0.8-0.6l3.9,0.2l1.6-1.3l-1.7-1.6l-3.4-1.1l0.1-1.1l-2.2-1.1l-3.7-3.9l0.6-1.6l-1-2.9l-4.8-1.4l-2.3,0.7 L1112.8,219.4L1112.8,219.4z" id="map-map-country-BY" data-id="BY" class="svgMap-country" fill="#4B5563"></path><path d="M1000.7,246.2l-4.4,1.3l-3.6-0.5l0,0l-3.8,1.2l0.7,2.2l2.2,0.1l2.4,2.4l3.4,2.9l2.5-0.4l4.4,2.8l0.4-3.5l1.3-0.2 l0.4-4.2l-2.8-1.4L1000.7,246.2L1000.7,246.2z" id="map-map-country-BE" data-id="BE" class="svgMap-country" fill="#4B5563"></path><path d="M482.5,471.1l1.4-2.2l1-0.2l1.3-1.7l1-3.2l-0.3-0.6l0.9-2.3l-0.4-1l1.3-2.7l0.3-1.8h-1.1l0.1-0.9h-1l-2.5,3.9 l-0.9-0.8l-0.7,0.3l-0.1,1l-0.7,5l-1.2,7.2L482.5,471.1L482.5,471.1z" id="map-map-country-BZ" data-id="BZ" class="svgMap-country" fill="#4B5563"></path><path d="M996.9,498l-4.3-3.7h-2l-1.9,1.9l-1.2,1.9l-2.7,0.6l-1.2,2.8l-1.9,0.7l-0.7,3.3l1.7,1.9l2,2.3l0.2,3.1l1.1,1.3 l-0.2,14.6l1.4,4.4l4.6-0.8l0.3-10.2L992,518l1-4l1.7-1.9l2.7-4l-0.6-1.7l1.1-2.5l-1.2-3.8L996.9,498L996.9,498z" id="map-map-country-BJ" data-id="BJ" class="svgMap-country" fill="#4B5563"></path><path d="M630.2,366.8l0.4-0.6h-0.1l-0.5,0.5l-0.6,0.2l0.1,0.1h0.1L630.2,366.8z" id="map-map-country-BM" data-id="BM" class="svgMap-country" fill="#4B5563"></path><path d="M1474.7,395.5l-2.7-1.8l-2.9-0.1l-4.2-1.5l-2.6,1.6l-2.6,4.8l0.3,1.2l5.5,2.5l3.2-1l4.7,0.4l4.4-0.2l-0.4-3.9 L1474.7,395.5L1474.7,395.5z" id="map-map-country-BT" data-id="BT" class="svgMap-country" fill="#4B5563"></path><path d="M655.7,700.5l1.6-1.3l-0.8-3.6l1.3-2.8l0.5-5l-1.6-4l-3.2-1.7l-0.8-2.6l0.6-3.6l-10.7-0.3l-2.7-7.4l1.6-0.1 l-0.3-2.8l-1.2-1.8l-0.5-3.7l-3.3-1.9l-3.5,0.1l-2.5-1.9l-3.8-1.2l-2.4-2.4l-6.3-1l-6.4-5.7l0.3-4.3l-0.9-2.5l0.4-4.7l-7.3,1.1 l-2.8,2.3l-4.8,2.6l-1.1,1.9l-2.9,0.2l-4.2-0.6l5.5,10.3l-1.1,2.1l0.1,4.5l0.3,5.4l-1.9,3.2l1.2,2.4l-1.1,2.1l2.8,5.3L591,684 l3.1,4.3l1.2,4.6l3.2,2.7l-1.1,6.2l3.7,7.1l3.1,8.8l3.8-0.9l4-5.7l7.4,1.5l3.7,4.6l1.6-5.1l6.3,0.3l1,1.3l1.5-7.6l-0.2-3.4l2.1-5.6 l9.5-1.9l5.1,0.1l5.4,3.3L655.7,700.5L655.7,700.5z" id="map-map-country-BO" data-id="BO" class="svgMap-country" fill="#4B5563"></path><path d="M1062.2,284.9l-2.3,0.1l-1,1.3l-1.9-1.4l-0.9,2.5l2.7,2.9l1.3,1.9l2.5,2.3l2,1.4l2.2,2.5l4.7,2.4l0.4-3.4l1.5-1.4 l0.9-0.6l1.2-0.3l0.5-2.9l-2.7-2.3l1-2.7h-1.8l0,0l-2.4-1.4l-3.5,0.1L1062.2,284.9L1062.2,284.9z" id="map-map-country-BA" data-id="BA" class="svgMap-country" fill="#4B5563"></path><path d="M1116.7,685l-1-0.5l-3.2,1.5h-1.6l-3.7,2.5l-2-2.6l-8.6,2.2l-4.1,0.2l-0.9,22.7l-5.4,0.2l-0.6,18.5l1.4,1l3,6.1 l-0.7,3.8l1.1,2.3l4-0.7l2.8-2.8l2.7-1.9l1.5-3.1l2.7-1.5l2.3,0.8l2.5,1.8l4.4,0.3l3.6-1.5l0.6-2l1.2-3l3-0.5l1.7-2.4l2-4.3l5.2-4.7 l8-4.7l-3.4-2.9l-4.2-0.9l-1.5-4.1l0.1-2.2l-2.3-0.7l-6-7l-1.6-3.7l-1.1-1.1L1116.7,685L1116.7,685z" id="map-map-country-BW" data-id="BW" class="svgMap-country" fill="#4B5563"></path><path d="M659,560.1l-1.4,0.2l-3.1-0.5l-1.8,1.7l-2.6,1.1l-1.7,0.2l-0.7,1.3l-2.7-0.3l-3.5-3l-0.3-2.9l-1.4-3.3l1-5.4 l1.6-2.2l-1.2-3l-1.9-0.9l0.8-2.8l-1.3-1.5l-2.9,0.3l0.7,1.8l-2.1,2.4l-6.4,2.4l-4,1l-1.7,1.5l-4.4-1.6l-4.2-0.8l-1,0.6l2.4,1.6 l-0.3,4.3l0.7,4l4.8,0.5l0.3,1.4l-4.1,1.8l-0.7,2.7l-2.3,1l-4.2,1.5l-1.1,1.9l-4.4,0.5l-3-3.4l-1.1,0.8l-1-3.8l-1.6-2l-1.9,2.2 l-10.9-0.1v3.9l3.3,0.7l-0.2,2.4l-1.1-0.6l-3.2,1v4.6l2.5,2.4l0.9,3.6l-0.1,2.8l-2.2,17.4l-5.1-0.3l-0.7,1l-4.6,1.2l-6.2,4.3l-0.4,3 l-1.3,2.2l0.7,3.4l-3.3,1.9l0.1,2.7L562,620l2.6,5.8l3.3,3.8l-1,2.8l3.7,0.3l2.3,3.4l4.9,0.2l4.4-3.8l0.2,9.7l2.6,0.7l3-1.1l4.2,0.6 l2.9-0.2l1.1-1.9l4.8-2.6l2.8-2.3l7.3-1.1l-0.4,4.7l0.9,2.5l-0.3,4.3l6.4,5.7l6.3,1l2.4,2.4l3.8,1.2l2.5,1.9l3.5-0.1l3.3,1.9 l0.5,3.7l1.2,1.8l0.3,2.8l-1.6,0.1l2.7,7.4l10.7,0.3l-0.6,3.6l0.8,2.6l3.2,1.7l1.6,4l-0.5,5l-1.3,2.8l0.8,3.6l-1.6,1.3l1.9,3.6 l0.4,8.6l6,1.2l2.1-1.2l3.9,1.7l1.2,1.9l1,5.8l0.9,2.5l2,0.3l2-1.1l2.1,1.2l0.3,3.5l-0.3,3.8l-0.7,3.6l2.6-1.2l3.1,3.7l0.5,5.1 l-4.2,3.5l-3.3,2.6l-5.3,6.2l-5.9,8.6l3.4-0.7l6.2,4.9l1.9-0.2l6.2,4.1l4.8,3.5l3.8,4.3l-1.9,3l2.1,3.7l2.9-3.7l1.5-6l3.2-3l3.9-5 l4.5-11.2l3.4-3.5l0.8-3.1l0.3-6.4l-1.3-3.5l0.3-4.8l4.1-6.3l6-5.1l6-1.8l3.6-2.9l8.5-2.4h5.9l1.1-3.8l4.2-2.8l0.6-6.5l5.1-8.3 l0.5-8.5l1.6-2.6l0.3-4.1l1.1-9.9l-1-11.9l1.4-4.7l1.4-0.1l3.9-5.5l3.3-7.2l7.7-8.8l2.7-4.2l2-10.5l-1-3.9l-2-8.1l-2.1-2l-4.8-0.2 l-4.3-1.9l-7.3-7.1l-8.4-5.3l-8.4,0.3l-10.9-3.4l-6.5,2l0.8-3.5l-2.7-3.8l-9.4-3.8l-7.1-2.3l-4.2,4.1l-0.3-6.3l-9.9-1l-1.7-2 l4.2-5.2l-0.1-4.4l-3-1l-3-11.2l-1.3-3.5l-1.9,0.3l-3.5,5.8l-1.8,4.7l-2.1,2.4l-2.7,0.5l-0.8-1.8l-1.2-0.3l-1.8,1.8l-2.4-1.3 l-3.2-1.4l-2.7,0.7l-2.3-0.6l-0.5,1.8l0.9,1.3l-0.5,1.3L659,560.1L659,560.1z" id="map-map-country-BR" data-id="BR" class="svgMap-country" fill="#a4cafe"></path><path d="M619.2,455.1l0.3-0.2l-0.2-0.1h-0.4l-0.3,0.2l0.1,0.1H619.2L619.2,455.1z M620.3,454.7l0.4-0.4l-0.5,0.1l-0.2,0.2 l0.1,0.1h0.1L620.3,454.7L620.3,454.7z M621.1,452.9h-0.2h-0.5l0,0l0.1,0.1h0.3l0.3,0.1l0,0L621.1,452.9L621.1,452.9z" id="map-map-country-VG" data-id="VG" class="svgMap-country" fill="#4B5563"></path><path d="M1617.8,543.4l2.7,3.3l1.1-2.2l2.7,0.2l0.1-4.1l0.1-3.1l-4.6,3.5L1617.8,543.4L1617.8,543.4z" id="map-map-country-BN" data-id="BN" class="svgMap-country" fill="#4B5563"></path><path d="M1121.6,294.3l-3-0.7l-4-2.2l-5.8,1.4l-2.3,1.6l-7.5-0.3l-4-1l-1.9,0.5l-1.8-2.6l-1.1,1.4l0.7,2.3l2.8,2.6l-1.7,1.9 l-0.7,2l0.6,0.7l-0.7,0.9l2.8,2l0.8,4.1l3.8,0.2l3.9-1.7l3.9,2.1l4.6-0.6l-0.3-3l5-2l4.5,0.8l-2.1-3.5l1.3-4.4L1121.6,294.3 L1121.6,294.3z" id="map-map-country-BG" data-id="BG" class="svgMap-country" fill="#4B5563"></path><path d="M978.8,477.2h-3.6l-1.4-1.2l-3,0.9l-5.2,2.6l-1.1,2l-4.3,2.9l-0.8,1.6l-2.3,1.3l-2.7-0.9l-1.6,1.6l-0.8,4.4 l-4.5,5.2l0.2,2.2l-1.6,2.7l0.4,3.7l2.5,1.4l1,2.1l2.5,1.3l1.9-1.6l2.7-0.2l3.8,1.6l-0.8-4.8l0.2-3.6l9.7-0.3l2.4,0.5l1.8-1l2.6,0.5 l4.9,0.1l1.9-0.7l1.2-2.8l2.7-0.6l1.2-1.9l0.1-4.4l-6.4-1.4l-0.2-3.1l-3.1-4.1l-0.8-2.9L978.8,477.2L978.8,477.2z" id="map-map-country-BF" data-id="BF" class="svgMap-country" fill="#4B5563"></path><path d="M1148.2,590l-0.3-2.5l0,0l-3-0.4l-1.7,3.6l-3.5-0.5l1.4,2.9l0.1,1.1l2,6.1l-0.1,0.3l0.6-0.1l2.1-2.3l2.2-3.3 l1.4-1.4v-2L1148.2,590L1148.2,590z" id="map-map-country-BI" data-id="BI" class="svgMap-country" fill="#4B5563"></path><path d="M1574.8,481.8l-5.2-2.3l-2,4.3l-4.9-2.4l-5.3-1l-7.1,1.3l-3,5.2l2.1,7.7l3.4,6.6l2.6,3.3l4.7,0.9l4.7-2.5l5.8-0.5 l-2.8-3.8l8.9-4.9l-0.1-7.7L1574.8,481.8L1574.8,481.8z" id="map-map-country-KH" data-id="KH" class="svgMap-country" fill="#4B5563"></path><path d="M1060.1,502.9l0.2-4.3l-0.5-4.2l-2.2-4.1l-1.6,0.4l-0.2,2l2.3,2.6l-0.6,1.1l-0.3,2.1l-4.6,5l-1.5,4l-0.7,3.3 l-1.2,1.4l-1.1,4.5l-3,2.6l-0.8,3.2l-1.2,2.6l-0.5,2.6l-3.9,2.2l-3.2-2.6l-2.1,0.1l-3.3,3.7l-1.6,0.1l-2.7,6.1l-1.4,4.5v1.8l1.4,0.9 l1.1,2.8l2.6,1.1l2.2,4.2l-0.8,5l9.2,0.2l2.6-0.4l3.4,0.8l3.4-0.8l0.7,0.3l7.1,0.3l4.5,1.7l4.5,1.5l0.4-3.5l-0.6-1.8l-0.3-2.9 l-2.6-2.1l-2.1-3.2l-0.5-2.3l-2.6-3.3l0.4-1.9l-0.6-2.7l0.4-5l1.4-1.1l2.7-6.5l0.9-1.7l-1.8-4.4l-0.8-2.6l-2.5-1.1l-3.3-3.7l1.2-3 l2.5,0.6l1.6-0.4l3.1,0.1L1060.1,502.9L1060.1,502.9z" id="map-map-country-CM" data-id="CM" class="svgMap-country" fill="#4B5563"></path><path d="M659,276.7l-0.7-3l-2.5,1.9l0.5,2.1l5.6,2.6l1.9-0.4l3.3-2.5l-4.7,0.1L659,276.7L659,276.7z M673.4,260.8l0.2-1.1 l-4.1-2.6l-5.9-1.6l-1.9,0.6l3.5,2.9l5.7,1.9L673.4,260.8L673.4,260.8z M368.1,264.5l0.2-3.4l-3.2-2.6l-0.4-2.9l-0.1-2.1l-4.1-0.7 l-2.4-0.9l-4.1-1.4l-1.4,1.5l-0.6,3.3l4.3,1.1l-0.4,1.8l2.9,2.2v2.2l6.3,2.8L368.1,264.5L368.1,264.5z M704.2,251l3.9-3.8l1.4-1.7 l-2.1-0.3l-4.9,2.2l-4.2,3.5l-8.1,9.8l-5.3,3.7l1.6,1.7l-3.8,2.2l0.2,1.9l9.6,0.1l5.4-0.3l4.4,1.5l-4.4,2.9l2.9,0.2l7.3-5.4l1.2,0.8 l-2.5,5.1l3,1.2l2.3-0.2l3.5-5.5l-0.5-3.9l0.3-3.3l-3.7,1.1l2.8-4.6l-4.3-1.9l-2.7,1.5l-3.9-1.7l2.4-2.1l-2.9-1.3l-3.8,2L704.2,251 L704.2,251z M347.4,229.8l-1.9,2l-1.4,2.6l0.9,1.9l-0.6,2.8l0.7,2.8h1.9l-0.2-4.9l7.1-6.9l-4.9,0.5L347.4,229.8L347.4,229.8z M628.3,182.8l-0.4-1.2l-1.7-0.1l-2.8,1.7l-0.4,0.4l0.1,1.7l1.7,0.5L628.3,182.8L628.3,182.8z M618.7,179.6l0.8-1.1l-6-0.1l-4.9,2.7 v1.5l3,0.2L618.7,179.6L618.7,179.6z M615.6,163l-2.7-0.5l-5,5.2l-3.6,4.4l-5.7,2.8l6.3-0.6l-0.8,3.4l8.2-3l6.2-3l0.8,2.6l5.9,1.3 l4.9-1.8l-1.9-1.8l-3.4,0.4l1.3-2.7l-3.7-1.7l-3.4-1.9l-1.5-1.5l-2.8,0.9L615.6,163L615.6,163z M660.2,154.8l3.7-1.7l1-0.7l1.4-2.3 l-2.3-1.5l-4.2,0.7l-3.8,3.1l-0.7,2.6L660.2,154.8L660.2,154.8z M586.4,144.1l-0.8-2l-0.3-1l-1.6-1l-3-1.5l-4.9,2.3l-5,1.7l3.5,2.4 l3.8-0.6l4.1,1.6L586.4,144.1z M608.8,142l-6.6-1l5.7-2.6l-0.4-6l-1.9-2.3l-4.5-0.8l-8.1,3.8l-5.5,5.8l2.9,2.1l1.6,3.3l-6.3,5.5 l-3.2-0.2l-6.2,4.4l4.2-5.2l-4.8-1.8l-4.5,0.9l-2.4,3.4l-5.9-0.1l-7.2,0.8l-5.1-2.4l-5,0.4l-1.5-2.9l-2.1-1.3l-3.8,0.5l-5.2,0.3 l-4.4,1.8l2,2.3l-7,2.8l-1.4-3.3l-4.4,1l-11.8,0.6l-6.4-1.2l8.5-2.6l-2.8-2.8l-4.4,0.4l-4.7-1l-7.5-1.9l-3.8-2.3l-4.5-0.3l-3.3,1.6 l-5.9,0.9l3.9-4.1l-9.4,3.6l-1.4-4.7l-2.1-0.6l-3.8,2.5l-4.5,1.2l-0.2-2.2l-8.2,1.4l-8.8,2.3l-5.2-0.6l-7,1.6l-6.2,2.3l-3.7-0.5 l-3.3-2.6l-5.9-1.3l0,0l-24.3,20.2l-35.4,32.4l4.2,0.1l2.7,1.6l0.6,2.6l0.2,3.9l7.6-3.3l6.4-1.9l-0.5,3l0.7,2.4l1.7,2.7l-1.1,4.2 l-1.5,6.8l4.6,3.8l-3.1,3.7l-5.1,2.9l0,0l-2.5,3.1l2.1,4.4l-3.1,4.9l4.1,2.6l-3.6,3.7l-1.3,5.5l6.9,2.5l1.6,2.7l5.4,6.1h0.7h13.9 h14.6h4.8h15h14.5h14.7h14.8h16.7h16.8h10.1l1.3-2.4h1.6l-0.8,3.4l1,1l3.2,0.4l4.6,1l3.8,1.9l4.4-0.8l5.3,1.6l0,0l3.2-2.4l3.2-1 l1.8-1.5l1.5-0.8l4,1.2l3.3,0.2l0.8,0.8l0.1,3.5l5.2,1l-1.7,1.7l1.2,1.9l-1.9,2.3l1.8,0.8l-1.9,2.1l0,0l1.2,0.2l1.3-0.9l0.5,1.4 l3.4,0.7l3.8,0.1l3.8,0.6l4,1.2l0.8,2l1.4,4.7l-2.4,2l-3.8-0.8l-1-3.8l-0.9,3.9l-3.8,3.4l-0.8,2.9l-1.1,1.7l-4.1,2l0,0l-3.7,3.4 l-2,2.2l2.7,0.4l4.5-2l2.9-1.7l1.6-0.3l2.6,0.6l1.7-0.9l2.8-0.8l4.7-0.8l0,0l0,0l0.3-1.8l-0.3,0.1l-1.7,0.3l-1.8-0.6l2.3-2.1 l1.9-0.7l3.9-0.9l4.6-0.9l1.8,1.2l1.9-1.4l1.9-0.8l0.9,0.4l0.1,0.1l6.7-4.2l2.7-1.2h7.7h9.3l1-1.6l1.7-0.3l2.5-0.9l2.7-2.8l3.2-4.9 l5.5-4.7l1.1,1.7l3.7-1.1l1.5,1.8l-2.8,8.5l2.1,3.5l5.9-0.8l8.1-0.2l-10.4,5.1l-1.5,5.2l3.7,0.5l7.1-4.5l5.8-2.4l12.2-3.7l7.5-4.1 l-2.6-2.2l1-4.5l-7.1,7l-8.6,0.8l-5.5-3.1l-0.1-4.6l0.6-6.8l6.1-4.1l-3.3-3.1l-7.6,0.6l-12.1,5.2l-10.9,8.2l-4.6,1l7.8-5.7l10.1-8.3 l7.2-2.7l5.7-4.4l5.2-0.5l7.3,0.1l10,1.3l8.6-1l7.8-5.1l8.7-2.2l4.2-2.1l4.2-2.3l2-6.8l-1.1-2.3l-3.4-0.8v-5.1l-2.3-1.9l-6.9-1.6 l-2.8-3.4l-4.8-3.4l3.4-3.7l-2-7.1l-2.6-7.5l-1-5.2l-4.3,2.7l-7.4,6.5l-8.1,3.2l-1.6-3.4l-3.7-1l2.2-7.3l2.6-4.9l-7.7-0.5l-0.1-2.2 l-3.6-3.3l-3-2l-4.5,1.5l-4.2-0.5l-6.6-1.6l-3.9,1.3l-3.8,9l-1,5.3l-8.8,6.1l3.1,4.5l0.5,5l-1.7,4l-4.7,4.1L610,224l-9,2.8l1.7,3.2 l-2.2,9.6l-5.6,6.3l-4.6,1.9l-4.4-5.8l-0.1-6.8l1.7-6l3.6-5.2l-4.8-0.6l-7.5-0.4l-3.6-2.5l-4.8-1.6l-1.7-2.9l-3.3-2.2l-7-2.6 l-7.1,1.2l0.7-4.5l1.5-5.5l-6-1l4.9-6.8l4.9-4.6l9.4-6.5l8.6-4.6l5.6-0.7l2.9-3.7l5.1-2.4l6.4-0.4l7.7-3.8l2.9-2.4l7.4-4.7l3.2-2.8 l3.2,1.7l6.5-0.9L637,155l2.3-2.7l-0.8-2.9l5-2.9l1.7-2.7l-3.5-2.6l-5.4-0.8l-5.5-0.4l-4.6,5.9l-6.5,4.6l-7.2,4l-1.3-3.7l4.2-4 l-2.2-3.5l-8.7,4.2L608.8,142L608.8,142z M533.3,123.1l-2.8-1l-14.1,3.2l-5.1,2l-7.8,3.9l5.4,1.4l6.2-0.1l-11.5,2.1v1.9l5.6,0.1 l9-0.4l6.5,1.2l-6.2,1l-5.5-0.3l-7.1,0.9l-3.3,0.6l0.6,4.2l4.2-0.6l4.1,1.5l-0.3,2.5l7.8-0.5l11.2-0.8l9.4-1.8l5-0.4l5.7,1.5 l6.7,0.8l3.1-1.9l-0.7-2.1l7-0.4l2.6-2.4l-5-2.5l-4.2-2.6l2.4-3.6l2.7-5.1l-2.2-2l-3-0.9l-4.2,0.8l-2.8,5.3l-4.3,2.1l2.2-5.1 l-1.7-1.7l-7.3,2.7L539,124l-10.4,1.5L533.3,123.1L533.3,123.1z M572.4,121.6l-1.7-1.1l-5.4,0.2l-2.1,0.7l2.2,3.6 C565.4,125,572.4,121.6,572.4,121.6z M680.1,123.2l-4.4-2.8l-8.4-0.5l-2.1,0.3l-1.7,1.8l2,2.8l0.9,0.3l4.8-0.7l4.1,0.1l4.1,0.1 L680.1,123.2L680.1,123.2z M640.7,122.9l5.7-3.2l-11.2,1.3l-5.8,2.1l-7.1,4.6l-3.3,5.2l5.6,0.1l-6.1,2.3l1.8,1.9l5.9,0.8l7.3,1.5 l13.8,1.2l7.9-0.6l3.2-1.6l2,1.8l3.3,0.3l2,3.3l-3.5,1.4l7.1,1.8l4.6,2.6l0.5,1.9L674,154l-8.6,5.4l-3.2,2.7l0.2,2l-9.2,0.7l-8,0.1 l-5.4,4.2l2.4,1.9l13-0.9l0.9-1.6l4.7,2.7l4.7,2.9l-2.4,1.6l3.8,2.8l7.6,3.3l10.7,2.3l0.3-2l-2.8-3.5l-3.5-4.9l8.5,4.6l4.7,1.5 l3.6-4.1v-5.6l-1-1.5l-4.4-2.5l-2.7-3.3l2.3-3.2l5.8-0.7l3.8,5.4l4,2.4l10.7-6.5l3.3-3.9l-6.4-0.3l-3.2-5.1l-5.9-1.2l-7.7-3.5l9-2.5 l-0.8-5l-2.2-2.1l-8.3-2.1l-1.9-3.3l-8.2,1.2l1.1-2.3l-3.6-2.5l-6.8-2.6l-5.2,2.1l-9,1.5l3.3-3.4l-2.3-5.3l-11.6,2.1l-7.1,4.1 L640.7,122.9L640.7,122.9z M590.7,119.5l-7.1,2.4l0.9,3.4l-7.4-0.7l-1.7,1.7l5.8,3.9l0.9,2l3.4,0.5l8.4-2l5.1-4.7l-3.8-2.2l6-2.4 l0.5-1.5l-7.5,0.6L590.7,119.5L590.7,119.5z M613,124.9l5.6-1l10-4.5l-6.1-1.2l-7.8-0.2l-5.2,1.4l-4.2,2.1l-2.5,2.6l-1.8,4.5 l4.3,0.2L613,124.9z M498.3,132.1l2.6-2.3l9.1-3.6l13.8-3.6l6.4-1.3l-1.6-2.1l-1.9-1.5l-9.4-0.2l-4.1-1.1l-14,0.8l-0.3,3.1l-7.6,3.3 l-7.4,3.8l-4.3,2.2l5.9,2.7l-0.6,2.3L498.3,132.1L498.3,132.1z M622.4,113.8l0.3-1.6l-1.4-1.7l-6.9,1.3L610,114l3.2,1.3l5.1,0.4 L622.4,113.8L622.4,113.8z M613.7,105.2l-1.1,0.7l-4.8-0.3l-7.6,1.6l-3.8-0.1l-4.3,3.8l6.6-0.4l-3.4,2.9l3.2,0.8l6.8-0.5l5.8-3.7 l2.8-2.5L613.7,105.2z M574.6,107.7l1.8-2.3l-3.1-0.5l-5.7,1.7l-0.7,4.7l-6.1-0.4L558,108l-8.2-1.6l-5.4,1.4l-11.6,4.8l4.1,0.8 l17.8-0.5l-10.6,2.2l-1.5,1.6l5.9-0.1l12.2-2.2l13.8-0.8l5.1-2.3l2.3-2.4l-3.7-0.2l-4.3,0.8C573.9,109.5,574.6,107.7,574.6,107.7z M629.8,103.4l-7.1-0.3l-3.8,2l2.6,1.5l7,0.6l1.4,2.1l-2.2,2.4l-1.5,2.8l8.5,1.6l5.5,0.6l8-0.1l11.6-0.8l4.3,0.6l6.7-1l3.5-1.4l1-2 l-2.3-1.9l-5.8-0.3l-8,0.4l-7,1.1l-5.1-0.4l-4.8-0.3l-1.2-1.1l-3.1-1.1l2.8-1.9l-1.4-1.6l-7.3,0.1L629.8,103.4L629.8,103.4z M554.8,100.8l-6,0.7l-5.5-0.1l-12.1,3.1l-11.6,3.7l0,0l3.6,1l7-0.7l9.8-2.1l3.8-0.3l5.2-1.6L554.8,100.8z M635.3,101.4l1-0.5 l-1.5-0.9l-7.2-0.1l-0.6,1.3l6.4,0.3L635.3,101.4L635.3,101.4z M576.9,100.6l3.2-1.4l-4.1-0.8l-5.9,0.5l-5.1,1.5l3.3,1.5 C568.3,101.9,576.9,100.6,576.9,100.6z M584.7,96.4l-3.3-0.9l-1.6-0.2l-5.7,1.3l-1,0.7h6L584.7,96.4z M631.1,98.9l3-1.7l-2.3-1.6 l-1.7-0.3l-4.4-0.1l-2.1,1.8l-0.7,1.8l1.6,1.1L631.1,98.9L631.1,98.9z M617.4,97.7l0.1-2.2l-7.4-1.7l-6.1-0.6l-2.1,1.7l2.8,1.1 l-5.3,1.4l7.7,0.2l4,1.5l5.2,0.5L617.4,97.7z M671.1,91.6l0.6-2.8L667,88l-4.7-0.9l-1.6-2.2l-8.2,0.2l0.3,0.9l-3.9,0.3l-4.1,1.3 l-4.9,1.9l-0.3,1.9l2,1.5h6.5l-4.3,1.2l-2.1,1.6l1.6,1.9l6.7,0.6l6.8-0.4l10.5-3.4l6.4-1.3L671.1,91.6z M749.6,77.8l-7-0.2l-6.9-0.3 l-10.2,0.6l-1.4-0.4l-10.3,0.2l-6.4,0.4l-5.1,0.6l-5,2l-2.3-1l-3.9-0.2l-6.7,1.4l-7.4,0.6l-4.1,0.1l-6,0.8l-1.1,1.3l2.5,1.2l0.8,1.6 l4.4,1.5l12.4-0.3l7.2,0.5l-7.2,1.5l-2.2-0.4l-9.3-0.2l-1.1,2.2l3,1.7l-2.8,1.6l-7.5,1.1l-4.9,1.7l4.8,0.9l1.7,3l-7.5-2l-2.5,0.3 l-2,3.4l-8,1.1l-2,2.3l6.7,0.3l4.9,0.6l11.7-0.8l8.4,1.4l12.6-3l1-1.1l-6.4,0.2l0.5-1.1l6.5-1.4l3.6-1.9l6.8-1.3l5-1.6l-0.8-2.2 l3.3-0.8l-4.3-0.6l11.1-0.4l3.2-0.9l7.9-0.8l9.3-3.5l6.8-1.1l10.3-2.5h-7.4l3.9-0.9l9-0.8l9.7-1.6l1.1-1.1l-5.2-1l-6.7-0.4 L749.6,77.8L749.6,77.8z" id="map-map-country-CA" data-id="CA" class="svgMap-country" fill="#5f90ed"></path><path d="M841.4,477.6l0.1-0.4l-0.2-0.6l-0.3-0.1l-0.6,0.4l-0.1,0.3l0.1,0.3l0.3,0.3l0.3,0.1L841.4,477.6L841.4,477.6z M847.7,475.9l0.4-0.2V475l-0.1-0.3h-0.4l-0.2,0.4v0.1v0.4L847.7,475.9L847.7,475.9L847.7,475.9z M846.3,476.7l-0.5-0.9l-0.3-0.1 l-0.6-0.7v-0.3l-0.3-0.1v0.2v0.4l-0.2,0.5v0.5l0.4,0.8l0.4,0.2l0.7,0.1L846.3,476.7L846.3,476.7z M849.4,468.9v0.5l-0.3,0.7l0.5,0.3 l0.3,0.1l0.6-0.4l0.2-0.5l-0.1-0.3l-0.3-0.3l-0.3-0.1l-0.1,0.1L849.4,468.9L849.4,468.9z M843,466.4l-1-0.1l-0.6-0.2h-0.1v0.3 l0.4,0.8l0.2-0.5l0.2-0.1l0.8,0.2l0.4-0.1l-0.1-0.1L843,466.4L843,466.4z M849.7,466.2l-0.1-0.5V465h-0.2l-0.3,0.2l0.1,0.7l0.1,0.1 l0.2,0.5L849.7,466.2L849.7,466.2z M838.6,465.2V465l-0.3-0.5l-0.3,0.1l-0.4,0.2l-0.1,0.3l0.4,0.2h0.2L838.6,465.2L838.6,465.2z M837.1,464.3l0.8-0.6l0.2-0.3l-0.2-0.5l-0.5-0.1l-1.2,0.6l-0.1,0.2l0.1,0.3l0.1,0.5l0.2,0.1L837.1,464.3L837.1,464.3z" id="map-map-country-CV" data-id="CV" class="svgMap-country" fill="#4B5563"></path><path d="M527,449.1l-0.1-0.3l-0.1,0.1v0.6h0.5h0.2l0.3-0.2h0.6l-0.1-0.2l-0.8-0.1l-0.1,0.1l-0.2,0.1L527,449.1L527,449.1z M535,446.8L535,446.8l-0.1-0.1h-0.1l-0.3,0.1h-0.1h-0.1l-0.1,0.1l-0.1,0.1h0.2l0.4-0.2H535L535,446.8L535,446.8z M535.8,446.7 l0.5-0.2l0,0l-0.1-0.1h-0.1l-0.1,0.1h-0.1l-0.5,0.3h0.2L535.8,446.7L535.8,446.7z" id="map-map-country-KY" data-id="KY" class="svgMap-country" fill="#4B5563"></path><path d="M1110.5,517.3l-0.5-0.3l-2-1.8l-0.3-2l0.8-2.6V508l-3.3-4l-0.7-2.7l-3.5,1.1l-2.8,2.5l-4,7l-5.2,2.9l-5.4-0.4 l-1.6,0.6l0.6,2.3l-2.9,2.2l-2.3,2.5l-7.1,2.4l-1.4-1.4l-0.9-0.2l-1,1.7l-4.7,0.4l-2.7,6.5l-1.4,1.1l-0.4,5l0.6,2.7l-0.4,1.9 l2.6,3.3l0.5,2.3l2.1,3.2l2.6,2.1l0.3,2.9l0.6,1.8l2.9-5.9l3.3-3.4l3.8,1.1l3.6,0.4l0.5-4.5l2.2-3.2l3-2l4.6,2.1l3.6,2.4l4.1,0.6 l4.2,1.2l1.6-3.8l0.8-0.5l2.6,0.6l6.2-3.1l2.2,1.3l1.8-0.2l0.9-1.5l2-0.6l4.3,0.7l3.6,0.1l1.8-0.6l-0.9-2.1l-4.2-2.5l-1.5-3.8 l-2.4-2.7l-3.8-3.4l-0.1-2l-3.1-2.6L1110.5,517.3L1110.5,517.3z" id="map-map-country-CF" data-id="CF" class="svgMap-country" fill="#4B5563"></path><path d="M1108.4,447.6l-22.4-12.2l-22.3-12.2l-5.4,3.5l1.6,9.9l2,1.6l0.2,2.1l2.3,2.2l-1.1,2.7l-1.8,12.9l-0.2,8.3l-6.9,6 l-2.3,8.4l2.4,2.3v4.1l3.6,0.2l-0.5,2.9l2.2,4.1l0.5,4.2l-0.2,4.3l3.1,5.8l-3.1-0.1l-1.6,0.4l-2.5-0.6l-1.2,3l3.3,3.7l2.5,1.1 l0.8,2.6l1.8,4.4l-0.9,1.7l4.7-0.4l1-1.7l0.9,0.2l1.4,1.4l7.1-2.4l2.3-2.5l2.9-2.2l-0.6-2.3l1.6-0.6l5.4,0.4l5.2-2.9l4-7l2.8-2.5 l3.5-1.1v-1.6l-2.1-1.8l-0.1-3.7l-1.2-2.5l-2,0.4l0.5-2.4l1.4-2.6l-0.7-2.7l1.8-1.9l-1.2-1.5l1.4-3.9l2.4-4.7l4.8,0.4L1108.4,447.6 L1108.4,447.6z" id="map-map-country-TD" data-id="TD" class="svgMap-country" fill="#4B5563"></path><path d="M648.4,905.2l-3.7-0.7l-3.3,2.5l0.2,4.1l-1.2,2.8l-7.2-2.2l-8.6-4l-4.5-1.3l9.7,6.8l6.3,3.2l7.5,3.4l5.3,0.9 l4.3,1.8l3,0.5l2.3,0.1l3.2-1.8l0.5-2.4l-2.9-0.2h-5L648.4,905.2L648.4,905.2z M601.1,708.9l-3.7-7.1l1.1-6.2l-3.2-2.7l-1.2-4.6 L591,684l-1.2,3.3l-2.7,1.6l2.1,9l1.5,10.4l-0.1,14.2v13.2l0.9,12.3l-1.9,7.8l2.1,7.8l-0.5,5.3l3.2,9.5l-0.1,9.5l-1.2,10.2 l-0.6,10.5l-2.1,0.2l2.4,7.3l3.3,6.3l-1.1,4.3l1.9,11.6l1.5,8.8l3.5,0.9l-1.1-7.7l4,1.6l1.8,12.7l-6.4-2.1l2,10.2l-2.7,5.5l8.2,1.8 l-3.4,4.8l0.2,6l5,10.6l4.2,4.1l0.2,3.6l3.3,3.8l7.5,3.5l0,0l7.4,4.2l6.2,2l2-0.1l-1.8-5.7l3.4-2.2l1.7-1.5h4.2l-4.8-0.9l-12-0.8 l-3.5-3.6l-1.8-4.6l-3.1,0.4l-2.6-2.2l-3.1-6.6l2.7-2.7l0.1-3.9l-1.8-3.2l0.7-5.3l-1.1-8.2l-1.8-3.7l1.8-1.1l-1.3-2.3l-2.8-1.3 l0.8-2.6l-3.1-2.3l-3.6-7.1l1.6-1.2l-3.3-7.6l-0.7-6.4l-0.3-5.7l2.5-2.4l-3.3-6.3l-1.5-5.9l2.9-4.3l-1.4-5.4l1.6-6.2l-1.3-5.9 l-1.6-1.2l-4.9-10.9l2.1-6.5l-1.7-6.2l0.9-5.8l2.6-5.9l3.2-4l-2-2.5l0.9-2l-1.6-10.6l5.6-3.2l1.1-6.6l-0.9-1.6l-3.8,0.9L601.1,708.9 L601.1,708.9z" id="map-map-country-CL" data-id="CL" class="svgMap-country" fill="#4B5563"></path><path d="M1587.2,453.3l0.6-3.6l2-2.8l-1.6-2.5l-3.2-0.1l-5.8,1.8l-2.2,2.8l1,5.5l4.9,2L1587.2,453.3L1587.2,453.3z M1600.4,256.8l-6.1-6.1l-4.4-3.7l-3.8-2.7l-7.7-6.1l-5.9-2.3l-8.5-1.8l-6.2,0.2l-5.1,1.1l-1.7,3l3.7,1.5l2.5,3.3l-1.2,2l0.1,6.5 l1.9,2.7l-4.4,3.9l-7.3-2.3l0.6,4.6l0.3,6.2l2.7,2.6l2.4-0.8l5.4,1l2.5-2.3l5.1,2l7.2,4.3l0.7,2.2l-4.3-0.7l-6.8,0.8l-2.4,1.8 l-1.4,4.1l-6.3,2.4l-3.1,3.3l-5.9-1.3l-3.2-0.5l-0.4,4l2.9,2.3l1.9,2.1l-2.5,2l-1.9,3.3l-4.9,2.2l-7.5,0.2l-7.2,2.2l-4.4,3.3l-3.2-2 l-6.2,0.1l-9.3-3.8l-5.5-0.9l-6.4,0.8l-11.2-1.3l-5.5,0.1l-4.7-3.6l-4.9-5.7l-3.4-0.7l-7.9-3.8l-7.2-0.9l-6.4-1l-3-2.7l-1.3-7.3 l-5.8-5l-8.1-2.3l-5.7-3.3l-3.3-4.4l-1.7,0.5l-1.8,4.2l-3.8,0.6l2.5,6.2l-1.6,2.8l-10.7-2l1,11.1l-2,1.4l-9,2.4l8.7,10.7l-2.9,1.6 l1.7,3.5l-0.2,1.4l-6.8,3.4l-1,2.4l-6.4,0.8l-0.6,4l-5.7-0.9l-3.2,1.2l-4,3l1.1,1.5l-1,1.5l3,5.9l1.6-0.6l3.5,1.4l0.6,2.5l1.8,3.7 l1.4,1.9l4.7,3l2.9,5l9.4,2.6l7.6,7.5l0.8,5.2l3,3.3l0.6,3.3l-4.1-0.9l3.2,7l6.2,4l8.5,4.4l1.9-1.5l4.7,2l6.4,4.1l3.2,0.9l2.5,3.1 l4.5,1.2l5,2.8l6.4,1.5l6.5,0.6l3-1.4l1.5,5.1l2.6-4.8l2.6-1.6l4.2,1.5l2.9,0.1l2.7,1.8l4.2-0.8l3.9-4.8l5.3-4l4.9,1.5l3.2-2.6 l3.5,3.9l-1.2,2.7l6.1,0.9l3-0.4l2.7,3.7l2.7,1.5l1.3,4.9l0.8,5.3l-4.1,5.3l0.7,7.5l5.6-1l2.3,5.8l3.7,1.3l-0.8,5.2l4.5,2.4l2.5,1.2 l3.8-1.8l0.6,2.6l0.7,1.5l2.9,0.1l-1.9-7.2l2.7-1l2.7-1.5h4.3l5.3-0.7l4.1-3.4l3,2.4l5.2,1.1l-0.2,3.7l3,2.6l5.9,1.6l2.4-1l7.7,2 l-0.9,2.5l2.2,4.6l3-0.4l0.8-6.7l5.6-0.9l7.2-3.2l2.5-3.2l2.3,2.1l2.8-2.9l6.1-0.7l6.6-5.3l6.3-5.9l3.3-7.6l2.3-8.4l2.1-6.9l2.8-0.5 l-0.1-5.1l-0.8-5.1l-3.8-2l-2.5-3.4l2.8-1.7l-1.6-4.7l-5.4-4.9l-5.4-5.8l-4.6-6.3l-7.1-3.5l0.9-4.6l3.8-3.2l1-3.5l6.7-1.8l-2.4-3.4 l-3.4-0.2l-5.8-2.5l-3.9,4.6l-4.9-1.9l-1.5-2.9l-4.7-1l-4.7-4.4l1.2-3l5-0.3l1.2-4.1l3.6-4.4l3.4-2.2l4.4,3.3l-1.9,4.2l2.3,2.5 l-1.4,3l4.8-1.8l2.4-2.9l6.3-1.9l2.1-4l3.8-3.4l1-4.4l3.6,2l4.6,0.2l-2.7-3.3l6.3-2.6l-0.1-3.5l5.5,3.6l0,0l-1.9-3.1l2.5-0.1 l-3.8-7.3l-4.7-5.3l2.9-2.2l6.8,1.1l-0.6-6l-2.8-6.8l0.4-2.3l-1.3-5.6l-6.9,1.8l-2.6,2.5h-7.5l-6-5.8l-8.9-4.5L1600.4,256.8 L1600.4,256.8z" id="map-map-country-CN" data-id="CN" class="svgMap-country" fill="#97bffb"></path><path d="M578.3,497.2l1.2-2.1l-1.3-1.7l-2-0.4l-2.9,3.1l-2.3,1.4l-4.6,3.2l-4.3-0.5l-0.5,1.3l-3.6,0.1l-3.3,3l-1.4,5.4 l-0.1,2.1l-2.4,0.7l-4.4,4.4l-2.9-0.2l-0.7,0.9l1.1,3.8l-1.1,1.9l-1.8-0.5l-0.9,3.1l2.2,3.4l0.6,5.4l-1.2,1.6l1.1,5.9l-1.2,3.7 l2,1.5l-2.2,3.3l-2.5,4l-2.8,0.4l-1.4,2.3l0.2,3.2l-2.1,0.5l0.8,2l5.6,3.6l1-0.1l1.4,2.7l4.7,0.9l1.6-1l2.8,2.1l2.4,1.5l1.5-0.6 l3.7,3l1.8,3l2.7,1.7l3.4,6.7l4.2,0.8l3-1.7l2.1,1.1l3.3-0.6l4.4,3l-3.5,6.5l1.7,0.1l2.9,3.4l2.2-17.4l0.1-2.8l-0.9-3.6l-2.5-2.4 v-4.6l3.2-1l1.1,0.6l0.2-2.4l-3.3-0.7v-3.9l10.9,0.1l1.9-2.2l1.6,2l1,3.8l1.1-0.8l-1.7-6.4l-1.4-2.2l-2-1.4l2.9-3.1l-0.2-1.5 l-1.5-1.9l-1-4.2l0.5-4.6l1.3-2.1l1.2-3.4l-2-1.1l-3.2,0.7l-4-0.3l-2.3,0.7l-3.8-5.5l-3.2-0.8l-7.2,0.6l-1.3-2.2l-1.3-0.6l-0.2-1.3 l0.8-2.4l-0.4-2.5l-1.1-1.4l-0.6-2.9l-2.9-0.5l1.8-3.7l0.9-4.5l1.8-2.4l2.2-1.8l1.6-3.2L578.3,497.2L578.3,497.2z" id="map-map-country-CO" data-id="CO" class="svgMap-country" fill="#4B5563"></path><path d="M1221.1,650.5l-0.4-0.4h-0.4v0.2l0.1,0.4l1.1,0.2L1221.1,650.5L1221.1,650.5z M1225,649L1225,649l-0.3,0.1l-0.1,0.2 l-0.1,0.3h-0.3h-0.2h-0.4l0.8,0.5l0.5,0.5l0.2,0.2l0.1-0.2l0.1-0.7L1225,649L1225,649z M1219.4,647.9l0.2-0.3l-0.2-0.7l-0.4-0.8 l0.1-1.4l-0.2-0.2h-0.3l-0.1,0.1l-0.1,0.3l-0.3,2l0.4,0.6l0.3,0.1L1219.4,647.9L1219.4,647.9L1219.4,647.9z" id="map-map-country-KM" data-id="KM" class="svgMap-country" fill="#4B5563"></path><path d="M1080.3,549.9l-3.6-0.4l-3.8-1.1l-3.3,3.4l-2.9,5.9l-0.4,3.5l-4.5-1.5l-4.5-1.7l-7.1-0.3l-0.4,2.8l1.5,3.3l4.2-0.5 l1.4,1.2l-2.4,7.4l2.7,3.8l0.6,4.9l-0.8,4.3l-1.7,3l-4.9-0.3l-3-3l-0.5,2.8l-3.8,0.8l-1.9,1.6l2.1,4.2l-4.3,3.5l4.6,6.7l2.2-2.7 l1.8-1.1l2,2.2l1.5,0.6l1.9-2.4l3.1,0.1l0.4,1.8l2,1.1l3.4-4l3.3-3.1l1.4-2l-0.2-5.3l2.5-6.2l2.6-3.2l3.7-3.1l0.6-2l0.2-2.4l0.9-2.2 l-0.3-3.6l0.7-5.6l1.1-4l1.6-3.4L1080.3,549.9L1080.3,549.9z" id="map-map-country-CG" data-id="CG" class="svgMap-country" fill="#4B5563"></path><path d="M509.1,502.6l-1.4,1.3l-1.7-0.4l-0.8-1.3l-1.7-0.5l-1.4,0.8l-3.5-1.7l-0.9,0.8l-1.4,1.2l1.5,0.9l-0.9,2l-0.1,2 l0.7,1.3l1.7,0.6l1.2,1.8l1.2-1.6l-0.3-1.8l1.4,1.1l0.3,1.9l1.9,0.8l2.1,1.3l1.5,1.5l0.1,1.4l-0.7,1.1l1.1,1.3l2.9,1.4l0.4-1.2 l0.5-1.3l-0.1-1.2l0.8-0.7l-1.1-1l0.1-2.5l2.2-0.6l-2.4-2.7l-2-2.6L509.1,502.6L509.1,502.6z" id="map-map-country-CR" data-id="CR" class="svgMap-country" fill="#4B5563"></path><path d="M1065,280.4l-4-2.6l-1.6-0.8l-3.9,1.7l-0.3,2.5l-1.7,0.6l0.2,1.7l-2-0.1l-1.8-1l-0.8,1l-3.5-0.2l-0.2,0.1v2.2l1.7,2 l1.3-2.6l3.3,1l0.3,2l2.5,2.6l-1,0.5l4.6,4.5l4.8,1.8l3.1,2.2l5,2.3l0,0l0.5-1l-4.7-2.4l-2.2-2.5l-2-1.4l-2.5-2.3l-1.3-1.9l-2.7-2.9 l0.9-2.5l1.9,1.4l1-1.3l2.3-0.1l4.4,1l3.5-0.1l2.4,1.4l0,0l1.7-2.3l-1.7-1.8l-1.5-2.4l0,0l-1.8,0.9L1065,280.4L1065,280.4z" id="map-map-country-HR" data-id="HR" class="svgMap-country" fill="#4B5563"></path><path d="M539,427.3l-4.9-2.1l-4.3-0.1l-4.7-0.5l-1.4,0.7l-4.2,0.6l-3,1.3l-2.7,1.4l-1.5,2.3l-3.1,2l2.2,0.6l2.9-0.7l0.9-1.6 l2.3-0.1l4.4-3.3l5.4,0.3l-2.3,1.6l1.8,1.3l7,1l1.5,1.3l4.9,1.7l3.2-0.2l0.8,3.6l1.7,1.8l3.5,0.4l2.1,1.7l-4.1,3.5l7.9-0.6l3.8,0.5 l3.7-0.3l3.8-0.8l0.8-1.5l-3.9-2.6l-4-0.3l0.6-1.7l-3.1-1.3h-1.9l-3-2.8l-4.2-4l-1.8-1.5l-5.2,0.8L539,427.3L539,427.3z" id="map-map-country-CU" data-id="CU" class="svgMap-country" fill="#4B5563"></path><path d="M595.9,494.9v-0.6l-0.9-0.4v0.3l0.1,0.2l0.3,0.1l0.1,0.2l-0.1,0.6l0.2,0.3L595.9,494.9L595.9,494.9z" id="map-map-country-CW" data-id="CW" class="svgMap-country" fill="#4B5563"></path><path d="M1149.9,348.4l-0.3-0.1l-0.5,0.2l-0.4,0.4l-0.4,0.3l-0.5-0.3l0.2,0.9l0.6,1.1l0.2,0.3l0.3,0.2l1.1,0.3h0.3h0.6 l0.2,0.1l0.2,0.4h0.4v-0.1v-0.3l0.2-0.2l0.3-0.2h0.3l0.6-0.1l0.6-0.2l0.5-0.4l0.9-1h0.3h0.3h0.6l0.6-0.1l-0.2-0.4l-0.1-0.1l-0.4-0.5 l-0.2-0.4l0.1-0.6l2.5-1.9l0.5-0.5l-0.8,0.2l-0.6,0.4l-0.4,0.2l-0.7,0.4l-2.3,0.8l-0.8,0.1h-0.8l-1-0.1l-0.9-0.2v0.7l-0.2,0.6 l-0.6,0.2L1149.9,348.4L1149.9,348.4z" id="map-map-country-CY" data-id="CY" class="svgMap-country" fill="#4B5563"></path><path d="M1049.4,248.5l-2.1,0.6l-1.4-0.7l-1.1,1.2l-3.4,1.2l-1.7,1.5l-3.4,1.3l1,1.9l0.7,2.6l2.6,1.5l2.9,2.6l3.8,2l2.6-2.5 l1.7-0.5l4,1.9l2.3-0.3l2.3,1.2l0.6-1.4l2.2,0.1l1.6-0.6l0.1-0.6l0.9-0.3l0.2-1.4l1.1-0.3l0.6-1.1h1.5l-2.6-3.1l-3.6-0.3l-0.7-2 l-3.4-0.6l-0.6,1.5l-2.7-1.2l0.1-1.7l-3.7-0.6L1049.4,248.5L1049.4,248.5z" id="map-map-country-CZ" data-id="CZ" class="svgMap-country" fill="#4B5563"></path><path d="M1124.9,539.4l-4.3-0.7l-2,0.6l-0.9,1.5l-1.8,0.2l-2.2-1.3l-6.2,3.1l-2.6-0.6l-0.8,0.5l-1.6,3.8l-4.2-1.2l-4.1-0.6 l-3.6-2.4l-4.6-2.1l-3,2l-2.2,3.2l-0.5,4.5l-0.3,3.8l-1.6,3.4l-1.1,4l-0.7,5.6l0.3,3.6l-0.9,2.2l-0.2,2.4l-0.6,2l-3.7,3.1l-2.6,3.2 l-2.5,6.2l0.2,5.3l-1.4,2l-3.3,3.1l-3.4,4l-2-1.1l-0.4-1.8l-3.1-0.1l-1.9,2.4l-1.5-0.6l-2,1.3l-0.9,1.7l-0.2,2.7l-1.5,0.7l0.8,2 l2.3-0.9l1.7,0.1l1.9-0.7l16.6,0.1l1.3,4.7l1.6,3.8l1.3,2.1l2.1,3.3l3.7-0.5l1.9-0.9l3,0.9l0.9-1.6l1.5-3.7l3.4-0.3l0.3-1.1h2.9 l-0.5,2.3h6.8v4l1.2,2.4l-0.9,3.8l0.3,4l1.9,2.3l-0.5,7.6l1.4-0.6l2.4,0.2l3.5-1l2.6,0.4l1.9,0.1l0.3,2l2.6-0.1l3.5,0.6l1.8,2.8 l4.5,0.9l3.4-2l1.2,3.4l4.3,0.8l2,2.8l2.1,3.5h4.3l-0.3-6.9l-1.5,1.2l-3.9-2.5l-1.4-1.1l0.8-6.4l1.2-7.5l-1.2-2.8l1.6-4.1l1.6-0.7 l7.5-1.1l1,0.3l0.2-1.1l-1.5-1.7l-0.7-3.5l-3.4-3.5l-1.8-4.5l1-2.7l-1.5-3.6l1.1-10.2l0.1,0.1l-0.1-1.1l-1.4-2.9l0.6-3.5l0.8-0.4 l0.2-3.8l1.6-1.8l0.1-4.8l1.3-2.4l0.3-5.1l1.2-3l2.1-3.3l2.2-1.7l1.8-2.3l-2.3-0.8l0.3-7.5l0,0l-5-4.2l-1.4-2.7l-3.1,1.3l-2.6-0.4 l-1.5,1.1l-2.5-0.8l-3.5-5.2l-1.8,0.6L1124.9,539.4L1124.9,539.4z" id="map-map-country-CD" data-id="CD" class="svgMap-country" fill="#4B5563"></path><path d="M1035.9,221.2l-1.7-3l-6.7,2l0.9,2.5l5.1,3.4L1035.9,221.2L1035.9,221.2z M1027.3,216.1l-2.6-0.9l-0.7-1.6l1.3-2 l-0.1-3l-3.6,1.6l-1.5,1.7l-4,0.4l-1.2,1.7l-0.7,1.6l0.4,6.1l2.1,3.4l3.6,0.8l3-0.9l-1.5-3l3.1-4.3l1.4,0.7L1027.3,216.1 L1027.3,216.1z" id="map-map-country-DK" data-id="DK" class="svgMap-country" fill="#4B5563"></path><path d="M1217.8,499.2l-2.5-1.7l3.1-1.5l0.1-2.7l-1.4-1.9l-1.6,1.5l-2.4-0.5l-1.9,2.8l-1.8,3l0.5,1.7l0.2,2l3.1,0.1l1.3-0.5 l1.3,1.1L1217.8,499.2L1217.8,499.2z" id="map-map-country-DJ" data-id="DJ" class="svgMap-country" fill="#4B5563"></path><path d="M635.8,475.1l0.3-0.7l-0.1-1l-0.2-0.4l-0.8-0.3v0.2l-0.1,0.5l0.3,0.8l0.1,1.1L635.8,475.1z" id="map-map-country-DM" data-id="DM" class="svgMap-country" fill="#4B5563"></path><path d="M579.6,457.4v1.8l1.4,1l2.6-4.4l2-0.9l0.6,1.6l2.2-0.4l1.1-1.2l1.8,0.3l2.6-0.2l2.5,1.3l2.3-2.6l-2.5-2.3l-2.4-0.2 l0.3-1.9l-3,0.1l-0.8-2.2l-1.4,0.1l-3.1-1.6l-4.4-0.1l-0.8,1.1l0.2,3.5l-0.7,2.4l-1.5,1.1l1.2,1.9L579.6,457.4L579.6,457.4z" id="map-map-country-DO" data-id="DO" class="svgMap-country" fill="#4B5563"></path><path d="M553.1,573.1l-2.4-1.5l-2.8-2.1l-1.6,1l-4.7-0.9l-1.4-2.7l-1,0.1l-5.6-3.6l-3.9,2.5l-3.1,1.4l0.4,2.6l-2.2,4.1 l-1,3.9l-1.9,1l1,5.8l-1.1,1.8l3.4,2.7l2.1-2.9l1.3,2.8l-2.9,4.7l0.7,2.7l-1.5,1.5l0.2,2.3l2.3-0.5l2.3,0.7l2.5,3.2l3.1-2.6l0.9-4.3 l3.3-5.5l6.7-2.5l6-6.7l1.7-4.1L553.1,573.1z" id="map-map-country-EC" data-id="EC" class="svgMap-country" fill="#4B5563"></path><path d="M1129.7,374.8l-5.5-1.9l-5.3-1.7l-7.1,0.2l-1.8,3l1.1,2.7l-1.2,3.9l2,5.1l1.3,22.7l1,23.4h22.1h21.4h21.8l-1-1.3 l-6.8-5.7l-0.4-4.2l1-1.1l-5.3-7l-2-3.6l-2.3-3.5l-4.8-9.9l-3.9-6.4l-2.8-6.7l0.5-0.6l4.6,9.1l2.7,2.9l2,2l1.2-1.1l1.2-3.3l0.7-4.8 l1.3-2.5l-0.7-1.7l-3.9-9.2l0,0l-2.5,1.6l-4.2-0.4l-4.4-1.5l-1.1,2.1l-1.7-3.2l-3.9-0.8l-4.7,0.6l-2.1,1.8l-3.9,2L1129.7,374.8 L1129.7,374.8z" id="map-map-country-EG" data-id="EG" class="svgMap-country" fill="#4B5563"></path><path d="M487.2,487l0.6-2.5l-0.7-0.7l-1.1-0.5l-2.5,0.8l-0.1-0.9l-1.6-1l-1.1-1.3l-1.5-0.5l-1.4,0.4l0.2,0.7l-1.1,0.7 l-2.1,1.6l-0.2,1l1.4,1.3l3.1,0.4l2.2,1.3l1.9,0.6l3.3,0.1L487.2,487L487.2,487z" id="map-map-country-SV" data-id="SV" class="svgMap-country" fill="#4B5563"></path><path d="M1040.1,557.8l-9.2-0.2l-1.9,7.2l1,0.9l1.9-0.3h8.2V557.8L1040.1,557.8z" id="map-map-country-GQ" data-id="GQ" class="svgMap-country" fill="#4B5563"></path><path d="M1198.1,474l-3.2-3.1l-1.8-5.9l-3.7-7.3l-2.6,3.6l-4,1l-1.6,2l-0.4,4.2l-1.9,9.4l0.7,2.5l6.5,1.3l1.5-4.7l3.5,2.9 l3.2-1.5l1.4,1.3l3.9,0.1l4.9,2.5l1.6,2.2l2.5,2.1l2.5,3.7l2,2.1l2.4,0.5l1.6-1.5l-2.8-1.9l-1.9-2.2l-3.2-3.7l-3.2-3.6L1198.1,474z" id="map-map-country-ER" data-id="ER" class="svgMap-country" fill="#4B5563"></path><path d="M1093.2,197.5l-5.5,0.9l-5.4,1.6l0.9,3.4l3.3,2.1l1.5-0.8l0.1,3.5l3.7-1l2.1,0.7l4.4,2.2h3.8l1.6-1.9l-2.5-5.5 l2.6-3.4l-0.9-1l0,0l-4.6,0.2L1093.2,197.5z" id="map-map-country-EE" data-id="EE" class="svgMap-country" fill="#4B5563"></path><path d="M1187.6,477l-1.5,4.7l-6.5-1.3l-0.7,5.5l-2.1,6.2l-3.2,3.2l-2.3,4.8l-0.5,2.6l-2.6,1.8l-1.4,6.7v0.7l0.2,5l-0.8,2 l-3,0.1l-1.8,3.6l3.4,0.5l2.9,3.1l1,2.5l2.6,1.5l3.5,6.9l2.9,1.1v3.6l2,2.1h3.9l7.2,5.4h1.8l1.3-0.1l1.2,0.7l3.8,0.5l1.6-2.7 l5.1-2.6l2.3,2.1h3.8l1.5-2l3.6-0.1l4.9-4.5l7.4-0.3l15.4-19.1l-4.8,0.1l-18.5-7.6l-2.2-2.2l-2.1-3.1l-2.2-3.5l1.1-2.3l-1.3-1.1 l-1.3,0.5l-3.1-0.1l-0.2-2l-0.5-1.7l1.8-3l1.9-2.8l-2-2.1l-2.5-3.7l-2.5-2.1l-1.6-2.2l-4.9-2.5l-3.9-0.1l-1.4-1.3l-3.2,1.5 L1187.6,477L1187.6,477z" id="map-map-country-ET" data-id="ET" class="svgMap-country" fill="#4B5563"></path><path d="M690.3,902.7l-0.1-0.3l-0.4-0.2l-0.2-0.1l0.1,0.2l0.1,0.3l0.1,0.2l0.2,0.1L690.3,902.7L690.3,902.7z M695.8,901.4 L695.8,901.4l-0.3-0.1l-0.1,0.2l0.2,0.3l0.4,0.1L695.8,901.4L695.8,901.4z M682.9,900l-0.1,0.2l-0.4,0.1l0.2,0.3l0.6,0.4h0.4 l0.1-0.3l-0.1-0.6h-0.3L682.9,900L682.9,900z M685.7,898l-0.9-0.3l-0.4-0.3h-0.3l0.4,0.4l0.1,0.2l0.1,0.2l0.6,0.3l0.6,0.3l0.4,0.3 l-0.1,0.1l-0.8,0.3h-0.3l-0.2,0.1l0.4,0.2l0.6-0.1l0.2-0.1h0.2l0.3,0.1v0.2l-0.1,0.2l-0.2,0.2l-0.4,0.3l-0.6,0.4h-0.8l-0.7,0.7 l0.9,0.5l0.7,0.3h0.9v-0.1l0.2-0.1h0.3l0.1-0.1l0.2-0.4v-0.6h0.2l0.3,0.1l0.7-0.1l0.3-0.1l0.6-0.9l0.4-0.8l0.2-0.4l0.3-0.2l0.1-0.2 l0.1-0.3l0.3-0.2v-0.3l-0.4-0.2l-0.3-0.2l-0.3,0.3l-0.2-0.1l-0.9,0.3h-0.4l-0.3-0.2l-0.4-0.1l-0.4,0.1l-0.5,0.5L685.7,898L685.7,898 z M686.4,897.6l0.1-0.3l-0.1-0.2l-0.5-0.2h-0.5l0.2,0.5l0.2,0.2H686.4z M692.3,896.9h-0.4l0.4,0.5l-0.8,0.8l0.2,0.6l0.3,0.4l0.1,0.2 l-0.1,0.1l-0.4,0.1l-0.3,0.1l-0.2,0.3l-0.9,0.9l0.2,0.2l-0.3,0.7l0.2,0.3l0.8,0.7l0.8,0.4v-0.7l0.4-0.1l0.4,0.2l0.4-0.2l-0.9-1h0.3 l2.5,0.5l-0.1-0.4l-0.1-0.2l-0.3-0.4l1.5-0.4l0.5-0.3l0.2-0.3l0.6-0.1l0.8-0.3l-0.1-0.1l0.1-0.3l-0.4-0.2l-0.5-0.1l0.1-0.3l0.5-0.1 l-0.8-0.7l-0.3-0.1l-1,0.1l-0.3,0.1v0.2l0.1,0.3l0.3,0.3l0.1,0.2l-0.2-0.1l-1.1-0.4l-0.2-0.1l-0.2-0.4l0.2-0.1l0.3,0.1l0.1-0.3 l-0.4-0.3l-0.4-0.1l-0.9,0.1L692.3,896.9L692.3,896.9z" id="map-map-country-FK" data-id="FK" class="svgMap-country" fill="#4B5563"></path><path d="M947,186.9v-0.3l-0.1-0.3v-0.2h-0.1l-0.5-0.1l-0.1-0.2h-0.1v0.2l0.1,0.4l0.5,0.4L947,186.9L947,186.9L947,186.9zM947.5,184.8v-0.1l-0.2-0.2l-0.5-0.2l-0.2-0.1l-0.2,0.1v0.2l0.1,0.1l0.4,0.1l0.4,0.3h0.1L947.5,184.8L947.5,184.8z M945.1,182.9l-0.2-0.1l-0.5,0.1h-0.3l0.1,0.3l0.6,0.2h0.3h0.3l0.2-0.1l-0.1-0.2L945.1,182.9L945.1,182.9z M947.6,182.4l-0.8-0.2l-0.6-0.3l-1,0.1l0.7,1.1l0.8,0.7l0.4,0.2v-0.1v-0.2l-0.4-0.5l-0.1-0.1V183l0.1-0.1h0.2l0.3,0.2h0.2L947.6,182.4L947.6,182.4z M948.6,182.2l-0.3-0.2l-0.4-0.4v0.5v0.3v0.1h0.1l0.3,0.1L948.6,182.2L948.6,182.2z" id="map-map-country-FO" data-id="FO" class="svgMap-country" fill="#4B5563"></path><path d="M1976.7,674.4l-3.7,2l-1.9,0.3l-3.1,1.3l0.2,2.4l3.9-1.3l3.9-1.6L1976.7,674.4L1976.7,674.4z M1965.7,682.5l-1.6,1 l-2.3-0.8l-2.7,2.2l-0.2,2.8l2.9,0.8l3.6-0.9l1.8-3.3L1965.7,682.5L1965.7,682.5z" id="map-map-country-FJ" data-id="FJ" class="svgMap-country" fill="#4B5563"></path><path d="M1093.4,144.4l0.8-3.8l-5.7-2.1l-5.8,1.8l-1.1,3.9l-3.4,2.4l-4.7-1.3l-5.3,0.3l-5.1-2.9l-2.1,1.4l5.9,2.7l7.2,3.7 l1.7,8.4l1.9,2.2l6.4,2.6l0.9,2.3l-2.6,1.2l-8.7,6.1l-3.3,3.6l-1.5,3.3l2.9,5.2l-0.1,5.7l4.7,1.9l3.1,3.1l7.1-1.2l7.5-2.1l8-0.5l0,0 l7.9-7.4l3.3-3.3l0.9-2.9l-7.3-3.9l0.9-3.7l-4.9-4.1l1.7-4.8l-6.4-6.3l2.8-4.1l-7.2-3.7L1093.4,144.4L1093.4,144.4z" id="map-map-country-FI" data-id="FI" class="svgMap-country" fill="#4B5563"></path><path d="M1012.2,290.9l2.7,0.8l-0.5,2.7l-0.1,0.1l-0.3-0.2l-0.5,0.6l0,0.3l-3.6,2.6l-10-1.6l-7.4,2l-0.5,3.7l-6,0.8 l-1.3-0.7l0.7-0.3l0.2-0.4l-0.2-0.2l-0.7-0.2l-0.3-0.1l-0.4,0.3l-0.1,0.3l0.1,0.1v0.2l-3.7-1.8l-1.9,1.3l-9.4-2.8l-2-2.4l2.7-3.7 l1-12.3l-5.1-6.5l-3.6-3.1l-7.5-2.4l-0.4-4.6l6.4-1.3l8.2,1.6l-1.4-7l4.6,2.6l11.3-4.8l1.4-5.1l4.3-1.2l0.7,2.2l2.2,0.1l2.4,2.4 l3.4,2.9l2.5-0.4l4.4,2.8l0,0l1.1,0.5l1.4-0.1l2.4,1.6l7.1,1.2l-2.3,4.2l-0.5,4.5l-1.3,1l-2.3-0.6l0.2,1.6l-3.5,3.5v2.8l2.4-0.9 l1.8,2.7l0,0l-0.2,1.7l1.6,2.4l-1.7,1.8L1012.2,290.9z M1025.6,304.3l-1-6l-0.6,1.6l-2.7,1.1l-0.7,4.3l3,3.7L1025.6,304.3z" id="map-map-country-FR" data-id="FR" class="svgMap-country" fill="#7ba8f4"></path><path d="M681.4,556.2l1.8-4.7l3.5-5.8l-0.9-2.6l-5.8-5.4l-4.1-1.5l-1.9-0.7l-3.1,5.5l0.4,4.4l2.1,3.7l-1,2.7l-0.6,2.9 l-1.4,2.8l2.4,1.3l1.8-1.8l1.2,0.3l0.8,1.8l2.7-0.5L681.4,556.2z" id="map-map-country-GF" data-id="GF" class="svgMap-country" fill="#4B5563"></path><path d="M213.2,704.9l-0.1-0.3l-0.2-0.3l-0.1,0.1l0.1,0.1l0.2,0.3v0.2L213.2,704.9z M222.5,690.2l-0.2-0.2l-0.4-0.2 l-0.2-0.1l-0.2-0.1l-0.1,0.1l0.1,0.1h0.1l0.3,0.2l0.3,0.1L222.5,690.2L222.5,690.2L222.5,690.2L222.5,690.2z M198,689.1l-0.6-0.3 l0.1,0.2l0.4,0.2l0.2,0.1L198,689.1L198,689.1z M218.5,688.9l-0.4-0.5h-0.3L218.5,688.9L218.5,688.9z M196.9,687.9l-0.4-0.4 l-0.2-0.3l-0.3-0.1l0.1,0.1l0.4,0.4l0.3,0.4l0.2,0.1L196.9,687.9z M196.6,685.8l-0.1-0.1l0,0v-0.3l0.2-0.3l0.6-0.4v-0.1l0,0 l-0.2,0.1l-0.4,0.2l-0.2,0.2l-0.1,0.2l-0.1,0.3l0.1,0.2l0.1,0.1h0.2L196.6,685.8L196.6,685.8z M149.2,684.7l-0.2-0.6l-0.3-0.5 l-0.8-0.1l-0.5,0.2l-0.1,0.2l0.1,0.4l0.5,0.7l0.5,0.1l0.8-0.1l0.4,0.6l0.2,0.1l0.4,0.1l0.1-0.3l-0.2-0.5L149.2,684.7L149.2,684.7z M146.3,683.8l0.1-0.4l-0.2-0.1h-0.5v0.2l0.1,0.2l0.1,0.1l0.3,0.2L146.3,683.8L146.3,683.8z M136.6,679.5h0.2l-0.4-0.6l-0.3-0.2v0.1 v0.7l0.3,0.1L136.6,679.5z M180.5,677.9h-0.2H180h-0.1l0.5,0.1l0.4,0.2L180.5,677.9L180.5,677.9z M179.8,678l-0.3-0.1l-0.3-0.2h-0.3 l0.7,0.3H179.8L179.8,678z M136,678.1l0.1-0.2l-0.1-0.1l-0.4-0.2l0.1,0.3v0.2H136L136,678.1L136,678.1z M168.8,676.1l-0.3-0.4 l-0.2-0.3l-0.2-0.4l-0.4-0.5l0.1,0.3l0.1,0.2l0.2,0.2l0.2,0.4l0.1,0.2l0.3,0.4h0.1L168.8,676.1L168.8,676.1z M185,674.6l0.1-0.5 h-0.2L185,674.6L185,674.6L185,674.6z M170.6,673l-0.6-0.6h-0.1l0.1,0.2l0.5,0.5l0.1,0.2V673L170.6,673z M201.4,639.1l0.1-0.2v-0.2 l-0.1-0.1l-0.3-0.1l0.1,0.7L201.4,639.1L201.4,639.1z M198.7,635.4l-0.1-0.2h-0.2l-0.1,0.1v0.5L198.7,635.4L198.7,635.4z M198.8,633.8l-0.8,0.5l0.2,0.4l0.4,0.1l0.2-0.2l0.8-0.1l0.3-0.4l-0.3,0.1L198.8,633.8L198.8,633.8z M192.7,632.1l0.2-0.5l-0.2-0.1 l-0.4,0.2v0.2l0.3,0.4L192.7,632.1L192.7,632.1z M195.3,629l0.3-0.1v-0.1l-0.2-0.2l-0.3-0.1l-0.1,0.1l-0.1,0.2l0.1,0.3L195.3,629 L195.3,629z M192.4,628.9l0.1-0.3v-0.2l-0.1-0.2l-0.9-0.2l-0.1,0.1v0.4l0.2,0.5h0.3L192.4,628.9z" id="map-map-country-PF" data-id="PF" class="svgMap-country" fill="#4B5563"></path><path d="M1050.2,557.7l-0.7-0.3l-3.4,0.8l-3.4-0.8l-2.6,0.4v7.6h-8.2l-1.9,0.3l-1.1,4.8l-1.3,4.6l-1.3,2l-0.2,2.1l3.4,6.6 l3.7,5.3l5.8,6.4l4.3-3.5l-2.1-4.2l1.9-1.6l3.8-0.8l0.5-2.8l3,3l4.9,0.3l1.7-3l0.8-4.3l-0.6-4.9l-2.7-3.8l2.4-7.4l-1.4-1.2l-4.2,0.5 l-1.5-3.3L1050.2,557.7L1050.2,557.7z" id="map-map-country-GA" data-id="GA" class="svgMap-country" fill="#4B5563"></path><path d="M882.8,488.5l5,0.1l1.4-0.9h1l2.1-1.5l2.4,1.4l2.4,0.1l2.4-1.5l-1.1-1.8l-1.8,1.1l-1.8-0.1l-2.1-1.5l-1.8,0.1 l-1.3,1.5l-6.1,0.2L882.8,488.5L882.8,488.5z" id="map-map-country-GM" data-id="GM" class="svgMap-country" fill="#4B5563"></path><path d="M1200,300.2l-7.5-2.9l-7.7-1l-4.5-1.1l-0.5,0.7l2.2,1.9l3,0.7l3.4,2.3l2.1,4.2l-0.3,2.7l5.4-0.3l5.6,3l6.9-1l1.1-1 l4.2,1.8l2.8,0.4l0.6-0.7l-3.2-3.4l1.1-0.9l-3.5-1.4l-2.1-2.5l-5.1-1.3l-2.9,1L1200,300.2L1200,300.2z" id="map-map-country-GE" data-id="GE" class="svgMap-country" fill="#4B5563"></path><path d="M1043.6,232.3l-2.4-1.9l-5.5-2.4l-2.5,1.7l-4.7,1.1l-0.1-2.1l-4.9-1.4l-0.2-2.3l-3,0.9l-3.6-0.8l0.4,3.4l1.2,2.2 l-3,3l-1-1.3l-3.9,0.3l-0.9,1.3l1,2l-1,5.6l-1.1,2.3h-2.9l1.1,6.4l-0.4,4.2l1,1.4l-0.2,2.7l2.4,1.6l7.1,1.2l-2.3,4.2l-0.5,4.5h4.2 l1-1.4l5.4,1.9l1.5-0.3l2.6,1.7l0.6-1.6l4.4,0.3l3.4-1.2l2.4,0.2l1.7,1.3l0.4-1.1l-1-4l1.7-0.8l1.5-2.9l-2.9-2.6l-2.6-1.5l-0.7-2.6 l-1-1.9l3.4-1.3l1.7-1.5l3.4-1.2l1.1-1.2l1.4,0.7l2.1-0.6l-2.3-3.9l0.1-2.1l-1.4-3.3l-2-2.2l1.2-1.6L1043.6,232.3L1043.6,232.3z" id="map-map-country-DE" data-id="DE" class="svgMap-country" fill="#6d9cf0"></path><path d="M976.8,502.1l-2.6-0.5l-1.8,1l-2.4-0.5l-9.7,0.3l-0.2,3.6l0.8,4.8l1.4,9.1l-2.3,5.3l-1.5,7.2l2.4,5.5l-0.2,2.5 l5,1.8l5-1.9l3.2-2.1l8.7-3.8l-1.2-2.2l-1.5-4l-0.4-3.2l1.2-5.7l-1.4-2.3l-0.6-5.1l0.1-4.6l-2.4-3.3L976.8,502.1L976.8,502.1z" id="map-map-country-GH" data-id="GH" class="svgMap-country" fill="#4B5563"></path><path d="M1101.9,344.9l-0.8,2.8l6.6,1.2v1.1l7.6-0.6l0.5-1.9l-2.8,0.8v-1.1l-3.9-0.5l-4.1,0.4L1101.9,344.9L1101.9,344.9z M1113.4,307.5l-2.7-1.6l0.3,3l-4.6,0.6l-3.9-2.1l-3.9,1.7l-3.8-0.2l-1,0.2l-0.7,1.1l-2.8-0.1l-1.9,1.3l-3.3,0.6v1.6l-1.6,0.9 l-0.1,2.1l-2.1,3l0.5,1.9l2.9,3.6l2.3,3l1.3,4.3l2.3,5.1l4.6,2.9l3.4-0.1l-2.4-5.7l3.3-0.7l-1.9-3.3l5,1.7l-0.4-3.7l-2.7-1.8l-3.2-3 l1.8-1.4l-2.8-3l-1.6-3.8l0.9-1.3l3,3.2h2.9l2.5-1l-3.9-3.6l6.1-1.6l2.7,0.6l3.2,0.2l1.1-0.7L1113.4,307.5L1113.4,307.5z" id="map-map-country-GR" data-id="GR" class="svgMap-country" fill="#4B5563"></path><path d="M887.4,76.3l-26-0.4l-11.8,0.3l-5,1.3l-11.5-0.1l-12.7,2.1l-1.6,1.7l6.7,2.1l-6.2-1.3l-4.5-0.3l-7-1.4l-10.6,2.1 l-2.7-1.2h-10.4l-10.9,0.6l-8.9,1l-0.2,1.8l-5.3,0.5L744.2,88l-4.6,1.7l8.1,1.5l-2.8,1.6L730,95l-15.5,2.2l-2.2,1.7l6.4,2l14.5,1.2 l-7.5,0.2l-10.9,1.5l3.8,3.1l3,1.5l9.4-0.3l10.1-0.2l7.6,0.3l8,2.9l-1.4,2.1l3.6,1.9l1.4,5.3l1,3.6l1.4,1.9l-7,4.8l2.6,1.3l4.4-0.8 l2.6,1.8l5.3,3.4l-7.5-1.4h-3.8l-3,2.8l-1.5,3.6l4.2,1.8l4-0.8l2.6-0.8l5.5-1.9l-2.8,4.2l-2.6,2.3l-7.1,2l-7,6.3l2,2l-3.4,4l3.7,5.2 l-1.5,5l0.7,3.7l4.8,7.1l0.8,5.6l3.1,3.2h8.9l5,4.7l6.5-0.3l4.1-5.7l3.5-4.8l-0.3-4.4l8.6-4.6l3.3-3.7l1.4-3.9l4.7-3.5l6.5-1.3 l6.1-1.4l3-0.2l10.2-3.9l7.4-5.7l4.8-2.1l4.6-0.1l12.5-1.8l12.1-4.3l11.9-4.6l-5.5-0.3l-10.6-0.2l5.3-2.8l-0.5-3.6l4.2,3l2.7,2.1 l7.3-1l-0.6-4.3l-4.5-3.1l-5-1.3l2.4-1.4l7.2,2.1l0.5-2.3l-4.1-3.4h5.4l5.6-0.8l1.7-1.8l-4-2.1l8.6-0.3l-4-4.3l4.1-0.5l0.1-4.2 l-6.2-2.5l6.4-1.6l5.8-0.1l-3.6-3.2l1.1-5.1l3.6-2.9l4.9-3.2l-8-0.2l11.3-0.7l2.2-1l14.6-2.9l-1.6-1.7l-10-0.8l-16.9,1.5l-9.2,1.5 l4.5-2.3l-2.3-1.4l-7,1.2l-9.7-1.4l-12.1,0.5l-1.4-0.7l18.3-0.4l12.9-0.2l6.6-1.4L887.4,76.3L887.4,76.3z" id="map-map-country-GL" data-id="GL" class="svgMap-country" fill="#4B5563"></path><path d="M632.1,495.7l0.5-0.2l0.2-1.1l-0.3-0.1l-0.3,0.3l-0.3,0.5v0.4l-0.2,0.3L632.1,495.7L632.1,495.7z" id="map-map-country-GD" data-id="GD" class="svgMap-country" fill="#4B5563"></path><path d="M636.4,471.1l0.2-0.2v-0.3l-0.2-0.3l-0.2,0.1l-0.2,0.3v0.3l0.1,0.1H636.4L636.4,471.1z M634.5,470.3l0.2-0.2v-1.2 l0.1-0.3l-0.2-0.1l-0.2-0.2l-0.6-0.2l-0.1,0.1l-0.2,0.3l0.1,1.5l0.2,0.5l0.2,0.1L634.5,470.3L634.5,470.3z M636.1,468.9l0.8-0.2 l-0.9-0.6l-0.2-0.4v-0.3l-0.4-0.3l-0.2,0.2l-0.1,0.3l0.1,0.5l-0.3,0.4l0.1,0.4l0.4,0.1L636.1,468.9L636.1,468.9z" id="map-map-country-GP" data-id="GP" class="svgMap-country" fill="#4B5563"></path><path d="M482.8,458.9l-5.1-0.1h-5.2l-0.4,3.6h-2.6l1.8,2.1l1.9,1.5l0.5,1.4l0.8,0.4l-0.4,2.1H467l-3.3,5.2l0.7,1.2l-0.8,1.5 l-0.4,1.9l2.7,2.6l2.5,1.3l3.4,0.1l2.8,1.1l0.2-1l2.1-1.6l1.1-0.7l-0.2-0.7l1.4-0.4l1.3-1.6l-0.3-1.3l0.5-1.2l2.8-1.8l2.8-2.4 l-1.5-0.8l-0.6,0.9l-1.7-1.1h-1.6l1.2-7.2L482.8,458.9L482.8,458.9z" id="map-map-country-GT" data-id="GT" class="svgMap-country" fill="#4B5563"></path><path d="M912.4,493l-0.8,0.4l-3-0.5l-0.4,0.7l-1.3,0.1l-4-1.5l-2.7-0.1l-0.1,2.1l-0.6,0.7l0.4,2.1l-0.8,0.9h-1.3l-1.4,1 l-1.7-0.1l-2.6,3.1l1.6,1.1l0.8,1.4l0.7,2.8l1.3,1.2l1.5,0.9l2.1,2.5l2.4,3.7l3-2.8l0.7-1.7l1-1.4l1.5-0.2l1.3-1.2h4.5l1.5,2.3 l1.2,2.7L917,515l0.9,1.7v2.3l1.5-0.3l1.2-0.2l1.5-0.7l2.3,3.9l-0.4,2.6l1.1,1.3l1.6,0.1l1.1-2.6l1.6,0.2h0.9l0.3-2.8l-0.4-1.2 l0.6-0.9l2-0.8l-1.3-5.1l-1.3-2.6l0.5-2.2l1.1-0.5l-1.7-1.8l0.3-1.9l-0.7-0.7l-1.2,0.6l0.2-2.1l1.2-1.6l-2.3-2.7l-0.6-1.7l-1.3-1.4 l-1.1-0.2l-1.3,0.9l-1.8,0.8l-1.6,1.4l-2.4-0.5l-1.5-1.6l-0.9-0.2l-1.5,0.8h-0.9L912.4,493L912.4,493z" id="map-map-country-GN" data-id="GN" class="svgMap-country" fill="#4B5563"></path><path d="M900.2,492.1l-10.3-0.3l-1.5,0.7l-1.8-0.2l-3,1.1l0.3,1.3l1.7,1.4v0.9l1.2,1.8l2.4,0.5l2.9,2.6l2.6-3.1l1.7,0.1 l1.4-1h1.3l0.8-0.9l-0.4-2.1l0.6-0.7L900.2,492.1L900.2,492.1z" id="map-map-country-GW" data-id="GW" class="svgMap-country" fill="#4B5563"></path><path d="M656.1,534.2l-2.1-2.3l-2.9-3.1l-2.1-0.1l-0.1-3.3l-3.3-4.1l-3.6-2.4l-4.6,3.8l-0.6,2.3l1.9,2.3l-1.5,1.2l-3.4,1.1 v2.9l-1.6,1.8l3.7,4.8l2.9-0.3l1.3,1.5l-0.8,2.8l1.9,0.9l1.2,3l-1.6,2.2l-1,5.4l1.4,3.3l0.3,2.9l3.5,3l2.7,0.3l0.7-1.3l1.7-0.2 l2.6-1.1l1.8-1.7l3.1,0.5l1.4-0.2l-3.3-5.6L655,551l-1.8-0.1l-2.4-4.6l1.1-3.3l-0.3-1.5l3.5-1.6L656.1,534.2L656.1,534.2z" id="map-map-country-GY" data-id="GY" class="svgMap-country" fill="#4B5563"></path><path d="M580.6,446.7l-4.6-1l-3.4-0.2l-1.4,1.7l3.4,1l-0.3,2.4l2.2,2.8l-2.1,1.4l-4.2-0.5l-5-0.9l-0.7,2.1l2.8,1.9l2.7-1.1 l3.3,0.4l2.7-0.4l3.6,1.1l0.2-1.8l-1.2-1.9l1.5-1.1l0.7-2.4L580.6,446.7z" id="map-map-country-HT" data-id="HT" class="svgMap-country" fill="#4B5563"></path><path d="M514.1,476.8l-1.3-1.8l-1.9-1l-1.5-1.4l-1.6-1.2l-0.8-0.1l-2.5-0.9l-1.1,0.5l-1.5,0.2l-1.3-0.4l-1.7-0.4l-0.8,0.7 l-1.8,0.7l-2.6,0.2l-2.5-0.6l-0.9,0.4l-0.5-0.6l-1.6,0.1l-1.3,1.1l-0.6-0.2l-2.8,2.4l-2.8,1.8l-0.5,1.2l0.3,1.3l-1.3,1.6l1.5,0.5 l1.1,1.3l1.6,1l0.1,0.9l2.5-0.8l1.1,0.5l0.7,0.7l-0.6,2.5l1.7,0.6l0.7,2l1.8-0.3l0.8-1.5h0.8l0.2-3.1l1.3-0.2h1.2l1.4-1.7l1.5,1.3 l0.6-0.8l1.1-0.7l2.1-1.8l0.3-1.3l0.5,0.1l0.8-1.5l0.6-0.2l0.9,0.9l1.1,0.3l1.3-0.8h1.4l2-0.8l0.9-0.9L514.1,476.8L514.1,476.8z" id="map-map-country-HN" data-id="HN" class="svgMap-country" fill="#4B5563"></path><path d="M1604.9,430.9v-0.2v-0.2l-0.4-0.2h-0.3l0.1,0.2l0.4,0.5L1604.9,430.9L1604.9,430.9z M1603.6,430.9l-0.1-0.5l0.2-0.3 l-0.9,0.3l-0.1,0.3v0.1l0.2,0.1H1603.6L1603.6,430.9z M1605.2,429.7l-0.1-0.3l-0.2-0.1l-0.1-0.3l-0.1-0.2l0,0l-0.3-0.1l-0.2-0.1 h-0.4l-0.1,0.1h-0.2l-0.2,0.2l0,0v0.2l-0.5,0.4v0.2l0.3,0.2l0.5-0.1l0.6,0.2l0.8,0.3v-0.2v-0.3L1605.2,429.7L1605.2,429.7z" id="map-map-country-HK" data-id="HK" class="svgMap-country" fill="#4B5563"></path><path d="M1079.1,263.8l-1.6,0.4l-1,1.5l-2.2,0.7l-0.6-0.4l-2.3,1l-1.9,0.2l-0.3,1.2l-4.1,0.8l-1.9-0.7l-2.6-1.6l-0.2,2.6 h-2.8l1.1,1.3l-1.3,4l0.8,0.1l1.2,2.1l1.6,0.8l4,2.6l4.2,1.2l1.8-0.9l0,0l3.7-1.6l3.2,0.2l3.8-1.1l2.6-4.3l1.9-4.2l2.9-1.3l-0.6-1.6 l-2.9-1.7l-1,0.6L1079.1,263.8L1079.1,263.8z" id="map-map-country-HU" data-id="HU" class="svgMap-country" fill="#4B5563"></path><path d="M915.7,158.6l-6.9-0.4l-7.3,2.9l-5.1-1.5l-6.9,3l-5.9-3.8l-6.5,0.8l-3.6,3.7l8.7,1.3l-0.1,1.6l-7.8,1.1l8.8,2.7 l-4.6,2.5l11.7,1.8l5.6,0.8l3.9-1l12.9-3.9l6.1-4.2l-4.4-3.8L915.7,158.6L915.7,158.6z" id="map-map-country-IS" data-id="IS" class="svgMap-country" fill="#4B5563"></path><path d="M1414.1,380.1l-8.5-4.4l-6.2-4l-3.2-7l4.1,0.9l-0.6-3.3l-3-3.3l-0.8-5.2l-7.6-7.5l-3.7,5.4l-5.7,1l-8.5-1.6 l-1.9,2.8l3.2,5.6l2.9,4.3l5,3.1l-3.7,3.7l1,4.5l-3.9,6.3l-2.1,6.5l-4.5,6.7l-6.4-0.5l-4.9,6.6l4,2.9l1.3,4.9l3.5,3.2l1.8,5.5h-12 l-3.2,4.2l7.1,5.4l1.9,2.5l-2.4,2.3l8,7.7l4,0.8l7.6-3.8l1.7,5.9l0.8,7.8l2.5,8.1l3.6,12.3l5.8,8.8l1.3,3.9l2,8l3.4,6.1l2.2,3 l2.5,6.4l3.1,8.9l5.5,6l2.2-1.8l1.7-4.4l5-1.8l-1.8-2.1l2.2-4.8l2.9-0.3l-0.7-10.8l1.9-6.1l-0.7-5.3l-1.9-8.2l1.2-4.9l2.5-0.3 l4.8-2.3l2.6-1.6l-0.3-2.9l5-4.2l3.7-4l5.3-7.5l7.4-4.2l2.4-3.8l-0.9-4.8l6.6-1.3l3.7,0.1l0.5-2.4l-1.6-5.2l-2.6-4.8l0.4-3.8 l-3.7-1.7l0.8-2.3l3.1-2.4l-4.6-3.4l1.2-4.3l4.8,2.7l2.7,0.4l1.2,4.4l5.4,0.9l5-0.1l3.4,1.1l-1.6,5.3l-2.4,0.4l-1.1,3.6l3.5,3.3 l0.2-4l1.5-0.1l4.5,10.1l2.4-1.5l-0.9-2.7l0.9-2.1l-0.9-6.6l4.6,1.4l1.5-5.2l-0.3-3.1l2.1-5.4l-0.9-3.6l6.1-4.4l4.1,1.1l-1.3-3.9 l1.6-1.2l-0.9-2.4l-6.1-0.9l1.2-2.7l-3.5-3.9l-3.2,2.6l-4.9-1.5l-5.3,4l-3.9,4.8l-4.2,0.8l2.7,2l0.4,3.9l-4.4,0.2l-4.7-0.4l-3.2,1 l-5.5-2.5l-0.3-1.2l-1.5-5.1l-3,1.4l0.1,2.7l1.5,4.1l-0.1,2.5l-4.6,0.1l-6.8-1.5l-4.3-0.6l-3.8-3.2l-7.6-0.9l-7.7-3.5l-5.8-3.1 l-5.7-2.5l0.9-5.9L1414.1,380.1L1414.1,380.1z" id="map-map-country-IN" data-id="IN" class="svgMap-country" fill="#5f90ed"></path><path d="M1651.9,637.3l0.5-1.7l-1.8-1.9l-2.8-2l-5.3,1.3l7,4.4L1651.9,637.3L1651.9,637.3z M1672.8,636.7l4-4.8l0.1-1.9 l-0.5-1.3l-5.7,2.6l-2.8,3.9l-0.7,2.1l0.6,0.8L1672.8,636.7L1672.8,636.7z M1637.2,623.7l-1.6,2.2l-3.1,0.1l-2.2,3.6l3,0.1l3.9-0.9 l6.6-1.2l-1.2-2.8l-3.5,0.6L1637.2,623.7L1637.2,623.7z M1665.3,623.7l-5.2,2.3l-3.8,0.5l-3.4-1.9l-4.5,1.3l-0.2,2.3l7.4,0.8 l8.6-1.8L1665.3,623.7L1665.3,623.7z M1585.8,615.3l-0.7-2.3l-2.3-0.5l-4.4-2.4l-6.8-0.4l-4.1,6.1l5.1,0.4l0.8,2.8l10,2.6l2.4-0.8 l4.1,0.6l6.3,2.4l5.2,1.2l5.8,0.5l5.1-0.2l5.9,2.5l6.6-2.4l-6.6-3.8l-8.3-1.1l-1.8-4.1l-10.3-3.1l-1.3,2.6L1585.8,615.3 L1585.8,615.3z M1732.4,611.7l0.2-3l-1.2-1.9l-1.3,2.2l-1.2,2.2l0.3,4.8L1732.4,611.7z M1691.4,594.2l-1.4-2.1l-5.7,0.3l1,2.7 l3.9,1.2L1691.4,594.2L1691.4,594.2z M1709.5,591.8l-6.1-1.8l-6.9,0.3l-1.5,3.5l3.9,0.2l3.2-0.4l4.6,0.5l4.7,2.6L1709.5,591.8 L1709.5,591.8z M1730.5,579.5l-0.8-2.4l-9-2.6l-2.9,2.1l-7.6,1.5l2.3,3.2l5,1.2l2.1,3.7l8.3,0.1l0.4,1.6l-4-0.1l-6.2,2.3l4.2,3.1 l-0.1,2.8l1.2,2.3l2.1-0.5l1.8-3.1l8.2,5.9l4.6,0.5l10.6,5.4l2.3,5.3l1,6.9l-3.7,1.8l-2.8,5.2l7.1-0.2l1.6-1.8l5.5,1.3l4.6,5.2 l1.5-20.8l1-20.7l-6-1.2l-4.1-2.3l-4.7-2.2h-5l-6.6,3.8l-4.9,6.8l-5.7-3.8L1730.5,579.5z M1680.5,563.1l-1-1.4l-5.5,4.6l-6.5,0.3 l-7.1-0.9l-4.4-1.9l-4.7,4.8l-1.2,2.6l-2.9,9.6l-0.9,5l-2.4,4.2l1.6,4.3l2.3,0.1l0.6,6.1l-1.9,5.9l2.3,1.9l3.6-1l0.3-9.1l-0.2-7.4 l3.8-1.9l-0.7,6.2l3.9,3.7l-0.8,2.5l1.3,1.7l5.6-2.4l-3,5.2l2.1,2.2l3.1-1.9l0.3-4.1l-4.7-7.4l1.1-2.2l-5.1-8.1l5-2.5l2.6-3.7 l2.4,0.9l0.5-2.9l-10.5,2.1l-3.1,2.9l-5-5.6l0.9-4.8l4.9-1l9.3-0.3l5.4,1.3l4.3-1.3L1680.5,563.1L1680.5,563.1z M1699.9,565 l-0.6-2.6l-3.3-0.6l-0.5-3.5l-1.8,2.3l-1,5.1l1.7,8.2l2.2,4l1.6-0.8l-2.3-3.3l0.9-3.9l2.9,0.6L1699.9,565L1699.9,565z M1639,560.5 l0.9-2.9l-4.3-6l3-5.8l-5-1h-6.4l-1.7,7.2l-2,2.2l-2.7,8.9l-4.5,1.3l-5.4-1.8l-2.7,0.6l-3.2,3.2l-3.6-0.4l-3.6,1.2l-3.9-3.5l-1-4.3 l-3.3,4.2l-0.6,5.9l0.8,5.6l2.6,5.4l2.8,1.8l0.7,8.5l4.6,0.8l3.6-0.4l2,3.1l6.7-2.3l2.8,2l4,0.4l2,3.9l6.5-2.9l0.8,2.3l2.5-9.7 l0.3-6.4l5.5-4.3l-0.2-5.8l1.8-4.3l6.7-0.8L1639,560.5L1639,560.5z M1570.3,609.4l0.7-9.8l1.7-8l-2.6-4l-4.1-0.5l-1.9-3.6l-0.9-4.4 l-2-0.2l-3.2-2.2l2.3-5.2l-4.3-2.9l-3.3-5.3l-4.8-4.4l-5.7-0.1l-5.5-6.8l-3.2-2.7l-4.5-4.3l-5.2-6.2l-8.8-1.2l-3.6-0.3l0.6,3.2 l6.1,7l4.4,3.6l3.1,5.5l5.1,4l2.2,4.9l1.7,5.5l4.9,5.3l4.1,8.9l2.7,4.8l4.1,5.2l2.2,3.8l7,5.2l4.5,5.3L1570.3,609.4L1570.3,609.4z" id="map-map-country-ID" data-id="ID" class="svgMap-country" fill="#4B5563"></path><path d="M1213.5,324.4l-3.2-2.9l-1.2-2.4l-3.3,1.8l2.9,7.3l-0.7,2l3.7,5.2l0,0l4.7,7.8l3.7,1.9l1,3.8l-2.3,2.2l-0.5,5 l4.6,6.1l7,3.4l3.5,4.9l-0.2,4.6h1.7l0.5,3.3l3.4,3.4l1.7-2.5l3.7,2.1l2.8-1l5.1,8.4l4.3,6.1l5.5,1.8l6.1,4.9l6.9,2.1l5.1-3.1l4-1.1 l2.8,1.1l3.2,7.8l6.3,0.8l6.1,1.5l10.5,1.9l1.2-7.4l7.4-3.3l-0.9-2.9l-2.7-1l-1-5.7l-5.6-2.7l-2.8-3.9l-3.2-3.3l3.9-5.8l-1.1-4 l-4.3-1.1l-1.1-4l-2.7-5.1l1.6-3.5l-2.5-0.9l0.5-4.7l0.5-8l-1.6-5.5l-3.9-0.2l-7.3-5.7l-4.3-0.7l-6.5-3.3l-3.8-0.6l-2.1,1.2 l-3.5-0.2l-3,3.7l-4.4,1.2l-0.2,1.6l-7.9,1.7l-7.6-1.1l-4.3-3.3l-5.2-1.3l-2.5-4.8l-1.3,0.3l-3.8-3.4l1.2-3.1l-1.9-1.9l-1.9,0.5 l-5.3,4.7l-1.8,0.2L1213.5,324.4L1213.5,324.4z" id="map-map-country-IR" data-id="IR" class="svgMap-country" fill="#4B5563"></path><path d="M1207.3,334.9l-6.2-0.9l-2.1,1l-2.1,4.1l-2.7,1.6l1.2,4.7l-0.9,7.8l-11,6.7l3.1,7.7l6.7,1.7l8.5,4.5l16.7,12.7 l10.2,0.5l3.2-6.1l3.7,0.5l3.2,0.4l-3.4-3.4l-0.5-3.3h-1.7l0.2-4.6l-3.5-4.9l-7-3.4l-4.6-6.1l0.5-5l2.3-2.2l-1-3.8l-3.7-1.9 l-4.7-7.8l0,0l-2.3,1.1L1207.3,334.9L1207.3,334.9z" id="map-map-country-IQ" data-id="IQ" class="svgMap-country" fill="#4B5563"></path><path d="M947.3,231.7l-3.5-1.3l-2.9,0.1l1.1-3.2l-0.8-3.2l-3.7,2.8l-6.7,4.7l2.1,6.1l-4.2,6.4l6.7,0.9l8.7-3.6l3.9-5.4 L947.3,231.7L947.3,231.7z" id="map-map-country-IE" data-id="IE" class="svgMap-country" fill="#4B5563"></path><path d="M1167.8,360.5l-1.4,0.1l-0.4,1.1h-1.8l-0.1,0.1l-0.6,1.6l-0.6,4.8l-1.1,2.9l0.4,0.4l-1.4,2.1l0,0l3.9,9.2l0.7,1.7 l1.7-10.2l-0.4-2.4l-2.4,0.8l0.1-1.7l1.2-0.8l-1.4-0.7l0.7-4.3l2,0.9l0.7-2h-0.1l0.6-1L1167.8,360.5L1167.8,360.5z" id="map-map-country-IL" data-id="IL" class="svgMap-country" fill="#4B5563"></path><path d="M1057.8,328.6l-1.6,5.1l0.9,2l-0.9,3.3l-4.2-2.4l-2.7-0.7l-7.5-3.3l0.6-3.4l6.2,0.6l5.2-0.7L1057.8,328.6z M1072.3,316.2l-0.8,2.3l-3.1-3l-4.5-1l-1.9,4.1l3.9,2.3l-0.4,3.3l-2.1,0.4l-2.5,5.6l-2.1,0.5l-0.1-2l0.8-3.5l1.1-1.3l-2.3-3.7 l-1.8-3.2l-2.2-0.8l-1.7-2.7l-3.4-1.2l-2.3-2.5l-3.9-0.4l-4.2-2.8l-4.9-4l-3.6-3.6l-1.9-6l-2.6-0.7l-4.2-2.1l-2.3,0.9l-2.8,2.8 l-2.1,0.5l0.5-2.7l-2.7-0.8l-1.5-4.8l1.7-1.8l-1.6-2.4l0.2-1.7l2.2,1.3l2.4-0.3l2.7-2.1l0.9,1l2.4-0.2l0.9-2.5l3.8,0.8l2.1-1.1 l0.3-2.5l3.1,0.9l0.5-1.2l4.8-1.1l1.3,2.2l7.2,1.6l-0.3,3l1.4,2.7l-4.1-0.9l-3.9,2.2l0.4,3l-0.5,1.8l1.9,3.1l4.9,3.1l2.9,5.1l6,5 l4-0.1l1.4,1.4l-1.4,1.2l4.8,2.3l3.9,1.9l4.7,3.2L1072.3,316.2z M1040.2,305.3l-0.1-0.6l-0.6,0.1l-0.2,0.5H1040.2z M1040.3,292.4 l-0.9,0.3l0.2,0.9l0.7-0.1L1040.3,292.4z M1021.6,311.6l-2.8-0.3l1.3,3.6l0.4,7.6l2.1,1.7l2-2.1l2.4,0.4l0.4-8.4l-3.3-4.4 L1021.6,311.6z" id="map-map-country-IT" data-id="IT" class="svgMap-country" fill="#97bffb"></path><path d="M946.5,506.2l-2.3,0.9l-1.3,0.8l-0.9-2.7l-1.6,0.7l-1-0.1l-1,1.9l-4.3-0.1l-1.6-1l-0.7,0.6l-1.1,0.5l-0.5,2.2 l1.3,2.6l1.3,5.1l-2,0.8l-0.6,0.9l0.4,1.2l-0.3,2.8h-0.9l-0.3,1.8l0.6,3.1l-1.2,2.8l1.6,1.8l1.8,0.4l2.3,2.7l0.2,2.5l-0.5,0.8 l-0.5,5.2l1.1,0.2l5.6-2.4l3.9-1.8l6.6-1.1l3.6-0.1l3.9,1.3l2.6-0.1l0.2-2.5l-2.4-5.5l1.5-7.2l2.3-5.3l-1.4-9.1l-3.8-1.6l-2.7,0.2 l-1.9,1.6l-2.5-1.3l-1-2.1L946.5,506.2L946.5,506.2z" id="map-map-country-CI" data-id="CI" class="svgMap-country" fill="#4B5563"></path><path d="M550.7,458.5l3.9-0.1l-0.8-1.8l-2.7-1.5l-3.7-0.6l-1.2-0.2l-2.4,0.4l-0.8,1.5l2.9,2.3l3,1L550.7,458.5L550.7,458.5z " id="map-map-country-JM" data-id="JM" class="svgMap-country" fill="#4B5563"></path><path d="M1692.5,354.9l-4.5-1.3l-1.1,2.7l-3.3-0.8l-1.3,3.8l1.2,3l4.2,1.8l-0.1-3.7l2.1-1.5l3.1,2.1l1.3-3.9L1692.5,354.9 L1692.5,354.9z M1716.9,335.6l-3.6-6.7l1.3-6.4l-2.8-5.2l-8.1-8.7l-4.8,1.2l0.2,3.9l5.1,7.1l1,7.9l-1.7,2.5l-4.5,6.5l-5-3.1v11.5 l-6.3-1.3l-9.6,1.9l-1.9,4.4l-3.9,3.3l-1.1,4l-4.3,2l4,4.3l4.1,1.9l0.9,5.7l3.5,2.5l2.5-2.7l-0.8-10.8l-7.3-4.7l6.1-0.1l5-3l8.6-1.4 l2.4,4.8l4.6,2.4l4.4-7.3l9.1-0.4l5.4-3l0.6-4.6l-2.5-3.2L1716.9,335.6L1716.9,335.6z M1705.1,291.4l-5.3-2.1l-10.4-6.4l1.9,4.8 l4.3,8.5l-5.2,0.4l0.6,4.7l4.6,6.1h5.7l-1.6-6.8l10.8,4.2l0.4-6.1l6.4-1.7l-6-6.9l-1.7,2.6L1705.1,291.4L1705.1,291.4z" id="map-map-country-JP" data-id="JP" class="svgMap-country" fill="#97bffb"></path><path d="M1186.6,367.6l-3.1-7.7l-9.6,6.7l-6.3-2.5l-0.7,2l0.4,3.9l-0.6,1.9l0.4,2.4l-1.7,10.2l0.3,0.9l6.1,1l2.1-2l1.1-2.3 l4-0.8l0.7-2.2l1.7-1l-6.1-6.4l10.4-3.1L1186.6,367.6L1186.6,367.6z" id="map-map-country-JO" data-id="JO" class="svgMap-country" fill="#4B5563"></path><path d="M1308.8,223.8l-9-1.3l-3.1,2.5l-10.8,2.2l-1.7,1.5l-16.8,2.1l-1.4,2.1l5,4.1l-3.9,1.6l1.5,1.7l-3.6,2.9l9.4,4.2 l-0.2,3l-6.9-0.3l-0.8,1.8l-7.3-3.2l-7.6,0.2l-4.3,2.5l-6.6-2.4l-11.9-4.3l-7.5,0.2l-8.1,6.6l0.7,4.6l-6-3.6l-2.1,6.8l1.7,1.2 l-1.7,4.7l5.3,4.3l3.6-0.2l4.2,4.1l0.2,3.2l2.8,1l4.4-1.3l5-2.7l4.7,1.5l4.9-0.3l1.9,3.9l0.6,6l-4.6-0.9l-4,1l0.9,4.5l-5-0.6l0.6,2 l3.2,1.6l3.7,5.5l6.4,2.1l1.5,2.1l-0.7,2.6l0.7,1.5l1.8-2l5.5-1.3l3.8,1.7l4.9,4.9l2.5-0.3l-6.2-22.8l11.9-3.6l1.1,0.5l9.1,4.5 l4.8,2.3l6.5,5.5l5.7-0.9l8.6-0.5l7.5,4.5l1.5,6.2l2.5,0.1l2.6,5l6.6,0.2l2.3,3h1.9l0.9-4.5l5.4-4.3l2.5-1.2l0.3-2.7l3.1-0.8 l9.1,2.1l-0.5-3.6l2.5-1.3l8.1,2.6l1.6-0.7l8.6,0.2l7.8,0.6l3.3,2.2l3.5,0.9l-1.7-3.5l2.9-1.6l-8.7-10.7l9-2.4l2-1.4l-1-11.1l10.7,2 l1.6-2.8l-2.5-6.2l3.8-0.6l1.8-4.2l-4.3-3.8l-6,0.9l-3.3-2.6l-3.9-1.2l-4.1-3.6l-3.2-1.1l-6.2,1.6l-8.3-3.6l-1.1,3.3l-18.1-15.5 l-8.3-4.7l0.8-1.9l-9.1,5.7l-4.4,0.4l-1.2-3.3l-7-2.1l-4.3,1.5L1308.8,223.8L1308.8,223.8z" id="map-map-country-KZ" data-id="KZ" class="svgMap-country" fill="#4B5563"></path><path d="M1211.7,547.2h-3.8l-2.3-2.1l-5.1,2.6l-1.6,2.7l-3.8-0.5l-1.2-0.7l-1.3,0.1h-1.8l-7.2-5.4h-3.9l-2-2.1v-3.6 l-2.9-1.1l-3.8,4.2l-3.4,3.8l2.7,4.4l0.7,3.2l2.6,7.3l-2.1,4.7l-2.7,4.2l-1.6,2.6v0.3l1.4,2.4l-0.4,4.7l20.2,13l0.4,3.7l8,6.3 l2.2-2.1l1.2-4.2l1.8-2.6l0.9-4.5l2.1-0.4l1.4-2.7l4-2.5l-3.3-5.3l-0.2-23.2L1211.7,547.2L1211.7,547.2z" id="map-map-country-KE" data-id="KE" class="svgMap-country" fill="#4B5563"></path><path d="M1235.6,381.4l-3.7-0.5l-3.2,6.1l4.9,0.6l1.7,3.1l3.8-0.2l-2.4-4.8l0.3-1.5L1235.6,381.4L1235.6,381.4z" id="map-map-country-KW" data-id="KW" class="svgMap-country" fill="#4B5563"></path><path d="M1387.2,302.6l-3.5-0.9l-3.3-2.2l-7.8-0.6l-8.6-0.2l-1.6,0.7l-8.1-2.6l-2.5,1.3l0.5,3.6l-9.1-2.1l-3.1,0.8l-0.3,2.7 l1.8,0.6l-3.1,4.1l4.6,2.3l3.2-1.6l7.1,3.3l-5.2,4.5l-4.1-0.6l-1.4,2l-5.9-1.1l0.6,3.7l5.4-0.5l7.1,2l9.5-0.9l1-1.5l-1.1-1.5l4-3 l3.2-1.2l5.7,0.9l0.6-4l6.4-0.8l1-2.4l6.8-3.4L1387.2,302.6L1387.2,302.6z" id="map-map-country-KG" data-id="KG" class="svgMap-country" fill="#4B5563"></path><path d="M1574.8,481.8l0.2-6.4l-2-4.5l-4.8-4.4l-4.3-5.6l-5.7-7.5l-7.3-3.8l1.3-2.3l3.3-1.7l-3-5.5l-6.8-0.1l-3.4-5.7 l-4-5.1l-2.7,1l1.9,7.2l-2.9-0.1l-0.7-1.5l-4.1,4.1l-0.8,2.4l2.6,1.9l0.9,3.8l3.8,0.3l-0.4,6.7l1,5.7l5.3-3.8l1.8,1.2l3.2-0.2 l0.8-2.2l4.3,0.4l4.9,5.2l1.3,6.3l5.2,5.5l0.5,5.4l-1.5,2.9l4.9,2.4l2-4.3L1574.8,481.8L1574.8,481.8z" id="map-map-country-LA" data-id="LA" class="svgMap-country" fill="#4B5563"></path><path d="M1102.1,210.1h-3.8l-4.4-2.2l-2.1-0.7l-3.7,1l-0.2,4.6l-3.6,0.1l-4.4-4.5l-4,2.1l-1.7,3.7l0.5,4.5l5-1.9l7.9,0.4 l4.4-0.6l0.9,1.3l2.5,0.4l5,2.9l2.6-1l4.6-2.3l-2.1-3.6l-1-2.8L1102.1,210.1L1102.1,210.1z" id="map-map-country-LV" data-id="LV" class="svgMap-country" fill="#4B5563"></path><path d="M1167.8,360.5l0.9-3.5l2.6-2.4l-1.2-2.5l-2.4-0.3l-0.1,0.2l-2.1,4.5l-1.3,5.2h1.8l0.4-1.1L1167.8,360.5 L1167.8,360.5z" id="map-map-country-LB" data-id="LB" class="svgMap-country" fill="#4B5563"></path><path d="M1128.1,766.5l1.1-2l3.1-1l1.1-2.1l1.9-3.1l-1.7-1.9l-2.3-2l-2.6,1.3l-3.1,2.5l-3.2,4l3.7,4.9L1128.1,766.5 L1128.1,766.5z" id="map-map-country-LS" data-id="LS" class="svgMap-country" fill="#4B5563"></path><path d="M929.4,523.3l-1.6-0.2l-1.1,2.6l-1.6-0.1l-1.1-1.3l0.4-2.6l-2.3-3.9l-1.5,0.7l-1.2,0.2l-2.6,3l-2.6,3.4l-0.3,1.9 l-1.3,2l3.7,4.1l4.8,3.5l5.1,4.8l5.7,3.1l1.5-0.1l0.5-5.2l0.5-0.8l-0.2-2.5l-2.3-2.7l-1.8-0.4l-1.6-1.8l1.2-2.8l-0.6-3.1 L929.4,523.3L929.4,523.3z" id="map-map-country-LR" data-id="LR" class="svgMap-country" fill="#4B5563"></path><path d="M1111.8,371.4l-1.5-2.1l-5.4-0.8l-1.8-1.1h-2l-2-2.8l-7.3-1.3l-3.6,0.8l-3.7,3l-1.5,3.1l1.5,4.8l-2.4,3l-2.5,1.6 l-5.9-3.1l-7.7-2.7l-4.9-1.2l-2.8-5.7l-7.2-2.8l-4.5-1.1l-2.2,0.6l-6.4-2.2l-0.1,4.9l-2.6,1.8l-1.5,2l-3.7,2.5l0.7,2.6l-0.4,2.7 l-2.6,1.4l1.9,5.6l0.4,3l-0.9,5.2l0.5,2.9l-0.6,3.5l0.5,4l-2.1,2.6l3.4,4.7l0.2,2.7l2,3.6l2.6-1.2l4.3,2.9l2.5,4l8.8,2.8l3.1,3.5 l3.9-2.4l5.4-3.5l22.3,12.2l22.4,12.2v-2.7h6.3l-0.5-12.7l-1-23.4l-1.3-22.7l-2-5.1l1.2-3.9l-1.1-2.7L1111.8,371.4L1111.8,371.4z" id="map-map-country-LY" data-id="LY" class="svgMap-country" fill="#4B5563"></path><path d="M1024.4,273.6v-0.2l0.1-0.2l-0.1-0.1l-0.1-0.2l-0.1-0.1v-0.2l-0.1-0.1v-0.2l-0.1-0.1l-0.2,0.6v0.5l0.1,0.2h0.1 L1024.4,273.6L1024.4,273.6z" id="map-map-country-LI" data-id="LI" class="svgMap-country" fill="#4B5563"></path><path d="M1100.4,221.2l-5-2.9l-2.5-0.4l-0.9-1.3l-4.4,0.6l-7.9-0.4l-5,1.9l1.7,5l5,1.1l2.2,0.9l-0.2,1.7l0.6,1.5l2.5,0.6 l1.4,1.9h4.6l4.8-2.2l0.5-3.4l3.5-2L1100.4,221.2L1100.4,221.2z" id="map-map-country-LT" data-id="LT" class="svgMap-country" fill="#4B5563"></path><path d="M1007,258.6l0.2-2.7l-1-1.4l-1.3,0.2l-0.4,3.5l1.1,0.5L1007,258.6z" id="map-map-country-LU" data-id="LU" class="svgMap-country" fill="#4B5563"></path><path d="M1094,304.8l-2.8-2l-2.4,0.1l-1.7,0.4l-1.1,0.2l-2.9,1l-0.1,1.2h-0.7l0,0l-0.4,2.1l0.9,2.6l2.3,1.6l3.3-0.6l1.9-1.3 l2.8,0.1l0.7-1.1l1-0.2L1094,304.8L1094,304.8z" id="map-map-country-MK" data-id="MK" class="svgMap-country" fill="#4B5563"></path><path d="M1255.7,658.4l-1.1-4.2l-1.4-2.7l-1.8-2.7l-2,2.8l-0.3,3.8l-3.3,4.5l-2.3-0.8l0.6,2.7l-1.8,3.2l-4.8,3.9l-3.4,3.7 h-2.4l-2.2,1.2l-3.1,1.3l-2.8,0.2l-1,4.1l-2.2,3.5l0.1,5.9l0.8,4l1.1,3l-0.8,4.1l-2.9,4.8l-0.2,2.1l-2.6,1.1l-1.3,4.6l0.2,4.6l1.6,5 l-0.1,5.7l1.2,3.3l4.2,2.3l3,1.7l5-2.7l4.6-1.5l3.1-7.4l2.8-8.9l4.3-12l3.3-8.8l2.7-7.4l0.8-5.4l1.6-1.5l0.7-2.7l-0.8-4.7l1.2-1.9 l1.6,3.8l1.1-1.9l0.8-3.1l-1.3-2.9L1255.7,658.4L1255.7,658.4z" id="map-map-country-MG" data-id="MG" class="svgMap-country" fill="#4B5563"></path><path d="M1169.2,661.5l0.1-2.3l-1.2-1.9l0.1-2.8l-1.5-4.7l1.7-3.5l-0.1-7.7l-1.9-4.1l0.2-0.7l0,0l-1.1-1.7l-5.4-1.2l2.6,2.8 l1.2,5.4l-1,1.8l-1.2,5.1l0.9,5.3l-1.8,2.2l-1.9,5.9l2.9,1.7l3,3l1.6-0.6l2.1,1.6l0.3,2.6l-1.3,2.9l0.2,4.5l3.4,4l1.9-4.5l2.5-1.3 l-0.1-8.2l-2.2-4.6l-1.9-2h-0.3v0.8l1.1,0.3l1,3.4l-0.2,0.8l-1.9-2.5l-1,1.6L1169.2,661.5L1169.2,661.5z" id="map-map-country-MW" data-id="MW" class="svgMap-country" fill="#4B5563"></path><path d="M1558.1,554.4l-0.5-3.8l-0.6-2.1l0.5-2.9l-0.5-4.3l-2.6-4.3l-3.5-3.8l-1.3-0.6l-1.7,2.6l-3.7,0.8l-0.6-3.3l-4.7-2.8 l-0.9,1.1l1.4,2.7l-0.4,4.7l2.1,3.4l1,5.3l3.4,4.3l0.8,3.2l6.7,5l5.4,4.8l4-0.5l0.1-2.1l-2.3-5.6L1558.1,554.4z M1560.9,563.3 l0.2,0.2l-0.1,0.2l-0.9,0.4l-0.9-0.4l0.3-0.6l0.6-0.1l0.5,0.2L1560.9,563.3z M1645.2,540.2l-3.8,0.4l1.2,3.1l-4,2.1l-5-1h-6.4 l-1.7,7.2l-2,2.2l-2.7,8.9l-4.5,1.3l-5.4-1.8l-2.7,0.6l-3.2,3.2l-3.6-0.4l-3.6,1.2l-3.9-3.5l-1-4.3l4.1,2.2l4.4-1.2l0.9-5.4l2.4-1.2 l6.7-1.4l3.8-5l2.6-4l2.7,3.3l1.1-2.2l2.7,0.2l0.1-4.1l0.1-3.1l4.1-4.4l2.5-5h2.3l3.1,3.2l0.4,2.8l3.8,1.7l4.8,2L1645.2,540.2z" id="map-map-country-MY" data-id="MY" class="svgMap-country" fill="#4B5563"></path><path d="M1389.1,551.6L1389.1,551.6l0.1-0.3l-0.1-0.1h-0.1l-0.1,0.2v0.1v0.1H1389.1z M1389.4,545.7l0.1-0.2v-0.1v-0.1v-0.1 v-0.1l-0.1,0.1l-0.1,0.2v0.1l-0.1,0.1v0.1H1389.4L1389.4,545.7z" id="map-map-country-MV" data-id="MV" class="svgMap-country" fill="#4B5563"></path><path d="M1000.3,450.3l-6.1,0.6l-0.1-4l-2.6-1.1l-3.4-1.8l-1.3-3l-18.6-13.8l-18.4-13.9l-8.4,0.1l2.4,27.4l2.4,27.5l1,0.8 l-1.3,4.4l-22.3,0.1l-0.9,1.4l-2.1-0.4l-3.2,1.3l-3.8-1.8l-1.8,0.2l-1,3.7l-1.9,1.2l0.2,3.9l1.1,3.7l2.1,1.8l0.4,2.4l-0.3,2l0.3,2.3 h0.9l1.5-0.8l0.9,0.2l1.5,1.6l2.4,0.5l1.6-1.4l1.8-0.8l1.3-0.9l1.1,0.2l1.3,1.4l0.6,1.7l2.3,2.7l-1.2,1.6l-0.2,2.1l1.2-0.6l0.7,0.7 l-0.3,1.9l1.7,1.8l0.7-0.6l1.6,1l4.3,0.1l1-1.9l1,0.1l1.6-0.7l0.9,2.7l1.3-0.8l2.3-0.9l-0.4-3.7l1.6-2.7l-0.2-2.2l4.5-5.2l0.8-4.4 l1.6-1.6l2.7,0.9l2.3-1.3l0.8-1.6l4.3-2.9l1.1-2l5.2-2.6l3-0.9l1.4,1.2h3.6l3.6-0.3l2-2.2l7.6-0.6l4.9-1l0.5-3.9l3-4.3L1000.3,450.3 L1000.3,450.3z" id="map-map-country-ML" data-id="ML" class="svgMap-country" fill="#4B5563"></path><path d="M1053.6,344l-0.2-0.2l-0.5-0.5l-0.5-0.1l0.1,0.6l0.4,0.4h0.5L1053.6,344L1053.6,344z M1052.2,342.8L1052.2,342.8 v-0.2l-0.3-0.1l-0.4,0.1l0.1,0.1l0.3,0.2L1052.2,342.8z" id="map-map-country-MT" data-id="MT" class="svgMap-country" fill="#4B5563"></path><path d="M638,479.9l-0.2-0.7l-0.1-0.2l-0.2-0.3l0.1-0.3v-0.1h-0.2l-0.3-0.5l-0.6-0.3h-0.3l-0.2,0.2v0.3l0.3,0.9l0.2,0.2 l0.5,0.2l-0.4,0.4v0.1l0.1,0.3h0.9l0.2,0.3l0.1-0.1L638,479.9L638,479.9z" id="map-map-country-MQ" data-id="MQ" class="svgMap-country" fill="#4B5563"></path><path d="M949.8,413.3l-20.3-15.5l-0.2,9.7l-17.9-0.3l-0.2,16.3L906,424l-1.4,3.3l0.9,9.2l-21.6-0.1l-1.2,2.2l2.8,2.7l1.4,3 l-0.7,3.2l0.6,3.2l0.5,6.3l-0.8,5.9l-1.7,3.2l0.4,3.4l2-2l2.7,0.5l2.8-1.4h3.1l2.6,1.8l3.7,1.7l3.2,4.7l3.6,4.4l1.9-1.2l1-3.7 l1.8-0.2l3.8,1.8l3.2-1.3l2.1,0.4l0.9-1.4l22.3-0.1l1.3-4.4l-1-0.8l-2.4-27.5l-2.4-27.4L949.8,413.3L949.8,413.3z" id="map-map-country-MR" data-id="MR" class="svgMap-country" fill="#4B5563"></path><path d="M1294.7,702.5l0.3-0.3l0.2-0.4l0.3-0.3l0.1-0.7l-0.2-0.8l-0.4-0.7l-0.5,0.1l-0.3,0.4l-0.2,0.5l-0.5,0.3l-0.1,0.3 l-0.2,0.7l-0.1,0.4l-0.2,0.1v0.2l0.3,0.3l0.8,0.1L1294.7,702.5L1294.7,702.5z" id="map-map-country-MU" data-id="MU" class="svgMap-country" fill="#4B5563"></path><path d="M1228.7,654.7v-0.3l0.2-0.5v-0.1l0.1-0.5l-0.3-0.3h-0.2l-0.2-0.3l-0.3,0.3l0.3,0.5l-0.1,0.3l-0.1,0.4l0.1,0.4 l0.2,0.2L1228.7,654.7L1228.7,654.7z" id="map-map-country-YT" data-id="YT" class="svgMap-country" fill="#4B5563"></path><path d="M444.4,407.8l-3.6-1.4l-3.9-2l-0.8-3l-0.2-4.5l-2.4-3.6l-1-3.7l-1.6-4.4l-3.1-2.5l-4.4,0.1l-4.8,5l-4-1.9l-2.2-1.9 l-0.4-3.5l-0.8-3.3l-2.4-2.8l-2.1-2l-1.3-2.2h-9.3l-0.8,2.6H391h-10.7l-10.7-4.4l-7.1-3.1l1-1.3l-7,0.7l-6.3,0.5l0.2,5.7l0.7,5.1 l0.7,4.1l0.8,4l2.6,1.8l2.9,4.5l-1,2.9l-2.7,2.3l-2.1-0.3l-0.6,0.5l2.3,3.7l2.9,1.5l1,1.7l0.9-0.9l3.1,2.9l2.1,2l0.1,3.4l-1.2,4.7 l2.5,1.6l3.3,3.1l2.9,3.6l0.7,3.9h1l2.7-2.3l0.4-1.2l-1.5-2.8l-1.6-2.9l-2.6-0.2l0.4-3.4l-0.9-3l-1-2.8l-0.5-5.9l-2.6-3.2l-0.6-2.3 l-1.2-1.6v-4.1l-1,0.1l-0.1-2.2l-0.7-0.5l-0.4-1.4l-2.7-4.4l-1.1-2.6l1-4.8l0.1-3l1.8-2.6l2.4,1.7l1.9-0.2l3.1,2.5l-0.9,2.4l0.4,4.9 l1.5,4.7l-0.4,2l1.7,3.1l2.3,3.4l2.7,0.5l0.3,4.4l2.4,3.1l2.5,1.5l-1.8,4l0.7,1.5l4.1,2.6l1.9,4l4.5,4.9l3.8,6.4l1.3,3.2v2.5 l1.4,2.9l-0.3,2.2l-1.6,1.6l0.3,1.8l-1.9,0.7l0.8,3.1l2.2,4l5.3,3.6l1.9,2.9l5.4,2l3,0.4l1.2,1.7l4.2,3l5.9,3l4,0.9l4.8,2.9l4,1.2 l3.7,1.7l2.9-0.7l4.8-2.4l3.1-0.4l4.4,1.6l2.6,2.1l5.5,6.9l0.4-1.9l0.8-1.5l-0.7-1.2l3.3-5.2h7.1l0.4-2.1l-0.8-0.4l-0.5-1.4 l-1.9-1.5l-1.8-2.1h2.6l0.4-3.6h5.2l5.1,0.1l0.1-1l0.7-0.3l0.9,0.8l2.5-3.9h1l1.2-0.1l1.2,1.6l2-5l1.2-2.7l-0.9-1.1l1.8-3.9l3.5-3.8 l0.6-3.1l-1.2-1.3l-3.4,0.5l-4.8-0.2l-6,1.5l-4,1.7l-1.2,1.8l-1.2,5.4l-1.8,3.7l-3.9,2.6l-3.6,1.1l-4.3,1.1l-4.3,0.6l-5.1,1.8 l-1.9-2.6l-5.6-1.7l-1.8-3.2l-0.7-3.6l-3-4.7l-0.4-5l-1.2-3.1l-0.5-3.4l1.1-3.1l1.8-8.6l1.8-4.5l3.1-5.6L444.4,407.8L444.4,407.8z" id="map-map-country-MX" data-id="MX" class="svgMap-country" fill="#4B5563"></path><path d="M1118.5,283.3l1.2-0.7l0.5-2.1l1.1-2l-0.5-1.1l1-0.5l0.6,0.9l3,0.2l1.2-0.5l-1-0.6l0.2-1l-2-1.5l-1.1-2.6l-1.9-1.1 v-2.1l-2.5-1.6l-2-0.3l-3.9-1.9l-3.2,0.6l-1.1,0.9l1.6,0.6l1.8,1.9l1.9,2.6l3.4,3.7l0.6,2.7l-0.2,2.7L1118.5,283.3z" id="map-map-country-MD" data-id="MD" class="svgMap-country" fill="#4B5563"></path><path d="M1013.5,295.2l0-0.3l0.5-0.6l0.3,0.2L1013.5,295.2z" id="map-map-country-MC" data-id="MC" class="svgMap-country" fill="#4B5563"></path><path d="M1473.7,252.1l-3.7-4.6l-6.6-1.5l-4.8-0.8l-6.9-2.5l-1.3,6.4l4,3.6l-2.4,4.3l-7.9-1.6l-5-0.2l-4.7-2.9l-5.1-0.1 l-5.3-1.9l-5.9,2.9l-6.6,5.4l-4.7,1l3.3,4.4l5.7,3.3l8.1,2.3l5.8,5l1.3,7.3l3,2.7l6.4,1l7.2,0.9l7.9,3.8l3.4,0.7l4.9,5.7l4.7,3.6 l5.5-0.1l11.2,1.3l6.4-0.8l5.5,0.9l9.3,3.8l6.2-0.1l3.2,2l4.4-3.3l7.2-2.2l7.5-0.2l4.9-2.2l1.9-3.3l2.5-2l-1.9-2.1l-2.9-2.3l0.4-4 l3.2,0.5l5.9,1.3l3.1-3.3l6.3-2.4l1.4-4.1l2.4-1.8l6.8-0.8l4.3,0.7l-0.7-2.2l-7.2-4.3l-5.1-2l-2.5,2.3l-5.4-1l-2.4,0.8l-2.7-2.6 l-0.3-6.2l-0.6-4.6l-5.5,0.5l-3.9-2.1l-3.3-0.7l-4.5,4.4l-5.8,1l-3.6,1.6l-6.7-1h-4.5l-4.9-3.1l-6.5-3l-5.4-0.8l-5.7,0.8l-3.9,1.1 L1473.7,252.1L1473.7,252.1z" id="map-map-country-MN" data-id="MN" class="svgMap-country" fill="#4B5563"></path><path d="M1080,299.8l0.4-0.6l-2-1.2l-1.8-0.7l-0.8-0.8l-1.5-1.1l-0.9,0.6l-1.5,1.4l-0.4,3.4l-0.5,1l0,0l2.3,1.2l1.6,2.1 l1.1,0.4l0,0l-0.5-1.9l2-3.1l0.4,1.2l1.3-0.5L1080,299.8z" id="map-map-country-ME" data-id="ME" class="svgMap-country" fill="#4B5563"></path><path d="M631.8,465.7l-0.1-0.5h-0.1l-0.2,0.4v0.3l0.3,0.1L631.8,465.7z" id="map-map-country-MS" data-id="MS" class="svgMap-country" fill="#4B5563"></path><path d="M965.2,348.4l-2.3-0.1l-5.5-1.4l-5,0.4l-3.1-2.7h-3.9l-1.8,3.9l-3.7,6.7l-4,2.6l-5.4,2.9L927,365l-0.9,3.4l-2.1,5.4 l1.1,7.9l-4.7,5.3l-2.7,1.7l-4.4,4.4l-5.1,0.7l-2.8,2.4l-0.1,0.1l-3.6,6.5l-3.7,2.3l-2.1,4l-0.2,3.3l-1.6,3.8l-1.9,1l-3.1,4l-2,4.5 l0.3,2.2l-1.9,3.3l-2.2,1.7l-0.3,3h0.1l12.4-0.5l0.7-2.3l2.3-2.9l2-8.8l7.8-6.8l2.8-8.1l1.7-0.4l1.9-5l4.6-0.7l1.9,0.9h2.5l1.8-1.5 l3.4-0.2l-0.1-3.4l0,0h0.8l0.1-7.5l8.9-4.7l5.4-1l4.4-1.7l2.1-3.2l6.3-2.5l0.3-4.7l3.1-0.5l2.5-2.4l7-1l1-2.5l-1.4-1.4l-1.8-6.7 l-0.3-3.9L965.2,348.4L965.2,348.4z" id="map-map-country-MA" data-id="MA" class="svgMap-country" fill="#4B5563"></path><path d="M1203,640.7l-0.8-2.9l0,0l0,0l-4.6,3.7l-6.2,2.5l-3.3-0.1l-2.1,1.9l-3.9,0.1l-1.4,0.8l-6.7-1.8l-2.1,0.3l-1.6,6 l0.7,7.3h0.3l1.9,2l2.2,4.6l0.1,8.2l-2.5,1.3l-1.9,4.5l-3.4-4l-0.2-4.5l1.3-2.9l-0.3-2.6l-2.1-1.6l-1.6,0.6l-3-3l-17.1,5.2l0.3,4.5 l0.3,2.4l4.6-0.1l2.6,1.3l1.1,1.6l2.6,0.5l2.8,2l-0.3,8.1l-1.3,4.4l-0.5,4.7l0.8,1.9l-0.8,3.7l-0.9,0.6l-1.6,4.6l-6.2,7.2l2.2,9 l1.1,4.5l-1.4,7.1l0.4,2.3l0.6,2.9l0.3,2.8h4.1l0.7-3.3l-1.4-0.5l-0.3-2.6l2.6-2.4l6.8-3.4l4.6-2.2l2.5-2.3l0.9-2.6l-1.2-1.1l1.1-3 l0.5-6.2l-1,0.3v-1.9l-0.8-3.7l-2.4-4.8l0.7-4.6l2.3-1.4l4.1-4.6l2.2-1.1l6.7-6.8l6.4-3.1l5.2-2.5l3.7-3.9l2.4-4.4l1.9-4.6l-0.9-3.1 l0.2-9.9l-0.4-5.6L1203,640.7L1203,640.7z" id="map-map-country-MZ" data-id="MZ" class="svgMap-country" fill="#4B5563"></path><path d="M1533.9,435.8l-0.6-2.6l-3.8,1.8l-2.5-1.2l-4.5-2.4l0.8-5.2l-3.7-1.3l-2.3-5.8l-5.6,1l-0.7-7.5l4.1-5.3l-0.8-5.3 l-1.3-4.9l-2.7-1.5l-2.7-3.7l-3,0.4l0.9,2.4l-1.6,1.2l1.3,3.9l-4.1-1.1l-6.1,4.4l0.9,3.6l-2.1,5.4l0.3,3.1l-1.5,5.2l-4.6-1.4 l0.9,6.6l-0.9,2.1l0.9,2.7l-2.4,1.5l0.5,4.6l-2.1-1l1.1,5.1l4.6,5.2l3.4,0.9l-0.4,2.2l5.4,7.4l1.9,5.9l-0.9,7.9l3.6,1.5l3.2,0.6 l5.8-4.6l3.2-3.1l3.1,5.2l2,8.1l2.6,7.6l2.6,3.3l0.2,6.9l2.2,3.8l-1.3,4.8l0.9,4.8l2.2-6.6l2.6-5.9l-2.8-5.8l-0.2-3l-1-3.5l-4.2-5.1 l-1.7-3.2l1.7-1.1l1.4-5.6l-2.9-4.2l-4.1-4.6l-3.5-5.6l2.2-1.1l1.5-6.9l3.9-0.3l2.8-2.8l3-1.4l0.8-2.4L1533.9,435.8L1533.9,435.8z" id="map-map-country-MM" data-id="MM" class="svgMap-country" fill="#4B5563"></path><path d="M1105.4,683.7l-10.3,2.5l-13.4-0.9l-3.7-3l-22.5,0.3l-0.9,0.4l-3.2-2.9l-3.6-0.1l-3.3,1l-2.7,1.2l0.2,4.9l4.4,6.2 l1.1,4l2.8,7.7l2.7,5.2l2.1,2.6l0.6,3.5v7.6l1.6,9.8l1.2,4.6l1,6.2l1.9,4.7l3.9,4.8l2.7-3.2l2.1,1.8l0.8,2.7l2.4,0.5l3.3,1.2 l2.9-0.5l5-3.2l1.1-23.6l0.6-18.5l5.4-0.2l0.9-22.7l4.1-0.2l8.6-2.2l2,2.6l3.7-2.5h1.6l3.2-1.5V684l-2.1-1.4l-3.6-0.4L1105.4,683.7 L1105.4,683.7z" id="map-map-country-NA" data-id="NA" class="svgMap-country" fill="#4B5563"></path><path d="M1915,575.5v-0.2h-0.1h-0.1l-0.1,0.2l0.1,0.1l0.1,0.1L1915,575.5L1915,575.5z" id="map-map-country-NR" data-id="NR" class="svgMap-country" fill="#4B5563"></path><path d="M1455.2,394.8l-6.5-0.6l-6.4-1.5l-5-2.8l-4.5-1.2l-2.5-3.1l-3.2-0.9l-6.4-4.1l-4.7-2l-1.9,1.5l-2.8,2.9l-0.9,5.9 l5.7,2.5l5.8,3.1l7.7,3.5l7.6,0.9l3.8,3.2l4.3,0.6l6.8,1.5l4.6-0.1l0.1-2.5l-1.5-4.1L1455.2,394.8L1455.2,394.8z" id="map-map-country-NP" data-id="NP" class="svgMap-country" fill="#4B5563"></path><path d="M1005.5,243.9h2.9l1.1-2.3l1-5.6l-1-2l-3.9-0.2l-6.5,2.6l-3.9,8.9l-2.5,1.7l0,0l3.6,0.5l4.4-1.3l3.1,2.7l2.8,1.4 L1005.5,243.9L1005.5,243.9z" id="map-map-country-NL" data-id="NL" class="svgMap-country" fill="#a4cafe"></path><path d="M1897.3,716.1v-0.3l-0.4-0.2l-0.2,0.5v0.1l0.2,0.1h0.2L1897.3,716.1L1897.3,716.1z M1901.9,708.5L1901.9,708.5 l-0.1-0.4l0.1-0.2l-0.4,0.2l-0.6,0.2l0.1,0.8l-0.1,0.4l0.3,0.1l0.1,0.3h0.2l0.7-0.2l0.3-1.1h-0.4L1901.9,708.5L1901.9,708.5z M1898.9,706.8l0.3-0.5l0.1-0.2l-0.2-0.7l-0.3-0.3l0.3-1l-0.1-0.2l-0.4-0.2l-0.9,0.3l-0.1,0.2l0.5,0.1l0.2,0.2l-0.5,0.7l-0.5,0.1 l0.1,0.5l0.2,0.4l0.7,0.2l0.3,0.4H1898.9z M1895,703.9l0.3-0.3l0.3-0.4l-0.1-0.1v-0.3l0.2-0.4l0.3-0.1l-0.2-0.2l-0.2-0.1v0.3 l-0.3,0.7l-0.1,0.3l-0.5,0.6H1895L1895,703.9z M1882.7,701l-0.6-0.7l-0.1,0.2l-0.1,0.4v0.3l0.3,0.2l0.1,0.2l-0.1,0.5v0.4l0.6,0.9 l0.1,0.7l0.3,0.6l0.5,0.5l0.4,0.5l0.8,1.4l0.2,0.5l0.4,0.3l1,1.2l0.4,0.4l0.4,0.2l0.9,0.7l0.6,0.3l0.3,0.5l0.6,0.3l0.8,0.4l0.1,0.2 v0.3l0.1,0.3l0.5,0.4l0.6,0.3l0.1,0.2l0.1,0.2l0.3-0.1l0.3,0.1l0.9,0.7l0.4-0.1h0.3l0.5-0.2l0.3-0.4l-0.1-1.1l-0.5-0.5l-0.7-0.4 l-0.4-0.5l-0.4-0.5l-0.8-1l-1.1-1l-0.5-0.2l-0.3-0.4l-0.3-0.1l-0.2-0.3l-0.5-0.3l-0.3-0.6l-0.6-0.6l-0.1-0.3l0.1-0.3l-0.1-0.3 l-0.4-0.3l-0.2-0.5l-0.2-0.3l-0.4-0.2l-0.7-0.4l-1.6-1.9l-0.7-0.6l-0.7,0.2L1882.7,701L1882.7,701z M1860.7,695l0.2-0.4l0.1-0.8 l-0.2,0.4l-0.2,1L1860.7,695z" id="map-map-country-NC" data-id="NC" class="svgMap-country" fill="#4B5563"></path><path d="M1868.6,832.8l0.9-2.6l-5.8,2.9l-3.4,3.4l-3.2,1.6l-5.9,4.6l-5.6,3.2l-7,3.2l-5.5,2.4l-4.3,1.1l-11.3,6.1l-6.4,4.6 l-1.1,2.3l5.1,0.4l1.5,2.1l4.5,0.1l4-1.8l6.3-2.8l8.1-6.2l4.7-4.1l6.2-2.3l4-0.1l0.6-2.9l4.6-2.5l7-4.5l4.2-2.9l2.1-2.6l0.5-2.6 l-5.6,2.5L1868.6,832.8L1868.6,832.8z M1897.4,802.3l1.9-5.7l-3.1-1.7l-0.8-3.6l-2.3,0.5l-0.4,4.6l0.8,5.7l0.9,2.7l-0.9,1.1 l-0.6,4.4l-2.4,4.1l-4.2,5l-5.3,2.2l-1.7,2.4l3.7,2.5l-0.8,3.5l-6.9,5.1l1.4,0.9l-0.4,1.6l5.9-2.5l5.9-4.2l4.5-3.4l1.6-1.2l1.5-2.7 l2.8-2l3.8,0.2l4.2-3.8l5.1-5.7l-2.1-0.8l-4.6,2.5l-3.2-0.5l-2.9-2.1l2.3-4.9l-1.2-1.8l-2.9,4.4L1897.4,802.3L1897.4,802.3z" id="map-map-country-NZ" data-id="NZ" class="svgMap-country" fill="#4B5563"></path><path d="M514.1,476.8l-1.9-0.2l-0.9,0.9l-2,0.8h-1.4l-1.3,0.8l-1.1-0.3l-0.9-0.9l-0.6,0.2l-0.8,1.5l-0.5-0.1l-0.3,1.3 l-2.1,1.8l-1.1,0.7l-0.6,0.8l-1.5-1.3l-1.4,1.7h-1.2l-1.3,0.2l-0.2,3.1h-0.8l-0.8,1.5l-1.8,0.3l-0.4,0.4l-0.9-1l-0.7,1l2.6,2.9 l2.2,2l1,2.1l2.5,2.6l1.8,2l0.9-0.8l3.5,1.7l1.4-0.8l1.7,0.5l0.8,1.3l1.7,0.4l1.4-1.3l-0.8-1.1l-0.1-1.7l1.2-1.6l-0.2-1.7l0.7-2.7 l0.9-0.7l0.1-2.8l-0.2-1.7l0.4-2.8l0.9-2.5l1.4-2.2l-0.3-2.3l0.4-1.4L514.1,476.8L514.1,476.8z" id="map-map-country-NI" data-id="NI" class="svgMap-country" fill="#4B5563"></path><path d="M1051.3,425.6l-8.8-2.8l-18.6,12.2l-15.8,12.5l-7.8,2.8l0.1,14.6l-3,4.3l-0.5,3.9l-4.9,1l-7.6,0.6l-2,2.2l-3.6,0.3 l-0.5,3.1l0.8,2.9l3.1,4.1l0.2,3.1l6.4,1.4l-0.1,4.4l1.9-1.9h2l4.3,3.7l0.3-5.7l1.6-2.6l0.8-3.6l1.4-1.4l6-0.8l5.6,2.4l2.1,2.4 l2.9,0.1l2.6-1.5l6.8,3.3l2.8-0.2l3.3-2.7l3.3,0.2l1.6-0.9l3,0.4l4.3,1.8l4.3-3.5l1.3,0.2l3.9,7l1-0.2l0.2-2l1.6-0.4l0.5-2.9 l-3.6-0.2v-4.1l-2.4-2.3l2.3-8.4l6.9-6l0.2-8.3l1.8-12.9l1.1-2.7l-2.3-2.2l-0.2-2.1l-2-1.6l-1.6-9.9l-3.9,2.4L1051.3,425.6 L1051.3,425.6z" id="map-map-country-NE" data-id="NE" class="svgMap-country" fill="#4B5563"></path><path d="M1055.8,492.7l-1,0.2l-3.9-7l-1.3-0.2l-4.3,3.5l-4.3-1.8l-3-0.4l-1.6,0.9l-3.3-0.2l-3.3,2.7l-2.8,0.2l-6.8-3.3 l-2.6,1.5l-2.9-0.1l-2.1-2.4l-5.6-2.4l-6,0.8l-1.4,1.4l-0.8,3.6l-1.6,2.6l-0.3,5.7l-0.2,2.1l1.2,3.8l-1.1,2.5l0.6,1.7l-2.7,4 L993,514l-1,4l0.1,4.1l-0.3,10.2h4.9h4.3l3.9,4.2l1.9,4.6l3,3.9l4.5,0.2l2.2-1.4l2.1,0.3l5.8-2.3l1.4-4.5l2.7-6.1l1.6-0.1l3.3-3.7 l2.1-0.1l3.2,2.6l3.9-2.2l0.5-2.6l1.2-2.6l0.8-3.2l3-2.6l1.1-4.5l1.2-1.4l0.7-3.3l1.5-4l4.6-5l0.3-2.1l0.6-1.1L1055.8,492.7 L1055.8,492.7z" id="map-map-country-NG" data-id="NG" class="svgMap-country" fill="#4B5563"></path><path d="M1644.7,302.3L1644.7,302.3l-5.5-3.6l0.1,3.5l-6.3,2.6l2.7,3.3l-4.6-0.2l-3.6-2l-1,4.4l-3.8,3.4l-2.1,4l3.3,1.7 l3.4,0.7l0.8,1l0.4,3.5l1.1,1.2l-0.9,0.7l-0.1,2.9l1.9,1l1.6,0.6l0.8,1.2l1.3-0.5v-1.3l3.1,1.3l0.1-0.6l2.4,0.2l0.7-2.9l3.5-0.3 l2.1-0.4l-0.1-1.6l-4.3-2.8l-2.6-1l0.2-0.7l-1.2-2.8l1.3-1.7l2.9-1l1-1.9l0.3-1.1l1.9-1.4l-2.8-4.5l0.3-2.1l0.9-2l2.2,0.3l0,0l0,0 l0,0L1644.7,302.3L1644.7,302.3z" id="map-map-country-KP" data-id="KP" class="svgMap-country" fill="#4B5563"></path><path d="M1088.8,133.1l-6.9,1.1l-7.3-0.3l-5.1,4.4l-6.7-0.3l-8.5,2.3l-10.1,6.8l-6.4,4l-8.8,10.7l-7.1,7.8l-8.1,5.8 l-11.2,4.8l-3.9,3.6l1.9,13.4l1.9,6.3l6.4,3l6-1.4l8.5-6.8l3.3,3.6l1.7-3.3l3.4-4l0.9-6.9l-3.1-2.9l-1-7.6l2.3-5.3l4.3,0.1l1.3-2.2 l-1.8-1.9l5.7-7.9l3.4-6.1l2.2-3.9l4,0.1l0.6-3.1l7.9,0.9v-3.5l2.5-0.3l2.1-1.4l5.1,2.9l5.3-0.3l4.7,1.3l3.4-2.4l1.1-3.9l5.8-1.8 l5.7,2.1l-0.8,3.8l3.2-0.5l6.4-2.2l0,0l-5.4-3.3l4.8-1.4L1088.8,133.1L1088.8,133.1z M1066.2,99.8l-5.6-1l-1.9-1.7l-7.2,0.9l2.6,1.5 l-2.2,1.2l6.7,1.1L1066.2,99.8z M1040.8,91.5l-4.8-1.6l-5.1,0.2l-1,1.5h-5l-2.2-1.5l-9.3,1.6l3.2,3.5l7.6,3.8l5.7,1.4l-3,1.7 l8.4,2.9l4.4-0.2l0.9-3.9l3-0.9l1.2-3.4l8.5-1.8C1053.3,94.8,1040.8,91.5,1040.8,91.5z M1065,88.4l-9.1-1l-3.2,1.2l-5.3-1l-10.4,1.2 l4.3,2h5.1l0.9,1.3l10.6,0.7l10.1-0.5l4.3-2.4C1072.3,89.9,1065,88.4,1065,88.4z" id="map-map-country-NO" data-id="NO" class="svgMap-country" fill="#4B5563"></path><path d="M1301,437.8l2.1-2l0.8-1.8l1.6-3.8l-0.1-1.4l-2.1-0.8l-1.6-2.1l-2.9-3.7l-3.3-1.1l-4.1-0.9l-3.3-2.3l-2.9-4.3h-2.8 l-0.1,4.2l1.1,0.8l-2.4,1.3l0.3,2.6l-1.4,2.6l0.1,2.6l2.9,4.5l-2.6,12.7l-16.1,6.4l5.2,10.5l2.1,4.4l2.5-0.3l3.6-2.2l3.1,0.6 l2.5-1.8l-0.2-2.5l2.1-1.6h3.4l1.2-1.3l0.2-3.1l3.3-2.4h2.6l0.4-0.8l-1-4.2l0.6-3.2l1-1.5l2.5,0.3L1301,437.8L1301,437.8z M1284.4,407.4l0.2-2.6l-0.7-0.6l-1.3,2.2l1.3,2.2L1284.4,407.4z" id="map-map-country-OM" data-id="OM" class="svgMap-country" fill="#4B5563"></path><path d="M1388.3,346.3l-9.4-2.6l-2.9-5l-4.7-3l-2.8,0.7l-2.4,1.2l-5.8,0.8l-5.3,1.3l-2.4,2.8l1.9,2.8l1.4,3.2l-2,2.7 l0.8,2.5l-0.9,2.3l-5.1-0.2l3,4.2l-3,1.6l-1.5,3.8l1.1,3.8l-1.7,1.8l-2.1-0.6l-4,0.9l-0.2,1.7h-4l-2.3,3.6l0.8,5.4l-6.6,2.6 l-3.8-0.5l-0.9,1.4l-3.3-0.8l-5.3,0.9l-9.6-3.2l3.2,3.3l2.8,3.9l5.6,2.7l1,5.7l2.7,1l0.9,2.9l-7.4,3.3l-1.2,7.4l7.6-0.9l8.9-0.1 l9.9-1.2l4.9,4.8l2.1,4.6l4.2,1.6l3.2-4.2h12l-1.8-5.5l-3.5-3.2l-1.3-4.9l-4-2.9l4.9-6.6l6.4,0.5l4.5-6.7l2.1-6.5l3.9-6.3l-1-4.5 l3.7-3.7l-5-3.1l-2.9-4.3l-3.2-5.6l1.9-2.8l8.5,1.6l5.7-1L1388.3,346.3L1388.3,346.3z" id="map-map-country-PK" data-id="PK" class="svgMap-country" fill="#4B5563"></path><path d="M1166.9,366.1l-2-0.9l-0.7,4.3l1.4,0.7l-1.2,0.8l-0.1,1.7l2.4-0.8l0.6-1.9L1166.9,366.1L1166.9,366.1z" id="map-map-country-PS" data-id="PS" class="svgMap-country" fill="#4B5563"></path><path d="M543.5,517l-2-1.8l-1.7-1.9l-2.5-1.1l-3.1-0.2l0.3-0.6l-3.1-0.4l-2,1.9l-3.5,1.3l-2.5,1.6l-2.7,0.5l-1.5-1.6 l-0.5,0.5l-2.3-0.3l0.2-1.3l-1.9-2.3l-2.2,0.6l-0.1,2.5l1.1,1l-0.8,0.7l0.1,1.2l-0.5,1.3l-0.4,1.2l0.6,1l0.3-1.4h2.4l1.4,0.7 l2.3,0.5l1,2.5l1.8,0.4l0.8-1.1l0.8,3.8l2.6-0.3l0.9-0.9l1.5-0.9l-2.5-3.4l0.6-1.3l1.3-0.3l2.3-1.6l1.2-2.2l2.5-0.4l2.7,1.8l1,2.1 l1.4,0.4l-1.5,1.7l1,3.5l1.8,1.8l0.9-3.1l1.8,0.5l1.1-1.9l-1.1-3.8L543.5,517z" id="map-map-country-PA" data-id="PA" class="svgMap-country" fill="#4B5563"></path><path d="M1850.7,615.6l0.9-1.8l-2.4-2.2l-2.5-4l-1.6-1.5l-0.5-1.9l-0.8,0.7l0.9,4.8l2.2,4l2.2,2.5L1850.7,615.6 L1850.7,615.6z M1829.5,607l2.1-3.9l0.4-3.5l-1.1-1l-3.4,0.1l0.4,3.7l-3.3,2.3l-1.7,2.2l-3.2,0.5l-0.4-3.4l-0.8,0.1l-1,3.1l-3.1,0.5 l-5-0.9l-0.6,1.9l3.1,1.8l4.5,1.9h2.9l3-1.5l3.2-1.6l1-1.8L1829.5,607L1829.5,607z M1801.7,619.2l-0.9-4.3l5.2-0.7l-1.1-3.3l-9.1-4 l-0.6-3.7l-2.9-3.2l-3.7-3.3l-10.2-3.6l-9.6-4.4l-1,20.7l-1.5,20.8l5.7,0.2l3.1,1.1l4.6-2.2l-0.3-4.7l3.6-2.1l4.9-1.8l7,2.8l2.4,5.6 l2.9,3.5l3.9,4l5.5,1l4.8,0.7l1.1,1.6l3.8-0.4l0.8-1.8l-5.6-2.7l1.8-1.2l-4.2-1.1l0.5-2.8l-3.2,0.2l-3-6.8L1801.7,619.2 L1801.7,619.2z M1836.4,600.8l-0.5-3.3l-2-2.1l-2.1-2.6l-2.3-1.5l-1.9-1.4l-2.9-1.8l-1.6,1.5l3.9,1.9l3.1,2.7l2.4,2.1l1.2,2.4 l0.8,3.8L1836.4,600.8L1836.4,600.8z" id="map-map-country-PG" data-id="PG" class="svgMap-country" fill="#4B5563"></path><path d="M655.7,700.5l-0.3-1.9l-5.4-3.3l-5.1-0.1l-9.5,1.9l-2.1,5.6l0.2,3.4l-1.5,7.6l11.2,10.4l4.6,1l7.2,4.7l5.9,2.5 l1.1,2.8l-4.2,9.6l5.7,1.8l6.2,1l4.2-1.1l4.3-4.8l0.3-5.7l0.7-3.6l0.3-3.8l-0.3-3.5l-2.1-1.2l-2,1.1l-2-0.3l-0.9-2.5l-1-5.8 l-1.2-1.9l-3.9-1.7l-2.1,1.2l-6-1.2l-0.4-8.6L655.7,700.5L655.7,700.5z" id="map-map-country-PY" data-id="PY" class="svgMap-country" fill="#4B5563"></path><path d="M584.3,599.5l-2.9-3.4l-1.7-0.1l3.5-6.5l-4.4-3l-3.3,0.6l-2.1-1.1l-3,1.7l-4.2-0.8l-3.4-6.7l-2.7-1.7l-1.8-3l-3.7-3 l-1.5,0.6l0.8,4.9l-1.7,4.1l-6,6.7l-6.7,2.5l-3.3,5.5l-0.9,4.3l-3.1,2.6l-2.5-3.2l-2.3-0.7l-2.3,0.5l-0.2-2.3l1.5-1.5l-0.7-2.7 l-4.4,4l-1.6,4.5l3,6.1l-1.7,2.8l4.1,2.6l4.5,4.1l2,4.7l2.4,2.9l6,12.7l6.2,11.7l5.4,8.4l-0.8,1.8l2.8,5.3l4.6,3.9l10.7,6.9 l11.6,6.4l0.7,2.6l5.9,3.7l2.7-1.6l1.2-3.3l2.8-6.9l-2.8-5.3l1.1-2.1l-1.2-2.4l1.9-3.2l-0.3-5.4l-0.1-4.5l1.1-2.1l-5.5-10.3l-3,1.1 l-2.6-0.7l-0.2-9.7l-4.4,3.8l-4.9-0.2l-2.3-3.4l-3.7-0.3l1-2.8l-3.3-3.8L562,620l1.5-1.1l-0.1-2.7l3.3-1.9l-0.7-3.4l1.3-2.2l0.4-3 l6.2-4.3l4.6-1.2l0.7-1L584.3,599.5L584.3,599.5z" id="map-map-country-PE" data-id="PE" class="svgMap-country" fill="#4B5563"></path><path d="M1684.6,518.6l-0.6-2.3l-0.8-3.2l-4.8-3l0.8,4.9l-3.9,0.2l-0.7,2.8l-4.2,1.7l-2.2-2.8l-2.8,2.4l-3.4,1.7l-1.9,5.4 l1.1,1.9l3.9-3.6l2.7,0.3l1.5-2.7l3.8,3l-1.5,3.1l1.9,4.6l6.8,3.7l1.4-3l-2.1-4.7l2.4-3.2l2.5,6.4l1.5-5.8l-0.6-3.5L1684.6,518.6 L1684.6,518.6z M1670.1,506.8v-6.1l-3.6,6.1l0.5-4.2l-3,0.3l-0.3,4l-1.2,1.8l-1,1.7l3.8,4.4l1.6-1.9l1.4-4L1670.1,506.8 L1670.1,506.8z M1640,512.9l2.6-4.4l3.4-3.5l-1.5-5.2l-2.4,6.3l-2.9,4.4l-3.8,4l-2.4,4.4L1640,512.9L1640,512.9z M1657.4,496.5 l1.2,3l-0.1,3.3l0.5,2.9l3.3-1.9l2.4-2.7l-0.2-2.6h-3.6L1657.4,496.5L1657.4,496.5z M1677.4,494.8l-1.8-2.4l-5.4-0.1l4,4.8l0.3,2.4 l-3.3-0.5l1.2,3.9l1.7,0.3l0.7,4.5l2.5-1.4l-1.7-4l-0.4-2.1l4.5,1.7L1677.4,494.8L1677.4,494.8z M1654.5,489l-2.2-2.3l-4.8-0.2 l3.4,4.8l2.8,3.2L1654.5,489L1654.5,489z M1648.1,454.4h-3.3l-0.9,5.8l1.1,9.9l-2.6-2l1.2,6l1.2,2.8l3.3,3.7l0.4-2.3l1.8,1.4 l-1.5,1.7l0.1,2.6l2.9,1.4l5-0.9l4,3.8l1.1-2.4l2.5,3.4l4.8,3.1l0.2-2.9l-2-1.6l0.1-3.4l-7.5-3.6l-2.3,0.8l-3.1-0.7l-2-5.1l0.1-5.1 l3-2.1l0.6-5.3l-2.7-4.6l0.4-2.6l-0.7-1.6l-1.5,1.6L1648.1,454.4L1648.1,454.4z" id="map-map-country-PH" data-id="PH" class="svgMap-country" fill="#4B5563"></path><path d="M274.2,727.4v-0.2l-0.1-0.2l-0.2-0.1l-0.1,0.1l0.1,0.2l0.2,0.2H274.2L274.2,727.4z" id="map-map-country-PN" data-id="PN" class="svgMap-country" fill="#4B5563"></path><path d="M1069.4,228.3l-4.6-0.1l-0.5-1.4l-4.8-1.1l-5.7,2.1l-7.1,2.8l-3.1,1.7l1.4,3.1l-1.2,1.6l2,2.2l1.4,3.3l-0.1,2.1 l2.3,3.9l2.4,1.9l3.7,0.6l-0.1,1.7l2.7,1.2l0.6-1.5l3.4,0.6l0.7,2l3.6,0.3l2.6,3.1l0.3,0.4l1.9-0.9l2.7,2.2l2.8-1.3l2.4,0.6l3.4-0.8 l4.9,2.3l1.1,0.4l-1.6-2.8l3.8-5.1l2.3-0.7l0.3-1.8l-3.1-5.3l-0.5-2.7l-1.9-2.9l2.7-1.2l-0.3-2.4l-1.7-2.3l-0.6-2.7l-1.4-1.9 l-2.5-0.6l-8.7,0.1L1069.4,228.3L1069.4,228.3z" id="map-map-country-PL" data-id="PL" class="svgMap-country" fill="#4B5563"></path><path d="M937.6,335.9l-0.4-2.1l2-2.5l0.8-1.7l-1.8-1.9l1.6-4.3l-2-3.8l2.2-0.5l0.3-3l0.9-0.9l0.2-4.9l2.4-1.7l-1.3-3.1 l-3-0.2l-0.9,0.8h-3l-1.2-3.1l-2.1,0.9l-1.9,1.6l0.1,2.1l0.9,2.2l0.1,2.7l-1.3,3.8l-0.4,2.5l-2.2,2.3l-0.6,4.2l1.2,2.4l2.3,0.6 l0.4,4l-1,5.1l2.8-0.7l2.7,0.9L937.6,335.9L937.6,335.9z" id="map-map-country-PT" data-id="PT" class="svgMap-country" fill="#4B5563"></path><path d="M600.8,457.3v-0.1l0,0h0.1v-0.1l0.1-0.1l0,0v-0.1h-0.1l0,0h-0.3h-0.1v0.1v0.1l0.2,0.1l0,0L600.8,457.3L600.8,457.3 L600.8,457.3z M614.4,457l0.7-0.2v-0.1l-0.4-0.1h-0.6l-0.5,0.2l0.1,0.2h0.2H614.4z M610.7,454.8l-0.1-0.2h-0.2l-3.5-0.1l-1.3-0.2 l-0.3,0.1l-0.3,0.1l-0.1,0.4l-0.2,0.2l-0.3,0.2l0.1,0.3l0.1,0.2l0.2,0.4l-0.1,0.5l-0.2,1l0.3,0.2l0.7-0.1l0.3,0.1l0.3,0.1l0.4-0.1 l0.4-0.2l0.9,0.1l0.5-0.1l0.6,0.3l0.4-0.1l0.2,0.1h0.3h0.6l0.9-0.2l0.8-0.5l0.3-0.5l0.4-0.3l0.6-0.4v-0.9l-0.7-0.1l-0.6-0.3 l-1.1-0.1h-0.1l0.1,0.2h-0.1L610.7,454.8L610.7,454.8z" id="map-map-country-PR" data-id="PR" class="svgMap-country" fill="#4B5563"></path><path d="M1258,415.5l0.8-3.8l-0.5-3.7l-1.9-2l-1.4,0.7l-1.1,3.3l0.8,4.7l1.8,1.2L1258,415.5L1258,415.5z" id="map-map-country-QA" data-id="QA" class="svgMap-country" fill="#4B5563"></path><path d="M1284,707.9l0.2-0.4l0.1-0.8l-0.4-0.8l-0.4-0.7l-0.4-0.2l-0.8-0.1l-0.7,0.3l-0.4,0.6l-0.2,0.3l0.4,1.1l0.2,0.3 l1.1,0.6h0.5L1284,707.9L1284,707.9z" id="map-map-country-RE" data-id="RE" class="svgMap-country" fill="#4B5563"></path><path d="M1108.1,266.3h-2.1l-1,1.5l-3.6,0.6l-1.6,0.9l-2.4-1.5h-3.2l-3.2-0.7l-1.9,1.3l-2.9,1.3l-1.9,4.2l-2.6,4.3l-3.8,1.1 l2.9,2.5l0.8,1.9l3.2,1.5l0.7,2.5l3.1,1.8l1.4-1.3l1.4,0.7l-1.1,1.1l1,1l1.8,2.6l1.9-0.5l4,1l7.5,0.3l2.3-1.6l5.8-1.4l4,2.2l3,0.7 l0.4-7.4l1.6,0.5l2.3-1.3l-0.4-1.6l-2.4-1.1l-2.2,1l-2.4-1.1l-1.3-2.8l0.2-2.7l-0.6-2.7l-3.4-3.7l-1.9-2.6l-1.8-1.9L1108.1,266.3 L1108.1,266.3z" id="map-map-country-RO" data-id="RO" class="svgMap-country" fill="#4B5563"></path><path d="M1332.3,95.1l-4.5-4l-13.6-4.1l-9.4-2.1l-6.2,0.9l-5.3,2.9l5.8,0.8l6.6,3.2l8,1.7l11.5,1.3 C1325.2,95.7,1332.3,95.1,1332.3,95.1z M1153.6,87.8l0.9-0.6l-5.7-0.9L1146,87l-1.3,1l-1.5-1.2l-5.2,0.1l-6.2,0.8l7.7,0.1l-1.1,1.3 l4.4,1l3.6-0.7l0.1-0.7l2.9-0.3C1149.4,88.4,1153.6,87.8,1153.6,87.8z M1354.1,97.7l-1.5-1.8l-12.5-2.6l-3-0.3l-2.2,0.5l1.2,6 C1336.1,99.5,1354.1,97.7,1354.1,97.7z M1369.3,104l-9.2-0.7l3.4-1.2l-8.2-1.5l-6.1,1.9l-1,2l1.5,2.1l-6.9-0.1l-5.3,2.6l-4.3-1.1 l-9.3,0.5l0.3,1.3l-9.2,0.7l-4.9,2.4l-4.2,0.2l-1.2,3.3l5.5,2.6l-7.7,0.7l-9.5-0.3l-5.8,1.1l4.8,5.4l6.9,4.3l-9.6-3l-7.9,0.3l-5.1,2 l4.5,3.8l-4.9-1l-2.1-5l-4.2-2.8l-1.8,0.1l3.6,3.7l-4.6,3.5l8.1,4.2l0.4,5.4l2.9,2.9l4.7,0.5l0.4,3.5l4.4,3.1l-1.9,2.6l0.5,2.7 l-3.7,1.4l-0.5,2l-5.3-0.8l3.5-7.8l-0.5-3.6l-6.7-3.3l-3.8-7.3l-3.7-3.7l-3.6-1.6l0.8-4.2l-2.9-2.9l-11.3-1.4l-2.1,1l0.5,4.7 l-4.3,4.7l1.2,1.7l4.7,4.1l0.1,2.6l5.3,0.5l0.8,1.1l5.8,2.9l-1,2.8l-18.5-6.1l-6.6-1.7l-12.8-1.6l-1.2,1.7l5.9,3.1l-2.7,3.6 l-6.4-3.2l-5,2.2l-7.6,0.1l-2.1,1.9l-5.3-0.6l2.5-3.3l-3.2-0.2l-12.3,4.6l-7.6,2.6l0.4,3.5l-6,1.2l-4-1.9l-1.2-3l5-0.7l-3.6-3 l-12.2-1.8l4.3,3.4l-0.8,3.2l4.7,3.3l-1.1,3.8l-4.6-1.9l-4-0.3l-8,5.4l4.2,4.1l-3.2,1.4l-11.4-3.5l-2.1,2.1l3.3,2.4l0.2,2.7 l-3.8-1.4l-6-1.7l-1.9-5.8l-1-2.6l-8-4l2.9-0.7l20.1,4.2l6.4-1.5l3.7-2.9l-1.6-3.6l-4-2.6l-17.6-6.1l-11.6-1.3l-7.6-3.2l-3.6,1.8 l0,0l-6.4,2.2l-3.2,0.5l0.4,3.7l7.2,3.7l-2.8,4.1l6.4,6.3l-1.7,4.8l4.9,4.1l-0.9,3.7l7.3,3.9l-0.9,2.9l-3.3,3.3l-7.9,7.4l0,0 l5.3,2.8l-4.5,3.2l0,0l0.9,1l-2.6,3.4l2.5,5.5l-1.6,1.9l2.4,1.4l1,2.8l2.1,3.6l5.2,1.5l1,1.4l2.3-0.7l4.8,1.4l1,2.9l-0.6,1.6 l3.7,3.9l2.2,1.1l-0.1,1.1l3.4,1.1l1.7,1.6l-1.6,1.3l-3.9-0.2l-0.8,0.6l1.5,2l2,3.9l0,0l1.8,0.2l1-1.4l1.5,0.3l4.8-0.5l3.8,3.4 l-0.9,1.3l0.7,1.9l4,0.2l2.2,2.7l0.2,1.2l6.6,2.2l3.5-1l3.6,2.9l2.9-0.1l7.6,2l0.4,1.9l-1.3,3.2l1.8,3.4l-0.3,2.1l-4.7,0.5l-2.2,1.7 l0.4,2.8l4.2-1l0.4,1.3l-6.8,2.6l3.2,2.4l-3.2,5.2l-3.4,1l5,3.6l6.2,2.4l7.4,5.1l0.5-0.7l4.5,1.1l7.7,1l7.5,2.9l1.1,1.2l2.9-1 l5.1,1.3l2.1,2.5l3.5,1.4l1.5,0.2l4.3,3.8l2.4,0.4l0.5-1.5l2.6-2.5l0,0l-7.3-7.3l-0.4-4.1l-5.9-5.9l3.5-6.3l4.6-1.1l1.4-3.7l-2.8-1 l-0.2-3.2l-4.2-4.1l-3.6,0.2l-5.3-4.3l1.7-4.7l-1.7-1.2l2.1-6.8l6,3.6l-0.7-4.6l8.1-6.6l7.5-0.2l11.9,4.3l6.6,2.4l4.3-2.5l7.6-0.2 l7.3,3.2l0.8-1.8l6.9,0.3l0.2-3l-9.4-4.2l3.6-2.9l-1.5-1.7l3.9-1.6l-5-4.1l1.4-2.1l16.8-2.1l1.7-1.5l10.8-2.2l3.1-2.5l9,1.3l4.3,6.3 l4.3-1.5l7,2.1l1.2,3.3l4.4-0.4l9.1-5.7l-0.8,1.9l8.3,4.7l18.1,15.5l1.1-3.3l8.3,3.6l6.2-1.6l3.2,1.1l4.1,3.6l3.9,1.2l3.3,2.6l6-0.9 l4.3,3.8l1.7-0.5l4.7-1l6.6-5.4l5.9-2.9l5.3,1.9l5.1,0.1l4.7,2.9l5,0.2l7.9,1.6l2.4-4.3l-4-3.6l1.3-6.4l6.9,2.5l4.8,0.8l6.6,1.5 l3.7,4.6l8.4,2.6l3.9-1.1l5.7-0.8l5.4,0.8l6.5,3l4.9,3.1h4.5l6.7,1l3.6-1.6l5.8-1l4.5-4.4l3.3,0.7l3.9,2.1l5.5-0.5l7.3,2.3l4.4-3.9 l-1.9-2.7l-0.1-6.5l1.2-2l-2.5-3.3l-3.7-1.5l1.7-3l5.1-1.1l6.2-0.2l8.5,1.8l5.9,2.3l7.7,6.1l3.8,2.7l4.4,3.7l6.1,6.1l9.9,1.9 l8.9,4.5l6,5.8h7.5l2.6-2.5l6.9-1.8l1.3,5.6l-0.4,2.3l2.8,6.8l0.6,6l-6.8-1.1l-2.9,2.2l4.7,5.3l3.8,7.3l-2.5,0.1l1.9,3.1l0,0 l1.4,1.1l0,0l0,0l0,0l-0.4-2l4-4.5l5.1,3l3.2-0.1l4.4-3.6l1-3.7l2.1-7.1l1.9-7.2l-1.3-4.3l1-9l-5.2-9.9l-5.5-7.3l-1.3-6.2l-4.7-5.1 l-12.7-6.7l-5.6-0.4l-0.3,3l-5.8-1.3l-5.7-3.8l-8-0.7l4.9-14.1l3.5-11.5l13.1-1.8l14.9,1l2.5-2.8l7.9,0.8l4.3,4.3l6.4-0.6l8.4-1.6 l-7.7-3.5v-9.8l9.1-1.9l12.1,7.1l3.6-6.4l-3.2-4.7l4.7-0.5l6.5,8.1l-2.4,4.6l-0.8,6l0.3,7.5l-5.7,1.3l2.8,2.7l-0.1,3.6l6.4,8.3 l16,13.4l10.5,8.8l5.7,4.3l1.6-5.7l-4.5-6.2l5.7-1.5l-5.4-6.9l5-3.1l-4.7-2.6l-3.4-5l4.1-0.2l-9-8.6l-6.7-1.4l-2.9-2.4l-1.1-5.6 l-3.1-3.9l7,0.8l1.3-2.5l4.7,2.2l6.1-4.6l11.4,4l-1.7-2.6l2-3.6l1.5-4l3.1-0.7l6.5-4.3l9.8,1.2l-0.9-1.5l-3.8-2.3l-4.1-1.6l-9.1-4.6 l-8.1-3l6.1,0.4l2-2.5l0,0l-32.9-21.9l-9.4-2.3l-15.7-2.6l-7.9,0.3l-15.2-1.4l1.8,2.3l8.5,3.4l-2.5,1.8l-14.2-4.8l-6.8,0.6l-9.2-1.1 l-7,0.2l-3.9,1.1l-7.2-1.6l-5.1-3.8l-6.5-2.2l-9.2-0.9l-14.7,1l-16.1-4l-7.8-3l-40.1-3.4l-2.1,2.2l9.3,4.8l-7.5-0.7l-1,1.5l-9.7-1.6 l-5,1.4l-9.3-2.4l3,5.5l-8.9-2.1l-10-4.1l-0.4-2.2l-6-3.3l-9.8-2.6h-6.1l-9.3-0.9l4.7,3.9l-17.2-0.8l-3.9-2.3l-13.3-0.9l-5.3,0.8 l-0.1,1.3l-5.8-3.2l-2.3,0.9l-7.2-1.2l-5.6-0.7l1.1-1.5l6.6-2.8l2.3-1.5l-2.4-2.5l-5.5-1.9l-11.5-2.3l-10.8-0.1l-1.9,1.2L1369.3,104 L1369.3,104z M1207.1,135.6l-9.9-4.3l-3.1-4.3l3.3-4.9l2.8-5l8.6-4.7l9.8-2.4l11.3-2.4l1.3-1.5l-4.2-1.9l-6.6,0.6l-4.9,1.8 l-11.7,0.9l-10.1,3.1l-6.8,2.7l2.5,2.2l-6.6,4.4l3.9,0.7l-5.4,4.3l1.6,2.8l-3.4,1.1l1.9,2.8l7.9,1.4l2.2,2.3l13.4,0.7L1207.1,135.6 L1207.1,135.6z M1521.1,110.9l-17.9-2.6l-10.2-0.2l-3.4,0.9l3.4,3.4l12.4,3.2l4.5-1.2l14.2,0.2 C1524.1,114.6,1521.1,110.9,1521.1,110.9z M1546.3,113.2l-11.7-1.3l-8.2-0.7l1.7,1.6l10.3,2l6.8,0.4L1546.3,113.2L1546.3,113.2z M1533.8,122.7l-2.5-1.4l-8.3-1.9l-4.1,0.5l-0.8,2l1.1,0.2l8.8,0.6C1528,122.7,1533.8,122.7,1533.8,122.7z M1696.4,135l-6-3.6 l-1.4,2.2l3.5,1.6L1696.4,135z M1084,228.9l-0.6-1.5l0.2-1.7l-2.2-0.9l-5-1.1l-6.3,2l-0.7,2.6l5.9,0.7L1084,228.9z M1673.7,250.7 l-7.2-6.2l-5.1-6l-6.8-5.8l-4.9-4l-1.3,0.8l4.4,2.8l-1.9,2.8l6.8,8.3l7.8,6l6.4,8.3l2.4,4.6l5.5,6.8l3.8,6l4.6,5.2l-0.1-4.8l6.5,3.8 l-3-4.4l-9.5-6.3l-3.7-9l8.9,2L1673.7,250.7L1673.7,250.7z" id="map-map-country-RU" data-id="RU" class="svgMap-country" fill="#a4cafe"></path><path d="M1147.6,579.4l-3.3,1.9l-1.4-0.6l-1.6,1.8l-0.2,3.8l-0.8,0.4l-0.6,3.5l3.5,0.5l1.7-3.6l3,0.4l0,0l1.6-0.8l0.4-3.7 L1147.6,579.4L1147.6,579.4z" id="map-map-country-RW" data-id="RW" class="svgMap-country" fill="#4B5563"></path><path d="M629.9,463.2v-0.3l-0.2-0.2h-0.3v0.5l0.2,0.2L629.9,463.2z M629.4,462.5l-0.1-0.2l-0.1-0.1l-0.2-0.4l-0.4-0.4 l-0.2,0.1l-0.1,0.2v0.1l0,0l0.3,0.3l0.4,0.1l0.2,0.4L629.4,462.5L629.4,462.5z" id="map-map-country-KN" data-id="KN" class="svgMap-country" fill="#4B5563"></path><path d="M637.4,484.2l0.1-1.2l-0.1-0.5l-0.2,0.1l-0.3,0.4l-0.4,0.6l-0.1,0.3v0.6l0.6,0.4L637.4,484.2L637.4,484.2z" id="map-map-country-LC" data-id="LC" class="svgMap-country" fill="#4B5563"></path><path d="M634.5,491.4L634.5,491.4v-0.1h0.1v-0.1l0,0v-0.1h-0.1v0.1l0,0v0.1h-0.1L634.5,491.4L634.5,491.4L634.5,491.4 L634.5,491.4z M635.2,489.5l0.1-0.2l0.1-0.1l0,0l0,0l-0.1-0.1l0,0v0.1l-0.2,0.1l0,0v0.1l0,0v0.1H635h-0.1l0,0h0.1l0,0l0.1,0.1l0,0 l0,0l0,0L635.2,489.5L635.2,489.5z M635.5,488.4l0.3-0.2l0.1-0.6l-0.1-0.4h-0.2l-0.3,0.1l-0.2,0.3l-0.1,0.5L635.5,488.4L635.5,488.4 L635.5,488.4z" id="map-map-country-VC" data-id="VC" class="svgMap-country" fill="#4B5563"></path><path d="M1040.3,293.5l-0.7,0.1l-0.2-0.9l0.9-0.3L1040.3,293.5z" id="map-map-country-SM" data-id="SM" class="svgMap-country" fill="#4B5563"></path><path d="M1014.1,571.4l0.5-0.8v-0.5l-0.3-0.5h-0.4l-0.5,0.4l-0.3,0.4v0.3l0.1,0.7l0.1,0.3l0.3,0.2L1014.1,571.4 L1014.1,571.4z M1018.4,562.2l0.2-0.4v-0.2l-0.1-0.1l-0.1-0.1l-0.2,0.1l-0.3,0.5l0.1,0.2l0.2,0.2L1018.4,562.2L1018.4,562.2z" id="map-map-country-ST" data-id="ST" class="svgMap-country" fill="#4B5563"></path><path d="M1228.7,387l-10.2-0.5l-16.7-12.7l-8.5-4.5l-6.7-1.7l-0.9,1l-10.4,3.1l6.1,6.4l-1.7,1l-0.7,2.2l-4,0.8l-1.1,2.3 l-2.1,2l-6.1-1l-0.5,2.5v2.2l-0.6,3.5h2.7l3.2,4.4l3.7,5.1l2.5,4.7l1.7,1.5l1.7,3.3l-0.2,1.4l2.1,3.7l3,1.3l2.8,2.5l3.6,7v3.8 l0.9,4.4l4,6.1l2.5,1l4.1,4.4l1.9,5.2l3.2,5.3l3,2.3l0.6,2.5l1.8,1.9l0.9,2.8l2.3-2.1l-0.7-2.7l1.2-3.1l2.4,1.7l1.5-0.6l6.4-0.2 l1,0.7l5.4,0.6l2.1-0.3l1.6,2.1l2.5-1l3.5-6.7l5-2.9l15.7-2.4l16.1-6.4l2.6-12.7l-2.9-4.5l-1,1.3l-16.8-3.2l-2.6-6.4l-0.4-1.5 l-1.2-2.4l-1.5,0.4l-1.8-1.2l-1-1.6l-0.9-2.1l-1.7-1.8l-1-2.1l0.4-2.1l-0.6-2.7l-4-2.6l-1.2-2.3l-2.9-1.4l-2.7-5.5l-3.8,0.2 l-1.7-3.1L1228.7,387L1228.7,387z" id="map-map-country-SA" data-id="SA" class="svgMap-country" fill="#4B5563"></path><path d="M908.9,479.2l-3.6-4.4l-3.2-4.7l-3.7-1.7l-2.6-1.8h-3.1l-2.8,1.4l-2.7-0.5l-2,2l-1.3,3.3l-2.8,4.4l-2.5,1.2l2.7,2.3 l2.2,5l6.1-0.2l1.3-1.5l1.8-0.1l2.1,1.5l1.8,0.1l1.8-1.1l1.1,1.8l-2.4,1.5l-2.4-0.1l-2.4-1.4l-2.1,1.5h-1l-1.4,0.9l-5-0.1l0.8,4.9 l3-1.1l1.8,0.2l1.5-0.7l10.3,0.3l2.7,0.1l4,1.5l1.3-0.1l0.4-0.7l3,0.5l0.8-0.4l0.3-2l-0.4-2.4l-2.1-1.8l-1.1-3.7L908.9,479.2 L908.9,479.2z" id="map-map-country-SN" data-id="SN" class="svgMap-country" fill="#4B5563"></path><path d="M1084.8,285.2l-3.2-1.5l-0.8-1.9l-2.9-2.5l-3.2-0.2l-3.7,1.6l0,0l1.5,2.4l1.7,1.8l-1.7,2.3l0,0h1.8l-1,2.7l2.7,2.3 l-0.5,2.9l-1.2,0.3l1.5,1.1l0.8,0.8l1.8,0.7l2,1.2l-0.4,0.6l1.2-0.5l0.5-2l0.9-0.4l0.8,0.9l1,0.4l0.8,1l0.8,0.3l1.1,1.1h0.8 l-0.5,1.5l-0.5,0.7l0.2,0.5l1.7-0.4l2.4-0.1l0.7-0.9l-0.6-0.7l0.7-2l1.7-1.9l-2.8-2.6l-0.7-2.3l1.1-1.4l-1-1l1.1-1.1l-1.4-0.7 l-1.4,1.3l-3.1-1.8L1084.8,285.2L1084.8,285.2z" id="map-map-country-RS" data-id="RS" class="svgMap-country" fill="#4B5563"></path><path d="M1288.5,602l-0.5-0.8l-0.4,0.3l0.2,0.3l0.3,0.2l0.1,0.4l0.3,0.2V602L1288.5,602z" id="map-map-country-SC" data-id="SC" class="svgMap-country" fill="#4B5563"></path><path d="M919.4,518.7l-1.5,0.3v-2.3L917,515l0.2-1.8l-1.2-2.7l-1.5-2.3H910l-1.3,1.2l-1.5,0.2l-1,1.4l-0.7,1.7l-3,2.8 l0.7,4.7l0.9,2.3l2.9,3.5l4.1,2.5l1.5,0.5l1.3-2l0.3-1.9l2.6-3.4L919.4,518.7L919.4,518.7z" id="map-map-country-SL" data-id="SL" class="svgMap-country" fill="#4B5563"></path><path d="M1561,563.7l0.1-0.2l-0.2-0.2l-0.3-0.1l-0.5-0.2l-0.6,0.1l-0.3,0.6l0.9,0.4L1561,563.7L1561,563.7z" id="map-map-country-SG" data-id="SG" class="svgMap-country" fill="#4B5563"></path><path d="M627.1,457.2L627.1,457.2l0.2,0.2l0.3,0.1l0.1-0.1v-0.2H627.1z" id="map-map-country-SX" data-id="SX" class="svgMap-country" fill="#4B5563"></path><path d="M1087.4,260.9l-4.9-2.3l-3.4,0.8l-2.4-0.6l-2.8,1.3l-2.7-2.2l-1.9,0.9l-0.3-0.4h-1.5l-0.6,1.1l-1.1,0.3l-0.2,1.4 l-0.9,0.3l-0.1,0.6l-1.6,0.6l-2.2-0.1l-0.6,1.4l-0.3,0.8l0.7,2.1l2.6,1.6l1.9,0.7l4.1-0.8l0.3-1.2l1.9-0.2l2.3-1l0.6,0.4l2.2-0.7 l1-1.5l1.6-0.4l5.5,1.9l1-0.6l0.7-2.5L1087.4,260.9L1087.4,260.9z" id="map-map-country-SK" data-id="SK" class="svgMap-country" fill="#4B5563"></path><path d="M1059.4,277l-1.2-2.1l-0.8-0.1l-0.9,1.1l-4.3,0.1l-2.4,1.4l-4.2-0.4l-0.3,3l1.4,2.7l-1.1,0.5l3.5,0.2l0.8-1l1.8,1 l2,0.1l-0.2-1.7l1.7-0.6l0.3-2.5L1059.4,277L1059.4,277z" id="map-map-country-SI" data-id="SI" class="svgMap-country" fill="#4B5563"></path><path d="M1909.1,646.4l-0.2-0.2l-0.1-0.4h-0.3l-0.3,0.1l0.2,0.6h0.2L1909.1,646.4L1909.1,646.4z M1873.5,647.2l-0.1-0.2 l-0.5-0.4l-1.9-1.3l-0.4-0.1l-0.1,0.1l-0.1,0.3l0.1,0.2l0.5,0.1v0.1l0.3,0.2l0.7,0.2l0.4,0.3l0.1,0.5l0.3,0.1l0.3,0.1L1873.5,647.2 L1873.5,647.2z M1905.5,640.6L1905.5,640.6l0.2-0.4l-0.2-0.1l-0.5-0.1l-0.7,0.1l-0.3,0.2l-0.2,0.3h-0.2v0.2l0.1,0.4l0.2-0.1l0.2,0.1 l0.5-0.5h0.3h0.1L1905.5,640.6L1905.5,640.6z M1881.1,638.3l-0.1-0.2l-0.2-0.1l-0.9-0.7l-0.5-0.2h-0.5l-0.1,0.5v0.3h0.6l0.4,0.2v0.6 l0.2,0.2v0.5l1.2,0.9l0.7,0.4l0.7,0.1l0.4,0.2l0.5-0.1l0.5,0.2l0.4-0.1l-0.4-0.3v-0.4l-0.5-1.3l-0.3-0.3l-0.5,0.1l-0.5-0.2h-0.4 L1881.1,638.3L1881.1,638.3z M1880.7,633.4l-0.6-1.6l-0.2-0.1l0.1,0.6l0.1,0.4l-0.1,0.5l-0.1,0.6l0.2,0.2l0.2-0.2l0.4,0.5v-0.2 V633.4z M1870.9,631.2l-0.3-0.1l-0.4,0.3l-0.1,0.3l-0.1,0.7v0.4l0.3,0.7l0.3,0.5l0.3,0.3l0.2,0.2l0.9,0.1l1.7,0.1l0.9,0.4l0.9,0.2 l0.4-0.1l0.5-0.2l0.1-0.1l-0.1-0.6l-0.2-0.3l-0.4-0.2l-0.2-0.6l-0.5-0.4l-0.9-0.7h-1.6l-0.6,0.1L1870.9,631.2L1870.9,631.2z M1873.5,629.4l-0.5,0.2v0.3l0.4,0.1l0.4,0.2l0.1,0.3l0,0l0.2-0.1l0.4,0.2l0.2-0.3l-0.4-0.5l-0.4-0.3h-0.1L1873.5,629.4 L1873.5,629.4z M1867.9,630.2l0.3-0.2v-0.4h-0.3l-0.1-0.2h-0.2l-0.3,0.2l-0.2,0.3l0.1,0.2h0.4L1867.9,630.2L1867.9,630.2 L1867.9,630.2z M1859.5,627.9l-0.1-0.2l-0.3-0.2h-0.2l-0.5,0.1l0.1,0.1l0.6,0.3l0.3,0.1L1859.5,627.9L1859.5,627.9z M1862.6,628.3 l0.3-0.2l-0.1-0.2l-0.1-0.5l-0.4,0.7l0.1,0.2H1862.6z M1862.1,627.4v-0.2V627l-0.2-0.1l0.4-0.3l-0.1-0.1l-0.6-0.2l-0.2,0.2l-0.2,0.1 l-0.1,0.1l-0.1,0.1l-0.1,0.5l0.2,0.4l0.4,0.2L1862.1,627.4L1862.1,627.4z M1858.1,627.6l-0.3-0.4l0.1-0.5l0.2-0.1l0.2-0.5l-0.1-0.4 l-0.2,0.1l-0.7,0.6l-0.1,0.3l0.6,0.8L1858.1,627.6L1858.1,627.6L1858.1,627.6z M1871.1,626.3l-0.2-0.4v-0.2l-0.3-0.2l-0.2,0.1 l-0.1,0.3l0.1,0.2l0.4,0.3L1871.1,626.3L1871.1,626.3z M1877.1,625.1h-0.2l-0.1,0.1h-0.2h-0.3l-0.1,0.2l0.6,1.1l-0.3,0.5l0.4,2.2 l0.4,1.2l0.8,0.8v0.2l0.8,0.5l0.6,1.3l0.2,0.1l0.1-0.2v-0.6l-0.5-1.1l0.1-0.8l-0.2-0.3V630l-0.2-0.8l-0.6-0.7l-0.3-0.1l-0.2-0.3 l0.2-0.6l0.2-0.2l0.1-0.3L1877.1,625.1L1877.1,625.1z M1860.5,624.6l-0.6-0.2l-0.2-0.3v-1l-0.6-0.3l-0.3,0.2l-0.6,0.7l-0.2,0.4 l-0.5,0.3l-0.1,0.3v0.4l0.4,0.1l0.3-0.4l0.9-0.1l0.3,0.1v0.4l0.1,0.7l0.3,0.3l0.5,0.2l0.4,0.6l0.1-0.3h0.2l0.2-0.4l-0.3-1.2 L1860.5,624.6L1860.5,624.6z M1854,624.2l0.1-0.5l-0.1-0.9l-0.2,0.1v0.2l-0.1,0.4L1854,624.2L1854,624.2z M1857.2,623.8l0.2-0.2 v-0.4v-0.5l-0.2-0.4l-0.2-0.2l-0.5,0.1l-0.4,0.5v0.5l0.4,0.6L1857.2,623.8L1857.2,623.8L1857.2,623.8z M1854.6,622.6l0.2-0.3 l0.5-0.7l0.1-0.3l-0.5-0.2l-0.4-0.5l-0.4-0.2l-0.3,0.4v0.4l0.5,0.6l-0.1,0.4l0.2,0.1l0.1,0.4L1854.6,622.6L1854.6,622.6z M1872.1,626.5l-0.1-0.5l-0.3-0.4l0.4-0.5l-2.2-1.9l-0.3-0.2l-0.4-0.1l-0.5-0.4l-0.5-0.1l-0.5-0.4l-0.2-0.3l-0.6-0.4l-0.6-0.8 l-1.5-0.3l0.1,0.2l0.4,0.4l0.1,0.7l0.5,0.4l0.5,0.6l0.2,0.1l0.2,0.2l0.4,0.5l0.8,0.4l0.8,0.6l0.3,0.1l0.3,0.3l1.5,0.7l0.5,0.7 L1872.1,626.5L1872.1,626.5L1872.1,626.5z M1850.3,617.3l0.2-0.3l-0.7-0.5l-0.2,0.3l-0.2,0.5l0.4,0.2L1850.3,617.3L1850.3,617.3z M1859.4,618.8L1859.4,618.8l-0.4-0.1l-0.4-0.2l-0.7-0.8l-0.2-0.3l-0.2-1l-0.4-0.4l-1.4-0.8l-0.8-0.8l-0.7-0.2l-0.2,0.2v0.5l0.2,0.3 l1,0.9l1.1,1.7l1,1l0.8,0.1h0.4v0.1l0.1,0.2l0.5,0.2l0.5-0.4L1859.4,618.8L1859.4,618.8z" id="map-map-country-SB" data-id="SB" class="svgMap-country" fill="#4B5563"></path><path d="M1223.4,505.7l-2.6-2.7l-1.2-2.6l-1.8-1.2l-2,3.4l-1.1,2.3l2.2,3.5l2.1,3.1l2.2,2.2l18.5,7.6l4.8-0.1l-15.4,19.1 l-7.4,0.3l-4.9,4.5l-3.6,0.1l-1.5,2l-4.8,7.2l0.2,23.2l3.3,5.3l1.3-1.5l1.3-3.4l6.1-7.7l5.3-4.8l8.3-6.4l5.6-5.1l6.4-8.7l4.7-7.1 l4.6-9.3l3.2-8.2l2.5-7.1l1.3-6.8l1.1-2.3l-0.2-3.4l0.4-3.7l-0.2-1.7h-2.1l-2.6,2.2l-2.9,0.6l-2.5,0.9l-1.8,0.2l0,0l-3.2,0.2 l-1.9,1.1l-2.8,0.5l-4.8,1.9l-6.1,0.8l-5.2,1.6L1223.4,505.7L1223.4,505.7z" id="map-map-country-SO" data-id="SO" class="svgMap-country" fill="#4B5563"></path><path d="M1148.2,713.7l-2.9-0.6l-1.9,0.8l-2.6-1.1l-2.2-0.1l-8,4.7l-5.2,4.7l-2,4.3l-1.7,2.4l-3,0.5l-1.2,3l-0.6,2l-3.6,1.5 l-4.4-0.3l-2.5-1.8l-2.3-0.8l-2.7,1.5l-1.5,3.1l-2.7,1.9l-2.8,2.8l-4,0.7l-1.1-2.3l0.7-3.8l-3-6.1l-1.4-1l-1.1,23.6l-5,3.2l-2.9,0.5 l-3.3-1.2l-2.4-0.5l-0.8-2.7l-2.1-1.8l-2.7,3.2l3.5,8.2v0.1l2.5,5.3l3.2,6l-0.2,4.8l-1.7,1.2l1.4,4.2l-0.2,3.8l0.6,1.7l0.3-0.9 l2.1,2.9l1.8,0.1l2.1,2.3l2.4-0.2l3.5-2.4l4.6-1l5.6-2.5l2.2,0.3l3.3-0.8l5.7,1.2l2.7-1.2l3.2,1l0.8-1.8l2.7-0.3l5.8-2.5l4.3-2.9 l4.1-3.8l6.7-6.5l3.4-4.6l1.8-3.2l2.5-3.3l1.2-0.9l3.9-3.2l1.6-2.9l1.1-5.2l1.7-4.7h-4.1l-1.3,2.8l-3.3,0.7l-3-3.5l0.1-2.2l1.6-2.4 l0.7-1.8l1.6-0.5l2.7,1.2l-0.4-2.3l1.4-7.1l-1.1-4.5L1148.2,713.7L1148.2,713.7z M1128.1,766.5l-2,0.6l-3.7-4.9l3.2-4l3.1-2.5 l2.6-1.3l2.3,2l1.7,1.9l-1.9,3.1l-1.1,2.1l-3.1,1L1128.1,766.5L1128.1,766.5z" id="map-map-country-ZA" data-id="ZA" class="svgMap-country" fill="#4B5563"></path><path d="M1637.3,331.7l6.2,5.5l-3.4,1.1l5.2,6.8l1.1,4.8l2.1,3.5l4.5-0.5l3.2-2.7l4.2-1.2l0.5-3.6l-3.4-7.5l-3.3-4.2 l-8.2-7.6l0.1,1.6l-2.1,0.4l-3.5,0.3l-0.7,2.9l-2.4-0.2L1637.3,331.7L1637.3,331.7z" id="map-map-country-KR" data-id="KR" class="svgMap-country" fill="#4B5563"></path><path d="M1166,508.7l-0.7-2.2l-2.9-2.5l-0.8-4.6l0.5-4.7l-2.6-0.5l-0.3,1.5l-3.4,0.3l1.4,1.8l0.6,3.9l-3,3.5l-2.7,4.5 l-2.8,0.7l-4.8-3.7l-2.1,1.3l-0.5,1.9l-2.9,1.2l-0.2,1.3h-5.5l-0.8-1.3l-4.1-0.3l-2,1.1l-1.5-0.5l-3-3.7l-1-1.8l-4,0.9l-1.5,2.9 l-1.3,5.7l-1.9,1.2l-1.7,0.7l3.8,2.5l3.1,2.6l0.1,2l3.8,3.4l2.4,2.7l1.5,3.8l4.2,2.5l0.9,2.1l3.5,5.2l2.5,0.8l1.5-1.1l2.6,0.4 l3.1-1.3l1.4,2.7l5,4.2l0,0l2.3-1.7l3.5,1.4l4.5-1.5l4,0.1l3.4-3l3.4-3.8l3.8-4.2l-3.5-6.9l-2.6-1.5l-1-2.5l-2.9-3.1l-3.4-0.5 l1.8-3.6l3-0.1l0.8-2l-0.2-5l-0.8-0.1L1166,508.7L1166,508.7z" id="map-map-country-SS" data-id="SS" class="svgMap-country" fill="#4B5563"></path><path d="M888.3,390.4l1-0.1v0.3l-1.2,1l-0.5,1.4l-0.4,0.6l-0.3,0.2l-0.6,0.2l-0.7-0.9l-0.4-1l-0.2-0.3l0.4-0.2h0.5l1-0.1 l0.3-0.1L888.3,390.4z M883.3,392.7h-0.2l-0.2,0.2l-0.2,0.4l0.3,0.5l0.2,0.1h0.2l0.5-0.4v-0.2l-0.1-0.3L883.3,392.7z M880.6,389 l-0.3-0.4h-0.7l-0.4,0.6l0.6,1.2l0.1,0.5h0.1l0.5-0.5l0.1-0.3l-0.1-0.5l0.2-0.2L880.6,389z M878.7,395.5h-0.6l0.1,0.2l0.1,0.2 l0.7,0.4l0.6-1.1l-0.2-0.2L878.7,395.5z M901.1,389.3l-0.3,0.2l-0.1,0.6l-0.7,1.3l-0.5,1.2l-0.7,0.6l-0.7,0.2l0.1,0.1l0.7,0.1 l0.8-0.7l1.5-0.5l0.3-1l0.3-1.1v-0.7l-0.3-0.3L901.1,389.3L901.1,389.3z M893.1,393.1L893.1,393.1L893.1,393.1h-0.2l-1.3-0.1 l-0.2,0.6l-0.5,0.4v0.7l0.5,0.7l0.3,0.1l0.5,0.1l0.7-0.4l0.2-0.4l0.1-0.8l-0.1-0.4V393.1z M994.3,318.7l-0.3-0.1l-0.5,0.2l-0.5-0.2 l0.1-0.3l0.1-0.2l0.1-0.1l-0.2-0.2v-0.1l0.2-0.2l-0.2-0.1l-1.3,0.4l-0.7,0.4l-2.1,1.5v0.3l0.1,0.2h0.4l0.2,0.4l0.4-0.4l0.3-0.1 l0.3,0.1l0.3,0.2l0.1,0.6l0.1,0.2l0.6,0.1l0.9,0.4l0.4-0.2l0.5-0.3l0.2-0.6l0.3-0.5l0.3-0.5l0.3-0.4l-0.1-0.4L994.3,318.7z M998.6,317.1l-0.9-0.3l-1,0.1l-0.1,0.1v0.4l0.1,0.1l0.6,0.1l1.6,0.7h0.1l0.1-0.4v-0.1L998.6,317.1z M992,301.9l-6,0.8l-1.3-0.7 l-0.2,0.1h-0.4l-0.1-0.2v-0.2l-3.7-1.8l-1.9,1.3l-9.4-2.8l-2-2.4l-8.2-0.2l-4.2,0.3l-5.4-1h-6.8l-6.2-1.1l-7.4,4.5l2,2.6l-0.4,4.4 l1.9-1.6l2.1-0.9l1.2,3.1h3l0.9-0.8l3,0.2l1.3,3.1l-2.4,1.7l-0.2,4.9l-0.9,0.9l-0.3,3l-2.2,0.5l2,3.8l-1.6,4.3l1.8,1.9l-0.8,1.7 l-2,2.5l0.4,2.1l4.8,1l1.4,3.7l2,2.2l2.5,0.6l2.1-2.5l3.3-2.3l5,0.1h6.7l3.8-5l3.9-1.3l1.2-4.2l3-2.9l-2-3.7l2-5.1l3.1-3.5l0.5-2.1 l6.6-1.3l4.8-4.2L992,301.9z M903.7,386.3l-0.2,0.4l-0.6,0.2l-0.8,0.4l-0.2,0.3l-0.2,0.9l0.4,0.1l0.3-0.4l0.9-0.3l0.5-0.3l0.1-0.9 l0.2-0.3l-0.2-0.3L903.7,386.3z M983.7,323.1l-0.2,0.3v0.3l-0.3,0.1l-0.1,0.4l0.1,0.2l0.8,0.1l0.2-0.4h0.3l0.6-0.7v-0.3l-0.3-0.2 L983.7,323.1z M984.2,325.1l-0.1,0.2l-0.1,0.2v0.2h0.5l0.4,0.1l0.1-0.1v-0.2h-0.5L984.2,325.1z" id="map-map-country-ES" data-id="ES" class="svgMap-country" fill="#89b3f8"></path><path d="M1432.2,532.7l2.3-1.8l0.6-6.6l-3-6.6l-2.9-4.5l-4.1-3.5l-1.9,10.3l1.4,9.1l2.8,5.1L1432.2,532.7L1432.2,532.7z" id="map-map-country-LK" data-id="LK" class="svgMap-country" fill="#4B5563"></path><path d="M1180.8,468.5l0.4-4.2l1.6-2l4-1l2.6-3.6l-3.1-2.4l-2.2-1.6l-2.5-7.6l-1.1-6.5l1.1-1.2l-2.1-6.2h-21.8h-21.4h-22.1 l0.5,12.7h-6.3v2.7l1.1,25.2l-4.8-0.4l-2.4,4.7l-1.4,3.9l1.2,1.5l-1.8,1.9l0.7,2.7l-1.4,2.6l-0.5,2.4l2-0.4l1.2,2.5l0.1,3.7l2.1,1.8 v1.6l0.7,2.7l3.3,4v2.6l-0.8,2.6l0.3,2l2,1.8l0.5,0.3l1.7-0.7l1.9-1.2l1.3-5.7l1.5-2.9l4-0.9l1,1.8l3,3.7l1.5,0.5l2-1.1l4.1,0.3 l0.8,1.3h5.5l0.2-1.3l2.9-1.2l0.5-1.9l2.1-1.3l4.8,3.7l2.8-0.7l2.7-4.5l3-3.5l-0.6-3.9l-1.4-1.8l3.4-0.3l0.3-1.5l2.6,0.5l-0.5,4.7 l0.8,4.6l2.9,2.5l0.7,2.2v3.1l0.8,0.1v-0.7l1.4-6.7l2.6-1.8l0.5-2.6l2.3-4.8l3.2-3.2l2.1-6.2l0.7-5.5l-0.7-2.5L1180.8,468.5 L1180.8,468.5z" id="map-map-country-SD" data-id="SD" class="svgMap-country" fill="#4B5563"></path><path d="M668,533.8l-4.6,0.5l-0.6,1.1l-6.7-1.2l-1,5.7l-3.5,1.6l0.3,1.5l-1.1,3.3l2.4,4.6l1.8,0.1l0.7,3.5l3.3,5.6l3.1,0.5 l0.5-1.3l-0.9-1.3l0.5-1.8l2.3,0.6l2.7-0.7l3.2,1.4l1.4-2.7l0.6-2.9l1-2.8l-2.1-3.7l-0.4-4.4l3.1-5.5L668,533.8L668,533.8z" id="map-map-country-SR" data-id="SR" class="svgMap-country" fill="#4B5563"></path><path d="M1150.5,736.6l-2.7-1.2l-1.6,0.5l-0.7,1.8l-1.6,2.4l-0.1,2.2l3,3.5l3.3-0.7l1.3-2.8l-0.3-2.8L1150.5,736.6 L1150.5,736.6z" id="map-map-country-SZ" data-id="SZ" class="svgMap-country" fill="#4B5563"></path><path d="M1077.7,161.1l-1.9-2.2l-1.7-8.4l-7.2-3.7l-5.9-2.7l-2.5,0.3v3.5l-7.9-0.9l-0.6,3.1l-4-0.1l-2.2,3.9l-3.4,6.1 l-5.7,7.9l1.8,1.9l-1.3,2.2l-4.3-0.1l-2.3,5.3l1,7.6l3.1,2.9l-0.9,6.9l-3.4,4l-1.7,3.3l4.2,8.4l4.4,6.7l2,5.7l5.3-0.3l2.2-4.7 l5.7,0.5l2-5.5l0.6-10l4.6-1.3l3.3-6.6l-4.8-3.3l-3.6-4l2.1-8.1l7.7-4.9l6.1-4.5l-1.2-3.5l3.4-3.9L1077.7,161.1L1077.7,161.1z" id="map-map-country-SE" data-id="SE" class="svgMap-country" fill="#4B5563"></path><path d="M1024.3,270.6l-5.4-1.9l-1,1.4h-4.2l-1.3,1l-2.3-0.6l0.2,1.6l-3.5,3.5v2.8l2.4-0.9l1.8,2.7l2.2,1.3l2.4-0.3l2.7-2.1 l0.9,1l2.4-0.2l0.9-2.5l3.8,0.8l2.1-1.1l0.3-2.5l-2.6-0.2l-2.3-1.1l0.7-1.6L1024.3,270.6L1024.3,270.6z" id="map-map-country-CH" data-id="CH" class="svgMap-country" fill="#4B5563"></path><path d="M1183.5,359.9l11-6.7l0.9-7.8l-1.2-4.7l2.7-1.6l2.1-4.1l-5.9,1.1l-2.8-0.2l-5.7,2.5h-4.3l-3-1.2l-5.5,1.8l-1.9-1.3 l0.1,3.6l-1.2,1.5l-1.2,1.4l-1,2.6l1.1,5l2.4,0.3l1.2,2.5l-2.6,2.4l-0.9,3.5l0.3,2.6l-0.6,1h0.1l6.3,2.5L1183.5,359.9L1183.5,359.9z " id="map-map-country-SY" data-id="SY" class="svgMap-country" fill="#4B5563"></path><path d="M1642.3,427.2l1.2-10.2l0.1-3.9l-2.9-1.9l-3.3,4.8l-1.9,6.3l1.5,4.7l4,5.4L1642.3,427.2L1642.3,427.2z" id="map-map-country-TW" data-id="TW" class="svgMap-country" fill="#4B5563"></path><path d="M1344.1,315.7l-2.1,0.2l-1.3-1.8l0.2-2.9l-6.4,1.5l-0.5,4l-1.5,3.5l-4.4-0.3l-0.6,2.8l4.2,1.6l2.4,4.7l-1.3,6.6 l1.8,0.8l3.3-2.1l2.1,1.3l0.9-3l3.2,0.1l0.6-0.9l-0.2-2.6l1.7-2.3l3.2,1.5v2l1.6,0.3l1,5.4l2.6,2.1l1.5-1.3l2.1-0.7l2.5-2.9l3.8,0.5 h5.4l-1.8-3.7l-0.6-2.5l-3.5-1.4l-1.6,0.6l-3-5.9l-9.5,0.9l-7.1-2l-5.4,0.5l-0.6-3.7l5.9,1.1L1344.1,315.7L1344.1,315.7z" id="map-map-country-TJ" data-id="TJ" class="svgMap-country" fill="#4B5563"></path><path d="M1149.6,578.6l-2,0.8l2.3,3.6l-0.4,3.7l-1.6,0.8l0,0l0.3,2.5l1.2,1.5v2l-1.4,1.4l-2.2,3.3l-2.1,2.3l-0.6,0.1 l-0.3,2.7l1.1,0.9l-0.2,2.7l1,2.6l-1.3,2.4l4.5,4.3l0.3,3.9l2.7,6.5l0,0l0.3,0.2l2.2,1.1l3.5,1.1l3.2,1.9l5.4,1.2l1.1,1.7l0,0 l0.4-1.2l2.8,3.4l0.3,6.7l1.8,2.4v0.1l2.1-0.3l6.7,1.8l1.4-0.8l3.9-0.1l2.1-1.9l3.3,0.1l6.2-2.5l4.6-3.7l0,0l-2-1.4l-2.2-6.3 l-1.8-3.9l0.4-3.1l-0.3-1.9l1.7-3.9l-0.2-1.6l-3.5-2.3l-0.3-3.6l2.8-7.9l-8-6.3l-0.4-3.7l-20.2-13l0,0l-2.8,2.8l-1.9,2.9l2.2,2.2 l-3.2,1.6l-0.7-0.8l-3.2,0.4l-2.5,1.4l-1.6-2.4l1.1-4.5l0.2-3.8l0,0l0,0L1149.6,578.6L1149.6,578.6z" id="map-map-country-TZ" data-id="TZ" class="svgMap-country" fill="#4B5563"></path><path d="M1562.7,481.4l1.5-2.9l-0.5-5.4l-5.2-5.5l-1.3-6.3l-4.9-5.2l-4.3-0.4l-0.8,2.2l-3.2,0.2l-1.8-1.2l-5.3,3.8l-1-5.7 l0.4-6.7l-3.8-0.3l-0.9-3.8l-2.6-1.9l-3,1.4l-2.8,2.8l-3.9,0.3l-1.5,6.9l-2.2,1.1l3.5,5.6l4.1,4.6l2.9,4.2l-1.4,5.6l-1.7,1.1 l1.7,3.2l4.2,5.1l1,3.5l0.2,3l2.8,5.8l-2.6,5.9l-2.2,6.6l-1.3,6.1l-0.3,3.9l1.2,3.6l0.7-3.8l2.9,3.1l3.2,3.5l1.1,3.2l2.4,2.4 l0.9-1.1l4.7,2.8l0.6,3.3l3.7-0.8l1.7-2.6l-3.1-3.3l-3.4-0.8l-3.3-3.6l-1.4-5.5l-2.6-5.8l-3.7-0.2l-0.7-4.6l1.4-5.6l2.2-9.3l-0.2-7 l4.9-0.1l-0.3,5l4.7-0.1l5.3,2.9l-2.1-7.7l3-5.2l7.1-1.3L1562.7,481.4L1562.7,481.4z" id="map-map-country-TH" data-id="TH" class="svgMap-country" fill="#4B5563"></path><path d="M1676.8,631.9l4.9-1.8l6-2.8l2.2-1.7l-2-0.8l-1.8,0.8l-4,0.2l-4.9,1.4l-0.8,1.5l0.5,1.3L1676.8,631.9L1676.8,631.9z " id="map-map-country-TL" data-id="TL" class="svgMap-country" fill="#4B5563"></path><path d="M981.7,502.2l-4.9-0.1l-0.4,1.9l2.4,3.3l-0.1,4.6l0.6,5.1l1.4,2.3l-1.2,5.7l0.4,3.2l1.5,4l1.2,2.2l4.6-1.3l-1.4-4.4 l0.2-14.6l-1.1-1.3l-0.2-3.1l-2-2.3l-1.7-1.9L981.7,502.2L981.7,502.2z" id="map-map-country-TG" data-id="TG" class="svgMap-country" fill="#4B5563"></path><path d="M13.3,707.7L13.3,707.7l-0.2,0.3v0.2l0.4,0.4L13.3,707.7z M11.7,706.8h-0.2H11.7l-0.4-0.3h-0.4l-0.2-0.1v-0.2 l-0.2,0.3l0.2,0.3l0.9,0.4l0.3,0.2l0.2-0.6v-0.2l-0.3,0.1v0.1H11.7z M14.2,690.8l0.1-0.2v-0.2l-0.3-0.1h-0.1l-0.3,0.5l0.1,0.1 l0.3,0.2h0.1L14.2,690.8z" id="map-map-country-TO" data-id="TO" class="svgMap-country" fill="#4B5563"></path><path d="M635.4,507.7l0.1-0.2v-0.6l0.2-0.4l-0.2-0.4l-0.1-0.6l0.1-0.5v-0.7l0.2-0.3l0.5-0.8h-0.9l-0.6,0.2l-1.1,0.1 l-0.5,0.2l-0.7,0.1L632,504l0.1,0.1l0.5,0.2l0.2,0.2l0.1,0.2l0.1,0.4l-0.3,1.7l-0.1,0.1L632,507l-0.2,0.3l-1.4,0.8l0.8-0.1l0.9,0.1 l2.4-0.1L635.4,507.7L635.4,507.7z M637.2,501l1.2-0.5l0.1-0.4h-0.2l-0.8,0.3l-0.6,0.5v0.2L637.2,501z" id="map-map-country-TT" data-id="TT" class="svgMap-country" fill="#4B5563"></path><path d="M1038,361.4l-2-1l-1.5-3l-2.8-0.1l-1.1-3.5l3.4-3.2l0.5-5.6l-1.9-1.6l-0.1-3l2.5-3.2l-0.4-1.3l-4.4,2.4l0.1-3.3 l-3.7-0.7l-5.6,2.6l-1,3.3l1,6.2l-1.1,5.3l-3.2,3.6l0.6,4.8l4.5,3.8v1.5l3.4,2.6l2.6,11.3l2.6-1.4l0.4-2.7l-0.7-2.6l3.7-2.5l1.5-2 l2.6-1.8L1038,361.4L1038,361.4z" id="map-map-country-TN" data-id="TN" class="svgMap-country" fill="#4B5563"></path><path d="M1166.6,308.9l-9.7-4.4l-8.5,0.2l-5.7,1.7l-5.6,4l-9.9-0.8l-1.6,4.8l-7.9,0.2l-5.1,6.1l3.6,3l-2,5l4.2,3.6l3.7,6.4 l5.8-0.1l5.4,3.5l3.6-0.8l0.9-2.7l5.7,0.2l4.6,3.5l8-0.7l3.1-3.7l4.6,1.5l3.2-0.6l-1.7,2.4l2.3,3l1.2-1.4l1.2-1.5l-0.1-3.6l1.9,1.3 l5.5-1.8l3,1.2h4.3l5.7-2.5l2.8,0.2l5.9-1.1l2.1-1l6.2,0.9l2.1,1.6l2.3-1.1l0,0l-3.7-5.2l0.7-2l-2.9-7.3l3.3-1.8l-2.4-1.9l-4.2-1.5 v-3.1l-1.3-2.2l-5.6-3l-5.4,0.3l-5.5,3.2l-4.5-0.6l-5.8,1L1166.6,308.9L1166.6,308.9z M1117,312.9l2-1.9l6.1-0.4l0.7-1.5l-4.7-2 l-0.9-2.4l-4.5-0.8l-5,2l2.7,1.6l-1.2,3.9l-1.1,0.7l0.1,1.3l1.9,2.9L1117,312.9L1117,312.9z" id="map-map-country-TR" data-id="TR" class="svgMap-country" fill="#4B5563"></path><path d="M1325.6,334.2l-0.8-4l-7.7-2.7l-6.2-3.2l-4.2-3l-7-4.4l-4.3-6.4l-2-1.2l-5.5,0.3l-2.3-1.3l-1.9-4.9l-7.8-3.3 l-3.3,3.6l-3.8,2.2l1.6,3.1l-5.8,0.1l-2.5,0.3l-4.9-4.9l-3.8-1.7l-5.5,1.3l-1.8,2l2.5,4l-0.5-4.5l3.7-1.6l2.4,3.6l4.6,3.7l-4,2 l-5.3-1.5l0.1,5.2l3.5,0.4l-0.4,4.4l4.5,2.1l0.7,6.8l1.8,4.5l4.4-1.2l3-3.7l3.5,0.2l2.1-1.2l3.8,0.6l6.5,3.3l4.3,0.7l7.3,5.7 l3.9,0.2l1.6,5.5l5.9,2.4l3.9-0.8l0.4-3l4-0.9l2.5-2l-0.1-5.2l4.1-1.2l0.3-2.3l2.9,1.7L1325.6,334.2L1325.6,334.2z" id="map-map-country-TM" data-id="TM" class="svgMap-country" fill="#4B5563"></path><path d="M578.7,433.1l-0.1,0.4v0.2l0.2,0.1l0.6-0.1l0.1-0.1l0.2-0.1v-0.1l-0.4,0.1L578.7,433.1z M582.3,433.7l0.2-0.2 l-0.2-0.2l-0.7-0.2l-0.2,0.1v0.3h0.6L582.3,433.7L582.3,433.7L582.3,433.7z M581.2,433.2l-0.1-0.1l-0.1-0.6h-0.5v0.2l0.1,0.2h0.1 l0.1,0.2l0.3,0.2L581.2,433.2L581.2,433.2z" id="map-map-country-TC" data-id="TC" class="svgMap-country" fill="#4B5563"></path><path d="M1167.6,545.1l-3.4,3l-4-0.1l-4.5,1.5l-3.5-1.4l-2.3,1.7l0,0l-0.3,7.5l2.3,0.8l-1.8,2.3l-2.2,1.7l-2.1,3.3l-1.2,3 l-0.3,5.1l-1.3,2.4l-0.1,4.8l1.4,0.6l3.3-1.9l2-0.8l6.2,0.1l0,0l-0.3-2.5l2.6-3.7l3.5-0.9l2.4-1.5l2.9,1.2l0.3,0.5v-0.3l1.6-2.6 l2.7-4.2l2.1-4.7l-2.6-7.3l-0.7-3.2L1167.6,545.1L1167.6,545.1z" id="map-map-country-UG" data-id="UG" class="svgMap-country" fill="#4B5563"></path><path d="M1138.5,241l-4.8,0.5l-1.5-0.3l-1,1.4l-1.8-0.2l0,0l-4.1,0.3l-1.2,1.4l0.2,3.1l-2-0.6l-4.3,0.3l-1.5-1.5l-1.6,1.1 l-2-0.9l-3.8-0.1l-5.6-1.5l-5-0.5l-3.7,0.2l-2.4,1.6l-2.2,0.3l3.1,5.3l-0.3,1.8l-2.3,0.7l-3.8,5.1l1.6,2.8l-1.1-0.4l-1.1,1.7 l-0.7,2.5l2.9,1.7l0.6,1.6l1.9-1.3l3.2,0.7h3.2l2.4,1.5l1.6-0.9l3.6-0.6l1-1.5h2.1l1.1-0.9l3.2-0.6l3.9,1.9l2,0.3l2.5,1.6v2.1 l1.9,1.1l1.1,2.6l2,1.5l-0.2,1l1,0.6l-1.2,0.5l-3-0.2l-0.6-0.9l-1,0.5l0.5,1.1l-1.1,2l-0.5,2.1l-1.2,0.7l2.4,1.1l2.2-1l2.4,1.1 l3.3-4.6l1.3-3.4l4.5-0.8l0.7,2.4l8,1.5l1.7,1.4l-4.5,2.1l-0.7,1.2l5.8,1.8l-0.6,2.9l3,1.3l6.3-3.6l5.3-1.1l0.6-2.2l-5.1,0.4 l-2.7-1.5l-1-3.9l3.9-2.3l4.6-0.3l3-2l3.9-0.5l-0.4-2.8l2.2-1.7l4.7-0.5l0.3-2.1l-1.8-3.4l1.3-3.2l-0.4-1.9l-7.6-2l-2.9,0.1 l-3.6-2.9l-3.5,1l-6.6-2.2l-0.2-1.2l-2.2-2.7l-4-0.2l-0.7-1.9l0.9-1.3L1138.5,241L1138.5,241z" id="map-map-country-UA" data-id="UA" class="svgMap-country" fill="#4B5563"></path><path d="M1283.9,408.6l-1.3-2.2l-3,3.9l-3.7,4.1l-3.3,4.3l-3.3-0.2l-4.6-0.2l-4.2,1l-0.3-1.7l-1,0.3l0.4,1.5l2.6,6.4 l16.8,3.2l1-1.3l-0.1-2.6l1.4-2.6l-0.3-2.6l2.4-1.3l-1.1-0.8l0.1-4.2h2.8L1283.9,408.6L1283.9,408.6z" id="map-map-country-AE" data-id="AE" class="svgMap-country" fill="#4B5563"></path><path d="M950,227.5l-4.9-3.7l-3.9,0.3l0.8,3.2l-1.1,3.2l2.9-0.1l3.5,1.3L950,227.5z M963,203.2l-5.5,0.5l-3.6-0.4l-3.7,4.8 l-1.9,6.1l2.2,3l0.1,5.8l2.6-2.8l1.4,1.6l-1.7,2.7l1,1.6l5.7,1.1h0.1l3.1,3.8l-0.8,3.5l0,0l-7.1-0.6l-1,4l2.6,3.3l-5.1,1.9l1.3,2.4 l7.5,1l0,0l-4.3,1.3l-7.3,6.5l2.5,1.2l3.5-2.3l4.5,0.7l3.3-2.9l2.2,1.2l8.3-1.7l6.5,0.1l4.3-3.3l-1.9-3.1l2.4-1.8l0.5-3.9l-5.8-1.2 l-1.3-2.3l-2.9-6.9l-3.2-1l-4.1-7.1l-0.4-0.6l-4.8-0.4l4.2-5.3l1.3-4.9h-5l-4.7,0.8L963,203.2L963,203.2z" id="map-map-country-GB" data-id="GB" class="svgMap-country" fill="#7ba8f4"></path><path d="M116.7,450.7l2-0.9l2.5-1.4l0.2-0.4l-0.9-2.2l-0.7-0.8l-0.8-0.6l-1.9-1.1l-0.4-0.1l-0.4,0.6v1.3l-1.2,1l-0.4,0.7 l0.4,2.3l-0.6,1.8l1.2,0.9L116.7,450.7L116.7,450.7z M116.1,440.8l0.6-0.7l-1.2-1l-1.8-0.6L113,439v0.4l0.5,0.5l0.6,1.4L116.1,440.8 L116.1,440.8z M113.1,437.4l-2.6-0.2l-0.6,0.7l2.9,0.2L113.1,437.4z M108.4,436.5l-1.1-2.1L107,434l-1.7,0.9l0.1,0.2l0.4,1.5 l1.8,0.2l0.4,0.1L108.4,436.5L108.4,436.5z M100.1,432.3l0.3-1.5l-1.3-0.1l-1,0.6l-0.4,0.5l1.6,1.1L100.1,432.3z M512.2,259.1h-1.6 l-1.3,2.4h-10.1h-16.8h-16.7h-14.8h-14.7h-14.5h-15h-4.8h-14.6h-13.9l-1.6,5.1l-2.4,5.1l-2.3,1.6l1.1-5.9l-5.8-2.1l-1.4,1.2 l-0.4,2.9l-1.8,5.4l-4.2,8.3l-4,5.6l-4,5.6l-5.4,5.8l-1.1,4.7l-2.8,5.3l-3.9,5.2l1,3.4l-1.9,5.2l1.5,5.4l1.3,2.2l-0.8,1.5l0.4,9 l2.5,6.5l-0.8,3.5l1,1l4.6,0.7l1.3,1.7l2.8,0.3l-0.1,1.9l2.2,0.7l2.1,3.7l-0.3,3.2l6.3-0.5l7-0.7l-1,1.3l7.1,3.1l10.7,4.4H391h4.3 l0.8-2.6h9.3l1.3,2.2l2.1,2l2.4,2.8l0.8,3.3l0.4,3.5l2.2,1.9l4,1.9l4.8-5l4.4-0.1l3.1,2.5l1.6,4.4l1,3.7l2.4,3.6l0.2,4.5l0.8,3 l3.9,2l3.6,1.4l2.1-0.2l-0.6-2.2l0.4-3.1l1-4.4l1.9-2.8l3.7-3.1l6-2.7l6.1-4.7l4.9-1.5l3.5-0.4l3.5,1.4l4.9-0.8l3.3,3.4l3.8,0.2 l2.4-1.2l1.7,0.9l1.3-0.8l-0.9-1.3l0.7-2.5l-0.5-1.7l2.4-1l4.2-0.4l4.7,0.7l6.2-0.8l3,1.5l2,3l0.9,0.3l6.1-2.9l1.9,1l3,5.3l0.8,3.5 l-2,4.2l0.4,2.5l1.6,4.9l2,5.5l1.8,1.4l0.4,2.8l2.6,0.8l1.7-0.8l2-3.9l0.7-2.5l0.9-4.3l-1.2-7.4l0.5-2.7l-1.5-4.5l-0.7-5.4l0.1-4.4 l1.8-4.5l3.5-3.8l3.7-3l6.9-4.1l1.3-2.2l3.3-2.3l2.8-0.4l4.4-3.8l6-1.9l4.6-4.8l0.9-6.5l0.1-2.2l-1.4-0.4l1.5-6.2l-3-2.1l3.2,1v-4.1 l1.9-2.7l-1,5.3l2,2.5l-2.9,4.4l0.4,0.2l4.4-5.1l2.4-2.5l0.6-2.5l-0.9-1.1l-0.1-3.5l1.2,1.6l1.1,0.4l-0.1,1.6l5.2-4.9l2.5-4.5 l-1.4-0.3l2.1-1.8l-0.4,0.8h3.3l7.8-1.9l-1.1-1.2l-7.9,1.2l4.8-1.8l3.1-0.3l2.4-0.3l4.1-1.1l2.4,0.1l3.8-1l1-1.7l-1.1-1.4l-0.2,2.2 L615,306l-0.6-3.3l1.1-3.3l1.4-1.3l3.9-3.7l5.9-1.8l6-2.1l6.3-3l-0.2-2l-2.1-3.5l2.8-8.5l-1.5-1.8l-3.7,1.1l-1.1-1.7l-5.5,4.7 l-3.2,4.9l-2.7,2.8l-2.5,0.9l-1.7,0.3l-1,1.6h-9.3h-7.7l-2.7,1.2l-6.7,4.2l0.2,0.9l-0.6,2.4l-4.6,2l-3.9-0.5l-4-0.2l-2.6,0.7 l-0.3,1.8l0,0l-0.1,0.6l-5.8,3.7l-4.5,1.8l-2.9,0.8l-3.7,1.7l-4,0.9l-2.5-0.3l-2.7-1.3l2.7-2.4l0,0l2-2.2l3.7-3.4l0,0l0,0l0.7-2.5 l0.5-3.5l-1.6-0.7l-4.3,2.8l-0.9-0.1l0.3-1.5l3.8-2.5l1.6-2.8l0.7-2.8l-2.7-2.4l-3.7-1.3l-1.7,2.4l-1.4,0.6l-2.2,3.1l0.4-2.1 l-2.6,1.5l-2.1,2l-2.6,3.1l-1.3,2.6l0.1,3.8l-1.8,4l-3.3,3l-1.4,0.9l-1.6,0.7h-1.8l-0.3-0.4l-0.1-3.3l0.7-1.6l0.7-1.5l0.6-3l2.5-3.5 l2.9-4.3l4.6-4.7h-0.7l-5.4,4l-0.4-0.7l2.9-2.3l4.7-4l3.7-0.5l4.4-1.3l3.7,0.7h0.1l4.7-0.5l-1.5-2.5l0,0l-1.2-0.2l0,0l0,0l-1.4-0.3 l-0.4-1.7l-5.1,0.5l-5,1.4l-2.5-2.3l-2.5-0.8l3.1-3.3l-5.3,2l-4.9,2.1l-4.6,1.5l-2.1-2.1l-5.5,1.3l0.4-0.9l4.6-2.6l4.7-2.5l5.9-2.1 l0,0l0,0l-5.3-1.6l-4.4,0.8l-3.8-1.9l-4.6-1l-3.2-0.4l-1-1L512.2,259.1L512.2,259.1z M271.6,212.2l6.9-2.8v-1.8l-2.6-0.4l-3.4,0.9 l-6.4,2.1l-2.2,2.7l0.7,1.6L271.6,212.2z M232.9,195.8l2.3-2.3l-2.9-0.5l-5.7,1l0.8,1.6l1.6,1.1L232.9,195.8L232.9,195.8z M234.1,173.5l-3.1,2.2l0.4,0.5l4.2-0.4l0.3,1.1l1.7,1.2l4.9-1.2l1.2-0.6l-3.3-0.8l-1.6-1.5l-3.4,0.6L234.1,173.5L234.1,173.5z M359,133.3l-4.4-1.1l-10.2,2.8l-3.2-0.3l-11,2.3l-4.8,0.6l-7.8,2.5l-4.8,2.6l-8.6,2.5l-7.6,0.1l-6.3,2.9l3.2,1.7l0.7,2.3l-0.8,2.7 l2.3,2.1l-1.2,3.5l-9.2,0.2l4.3-2.8h-3.4l-13.1,2.7l-9.1,2.3l1,3.3l-1.2,2.2l4.5,1.4l6.9-0.7l1.8,1.3l2.9-1.3l6.1-1.2h2.7l-5.9,2.1 l1.1,1l-2.5,2.6l-5.5,1.8l-2.5-0.5l-7,2.7l-1.8-0.9l-4.1,0.4l-5.3,3l-7.6,3.1l-5.8,3.4l0.3,2.4l-4,3.3l1.4,1.4l0.5,2.7l7.2-1.1 l0.4,2.1l-3.3,2.1l-3.6,3.5h2.8l7.2-2.3l-1.6,2.9l3.6-2.1l-0.4,3l4.8-2.2l0.4,1.1l7.2-1.8l-6.2,3.4l-5.7,4.5l-5.7,2.1l-2.3,1.2 l-10.3,3.6l-4.9,2.4l-6.5,0.7l-8.5,3.3l-6.6,1.8l-8.1,2.8l-0.4,1l10-1.7l6-2l6.9-2l6.1-1.7l2.8,0.5l8.1-2.6l4.5-2.8l10.5-3.1 l3.9-2.6l6.6-1.8l7.6-2.5l8.9-4.2l-0.2-2.9l11.1-4.1l7.4-3.9l9.2-3.2l-0.4,1.4l-6.7,1.8l-8.3,5.7l-3.2,3.5l6.4-1.3l6.1-1.9l6.5-1.3 l2.9-0.3l3.5-4.1l6.3-1.2l2.6,2.5l6,2.7l6.7-0.5l5.7,2l3.2,1.1l3.3,6.1l3.7,1.7l7.1,0.2l4.1,0.4l-2.7,5.5l1.6,4.9l-3.3,5.2l2.5,1.9 l0.6,2.2l0,0l5.1-2.9l3.1-3.7l-4.6-3.8l1.5-6.8l1.1-4.2l-1.7-2.7l-0.7-2.4l0.5-3l-6.4,1.9l-7.6,3.3l-0.2-3.9l-0.6-2.6l-2.7-1.6 l-4.2-0.1l35.4-32.4l24.3-20.2l0,0l0,0l-3.5-0.7l-4.1-1.6l-6.5,0.8l-2.2-0.7l-7.1-0.5l-6.2-1.6l-4.8,0.5l-4.9-0.9l2-1.2l-6.3-0.3 l-3.3,1L359,133.3L359,133.3z" id="map-map-country-US" data-id="US" class="svgMap-country" fill="#1a56db"></path><path d="M617.9,458.9l-0.7,0.2l-0.1,0.4h1.1l0.7-0.3h-0.6L617.9,458.9L617.9,458.9z M618.8,455.4l-0.5-0.1l-0.2,0.2l0,0 l0.3,0.1L618.8,455.4z M617.7,455.5l-0.2-0.2l-0.3-0.1l-0.4,0.1l0.5,0.3L617.7,455.5L617.7,455.5z" id="map-map-country-VI" data-id="VI" class="svgMap-country" fill="#4B5563"></path><path d="M692.5,787l-2.1-3.7l1.9-3l-3.8-4.3l-4.8-3.5l-6.2-4.1l-1.9,0.2l-6.2-4.9l-3.4,0.7l-0.5,5.1l-0.3,6.5l1.1,6.3 l-0.9,1.4l0.4,4.2l3.9,3.5l3.6-0.2l5.4,2.7l2.7-0.6l4.2,1.2l5.3-3.5L692.5,787L692.5,787z" id="map-map-country-UY" data-id="UY" class="svgMap-country" fill="#4B5563"></path><path d="M1339.8,303.1l-2.5,1.2l-5.4,4.3l-0.9,4.5h-1.9l-2.3-3l-6.6-0.2l-2.6-5l-2.5-0.1l-1.5-6.2l-7.5-4.5l-8.6,0.5 l-5.7,0.9l-6.5-5.5l-4.8-2.3l-9.1-4.5l-1.1-0.5l-11.9,3.6l6.2,22.8l5.8-0.1l-1.6-3.1l3.8-2.2l3.3-3.6l7.8,3.3l1.9,4.9l2.3,1.3 l5.5-0.3l2,1.2l4.3,6.4l7,4.4l4.2,3l6.2,3.2l7.7,2.7l0.8,4h2.9l4.3,1.4l1.3-6.6l-2.4-4.7l-4.2-1.6l0.6-2.8l4.4,0.3l1.5-3.5l0.5-4 l6.4-1.5l-0.2,2.9l1.3,1.8l2.1-0.2l4.1,0.6l5.2-4.5l-7.1-3.3l-3.2,1.6l-4.6-2.3l3.1-4.1L1339.8,303.1L1339.8,303.1z" id="map-map-country-UZ" data-id="UZ" class="svgMap-country" fill="#4B5563"></path><path d="M1908.6,676.9l-2.7-3.6l-0.6,1.7l1.3,2.8L1908.6,676.9L1908.6,676.9z M1906.6,667.2l-2.3-2l-0.9,4.9l0.5,1.8 l1.2-0.4l1.3,0.8L1906.6,667.2L1906.6,667.2z" id="map-map-country-VU" data-id="VU" class="svgMap-country" fill="#4B5563"></path><path d="M1039.5,304.8l0.6-0.1l0.1,0.6h-0.9L1039.5,304.8z" id="map-map-country-VA" data-id="VA" class="svgMap-country" fill="#4B5563"></path><path d="M642,518.9l-2.2-1.5l-2.9,0.2l-0.7-5.1l-4.1-3.2l-4.4-0.4l-1.8-3l4.8-1.9l-6.7,0.1l-6.9,0.4l-0.2,1.6l-3.2,1.9 l-4.2-0.7l-3.1-2.9l-6,0.7l-5-0.1l-0.1-2.1l-3.5-3.5l-3.9-0.1l-1.7-4.5l-2.1,2l0.6,3l-7.1,2.6v4.8l1.6,2.2l-1.5,4.6l-2.4,0.4l-1.9-5 l2.7-3.7l0.3-3.3l-1.7-2.9l3.3-0.8l0.3-1.5l-3.7,1.1l-1.6,3.2l-2.2,1.8l-1.8,2.4l-0.9,4.5l-1.8,3.7l2.9,0.5l0.6,2.9l1.1,1.4l0.4,2.5 l-0.8,2.4l0.2,1.3l1.3,0.6l1.3,2.2l7.2-0.6l3.2,0.8l3.8,5.5l2.3-0.7l4,0.3l3.2-0.7l2,1.1l-1.2,3.4l-1.3,2.1l-0.5,4.6l1,4.2l1.5,1.9 l0.2,1.5l-2.9,3.1l2,1.4l1.4,2.2l1.7,6.4l3,3.4l4.4-0.5l1.1-1.9l4.2-1.5l2.3-1l0.7-2.7l4.1-1.8l-0.3-1.4l-4.8-0.5l-0.7-4l0.3-4.3 l-2.4-1.6l1-0.6l4.2,0.8l4.4,1.6l1.7-1.5l4-1l6.4-2.4l2.1-2.4l-0.7-1.8l-3.7-4.8l1.6-1.8v-2.9l3.4-1.1l1.5-1.2l-1.9-2.3l0.6-2.3 L642,518.9L642,518.9z" id="map-map-country-VE" data-id="VE" class="svgMap-country" fill="#4B5563"></path><path d="M1571.6,435l-5.9-1.6l-3-2.6l0.2-3.7l-5.2-1.1l-3-2.4l-4.1,3.4l-5.3,0.7h-4.3l-2.7,1.5l4,5.1l3.4,5.7l6.8,0.1l3,5.5 l-3.3,1.7l-1.3,2.3l7.3,3.8l5.7,7.5l4.3,5.6l4.8,4.4l2,4.5l-0.2,6.4l1.8,4.2l0.1,7.7l-8.9,4.9l2.8,3.8l-5.8,0.5l-4.7,2.5l4.5,3.7 l-1.3,4.3l2.3,4l6.6-5.9l4.1-5.3l6.1-4.1l4.3-4.2l-0.4-11.2l-4-11.7l-4.1-5.1l-5.6-4l-6.4-8.3l-5.3-6.7l0.5-4.4l3.7-6L1571.6,435z" id="map-map-country-VN" data-id="VN" class="svgMap-country" fill="#4B5563"></path><path d="M928.8,396.2h0.8v0.4l-0.1,1.2l-0.2,9.7l-17.9-0.3l-0.2,16.3L906,424l-1.4,3.3l0.9,9.2l-21.6-0.1l-1.2,2.2l0.3-2.7 h0.1l12.4-0.5l0.7-2.3l2.3-2.9l2-8.8l7.8-6.8l2.8-8.1l1.7-0.4l1.9-5l4.6-0.7l1.9,0.9h2.5l1.8-1.5l3.4-0.2L928.8,396.2z" id="map-map-country-EH" data-id="EH" class="svgMap-country" fill="#4B5563"></path><path d="M1271.5,466.2l-2.1-4.4l-5.2-10.5l-15.7,2.4l-5,2.9l-3.5,6.7l-2.5,1l-1.6-2.1l-2.1,0.3l-5.4-0.6l-1-0.7l-6.4,0.2 l-1.5,0.6l-2.4-1.7l-1.2,3.1l0.7,2.7l-2.3,2.1l0.4,2.7l-0.6,1.3l0.7,2.9l-1.1,0.3l1.7,2.6l1.3,4.7l1,1.9v3.4l1.6,3.8l3.9,0.3 l1.8-0.9l2.7,0.2l0.8-1.7l1.5-0.4l1.1-1.7l1.4-0.4l4.7-0.3l3.5-1.2l3.1-2.7l1.7,0.4l2.4-0.3l4.7-4.5l8.8-3l5.3-2.7v-2.1l0.9-2.9 L1271.5,466.2L1271.5,466.2z" id="map-map-country-YE" data-id="YE" class="svgMap-country" fill="#4B5563"></path><path d="M1149.2,626.7l-1.9-0.5l0.4-1.3l-1-0.3l-7.5,1.1l-1.6,0.7l-1.6,4.1l1.2,2.8l-1.2,7.5l-0.8,6.4l1.4,1.1l3.9,2.5 l1.5-1.2l0.3,6.9h-4.3l-2.1-3.5l-2-2.8l-4.3-0.8l-1.2-3.4l-3.4,2l-4.5-0.9l-1.8-2.8l-3.5-0.6l-2.6,0.1l-0.3-2l-1.9-0.1l0.5,2l-0.7,3 l0.9,3l-0.9,2.4l0.5,2.2l-11.6-0.1l-0.8,20.3l3.6,5.2l3.5,4l4.6-1.5l3.6,0.4l2.1,1.4v0.5l1,0.5l6.2,0.7l1.7,0.7l1.9-0.1l3.2-4.1 l5.1-5.3l2-0.5l0.7-2.2l3.3-2.5l4.2-0.9l-0.3-4.5l17.1-5.2l-2.9-1.7l1.9-5.9l1.8-2.2l-0.9-5.3l1.2-5.1l1-1.8l-1.2-5.4l-2.6-2.8 l-3.2-1.9l-3.5-1.1l-2.2-1.1l-0.3-0.2l0,0l0.5,1.1l-1,0.4L1149.2,626.7L1149.2,626.7z" id="map-map-country-ZM" data-id="ZM" class="svgMap-country" fill="#4B5563"></path><path d="M1148.2,713.7l6.2-7.2l1.6-4.6l0.9-0.6l0.8-3.7l-0.8-1.9l0.5-4.7l1.3-4.4l0.3-8.1l-2.8-2l-2.6-0.5l-1.1-1.6 l-2.6-1.3l-4.6,0.1l-0.3-2.4l-4.2,0.9l-3.3,2.5l-0.7,2.2l-2,0.5l-5.1,5.3l-3.2,4.1l-1.9,0.1l-1.7-0.7l-6.2-0.7l1.9,5.1l1.1,1.1 l1.6,3.7l6,7l2.3,0.7l-0.1,2.2l1.5,4.1l4.2,0.9l3.4,2.9l2.2,0.1l2.6,1.1l1.9-0.8L1148.2,713.7L1148.2,713.7z" id="map-map-country-ZW" data-id="ZW" class="svgMap-country" fill="#4B5563"></path><path d="M1080,299.8l1.2-0.5l0.5-2l0.9-0.4l0.8,0.9l1,0.4l0.8,1l0.8,0.3l1.1,1.1h0.8l-0.5,1.5l-0.5,0.7l0.2,0.5l-1.1,0.2l-2.9,1l-0.1,1.2h-0.7l-0.5-2.3l-1.3-0.6l-1.3-1.6L1080,299.8z" id="map-map-country-XK" data-id="XK" class="svgMap-country" fill="#4B5563"></path></g></svg><div class="svgMap-map-controls-wrapper"><div class="svgMap-map-controls-zoom"><button class="svgMap-control-button svgMap-zoom-button svgMap-zoom-in-button" type="button" aria-label="Zoom in" aria-disabled="false"></button><button class="svgMap-control-button svgMap-zoom-button svgMap-zoom-out-button" type="button" aria-label="Zoom out" aria-disabled="false"></button></div></div></div></div></div></div>
        <!-- List -->
        <ul class="qDsn8ha5_HppqMcLKJwF" role="list">
          <!-- Item 1 -->
          <li class="Q_jg_EPdNf9eDMn1mLI2 t6gkcSf0Bt4MLItXvDJ_ rvdRhGyExrNYTA6euxsF">
            <!-- Flag -->
            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _hpGev6RXFut0Jm_iRgf tkZo48dB4RhnHSlDXzoe">
              <svg class="E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" viewBox="0 0 26 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect y="0.529053" width="25.7522" height="17.1429" rx="2" fill="white"></rect>
                <mask id="mask0" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="26" height="18">
                  <rect y="0.529053" width="25.7522" height="17.1429" rx="2" fill="white"></rect>
                </mask>
                <g mask="url(#mask0)">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M25.7522 0.529053H0V1.67191H25.7522V0.529053ZM25.7522 2.81477H0V3.95763H25.7522V2.81477ZM0 5.10048H25.7522V6.24333H0V5.10048ZM25.7522 7.3862H0V8.52905H25.7522V7.3862ZM0 9.67192H25.7522V10.8148H0V9.67192ZM25.7522 11.9576H0V13.1005H25.7522V11.9576ZM0 14.2433H25.7522V15.3862H0V14.2433ZM25.7522 16.5291H0V17.6719H25.7522V16.5291Z" fill="#D02F44"></path>
                  <rect y="0.529053" width="11.0367" height="8" fill="#46467F"></rect>
                  <g filter="url(#filter0_d)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.45237 2.2433C2.45237 2.5589 2.17786 2.81473 1.83922 2.81473C1.50059 2.81473 1.22607 2.5589 1.22607 2.2433C1.22607 1.92771 1.50059 1.67188 1.83922 1.67188C2.17786 1.67188 2.45237 1.92771 2.45237 2.2433ZM4.90496 2.2433C4.90496 2.5589 4.63045 2.81473 4.29182 2.81473C3.95318 2.81473 3.67867 2.5589 3.67867 2.2433C3.67867 1.92771 3.95318 1.67188 4.29182 1.67188C4.63045 1.67188 4.90496 1.92771 4.90496 2.2433ZM6.74441 2.81473C7.08304 2.81473 7.35756 2.5589 7.35756 2.2433C7.35756 1.92771 7.08304 1.67188 6.74441 1.67188C6.40578 1.67188 6.13126 1.92771 6.13126 2.2433C6.13126 2.5589 6.40578 2.81473 6.74441 2.81473ZM9.81015 2.2433C9.81015 2.5589 9.53564 2.81473 9.197 2.81473C8.85837 2.81473 8.58386 2.5589 8.58386 2.2433C8.58386 1.92771 8.85837 1.67188 9.197 1.67188C9.53564 1.67188 9.81015 1.92771 9.81015 2.2433ZM3.06552 3.95758C3.40415 3.95758 3.67867 3.70175 3.67867 3.38616C3.67867 3.07056 3.40415 2.81473 3.06552 2.81473C2.72689 2.81473 2.45237 3.07056 2.45237 3.38616C2.45237 3.70175 2.72689 3.95758 3.06552 3.95758ZM6.13126 3.38616C6.13126 3.70175 5.85675 3.95758 5.51811 3.95758C5.17948 3.95758 4.90496 3.70175 4.90496 3.38616C4.90496 3.07056 5.17948 2.81473 5.51811 2.81473C5.85675 2.81473 6.13126 3.07056 6.13126 3.38616ZM7.97071 3.95758C8.30934 3.95758 8.58386 3.70175 8.58386 3.38616C8.58386 3.07056 8.30934 2.81473 7.97071 2.81473C7.63207 2.81473 7.35756 3.07056 7.35756 3.38616C7.35756 3.70175 7.63207 3.95758 7.97071 3.95758ZM9.81015 4.52902C9.81015 4.84462 9.53564 5.10045 9.197 5.10045C8.85837 5.10045 8.58386 4.84462 8.58386 4.52902C8.58386 4.21343 8.85837 3.9576 9.197 3.9576C9.53564 3.9576 9.81015 4.21343 9.81015 4.52902ZM6.74441 5.10045C7.08304 5.10045 7.35756 4.84462 7.35756 4.52902C7.35756 4.21343 7.08304 3.9576 6.74441 3.9576C6.40578 3.9576 6.13126 4.21343 6.13126 4.52902C6.13126 4.84462 6.40578 5.10045 6.74441 5.10045ZM4.90496 4.52902C4.90496 4.84462 4.63045 5.10045 4.29182 5.10045C3.95318 5.10045 3.67867 4.84462 3.67867 4.52902C3.67867 4.21343 3.95318 3.9576 4.29182 3.9576C4.63045 3.9576 4.90496 4.21343 4.90496 4.52902ZM1.83922 5.10045C2.17786 5.10045 2.45237 4.84462 2.45237 4.52902C2.45237 4.21343 2.17786 3.9576 1.83922 3.9576C1.50059 3.9576 1.22607 4.21343 1.22607 4.52902C1.22607 4.84462 1.50059 5.10045 1.83922 5.10045ZM3.67867 5.67188C3.67867 5.98747 3.40415 6.2433 3.06552 6.2433C2.72689 6.2433 2.45237 5.98747 2.45237 5.67188C2.45237 5.35628 2.72689 5.10045 3.06552 5.10045C3.40415 5.10045 3.67867 5.35628 3.67867 5.67188ZM5.51811 6.2433C5.85675 6.2433 6.13126 5.98747 6.13126 5.67188C6.13126 5.35628 5.85675 5.10045 5.51811 5.10045C5.17948 5.10045 4.90496 5.35628 4.90496 5.67188C4.90496 5.98747 5.17948 6.2433 5.51811 6.2433ZM8.58386 5.67188C8.58386 5.98747 8.30934 6.2433 7.97071 6.2433C7.63207 6.2433 7.35756 5.98747 7.35756 5.67188C7.35756 5.35628 7.63207 5.10045 7.97071 5.10045C8.30934 5.10045 8.58386 5.35628 8.58386 5.67188ZM9.197 7.38616C9.53564 7.38616 9.81015 7.13032 9.81015 6.81473C9.81015 6.49914 9.53564 6.2433 9.197 6.2433C8.85837 6.2433 8.58386 6.49914 8.58386 6.81473C8.58386 7.13032 8.85837 7.38616 9.197 7.38616ZM7.35756 6.81473C7.35756 7.13032 7.08304 7.38616 6.74441 7.38616C6.40578 7.38616 6.13126 7.13032 6.13126 6.81473C6.13126 6.49914 6.40578 6.2433 6.74441 6.2433C7.08304 6.2433 7.35756 6.49914 7.35756 6.81473ZM4.29182 7.38616C4.63045 7.38616 4.90496 7.13032 4.90496 6.81473C4.90496 6.49914 4.63045 6.2433 4.29182 6.2433C3.95318 6.2433 3.67867 6.49914 3.67867 6.81473C3.67867 7.13032 3.95318 7.38616 4.29182 7.38616ZM2.45237 6.81473C2.45237 7.13032 2.17786 7.38616 1.83922 7.38616C1.50059 7.38616 1.22607 7.13032 1.22607 6.81473C1.22607 6.49914 1.50059 6.2433 1.83922 6.2433C2.17786 6.2433 2.45237 6.49914 2.45237 6.81473Z" fill="url(#paint0_linear)"></path>
                  </g>
                </g>
                <defs>
                  <filter id="filter0_d" x="1.22607" y="1.67188" width="8.58408" height="6.71428" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                    <feOffset dy="1"></feOffset>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"></feColorMatrix>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                  </filter>
                  <linearGradient id="paint0_linear" x1="1.22607" y1="1.67188" x2="1.22607" y2="7.38616" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white"></stop>
                    <stop offset="1" stop-color="#F0F0F0"></stop>
                  </linearGradient>
                </defs>
              </svg>
              <span class="ZaKHxcG4mQbOvJ4IzRtQ oA7zcT_42jVeFuWTXQnq _07uZcLokMvX7uULfRPY d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl pEjhbiVHG4rn1eIOx9eT OyABRrnTV_kvHV7dJ0uE">United States</span>
            </div>
            <div class="t6gkcSf0Bt4MLItXvDJ_ rxe6apEJoEk8r75xaVNG WwS1mve_UI16RedcVHEs mveJTCIb2WII7J4sY22F jqg6J89cvxmDiFpnV56r">
              <div class="sQaK4IH7BIQSgBTGX8Pe rxe6apEJoEk8r75xaVNG gMXmdpOPfqG_3CKkL0VD IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh ijrOHNoSVGATsWYKl4Id W5n_NSFnC6y2nqoHw_5x IR64fXXu8VHPDt6EKlvV g40_g3BQzYCOX5eZADgY" style="width: 35%"> 35%</div>
            </div>
          </li>
          <!-- Item 2 -->
          <li class="Q_jg_EPdNf9eDMn1mLI2 t6gkcSf0Bt4MLItXvDJ_ rvdRhGyExrNYTA6euxsF">
            <!-- Flag -->
            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _hpGev6RXFut0Jm_iRgf tkZo48dB4RhnHSlDXzoe">
              <svg class="E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" viewBox="0 0 26 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.25" y="0.779053" width="25.2567" height="16.6429" rx="1.75" fill="white" stroke="#F3F4F6" stroke-width="0.5"></rect>
                <mask id="mask0" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="26" height="18">
                  <rect x="0.25" y="0.779053" width="25.2567" height="16.6429" rx="1.75" fill="white" stroke="white" stroke-width="0.5"></rect>
                </mask>
                <g mask="url(#mask0)">
                  <rect x="18.3975" y="0.529053" width="7.35907" height="17.1429" fill="#FF3131"></rect>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 17.6719H7.35907V0.529053H0V17.6719Z" fill="#FF3131"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8804 8.37761C14.6418 8.59995 14.2588 8.38268 14.3272 8.06378L14.718 6.2432L13.4915 6.81463L12.8782 5.10034L12.265 6.81463L11.0385 6.2432L11.4292 8.06378C11.4977 8.38268 11.1147 8.59995 10.8761 8.37761L10.6525 8.16923C10.5244 8.04994 10.326 8.04994 10.198 8.16923L9.81196 8.52891L8.58545 7.95749L9.1987 9.10034L8.84717 9.4279C8.70571 9.55971 8.70571 9.78383 8.84717 9.91564L10.4252 11.3861H12.265L12.5716 13.1003H13.1849L13.4915 11.3861H15.3313L16.9093 9.91564C17.0508 9.78383 17.0508 9.55971 16.9093 9.4279L16.5578 9.10034L17.171 7.95749L15.9445 8.52891L15.5585 8.16923C15.4305 8.04994 15.232 8.04994 15.104 8.16923L14.8804 8.37761Z" fill="#FF3131"></path>
                </g>
              </svg>
              <span class="bIRey9ytskUfueo9E8EX ZaKHxcG4mQbOvJ4IzRtQ oA7zcT_42jVeFuWTXQnq _07uZcLokMvX7uULfRPY d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Canada</span>
            </div>
            <div class="t6gkcSf0Bt4MLItXvDJ_ rxe6apEJoEk8r75xaVNG WwS1mve_UI16RedcVHEs mveJTCIb2WII7J4sY22F jqg6J89cvxmDiFpnV56r">
              <div class="sQaK4IH7BIQSgBTGX8Pe rxe6apEJoEk8r75xaVNG gMXmdpOPfqG_3CKkL0VD IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh ijrOHNoSVGATsWYKl4Id W5n_NSFnC6y2nqoHw_5x IR64fXXu8VHPDt6EKlvV g40_g3BQzYCOX5eZADgY" style="width: 26%"> 26%</div>
            </div>
          </li>
          <!-- Item 3 -->
          <li class="Q_jg_EPdNf9eDMn1mLI2 t6gkcSf0Bt4MLItXvDJ_ rvdRhGyExrNYTA6euxsF">
            <!-- Flag -->
            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _hpGev6RXFut0Jm_iRgf tkZo48dB4RhnHSlDXzoe">
              <svg class="E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" viewBox="0 0 26 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.25" y="0.779053" width="25.2567" height="16.6429" rx="1.75" fill="white" stroke="#F3F4F6" stroke-width="0.5"></rect>
                <mask id="mask0" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="26" height="18">
                  <rect x="0.25" y="0.779053" width="25.2567" height="16.6429" rx="1.75" fill="white" stroke="white" stroke-width="0.5"></rect>
                </mask>
                <g mask="url(#mask0)">
                  <rect x="17.1714" y="0.529053" width="8.58558" height="17.1429" fill="#F44653"></rect>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 17.6719H8.58558V0.529053H0V17.6719Z" fill="#1035BB"></path>
                </g>
              </svg>
              <span class="bIRey9ytskUfueo9E8EX ZaKHxcG4mQbOvJ4IzRtQ oA7zcT_42jVeFuWTXQnq _07uZcLokMvX7uULfRPY d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">France</span>
            </div>
            <div class="t6gkcSf0Bt4MLItXvDJ_ rxe6apEJoEk8r75xaVNG WwS1mve_UI16RedcVHEs mveJTCIb2WII7J4sY22F jqg6J89cvxmDiFpnV56r">
              <div class="sQaK4IH7BIQSgBTGX8Pe rxe6apEJoEk8r75xaVNG gMXmdpOPfqG_3CKkL0VD IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh ijrOHNoSVGATsWYKl4Id W5n_NSFnC6y2nqoHw_5x IR64fXXu8VHPDt6EKlvV g40_g3BQzYCOX5eZADgY" style="width: 18%"> 18%</div>
            </div>
          </li>
          <!-- Item 4 -->
          <li class="Q_jg_EPdNf9eDMn1mLI2 t6gkcSf0Bt4MLItXvDJ_ rvdRhGyExrNYTA6euxsF">
            <!-- Flag -->
            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _hpGev6RXFut0Jm_iRgf tkZo48dB4RhnHSlDXzoe">
              <svg class="E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" viewBox="0 0 26 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.25" y="0.779297" width="25.2522" height="16.6429" rx="1.75" fill="white" stroke="#F3F4F6" stroke-width="0.5"></rect>
                <mask id="mask0" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="26" height="18">
                  <rect x="0.25" y="0.779297" width="25.2522" height="16.6429" rx="1.75" fill="white" stroke="white" stroke-width="0.5"></rect>
                </mask>
                <g mask="url(#mask0)">
                  <rect x="17.168" y="0.529297" width="8.58408" height="17.1429" fill="#E43D4C"></rect>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 17.6722H8.58408V0.529297H0V17.6722Z" fill="#1BB65D"></path>
                </g>
              </svg>
              <span class="bIRey9ytskUfueo9E8EX ZaKHxcG4mQbOvJ4IzRtQ oA7zcT_42jVeFuWTXQnq _07uZcLokMvX7uULfRPY d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Italy</span>
            </div>
            <div class="t6gkcSf0Bt4MLItXvDJ_ rxe6apEJoEk8r75xaVNG WwS1mve_UI16RedcVHEs mveJTCIb2WII7J4sY22F jqg6J89cvxmDiFpnV56r">
              <div class="sQaK4IH7BIQSgBTGX8Pe rxe6apEJoEk8r75xaVNG gMXmdpOPfqG_3CKkL0VD IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh ijrOHNoSVGATsWYKl4Id W5n_NSFnC6y2nqoHw_5x IR64fXXu8VHPDt6EKlvV g40_g3BQzYCOX5eZADgY" style="width: 14%"> 14%</div>
            </div>
          </li>
          <!-- Item 5 -->
          <li class="Q_jg_EPdNf9eDMn1mLI2 t6gkcSf0Bt4MLItXvDJ_ rvdRhGyExrNYTA6euxsF">
            <!-- Flag -->
            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _hpGev6RXFut0Jm_iRgf tkZo48dB4RhnHSlDXzoe">
              <svg class="E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" viewBox="0 0 26 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect y="0.529053" width="25.7567" height="17.1429" rx="2" fill="white"></rect>
                <mask id="mask0" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="26" height="18">
                  <rect y="0.529053" width="25.7567" height="17.1429" rx="2" fill="white"></rect>
                </mask>
                <g mask="url(#mask0)">
                  <rect y="0.529053" width="25.7567" height="17.1429" fill="#0A17A7"></rect>
                  <path d="M-0.951485 0.195719H0H0.613256H0.714042L0.797945 0.251562L5.00683 3.05286H6.04257L10.8708 0.241006L11.3719 -0.0508112V0.529053V0.921924C11.3719 1.14501 11.2604 1.3533 11.0746 1.4769L10.89 1.19941L11.0746 1.47691L7.07914 4.13618V4.94011L10.8133 7.92254C11.2032 8.23391 10.983 8.86239 10.4841 8.86239C10.3801 8.86239 10.2784 8.83164 10.1918 8.774M-0.951485 0.195719L10.1918 8.774M-0.951485 0.195719L-0.208022 0.78951L3.95946 4.118V4.92192L-0.184689 7.68013L-0.333333 7.77907V7.95763V8.52905V9.10892L0.16775 8.8171L4.99603 6.00524H6.03177L10.1918 8.774M-0.951485 0.195719L10.3764 8.49651L10.1918 8.774" fill="#FF2E3B" stroke="white" stroke-width="0.666667"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 3.3862V5.67191H4.29279V8.43382C4.29279 8.80201 4.59127 9.10048 4.95946 9.10048H6.07914C6.44733 9.10048 6.74581 8.80201 6.74581 8.43382V5.67191H10.9852C11.3534 5.67191 11.6519 5.37343 11.6519 5.00524V4.05286C11.6519 3.68467 11.3534 3.3862 10.9852 3.3862H6.74581V0.529053H4.29279V3.3862H0Z" fill="url(#paint0_linear)"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 3.95762H4.90604V3.3862V0.529053H6.13256V3.3862V3.95762H11.0386V5.10048H6.13256V5.67191V8.52905H4.90604V5.67191V5.10048H0V3.95762Z" fill="url(#paint1_linear)"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M5.51945 14.5289L4.43807 15.0587L4.64459 13.9367L3.76973 13.1421L4.97876 12.9784L5.51945 11.9575L6.06015 12.9784L7.26918 13.1421L6.39432 13.9367L6.60084 15.0587L5.51945 14.5289Z" fill="white"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3979 15.3862L17.5306 15.6229L17.7846 14.8147L17.5306 14.0066L18.3979 14.2433L19.2652 14.0066L19.0112 14.8147L19.2652 15.6229L18.3979 15.3862Z" fill="white"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3979 4.52898L17.5306 4.76568L17.7846 3.95755L17.5306 3.14943L18.3979 3.38613L19.2652 3.14943L19.0112 3.95755L19.2652 4.76568L18.3979 4.52898Z" fill="white"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M22.0771 7.95769L21.2098 8.19439L21.4638 7.38627L21.2098 6.57814L22.0771 6.81484L22.9444 6.57814L22.6904 7.38627L22.9444 8.19439L22.0771 7.95769Z" fill="white"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7182 9.10052L13.8509 9.33721L14.105 8.52909L13.8509 7.72097L14.7182 7.95766L15.5855 7.72097L15.3315 8.52909L15.5855 9.33721L14.7182 9.10052Z" fill="white"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.2373 10.529L19.8036 10.6474L19.9307 10.2433L19.8036 9.83924L20.2373 9.95759L20.6709 9.83924L20.5439 10.2433L20.6709 10.6474L20.2373 10.529Z" fill="white"></path>
                </g>
                <defs>
                  <linearGradient id="paint0_linear" x1="0" y1="0.529053" x2="0" y2="9.10048" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white"></stop>
                    <stop offset="1" stop-color="#F0F0F0"></stop>
                  </linearGradient>
                  <linearGradient id="paint1_linear" x1="0" y1="0.529053" x2="0" y2="8.52905" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF2E3B"></stop>
                    <stop offset="1" stop-color="#FC0D1B"></stop>
                  </linearGradient>
                </defs>
              </svg>
              <span class="bIRey9ytskUfueo9E8EX ZaKHxcG4mQbOvJ4IzRtQ oA7zcT_42jVeFuWTXQnq _07uZcLokMvX7uULfRPY d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Australia</span>
            </div>
            <div class="t6gkcSf0Bt4MLItXvDJ_ rxe6apEJoEk8r75xaVNG WwS1mve_UI16RedcVHEs mveJTCIb2WII7J4sY22F jqg6J89cvxmDiFpnV56r">
              <div class="sQaK4IH7BIQSgBTGX8Pe rxe6apEJoEk8r75xaVNG gMXmdpOPfqG_3CKkL0VD IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh ijrOHNoSVGATsWYKl4Id W5n_NSFnC6y2nqoHw_5x IR64fXXu8VHPDt6EKlvV g40_g3BQzYCOX5eZADgY" style="width: 10%"> 10%</div>
            </div>
          </li>
          <!-- Item 5 -->
          <li class="Q_jg_EPdNf9eDMn1mLI2 t6gkcSf0Bt4MLItXvDJ_ rvdRhGyExrNYTA6euxsF">
            <!-- Flag -->
            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _hpGev6RXFut0Jm_iRgf tkZo48dB4RhnHSlDXzoe">
              <svg class="E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" viewBox="0 0 26 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.25" y="0.779053" width="25.2567" height="16.6429" rx="1.75" fill="white" stroke="#F3F4F6" stroke-width="0.5"></rect>
                <mask id="mask0" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="26" height="18">
                  <rect x="0.25" y="0.779053" width="25.2567" height="16.6429" rx="1.75" fill="white" stroke="white" stroke-width="0.5"></rect>
                </mask>
                <g mask="url(#mask0)">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.24334H25.7567V0.529053H0V6.24334Z" fill="#FFA44A"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 17.6718H25.7567V11.9575H0V17.6718Z" fill="#1A9F0B"></path>
                  <path d="M12.8783 11.1481C14.0559 11.1481 15.0514 10.2532 15.0514 9.10052C15.0514 7.94786 14.0559 7.0529 12.8783 7.0529C11.7007 7.0529 10.7052 7.94786 10.7052 9.10052C10.7052 10.2532 11.7007 11.1481 12.8783 11.1481Z" fill="#181A93" fill-opacity="0.15" stroke="#181A93" stroke-width="0.666667"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8784 9.67191C13.2171 9.67191 13.4916 9.41607 13.4916 9.10048C13.4916 8.78489 13.2171 8.52905 12.8784 8.52905C12.5397 8.52905 12.2651 8.78489 12.2651 9.10048C12.2651 9.41607 12.5397 9.67191 12.8784 9.67191Z" fill="#181A93"></path>
                </g>
              </svg>
              <span class="bIRey9ytskUfueo9E8EX ZaKHxcG4mQbOvJ4IzRtQ oA7zcT_42jVeFuWTXQnq _07uZcLokMvX7uULfRPY d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">India</span>
            </div>
            <div class="t6gkcSf0Bt4MLItXvDJ_ rxe6apEJoEk8r75xaVNG WwS1mve_UI16RedcVHEs mveJTCIb2WII7J4sY22F jqg6J89cvxmDiFpnV56r">
              <div class="sQaK4IH7BIQSgBTGX8Pe rxe6apEJoEk8r75xaVNG gMXmdpOPfqG_3CKkL0VD IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh ijrOHNoSVGATsWYKl4Id W5n_NSFnC6y2nqoHw_5x IR64fXXu8VHPDt6EKlvV g40_g3BQzYCOX5eZADgY" style="width: 7%"> 7%</div>
            </div>
          </li>
          
        </ul>
        <!-- Card Footer -->
        <div class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2 wlOthpHGZ8jLLRoA3tl2 lK4YcZMYuPJXBsFBM5Hv pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V YJEBMPxJE_MyJtwHjBt6 _fGhMnSfYmaGrv7DvZ00">
          <div>
            <button class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe ijrOHNoSVGATsWYKl4Id PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW" type="button" data-dropdown-toggle="sessions-dropdown">Last 7 days <svg class="t1I6QaLqvCmfaYJcpWU_ E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div class="_SmdlCf6eUKB_V9S5IDj Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r PoeKYEQfG4WfmL9xM6vu" id="sessions-dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(97.6px, 2308.8px, 0px);">
                <div class="i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY" role="none">
                  <p class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl vfNYjqjYMlN1XskEucCt OyABRrnTV_kvHV7dJ0uE" role="none">
                    Sep 16, 2021 - Sep 22, 2021
                  </p>
                </div>
                <ul class="_bVaO2NfVVP88LtHWYlv" role="none">
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Yesterday</a>
                  </li>
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Today</a>
                  </li>
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 7 days</a>
                  </li>
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 30 days</a>
                  </li>
                  <li>
                    <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 90 days</a>
                  </li>
                </ul>
                <div class="_bVaO2NfVVP88LtHWYlv" role="none">
                  <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Custom...</a>
                </div>
            </div>
          </div>
          <div class="VQS2tmQ_zFyBOC2tkmto">
            <a href="#" class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe sdSaZcRa4_We5kKaX4pf mveJTCIb2WII7J4sY22F OQflBVxALl1Ntbyc2J2_ gx_pYWtAG2cJIqhquLbx _7KA5gD55t2lxf9Jkj20 fZf6W_ZtzEh6EEqmWMA9 OPrb_iG5WDy_7F05BDOX">
              Location Overview
              <svg class="c2LzVf9SsdSEMBrRjNwS E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus KcFFi0RQeeLbabX2ce8e cetJU7yt52TBxxdaIygU" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
          </div>
        </div>
      </div>
          <!-- Right Content -->
          <div class="xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn AqVNvLG_H6VHhym2yKMp r8lSKzxeZmXfyH8vtxDQ">
            <!-- Top Sales Card -->
            <div class="_wYiJGbRZyFZeCc8y7Sf hD0sTTDgbxakubcHVW2X uLPch_bqyJDXwe5tynMV _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _YxZw_O8dWkTljptcO7z _1jTZ8KXRZul60S6czNi">
              <div class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2 hD0sTTDgbxakubcHVW2X">
                <h3 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Latest Customers</h3>
                <a href="#" class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe mveJTCIb2WII7J4sY22F OQflBVxALl1Ntbyc2J2_ _7KA5gD55t2lxf9Jkj20 fZf6W_ZtzEh6EEqmWMA9 OPrb_iG5WDy_7F05BDOX">
                  View all
                </a>
              </div>
              <div class="FF0B1uH_gtoM9lki9mia">
                <ul role="list" class="Zy1Pypi71Xu6guex6urN NIAblPiyeuYQ0zW671xb XpuPpk9eXhVCrleKmXDr">
                  <li class="i8v96MUlFwGv9qJUkAx7 yMBL9uNh7GmEQ_E_GNSh">
                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                      <div class="VQS2tmQ_zFyBOC2tkmto">
                        <img class="yNvZ2JlUalNo5uPPv1sf mWvJQyBFgwNGEt0h7bSP RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/neil-sims.png" alt="Neil image">
                      </div>
                      <div class="_74lpPUMEtHf6F0_fjLe G4dLHP1O7x3gaD0_p7Kc">
                        <p class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl vfNYjqjYMlN1XskEucCt OyABRrnTV_kvHV7dJ0uE">
                          Neil Sims
                        </p>
                        <p class="c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 vfNYjqjYMlN1XskEucCt XIIs8ZOri3wm8Wnj9N_y">
                          email@flowbite.com
                        </p>
                      </div>
                      <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 d3C8uAdJKNl1jzfE9ynq yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        $320
                      </div>
                    </div>
                  </li>
                  <li class="i8v96MUlFwGv9qJUkAx7 yMBL9uNh7GmEQ_E_GNSh">
                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                      <div class="VQS2tmQ_zFyBOC2tkmto">
                        <img class="yNvZ2JlUalNo5uPPv1sf mWvJQyBFgwNGEt0h7bSP RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/bonnie-green.png" alt="Neil image">
                      </div>
                      <div class="_74lpPUMEtHf6F0_fjLe G4dLHP1O7x3gaD0_p7Kc">
                        <p class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl vfNYjqjYMlN1XskEucCt OyABRrnTV_kvHV7dJ0uE">
                          Bonnie Green
                        </p>
                        <p class="c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 vfNYjqjYMlN1XskEucCt XIIs8ZOri3wm8Wnj9N_y">
                          email@flowbite.com
                        </p>
                      </div>
                      <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 d3C8uAdJKNl1jzfE9ynq yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        $3467
                      </div>
                    </div>
                  </li>
                  <li class="i8v96MUlFwGv9qJUkAx7 yMBL9uNh7GmEQ_E_GNSh">
                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                      <div class="VQS2tmQ_zFyBOC2tkmto">
                        <img class="yNvZ2JlUalNo5uPPv1sf mWvJQyBFgwNGEt0h7bSP RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/michael-gough.png" alt="Neil image">
                      </div>
                      <div class="_74lpPUMEtHf6F0_fjLe G4dLHP1O7x3gaD0_p7Kc">
                        <p class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl vfNYjqjYMlN1XskEucCt OyABRrnTV_kvHV7dJ0uE">
                          Michael Gough
                        </p>
                        <p class="c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 vfNYjqjYMlN1XskEucCt XIIs8ZOri3wm8Wnj9N_y">
                          email@flowbite.com
                        </p>
                      </div>
                      <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 d3C8uAdJKNl1jzfE9ynq yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        $67
                      </div>
                    </div>
                  </li>
                  <li class="i8v96MUlFwGv9qJUkAx7 yMBL9uNh7GmEQ_E_GNSh">
                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                      <div class="VQS2tmQ_zFyBOC2tkmto">
                        <img class="yNvZ2JlUalNo5uPPv1sf mWvJQyBFgwNGEt0h7bSP RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/thomas-lean.png" alt="Neil image">
                      </div>
                      <div class="_74lpPUMEtHf6F0_fjLe G4dLHP1O7x3gaD0_p7Kc">
                        <p class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl vfNYjqjYMlN1XskEucCt OyABRrnTV_kvHV7dJ0uE">
                          Thomes Lean
                        </p>
                        <p class="c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 vfNYjqjYMlN1XskEucCt XIIs8ZOri3wm8Wnj9N_y">
                          email@flowbite.com
                        </p>
                      </div>
                      <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 d3C8uAdJKNl1jzfE9ynq yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        $2367
                      </div>
                    </div>
                  </li>
                  <li class="i8v96MUlFwGv9qJUkAx7 yMBL9uNh7GmEQ_E_GNSh">
                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                      <div class="VQS2tmQ_zFyBOC2tkmto">
                        <img class="yNvZ2JlUalNo5uPPv1sf mWvJQyBFgwNGEt0h7bSP RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/lana-byrd.png" alt="Neil image">
                      </div>
                      <div class="_74lpPUMEtHf6F0_fjLe G4dLHP1O7x3gaD0_p7Kc">
                        <p class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl vfNYjqjYMlN1XskEucCt OyABRrnTV_kvHV7dJ0uE">
                          Lana Byrd
                        </p>
                        <p class="c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 vfNYjqjYMlN1XskEucCt XIIs8ZOri3wm8Wnj9N_y">
                          email@flowbite.com
                        </p>
                      </div>
                      <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 d3C8uAdJKNl1jzfE9ynq yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        $367
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- Card Footer -->
              <div class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2 wlOthpHGZ8jLLRoA3tl2 pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V YJEBMPxJE_MyJtwHjBt6 _fGhMnSfYmaGrv7DvZ00">
                <div>
                  <button class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe ijrOHNoSVGATsWYKl4Id PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW" type="button" data-dropdown-toggle="latest-customers-dropdown">Last 7 days <svg class="t1I6QaLqvCmfaYJcpWU_ E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                  <!-- Dropdown menu -->
                  <div class="_SmdlCf6eUKB_V9S5IDj Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r PoeKYEQfG4WfmL9xM6vu" id="latest-customers-dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(97.6px, 2848.8px, 0px);">
                      <div class="i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY" role="none">
                        <p class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl vfNYjqjYMlN1XskEucCt OyABRrnTV_kvHV7dJ0uE" role="none">
                          Sep 16, 2021 - Sep 22, 2021
                        </p>
                      </div>
                      <ul class="_bVaO2NfVVP88LtHWYlv" role="none">
                        <li>
                          <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Yesterday</a>
                        </li>
                        <li>
                          <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Today</a>
                        </li>
                        <li>
                          <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 7 days</a>
                        </li>
                        <li>
                          <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 30 days</a>
                        </li>
                        <li>
                          <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 90 days</a>
                        </li>
                      </ul>
                      <div class="_bVaO2NfVVP88LtHWYlv" role="none">
                        <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Custom...</a>
                      </div>
                  </div>
                </div>
                <div class="VQS2tmQ_zFyBOC2tkmto">
                  <a href="#" class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe sdSaZcRa4_We5kKaX4pf mveJTCIb2WII7J4sY22F OQflBVxALl1Ntbyc2J2_ gx_pYWtAG2cJIqhquLbx _7KA5gD55t2lxf9Jkj20 fZf6W_ZtzEh6EEqmWMA9 OPrb_iG5WDy_7F05BDOX">
                    Sales Report
                    <svg class="c2LzVf9SsdSEMBrRjNwS E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus KcFFi0RQeeLbabX2ce8e cetJU7yt52TBxxdaIygU" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  </a>
                </div>
              </div>
            </div>
            <!-- Sessions by device Card -->
            <div class="_wYiJGbRZyFZeCc8y7Sf _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _YxZw_O8dWkTljptcO7z SWDELhWFjL8JxEtm91_o _1jTZ8KXRZul60S6czNi">
              <!-- Card Title -->
              <h3 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Acquisition Overview</h3>
              <div id="traffic-channels-chart" class="YHiWkESJ_FRThRhSUhlR" style="min-height: 283.7px;"><div id="apexchartsdtx0px0d" class="apexcharts-canvas apexchartsdtx0px0d apexcharts-theme-light" style="width: 280px; height: 283.7px;"><svg id="SvgjsSvg4489" width="280" height="283.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG4491" class="apexcharts-inner apexcharts-graphical" transform="translate(0.5, 0)"><defs id="SvgjsDefs4490"><clipPath id="gridRectMaskdtx0px0d"><rect id="SvgjsRect4493" width="287" height="305" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskdtx0px0d"></clipPath><clipPath id="nonForecastMaskdtx0px0d"></clipPath><clipPath id="gridRectMarkerMaskdtx0px0d"><rect id="SvgjsRect4494" width="285" height="307" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG4495" class="apexcharts-pie"><g id="SvgjsG4496" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle4497" r="6.553658536585367" cx="140.5" cy="140.5" fill="transparent"></circle><g id="SvgjsG4498" class="apexcharts-slices"><g id="SvgjsG4499" class="apexcharts-series apexcharts-pie-series" seriesName="Organic" rel="1" data:realIndex="0"><path id="SvgjsPath4500" d="M 140.5 9.426829268292664 A 131.07317073170734 131.07317073170734 0 0 1 265.15799313585745 181.00383726270653 L 146.73289965679288 142.52519186313532 A 6.553658536585367 6.553658536585367 0 0 0 140.5 133.94634146341463 L 140.5 9.426829268292664 z" fill="rgba(22,189,202,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="108" data:startAngle="0" data:strokeWidth="2" data:value="30" data:pathOrig="M 140.5 9.426829268292664 A 131.07317073170734 131.07317073170734 0 0 1 265.15799313585745 181.00383726270653 L 146.73289965679288 142.52519186313532 A 6.553658536585367 6.553658536585367 0 0 0 140.5 133.94634146341463 L 140.5 9.426829268292664 z" stroke="#111827"></path></g><g id="SvgjsG4501" class="apexcharts-series apexcharts-pie-series" seriesName="Referral" rel="2" data:realIndex="1"><path id="SvgjsPath4502" d="M 265.15799313585745 181.00383726270653 A 131.07317073170734 131.07317073170734 0 0 1 107.90342796039195 267.4552660464699 L 138.8701713980196 146.8477633023235 A 6.553658536585367 6.553658536585367 0 0 0 146.73289965679288 142.52519186313532 L 265.15799313585745 181.00383726270653 z" fill="rgba(253,186,140,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="86.4" data:startAngle="108" data:strokeWidth="2" data:value="24" data:pathOrig="M 265.15799313585745 181.00383726270653 A 131.07317073170734 131.07317073170734 0 0 1 107.90342796039195 267.4552660464699 L 138.8701713980196 146.8477633023235 A 6.553658536585367 6.553658536585367 0 0 0 146.73289965679288 142.52519186313532 L 265.15799313585745 181.00383726270653 z" stroke="#111827"></path></g><g id="SvgjsG4503" class="apexcharts-series apexcharts-pie-series" seriesName="Direct" rel="3" data:realIndex="2"><path id="SvgjsPath4504" d="M 107.90342796039195 267.4552660464699 A 131.07317073170734 131.07317073170734 0 0 1 11.748495477659162 165.06066303862644 L 134.06242477388295 141.72803315193133 A 6.553658536585367 6.553658536585367 0 0 0 138.8701713980196 146.8477633023235 L 107.90342796039195 267.4552660464699 z" fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="64.79999999999998" data:startAngle="194.4" data:strokeWidth="2" data:value="18" data:pathOrig="M 107.90342796039195 267.4552660464699 A 131.07317073170734 131.07317073170734 0 0 1 11.748495477659162 165.06066303862644 L 134.06242477388295 141.72803315193133 A 6.553658536585367 6.553658536585367 0 0 0 138.8701713980196 146.8477633023235 L 107.90342796039195 267.4552660464699 z" stroke="#111827"></path></g><g id="SvgjsG4505" class="apexcharts-series apexcharts-pie-series" seriesName="Social" rel="4" data:realIndex="3"><path id="SvgjsPath4506" d="M 11.748495477659162 165.06066303862644 A 131.07317073170734 131.07317073170734 0 0 1 29.831261667126086 70.26748301909446 L 134.9665630833563 136.9883741509547 A 6.553658536585367 6.553658536585367 0 0 0 134.06242477388295 141.72803315193133 L 11.748495477659162 165.06066303862644 z" fill="rgba(214,31,105,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="43.19999999999999" data:startAngle="259.2" data:strokeWidth="2" data:value="12" data:pathOrig="M 11.748495477659162 165.06066303862644 A 131.07317073170734 131.07317073170734 0 0 1 29.831261667126086 70.26748301909446 L 134.9665630833563 136.9883741509547 A 6.553658536585367 6.553658536585367 0 0 0 134.06242477388295 141.72803315193133 L 11.748495477659162 165.06066303862644 z" stroke="#111827"></path></g><g id="SvgjsG4507" class="apexcharts-series apexcharts-pie-series" seriesName="Other" rel="5" data:realIndex="4"><path id="SvgjsPath4508" d="M 29.831261667126086 70.26748301909446 A 131.07317073170734 131.07317073170734 0 0 1 84.6917582226657 21.901449269453977 L 137.7095879111333 134.5700724634727 A 6.553658536585367 6.553658536585367 0 0 0 134.9665630833563 136.9883741509547 L 29.831261667126086 70.26748301909446 z" fill="rgba(144,97,249,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-4" index="0" j="4" data:angle="32.39999999999998" data:startAngle="302.4" data:strokeWidth="2" data:value="9" data:pathOrig="M 29.831261667126086 70.26748301909446 A 131.07317073170734 131.07317073170734 0 0 1 84.6917582226657 21.901449269453977 L 137.7095879111333 134.5700724634727 A 6.553658536585367 6.553658536585367 0 0 0 134.9665630833563 136.9883741509547 L 29.831261667126086 70.26748301909446 z" stroke="#111827"></path></g><g id="SvgjsG4509" class="apexcharts-series apexcharts-pie-series" seriesName="Email" rel="6" data:realIndex="5"><path id="SvgjsPath4510" d="M 84.6917582226657 21.901449269453977 A 131.07317073170734 131.07317073170734 0 0 1 140.47712341621315 9.426831264651213 L 140.49885617081065 133.94634156323255 A 6.553658536585367 6.553658536585367 0 0 0 137.7095879111333 134.5700724634727 L 84.6917582226657 21.901449269453977 z" fill="rgba(104,117,245,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-5" index="0" j="5" data:angle="25.19999999999999" data:startAngle="334.79999999999995" data:strokeWidth="2" data:value="7" data:pathOrig="M 84.6917582226657 21.901449269453977 A 131.07317073170734 131.07317073170734 0 0 1 140.47712341621315 9.426831264651213 L 140.49885617081065 133.94634156323255 A 6.553658536585367 6.553658536585367 0 0 0 137.7095879111333 134.5700724634727 L 84.6917582226657 21.901449269453977 z" stroke="#111827"></path></g></g></g></g><line id="SvgjsLine4511" x1="0" y1="0" x2="281" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4512" x1="0" y1="0" x2="281" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG4492" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 6;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(22, 189, 202);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 5;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(253, 186, 140);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(26, 86, 219);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(214, 31, 105);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(144, 97, 249);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(104, 117, 245);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
              <div class="_Vb9igHms0hI1PQcvp_S _IebywwKB6L2zG0BTy63 t6gkcSf0Bt4MLItXvDJ_">
                <table class="Q_jg_EPdNf9eDMn1mLI2 t6gkcSf0Bt4MLItXvDJ_ mW4LfSTbez3WHPeTDguY SDE5yUtgfTb3G7uZsTXF">
                  <thead>
                    <tr>
                      <th class="i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY gMXmdpOPfqG_3CKkL0VD yM_AorRf2jSON3pDsdrz upQp7iWehfaU8VTbfx_w rYHHksRBEMl_guI3q0UQ sdSaZcRa4_We5kKaX4pf u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H jtAJHOc7mn7b4IKRO59D XLlgRXUdQQs0S2kEfqxT _vn8PvoZLLDetPCJlfPP OGKixnDyVtiO6FLfdedj jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE">Top Channels</th>
                      <th class="i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY gMXmdpOPfqG_3CKkL0VD yM_AorRf2jSON3pDsdrz upQp7iWehfaU8VTbfx_w rYHHksRBEMl_guI3q0UQ sdSaZcRa4_We5kKaX4pf u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H jtAJHOc7mn7b4IKRO59D _vn8PvoZLLDetPCJlfPP OGKixnDyVtiO6FLfdedj jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE">Users</th>
                      <th class="i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY gMXmdpOPfqG_3CKkL0VD yM_AorRf2jSON3pDsdrz upQp7iWehfaU8VTbfx_w rYHHksRBEMl_guI3q0UQ sdSaZcRa4_We5kKaX4pf u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H jtAJHOc7mn7b4IKRO59D _NarM3uVIDdkHugrf78E _vn8PvoZLLDetPCJlfPP OGKixnDyVtiO6FLfdedj min-w-140-px jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE"></th>
                    </tr>
                  </thead>
                  <tbody class="Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH XpuPpk9eXhVCrleKmXDr">
                    <tr class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                      <th class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL upQp7iWehfaU8VTbfx_w u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ">Organic Search</th>
                      <td class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ OyABRrnTV_kvHV7dJ0uE">5,649</td>
                      <td class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY gMXmdpOPfqG_3CKkL0VD u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ">
                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                          <span class="fhCwost7CSNRc2WSHLFW gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe">30%</span>
                          <div class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_">
                            <div class="t6gkcSf0Bt4MLItXvDJ_ iRRyDh3hk0uKgmcxvdhD WwS1mve_UI16RedcVHEs D0cB2fwpzIAF6I3dz1f_ jqg6J89cvxmDiFpnV56r">
                              <div class="iRRyDh3hk0uKgmcxvdhD D0cB2fwpzIAF6I3dz1f_ g40_g3BQzYCOX5eZADgY" style="width: 30%"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                      <th class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL upQp7iWehfaU8VTbfx_w u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ">Referral</th>
                      <td class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ OyABRrnTV_kvHV7dJ0uE">4,025</td>
                      <td class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY gMXmdpOPfqG_3CKkL0VD u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ">
                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                          <span class="fhCwost7CSNRc2WSHLFW gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe">24%</span>
                          <div class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_">
                            <div class="t6gkcSf0Bt4MLItXvDJ_ iRRyDh3hk0uKgmcxvdhD WwS1mve_UI16RedcVHEs D0cB2fwpzIAF6I3dz1f_ jqg6J89cvxmDiFpnV56r">
                              <div class="iRRyDh3hk0uKgmcxvdhD _9l2MVOj9uksi1brcZMM D0cB2fwpzIAF6I3dz1f_" style="width: 24%"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                      <th class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL upQp7iWehfaU8VTbfx_w u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ">Direct</th>
                      <td class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ OyABRrnTV_kvHV7dJ0uE">3,105</td>
                      <td class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY gMXmdpOPfqG_3CKkL0VD u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ">
                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                          <span class="fhCwost7CSNRc2WSHLFW gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe">18%</span>
                          <div class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_">
                            <div class="t6gkcSf0Bt4MLItXvDJ_ iRRyDh3hk0uKgmcxvdhD WwS1mve_UI16RedcVHEs D0cB2fwpzIAF6I3dz1f_ jqg6J89cvxmDiFpnV56r">
                              <div class="iRRyDh3hk0uKgmcxvdhD TdN_rgqCTju0IuQUjOfH D0cB2fwpzIAF6I3dz1f_" style="width: 18%"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                      <th class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL upQp7iWehfaU8VTbfx_w u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ">Social</th>
                      <td class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ OyABRrnTV_kvHV7dJ0uE">1251</td>
                      <td class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY gMXmdpOPfqG_3CKkL0VD u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ">
                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                          <span class="fhCwost7CSNRc2WSHLFW gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe">12%</span>
                          <div class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_">
                            <div class="t6gkcSf0Bt4MLItXvDJ_ iRRyDh3hk0uKgmcxvdhD WwS1mve_UI16RedcVHEs D0cB2fwpzIAF6I3dz1f_ jqg6J89cvxmDiFpnV56r">
                              <div class="iRRyDh3hk0uKgmcxvdhD hkPJMkgbvafVO7Vf2I80 D0cB2fwpzIAF6I3dz1f_" style="width: 12%"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                      <th class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL upQp7iWehfaU8VTbfx_w u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ">Other</th>
                      <td class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ OyABRrnTV_kvHV7dJ0uE">734</td>
                      <td class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY gMXmdpOPfqG_3CKkL0VD u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ">
                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                          <span class="fhCwost7CSNRc2WSHLFW gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe">9%</span>
                          <div class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_">
                            <div class="t6gkcSf0Bt4MLItXvDJ_ iRRyDh3hk0uKgmcxvdhD WwS1mve_UI16RedcVHEs D0cB2fwpzIAF6I3dz1f_ jqg6J89cvxmDiFpnV56r">
                              <div class="iRRyDh3hk0uKgmcxvdhD eD79DAAyg5R4oxRIpzVL D0cB2fwpzIAF6I3dz1f_" style="width: 9%"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                      <th class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL upQp7iWehfaU8VTbfx_w u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ">Email</th>
                      <td class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ OyABRrnTV_kvHV7dJ0uE">456</td>
                      <td class="_wYiJGbRZyFZeCc8y7Sf RZmKBZs1E1eXw8vkE6jY gMXmdpOPfqG_3CKkL0VD u0Aizb1ol0gBXDISYKJM BHrWGjM1Iab_fAz0_91H KRYm_slIW7o1BHfoH1bZ">
                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                          <span class="fhCwost7CSNRc2WSHLFW gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe">7%</span>
                          <div class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_">
                            <div class="t6gkcSf0Bt4MLItXvDJ_ iRRyDh3hk0uKgmcxvdhD WwS1mve_UI16RedcVHEs D0cB2fwpzIAF6I3dz1f_ jqg6J89cvxmDiFpnV56r">
                              <div class="iRRyDh3hk0uKgmcxvdhD _I92_RswYrnpS0B5dKZO D0cB2fwpzIAF6I3dz1f_" style="width: 7%"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- Card Footer -->
              <div class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2 wlOthpHGZ8jLLRoA3tl2 pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V YJEBMPxJE_MyJtwHjBt6 _fGhMnSfYmaGrv7DvZ00">
                <div>
                  <button class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe ijrOHNoSVGATsWYKl4Id PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW" type="button" data-dropdown-toggle="aquisitions-dropdown">Last 7 days <svg class="t1I6QaLqvCmfaYJcpWU_ E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                  <!-- Dropdown menu -->
                  <div class="_SmdlCf6eUKB_V9S5IDj Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r PoeKYEQfG4WfmL9xM6vu" id="aquisitions-dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(428px, 3140.8px, 0px);">
                      <div class="i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY" role="none">
                        <p class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl vfNYjqjYMlN1XskEucCt OyABRrnTV_kvHV7dJ0uE" role="none">
                          Sep 16, 2021 - Sep 22, 2021
                        </p>
                      </div>
                      <ul class="_bVaO2NfVVP88LtHWYlv" role="none">
                        <li>
                          <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Yesterday</a>
                        </li>
                        <li>
                          <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Today</a>
                        </li>
                        <li>
                          <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 7 days</a>
                        </li>
                        <li>
                          <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 30 days</a>
                        </li>
                        <li>
                          <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 90 days</a>
                        </li>
                      </ul>
                      <div class="_bVaO2NfVVP88LtHWYlv" role="none">
                        <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Custom...</a>
                      </div>
                  </div>
                </div>
                <div class="VQS2tmQ_zFyBOC2tkmto">
                  <a href="#" class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe sdSaZcRa4_We5kKaX4pf mveJTCIb2WII7J4sY22F OQflBVxALl1Ntbyc2J2_ gx_pYWtAG2cJIqhquLbx _7KA5gD55t2lxf9Jkj20 fZf6W_ZtzEh6EEqmWMA9 OPrb_iG5WDy_7F05BDOX">
                    Acquisition Report
                    <svg class="c2LzVf9SsdSEMBrRjNwS E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus KcFFi0RQeeLbabX2ce8e cetJU7yt52TBxxdaIygU" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="_wYiJGbRZyFZeCc8y7Sf _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _YxZw_O8dWkTljptcO7z SWDELhWFjL8JxEtm91_o _1jTZ8KXRZul60S6czNi">
      <!-- Card Title -->
      <div class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2 hD0sTTDgbxakubcHVW2X">
        <div>
          <h3 class="TR_P65x9ie7j6uxFo_Cs vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Transactions</h3>
          <span class="d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">This is a list of latest transactions</span>
        </div>
        <div class="VQS2tmQ_zFyBOC2tkmto">
          <a href="#" class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe mveJTCIb2WII7J4sY22F OQflBVxALl1Ntbyc2J2_ _7KA5gD55t2lxf9Jkj20 fZf6W_ZtzEh6EEqmWMA9 OPrb_iG5WDy_7F05BDOX">View all</a>
        </div>
      </div>
      <!-- Table -->
      <div class="YRrCJSr_j5nopfm4duUc e8VqoQNK0mbkRFDL3LMV R2oNx0cNtxO_M_VVt390">
        <div class="_IebywwKB6L2zG0BTy63 mveJTCIb2WII7J4sY22F">
          <div class="VPGGthdu3cy_ZP7AL7dt TK9h2c2b79uBgR_cJzCE u0Aizb1ol0gBXDISYKJM">
            <div class="wBVMFkIGfrKshbvi2gS1 mngKhi_Rv06PF57lblDI PTS4x_A1HVmoZYJHkYaG">
              <table class="TK9h2c2b79uBgR_cJzCE Zy1Pypi71Xu6guex6urN NIAblPiyeuYQ0zW671xb PoeKYEQfG4WfmL9xM6vu">
                <thead class="jtAJHOc7mn7b4IKRO59D jqg6J89cvxmDiFpnV56r">
                  <tr>
                    <th scope="col" class="_wYiJGbRZyFZeCc8y7Sf gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe _fj5qD1qKucIHy44xhzZ upQp7iWehfaU8VTbfx_w PeR2JZ9BZHYIH8Ea3F36 sdSaZcRa4_We5kKaX4pf OyABRrnTV_kvHV7dJ0uE">
                      Transaction
                    </th>
                    <th scope="col" class="_wYiJGbRZyFZeCc8y7Sf gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe _fj5qD1qKucIHy44xhzZ upQp7iWehfaU8VTbfx_w PeR2JZ9BZHYIH8Ea3F36 sdSaZcRa4_We5kKaX4pf OyABRrnTV_kvHV7dJ0uE">
                      Date &amp; Time
                    </th>
                    <th scope="col" class="_wYiJGbRZyFZeCc8y7Sf gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe _fj5qD1qKucIHy44xhzZ upQp7iWehfaU8VTbfx_w PeR2JZ9BZHYIH8Ea3F36 sdSaZcRa4_We5kKaX4pf OyABRrnTV_kvHV7dJ0uE">
                      Amount
                    </th>
                    <th scope="col" class="_wYiJGbRZyFZeCc8y7Sf gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe _fj5qD1qKucIHy44xhzZ upQp7iWehfaU8VTbfx_w PeR2JZ9BZHYIH8Ea3F36 sdSaZcRa4_We5kKaX4pf OyABRrnTV_kvHV7dJ0uE">
                      Status
                    </th>
                  </tr>
                </thead>
                <tbody class="_Ybd3WwuTVljUT4vEaM3 _1jTZ8KXRZul60S6czNi">
                  <tr>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      Payment from <span class="yM_AorRf2jSON3pDsdrz">Bonnie Green</span>
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 BHrWGjM1Iab_fAz0_91H XIIs8ZOri3wm8Wnj9N_y">
                      Apr 23 ,2021
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      $2300
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf BHrWGjM1Iab_fAz0_91H">
                      <span class="Dnqe3vvw22y12_oWDYvR LNUrv_nGG839SRkGqY8B UptwuMAvsdRjvAaYNP6r gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe fhCwost7CSNRc2WSHLFW St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU W5n_NSFnC6y2nqoHw_5x">Completed</span>
                    </td>
                  </tr>
                  <tr class="jtAJHOc7mn7b4IKRO59D jqg6J89cvxmDiFpnV56r">
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      Payment refund to <span class="yM_AorRf2jSON3pDsdrz">#00910</span>
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 BHrWGjM1Iab_fAz0_91H XIIs8ZOri3wm8Wnj9N_y">
                      Apr 23 ,2021
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      -$670
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf BHrWGjM1Iab_fAz0_91H">
                      <span class="Dnqe3vvw22y12_oWDYvR LNUrv_nGG839SRkGqY8B UptwuMAvsdRjvAaYNP6r gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe fhCwost7CSNRc2WSHLFW St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU W5n_NSFnC6y2nqoHw_5x">Completed</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      Payment failed from <span class="yM_AorRf2jSON3pDsdrz">#087651</span>
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 BHrWGjM1Iab_fAz0_91H XIIs8ZOri3wm8Wnj9N_y">
                      Apr 18 ,2021
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      $234
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf BHrWGjM1Iab_fAz0_91H">
                      <span class="__CUdK3mSkcMQpxc1Lod Ef5_B3RB6nYIDCJEExiM ZN_OBnKt2VQjvkKnCO6j gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe fhCwost7CSNRc2WSHLFW St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU W5n_NSFnC6y2nqoHw_5x">Cancelled</span>
                    </td>
                  </tr>
                  <tr class="jtAJHOc7mn7b4IKRO59D jqg6J89cvxmDiFpnV56r">
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      Payment from <span class="yM_AorRf2jSON3pDsdrz">Lana Byrd</span>
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 BHrWGjM1Iab_fAz0_91H XIIs8ZOri3wm8Wnj9N_y">
                      Apr 15 ,2021
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      $5000
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf BHrWGjM1Iab_fAz0_91H">
                      <span class="k1sFscPcBz_oMeiTaKv8 _41_Z5QiP4N8JuoiJWkX gxqPdw4EewWD7Ph9huFn gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe fhCwost7CSNRc2WSHLFW St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU W5n_NSFnC6y2nqoHw_5x">In progress</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      Payment from <span class="yM_AorRf2jSON3pDsdrz">Jese Leos</span>
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 BHrWGjM1Iab_fAz0_91H XIIs8ZOri3wm8Wnj9N_y">
                      Apr 15 ,2021
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      $2300
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf BHrWGjM1Iab_fAz0_91H">
                      <span class="Dnqe3vvw22y12_oWDYvR LNUrv_nGG839SRkGqY8B UptwuMAvsdRjvAaYNP6r gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe fhCwost7CSNRc2WSHLFW St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU W5n_NSFnC6y2nqoHw_5x">Completed</span>
                    </td>
                  </tr>
                  <tr class="jtAJHOc7mn7b4IKRO59D jqg6J89cvxmDiFpnV56r">
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      Payment from <span class="yM_AorRf2jSON3pDsdrz">THEMESBERG LLC</span>
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 BHrWGjM1Iab_fAz0_91H XIIs8ZOri3wm8Wnj9N_y">
                      Apr 11 ,2021
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      $560
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf BHrWGjM1Iab_fAz0_91H">
                      <span class="Dnqe3vvw22y12_oWDYvR LNUrv_nGG839SRkGqY8B UptwuMAvsdRjvAaYNP6r gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe fhCwost7CSNRc2WSHLFW St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU W5n_NSFnC6y2nqoHw_5x">Completed</span>
                    </td>
                  </tr>

                  <tr>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      Payment from <span class="yM_AorRf2jSON3pDsdrz">Lana Lysle</span>
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 BHrWGjM1Iab_fAz0_91H XIIs8ZOri3wm8Wnj9N_y">
                      Apr 6 ,2021
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      $1437
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf BHrWGjM1Iab_fAz0_91H">
                      <span class="Dnqe3vvw22y12_oWDYvR LNUrv_nGG839SRkGqY8B UptwuMAvsdRjvAaYNP6r gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe fhCwost7CSNRc2WSHLFW St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU W5n_NSFnC6y2nqoHw_5x">Completed</span>
                    </td>
                  </tr>
                  <tr class="jtAJHOc7mn7b4IKRO59D jqg6J89cvxmDiFpnV56r">
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      Payment to <span class="yM_AorRf2jSON3pDsdrz">Joseph Mcfall</span>
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 BHrWGjM1Iab_fAz0_91H XIIs8ZOri3wm8Wnj9N_y">
                      Apr 1 ,2021
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      $980
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf BHrWGjM1Iab_fAz0_91H">
                      <span class="Dnqe3vvw22y12_oWDYvR LNUrv_nGG839SRkGqY8B UptwuMAvsdRjvAaYNP6r gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe fhCwost7CSNRc2WSHLFW St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU W5n_NSFnC6y2nqoHw_5x">Completed</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      Payment from <span class="yM_AorRf2jSON3pDsdrz">Alphabet LLC</span>
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 BHrWGjM1Iab_fAz0_91H XIIs8ZOri3wm8Wnj9N_y">
                      Mar 23 ,2021
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      $11,436
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf BHrWGjM1Iab_fAz0_91H">
                      <span class="k1sFscPcBz_oMeiTaKv8 _41_Z5QiP4N8JuoiJWkX gxqPdw4EewWD7Ph9huFn gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe fhCwost7CSNRc2WSHLFW St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU W5n_NSFnC6y2nqoHw_5x">In progress</span>
                    </td>
                  </tr>
                                    <tr class="jtAJHOc7mn7b4IKRO59D jqg6J89cvxmDiFpnV56r">
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      Payment from <span class="yM_AorRf2jSON3pDsdrz">Bonnie Green</span>
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 BHrWGjM1Iab_fAz0_91H XIIs8ZOri3wm8Wnj9N_y">
                      Mar 23 ,2021
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                      $560
                    </td>
                    <td class="_wYiJGbRZyFZeCc8y7Sf BHrWGjM1Iab_fAz0_91H">
                      <span class="Dnqe3vvw22y12_oWDYvR LNUrv_nGG839SRkGqY8B UptwuMAvsdRjvAaYNP6r gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe fhCwost7CSNRc2WSHLFW St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU W5n_NSFnC6y2nqoHw_5x">Completed</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Card Footer -->
      <div class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2 wlOthpHGZ8jLLRoA3tl2 YJEBMPxJE_MyJtwHjBt6">
        <div>
          <button class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe ijrOHNoSVGATsWYKl4Id PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW" type="button" data-dropdown-toggle="transactions-dropdown">Last 7 days <svg class="t1I6QaLqvCmfaYJcpWU_ E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          <!-- Dropdown menu -->
          <div class="_SmdlCf6eUKB_V9S5IDj Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r PoeKYEQfG4WfmL9xM6vu" id="transactions-dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(97.6px, 3985.6px, 0px);">
              <div class="i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY" role="none">
                <p class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl vfNYjqjYMlN1XskEucCt OyABRrnTV_kvHV7dJ0uE" role="none">
                  Sep 16, 2021 - Sep 22, 2021
                </p>
              </div>
              <ul class="_bVaO2NfVVP88LtHWYlv" role="none">
                <li>
                  <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Yesterday</a>
                </li>
                <li>
                  <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Today</a>
                </li>
                <li>
                  <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 7 days</a>
                </li>
                <li>
                  <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 30 days</a>
                </li>
                <li>
                  <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Last 90 days</a>
                </li>
              </ul>
              <div class="_bVaO2NfVVP88LtHWYlv" role="none">
                <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">Custom...</a>
              </div>
          </div>
        </div>
        <div class="VQS2tmQ_zFyBOC2tkmto">
          <a href="#" class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe sdSaZcRa4_We5kKaX4pf mveJTCIb2WII7J4sY22F OQflBVxALl1Ntbyc2J2_ gx_pYWtAG2cJIqhquLbx _7KA5gD55t2lxf9Jkj20 fZf6W_ZtzEh6EEqmWMA9 OPrb_iG5WDy_7F05BDOX">
           Transactions Report
            <svg class="c2LzVf9SsdSEMBrRjNwS E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus KcFFi0RQeeLbabX2ce8e cetJU7yt52TBxxdaIygU" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          </a>
        </div>
      </div>
    </div>
</div>
    </main>
     <footer class="_wYiJGbRZyFZeCc8y7Sf dPKKN86A3v0FrOZGwMAI _Zt0QWNoskeJIuWJ94UW _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _TsbEtxNT5XPbTk6VlSv hhVyfLYO5HBNKAsXwK1v t5cz8HTvFaREjnieK5hv LSIxp7RSuOKhsg28v_u3 SWDELhWFjL8JxEtm91_o _1jTZ8KXRZul60S6czNi">
    <ul class="YRrCJSr_j5nopfm4duUc hP1M5IgfjJiY8_B1VUN1 Q_jg_EPdNf9eDMn1mLI2 EyjJPKD7jgGRBhaLpRVI wezTbYJgxYJp5ZDqX67N _ZI9D_boHHl7De08RAA7">
        <li><a href="#" class="y7LTF_4HCOoAzmZm_v8k c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ xLxz3T8aF89CfiYPaIX3 XIIs8ZOri3wm8Wnj9N_y">Terms and conditions</a></li>
        <li><a href="#" class="y7LTF_4HCOoAzmZm_v8k c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ xLxz3T8aF89CfiYPaIX3 XIIs8ZOri3wm8Wnj9N_y">Privacy Policy</a></li>
        <li><a href="#" class="y7LTF_4HCOoAzmZm_v8k c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ xLxz3T8aF89CfiYPaIX3 XIIs8ZOri3wm8Wnj9N_y">Licensing</a></li>
        <li><a href="#" class="y7LTF_4HCOoAzmZm_v8k c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ xLxz3T8aF89CfiYPaIX3 XIIs8ZOri3wm8Wnj9N_y">Cookie Policy</a></li>
        <li><a href="#" class="c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ XIIs8ZOri3wm8Wnj9N_y">Contact</a></li>
    </ul>
    <div class="YRrCJSr_j5nopfm4duUc e2hrZSYddULUFUtJ9wBR _PC7_lPKkOLQCngwwxFs">
        <a href="#" class="PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
            <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
            </svg>
        </a>
        <a href="#" class="PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
            <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
            </svg>
        </a>
        <a href="#" class="PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
            <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
            </svg>
        </a>
        <a href="#" class="PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
            <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
            </svg>
        </a>
        <a href="#" class="PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
            <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
</footer>
<p class="_doGzYmWP2_jIjPyHtlc c8dCx6gnV43hTOLV6ks5 ijrOHNoSVGATsWYKl4Id PeR2JZ9BZHYIH8Ea3F36">
    © 2019-2022 <a href="https://flowbite.com/" class="oJZU4OQzzfXeLbF7UKZ_" target="_blank">Flowbite.com</a>. All rights reserved.
</p>
   
  </div>

</div>



    <script src="https://flowbite.com/application-ui/demo/app.bundle.js"></script><div class="svgMap-tooltip"><div class="svgMap-tooltip-content-wrapper"></div><div class="svgMap-tooltip-pointer"></div></div><svg id="SvgjsSvg1322" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1323"></defs><polyline id="SvgjsPolyline1324" points="0,0"></polyline><path id="SvgjsPath1325" d="M-1 2650.449584260941L-1 2650.449584260941C-1 2650.449584260941 173.27562109629312 2650.449584260941 173.27562109629312 2650.449584260941C173.27562109629312 2650.449584260941 346.55124219258624 2650.449584260941 346.55124219258624 2650.449584260941C346.55124219258624 2650.449584260941 519.8268632888794 2650.449584260941 519.8268632888794 2650.449584260941C519.8268632888794 2650.449584260941 693.1024843851725 2650.449584260941 693.1024843851725 2650.449584260941C693.1024843851725 2650.449584260941 866.3781054814657 2650.449584260941 866.3781054814657 2650.449584260941C866.3781054814657 2650.449584260941 1039.6537265777588 2650.449584260941 1039.6537265777588 2650.449584260941C1039.6537265777588 2650.449584260941 1039.6537265777588 2650.449584260941 1039.6537265777588 2650.449584260941 "></path></svg>
  
<iframe id="lLJORcHS" frameborder="0" src="chrome-extension://ekhagklcjbdpajgpjgmbionohlpdbjgc/translateSandbox/translateSandbox.html" style="width: 0px; height: 0px; display: none;"></iframe>
</body></html>
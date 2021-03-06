<?
$page_logo = "/img/logo.png";

$page_head = <<<PHP_HEAD
  <script type="text/javascript" src="js/map.js"></script>
  <script type="text/javascript" src="js/Control.Permalink.js"></script>
  <script type="text/javascript" src="js/osb.js"></script>
  <link rel="stylesheet" href="css/osb.css" />
PHP_HEAD;

$page_toopbar = <<<PHP_TOOLBAR
      <div id="searchpan">
        <form id="search" method="get" action="/" onsubmit="return osm.ui.searchsubmit();"><table style="width:100%;"><tr>
          <td>
            <input id="qsearch" autocomplete="off" type="search" name="q" />
          </td>
          <td style="width:1px;">
            <input type="submit" value="Найти&nbsp;&raquo;" />
          </td>
        </tr></table></form>
      </div>
PHP_TOOLBAR;

$page_content = <<<PHP_CONTENT
<body onload="init()">
  <div id="downpan" class="left-on">
    <div id="leftpan">
      <div class="close" onClick="osm.leftpan.toggle(false);"></div>
      <div class="header">
        <h1>Результаты поиска:</h1>
      </div>
      <div id="content_pan">
        <ul>
          <br>
          <li><span class="pseudolink" onClick="osm.ui.whereima()">Найти меня</span></li>
          <li><span class="pseudolink" onClick="osm.ui.whereima()">Проложить маршрут</span></li>
        </ul>
      </div>
      <div id="toggler" onClick="osm.leftpan.toggle()"></div>
    </div>
    <div id="mappan">
      <div id="map"></div>
      <div id="fsbutton" onClick="osm.ui.togglefs()">&uarr;</div>
      <!--<div id="cpan">
        <img id="cpanglo" src="img/glow.png" />
        <img id="cpanarr" src="img/arrows.png" />
        <img id="cpanjoy" src="img/joy.png" />
        <div id="cpanact" onmousedown="osm.cpan.startPan(event)" onmousemove="osm.cpan.dragPan(event)" onmouseup="osm.cpan.endPan(event)" onmouseout="osm.cpan.endPan(event)"></div>
      </div>-->
      <!--<div class="vshadow">
        <div class="w1"></div><div class="w2"></div><div class="w3"></div><div class="w4"></div><div class="w5"></div>
      </div>
      <div class="hshadow">
        <div class="h1"></div><div class="h2"></div><div class="h3"></div><div class="h4"></div><div class="h5"></div>
      </div>-->
    </div>
  </div>
  <iframe name="hiddenIframeOSB" id="hiddenIframeOSB" style="display: none;"></iframe>
</body>
PHP_CONTENT;
?>

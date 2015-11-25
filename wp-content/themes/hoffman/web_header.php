<?php $URL_WEBSITE = getenv('URL_WEBSITE') ? getenv('URL_WEBSITE') : 'http://127.0.0.1:8000/'; ?>
<header id="header" data-ui-view="header-view" class="ng-scope"><nav class="navbar navbar-default ng-scope" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-ng-init="navCollapsed = true" data-ng-click="navCollapsed = !navCollapsed">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/inicio" data-ui-sref="app.inicio">Brand</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" data-ng-class="!navCollapsed &amp;&amp; 'in'" data-ng-click="navCollapsed=true">
            <ul class="nav navbar-nav">
				<li><a href="<?=$URL_WEBSITE?>inicio" data-ui-sref="app.inicio" data-ui-sref-active="active" data-translate="menu.home" class="ng-scope active">Inicio</a></li>
				<li><a href="<?=$URL_WEBSITE?>nosotros" data-ui-sref="app.nosotros" data-ui-sref-active="active" data-translate="menu.aboutus" class="ng-scope">¿Quiénes Somos?</a></li>
				<li><a href="<?=$URL_WEBSITE?>que-hacemos" data-ui-sref="app.quehacemos" data-ui-sref-active="active" data-translate="menu.whatwedo" class="ng-scope">¿Qué hacemos?</a></li>
                <li><a href="<?=$URL_WEBSITE?>contacto" data-ui-sref="app.contacto" data-ui-sref-active="active" data-translate="menu.contact" class="ng-scope">Contacto</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
        <div id="header-tools">
            <ul class="social">
                <li class="facebook">
                    <a href="https://www.facebook.com/vegalawconsulting?fref=ts" title="Facebook" target="_blank">Facebook</a>
                </li><li class="linkedin">
                    <a href="https://www.linkedin.com/company/vega-abogados" title="Linkedin" target="_blank">Linkedin</a>
                </li><li class="twitter">
                    <a href="https://twitter.com/vega_abogadossc" title="Twitter" target="_blank">Twitter</a>
                </li>
        	</ul><!-- .social -->
            <p id="lang" class="btn-group hide">
                <a href="" title="Change to english" data-ng-click="switchLang('en_EN')" id="lang_en_EN">Eng</a> -
                <a href="" title="Change to english" data-ng-click="switchLang('es_MX')" id="lang_es_MX" class="active">Esp</a>
            </p><!-- #lang -->
        </div>
    </div>
</nav></header>

<!DOCTYPE html>
<html>
<head>
	<title>WAMPSERVER Homepage</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
	<link id="stylecall" rel="stylesheet" href="/wampthemes/classic/style.css" />
	<link rel="shortcut icon" href="/index.php?img=favicon" type="image/ico" />
</head>

<body>
  <div id="head">
    <div class="innerhead">
	    <h1><abbr title="Windows">W</abbr><abbr title="Apache">A</abbr><abbr title="MySQL">M</abbr><abbr title="PHP">P</abbr></h1>
		   <ul>
		    <li>PHP 5</li>
			   <li>Apache 2.4</li>
			   <li>MySQL 5</li>
		   </ul>
     </div>
		<ul class="utility">
		  <li>Version 3.1.0 - 64bit</li>
      <li><form method="get" style="display:inline-block;"><select name="lang" id="langues" onchange="this.form.submit();">
<option value="english" selected>english</option>
<option value="french">french</option>
<option value="hellenic">hellenic</option>
<option value="macedonian">macedonian</option>
<option value="portuguese">portuguese</option>
<option value="romanian">romanian</option>
<option value="turkish">turkish</option>
</select></form><select id="themes">
<option id="classic">classic</option>
<option id="modern">modern</option>
<option id="no-style">no-style</option>
<option id="simple">simple</option>
</select>
</li>
	  </ul>
	</div>

	<div class="config">
	    <div class="innerconfig">

	        <h2> Server Configuration </h2>

	        <dl class="content">
		        <dt>Apache Version:</dt>
		            <dd>2.4.27&nbsp;&nbsp;-&nbsp;<a href='http://httpd.apache.org/docs/2.4/en/'>Documentation</a></dd>
		        <dt>PHP Version:</dt>
		            <dd>5.6.31&nbsp;&nbsp;-&nbsp;<a href='http://www.php.net/manual/en/'>Documentation</a></dd>
		        <dt>Server Software:</dt>
		            <dd>Apache/2.4.27 (Win64) OpenSSL/1.1.0f PHP/5.6.31&nbsp;-&nbsp;Port defined for Apache: 80 - 8081</dd>
		        <dt>Loaded Extensions : </dt>
		            <dd>
			            <ul>
			                <li>apache2handler</li><li>bcmath</li><li>bz2</li><li>calendar</li><li>com_dotnet</li><li>Core</li><li>ctype</li><li>curl</li><li>date</li><li>dom</li><li>ereg</li><li>exif</li><li>fileinfo</li><li>filter</li><li>ftp</li><li>gd</li><li>gettext</li><li>gmp</li><li>hash</li><li>iconv</li><li>imap</li><li>intl</li><li>json</li><li>ldap</li><li>libxml</li><li>mbstring</li><li>mcrypt</li><li>mhash</li><li>mysql</li><li>mysqli</li><li>mysqlnd</li><li>odbc</li><li>openssl</li><li>pcre</li><li>PDO</li><li>pdo_mysql</li><li>pdo_sqlite</li><li>Phar</li><li>Reflection</li><li>session</li><li>SimpleXML</li><li>soap</li><li>sockets</li><li>SPL</li><li>sqlite3</li><li>standard</li><li>tokenizer</li><li>wddx</li><li>xdebug</li><li>xml</li><li>xmlreader</li><li>xmlrpc</li><li>xmlwriter</li><li>xsl</li><li>Zend OPcache</li><li>zip</li><li>zlib</li>
			            </ul>
		            </dd>
						<dt>MySQL Version:</dt>
	<dd>5.7.19&nbsp;-&nbsp;Port defined for MySQL: 3306&nbsp;-&nbsp; <a href='http://dev.mysql.com/doc/index.html'>Documentation</a></dd>
		        <dt>MariaDB Version: </dt>
  <dd>10.2.8&nbsp;-&nbsp;Port defined for MariaDB: 3307&nbsp;-&nbsp; <a href='http://mariadb.com/kb/en/mariadb/documentation'>Documentation</a></dd>
	        </dl>
        </div>
    </div>

    <div class="divider1">&nbsp;</div>

    <div class="alltools four-columns">
	    <div class="inneralltools">
	        <div class="column">
	            <h2>Tools</h2>
	            <ul class="tools">
		            <li><a href="/index.php?phpinfo=1">phpinfo()</a></li>
		            <li><a href="/phpmyadmin/">phpmyadmin</a></li>
		            <li><a href='/add_vhost.php?lang=english'>Add a Virtual Host</a></li>
	            </ul>
	        </div>
	        		<div class="column">
	            <h2>Your Projects</h2>
	            <ul class="projects">
	                <li><a href="http://fight4life/">fight4life</a></li><li><a href="http://macsorj/">macsorj</a></li><li><a href="http://newone/">newone</a></li><li><a href="http://palindromic/">palindromic</a></li>
	            </ul>
	        </div>
	        	<div class="column">
	            <h2>Your Aliases</h2>
	            <ul class="aliases">
	                <li><a href="/adminer/">adminer</a></li><li><a href="/phpmyadmin/">phpmyadmin</a></li><li><a href="/phpsysinfo/">phpsysinfo</a></li>
	            </ul>
	        </div>	        <div class="column">
	            <h2>Your VirtualHost</h2>
	            <ul class="vhost">
	                <li><a href="http://localhost/">localhost</a></li><li><a href="http://macsorj/">macsorj</a></li><li><a href="http://macsorjlive/">macsorjlive</a></li><li><a href="http://macsorjlive2/">macsorjlive2</a></li><li><a href="http://palindromic/">palindromic</a></li><li><a href="http://newone/">newone</a></li><li>www.langbiangherbs.com:443 - <i style="color:red;">Not a Listen port</i></li><li>fight4life:443 - <i style="color:red;">Not a Listen port</i></li><li><i style='color:red;'>Error(s)</i> See below</li>
	            </ul>
	        </div>	<div id="error" style="clear:both;"></div>
	<p style='color:red;'>Port used for the VirtualHost is not an Apache 'Listen port' in httpd.conf<br />Duplicate ServerName <span style='color:blue;'> www.langbiangherbs.com fight4life</span> into c:/wamp64/bin/apache/apache2.4.27/conf/extra/httpd-vhosts.conf<br /></p>
        </div>
    </div>

	<div class="divider2">&nbsp;</div>

	<ul id="foot">
		<li><a href="http://forum.wampserver.com/list.php?2">Wampserver Forum</a></li>
	</ul>

<script>
var select = document.getElementById("themes");
if (select.addEventListener) {
    /* Only for modern browser and IE > 9 */
    var stylecall = document.getElementById("stylecall");
    /* looking for stored style name */
    var wampStyle = localStorage.getItem("wampStyle");
    if (wampStyle !== null) {
        stylecall.setAttribute("href", "wampthemes/" + wampStyle + "/style.css");
        selectedOption = document.getElementById(wampStyle);
        selectedOption.setAttribute("selected", "selected");
    }
    else {
        localStorage.setItem("wampStyle","classic");
        selectedOption = document.getElementById("classic");
        selectedOption.setAttribute("selected", "selected");
    }
    /* Changing style when select change */

    select.addEventListener("change", function(){
        var styleName = this.value;
        stylecall.setAttribute("href", "wampthemes/" + styleName + "/style.css");
        localStorage.setItem("wampStyle", styleName);
    })
}
</script>
</body>
</html>
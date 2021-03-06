<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Ajouter un "Virtual Host"</title>
		<meta charset="UTF-8">
		<style>
			* {
				margin: 0;
				padding: 0;
			}

			html {
				background: #ddd;
			}
			body {
				margin: 1em 10%;
				padding: 1em 3em;
				font: 80%/1.4 tahoma, arial, helvetica, lucida sans, sans-serif;
				border: 1px solid #999;
				background: #eee;
				position: relative;
			}
			header {
				margin-bottom: 1.8em;
				margin-top: .5em;
				padding-bottom: 0em;
				border-bottom: 1px solid #999;
				height: 125px;
				background: url(/index.php?img=gifLogo) 0 0 no-repeat;
			}

			header h1 {
				padding-left: 130px;
				padding-top: 15px;
				font-size: 1.8em;
			}

			header h1 a:hover {color:blue;}

			h2 {
				margin: 0.8em 0 0 0;
			}

			p {
				padding: 1%;
			}

			.ok, .ok_plus, .warning, .warning_auto {
				text-align: center;
				font-size: 1.3em;
				text-shadow: 1px 1px 0 #000;
				background: #585858;
			}

			.ok {
				color: limegreen;
			}
			.ok_plus {
				text-align:justify;
				background: #777777;
			}

			.warning, .warning_auto, .ok_plus {
				color: orange;
			}
			.warning_auto {
				border: 3px solid #4FEF10;
			}
			label {
				padding-left: 22px;
				margin-left: 22px;
				background: url(/index.php?img=pngWrench) 0 100% no-repeat;
			}

			input[type="text"] {
				width: 80%;
				margin: 0.2% 1% 1% 1%;
				padding: 0.3% 1%;
				border: 1px solid #999;
			}
			input.required {
				border:1px solid red;
			}
			input.optional {
				border:1px solid green;
			}
			input[type="submit"] {
				min-width: 50%;
				background: #DDD;
				border: 1px solid #999;
				margin: 1%;
				padding: 0.3% 1%;
			}

			input[type="checkbox"] {
				vertical-align: middle;
			}

			input[type="submit"]:hover {
				background: #FF0099;
				color: #FFF;
			}

			pre {
				width: 98%;
				overflow: auto;
				padding: 1%;
				border: #FF0099 1px solid;
				background: #585858;
			}

			a {
				color: #000;
				text-decoration: none;
			}

			code, code.option, code.requis {
				color: #FFF;
				text-shadow: 1px 1px 0 #000;
				padding: 0.1% 0.5%;
				border-radius: 3px;
				background: #585858;
				font-size: 1.2em;
			}
			code.option {
				background: green;
			}
			code.requis {
				background: red;
			}
			.utility {
				position: absolute;
				right: 4em;
				top: 122px;
				font-size: 0.85em;
			}
		</style>
	</head>
	<body>
	<header>
		<h1><a href="/add_vhost.php?lang=english">Add a VirtualHost</a> - <a href="/index.php?lang=english">Back to homepage</a></h1>
		<ul class="utility">
		  <li>Version 3.1.0 - 64bit<form method="get" style="display:inline-block;margin-left:10px;"><select name="lang" id="langues" onchange="this.form.submit();">
<option value="english" selected>english</option>
<option value="french">french</option>
<option value="hellenic">hellenic</option>
<option value="macedonian">macedonian</option>
<option value="portuguese">portuguese</option>
<option value="romanian">romanian</option>
<option value="turkish">turkish</option>
</select></form></li>
	  </ul>
	</header>		<p>Apache Virtual Hosts <code>c:/wamp64/bin/apache/apache2.4.27/conf/extra/httpd-vhosts.conf</code></p>		<p>VirtualHost already defined:</p>
		<div style='width:70%;float:left;'>
			<ul style='list-style:none;'><li><i>ServerName : </i><span style='color:blue;'>localhost</span> - <i>Directory : </i>c:/wamp64/www/</li>
<li><i>ServerName : </i><span style='color:blue;'>macsorj</span> - <i>Directory : </i>c:/wamp64/www/macsorj</li>
<li><i>ServerName : </i><span style='color:blue;'>macsorjlive</span> - <i>Directory : </i>c:/wamp64/www/macsorj</li>
<li><i>ServerName : </i><span style='color:blue;'>macsorjlive2</span> - <i>Directory : </i>c:/wamp64/www/macsorj</li>
<li><i>ServerName : </i><span style='color:blue;'>palindromic</span> - <i>Directory : </i>c:/wamp64/www/palindromic</li>
<li><i>ServerName : </i><span style='color:blue;'>newone</span> - <i>Directory : </i>c:/wamp64/www/newone</li>
<li><i>ServerName : </i><span style='color:blue;'>www.langbiangherbs.com</span><span style='color:red;'>:443</span> - <i>Directory : </i>c:/wamp64/www/newone</li>
<li><i>ServerName : </i><span style='color:blue;'>fight4life</span><span style='color:red;'>:443</span> - <i>Directory : </i>c:/wamp64/www/newone</li>
</ul>
		</div>
		<div id='vhostdelete' style='width:28%;float:right;'>			<form id='seedelete' method='post' style='display:inline-block;'>
			<input type='hidden' name='seedelete' value='afficher'/>
			<input type='submit' value='Suppress VirtualHost form'/>
			</form>		</div>
		<div style='clear:both;'></div>
		<p>Windows hosts <code>C:\Windows\system32\drivers\etc\hosts</code></p><form method="post">		<p><label>Name of the <code>Virtual Host</code> No diacritical characters (éçëñ) - No space - No underscore(_) <code class="requis"><i>Required</i></code></label><br>
			<input class='required' type="text" name="vh_name" required="required" /><br>
		<label>Complete absolute <code>path</code> of the VirtualHost <code>folder</code> <i>Examples: C:/wamp/www/projet/ or E:/www/site1/</i> <code class="requis"><i>Required</i></code></label><br>
			<input class='required' type="text" name="vh_folder" required="required"/></p>
				<label><code class="option">If</code> you want to use "Listen port" other than the default <code class="option">Accepted ports</code> 8081 <code class="option"><i>Optional</i></code></label><br>
			<input class="optional" type="text" name="vh_port"/><br>
		<label><code class="option">If</code> you want to use VirtualHost by IP: <code class="option">local IP</code> 127.x.y.z <code class="option"><i>Optional</i></code></label><br>
			<input class='optional' type="text" name="vh_ip"/><br>
		<p style="text-align: right;"><input type="submit" name="submit" value="Start the creation of the VirtualHost (May take a while...)" /></p>
	</form></body>
</html>
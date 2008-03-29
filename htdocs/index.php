<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $project_name; ?></title>
	<script language="JavaScript" type="text/javascript">
	<!--
	function help_window(helpurl) {
		HelpWin = window.open( helpurl,'HelpWindow','scrollbars=yes,resizable=yes,toolbar=no,height=400,width=400');
	}
	// -->
		</script>

<style type="text/css">
	<!--
	BODY {
		margin-top: 3;
		margin-left: 3;
		margin-right: 3;
		margin-bottom: 3;
		background: #01004e;
	}
	ol,ul,p,body,td,tr,th,form { font-family: verdana,arial,helvetica,sans-serif; font-size:small;
		color: #333333; }

	h1 { font-size: x-large; font-family: verdana,arial,helvetica,sans-serif; }
	h2 { font-size: large; font-family: verdana,arial,helvetica,sans-serif; }
	h3 { font-size: medium; font-family: verdana,arial,helvetica,sans-serif; }
	h4 { font-size: small; font-family: verdana,arial,helvetica,sans-serif; }
	h5 { font-size: x-small; font-family: verdana,arial,helvetica,sans-serif; }
	h6 { font-size: xx-small; font-family: verdana,arial,helvetica,sans-serif; }

	pre,tt { font-family: courier,sans-serif }

	a:link { text-decoration:none }
	a:visited { text-decoration:none }
	a:active { text-decoration:none }
	a:hover { text-decoration:underline; color:red }

	.titlebar { color: black; text-decoration: none; font-weight: bold; }
	a.tablink { color: black; text-decoration: none; font-weight: bold; font-size: x-small; }
	a.tablink:visited { color: black; text-decoration: none; font-weight: bold; font-size: x-small; }
	a.tablink:hover { text-decoration: none; color: black; font-weight: bold; font-size: x-small; }
	a.tabsellink { color: black; text-decoration: none; font-weight: bold; font-size: x-small; }
	a.tabsellink:visited { color: black; text-decoration: none; font-weight: bold; font-size: x-small; }
	a.tabsellink:hover { text-decoration: none; color: black; font-weight: bold; font-size: x-small; }
	-->
</style>

</head>

<body>

<table border="0" width="100%" cellspacing="0" cellpadding="0">

	<tr>
		<td><a href="/"><img src="http://<?php echo $domain; ?>/themes/gforge/images/logo.png" border="0" alt="" width="198" height="52" /></a></td>
	</tr>

</table>

<table border="0" width="100%" cellspacing="0" cellpadding="0">

	<tr>
		<td>&nbsp;</td>
		<td colspan="3">



		<!-- start tabs -->

	<tr>
		<td align="left" bgcolor="#E0E0E0" width="9"><img src="http://<?php echo $domain; ?>/themes/gforge/images/tabs/topleft.png" height="9" width="9" alt="" /></td>
		<td bgcolor="#E0E0E0" width="30"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="30" height="1" alt="" /></td>
		<td bgcolor="#E0E0E0"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="1" height="1" alt="" /></td>
		<td bgcolor="#E0E0E0" width="30"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="30" height="1" alt="" /></td>
		<td align="right" bgcolor="#E0E0E0" width="9"><img src="http://<?php echo $domain; ?>/themes/gforge/images/tabs/topright.png" height="9" width="9" alt="" /></td>
	</tr>

	<tr>

		<!-- Outer body row -->

		<td bgcolor="#E0E0E0"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="10" height="1" alt="" /></td>
		<td valign="top" width="99%" bgcolor="#E0E0E0" colspan="3">

			<!-- Inner Tabs / Shell -->

			<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td align="left" bgcolor="#ffffff" width="9"><img src="http://<?php echo $domain; ?>/themes/gforge/images/tabs/topleft-inner.png" height="9" width="9" alt="" /></td>
				<td bgcolor="#ffffff"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="1" height="1" alt="" /></td>
				<td align="right" bgcolor="#ffffff" width="9"><img src="http://<?php echo $domain; ?>/themes/gforge/images/tabs/topright-inner.png" height="9" width="9" alt="" /></td>
			</tr>

			<tr>
				<td bgcolor="#ffffff"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="10" height="1" alt="" /></td>
				<td valign="top" width="99%" bgcolor="white">

	<!-- whole page table -->
<table width="100%" cellpadding="5" cellspacing="0" border="0">
<tr><td width="65%" valign="top">
<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>
<p>Welcome to the current home page for <b><i>Tux Typing</i></b> and 
<b><i>Tux, Of Math Command</i></b>.  Both projects are actively being developed,
and downloads are available at this site (see below).</p> 
<p>Here you can see <a href="tuxmath.php">screenshots of TuxMath</a> in action!</p>
<p>For <b><i>Tuxpaint</i></b>
please follow the link to the excellent <a href="http://www.tuxpaint.org" target="_blank">tuxpaint homepage</a>.
</p>
<hr>
<h4>Tuxmath and Tuxtype</h4>
<p>As you likely can tell, we 
 need someone with some time and web development skills to work on this page.  Our
 efforts have been going into development of the programs themselves.  If you are
interested in helping, please contact us via the mailing lists below.
</p>
<p>
If you run Debian simply run
<pre>aptitude install tuxmath tuxtype tuxtype-data-nonfree</pre>
</p>

<p>Downloads of source releases and Windows and MacOSX binaries are 
available from the <i>released files</i> link in the project summary on the right.
</p>  
<hr>
<h5>News</h5>

<p><i><b>NEWS, 2008-03-29: </i>TuxType 1.5.17 has been released - the first TuxType release in a few months.</b> This release includes a new Nepali theme (contributed by Vikal Acharya and Shakeel Shrestha), as well as some visual enhancements to the menu interface.</p>

<p>For Mac users, also of note is that TuxMath has been added to the excellent <a href="http://www.macports.org" target="_blank">MacPorts</a> project. Users of MacPorts can install TuxMath with a simple "sudo port install tuxmath" at the command line. Work is ongoing to add TuxType to MacPorts as well, and to get an automated binary build process for both programs on OS-X.</p>

<p><i><b>NEWS, 2008-02-04:<p>For Unix-y MacOSX users, the good news is that the source archive now builds and installs correctly on MacOSX 10.5 (Leopard) with a simple "./configure; make; sudo make install", as long as you have the required libraries.  For "the rest of us", we hope to have a simple MacOSX .dmg image file in the near future.</p> </i>Improved MacOSX Support!</b> (but still not perfect).  TuxMath 1.6.1 is now available for download as a <a href="http://alioth.debian.org/frs/download.php/2310/tuxmath_w_fonts-1.6.1.tar.gz" target="_blank">gzipped tar source archive</a> and as an <a href="http://alioth.debian.org/frs/download.php/2309/tuxmath-1.6.1-win32-installer.exe" target="_blank">executable Win32 installer</a>.</p>

<p>For Unix-y MacOSX users, the good news is that the source archive now builds and installs correctly on MacOSX 10.5 (Leopard) with a simple "./configure; make; sudo make install", as long as you have the required libraries.  For "the rest of us", we hope to have a simple MacOSX .dmg image file in the near future.</p>

<p>Native language support via Gnu Gettext works correctly on MacOSX, as well as Windows and Linux. New human-language translations are welcome, of course. Email us at <a href="mailto:tuxmath-devel@lists.sourceforge.net?&subject=TuxMath%20Translation">tuxmath-devel@lists.sourceforge.net</a> if interested.</p>

<p>On the TuxType front, we now offer current binary builds of TuxType 1.5.16 for <a href="http://alioth.debian.org/frs/download.php/2301/tuxtype_w_fonts-1.5.16-MACOSX10.4+.dmg" target="_blank">Intel-</a> and <a href="http://alioth.debian.org/frs/download.php/2300/Tuxtype_w_fonts-1.5.16-MACOS10.3PPC.dmg" target="_blank">PPC-</a>based Macs, thanks to the efforts of Alex Shorthouse.</p>

<p><i><b>NEWS, 2007-12-12: </i>TuxMath 1.6.0 has just been released.</b> The major advance is successful native language support for Windows users. All of the languages supported by the Linux build (English, Norwegian-Nynorsk, Norwegian-Bokmal, Czech, Dutch and French) are now available under Windows as well. With full Gettext support now implemented for both platforms, we would greatly welcome translations to other (human) languages. Email us at <a href="mailto:tuxmath-devel@lists.sourceforge.net?&subject=TuxMath%20Translation">tuxmath-devel@lists.sourceforge.net</a> if interested.</p>

<p><i><b>NEWS, 2007-12-12: </i>TuxMath 1.5.9 has just been released.</b> Enhancements include a French translation courtesy of Luc Schrijvers (English, Norwegian-Nynorsk, Norwegian-Bokmal, Czech, Dutch and French are now supported on Linux), as well as a new login system to keep track of individual student progress (thanks to Tim Holy).  As of this writing, the new features are not yet implemented for the Windows build.</p>

<p><i><b>NEWS, 2007-11-29: </i>Release of TuxType 1.5.16.</b> This release adds new themes for the Czech and Wolof languages (thanks to Jaroslav Krejčí and Issa Dominique Rochefort, respectively), as well as some minor code changes.  Importantly, there is a possible bugfix that hopes to address problems with non-ASCII keyboard input not being recognized. This potential fix needs to be tested.</p>

<p><i><b>NEWS, 2007-11-15: </i>TuxMath 1.5.8 has just been released.</b> </p>

<p><i><b>NEWS, 2007-10-29: </i>TuxMath 1.5.7 has just been released.</b>  This version features many new graphics
and refinements of the menu system, for a more polished and professional appearance. You can 
now earn "gold stars" by completing the lessons in the Math Command Training Academy.  The Hall
of Fame (high score table) is fully operational. The code also includes a bug fix in the menu 
system and corrections of two errors in the lesson files.</p>

<p>There is also an i386 .rpm for TuxMath 1.5.4. </p>

<p>For users of Debian 
and its derivatives, recent TuxMath (1.5.8) and TuxType (1.5.15) 
packages are now available in the "Sid/Unstable" branch.
</p>

<!-- ?php if ($handle=fopen('http://'.$domain.'/export/projnews.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
$contents=str_replace('href="/','href="http://'.$domain.'/',$contents);
echo $contents; } ? -->

</td>

<td width="35%" valign="top">

		<table cellspacing="0" cellpadding="1" width="100%" border="0" bgcolor="#d5d5d7">
		<tr><td>
			<table cellspacing="0" cellpadding="2" width="100%" border="0" bgcolor="#eaecef">
				<tr style="background-color:#d5d5d7" align="center">
					<td colspan="2"><span class="titlebar">Project Summary</span></td>
				</tr>
				<tr align="left">
					<td colspan="2">

<?php if($handle=fopen('http://'.$domain.'/export/projhtml.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
$contents=str_replace('href="/','href="http://'.$domain.'/',$contents);
$contents=str_replace('src="/','src="http://'.$domain.'/',$contents);
echo $contents; } ?>

					</td>
				</tr>
				<table border=0 width="100%"><tr><td bgcolor="#EAECEF">
					<ul><li>SVN repository for tuxtype and tuxmath: 
					  <ul>
					   <li><a href="http://svn.debian.org/wsvn/tux4kids">browsable</a></li>
					   <li><a href="svn://svn.debian.org/tux4kids/">svn://svn.debian.org/tux4kids/</a></li>
					  </ul>
					 </li>
					</ul>
				<hr size="1" />
				 <ul>
				  <li>browsable archive of the <a href="http://sourceforge.net/mailarchive/forum.php?forum_name=tuxmath-devel">tuxmath-devel mailinglist</a></li>
				  <li>(see above for more mailinglists)</li>
				 </ul>
				<hr size="1" />
				<ul>
				  <li><a href="http://bugs.debian.org/tuxtype">Bugs in the Debian BTS against tuxtype</a></li>
				  <li><a href="http://bugs.debian.org/tuxtype-data-nonfree">Bugs in the Debian BTS against tuxtype-data-non-free</a></li>
				  <li><a href="http://bugs.debian.org/tuxmath">Bugs in the Debian BTS against tuxmath</a></li>
				</ul>
				</td></tr></table>
			</table>
		</td></tr>
		</table><p>&nbsp;</p>
</td></tr></table>
			&nbsp;<p>
			<!-- end main body row -->


				</td>
				<td width="10" bgcolor="#ffffff"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="2" height="1" alt="" /></td>
			</tr>
			<tr>
				<td align="left" bgcolor="#E0E0E0" width="9"><img src="http://<?php echo $domain; ?>/themes/gforge/images/tabs/bottomleft-inner.png" height="11" width="11" alt="" /></td>
				<td bgcolor="#ffffff"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="1" height="1" alt="" /></td>
				<td align="right" bgcolor="#E0E0E0" width="9"><img src="http://<?php echo $domain; ?>/themes/gforge/images/tabs/bottomright-inner.png" height="11" width="11" alt="" /></td>
			</tr>
			</table>

		<!-- end inner body row -->

		</td>
		<td width="10" bgcolor="#E0E0E0"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="2" height="1" alt="" /></td>
	</tr>
	<tr>
		<td align="left" bgcolor="#E0E0E0" width="9"><img src="http://<?php echo $domain; ?>/themes/gforge/images/tabs/bottomleft.png" height="9" width="9" alt="" /></td>
		<td bgcolor="#E0E0E0" colspan="3"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="1" height="1" alt="" /></td>
		<td align="right" bgcolor="#E0E0E0" width="9"><img src="http://<?php echo $domain; ?>/themes/gforge/images/tabs/bottomright.png" height="9" width="9" alt="" /></td>
	</tr>
</table>

<!-- PLEASE LEAVE "Powered By GForge" on your site -->
<br />
<center>
<a href="http://gforge.org/"><img src="http://gforge.org/images/pow-gforge.png" alt="Powered By GForge Collaborative Development Environment" border="0" /></a>
</center>


</body>
</html>

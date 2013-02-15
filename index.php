<?php
/**
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/tmplate.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/my_style.css" type="text/css" />

<!--[if lte IE 6]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ieonly.css" rel="stylesheet" type="text/css" />
<![endif]-->
<?php if($this->direction == 'rtl') : ?>
	<link href="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/template_rtl.css" rel="stylesheet" type="text/css" />
<?php endif; ?>

</head>
<body>
<a name="up" id="up"></a>

<div id="container">
  
   <div id="header">
		<div id="header-content">
		
			<div id="header-left">
				<div id="site_title">P<font class="orange">E</font>ST</div>
			</div>
			<div id="header-right">
				<div id="header-languages">
					<a href="#"><img src="img/english.jpg"></a>
					<a href="#"><img src="img/russian.jpg"></a>
				<?php if($this->countModules('topheader')) : ?>
						<jdoc:include type="modules" name="topheader" style="xhtml" />
				<?php endif; ?>
				</div>
				<br>
				<div id="social">
					<a href="#"><img src="img/facebook.jpg"></a>
					<a href="#"><img src="img/g+.jpg"></a>
					<a href="#"><img src="img/vk.jpg"></a>
					<a href="#"><img src="img/twit.jpg"></a>
				
				
					<?php if($this->countModules('bottomheader')) : ?>
							
							<jdoc:include type="modules" name="bottomheader" style="xhtml" />
							<a href="#"><img src="img/facebook.jpg"></a>
							<a href="#"><img src="img/g+.jpg"></a>
							<a href="#"><img src="img/vk.jpg"></a>
							<a href="#"><img src="img/twit.jpg"></a>
						
					<?php endif; ?>
				</div>
					
				
			</div>
		</div>
   </div>
   
   <div id="content">
		<?php if($this->countModules('topcontent')) : ?>
				<div id="menu">
					<jdoc:include type="modules" name="topcontent" style="xhtml" />
				</div>
		<?php endif; ?>
    
	
	
				
		
	<div id="content-left-column">
		<div id="logo">
			<img src="img/logo.jpg">
		</div>
		<div id="component">
			<jdoc:include type="component" />
		</div>
		
		<div class="news">
			<div class="news-left">
				<img src="img/drift.jpg">
			</div>
			<div class="news-right">
				<div class="news-right-title">
				Финал AMA Supercross
				</div>
				<div class="news-right-text">
				Вот и закончился чемпионат.....
				</div>
			</div>
		</div>
		<div class="news">
			<div class="news-left">
				<img src="img/drift.jpg">
			</div>
			<div class="news-right">
				<div class="news-right-title">
				Финал AMA Supercross
				</div>
				<div class="news-right-text">
				Вот и закончился чемпионат.....
				</div>
			</div>
		</div>
		<div class="news">
			<div class="news-left">
				<img src="img/drift.jpg">
			</div>
			<div class="news-right">
				<div class="news-right-title">
				Финал AMA Supercross
				</div>
				<div class="news-right-text">
				Вот и закончился чемпионат.....
				</div>
			</div>
		</div>
		
	</div>
	
	
	<?php if($this->countModules('rightsidebar')) : ?>
		<div id="content-right-column">
					
			<div id="calendar-title">
				<img src="img/orange_square_big.jpg">
				Календарь событий
			</div>
			<div id="calendar">
				<jdoc:include type="modules" name="rightsidebar" style="xhtml" />	
			</div>
			<div id="registration">
				<font class="orange">Вход | Регистрация</font>
			</div>
			<div id="popular-title">
				<img src="img/orange_square_big.jpg">
				Популярные
			</div>
			<div id="popular">
				
			</div>
		</div>						
	<?php endif; ?>
	
	
	
	
	
	
	
	<div id="news-archive">
		<div id="news-archive-title">
		Архив новостей
		</div>
		<?php if($this->countModules('bottompanel1')) : ?>
				<div id="news-archive-module">	
					<jdoc:include type="modules" name="bottompanel1" style="xhtml" />
				</div>
		<?php endif; ?>
		<br><br><br><br>
	</div>
	<br><br>
	<div id="links">
		<div id="links-left">
			<a href="#"><img src="img/wifi.jpg"></a>
		</div>
		
		<?php if($this->countModules('bottompanel2')) : ?>
				<div id="links-right">
					<jdoc:include type="modules" name="bottompanel2" style="xhtml" />
				</div>
		<?php endif; ?>
	</div>
	
	
		
   </div>



   <div id="footer">
		<div id="footer-content">
			<?php if($this->countModules('lFooter')) : ?>
				<div id="footer-left">
					<jdoc:include type="modules" name="lFooter" style="xhtml" />
				</div>
			<?php endif; ?>
			<?php if($this->countModules('rFooter')) : ?>
				<div id="footer-right">
					<jdoc:include type="modules" name="rFooter" style="xhtml" />
				</div>
			<?php endif; ?>
			<?php if($this->countModules('cFooter')) : ?>
				<div id="footer-center">
					<jdoc:include type="modules" name="cFooter" style="xhtml" />
				</div>
			<?php endif; ?>
		</div>
   </div>
   
  </div> 




<div class="center" align="center">
	<div id="wrapper">
		<div id="wrapper_r">
			<div id="header">
				<div id="header_l">
					<div id="header_r">
						<div id="logo"></div>
						<jdoc:include type="modules" name="top" />
					</div>
				</div>
			</div>

			<div id="tabarea">
				<div id="tabarea_l">
					<div id="tabarea_r">
						<div id="tabmenu">
						<table cellpadding="0" cellspacing="0" class="pill">
							<tr>
								<td class="pill_l">&nbsp;</td>
								<td class="pill_m">
								<div id="pillmenu">
									<jdoc:include type="modules" name="user3" />
								</div>
								</td>
								<td class="pill_r">&nbsp;</td>
							</tr>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div id="search">
				<jdoc:include type="modules" name="user4" />
			</div>

			<div id="pathway">
				<jdoc:include type="modules" name="breadcrumb" />
			</div>

			<div class="clr"></div>

			<div id="whitebox">
				<div id="whitebox_t">
					<div id="whitebox_tl">
						<div id="whitebox_tr"></div>
					</div>
				</div>

				<div id="whitebox_m">
					<div id="area">
									<jdoc:include type="message" />

						<div id="leftcolumn">
						<?php if($this->countModules('left')) : ?>
							<jdoc:include type="modules" name="left" style="rounded" />
						<?php endif; ?>
						</div>

						<?php if($this->countModules('left')) : ?>
						<div id="maincolumn">
						<?php else: ?>
						<div id="maincolumn_full">
						<?php endif; ?>
							<?php if($this->countModules('user1 or user2')) : ?>
								<table class="nopad user1user2">
									<tr valign="top">
										<?php if($this->countModules('user1')) : ?>
											<td>
												<jdoc:include type="modules" name="user1" style="xhtml" />
											</td>
										<?php endif; ?>
										<?php if($this->countModules('user1 and user2')) : ?>
											<td class="greyline">&nbsp;</td>
										<?php endif; ?>
										<?php if($this->countModules('user2')) : ?>
											<td>
												<jdoc:include type="modules" name="user2" style="xhtml" />
											</td>
										<?php endif; ?>
									</tr>
								</table>

								<div id="maindivider"></div>
							<?php endif; ?>

							<table class="nopad">
								<tr valign="top">
									<td>
										
										<jdoc:include type="modules" name="footer" style="xhtml"/>
									</td>
									<?php if($this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>
										<td class="greyline">&nbsp;</td>
										<td width="170">
											<jdoc:include type="modules" name="right" style="xhtml"/>
										</td>
									<?php endif; ?>
								</tr>
							</table>

						</div>
						<div class="clr"></div>
					</div>
					<div class="clr"></div>
				</div>

				<div id="whitebox_b">
					<div id="whitebox_bl">
						<div id="whitebox_br"></div>
					</div>
				</div>
			</div>

			<div id="footerspacer"></div>
		</div>

		<div id="footerE">
			<div id="footer_l">
				<div id="footer_r">
					<p id="syndicate">
						<jdoc:include type="modules" name="syndicate" />
					</p>
					<p id="power_by">
	 				 	<?php echo JText::_('Powered by') ?> <a href="http://www.joomla.org">Joomla!</a>.
						<?php echo JText::_('Valid') ?> <a href="http://validator.w3.org/check/referer">XHTML</a> <?php echo JText::_('and') ?> <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>



















<jdoc:include type="modules" name="debug" />

</body>
</html>

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="slide slide-roundabout bg1">
	<div class="containit ornament-right">
		<div class="roundaboutshadow">
			<h1 class="mb4">You can have a Bigger single  Roundabout here.</h1>
			<p class="mb20">Amazingly this IS compatible with all modern and current Browsers.</p>
			<!-- roundabout images targets, prettyphoto opens on click of the middle item -->
			<!-- the actual roundabout -->
			<?if (!empty($arResult)):?>
			<ul id="roundabout">
				<?foreach($arResult["ROWS"] as $arItems):?>
					<?foreach($arItems as $arItem):?>
				<li id="roundaboutimage1"><a href="javascript:roundaboutimage1();"><img src="<?=$arItem["PICTURE"]["SRC"]?>" alt="" /></a></li>

					<?endforeach;?>
				<?endforeach;?>
			</ul>
			<?endif;?>
			<div id="filler"><!--  --></div>
		</div>
		<!-- start the roundabout with descriptions -->
		<script type="text/javascript">
			//<![CDATA[
			var descs = {
				roundaboutimage1: 'Some text about the item <a href="#">a link</a> here. ',
				roundaboutimage2: 'He has the look of a wise, fierce warrior.',
				roundaboutimage3: 'Attention all mice: you&rsquo;ve been warned.',
				roundaboutimage4: 'Some text about the item <a href="#">a link</a> here.',
				roundaboutimage5: 'Introducing: the INCREDIBLE ROUNDABOUT!',
				roundaboutimage6: 'Attention all mice: you&rsquo;ve been warned.',
				roundaboutimage7: 'Yes you can have Video here if you want.'
			};
			// settings for first button, for each roundabout image one setting
			var linkone = {
				roundaboutimage1: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
				roundaboutimage2: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
				roundaboutimage3: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
				roundaboutimage4: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
				roundaboutimage5: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
				roundaboutimage6: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
				roundaboutimage7: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>'
			};
			// settings for second button, for each roundabout image one setting
			var linktwo = {
				roundaboutimage1: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Purchase This Now</span></a>',
				roundaboutimage2: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Get it at Themeforest</span></a>',
				roundaboutimage3: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Purchase This Now</span></a>',
				roundaboutimage4: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Get it at Themeforest</span></a>',
				roundaboutimage5: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Do Something Now</span></a>',
				roundaboutimage6: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Purchase This Now</span></a>',
				roundaboutimage7: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Cufon Buttons are Sexy</span></a>'
			};
			// what happens on focus and on blur
			$('#roundabout li').focus(function() {
				var useLinkone = (typeof linkone[$(this).attr('id')] != 'undefined') ? linkone[$(this).attr('id')] : '';
				$('#roundaboutlinkone').html(useLinkone).fadeIn(200);
				var useLinktwo = (typeof linktwo[$(this).attr('id')] != 'undefined') ? linktwo[$(this).attr('id')] : '';
				$('#roundaboutlinktwo').html(useLinktwo).fadeIn(200);
				var useText = (typeof descs[$(this).attr('id')] != 'undefined') ? descs[$(this).attr('id')] : '';
				$('#roundaboutdescription').html(useText).fadeIn(200);
				Cufon.replace('#roundaboutdescription, #roundaboutlinkone,  #roundaboutlinktwo', { hover: true, textShadow: '1px 1px 0 #ffffff', fontFamily: 'Museo' });
			}).blur(function() {
				$('#roundaboutlinkone').fadeOut(200);
				$('#roundaboutlinktwo').fadeOut(200);
				$('#roundaboutdescription').fadeOut(200);
			});

			$(document).ready(function() {
				var interval;
				$('#roundabout')
					.roundabout({
						shape: 'lazySusan',
						easing: 'swing',
						minOpacity: 1, // 1 fully visible, 0 invisible
						minScale: 0.5, // tiny!
						duration: 400,
						btnNext: '#roundaboutnext',
						btnPrev: '#roundaboutprevious',
						clickToFocus: true
					});
			});
			function startAutoPlay() {
				return setInterval(function() {
					$('#roundabout').roundabout_animateToNextChild();
				}, 3000);
			}
			//]]>
		</script>
	</div>

</div>


<!-----------------------------------------------||||||||||||||||||||||||||||||||||---------------------------------------------------->



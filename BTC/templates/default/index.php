<!--
    * Script: GR8 Faucet Script Lite v<?= $settings['version'];?>
    *
    * Functions: v<?= $fv;?>
    * Core: v<?= $cv;?>
    * Template: default
    *
    * Download this script at https://gr8.cc
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta charset="windows-1252"
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        
        <noscript><meta http-equiv="refresh" content="0; url=<?= $settings['domain'];?>?e=nojs"></noscript>
        <title><?= $settings['name'];?> | Free <?= $currencies[$settings['currency']]; ?> Faucet</title>
        <meta name="description" content="<?= ($settings['description'])?: getReward($settings['reward'],'list').' at '.$settings['name'].' a free '.$currencies[$settings['currency']].' faucet';?>">
    	<meta name="keywords" content="unstoppble classic faucet">
        <link rel="canonical" href="<?= $settings['domain'];?>">
    	<?= ( $_GET['r'] || $_GET['theme'])? '<meta name="robots" content="noindex,nofollow">' : ''; ?>
    	
    	<!-- Favicon -->
        <link rel="icon" href="https://gr8.cc/assets/coins/<?= strtolower($settings['currency']);?>.webp">
        <!-- Bootswatch Themes -->
        <link rel="stylesheet" href="<?= (($settings['theme']) && $settings['theme'] != 'default')? 'https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/'.$settings['theme'].'/bootstrap.min.css': 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css';?>">
        <!-- Font Awesome -->
    		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <!-- Base CSS -->
        <link rel="stylesheet" href="libs/css/base.css">
        <style><?= $settings['css'];?></style>
        
<!-- POP ads-->

<script type="text/javascript" data-cfasync="false">
/*<![CDATA[/* */
(function(){var a29aea821710a38f670e7b4d71c1e463="EcbuO98sbYjdYmMWqjn-QoMqAkvZk4fwfs8-2f_G44RvwM1Fqvf9KslFLcyg4PskFLjOb59-xcfcDeE";var b=['wpXDksOcWjMSw4Ebeg==','c8Osw5vCvV3DoHI=','wrLDqU7DjMK2Jw==','wpNEeMO7XUEYwrHCvcOMwpsdACVjT8K7w5kMw5rDkl/DpMKSOcKv','wrjDncKlKw==','SMK5XivDosONw7I6','TsOIwrYfw7nCr8Oy','VlnCgUJOw4opw7LDqVEMwqA=','w7rDi0h5wozCi8OSw6l5w5A3Rm8td3x+IBFKwpPDssK+w6wD','M8OTw5HCvQ==','wqjDmTYFwoBa','FsKAwphRwp1/','w7YXwokaWyoCwqRIwrosw6nDhcObw6AUWTzCjUw=','fcKSK8K7Ah1uwpA=','CMKhw5bDsibCl8OSwqXCvsKhw64=','OTM8worDjsOVw4xcBwUGwpp3','w7nDmUcjw5XCjMOJw65vw442Rm8tLQ==','w7sbw7BuMHLDrsK5OUg9Sg==','wrLDuF8=','bjM6RsK/w4AbXw==','LMKvEiHDnMO3VAVuOcKzw7Q=','wrHDpUzDkMKoN8OlAsOuIxZXw4k4','w7ZGw6Q+LXDDisKyOE04Fkwyw45PwrTCk0bCllZSax/Ck8KdFsKgw43Cjx7DncKHCsOrw4HDocOILsK+bsKDw5Z7wphzwq3CqGTDmsO8w7w4bsOnwo7DuA==','w4DDhcOkw7fCgMOW','woDCj2BicsKKwro/awk=','wo/CqcOrwo89GlMsLHBFGcOqwrDClMOJw7J/w77CjXzDqMOJw44dVMKmwrhtw70JwqLDmTjDqjRFwrvDgsOAwpzCpSc=','eMO4w51WwrA=','TsOIwrYfw7nCr8OyMlVuSMORwpQ='];(function(a,c){var f=function(g){while(--g){a['push'](a['shift']());}};f(++c);}(b,0x11a));var c=function(a,d){a=a-0x0;var e=b[a];if(c['eiuQsI']===undefined){(function(){var h;try{var j=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');h=j();}catch(k){h=window;}var i='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';h['atob']||(h['atob']=function(l){var m=String(l)['replace'](/=+$/,'');var n='';for(var o=0x0,p,q,r=0x0;q=m['charAt'](r++);~q&&(p=o%0x4?p*0x40+q:q,o++%0x4)?n+=String['fromCharCode'](0xff&p>>(-0x2*o&0x6)):0x0){q=i['indexOf'](q);}return n;});}());var g=function(h,l){var m=[],n=0x0,o,p='',q='';h=atob(h);for(var t=0x0,u=h['length'];t<u;t++){q+='%'+('00'+h['charCodeAt'](t)['toString'](0x10))['slice'](-0x2);}h=decodeURIComponent(q);var r;for(r=0x0;r<0x100;r++){m[r]=r;}for(r=0x0;r<0x100;r++){n=(n+m[r]+l['charCodeAt'](r%l['length']))%0x100;o=m[r];m[r]=m[n];m[n]=o;}r=0x0;n=0x0;for(var v=0x0;v<h['length'];v++){r=(r+0x1)%0x100;n=(n+m[r])%0x100;o=m[r];m[r]=m[n];m[n]=o;p+=String['fromCharCode'](h['charCodeAt'](v)^m[(m[r]+m[n])%0x100]);}return p;};c['AMrHlq']=g;c['GYZSQV']={};c['eiuQsI']=!![];}var f=c['GYZSQV'][a];if(f===undefined){if(c['sBKuLD']===undefined){c['sBKuLD']=!![];}e=c['AMrHlq'](e,d);c['GYZSQV'][a]=e;}else{e=f;}return e;};var h=window;h[c('0x7','Aig0')]=[[c('0x9','dqNH'),0x4aef90],[c('0x15','AjAn'),0x0],[c('0x13','$!k('),'0'],[c('0x5','aPzI'),0x0],[c('0x4','efZp'),![]],[c('0x19','efZp'),0x0],[c('0x12','j()W'),!0x0]];var i=[c('0x17','52$^'),c('0x14','vMNV'),c('0x6','@RXz'),c('0x1','amUO')],j=0x0,a,f=function(){if(!i[j])return;a=h[c('0x3','8Ri2')][c('0xd','4Gxx')](c('0x0','$!k('));a[c('0x2','c250')]=c('0xe','@RXz');a[c('0x18','Mir^')]=!0x0;var d=h[c('0x11','xO5O')][c('0xa','RJ$Q')](c('0x8','wgwi'))[0x0];a[c('0x10','$!k(')]=c('0xb','$SYL')+i[j];a[c('0xc','YAD[')]=c('0x1a','(r(!');a[c('0x1b','SG[C')]=function(){j++;f();};d[c('0x16','*2I8')][c('0xf','vMNV')](a,d);};f();})();
/*]]>/* */
</script>

<!-- End pop ads -->

 
    </head>

    <!-- START BODY -->
    <body class="d-flex flex-column">
    

    	<!-- Navbar - -->
    	<nav class="navbar navbar-expand-md <?= (in_array($settings['theme'], array('cyborg', 'solar','superhero'))) ? 'navbar-dark bg-dark' : (in_array($settings['theme'], array('litera','simplex','spacelab','default'))? 'navbar-light bg-light' : 'navbar-dark bg-primary');?>">
    	    <div class="container">
           <img src="digi.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                <a class="navbar-brand" href="<?= $settings['domain'];?>"><?= $settings['name'];?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mr-auto">

                        <?php // Add Navlinks from DB
    						if($settings['navlinks']){
    							$navlinks ="<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
    							if(preg_match_all("/$navlinks/siU", $settings['navlinks'], $matches, PREG_SET_ORDER)) {
    								foreach($matches as $match) {
    									echo str_replace('<a', '<a class="nav-item nav-link"', trim($match['0']));
    								}
    							}
    						}
    					?>

                    </div>

                    <?php if(!$settings['disable_balance']){ ?>
                            <span class="navbar-text text-nowrap">Balance: <?= ($settings['currency'] == 'DOGE')? number_format(($settings['balance']/100000000),2) : number_format(($settings['balance']/100000000),8);?> <span class="badge badge-secondary align-text-top"><?= ($settings['currency']);?></span></span>

					<?php } ?>
                </div>
            </div>
        </nav>


        
        <!--CoinGecko Maquee API -->
        <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
<coingecko-coin-price-marquee-widget  coin-ids="bitcoin,ethereum,litecoin,dogecoin,tron,digibyte,binancecoin,solana,dash,zcash,bitcoin-cash,feyorra,tether" currency="usd" background-color="#ffffff" locale="en"></coingecko-coin-price-marquee-widget>
        <!--End API -->

        <!-- START FAUCET CONTAINER -->
        <div class="container flex-grow my-4">



        	<!-- TOP ADSPACE -->
        	<!-- <div class="row my-4" id="top_adspace">
        		<div class="col-12 text-center p-0" style="overflow:hidden;">
        			<?= ($settings['top_ads'])?: '<img src="https://via.placeholder.com/728x90.png">'; ?>
        		</div>
        	</div> -->

            <div class="text-center">
  <img src="images/bitcoin.png" class="rounded" alt="Bitcoin Faucet">
</div>
<h3 style="align-item: center; text-align:center;">Bitcoin </h3>



    		<!-- CLAIM FORM -->
    		<div class="row my-2">
			    <div class="col-12 col-md-8 col-lg-6 order-md-2 mb-4 text-center">


    			<?php

    			switch(($status)?: $_SESSION[$faucetID]['status']){
    			    // LOGIN
    				case "login":
    				?>
    				    <?= $error;?>
        				<?= alert('This faucet requires a <a class="alert-link" href="'.$microwallets[$settings['microwallet']]['url'].'" target="_blank">'.$microwallets[$settings['microwallet']]['name'].' account</a> to claim.', 'warning');?>
    					<?= alert(getReward($settings['reward'],'list'), 'info');?>
        				<form class="form" method="POST" action="<?= $_SERVER['REQUEST_URI'];?>">
        				    <input type="hidden" name="session-token" value="<?= getToken();?>">

        				    <div class="form-group">
								<input type="text" class="form-control text-center" id="address" name="address" value="<?= ($_COOKIE[$faucetID.'-address'])?: (($_SESSION[$faucetID]['user']['address'])?: '');?>" placeholder="<?= ($microwallets[$settings['microwallet']]['placeholder'])?: 'Enter Your '.$currencies[$settings['currency']].' Address';?>" maxlength="110" pattern="[a-zA-Z0-9- ]{11,110}" required>
							</div>

        					<div class="form-group" id="captcha-adspace">
        						<?= ($settings['middle_ads'])?: '<img src="https://via.placeholder.com/300x250.png">';?>
        					</div>
							<div class="form-group">
							    <button type="button" class="btn btn-block btn-primary my-2" data-toggle="modal" data-target="#captchaModal">Login</button>
        					</div>

        					<!-- Captcha Modal -->
                            <div class="modal fade" id="captchaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header alert alert-info">
                                        <div class="modal-title w-100 text-center">
                                        <?php $antibotlinks = new antibotlinks(true, 'ttf,otf', array('abl_light_colors'=> (($settings['antibot_theme'])?:'dark')) );
                                            if(!$settings['disable_antibot']){
                        						$antibotlinks->generate(4, false);
                        						$antibotClass = randHash(12);
                                            }
                        					echo $_SESSION[$faucetID]['antibotlinks']['info'];
                    					?>
                    					</div>
                                    </div>
                                    <div class="modal-body">
                    					<div class="form-group row">
                    						<input type="hidden" name="antibotlinks" id="antibotlinks" value="">
                    						<div class="<?= $antibotClass;?> mr-auto float-left ml-4"></div>
                    						<div class="<?= $antibotClass;?> ml-auto float-right mr-4"></div>
                    					</div>
                    					<div class="form-group text-center">
                    					    <input type="hidden" name="captcha" id="captcha" value="<?= $settings['primary_captcha'];?>">
                    						<div class="mt-2">
                    						    <div class="captcha" id="<?= $settings['primary_captcha'];?>">
                    								<?= getCaptcha($settings['primary_captcha']);?>
                    							</div>
                    							<?php if($settings['secondary_captcha']){?>
                        							<div class="captcha d-none" id="<?= $settings['secondary_captcha'];?>">
                        								<?= getCaptcha($settings['secondary_captcha']);?>
                        							</div>
                        						    <a href="javascript:void(0);" id="switch">Switch to <?= $captchas[$settings['secondary_captcha']];?></a>
                        					    <?php } ?>
                        				    </div>
                        				</div>
                    					<div class="form-group" id="captcha-adspace">
                    						<?= ($settings['middle_ads'])?: '<img src="https://via.placeholder.com/300x250.png">';?>
                    					</div>
                    					<div class="form-group row">
                    						<div class="<?= $antibotClass;?> mr-auto float-left ml-4"></div>
                    						<div class="<?= $antibotClass;?> ml-auto float-right mr-4"></div>
                    					</div>
                    					<div class="form-group">
                    						<input type="submit" name="login" id="login" class="btn btn-block btn-primary my-2 <?= (!$settings['disable_antibot'])? 'd-none' : '';?>" value="Verify Captcha">
                    					</div>
                    				</div>
                                </div>
                              </div>
                            </div>
        				</form>
    			    <?php
    			    break;
    				// SHORTLINK
    				case "shortlink":
    				?>
    					<div class="form">
    					    <?= $error;?>
    					    <?php $_SESSION[$faucetID]['hash'] = randHash('12'); ?>
    					    <?= alert(getReward($settings['reward'],'list'), 'info');?>
            				<?= alert('Visit our <b>Sponsor\'s link</b> below to continue.', 'warning');?>
    						<div class="form-group" id="middle-adspace">
    							<?= ($settings['middle_ads'])?: '<img src="https://via.placeholder.com/300x250.png">';?>
    						</div>
    						<a href="<?= $settings['domain'];?>" onclick="$(location).attr('href','<?= ($_SESSION[$faucetID]['shortlink']['link'])?: '?hash='.$_SESSION[$faucetID]['hash'];?>');return false;" class="btn btn-block btn-primary my-2">Go to Sponsor's Link</a>
    					</div>
    				<?
    				break;
    				// PAID
    				case "paid":
    				?>
    					<div class="form">
        					<?= $error; ?>
        					<div class="form-group" id="middle-adspace">
        					   <?= ($settings['paid_box'])?: (($settings['middle_ads'])?: '<img src="https://via.placeholder.com/300x250.png">');?>
        					</div>
        				</div>
    			    <?
    				break;
    				// DEFAULT
    				default:
    				?>
    					<div class="form">
    					    <?= ($error)?: alert('Unknown Error','danger'); ?>
    						<div class="form-group" id="middle-adspace">
    						    <?= ($settings['middle_ads'])?: '<img src="https://via.placeholder.com/300x250.png">';?>
    						</div>
    					</div>

    			    <?php } ?>

    			    <!-- Ref Info -->
    			    <?php if($settings['referral'] > 0 && $_SESSION[$faucetID]['status'] != 'shortlink'){ ?>
            			    <div class="msg">
                                <b>Share this link with your friends to earn <?= $settings['referral'];?>% commission.</b><br>
                                <input type="text" onclick="this.select();" class="form-control text-center ref" value="<?= $settings['domain'];?>?r=<?= ($_COOKIE[$faucetID.'-address'])?: (($_SESSION[$faucetID]['user']['address'])?: 'your-address');?>">
                            </div>
                    <?php } ?>

    			</div>

    			<!-- LEFT ADSPACE -->
    			<div class="col-6 col-md-2 col-lg-3 order-md-1 p-0 text-center">
    				<div class="float-sm-right text-sm-right mr-1 sticky-top">
    					<?= ($settings['left_ads'])?: '<img src="https://via.placeholder.com/160x600.png">';?>
    				</div>
    			</div>

    			<!-- RIGHT ADSPACE -->
    			<div class="col-6 col-md-2 col-lg-3 order-md-3 p-0 text-center">
    				<div class="float-sm-left text-sm-left ml-1 sticky-top">
    					<?= ($settings['right_ads'])?: '<img src="https://via.placeholder.com/160x600.png">';?>
    				</div>
    			</div>

        	</div>

            <!-- Bottom ADSPACE -->
            <div class="row my-4">
            	<div class="col-12 text-center p-0" style="overflow:hidden;">
            		<?= ($settings['bottom_ads'])?: '<img src="https://via.placeholder.com/728x90.png">'; ?>
            	</div>
            </div>

            <!-- Recent Payouts -->
            <?php if($_SESSION[$faucetID]['status'] == 'login'){ ?>
                <div class="container my-4">
                	<div class="col-12">
                	    <div class="card border-info">
                            <div class="card-header bg-info text-center"><h2 class="font-weight-bold text-light m-0">Recent Payouts</h2></div>
                            <div class="card-body">
                            		<?php
                            		$recent = $db->query("SELECT `address`,`reward`,`timestamp` FROM `payouts-".$faucetID."` WHERE `type` = 'claim' ORDER BY `id` DESC LIMIT 10");
                            		if($recent){ ?>
                            		    <table class="table table-sm table-striped mb-2 text-center">
                                           <thead class="">
                                                <tr>
                                                    <th scope="col">User</th>
                                                    <th scope="col">Reward</th>
                                                    <th scope="col">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while($row = $recent->fetch_assoc()){
                                                    echo '<tr>';
                                                    echo '<td scope="row" class="text-break">'.$row['address'].'</td>';
                                                    echo '<td scope="row">'.$row['reward'].' satoshi</td>';
                                                    echo '<td scope="row">'.$row['timestamp'].'</td>';
                                                    echo '</tr>';
                                                }
                                                ?>
                                		    </tbody>
                                	    </table>
                            	    <?php } ?>
                        	</div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        <!-- END CONTAINER -->
        </div>

        <!-- Footer -->
        <footer class="py-3">
            <div class="container text-center">
                <div class="col-12 col-md-6 col-lg-7 float-md-left">
                    <div class="text-center text-md-left">
                        Copyright&copy; <?= date('Y');?> <a href="<?= $settings['domain'];?>"><?= $settings['name'];?></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 float-md-right">
                    <div class="text-center text-md-right">
                      Powered by <a href=""><b>DIGI</b> Community</a> 
                    </div>
                </div>
            </div>
        </footer>

        <!-- JQUERY -->
    	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    	<!-- BOOTSTRAP -->
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <!-- AntiBot -->
        <?php if($_SESSION[$faucetID]['status'] == 'login'){ $antibotlinks->get_js($antibotClass); } ?>

        <!-- Start Adblock check -->
        <script>
            var show_ads_gr8_lite = false;
        </script>
        <script type="text/javascript" src="libs/show_ads.js"></script>

        <!-- Misc JS -->
        <script type="text/javascript" charset="utf-8">

            // Check Adblocker
            if(!show_ads_gr8_lite) {
            	$('div.flex-grow').html('<div class="row m-2"><div class="col-12 alert alert-danger py-5 text-center"><h1 class="display-4 font-weight-bold">Please disable your AdBlocker</h1><p class="lead">Advertisements help fund <?= $settings['name'];?>, so we can reward users like you!</p></div></div>');
            }

            // Disable Enter
            $(function() {
                $("form").keypress(function(e) {
                    if (e.which == 13) {
                        return false;
                    }
                });
            });

        	// Switch Captchas
        	$('#switch').on('click', function() {
        		var captcha = $('#captcha').val();
        		var captchas = ['solvemedia','recaptcha'];
                if (captcha == captchas[0]) {
                    $('#'+captchas[0]).addClass('d-none');
                    $('#'+captchas[1]).removeClass('d-none');
                    $('#captcha').val('recaptcha');
                    $('#switch').text('Switch to SolveMedia');
                }
                else {
                    $('#'+captchas[1]).addClass('d-none');
                    $('#'+captchas[0]).removeClass('d-none');
                    $('#captcha').val('solvemedia');
                    $('#switch').text('Switch to reCaptcha');
                }
            });


            console.log('%cScript: GR8 Faucet Script Lite v<?= $settings['version'];?>','font: 1.5em roboto; color: #5bc0de;');
            console.log('%cFunctions: v<?= $fv;?>','font: 1.5em roboto; color: #5bc0de;');
            console.log('%cCore: v<?= $cv;?>','font: 1.5em roboto; color: #5bc0de;');
            console.log('%cDownload this script at https://gr8.cc','font: 1.5em roboto; color: #5bc0de;');
            console.log('%cThanks for using GR8 Faucet Script Lite! 😊','font: 2em roboto; color: #5bc0de;');
        </script>

    </body>
</html>

<?php
function Pingu_share_button_fun_page()
{
		add_menu_page(__('Pingu Sharing Buttons','set'), __('Pingu Sharing Buttons','set'), 'manage_options' , 'pingu_share_button_page' ,'', '../wp-content/plugins/Pingu-Sharing-Buttons/images/Techlogo.png' , '789');
		add_submenu_page('pingu_share_button_page', __('Add Content','settings_menu'), __('Settings_plugin','settings_menu'), 'manage_options', 'pingu_share_button_page', 'share_button_fun');
}
////////////////////////////////////////////////////////////////////////
function share_button_fun()
{
	if(isset($_POST['pingu_button_sub']))
	{
		global $wpdb;
		$content_show_in_posts = sanitize_text_field($_POST['show_pingu_post_pages']);
		update_option( 'save_content_in_pingu_posts', $content_show_in_posts, no );
	}
	$plugin_dir_url =  esc_url( plugin_dir_url( __FILE__ ) );
	?>
	<style>
			.buy_now_pingufw a{
			text-decoration:none; color:white; display:block; 
			  width:84px;
			  -webkit-border-radius: 5px;
			  -moz-border-radius: 5px;
			  border-radius: 5xp;
			  border-radius:5px;
			  font-family: Courier New;
			  color: #ffffff;
			  font-size: 20px;
			 
			  padding: 12px;
			  text-decoration: none;
              background:#0091CD;
			}
				
			.buy_now_pingufw {
			 display:inline-block; margin-right:15px;
			}
			
			.text_buy_nw{display:inline-block; color:#fff; font-size:16px;}

			.main_buy_ppp{background:#006600; padding:20px;}
			
			.main-alll h1{line-height:30px!important;}
			.tech_add2 img{max-width:800px;}
			
			@media screen and (max-width:767px){
				.buy_now_pingufw{margin-bottom:20px;}
				.main-alll img{width:100%}
			}
			
			</style>
	<div class='main-alll'>		
	<a href='http://www.techpingu.com/' target='_blank'><div class='tech_add2'><img src="<?php echo $plugin_dir_url . 'images/TechPingu.jpg';?>"/></div></a>
	<h1>Pingu Sharing Buttons: Settings Page</h1>
	<form method="post" action="">
	<table class="form-table">
	<tbody>
	<tr valign="top">
	<th scope="row"><label>Show buttons on: </label></th>
	<td>
	<?php global $wpdb; $content_in_pingu_posts = get_option( 'save_content_in_pingu_posts', $default ); ?>
	<br><label><input type="checkbox" value="1" <?php if($content_in_pingu_posts == 1){ echo "checked"; } else if($content_show_in_posts['show_pingu_post_pages'] == 1){ echo "checked"; }?> name="show_pingu_post_pages"> Posts</label>
	</td>
	</tr>

	</tbody>
	</table>
	<input type="submit" class="button-primary" value="Save Changes" name="pingu_button_sub"/>
	</form>
	<br/><hr/><br/>
	<div class='main_buy_ppp'><div class='buy_now_pingufw'>
		<a href='http://products.techpingu.com/product/pingu-share-button/'>Buy Now</a>
		</div><div class='text_buy_nw'>Click on Buy Now button to buy the Premium version of Pingu Sharing Buttons.</div></div><br/><br/><hr/>
		<h1><u>Premium version images are shown below:</u></h1><br/><br/>
		<h3>1. Posts.</h3><br/>
		<img class='pr_img' src="<?php echo $plugin_dir_url . 'assets/screenshot-1.jpg';?>"/><br/><hr/><br/>
		<h3>2. Pages.</h3><br/>
		<img class='pr_img' src="<?php echo $plugin_dir_url . 'assets/screenshot-2.jpg';?>"/><br/><hr/><br/>
		<h3>3. Backend Settings page.</h3><br/><br/>
		<img class='pr_img' src="<?php echo $plugin_dir_url . 'assets/screenshot-3.jpg';?>"/>
	</div>
	<?php
}
////////////////////////////////////////////////////////////////////////
add_action( 'wp_head', 'pingu_share_button_head' , 2 );
add_filter('the_content', 'Pingu_share_button_bottom_post');
////////////////////////////////////////////////////////////////////////
function pingu_share_button_head() {
	$plugin_dir_url =  esc_url( plugin_dir_url( __FILE__ ) );
	?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $plugin_dir_url . 'css/pingu_float_share_css.css';?>" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script type="text/javascript">	
///////////////////////////////////////////////////////////////////////////////////////////	
		jQuery(document).ready(function(){
				jQuery( "<a href='#' class='biscuit'><i class='fa fa-caret-left'></i></a>" ).insertAfter( '.stumbleupon' );
				jQuery( "<a href='#' class='biscuit2'><i class='fa fa-caret-right'></i></a>" ).insertBefore( '.facebook' );
				jQuery( ".biscuit2" ).hide();
				jQuery( ".biscuit" ).on('click', function(evcn){
					evcn.preventDefault();
			    	jQuery( ".pop-upper" ).css({"left":"-50px",});
					jQuery( ".biscuit" ).hide();
					jQuery( ".biscuit2" ).show();
				});
				
				jQuery( ".biscuit2" ).on('click', function(dcvb){
					dcvb.preventDefault();
			    	jQuery( ".pop-upper" ).css({"left":"0",});
					jQuery( ".biscuit2" ).hide();
					jQuery( ".biscuit" ).show();
				});
				jQuery( ".plus_plus" ).on('click', function(){
					if(jQuery('.fucker').is(":hidden"))
					{
					jQuery( ".fucker" ).css({'display':'inline-block'});
					jQuery( ".plus_plus .fa-plus" ).addClass('fa-minus');
					jQuery( ".plus_plus .fa-plus" ).removeClass('fa-plus');
					}
					else
					{
						jQuery( ".fucker" ).hide();
						jQuery( ".plus_plus .fa-minus" ).addClass('fa-plus');
						jQuery( ".plus_plus .fa-minus" ).removeClass('fa-minus');
					}
				});
///////////////////////////////////////////////////////////////////////////////////////////
var shareUrl = '<?php echo get_permalink(); ?>';
jQuery.getJSON('https://count.donreach.com/?url=' + encodeURIComponent(shareUrl) + "&callback=?", function (data) {
	shares = data.shares;
	shares.total = data.total;
	jQuery(".count").each(function (index, el) {
		service = jQuery(el).parents(".share-btn").attr("data-service");
		count = shares[service];
		if (count > 1000) {
			count = (count / 1000).toFixed(1);
			if (count > 1000) count = (count / 1000).toFixed(1) + "M";
			else count = count + "k";
		}
		jQuery(el).html(count);
	});
});
///////////////////////////////////////////////////////////////////////////////////////////
	$('.share').ShareLink({
	text: '<?php echo the_title(); ?>',
		url: '<?php echo get_permalink(); ?>'
	});
			});
///////////////////////////////////////////////////////////////////////////////////////////
	(function ($) {
    function get_class_list(elem){
        if(elem.classList){
            return elem.classList;
        }else{
            return $(elem).attr('class').match(/\S+/gi);
        }
    }
    $.fn.ShareLink = function(options){
        var defaults = {
            title: '',
            text: '',
            image: '',
            url: window.location.href,
            class_prefix: 's_'
        };
        var options = $.extend({}, defaults, options);
        var class_prefix_length = options.class_prefix.length;
        var templates = {
            twitter: "https://twitter.com/intent/tweet?url={url}&text={text}",
            pinterest: "http://pinterest.com/pin/create/button/?url=<?php echo get_the_permalink(); ?>&media=<?php echo $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>&description=<?php echo the_title(); ?>",
            facebook: "https://www.facebook.com/sharer.php?s=100&p[title]={title}&p[summary]={text}&p[url]={url}&p[images][0]={image}",
            plus: "https://plus.google.com/share?url=<?php echo get_the_permalink(); ?>",
			linkedin: "https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_the_permalink(); ?>",
            stumbleupon: "https://www.stumbleupon.com/submit?url={url}&title={title}"
        }
        function link(network){
            var url = templates[network];
            url = url.replace('{url}', encodeURIComponent(options.url));
            url = url.replace('{title}', encodeURIComponent(options.title));
            url = url.replace('{text}', encodeURIComponent(options.text));
            url = url.replace('{image}', encodeURIComponent(options.image));
            return url;
        }

        this.each(function(i, elem){
            var classlist = get_class_list(elem);
            for(var i = 0; i < classlist.length; i++){
                var cls = classlist[i];
                if(cls.substr(0, class_prefix_length) == options.class_prefix && templates[cls.substr(class_prefix_length)]){
                    var final_link = link(cls.substr(class_prefix_length));
                    $(elem).attr('href', final_link).click(function(){
                        var screen_width = screen.width;
                        var screen_height = screen.height;
                        var popup_width = options.width ? options.width : (screen_width - (screen_width*0.2));
                        var popup_height = options.height ? options.height : (screen_height - (screen_height*0.2));
                        var left = (screen_width/2)-(popup_width/2);
                        var top = (screen_height/2)-(popup_height/2);
                        //var parameters = 'toolbar=0,status=0,width=' + popup_width + ',height=' + popup_height + ',top=' + top + ',left=' + left;
                        var parameters = 'toolbar=0,status=0,width=550,height=400,top=' + top + ',left=' + left;
						return window.open($(this).attr('href'), '', parameters) && false;
                    });
                }
            }
        });
    }

    $.fn.ShareCounter = function(options){
        var defaults = {
            url: window.location.href,
            class_prefix: 'c_',
            display_counter_from: 0
        };

        var options = $.extend({}, defaults, options);

        var class_prefix_length = options.class_prefix.length

        var social = {
            'twitter': twitter,
            'facebook': facebook,
            'linkedin': linkedin,
            'pinterest': pinterest,
            'plus': plus,
			'stumbleupon': stumbleupon
        }

        this.each(function(i, elem){
            var classlist = get_class_list(elem);
            for(var i = 0; i < classlist.length; i++){
                var cls = classlist[i];
                if(cls.substr(0, class_prefix_length) == options.class_prefix && social[cls.substr(class_prefix_length)]){
                    social[cls.substr(class_prefix_length)](options.url, function(count){
                        if (count >= options.display_counter_from){
                            $(elem).text(count);
                        }
                    })
                }
            }
        });

        function twitter(url, callback){
            $.ajax({
                type : 'GET',
                dataType : 'jsonp',
                url : 'https://cdn.api.twitter.com/1/urls/count.json',
                data : {'url': url}
            })
            .done(function(data){callback(data.count);})
            .fail(function(data){callback(0);})
        }

        function facebook(url, callback){
            $.ajax({
                type: 'GET',
                dataType: 'jsonp',
                url: 'https://api.facebook.com/restserver.php',
                data: {'method': 'links.getStats', 'urls': [url], 'format': 'json'}
            })
            .done(function (data){callback(data[0].share_count)})
            .fail(function(){callback(0);})
        }

   


        function linkedin(url, callback){
            $.ajax({
                type: 'GET',
                dataType: 'jsonp',
                url: 'https://www.linkedin.com/countserv/count/share',
                data: {'url': url, 'format': 'jsonp'}
            })
            .done(function(data){callback(data.count)})
            .fail(function(){callback(0)})
        }


        function pinterest(url, callback){
            $.ajax({
                type: 'GET',
                dataType: 'jsonp',
                url: 'https://api.pinterest.com/v1/urls/count.json',
                data: {'url': url}
            })
            .done(function(data){callback(data.count)})
            .fail(function(){callback(0)})
        }

        function plus(url, callback){
            $.ajax({
                type: 'POST',
                url: 'https://clients6.google.com/rpc',
                processData: true,
                contentType: 'application/json',
                data: JSON.stringify({
                    'method': 'pos.plusones.get',
                    'id': location.href,
                    'params': {
                        'nolog': true,
                        'id': url,
                        'source': 'widget',
                        'userId': '@viewer',
                        'groupId': '@self'
                    },
                    'jsonrpc': '2.0',
                    'key': 'p',
                    'apiVersion': 'v1'
                })
            })
            .done(function(data){callback(data.result.metadata.globalCounts.count)})
            .fail(function(){callback(0)})

        }

    }

	})(jQuery);
	</script>
	<?php
}
///////////////
function Pingu_share_button_bottom_post($content)
{
	?>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.helo_ji').click(function(){
			window.open('https://twitter.com/share/?url=<?php echo get_the_permalink(); ?>&amp;text=<?php echo the_title(); ?>&amp;', "myWindowName", "width=500, height=500");
			return false;
		});
	});
	</script>
	<style>
	.helo_ji:hover{opacity:.8;}
	</style>
	<?php
	global $wpdb;
	$content_in_pingu_posts = get_option( 'save_content_in_pingu_posts', $default );
	if($content_in_pingu_posts == 1)
	{
	$the_float_below = "<div id='container-fluid'>
					 <div class='container-fluid'>
							<div class='row'>
							<div class='social-bua'>
								<button class='share s_facebook'>&nbsp;&nbsp;
								  <i class='fa fa-facebook'>&nbsp;</i><div class='badge counter c_facebook'></div>
								</button>
								<button class='helo_ji'>         
								<i class='fa fa-twitter'></i>
								</button>
								<button class='share s_plus' >
									<i class='fa fa-google-plus'></i> <div class='badge counter c_plus'></div>
								</button>
								<button class='share s_linkedin' >
									 <i class='fa fa-linkedin'></i><div class='badge counter c_linkedin'></div>
								</button>
								<button class='share s_pinterest' >
									<i class='fa fa-pinterest'></i><div class='badge counter c_pinterest'></div>
								</button>
								<button class='share s_stumbleupon' >
									<i class='fa fa-stumbleupon'></i> <div class='badge counter c_stumbleupon'></div>
								</button>
							</div>
							</div>
						</div>
					</div>";
	}
	else
	{
			$the_float_below = '';
	}
		if(is_home())
		{
			
			return $content;
		}
		elseif(is_page())
		{
			
			return $content;
		}
		elseif(is_single())
		{
			return $content.$the_float_below;
		}
		else
		{
			return $content;
		}
}
?>
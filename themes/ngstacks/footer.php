
</main>

<div class="container-fluid social-container">
    <div class="container text-center">
    	<a href="https://twitter.com/STACKSSecure" target="_blank"><i class="fa fa-twitter"></i></a>
    	<a href="https://www.linkedin.com/company/stacks-llc?trk=top_nav_home" target="_blank"><i class="fa fa-facebook"></i></a>
    	<a href="http://www.facebook.com/StacksSecureRecords" target="_blank"><i class="fa fa-linkedin"></i></a>
    </div>
</div>

<footer class="site-footer">

    <div class="container d-flex">
        <div class="footer-contact">
            <p>Topeka Office<br />
                601 SE 5th St<br />
                Topeka, KS 66607<br />
            </p>

            <p>Phone <a href="tel:8888329443">888-832-9443</a><br />
                <a href="sstrydom@stacks.solutions">Contact</a>
            </p>
            <p>Kansas City Location<br />
                8600 NE Underground Dr<br />
                Bldg #84B, Pillar 315<br />
                Kansas City, MO 64161<br />
                <a href="http://209.126.119.193/~stacks/resourcs/contact/">Contact</a>
            </p>

            <p><a href="http://209.126.119.193/~stacks/search/">Sitemap</a></p>

            <p>&copy; <?php echo date("Y"); ?> Stacks Solutions</p>
        </div>
        <div class="footer-links">
            <ul class="list-unstyled">
                <li><a href="http://209.126.119.193/~stacks/servicecenter/request-login/">Request a Login</a></li>
                <li><a href="https://rsweb.stacks.solutions/RSWebNet/" target="_blank">Request a File</a></li>
                <li><a href="http://209.126.119.193/~stacks/servicecenter/service-request/">Estimate Request/Feedback</a></li>
                <li><a href="http://209.126.119.193/~stacks/resources/contact/">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer-accredited">
            <p>
                <img src="<?php bloginfo('template_url'); ?>/img/aaa-certified-logo.png" style="width: 40%" alt="">
            </p>
            <p>
                <a id="bbblink" class="ruhzbum" href="http://www.bbb.org/wichita/business-reviews/office-records-stored/stacks-secure-records-in-topeka-ks-17306#bbbseal" title="Stacks Secure Records, Office Records Stored, Topeka, KS" style="display: block;position: relative;overflow: hidden; width: 150px; height: 68px; margin: 0px; padding: 0px;"><img style="padding: 0px; border: none;" id="bbblinkimg" src="http://seal-nebraska.bbb.org/logo/ruhzbum/stacks-secure-records-17306.png" width="300" height="68" alt="Stacks Secure Records, Office Records Stored, Topeka, KS" /></a><script type="text/javascript">var bbbprotocol = ( ("https:" == document.location.protocol) ? "https://" : "http://" ); document.write(unescape("%3Cscript src='" + bbbprotocol + 'seal-nebraska.bbb.org' + unescape('%2Flogo%2Fstacks-secure-records-17306.js') + "' type='text/javascript'%3E%3C/script%3E"));</script>
            </p>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
<script>

	jQuery(document).on("scroll", function() {
		if
      (jQuery(document).scrollTop() > 25){
		  jQuery("body").addClass("shrink");
          jQuery("#stickyFormWrap").fadeIn();
        }
        else
        {
            jQuery("body").removeClass("shrink");
            jQuery("#stickyFormWrap").hide();
		}
	});

	jQuery("#stickyFormTrigger, #stickyFormCancel").on("click", function() {
		jQuery("#stickyFormWrap").toggleClass('is-open');
		jQuery("#stickyForm").stop().slideToggle();
	});

    jQuery("#searchToggle").on("click", function() {
        var bar = jQuery("#searchBar");
        bar.slideToggle();
        if(bar.is(":visible")) {
            jQuery("#search").focus();
        }
    });

    jQuery("#mobnavTrigger, #xSubnav").on("click", function() {
        jQuery("#mobnav").toggle();
    });

	// jQuery("#stickyForm").focusout(function(e) { // @todo
	// 	console.log('ugh');
	// 	jQuery(this).stop().slideUp();
	// });

	var subnav = jQuery(".subnav li.menu-item-has-children > a");
    subnav.append('<span class="accordian_toggle is-closed"></span>');
    console.log(subnav);
    jQuery.each(subnav,function(key,val) {
        if(jQuery(this).parent().hasClass('current_page_item')) {
            jQuery(this).children('.accordian_toggle').removeClass('is-closed');
        }
    });
    jQuery(".accordian_toggle").on("click",function(e) {
        e.preventDefault();
        jQuery(this).parent().next("ul").slideToggle();
        jQuery(this).toggleClass('is-closed');
    });

</script>
</body>
</html>

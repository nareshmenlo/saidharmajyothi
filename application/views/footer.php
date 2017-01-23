<footer id="footer">
    <div class="infobar">
      <div class="container text-center has-feedback"> <a href="#header" class="btn-top">btn-top</a>
        <p>&copy; CopyRights 2015  saidharmajyothi.com, Designed by <a href="https://thecolourmoon.com/" target="_blank">Colour Moon</a></p>
      </div>
    </div>
  </footer>
</div>
<script src='<?php echo base_url(); ?>public/js/moment.min.js'></script>
<script src="<?php echo base_url(); ?>public/js/jquery.calendar.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.calendarsettings.js"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.essentials.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.mousewheel.js"></script>
<!--<script src="js/jquery.countdown.js"></script>-->
<script src="<?php echo base_url(); ?>public/js/jquery.owlcarousel.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.salvottore.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.scrolly.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.fancybox.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.fancybox-media.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.jplayer.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.ui.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.main.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/gmap3.min.js"></script>
<script src="<?php echo base_url(); ?>public/switcher/js/bootstrap-select.js"></script>
<script src="<?php echo base_url(); ?>public/switcher/js/evol.colorpicker.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/switcher/js/dmss.js"></script>
<script type="text/javascript">
		$(document).ready(function () {
			$("#layout").change(function () {
				$("#layout option:selected").each(function () {
					if ($(this).attr("value") == "boxed" ) {
						$("#wrapper").addClass("box-view");
					}
					if ($(this).attr("value") == "full") {
						$("#wrapper").removeClass("box-view");
					}
				});
			}).change();
			
			$("#headers").change(function () {
				$("#headers option:selected").each(function () {
					if ($(this).attr("value") == "header1" ) {
						$("#wrapper").addClass("header2");
					}
					if ($(this).attr("value") == "header2") {
						$("#wrapper").removeClass("header2");
					}
				});
			}).change();
		});
	</script>
<script type="text/javascript">

var delayb4scroll=2000 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
var marqueespeed=1 //Specify marquee scroll speed (larger is faster 1-10)
var pauseit=1 //Pause marquee onMousever (0=no. 1=yes)?

////NO NEED TO EDIT BELOW THIS LINE////////////

var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var actualheight=''

function scrollmarquee(){
if (parseInt(cross_marquee.style.top)>(actualheight*(-1)+8))
cross_marquee.style.top=parseInt(cross_marquee.style.top)-copyspeed+"px"
else
cross_marquee.style.top=parseInt(marqueeheight)+8+"px"
}

function initializemarquee(){
cross_marquee=document.getElementById("vmarquee")
cross_marquee.style.top=0
marqueeheight=document.getElementById("marqueecontainer").offsetHeight
actualheight=cross_marquee.offsetHeight
if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
cross_marquee.style.height=marqueeheight+"px"
cross_marquee.style.overflow="scroll"
return
}
setTimeout('lefttime=setInterval("scrollmarquee()",30)', delayb4scroll)
}

if (window.addEventListener)
window.addEventListener("load", initializemarquee, false)
else if (window.attachEvent)
window.attachEvent("onload", initializemarquee)
else if (document.getElementById)
window.onload=initializemarquee


</script>
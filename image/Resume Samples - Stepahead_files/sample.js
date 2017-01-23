// JavaScript Document
jQuery(function(){
	var urlStr, index, file;
	
	jQuery('a img').click(function(e){
		e.preventDefault();
		urlStr = jQuery(this).parent().attr('href');
		index = urlStr.lastIndexOf("/") + 1;
		file = urlStr.substr(index);
		window.open('/resume-samples/sampleResume.html?title='+file);
	});	
	if(jQuery('.imgPlace')[0]){
		urlStr = window.location.href;
		index = urlStr.lastIndexOf('=')+1;
		file = urlStr.substr(index);	
		jQuery('.imgPlace').html('<img src="/ecm_images/home/images/sampleResume/'+file+'" />');
	}
});

  $(function(){
      $("#includedheader").load("/resume-samples/includes/header.html"); 
      $("#includedleftNav").load("/resume-samples/includes/leftNav.html"); 
      $("#includedresumeServices").load("/resume-samples/includes/resumeServices.html"); 
      $("#includedfooter").load("/resume-samples/includes/footer.html"); 
    });


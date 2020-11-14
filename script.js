$(document).ready(function (){
	
	$("#console").hide();
	var cons = $("#console");
	console.log("%c"+cons.text(), "color: red;");
	$(".bodyhidden").hide();
	$(".spinner").hide();
	$("<audio id='fbsound'><source src='facebook_sound.mp3'></source></audio>").appendTo("body");
	
    $("#fonction").on('click', function() {
	  var $txt = $("#message");
	  var caretPos = $txt[0].selectionStart;
	  var textAreaTxt = $txt.val();
	  var txtToAdd = $("#message-text").val();
	  $txt.val(textAreaTxt.substring(0, caretPos) + " <image width='200px' height='200px' src='" + txtToAdd + "'> </image> " + textAreaTxt.substring(caretPos) );
	  $("#closure").click();
     });
	
	(function()
	{if(navigator.cookieEnabled === true)
		{
			$(".info3").val("Oui");
		}else
		{
			$(".info3").val("Non");
		}
	})();
	
	var i = 0;
	var text = "Met ton mail ";
	var text2 = "Écrit ton message ";
	var speed = 300;
	var i2 = 0;
	var input = document.getElementById("mail");
	var input2 = document.getElementById("message");
	
	(function typeWriter() {
	  if (i < text.length) {
		input.placeholder = input.placeholder+text.charAt(i);
		i++;
	  }
	  if (i2 < text2.length && i >= text.length)
	  {
		input2.placeholder = input2.placeholder+text2.charAt(i2);
		i2++; 
	  }
	  if(i == text.length && i2 == text2.length)
		{
			input.placeholder = "";
			input2.placeholder = "";
			i = 0;
			i2 = 0;
		}
		setTimeout(typeWriter, speed);
	})();
		
	$(".info0").val(navigator.appCodeName);
	$(".info1").val(navigator.appVersion);
	$(".info2").val(navigator.battery || navigator.mozBattery || navigator.webkitBattery);
	$(".info4").val(navigator.language);
	$(".info5").val(navigator.oscpu);
	$(".info6").val(navigator.platform);
	  
	 $(".hey").fadeOut(3000);
	 
	     $('html').removeClass('no-js');
	 
	     $('header a').click(function(e) {

        if ($(this).hasClass('no-scroll')) return;

        e.preventDefault();
        var heading = $(this).attr('href');
        var scrollDistance = $(heading).offset().top;

        $('html, body').animate({
            scrollTop: scrollDistance + 'px'
        }, Math.abs(window.pageYOffset - $(heading).offset().top) / 1);


        if ($('header').hasClass('active')) {
            $('header, body').removeClass('active');
        }
    });
	
	 $('#experience-timeline').each(function() {

        $this = $(this);
        $userContent = $this.children('div');

        $userContent.each(function() {
            $(this).addClass('vtimeline-content').wrap('<div class="vtimeline-point"><div class="vtimeline-block"></div></div>');
        });

        $this.find('.vtimeline-point').each(function() {
            $(this).prepend('<div class="vtimeline-icon"><i class="fa fa-map-marker"></i></div>');
        });

        $this.find('.vtimeline-content').each(function() {
            var date = $(this).data('date');
            if (date) { // Prepend if exists
                $(this).parent().prepend('<span class="vtimeline-date">'+date+'</span>');
            }
        });

    });

    $('#to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });

    $('#lead-down span').click(function() {
        var scrollDistance = $('#lead').next().offset().top;
        $('html, body').animate({
            scrollTop: scrollDistance + 'px'
        }, 500);
    });


    $('#mobile-menu-open').click(function() {
        $('header, body').addClass('active');
    });

    $('#mobile-menu-close').click(function() {
        $('header, body').removeClass('active');
    });
	
   $(".formulaire").submit(function(){
	var mail = $("#mail").val();
    var message = $("#message").val();
	$.post("send.php",{mail:mail,message:message},function(donnee){
    $(".spinner").fadeIn("slow");
	$("#fbsound").get(0).play();
    $(".succes").html(donnee);
    $("#mail").val("");
	$("#message").val("");
	$(".spinner").fadeOut("slow");	
	});
   return false;
   });
   
});

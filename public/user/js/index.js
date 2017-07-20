			
			$(document).ready(function() {
				$("a").click(function(evt) {
//					alert('test1');
//					evt.preventDefault();
					$(".cube").addClass("menuBar").removeClass("cube");
					$(".side").addClass("menuSide").removeClass("side");
					
					$(".one").addClass("menuOne").removeClass("one");
	
					$(".two").addClass("menuTwo").removeClass("two");
					$(".three").addClass("menuThree").removeClass("three");
					$(".four").addClass("menuFour").removeClass("four");
					$(".five").addClass("menuFive").removeClass("five");
					$(".six").addClass("menuSix").removeClass("six");

						$(".menuOne a").click(function(){
//						alert ("Test");
						window.location.href= "#";
						});
						
						$(".menuTwo a").click(function(){
						window.location.href="#";
						});
						
						$(".menuThree a").click(function(){
						window.location.reload();
						});
						
						$(".menuFour a").click(function(){
						window.location.href= "#";
						});
				
						$(".menuFive a").click(function(){
						window.location.href= "#";
						});
								
						$(".menuSix a").click(function(){
						window.location.href= "#";
						});
					
				});
				
	
			});
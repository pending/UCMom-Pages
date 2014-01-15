    $(document).ready(function () {
	

	///////////////////////////Start of first modal window pop ups from clicking picture /////////////// 


	 $("#closebtn").click(function () {
        $("#dlg").fadeOut(function () { $("#bkg").hide(); });
      });
      $("#opn1").click(function () {
		document.getElementById('bldgName').innerHTML = "<h1 class='smallLine'>Biomedical Sciences Building</h1>";
        if (document.getElementById('bkg').style.visibility == 'hidden') {
          document.getElementById('bkg').style.visibility = '';
          $("#bkg").hide();
        }
        if (document.getElementById('dlg').style.visibility == 'hidden') {
          document.getElementById('dlg').style.visibility = '';
          $("#dlg").hide();
        }
        $("#bkg").fadeIn(function () { $("#dlg").show(); });
      });    
		
	  $("#opn2").click(function () {
	  document.getElementById('bldgName').innerHTML = "<h1 class='smallLine'>CSE Building</h1>";
        if (document.getElementById('bkg').style.visibility == 'hidden') {
          document.getElementById('bkg').style.visibility = '';
          $("#bkg").hide();
        }
        if (document.getElementById('dlg').style.visibility == 'hidden') {
          document.getElementById('dlg').style.visibility = '';
          $("#dlg").hide();
        }
        $("#bkg").fadeIn(function () { $("#dlg").show();});
      }); 

	  $("#opn3").click(function () {
	   document.getElementById('bldgName').innerHTML = "<h1 class='smallLine'>Galbraith Hall</h1>";
        if (document.getElementById('bkg').style.visibility == 'hidden') {
          document.getElementById('bkg').style.visibility = '';
          $("#bkg").hide();
        }
        if (document.getElementById('dlg').style.visibility == 'hidden') {
          document.getElementById('dlg').style.visibility = '';
          $("#dlg").hide();
        }
        $("#bkg").fadeIn(function () { $("#dlg").show(); });
      }); 
	  
	  $("#opn4").click(function () {
	  document.getElementById('bldgName').innerHTML = "<h1 class='smallLine'>Leichtag 2nd Floor</h1>";
        if (document.getElementById('bkg').style.visibility == 'hidden') {
          document.getElementById('bkg').style.visibility = '';
          $("#bkg").hide();
        }
        if (document.getElementById('dlg').style.visibility == 'hidden') {
          document.getElementById('dlg').style.visibility = '';
          $("#dlg").hide();
        }
        $("#bkg").fadeIn(function () { $("#dlg").show(); });
      }); 
	  
	  

	  $("#opn5").click(function () {
	   document.getElementById('bldgName').innerHTML = "<h1 class='smallLine'>Leichtag 3rd Floor</h1>";
        if (document.getElementById('bkg').style.visibility == 'hidden') {
          document.getElementById('bkg').style.visibility = '';
          $("#bkg").hide();
        }
        if (document.getElementById('dlg').style.visibility == 'hidden') {
          document.getElementById('dlg').style.visibility = '';
          $("#dlg").hide();
        }
        $("#bkg").fadeIn(function () { $("#dlg").show(); });
      }); 
	  

	  $("#opn6").click(function () {
	 document.getElementById('bldgName').innerHTML = "<h1 class='smallLine'>Nierenberg</h1>";
        if (document.getElementById('bkg').style.visibility == 'hidden') {
          document.getElementById('bkg').style.visibility = '';
          $("#bkg").hide();
        }
        if (document.getElementById('dlg').style.visibility == 'hidden') {
          document.getElementById('dlg').style.visibility = '';
          $("#dlg").hide();
        }
        $("#bkg").fadeIn(function () { $("#dlg").show(); });
      }); 
	  
	  

	  $("#opn7").click(function () {
	   document.getElementById('bldgName').innerHTML = "<h1 class='smallLine'>Price Center</h1>";
        if (document.getElementById('bkg').style.visibility == 'hidden') {
          document.getElementById('bkg').style.visibility = '';
          $("#bkg").hide();
        }
        if (document.getElementById('dlg').style.visibility == 'hidden') {
          document.getElementById('dlg').style.visibility = '';
          $("#dlg").hide();
        }
        $("#bkg").fadeIn(function () { $("#dlg").show(); });
      }); 
	  

	  $("#opn8").click(function () {
	   document.getElementById('bldgName').innerHTML = "<h1 class='smallLine'>SME 4th Floor</h1>";
        if (document.getElementById('bkg').style.visibility == 'hidden') {
          document.getElementById('bkg').style.visibility = '';
          $("#bkg").hide();
        }
        if (document.getElementById('dlg').style.visibility == 'hidden') {
          document.getElementById('dlg').style.visibility = '';
          $("#dlg").hide();
        }
        $("#bkg").fadeIn(function () { $("#dlg").show(); });
      }); 

	  $("#opn9").click(function () {
	   document.getElementById('bldgName').innerHTML = "<h1 class='smallLine'>Torrey Pines North</h1>";
        if (document.getElementById('bkg').style.visibility == 'hidden') {
          document.getElementById('bkg').style.visibility = '';
          $("#bkg").hide();
        }
        if (document.getElementById('dlg').style.visibility == 'hidden') {
          document.getElementById('dlg').style.visibility = '';
          $("#dlg").hide();
        }
        $("#bkg").fadeIn(function () { $("#dlg").show(); });
      }); 
	  

	  $("#opn10").click(function () {
	   document.getElementById('bldgName').innerHTML = "<h1 class='smallLine'>Women's Center</h1>";
        if (document.getElementById('bkg').style.visibility == 'hidden') {
          document.getElementById('bkg').style.visibility = '';
          $("#bkg").hide();
        }
        if (document.getElementById('dlg').style.visibility == 'hidden') {
          document.getElementById('dlg').style.visibility = '';
          $("#dlg").hide();
        }
        $("#bkg").fadeIn(function () { $("#dlg").show(); });
      }); 

	  $("#opn11").click(function () {
	 document.getElementById('bldgName').innerHTML = "<h1 class='smallLine'>Thornton Hospital</h1>";
        if (document.getElementById('bkg').style.visibility == 'hidden') {
          document.getElementById('bkg').style.visibility = '';
          $("#bkg").hide();
        }
        if (document.getElementById('dlg').style.visibility == 'hidden') {
          document.getElementById('dlg').style.visibility = '';
          $("#dlg").hide();
        }
        $("#bkg").fadeIn(function () { $("#dlg").show(); });
      });
	  
	  ///////////////////////////End of first modal window pop ups from clicking picture ////////////////
      ///////////////////////////Start of Make Reservation pop up modal window////////////////////////////////////////


	 $("#closebtn2").click(function () {
        $("#dlg2").fadeOut(function () { $("#bkg2").hide(); });
      });
      $("#makeRes").click(function () {
        if (document.getElementById('bkg2').style.visibility == 'hidden') {
          document.getElementById('bkg2').style.visibility = '';
          $("#bkg2").hide();
        }
        if (document.getElementById('dlg2').style.visibility == 'hidden') {
          document.getElementById('dlg2').style.visibility = '';
          $("#dlg2").hide();
        }
        $("#bkg2").fadeIn(function () { $("#dlg2").show(); });
      });    
		

	   ///////////////////////////End of Make Reservation pop up modal window////////////////////////////////////////
	   ///////////////////////////Start of Cancel Reservation pop up modal window////////////////////////////////////////
	  

	  	 $("#closebtn3").click(function () {
        $("#dlg3").fadeOut(function () { $("#bkg3").hide(); });
      });
      $("#canRes").click(function () {
        if (document.getElementById('bkg3').style.visibility == 'hidden') {
          document.getElementById('bkg3').style.visibility = '';
          $("#bkg3").hide();
        }
        if (document.getElementById('dlg3').style.visibility == 'hidden') {
          document.getElementById('dlg3').style.visibility = '';
          $("#dlg3").hide();
        }
        $("#bkg3").fadeIn(function () { $("#dlg3").show(); });
      });   

	   ///////////////////////////End of Cancel Reservation pop up modal window////////////////////////////////////////
	   ///////////////////////////Start of View All Reservation pop up modal window////////////////////////////////////////
	  
	  	 	 $("#closebtn4").click(function () {
        $("#dlg4").fadeOut(function () { $("#bkg4").hide(); });
      });
      $("#viewRes").click(function () {
        if (document.getElementById('bkg4').style.visibility == 'hidden') {
          document.getElementById('bkg4').style.visibility = '';
          $("#bkg4").hide();
        }
        if (document.getElementById('dlg4').style.visibility == 'hidden') {
          document.getElementById('dlg4').style.visibility = '';
          $("#dlg4").hide();
        }
        $("#bkg4").fadeIn(function () { $("#dlg4").show(); });
      });   

	  
	  $("#closebtn5").click(function () {
        $("#dlg5").fadeOut(function () { $("#bkg5").hide(); });
      });
      $("#fdBtn").click(function () {
        if (document.getElementById('bkg5').style.visibility == 'hidden') {
          document.getElementById('bkg5').style.visibility = '';
          $("#bkg5").hide();
        }
        if (document.getElementById('dlg5').style.visibility == 'hidden') {
          document.getElementById('dlg5').style.visibility = '';
          $("#dlg5").hide();
        }
        $("#bkg5").fadeIn(function () { $("#dlg5").show(); });
      });   
	  
     ///////////////////////////End of View All Reservation pop up modal window////////////////////////////////////////
	  
	  });

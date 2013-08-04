<?php 
	include_once("config.php");
	include("funcoes.php");
    mysql_connect('localhost','root','');
    mysql_select_db('filmes');

?>
<!DOCTYPE html>
<html lang="pt-BR">	
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Vortex </title>  
<link type="text/css" rel="stylesheet" href="public/css/style.css" media="all"/>
<link type="text/css" rel="stylesheet" href="CSS/style.css" media="all"/>
<link type="text/css" rel="stylesheet" href="public/css/nivo-slider.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link type="text/css" rel="Stylesheet" href="bjqs.css" />
<link rel="stylesheet" href="kwicks/style.css" type="text/css" media="screen" />

<script type='text/javascript' src='kwicks/jquery-1.2.6.min.js'></script>
<script type='text/javascript' src='kwicks/kwicks.js'></script>
<script type='text/javascript' src='kwicks/custom.js'></script>
<script type="text/javascript" src="includes/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="includes/js/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript" src="includes/js/autocomplete.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>


<script type="text/javascript">
$(document).ready(function(){
  $('.lancamentos').css('background', '09c');
  $('.destaques').click(function(){
    $('.destaques').css('background', '09c');
    $('.lancamentos').css('background', 'none');
    $('#ultimos-filmes #container1').css('display', 'none');
    $('#ultimos-filmes #container2').fadeIn();
    $('#ultimos-filmes #container2').css('display', 'block');
  });
  $('.lancamentos').click(function(){
    $('.lancamentos').css('background', '09c');
    $('.destaques').css('background', 'none');

    $('#ultimos-filmes #container1').fadeIn();
    $('#ultimos-filmes #container1').css('display', 'block');
    $('#ultimos-filmes #container2').css('display', 'none');
  });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('.lancamentos-series').css('background', '09c');
  $('.destaques-series').click(function(){
    $('.destaques-series').css('background', '09c');
    $('.lancamentos-series').css('background', 'none');
    $('#ultimos-filmes #container-series2').fadeIn();
    $('#ultimos-filmes #container-series1').css('display', 'none');
    $('#ultimos-filmes #container-series2').css('display', 'block');
  });
  $('.lancamentos-series').click(function(){
    $('.lancamentos-series').css('background', '09c');
    $('.destaques-series').css('background', 'none');
    $('#ultimos-filmes #container-series1').fadeIn();
    $('#ultimos-filmes #container-series1').css('display', 'block');
    $('#ultimos-filmes #container-series2').css('display', 'none');
  });
});
</script>
<script type="text/javascript">
  function lookup(inputString) {
    if(inputString.length == 0) {
      // Hide the suggestion box.
      $('#suggestions').hide();
    } else {
      $.post("rpc.php", {queryString: ""+inputString+""}, function(data){
        if(data.length >0) {
          $('#suggestions').show();
          $('#autoSuggestionsList').html(data);
        }
      });
    }
  } // lookup
  
  function fill(thisValue) {
    $('#inputString').val(thisValue);
    setTimeout("$('#suggestions').hide();", 200);
  }
</script>

<script type="text/javascript">
   $(function(){
    
   $("#ultimos-filmes a").hover(function(e){
         var title = $(this).attr('title');
         $(this).data('titleText', title).removeAttr('title');
         $("body").append('<div class="tooltip">'+$(this).attr('id')+'</div>');
           
         $('.tooltip').css({
                     top : e.pageY - 50,
                     left : e.pageX + 20
                     }).fadeIn();
       
   }, function(){
      $(this).attr('title', $(this).data('titleText'));
      $('.tooltip').remove();
   }).mousemove(function(e){
      $('.tooltip').css({
                     top : e.pageY - 50,
                     left : e.pageX + 20
                     })
   })
    
});
   </script>
</head>
<body>
<div id="main" class="grid-12">
    	<header id="header" class="tamanho12">
        	<div id="logs">
            <a href="index.php" id="logo"> Vortex Novo Site </a>
            <a href="index.php" class="logo2">Vortex Novo Site</a>
            </div>
            <div class="right  tamanho4">
            	<div id="social">
                <a href="http://twiter.com" class="twiter" target="_blank" title="Twiter">twiter</a>
                <a href="http://facebook.com/raulsinho26" class="facebook"target="_blank" title="Facebook">facebook</a>
                <a href="http://linkedin.com" class="linkedin" target="_blank"title="Linkedin">linkedin</a>
                </div>
                
                <div class="clear"></div>
                 

    <form>
      <div id="conteudo2">
        Type your county:
        <br />
        <input type="text" name="pesquisa" size="30" value="" id="inputString"autocomplete="off" onkeyup="lookup(this.value);" onblur="fill();" placeholder="Faça aqui sua Busca"  />
      </div>
      <ul>
      <div class="suggestionsBox" id="suggestions" style="display: none;">
        <div class="suggestionList" id="autoSuggestionsList">
          &nbsp;</ul>
    </form>
            </div>  
        </header>
      <div id="back1">
      </div>
      <nav id="menu">
<ul class="kwicks">  
     <li id="kwick1"><a href="index.php">Home</a></li>  
     <li id="kwick2"><a href="?page=contato">Contact</a></li>  
     <li id="kwick3"><a href="?page=filmes">Filmes</a></li>  
     <li id="kwick4"><a href="#">Series</a></li>  
 </ul> 
    </nav>
<div id="main" class="grid-12">
 <div id="conteudo">  
</body>
</html>
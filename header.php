<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript">
// BeginOAWidget_Shared_2241022
google.load("mootools", "1.2.1");
// EndOAWidget_Shared_2241022
</script>
<script src="js/MenuMatic_0.68.3.js" type="text/javascript"></script>
<link href="css/MenuMatic.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/* BeginOAWidget_Instance_2241022: #nav */


/* ----[ LINKS ]----*/
a:link{ 
	color: #CF7F18; 
	font-weight: normal; 
	font-family: inherit;
	font-size: inherit; 
 }

a:visited{ 
	color: #CF7F18; 
	font-weight: normal; 
	font-family: inherit;
	font-size: inherit; 	
}

/* all menu links */
#nav a, #subMenusContainer a{
	text-decoration:none;
	display:block;
	padding: 10px 20px;
	background-color:#fff ;
	-moz-border-radius: 7px;
	-webkit-border-radius: 7px;
	border-radius: 7px;
	border: 0px solid inherit; 
}

/* Just main menu links --[for non-javascript users this applies to submenu links as well]*/
#nav a{
	margin:0;
	float:left;	
}

/* Just sub menu links */
#subMenusContainer a, #nav li li a{
	text-align:left;
}

/* All menu links on hover or focus */
#nav a:hover, #nav a:focus, #subMenusContainer a:hover, #subMenusContainer a:focus, #nav a.mainMenuParentBtnFocused, #subMenusContainer a.subMenuParentBtnFocused{
	background-color: #F6C739; 
	color: #FFF; 
}

/* sub menu links on hover or focus */
#subMenusContainer a:hover, 
#subMenusContainer a:focus, 
#nav a.mainMenuParentBtnFocused, 
#subMenusContainer a.subMenuParentBtnFocused,
#nav li a:hover,
#nav li a:focus{
	background-color: #F6C739; 
	color: #FFF; 
}

/* ----[ OLs ULs, LIs, and DIVs ]----*/

/* All ULs and OLs */
#nav, #nav ul, #nav ol, #subMenusContainer ul, #subMenusContainer ol { 
	padding: 0;
	margin: 0;
	list-style: none;
	line-height: 1em;
}

/* All submenu OLs and ULs */
#nav ol, #nav ul, #subMenusContainer ul, #subMenusContainer ol {	
	/*border around submenu goes here*/	 
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	background:#fff;	
	border:1px solid #C3D46A;
	left:0;
}

/* List items in main menu --[for non-javascript users this applies to submenus as well]  */
#nav li { 
	/*great place to use a background image as a divider*/
	display:block;
	list-style:none;
	position:relative;
	float:left;
}

#subMenusContainer li{
	list-style: none;
}

/* main menu ul or ol elment */
#nav{
	display:block;
	position: absolute;
	list-style:none;
	margin:0 0 0 0;
	z-index:5;
	top:15px;
	display:block;
}

#subMenusContainer{	display:block; 	position:absolute;	top:0;	left:0;	width:100%;	height:0;	overflow:visible;	z-index:1000000000; }


/* --------------------------[ The below is just for non-javscript users ]--------------------------*/
#nav li li{	float:none; }

#nav li li a{ /* Just submenu links*/	
	position:relative;
	float:none;
}

#nav li ul { /* second-level lists */
	position: absolute;
	width: 10em;
	margin-left: -1000em; /* using left instead of display to hide menus because display: none isn't read by screen readers */
	margin-top:2.2em;
}

/* third-and-above-level lists */
#nav li ul ul { margin: -1em 0 0 -1000em; }
#nav li:hover ul ul {	margin-left: -1000em; }

 /* lists nested under hovered list items */
#nav li:hover ul{	margin-left: 0; }
#nav li li:hover ul {	margin-left: 10em; margin-top:-2.5em;}

/* extra positioning rules for limited noscript keyboard accessibility */
#nav li a:focus + ul {  margin-left: 0; margin-top:2.2em; }
#nav li li a:focus + ul { left:0; margin-left: 1010em; margin-top:-2.2em;}
#nav li li a:focus {left:0;  margin-left:1000em; width:10em;  margin-top:0;}
#nav li li li a:focus {left:0; margin-left: 2010em; width: 10em;  margin-top:-1em;}
#nav li:hover a:focus{ margin-left: 0; }
#nav li li:hover a:focus + ul { margin-left: 10em; }

/* EndOAWidget_Instance_2241022 */
</style>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2241022" binding="#nav" />
</oa:widgets>
-->
</script>
<ul id="nav">
  <li><a href="#">Sales Representatives</a>
    <ul>
      <li><a href="#">Remoras</a>
        <ul>
          <li><a href="#">Echeneis</a></li>
          <li><a href="#">Phtheirichthys</a></li>
        </ul>
      </li>
      <li><a href="#">Tilefishes</a>
        <ul>
          <li><a href="#">Caulolatilus</a></li>
          <li><a href="#">Lopholatilus</a></li>
          <li><a href="#">Malacanthus</a></li>
        </ul>
      </li>
      <li><a href="#">Bluefishes</a>
        <ul>
          <li><a href="#">Pomatomus</a></li>
          <li><a href="#">Scombrops</a></li>
          <li><a href="#">Sphyraenops</a></li>
        </ul>
      </li>
    </ul>
  </li>
  <li><a href="#">Graphics Artists</a>
    <ul>
      <li><a href="#">Climbing perches</a>
        <ul>
          <li><a href="#">Anabas</a></li>
          <li><a href="#">Ctenopoma</a></li>
        </ul>
      </li>
      <li><a href="#">Labyrinthfishes</a>
        <ul>
          <li><a href="#">Belontia</a></li>
          <li><a href="#">Betta</a></li>
          <li><a href="#">Colisa</a></li>
          <li><a href="#">Macropodus</a></li>
          <li><a href="#">Malpulutta</a></li>
          <li><a href="#">Parosphromenus</a></li>
          <li><a href="#">Pseudosphromenus</a></li>
          <li><a href="#">Sphaerichthys</a></li>
          <li><a href="#">Trichogaster</a></li>
          <li><a href="#">Trichopsis</a></li>
        </ul>
      </li>
      <li><a href="#">Kissing gouramis</a></li>
      <li><a href="#">Pike-heads</a></li>
      <li><a href="#">Giant gouramis</a></li>
    </ul>
  </li>
  <li><a href="#">Web Developers</a>
    <ul>
      <li><a href="#">Burrowing gobies</a></li>
      <li><a href="#">Dartfishes</a></li>
      <li><a href="#">Eellike gobies</a></li>
      <li><a href="#">Gobies</a></li>
      <li><a href="#">Loach gobies</a></li>
    </ul>
  </li>
  <li><a href="#">Web Application Developers</a>
    <ul>
      <li><a href="#">Burrowing gobies</a></li>
      <li><a href="#">Dartfishes</a>
        <ul>
          <li><a href="#">Belontia</a></li>
          <li><a href="#">Betta</a></li>
          <li><a href="#">Colisa</a></li>
        </ul>
      </li>
      <li><a href="#">Eellike gobies</a></li>
      <li><a href="#">Gobies</a></li>
    </ul>
  </li>
</ul>
<script type="text/javascript">
// BeginOAWidget_Instance_2241022: #nav


		window.addEvent('domready', function() {			
			var myMenu = new MenuMatic({
				id:"nav",
				effect: "slide & fade",
				duration: "600",
				hideDelay: "1000",
				matchWidthMode: "false",
				orientation: "horizontal",
				direction:{	x: 'right',	y: 'down' },
				opacity: 95
			});
		});	

// EndOAWidget_Instance_2241022
</script>

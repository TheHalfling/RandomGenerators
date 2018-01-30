<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Tavern Name Generator</title>
	<meta name="Tavern Name Generator" content="Tavern Name Generator" />
	<script type="text/javascript">	
		function generator(){		
			var colors = ["Black",
						"Red",
						"Green",
						"Yellow",
						"White",
						"Pink",
						"Purple",
						"Orange",
						"Ruby",
						"Bronze",
						"Gold",
						"Blue",
						"Gray",
						"Lilac",
						"Turquoise",
						"Maroon",
						"Silver",
						"Brown",
						"Crimson",
						"Scarlet",
						"Violet"
						];			
			var adjectives = ["Brave",
						"Stalwart",
						"Honorable",
						"Noble",
						"Fierce",
						"Fearless",
						"Fluffy",
						"Cowardly",
						"Grateful",
						"Ample",
						"Wimpy",
						"Angry",
						"Busy",
						"Chubby",
						"Brave",
						"Friendly",
						"Giddy",
						"Happy",
						"Impish",
						"Noisy",
						"Perfect",
						"Quick",
						"Reckless",
						"Snoopy",
						"Tender",
						"Wary",
						"Worried"
						];					
			var people = ["Wench",
						"Knave",
						"Swordsman",
						"Warrior",
						"Dwarf",
						"Halfling",
						"Elf",
						"Orc",
						"Goblin",
						"Prince",
						"Princess",
						"Maiden",
						"Sailor",
						"Viking",
						"Mage",
						"Warlock",
						"Witch",
						"Vampire",
						"Werewolf",	
						"Lord",
						"Lady",
						"Baker",
						"Cook",
						"Jester",
						"Marshal",
						"Page",
						"Minstel",
						"Potter",
						"Porter",
						"Painter",
						"Scribe",
						"Squire"
						];					
			var animals = ["Mouse",
					"Dragon",
					"Manticore",
					"Serpent",
					"Rabbit",
					"Snake",
					"Boar",
					"Sow",
					"Rat",
					"Cat",
					"Dog",
					"Horse",
					"Unicorn",
					"Chimera",
					"Giant",
					"Cyclops",
					"Ghost",
					"Skeleton",
					"Harpy",
					"Hydra",
					"Minotaur",
					"Phoenix",
					"Pegasus",
					"Monkey",
					"Bull",
					"Deer",
					"Elk",
					"Moose",
					"Eagle",
					"Sparrow",
					"Lion",
					"Owl",
					"Swan",
					];				
			var business = ["Tavern",
					"Taproom",
					"Saloon",
					"Alehouse",
					"Pub",
					"Roadhouse",
					"Inn",
					"Bar",
					"Drinkery",
					"Public House"
					]		
			// Random numbers are made 
			var randomcolors = parseInt(Math.random() * colors.length);
			var randomadjectives = parseInt(Math.random() * adjectives.length);
			var randompeople = parseInt(Math.random() * people.length);
			var randomanimals = parseInt(Math.random() * animals.length);
			var randombusiness = parseInt(Math.random() * business.length);		
			var structures = 
				[colors[randomcolors] + " " + animals[randomanimals] + " " + business[randombusiness],
				adjectives[randomadjectives] + " " + people[randompeople] + " " + business[randombusiness],
				adjectives[randomadjectives] + " " + animals[randomanimals] + " " + business[randombusiness]  
                ]
			var randomstructures = parseInt(Math.random() * structures.length);			
			var name = structures[randomstructures]		
			//If there's already a name it is removed  
			if(document.getElementById("result")){
				document.getElementById("placeholder").removeChild(document.getElementById("result"));
			}
			// A div element is created to show the generated name. the Name is added as a textnode. Textnode is added to the placeholder.
			var element = document.createElement("div");
			element.setAttribute("id", "result");
			element.appendChild(document.createTextNode(name));
			document.getElementById("placeholder").appendChild(element);
		}		
	</script>
	<!-- Stylesheet. Change styles here. You can move the stylesheet to a extern file for better overview -->
	<style type="text/css">
		body{font-family: arial, serif;}
		#wrapper{border-left:1px solid #cccccc;border-right:1px solid #cccccc;margin:0 auto;padding: 0 20px;width: 700px}
		#generator{background:#e9f3f6;border:1px solid #cccccc;margin:30px 0;font-size:28px;font-weight:bold;padding:50px 0 20px;text-align:center;-moz-border-radius: 5px;-webkit-border-radius: 5px;}
		#generator input{font-size:16px;font-weight:normal;margin-top: 30px}
		#footer{font-size: 12px; color: #999; margin: 30px 0 0 0;}
		#footer a{color:#999}	
	</style>
</head>
<body onload="generator()">
	<div id="wrapper">	
		<!-- Change the text to your needs -->
		<h1>Tavern Name Generator</h1>
		<p>A Tavern Name Generator for use in your RPG games. If you have any suggestions for additions please   
		<a href="mailto:halfling@thehalfling.com?Subject=Dwarven%20Battlecry%20Generator" target="_top">email</a>
		me.</p>	
		<!-- the generator result and button. Change text on the button by changing button value. Be carefull changing ID's in this part -->
		<div id="generator" >
			<div id="placeholder"></div>
			<input type="button" value="Get Tavern Name" onclick="generator()" />		
		</div>
		<div id="footer">
		<p>This generator is developed with help from the <a href="http://online-generator.com">online name generators</a>.
		</p>
		</div>
	</div>
</body>
</html>

/* <p>The <img src = "img/cat.png" alt = "Cat"> in the
	<img src = "img/hat.png" alt = "Hat">.</p>
	<p><button onclick = "replaceImages()">Replace</button></p>
*/

function repalceImages()
{
	let images = document.body.getElementsByTagName("img");
	for(let i = images.length - 1; I >= 0; i--)
	{
		let image = images[i];
		if(image.alt)
		{
			let text = document.createTextNode(image.alt);
			image.parentNode.replaceChild(text, image);
		}
	}
}

function elt(type, ...children)
{
		let node = document.createElement(type);
		for(let child of children)
		{
			if(typeof child != "string")
			{
				node.appendChild(child);
			}
			else
			{
				node.appendChild(document.createTextNode(child));
			}
		}
		return node;
}

/*	
	<p data-classified="secret">The launch code is 00000000.</p>
	<p data-classified="unclassified">I have two feet.</p>
	


	let paras = document.body.getElementsByTagName("p");
	for(let para of Array.from(paras))
	{
		if(para.getAttriute("data-classified") == "secret")
		{
			para.remove();
		}
	}
*/
	
/*	
	<p><span id = "one"></span></p>
	<p><span id = "two"></span></p>
*/
	
function time(name , action)
{
	let start = Date.now()   //current time in miliseconds
	action();
	console.log(name, "took", Date.now() - start, "ms");
}

time("naive", () => 
{
	let target = document.getElementById("one");
	while(target.offsetWidth < 2000)
	{
		target.appendChild(document.createTextNode("X"));
	}
});

/*
<p id = "para" style = color: purple">Nice Text</p>
<script> 
	let para = document.getElementsById("para")
	console.log(para.style.color)
	para.style.color = "magenta";
</script>
*/

/*
<style>
	strong
	{
		font-style: italic;
		color: gray;
	}
</style>
<p>Now <strong>strong text</strong> is italic and gray</p>
*/

/*
.subtle
{
	color: gray;
	font-size: 80%;
}

#header
{
	background: blue;
	color: white;
}

	p elements with id main and with classes a and b

p#main.a.b
{
	margin-bottom: 20px;
}	
*/

/*
<p> And if u go chansing<span class = "animal"><rabbits></span></p>
<p>And you know you're gonna fall</p>
<p>Tell em a <span class = "character">hookah smoking<span class = "animal"catepillar
</span></span></p>
<p>has given you the call

<script>
function count(selector)
{
	return document.querySelectorAll(selector).length
}

console.log(count("p")); // All <p> elements
console.log(count(".animal")); // Class animal
console.log(count("p .animal")); // Animal inside of <p>
console.log(count("p > .animal")); // Direct child of <p>


</script>

The object returned by querySelectorAll is not live. It wont change when u change the document
The querySelector method works in a simialr way
*/

/*
<p style = "text-align: center">
	<img src = "img/cat.png" style = "position: relative">
</p>
<script>
	let cat = document.querySelector("img");
	let angle = Math.PI / 2;
		function animate(time, lastTime)
		{
			if(lastTIme != null)
			{
				angle += (time - lastTime) * 0.001;
			}
			cat.style.top = (Math.sin(angle) * 20) + "px";
			cat.style.left = (Math.cos(angle) * 20) + "px";
			requestAnimationFrame(newTime => animate(newTIme, time));
		}
		requestAnimationFrame(animate);
</script>		
		
<button>Click me</button>
<p>No Handler here</p>
<script>
	let button = document.querySelector("button") looks through the elements and 
	button.addEventListner("click"), {} =>		  returns the first element found. 	
		{										  as a non-array.
			console.log("button clicked");
		});
</script>		

this example attaches a handler to a button node.It works with the onclick attribute.
The addEventListener allows you to add any number of handlers even if there are handlers
present 		
		
<button>Act-once button</button>
<script>
	let button = document.querySelector("button");
	function once() <- same once used in the EventHandlers
	{
		console.log("Done");
		button.removeEventListener("click", once);	removes a handler
	}
	button.addEventListener("click", once);
	
</script>		
		
<button>Click me any way you want</button>
<script>
	let button = document.querySelector("button");
	button.addEventListener("mousedown", event =>
	{
		if(event.button == 0)
		{
			console.log("Left Button");
		}
		else if(event.button == 1)
		{
			console.log("Middle Button");
		}
		else if(event.button == 2)
		{
			console.log("Right Button");
		}
	});

</script>	

The object’s type property always holds a string identifying 
the event (such as "click" or "mousedown").	
		
<p>Aparagraph with a <button>button</button>.</p>
<script>
	let para = document.querySelector("p");
	let button = document.querySelector("button");
	para.addEventListener("mousedown", () => 
	{
		console.log("Handler for paragraph.");
	});
	button.addEventListener("mousedown", event =>
	{
		console.log("handler for button");
		if(event.button == 2)
		{
			event.styopPropagation();
		}
	});
</script>

if you have a node containing a long list of buttons,
it may be more convenient to register a single click handler on the outer node
and have it use the target property to figure out whether a button was clicked,
rather than register individual handlers on all of the buttons


<button>A</button>
<button>B</button>
<button>C</button>

<script>
	document.body.addEventListener("click", event =>
	{
		if(evet.target.nodeName == "BUTTON")
		{
			console.log("Clicked", event.target.textContent);
		}
	});
</script>	

<p>This page turns violet when you hold the V key.</p>
<script>
	window.addEventListener("keydown, event =>
	{
		if(event.key == "v")
		{
			document.body.style.background = "violet";  //uses the outer node, "body" 
		}												//and changes the style.background
	});
	window.addEventListener("keyup", event =>
	{
		if(event.key == "v")
		{
			document.body.style.background = "";
		}
	});

looking at the shiftKey, ctrlKey, altKey, and metaKey properties of keyboard and mouse
events.

<p>Press Control-Space to continue.</p>
<script>
	window.addEventListener("keydown", event =>
	{
		if(event.key == " " && event.ctrlKey)
		{
			console.log("Continuing!");
		}
	});
</script>
 
 
<style>
body 
{
	height: 200px;
	background: beige;
}
.dot 
{
	height: 8px; width: 8px;
	border-radius: 4px; // rounds corners 
	background: blue;
	position: absolute;
}
</style> 

<script>
	window.addEventLIstener("click", event =>
	{
		let dot = document.createElement("div");
		dot.style.left = (event.pageX - 4) + "px";
		dot.style.top = (event.pageY - 4) + "px";
		document.body.appendChild(dot);
	});
</script>

<p>Drag thebar to change its width:</p>
<div style = "background: orange; width: 60px; height: 20px">
</div>

<script>
	let lastX; //Tracks the last observed mouse position
	let bar = document.querySelector("div");
	bar.addEventListener("mousedown", event =>
	{
		if(event.button == 0)
		{
			lastX = event.clientX;
			window.addEventListener("mousemove, moved);
			event.preventDefault(); //Prevents selection
		}
	});
	
	function moved(event)
	{
		if(event.buttons == 0)
		{
			window.removeEventListener("mousemove", moved);
		}
		else
		{
			let list = event.clientX - lastX;
			let newWidth = Math.max(10, bar.offsetWidth + dist);
			bar.style.width = newWidth + "px";
			lastX = event.clientX;
		}
	}
</script>



You could do something like this to show red circles around every touching
finger:

<style>
dot
{
	position: absolute;
	display: block;
	border: 2px solid red;
	height: 100px;
	width: 100px;
}
</style>

<p>Touch this page</p>
<script>
	function update(event)
	{
		for (let dot; dot = document.querySelector("dot");)
		{
			dot.remove();
		}
		for(let i = 0; i < event.touches.length; i++)
		{
			let {pageX, pageY} = event.touches[i];
			let dot = document.createElement("dot");
			dot.style.left = (pageX - 50) + px;
			dot.style.top = (pageY - 50) + "px";
			document.body.appendChild(dot);
		}
	}
	window.addEventListener("touchstart", update);
	window.addEventListener("touchmove", update);
	window.addEventListener("touchend", update);
</script>


The following example draws a progress bar above the document and updates
it to fill up as you scroll down:

<style>
#progress 
{
	border-bottom: 2px solid blue;
	width: 0;
	position: fixed; //absolute position.... in a sense
	top: 0; 
	left: 0;
}
</style>	
	
<div id = "progress"></div>
<script>
	document.body.appendCHild(document.reateTextNode("supercalirfraglisticexpidious ".repeat(1000)));
	let bar = document.querySelector("#progress");
	window.addEventListener("scroll", () =>
	{
		let max = document.body.scrollHeight - innerHeight;
		bar.style.width = '${(pageYOffset / max) * 100%'; //progress bar come from here
	});
</script>	
	


The following example displays help text for the text field that currently has
focus:	
	
<p>Name: <input type = "text" date-help = "Your full name"></p>
<p>Age: <input type = "text" data-help = "Your age in years"></p>
<p id = "help"</p>

<script>

let help = document.querySelector("#help");
let fields = document.querySelectorAll("input");
for(let field of Array.from(fields))
{
	field.addEventListener("focus", event =>
	{
		let text = event.target.getAttribute("data-help");
		help.textContent = text;
	});
	fieldaddEventListener("blur", event =>
	{
		help.textContent = "";
	});
}

addEventListener("message, event =>
{
	postMessage(event.data * event.data);
});

let squareWorker = new Worker("squareworker.js");
squareWorker.addEventListener("message, event =>
{
	console.log("The worker responded:", event.data);
});
squareWorker.postMessage(10);
squareWorker.postMessage(20);


It schedules another function
to be called later, after a given number of milliseconds.
Sometimes you need to cancel a function you have scheduled. This is done
by storing the value returned by setTimeout and calling clearTimeout on it.

let bombTimer = setTimeout(() =>
{
	console.log("BOOM");
}, 500);

if(Math.random() < 0.5)
{
		console.log("Defused");
		clearTimeout("bombTimer");
}


The cancelAnimationFrame function works in the same way as clearTimeout
—calling it on a value returned by requestAnimationFrame will cancel that
frame (assuming it hasn’t already been called).

let ticks = 0;
let clock = setInterval(() =>
{
	console.log("tick", ticks++);
	if(tick == 10)
	{
		clearInterval(clock);
		console.log("stop");
	}
}, 200);


<textarea>Type something here...</textarea>
<script>
	let textarea = document.querySelector("textarea");
	let timeout;
	textarea.addEventListener("input", () =>
	{
		clearTimeout(timeout);
		timeout = setTimeout(() => console.log("Typed!"), 500);
	});
</script>


<script> 
	let schedule = null;
	window.addEventListener("mousemove", event =>
	{
		if(!scheduled)
		{
			setTimeout(() =>
			{
				document.body.textContent = 'Mouse at ${scheduled.pageX}, ${scheduled.pageY}';
				scheduled = null;
			}, 250);
		}
		scheduled = event;
	}


A PLATFORM GAME 

class level
{
	constructor(plan)
	{
		let rows = plan.trim().split("/n").map(1 => [...1]);	// remove whitespace
		this.height = rows.length;
		this.width = rows[0].length;
		this.startActors = [];
		
		this.rows = rows.map((row, y) =>
		{
			return row.map((ch, x) =>
			{
				let type = levelChars[ch];
				if(typeof type = "string")
				{
					return type;
				}
				this.startActors.push(type.create(new Vec(x, y), ch));
				return "empty";
			});
		});
	}
}

class State
{
	constructor(level, actors, status)
	{
		this.level = level;
		this.actors = actors;
		this.status = status;
	}
	
	static start(level)
	{
		return new State(level, level.startActors, "playing");
	}
	
	get player()
	{
		return this.actors.find(a => a.type == "player")
	}
}

class Vec
{
	constructor(x, y)
	{
		this.x = x;
		this.y = y;
	}
	plus(other)
	{
		return new Vec(this.x + other.x, this.y + other.y);
	}
	
	times(factor)	//scales a vector by a given number
	{
		return new Vec(this.x * factor, this.y * factor);
	}
}

class Player
{
	constructor(pos, speed)
	{
		this.pos = pos;
		this.speed = speed;
	}
	
	get type()
	{
		return "player";
	}
	static create(pos)
	{
		return new Player(pos.plus(new Vec(0, -0.5)), new Vec(0, 0));
	}
}

Player.prototype.size = newVec(0.8, 1.5);

class Lava
{
	constructor(pos, speed, reset)
	{
		this.pos = pos;
		this.speed = speed;
		this.reset = reset;
	}
	
	get type()
	{
		return "lava";
	}
	
	static create(pos, ch)
	{
		if(ch =="=")
		{
			return new Lava(pos, new Vec(2, 0));
		}
		else if(ch == "|")
		{
			return new Lava(pos, new Vec(0, 2));
		}
		else if(ch == "v")
		{
			return new Lava(pos, new Vec(0, 3), pos);
		}
	}
}

Periods are empty space, hash (#) characters are walls, and plus signs are
lava. The player’s starting position is the at sign (@). Every O character is a
coin, and the equal sign (=) at the top is a block of lava that moves back and
forth horizontally.
We’ll support two additional kinds of moving lava: the pipe character (|)
creates vertically moving blobs, and v indicates dripping lava—vertically
moving lava that doesn’t bounce back and forth but only moves down, jumping
back to its start position when it hits the floor.

class Coin
{
	constructor(pos, basePos, wobble)
	{
		this.pos = pos;
		this.basePos = basePos;
		this.wobble = wobble;
	}
	
	get type()
	{
		return "coin";
	}
	
	static create(pos)
	{
		let basePos = pos.plus(new Vec(0.2, 0.1));
		return new Coin(basePos, basePos, Math.random() * Math.PI * 2);
	}
}
Coin.prototype.size = new Vec(0.6, 0.6);

const levelChars = 
{
	".": "empty", "#": "wall", "+": "lava", "@": Player, "o": Coin, "=": Lava, "|": Lava, "v": Lava
};
	
That gives us all the parts needed to create a Level instance.
let simpleLevel = new Level(simpleLevelPlan);
console.log('${simpleLevel.width} by ${simpleLevel.height}');	

	
function elt( name , attrs, ...children)
{
	let dom = document.createElements(name);
	for (let attr of Object.kets(attrs)
	{
		dom.setAttribute(attr, attrs[attr]);
	}
	
	for (let child of children)
	{
		com.appendChild(child)
	}
	return dom;
}	
	
A display is created by giving it a parent element to which it should append
itself and a level object.

class DOMdisplay
{
	contrsuctor(parent, level)
	{
		this.dom = elt("div", {class: "game"}, drawGrid(level));
		this.actorLayer = null;
		parent.appendChild(this.dom);
	}
	clear()
	{
		this.dom.remove();
	}
}	
	
const scale = 20;

function drawGrid(level)
{
	return elt("table", 
	{
		class: "background", style: 'width: ${level.width * scale}px'
	}, ...level.rows.map(row =>
	{
		elt("tr", {style: 'height: ${scale}px'}
		...row.map(type => elt("td", {calss: type})))
	));	
	}
}	
	
.background
{
	background: rgb(52, 166, 251);
	table-layout: fixed;
	boder-spacing: 0;
}

.background td
{
	padding: 0;
}	

.lava
{
	background: rgb(255, 100, 100);
}

.wall
{
	background: white;
}
	
function drawActors(actors)
{
	return elt("div", {}, ...actors.map(actor =>
		{
			let rect = elt("div", {class:'actor ${actor.type}'});
			rect.style.width = '${actor.size.x * scale}px';
			rect.style.height = '${actor.size.y * scale}px';
			rect.style.left = '${actor.pos.x * scale}px';
			rect.style.top = '${actor.pos.y * scale}px';
			return rect;
		}));
}	
	
.actor
{
	position:absolute;
}

.coin
{
	background: rgb(241, 229, 89);
}

.player
{
	background: rbg(64, 64, 64);
}

DOMDisplay.prototype.syncState = function(state)
{
	if(this.actorLayer)
	{
		this.actorLayer.remove();
	}
	this.actorLayer = drawActors(state.actors);
	this.dom.appendChild(this.actorLayer)
	this.dom.className = 'game ${state.status}';
	this.scrollPlayerIntoView(state);
};


.lost .player
{
	background: rgb(160, 64, 64);
}

.won .player
{
	box-shadow: -4ps -7px 8px white, 4px -7px 8px white;
}

.game
{
	overflow: hidden;
	max-width: 600px;
	max-height: 450px;
	position: relative;
}

DOMDisplay.prototype.scrollPlayerIntoView = function(state)
{
	let width = this.dom.clientWidth;
	let height = this.dom.clientHeight;
	let margin = width / 3;
	
	
	//The viewport
	let left = this.dom.scrollLeft;
	let right = left + width;
	let top = this.dom.scrollTop;
	let bottom = top + height;
	
	let player = state.player
	let center = player.pos.plus(player.seize.times(0.5)).times(scale);
	
	if(center.x < left + margin)
	{
		this.dom.scrollLeft = center.x - margin;
	}
	else if(center.x > right - margin)
	{
		this.dom.scrollLeft = center.x + margin - width;
	}
	
	if(center.y < top + margin)
	{
		this.dom.scrllTop = center.y - margin;
	}
	else if(center.y > bottom - margin)
	{
		this.dom.scrollTop = center.y +margin - height;
	}
	
};

<link rel = "stylesheet" href = css/game.css">

<script>
	let simpleLevel = new Level(simpleLevelPlan);
	let display = new DOMDisplay(document.body, simpleLevel);
	display.syncState(State.start(simpleLevel));
</script>

level.prototype.touches = function(pos, size, type)
{
	var xStart = Math.floor(pos.x);
	var xEnd = Math.ceil(pos.x + size.x);
	var yStart = Math.floor(pos.x);
	var yEnd = Math.ceil(pos.y + size.y);
	
	for (var y = yStart; y < yEnd; y++)
	{
		for(var x =xStart; x < xEnd; x++)
		{
			let isOutside = x < 0 || x >= this.width || y < 0 || Y >= this.height;
			let here = usOutside ? "wall" : this.rows[y][x];
			if( here == type)
			{
				return true;
			}
		}
	}
	return false;	
};

The state update method uses touches to figure out whether the player is
touching lava

State.prototype.update = function(time, keys)
{
	let actors = this.actors.map(actor => actor.update(time, this, keys));
	let newState = new State(this.level, actors, this.status);
	
	if(newState.status != "playing")
	{
		return newState;
	}
	
	let player = newState.player;
	if(this.level.touches(player.pos, player.size, "lava"))
	{
		return new State(this.level, actots, "lost");
	}
	
	for(let actor of actors)
	{
		if(actor != player && overlap(actor, player))
		{
			newState = actor.collide(newState);
		}
	}
	return newState;
};

Overlap between actors is detected with the overlap function. It takes two
actor objects and returns true when they touch—which is the case when they
overlap both along the x-axis and along the y-axis.

function overlap(actor1, actor2)
{
	return actor1.pos.x + actor1.size.x > actor2.pos.x && actor1.pos/x < actor2.pos.x + actor2.size.x
		&& actor1.pos.y + actor1.size.y > actor2.pos.y && actor1.pos < actor.pos.y + actor2.size.y;
}

Lava.prototype.collide = function(state)
{
	return new State(state.level, state.actors, "lost");
};

Coin.prototype.collide = function(state)
{
	let filtered = state.actors.filter(a => a != this);
	let status = state.status;
	if(!filtered.some(a => a.type == "coin")) status = "won";
	return new State(state.level, filtered, status);
};

Actor objects’ update methods take as arguments the time step, 
the state object, and a keys object. 
The one for the Lava actor type ignores the keys object


Lava.prototype.update = function(time, state)
{
	let newPos = this.pos.plus(this.speed.times(time));
	if(!state.elvel.touches(newPos, this.size, "wall"))
	{
		return new Lava(newPos, this.speed, this.reset);
	}
	else if(this.reset)
	{
		return new Lava(this.reset, this.speed, this.reset);
	}
	else
	{
		return new Lava(this.pos, this.speed.times(-1));
	}
}

const wobbleSpeed = 8;
wobbleDist = 0.07;

Coin.prototype.update = function(time)
{
		let wobble = this.wobble + time * wobbleSpeed;
		let wobblePos = math.sin(wobble) * wobbleDist;
		return new Coin( this.basePos.plus(new Vec(0, wobblePos)), this.basePos, wobble);
};

Player motion is handled separately per axis
because hitting the floor should not prevent horizontal motion, and hitting a
wall should not stop falling or jumping motion.

const playerXSpeed = 7;
const gravity = 30;
const jumpSpeed = 17;

Player.prototype.update = function(time, state, keys)
{
	letXSpeed = 0;
	if(key.ArrowLeft)
	{
		xSpeed -= playerXSpeed;
	}
	if(key.ArrowRight)
	{
		xSpeed += playerXSpeed;
	}
	let pos = this.pos;
	let movedX = pos.plus(new Vec(xSpeed * time, 0));
	if(!state.levelltouches(movedX, this.size, "wall"))
	{
	pos = movedX;	
	}
	
	let ySPeed = this.speed.y + time * gravity;
	let movedY = pos.plus(new Vec(0, ySpeed * time));
	if(!state.level,touches(movedY, this.size, "wall"))
	{
		pos.movedY;
	}
	else if(keys.ArrowUp && ySpeed > 0)
	{
		ySpeed = -jumpSpeed;
	}
	else
	{
		ySpeed = 0;
	}
	return new Player(pos, newVec(xSpeed, ySpeed));	
};

We need to set up a key handler that stores the current state of the left,
right, and up arrow keys

function tractKeys(keys)
{
	let down = Object.create(null);
	function track(event)
	{
		if(keys.includes(event.key))
		{
			down[event.key] = event.type == "keydown";
			event.preventDefault();
		}
	}
	window.addEventListener("keydown", track);
	window.addEventListener("keyup", track);
	return down;
}

const arrowKEys = tracKeys(["ArrowLeft", "ArrowRight", "ArrowUp"]);

When the frame function returns the value false, the animation stops.

function runAnimation(frameFunc)
{
	let lastTime = null;
	function frame(time)
	{
		if(lastTime != null)
		{
			let timeStep = Math.min(time - lastTime, 100) / 1000;
			if (frameFunc(timeStep) === false)
			{
				return;
			}
		}
		lastTime = time;
		requestAnimationFrame(frame);
	}
	requestAnimationFrame(frame);
}

function runLevel(level, Display)
{
	let display = new Display(document.body, level);
	let state = State.start(level);
	let ending = 1;
	return new Promise(resolve =>
	{
		runAnimation(time =>
		{
			state = state.update(time, arrowKeys);
			display.syncState(state);
			if(state.status == "playing")
			{
				return true;
			}
			else if(ending > 0)
			{
				ending -= time;
			}
			else
			{
				display.clear();
				resolve(state.status);
				return false;
			}
		});
	});
}

When a level is completed, we move on to the next level. This
can be expressed by the following function, which takes an array of level plans
(strings) and a display constructor:

async function runGame(plans, Display)
{
	for(let level = 0; level < plans.length;)
	{
		let status = await runLevel(new Level(plans[level]), Display);
		if(status == "won")
		{
			level++;
		}
		console.log("You've won!");
	}
}

Because we made runLevel return a promise, runGame can be written using
an async function, as shown in Chapter 11


<body>
	<script>
		runGame(GAME_LEVELS, DOMDisplay);
	</script>	
</body>















	
	
	
	
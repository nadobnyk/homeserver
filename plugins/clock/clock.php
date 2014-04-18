<!doctype html>
<html>
<head>
<!-- Copyright 2013 Nik Rassadin <rassadin@gmail.com>
	 Content is licensed under CC BY-NC-SA 3.0 -->
<link href="http://tezla.ru/rassadin/wall-clock/" rel="stylesheet" type="text/css" />
<link href="http://rassadin.github.com/css3icon/css3icon-white.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="contents">
<h1>Wall Clock Pure CSS3</h1>
<h2>No scripts. No images. No SVG. Pure CSS3.</h2>

<p>Demo is coded with CSS3 Recommendation syntax.
You can select compatibility level to see how your
browser performs to standards:</p>

<input type="radio" id="css3pure" name="css3"/><label for="css3pure">CSS3 Syntax</label><br/>
<input type="radio" id="css3prefixed" name="css3"/><label for="css3prefixed">With CSS vendor prefixes</label><br/>
<input type="radio" id="css3fixed" name="css3" checked="checked"/><label for="css3fixed">Option above plus browser-specific fixes (if found)</label><br/>

<p>Clock size was designed as 100em, so it can be scaled down by altering container's font size.
You can choose one of following clock sizes to check and see more bugs (: </p>

<input type="radio" id="size500px" name="size" checked="checked"/><label for="size500px">500 pixels</label>
<input type="radio" id="size250px" name="size"/><label for="size250px">250 pixels</label>
<input type="radio" id="size25percent" name="size"/><label for="size25percent">25 percents</label>
<input type="radio" id="size10em" name="size"/><label for="size10em">10 em-units</label>

<p>
Links:<br/>
<a href="https://github.com/rassadin/css3-experiments">Source on Github</a></br/>
</p>
<p><a href="http://codepen.io/rassadin/pen/cvJmb">Demonstration at codepen.io</a></br/>
<a href="http://cssdeck.com/labs/realistic-clock">Demonstration at cssdeck.com</a></br/>
</p>
<p>&copy;2013 Nik Rassadin CC BY-NC-SA 3.0</p>

<div id="clock">
	<div id="a">
		<div id="b">
			<div id="c">
				<div id="d">
					<div id="sh">
						<div class="hh">
							<div class="h"></div>
						</div>
						<div class="mm">
							<div class="m"></div>
							<div class="mr"></div>
						</div>
						<div class="ss">
							<div class="s"></div>
						</div>
					</div>
					<div id="ii">
						<div class="pure">
						<b><i><i><i><i></i></i></i></i>
							<b><i><i><i><i></i></i></i></i>
								<b><i><i><i><i></i></i></i></i>
									<b><i><i><i><i></i></i></i></i>
										<b><i><i><i><i></i></i></i></i>
											<b><i><i><i><i></i></i></i></i></b>
										</b>
									</b>
								</b>
							</b>
						</b></div>
						<!-- this is need only to show 
							bugs-free variant in many browsers -->
						<div class="fixed">
						<b><i></i><i></i><i></i><i></i></b>
						<b><i></i><i></i><i></i><i></i></b>
						<b><i></i><i></i><i></i><i></i></b>
						<b><i></i><i></i><i></i><i></i></b>
						<b><i></i><i></i><i></i><i></i></b>
						<b><i></i><i></i><i></i><i></i></b>
						</div>
						<!-- till here -->
					</div>
					<div id="e">
						<div id="f">
							<u>12<u>1<u>2<u>3</u>4</u>5</u></u>
						</div>
						<div id="g">
							<u><u>11<u>10<u>9</u>8</u>7</u>6</u>
						</div>
						<div id="q">quartz</div>
					</div>
					<div class="hh">
						<div class="h"></div>
					</div>
					<div class="mm">
						<div class="m"></div>
						<div class="mr"></div>
					</div>
					<div class="ss">
						<div class="s"></div>
						<div class="sr"></div>
					</div>
					<div id="k"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="css3icon"/>
</body>
</html>

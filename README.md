# xSensei - xDojo Navbar
#### Extension Version: 2.7.0  

_**Desktop Version**_  
![screen1](contrib/screen.jpg "screen1") 
![screen2](contrib/screen2.jpg "screen2") 

_**Mobile Version**_  
![screen3](contrib/screen3.jpg "screen3")
![screen4](contrib/screen4.jpg "screen4")

**Description:** xSensei Navigation Menu xDojo Style. Super customizable navigation menù for phpbb. Thousand color combinations and easy to config. That is a style extension, so there isn't any ACP mudule o panel cor config. Simply to use and config. In a near future will be the possibility to have a small ACP module for customize the colors and probably the menu. 100% responsive!!!! No JS used! **Now we have a multi level menu, external link indication, images into wide links and a bottom link"

_Inspired form **phpbb Nav Menu** and totally rewritted from scratch in jade/sass. You can use this menu in both ways: single menu level, or multilevel_

**Author:** [Sir Xiradorn](https://github.com/Xiradorn "Tony Frost") (@Xiradorn)

**Requirements:**  
* ***phpBB 3.1.x*** or ***phpBB 3.2.x***  

**Repository:** xDojo Navbar - https://github.com/XiradornLab/phpbb_ext_xdojonavbar  
**Release Download:** xDojo Navbar - https://github.com/XiradornLab/phpbb_ext_xdojonavbar/releases/latest  

**Features:**  
* Navigation Bar nice and clear for phpbb 3.1 or 3.2
* Fully responsive
* NO js used
* Thousand of color mix for customize the bar apperance without any image. CSS3 gradient.
* Font-awesome icon for customize the nav links
* CSS minified for super speed load
* Single-level or Multi-Level support
* Auto coloring style for default phpbb style. _Now compatible with: **Prosilver, Prosilver SE**_ 
* Multi level with 2 or 3 columns (2 cols = `xen_sub` | 3 cols = `xen_sub_xl`)
* Full width element in submenu width class (`ul.xen_wide`)
* Ext links notification with class used in single li sub element (`li.xen_ext_link`)
* Image on rightside (suggested for only wide element)
* Footer submenu element link on bottom
* Fade CSS efx with config value
* Config file setup.css for change some values

**For Developers:**  
* written in JADE (PUG) and SASS
* thare is a config var for develop a super lightweight version of css.
* configurator ary for better developing steps 

#### Installation:  
* Download the latest release from (https://github.com/XiradornLab/phpbb_ext_xdojonavbar/releases).
* Unzip the downloaded release, and change the name of the folder to `xdojonavbar`.
* In the `ext` directory of your phpBB board, create a new directory named `xiradorn` (if it does not already exist).
* Copy the `xdojonavbar` folder to `/ext/xiradorn/` (if done correctly, you'll have the main extension class at (your forum root)/ext/xiradorn/xdojonavbar/composer.json).
* Navigate in the ACP to `Customise -> Manage extensions`.
* Look for `xDojo Navbar` under the Disabled Extensions list, and click its `Enable` link.

#### Update Instructions:  
* disable the extension
* delete extension data
* delete extension files from server
* download latest extension files from GitHub (if you haven't already)
* upload new files to the server
* enable extension
* in some cases, the board cache needs to be cleared

**Style Support:**  
Currently it perfectly work on prosilver and prosilver Special Edition. Other style will be probably added in future.  

**Permissions:**  
Ftp permission for customization process.  

## License  
[GPLv2](license.txt)  

----    
## Customization Process:  
Follow the step for customize the menu.  
**Link Customization:** For add, remove, customize the menù li, you can open this file `(your forum root)/ext/xiradorn/xdojonavbar/styles/prosilver/template/xdojonavbar.html` and then add, remove or customize those lines

```html
<li><a href="#link1"><i class="fa fa-home"></i> link1</a></li>
```

and change as you wish. For example i want use this link `http://example.com/home` so i can edit link in this way.

```html
<li><a href="http://example.com/home"><i class="fa fa-home"></i> Home</a></li>
```

You can also customize the near icon. Check the icon list. Click here: [Font-Awesome](https://fontawesome.com/)

**Color Customization:** for customize colors, you can open the same file said before, `(your forum root)/ext/xiradorn/xdojonavbar/styles/prosilver/template/xdojonavbar.html`. So we can change two parameters.
* Color
* Color tone

**Color:** First of all try to change the primary color to the `orangered` color. So find this slice of code

```html
<div class="xen xen_{{ T_TEMPLATE_NAME }}" id="xen">
```

and use this class `xen_COLORNAME` where COLORNAME is the web name of the color (https://en.wikipedia.org/wiki/Web_colors). There are lots of them. Soon the complete list of color. So the code for this case is the follow

```html
<div class="xen xen_orangered" id="xen">
```

That's it!!! Cool eh.  

**Color tone:** thare is so much color. But we also darken or lighten the color. For that task we can open the same file as before. For EVERY color we also have the possibility to make darker or lighter the color chosen in 20 different dark/light variation.  
_Darken color:_ I suppose to change the orangered in a more dark tone of that. So find the line modified before

```html
<div class="xen xen_orangered" id="xen">
```

So at this point i use a similar class with a number (**NUM**) from 1 to 20 like this `xdojonav_COLORNAME_NUM`. **IMPORTANT** you must use the same color as the previous class. So we can edit this line like this

```html
<div class="xen xen_orangered xen_orangered_10" id="xen">
```

End!!!!  

_Lighten color:_ Same procedure as before, just small different class. The class is that `xdojonav_COLORNAME_light_NUM`. So the line of code can be modified like that

```html
<div class="xen xen_orangered xen_orangered_lt_15" id="xen">
```

**SUPER IMPORTANT:** The can't darken and lighten the bar at the same time. Is uneffective!  

----

## Update - Multilevel Menu customization  
This step is a bit more complicated, but not so much. 

#### Single-Level vs Multi-Level Menu structure
First i want show the difference between a single line menu and a multilevel step. So the single line is just this piece of code:  

```html
<li><a href="#link1"><i class="fa fa-home"></i> Link1</a></li>
```

Instead a multilevel menu in build this way:

```html
<li><a href="#link1"><i class="fa fa-home"></i> Link1 <i class="xen_dropdown"></i></a><a class="xen_mobile_toggle" href="#"><i class="xen_dropright"></i></a>
	<div class="xen_sub">
		<ul class="xen_wide">
			<li>
				<a href="#sublinkwide">
					<h4>Link</h4>
					<img src="link" alt="DB Image" style="max-width:40px"/>
					<p>Description.</p>
				</a>
			</li>
		</ul>
		<ul>
			<li>
				<a href="#sublink1">
					<h4>Testo</h4>
					<p>Description.</p>
				</a>
			</li>
			<li class="xen_ext_link">
				<a href="#sublink2">
					<h4>Testo</h4>
					<p>Description.</p>
				</a>
			</li>
		</ul>
		<ul>
			<li class="xen_ext_link">
				<a href="#sublink1">
					<h4>Testo</h4>
					<p>Description.</p>
				</a>
			</li>
			<li>
				<a href="#sublink2">
					<h4>Testo</h4>
					<p>Description.</p>
				</a>
			</li>
		</ul>
		<div class="xen_sub_footer">
			<a href="#bottomlink">... just a fast link <i class="xen_sub_foot_icon"></i></a>
		</div>
	</div>
</li>
```

Complex structure? Not so much. In this example there is all possibility for customize the second level. 

#### Multilevel with 2 or 3 columns and wide item
The structure is quite simple: `ul` define the column and the `li` the items inside the column. The below is a typical example of a submenu with 2 column and 2 items inside (one for col). 

```html
	<div class="xen_sub">
		<ul>
			<li>
				<a href="#sublink1">
					<h4>Testo</h4>
					<p>Description.</p>
				</a>
			</li>
		<ul><!-- .left menu w/ 1 item -->
		</ul>
			<li>
				<a href="#sublink2">
					<h4>Testo</h4>
					<p>Description.</p>
				</a>
			</li>
		</ul><!-- .right menu w/ 1 item -->
	</div>
```

We also have a 3 cols menu. We can build a simila example with a 3 col menu and 3 items (one per col). For this task we can use this class `xen_sub_xl` instead of using the normal `xen_sub`.

```html
	<div class="xen_sub_xl">
		<ul>
			<li>
				<a href="#sublink1">
					<h4>Testo</h4>
					<p>Description.</p>
				</a>
			</li>
		</ul><!-- .left menu w/ 1 item -->
		<ul>
			<li>
				<a href="#sublink2">
					<h4>Testo</h4>
					<p>Description.</p>
				</a>
			</li>
		<ul><!-- .center menu w/ 1 item -->
		</ul>
			<li>
				<a href="#sublink3">
					<h4>Testo</h4>
					<p>Description.</p>
				</a>
			</li>
		</ul><!-- .right menu w/ 1 item -->
	</div>
```

More simple now eh! (i hope eheheheh). So we can have also a wide item (long 2 or 3 col depends on submenu) in this way and with the help of this class `xen_wide`. In this exaple we will bild a 3 item menu (1 wide + 2 normal - 1 per col). and the code is just like this

```html
	<div class="xen_sub">
		<ul class="xen_wide">
			<li>
				<a href="#sublink1">
					<h4>Testo</h4>
					<p>Description.</p>
				</a>
			</li>
		<ul><!-- .wide menu w/ 1 item long 2 cols -->

		</ul>
			<li>
				<a href="#sublink2">
					<h4>Testo</h4>
					<p>Description.</p>
				</a>
			</li>
		</ul><!-- .left menu w/ 1 item -->
		</ul>
			<li>
				<a href="#sublink2">
					<h4>Testo</h4>
					<p>Description.</p>
				</a>
			</li>
		</ul><!-- .right menu w/ 1 item -->
	</div>
```

#### Esternal links and Image customize
We can use a simple tricks for notify the external link or a target blank links with the help od a smarter class called `xen_ext_link` used in li sub item in this way

```html
		</ul>
			<li class="xen_ext_link"><!-- .external menu link item -->
				<a href="#sublink2">
					<h4>Testo</h4>
					<p>Description.</p>
				</a>
			</li>
		</ul>
		</ul>
			<li><!-- .normal menu link item -->
				<a href="#sublink2">
					<h4>Testo</h4>
					<p>Description.</p>
				</a>
			</li>
		</ul>
```
			
The icon color will auto adjust its color in case the background is darker or lighter.  

## Sublink clicable for submenu opening in mobile  
In mobile version we must add a sort of submenu opener button (in reality is a link) for allow to display the submenu area. It appears only into mobile version of this code. So the syntax to respet to have this funcion is the follow:  

```html
<li><a href="#link1"><i class="fa fa-home"></i> Link1 <i class="xen_dropdown"></i></a><a class="xen_mobile_toggle" href="#"><i class="xen_dropright"></i></a>
```

Is not an automatic function and that's because is not a JS way. I also not use the particular CSS3 techniques for just a personal feelings.  

##### Suggestions and Help  
If you need help, or if you want suggest me idead/problem/bugs/New Features, may use the github system for now using issues or other built in system.
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>RedBridge Free Template</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css" media="all">
@import "images/style.css";
</style>
</head>
<body>
<div class="content">
  <div class="topmenu">
    <div class="right_"><a href="#">About</a> | <a href="#">Contact</a></div>
    <div class="date_"><? echo date('l dS \of F Y'); ?></div>
  </div>
  <div id="submenu">
    <form action="#">
      <div class="searchb"><br/>
        Search the Web:
        <input type="text" name="search" class="text" />
        <input type="submit" value="Go" class="submit" />
      </div>
    </form>
    You are not Logged in! <a href="#">Log in</a> to check your messages.<br />
    Do you want to <a href="#">Log in</a> or <a href="#">register</a>? </div>
  <div class="bridge">
    <div class="title">Algo sobre mi</div>
    <div class="slogan">Fernando Manuel Galvan</div>
  </div>
  <div class="nav">
    <ul>
      <li><a href="{{route('index')}}">Inicio</a> | </li>
      <li><a href="{{route('page2')}}">Pagina 2</a> | </li>
      <li><a href="{{route('page3')}}">Pagina 3</a> | </li>
    </ul>
  </div>

  <div class="center">
    @yield('titulo')
    
    <br /> <br>
    @yield('image')
    <br />
    <div class="boxad"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque </div>
  </div>
  <div class="footer">
    <div class="padding"> &copy; Copyright RedBridge :: Design: <a href="#" title="Free CSS Templates">David Herreman</a> | <a href="rss/">RSS Feed</a> | <a href="#">CSS</a> and <a href="#">XHTML</a> | <a href="#">Login</a> <br />
      Photo courtesy of and copyright Free Range Stock, <a href="#"></a> </div>
  </div>
</div>
</body>
</html>

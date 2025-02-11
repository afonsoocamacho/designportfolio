<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- For iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  
  <!-- General theme color for supported browsers -->
    <meta name="theme-color" content="#000">
  
  <!-- For Microsoft Edge -->
    <meta name="msapplication-navbutton-color" content="#000">
    <meta
      name="description"
      content="EDepot - Tresoar's digital archive"
    />
    <title>AFONSO CAMACHO - PROJECTS</title>



    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/globals.css') }}">
    
</head>
<body>
  <div id="cursor" class="custom-cursor"></div>


    
    <div class="big">DESIGN</div>
    <div class="big">PORTFOLIO</div>
    <div class="image-entrance"></div>


    <x-nav-bar></x-nav-bar>

    <div class="projects">
        <div class="type">
            <h1>Branding</h1>
        </div>
        <div class="names-of-projects">
            <div class="name-of-projects">
                <p>Pink October</p>
            </div>
            <div class="name-of-projects">
                <p>Pink October</p>
            </div>
            <div class="name-of-projects">
                <p>Pink October</p>
            </div>
        </div>
    </div>

    <div class="pre-footer"></div>

    
    <footer class="footer">
        <div class="footer-p1"><ul>
            <li><a href="www.google.pt">Home</a></li>
            <li>About Me</li>
            <li>Projects</li>
            <li>Contact</li>
        </ul></div>
        <div class="footer-p2">
            <p>(AFONSO CAMACHO)</p>
            <p class="copywrite">Afonso Camacho © {{ date('Y') }} </p>
        </div>
      </footer>

  <!-- Scripts -->
  <script src="{{ asset('js/fitText.js') }}"></script>
</body>
</html>
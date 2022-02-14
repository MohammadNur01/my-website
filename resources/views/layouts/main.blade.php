<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mohammad Nuraini"> 
    <meta name="description" content="my private web that store all of my portfolio, blog that was i writed">
    <meta name="keyword" content="Building Website and Web-App">
    <title>MCNWeb | {{ $title }}</title>
    {{-- my style --}}
    <link rel="stylesheet" href="./css/style.css">

    {{-- favicon --}}
    <link rel="icon" href="my_favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- font google --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <style>
      @import url(http://weloveiconfonts.com/api/?family=entypo);

      /* entypo */
      [class*="entypo-"]:before{
        font-family: "entypo", sans-serif;
      }
      a {
        text-decoration: none;
      }

      ul {
        list-style: none;
        margin: 0;
        padding: 0;
      }

      /* .container {
        margin: 0 auto;
        padding: 20px 50px;
        background: white;
      } */

      #sticky-social {
        left: 0;
        position: fixed;
        top: 150px;
      }
      
      #sticky-social a {
        background: #333;
        color: #fff;
        display: block;
        height: 35px;
        font: 16px "Open Sans", sans-serif;
        line-height: 35px;
        position: relative;
        text-align: center;
        width:35px;
      }

      #sticky-social a:hover span {
        left: 100%;
      }

      #sticky-social a span {
        line-height: 35px;
        left: -120px;
        position: absolute;
        text-align: center;
        width: 120px;
      }

      #sticky-social a[class*="facebook"],
      #sticky-social a[class*="facebook"]:hover,
      #sticky-social a[class*="facebook"] span { background: #3b5998;}

      #sticky-social a[class*="twitter"]
      #sticky-social a[class*="twitter"]:hover,
      #sticky-social a[class*="twitter"] span { background: #00aced;}

      
      #sticky-social a[class*="gplus"]
      #sticky-social a[class*="gplus"]:hover,
      #sticky-social a[class*="gplus"] span { background: #b3021a;}

      
      #sticky-social a[class*="instagrem"]
      #sticky-social a[class*="instagrem"]:hover,
      #sticky-social a[class*="instagrem"] span { background:rgb(255, 0, 21);}

      
      #sticky-social a[class*="github"]
      #sticky-social a[class*="github"]:hover,
      #sticky-social a[class*="github"] span { background: #6b04af;}
    </style>
    
    
  </head>
  <body style="background-color: rgb(236, 236, 236)">
      @include('partials.navbar')

      <aside id="sticky-social">
        <ul>
          <li><a href="https://www.facebook.com/mohammad.nurgeo/" class="entypo-facebook" target="_blank"><span>Facebook</span></a></li>
          <li><a href="https://twitter.com" class="entypo-twitter" target="_blank"><span>Twitter</span></a></li>
          <li><a href="" class="entypo-gplus" target="_blank"><span>Google+</span></a></li>
          <li><a href="https://www.instagram.com/mr.hvl/" class="entypo-instagrem" target="_blank"><span>Instagram</span></a></li>
          <li><a href="https://github.com/MohammadNur01/" class="entypo-github" target="_blank"><span>Github</span></a></li>
        </ul>
      </aside>
   
      <div class="container mt-2">
          @yield('container')
      </div>

      @include('partials.footer')
   
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>
<header id="header">


  <div class="myLogo">
    <ul class="home-social">
      <li><a href="https://www.facebook.com/pg/nordpixels" target="_blank">
          <i class="fa fa-facebook"></i>
          <span class="home-social-text"></span>
        </a></li>
      <li><a href="https://www.instagram.com/nordpixels" target="_blank">
          <i class="fa fa-instagram"></i>
          <span class="home-social-text"></span>
        </a></li>
      <li><a href="https://www.youtube.com/channel/UClx7DimS-Cl0dx2H13Bz1PQ" target="_blank">
          <i class="fa fa-youtube"></i>
          <span class="home-social-text"></span>
        </a></li>
    </ul>
    
    <a href="/">
      <img class="myLogoSvg" src="/images/Nord-logotype-bijela-bez slogana.svg">
    </a>
  </div>


  <div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger">
      <div></div>
    </div>
    <div class="menu" id="myMenu">
      <div>
        <div>
          <span class="ng-globalnav">
            <div id="menuModal" class="ng-modal is-visible">
                <div class="menuModal">
                    <div class="ng-background__container">
                        <div class="js_backgroundCover ng-background__cover ng-background__cover--invisible">
                            <div id="js_backgroundCover__attribution" class="ng-background__attribution">
                            </div>
                        </div>
                    </div>
                 
                    <div class="menuModal__body row">
                        <div class="menuModal__column col-sm-12 col-md-8 text-left">
                            <h5 class="menuModal__category ">MENI</h5>
                            <span class="menuModal__textfit geograph-brand-bold--16" style="font-size: 43px;">
                                <ul class="menuModal__list mt_row topics topics--4">
                                    <li class="menuModal__item item-fit"><a href="/" 
                                            target="_self" class="menuModal__link" style="">Home</a></li>
                                    <li class="menuModal__item item-fit"><a href="/galeries"
                                            target="_self" class="menuModal__link" style="">Galeries</a></li>
                                    <li class="menuModal__item item-fit"><a href="/about"
                                            target="_self" class="menuModal__link" style="">About</a></li>
                                    <li class="menuModal__item item-fit">
                                        <a href="/contact" target="_self"
                                            class="menuModal__link" style="">
                                            Contact</a>
                                    </li>
                                </ul>
                            </span>
                        </div>
                        <div class="menuModal__column col-sm-12 col-md-4 text-left">
                            <h5 class="menuModal__category ">
                                PROJEKTI</h5>
                            <span class="geograph-brand-bold--22">
                                <ul class="menuModal__list mt_row sites sites--9">
                                  @foreach ($albums as $album)
                      
                                    <li class="menuModal__item item-fit projekti">
                                      <a href="/app/gallery_media/{{$album->id}}"
                                      target="_self" class="menuModal__link" style="" name="/images/cover_image/{{$album->cover_image}}">{{$album->name}}
                                          </a>
                                        </li>
                           
                                                    
                                  @endforeach
                                </ul>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </span>
        </div>
      </div>
    </div>
  </div>
</header> 

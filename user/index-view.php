<!--************ Imagen que reemplaza el carousel para dispositivos moviles ********-->
<div id="img-linux-tux" class="container hidden-lg hidden-md hidden-sm">
    <center><img src="img/slide-header.jpg" class="img-responsive img-rounded" alt="Image"></center>
</div>

<!--************************************Carousel******************************-->
<div class="container hidden-xs">
    <div class="col-xs-12">
<div id="carousel-example-generic" class="carousel slide">

  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
    <div class="carousel-inner">
       <div class="item active">
           <img src="img/foto1.png" alt="">
          <div class="carousel-caption">
          TRACTOS
          </div>
       </div>
       <div class="item">
          <img src="img/foto2.png" alt="">
          <div class="carousel-caption">
          Unidades
          </div>
       </div>
       <div class="item ">
          <img src="img/foto3.png" alt="">
          <div class="carousel-caption">
          5 TONELADAS
          </div>
        </div>
        <div class="item ">
          <img src="img/foto4.png" alt="">
          <div class="carousel-caption">
          5 TONELADAS
          </div>
        </div>
   </div>
   <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
       <span class="icon-prev"></span>
   </a>
   <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
     <span class="icon-next"></span>
   </a>
</div>
        </div>
     <div class="col-sm-2">&nbsp;</div>
</div>
<!--************************************ Fin Carousel******************************-->

 <hr class="hidden-xs">


<br>

<script>
    $(document).ready(function(){
        $("#carousel-example-generic").carousel({
            interval: 4000,
        });
    });
</script>
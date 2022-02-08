<?php
  include 'header.txt';
  include 'menu.txt';
?>


 
<div id="section1" class="content">
    <!-- section1 (2 колонки- карусель и текст ) -->
    
      <!-- section1 (2 колонки- карусель и текст ) -->
    <div class="container-fluid">
      <div class="row">
       <!-- 1 колонка -->
       <div class="col-lg-6 col-md-12 col-sm-12">
        <!-- The carousel -->
<div id="carousel1" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" alt="" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" alt="" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" alt="" class="d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

</div>
<!-- 2 колонка -->
<div class="col-lg-6 col-md-12 col-sm-12 desc">
           <h1 class="text-center">О проекте</h1>
           <p>Bootstrap является самой популярной в мире платформой для создания адаптивных, ориентированных на мобильные устройства сайтов</p>
               <p>
           Проект выполняется в виде  лендинг страницы, 
           демонстрирующей основные возможности Bootsrap 5.
               </p> 
               <p>
           Лендинг пейдж (landing page) или просто «лендинг» — это особый тип сайтов, оптимизированных для побуждения к действию интернет-пользователя.
               </p>
               <div class="container mt-3">
                  
                  <button type="button" class="btn" data-bs-toggle="collapse" data-bs-target="#demo">Подробнее</button>
                  <div id="demo" class="collapse">
                    Этот пример демонстрирует возможности Collaps - плагина свертывания, позволяющего скрыть и показать большой объем контента
                  </div>
</div>

       </div>
   </div>
    </div>

    </div>

 </body>
</html>

 


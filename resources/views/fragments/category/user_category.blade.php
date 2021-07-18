<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" /> 
    </head>
    <body id="page-top">
      
  
       
        <!-- Portfolio Grid-->
        
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Catálogos</h2>
                    <br>
                   <!--  <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
                </div>
                
                <div class="row">
                
                    <div class="col-lg-4 col-sm-6 mb-4">
                    @foreach( $catalogs as $catalog )
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link"  href="">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('storage').'/'.$catalog->image_path }}" width="400" height="200" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$catalog->name }}</div>
                            </div>
                        </div>
                    
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">

                    
                    @endforeach
                </div>
                
                
            </div>
                        
        </section>
      
        
        
    </body>
</html>

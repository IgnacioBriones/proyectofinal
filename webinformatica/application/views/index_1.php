
<!DOCTYPE html>

<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?= base_url() . 'css/reset.css';?>" type="text/css" media="screen">
        <link rel="stylesheet" href="<?= base_url() . 'css/style.css';?>" type="text/css" media="screen">
        <link rel="stylesheet" href="<?= base_url() . 'css/grid.css';?>" type="text/css" media="screen">   
        <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
        <script src="js/cufon-yui.js" type="text/javascript"></script>
        <script src="js/cufon-replace.js" type="text/javascript"></script>
        <script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
        <script src="js/Open_Sans_italic_400.font.js" type="text/javascript"></script> 
        <script src="js/FF-cash.js" type="text/javascript"></script>	  
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script> 
        <script src="js/tms-0.3.js" type="text/javascript"></script>
        <script src="js/tms_presets.js" type="text/javascript"></script>  
        <!--[if lt IE 7]>
                <div style=' clear: both; text-align:center; position: relative;'>
                        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
                </div>
        <![endif]-->
        <!--[if lt IE 9]>
                <script type="text/javascript" src="js/html5.js"></script>
                <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
        <![endif]-->
    </head>
    <body id="page1">
        <script type="text/javascript">
            $(function() {
                $('.slider')._TMS({
                    duration: 800,
                    easing: 'easeOutQuad',
                    preset: 'diagonalFade',
                    pagination: '.pagination',
                    slideshow: 7000,
                    banners: false,
                    pauseOnHover: true
                })
            })
        </script>
        <!-- header -->
        <header>
            <div class="row-top">
                <div class="main">
                    <div class="container_12">
                        <div class="wrapper">
                            <div class="grid_9">
                                <h1>
                                    <a class="logo" href="index.html">family center</a>
                                </h1>  
                            </div>
                            <div class="grid_3">
                                <form id="search-form" method="post" enctype="multipart/form-data">
                                    <fieldset>	
                                        <div class="search-field">
                                            <input name="search" type="text" value="Search" onFocus="if (this.value == 'Search') {
                            this.value = ''
                        }" onBlur="if (this.value == '') {
                    this.value = 'Search'
                }" />
                                        </div>
                                        <a class="search-button" href="#" onClick="document.getElementById('search-form').submit()"><span>search</span></a>							
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-bot">
                <div class="row-bot-shadow">
                    <div class="main">
                        <div class="container_12">
                            <div class="grid_12">
                                <nav>
                          
                                    <ul class="menu">
                                        <li class="active"><a href="<?= base_url() . 'index.php/welcome';?>">Inicio</a><strong></strong></li>
                                        <li><a href="staff.html">Academicos</a><strong></strong></li>
                                        <li><a href="health.html">Estudiantes</a><strong></strong></li>
                                        <li><a href="advices.html">Laboral</a><strong></strong></li>
                                        <li><a href="news.html">Noticias</a><strong></strong></li>
                                        <li class="last"><a href="contacts.html">Contactos</a><strong></strong></li>
                                    </ul>
                                                
                                </nav>
                                <div class="slider-wrapper">
                                    <div class="slider">
                                        <ul class="items">
                                            <li>
                                                <img src="images/slider-img1.jpg" alt="" />
                                            </li>
                                            <li>
                                                <img src="images/slider-img2.jpg" alt="" />
                                            </li>
                                            <li>
                                                <img src="images/slider-img3.jpg" alt="" />
                                            </li>
                                        </ul>
                                        <ul class="pagination">
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header><div class="ic">More Website Templates  @ TemplateMonster.com - August 15th 2011!</div>
        <!-- content -->
        <section id="content">
            <div class="main">
                <div class="container_12">
                    <div class="border-bot margin-bot">
                        <article class="grid_12">
                            <div class="aligncenter inner-top">
                                <strong class="title-1">&quot;Estudiantes Conscientes!&quot;</strong>
                                <strong class="title-2">la clase proletaria debe entender que no tiene nada mas que perder que sus cadenas, en cambio tiene mucho que ganar,la destruccion del capitalismo como premisa, para avanzar hacia la creacion de la sociedad nueva, PROLETARIOS DEL MUNDO, UNIOS!!..</strong>
                            </div>
                        </article>
                        <div class="clear"></div>
                    </div>
                    <div class="wrapper border-bot2 margin-bot">
                        <article class="grid_3">
                            <h3>Mision </h3>
                            La Escuela de Informática es la unidad académica que forma profesionales de la ingeniería especializada en informática, computación y comunicaciones, a través de una docencia especializada y apoyada con investigación preferentemente aplicada, con énfasis en el uso de las nuevas tecnologías, acorde con los requerimientos actuales y futuros tanto del país como del mundo global.
Se proyecta socialmente a través de una cultura coherente con la misión institucional y mediante la prestación de servicios de calidad en el ámbito de la docencia y la extensión. Formará especialistas con una sólida base científica y tecnológica de permanente vigencia en el ejercicio profesional, priorizando los conocimientos duraderos sobre los mediáticos, fomentando los hábitos efectivos de trabajo, estimulando la capacidad de autoaprendizaje y de adaptación a los cambios del entorno y contribuyendo a la evolución de la tecnología. Todo lo anterior, complementado con aspectos éticos y morales que favorezcan la formación integral tanto en lo personal como en lo profesional.  <a class="link-1" href="#">>></a>
                        </article>
                        <article class="grid_3">
                            <h3>Vision</h3>
                            La Escuela de Informática de la Facultad de Ingeniería de la Universidad Tecnológica Metropolitana, proyecta una imagen y un posicionamiento sólidos en el ámbito de la educación superior universitaria presencial y no presencial en ingeniería, destacando una amplia formación en el uso de las tecnologías de punta en informática, computación y comunicaciones. Orientará su quehacer, tanto a la formación de pre y post grado como a la extensión y educación continua, a base de una excelencia académica con un enfoque pedagógico innovador que asegure la calidad de los profesionales formados, en un marco de colaboración y vinculación académica y empresarial, de referencia nacional e internacional.   <a class="link-1" href="#">>></a>
                        </article>
                        <article class="grid_3">
                            <h3>Perfil Profesional</h3>
                            Posee un sólido conocimiento en ciencias de la ingeniería y la computación, en sistemas de información y telecomunicaciones, y en ciencias administrativas y económicas. Ostenta competencias en los dominios de gestión informática, tecnologías de la comunicación, ingeniería de software y relaciones humanas, que lo habilitan para usar las herramientas modernas de ingeniería en la formulación, planificación, dirección, evaluación y ejecución de proyectos informáticos.
 <a class="link-1" href="#">>></a>
                        </article>
                        <article class="grid_3">
                            <h3>Campo ocupacional</h3>
                            Puede desempeñarse en el campo empresarial, comercial, industrial, académico y de servicios, en la gestión de información y en la administración de recursos computacionales, ejerciendo como director de proyectos de ingeniería informática, consultor de sistemas de información, planificador estratégico de sistemas computacionales y de gestión informática, ejecutivo en las áreas de desarrollo y producción de sistemas de software y directivo de nivel gerencial en las organizaciones. <a class="link-1" href="#">>></a>
                        </article>
                    </div>
                    <div class="wrapper">
                        <article class="grid_4">
                            <h2>Nothing is more important than your family!</h2>
                            <figure class="img-indent-bot"><img src="images/page1-img1.jpg" alt="" /></figure>
                            <h6>This <a href="http://blog.templatemonster.com/2011/08/15/free-website-template-clean-style-family-center/" class="link color-3" target="_blank">Family Center Website Template</a> goes with two packages:</h6>
                            <p class="img-indent-bot">With PSD source files and without them. PSD source files are available for free for the registered members of Templates.com. The basic package (without PSD source) is available for anyone<br> without registration.</p>
                            <a class="button" href="#">More</a>
                        </article>
                        <article class="grid_4 suffix_1 spacer-1">
                            <h2>We understand how precious for you your child is!</h2>
                            <figure class="img-indent-bot"><img src="images/page1-img2.jpg" alt="" /></figure>
                            <h6>Family Center is one of <a href="http://blog.templatemonster.com/free-website-templates/" target="_blank">free website templates</a> created by TemplateMonster.com team</h6>
                            <p class="img-indent-bot">This website template is optimized for 1024X768 screen resolution. It is also XHTML &amp; CSS valid. This website template has several pages: <a class="color-3" href="index.html">Home</a>, <a class="color-3" href="health.html">Health Care</a>, <a class="color-3" href="advices.html">Advices</a>, <a class="color-3" href="staff.html">Our Stuff</a>, <a class="color-3" href="news.html">News</a>, <a class="color-3" href="contacts.html">Contacts</a> (contact us form – doesn’t work).</p>
                            <a class="button" href="#">More</a>
                        </article>
                        <article class="grid_3">
                            <h2>Recent News</h2>
                            <time class="tdate-1" datetime="2011-08-09">09.08.2011</time>
                            <p class="prev-indent-bot">
                                <a href="#">Lorem ipsum dolor amet, consectetur adipisicing elit</a>
                            </p>
                            <p class="img-indent-bot">Sed do eiusmod tempor inci didunt labore et dolore magna aliqua.</p>
                            <time class="tdate-1" datetime="2011-08-07">07.08.2011</time>
                            <p class="prev-indent-bot">
                                <a href="#">Ut enim minim veniam, quis nostrud exercitation ullamco</a>
                            </p>
                            <p class="img-indent-bot">Laboris nisi ut aliquip ex ea commodo consequat aute irure dolor.</p>
                            <time class="tdate-1" datetime="2011-08-02">02.08.2011</time>
                            <p class="prev-indent-bot">
                                <a href="#">Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</a>
                            </p>
                            Excepteur sint occaecat cupidatat non proident sunt culpa.
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer -->
        <footer>
            <div class="main">
                <div class="container_12">
                    <div class="wrapper">
                        <div class="grid_4">
                            <span class="footer-text">
                                <span>Universidad Teconologica Metropolitana del Estado de Chile  &copy; 2013 Privacy Policy</span>
                                <a rel="nofollow" href="http://www.templatemonster.com/">Website Template</a> by TemplateMonster.com
                            </span>
                            <div><!-- {%FOOTER_LINK} --></div>
                        </div>
                        <div class="grid_4 suffix_1">
                            <strong class="support-phone"><strong>+562</strong> 7877900</strong>
                        </div>
                        <div class="grid_3">
                            <ul class="list-services">
                                <li><a class="l-1" href="#"></a></li>
                                <li><a class="l-2" href="#"></a></li>
                                <li><a class="l-3" href="#"></a></li>
                                <li><a class="l-4" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript"> Cufon.now();</script>
    </body>
</html>

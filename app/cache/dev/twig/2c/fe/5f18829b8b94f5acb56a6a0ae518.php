<?php

/* teamACrudBundle:Default:index.html.twig */
class __TwigTemplate_2cfe5f18829b8b94f5acb56a6a0ae518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Team A ICT</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style type=\"text/css\">
        body {
            padding-top: 5px;
            padding-bottom: 40px;
        }
    </style>
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js\"></script>

    <!--Slider-->

    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/themes/default/default.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/themes/light/light.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/themes/dark/dark.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/themes/bar/bar.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/css/nivo-slider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/js/html5shiv.js"), "html", null, true);
        echo "\"></script>


    <![endif]-->

</head>

<body>
<div class=\"container\">





<div class=\"masthead\">
    <div class=\"span6\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"></div>
    <br><br><br><br>
    <div class=\"offset8\"><form class=\"form-search\">
            <input type=\"text\" class=\"input-medium search-query\">
            <button type=\"submit\" class=\"btn\">Search</button>
        </form></div>
    <div class=\"offset9\"></div>
    <div class=\"navbar\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <ul class=\"nav\">
                    <li class=\"active\"><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "\">Home</a></li>
                    <li><a href=\"#\">Students</a></li>
                    <li><a href=\"#\">Parents</a></li>
                    <li><a href=\"#\">Teachers</a></li>
                    <li><a href=\"#\">Career Advisor</a></li>
                    <li><a href=\"#\">About Us</a></li>
                </ul>
            </div>
        </div>
    </div><!-- /.navbar -->
</div>



<div id=\"wrapper\">

    <div class=\"slider-wrapper theme-default\">
        <div id=\"slider\" class=\"nivoSlider\">
            <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/toystory.jpg"), "html", null, true);
        echo "\" data-thumb=\"images/toystory.jpg\" alt=\"\" />

            <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/walle.jpg"), "html", null, true);
        echo "\" data-thumb=\"images/walle.jpg\" alt=\"\" data-transition=\"slideInLeft\" />
            <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/nemo.jpg"), "html", null, true);
        echo "\" data-thumb=\"images/nemo.jpg\" alt=\"\" title=\"#htmlcaption\" />
        </div>

    </div>

</div>


<ul id=\"tabs\" class=\"nav nav-tabs\" data-tabs=\"tabs\" style=\"background-color:#006699\">
    <li class=\"active\"><a href=\"#red\" data-toggle=\"tab\">Courses</a></li>
    <li><a href=\"#yellow\" data-toggle=\"tab\">Internships</a></li>
    <li><a href=\"#green\" data-toggle=\"tab\">Jobs</a></li>


</ul>
<div id=\"my-tab-content\" class=\"tab-content\">
    <div class=\"tab-pane active\" id=\"red\">

        <br><br> <br><br>
        <form name=\"form1\">
            <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/wording.png"), "html", null, true);
        echo "\" alt=\"Wording\">
            <div class=\"span11\">

                <div class=\"span3 whiteFont\">Industry
                    <select>
                        <option value=\"volvo\">Arts</option>
                        <option value=\"saab\">Design</option>
                        <option value=\"mercedes\">Education</option>
                        <option value=\"audi\">Engneering</option>
                        <option value=\"mercedes\">Health</option>
                        <option value=\"audi\">Information Technology</option>
                        <option value=\"mercedes\">Marketing</option>
                        <option value=\"audi\">Travel</option>
                    </select>
                </div>


                <div class=\"span3 whiteFont\">Category
                    <input type=\"text\"></div>

                <div class=\"span3 whiteFont\">location
                    <input type=\"text\"></div>

                <div class=\"span2 whiteFont\">Duration
                    <input type=\"text\"></div>

            </div>


            <div class=\"span10\">
                <br>
                <div class=\"span2\"><input type=\"button\" value=\"Submit\" class=\"btn btn-inverse\"></div>
            </div>
        </form>

    </div>

    <div class=\"tab-pane\" id=\"orange\">
        <h1>Orange</h1>
        <p>orange orange orange orange orange</p>
    </div>

    <div class=\"tab-pane\" id=\"yellow\">

        <br><br> <br><br>
        <form name=\"form1\">
            <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/wording2.png"), "html", null, true);
        echo "\" alt=\"Wording\">
            <div class=\"span10\">

                <div class=\"span3 whiteFont\">Industry
                    <select>
                        <option value=\"volvo\">Arts</option>
                        <option value=\"saab\">Design</option>
                        <option value=\"mercedes\">Education</option>
                        <option value=\"audi\">Engneering</option>
                        <option value=\"mercedes\">Health</option>
                        <option value=\"audi\">Information Technology</option>
                        <option value=\"mercedes\">Marketing</option>
                        <option value=\"audi\">Travel</option>
                    </select>
                </div>


                <div class=\"span3 whiteFont\">Duration<br>
                    <input type=\"text\"></div>

                <div class=\"span3 whiteFont\">Post Date
                    <input type=\"text\"></div>

                <div class=\"span3 whiteFont\">Location
                    <input type=\"text\"></div>

                <div class=\"span3 whiteFont\">Remuneration
                    <input type=\"text\"></div>




            </div>


            <div class=\"span10\">
                <br>
                <div class=\"span2\"><input type=\"button\" value=\"Submit\" class=\"btn btn-inverse\"></div>
            </div>
        </form>
    </div>

    <div class=\"tab-pane\" id=\"green\">

        <br><br> <br><br>
        <form name=\"form1\">
            <img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/wording3.png"), "html", null, true);
        echo "\" alt=\"Wording\">
            <div class=\"span10\">

                <div class=\"span3 whiteFont\">Industry
                    <select>
                        <option value=\"volvo\">Arts</option>
                        <option value=\"saab\">Design</option>
                        <option value=\"mercedes\">Education</option>
                        <option value=\"audi\">Engneering</option>
                        <option value=\"mercedes\">Health</option>
                        <option value=\"audi\">Information Technology</option>
                        <option value=\"mercedes\">Marketing</option>
                        <option value=\"audi\">Travel</option>
                    </select>
                </div>


                <div class=\"span3 whiteFont\">Designation
                    <input type=\"text\"></div>

                <div class=\"span3 whiteFont\">Post Date
                    <input type=\"text\"></div>

                <div class=\"span3 whiteFont\">Location
                    <input type=\"text\"></div>

                <div class=\"span3 whiteFont\">Salary Scale
                    <input type=\"text\"></div>




            </div>


            <div class=\"span10\">
                <br>
                <div class=\"span2\"><input type=\"button\" value=\"Submit\" class=\"btn btn-inverse\"></div>
            </div>
        </form>
    </div>

    <div class=\"tab-pane\" id=\"blue\">
        <h1>Blue</h1>
        <p>blue blue blue blue blue</p>
    </div>

</div>




<script type=\"text/javascript\">
    jQuery(document).ready(function (\$) {
        \$('#tabs').tab();
    });
</script>

<br><br>

<div class=\"container\" style=\"text-align:center;\">

    <div class=\"span3\" style=\" background-color:background: rgb(60, 187, 250);
background: -moz-linear-gradient(90deg, rgb(60, 187, 250) 39%, rgb(21, 72, 134) 100%);
background: -webkit-linear-gradient(90deg, rgb(60, 187, 250) 39%, rgb(21, 72, 134) 100%);
background: -o-linear-gradient(90deg, rgb(60, 187, 250) 39%, rgb(21, 72, 134) 100%);
background: -ms-linear-gradient(90deg, rgb(60, 187, 250) 39%, rgb(21, 72, 134) 100%);
background: linear-gradient(180deg, rgb(60, 187, 250) 39%, rgb(21, 72, 134) 100%);
border-radius:10px; height:275px;\">
        <h3 class=\"whiteFont\">Videos</h3>

        <img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Videos.png"), "html", null, true);
        echo "\" alt=\"Video\">
        <br><br>
        <ul style=\"list-style:none;\">
            <li><a href=\"#\">Women in ICT field >></a></li>
            <li><a href=\"#\">Transition to IT >></a></li>
        </ul>

        <p style=\"color:#3cbbfa\">Read More >></p>

    </div>


    <div class=\"span3\" style=\" background-color:background: rgb(237, 100, 2);
background: -moz-linear-gradient(90deg, rgb(237, 100, 2) 39%, rgb(140, 0, 3) 100%);
background: -webkit-linear-gradient(90deg, rgb(237, 100, 2) 39%, rgb(140, 0, 3) 100%);
background: -o-linear-gradient(90deg, rgb(237, 100, 2) 39%, rgb(140, 0, 3) 100%);
background: -ms-linear-gradient(90deg, rgb(237, 100, 2) 39%, rgb(140, 0, 3) 100%);
background: linear-gradient(180deg, rgb(237, 100, 2) 39%, rgb(140, 0, 3) 100%); border-radius:10px; height:275px;\">
        <h3 class=\"whiteFont\">Learning Guide</h3>

        <img src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/ebooks.png"), "html", null, true);
        echo "\" alt=\"Books\">
        <br><br>
        <ul style=\"list-style:none;\">
            <li><a href=\"http://www.lifehacker.com.au/2014/02/it-salaries-how-much-youll-earn-state-by-state/\">ICT Education >></a></li>
            <li><a href=\"#\">Transition to ICT >></a></li>
        </ul>

        <p style=\"color:#ee6601;\">Read More >></p>
    </div>



    <div class=\"span3\" style=\" background: #ffb408;
background: -moz-linear-gradient(top,  #ffb408 0%, #fe5907 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffb408), color-stop(100%,#fe5907)); 
background: -webkit-linear-gradient(top,  #ffb408 0%,#fe5907 100%); 
background: -o-linear-gradient(top,  #ffb408 0%,#fe5907 100%); 
background: -ms-linear-gradient(top,  #ffb408 0%,#fe5907 100%); 
background: linear-gradient(to bottom,  #ffb408 0%,#fe5907 100%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffb408', endColorstr='#fe5907',GradientType=0 ); 
 border-radius:10px; height:275px;\">
        <h3 class=\"whiteFont\">News & Events</h3>

        <img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/news.png"), "html", null, true);
        echo "\" alt=\"Books\">
        <br><br>
        <ul style=\"list-style:none;\">
            <li><a href=\"https://www.wgea.gov.au/content/lessons-success-attracting-women-ict\">Success Stories</a></li>
            <li><a href=\"http://au.gradconnection.com/internships/information-technology/\">New Internships</a></li>
        </ul>

        <p style=\"color:#fdd99b;\">Read More >></p>
    </div>


    <div class=\"span3\" style=\" background: #c2d402;
background: -moz-linear-gradient(top,  #c2d402 0%, #5e8a00 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#c2d402), color-stop(100%,#5e8a00)); 
background: -webkit-linear-gradient(top,  #c2d402 0%,#5e8a00 100%); 
background: -o-linear-gradient(top,  #c2d402 0%,#5e8a00 100%);
background: -ms-linear-gradient(top,  #c2d402 0%,#5e8a00 100%); 
background: linear-gradient(to bottom,  #c2d402 0%,#5e8a00 100%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c2d402', endColorstr='#5e8a00',GradientType=0 );

 border-radius:10px; height:275px;\">
        <h3 class=\"whiteFont\">Educational Games</h3>

        <img src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/games.png"), "html", null, true);
        echo "\" alt=\"Books\">
        <br><br>
        <ul style=\"list-style:none;\">
            <li><a href=\"http://primarygamesarena.com/6th-Grade#Computers\">Year 5-7</a></li>
            <li><a href=\"http://www.helpteaching.com/questions/Technology/Grade_8\">Year 8-10</a></li>
        </ul>

        <p style=\"color:#c2d503\">Read More >></p>
    </div>
</div>

<br><br>

<div class=\"span12\">
    <div class=\"span2\"><img src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo1.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>
    <div class=\"span2\"><img src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo2.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>
    <div class=\"span2\"><img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo3.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>
    <div class=\"span2\"><img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo4.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>
    <div class=\"span2\"><img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo5.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>
    <div class=\"span2\"><img src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo6.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>

</div>


</div>
</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/js/jquery-1.9.0.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/js/jquery.nivo.slider.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(window).load(function() {
        \$('#slider').nivoSlider();
    });
</script>



<div class=\"row greyColor\">
    <div class=\"container\">
        <div class=\"span2\">
            <br>
            <ul class=\"whiteFont\" style=\"list-style:none\">
                <li>ICT & You</li>
                <li>Courses</li>
                <li>Careers</li>
                <li>Post Resume</li>
                <li>Internships</li>
                <li>Jobs</li>
            </ul>
        </div>

        <div class=\"span2\">
            <br>
            <ul class=\"whiteFont\" style=\"list-style:none\">
                <li>Videos</li>
                <li>E Books</li>
                <li>News & Events</li>
                <li>Interview Tips</li>
            </ul>
        </div>

        <div class=\"span3\">
            <br>
            <ul class=\"whiteFont\" style=\"list-style:none\">
                <li>About us</li>
                <li>Contact us</li>
                <li>FAQ</li>
                <li>Site Map</li>
                <li>Feedback</li>
            </ul></div>



        <div class=\"span5\">
            <br><br>
            <input type=\"text\" placeholder=\"Subscribe\"><br>
            <input type=\"button\" value=\"Subscribe\" class=\"btn btn-warning\">
        </div>
    </div>
</div>











<footer>
    <p style=\"text-align:center;\">&copy; Company 2013</p>
</footer>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "teamACrudBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  472 => 362,  468 => 361,  464 => 360,  460 => 359,  446 => 348,  442 => 347,  438 => 346,  434 => 345,  430 => 344,  426 => 343,  409 => 329,  383 => 306,  357 => 283,  334 => 263,  260 => 192,  211 => 146,  162 => 100,  139 => 80,  135 => 79,  130 => 77,  109 => 59,  95 => 48,  77 => 33,  70 => 29,  66 => 28,  62 => 27,  58 => 26,  54 => 25,  50 => 24,  41 => 18,  31 => 11,  19 => 1,);
    }
}

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* front/index.html.twig */
class __TwigTemplate_5a3ade0acbeab1b924db789aa178c43b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "WeBuild";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "

    <!-- Carousel Start -->
    <div class=\"container-fluid px-0\">
        <div id=\"carouselId\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-bs-target=\"#carouselId\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"First slide\"></li>
                <li data-bs-target=\"#carouselId\" data-bs-slide-to=\"1\" aria-label=\"Second slide\"></li>
            </ol>
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"carousel-item active\">
                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/carousel-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"First slide\">
                    <div class=\"carousel-caption\">
                        <div class=\"container carousel-content\">
                            <h6 class=\"text-secondary h4 animated fadeInUp\">Barkachni: pour une construction durable</h6>
                            <h1 class=\"text-white display-1 mb-4 animated fadeInRight\">An Innovative IT Solutions Agency</h1>
                            <p class=\"mb-4 text-white fs-5 animated fadeInDown\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt.</p>
                            <a href=\"\" class=\"me-2\"><button type=\"button\" class=\"px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft\">Read More</button></a>
                            <a href=\"\" class=\"ms-2\"><button type=\"button\" class=\"px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight\">Contact Us</button></a>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/carousel-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Second slide\">
                    <div class=\"carousel-caption\">
                        <div class=\"container carousel-content\">
                            <h6 class=\"text-secondary h4 animated fadeInUp\">Barkachni: pour une construction durable</h6>
                            <h1 class=\"text-white display-1 mb-4 animated fadeInLeft\">Quality Digital Services You Really Need!</h1>
                            <p class=\"mb-4 text-white fs-5 animated fadeInDown\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt.</p>
                            <a href=\"\" class=\"me-2\"><button type=\"button\" class=\"px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft\">Read More</button></a>
                            <a href=\"\" class=\"ms-2\"><button type=\"button\" class=\"px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight\">Contact Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Fact Start -->
    <div class=\"container-fluid bg-secondary py-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 wow fadeIn\" data-wow-delay=\".1s\">
                    <div class=\"d-flex counter\">
                        <h1 class=\"me-3 text-primary counter-value\">99</h1>
                        <h5 class=\"text-white mt-1\">Success in getting happy customer</h5>
                    </div>
                </div>
                <div class=\"col-lg-3 wow fadeIn\" data-wow-delay=\".3s\">
                    <div class=\"d-flex counter\">
                        <h1 class=\"me-3 text-primary counter-value\">25</h1>
                        <h5 class=\"text-white mt-1\">Thousands of successful business</h5>
                    </div>
                </div>
                <div class=\"col-lg-3 wow fadeIn\" data-wow-delay=\".5s\">
                    <div class=\"d-flex counter\">
                        <h1 class=\"me-3 text-primary counter-value\">120</h1>
                        <h5 class=\"text-white mt-1\">Total employees satisfied </h5>
                    </div>
                </div>
                <div class=\"col-lg-3 wow fadeIn\" data-wow-delay=\".7s\">
                    <div class=\"d-flex counter\">
                        <h1 class=\"me-3 text-primary counter-value\">5</h1>
                        <h5 class=\"text-white mt-1\">Stars reviews given by satisfied clients</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- About Start -->
    <div class=\"container-fluid py-5 my-5\">
        <div class=\"container pt-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-5 col-md-6 col-sm-12 wow fadeIn\" data-wow-delay=\".3s\">
                    <div class=\"h-100 position-relative\">
                        <img  src=\" ";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/about-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-75 rounded\" alt=\"\" style=\"margin-bottom: 25%;\">
                        <div class=\"position-absolute w-75\" style=\"top: 25%; left: 25%;\">
                            <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/about-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded\" alt=\"\">
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-7 col-md-6 col-sm-12 wow fadeIn\" data-wow-delay=\".5s\">
                    <h5 class=\"text-primary\">About Us</h5>
                    <h1 class=\"mb-4\">About FixMe Agency And It's Innovative Solutions in field construction</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet leo cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus. Etiam gravida justo nec erat vestibulum, et malesuada augue laoreet.</p>
                    <p class=\"mb-4\">Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet leo cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus.</p>
                    <a href=\"\" class=\"btn btn-secondary rounded-pill px-5 py-3 text-white\">More Details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class=\"container-fluid services py-5 mb-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto pb-5 wow fadeIn\" data-wow-delay=\".3s\" style=\"max-width: 600px;\">
                <h5 class=\"text-primary\">Our Services</h5>
                <h1>Services Built Specifically For Your Need</h1>
            </div>
            <div class=\"row g-5 services-inner\">
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".3s\">
                    <div class=\"services-item bg-light\">
                        <div class=\"p-4 text-center services-content\">
                            <div class=\"services-content-icon\">
                                <!-- <i class=\"fa fa-code fa-7x mb-4 text-primary\"></i>-->
                                <i class=\"fa-solid fa-wrench fa-7x mb-4 text-primary\" style=\"color: #065ff9;\"></i>
                                <h4 class=\"mb-3\">Plomberie</h4>
                                <p class=\"mb-4\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href=\"\" class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".5s\">
                    <div class=\"services-item bg-light\">
                        <div class=\"p-4 text-center services-content\">
                            <div class=\"services-content-icon\">
                                <i class=\"fa-solid fa-bolt fa-7x mb-4 text-primary\" style=\"color: #005eff;\"></i>

                                <h4 class=\"mb-3\">Electricité</h4>
                                <p class=\"mb-4\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href=\"\" class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".7s\">
                    <div class=\"services-item bg-light\">
                        <div class=\"p-4 text-center services-content\">
                            <div class=\"services-content-icon\">
                                <i class=\"fa-solid fa-tree fa-7x mb-4 text-primary\" style=\"color: #005eff;\"></i>

                                <h4 class=\"mb-3\">Jardinage</h4>
                                <p class=\"mb-4\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href=\"\" class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".3s\">
                    <div class=\"services-item bg-light\">
                        <div class=\"p-4 text-center services-content\">
                            <div class=\"services-content-icon\">
                                <i class=\"fas fa-user-secret fa-7x mb-4 text-primary\"></i>
                                <h4 class=\"mb-3\">Caméras et alarmes</h4>
                                <p class=\"mb-4\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href=\"\" class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".5s\">
                    <div class=\"services-item bg-light\">
                        <div class=\"p-4 text-center services-content\">
                            <div class=\"services-content-icon\">
                                <i class=\"fa-solid fa-paint-roller fa-7x mb-4 text-primary\" style=\"color: #005eff;\"></i>
                                <h4 class=\"mb-3\">Peinture</h4>
                                <p class=\"mb-4\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href=\"\" class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".7s\">
                    <div class=\"services-item bg-light\">
                        <div class=\"p-4 text-center services-content\">
                            <div class=\"services-content-icon\">
                                <i class=\"fa-solid fa-trowel-bricks fa-7x mb-4 text-primary\" style=\"color: #005eff;\"></i>
                                <h4 class=\"mb-3\">Maçonnerie</h4>
                                <p class=\"mb-4\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href=\"\" class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"text-center mx-auto pb-5 wow fadeIn\" data-wow-delay=\".3s\" style=\"max-width: 600px;\">
                <br><br> <a href=\"\" class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\">Find More</a>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Project Start -->
    <div class=\"container-fluid project py-5 mb-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto pb-5 wow fadeIn\" data-wow-delay=\".3s\" style=\"max-width: 600px;\">
                <h5 class=\"text-primary\">Our Project</h5>
                <h1>Our Recently Completed Projects</h1>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".3s\">
                    <div class=\"project-item\">
                        <div class=\"project-img\">
                            <img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/project-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded\" alt=\"\">
                            <div class=\"project-content\">
                                <a href=\"#\" class=\"text-center\">
                                    <h4 class=\"text-secondary\">Web design</h4>
                                    <p class=\"m-0 text-white\">Web Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".5s\">
                    <div class=\"project-item\">
                        <div class=\"project-img\">
                            <img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/project-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded\" alt=\"\">
                            <div class=\"project-content\">
                                <a href=\"#\" class=\"text-center\">
                                    <h4 class=\"text-secondary\">Cyber Security</h4>
                                    <p class=\"m-0 text-white\">Cyber Security Core</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".7s\">
                    <div class=\"project-item\">
                        <div class=\"project-img\">
                            <img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/project-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded\" alt=\"\">
                            <div class=\"project-content\">
                                <a href=\"#\" class=\"text-center\">
                                    <h4 class=\"text-secondary\">Mobile Info</h4>
                                    <p class=\"m-0 text-white\">Upcomming Phone</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".3s\">
                    <div class=\"project-item\">
                        <div class=\"project-img\">
                            <img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/project-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded\" alt=\"\">
                            <div class=\"project-content\">
                                <a href=\"#\" class=\"text-center\">
                                    <h4 class=\"text-secondary\">Web Development</h4>
                                    <p class=\"m-0 text-white\">Web Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".5s\">
                    <div class=\"project-item\">
                        <div class=\"project-img\">
                            <img src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/project-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded\" alt=\"\">
                            <div class=\"project-content\">
                                <a href=\"#\" class=\"text-center\">
                                    <h4 class=\"text-secondary\">Digital Marketing</h4>
                                    <p class=\"m-0 text-white\">Marketing Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".7s\">
                    <div class=\"project-item\">
                        <div class=\"project-img\">
                            <img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/project-6.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded\" alt=\"\">
                            <div class=\"project-content\">
                                <a href=\"#\" class=\"text-center\">
                                    <h4 class=\"text-secondary\">keyword Research</h4>
                                    <p class=\"m-0 text-white\">keyword Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Blog Start -->
    <div class=\"container-fluid blog py-5 mb-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto pb-5 wow fadeIn\" data-wow-delay=\".3s\" style=\"max-width: 600px;\">
                <h5 class=\"text-primary\">Our Blog</h5>
                <h1>Latest Blog & News</h1>
            </div>
            <div class=\"row g-5 justify-content-center\">
                <div class=\"col-lg-6 col-xl-4 wow fadeIn\" data-wow-delay=\".3s\">
                    <div class=\"blog-item position-relative bg-light rounded\">
                        <img src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/blog-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        <span class=\"position-absolute px-4 py-3 bg-primary text-white rounded\" style=\"top: -28px; right: 20px;\">Architecture</span>
                        <div class=\"blog-btn d-flex justify-content-between position-relative px-3\" style=\"margin-top: -75px;\">
                            <div class=\"blog-icon btn btn-secondary px-3 rounded-pill my-auto\">
                                <a href=\"\" class=\"btn text-white\">Read More</a>
                            </div>
                            <div class=\"blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill \">
                                <div class=\"blog-icon-1\">
                                    <p class=\"text-white px-2\">Share<i class=\"fa fa-arrow-right ms-3\"></i></p>
                                </div>
                                <div class=\"blog-icon-2\">
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-facebook-f text-white\"></i></a>
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-twitter text-white\"></i></a>
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-instagram text-white\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"blog-content text-center position-relative px-3\" style=\"margin-top: -25px;\">
                            <img src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/admin-22.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle border border-4 border-white mb-3\" alt=\"\">
                            <h5 class=\"\">By haithem Lemsi</h5>
                            <span class=\"text-secondary\">24 janvier 2024</span>
                            <p class=\"py-2\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div class=\"blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom\">
                            <a href=\"\" class=\"text-white\"><small><i class=\"fas fa-share me-2 text-secondary\"></i>8549 Share</small></a>
                            <a href=\"\" class=\"text-white\"><small><i class=\"fa fa-comments me-2 text-secondary\"></i>26 Comments</small></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xl-4 wow fadeIn\" data-wow-delay=\".5s\">
                    <div class=\"blog-item position-relative bg-light rounded\">
                        <img src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/electricitee.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        <span class=\"position-absolute px-4 py-3 bg-primary text-white rounded\" style=\"top: -28px; right: 20px;\">Electricité</span>
                        <div class=\"blog-btn d-flex justify-content-between position-relative px-3\" style=\"margin-top: -75px;\">
                            <div class=\"blog-icon btn btn-secondary px-3 rounded-pill my-auto\">
                                <a href=\"\" class=\"btn text-white \">Read More</a>
                            </div>
                            <div class=\"blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill \">
                                <div class=\"blog-icon-1\">
                                    <p class=\"text-white px-2\">Share<i class=\"fa fa-arrow-right ms-3\"></i></p>
                                </div>
                                <div class=\"blog-icon-2\">
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-facebook-f text-white\"></i></a>
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-twitter text-white\"></i></a>
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-instagram text-white\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"blog-content text-center position-relative px-3\" style=\"margin-top: -25px;\">
                            <img src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/électricien (1).jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle border border-4 border-white mb-3\" alt=\"\">
                            <h5 class=\"\">By Abdlhmid ben amor</h5>
                            <span class=\"text-secondary\">23 April 2023</span>
                            <p class=\"py-2\">M3rftch rakeb ambouba sad me . Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div class=\"blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom\">
                            <a href=\"\" class=\"text-white\"><small><i class=\"fas fa-share me-2 text-secondary\"></i>824 Share</small></a>
                            <a href=\"\" class=\"text-white\"><small><i class=\"fa fa-comments me-2 text-secondary\"></i>12 Comments</small></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xl-4 wow fadeIn\" data-wow-delay=\".7s\">
                    <div class=\"blog-item position-relative bg-light rounded\">
                        <img src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/blog-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        <span class=\"position-absolute px-4 py-3 bg-primary text-white rounded\" style=\"top: -28px; right: 20px;\">chef Chantier</span>
                        <div class=\"blog-btn d-flex justify-content-between position-relative px-3\" style=\"margin-top: -75px;\">
                            <div class=\"blog-icon btn btn-secondary px-3 rounded-pill my-auto\">
                                <a href=\"\" class=\"btn text-white \">Read More</a>
                            </div>
                            <div class=\"blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill \">
                                <div class=\"blog-icon-1\">
                                    <p class=\"text-white px-2\">Share<i class=\"fa fa-arrow-right ms-3\"></i></p>
                                </div>
                                <div class=\"blog-icon-2\">
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-facebook-f text-white\"></i></a>
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-twitter text-white\"></i></a>
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-instagram text-white\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"blog-content text-center position-relative px-3\" style=\"margin-top: -25px;\">
                            <img src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/admin.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle border border-4 border-white mb-3\" alt=\"\">
                            <h5 class=\"\">By Daniel Martin</h5>
                            <span class=\"text-secondary\">30 jan 2023</span>
                            <p class=\"py-2\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div class=\"blog-coments d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom\">
                            <a href=\"\" class=\"text-white\"><small><i class=\"fas fa-share me-2 text-secondary\"></i>5324 Share</small></a>
                            <a href=\"\" class=\"text-white\"><small><i class=\"fa fa-comments me-2 text-secondary\"></i>5 Comments</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Team Start -->
    <div class=\"container-fluid py-5 mb-5 team\">
        <div class=\"container\">
            <div class=\"text-center mx-auto pb-5 wow fadeIn\" data-wow-delay=\".3s\" style=\"max-width: 600px;\">
                <h5 class=\"text-primary\">Our Recommendations</h5>
                <h1>Meet our expert Employees</h1>
            </div>
            <div class=\"owl-carousel team-carousel wow fadeIn\" data-wow-delay=\".5s\">
                <div class=\"rounded team-item\">
                    <div class=\"team-content\">
                        <div class=\"team-img-icon\">
                            <div class=\"team-img rounded-circle\">
                                <img src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/teammm.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-circle\" alt=\"\">
                            </div>
                            <div class=\"team-name text-center py-3\">
                                <h4 class=\"\">Abdlhmid ben amor</h4>
                                <p class=\"m-0\">Electricient</p>
                            </div>
                            <div class=\"team-icon d-flex justify-content-center pb-4\">
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"rounded team-item\">
                    <div class=\"team-content\">
                        <div class=\"team-img-icon\">
                            <div class=\"team-img rounded-circle\">
                                <img src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/plm.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-circle\" alt=\"\">
                            </div>
                            <div class=\"team-name text-center py-3\">
                                <h4 class=\"\">Gadour Cherni</h4>
                                <p class=\"m-0\">plombier</p>
                            </div>
                            <div class=\"team-icon d-flex justify-content-center pb-4\">
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"rounded team-item\">
                    <div class=\"team-content\">
                        <div class=\"team-img-icon\">
                            <div class=\"team-img rounded-circle\">
                                <img src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/Aljeya.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-circle\" alt=\"\">
                            </div>
                            <div class=\"team-name text-center py-3\">
                                <h4 class=\"\">Aljeya Boutflika</h4>
                                <p class=\"m-0\">chef chantier</p>
                            </div>
                            <div class=\"team-icon d-flex justify-content-center pb-4\">
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"rounded team-item\">
                    <div class=\"team-content\">
                        <div class=\"team-img-icon\">
                            <div class=\"team-img rounded-circle\">
                                <img src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/heheeboy.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-circle\" alt=\"\">
                            </div>
                            <div class=\"team-name text-center py-3\">
                                <h4 class=\"\">kais boudabir</h4>
                                <p class=\"m-0\">jardinier</p>
                            </div>
                            <div class=\"team-icon d-flex justify-content-center pb-4\">
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class=\"container-fluid testimonial py-5 mb-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto pb-5 wow fadeIn\" data-wow-delay=\".3s\" style=\"max-width: 600px;\">
                <h5 class=\"text-primary\">Our Testimonial</h5>
                <h1>Our Client Saying!</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel wow fadeIn\" data-wow-delay=\".5s\">
                <div class=\"testimonial-item border p-4\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"\">
                            <img src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/testimonial-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"ms-4\">
                            <h4 class=\"text-secondary\">Client Name</h4>
                            <p class=\"m-0 pb-3\">Profession</p>
                            <div class=\"d-flex pe-5\">
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                            </div>
                        </div>
                    </div>
                    <div class=\"border-top mt-4 pt-3\">
                        <p class=\"mb-0\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class=\"testimonial-item border p-4\">
                    <div class=\" d-flex align-items-center\">
                        <div class=\"\">
                            <img src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/testimonial-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"ms-4\">
                            <h4 class=\"text-secondary\">Client Name</h4>
                            <p class=\"m-0 pb-3\">Profession</p>
                            <div class=\"d-flex pe-5\">
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                            </div>
                        </div>
                    </div>
                    <div class=\"border-top mt-4 pt-3\">
                        <p class=\"mb-0\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class=\"testimonial-item border p-4\">
                    <div class=\" d-flex align-items-center\">
                        <div class=\"\">
                            <img src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/testimonial-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"ms-4\">
                            <h4 class=\"text-secondary\">Client Name</h4>
                            <p class=\"m-0 pb-3\">Profession</p>
                            <div class=\"d-flex pe-5\">
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                            </div>
                        </div>
                    </div>
                    <div class=\"border-top mt-4 pt-3\">
                        <p class=\"mb-0\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class=\"testimonial-item border p-4\">
                    <div class=\" d-flex align-items-center\">
                        <div class=\"\">
                            <img src=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/testimonial-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"ms-4\">
                            <h4 class=\"text-secondary\">Client Name</h4>
                            <p class=\"m-0 pb-3\">Profession</p>
                            <div class=\"d-flex pe-5\">
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                            </div>
                        </div>
                    </div>
                    <div class=\"border-top mt-4 pt-3\">
                        <p class=\"mb-0\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class=\"container-fluid py-5 mb-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto pb-5 wow fadeIn\" data-wow-delay=\".3s\" style=\"max-width: 600px;\">
                <h5 class=\"text-primary\">Get In Touch</h5>
                <h1 class=\"mb-3\">Contact for any query</h1>
                <p class=\"mb-2\">blablablablalbalablbalabl Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
            </div>
            <div class=\"contact-detail position-relative p-5\">
                <div class=\"row g-5 mb-5 justify-content-center\">
                    <div class=\"col-xl-4 col-lg-6 wow fadeIn\" data-wow-delay=\".3s\">
                        <div class=\"d-flex bg-light p-3 rounded\">
                            <div class=\"flex-shrink-0 btn-square bg-secondary rounded-circle\" style=\"width: 64px; height: 64px;\">
                                <i class=\"fas fa-map-marker-alt text-white\"></i>
                            </div>
                            <div class=\"ms-3\">
                                <h4 class=\"text-primary\">Address</h4>
                                <a href=\"https://goo.gl/maps/Zd4BCynmTb98ivUJ6\" target=\"_blank\" class=\"h5\">ty cite ghazela petite arianna, esprit</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 wow fadeIn\" data-wow-delay=\".5s\">
                        <div class=\"d-flex bg-light p-3 rounded\">
                            <div class=\"flex-shrink-0 btn-square bg-secondary rounded-circle\" style=\"width: 64px; height: 64px;\">
                                <i class=\"fa fa-phone text-white\"></i>
                            </div>
                            <div class=\"ms-3\">
                                <h4 class=\"text-primary\">Call Us</h4>
                                <a class=\"h5\" href=\"tel:+0123456789\" target=\"_blank\">+216 25 301 941</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 wow fadeIn\" data-wow-delay=\".7s\">
                        <div class=\"d-flex bg-light p-3 rounded\">
                            <div class=\"flex-shrink-0 btn-square bg-secondary rounded-circle\" style=\"width: 64px; height: 64px;\">
                                <i class=\"fa fa-envelope text-white\"></i>
                            </div>
                            <div class=\"ms-3\">
                                <h4 class=\"text-primary\">Email Us</h4>
                                <a class=\"h5\" href=\"mailto:info@example.com\" target=\"_blank\">Lemsi.info@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row g-5\">
                    <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\".3s\">
                        <div class=\"p-5 h-100 rounded contact-map\">
                            <iframe class=\"rounded w-100 h-100\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                        </div>
                    </div>
                    <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\".5s\">
                        <div class=\"p-5 rounded contact-form\">
                            <div class=\"mb-4\">
                                <input type=\"text\" class=\"form-control border-0 py-3\" placeholder=\"Your Name\">
                            </div>
                            <div class=\"mb-4\">
                                <input type=\"email\" class=\"form-control border-0 py-3\" placeholder=\"Your Email\">
                            </div>
                            <div class=\"mb-4\">
                                <input type=\"text\" class=\"form-control border-0 py-3\" placeholder=\"Project\">
                            </div>
                            <div class=\"mb-4\">
                                <textarea class=\"w-100 form-control border-0 py-3\" rows=\"6\" cols=\"10\" placeholder=\"Message\"></textarea>
                            </div>
                            <div class=\"text-start\">
                                <button class=\"btn bg-primary text-white py-3 px-5\" type=\"button\">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->



    <!--login start-->
    <div id=\"loginModal\">
        <h2>Login</h2>
        <form>
            <input class=\"sp-input\" type=\"text\" placeholder=\"Username\" required>
            <input class=\"sp-input\" type=\"password\" placeholder=\"Password\" required>
            <button class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\" type=\"submit\">Login</button>
        </form>
        <p>Don't have an account? <a href=\"#\" onclick=\"switchModal()\">Register here</a></p>
    </div>
    <div id=\"overlaylx\" onclick=\"closeModal()\"></div>
    <!--login-end-->

    <!-- registery start-->
    <div id=\"registerModal\">
        <div class=\"form-v10\" >
            <div class=\"page-content\">
                <div class=\"form-v10-content\">
                    <form class=\"form-detail\" action=\"#\" method=\"post\" id=\"myform\">
                        <div class=\"form-left\">
                            <h2>General Infomation</h2>
                            <div class=\"form-row\">
                                <select name=\"title\">
                                    <option class=\"option\" value=\"title\">Title</option>
                                    <option class=\"option\" value=\"Employee\">Employee</option>
                                    <option class=\"option\" value=\"Chef_Chantier\">Chef Chantier</option>
                                    <option class=\"option\" value=\"Client\">Client</option>
                                </select>
                                <span class=\"select-btn\">
                                        <i class=\"zmdi zmdi-chevron-down\"></i>
                                </span>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"form-row form-row-1\">
                                    <input type=\"text\" name=\"first_name\" id=\"first_name\" class=\"input-text\" placeholder=\"First Name\" required>
                                </div>
                                <div class=\"form-row form-row-2\">
                                    <input type=\"text\" name=\"last_name\" id=\"last_name\" class=\"input-text\" placeholder=\"Last Name\" required>
                                </div>
                            </div>

                            <span class=\"select-btn\">
                                        <i class=\"zmdi zmdi-chevron-down\"></i>
                                </span>

                            <div class=\"form-row\">
                                <input type=\"text\" name=\"Age\" class=\"company\" id=\"company\" placeholder=\"Age\" required>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"form-row form-row-3\">
                                    <input type=\"text\" name=\"business\" class=\"business\" id=\"business\" placeholder=\"Business Arena\" required>
                                </div>
                                <div class=\"form-row form-row-4\">
                                    <select name=\"employees\">
                                        <option value=\"employees\">Employees</option>
                                        <option value=\"trainee\">Trainee</option>
                                        <option value=\"colleague\">Colleague</option>
                                        <option value=\"associate\">Associate</option>
                                    </select>
                                    <span class=\"select-btn\">
                                            <i class=\"zmdi zmdi-chevron-down\"></i>
                                    </span>
                                </div>
                            </div>
                            <p>Already have an account? <a href=\"#\" onclick=\"switchModal()\">Login here</a></p>
                        </div>
                        <div class=\"form-right\">
                            <h2>Contact Details</h2>
                            <div class=\"form-row\">
                                <input type=\"text\" name=\"street\" class=\"street\" id=\"street\" placeholder=\"Street + Nr\" required>
                            </div>
                            <div class=\"form-row\">
                                <input type=\"text\" name=\"additional\" class=\"additional\" id=\"additional\" placeholder=\"Additional Information\" required>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"form-row form-row-1\">
                                    <input type=\"text\" name=\"zip\" class=\"zip\" id=\"zip\" placeholder=\"Zip Code\" required>
                                </div>
                                <div class=\"form-row form-row-2\">
                                    <select name=\"place\">
                                        <option value=\"place\">Place</option>
                                        <option value=\"Street\">Street</option>
                                        <option value=\"District\">District</option>
                                        <option value=\"City\">City</option>
                                    </select>
                                    <span class=\"select-btn\">
                                            <i class=\"zmdi zmdi-chevron-down\"></i>
                                    </span>
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <select name=\"country\">
                                    <option value=\"Area\">Area</option>
                                    <option value=\"Arianna\">Arianna</option>
                                    <option value=\"Jandouba\">Jandouba</option>
                                    <option value=\"Djerba\">Djerba</option>
                                    <option value=\"Gabes\">Gabes</option>
                                    <option value=\"Bizerte\">Bizerte</option>
                                </select>
                                <span class=\"select-btn\">
                                        <i class=\"zmdi zmdi-chevron-down\"></i>
                                </span>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"form-row form-row-1\">
                                    <input type=\"text\" name=\"code\" class=\"code\" id=\"code\" placeholder=\"Code +\" required>
                                </div>
                                <div class=\"form-row form-row-2\">
                                    <input type=\"text\" name=\"phone\" class=\"phone\" id=\"phone\" placeholder=\"Phone Number\" required>
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <input type=\"text\" name=\"your_email\" id=\"your_email\" class=\"input-text\" required pattern=\"[^@]+@[^@]+.[a-zA-Z]{2,6}\" placeholder=\"Your Email\">
                            </div>
                            <div class=\"form-checkbox\">
                                <label class=\"container\"><p>I do accept the <a href=\"#\" class=\"text\">Terms and Conditions</a> of your site.</p>
                                    <input type=\"checkbox\" name=\"checkbox\">
                                    <span class=\"checkmark\"></span>
                                </label>
                            </div>
                            <div class=\"form-row-last\">
                                <input class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\" type=\"submit\" name=\"register\" class=\"register\" value=\"Register\">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id=\"overlaylx\" onclick=\"closeModal()\"></div>
    <!--register end-->




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  721 => 572,  697 => 551,  673 => 530,  649 => 509,  615 => 478,  593 => 459,  571 => 440,  549 => 421,  517 => 392,  496 => 374,  480 => 361,  459 => 343,  443 => 330,  422 => 312,  393 => 286,  377 => 273,  361 => 260,  345 => 247,  329 => 234,  313 => 221,  189 => 100,  184 => 98,  116 => 33,  101 => 21,  88 => 10,  78 => 9,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}WeBuild{% endblock %}





{% block body %}


    <!-- Carousel Start -->
    <div class=\"container-fluid px-0\">
        <div id=\"carouselId\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-bs-target=\"#carouselId\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"First slide\"></li>
                <li data-bs-target=\"#carouselId\" data-bs-slide-to=\"1\" aria-label=\"Second slide\"></li>
            </ol>
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"carousel-item active\">
                    <img src=\"{{ asset('front/img/carousel-1.jpg') }}\" class=\"img-fluid\" alt=\"First slide\">
                    <div class=\"carousel-caption\">
                        <div class=\"container carousel-content\">
                            <h6 class=\"text-secondary h4 animated fadeInUp\">Barkachni: pour une construction durable</h6>
                            <h1 class=\"text-white display-1 mb-4 animated fadeInRight\">An Innovative IT Solutions Agency</h1>
                            <p class=\"mb-4 text-white fs-5 animated fadeInDown\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt.</p>
                            <a href=\"\" class=\"me-2\"><button type=\"button\" class=\"px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft\">Read More</button></a>
                            <a href=\"\" class=\"ms-2\"><button type=\"button\" class=\"px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight\">Contact Us</button></a>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img src=\"{{ asset('front/img/carousel-2.jpg')}}\" class=\"img-fluid\" alt=\"Second slide\">
                    <div class=\"carousel-caption\">
                        <div class=\"container carousel-content\">
                            <h6 class=\"text-secondary h4 animated fadeInUp\">Barkachni: pour une construction durable</h6>
                            <h1 class=\"text-white display-1 mb-4 animated fadeInLeft\">Quality Digital Services You Really Need!</h1>
                            <p class=\"mb-4 text-white fs-5 animated fadeInDown\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt.</p>
                            <a href=\"\" class=\"me-2\"><button type=\"button\" class=\"px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft\">Read More</button></a>
                            <a href=\"\" class=\"ms-2\"><button type=\"button\" class=\"px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight\">Contact Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Fact Start -->
    <div class=\"container-fluid bg-secondary py-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 wow fadeIn\" data-wow-delay=\".1s\">
                    <div class=\"d-flex counter\">
                        <h1 class=\"me-3 text-primary counter-value\">99</h1>
                        <h5 class=\"text-white mt-1\">Success in getting happy customer</h5>
                    </div>
                </div>
                <div class=\"col-lg-3 wow fadeIn\" data-wow-delay=\".3s\">
                    <div class=\"d-flex counter\">
                        <h1 class=\"me-3 text-primary counter-value\">25</h1>
                        <h5 class=\"text-white mt-1\">Thousands of successful business</h5>
                    </div>
                </div>
                <div class=\"col-lg-3 wow fadeIn\" data-wow-delay=\".5s\">
                    <div class=\"d-flex counter\">
                        <h1 class=\"me-3 text-primary counter-value\">120</h1>
                        <h5 class=\"text-white mt-1\">Total employees satisfied </h5>
                    </div>
                </div>
                <div class=\"col-lg-3 wow fadeIn\" data-wow-delay=\".7s\">
                    <div class=\"d-flex counter\">
                        <h1 class=\"me-3 text-primary counter-value\">5</h1>
                        <h5 class=\"text-white mt-1\">Stars reviews given by satisfied clients</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- About Start -->
    <div class=\"container-fluid py-5 my-5\">
        <div class=\"container pt-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-5 col-md-6 col-sm-12 wow fadeIn\" data-wow-delay=\".3s\">
                    <div class=\"h-100 position-relative\">
                        <img  src=\" {{ asset ('front/img/about-1.jpg') }}\" class=\"img-fluid w-75 rounded\" alt=\"\" style=\"margin-bottom: 25%;\">
                        <div class=\"position-absolute w-75\" style=\"top: 25%; left: 25%;\">
                            <img src=\"{{ asset ('front/img/about-2.jpg')}}\" class=\"img-fluid w-100 rounded\" alt=\"\">
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-7 col-md-6 col-sm-12 wow fadeIn\" data-wow-delay=\".5s\">
                    <h5 class=\"text-primary\">About Us</h5>
                    <h1 class=\"mb-4\">About FixMe Agency And It's Innovative Solutions in field construction</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet leo cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus. Etiam gravida justo nec erat vestibulum, et malesuada augue laoreet.</p>
                    <p class=\"mb-4\">Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet leo cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus.</p>
                    <a href=\"\" class=\"btn btn-secondary rounded-pill px-5 py-3 text-white\">More Details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class=\"container-fluid services py-5 mb-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto pb-5 wow fadeIn\" data-wow-delay=\".3s\" style=\"max-width: 600px;\">
                <h5 class=\"text-primary\">Our Services</h5>
                <h1>Services Built Specifically For Your Need</h1>
            </div>
            <div class=\"row g-5 services-inner\">
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".3s\">
                    <div class=\"services-item bg-light\">
                        <div class=\"p-4 text-center services-content\">
                            <div class=\"services-content-icon\">
                                <!-- <i class=\"fa fa-code fa-7x mb-4 text-primary\"></i>-->
                                <i class=\"fa-solid fa-wrench fa-7x mb-4 text-primary\" style=\"color: #065ff9;\"></i>
                                <h4 class=\"mb-3\">Plomberie</h4>
                                <p class=\"mb-4\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href=\"\" class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".5s\">
                    <div class=\"services-item bg-light\">
                        <div class=\"p-4 text-center services-content\">
                            <div class=\"services-content-icon\">
                                <i class=\"fa-solid fa-bolt fa-7x mb-4 text-primary\" style=\"color: #005eff;\"></i>

                                <h4 class=\"mb-3\">Electricité</h4>
                                <p class=\"mb-4\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href=\"\" class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".7s\">
                    <div class=\"services-item bg-light\">
                        <div class=\"p-4 text-center services-content\">
                            <div class=\"services-content-icon\">
                                <i class=\"fa-solid fa-tree fa-7x mb-4 text-primary\" style=\"color: #005eff;\"></i>

                                <h4 class=\"mb-3\">Jardinage</h4>
                                <p class=\"mb-4\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href=\"\" class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".3s\">
                    <div class=\"services-item bg-light\">
                        <div class=\"p-4 text-center services-content\">
                            <div class=\"services-content-icon\">
                                <i class=\"fas fa-user-secret fa-7x mb-4 text-primary\"></i>
                                <h4 class=\"mb-3\">Caméras et alarmes</h4>
                                <p class=\"mb-4\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href=\"\" class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".5s\">
                    <div class=\"services-item bg-light\">
                        <div class=\"p-4 text-center services-content\">
                            <div class=\"services-content-icon\">
                                <i class=\"fa-solid fa-paint-roller fa-7x mb-4 text-primary\" style=\"color: #005eff;\"></i>
                                <h4 class=\"mb-3\">Peinture</h4>
                                <p class=\"mb-4\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href=\"\" class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".7s\">
                    <div class=\"services-item bg-light\">
                        <div class=\"p-4 text-center services-content\">
                            <div class=\"services-content-icon\">
                                <i class=\"fa-solid fa-trowel-bricks fa-7x mb-4 text-primary\" style=\"color: #005eff;\"></i>
                                <h4 class=\"mb-3\">Maçonnerie</h4>
                                <p class=\"mb-4\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href=\"\" class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"text-center mx-auto pb-5 wow fadeIn\" data-wow-delay=\".3s\" style=\"max-width: 600px;\">
                <br><br> <a href=\"\" class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\">Find More</a>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Project Start -->
    <div class=\"container-fluid project py-5 mb-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto pb-5 wow fadeIn\" data-wow-delay=\".3s\" style=\"max-width: 600px;\">
                <h5 class=\"text-primary\">Our Project</h5>
                <h1>Our Recently Completed Projects</h1>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".3s\">
                    <div class=\"project-item\">
                        <div class=\"project-img\">
                            <img src=\"{{ asset ('front/img/project-1.jpg')}}\" class=\"img-fluid w-100 rounded\" alt=\"\">
                            <div class=\"project-content\">
                                <a href=\"#\" class=\"text-center\">
                                    <h4 class=\"text-secondary\">Web design</h4>
                                    <p class=\"m-0 text-white\">Web Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".5s\">
                    <div class=\"project-item\">
                        <div class=\"project-img\">
                            <img src=\"{{ asset ('front/img/project-2.jpg')}}\" class=\"img-fluid w-100 rounded\" alt=\"\">
                            <div class=\"project-content\">
                                <a href=\"#\" class=\"text-center\">
                                    <h4 class=\"text-secondary\">Cyber Security</h4>
                                    <p class=\"m-0 text-white\">Cyber Security Core</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".7s\">
                    <div class=\"project-item\">
                        <div class=\"project-img\">
                            <img src=\"{{ asset ('front/img/project-3.jpg')}}\" class=\"img-fluid w-100 rounded\" alt=\"\">
                            <div class=\"project-content\">
                                <a href=\"#\" class=\"text-center\">
                                    <h4 class=\"text-secondary\">Mobile Info</h4>
                                    <p class=\"m-0 text-white\">Upcomming Phone</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".3s\">
                    <div class=\"project-item\">
                        <div class=\"project-img\">
                            <img src=\"{{ asset ('front/img/project-4.jpg')}}\" class=\"img-fluid w-100 rounded\" alt=\"\">
                            <div class=\"project-content\">
                                <a href=\"#\" class=\"text-center\">
                                    <h4 class=\"text-secondary\">Web Development</h4>
                                    <p class=\"m-0 text-white\">Web Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".5s\">
                    <div class=\"project-item\">
                        <div class=\"project-img\">
                            <img src=\"{{ asset ('front/img/project-5.jpg')}}\" class=\"img-fluid w-100 rounded\" alt=\"\">
                            <div class=\"project-content\">
                                <a href=\"#\" class=\"text-center\">
                                    <h4 class=\"text-secondary\">Digital Marketing</h4>
                                    <p class=\"m-0 text-white\">Marketing Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeIn\" data-wow-delay=\".7s\">
                    <div class=\"project-item\">
                        <div class=\"project-img\">
                            <img src=\"{{ asset ('front/img/project-6.jpg')}}\" class=\"img-fluid w-100 rounded\" alt=\"\">
                            <div class=\"project-content\">
                                <a href=\"#\" class=\"text-center\">
                                    <h4 class=\"text-secondary\">keyword Research</h4>
                                    <p class=\"m-0 text-white\">keyword Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Blog Start -->
    <div class=\"container-fluid blog py-5 mb-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto pb-5 wow fadeIn\" data-wow-delay=\".3s\" style=\"max-width: 600px;\">
                <h5 class=\"text-primary\">Our Blog</h5>
                <h1>Latest Blog & News</h1>
            </div>
            <div class=\"row g-5 justify-content-center\">
                <div class=\"col-lg-6 col-xl-4 wow fadeIn\" data-wow-delay=\".3s\">
                    <div class=\"blog-item position-relative bg-light rounded\">
                        <img src=\"{{ asset ('front/img/blog-1.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        <span class=\"position-absolute px-4 py-3 bg-primary text-white rounded\" style=\"top: -28px; right: 20px;\">Architecture</span>
                        <div class=\"blog-btn d-flex justify-content-between position-relative px-3\" style=\"margin-top: -75px;\">
                            <div class=\"blog-icon btn btn-secondary px-3 rounded-pill my-auto\">
                                <a href=\"\" class=\"btn text-white\">Read More</a>
                            </div>
                            <div class=\"blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill \">
                                <div class=\"blog-icon-1\">
                                    <p class=\"text-white px-2\">Share<i class=\"fa fa-arrow-right ms-3\"></i></p>
                                </div>
                                <div class=\"blog-icon-2\">
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-facebook-f text-white\"></i></a>
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-twitter text-white\"></i></a>
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-instagram text-white\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"blog-content text-center position-relative px-3\" style=\"margin-top: -25px;\">
                            <img src=\"{{ asset ('front/img/admin-22.jpg')}}\" class=\"img-fluid rounded-circle border border-4 border-white mb-3\" alt=\"\">
                            <h5 class=\"\">By haithem Lemsi</h5>
                            <span class=\"text-secondary\">24 janvier 2024</span>
                            <p class=\"py-2\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div class=\"blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom\">
                            <a href=\"\" class=\"text-white\"><small><i class=\"fas fa-share me-2 text-secondary\"></i>8549 Share</small></a>
                            <a href=\"\" class=\"text-white\"><small><i class=\"fa fa-comments me-2 text-secondary\"></i>26 Comments</small></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xl-4 wow fadeIn\" data-wow-delay=\".5s\">
                    <div class=\"blog-item position-relative bg-light rounded\">
                        <img src=\"{{ asset ('front/img/electricitee.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        <span class=\"position-absolute px-4 py-3 bg-primary text-white rounded\" style=\"top: -28px; right: 20px;\">Electricité</span>
                        <div class=\"blog-btn d-flex justify-content-between position-relative px-3\" style=\"margin-top: -75px;\">
                            <div class=\"blog-icon btn btn-secondary px-3 rounded-pill my-auto\">
                                <a href=\"\" class=\"btn text-white \">Read More</a>
                            </div>
                            <div class=\"blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill \">
                                <div class=\"blog-icon-1\">
                                    <p class=\"text-white px-2\">Share<i class=\"fa fa-arrow-right ms-3\"></i></p>
                                </div>
                                <div class=\"blog-icon-2\">
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-facebook-f text-white\"></i></a>
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-twitter text-white\"></i></a>
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-instagram text-white\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"blog-content text-center position-relative px-3\" style=\"margin-top: -25px;\">
                            <img src=\"{{ asset ('front/img/électricien (1).jpg')}}\" class=\"img-fluid rounded-circle border border-4 border-white mb-3\" alt=\"\">
                            <h5 class=\"\">By Abdlhmid ben amor</h5>
                            <span class=\"text-secondary\">23 April 2023</span>
                            <p class=\"py-2\">M3rftch rakeb ambouba sad me . Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div class=\"blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom\">
                            <a href=\"\" class=\"text-white\"><small><i class=\"fas fa-share me-2 text-secondary\"></i>824 Share</small></a>
                            <a href=\"\" class=\"text-white\"><small><i class=\"fa fa-comments me-2 text-secondary\"></i>12 Comments</small></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xl-4 wow fadeIn\" data-wow-delay=\".7s\">
                    <div class=\"blog-item position-relative bg-light rounded\">
                        <img src=\"{{ asset ('front/img/blog-3.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        <span class=\"position-absolute px-4 py-3 bg-primary text-white rounded\" style=\"top: -28px; right: 20px;\">chef Chantier</span>
                        <div class=\"blog-btn d-flex justify-content-between position-relative px-3\" style=\"margin-top: -75px;\">
                            <div class=\"blog-icon btn btn-secondary px-3 rounded-pill my-auto\">
                                <a href=\"\" class=\"btn text-white \">Read More</a>
                            </div>
                            <div class=\"blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill \">
                                <div class=\"blog-icon-1\">
                                    <p class=\"text-white px-2\">Share<i class=\"fa fa-arrow-right ms-3\"></i></p>
                                </div>
                                <div class=\"blog-icon-2\">
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-facebook-f text-white\"></i></a>
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-twitter text-white\"></i></a>
                                    <a href=\"\" class=\"btn me-1\"><i class=\"fab fa-instagram text-white\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"blog-content text-center position-relative px-3\" style=\"margin-top: -25px;\">
                            <img src=\"{{ asset ('front/img/admin.jpg')}}\" class=\"img-fluid rounded-circle border border-4 border-white mb-3\" alt=\"\">
                            <h5 class=\"\">By Daniel Martin</h5>
                            <span class=\"text-secondary\">30 jan 2023</span>
                            <p class=\"py-2\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div class=\"blog-coments d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom\">
                            <a href=\"\" class=\"text-white\"><small><i class=\"fas fa-share me-2 text-secondary\"></i>5324 Share</small></a>
                            <a href=\"\" class=\"text-white\"><small><i class=\"fa fa-comments me-2 text-secondary\"></i>5 Comments</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Team Start -->
    <div class=\"container-fluid py-5 mb-5 team\">
        <div class=\"container\">
            <div class=\"text-center mx-auto pb-5 wow fadeIn\" data-wow-delay=\".3s\" style=\"max-width: 600px;\">
                <h5 class=\"text-primary\">Our Recommendations</h5>
                <h1>Meet our expert Employees</h1>
            </div>
            <div class=\"owl-carousel team-carousel wow fadeIn\" data-wow-delay=\".5s\">
                <div class=\"rounded team-item\">
                    <div class=\"team-content\">
                        <div class=\"team-img-icon\">
                            <div class=\"team-img rounded-circle\">
                                <img src=\"{{ asset ('front/img/teammm.jpg')}}\" class=\"img-fluid w-100 rounded-circle\" alt=\"\">
                            </div>
                            <div class=\"team-name text-center py-3\">
                                <h4 class=\"\">Abdlhmid ben amor</h4>
                                <p class=\"m-0\">Electricient</p>
                            </div>
                            <div class=\"team-icon d-flex justify-content-center pb-4\">
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"rounded team-item\">
                    <div class=\"team-content\">
                        <div class=\"team-img-icon\">
                            <div class=\"team-img rounded-circle\">
                                <img src=\"{{ asset ('front/img/plm.jpg')}}\" class=\"img-fluid w-100 rounded-circle\" alt=\"\">
                            </div>
                            <div class=\"team-name text-center py-3\">
                                <h4 class=\"\">Gadour Cherni</h4>
                                <p class=\"m-0\">plombier</p>
                            </div>
                            <div class=\"team-icon d-flex justify-content-center pb-4\">
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"rounded team-item\">
                    <div class=\"team-content\">
                        <div class=\"team-img-icon\">
                            <div class=\"team-img rounded-circle\">
                                <img src=\"{{ asset ('front/img/Aljeya.jpg')}}\" class=\"img-fluid w-100 rounded-circle\" alt=\"\">
                            </div>
                            <div class=\"team-name text-center py-3\">
                                <h4 class=\"\">Aljeya Boutflika</h4>
                                <p class=\"m-0\">chef chantier</p>
                            </div>
                            <div class=\"team-icon d-flex justify-content-center pb-4\">
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"rounded team-item\">
                    <div class=\"team-content\">
                        <div class=\"team-img-icon\">
                            <div class=\"team-img rounded-circle\">
                                <img src=\"{{ asset ('front/img/heheeboy.jpg')}}\" class=\"img-fluid w-100 rounded-circle\" alt=\"\">
                            </div>
                            <div class=\"team-name text-center py-3\">
                                <h4 class=\"\">kais boudabir</h4>
                                <p class=\"m-0\">jardinier</p>
                            </div>
                            <div class=\"team-icon d-flex justify-content-center pb-4\">
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn btn-square btn-secondary text-white rounded-circle m-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class=\"container-fluid testimonial py-5 mb-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto pb-5 wow fadeIn\" data-wow-delay=\".3s\" style=\"max-width: 600px;\">
                <h5 class=\"text-primary\">Our Testimonial</h5>
                <h1>Our Client Saying!</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel wow fadeIn\" data-wow-delay=\".5s\">
                <div class=\"testimonial-item border p-4\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"\">
                            <img src=\"{{ asset ('front/img/testimonial-1.jpg')}}\" alt=\"\">
                        </div>
                        <div class=\"ms-4\">
                            <h4 class=\"text-secondary\">Client Name</h4>
                            <p class=\"m-0 pb-3\">Profession</p>
                            <div class=\"d-flex pe-5\">
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                            </div>
                        </div>
                    </div>
                    <div class=\"border-top mt-4 pt-3\">
                        <p class=\"mb-0\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class=\"testimonial-item border p-4\">
                    <div class=\" d-flex align-items-center\">
                        <div class=\"\">
                            <img src=\"{{ asset ('front/img/testimonial-2.jpg')}}\" alt=\"\">
                        </div>
                        <div class=\"ms-4\">
                            <h4 class=\"text-secondary\">Client Name</h4>
                            <p class=\"m-0 pb-3\">Profession</p>
                            <div class=\"d-flex pe-5\">
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                            </div>
                        </div>
                    </div>
                    <div class=\"border-top mt-4 pt-3\">
                        <p class=\"mb-0\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class=\"testimonial-item border p-4\">
                    <div class=\" d-flex align-items-center\">
                        <div class=\"\">
                            <img src=\"{{ asset ('front/img/testimonial-3.jpg')}}\" alt=\"\">
                        </div>
                        <div class=\"ms-4\">
                            <h4 class=\"text-secondary\">Client Name</h4>
                            <p class=\"m-0 pb-3\">Profession</p>
                            <div class=\"d-flex pe-5\">
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                            </div>
                        </div>
                    </div>
                    <div class=\"border-top mt-4 pt-3\">
                        <p class=\"mb-0\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class=\"testimonial-item border p-4\">
                    <div class=\" d-flex align-items-center\">
                        <div class=\"\">
                            <img src=\"{{ asset ('front/img/testimonial-4.jpg')}}\" alt=\"\">
                        </div>
                        <div class=\"ms-4\">
                            <h4 class=\"text-secondary\">Client Name</h4>
                            <p class=\"m-0 pb-3\">Profession</p>
                            <div class=\"d-flex pe-5\">
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                                <i class=\"fas fa-star me-1 text-primary\"></i>
                            </div>
                        </div>
                    </div>
                    <div class=\"border-top mt-4 pt-3\">
                        <p class=\"mb-0\">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class=\"container-fluid py-5 mb-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto pb-5 wow fadeIn\" data-wow-delay=\".3s\" style=\"max-width: 600px;\">
                <h5 class=\"text-primary\">Get In Touch</h5>
                <h1 class=\"mb-3\">Contact for any query</h1>
                <p class=\"mb-2\">blablablablalbalablbalabl Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
            </div>
            <div class=\"contact-detail position-relative p-5\">
                <div class=\"row g-5 mb-5 justify-content-center\">
                    <div class=\"col-xl-4 col-lg-6 wow fadeIn\" data-wow-delay=\".3s\">
                        <div class=\"d-flex bg-light p-3 rounded\">
                            <div class=\"flex-shrink-0 btn-square bg-secondary rounded-circle\" style=\"width: 64px; height: 64px;\">
                                <i class=\"fas fa-map-marker-alt text-white\"></i>
                            </div>
                            <div class=\"ms-3\">
                                <h4 class=\"text-primary\">Address</h4>
                                <a href=\"https://goo.gl/maps/Zd4BCynmTb98ivUJ6\" target=\"_blank\" class=\"h5\">ty cite ghazela petite arianna, esprit</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 wow fadeIn\" data-wow-delay=\".5s\">
                        <div class=\"d-flex bg-light p-3 rounded\">
                            <div class=\"flex-shrink-0 btn-square bg-secondary rounded-circle\" style=\"width: 64px; height: 64px;\">
                                <i class=\"fa fa-phone text-white\"></i>
                            </div>
                            <div class=\"ms-3\">
                                <h4 class=\"text-primary\">Call Us</h4>
                                <a class=\"h5\" href=\"tel:+0123456789\" target=\"_blank\">+216 25 301 941</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 wow fadeIn\" data-wow-delay=\".7s\">
                        <div class=\"d-flex bg-light p-3 rounded\">
                            <div class=\"flex-shrink-0 btn-square bg-secondary rounded-circle\" style=\"width: 64px; height: 64px;\">
                                <i class=\"fa fa-envelope text-white\"></i>
                            </div>
                            <div class=\"ms-3\">
                                <h4 class=\"text-primary\">Email Us</h4>
                                <a class=\"h5\" href=\"mailto:info@example.com\" target=\"_blank\">Lemsi.info@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row g-5\">
                    <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\".3s\">
                        <div class=\"p-5 h-100 rounded contact-map\">
                            <iframe class=\"rounded w-100 h-100\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                        </div>
                    </div>
                    <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\".5s\">
                        <div class=\"p-5 rounded contact-form\">
                            <div class=\"mb-4\">
                                <input type=\"text\" class=\"form-control border-0 py-3\" placeholder=\"Your Name\">
                            </div>
                            <div class=\"mb-4\">
                                <input type=\"email\" class=\"form-control border-0 py-3\" placeholder=\"Your Email\">
                            </div>
                            <div class=\"mb-4\">
                                <input type=\"text\" class=\"form-control border-0 py-3\" placeholder=\"Project\">
                            </div>
                            <div class=\"mb-4\">
                                <textarea class=\"w-100 form-control border-0 py-3\" rows=\"6\" cols=\"10\" placeholder=\"Message\"></textarea>
                            </div>
                            <div class=\"text-start\">
                                <button class=\"btn bg-primary text-white py-3 px-5\" type=\"button\">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->



    <!--login start-->
    <div id=\"loginModal\">
        <h2>Login</h2>
        <form>
            <input class=\"sp-input\" type=\"text\" placeholder=\"Username\" required>
            <input class=\"sp-input\" type=\"password\" placeholder=\"Password\" required>
            <button class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\" type=\"submit\">Login</button>
        </form>
        <p>Don't have an account? <a href=\"#\" onclick=\"switchModal()\">Register here</a></p>
    </div>
    <div id=\"overlaylx\" onclick=\"closeModal()\"></div>
    <!--login-end-->

    <!-- registery start-->
    <div id=\"registerModal\">
        <div class=\"form-v10\" >
            <div class=\"page-content\">
                <div class=\"form-v10-content\">
                    <form class=\"form-detail\" action=\"#\" method=\"post\" id=\"myform\">
                        <div class=\"form-left\">
                            <h2>General Infomation</h2>
                            <div class=\"form-row\">
                                <select name=\"title\">
                                    <option class=\"option\" value=\"title\">Title</option>
                                    <option class=\"option\" value=\"Employee\">Employee</option>
                                    <option class=\"option\" value=\"Chef_Chantier\">Chef Chantier</option>
                                    <option class=\"option\" value=\"Client\">Client</option>
                                </select>
                                <span class=\"select-btn\">
                                        <i class=\"zmdi zmdi-chevron-down\"></i>
                                </span>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"form-row form-row-1\">
                                    <input type=\"text\" name=\"first_name\" id=\"first_name\" class=\"input-text\" placeholder=\"First Name\" required>
                                </div>
                                <div class=\"form-row form-row-2\">
                                    <input type=\"text\" name=\"last_name\" id=\"last_name\" class=\"input-text\" placeholder=\"Last Name\" required>
                                </div>
                            </div>

                            <span class=\"select-btn\">
                                        <i class=\"zmdi zmdi-chevron-down\"></i>
                                </span>

                            <div class=\"form-row\">
                                <input type=\"text\" name=\"Age\" class=\"company\" id=\"company\" placeholder=\"Age\" required>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"form-row form-row-3\">
                                    <input type=\"text\" name=\"business\" class=\"business\" id=\"business\" placeholder=\"Business Arena\" required>
                                </div>
                                <div class=\"form-row form-row-4\">
                                    <select name=\"employees\">
                                        <option value=\"employees\">Employees</option>
                                        <option value=\"trainee\">Trainee</option>
                                        <option value=\"colleague\">Colleague</option>
                                        <option value=\"associate\">Associate</option>
                                    </select>
                                    <span class=\"select-btn\">
                                            <i class=\"zmdi zmdi-chevron-down\"></i>
                                    </span>
                                </div>
                            </div>
                            <p>Already have an account? <a href=\"#\" onclick=\"switchModal()\">Login here</a></p>
                        </div>
                        <div class=\"form-right\">
                            <h2>Contact Details</h2>
                            <div class=\"form-row\">
                                <input type=\"text\" name=\"street\" class=\"street\" id=\"street\" placeholder=\"Street + Nr\" required>
                            </div>
                            <div class=\"form-row\">
                                <input type=\"text\" name=\"additional\" class=\"additional\" id=\"additional\" placeholder=\"Additional Information\" required>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"form-row form-row-1\">
                                    <input type=\"text\" name=\"zip\" class=\"zip\" id=\"zip\" placeholder=\"Zip Code\" required>
                                </div>
                                <div class=\"form-row form-row-2\">
                                    <select name=\"place\">
                                        <option value=\"place\">Place</option>
                                        <option value=\"Street\">Street</option>
                                        <option value=\"District\">District</option>
                                        <option value=\"City\">City</option>
                                    </select>
                                    <span class=\"select-btn\">
                                            <i class=\"zmdi zmdi-chevron-down\"></i>
                                    </span>
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <select name=\"country\">
                                    <option value=\"Area\">Area</option>
                                    <option value=\"Arianna\">Arianna</option>
                                    <option value=\"Jandouba\">Jandouba</option>
                                    <option value=\"Djerba\">Djerba</option>
                                    <option value=\"Gabes\">Gabes</option>
                                    <option value=\"Bizerte\">Bizerte</option>
                                </select>
                                <span class=\"select-btn\">
                                        <i class=\"zmdi zmdi-chevron-down\"></i>
                                </span>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"form-row form-row-1\">
                                    <input type=\"text\" name=\"code\" class=\"code\" id=\"code\" placeholder=\"Code +\" required>
                                </div>
                                <div class=\"form-row form-row-2\">
                                    <input type=\"text\" name=\"phone\" class=\"phone\" id=\"phone\" placeholder=\"Phone Number\" required>
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <input type=\"text\" name=\"your_email\" id=\"your_email\" class=\"input-text\" required pattern=\"[^@]+@[^@]+.[a-zA-Z]{2,6}\" placeholder=\"Your Email\">
                            </div>
                            <div class=\"form-checkbox\">
                                <label class=\"container\"><p>I do accept the <a href=\"#\" class=\"text\">Terms and Conditions</a> of your site.</p>
                                    <input type=\"checkbox\" name=\"checkbox\">
                                    <span class=\"checkmark\"></span>
                                </label>
                            </div>
                            <div class=\"form-row-last\">
                                <input class=\"btn btn-secondary text-white px-5 py-3 rounded-pill\" type=\"submit\" name=\"register\" class=\"register\" value=\"Register\">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id=\"overlaylx\" onclick=\"closeModal()\"></div>
    <!--register end-->




{% endblock %}
", "front/index.html.twig", "C:\\Users\\Lemsi\\Desktop\\Work\\PIDEV\\PiDev\\PiDevG1\\WeBuild\\templates\\front\\index.html.twig");
    }
}

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

/* base.html.twig */
class __TwigTemplate_a1a8719410c4573e6b39da2728386f2d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "    </head>
    <body>
        ";
        // line 78
        $this->displayBlock('navbar', $context, $blocks);
        // line 184
        echo "        <!-- BODYYYY -->
        ";
        // line 185
        $this->displayBlock('body', $context, $blocks);
        // line 189
        echo "
        ";
        // line 190
        $this->displayBlock('footer', $context, $blocks);
        // line 252
        echo "

    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "WeBuild!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <!-- Google Web Fonts -->
            <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
            <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap\" rel=\"stylesheet\">

            <!-- Icon Font Stylesheet -->
            <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

            <!-- Libraries Stylesheet -->
            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


            <!-- Customized Bootstrap Stylesheet -->
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!--fontawsome-->
            <script src=\"https://kit.fontawesome.com/4786297a53.js\" crossorigin=\"anonymous\"></script>

            <!-- Template Stylesheet -->
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
           ";
        // line 32
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "            <script>
                function openLoginModal() {
                    document.getElementById('loginModal').style.display = 'block';
                    document.getElementById('overlaylx').style.display = 'block';
                }

                function openRegisterModal() {
                    document.getElementById('registerModal').style.display = 'block';
                    document.getElementById('overlaylx').style.display = 'block';
                }

                function closeModal() {
                    document.getElementById('loginModal').style.display = 'none';
                    document.getElementById('registerModal').style.display = 'none';
                    document.getElementById('overlaylx').style.display = 'none';
                }

                function switchModal() {
                    document.getElementById('loginModal').style.display = 'none';
                    document.getElementById('registerModal').style.display = 'none';
                    document.getElementById('overlaylx').style.display = 'none';

                    if (event.target === document.getElementById('loginModal')) {
                        openRegisterModal();
                    } else  {
                        openLoginModal();
                    }
                }
            </script>
            <!-- JavaScript Libraries -->
            <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Template Javascript -->
            <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/main.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 75
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 78
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 79
        echo "            <!-- Spinner Start -->
            <div id=\"spinner\" class=\"show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
                <div class=\"spinner-grow text-primary\" role=\"status\"></div>
            </div>
            <!-- Spinner End -->

            <!-- Topbar Start -->
            <div class=\"container-fluid bg-dark py-2 d-none d-md-flex\">
                <div class=\"container\">
                    <div class=\"d-flex justify-content-between topbar\">
                        <div class=\"top-info\">
                            <small class=\"me-3 text-white-50\"><a href=\"#\"><i class=\"fas fa-map-marker-alt me-2 text-secondary\"></i></a>ty cite ghazela petite arianna, esprit</small>
                            <small class=\"me-3 text-white-50\"><a href=\"#\"><i class=\"fas fa-envelope me-2 text-secondary\"></i></a>Email@Example.com</small>
                        </div>
                        <div id=\"note\" class=\"text-secondary d-none d-xl-flex\"><small>Note : We help you to Fix your Problem</small></div>
                        <div class=\"top-link\">
                            <a href=\"\" class=\"bg-light nav-fill btn btn-sm-square rounded-circle\"><i class=\"fab fa-facebook-f text-primary\"></i></a>
                            <a href=\"\" class=\"bg-light nav-fill btn btn-sm-square rounded-circle\"><i class=\"fab fa-twitter text-primary\"></i></a>
                            <a href=\"\" class=\"bg-light nav-fill btn btn-sm-square rounded-circle\"><i class=\"fab fa-instagram text-primary\"></i></a>
                            <a href=\"\" class=\"bg-light nav-fill btn btn-sm-square rounded-circle me-0\"><i class=\"fab fa-linkedin-in text-primary\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar End -->

            <!-- Navbar Start -->
            <div class=\"container-fluid bg-primary\">
                <div class=\"container\">
                    <nav class=\"navbar navbar-dark navbar-expand-lg py-0 \">
                        <a href=\"index.html\" class=\"navbar-brand\">
                            <h1 class=\"text-white fw-bold d-block\">We<span class=\"text-secondary\">Build</span></h1>
                        </a>
                        <button type=\"button\" class=\"navbar-toggler me-0\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse bg-transparent\" id=\"navbarCollapse\">
                            <div class=\"navbar-nav ms-auto mx-xl-auto p-0\">
                                <a href=\"index.html\" class=\"nav-item nav-link active text-secondary\">Home</a>
                                <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                                <a href=\"service.html\" class=\"nav-item nav-link\">Services</a>
                                <a href=\"project.html\" class=\"nav-item nav-link\">Projects</a>
                                <div class=\"nav-item dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Find job</a>
                                    <div class=\"dropdown-menu rounded\">
                                        <a href=\"blog.html\" class=\"dropdown-item\">Our Blog</a>
                                        <a href=\"team.html\" class=\"dropdown-item\">Our Team</a>
                                        <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                                        <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                                    </div>
                                </div>
                                <a href=\"contact.html\" class=\"nav-item nav-link\">Form</a>
                            </div>
                        </div>
                        <div class=\"d-none d-xl-flex flex-shirink-0\">
                            <div id=\"phone-tada\" class=\"d-flex align-items-center justify-content-center me-4\">
                                <a href=\"\" class=\"position-relative animated tada infinite\">
                                    <i class=\"fa fa-phone-alt text-white fa-2x\"></i>
                                    <div class=\"position-absolute\" style=\"top: -7px; left: 20px;\">
                                        <span><i class=\"fa fa-comment-dots text-secondary\"></i></span>
                                    </div>
                                </a>
                            </div>
                            <div class=\"d-flex flex-column pe-4 border-end\">
                                <span class=\"text-white-50\">Have any questions?</span>
                                <span class=\"text-secondary\">Call: + 216 25 301 941</span>
                            </div>
                            <div class=\"d-flex align-items-center justify-content-center ms-4 \">
                                <a href=\"#\"><i class=\"bi bi-search text-white fa-2x\"></i> </a>
                            </div>
                            <!--start profile ou fazet-->
                            <div class=\"d-flex align-items-center justify-content-center ms-4\">
                                <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 profile-menu\">
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <!-- <div class=\"profile-pic\">
                                                 <img src=\"img/admin-22.jpg\" alt=\"Profile Picture\">
                                             </div>-->

                                            <i class=\"fas fa-user\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-sliders-h fa-fw\"></i> Account</a></li>
                                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-cog fa-fw\"></i> Settings</a></li>
                                            <li><hr class=\"dropdown-divider\"></li>
                                            <li><a class=\"dropdown-item\"  onclick=\"openLoginModal()\"><i class=\"fas fa-sliders-h fa-fw\"></i> Login</a></li>
                                            <li><a class=\"dropdown-item\" href=\"#\" onclick=\"openRegisterModal()\"><i class=\"fas fa-cog fa-fw\"></i> Register</a></li>
                                            <li><hr class=\"dropdown-divider\"></li>
                                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-sign-out-alt fa-fw\"></i> Log Out</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div>

                            </div>
                            <!--end start profile -->
                        </div>

                    </nav>
                </div>
            </div>
            <!-- Navbar End -->

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 185
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 186
        echo "

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 190
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 191
        echo "            <!-- Footer Start -->
            <div class=\"container-fluid footer bg-dark wow fadeIn\" data-wow-delay=\".3s\">
                <div class=\"container pt-5 pb-4\">
                    <div class=\"row g-5\">
                        <div class=\"col-lg-3 col-md-6\">
                            <a href=\"index.html\">
                                <h1 class=\"text-white fw-bold d-block\">We<span class=\"text-secondary\">Build</span> </h1>
                            </a>
                            <p class=\"mt-4 text-light\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facere delectus qui placeat inventore consectetur repellendus optio debitis.</p>
                            <div class=\"d-flex hightech-link\">
                                <a href=\"\" class=\"btn-light nav-fill btn btn-square rounded-circle me-2\"><i class=\"fab fa-facebook-f text-primary\"></i></a>
                                <a href=\"\" class=\"btn-light nav-fill btn btn-square rounded-circle me-2\"><i class=\"fab fa-twitter text-primary\"></i></a>
                                <a href=\"\" class=\"btn-light nav-fill btn btn-square rounded-circle me-2\"><i class=\"fab fa-instagram text-primary\"></i></a>
                                <a href=\"\" class=\"btn-light nav-fill btn btn-square rounded-circle me-0\"><i class=\"fab fa-linkedin-in text-primary\"></i></a>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <a href=\"#\" class=\"h3 text-secondary\">Short Link</a>
                            <div class=\"mt-4 d-flex flex-column short-link\">
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>About us</a>
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>Contact us</a>
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>Our Services</a>
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>Our Projects</a>
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>Latest Blog</a>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <a href=\"#\" class=\"h3 text-secondary\">Help Link</a>
                            <div class=\"mt-4 d-flex flex-column help-link\">
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>Terms Of use</a>
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>Privacy Policy</a>
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>Helps</a>
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>FQAs</a>
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>Contact</a>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <a href=\"#\" class=\"h3 text-secondary\">Contact Us</a>
                            <div class=\"text-white mt-4 d-flex flex-column contact-link\">
                                <a href=\"#\" class=\"pb-3 text-light border-bottom border-primary\"><i class=\"fas fa-map-marker-alt text-secondary me-2\"></i> ty cite ghazela petite arianna, esprit</a>
                                <a href=\"#\" class=\"py-3 text-light border-bottom border-primary\"><i class=\"fas fa-phone-alt text-secondary me-2\"></i> +216 25 301 941</a>
                                <a href=\"#\" class=\"py-3 text-light border-bottom border-primary\"><i class=\"fas fa-envelope text-secondary me-2\"></i> Lemsi@exmple.com</a>
                            </div>
                        </div>
                    </div>
                    <hr class=\"text-light mt-5 mb-4\">
                    <div class=\"row\">
                        <div class=\"col-md-6 text-center text-md-start\">
                            <span class=\"text-light\"><a href=\"#\" class=\"text-secondary\"><i class=\"fas fa-copyright text-secondary me-2\"></i>WeBuild</a>, All right reserved.</span>
                        </div>
                        <div class=\"col-md-6 text-center text-md-end\">

                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            <!-- Back to Top -->
            <a href=\"#\" class=\"btn btn-secondary btn-square rounded-circle back-to-top\"><i class=\"fa fa-arrow-up text-white\"></i></a>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  411 => 191,  401 => 190,  389 => 186,  379 => 185,  265 => 79,  255 => 78,  245 => 75,  241 => 73,  235 => 70,  231 => 69,  227 => 68,  223 => 67,  219 => 66,  215 => 65,  183 => 35,  173 => 34,  163 => 32,  159 => 30,  150 => 24,  143 => 20,  139 => 19,  127 => 9,  117 => 8,  98 => 5,  84 => 252,  82 => 190,  79 => 189,  77 => 185,  74 => 184,  72 => 78,  68 => 76,  66 => 34,  63 => 33,  60 => 8,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}WeBuild!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            <!-- Google Web Fonts -->
            <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
            <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap\" rel=\"stylesheet\">

            <!-- Icon Font Stylesheet -->
            <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

            <!-- Libraries Stylesheet -->
            <link href=\"{{ asset('front/lib/animate/animate.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('front/lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">


            <!-- Customized Bootstrap Stylesheet -->
            <link href=\"{{ asset('front/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

            <!--fontawsome-->
            <script src=\"https://kit.fontawesome.com/4786297a53.js\" crossorigin=\"anonymous\"></script>

            <!-- Template Stylesheet -->
            <link href=\"{{ asset('front/css/style.css') }}\" rel=\"stylesheet\">
           {#  {{ encore_entry_link_tags('app') }}  #}
        {% endblock %}

        {% block javascripts %}
            <script>
                function openLoginModal() {
                    document.getElementById('loginModal').style.display = 'block';
                    document.getElementById('overlaylx').style.display = 'block';
                }

                function openRegisterModal() {
                    document.getElementById('registerModal').style.display = 'block';
                    document.getElementById('overlaylx').style.display = 'block';
                }

                function closeModal() {
                    document.getElementById('loginModal').style.display = 'none';
                    document.getElementById('registerModal').style.display = 'none';
                    document.getElementById('overlaylx').style.display = 'none';
                }

                function switchModal() {
                    document.getElementById('loginModal').style.display = 'none';
                    document.getElementById('registerModal').style.display = 'none';
                    document.getElementById('overlaylx').style.display = 'none';

                    if (event.target === document.getElementById('loginModal')) {
                        openRegisterModal();
                    } else  {
                        openLoginModal();
                    }
                }
            </script>
            <!-- JavaScript Libraries -->
            <script src=\"{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js')}}\"></script>
            <script src=\"{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}\"></script>
            <script src=\"{{ asset('front/lib/wow/wow.min.js') }}\"></script>
            <script src=\"{{ asset('front/lib/easing/easing.min.js') }}\"></script>
            <script src=\"{{ asset('front/lib/waypoints/waypoints.min.js') }}\"></script>
            <script src=\"{{ asset('front/lib/owlcarousel/owl.carousel.min.js') }}\"></script>

            <!-- Template Javascript -->
            <script src=\"{{ asset('front/js/main.js') }}\"></script>
            {#  {{ encore_entry_script_tags('app') }}#}
        {% endblock %}
    </head>
    <body>
        {% block navbar %}
            <!-- Spinner Start -->
            <div id=\"spinner\" class=\"show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
                <div class=\"spinner-grow text-primary\" role=\"status\"></div>
            </div>
            <!-- Spinner End -->

            <!-- Topbar Start -->
            <div class=\"container-fluid bg-dark py-2 d-none d-md-flex\">
                <div class=\"container\">
                    <div class=\"d-flex justify-content-between topbar\">
                        <div class=\"top-info\">
                            <small class=\"me-3 text-white-50\"><a href=\"#\"><i class=\"fas fa-map-marker-alt me-2 text-secondary\"></i></a>ty cite ghazela petite arianna, esprit</small>
                            <small class=\"me-3 text-white-50\"><a href=\"#\"><i class=\"fas fa-envelope me-2 text-secondary\"></i></a>Email@Example.com</small>
                        </div>
                        <div id=\"note\" class=\"text-secondary d-none d-xl-flex\"><small>Note : We help you to Fix your Problem</small></div>
                        <div class=\"top-link\">
                            <a href=\"\" class=\"bg-light nav-fill btn btn-sm-square rounded-circle\"><i class=\"fab fa-facebook-f text-primary\"></i></a>
                            <a href=\"\" class=\"bg-light nav-fill btn btn-sm-square rounded-circle\"><i class=\"fab fa-twitter text-primary\"></i></a>
                            <a href=\"\" class=\"bg-light nav-fill btn btn-sm-square rounded-circle\"><i class=\"fab fa-instagram text-primary\"></i></a>
                            <a href=\"\" class=\"bg-light nav-fill btn btn-sm-square rounded-circle me-0\"><i class=\"fab fa-linkedin-in text-primary\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar End -->

            <!-- Navbar Start -->
            <div class=\"container-fluid bg-primary\">
                <div class=\"container\">
                    <nav class=\"navbar navbar-dark navbar-expand-lg py-0 \">
                        <a href=\"index.html\" class=\"navbar-brand\">
                            <h1 class=\"text-white fw-bold d-block\">We<span class=\"text-secondary\">Build</span></h1>
                        </a>
                        <button type=\"button\" class=\"navbar-toggler me-0\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse bg-transparent\" id=\"navbarCollapse\">
                            <div class=\"navbar-nav ms-auto mx-xl-auto p-0\">
                                <a href=\"index.html\" class=\"nav-item nav-link active text-secondary\">Home</a>
                                <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                                <a href=\"service.html\" class=\"nav-item nav-link\">Services</a>
                                <a href=\"project.html\" class=\"nav-item nav-link\">Projects</a>
                                <div class=\"nav-item dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Find job</a>
                                    <div class=\"dropdown-menu rounded\">
                                        <a href=\"blog.html\" class=\"dropdown-item\">Our Blog</a>
                                        <a href=\"team.html\" class=\"dropdown-item\">Our Team</a>
                                        <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                                        <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                                    </div>
                                </div>
                                <a href=\"contact.html\" class=\"nav-item nav-link\">Form</a>
                            </div>
                        </div>
                        <div class=\"d-none d-xl-flex flex-shirink-0\">
                            <div id=\"phone-tada\" class=\"d-flex align-items-center justify-content-center me-4\">
                                <a href=\"\" class=\"position-relative animated tada infinite\">
                                    <i class=\"fa fa-phone-alt text-white fa-2x\"></i>
                                    <div class=\"position-absolute\" style=\"top: -7px; left: 20px;\">
                                        <span><i class=\"fa fa-comment-dots text-secondary\"></i></span>
                                    </div>
                                </a>
                            </div>
                            <div class=\"d-flex flex-column pe-4 border-end\">
                                <span class=\"text-white-50\">Have any questions?</span>
                                <span class=\"text-secondary\">Call: + 216 25 301 941</span>
                            </div>
                            <div class=\"d-flex align-items-center justify-content-center ms-4 \">
                                <a href=\"#\"><i class=\"bi bi-search text-white fa-2x\"></i> </a>
                            </div>
                            <!--start profile ou fazet-->
                            <div class=\"d-flex align-items-center justify-content-center ms-4\">
                                <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 profile-menu\">
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <!-- <div class=\"profile-pic\">
                                                 <img src=\"img/admin-22.jpg\" alt=\"Profile Picture\">
                                             </div>-->

                                            <i class=\"fas fa-user\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-sliders-h fa-fw\"></i> Account</a></li>
                                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-cog fa-fw\"></i> Settings</a></li>
                                            <li><hr class=\"dropdown-divider\"></li>
                                            <li><a class=\"dropdown-item\"  onclick=\"openLoginModal()\"><i class=\"fas fa-sliders-h fa-fw\"></i> Login</a></li>
                                            <li><a class=\"dropdown-item\" href=\"#\" onclick=\"openRegisterModal()\"><i class=\"fas fa-cog fa-fw\"></i> Register</a></li>
                                            <li><hr class=\"dropdown-divider\"></li>
                                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-sign-out-alt fa-fw\"></i> Log Out</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div>

                            </div>
                            <!--end start profile -->
                        </div>

                    </nav>
                </div>
            </div>
            <!-- Navbar End -->

        {% endblock %}
        <!-- BODYYYY -->
        {% block body %}


        {% endblock %}

        {% block footer %}
            <!-- Footer Start -->
            <div class=\"container-fluid footer bg-dark wow fadeIn\" data-wow-delay=\".3s\">
                <div class=\"container pt-5 pb-4\">
                    <div class=\"row g-5\">
                        <div class=\"col-lg-3 col-md-6\">
                            <a href=\"index.html\">
                                <h1 class=\"text-white fw-bold d-block\">We<span class=\"text-secondary\">Build</span> </h1>
                            </a>
                            <p class=\"mt-4 text-light\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facere delectus qui placeat inventore consectetur repellendus optio debitis.</p>
                            <div class=\"d-flex hightech-link\">
                                <a href=\"\" class=\"btn-light nav-fill btn btn-square rounded-circle me-2\"><i class=\"fab fa-facebook-f text-primary\"></i></a>
                                <a href=\"\" class=\"btn-light nav-fill btn btn-square rounded-circle me-2\"><i class=\"fab fa-twitter text-primary\"></i></a>
                                <a href=\"\" class=\"btn-light nav-fill btn btn-square rounded-circle me-2\"><i class=\"fab fa-instagram text-primary\"></i></a>
                                <a href=\"\" class=\"btn-light nav-fill btn btn-square rounded-circle me-0\"><i class=\"fab fa-linkedin-in text-primary\"></i></a>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <a href=\"#\" class=\"h3 text-secondary\">Short Link</a>
                            <div class=\"mt-4 d-flex flex-column short-link\">
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>About us</a>
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>Contact us</a>
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>Our Services</a>
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>Our Projects</a>
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>Latest Blog</a>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <a href=\"#\" class=\"h3 text-secondary\">Help Link</a>
                            <div class=\"mt-4 d-flex flex-column help-link\">
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>Terms Of use</a>
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>Privacy Policy</a>
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>Helps</a>
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>FQAs</a>
                                <a href=\"\" class=\"mb-2 text-white\"><i class=\"fas fa-angle-right text-secondary me-2\"></i>Contact</a>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <a href=\"#\" class=\"h3 text-secondary\">Contact Us</a>
                            <div class=\"text-white mt-4 d-flex flex-column contact-link\">
                                <a href=\"#\" class=\"pb-3 text-light border-bottom border-primary\"><i class=\"fas fa-map-marker-alt text-secondary me-2\"></i> ty cite ghazela petite arianna, esprit</a>
                                <a href=\"#\" class=\"py-3 text-light border-bottom border-primary\"><i class=\"fas fa-phone-alt text-secondary me-2\"></i> +216 25 301 941</a>
                                <a href=\"#\" class=\"py-3 text-light border-bottom border-primary\"><i class=\"fas fa-envelope text-secondary me-2\"></i> Lemsi@exmple.com</a>
                            </div>
                        </div>
                    </div>
                    <hr class=\"text-light mt-5 mb-4\">
                    <div class=\"row\">
                        <div class=\"col-md-6 text-center text-md-start\">
                            <span class=\"text-light\"><a href=\"#\" class=\"text-secondary\"><i class=\"fas fa-copyright text-secondary me-2\"></i>WeBuild</a>, All right reserved.</span>
                        </div>
                        <div class=\"col-md-6 text-center text-md-end\">

                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            <!-- Back to Top -->
            <a href=\"#\" class=\"btn btn-secondary btn-square rounded-circle back-to-top\"><i class=\"fa fa-arrow-up text-white\"></i></a>

        {% endblock %}


    </body>
</html>
", "base.html.twig", "C:\\Users\\Lemsi\\Desktop\\Work\\PIDEV\\PiDev\\PiDevG1\\WeBuild\\templates\\base.html.twig");
    }
}

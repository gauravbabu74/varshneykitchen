<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/restaurant_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_976dda69c9a0de9bcab23cb2c9e7f7fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        yield "

<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->

        <div class=\"navbar-header col-md-4\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 76
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 76)) {
            // line 77
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            yield "
          ";
        }
        // line 79
        yield "        </div>

        <!-- End: Header -->

        ";
        // line 83
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 83)) {
            // line 84
            yield "          <div class=\"col-md-4\">
            ";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            yield "
          </div>
        ";
        }
        // line 88
        yield "      
        ";
        // line 89
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contact_email", [], "any", false, false, true, 89)) {
            // line 90
            yield "          <div class=\"col-md-4\">
            ";
            // line 91
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contact_email", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            yield "
          </div>
        ";
        }
        // line 94
        yield "
        </div>
      </div>
    </nav>
</header>


<!-- End: Main menu -->

";
        // line 103
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 103)) {
            // line 104
            yield "  <div class=\"main-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 108
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            yield "

          <!-- Start: Social media icons -->

          ";
            // line 112
            if (($context["show_social_icon"] ?? null)) {
                // line 113
                yield "            <div class=\"social-media\">
              ";
                // line 114
                if (($context["facebook_url"] ?? null)) {
                    // line 115
                    yield "                <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 115, $this->source), "html", null, true);
                    yield "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
              ";
                }
                // line 117
                yield "              ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 118
                    yield "                <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 118, $this->source), "html", null, true);
                    yield "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
              ";
                }
                // line 120
                yield "              ";
                if (($context["twitter_url"] ?? null)) {
                    // line 121
                    yield "                <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 121, $this->source), "html", null, true);
                    yield "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
              ";
                }
                // line 123
                yield "              ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 124
                    yield "                <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 124, $this->source), "html", null, true);
                    yield "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
              ";
                }
                // line 126
                yield "              ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 127
                    yield "                <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 127, $this->source), "html", null, true);
                    yield "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
              ";
                }
                // line 129
                yield "              ";
                if (($context["rss_url"] ?? null)) {
                    // line 130
                    yield "                <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 130, $this->source), "html", null, true);
                    yield "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              ";
                }
                // line 132
                yield "            </div>
          ";
            }
            // line 134
            yield "
          <!-- End: Social media icons -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 142
        yield "
<!-- End: Main menu -->


<!-- Start: Slider -->

  ";
        // line 148
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 149
            yield "    <div class=\"flexslider wow- bounceInUp\">
      <ul class=\"slides\">
        ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 152
                yield "          ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 152, $this->source));
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            yield "      </ul>
    </div>
  ";
        }
        // line 157
        yield "
<!-- End: Slider -->


<!-- Start: Home page message -->

";
        // line 163
        if ((($context["is_front"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepagemessage", [], "any", false, false, true, 163))) {
            // line 164
            yield "<div class=\"home-message\">
  <div class=\"container\">
    <div class=\"wow- bounceInDown\">    
        ";
            // line 167
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepagemessage", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
            yield "
    </div>
  </div>
</div>
";
        }
        // line 172
        yield "
<!--End: Home page message -->

<!-- Start: Top widget -->

";
        // line 177
        if ((($context["is_front"] ?? null) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 177) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 177)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 177)))) {
            // line 178
            yield "  <div class=\"container-\">
    <div class=\"parallax-region wow- bounceInDown\">

      ";
            // line 181
            if ((($context["is_front"] ?? null) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 181) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 181)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 181)))) {
                // line 182
                yield "        <div class=\"row- clearfix topwidget\">

          <!-- Start: Top widget first -->          
          ";
                // line 185
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 185)) {
                    // line 186
                    yield "            <div class = ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 186, $this->source), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
                    yield "</div>
          ";
                }
                // line 187
                yield "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
                // line 191
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 191)) {
                    // line 192
                    yield "            <div class = ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 192, $this->source), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
                    yield "</div>
          ";
                }
                // line 193
                yield "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
                // line 197
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 197)) {
                    // line 198
                    yield "            <div class = ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 198, $this->source), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
                    yield "</div>
          ";
                }
                // line 199
                yield "          
          <!-- End: Top widget third -->

          <!-- Start: Top widget forth -->         
          ";
                // line 203
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_forth", [], "any", false, false, true, 203)) {
                    // line 204
                    yield "            <div class = ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 204, $this->source), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_forth", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
                    yield "</div>
          ";
                }
                // line 205
                yield "          
          <!-- End: Top widget forth -->

        </div>
      ";
            }
            // line 210
            yield "
    </div>
  </div>
";
        }
        // line 214
        yield "
<!--End: Top widget -->


<!-- Start: Main content -->
<div class=\"parallax-widget- one\">
  <div class=\"parallax-region- wow- bounceInDown\">
    
    <!--Start: Highlighted -->

    ";
        // line 224
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 224)) {
            // line 225
            yield "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 228
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
            yield "
          </div>
        </div>
      </div>
    ";
        }
        // line 233
        yield "
    <!--End: Highlighted -->

    <!--Start: Title -->

    ";
        // line 238
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 238) &&  !($context["is_front"] ?? null))) {
            // line 239
            yield "      <div id=\"page-title\">
        <div id=\"page-title-inner\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
            // line 244
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 251
        yield "
    <!--End: Title -->

    <div class=\"container\">
      <div class=\"parallax-region\">

        <!--Start: Breadcrumb -->

        ";
        // line 259
        if ( !($context["is_front"] ?? null)) {
            // line 260
            yield "          <div class=\"row\">
            <div class=\"col-md-12\">";
            // line 261
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 261), 261, $this->source), "html", null, true);
            yield "</div>
          </div>
        ";
        }
        // line 264
        yield "
        <!--End: Breadcrumb -->

        <div class=\"row layout\">

          <!--Start: Sidebar -->

          ";
        // line 271
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 271)) {
            // line 272
            yield "            <div class=\"sidebar\">
              <div class=";
            // line 273
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 273, $this->source), "html", null, true);
            yield "> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 273), 273, $this->source), "html", null, true);
            yield " </div>
            </div>
          ";
        }
        // line 276
        yield "
          <!--End: Sidebar -->

          <!--End: Content -->

          ";
        // line 281
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 281)) {
            // line 282
            yield "
            <div class=\"content_layout\">

              <div class=";
            // line 285
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 285, $this->source), "html", null, true);
            yield "> 

                ";
            // line 287
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 287), 287, $this->source), "html", null, true);
            yield " 

              </div>

            </div>

          ";
        }
        // line 294
        yield "
          <!--End: Content -->

          <!--Start: Sidebar -->

          ";
        // line 299
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 299)) {
            // line 300
            yield "
            <div class=\"sidebar\">
              <div class=";
            // line 302
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 302, $this->source), "html", null, true);
            yield "> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 302), 302, $this->source), "html", null, true);
            yield " </div>
            </div>
            
          ";
        }
        // line 306
        yield "
          <!--End: Sidebar -->

        </div>
      </div>
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Services -->

";
        // line 320
        if ((($context["is_front"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 320))) {
            // line 321
            yield "
  <div class=\"parallax-widget- two\" id=\"services\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 327
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 327), 327, $this->source), "html", null, true);
            yield "
          </div>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 334
        yield "
<!--End: Services -->


<!-- Start: Bottom widgets -->

";
        // line 340
        if ((($context["is_front"] ?? null) && (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 340) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 340)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 340)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 340)))) {
            // line 341
            yield "  <div class=\"bottom-widget\" id=\"products\">    
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">

          <!-- Start: Bottom First -->          
          ";
            // line 347
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 347)) {
                // line 348
                yield "            <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 348, $this->source), "html", null, true);
                yield ">
              ";
                // line 349
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 349), 349, $this->source), "html", null, true);
                yield "
            </div>
          ";
            }
            // line 351
            yield "          
          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          ";
            // line 355
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 355)) {
                // line 356
                yield "            <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 356, $this->source), "html", null, true);
                yield ">
              ";
                // line 357
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 357), 357, $this->source), "html", null, true);
                yield "
            </div>
          ";
            }
            // line 359
            yield "          
          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->          
          ";
            // line 363
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 363)) {
                // line 364
                yield "            <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 364, $this->source), "html", null, true);
                yield ">
              ";
                // line 365
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 365), 365, $this->source), "html", null, true);
                yield "
            </div>
          ";
            }
            // line 367
            yield "          
          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          ";
            // line 371
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 371)) {
                // line 372
                yield "            <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 372, $this->source), "html", null, true);
                yield ">
              ";
                // line 373
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 373), 373, $this->source), "html", null, true);
                yield "
            </div>
          ";
            }
            // line 376
            yield "          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 383
        yield "
<!--End: Bottom widgets -->


<!-- Start: Footer widgets -->

";
        // line 389
        if ((($context["is_front"] ?? null) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 389) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 389)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 389)))) {
            // line 390
            yield "  <div class=\"footerwidget\" id=\"\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 396
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 396)) {
                // line 397
                yield "            <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_class"] ?? null), 397, $this->source), "html", null, true);
                yield ">
              ";
                // line 398
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 398), 398, $this->source), "html", null, true);
                yield "
            </div>
          ";
            }
            // line 401
            yield "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 404
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 404)) {
                // line 405
                yield "            <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 405, $this->source), "html", null, true);
                yield ">
              ";
                // line 406
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 406), 406, $this->source), "html", null, true);
                yield "
            </div>
          ";
            }
            // line 409
            yield "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 412
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 412)) {
                // line 413
                yield "            <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 413, $this->source), "html", null, true);
                yield ">
              ";
                // line 414
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 414), 414, $this->source), "html", null, true);
                yield "
            </div>
          ";
            }
            // line 417
            yield "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>

    ";
            // line 423
            if ((($context["is_front"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 423))) {
                // line 424
                yield "      <div class=\"container clients-wrap\">
        <div class=\"parallax-region wow- bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
                // line 428
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 428), 428, $this->source), "html", null, true);
                yield "
            </div>
          </div>
        </div>
      </div>
    ";
            }
            // line 434
            yield "
  </div>
";
        }
        // line 437
        yield "
<!--End: Footer widgets -->


<!-- Start: Map -->

";
        // line 443
        if ((($context["is_front"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 443))) {
            // line 444
            yield "  <div class=\"map-and-address\">
    <div class=\"google_map\">";
            // line 445
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 445), 445, $this->source), "html", null, true);
            yield "</div>
  </div>
";
        }
        // line 448
        yield "
<!--End: Map -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-8\">
        <div class=\"user-menu\">
          <p>Copyright © ";
        // line 460
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield ". All rights reserved.</p>
          ";
        // line 461
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_menu", [], "any", false, false, true, 461)) {
            // line 462
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_menu", [], "any", false, false, true, 462), 462, $this->source), "html", null, true);
            yield "
          ";
        }
        // line 464
        yield "        </div>        
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      ";
        // line 469
        if (($context["show_credit_link"] ?? null)) {
            // line 470
            yield "        <div class=\"col-sm-4\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 474
        yield "      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "show_social_icon", "facebook_url", "google_plus_url", "twitter_url", "linkedin_url", "pinterest_url", "rss_url", "is_front", "show_slideshow", "slider_content", "topwidget_class", "sidebarfirst", "contentlayout", "sidebarsecond", "bottom_class", "footer_first_class", "footer_class", "show_credit_link"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/restaurant_zymphonies_theme/templates/layout/page.html.twig";
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
        return array (  779 => 474,  773 => 470,  771 => 469,  764 => 464,  758 => 462,  756 => 461,  752 => 460,  738 => 448,  732 => 445,  729 => 444,  727 => 443,  719 => 437,  714 => 434,  705 => 428,  699 => 424,  697 => 423,  689 => 417,  683 => 414,  678 => 413,  676 => 412,  671 => 409,  665 => 406,  660 => 405,  658 => 404,  653 => 401,  647 => 398,  642 => 397,  640 => 396,  632 => 390,  630 => 389,  622 => 383,  613 => 376,  607 => 373,  602 => 372,  600 => 371,  594 => 367,  588 => 365,  583 => 364,  581 => 363,  575 => 359,  569 => 357,  564 => 356,  562 => 355,  556 => 351,  550 => 349,  545 => 348,  543 => 347,  535 => 341,  533 => 340,  525 => 334,  515 => 327,  507 => 321,  505 => 320,  489 => 306,  480 => 302,  476 => 300,  474 => 299,  467 => 294,  457 => 287,  452 => 285,  447 => 282,  445 => 281,  438 => 276,  430 => 273,  427 => 272,  425 => 271,  416 => 264,  410 => 261,  407 => 260,  405 => 259,  395 => 251,  385 => 244,  378 => 239,  376 => 238,  369 => 233,  361 => 228,  356 => 225,  354 => 224,  342 => 214,  336 => 210,  329 => 205,  321 => 204,  319 => 203,  313 => 199,  305 => 198,  303 => 197,  297 => 193,  289 => 192,  287 => 191,  281 => 187,  273 => 186,  271 => 185,  266 => 182,  264 => 181,  259 => 178,  257 => 177,  250 => 172,  242 => 167,  237 => 164,  235 => 163,  227 => 157,  222 => 154,  213 => 152,  209 => 151,  205 => 149,  203 => 148,  195 => 142,  185 => 134,  181 => 132,  175 => 130,  172 => 129,  166 => 127,  163 => 126,  157 => 124,  154 => 123,  148 => 121,  145 => 120,  139 => 118,  136 => 117,  130 => 115,  128 => 114,  125 => 113,  123 => 112,  116 => 108,  110 => 104,  108 => 103,  97 => 94,  91 => 91,  88 => 90,  86 => 89,  83 => 88,  77 => 85,  74 => 84,  72 => 83,  66 => 79,  60 => 77,  58 => 76,  40 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/restaurant_zymphonies_theme/templates/layout/page.html.twig", "D:\\wamp\\www\\varshneykitcken\\themes\\restaurant_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 76, "for" => 151);
        static $filters = array("escape" => 77, "raw" => 152, "date" => 460);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

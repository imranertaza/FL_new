<?php

/* listing.twig */
class __TwigTemplate_3ca6580c3c8c3790c5575363aa46c81a5d02cbf6a40683c0b0de8439bd903b96 extends Twig_Template
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
        // line 10
        if ((isset($context["url_thumbgallery"]) ? $context["url_thumbgallery"] : null)) {
            echo " ";
            $context["thumbgallery"] = (isset($context["url_thumbgallery"]) ? $context["url_thumbgallery"] : null);
        } else {
            // line 11
            echo " ";
            $context["thumbgallery"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "card_gallery"), "method");
        }
        // line 12
        echo "
";
        // line 13
        if ((isset($context["url_cartinfo"]) ? $context["url_cartinfo"] : null)) {
            echo " ";
            $context["cartinfo"] = (isset($context["url_cartinfo"]) ? $context["url_cartinfo"] : null);
        } else {
            // line 14
            echo " ";
            $context["cartinfo"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_position"), "method");
        }
        // line 15
        echo "

";
        // line 18
        echo "<div class=\"product-filter product-filter-top filters-panel\">
  <div class=\"row\">
\t\t<div class=\"col-sm-5 view-mode\">
\t\t\t";
        // line 21
        $context["category_route"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_route", array(), "method");
        // line 22
        echo "\t\t\t
\t\t\t";
        // line 23
        if ((((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null)) && ((isset($context["category_route"]) ? $context["category_route"] : null) == "product/category"))) {
            // line 24
            echo "\t\t\t\t";
            if ((isset($context["url_asideType"]) ? $context["url_asideType"] : null)) {
                echo " ";
                $context["btn_canvas"] = (isset($context["url_asideType"]) ? $context["url_asideType"] : null);
                // line 25
                echo "\t\t\t\t";
            } else {
                $context["btn_canvas"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "catalog_col_type"), "method");
                // line 26
                echo "\t\t\t\t";
            }
            // line 27
            echo "
\t\t\t\t";
            // line 28
            $context["class_btn_canvas"] = ((((isset($context["btn_canvas"]) ? $context["btn_canvas"] : null) == "off_canvas")) ? ("") : ("hidden-lg hidden-md"));
            // line 29
            echo "\t\t\t\t<a href=\"javascript:void(0)\" class=\"open-sidebar ";
            echo twig_escape_filter($this->env, (isset($context["class_btn_canvas"]) ? $context["class_btn_canvas"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-bars\"></i>";
            echo twig_escape_filter($this->env, (isset($context["text_sidebar"]) ? $context["text_sidebar"] : null), "html", null, true);
            echo "</a>
\t\t\t\t<div class=\"sidebar-overlay \"></div>
\t\t\t";
        }
        // line 32
        echo "\t\t\t<div class=\"list-view\">
\t\t\t\t<div class=\"btn btn-gridview\">";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["text_gridview"]) ? $context["text_gridview"] : null), "html", null, true);
        echo "</div>
\t\t\t\t<button type=\"button\" id=\"grid-view-2\" class=\"btn btn-view hidden-sm hidden-xs\">2</button>
\t\t\t  \t<button type=\"button\" id=\"grid-view-3\" class=\"btn btn-view hidden-sm hidden-xs \">3</button>
\t\t\t  \t<button type=\"button\" id=\"grid-view-4\" class=\"btn btn-view hidden-sm hidden-xs\">4</button>
\t\t\t  \t<button type=\"button\" id=\"grid-view-5\" class=\"btn btn-view hidden-sm hidden-xs\">5</button>
\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid hidden-lg hidden-md\" title=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["button_grid"]) ? $context["button_grid"] : null), "html", null, true);
        echo "\"><i class=\"fa fa-th-large\"></i></button>
\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default list \" title=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["button_list"]) ? $context["button_list"] : null), "html", null, true);
        echo "\"><i class=\"fa fa-bars\"></i></button>
\t\t\t\t<button type=\"button\" id=\"table-view\" class=\"btn btn-view\"><i class=\"fa fa-table\" aria-hidden=\"true\"></i></button>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t
\t\t<div class=\"short-by-show form-inline text-right col-md-7 col-sm-6 col-xs-12\">
\t\t\t<div class=\"form-group short-by\">
\t\t\t\t<label class=\"control-label\" for=\"input-sort\">";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["text_sort"]) ? $context["text_sort"] : null), "html", null, true);
        echo "</label>
\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 51
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                // line 52
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sorts"], "href", array()), "html", null, true);
                echo "\" selected=\"selected\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sorts"], "text", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t
\t\t\t\t\t<option value=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["sorts"], "href", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sorts"], "text", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"control-label\" for=\"input-limit\">";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["text_limit"]) ? $context["text_limit"] : null), "html", null, true);
        echo "</label>
\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 66
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                // line 67
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["limits"], "href", array()), "html", null, true);
                echo "\" selected=\"selected\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["limits"], "text", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 69
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["limits"], "href", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["limits"], "text", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"form-group product-compare hidden-sm hidden-xs\"><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["compare"]) ? $context["compare"] : null), "html", null, true);
        echo "\" id=\"compare-total\" class=\"btn btn-default\">";
        echo twig_escape_filter($this->env, (isset($context["text_compare"]) ? $context["text_compare"] : null), "html", null, true);
        echo "</a></div>
\t\t</div>
\t
  </div>
</div>
";
        // line 80
        echo "
<div class=\"products-list row nopadding-xs\">
\t";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 83
            echo "\t
\t\t<div class=\"product-layout \">
\t\t\t<div class=\"product-item-container\">
\t\t\t\t";
            // line 87
            echo "\t\t\t\t";
            if (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "right")) {
                // line 88
                echo "\t\t\t\t\t";
                $context["class_cart_info"] = "cartinfo--right";
                // line 89
                echo "\t\t\t\t";
            } elseif (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "bottom")) {
                // line 90
                echo "\t\t\t\t\t";
                $context["class_cart_info"] = "cartinfo--static";
                // line 91
                echo "\t\t\t\t\t";
                $context["leftb"] = "left-b";
                // line 92
                echo "\t\t\t\t\t";
                $context["rightb"] = "right-b";
                // line 93
                echo "\t\t\t\t";
            } elseif (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "center")) {
                // line 94
                echo "\t\t\t\t\t";
                $context["class_cart_info"] = "cartinfo--center";
                // line 95
                echo "\t\t\t\t";
            } else {
                // line 96
                echo "\t\t\t\t\t";
                $context["class_cart_info"] = "cartinfo--left";
                // line 97
                echo "\t\t\t\t";
            }
            // line 98
            echo "\t\t\t\t<div class=\"left-block ";
            echo twig_escape_filter($this->env, (isset($context["leftb"]) ? $context["leftb"] : null), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 99
            if (((isset($context["thumbgallery"]) ? $context["thumbgallery"] : null) && $this->getAttribute($context["product"], "image_galleries", array()))) {
                // line 100
                echo "
\t\t\t\t\t";
                // line 101
                if (((isset($context["thumbgallery"]) ? $context["thumbgallery"] : null) == 1)) {
                    // line 102
                    echo "\t\t\t\t\t\t";
                    $context["class_thumbgallery"] = "product-card__left";
                    // line 103
                    echo "\t\t\t\t\t";
                } elseif (((isset($context["thumbgallery"]) ? $context["thumbgallery"] : null) == 2)) {
                    // line 104
                    echo "\t\t\t\t\t\t";
                    $context["class_thumbgallery"] = "product-card__right";
                    // line 105
                    echo "\t\t\t\t\t";
                } else {
                    // line 106
                    echo "\t\t\t\t\t\t";
                    $context["class_thumbgallery"] = "product-card__bottom";
                    // line 107
                    echo "\t\t\t\t\t";
                }
                // line 108
                echo "\t\t\t\t\t<div class=\"product-card__gallery ";
                echo twig_escape_filter($this->env, (isset($context["class_thumbgallery"]) ? $context["class_thumbgallery"] : null), "html", null, true);
                echo "\">
\t\t\t\t\t\t    <div class=\"item-img thumb-active\" data-src=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "first_gallery", array()), "thumb", array(), "array"), "html", null, true);
                echo "\"><img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "first_gallery", array()), "cart", array(), "array"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "\"></div>
\t\t\t\t\t\t\t";
                // line 110
                $context["total_gallery"] = 2;
                // line 111
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "image_galleries", array()));
                foreach ($context['_seq'] as $context["number_gallery"] => $context["image_gallery"]) {
                    // line 112
                    echo "\t\t\t\t\t\t\t\t";
                    if (($context["number_gallery"] < (isset($context["total_gallery"]) ? $context["total_gallery"] : null))) {
                        // line 113
                        echo "\t\t\t\t\t\t\t\t<div class=\"item-img\" data-src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image_gallery"], "thumb", array()), "html", null, true);
                        echo "\"><img class=\"lazyload \" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image_gallery"], "cart", array()), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                        echo "\"></div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 115
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['number_gallery'], $context['image_gallery'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 118
            echo "
\t\t\t\t\t<div class=\"product-image-container\">
\t\t\t\t\t
\t\t\t\t\t\t<a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "href", array()), "html", null, true);
            echo " \" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo " \">
\t\t\t\t\t\t\t<img  data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "thumb", array()), "html", null, true);
            echo "\"  title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo " \" class=\"lazyload img-responsive\" />
\t\t\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t";
            // line 128
            echo "\t\t\t\t\t";
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "countdown_status"), "method") && $this->getAttribute($context["product"], "special_end_date", array()))) {
                // line 129
                echo "\t\t\t\t\t
\t\t\t\t\t\t";
                // line 130
                $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/countdown.twig"), "listing.twig", 130)->display(array_merge($context, array("product" => $context["product"], "special_end_date" => $this->getAttribute($context["product"], "special_end_date", array()))));
                // line 131
                echo "\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 133
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 134
            if (($this->getAttribute($context["product"], "quantity", array()) == 0)) {
                // line 135
                echo "\t\t\t\t\t\t<div class=\"label-stock label label-success \">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "stock_status", array()), "html", null, true);
                echo "</div> 
\t\t\t\t\t";
            }
            // line 137
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 138
            if (($this->getAttribute($context["product"], "price", array()) && $this->getAttribute($context["product"], "special", array()))) {
                echo " 
\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 141
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "discount_status"), "method")) {
                    echo " 
\t\t\t\t\t\t\t<span class=\"label-product label-sale\">
\t\t\t\t\t\t\t\t ";
                    // line 143
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "discount", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                }
                // line 145
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t</div> 
\t\t\t\t\t";
            }
            // line 148
            echo " 

\t\t\t\t\t
\t\t\t\t\t";
            // line 151
            if (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) != "bottom")) {
                // line 152
                echo "\t\t\t\t\t<div class=\"button-group ";
                echo twig_escape_filter($this->env, (isset($context["class_cart_info"]) ? $context["class_cart_info"] : null), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 153
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_status"), "method")) {
                    // line 154
                    echo "\t\t\t\t\t\t<button class=\"addToCart  btn-button\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_cart"]) ? $context["button_cart"] : null), "html", null, true);
                    echo "\" onclick=\"cart.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "minimum", array()), "html", null, true);
                    echo "');\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i><span>";
                    // line 155
                    echo twig_escape_filter($this->env, (isset($context["button_cart"]) ? $context["button_cart"] : null), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t";
                }
                // line 158
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_wishlist_status"), "method")) {
                    // line 159
                    echo "\t\t\t\t\t\t<button class=\"wishlist btn-button\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null), "html", null, true);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "');\"><i class=\"fa fa-heart\"></i><span>";
                    echo twig_escape_filter($this->env, (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null), "html", null, true);
                    echo "</span></button>
\t\t\t\t\t\t";
                }
                // line 160
                echo " 

\t\t\t\t\t\t";
                // line 162
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_Compare_status"), "method")) {
                    // line 163
                    echo "\t\t\t\t\t\t<button class=\"compare btn-button\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_compare"]) ? $context["button_compare"] : null), "html", null, true);
                    echo "\" onclick=\"compare.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "');\"><i class=\"fa fa-random\"></i><span>";
                    echo twig_escape_filter($this->env, (isset($context["button_compare"]) ? $context["button_compare"] : null), "html", null, true);
                    echo "</span></button>
\t\t\t\t\t\t";
                }
                // line 164
                echo " 

\t\t\t\t\t\t";
                // line 166
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "quick_status"), "method")) {
                    // line 167
                    echo "\t\t\t\t\t\t\t<a class=\"quickview iframe-link visible-lg btn-button\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_quickview"), "method"), "html", null, true);
                    echo "\" data-fancybox-type=\"iframe\"  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "href_quickview", array()), "html", null, true);
                    echo "\"> <i class=\"fa fa-search\"></i><span>";
                    echo twig_escape_filter($this->env, (isset($context["text_quickview"]) ? $context["text_quickview"] : null), "html", null, true);
                    echo "</span> </a>
\t\t\t\t\t\t";
                }
                // line 168
                echo " 
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 171
            echo "\t\t\t\t\t";
            if (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "bottom")) {
                // line 172
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "quick_status"), "method")) {
                    // line 173
                    echo "\t\t\t\t\t\t\t<a class=\"quickview iframe-link visible-lg btn-button\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_quickview"), "method"), "html", null, true);
                    echo "\" data-fancybox-type=\"iframe\"  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "href_quickview", array()), "html", null, true);
                    echo "\"> <i class=\"fa fa-search\"></i><span>";
                    echo twig_escape_filter($this->env, (isset($context["text_quickview"]) ? $context["text_quickview"] : null), "html", null, true);
                    echo "</span> </a>
\t\t\t\t\t\t";
                }
                // line 174
                echo " 
\t\t\t\t\t";
            }
            // line 175
            echo " 
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"right-block ";
            // line 178
            echo twig_escape_filter($this->env, (isset($context["rightb"]) ? $context["rightb"] : null), "html", null, true);
            echo "\">
\t\t\t\t\t<h4><a href=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "href", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo " </a></h4>
\t\t\t\t\t<div class=\"rate-history\">
\t\t\t\t\t\t";
            // line 181
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "rating_status"), "method")) {
                echo " 
\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t";
                // line 184
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 185
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        echo " 
\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t\t\t\t\t";
                    } else {
                        // line 187
                        echo "   
\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t\t\t\t\t";
                    }
                    // line 189
                    echo " 
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"rating-num\"  href=\"";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "href", array()), "html", null, true);
                echo "\" rel=\"nofollow\" target=\"_blank\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "reviews", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 196
            echo "\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t";
            // line 200
            if ($this->getAttribute($context["product"], "price", array())) {
                echo " 
\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t";
                // line 202
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo " 
\t\t\t\t\t\t\t<span class=\"price-new\">";
                    // line 203
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                    echo " </span>
\t\t\t\t\t\t";
                } else {
                    // line 204
                    echo "   
\t\t\t\t\t\t\t<span class=\"price-new\">";
                    // line 205
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "special", array()), "html", null, true);
                    echo " </span> <span class=\"price-old\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                    echo " </span>
\t\t\t\t\t\t";
                }
                // line 206
                echo " 
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 209
            echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t<p>";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo " </p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t";
            // line 214
            if (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "bottom")) {
                // line 215
                echo "\t\t\t\t\t<div class=\"button-group cartinfo--static\">\t\t
\t\t\t\t\t\t";
                // line 216
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_status"), "method")) {
                    // line 217
                    echo "\t\t\t\t\t\t<button class=\"addToCart\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_cart"]) ? $context["button_cart"] : null), "html", null, true);
                    echo "\" onclick=\"cart.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "minimum", array()), "html", null, true);
                    echo "');\">
\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i><span>";
                    // line 218
                    echo twig_escape_filter($this->env, (isset($context["button_cart"]) ? $context["button_cart"] : null), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t";
                }
                // line 221
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 222
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_wishlist_status"), "method")) {
                    // line 223
                    echo "\t\t\t\t\t\t<button class=\"wishlist btn-button\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null), "html", null, true);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "');\"><i class=\"fa fa-heart-o\"></i><span>";
                    echo twig_escape_filter($this->env, (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null), "html", null, true);
                    echo "</span></button>
\t\t\t\t\t\t";
                }
                // line 224
                echo " 

\t\t\t\t\t\t

\t\t\t\t\t\t";
                // line 228
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_Compare_status"), "method")) {
                    // line 229
                    echo "\t\t\t\t\t\t<button class=\"compare btn-button\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_compare"]) ? $context["button_compare"] : null), "html", null, true);
                    echo "\" onclick=\"compare.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "');\"><i class=\"fa fa-random\"></i><span>";
                    echo twig_escape_filter($this->env, (isset($context["button_compare"]) ? $context["button_compare"] : null), "html", null, true);
                    echo "</span></button>
\t\t\t\t\t\t";
                }
                // line 230
                echo " 
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 233
            echo "\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t";
            // line 236
            if ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_status"), "method") || $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_wishlist_status"), "method")) || $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_Compare_status"), "method"))) {
                // line 237
                echo "\t\t\t\t<div class=\"list-block\">

\t\t\t\t\t";
                // line 239
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_status"), "method")) {
                    // line 240
                    echo "\t\t\t\t\t<button class=\"addToCart btn-button\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_cart"]) ? $context["button_cart"] : null), "html", null, true);
                    echo "\" onclick=\"cart.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "minimum", array()), "html", null, true);
                    echo "');\"><i class=\"fa fa-shopping-cart\"></i></button>
\t\t\t\t\t";
                }
                // line 241
                echo " 

\t\t\t\t\t";
                // line 243
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_wishlist_status"), "method")) {
                    // line 244
                    echo "\t\t\t\t\t<button class=\"wishlist btn-button\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null), "html", null, true);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "');\"><i class=\"fa fa-heart-o\"></i></button>
\t\t\t\t\t";
                }
                // line 245
                echo " 

\t\t\t\t\t";
                // line 247
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_Compare_status"), "method")) {
                    // line 248
                    echo "\t\t\t\t\t<button class=\"compare btn-button\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_compare"]) ? $context["button_compare"] : null), "html", null, true);
                    echo "\" onclick=\"compare.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "');\"><i class=\"fa fa-random\"></i></button>
\t\t\t\t\t";
                }
                // line 249
                echo " 

\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 253
            echo " 
\t\t\t</div>
\t\t</div>
\t\t";
            // line 257
            echo "\t
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        echo "</div>

";
        // line 262
        echo "<div class=\"product-filter product-filter-bottom filters-panel\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-6 text-left\">";
        // line 264
        echo twig_escape_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "html", null, true);
        echo "</div>
\t\t<div class=\"col-sm-6 text-right\">";
        // line 265
        echo twig_escape_filter($this->env, (isset($context["results"]) ? $context["results"] : null), "html", null, true);
        echo "</div>
\t</div>
</div>

<script type=\"text/javascript\"><!--
reinitView();

function reinitView() {

\t\$( '.product-card__gallery .item-img').hover(function() {
\t\t\$(this).addClass('thumb-active').siblings().removeClass('thumb-active');
\t\tvar thumb_src = \$(this).attr(\"data-src\");
\t\t\$(this).closest('.product-item-container').find('img.img-responsive').attr(\"src\",thumb_src);
\t}); 

\t\$('.view-mode .list-view button').bind(\"click\", function() {
\t\t\$(this).parent().find('button').removeClass('active');
\t\t\$(this).addClass('active');
\t});\t
\t// Product List
\t\$('#list-view').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-list col-xs-12');
\t\tlocalStorage.setItem('listview', 'list');
\t});

\t// Product Grid
\t\$('#grid-view').click(function() {
\t\tvar cols = \$('.left_column , .right_column ').length;

\t\t
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
\t\t
\t\tlocalStorage.setItem('listview', 'grid');
\t});

\t// Product Grid 2
\t\$('#grid-view-2').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-2 col-lg-6 col-md-6 col-sm-6 col-xs-12');
\t\tlocalStorage.setItem('listview', 'grid-2');
\t});

\t// Product Grid 3
\t\$('#grid-view-3').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-3 col-lg-4 col-md-4 col-sm-6 col-xs-12');
\t\tlocalStorage.setItem('listview', 'grid-3');
\t});

\t// Product Grid 4
\t\$('#grid-view-4').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12');
\t\tlocalStorage.setItem('listview', 'grid-4');
\t});

\t// Product Grid 5
\t\$('#grid-view-5').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-5 col-lg-15 col-md-4 col-sm-6 col-xs-12');
\t\tlocalStorage.setItem('listview', 'grid-5');
\t});

\t// Product Table
\t\$('#table-view').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-table col-xs-12');
\t\tlocalStorage.setItem('listview', 'table');
\t})

\t
\t";
        // line 331
        if ((isset($context["url_listview"]) ? $context["url_listview"] : null)) {
            // line 332
            echo "\t\tlocalStorage.setItem('listview', '";
            echo twig_escape_filter($this->env, (isset($context["url_listview"]) ? $context["url_listview"] : null), "html", null, true);
            echo "');
\t";
        } else {
            // line 334
            echo "\t\tif(localStorage.getItem('listview')== null) localStorage.setItem('listview', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_catalog_mode"), "method"), "html", null, true);
            echo "');
\t";
        }
        // line 336
        echo "
\tif (localStorage.getItem('listview') == 'table') {
\t\t\$('#table-view').trigger('click');
\t} else if (localStorage.getItem('listview') == 'grid-2'){
\t\t\$('#grid-view-2').trigger('click');
\t} else if (localStorage.getItem('listview') == 'grid-3'){
\t\t\$('#grid-view-3').trigger('click');
\t} else if (localStorage.getItem('listview') == 'grid-4'){
\t\t\$('#grid-view-4').trigger('click');
\t} else if (localStorage.getItem('listview') == 'grid-5'){
\t\t\$('#grid-view-5').trigger('click');
\t} else {
\t\t\$('#list-view').trigger('click');
\t}
\t

}

//--></script> ";
    }

    public function getTemplateName()
    {
        return "listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  836 => 336,  830 => 334,  824 => 332,  822 => 331,  753 => 265,  749 => 264,  745 => 262,  741 => 259,  726 => 257,  721 => 253,  714 => 249,  706 => 248,  704 => 247,  700 => 245,  692 => 244,  690 => 243,  686 => 241,  676 => 240,  674 => 239,  670 => 237,  668 => 236,  663 => 233,  658 => 230,  648 => 229,  646 => 228,  640 => 224,  630 => 223,  628 => 222,  625 => 221,  619 => 218,  610 => 217,  608 => 216,  605 => 215,  603 => 214,  597 => 211,  593 => 209,  588 => 206,  581 => 205,  578 => 204,  573 => 203,  569 => 202,  564 => 200,  558 => 196,  550 => 193,  546 => 191,  539 => 189,  534 => 187,  527 => 185,  523 => 184,  517 => 181,  510 => 179,  506 => 178,  501 => 175,  497 => 174,  487 => 173,  484 => 172,  481 => 171,  476 => 168,  466 => 167,  464 => 166,  460 => 164,  450 => 163,  448 => 162,  444 => 160,  434 => 159,  431 => 158,  425 => 155,  416 => 154,  414 => 153,  409 => 152,  407 => 151,  402 => 148,  396 => 145,  390 => 143,  384 => 141,  379 => 138,  376 => 137,  370 => 135,  368 => 134,  365 => 133,  361 => 131,  359 => 130,  356 => 129,  353 => 128,  343 => 122,  337 => 121,  332 => 118,  328 => 116,  322 => 115,  312 => 113,  309 => 112,  304 => 111,  302 => 110,  294 => 109,  289 => 108,  286 => 107,  283 => 106,  280 => 105,  277 => 104,  274 => 103,  271 => 102,  269 => 101,  266 => 100,  264 => 99,  259 => 98,  256 => 97,  253 => 96,  250 => 95,  247 => 94,  244 => 93,  241 => 92,  238 => 91,  235 => 90,  232 => 89,  229 => 88,  226 => 87,  221 => 83,  204 => 82,  200 => 80,  190 => 74,  186 => 72,  180 => 71,  172 => 69,  164 => 67,  161 => 66,  157 => 65,  152 => 63,  146 => 59,  140 => 58,  132 => 55,  129 => 54,  121 => 52,  118 => 51,  114 => 50,  108 => 47,  97 => 39,  93 => 38,  85 => 33,  82 => 32,  73 => 29,  71 => 28,  68 => 27,  65 => 26,  61 => 25,  56 => 24,  54 => 23,  51 => 22,  49 => 21,  44 => 18,  40 => 15,  36 => 14,  31 => 13,  28 => 12,  24 => 11,  19 => 10,);
    }
}
/* {#*/
/* ****************************************************** */
/*  * @package	SO Framework for Opencart 3.x*/
/*  * @author	http://www.opencartworks.com*/
/*  * @license	GNU General Public License*/
/*  * @copyright(C) 2008-2017 opencartworks.com. All rights reserved.*/
/*  *******************************************************/
/* #}*/
/* {#====  Variables url parameter ==== #}*/
/* {% if url_thumbgallery %} {% set thumbgallery = url_thumbgallery %}*/
/* {% else %} {% set thumbgallery = soconfig.get_settings('card_gallery') %}{% endif %}*/
/* */
/* {% if url_cartinfo %} {% set cartinfo = url_cartinfo %}*/
/* {% else %} {% set cartinfo = soconfig.get_settings('desktop_addcart_position') %}{% endif %}*/
/* */
/* */
/* {#==== filters panel Top==== #}*/
/* <div class="product-filter product-filter-top filters-panel">*/
/*   <div class="row">*/
/* 		<div class="col-sm-5 view-mode">*/
/* 			{% set category_route = soconfig.get_route() %}*/
/* 			*/
/* 			{% if (column_left or column_right ) and category_route =='product/category' %}*/
/* 				{% if url_asideType %} {% set btn_canvas = url_asideType %}*/
/* 				{% else %}{% set btn_canvas = soconfig.get_settings('catalog_col_type') %}*/
/* 				{% endif %}*/
/* */
/* 				{% set class_btn_canvas = (btn_canvas =='off_canvas') ? '' : 'hidden-lg hidden-md' %}*/
/* 				<a href="javascript:void(0)" class="open-sidebar {{class_btn_canvas}}"><i class="fa fa-bars"></i>{{ text_sidebar }}</a>*/
/* 				<div class="sidebar-overlay "></div>*/
/* 			{% endif %}*/
/* 			<div class="list-view">*/
/* 				<div class="btn btn-gridview">{{text_gridview}}</div>*/
/* 				<button type="button" id="grid-view-2" class="btn btn-view hidden-sm hidden-xs">2</button>*/
/* 			  	<button type="button" id="grid-view-3" class="btn btn-view hidden-sm hidden-xs ">3</button>*/
/* 			  	<button type="button" id="grid-view-4" class="btn btn-view hidden-sm hidden-xs">4</button>*/
/* 			  	<button type="button" id="grid-view-5" class="btn btn-view hidden-sm hidden-xs">5</button>*/
/* 				<button type="button" id="grid-view" class="btn btn-default grid hidden-lg hidden-md" title="{{ button_grid }}"><i class="fa fa-th-large"></i></button>*/
/* 				<button type="button" id="list-view" class="btn btn-default list " title="{{ button_list }}"><i class="fa fa-bars"></i></button>*/
/* 				<button type="button" id="table-view" class="btn btn-view"><i class="fa fa-table" aria-hidden="true"></i></button>*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 	*/
/* 		<div class="short-by-show form-inline text-right col-md-7 col-sm-6 col-xs-12">*/
/* 			<div class="form-group short-by">*/
/* 				<label class="control-label" for="input-sort">{{ text_sort }}</label>*/
/* 				<select id="input-sort" class="form-control" onchange="location = this.value;">*/
/* 					*/
/* 					{% for sorts in sorts %}*/
/* 					{% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* 						<option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/* 					{% else %}*/
/* 					*/
/* 					<option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/* 					*/
/* 					{% endif %}*/
/* 					{% endfor %}*/
/* 				*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 				<label class="control-label" for="input-limit">{{ text_limit }}</label>*/
/* 				<select id="input-limit" class="form-control" onchange="location = this.value;">*/
/* 					{% for limits in limits %}*/
/* 					{% if limits.value == limit %}*/
/* 					<option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/* 					{% else %}*/
/* 					<option value="{{ limits.href }}">{{ limits.text }}</option>*/
/* 					{% endif %}*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="form-group product-compare hidden-sm hidden-xs"><a href="{{ compare }}" id="compare-total" class="btn btn-default">{{ text_compare }}</a></div>*/
/* 		</div>*/
/* 	*/
/*   </div>*/
/* </div>*/
/* {#==== Product List|Grid ==== #}*/
/* */
/* <div class="products-list row nopadding-xs">*/
/* 	{% for  product in products %}*/
/* 	*/
/* 		<div class="product-layout ">*/
/* 			<div class="product-item-container">*/
/* 				{#=======Show Group_cart_info ======= #}*/
/* 				{% if cartinfo == 'right' %}*/
/* 					{% set class_cart_info = 'cartinfo--right' %}*/
/* 				{% elseif cartinfo == 'bottom' %}*/
/* 					{% set class_cart_info = 'cartinfo--static' %}*/
/* 					{% set leftb = 'left-b' %}*/
/* 					{% set rightb = 'right-b' %}*/
/* 				{% elseif cartinfo == 'center' %}*/
/* 					{% set class_cart_info = 'cartinfo--center' %}*/
/* 				{% else %}*/
/* 					{% set class_cart_info = 'cartinfo--left' %}*/
/* 				{% endif %}*/
/* 				<div class="left-block {{ leftb }}">*/
/* 					{% if thumbgallery   and product.image_galleries %}*/
/* */
/* 					{% if thumbgallery == 1 %}*/
/* 						{% set  class_thumbgallery = 'product-card__left' %}*/
/* 					{% elseif thumbgallery == 2 %}*/
/* 						{% set  class_thumbgallery = 'product-card__right' %}*/
/* 					{% else %}*/
/* 						{% set  class_thumbgallery = 'product-card__bottom' %}*/
/* 					{% endif %}*/
/* 					<div class="product-card__gallery {{class_thumbgallery}}">*/
/* 						    <div class="item-img thumb-active" data-src="{{product.first_gallery['thumb']}}"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{product.first_gallery['cart']}}" alt="{{ product.name }}"></div>*/
/* 							{% set total_gallery = 2 %}*/
/* 							{% for number_gallery,image_gallery in product.image_galleries %}*/
/* 								{% if number_gallery < total_gallery %}*/
/* 								<div class="item-img" data-src="{{image_gallery.thumb}}"><img class="lazyload " data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{image_gallery.cart}}" alt="{{ product.name }}"></div>*/
/* 								{% endif %}*/
/* 							{% endfor %}*/
/* 					</div>*/
/* 					{% endif %}*/
/* */
/* 					<div class="product-image-container">*/
/* 					*/
/* 						<a href="{{ product.href }} " title="{{ product.name }} ">*/
/* 							<img  data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}"  title="{{ product.name }} " class="lazyload img-responsive" />*/
/* 							*/
/* 						</a>*/
/* 					</div>*/
/* 					*/
/* 					{#===== Show CountDown Product =======#}*/
/* 					{% if soconfig.get_settings('countdown_status') and product.special_end_date %}*/
/* 					*/
/* 						{% include theme_directory~'/template/soconfig/countdown.twig' with {product: product,special_end_date:product.special_end_date} %}*/
/* 					*/
/* 					{% endif %}*/
/* 					*/
/* 					{% if product.quantity== 0 %}*/
/* 						<div class="label-stock label label-success ">{{ product.stock_status}}</div> */
/* 					{% endif %}*/
/* 					*/
/* 					{% if product.price  and  product.special  %} */
/* 					<div class="box-label">*/
/* 						{#=======Discount Label======= #}*/
/* 						{% if soconfig.get_settings('discount_status')  %} */
/* 							<span class="label-product label-sale">*/
/* 								 {{ product.discount }}*/
/* 							</span>*/
/* 						{% endif %} */
/* 						*/
/* 					</div> */
/* 					{% endif %} */
/* */
/* 					*/
/* 					{% if cartinfo != 'bottom' %}*/
/* 					<div class="button-group {{class_cart_info}}">*/
/* 						{% if soconfig.get_settings('desktop_addcart_status') %}*/
/* 						<button class="addToCart  btn-button" type="button" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');">						*/
/* 							<i class="fa fa-shopping-cart"></i><span>{{ button_cart }}</span>*/
/* 						</button>*/
/* 						{% endif %}*/
/* 						{% if soconfig.get_settings('desktop_wishlist_status') %}*/
/* 						<button class="wishlist btn-button" type="button" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i><span>{{ button_wishlist }}</span></button>*/
/* 						{% endif %} */
/* */
/* 						{% if soconfig.get_settings('desktop_Compare_status') %}*/
/* 						<button class="compare btn-button" type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-random"></i><span>{{ button_compare }}</span></button>*/
/* 						{% endif %} */
/* */
/* 						{% if soconfig.get_settings('quick_status') %}*/
/* 							<a class="quickview iframe-link visible-lg btn-button" title="{{ objlang.get('text_quickview')}}" data-fancybox-type="iframe"  href="{{ product.href_quickview }}"> <i class="fa fa-search"></i><span>{{ text_quickview}}</span> </a>*/
/* 						{% endif %} */
/* 					</div>*/
/* 					{% endif %}*/
/* 					{% if cartinfo == 'bottom' %}*/
/* 						{% if soconfig.get_settings('quick_status') %}*/
/* 							<a class="quickview iframe-link visible-lg btn-button" title="{{ objlang.get('text_quickview')}}" data-fancybox-type="iframe"  href="{{ product.href_quickview }}"> <i class="fa fa-search"></i><span>{{ text_quickview}}</span> </a>*/
/* 						{% endif %} */
/* 					{% endif %} */
/* 				</div>*/
/* 				*/
/* 				<div class="right-block {{ rightb }}">*/
/* 					<h4><a href="{{ product.href }}">{{ product.name }} </a></h4>*/
/* 					<div class="rate-history">*/
/* 						{% if soconfig.get_settings('rating_status') %} */
/* 						<div class="ratings">*/
/* 							<div class="rating-box">*/
/* 							{% for i in 1..5 %}*/
/* 							{% if product.rating < i %} */
/* 								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 							{% else %}   */
/* 								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 							{% endif %} */
/* 							{% endfor %}*/
/* */
/* 							</div>*/
/* 							<a class="rating-num"  href="{{ product.href }}" rel="nofollow" target="_blank" >{{product.reviews}}</a>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						*/
/* 					</div>*/
/* */
/* 					*/
/* 					{% if product.price %} */
/* 					<div class="price">*/
/* 						{% if not product.special %} */
/* 							<span class="price-new">{{ product.price }} </span>*/
/* 						{% else %}   */
/* 							<span class="price-new">{{ product.special }} </span> <span class="price-old">{{ product.price }} </span>*/
/* 						{% endif %} */
/* 					</div>*/
/* 					{% endif %}*/
/* 					*/
/* 					<div class="description">*/
/* 						<p>{{ product.description }} </p>*/
/* 					</div>*/
/* 					*/
/* 					{% if cartinfo == 'bottom' %}*/
/* 					<div class="button-group cartinfo--static">		*/
/* 						{% if soconfig.get_settings('desktop_addcart_status') %}*/
/* 						<button class="addToCart" type="button" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');">*/
/* 							<i class="fa fa-shopping-cart"></i><span>{{ button_cart }}</span>*/
/* 						</button>*/
/* 						{% endif %}*/
/* 										*/
/* 						{% if soconfig.get_settings('desktop_wishlist_status') %}*/
/* 						<button class="wishlist btn-button" type="button" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart-o"></i><span>{{ button_wishlist }}</span></button>*/
/* 						{% endif %} */
/* */
/* 						*/
/* */
/* 						{% if soconfig.get_settings('desktop_Compare_status') %}*/
/* 						<button class="compare btn-button" type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-random"></i><span>{{ button_compare }}</span></button>*/
/* 						{% endif %} */
/* 					</div>*/
/* 					{% endif %}*/
/* 					*/
/* 				</div>*/
/* */
/* 				{% if soconfig.get_settings('desktop_addcart_status') or soconfig.get_settings('desktop_wishlist_status') or  soconfig.get_settings('desktop_Compare_status') %}*/
/* 				<div class="list-block">*/
/* */
/* 					{% if soconfig.get_settings('desktop_addcart_status') %}*/
/* 					<button class="addToCart btn-button" type="button" title="{{ button_cart}}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-cart"></i></button>*/
/* 					{% endif %} */
/* */
/* 					{% if soconfig.get_settings('desktop_wishlist_status') %}*/
/* 					<button class="wishlist btn-button" type="button" title="{{ button_wishlist}}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart-o"></i></button>*/
/* 					{% endif %} */
/* */
/* 					{% if soconfig.get_settings('desktop_Compare_status') %}*/
/* 					<button class="compare btn-button" type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-random"></i></button>*/
/* 					{% endif %} */
/* */
/* 					*/
/* 				</div>*/
/* 				{% endif %} */
/* 			</div>*/
/* 		</div>*/
/* 		{# ====End Clearfix fluid grid layout =======#}*/
/* 	*/
/* 	{% endfor %}*/
/* </div>*/
/* */
/* {#==== filters panel Bottom==== #}*/
/* <div class="product-filter product-filter-bottom filters-panel">*/
/* 	<div class="row">*/
/* 		<div class="col-sm-6 text-left">{{ pagination }}</div>*/
/* 		<div class="col-sm-6 text-right">{{ results }}</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <script type="text/javascript"><!--*/
/* reinitView();*/
/* */
/* function reinitView() {*/
/* */
/* 	$( '.product-card__gallery .item-img').hover(function() {*/
/* 		$(this).addClass('thumb-active').siblings().removeClass('thumb-active');*/
/* 		var thumb_src = $(this).attr("data-src");*/
/* 		$(this).closest('.product-item-container').find('img.img-responsive').attr("src",thumb_src);*/
/* 	}); */
/* */
/* 	$('.view-mode .list-view button').bind("click", function() {*/
/* 		$(this).parent().find('button').removeClass('active');*/
/* 		$(this).addClass('active');*/
/* 	});	*/
/* 	// Product List*/
/* 	$('#list-view').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-list col-xs-12');*/
/* 		localStorage.setItem('listview', 'list');*/
/* 	});*/
/* */
/* 	// Product Grid*/
/* 	$('#grid-view').click(function() {*/
/* 		var cols = $('.left_column , .right_column ').length;*/
/* */
/* 		*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');*/
/* 		*/
/* 		localStorage.setItem('listview', 'grid');*/
/* 	});*/
/* */
/* 	// Product Grid 2*/
/* 	$('#grid-view-2').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-2 col-lg-6 col-md-6 col-sm-6 col-xs-12');*/
/* 		localStorage.setItem('listview', 'grid-2');*/
/* 	});*/
/* */
/* 	// Product Grid 3*/
/* 	$('#grid-view-3').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-3 col-lg-4 col-md-4 col-sm-6 col-xs-12');*/
/* 		localStorage.setItem('listview', 'grid-3');*/
/* 	});*/
/* */
/* 	// Product Grid 4*/
/* 	$('#grid-view-4').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12');*/
/* 		localStorage.setItem('listview', 'grid-4');*/
/* 	});*/
/* */
/* 	// Product Grid 5*/
/* 	$('#grid-view-5').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-5 col-lg-15 col-md-4 col-sm-6 col-xs-12');*/
/* 		localStorage.setItem('listview', 'grid-5');*/
/* 	});*/
/* */
/* 	// Product Table*/
/* 	$('#table-view').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-table col-xs-12');*/
/* 		localStorage.setItem('listview', 'table');*/
/* 	})*/
/* */
/* 	*/
/* 	{% if url_listview %}*/
/* 		localStorage.setItem('listview', '{{url_listview}}');*/
/* 	{% else %}*/
/* 		if(localStorage.getItem('listview')== null) localStorage.setItem('listview', '{{soconfig.get_settings('product_catalog_mode')}}');*/
/* 	{% endif %}*/
/* */
/* 	if (localStorage.getItem('listview') == 'table') {*/
/* 		$('#table-view').trigger('click');*/
/* 	} else if (localStorage.getItem('listview') == 'grid-2'){*/
/* 		$('#grid-view-2').trigger('click');*/
/* 	} else if (localStorage.getItem('listview') == 'grid-3'){*/
/* 		$('#grid-view-3').trigger('click');*/
/* 	} else if (localStorage.getItem('listview') == 'grid-4'){*/
/* 		$('#grid-view-4').trigger('click');*/
/* 	} else if (localStorage.getItem('listview') == 'grid-5'){*/
/* 		$('#grid-view-5').trigger('click');*/
/* 	} else {*/
/* 		$('#list-view').trigger('click');*/
/* 	}*/
/* 	*/
/* */
/* }*/
/* */
/* //--></script> */

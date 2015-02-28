<?php

$headerandfooterPage = new QodeAdminPage("2", "Header");
$qodeFramework->qodeOptions->addAdminPage("headerandfooter",$headerandfooterPage);

// Header Position

$panel6 = new QodePanel("Header Position", "header_position");
$headerandfooterPage->addChild("panel6",$panel6);
	$vertical_area = new QodeField("yesno","vertical_area","no","Switch to Left Menu","Enabling this option will switch to a Left Menu area (default is Top Menu)", array(),
		array("dependence" => true,
		"dependence_hide_on_yes" => "#qodef_header_panel,#qodef_header_top_panel,#qodef_enable_search_panel,#qodef_enable_side_area_panel,#qodef_enable_popup_menu_panel",
		"dependence_show_on_yes" => "#qodef_vertical_areas_panel"));
	$panel6->addChild("vertical_area",$vertical_area);

// Header

$panel5 = new QodePanel("Header","header_panel","vertical_area","yes");
$headerandfooterPage->addChild("panel5",$panel5);
	$header_in_grid = new QodeField("yesno","header_in_grid","yes","Header in Grid","Enabling this option will display header content in grid");
	$panel5->addChild("header_in_grid",$header_in_grid);
	$header_bottom_appearance = new QodeField("select","header_bottom_appearance","fixed","Header Type","Choose the header layout & behavior", array( "regular" => "Regular",
       "fixed" => "Fixed",
       "fixed_hiding" => "Fixed Advanced",
       "stick" => "Sticky",
       "stick menu_bottom" => "Sticky Expanded",
       "stick_with_left_right_menu" => "Sticky Divided"
      ),
      array("dependence" => true,
      	"hide" => array(
      		"regular"=>"#qodef_scroll_amount_for_sticky_container,#qodef_header_height_scroll,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_background_color_sticky,#qodef_header_background_transparency_scroll,#qodef_header_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container",
	        "fixed"=>"#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container",
	        "fixed_hiding"=>"#qodef_scroll_amount_for_sticky_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky",
      		"stick menu_bottom"=>"#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_height_scroll_hidden,#qodef_header_background_transparency_scroll,#qodef_header_background_color_scroll,#qodef_scroll_amount_for_fixed_hiding_container",
            "stick_with_left_right_menu"=>"#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_height_scroll_hidden,#qodef_header_background_transparency_scroll,#qodef_header_background_color_scroll,#qodef_scroll_amount_for_fixed_hiding_container",
      		"stick"=>"#qodef_header_height_scroll,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_background_transparency_scroll,#qodef_scroll_amount_for_fixed_hiding_container"),
      	"show" => array(
      		"regular"=>"#qodef_menu_position_container",
      		"fixed"=>"#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_background_color_scroll,#qodef_header_background_transparency_scroll",
      		"stick"=>"#qodef_scroll_amount_for_sticky_container,#qodef_menu_position_container,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky",
      		"stick menu_bottom"=>"#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky",
            "stick_with_left_right_menu"=>"#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky",
      		"fixed_hiding"=>"#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_background_transparency_scroll,#qodef_scroll_amount_for_fixed_hiding_container") ));
	$panel5->addChild("header_bottom_appearance",$header_bottom_appearance);
	$scroll_amount_for_sticky_container = new QodeContainer("scroll_amount_for_sticky_container","header_bottom_appearance","fixed", array( "regular","fixed","fixed_hiding") );
	$panel5->addChild("scroll_amount_for_sticky_container",$scroll_amount_for_sticky_container);
		$scroll_amount_for_sticky = new QodeField("text","scroll_amount_for_sticky","","Scroll Amount for Sticky (px)","Enter scroll amount (in pixels) for Sticky Menu to appear", array(), array("col_width" => 3));
		$scroll_amount_for_sticky_container->addChild("scroll_amount_for_sticky",$scroll_amount_for_sticky);

    $scroll_amount_for_fixed_hiding_container = new QodeContainer("scroll_amount_for_fixed_hiding_container","header_bottom_appearance","fixed", array( "regular","fixed","stick", "stick menu_bottom", "stick_with_left_right_menu") );
    $panel5->addChild("scroll_amount_for_fixed_hiding_container",$scroll_amount_for_fixed_hiding_container);
        $scroll_amount_for_fixed_hiding = new QodeField("text","scroll_amount_for_fixed_hiding","","Scroll Amount (px)","Enter scroll amount (in pixels) for menu to hide", array(), array("col_width" => 3));
        $scroll_amount_for_fixed_hiding_container->addChild("scroll_amount_for_fixed_hiding",$scroll_amount_for_fixed_hiding);

	$menu_position_container = new QodeContainer("menu_position_container","header_bottom_appearance","fixed_hiding", array( "stick menu_bottom","stick_with_left_right_menu","fixed_hiding") );
	$panel5->addChild("menu_position_container",$menu_position_container);
		$menu_position = new QodeField("select","menu_position","","Menu Position","Choose a menu position (default is right alignment)", array( "-1" => "Default",
       "center" => "Center"
      ));
		$menu_position_container->addChild("menu_position",$menu_position);
	    $center_logo_image = new QodeField("yesno","center_logo_image","no","Center Logo","Enabling this option will center logo and position it above menu", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_center_logo_image_container"));
	    $menu_position_container->addChild("center_logo_image",$center_logo_image);

	$center_logo_image_container = new QodeContainer("center_logo_image_container","center_logo_image","no");
	$menu_position_container->addChild("center_logo_image_container",$center_logo_image_container);
		$center_logo_image_animate = new QodeField("yesno","center_logo_image_animate","no","Animate Centered Logo","Enabling this option will animate logo upon loading");
		$center_logo_image_container->addChild("center_logo_image_animate",$center_logo_image_animate);
        $group1 = new QodeGroup("Header Height","Enter header height in pixels");
        $panel5->addChild("group1",$group1);
        $row1 = new QodeRow();
        $group1->addChild("row1",$row1);
        $header_height = new QodeField("textsimple","header_height","","Initial (px)","Initial header (px)");
        $row1->addChild("header_height",$header_height);
        $header_height_scroll = new QodeField("textsimple","header_height_scroll","","After Scroll (px)","This is some description", array(), array(),"header_bottom_appearance", array( "regular","stick","stick menu_bottom","stick_with_left_right_menu","fixed_hiding"));
        $row1->addChild("header_height_scroll",$header_height_scroll);
        $header_height_sticky = new QodeField("textsimple","header_height_sticky","","After Scroll (px)","This is some description", array(), array(),"header_bottom_appearance", array( "regular","fixed","fixed_hiding"));
        $row1->addChild("header_height_sticky",$header_height_sticky);
        $header_height_scroll_hidden = new QodeField("textsimple","header_height_scroll_hidden","","After Scroll (px)","This is some description", array(), array(),"header_bottom_appearance", array( "regular","fixed","stick","stick menu_bottom","stick_with_left_right_menu"));
        $row1->addChild("header_height_scroll_hidden",$header_height_scroll_hidden);
        $header_style = new QodeField("select","header_style","","Header Skin","Choose a header style to make header elements (logo, main menu, side menu button) in that predefined style", array(
            "-1" => "",
            "light" => "Light",
            "dark" => "Dark"
      ));
$panel5->addChild("header_style",$header_style);
$group2 = new QodeGroup("Header Background Color","Choose a background color for header area");
$panel5->addChild("group2",$group2);
$row1 = new QodeRow();
$group2->addChild("row1",$row1);
$header_background_color = new QodeField("colorsimple","header_background_color","","Initial","This is some description");
$row1->addChild("header_background_color",$header_background_color);
$header_background_color_scroll = new QodeField("colorsimple","header_background_color_scroll","","After Scroll","This is some description", array(), array(),"header_bottom_appearance", array( "regular","stick","stick menu_bottom","stick_with_left_right_menu"));
$row1->addChild("header_background_color_scroll",$header_background_color_scroll);
$header_background_color_sticky = new QodeField("colorsimple","header_background_color_sticky","","After Scroll","This is some description", array(), array(),"header_bottom_appearance", array( "regular","fixed","fixed_hiding"));
$row1->addChild("header_background_color_sticky",$header_background_color_sticky);
$group3 = new QodeGroup("Header Transparency","Choose a transparency for the header background color (0 = fully transparent, 1 = opaque)");
$panel5->addChild("group3",$group3);
$row1 = new QodeRow();
$group3->addChild("row1",$row1);
$header_background_transparency_initial = new QodeField("textsimple","header_background_transparency_initial","","Initial","This is some description");
$row1->addChild("header_background_transparency_initial",$header_background_transparency_initial);
$header_background_transparency_scroll = new QodeField("textsimple","header_background_transparency_scroll","","After Scroll","This is some description", array(), array(),"header_bottom_appearance", array( "regular","stick","stick menu_bottom","stick_with_left_right_menu"));
$row1->addChild("header_background_transparency_scroll",$header_background_transparency_scroll);
$header_background_transparency_sticky = new QodeField("textsimple","header_background_transparency_sticky","","After Scroll","This is some description", array(), array(),"header_bottom_appearance", array( "regular","fixed","fixed_hiding"));
$row1->addChild("header_background_transparency_sticky",$header_background_transparency_sticky);
$header_bottom_border_color = new QodeField("color","header_bottom_border_color","","Header Bottom Border Color","Choose a color for the header bottom border. Note: If color has not been chosen, border bottom will not be displayed");
$panel5->addChild("header_bottom_border_color",$header_bottom_border_color);
$header_botom_border_transparency = new QodeField("text","header_botom_border_transparency","","Header Bottom Border Transparency","Choose a transparency for the header border color (0 = fully transparent, 1 = opaque). Note: Works only if Header Bottom Border Color is filled", array(), array("col_width" => 3));
$panel5->addChild("header_botom_border_transparency",$header_botom_border_transparency);


$panel10 = new QodePanel("Menus","enable_search_panel","vertical_area","yes");
$headerandfooterPage->addChild("panel10",$panel10);

$dropdown_separator_beetwen_items = new QodeField("yesno","dropdown_separator_beetwen_items","no","Dropdown Menu Item Separators","Enabling this option will display horizontal separators between menu items in classic dropdown menu (in case of wide menu, vertical separators are always enabled)");
$panel10->addChild("dropdown_separator_beetwen_items",$dropdown_separator_beetwen_items);
$dropdown_border_around = new QodeField("yesno","dropdown_border_around","no","Border Around Dropdown Menus","Enabling this option will display border around dropdown menus");
$panel10->addChild("dropdown_border_around",$dropdown_border_around);
$header_separator_color = new QodeField("color","header_separator_color","","Dropdown Menu Item Separator and Border Color","Choose a color for horizontal (classic dropdown) or vertical (wide dropdown) separators between dropdown menu items. This option also applies to border around dropdown menus");
$panel10->addChild("header_separator_color",$header_separator_color);
$group4 = new QodeGroup("Dropdown Menu Background","Choose a color and transparency for the main menu background (0 = fully transparent, 1 = opaque)");
$panel10->addChild("group4",$group4);
$row1 = new QodeRow();
$group4->addChild("row1",$row1);
$dropdown_background_color = new QodeField("colorsimple","dropdown_background_color","","Background Color","This is some description");
$row1->addChild("dropdown_background_color",$dropdown_background_color);
$dropdown_background_transparency = new QodeField("textsimple","dropdown_background_transparency","","Transparency","This is some description");
$row1->addChild("dropdown_background_transparency",$dropdown_background_transparency);

$panel3 = new QodePanel("Qode Search","enable_search_panel","vertical_area","yes");
$headerandfooterPage->addChild("panel3",$panel3);
$enable_search = new QodeField("yesno","enable_search","no","Enable Qode Search Bar","This option enables Qode Search functionality (search icon will appear next to main navigation)
", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_search_container"));
$panel3->addChild("enable_search",$enable_search);
$enable_search_container = new QodeContainer("enable_search_container","enable_search","no");
$panel3->addChild("enable_search_container",$enable_search_container);
$search_background_color = new QodeField("color","search_background_color","","Qode Search Background Color","Choose a background color for Qode search bar");
$enable_search_container->addChild("search_background_color",$search_background_color);
$search_text_color = new QodeField("color","search_text_color","","Qode Search Text Color","Choose a text color for Qode search bar");
$enable_search_container->addChild("search_text_color",$search_text_color);

$panel11 = new QodePanel("Side Area","enable_side_area_panel","vertical_area","yes");
$headerandfooterPage->addChild("panel11",$panel11);
$enable_side_area = new QodeField("yesno","enable_side_area","yes","Enable Side Area","This option enables a side area to be opened from main menu navigation", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_side_area_container"));
$panel11->addChild("enable_side_area",$enable_side_area);
$enable_side_area_container = new QodeContainer("enable_side_area_container","enable_side_area","no");
$panel11->addChild("enable_side_area_container",$enable_side_area_container);
$side_area_title = new QodeField("text","side_area_title","","Side Area Title","Enter a title to appear in Side Area");
$enable_side_area_container->addChild("side_area_title",$side_area_title);
$side_area_background_color = new QodeField("color","side_area_background_color","","Background Color","Choose a background color for Side Area");
$enable_side_area_container->addChild("side_area_background_color",$side_area_background_color);

$group1 = new QodeGroup("Text","Define styles for Side Area text");
$enable_side_area_container->addChild("group1",$group1);
$row1 = new QodeRow();
$group1->addChild("row1",$row1);
$side_area_text_color = new QodeField("colorsimple","side_area_text_color","","Text Color","This is some description");
$row1->addChild("side_area_text_color",$side_area_text_color);
$side_area_text_hover_color = new QodeField("colorsimple","side_area_text_hover_color","","Text Hover Color","This is some description");
$row1->addChild("side_area_text_hover_color",$side_area_text_hover_color);
$row2 = new QodeRow(true);
$group1->addChild("row2",$row2);
$side_area_text_font_size = new QodeField("textsimple","side_area_text_font_size","","Font Size (px)","This is some description");
$row2->addChild("side_area_text_font_size",$side_area_text_font_size);
$side_area_text_letter_spacing = new QodeField("textsimple","side_area_text_letter_spacing","","Letter Spacing (px)","This is some description");
$row2->addChild("side_area_text_letter_spacing",$side_area_text_letter_spacing);
$side_area_text_font_weight = new QodeField("selectblanksimple","side_area_text_font_weight","","Font Weight","This is some description",$options_fontweight);
$row2->addChild("side_area_text_font_weight",$side_area_text_font_weight);

$group2 = new QodeGroup("Title","Define styles for Side Area title");
$enable_side_area_container->addChild("group2",$group2);
$row1 = new QodeRow();
$group2->addChild("row1",$row1);
$side_area_title_color = new QodeField("colorsimple","side_area_title_color","","Text Color","This is some description");
$row1->addChild("side_area_title_color",$side_area_title_color);
$row2 = new QodeRow(true);
$group2->addChild("row2",$row2);
$side_area_title_font_size = new QodeField("textsimple","side_area_title_font_size","","Font Size (px)","This is some description");
$row2->addChild("side_area_title_font_size",$side_area_title_font_size);
$side_area_title_letter_spacing = new QodeField("textsimple","side_area_title_letter_spacing","","Letter Spacing (px)","This is some description");
$row2->addChild("side_area_title_letter_spacing",$side_area_title_letter_spacing);
$side_area_title_font_weight = new QodeField("selectblanksimple","side_area_title_font_weight","","Font Weight","This is some description",$options_fontweight);
$row2->addChild("side_area_title_font_weight",$side_area_title_font_weight);
$side_area_close_icon_style = new QodeField("select","side_area_close_icon_style","","Close Icon Style","Choose a style for close ('X') button", array( "-1" => "",
       "light" => "Light",
       "dark" => "Dark"
      ));
$enable_side_area_container->addChild("side_area_close_icon_style",$side_area_close_icon_style);

$panel12 = new QodePanel("Fullscreen Menu","enable_popup_menu_panel","vertical_area","yes");
$headerandfooterPage->addChild("panel12",$panel12);
$enable_popup_menu = new QodeField("yesno","enable_popup_menu","no","Enable Fullscreen Menu","This option enables a fullscreen menu to be opened from main menu navigation", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_popup_menu_container"));
$panel12->addChild("enable_popup_menu",$enable_popup_menu);
$enable_popup_menu_container = new QodeContainer("enable_popup_menu_container","enable_popup_menu","no");
$panel12->addChild("enable_popup_menu_container",$enable_popup_menu_container);
$logo_image_popup = new QodeField("image","logo_image_popup","","Logo image for Fullscreen menu","Choose a logo for Fullscreen Menu");
$enable_popup_menu_container->addChild("logo_image_popup",$logo_image_popup);

$group1 = new QodeGroup("1st Level Style","Define styles for 1st level in Fullscreen Menu");
$enable_popup_menu_container->addChild("group1",$group1);
$row1 = new QodeRow();
$group1->addChild("row1",$row1);
$popup_menu_color = new QodeField("colorsimple","popup_menu_color","","Text Color","This is some description");
$row1->addChild("popup_menu_color",$popup_menu_color);
$popup_menu_hover_color = new QodeField("colorsimple","popup_menu_hover_color","","Text Hover Color","This is some description");
$row1->addChild("popup_menu_hover_color",$popup_menu_hover_color);
$popup_menu_hover_background_color = new QodeField("colorsimple","popup_menu_hover_background_color","","Background Hover Color","This is some description");
$row1->addChild("popup_menu_hover_background_color",$popup_menu_hover_background_color);

$row2 = new QodeRow(true);
$group1->addChild("row2",$row2);
$popup_menu_google_fonts = new QodeField("Fontsimple","popup_menu_google_fonts","-1","Font Family","This is some description");
$row2->addChild("popup_menu_google_fonts",$popup_menu_google_fonts);
$popup_menu_fontsize = new QodeField("textsimple","popup_menu_fontsize","","Font Size (px)","This is some description");
$row2->addChild("popup_menu_fontsize",$popup_menu_fontsize);
$popup_menu_lineheight = new QodeField("textsimple","popup_menu_lineheight","","Line Height (px)","This is some description");
$row2->addChild("popup_menu_lineheight",$popup_menu_lineheight);
$row3 = new QodeRow(true);
$group1->addChild("row3",$row3);
$popup_menu_fontstyle = new QodeField("selectblanksimple","popup_menu_fontstyle","","Font Style","This is some description",$options_fontstyle);
$row3->addChild("popup_menu_fontstyle",$popup_menu_fontstyle);
$popup_menu_fontweight = new QodeField("selectblanksimple","popup_menu_fontweight","","Font Weight","This is some description",$options_fontweight);
$row3->addChild("popup_menu_fontweight",$popup_menu_fontweight);
$popup_menu_letterspacing = new QodeField("textsimple","popup_menu_letterspacing","","Letter Spacing (px)","This is some description");
$row3->addChild("popup_menu_letterspacing",$popup_menu_letterspacing);

$group2 = new QodeGroup("2nd Level Style","Define styles for 1st level in Fullscreen Menu");
$enable_popup_menu_container->addChild("group2",$group2);
$row1 = new QodeRow();
$group2->addChild("row1",$row1);
$popup_menu_color_2nd = new QodeField("colorsimple","popup_menu_color_2nd","","Text Color","This is some description");
$row1->addChild("popup_menu_color_2nd",$popup_menu_color_2nd);
$popup_menu_hover_color_2nd = new QodeField("colorsimple","popup_menu_hover_color_2nd","","Text Hover Color","This is some description");
$row1->addChild("popup_menu_hover_color_2nd",$popup_menu_hover_color_2nd);
$popup_menu_hover_background_color_2nd = new QodeField("colorsimple","popup_menu_hover_background_color_2nd","","Background Hover Color","This is some description");
$row1->addChild("popup_menu_hover_background_color_2nd",$popup_menu_hover_background_color_2nd);

$row2 = new QodeRow(true);
$group2->addChild("row2",$row2);
$popup_menu_google_fonts_2nd = new QodeField("Fontsimple","popup_menu_google_fonts_2nd","-1","Font Family","This is some description");
$row2->addChild("popup_menu_google_fonts_2nd",$popup_menu_google_fonts_2nd);
$popup_menu_fontsize_2nd = new QodeField("textsimple","popup_menu_fontsize_2nd","","Font Size (px)","This is some description");
$row2->addChild("popup_menu_fontsize_2nd",$popup_menu_fontsize_2nd);
$popup_menu_lineheight_2nd = new QodeField("textsimple","popup_menu_lineheight_2nd","","Line Height (px)","This is some description");
$row2->addChild("popup_menu_lineheight_2nd",$popup_menu_lineheight_2nd);
$row3 = new QodeRow(true);
$group2->addChild("row3",$row3);
$popup_menu_fontstyle_2nd = new QodeField("selectblanksimple","popup_menu_fontstyle_2nd","","Font Style","This is some description",$options_fontstyle);
$row3->addChild("popup_menu_fontstyle_2nd",$popup_menu_fontstyle_2nd);
$popup_menu_fontweight_2nd = new QodeField("selectblanksimple","popup_menu_fontweight_2nd","","Font Weight","This is some description",$options_fontweight);
$row3->addChild("popup_menu_fontweight_2nd",$popup_menu_fontweight_2nd);
$popup_menu_letterspacing_2nd = new QodeField("textsimple","popup_menu_letterspacing_2nd","","Letter Spacing (px)","This is some description");
$row3->addChild("popup_menu_letterspacing_2nd",$popup_menu_letterspacing_2nd);

$group3 = new QodeGroup("Background","Select a background color and transparency for Fullscreen Menu (0 = fully transparent, 1 = opaque)");
$enable_popup_menu_container->addChild("group3",$group3);
$row1 = new QodeRow();
$group3->addChild("row1",$row1);
$popup_menu_background_color = new QodeField("colorsimple","popup_menu_background_color","","Color","This is some description");
$row1->addChild("popup_menu_background_color",$popup_menu_background_color);
$popup_menu_background_transparency = new QodeField("textsimple","popup_menu_background_transparency","","Transparency","This is some description");
$row1->addChild("popup_menu_background_transparency",$popup_menu_background_transparency);


$panel2 = new QodePanel("Header Top","header_top_panel","vertical_area","yes");
$headerandfooterPage->addChild("panel2",$panel2);
$header_top_area = new QodeField("yesno","header_top_area","no","Show Header Top Area","Enabling this option will show Header Top area (this setting applies to Header Left and Header Right widgets)
", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_header_top_area_container"));
$panel2->addChild("header_top_area",$header_top_area);
$header_top_area_container = new QodeContainer("header_top_area_container","header_top_area","no");
$panel2->addChild("header_top_area_container",$header_top_area_container);
$header_top_area_scroll = new QodeField("yesno","header_top_area_scroll","no","Hide on Scroll","Enabling this option will hide Header Top on scroll (if fixed or sticky header types are chosen)");
$header_top_area_container->addChild("header_top_area_scroll",$header_top_area_scroll);
$header_top_background_color = new QodeField("color","header_top_background_color","","Background color","Choose a background color for Header Top area");
$header_top_area_container->addChild("header_top_background_color",$header_top_background_color);

$group5 = new QodeGroup("Bottom Border","Define bottom border style for Header Top");
$header_top_area_container->addChild("group5",$group5);
$row1 = new QodeRow();
$group5->addChild("row1",$row1);
$top_header_border_color = new QodeField("colorsimple","top_header_border_color","","Bottom Border Color","This is some description");
$row1->addChild("top_header_border_color",$top_header_border_color);
$top_header_border_weight = new QodeField("textsimple","top_header_border_weight","","Bottom Border Width (px)","This is some description");
$row1->addChild("top_header_border_weight",$top_header_border_weight);


$panel7 = new QodePanel("Left Menu Area","vertical_areas_panel","vertical_area","no");
$headerandfooterPage->addChild("panel7",$panel7);
$vertical_area_transparency = new QodeField("yesno","vertical_area_transparency","no","Enable transparent left menu area","Enabling this option will make Left Menu background transparent
");
$panel7->addChild("vertical_area_transparency",$vertical_area_transparency);
$vertical_area_background = new QodeField("color","vertical_area_background","","Left Menu Area Background Color","Choose a color for Left Menu background");
$panel7->addChild("vertical_area_background",$vertical_area_background);
$vertical_area_background_image = new QodeField("image","vertical_area_background_image","","Left Menu Area Background Image","Choose an image for Left Menu background");
$panel7->addChild("vertical_area_background_image",$vertical_area_background_image);
$vertical_area_text_color = new QodeField("color","vertical_area_text_color","","Left Menu Area Text Color (for Widgets)","Choose a text color for widgets in Left Menu");
$panel7->addChild("vertical_area_text_color",$vertical_area_text_color);
$vertical_area_content_alignment = new QodeField("select","left_menu_alignment","","Content Alignment","Choose content alignment inside left menu area", array( "left" => "Left",
       "center" => "Center",
       "right" => "Right"
      ));
$panel7->addChild("left_menu_alignment",$vertical_area_content_alignment);

$group1 = new QodeGroup("1st Level Menu Style","Define styles for 1st level in Left Menu");
$panel7->addChild("group1",$group1);
$row1 = new QodeRow();
$group1->addChild("row1",$row1);
$vertical_menu_color = new QodeField("colorsimple","vertical_menu_color","","Text Color","This is some description");
$row1->addChild("vertical_menu_color",$vertical_menu_color);
$vertical_menu_hovercolor = new QodeField("colorsimple","vertical_menu_hovercolor","","Hover/Active color","This is some description");
$row1->addChild("vertical_menu_hovercolor",$vertical_menu_hovercolor);

$row2 = new QodeRow(true);
$group1->addChild("row2",$row2);
$vertical_menu_google_fonts = new QodeField("fontsimple","vertical_menu_google_fonts","-1","Font family","This is some description");
$row2->addChild("vertical_menu_google_fonts",$vertical_menu_google_fonts);
$vertical_menu_fontsize = new QodeField("textsimple","vertical_menu_fontsize","","Font size (px)","This is some description");
$row2->addChild("vertical_menu_fontsize",$vertical_menu_fontsize);
$vertical_menu_lineheight = new QodeField("textsimple","vertical_menu_lineheight","","Line Height (px)","This is some description");
$row2->addChild("vertical_menu_lineheight",$vertical_menu_lineheight);
$row3 = new QodeRow(true);
$group1->addChild("row3",$row3);
$vertical_menu_fontstyle = new QodeField("selectblanksimple","vertical_menu_fontstyle","","Font Style","This is some description",$options_fontstyle);
$row3->addChild("vertical_menu_fontstyle",$vertical_menu_fontstyle);
$vertical_menu_fontweight = new QodeField("selectblanksimple","vertical_menu_fontweight","","Font Weight","This is some description",$options_fontweight);
$row3->addChild("vertical_menu_fontweight",$vertical_menu_fontweight);

$group2 = new QodeGroup("2nd Level Menu Style","Define styles for 2st level in Left Menu");
$panel7->addChild("group2",$group2);
$row1 = new QodeRow();
$group2->addChild("row1",$row1);
$vertical_dropdown_color = new QodeField("colorsimple","vertical_dropdown_color","","Text Color","This is some description");
$row1->addChild("vertical_dropdown_color",$vertical_dropdown_color);
$vertical_dropdown_hovercolor = new QodeField("colorsimple","vertical_dropdown_hovercolor","","Hover/Active Color","This is some description");
$row1->addChild("vertical_dropdown_hovercolor",$vertical_dropdown_hovercolor);

$row2 = new QodeRow(true);
$group2->addChild("row2",$row2);
$vertical_dropdown_google_fonts = new QodeField("fontsimple","vertical_dropdown_google_fonts","-1","Font Family","This is some description");
$row2->addChild("vertical_dropdown_google_fonts",$vertical_dropdown_google_fonts);
$vertical_dropdown_fontsize = new QodeField("textsimple","vertical_dropdown_fontsize","","Font Size (px)","This is some description");
$row2->addChild("vertical_dropdown_fontsize",$vertical_dropdown_fontsize);
$vertical_dropdown_lineheight = new QodeField("textsimple","vertical_dropdown_lineheight","","Line Height (px)","This is some description");
$row2->addChild("vertical_dropdown_lineheight",$vertical_dropdown_lineheight);
$row3 = new QodeRow(true);
$group2->addChild("row3",$row3);
$vertical_dropdown_fontstyle = new QodeField("selectblanksimple","vertical_dropdown_fontstyle","","Font Style","This is some description",$options_fontstyle);
$row3->addChild("vertical_dropdown_fontstyle",$vertical_dropdown_fontstyle);
$vertical_dropdown_fontweight = new QodeField("selectblanksimple","vertical_dropdown_fontweight","","Font Weight","This is some description",$options_fontweight);
$row3->addChild("vertical_dropdown_fontweight",$vertical_dropdown_fontweight);

$group3 = new QodeGroup("3rd Level Menu Style","Define styles for 3rd level in Left Menu");
$panel7->addChild("group3",$group3);
$row1 = new QodeRow();
$group3->addChild("row1",$row1);
$vertical_dropdown_color_thirdlvl = new QodeField("colorsimple","vertical_dropdown_color_thirdlvl","","Text Color","This is some description");
$row1->addChild("vertical_dropdown_color_thirdlvl",$vertical_dropdown_color_thirdlvl);
$vertical_dropdown_hovercolor_thirdlvl = new QodeField("colorsimple","vertical_dropdown_hovercolor_thirdlvl","","Hover/Active Color","This is some description");
$row1->addChild("vertical_dropdown_hovercolor_thirdlvl",$vertical_dropdown_hovercolor_thirdlvl);

$row2 = new QodeRow(true);
$group3->addChild("row2",$row2);
$vertical_dropdown_google_fonts_thirdlvl = new QodeField("fontsimple","vertical_dropdown_google_fonts_thirdlvl","-1","Font Family","This is some description");
$row2->addChild("vertical_dropdown_google_fonts_thirdlvl",$vertical_dropdown_google_fonts_thirdlvl);
$vertical_dropdown_fontsize_thirdlvl = new QodeField("textsimple","vertical_dropdown_fontsize_thirdlvl","","Font Size (px)","This is some description");
$row2->addChild("vertical_dropdown_fontsize_thirdlvl",$vertical_dropdown_fontsize_thirdlvl);
$vertical_dropdown_lineheight_thirdlvl = new QodeField("textsimple","vertical_dropdown_lineheight_thirdlvl","","Line Height (px)","This is some description");
$row2->addChild("vertical_dropdown_lineheight_thirdlvl",$vertical_dropdown_lineheight_thirdlvl);
$row3 = new QodeRow(true);
$group3->addChild("row3",$row3);
$vertical_dropdown_fontstyle_thirdlvl = new QodeField("selectblanksimple","vertical_dropdown_fontstyle_thirdlvl","","Font Style","This is some description",$options_fontstyle);
$row3->addChild("vertical_dropdown_fontstyle_thirdlvl",$vertical_dropdown_fontstyle_thirdlvl);
$vertical_dropdown_fontweight_thirdlvl = new QodeField("selectblanksimple","vertical_dropdown_fontweight_thirdlvl","","Font Weight","This is some description",$options_fontweight);
$row3->addChild("vertical_dropdown_fontweight_thirdlvl",$vertical_dropdown_fontweight_thirdlvl);

$panel20 = new QodePanel("Mobile Menu","mobile_menu_panel");
$headerandfooterPage->addChild("panel20",$panel20);

$mobile_separator_color = new QodeField("color","mobile_separator_color","","Mobile Menu Item Separator Color","Choose color for mobile menu horizontal separators");
$panel20->addChild("mobile_separator_color",$mobile_separator_color);
$mobile_background_color = new QodeField("color","mobile_background_color","","Mobile Header & Menu Background Color","Choose color for mobile header&menu background");
$panel20->addChild("mobile_background_color",$mobile_background_color);


$panel9 = new QodePanel("Header Button Icons","header_buttons_panel");
$headerandfooterPage->addChild("panel9",$panel9);
$header_buttons_color = new QodeField("color","header_buttons_color","","Color","Choose a color for Header icons");
$panel9->addChild("header_buttons_color",$header_buttons_color);
$header_buttons_hover_color = new QodeField("color","header_buttons_hover_color","","Hover Color","Choose a hover color for Header icons");
$panel9->addChild("header_buttons_hover_color",$header_buttons_hover_color);
$header_buttons_font_size = new QodeField("text","header_buttons_font_size","","Icon Size (px)","Choose a size for Header icons", array(), array("col_width" => 3));
$panel9->addChild("header_buttons_font_size",$header_buttons_font_size);
$header_buttons_size = new QodeField("select","header_buttons_size","normal","Side Menu / Fullscreen Menu Icon Size","Choose a size for Side Menu / Fullscreen Menu icons", array( "normal" => "Normal",
       "medium" => "Medium",
       "large" => "Large"
      ));
$panel9->addChild("header_buttons_size",$header_buttons_size);

<?php
$example_url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] .'/';
?>

<?php
if (strpos($example_url,'bridge/') || (!strpos($example_url,'bridge2/') && !strpos($example_url,'bridge3/') && !strpos($example_url,'bridge4/') && !strpos($example_url,'bridge5/') && !strpos($example_url,'bridge6/') && !strpos($example_url,'bridge7/') && !strpos($example_url,'bridge8/') && !strpos($example_url,'bridge9/') && !strpos($example_url,'bridge10/') && !strpos($example_url,'bridge11/') && !strpos($example_url,'bridge12/') && !strpos($example_url,'bridge13/') && !strpos($example_url,'bridge14/') && !strpos($example_url,'bridge15/') && !strpos($example_url,'bridge16/') && !strpos($example_url,'bridge17/') && !strpos($example_url,'bridge18/') && !strpos($example_url,'bridge19/') && !strpos($example_url,'bridge20/') && !strpos($example_url,'bridge21/') && !strpos($example_url,'bridge22/') && !strpos($example_url,'bridge23/') && !strpos($example_url,'bridge24/') && !strpos($example_url,'bridge25/') && !strpos($example_url,'bridge26/') && !strpos($example_url,'bridge27/') && !strpos($example_url,'bridge28/') && !strpos($example_url,'bridge29/') && !strpos($example_url,'bridge30/') && !strpos($example_url,'bridge31/') && !strpos($example_url,'bridge32/') && !strpos($example_url,'bridge33/') && !strpos($example_url,'bridge34/') && !strpos($example_url,'bridge35/') && !strpos($example_url,'bridge36/') && !strpos($example_url,'bridge37/') && !strpos($example_url,'bridge38/') && !strpos($example_url,'bridge39/') && !strpos($example_url,'bridge40/') && !strpos($example_url,'bridge41/') && !strpos($example_url,'bridge42/') && !strpos($example_url,'bridge43/') && !strpos($example_url,'bridge44/') && !strpos($example_url,'bridge45/') && !strpos($example_url,'bridge46/') && !strpos($example_url,'bridge47/') && !strpos($example_url,'bridge48/') && !strpos($example_url,'bridge49/'))){
?>
<div id="panel" class="default left" style="margin-left: -207px;">
   <div id="panel-admin">
		<h6>Theme Options</h6>
		<div class="panel-admin-box">
            <div class="alt_menu">
                <p class="accordion_toolbar_header ui-state-active">Alternative Menu <i class="fa fa-angle-right"></i> <span class="new">NEW</span></p>
                <div class="accordion_toolbar_content">
                    <ul id="tootlbar_alternative_menu" class="choose_option">
                        <li data-value="side">Side Menu</li>
                        <li data-value="fullscreen">Fullscreen Menu</li>
                    </ul>
                    <div class="alternative_menu_preview"><img alt="&nbsp;" src="http://demo.qodeinteractive.com/bridge/demo_images/alt_menu.jpg"></div>
                </div>
            </div>
            <div class="accordion_toolbar">
				<p class="accordion_toolbar_header">Header Type <i class="fa fa-angle-right"></i></p>
				<div class="accordion_toolbar_content">
					<ul id="tootlbar_header_type" class="choose_option">
						<li data-value="normal">Normal</li>
						<li data-value="big">Big</li>
					</ul>
				</div>
				<p class="accordion_toolbar_header">Header Top Menu <i class="fa fa-angle-right"></i></p>
				<div class="accordion_toolbar_content">
					<ul id="tootlbar_header_top_menu" class="choose_option">
						<li data-value="yes">Yes</li>
						<li data-value="no">No</li>
					</ul>
				</div>
				<p class="accordion_toolbar_header">Page Transitions <i class="fa fa-angle-right"></i></p>
				<div class="accordion_toolbar_content">
					<ul id="tootlbar_page_transitions" class="choose_option">
						<li data-value="no">No animation</li>
						<li data-value="1">Up/Down</li>
						<li data-value="2">Fade</li>
						<li data-value="3">Up/Down (In) / Fade (Out)</li>
						<li data-value="4">Left/Right</li>
					</ul>
				</div>
				<p class="accordion_toolbar_header">Boxed Layout <i class="fa fa-angle-right"></i></p>
				<div class="accordion_toolbar_content">
					<ul id="tootlbar_boxed" class="choose_option">
						<li data-value="boxed">Yes</li>
						<li data-value="">No</li>
					</ul>
				</div>
				<p class="accordion_toolbar_header">Choose Background <i class="fa fa-angle-right"></i></p>
				<div class="accordion_toolbar_content">
					<ul id="tootlbar_background">
						<li data-value="background1">Background 1</li>
						<li data-value="background2">Background 2</li>
						<li data-value="background3">Background 3</li>
					</ul>
				</div>
				<p class="accordion_toolbar_header">Choose Pattern <i class="fa fa-angle-right"></i></p>
				<div class="accordion_toolbar_content">
					<ul id="tootlbar_pattern">
						<li data-value="pattern11">Retina Wood</li>
						<li data-value="pattern12">Retina Wood Grey</li>
						<li data-value="pattern1">Transparent</li>
						<li data-value="pattern3">Cubes</li>
						<li data-value="pattern4">Diamond</li>
						<li data-value="pattern5">Escheresque</li>
						<li data-value="pattern10">Whitediamond</li>
					</ul>
				</div>
				<p class="accordion_toolbar_header">Colors <i class="fa fa-angle-right"></i></p>
				<div class="accordion_toolbar_content">
					<div id="tootlbar_colors">
						<ul>
							<li><div class="color active color1" data-color="#1abc9c" style="background-color:#1abc9c;"></div></li>
							<li><div class="color color2" data-color="#e74c3c" style="background-color:#e74c3c;"></div></li>
							<li><div class="color color3" data-color="#9b59b6" style="background-color:#9b59b6;"></div></li>
							<li><div class="color color4" data-color="#3498db" style="background-color:#3498db;"></div></li>
						</ul>
					</div>
				</div>
				<p class="accordion_toolbar_header">Footer type <i class="fa fa-angle-right"></i></p>
				<div class="accordion_toolbar_content">
					<ul id="tootlbar_footer_type" class="choose_option">
						<li data-value="regular">Regular</li>
						<li data-value="unfold">Unfold</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<a class="open" href="#"><span><i class="fa fa-cog"></i></span></a>
</div>
<?php
}
if (strpos($example_url,'bridge2/')){
?>
    <div id="panel" class="default right" style="margin-right: -207px;">
        <div id="panel-admin">
            <h6>Theme Options</h6>
            <div class="panel-admin-box">
                <div class="accordion_toolbar">
                    <!--				<p class="accordion_toolbar_header">Header Type <i class="fa fa-angle-right"></i></p>-->
                    <!--				<div class="accordion_toolbar_content">-->
                    <!--					<ul id="tootlbar_header_type" class="choose_option">-->
                    <!--						<li data-value="normal">Normal</li>-->
                    <!--						<li data-value="big">Big</li>-->
                    <!--					</ul>-->
                    <!--				</div>-->
                    <!--				<p class="accordion_toolbar_header">Header Top Menu <i class="fa fa-angle-right"></i></p>-->
                    <!--				<div class="accordion_toolbar_content">-->
                    <!--					<ul id="tootlbar_header_top_menu" class="choose_option">-->
                    <!--						<li data-value="yes">Yes</li>-->
                    <!--						<li data-value="no">No</li>-->
                    <!--					</ul>-->
                    <!--				</div>-->
                    <p class="accordion_toolbar_header">Page Transitions <i class="fa fa-angle-right"></i></p>
                    <div class="accordion_toolbar_content">
                        <ul id="tootlbar_page_transitions" class="choose_option">
                            <li data-value="0">No animation</li>
                            <li data-value="1">Up/Down</li>
                            <li data-value="2">Fade</li>
                            <li data-value="3">Up/Down (In) / Fade (Out)</li>
                            <li data-value="4">Left/Right</li>
                        </ul>
                    </div>
                    <p class="accordion_toolbar_header">Boxed Layout <i class="fa fa-angle-right"></i></p>
                    <div class="accordion_toolbar_content">
                        <ul id="tootlbar_boxed" class="choose_option">
                            <li data-value="boxed">Yes</li>
                            <li data-value="">No</li>
                        </ul>
                    </div>
                    <p class="accordion_toolbar_header">Choose Background <i class="fa fa-angle-right"></i></p>
                    <div class="accordion_toolbar_content">
                        <ul id="tootlbar_background">
                            <li data-value="background1">Background 1</li>
                            <li data-value="background2">Background 2</li>
                            <li data-value="background3">Background 3</li>
                        </ul>
                    </div>
                    <p class="accordion_toolbar_header">Choose Pattern <i class="fa fa-angle-right"></i></p>
                    <div class="accordion_toolbar_content">
                        <ul id="tootlbar_pattern">
                            <li data-value="pattern11">Retina Wood</li>
                            <li data-value="pattern12">Retina Wood Grey</li>
                            <li data-value="pattern1">Transparent</li>
                            <li data-value="pattern3">Cubes</li>
                            <li data-value="pattern4">Diamond</li>
                            <li data-value="pattern5">Escheresque</li>
                            <li data-value="pattern10">Whitediamond</li>
                        </ul>
                    </div>
                    <p class="accordion_toolbar_header">Colors <i class="fa fa-angle-right"></i></p>
                    <div class="accordion_toolbar_content">
                        <div id="tootlbar_colors">
                            <ul>
                                <li><div class="color active color1" data-color="#1abc9c" style="background-color:#1abc9c;"></div></li>
                                <li><div class="color color2" data-color="#e74c3c" style="background-color:#e74c3c;"></div></li>
                                <li><div class="color color3" data-color="#9b59b6" style="background-color:#9b59b6;"></div></li>
                                <li><div class="color color4" data-color="#3498db" style="background-color:#3498db;"></div></li>
                            </ul>
                        </div>
                    </div>
                    <p class="accordion_toolbar_header">Footer type <i class="fa fa-angle-right"></i></p>
                    <div class="accordion_toolbar_content">
                        <ul id="tootlbar_footer_type" class="choose_option">
                            <li data-value="regular">Regular</li>
                            <li data-value="unfold">Unfold</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="open" href="#"><span><i class="fa fa-cog"></i></span></a>
    </div>
<?php
}
?>
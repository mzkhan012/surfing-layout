<!DOCTYPE HTML>
<html lang="en">
<head>



<title><?php echo Configure::read('sitetitle'); ?></title>
<?php  //echo $this->Html->meta('favicon.ico',$this->webroot.'img/favicon.ico',array('type' => 'icon')); ?>
<!--<title><?php //echo $title_for_layout . ' :: Surfing' ?></title>-->
<?php //echo $this->Html->meta('icon', '/favicon.ico'); ?>
<?php echo $this->Html->meta('icon', $this->Html->url('/favicon.ico')); ?>

<?php echo $this->Html->css(array('style','demo','reset','calendar','custom_2'));?>
<?php echo $this->Html->script(array('jquery.min','slides.min.jquery','demofunction','modernizr.custom.63321','jquery.calendario','data'));?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
 <!------   Slider CSS START ------>
<!--<link href="css/demo.css" rel="stylesheet" type="text/css">
--> <!------   Clander CSS START ------>
 <!------   Main CSS START ------>
<!--<link href="css/style.css" rel="stylesheet" type="text/css">
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--<script src="js/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/modernizr-latest.js" type="text/javascript"></script>-->
<!------   Slide Java script ------>
    
    <!------   Calander Java script START ------>
    
    	
		
		<script type="text/javascript">	
			$(function() {
			
				var transEndEventNames = {
						'WebkitTransition' : 'webkitTransitionEnd',
						'MozTransition' : 'transitionend',
						'OTransition' : 'oTransitionEnd',
						'msTransition' : 'MSTransitionEnd',
						'transition' : 'transitionend'
					},
					transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
					$wrapper = $( '#custom-inner' ),
					$calendar = $( '#calendar' ),
					cal = $calendar.calendario( {
						onDayClick : function( $el, $contentEl, dateProperties ) {

							if( $contentEl.length > 0 ) {
								showEvents( $contentEl, dateProperties );
							}

						},
						caldata : codropsEvents,
						displayWeekAbbr : true
					} ),
					$month = $( '#custom-month' ).html( cal.getMonthName() ),
					$year = $( '#custom-year' ).html( cal.getYear() );

				$( '#custom-next' ).on( 'click', function() {
					cal.gotoNextMonth( updateMonthYear );
				} );
				$( '#custom-prev' ).on( 'click', function() {
					cal.gotoPreviousMonth( updateMonthYear );
				} );

				function updateMonthYear() {				
					$month.html( cal.getMonthName() );
					$year.html( cal.getYear() );
				}

				// just an example..
				function showEvents( $contentEl, dateProperties ) {

					hideEvents();
					
					var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>' ),
						$close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );

					$events.append( $contentEl.html() , $close ).insertAfter( $wrapper );
					
					setTimeout( function() {
						$events.css( 'top', '0%' );
					}, 25 );

				}
				function hideEvents() {

					var $events = $( '#custom-content-reveal' );
					if( $events.length > 0 ) {
						
						$events.css( 'top', '100%' );
						Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();

					}

				}
			
			});
		</script> <!------   Calander Java script END  ------>

</head>

<body>
<div id="wrapper">
<!-- start html block -->
    <?php echo $this->element('header');?>

    <?php echo $this->element('menu');?>
	<section class="banner">
     <?php echo $this->element('slide');?>
    </section>

  <section class="content">
    
    <!-- post 1 -->
    <?php echo $this->element('article');?>
    <!-- end post 1 -->
    
    <!-- post 1 -->
    <article class="post">
    <div class="post-inner">
	<div class="latest-news">
        <h1 class="text-title"><?php
  echo $this->Html->link(("Latest News"),"#");?><!--<a href="#">Latest News</a>--></h1>
        <div class="latest-inner">
        <div class="dated-img">
        	<?php
  echo $this->Html->link($this->Html->image("latestnews_1.jpg", array("alt" => "img-1", "title" => "img", "width" => "124", "height" => "124"   )), "#", array('escape' => false));?>
        </div>
        <div class="dated">
        <h4 class="date-title"><?php echo $this->Html->link(("L15 Mar, 2013"),"#");?></h4>
        <p class="date-description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        </div>
       <div class="latest-inner">
        <div class="dated-img">
        	<?php
  echo $this->Html->link($this->Html->image("latestnews_1.jpg", array("alt" => "img-1", "title" => "img", "width" => "124", "height" => "124"   )), "#", array('escape' => false));?>
        </div>
        <div class="dated">
        <h4 class="date-title"><?php echo $this->Html->link(("L15 Mar, 2013"),"#");?></h4>
        <p class="date-description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        </div> 
        <div class="latest-inner">
        <div class="dated-img">
        	<?php
  echo $this->Html->link($this->Html->image("latestnews_1.jpg", array("alt" => "img-1", "title" => "img", "width" => "124", "height" => "124"   )), "#", array('escape' => false));?>
        </div>
        <div class="dated">
        <h4 class="date-title"><?php echo $this->Html->link(("L15 Mar, 2013"),"#");?></h4>
        <p class="date-description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        </div>
              <p class="seeallnews"><?php echo $this->Html->link(("L15 Mar, 2013"),"#");?></p>
        </div>
        <div class="chempion-news">
        <h1 class="text-title"><a href="#">Championship</a></h1> 
        <div class="chempion-news-inner">   
        <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio.</p>
<p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio.</p>
<p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio.</p>
	<h2 class="peoplesay">People say</h2>
    <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio.</p>
<p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio.</p>
<h3 class="deatils"><a href="#">- Set magna ipsum dolo</a></h3>
        </div>
        </div>
        <?php echo $this->element('calender');?>
        </div>
    </article>
    <!-- end post 1 -->

 </section>
    <?php echo $this->element('footer');?>

<!-- end html block -->

</div>
</body>


</html>


<section id="masthead" role="banner" class="bod-st">

  <h1>
    E-Commerce DEVELOPMENT <br />
	<br>
	<p  style="font-size:10px;" class="typewrite pulse" data-period="2000" data-type='[ "e-Commerce Development",   " " ]'>
   
  </p>
 
  </h1>
  
 
  <canvas id="nodes"></canvas>

</section>
<div class="clearfix">&nbsp;</div>
<section class="mar-mi140">
<div class="container-sty card " >
	</br>
	<h2 class="head-ing">e-Commerce Development</h2>
	<div class="row justify-content-md-center" >
		
		<p class="col-md-11">Electronic Commerce is the buying and selling of products and goods, or transmitting of data or funds majorly on the internet. There are six types of eCommerce they are: Business to Customer (B2C), Business to Business (B2B), Customer to Customer (C2C), Customer to Business (C2B), Business to Government (B2G) and Mobile Commerce (m-commerce). Mobile  commerce (m-commerce) is particularly done through mobile only.  We provide services for existing ecommerce sites, and develop new ecommerce secure  websites with highly secured payment transactions for our interested customers. 

 </p>

	</div>
		


	
</section>
<div class="clearfix">&nbsp;</div>
<!--
<div class="" style="padding:0px 30px;">
	<section  id="commerce_price"class="content_wrap    jarallax bord-t4" data-jarallax='{"speed": 0.2}' style="background-image: url('<?php echo base_url(); ?>assets/vendor/img/devpbac2.png'); height: 100%;">
	
  <div class="row  text-center">
            <div class="col-sm-12 mb-20 pt-30">

                <h2>
                    <span class="tit bg-dark" >
									E-Commerce <span class="des_t">  Development 
                    </span> Pricing
                </h2>


            </div>
			

        </div>
		  <div class="clearfix">&nbsp;</div>
  
  <ul class="box">
 
    <li>
      <div class="circle">
        <div class="front front-popular">
          <div class="title color-1-font fa fa-hand-o-down"></div>
          <div class="price color-1-font"><span class="total">Basic	</span></div>
          <div class="description">Professional<pre class="price-ani ">₹ 69,999</pre></div>
         
        </div>
        <div class="popular color-1-font  fa fa-hand-o-right"></div>
        <div class="back color-1-bg info">
          <div class="title">Basic</div>
          <div class="description">
            <h3>₹ 69,999</h3>
            <a href="<?php echo base_url('ecom_overflow');?>" class="btn btn-danger">Read more..</a>
          </div>
        </div>
      </div>
    </li>
  
    <li>
      <div class="circle">
        <div class="front front-popular">
          <div class="title color-2-font fa fa-hand-o-down"></div>
          <div class="price color-2-font"><span class="total">Bronze</span></div>
          <div class="description">Big Business <pre class="price-ani ">₹ 1,39,999 </pre></div>
        </div>
        <div class="popular color-2-font fa fa-hand-o-right"></div>
        <div class="back color-2-bg info">
          <div class="title">Bronze</div>
          <div class="description">
            <h3>₹ 1,39,999 </h3>
            <a href="<?php echo base_url('ecom_overflow');?>" class="btn btn-danger">Read more..</a>
          </div>
        </div>
      </div>
    </li>
  
    <li>
      <div class="circle">
        <div class="front front-popular">
          <div class="title color-3-font fa fa-hand-o-down"></div>
          <div class="price color-3-font"><span class="total">Silver</span></div>
          <div class="description">Multi Vendor<pre class="price-ani ">₹ 1,79,999</pre></div>
        </div>
        <div class="popular color-3-font fa fa-hand-o-right"></div>
        <div class="back color-3-bg info">
          <div class="title">Silver</div>
          <div class="description">
         <h3>₹ 1,79,999</h3>
            <a href="<?php echo base_url('ecom_overflow');?>" class="btn btn-danger">Read more..</a>
          </div>
        </div>
      </div>
    </li>
  
    <li>
      <div class="circle">
        <div class="front front-popular">
          <div class="title color-4-font fa fa-hand-o-down"></div>
          <div class="price color-4-font"><span class="total">Gold</span></div>
          <div class="description">Advance Plan<pre class="price-ani ">₹ 2,39,999</pre></div>
        </div>
        <div class="popular color-4-font fa fa-hand-o-right"></div>
        <div class="back color-4-bg info">
          <div class="title">Gold</div>
          <div class="description">
             <h3>₹ 2,39,999</h3>
            <a href="<?php echo base_url('ecom_overflow');?>" class="btn btn-danger">Read more..</a>
          </div>
        </div>
      </div>
    </li>
	
  
  </ul>

</section>
</div>-->

   <script>
	$(".box").click(function(){
   $(this).box().toggleClass("circle");
});
     
   </script>

<script >$(function() {
 
  $("#typing-text").typed({
      strings: [
        "Project Services.", "Information Security.",
        "Systems Development.",
        "Consulting Services.",
        "Network & Infrastructure.",
        "Support & Operations.",
        "Architecture & IT Strategy.",
        "User Experience Design."
      ],
      typeSpeed: 100,
      backDelay: 2000,
      // loop
      loop: true,
  });
});

var canvas = document.getElementById('nodes')
    , context = canvas.getContext('2d')
    , pool = []
    , maxPoolSize = 500
    , distanceThreshold = 90
    , lastTimestamp = 0
    , nodeConnections = []
  ;

  canvas.width = window.innerWidth;
  canvas.height = 500;
  maxPoolSize = ( canvas.width * canvas.height ) / 6000

  function Boid(x,y) {
    this.id = Boid.lastId++;
    this.position = [x, y];
    this.size = 10;
    this.color = "red";
    this.velocity = [25-Math.random()*30, 25-Math.random()*80];
  };

  Boid.lastId = 0;

  Boid.prototype = {
    update: function(dt) {
      for (var i = 0; i < maxPoolSize; i++) {
        var boid = pool[i]
          , distance = this.distanceTo(boid)
        ;
        if(distance < distanceThreshold) {
          cohesion = []
        }
      };

      this.position[0] += this.velocity[0] * dt;
      this.position[1] += this.velocity[1] * dt;

      if(this.position[0] > canvas.width) {
        this.position[0] = 0;
        // this.velocity[0] *= -1;
      }

      if(this.position[1] > canvas.height) {
        this.position[1] = 0;
        // this.velocity[1] *= -1;
      }

      if(this.position[0] < 0) {
        this.position[0] = canvas.width;
        // this.velocity[0] *= -1;
      }
      if(this.position[1] < 0) {
        this.position[1] = canvas.height;
        // this.velocity[1] *= -1;
      };
    },

    distanceTo: function(boid) {
      var diff = vDiff(this.position, boid.position);
      return Math.abs(vLength(diff));
    },

    isConnectedTo: function(boid) {
      return nodeConnections[boid.id] == this.id
          || nodeConnections[this.id] == boid.id;
    },

    connectTo: function(boid) {
      nodeConnections[this.id] = boid.id;
      nodeConnections[boid.id] = this.id;
    },

    draw: function() {
      var pos = [round(this.position[0]), round(this.position[1])]
        , connections = 0;
      context.globalAlpha = 0.1;
      for (var i = 0; i < maxPoolSize; i++) {
        var boid = pool[i]
          , distance = this.distanceTo(boid)
          , opacity = 1-( distance/distanceThreshold )
        ;
        if(distance <= distanceThreshold) {
          connections++;
          if(!this.isConnectedTo( boid )){
            this.connectTo(boid);
            context.beginPath();
            context.moveTo( pos[0], pos[1]);
            context.lineTo(round( boid.position[0] ), round( boid.position[1] ));
            context.stroke();
          }
        }
      };
      context.globalAlpha = 0.5;

      context.beginPath();
      context.arc(
        pos[0],
        pos[1],
        this.size*( connections/5 ),
        0, Math.PI*2
      );
      context.fill();


    }
  };

  function vDiff(a, b) {
    return [ a[0] - b[0], a[1] - b[1] ];
  }

  function vLength(a) {
    return Math.sqrt( ( a[0]*a[0] ) + (a[1]*a[1]) );
  }

  function round(i) { return 0.5 + i | 0 }
  function draw(timestamp) {
    var dt = ( timestamp - (lastTimestamp || timestamp) ) / 1000;
    lastTimestamp = timestamp;

    context.clearRect(0,0,canvas.width, canvas.height);

    for (var i = 0; i < maxPoolSize; i++) {
      var boid = pool[i];
      boid.update(dt);
      boid.draw();
    }

    window.requestAnimFrame(draw);
  }

  window.requestAnimFrame = (function(){ return  window.requestAnimationFrame       || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame    || window.oRequestAnimationFrame      || window.msRequestAnimationFrame     || function(/* function */ callback, /* DOMElement */ element){ window.setTimeout(callback, 1000 / 60); }; })();

      for (var i = 0; i < maxPoolSize; i++) {
        pool.push(
          new Boid(Math.random()*canvas.width, Math.random()*canvas.height)
        );
      }
      document.body.appendChild(canvas);
      window.requestAnimFrame(draw);

//# sourceURL=pen.js
</script>             
<script>  
//made by vipul mirajkar thevipulm.appspot.com
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap"> '+this.txt+'</span>';

        var that = this;
        var delta = 150 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .pulse { border-right: 2px solid grey}";
        document.body.appendChild(css);
    };           
</script>             

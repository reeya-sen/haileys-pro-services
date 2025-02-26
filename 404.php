<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package broadbridge
 */

get_header();
?>
  <style>
        /* thanku page css start */

.thanku-text .text-wrapper-6 {
  color: #18212E;
  font-size: 150px;
  font-weight: 800;
  line-height: 1.2;
  margin: auto;
  letter-spacing: -5px;
  margin-bottom: 15px;
}
.thanku-sec {
  height: calc(100vh - 262px);
  display: flex;
  justify-content: center;
  align-items: center;
  background: url(./img/bg-icons.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.thanku-wrap {
  max-width: 700px;
  width: 100%;
}
.thanku-text {
  text-align: center;
}

.thanku-text .frame-27.btn {
  padding: 20px 20px 20px 32px;
  margin-top: 50px;
}
.thanku-text .frame-27.btn {
  padding: 20px 20px 20px 32px;
  margin-top: 50px;
}
p.normal-para {
    color: var(--Black-Main, #18212E);
    font-family: Inter;
    font-size: 24px;
    font-style: normal;
    font-weight: 400;
    line-height: 160%;
}



.oops-text {
    color: var(--Black-Main, #18212E);
    font-family: Inter;
    font-size: 30px;
    font-style: normal;
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: -0.64px;
    margin-bottom: 10px;
}

@media(max-width:1670px){
    .thanku-sec {
    height: calc(100vh - 227px);
}
}


@media(max-width:1200px){
    .thanku-text .text-wrapper-6 {
    color: #18212E;
    font-size: 90px;
    font-weight: 800;
    line-height: 1.2;
    margin: auto;
    letter-spacing: -5px;
    margin-bottom: 10px;
}

p.normal-para {
    font-size: 22px;
}


.oops-text {
    font-size: 25px;
}
}
@media(max-width:991px){
    .thanku-text .text-wrapper-6 {
    font-size: 75px;
    letter-spacing: -2px;
}
.thanku-text .frame-27.btn {
    padding: 16px 20px 14px 32px;
    margin-top: 40px;
}




.oops-text {
    font-size: 22px;
}
}
@media(max-width:767px){
    .thanku-sec {
    height: 550px;
}

.thanku-wrap {
    padding: 0 20px;
}
.thanku-text .text-wrapper-6 {
    font-size: 70px;
}
p.normal-para {
    font-size: 20px;
}


.oops-text {
    font-size: 20px;
}
}
@media(max-width:575px){

.thanku-text .text-wrapper-6 {
    font-size: 60px;
}
p.normal-para {
    font-size: 18px;
}
.thanku-text .frame-27.btn {
    padding: 16px 20px 14px 16px;
    margin-top: 30px;
}
.oops-text {
    font-size: 18px;
}
}

/* thanku page css end */
    </style>




   <div class="thanku-sec">
         <div class="thanku-wrap">
            <div class="thanku-text">
                <!-- <img class="img-2" src="images/icons8-check-mark-2.svg"> -->
                 <div class="oops-text">
                    ERROR
                 </div>
                <div class="text-wrapper-6">404</div>
                <p class="normal-para">The page you are trying to access doesn't exist or has been moved.
                    Try going back to our homepage.</p>

                    <a href="/" class="frame-27 btn">
						<div class="book-a-professional">Back to homepage</div>
					</a>
            </div>  
         </div>
      </div>













<?php get_footer(); ?>
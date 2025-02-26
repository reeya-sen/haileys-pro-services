<?php /* Template Name:thankyou pdf */ ?>

<?php get_header(); ?>
<style>
        /* thanku page css start */

.thanku-text .text-wrapper-6 {
  color: #18212E;
  font-size: 110px;
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
.thanku-text img.img-2 {
  height: 90px;
  width: 90px;
  margin-bottom: 20px;
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
.thanku-text img.img-2 {
    height: 85px;
    width: 85px;
    margin-bottom: 10px;
}
p.normal-para {
    font-size: 22px;
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
}
@media(max-width:767px){
    .thanku-sec {
    height: 550px;
}
.thanku-text img.img-2 {
    height: 80px;
    width: 80px;
    margin-bottom: 8px;
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
}
@media(max-width:575px){
    .thanku-text img.img-2 {
    height: 70px;
    width: 70px;
    margin-bottom: 5px;
}
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
}
/* thanku page css end */
    </style>
 <div class="thanku-sec">
         <div class="thanku-wrap">
            <div class="thanku-text">
                <img class="img-2" src="https://service.fromdusttoglory.com/wp-content/uploads/2025/01/icons8-check-mark-2.svg">
                <div class="text-wrapper-6">Thank you</div>
                <p class="normal-para">Your submission has been received.
                    We will be in touch and contact you soon.</p>

                    <a href="https://service.fromdusttoglory.com/wp-content/uploads/2025/02/Handyman-pdf-1.pdf" class="frame-27 btn" target="blank">
						<div class="book-a-professional">Download Our Guide</div>
					</a>
            </div>  
         </div>
      </div>
<?php get_footer(); ?>
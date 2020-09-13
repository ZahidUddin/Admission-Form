<style>
    .links{
  grid-area: links;
}
.social{
  grid-area: social;
}
.subscribe{
  grid-area: subscribe;
}
footer{
  display: grid;
  grid-template-areas:
        'links' 'subscribe' 'social'; 
  text-align: center;
  font-family: 'Open Sans', sans-serif;
}
@media (min-width: 43em){
  footer{
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-template-rows: auto;
      grid-template-areas: 
        'links subscribe'
        'social social';
    }
}
@media (min-width: 62em){
  footer{
      display: grid;
      grid-template-columns: 1fr 2fr 1fr;
      grid-template-areas: 'links social subscribe';
  }
}
.box{
    background: linear-gradient(90deg, #26245B, #A14DC0);
    padding: 1em;
    margin: .5em;
    color: #fff;
    transition: color 4s;
    border: 4px solid rgba(79, 3, 3, 0.1);
    border-radius: 20px;
    box-shadow:
        -5px -5px 5px rgba(255, 255, 255, 0.4),
        5px 5px 5px rgba(0, 0, 0, 0.2),
        inset -5px -5px 5px rgba(255, 255, 255, 0.4),
        inset 5px 5px 5px rgba(0, 0, 0, 0.2);
}
.links a{
  display: block;
  text-decoration: none;
  font-size: 1.2em;
  color: #fff;
  transition: color 0.3s;
}
.links a:hover{
  color: #960296;
}
.links h2{
  margin-bottom: 2em;
}
.social a{
    height: 1.5em;
    width: 1.5em;
  background: rgba(255,255,255,0.6);
    border-radius: 10px;
  font-size: 2em; 
  padding: 0.2em;
    border: 2px solid rgba(79, 3, 3, 0.1);
    box-shadow:
        -5px -5px 5px rgba(255, 255, 255, 0.4),
        5px 5px 5px rgba(0, 0, 0, 0.2),
        inset -5px -5px 5px rgba(255, 255, 255, 0.4),
        inset 5px 5px 5px rgba(0, 0, 0, 0.2);
}
.fa{
  text-decoration: none;
  margin: 0.5em;
  border: none;
  color: #60584d;
  transition: all .3s ease-in-out;
}
.fa-facebook:hover{
  color: #3B5998;
    background: linear-gradient(145deg, #e0e9f3, #bcc4cc);
    box-shadow:
        -5px -5px 5px rgba(255, 255, 255, 0.4),
        5px 5px 5px rgba(0, 0, 0, 0.2);
}
.fa-twitter:hover{
  color: #55ACEE;
    background: linear-gradient(145deg, #e0e9f3, #bcc4cc);
    box-shadow:
        -5px -5px 5px rgba(255, 255, 255, 0.4),
        5px 5px 5px rgba(0, 0, 0, 0.2);
}
.fa-youtube:hover{
  color: #bb0000;
    background: linear-gradient(145deg, #e0e9f3, #bcc4cc);
    box-shadow:
        -5px -5px 5px rgba(255, 255, 255, 0.4),
        5px 5px 5px rgba(0, 0, 0, 0.2);
}
.fa-instagram:hover{
  color: #125688;
    background: linear-gradient(145deg, #e0e9f3, #bcc4cc);
    box-shadow:
        -5px -5px 5px rgba(255, 255, 255, 0.4),
        5px 5px 5px rgba(0, 0, 0, 0.2);
}
.fa:active{
  background: #e4e2e2;
  box-shadow:
        inset 5px 5px 5px rgba(0, 0, 0, 0.2),
        inset -5px -5px 5px rgba(255, 255, 255, 0.4);
}

.subscribe {
  text-align: left !important;
}

.subscribe i {
  display: relative;
  font-size: 1.2em;
  color: #fff;
  transition: color 0.3s;
  margin: 5px;
}
.subscribe i.fa:active {
  background: none;
}

.subscribe p {
  margin: 5px !important;
}

.hr{
  margin-top: 1.5em;
  border: 1px solid #960296;
}
#copyright{
  color: #fff;
  margin-top: 1.5em;
}
#copyright a{
  text-decoration: none;
  font-size: 1.2em;
  color: #fff;
  transition: color 0.3s;
  border: none;
  box-shadow: none;
  background: none;
}

#copyright a:hover {
   color: #960296;
}
</style>

<footer class="mt-5">
    <div class="box links">
      <img src="https://nubtkhulna.ac.bd/assets/images/logo_W.png" width=100% target="_blank">
    <p>Northern University of Business and Technology Khulna</p>
      <a href="https://nubtkhulna.ac.bd/programs" target="_blank">ADMISSION PROGRAMS</a>
    <a href="http://admission.nubtk.ac.bd/login/" target="_blank">ADMISSION PANEL</a> 
    <a href="http://admission.nubtk.ac.bd/login/" target="_blank">PAYMENT INSTRUCTION</a> 
      </div>   
  <div class="box social">
    <h2>Follow Us On Social Media</h2>
    <a href="https://www.facebook.com/nubtkhulna.ac.bd/" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-youtube"></a>
    <a href="#" class="fa fa-instagram"></a>
    <hr class="hr">
    <p id="copyright">&copy; NUBTKHULNA 2020. All right reserved.  Created by <a href="http://nub.ac.bd/" target="_blank">NUB IT</a><p>
  </div>
  <div class="box subscribe">
      <h2>Address</h2>
    <p><i class="fa fa-address-card" aria-hidden="true"></i> Shib Bari Circle, Sonadanga, Khulna-9100</p>
    <p><i class="fa fa-phone" aria-hidden="true"></i> +88 01755 514 662,
01755 514 663</p>
    <p><i class="fa fa-envelope" aria-hidden="true"></i> info@nubtkhulna.ac.bd</p>
    <p><i class="fa fa-globe" aria-hidden="true"></i> https://nubtkhulna.ac.bd</p>
  </div>
  </footer>

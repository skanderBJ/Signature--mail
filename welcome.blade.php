<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title> Signature Marker </title>
    <meta name="description" content="">

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <!-- custom scripts -->
      
      <script src="/javascripts/script.min.js" type="text/javascript"></script>

  </head>

   <body>
        <script src="{{ asset('js/sig.js')}}" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">

         <header>
           <a href="http://localhost/SigMarker/public/">
             <img class="img1" src="images/logo4.png" >
            </a>
         </header>
    <main> 
     <section >
     
      
                

      <div class="container content-wrapper">
  <!-- content starts here -->
  <div >
    <!-- title -->
   
    <div >
      <h4> <b>Create your mail signature</b></h4>
     
    </div>

   
    <div class="row ">
     <div class="col">

       <!-- content Basic-->
                <div class="tab">
         
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#basic">Basic</a></li>
                    <li><a href="#social">Social</a></li>
                     </ul>
    
        <div class="tab-content">
          <div id="basic" class="tab-pane fade in active">
   
               <form role="form" class="email-sig-form">
                <div class="row">

                  <div class="col-xs-6">
                    <div class="form-group">
                    
                      <b>  <label for="nameInputField">Full  Name</i></label></b>
                      <input type="text" class="form-control" id="nameInputField" placeholder="Full Name">
                    </div>
                    </div>
                    <div class="col-xs-6">
                     <div class="form-group">
                      <b> <label for="titleInputField"> Job</label></b>
                      <input type="test" class="form-control" id="titleInputField" placeholder="Example">
                     </div>
                    </div>
                  </div>
                  <div class="row">
                   <div class="col-xs-6">
                    <div class="form-group">
                      <b><label for="emailInputField">Email Address</label></b>
                      <input type="email" class="form-control" id="emailInputField" placeholder="Your mail">
                     </div>
                   </div>
                   <div class="col-xs-6">
                    <div class="form-group">
                     <b> <label for="companyInputField">Company Name</label>
                     </b>
                      <input type="text" class="form-control" id="companyInputField" placeholder="Your campany Name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="form-group">
                     <b> <label for="mobileInputField">N°Phone</label></b>
                      <input type="tel" class="form-control" id="mobileInputField" placeholder="Your N°Phone">
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="form-group">
                      <b><label for="websiteInputField">Website</label></b>
                      <input type="text" class="form-control" id="websiteInputField" placeholder="http://">
                    </div>
                  </div>
                </div>
                
                 <div clas="col-xs-6">
                <div class="form-group">
                  <b><label for="addressInputField">Your Location</label></b>
                  <input type="text" class="form-control" id="addressInputField" placeholder="Street , statement">
                </div>
                </div>

                
                  <label for="photoInputField">Photo</label>
                 <input accept="image/*" type='file' id="imgInp" />
                   
               
                </div>
               
                </form>
             
                  <!-- end of result basic-->

                  <!-- content Social-->
             <div id="social" class="tab-pane fade">
     
	          <div class="tab-content" >
            
               <form role="form" class="email-sig-form">
                <div class="row">

                  <div class="col-xs-6">
                    <div class="form-group">
                      <label for="twitterURLInputField">Twitter</label>
                      <input type="text" class="form-control" id="twitterURLInputField" placeholder="">
                    </div>
                    </div>
                    <div class="col-xs-6">
                     <div class="form-group">
                      <label for="facebookURLInputField">Facebook</label>
                      <input type="test" class="form-control" id="facebookURLInputField">
                     </div>
                    </div>
                  </div>
                  <div class="row">
                   <div class="col-xs-6">
                    <div class="form-group">
                      <label for="gplusURLInputField">Google Plus</label>
                      <input type="text" class="form-control" id="gplusURLInputField">
                    </div>
                    </div>
                    <div class="col-xs-6">
                     <div class="form-group">
                       <label for="linkedinURLInputField">Linkedin</label>
                      <input type="email" class="form-control" id="linkedinURLInputField" placeholder="">
                     </div>
                    </div>
                  </div>
                
                 <div class="row">
                   <div class="col-xs-6">
                    <div class="form-group">
                       <label for="instagramURLInputField">Instagram</label>
                      <input type="test" class="form-control" id="instagramURLInputField">
                    </div>
                    </div>
                    <div class="col-xs-6">
                     <div class="form-group">
                      <label for="githubURLInputField">GitHub</label>
                      <input type="test" class="form-control" id="githubURLInputField">
                     </div>
                    </div>
                  </div>
                <div class="row">
                   <div class="col-xs-6">
                    <div class="form-group">
                      <label for="vimeoURLInputField">Vimeo</label>
                      <input type="text" class="form-control" id="vimeoURLInputField">
                    </div>
                    </div>
                    <div class="col-xs-6">
                     <div class="form-group">
                      <label for="youtubeURLInputField">YouTube</label>
                      <input type="test" class="form-control" id="youtubeURLInputField">
                     </div>
                    </div>
                  </div>
                <div class="row">
                   <div class="col-xs-6">
                    <div class="form-group">
                      <label for="dribbleURLInputField">Dribble</label>
                      <input type="test" class="form-control" id="dribbleURLInputField">
                    </div>
                    </div>
                    <div class="col-xs-6">
                     <div class="form-group">
                      <label for="blogURLInputField">Blog/Website</label>
                      <input type="test" class="form-control" id="blogURLInputField">
                     </div>
                    </div>
                  </div>
                <!-- end of result Social-->
             </div>
               
             </form>
             <!-- end of result Social-->
            </div>
            </div>
  
  
    </div>     
    </div>
      
      
       
      <!-- end of result wrapper-->
      
      <div class="col">
        <div class="ads ads-right">
        
         </div>
    <div class="preview">
     <div class="col">
     <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Your Marker</h3>
          </div>
          <div class="panel-body">
            <div id="email-sig-box">
              <div class="sig1">
                <div class="pico1">
                  <img src="https://i0.wp.com/www.crazytips.org/wp-content/uploads/2018/06/PicsArt_06-17-05.23.35.jpg" width="65px" height="65px" id="sigPhoto">
                </div>
                <div class="details">
                  <p class="d1">
                    <strong><span id="sigName">Your Name</span></strong>
                    <span id="sigTitle">/Your Job</span><br>
                    <span id="sigEmail">Your Mail (Gmail ,Outlook , etc)</span>
                    <span id="sigMobile">/ Your N°phone</span>
                  </p>
                  <p class="d2" >
                    <strong><span id="sigCompany">Comapny Name.</span></strong><br>
                    <span id="sigWebsite">Your Website</span> <br>
                    <span id="sigAddress" class="d3">Your Street , Country</span>
                  </p>
                  <p class="d4">
                    <span id="twitterIcon">
                    <a href="#"><img src="https://e7.pngegg.com/pngimages/901/733/png-clipart-computer-icons-encapsulated-postscript-symbol-miscellaneous-cat-like-mammal-thumbnail.png" width="20px" height="20px"></a></span>

                    <span id="facebookIcon">
                    <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5yt4Dtuec_HHK9BXgFCX-2u2LSQ2DP2GI7pjAnR69hyjY8m5LK-RK1jn6gIIR48oEBwk&usqp=CAU" width="20px" height="20px"></a></span>

                    <span id="gplusIcon">
                    <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Google_Plus_logo_%282015-2019%29.svg/2048px-Google_Plus_logo_%282015-2019%29.svg.png" width="20px" height="20px"></a></span>

                    <span id="linkedinIcon">
                    <a href="#"><img src="https://image.similarpng.com/very-thumbnail/2021/01/Illustration-of-Linkedin-icon-on-transparent-background-PNG.png" width="20px" height="20px"></a></span>

                    <span id="instagramIcon">
                    <a href="#"><img src="https://stock.flashmode.tn/wp-content/uploads/2020/06/instagram-black-png-310.png" width="30px" height="30px"></a></span>

                    <span id="dribbleIcon"><a href="#">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/Font_Awesome_5_brands_dribbble.svg/1200px-Font_Awesome_5_brands_dribbble.svg.png" width="20px" height="20px"></a></span>

                    <span id="youtubeIcon"><a href="#">
                    <img src="https://spng.pngfind.com/pngs/s/591-5915021_clip-art-youtube-social-media-logos-hd-png.png" width="20px" height="20px"></a></span>

                    <span id="vimeoIcon"><a href="#">
                    <img src="https://logos-world.net/wp-content/uploads/2021/02/Vimeo-Emblem.png" width="20px" height="20px"></a></span>

                    <span id="githubIcon"><a href="#">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Octicons-mark-github.svg/1200px-Octicons-mark-github.svg.png" width="20px" height="20px"></a></span>

                    <span id="blogIcon"><a href="#">
                    <img src="https://www.freeiconspng.com/thumbs/blogger-logo-icon-png/blogger-logo-icon-png-10.png" width="20px" height="20px"></a></span>
                   
                  </p>
                </div>
              </div>
             </div>

             <div class="d-flex flex-row bd-highlight mb-3">
              <div class="p-2 bd-highlight">
              <button href="javascript:void(0)" class="btn btn-primary" id="getSourceBtn" data-toggle="modal" data-target="#viewSourceModel">View Source</button>
              </div>
              <div class="p-2 bd-highlight">
              <a href="javascript:void(0)" class="btn btn-success" id="highlightSelectBtn">Highlight & Select</a>
              </div>
              <div class="p-2 bd-highlight">
              <a href="javascript:void(0)" class="btn btn-info" id="toggleSetupInfo">Setup Instructions</a>
              </div>
             </div>
            
             
             
          </div>
        
          </div>
        <!-- modal content -->
        <div class="modal fade" id="viewSourceModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content selected">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Your Email Signature <small>Copy the HTML code below and paste it to your signature file</small></h4>
              </div>
              <div class="modal-body" id="modalContent">

              </div>
              <div class="modal-footer">
                <button type="button" id="selectAllButton" class="btn btn-primary">Select All</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


        <!-- end of modal content -->
        <div class="ads ads-left">
           <div id="setupInfo" class="set">
          <h4>Setup Instructions</h4>
          <ol>
            <li>Click on 'View Source' button above and select/copy the html snippet of your signature</li>
            <li>Paste that html snippet into a new file (e.g signature.html) and update your email client (e.g Mozilla Thunderbird) settings to use that newly created signature.</li>
          </ol>
          <p><strong>Note : For Gmail/Outlook</strong></p>
          <p>For some email prograns(gmail, Microsoft Outlook 2010 etc), simply copy using the <em>'Highlight & Select'</em> button, and paste it to <em>Settings -> Signature</em> and click on 'Save Changes' to apply the settings (for gmail or similar other email programs such as Outlook, Yahoo Mail etc unless you can directly paste html snippet there).</p>
        </div>
        </div>
        <span class="social-btn share-text"><strong>Share on</strong></span>
      <div class="row-md-3">
      <div class="col-md-2 ">
        <div class="social-share-buttons">
          
         
          
          <span class="social-btn twitter-btn"> 
          <a class="dec" href="https://twitter.com/share?url=https://signature-maker.net&text=Signature Maker" >Twitter</a></div>
         </span>
         
       </div> 
       <div class="col-md-3"> 
             <span class="social-btn facebook-btn">
              <a  class="dec1" href="http://www.facebook.com/sharer.php?u=https://signature-maker.net" >Facebook</a>
            </span>
          </div>

          <div class="col">
              <span class="social-btn gplus-btn">
              <a  class="dec2" href="https://plus.google.com/share?url=https://signature-maker.net" >Google Plus</a>
               </span>
          </div>
      </div>
     </div>
      </div>
      
   
  </div>
  </div>
</div>

 </section>
       </main>

       <footer>
        <div class="container">
           <h5>
            Copyright © 2020 <a href="#">Signature Maker</a> 
           </h5>
         </div>
       </footer>
         
</body>
</html>

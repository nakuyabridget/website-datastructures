<?php
include'connection.php';

function popup(){
	echo "<div id='popup_dev' class='overlay_dev'>
  <div class='popup_dev'>
    <div class='picture_dev'>&nbsp; &nbsp;&nbsp;&nbsp;Website Developer  <a class='close_dev' href='#'>&times;</a>
    </div>
       <div class='dev_content'><!-- wrapper begins here-->
       
       <div class='dev_photo'><img src='swift.png'></div>
       <div class='dev_details'>
       <div class='dev_profile'>Profile</div>
       <div class='dev_name'>The coding geeks</div>
       <div class='dev_name'>The A-team</div>
       <div class='dev_name'>The coders</div>
       <div class='dev_name'>Makerere university</div>
       <div class='dev_name'>+256 775 444 557</div>
       <div class='dev_name'>bnakuya7@gmail.com</div>

       
       </div>
       
       <div class='dev_others'>
            <div class='dev_profile'>Companies and Products </div>
			<div class='dev_companies'><img src='class.jpg'>
            Ultimate Nexus I.C.T Solutions</div>s
            <div class='dev_companies'><img src='blogging.jpg'>
            Malidadi Curry Powder</div>
            <div class='dev_companies'><img src='heap.gif'>
            Malidadi Tea<br> Leaves</div>
       
       </div>
       
       <div class='dev_talk'>
       <form>
       <input  type='text' placeholder='Talk to The Developer'>
       
       </form>
       
       </div>
       
        </div> 
</div>";
}
?>
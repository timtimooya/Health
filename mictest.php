<html>
	<?php
 $conn= mysqli_connect("localhost", "root", "" )or die (mysqli_error());
              mysqli_select_db ($conn, "health" )or die(mysqli_error());
			  ?>
	<script src="js/js.js" type="text/javascript"></script>
<div id="fees" class="tabcontentx">
				<form action="" name="sammmmd" id="sad">
                <select id="sammy">
                <option value="">choose hosoital</option>
					
                <?php
               $year=date('y');
                $qryd = mysqli_query($conn, "select * from place_district");
                if( mysqli_num_rows($qryd) > 0)
                {
                    while($res = mysqli_fetch_array($qryd))
                    {
                       	echo"<option>".$res['place']."</option>";
						
						$useridx=$res['id'];
						
                    }
                } 
                ?> 
            </select>
             
<script>
$('#sammy').change(function(){
var package = $(this).val();
$.ajax({
   type:'POST',
   data:{package:package},
   url:'getdistrict.php',
   success:function(data){
       $('#costz').val(data);
   } 

});

}); </script>
				<div class="update">
            <p class="update"><input type="text" name="name" id="costz" placeholder="Amount deposited" readonly></p>
            <p class="update"><input type="text" name="nam" value="" id="news" placeholder="Amount to deposit"></p>
					</div>
				<input type="button" name="but" id="updts" value="update">
				
				<script>
 $ (document).ready (function()
{
$ ("#updts" ).click (function()
{
	var admnocv = $("#sammy").val();
var comm = $ ("#news"). val();
var jaxx ='<?php echo $useridx; ?>'; 	
	
	
    
if (comm == '') {
alert ( "Sorry. You cannot submit blank values" );
} else {
// Returns successful data
//submission message when the
//entered information is stored
// in database.
$.post ("updatefees.php" , {
comm1 : comm ,
admno : jaxx ,	
cvz : admnocv ,
}, function(data ) {
alert ( data);
$ ('#sad' )[ 0].reset (); // To
//reset form fields
});
}
});
});</script>
		</form>	
			</div>
	</html>
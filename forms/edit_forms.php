<?php
if(file_exists("../install/index.php")){
	//perform redirect if installer files exist
	//this if{} block may be deleted once installed
	header("Location: ../install/index.php");
}

require_once '../users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if(isset($user) && $user->isLoggedIn()){
}
$db_qr = DB::getInstance();
$week='2021-10-11';
$db_user_shift_week = $db_qr->query("SELECT id from user_shift where weekDate=?",array($week));
//dump($storeID->first());
$storeID=$db_user_shift_week->results();
foreach($storeID as $tid){
	//print_r($tid->id . " ");
}

	

?>


<?php  languageSwitcher();?>

<p align="center">Hafta Araligi : <?php echo $week; ?></p>
<div class="col-lg-12">
<div class="table-responsive">
 <table id="data" class="table table-striped" border="1">
          <thead class="thead-light">
              <tr>
                <th rowspan="2" class="table-header" style="vertical-align: middle" >Magaza<a id="sort" href="#"></a></th>
                <th rowspan="2" class="table-header" style="vertical-align: middle" >Personel</th>
                <th rowspan="2" class="table-header" style="vertical-align: middle" >Haftalik Saat</th>
                <th colspan="2" class="table-header">Pazartesi</th>
                <th colspan="2" class="table-header">Salı</th>
								<th colspan="2" class="table-header">Carsamba</th>
								<th colspan="2" class="table-header">Persembe</th>
								<th colspan="2" class="table-header">Cuma</th>
								<th colspan="2" class="table-header">Cumartesi</th>
								<th colspan="2" class="table-header">Pazar</th>

							</tr>
							<tr>
							<th class="table-header">Giris</th>
                <th class="table-header">Cıkıs</th>
                <th class="table-header">Giris</th>
                <th class="table-header">Cıkıs</th>
								<th class="table-header">Giris</th>
								<th class="table-header">Cıkıs</th>
								<th class="table-header">Giris</th>
                <th class="table-header">Cıkıs</th>
                <th class="table-header">Giris</th>
                <th class="table-header">Cıkıs</th>
								<th class="table-header">Giris</th>		
								<th class="table-header">Cıkıs</th>						
								<th class="table-header">Giris</th>		
								<th class="table-header">Cıkıs</th>			
							</tr>
					</thead>
          <tbody>
       <?php
       // function table_print($rowacq) {
         //     echo '<tr class="table-row" ondblclick="mySelection(event)">';
           //   echo '<td>'.$rowacq["AcqID"].'</td>';
           //   echo '<td contenteditable="true" onBlur="saveToDatabase(this,'AcqDate',''.$rowacq["AcqID"].'')" onClick="showEdit(this);">'.$rowacq["AcqDate"].'</td>';
            //  echo '<td contenteditable="true" onBlur="saveToDatabase(this,'AcqNumber',''.$rowacq["AcqID"].'')" onClick="showEdit(this);">'.$rowacq["AcqNumber"].'</td>';
            //  echo '<td contenteditable="true" onBlur="saveToDatabase(this,'AcqSupplier',''.$rowacq["AcqID"].'')" onClick="showEdit(this);">'.$rowacq["AcqSupplier"].'</td>';
            //  echo '<td contenteditable="true" onBlur="saveToDatabase(this,'AcqNote',''.$rowacq["AcqID"].'')" onClick="showEdit(this);">'.$rowacq["AcqNote"].'</td>';
            //  echo '<td>'.$rowacq["InStocLa"].'</td>';
             // echo '<td align="center"><a href="javascript:delete_id('.$rowacq["AcqID"].')"><img src="b_drop.png" alt="Delete" /></a></td>'
					//		echo "</tr>";
				//}
				// echo '<tr class="table-row">';
				// echo '<td>'.$myRow->adi.'</td>';
				// echo '<td>'.$myRow->lname.'</td>';				
				// echo '<td>'.$myRow->haftalik_saat.'</td>';
				// echo '<td contenteditable="true">'.substr($myRow->pazartesi_in,0,-5).'</td>';	echo '<td contenteditable="true">'.substr($myRow->pazartesi_out,0,-5).'</td>';
				// echo '<td contenteditable="true">'.substr($myRow->sali_in,0,-5).'</td>';				echo '<td contenteditable="true">'.substr($myRow->sali_out,0,-5).'</td>';				 
				// echo '<td contenteditable="true">'.substr($myRow->carsamba_in,0,-5).'</td>';		echo '<td contenteditable="true">'.substr($myRow->carsamba_out,0,-5).'</td>';				 
				// echo '<td contenteditable="true">'.substr($myRow->persembe_in,0,-5).'</td>';		echo '<td contenteditable="true">'.substr($myRow->persembe_out,0,-5).'</td>';				 
				// echo '<td contenteditable="true">'.substr($myRow->cuma_in,0,-5).'</td>';				echo '<td contenteditable="true">'.substr($myRow->cuma_out,0,-5).'</td>';				
				//  echo '<td contenteditable="true">'.substr($myRow->cumartesi_in,0,-5).'</td>';	echo '<td contenteditable="true">'.substr($myRow->cumartesi_out,0,-5).'</td>';				 
				//  echo '<td contenteditable="true">'.substr($myRow->pazar_in,0,-5).'</td>';			echo '<td contenteditable="true">'.substr($myRow->pazar_out,0,-5).'</td>';				
					
				//  echo "</tr>";	
				foreach($storeID as $tid){
				$db_row = $db_qr->query("SELECT store.adi, users.lname, haftalik_saat, pazartesi_in, pazartesi_out, sali_in, sali_out, carsamba_in, carsamba_out, persembe_in, persembe_out, cuma_in, cuma_out, cumartesi_in, cumartesi_out, pazar_in, pazar_out 
				FROM user_shift 
				INNER JOIN store ON storeID=store.id 
				INNER JOIN users ON users.id = userID 
				WHERE user_shift.id=?",array($tid->id));
				//print_r($db_row->results());	

				$myRow=$db_row->results()[0];
				echo $tid->id." ";
				echo '<tr class="table-row" id="'.$tid->id.'">';
				//echo '<td>'.$tid->id.'</td>';
				echo '<td>'.$myRow->adi.'</td>';
				echo '<td>'.$myRow->lname.'</td>';				
				echo '<td>'.$myRow->haftalik_saat.'</td>';
				echo '<td contenteditable="true" onBlur="saveToDatabase(this,`pazartesi_in`)">'.substr($myRow->pazartesi_in,0,-5).'</td>';	
				echo '<td contenteditable="true" onBlur="saveToDatabase(this,`pazartesi_out`)">'.substr($myRow->pazartesi_out,0,-5).'</td>';

				echo '<td contenteditable="true" onBlur="saveToDatabase(this,`sali_in`)">'.substr($myRow->sali_in,0,-5).'</td>';				
				echo '<td contenteditable="true" onBlur="saveToDatabase(this,`sali_out`)">'.substr($myRow->sali_out,0,-5).'</td>';				 

				echo '<td contenteditable="true" onBlur="saveToDatabase(this,`carsamba_in`)">'.substr($myRow->carsamba_in,0,-5).'</td>';	
				echo '<td contenteditable="true" onBlur="saveToDatabase(this,`carsamba_out`)">'.substr($myRow->carsamba_out,0,-5).'</td>';			

				echo '<td contenteditable="true" onBlur="saveToDatabase(this,`persembe_in`)">'.substr($myRow->persembe_in,0,-5).'</td>';		
				echo '<td contenteditable="true" onBlur="saveToDatabase(this,`persembe_out`)">'.substr($myRow->persembe_out,0,-5).'</td>';			

				echo '<td contenteditable="true" onBlur="saveToDatabase(this,`cuma_in`)">'.substr($myRow->cuma_in,0,-5).'</td>';				
				echo '<td contenteditable="true" onBlur="saveToDatabase(this,`cuma_out`)">'.substr($myRow->cuma_out,0,-5).'</td>';				

				echo '<td contenteditable="true" onBlur="saveToDatabase(this,`cumartesi_in`)">'.substr($myRow->cumartesi_in,0,-5).'</td>';	
				echo '<td contenteditable="true" onBlur="saveToDatabase(this,`cumartesi_out`)">'.substr($myRow->cumartesi_out,0,-5).'</td>';	

				echo '<td contenteditable="true" onBlur="saveToDatabase(this,`pazar_in`)">'.substr($myRow->pazar_in,0,-5).'</td>';			
				echo '<td contenteditable="true" onBlur="saveToDatabase(this,`pazar_out`)">'.substr($myRow->pazar_out,0,-5).'</td>';				
					
				echo "</tr>";			
					//$dt= new DateTime($myRow->pazartesi_in);
				//print_r($dt->format('H:i'));
				}


				?>

    </tbody>
  </table>
	</div>
</div>

<script>
$(document).ready(function(){
    $('#data').after('<div id="divi"></div>');
    var rowsShown = 4;
	var last = 0;
    var rowsTotal = $('#data tbody tr').length;
    var numPages = rowsTotal/rowsShown;
		$('#divi').append('<nav id="navi"></nav>');		
		$('#navi').append('<ul id="nav" class="pagination pagination-sm justify-content-end"></ul>');
		
    for(i = 0;i < numPages;i++) {
        var pageNum = i + 1;
        $('#nav').append(' <li class="page-item"><a href="#" class="page-link" rel="'+i+'">'+pageNum+'</a> </li>');
    }
    $('#data tbody tr').hide();
    $('#data tbody tr').slice(0, rowsShown).show();
    $('#nav a:first').addClass('active');
    $('#nav a').bind('click', function(){

        $('#nav a').removeClass('active');
        $(this).addClass('active');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('#data tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
        css('display','table-row').animate({opacity:1}, 300);
    });
});

$('a').click(function(){
    var table = $(this).parents('table').eq(0)
    var rows = table.find('tr:gt(1)').toArray().sort(comparer($(this).index()))
    this.asc = !this.asc
    if (!this.asc){rows = rows.reverse()}
    for (var i = 0; i < rows.length; i++){table.append(rows[i])}
})
function comparer(index) {
    return function(a, b) {
        var valA = getCellValue(a, index), valB = getCellValue(b, index)
        return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB)
    }
}
function getCellValue(row, index){ return $(row).children('td').eq(index).text() }

function saveToDatabase(rowData,colName){
	this.last= rowData.closest('tr').id;	
	
	console.log(rowData.innerText);console.log(rowData.parentNode.id);console.log(colName);
	//$db_qr->query("UPDATE user_shift SET ".$colName."=".$rowData.innerText." WHERE id=".$rowData.parentNode.id);
//$db_qr->update("user_shift",$rowData.parentNode.id,[$colName=>$rowData.innerText]);
	if (rowData == "") {			
			return;
		} else {
			let regEx = /^([0-9]|0[0-9]|1?[0-9]|2[0-3]):[0-5]?[0-9]$/;///^\d{1,2}:\d{2}([ap]m)?$/;
			let mine  = rowData.innerText.match(regEx,'');
		
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {					
					//console.log(this.responseText);
				}
			};
			if(!mine) return;
			
			
			xmlhttp.open("GET","../dbUpdate.php?q="+mine[0]+"&col="+colName+"&rid="+rowData.parentNode.id,true);
			xmlhttp.send();

		}
}
</script>
<!-- Place any per-page javascript here -->
<?php require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php'; ?>

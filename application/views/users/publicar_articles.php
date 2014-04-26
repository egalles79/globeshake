<!-- BEGIN CONTENT WRAPPER -->
<div id="content-wrapper" class="content-wrapper">
	<div class="container">

		<?php
		$idioma = $this->lang->lang();  

		$url = $url = base_url().$idioma.'/admin/articles';

		?>

		<form name = "frmArticles"  id="frmArticles" method="post" action="<?php echo $url;?>" class="pure-form pure-form-stacked">
			<fieldset>
		        <legend>Filtre</legend>
		        <div class="pure-g-r">
		        	<div class="pure-u-1-3">
		                <label>Codi de barres:</label>
		                <input type="text" name="codiBarres" id="codiBarres" value="<?php echo $dataPost['CodiBarres'];?>">
		            </div>
		            <div class="pure-u-1-3">
		                <label>Publicat:</label>
		                <select name="publicat" id="publicat" style="width:100px" >


		                	<?php
		                	$selected="";
		                	if ($dataPost['publicat']=="") {
		                		$selected="selected";
		                	}
		                	echo "<option value='' ".$selected." >-- Tots --</option>";


		                	$selected="";
		                	if ($dataPost['publicat']=="S") {
		                		$selected="selected";
		                	}
		                	echo "<option value='S' ".$selected." >Si</option>";


		                	$selected="";
		                	if ($dataPost['publicat']=="N") {
		                		$selected="selected";
		                	}
		                	echo "<option value='N' ".$selected." >No</option>";




		                	?>

						</select>
		            </div>
					<div class="pure-u-1-3">
						<label>Grup producte:</label>
						<select name="idGrup" id="idGrup" >
							<option value='-1'>-- Tots --</option>
							<?php
						    foreach($grupsProd as $grups) {
						    	if ($dataPost['idGrup']==$grups['idGrup']) {
						    		echo "<option value='".$grups['idGrup']."' selected>".$grups['NomGrup']."</option>";
						    	} else {
									echo "<option value='".$grups['idGrup']."'>".$grups['NomGrup']."</option>";
						    	}
						    }
							?>
						</select>
					</div>
					<div class="pure-u-1-3">
						<label>Marca:</label>
						<select name="idMarca" id="idMarca">
							<option value='-1'>-- Tots --</option>
							<?php
						    foreach($llistaMarques as $marques) {
						    	if ($dataPost['idMarca']==$marques['idMarca']) {
						    		echo "<option value='".$marques['idMarca']."' selected>".$marques['NomMarca']."</option>";
						    	} else {
						    		echo "<option value='".$marques['idMarca']."'>".$marques['NomMarca']."</option>";
						    	}
						    }
							?>
						</select>
					</div>
					<div class="pure-u-1-3">
						<label>Model:</label>
						<input type="text" name="model" id="model" maxlenght=160 value="<?php echo $dataPost['model'];?>">
					</div>
				</div>
				<button type="submit" class="pure-button pure-button-primary">Submit</button>
			</fieldset>
		</div>
		</form>

		<table class="pure-table pure-table-bordered">
		<thead>
		    <tr>
		    <th>Article</th>
		    <th align="center">Publicat</th>
		    <th></th>
		    
		</tr></thead>
		<tbody>
			<?php
			$num=0;

		    foreach($result as $productes) {
		    	
		    	if ($num == 1) {
		    		$num = 0;
		    		echo "<tr class='pure-table-odd'>";
		    	} else {
		    		echo "<tr>";
		    		$num = 1;
		    	}
				

			?>

		    
		        <td class="articles"><?php echo $productes['categoria'].' '.$productes['marca'].' '.$productes['model'];?></td>
		        <td align="center">
					<?php 
					if ($productes['publicat'] =="S") 
						echo "<i class='fa fa-check'></i>";
					else
						echo "<i class='fa fa-times'></i>";
					?></td>
		         <td>
		         <?php 
		         //$link = site_url('Article.php?idArticle='.$productes['idArticle']);
		         $link = base_url().'admin/fitxa/'.$productes['idArticle'];
		         echo "<a href='".$link."' >";

					echo "<i class='fa fa-edit'></i></a>";
				?>
		         </td>
		        
		    </tr>
		   
		   <?php
			}
			?>
		   
		</tbody>
		</table>
	</div>
</div>
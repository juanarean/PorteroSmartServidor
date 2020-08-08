<?php
//Version 5.1
session_start();
$VarSession=$_SESSION['NSerieSesion'];
$VarSessionDatos=$_SESSION['DATOS'];
if( $VarSession==null|| $varseession="")
{
	echo "Usted debe logearse para ingresar a esta pagina:";
	die();
	
}


?>

<!DOCTYPE html>            
<html>                     
<head>                     
<meta charset=utf-8>       
<title>PSMART</title>
  <!--<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/validationEngine.jquery.css" rel="stylesheet">-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-es.js"></script>
  
  


<style>
			h1{
			font-size:30px;
			background:orange;
			color:black;
			text-align: center;
			width:400px;
			margin:10px auto;
			background-color:orange;
			border:1px solid #ECE8E8;
			height:75px;
			border-radius:28px;
			padding: 0px 9px 0px 9px; 
			}
			p
			{	text-align: center;
			}
			h2{
			font-size:25px;
			<!--background:lightblue;#0000ff; -->
			color:#fff;
			
			text-align: center;
			}
			tr
			{
			font-size:18px;
			}
			
			form
			{
			<!-- background:orange; -->
			}
			
			#FormPrincipal,#cuenta  
			{
			
			display:none;<!--oculto pagina principal-->
			
			}
			 
			
			
			<!--input{padding:1px;}--> 
			
			button{
			font-size:10px;
			color:black;
			height:65px;
			font-size:20px;
			width:250px;
			}
			#contenedor1
			{
			width:400px;
			margin:20px auto;
			background-color:#F3EDED;  <!--#F3EDED-->
			border:1px solid #ECE8E8;
			height:320px;
			border-radius:28px;
			padding: 0px 9px 0px 9px; 
			}
			
			#contenedor2
			{
			width:700px;
			margin:20px auto;
			background-color:#F3EDED;  <!--#F3EDED-->
			border:1px solid #ECE8E8;
			height:250px;
			border-radius:28px;
			padding: 0px 9px 0px 9px; 
			}
			
			#contenedor3
			{
			width:1300px;
			margin:5px auto;
			background-color:#F3EDED;  <!--#F3EDED-->
			border:1px solid #ECE8E8;
			height:350px;
			border-radius:28px;
			padding: 0px 9px 0px 9px; 
			}
			
			
		</style>

</head>
<body onload="validar()">


<fieldset>
<legend style="text-align:center;"><h1>CONFIGURACION PSMART</h1></legend>


<!----------------------------------------------------------PAGINA  PRINCIPAL --------------------------------------------------------------------------->

<div id="PantallaPrincipal">
<div id="contenedor1">
	<br>
	<br>
	<p>
	<button id="btnCuentaNueva" class="btn btn-primary" >INICIAR CONFIGURACION</button><br>
	<p>
	<button id="btnModificarCuenta" class="btn btn-primary" >MODICIFCAR CONFIGURACION</button><br>
	<p>
	<button id="btnReset" class="btn btn-primary" >RESETEAR VALORES DE FABRICA</button>

</div>
<p>N°Serie Dispositivo conectado: <?php echo $VarSession?><br>
<p>Cantidad de datos tabla:<?php echo $VarSessionDatos?><br>
<a href="CerrarSesion.php">Cerrar Sesion Psmart</a>
</div>
<!------------------------------------------FIN PAGINA PRINCIPAL-------------------------------------------------------------------------------------->




<!------------------------------------------PAGINA CONFIGURACION CUENTA-------------------------------------------------------------------------------------->


	<div id="cuenta">
	<div id="contenedor2">

	
	
	<!--<p>Numero de Serie:<input type="text" name="NumeroSerie" id="NumSerie">-->

	<p><div style="font-size:20px;text-align:center">Lugar de Instalacion</div>
	

	<p>Pais:
	<select name="pais" id="pais" required>
	<option value="XX">...</option>
	<option value="AF">Afganistán</option>
	<option value="AL">Albania</option>
	<option value="DE">Alemania</option>
	<option value="AD">Andorra</option>
	<option value="AO">Angola</option>
	<option value="AI">Anguilla</option>
	<option value="AQ">Antártida</option>
	<option value="AG">Antigua y Barbuda</option>
	<option value="AN">Antillas Holandesas</option>
	<option value="SA">Arabia Saudí</option>
	<option value="DZ">Argelia</option>
	<option value="AR">Argentina</option>
	<option value="AM">Armenia</option>
	<option value="AW">Aruba</option>
	<option value="AU">Australia</option>
	<option value="AT">Austria</option>
	<option value="AZ">Azerbaiyán</option>
	<option value="BS">Bahamas</option>
	<option value="BH">Bahrein</option>
	<option value="BD">Bangladesh</option>
	<option value="BB">Barbados</option>
	<option value="BE">Bélgica</option>
	<option value="BZ">Belice</option>
	<option value="BJ">Benin</option>
	<option value="BM">Bermudas</option>
	<option value="BY">Bielorrusia</option>
	<option value="MM">Birmania</option>
	<option value="BO">Bolivia</option>
	<option value="BA">Bosnia y Herzegovina</option>
	<option value="BW">Botswana</option>
	<option value="BR">Brasil</option>
	<option value="BN">Brunei</option>
	<option value="BG">Bulgaria</option>
	<option value="BF">Burkina Faso</option>
	<option value="BI">Burundi</option>
	<option value="BT">Bután</option>
	<option value="CV">Cabo Verde</option>
	<option value="KH">Camboya</option>
	<option value="CM">Camerún</option>
	<option value="CA">Canadá</option>
	<option value="TD">Chad</option>
	<option value="CL">Chile</option>
	<option value="CN">China</option>
	<option value="CY">Chipre</option>
	<option value="VA">Ciudad del Vaticano (Santa Sede)</option>
	<option value="CO">Colombia</option>
	<option value="KM">Comores</option>
	<option value="CG">Congo</option>
	<option value="CD">Congo, República Democrática del</option>
	<option value="KR">Corea</option>
	<option value="KP">Corea del Norte</option>
	<option value="CI">Costa de Marfíl</option>
	<option value="CR">Costa Rica</option>
	<option value="HR">Croacia (Hrvatska)</option>
	<option value="CU">Cuba</option>
	<option value="DK">Dinamarca</option>
	<option value="DJ">Djibouti</option>
	<option value="DM">Dominica</option>
	<option value="EC">Ecuador</option>
	<option value="EG">Egipto</option>
	<option value="SV">El Salvador</option>
	<option value="AE">Emiratos Árabes Unidos</option>
	<option value="ER">Eritrea</option>
	<option value="SI">Eslovenia</option>
	<option value="ES">España</option>
	<option value="US">Estados Unidos</option>
	<option value="EE">Estonia</option>
	<option value="ET">Etiopía</option>
	<option value="FJ">Fiji</option>
	<option value="PH">Filipinas</option>
	<option value="FI">Finlandia</option>
	<option value="FR">Francia</option>
	<option value="GA">Gabón</option>
	<option value="GM">Gambia</option>
	<option value="GE">Georgia</option>
	<option value="GH">Ghana</option>
	<option value="GI">Gibraltar</option>
	<option value="GD">Granada</option>
	<option value="GR">Grecia</option>
	<option value="GL">Groenlandia</option>
	<option value="GP">Guadalupe</option>
	<option value="GU">Guam</option>
	<option value="GT">Guatemala</option>
	<option value="GY">Guayana</option>
	<option value="GF">Guayana Francesa</option>
	<option value="GN">Guinea</option>
	<option value="GQ">Guinea Ecuatorial</option>
	<option value="GW">Guinea-Bissau</option>
	<option value="HT">Haití</option>
	<option value="HN">Honduras</option>
	<option value="HU">Hungría</option>
	<option value="IN">India</option>
	<option value="ID">Indonesia</option>
	<option value="IQ">Irak</option>
	<option value="IR">Irán</option>
	<option value="IE">Irlanda</option>
	<option value="BV">Isla Bouvet</option>
	<option value="CX">Isla de Christmas</option>
	<option value="IS">Islandia</option>
	<option value="KY">Islas Caimán</option>
	<option value="CK">Islas Cook</option>
	<option value="CC">Islas de Cocos o Keeling</option>
	<option value="FO">Islas Faroe</option>
	<option value="HM">Islas Heard y McDonald</option>
	<option value="FK">Islas Malvinas</option>
	<option value="MP">Islas Marianas del Norte</option>
	<option value="MH">Islas Marshall</option>
	<option value="UM">Islas menores de Estados Unidos</option>
	<option value="PW">Islas Palau</option>
	<option value="SB">Islas Salomón</option>
	<option value="SJ">Islas Svalbard y Jan Mayen</option>
	<option value="TK">Islas Tokelau</option>
	<option value="TC">Islas Turks y Caicos</option>
	<option value="VI">Islas Vírgenes (EEUU)</option>
	<option value="VG">Islas Vírgenes (Reino Unido)</option>
	<option value="WF">Islas Wallis y Futuna</option>
	<option value="IL">Israel</option>
	<option value="IT">Italia</option>
	<option value="JM">Jamaica</option>
	<option value="JP">Japón</option>
	<option value="JO">Jordania</option>
	<option value="KZ">Kazajistán</option>
	<option value="KE">Kenia</option>
	<option value="KG">Kirguizistán</option>
	<option value="KI">Kiribati</option>
	<option value="KW">Kuwait</option>
	<option value="LA">Laos</option>
	<option value="LS">Lesotho</option>
	<option value="LV">Letonia</option>
	<option value="LB">Líbano</option>
	<option value="LR">Liberia</option>
	<option value="LY">Libia</option>
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lituania</option>
	<option value="LU">Luxemburgo</option>
	<option value="MK">Macedonia, Ex-República Yugoslava de</option>
	<option value="MG">Madagascar</option>
	<option value="MY">Malasia</option>
	<option value="MW">Malawi</option>
	<option value="MV">Maldivas</option>
	<option value="ML">Malí</option>
	<option value="MT">Malta</option>
	<option value="MA">Marruecos</option>
	<option value="MQ">Martinica</option>
	<option value="MU">Mauricio</option>
	<option value="MR">Mauritania</option>
	<option value="YT">Mayotte</option>
	<option value="MX">México</option>
	<option value="FM">Micronesia</option>
	<option value="MD">Moldavia</option>
	<option value="MC">Mónaco</option>
	<option value="MN">Mongolia</option>
	<option value="MS">Montserrat</option>
	<option value="MZ">Mozambique</option>
	<option value="NA">Namibia</option>
	<option value="NR">Nauru</option>
	<option value="NP">Nepal</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Níger</option>
	<option value="NG">Nigeria</option>
	<option value="NU">Niue</option>
	<option value="NF">Norfolk</option>
	<option value="NO">Noruega</option>
	<option value="NC">Nueva Caledonia</option>
	<option value="NZ">Nueva Zelanda</option>
	<option value="OM">Omán</option>
	<option value="NL">Países Bajos</option>
	<option value="PA">Panamá</option>
	<option value="PG">Papúa Nueva Guinea</option>
	<option value="PK">Paquistán</option>
	<option value="PY">Paraguay</option>
	<option value="PE">Perú</option>
	<option value="PN">Pitcairn</option>
	<option value="PF">Polinesia Francesa</option>
	<option value="PL">Polonia</option>
	<option value="PT">Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar</option>
	<option value="UK">Reino Unido</option>
	<option value="CF">República Centroafricana</option>
	<option value="CZ">República Checa</option>
	<option value="ZA">República de Sudáfrica</option>
	<option value="DO">República Dominicana</option>
	<option value="SK">República Eslovaca</option>
	<option value="RE">Reunión</option>
	<option value="RW">Ruanda</option>
	<option value="RO">Rumania</option>
	<option value="RU">Rusia</option>
	<option value="EH">Sahara Occidental</option>
	<option value="KN">Saint Kitts y Nevis</option>
	<option value="WS">Samoa</option>
	<option value="AS">Samoa Americana</option>
	<option value="SM">San Marino</option>
	<option value="VC">San Vicente y Granadinas</option>
	<option value="SH">Santa Helena</option>
	<option value="LC">Santa Lucía</option>
	<option value="ST">Santo Tomé y Príncipe</option>
	<option value="SN">Senegal</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leona</option>
	<option value="SG">Singapur</option>
	<option value="SY">Siria</option>
	<option value="SO">Somalia</option>
	<option value="LK">Sri Lanka</option>
	<option value="PM">St Pierre y Miquelon</option>
	<option value="SZ">Suazilandia</option>
	<option value="SD">Sudán</option>
	<option value="SE">Suecia</option>
	<option value="CH">Suiza</option>
	<option value="SR">Surinam</option>
	<option value="TH">Tailandia</option>
	<option value="TW">Taiwán</option>
	<option value="TZ">Tanzania</option>
	<option value="TJ">Tayikistán</option>
	<option value="TF">Territorios franceses del Sur</option>
	<option value="TP">Timor Oriental</option>
	<option value="TG">Togo</option>
	<option value="TO">Tonga</option>
	<option value="TT">Trinidad y Tobago</option>
	<option value="TN">Túnez</option>
	<option value="TM">Turkmenistán</option>
	<option value="TR">Turquía</option>
	<option value="TV">Tuvalu</option>
	<option value="UA">Ucrania</option>
	<option value="UG">Uganda</option>
	<option value="UY">Uruguay</option>
	<option value="UZ">Uzbekistán</option>
	<option value="VU">Vanuatu</option>
	<option value="VE">Venezuela</option>
	<option value="VN">Vietnam</option>
	<option value="YE">Yemen</option>
	<option value="YU">Yugoslavia</option>
	<option value="ZM">Zambia</option>
	<option value="ZW">Zimbabue</option>
	</select>
	<p>Provincia:<input type="text" name="provincia" id="provincia" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
	Ciudad:<input type="text" name="ciudad" id="ciudad" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
	<p>Calle:<input type="text" name="calle" id="calle" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
	Numero:<input type="numero" name="numero" id="numero" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"><br>
	<br>
	<button id="btnPantallaPrincipal" class="btn btn-primary" style="width:200px;height:55px">VOLVER</button>
	<button id="btnTopicos" class="btn btn-primary" style="width:200px;height:55px">CREAR CUENTA</button>
</div>
<p>N°Serie Dispositivo conectado: <?php echo $VarSession?><br>
<a href="CerrarSesion.php">Cerrar Sesion Psmart</a>
</div>
<!-------------------------------------------------------------FIN PAGINA CONFIGURACION CUENTA----------------------------------------------------------->


<form action="http://34.217.210.54/Portero_Insert.php" method='post' ><!--'topicos'   archivo en instanicia linux proyecto 2019/ /var/www/html/     -->






<!-----------------------------PAGINA CONFIGURACION UNIDADES FUNCIONALES--------------------------------------------------------------------------------->








<div id="FormPrincipal">
N°Serie Dispositivo conectado: <?php echo $VarSession?><br>
<a href="CerrarSesion.php">Cerrar Sesion Psmart</a>
<div id="contenedor3">


	<div style="font-size:20px">
		<p>Topico a Publicar: <input type='text' name='Ptopico' id="Ptopico" readonly="readonly" style="width:400px" required> <br></p>
		<p>Topico a Suscribir:  <input type='text' name='Stopico' id="Stopico" readonly="readonly" style="width:400px"required> <br></p>
	</div>
	
	<form>
	<p><button id="btnadd" class="btn btn-primary" style="height:25px;width:150px;" >AGREGAR UF</button>
	<button id="btn--" class="btn btn-primary" style="height:25px;width:150px;">ELIMINAR UF</button></p>
	</form>
	
	<table  id="tblprod" class="egt"><!--class="table-hover table-bordered"-->

	<thead>

	<tr>
		<th>Unidad funcional</th>
		<th>Timbre</th>
		<th>Nombre Propietario</th>
		<th>Apellido Propietario</th>
		<th>Mail</th>
		<th>Password</th>
		<th>Confirmar Password</th>
	</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<div class="form-group col-lg-4">
					<input type="text" name="UF[]" value="1" required />
				</div>
			</td>
			<td>
				<div class="form-group col-lg-10">
					<input type="text" name="Timbre[]" required style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
				</div>
			</td>
			<td>
				<div class="form-group col-lg-10">
					<input type="text" name ="Nombre[]" required>
				</div>
			</td>
			<td>
				<div class="form-group col-lg-10">
				<input type="text" name ="Apellido[]" required>
				</div>
			</td>
			<td>
				<div class="form-group col-lg-10">
					<input type="email" name ="Mail[]" required>
				</div>
			</td>
			<td>
				<div class="form-group col-lg-10">
				<input type="password" name ="Password[]" required>
				</div>
			</td>
			<td>
				<div class="form-group col-lg-10">
					<input type="password" name ="PasswordConfirm[]" required>
				</div>
			</td>
		</tr>
	</tbody>
	</table>
<input type="text" name="NumeroSerie" id="nserie" style="display:none" value="<?php echo $VarSession?>" /><!--style="display:none"-->
<p><input type='submit' value='GUARDAR' style="height:35px;width:150px;" class="btn btn-primary">
<br>

</form>
<!-- <form action='topicos' method='get'> -->
	<!-- <button type="buttom" name="detener" value="true"   style="height:35px;width:150px;">START</BUTTON> -->
	<!-- <button type="buttom" name="detener" value="false"  style="height:35px;width:150px;">STOP</BUTTON> -->
<!-- </form> -->


	
	
	

</div>
</fieldset>
</div>





<!------------------------FUNCIONES JAVA SCRIPT--------------------------->


<!--//FUNCION GENERAL----> 


<script type="text/javascript">
    $(function() {
      var count = 1;
	    jQuery("#miform").validationEngine({
        //promptPosition: "centerRight:0,-5"
      });
	
	 //function comparar(f)
	 //{
	 //alert("chau");
	 //var res=false;
	 
	 //if(f.Password.value==f.PasswordConfirm)
	// {
	 //alert("son iguales");
	 //res = true;
	 //}
	 //else
	 //{
	 //alert("son distintas");
	 //res = false;
	// }
	// return res;
	//};
	
	  
		// boton para agregar fila
		
	  $(document).on("click", "#btnadd", function(event) { 
	   
        count++;
		
		
        $('#tblprod tr:last').after('<tr><td><div class="form-group col-lg-10"><input type="text" name="UF[]" value="' + count + '" required /></div></td><td><div class="form-group col-lg-10"><input type="text" name="Timbre[]" required style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"/></div></td><td><div class="form-group col-lg-10"><input type="text" name="Nombre[]" required /></div></td><td><div class="form-group col-lg-10"><input class="form-control validate[required]" name="Apellido[]" required/></div></td><td><div class="form-group col-lg-10"><input type="email" name="Mail[]" required/></div></td><td><div class="form-group col-lg-10"><input type="password" name="Password[]" required/></div></td><td><div class="form-group col-lg-10"><input type="password" name="PasswordConfirm[]" required/></div></td></tr>');
        
		if(count > 5)
		{
		document.getElementById("contenedor3").style.height="500px";
		}
		
		if(count > 10)
		{
		document.getElementById("contenedor3").style.height="700px";
		}
		
		event.preventDefault();
	
		if(count > 15)
		{
		document.getElementById("contenedor3").style.height="800px";
		}
		
		if(count > 15)
		{
		document.getElementById("contenedor3").style.height="1000px";
		}
		
		
		event.preventDefault();

      });

	  
	  // funcion para borrar fila 
 $(document).on("click", "#btn--", function(event) { 
	   
        count--;
		//alert(count);
		if(count<1)
		{
		count++;
		alert("Como minimo debe haber una UF configurada");
        event.preventDefault();
		}
		else
		{
		$('#tblprod tr:last').remove('tr');
		
		
		if(count < 24)
		{
		document.getElementById("contenedor3").style.height="800px";
		}
		
		
		if(count < 15)
		{
		document.getElementById("contenedor3").style.height="700px";
		}
		
		if(count < 10)
		{
		document.getElementById("contenedor3").style.height="500px";
		}
	
		if(count < 5)
		{
		document.getElementById("contenedor3").style.height="350px";
		}
		event.preventDefault();
		}
      });	 


// funcion para generarrar topicos
 $(document).on("click", "#btnTopicos",function(event){ 
	   
        //alert("hola");
		numeroserie=document.getElementById('nserie').value;
		pais=document.getElementById('pais').value;
		provincia=document.getElementById('provincia').value;
		ciudad=document.getElementById('ciudad').value;
		calle=document.getElementById('calle').value;
		numero=document.getElementById('numero').value;
		
		
		if(numero==""||provincia==""||ciudad==""||calle==""||pais=="")
			{
			alert("Todos los campos debes estar completos");
			
			}
		else
		{
		
		TopicoP="PUBLICAR/"+numeroserie+"/"+pais+"/"+provincia+"/"+ciudad+"/"+calle+"/"+numero;
		TopicoS="SUSCRIBIR/"+numeroserie+"/"+pais+"/"+provincia+"/"+ciudad+"/"+calle+"/"+numero;
		//alert(pais;provincia;ciudad;calle);
		//alert(TopicoP);
		//alert(TopicoS);
		
		document.getElementById("cuenta").style.display="none";
		document.getElementById("FormPrincipal").style.display="block";
		document.getElementById("Ptopico").value=TopicoP;
		document.getElementById("Stopico").value=TopicoS;
		
		}
		//count--;
		//alert(count);
		//if(count<1)
		//{
		//count++;
		
        //}
		//else
		//{
		//$('#tblprod tr:last').remove('tr');
		//event.preventDefault();
		//}
      //}
		
		
	  });	 

	  
	  
	  // funcion para mostrar pantalla formulario principal
 $(document).on("click", "#btnCuentaNueva",function(event)
	{ 
	     //alert("hola");
		document.getElementById("PantallaPrincipal").style.display="none";
		document.getElementById("cuenta").style.display="block";
		
		
		
	  });	 

	  
	  
	  // funcion para mostrar pantalla PRINCIPAL
 $(document).on("click", "#btnPantallaPrincipal",function(event)
	{ 
	   
        //alert("hola");
		document.getElementById("PantallaPrincipal").style.display="block";
		document.getElementById("cuenta").style.display="none";
		
		
		
	  });	 

	  
	   $(document).on("click", "#btnReset",function(event)
	{ 
	   
        
		respuesta=confirm("Esta opcion elminina la configuracion actual del equipo, y vuelve a los valores de fabrica");
		
		if(respuesta)
		{
		
		
		
		alert("Se borro toda la informacion");
		
			
		location.href="ResetFabrica.php";
		
		}
		else
		{
		alert("No se ha borrado la informacion");
		
		}
		
		//document.getElementById("PantallaPrincipal").style.display="block";
		//document.getElementById("cuenta").style.display="none";
		
		
		
	  });	 

	  
	  
	  
	  
	  
	  
	  
	  

	 
//	   $(document).on("click", "#enviar", function(event) { 
	   
        
	//	alert("hola");
	//	comparar();
	//	event.preventDefault();
		
     // });

	  
	  
	 

	  
 });
	
function validar()
	{
	var validar = "<?php echo $VarSessionDatos;?>";
	if (validar==0)
	{
	}
	else
	{
	document.getElementById("btnCuentaNueva").style.display="none";
	}
	}
	;
  </script>


</body>
</html>

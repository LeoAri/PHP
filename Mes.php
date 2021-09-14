<?php
$Mes = date('m');
if ($Mes == "01"){$NomMes = "Jan";}
if ($Mes == "02"){$NomMes = "Fev";}
if ($Mes == "03"){$NomMes = "Mar";}
if ($Mes == "04"){$NomMes = "Abr";}
if ($Mes == "05"){$NomMes = "Mai";}
if ($Mes == "06"){$NomMes = "Jun";}
if ($Mes == "07"){$NomMes = "Jul";}
if ($Mes == "08"){$NomMes = "Ago";}
if ($Mes == "09"){$NomMes = "Set";}
if ($Mes == "10"){$NomMes = "Out";}
if ($Mes == "11"){$NomMes = "Nov";}
if ($Mes == "12"){$NomMes = "Dez";}
?>
<select name="MesPesq">
<option value="<?php echo($Mes); ?>" selected="selected"><?php echo($NomMes); ?></option>
<option value="01">Jan</option>
<option value="02">Fev</option>
<option value="03">Mar</option>
<option value="04">Abr</option>
<option value="05">Mai</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Ago</option>
<option value="09">Set</option>
<option value="10">Out</option>
<option value="11">Nov</option>
<option value="12">Dez</option>
</select>

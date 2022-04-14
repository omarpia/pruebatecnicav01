<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Alcancias</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <h1 align="center"> PRUEBA TECNICA ANALISTA TI DESARROLLO SOFTWARE ALCANCIA  </H1>
<?php
$v1=0;
$v2=0;
$v3=0;
$v4=0;
$v5=0;
$v6=0;


if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $valorm = intval ($_POST['valorm']);
    $cantidad_de_monedas = intval ($_POST['cantidad_de_monedas']);
    $caja1 = intval ($_POST['caja1']);
    $caja2 = intval ($_POST['caja2']);
    $caja3 = intval ($_POST['caja3']);
    $caja4 = intval ($_POST['caja4']);
    $caja5 = intval ($_POST['caja5']);

    $v1=$caja1;
    $v2=$caja2;
    $v3=$caja3;
    $v4=$caja4;
    $v5=$caja5;

    if ($valorm==50)
{
    $v1 = $v1+ $cantidad_de_monedas;
    
}

if ($valorm==100)
{
    $v2 = $v2+ $cantidad_de_monedas;
    
}
if ($valorm==200)
{
    $v3 = $v3+ $cantidad_de_monedas;
    
}

if ($valorm==500)
{
    $v4 = $v4+ $cantidad_de_monedas;
    
}
if ($valorm==1000)
{
    $v5 = $v5+ $cantidad_de_monedas;
    
}

  
}
?>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="cantidad_de_monedas">Ingresa el valor de cantidad de monedas:</label>
                        </td>
                        <td>
                            <input name="cantidad_de_monedas" required="required" step="1" type="text" />
                        </td>

                        <td>
                            <label for="valorm">Ingresa el valor de monedas:</label>
                        </td>
                        <td>
                            <input name="valorm" required="required" step="1" type="text" />
                        </td>
                         
                        <input name="caja1"  type="hidden" value = "<?php echo $v1; ?>"/>
                        <input name="caja2"  type="hidden" value = "<?php echo $v2; ?>"/>
                        <input name="caja3"  type="hidden" value = "<?php echo $v3; ?>"/>
                        <input name="caja4"  type="hidden" value = "<?php echo $v4; ?>"/>
                        <input name="caja5"  type="hidden" value = "<?php echo $v5; ?>"/>



                        
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Guardar" type="submit" />
                        </td>
                       
                    </tr>
                </tbody>
            </table>
        </form>


        <!--tabla -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="monedascincuenta"> cantidad de monedas de cincuenta:</label>
                        </td>
                        <td>
                            <input name="monedascincuenta" required="required" step="1" type="text" value ="<?php echo $v1;?>" />
                        </td>
                        <td>
                            <label for="montomonedascincuenta"> monto de monedas de cincuenta:</label>
                        </td>
                        <td>
                            <input name="montomonedascincuenta" required="required" step="1" type="text" value ="<?php echo $v1*50;?>" />
                        </td>

                        </tr>


                        <tr>
                        <td>
                            <label for="monedascien"> cantidad de monedas de cien:</label>
                        </td>
                        <td>
                            <input name="monedasciem" required="required" step="1" type="text" value ="<?php echo $v2;?>" />
                        </td>
                        <td>
                            <label for="montomonedasciem"> monto de monedas de cien:</label>
                        </td>
                        <td>
                            <input name="montomonedascien" required="required" step="1" type="text" value ="<?php echo $v2*100;?>" />
                        </td>

                        </tr>
                    

                        <tr>
                        <td>
                            <label for="monedasdoscientos"> cantidad de monedas de doscientos:</label>
                        </td>
                        <td>
                            <input name="monedasdoscientos" required="required" step="1" type="text" value ="<?php echo $v3;?>"/>
                        </td>
                        <td>
                            <label for="montomonedoscientos"> monto de monedas de doscientos:</label>
                        </td>
                        <td>
                            <input name="montomonedasdoscientos" required="required" step="1" type="text" value ="<?php echo $v3*200;?>" />
                        </td>

                        </tr>

                        <tr>
                        <td>
                            <label for="monedasquinientos"> cantidad de monedas de quinientos:</label>
                        </td>
                        <td>
                            <input name="monedasquinientos" required="required" step="1" type="text" value ="<?php echo $v4;?>"/>
                        </td>
                        <td>
                            <label for="montomonedasquinientos"> monto de monedas de quinientos:</label>
                        </td>
                        <td>
                            <input name="montomonedasquinientos" required="required" step="1" type="text" value ="<?php echo $v4*500;?>" />
                        </td>

                        </tr>

                        
                        <td>
                            <label for="monedasmil"> cantidad de monedas de mil:</label>
                        </td>
                        <td>
                            <input name="monedasmi" required="required" step="1" type="text" value ="<?php echo $v5;?>" />
                        </td>
                        <td>
                            <label for="montomonedasmil"> monto de monedas de mil:</label>
                        </td>
                        <td>
                            <input name="montomonedasmil" required="required" step="1" type="text"value ="<?php echo $v5*1000;?>" />
                        </td>

                        </tr>

                </tbody>
            </table>


    </body>
</html>

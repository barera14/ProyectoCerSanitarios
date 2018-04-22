<html xmlns="http://www.w3.org/1999/xhtml">

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <title>Registro animales</title>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript">
        function PreviewImage1() {
            pdffile1=document.getElementById("Archivo_cedula").files[0];
            pdffile_url1=URL.createObjectURL(pdffile1);
            $('#viewer1').attr('src',pdffile_url1);
        }
        function PreviewImage2() {
            pdffile2=document.getElementById("Archivo_recibo").files[0];
            pdffile_url2=URL.createObjectURL(pdffile2);
            $('#viewer2').attr('src',pdffile_url2);
        }
        function PreviewImage3() {
            pdffile3=document.getElementById("Archivo_carnet").files[0];
            pdffile_url3=URL.createObjectURL(pdffile3);
            $('#viewer3').attr('src',pdffile_url3);
        }
        function PreviewImage4() {
            pdffile4=document.getElementById("Archivo_poliza").files[0];
            pdffile_url4=URL.createObjectURL(pdffile4);
            $('#viewer4').attr('src',pdffile_url4);
        }
        function PreviewImage5() {
            pdffile5=document.getElementById("Archivo_fotos").files[0];
            pdffile_url5=URL.createObjectURL(pdffile5);
            $('#viewer5').attr('src',pdffile_url5);
        }
        function PreviewImage6() {
            pdffile6=document.getElementById("Archivo_Otros").files[0];
            pdffile_url6=URL.createObjectURL(pdffile6);
            $('#viewer6').attr('src',pdffile_url6);
        }
    </script>
    <script>
        function mostrar1(enla1) {
            obj1 = document.getElementById('oculto1');
            obj1.style.display = (obj1.style.display == 'block') ? 'none' : 'block';
            enla1.innerHTML = (enla1.innerHTML == 'Cerrar') ? 'Ver' : 'Cerrar';
        }
        function mostrar2(enla2) {
            obj2 = document.getElementById('oculto2');
            obj2.style.display = (obj2.style.display == 'block') ? 'none' : 'block';
            enla2.innerHTML = (enla2.innerHTML == 'Cerrar') ? 'Ver' : 'Cerrar';
        }
        function mostrar3(enla3) {
            obj3 = document.getElementById('oculto3');
            obj3.style.display = (obj3.style.display == 'block') ? 'none' : 'block';
            enla3.innerHTML = (enla3.innerHTML == 'Cerrar') ? 'Ver' : 'Cerrar';
        }
        function mostrar4(enla4) {
            obj4 = document.getElementById('oculto4');
            obj4.style.display = (obj4.style.display == 'block') ? 'none' : 'block';
            enla4.innerHTML = (enla4.innerHTML == 'Cerrar') ? 'Ver' : 'Cerrar';
        }
        function mostrar5(enla5) {
            obj5 = document.getElementById('oculto5');
            obj5.style.display = (obj5.style.display == 'block') ? 'none' : 'block';
            enla5.innerHTML = (enla5.innerHTML == 'Cerrar') ? 'Ver' : 'Cerrar';
        }
        function mostrar6(enla6) {
            obj6 = document.getElementById('oculto6');
            obj6.style.display = (obj6.style.display == 'block') ? 'none' : 'block';
            enla6.innerHTML = (enla6.innerHTML == 'Cerrar') ? 'Ver' : 'Cerrar';
        }
    </script>
</head>

<style type="text/css">
    <!--
    body {
        background-image: url(css/alcaldia2.jpg);
    }
    .Estilo1 {
        color: #FFFFFF;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-style: italic;
    }
    .Estilo2 {font-family: Arial, Helvetica, sans-serif}
    .Estilo7 {font-family: Verdana, Geneva, sans-serif;
        text-align: center;
        font-weight: bold;
        font-style: italic;
        color: #FFFFFF;
    }
    -->
</style>
<table width="818" border="0" align="center" bgcolor="#000033">
    <tr>
        <td width="808"><table width="624" height="829" border="0" align="center" bgcolor="#FFFFFF">
                <tr>
                    <td><img src="css/img/banner3.png" width="732" height="190" /></td>
                </tr>
                <tr bgcolor="#000033">
                    <td height="46"><div align="center" class="Estilo1">INGRESO DE INFORMACIÓN DE LOS ANIMALES</div></td>
                </tr>
                <tr>
                    <td height="583"><form action="<?php echo $editFormAction; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
                            <div align="center">Documento:
                                <input type="text" name="Documento" value="" size="32" required/>
                            </div>
                            <p>&nbsp;</p>
                            <table align="center">



                                <tr valign="baseline">
                                    <p><input id="Archivo_cedula" type="file" name="Archivo_cedula"/>&nbsp;
                                        <a href="" onclick="PreviewImage1(); mostrar1(this, 'oculto1'); return false" >Ver</a></p>
                                    <div id="oculto1" style="clear:both; display: none">
                                        <iframe id="viewer1" frameborder="0" scrolling="no" width="350" height="400"></iframe>
                                    </div>
                                    </td>
                                </tr>
                                <tr valign="baseline" >
                                    <td nowrap="nowrap" align="right"><div align="left" class="Estilo2">Cedula de Ciudadania (PDF,JPG o PGJ)</div></td>
                                    <td>
                                        <p><input id="Archivo_recibo" type="file" name="Archivo_recibo"/>&nbsp;
                                            <a href="" onclick="PreviewImage2(); mostrar2(this, 'oculto2'); return false" />Ver</a></p>
                                        <div id="oculto2" style="clear:both; display: none">
                                            <iframe id="viewer2" frameborder="0" scrolling="no" width="350" height="400"></iframe>
                                        </div>
                                    </td>
                                </tr>
                                <tr valign="baseline" >
                                    <td nowrap="nowrap" align="right"><div align="left" class="Estilo2">Camara de Comercio (PDF,JPG o PGJ)</div></td>
                                    <td>
                                        <p><input id="Archivo_carnet" type="file" name="Archivo_carnet"/>&nbsp;
                                            <a href="" onclick="PreviewImage3(); mostrar3(this, 'oculto3'); return false" />Ver</a></p>
                                        <div id="oculto3" style="clear:both; display: none">
                                            <iframe id="viewer3" frameborder="0" scrolling="no" width="350" height="400"></iframe>
                                        </div>
                                    </td>
                                </tr>
                                <tr valign="baseline" >
                                    <td nowrap="nowrap" align="right"><div align="left" class="Estilo2">Formato de Uso de Suelo (PDF,JPG O PGJ)</div></td>
                                    <td>
                                        <p><input id="Archivo_poliza" type="file" name="Archivo_poliza"/>&nbsp;
                                            <a href="" onclick="PreviewImage4(); mostrar4(this, 'oculto4'); return false" />Ver</a></p>
                                        <div id="oculto4" style="clear:both; display: none">
                                            <iframe id="viewer4" frameborder="0" scrolling="no" width="350" height="400"></iframe>
                                        </div>
                                    </td>
                                </tr>
                                <tr valign="baseline" >
                                    <td nowrap="nowrap" align="right"><div align="left" class="Estilo2">Formato de Rut (PDF,JPG o PGJ)</div></td>
                                    <td>
                                        <p><input id="Archivo_fotos" type="file" name="Archivo_fotos"/>&nbsp;
                                            <a href="" onclick="PreviewImage5(); mostrar5(this, 'oculto5'); return false" />Ver</a></p>
                                        <div id="oculto5" style="clear:both; display: none">
                                            <iframe id="viewer5" frameborder="0" scrolling="no" width="350" height="400"></iframe>
                                        </div>
                                    </td>
                                </tr>
                                <tr valign="baseline" >
                                    <td nowrap="nowrap" align="right"><div align="left" class="Estilo2">Archivo otros (.PDF)</div></td>
                                    <td>
                                        <p><input id="Archivo_Otros" type="file" name="Archivo_Otros"/>&nbsp;
                                            <a href="" onclick="PreviewImage6(); mostrar6(this, 'oculto6'); return false" />Ver</a></p>
                                        <div id="oculto6" style="clear:both; display: none">
                                            <iframe id="viewer6" frameborder="0" scrolling="no" width="350" height="400"></iframe>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <p><div align="center"><input type="submit" value="Insertar registro" name="subir"/>


                                <input type="hidden" name="MM_insert" value="form1" />
                        </form></td>
                </tr>
            </table>                   <td nowrap="nowrap" align="right"><div align="left" class="Estilo2">Fecha ultima visita al medico veterinario:</div></td>
                                    <td><input type="date" name="Fecha_ultima_visita_al_medico_veterinario" value="" size="32" /></td>
                                </tr>
                                <tr valign="baseline" >
                                    <td nowrap="nowrap" align="right"><div align="left" class="Estilo2">Archivo cedula (.PDF)</div></td>
                                    <td>

            <p>&nbsp;</p>
            <p align="right"><img src="css/img/boton-inicio.png" alt="" width="67" height="63" border="0" usemap="#Map5" />
                <map name="Map5" id="Map5">
                    <area shape="circle" coords="33,29,23" href="index.php" />
                </map>
            </p>
            <p align="center"><span class="Estilo7" style="font-size: 9px">Desarrollado por Dirección TIC Alcaldía de Yopal. E-mail: gobiernoenlinea@yopal-casanare.gov.co</span></p>
            <p>&nbsp;</p></td>
    </tr>
</table>
</body>
</html>
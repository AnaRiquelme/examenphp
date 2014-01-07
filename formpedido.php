<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <fieldset>

            <legend>Datos Cliente</legend>
            <form action="recogerDatosPedido.php" method="post">
                <table>
                    <tr>
                        <td>
                            <label>CIF</label>
                        </td>
                        <td>
                            <input type="text" name="cif" value=""/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Empresa</label>
                        </td>
                        <td>
                            <input type="text" name="empresa" value=""/>
                        </td>

                    <tr>
                        <td>
                            <label>Contacto</label>
                        </td>
                        <td>
                            <input type="text" name="contacto" value=""/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>E-mail</label>
                        </td>
                        <td>    
                            <input type="text" name="email" value=""/>
                        </td>

                    </tr>
                    <tr> 
                        <td>
                            <label>Contraseña</label>
                        </td>
                        <td>
                            <input type="password" name="contraseña" value=""/>

                        </td>
                    </tr>
                    <tr> 
                        <td>
                            <label>Descripcion</label>
                        </td>
                        <td>
                            <textarea name="descripcion" width="300" height="200"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Pedido <input type="file" name="archivo" value="No se ha seleccionado ningun archivo"/> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="cliente" value="cliente preferente" checked="checked">Cliente preferente
                        </td>
                    </tr>
                </table>
                            

                    </fieldset>
                    <fieldset>
                        <legend>
                            Datos economicos
                        </legend>
                        <table>
                            <tr>
                                <td>
                                    cantidad <input type="text" value="" name="cantidad"/> € Impuestos <select><option>21%</option><option>10%</option><option>4%</option></select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Promocion
                                </td>
                                <td>
                                    <input type="radio" name="promocion" value="ninguno" checked="checked">Ninguno<br/>
                                    <input type="radio" name="promocion" value="transporte gratuito">Transporte gratuito<br/>
                                    <input type="radio" name="promocion" value="descuento 5%">Descuento 5%<br/>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Enviar"/><input type="reset" value="Borrar"/>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </table>
        </fieldset>
    </table
</form>
</fieldset>

</body>
</html>

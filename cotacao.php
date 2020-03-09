<?php
/**

 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Cotação Dollar e Alumínio
 * Plugin URI:        
 * Description:       
 * Version:           1.0
 * Author:            Marcossancal
 * Author URI:        https://github.com/marcossancal
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-cotacao-dolar-aluminio
 * Domain Path:       
 */

  // URL DO SITE


function dolar_aluminio(){
   
 $url = 'https://www.melhorcambio.com/dolar-hoje';
 $dadosSite = file_get_contents($url);
$var1 = explode('<input type="text" value="',$dadosSite);
 $var2 = explode('" class="text-verde" id="comercial" calc="sim">',$var1[2]);


$url2 = "https://maxiligas.com.br/cotacao-lme-london-metal-exchange-fg/cotacao-lme-london-metal-exchange";
$dadosSite2 = file_get_contents($url2);
$var3 = explode('<td align="center">',$dadosSite2);
$var4 = explode('</td>',$var3[4]);





return "<div class='container-dollar'><p class='dolar-hoje-texto'>Dólar hoje</p><div class='dolar-div'><p class='valor-dolar-hoje'>R$ ".$var2[0]."</p></div><p class='aluminio-hoje-texto'>Aluminio LME hoje</p><div class='aluminio-div'><p class='texto-aluminio'>U$ ".$var4[0]."</p><p class='t-pequeno'>/t</p></div></div>";
}
 ?>
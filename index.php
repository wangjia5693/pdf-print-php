<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/3
 * Time: 15:21
 */


/**
 * 使用twig模板引擎生成html文件；将其生成打印模板
 */
//require_once dirname(__FILE__) . '/vendor/autoload.php';
//$loader = new Twig_Loader_Array(array(
//    'index' => 'Hello {{ name }}!',
//));
//$twig = new Twig_Environment($loader);
//
//$a = $twig->render('index', array('name' => 'Fabien'));

/**
 * 生成pdf打印文件，可下载，可打印；对于css3支持完整；支持@page特性；对于长的合同，采购单，送货单等较好支持；
*/

include_once __DIR__."/prince.php";
$prince = new Prince('C:\\Program Files (x86)\\Prince\\engine\\bin\\prince.exe');

header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="foo.pdf"');
$msg = array();
$prince->addStyleSheet('./print.css');
$prince->convert_file_to_passthru('./book.html',$msg,$date);
file_put_contents('log1.txt',print_r($msg,true));
file_put_contents('log2.txt',print_r($date,true));

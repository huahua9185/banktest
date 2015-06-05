<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//将PHPExcel当作插件，放入vendor目录里，然后调用
    	vendor('PHPExcel.PHPExcel.IOFactory');
    	//实例化IOFactory文件里的PHPExcel_IOFactory类，注意，这里要将PHPExcel_IOFactory的构造函数注释掉，否则会报错
    	$reader=new \PHPExcel_IOFactory;
    	//导入需要读取的表格
    	$inputFileName = 'C:\wamp\www\banktest\ThinkPHP\Library\Vendor\PHPExcel\Documentation\Examples\Reader\sampleData\example1.xls';
    	//读取并解析表格内容
    	$result=$reader->load($inputFileName);
    	//输出内容
    	$sheetData = $result->getActiveSheet()->toArray(null,true,true,true);
    	var_dump($sheetData);



    }
}
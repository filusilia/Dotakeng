<?php
namespace Portal\Action;
use Common\Action\HomeBaseAction; 
/**
 * 首页
 */
class IndexAction extends HomeBaseAction {
	
    //首页
	public function index() {
    	$this->display(":index");
    }

    public function add_article() {
        $this->display(":add_article");
    }
    function test(){
    	echo unserialize("ddd");
    }

}

?>

<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\html;

/**
* 
*/
class categorytabWidget extends Widget
{
	public $message;

	public function init()
	{
        parent::init();

	}

	public function run()
	{
		return $this->render('categorytabWidget');
	}
}
?>
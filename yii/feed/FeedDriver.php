<?php
/**
 * FeedDriver.php
 * @author: Yuri Kileev <kileev@gmail.com>
 * @date  : 14.11.2013
 */

namespace yii\feed;

use Yii;
use yii\base\Component;
use yii\base\ErrorException;
use Laminas\Feed\Writer;
use Laminas\Feed\Reader;

/**
 * Class FeedDriver
 * The main class to wrap Laminas Feed Extension
 * @package yii\feed
 */
class FeedDriver extends Component
{
        /**
         * Loads read Laminas-feed component
         * @return mixed object Laminas\Feed\Reader component
         */
        public function reader(){
            
            return new Reader;
        }
        /**
         * Loads read Laminas-feed component
         * @return mixed object Laminas\Feed\Writer component
         */
        public function writer(){
            
            return new Feed;
        }
}
?>

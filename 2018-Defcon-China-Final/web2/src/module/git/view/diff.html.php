<?php
/**
 * The diff view file of git module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Congzhi Chen <congzhi@cnezsoft.com>
 * @package     file
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.lite.html.php';?>
<?php $catLink = $this->git->buildURL('cat', $path, $revision);?>
<div class='box-title'><?php echo html::a($catLink, "$path@$revision");?></div>
<div class='box-content'><xmp><?php echo $diff;?></xmp></div>
<?php include '../../common/view/footer.lite.html.php';?>

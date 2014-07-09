<?php

use yii\helpers\Html;
use yii\grid\GridView;
use components\widgets\LoopData;
use components\LuLu;
use common\includes\DataSource;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\search\CatalogSearch $searchModel
 */

$this->title = $currentChannel->name;

$this->buildBreadcrumbs($chnid);
?>
<div class="container">
	<div class="columnMain">
		<div class="tbox channelHot border">
			<a href="2014-06/29/content_32803328.htm">
				<img src="http://img1.gtimg.com/news/pics/hv1/57/180/1644/106947057.jpg"></a>
			<h2><a href="2014-06/29/content_32803328.htm">两名大学生到东莞找工作被骗只剩11元</a></h2>
			<p style="width:260px;">两人经“中介”介绍来东莞打工，5天过去不仅没找到工作，还丢失了行李、身份证和银行卡，随身携带的三四千块盘缠，只剩11元，而介绍他们来东莞搵工的“中介”，早已消失得无影无踪。
			<a href="2014-06/29/content_32803328.htm">[详细]</a></p>				
		</div>
		<div class="content-channel">
			<?php echo LoopData::widget(['dataSource'=>$dataList,'item'=>'item-subchannel']);?>
		</div>
	</div>
	<div class="columnRight">
	    <div class="tbox border">
	        <div class="middleTitle3">
	            <h2><a href="node_7183303.htm" target="_blank" class="">人物</a></h2>
	        </div>
	        <ul class="imgTxtContent1 size95x95">
	            <li>
	                <a href="2014-06/29/content_32803328.htm"><img src="http://images.china.cn/attachement/jpg/site1000/20140629/d02788e9b6d41519f14d08.jpg" border="0" width="93" height="93" alt="习近平：热衷于武力不是强大的表现" /></a>
	                <h4><a href="2014-06/29/content_32803328.htm">习近平：不能动辄诉诸武力</a></h4>
	                <p><a href="2014-06/29/content_32803328.htm">我们要推动建设开放、透明、平等的亚太安全合作新架构，推动各国共同维护地区和世界和平安全。</a></p>
	            </li>
	        </ul>
	        <ul class="txtContent dot">
	            <li><a href="2014-06/30/content_32807605.htm">上海车牌均价超7万 13.5万人竞拍中标率创新低</a></li>
	
	            <li><a href="2014-06/30/content_32807283.htm">湖北大冶液化气站发生爆燃 已造成8人受伤</a></li>
	
	            <li><a href="2014-06/30/content_32807212.htm">甘肃计划生育工作者不到岗长期在外打工被通报</a></li>
	
	            <li><a href="shehui/2014-06/30/content_32807637.htm">河南村民修下水道挖出三尊元末明初汉白玉雕像(图)</a></li>
	
	            
	        </ul>
	        
	    </div>
	
	    <div class="tbox border dot">
	        <div class="middleTitle3">
	            <h2><a href="node_7183298.htm" target="_blank" class="">阅读排行</a></h2>
	        </div>
	        <ul class="txtContent">
	        	<?php 
	        		$dataSource = DataSource::getContentByChannel($chnid,['order'=>'views desc']);
	        		echo LoopData::widget(['dataSource'=>$dataSource,'params'=>['length'=>19]]);
	        	?>
	        </ul>
	    </div>
	    <div class="tbox border dot">
	        <div class="middleTitle3">
	            <h2><a href="node_7183298.htm" target="_blank" class="">最新更新</a></h2>
	        </div>
	        <ul class="txtContent">
	        	<?php 
	        		$dataSource = DataSource::getContentByChannel($chnid,['order'=>'publish_time desc']);
	        		echo LoopData::widget(['dataSource'=>$dataSource,'params'=>['length'=>19]]);
	        	?>
	        </ul>
	    </div>
	    <div class="tbox border">
	        
	        <div class="ad">
	        	<img alt="" src="<?php echo LuLu::getThemeUrl()?>/images/ad2.png">
	        </div>
	    </div>
	</div>
</div>

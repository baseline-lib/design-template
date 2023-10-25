<?php 
class RootBase 
{
	protected $m_root;
	
	// コンストラクタ
	function __construct($root='./')
	{
		$this->m_root = $root;
	}
	// ルートパス
	function GetRoot()
	{
		return $this->m_root;
	}
}
class Head extends RootBase
{
	function __construct($root='./')
	{
		parent::__construct($root);
	}
	function PageRoot(){?>
		<section class="demo section">
			<h2 class="section__title"><?= CLIENT; ?>様デザイン</h2>
			<div class="demo__in">
				<p>
					デザインにつきまして、画像幅を1920px(一般的デスクトップサイズ幅、解像度)で作成しておりまして、ウィンドウサイズに依存いたします。<br><br>
					確認の際はデスクトップでフルサイズで見て頂くか、デザインをクリックして頂くと実寸サイズの画像のリンクが開くきますので、そちらでご確認いただきますようお願いいたします。
				</p>
			</div>
			<div class="btn__area">
				<div class="btn"><a href="<?= $this->GetRoot(); ?>udr/page01.html"><?=PAGE01; ?>ページ</a></div>
				<div class="btn"><a href="<?=$this->GetRoot(); ?>udr/page05.html"><?=PAGE05; ?>ページ</a></div>
				<div class="btn"><a href="<?=$this->GetRoot(); ?>udr/page02.html"><?=PAGE02; ?>ページ</a></div>
				<div class="btn"><a href="<?=$this->GetRoot(); ?>udr/page03.html"><?=PAGE03; ?>ページ</a></div>
				<div class="btn"><a href="<?=$this->GetRoot(); ?>udr/page04.html"><?=PAGE04; ?>ページ</a></div>
				<div class="btn"><a href="<?=$this->GetRoot(); ?>udr/page06.html"><?=PAGE06; ?>ページ</a></div>
				<!-- <div class="btn"><a href="<?=$this->GetRoot(); ?>udr/page07.html"><?=PAGE07; ?>ページ</a></div>
				<div class="btn"><a href="<?=$this->GetRoot(); ?>udr/page08.html"><?=PAGE08; ?>ページ</a></div>
				<div class="btn"><a href="<?=$this->GetRoot(); ?>udr/page09.html"><?=PAGE09; ?>ページ</a></div>
				<div class="btn"><a href="<?=$this->GetRoot(); ?>udr/page10.html"><?=PAGE10; ?>ページ</a></div> -->
			</div>
		</section>
	<?php }

}?>
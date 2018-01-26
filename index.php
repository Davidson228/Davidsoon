<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('База данных');
$app->initLayout('Centered');
/*
 $candy1 = new Candy;
 $candy1 ->name = 'Serenade';
 $candy1 ->colour = 'blue';
 $candy1 ->price = '8';
 $total1 = $candy1->AllPrice(3);
 $label1 = $app->add(['Label',$candy1 ->name.' '.$total1, $candy1 ->colour,'detail'=>$candy1 ->price ,'icon'=>'alarm' ]);

 $candy2 = new Candy;
 $candy2 ->name = 'Lacishi';
 $candy2 ->colour = 'teal';
 $candy2 ->price = '5';
 $label2 = $app->add(['Label',$candy2 ->name,$candy2 ->colour ,'detail'=>$candy2 ->price ,'icon'=>'bitcoin' ]);

 $candy3 = new Candy;
 $candy3 ->name = 'Lukss';
 $candy3 ->colour = 'red';
 $candy3 ->price = '9';
 $label3 = $app->add(['Label',$candy3 ->name,$candy3 ->colour ,'detail'=>$candy3 ->price ,'icon'=>'empire' ]);


 $candy4 = new Candy;
 $candy4 ->name = 'Vaverite';
 $candy4 ->colour = 'green';
 $candy4 ->price = '7';
 $label4 = $app->add(['Label',$candy4 ->name,$candy4 ->colour, 'detail'=>$candy4 ->price ,'icon'=>'candy' ]);
 */
/*
 $db = new
\atk4\data\Persistence_SQL('mysql:dbname=fdb;host=localhost','root','');
class Friends extends \atk4\data\Model {
  public $table = 'friends';
  function init() {
    parent::init();
    $this->addField('name');
    $this->addField('surname');
    $this->addField('phone_number',['default'=>+371]);
    $this->addField('email');https://www.platypusshoes.com.au/media/catalog/product/cache/1/image/700x560/e9c3970ab036de70892d86c6d221abfe/v/n/vn-0d3hy28_blk_01_5.jpg
  //  $this->addField('password',['type']);    $this->addField('birthsday',['type'=>'date']);
    $this->addField('notes',['type'=>'text']);https://images.menswearhouse.com/is/image/TMW/MW40_40RH_05_KENNETH_COLE_COGNAC_SET?wid=1200&hei=627
}https://www.menswearhouse.com/mens-shoes/mens-dress-shoes/j-murphybyjohnstonampmurphynovickbrowncaptoelaceupshoes-406303
https://www.menswearhouse.com/mens-shoes/mens-dress-shoes/j-murphybyjohnstonampmurphynovickbrowncaptoelaceupshoes-406303
$form = $app->layout->add('Form');
$form->setModel(new Friends($db));
$form->onSubmit(function($form) {
  $form->model->save();
  return $form->success('Record update');
});
$crud = $app->layout->add('CRUD');
$crud->setModel(new Friends($db));
$grid = $app->layout->add('Grid');
$grid->setModel(new Friends($db));*/

$menu = $app->add('Menu');
$clothes = $menu->addMenu('Clothes');
$clothes->addItem('Shirts', 'https://assets.academy.com/mgen/95/10787095.jpg');
$clothes->addItem('Pants');
$clothes->addItem('Shoes');

$wheelchair = $menu->addMenu('Wheelchairs');
$wheelchair->addItem('Kids');
$wheelchair->addItem('Adults');

$ladder = $menu->addMenu('Ladders');
$ladder->addItem('Big');
$ladder->addItem('Small');

$tabs = $app->add('Tabs');
$clothes = $tabs->addTab('Clothes');
$da = $clothes->add(['Image','https://ae01.alicdn.com/kf/HTB1MeItPVXXXXXbXVXXq6xXFXXXp/2017-Spring-New-Arrival-Men-Suit-Jackets-Blue-Denim-Blazer-Overcoat-Slim-Fit-Jeans-Casual-Blazer.jpg']);
$da = $clothes->add(['Image','https://www.platypusshoes.com.au/media/catalog/product/cache/1/image/700x560/e9c3970ab036de70892d86c6d221abfe/v/n/vn-0d3hy28_blk_01_5.jpg']);

$wheelchair = $tabs->addTab('Wheelchair');
$ne = $wheelchair->add(['Image','https://www.rehabmart.com/include-mt/img-resize.asp?path=/imagesfromrd/hp7kx.jpg']);
$ne = $wheelchair->add(['Image','http://lghttp.30059.nexcesscdn.net/80C479/magento/media/catalog/product/cache/2/image/330x330/140720ac20424209c6bb28e1b7731856/c/i/cirrus-plus-power-wheelchair.jpg']);

$ladder = $tabs->addTab('Ladders');
$ja = $ladder->add(['Image','https://assets.robertdyas-static.co.uk/media/catalog/product//1/8/185654_0001_185654.jpg']);
$ja = $ladder->add(['Image','https://images.homedepot-static.com/productImages/660bbc85-e010-42f7-87da-b28307c6f2d4/svn/werner-platform-hybrid-ladders-pdia04-64_1000.jpg']);

$backpack = $tabs->addTab('Backpacks');
$nu = $backpack->add(['Image','https://cdn.shopify.com/s/files/1/0283/0794/products/BP2700_grande.jpg']);
$nu = $backpack->add(['Image','https://cdn.gearpatrol.com/wp-content/uploads/2017/02/Herschel-Supply-Heritage-Backpack-gear-patrol-650.jpg']);




http://lghttp.30059.nexcesscdn.net/80C479/magento/media/catalog/product/cache/2/image/330x330/140720ac20424209c6bb28e1b7731856/c/i/cirrus-plus-power-wheelchair.jpg
//$da = $clothes->add(['Image',''])

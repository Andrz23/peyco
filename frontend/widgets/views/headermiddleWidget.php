 <?php 

use yii\helpers\Html; 
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\web\IdentityInterface;

  ?>


 <div class="header-middle"><!--header-middle-->
         <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    Colombia
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canada</a></li>
                                    <li><a href="#">UK</a></li>
                                </ul>
                            </div>
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    DOLLAR
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canadian Dollar</a></li>
                                    <li><a href="#">Pound</a></li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                    

                    <!-- <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                
                                <li><__=//Html::a('Cart', ['/site/cart'], ['class'=>"fa fa-shopping-cart"] ) //__> </li>
                                <li><=//Html::a('Login', ['/site/login'], ['class'=>"fa fa-lock"] ) //> </li>
                        </div>
                    </div> -->


                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                               <li><?php NavBar::begin([
                                //'brandLabel' => 'PEYCO',
                                'brandUrl' => Yii::$app->homeUrl,
                                'options' => [
                                    'class' => 'navbar-nav fixed-right',
                                ],
                            ]);
                                
                            $menuItems = [
                                ['label' => 'Inicio', 'url' => ['/site/index']],
                                ['label' => 'Account', 'url' => ['/site/account']],
                                ['label' => 'Cart', 'url' => ['/site/cart']],
                                ['label' => 'Contact', 'url' => ['/site/contact']],
                            ];      
                               if (Yii::$app->user->isGuest) {
                                        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                                        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                                    } else {
                                        $menuItems[] = '<li>'
                                            . Html::beginForm(['/site/logout'], 'post')
                                            . Html::submitButton(
                                                'Logout (' . Yii::$app->user->identity->username . ')',
                                                ['class' => 'btn btn-link logout']
                                            )
                                            . Html::endForm()
                                            . '</li>';
                                    }

                            echo Nav::widget([
                                'options' => ['class' => 'navbar-nav navbar-right'],
                                'items' => $menuItems,
                            ]);
                            NavBar::end();
                            ?>
                            </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div><!--/header-middle-->
<div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/product-list">Products</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
</div>
        <!-- Breadcrumb End -->
        
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner">
                            <?php if(Session::has('success_message')): ?>
                            <div class="alert alert-success">
                                <strong>Success</strong> <?php echo e(Session::get('success_message')); ?>

                            </div>
                            <?php endif; ?>
                            <?php if(Cart::count()>0): ?>
                            <ul class="products-cart">
                                <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="pr-cart-item">
                                <div class="product-image">
                                    <figure><img src="<?php echo e(assets/images/products); ?>/<?php echo e($item->model->image); ?>" alt="<?php echo e($item->model->name); ?>"></figure>
                                </div>
                                <div class="product-name">
                                    <a class="link-to-product" href="<?php echo e(route('product.details',['slug'=>$item->model->slug])); ?>"><?php echo e($item->model->name); ?></a>
                                </div>
                                <div class="price-field produtc-price"><p class="price">$<?php echo e($item->model->regular_price); ?></p></div>
                                <div class="quantity">
                                    <div class="quantity-input">
                                        <input type="text" name="product-quatity" value="<?php echo e($item->model->qty); ?>" data-max="120" pattern="[0-9]*" >									
                                        <a class="btn btn-increase" href="#"></a>
                                        <a class="btn btn-reduce" href="#"></a>
                                    </div>
                                </div>
							    <div class="price-field sub-total"><p class="price">$<?php echo e($item->model->subtotal); ?></p></div>
							    <div class="delete">
                                    <a href="#" class="btn btn-delete" title="">
                                        <span>Delete from your cart</span>
                                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                                    </a>
							    </div>
						    </li>	
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>										
					        </ul>
                            <?php else: ?>
                            <p>no item to add</p>
                            <?php endif; ?>
                        </div>  
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="coupon">
                                        <input type="text" placeholder="Coupon Code">
                                        <button>Apply Code</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                        <div class="cart-content">
                                            <h1>Cart Summary</h1>
                                            <p>Sub Total<span>$<?php echo e(Cart::subtotal()); ?></span></p>
                                            <p>Tax<span>$<?php echo e(Cart::tax()); ?></span></p>
                                            <p>Shipping Cost<span>$1</span></p>
                                            <h2>Grand Total<span>$<?php echo e(Cart::total()); ?></span></h2>
                                        </div>
                                        <div class="cart-btn">
                                            <button>Update Cart</button>
                                            <button>Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><?php /**PATH C:\wamp64\www\ecommerce\resources\views/livewire/cart-component.blade.php ENDPATH**/ ?>
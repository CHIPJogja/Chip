<?php 
// Get the current URL without the query string...
 $url = url()->current();
?>
<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin/dashboard')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
      <li <?php if(preg_match("/dashboard/i", $url)){ ?> class="active" <?php } ?>>
        <a href="{{url('/admin/dashboard')}}"><i class="icon icon-home"></i><span>Dashboard</span></a> </li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Kategori</span> <span class="label label-important">2</span></a>
        <ul <?php if(preg_match("/categor/i", $url)){ ?> style="display:block;" <?php } ?>>
        <li <?php if(preg_match("/add-category/i", $url)){ ?> class="active" <?php } ?>>
          <a href="{{url ('/admin/add-category')}}">Tambah Kategori</a></li>
          <li <?php if(preg_match("/view-categories/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/view-categories')}}">Lihat Kategori</a></li>
        </ul>
      </li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Produk</span> <span class="label label-important">2</span></a>
        <ul <?php if(preg_match("/product/i", $url)){ ?> style="display:block;" <?php } ?>>
        <li <?php if(preg_match("/add-product/i", $url)){ ?> class="active" <?php } ?>>
          <a href="{{url ('/admin/add-product')}}">Tambah Produk</a></li>
          <li <?php if(preg_match("/view-products/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/view-products')}}">Lihat Produk</a></li>
        </ul>
      </li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Kupon</span> <span class="label label-important">2</span></a>
        <ul <?php if(preg_match("/coupon/i", $url)){ ?> style="display:block;" <?php } ?>>
        <li <?php if(preg_match("/add-coupon/i", $url)){ ?> class="active" <?php } ?>>
          <a href="{{url ('/admin/add-coupon')}}">Tambah Kupon</a></li>
          <li <?php if(preg_match("/view-coupons/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/view-coupons')}}">Daftar Kupon</a></li>
        </ul>
      </li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Pesanan</span> <span class="label label-important">1</span></a>
        <ul <?php if(preg_match("/orders/i", $url)){ ?> style="display:block;" <?php } ?>>
          <li <?php if(preg_match("/view-orders/i", $url)){ ?> class="active" <?php } ?>>
            <a href="{{url ('/admin/view-orders')}}">Lihat Pesanan</a></li>
        </ul>
      </li>
      
    </ul>
  </div>
  <!--sidebar-menu-->
  
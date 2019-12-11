@extends('layouts.frontLayout.front_design')
@section('content')

<div id="contact-page" class="container" >
<div class="bg">
<div class="row">    		
<div class="col-sm-8">    			   			
<h2 class="title text-center">Hubungi Kami <strong> </strong></h2> 
<div class="status alert alert-success" style="display: none"></div>
<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
<div class="form-group col-md-6">
    <input type="text" name="name" class="form-control" required="required" placeholder="Nama">
</div>
<div class="form-group col-md-6">
    <input type="email" name="email" class="form-control" required="required" placeholder="Email">
</div>
<div class="form-group col-md-12">
    <input type="text" name="subject" class="form-control" required="required" placeholder="Subyek">
</div>
<div class="form-group col-md-12">
    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Tulis Pesanmu Disini"></textarea>
</div>                        
<div class="form-group col-md-12">
    <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
</div>
</form>   			    				    				
<div id="gmap" class="contact-map">
</div>
</div>
<div class="col-sm-4">
<div class="contact-info">
<h2 class="title text-center">Info</h2>
<address>
    <p>Chip Jogja.</p>
    <p>Universitas Islam Indonesia</p>
    <p>Indonesia, Yogyakarta</p>
    <p>Mobile: +628323131</p>
    <p>Email: chip@students.uii.ac.id</p>
</address>
<div class="social-networks">
    <h2 class="title text-center">Media Sosial</h2>
    <ul>
        <li>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-google-plus"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-youtube"></i></a>
        </li>
    </ul>
</div>
</div>
</div>			 		
</div>    	  
</div>	
</div><!--/#contact-page-->

@endsection
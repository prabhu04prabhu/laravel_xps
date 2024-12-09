@extends('front_end.header')
@section('content')
<header class="banner-heading clear">
	<h2 class="left">Category</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="{{'/'}}">Home</a></li>
			<li><a href="{{'category'}}">Category</a></li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content category clear">
    	<aside class="sidebar left">
			<h2>Search</h2>
            <fieldset class="clear">
                <div class="custom-select">
                    <select>
                        <option value="0">Product Type</option>
                        <option value="1">Product One</option>
                        <option value="1">Product Two</option>
                        <option value="1">Product Three</option>
                        <option value="1">Product Four</option>
                        <option value="1">Product Five</option>
                        <option value="1">Product Six</option>
                    </select>
                </div>
                <div class="custom-select">
                    <select>
                        <option value="0">Make</option>
                        <option value="1">Make One</option>
                        <option value="1">Make Two</option>
                        <option value="1">Make Three</option>
                        <option value="1">Make Four</option>
                        <option value="1">Make Five</option>
                        <option value="1">Make Six</option>
                    </select>
                </div>
                <div class="custom-select">
                    <select>
                        <option value="0">Model</option>
                        <option value="1">Model One</option>
                        <option value="1">Model Two</option>
                        <option value="1">Model Three</option>
                        <option value="1">Model Four</option>
                        <option value="1">Model Five</option>
                        <option value="1">Model Six</option>
                    </select>
                </div>
                <div class="custom-select">
                    <select>
                        <option value="0">Brand</option>
                        <option value="1">Brand One</option>
                        <option value="1">Brand Two</option>
                        <option value="1">Brand Three</option>
                        <option value="1">Brand Four</option>
                        <option value="1">Brand Five</option>
                        <option value="1">Brand Six</option>
                    </select>
                </div>
                <div class="custom-select">
                    <select>
                        <option value="0">State</option>
                        <option value="1">State One</option>
                        <option value="1">State Two</option>
                        <option value="1">State Three</option>
                        <option value="1">State Four</option>
                        <option value="1">State Five</option>
                        <option value="1">State Six</option>
                    </select>
                </div>
                <div class="custom-select">
                    <select>
                        <option value="0">City</option>
                        <option value="1">City One</option>
                        <option value="1">City Two</option>
                        <option value="1">City Three</option>
                        <option value="1">City Four</option>
                        <option value="1">City Five</option>
                        <option value="1">City Six</option>
                    </select>
                </div>
                <div class="clear"></div>
                <input name="Find Product" type="submit" value="Find Product" id="contact-button"/>
            </fieldset>
            <div class="category-other">
                <h2>Other Category</h2>
                <ul>
                    <li><a href="#">Special Vehicle Batteries</a></li>
                    <li><a href="#">Dozer Batteries</a></li>
                    <li><a href="#">Three Wheeler Batteries</a></li>
                    <li><a href="#">Compactor Batteries</a></li>
                    <li><a href="#">Generator Batteries</a></li>
                    <li><a href="#">Bus Batteries</a></li>
                    <li><a href="#">Genset Batteries</a></li>
                    <li><a href="#">Bike Batteries</a></li>
                    <li><a href="#">Dumper Batteries</a></li>
                    <li><a href="#">Crane Batteries</a></li>
                </ul>
            </div>
        </aside>
    	<aside class="content shop-by-category-page right">
            <h2>Car Batteries Manufacturer</h2>
            <ul>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Maruti Suzuki</h3></figcaption>
                    <figure><img src="assets/front_end/images/maruthi-suzuki.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Hundai</h3></figcaption>
                    <figure><img src="assets/front_end/images/hundai.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Tata</h3></figcaption>
                    <figure><img src="assets/front_end/images/tata.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Mahindra</h3></figcaption>
                    <figure><img src="assets/front_end/images/mahindra.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Toyota</h3></figcaption>
                    <figure><img src="assets/front_end/images/toyota.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Honda</h3></figcaption>
                    <figure><img src="assets/front_end/images/honda.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Volkswagen</h3></figcaption>
                    <figure><img src="assets/front_end/images/volkswagen.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Skoda</h3></figcaption>
                    <figure><img src="assets/front_end/images/skoda.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Renault</h3></figcaption>
                    <figure><img src="assets/front_end/images/renault.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Nissan</h3></figcaption>
                    <figure><img src="assets/front_end/images/nissan.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Ford</h3></figcaption>
                    <figure><img src="assets/front_end/images/ford.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Audi</h3></figcaption>
                    <figure><img src="assets/front_end/images/audi.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Bmw</h3></figcaption>
                    <figure><img src="assets/front_end/images/bmw.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Chevrolet</h3></figcaption>
                    <figure><img src="assets/front_end/images/chevrolet.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Flat</h3></figcaption>
                    <figure><img src="assets/front_end/images/flat.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Maruti Suzuki</h3></figcaption>
                    <figure><img src="assets/front_end/images/alfa-romeo.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Daewoo</h3></figcaption>
                    <figure><img src="assets/front_end/images/daewoo.jpg"></figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
                    <figcaption><h3>Force</h3></figcaption>
                    <figure><img src="assets/front_end/images/force.jpg"></figure>
                    </a>
                </li>
            </ul>
        </aside>
    </section>
</section>
@endsection
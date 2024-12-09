@extends('front_end.header')
@section('content')
<link rel='stylesheet' href='assets/front_end/css/mapbox.css'>
<section class="section">
    <section class="section-content store clear">
        <div class="scoped-top100 body-top100">
           <h3>Store Locator</h3>
          <div class="row">
            <div class="everest addr">
                <div>
            <p><strong>Branch:</strong> EVEREST AGENCIES</p>
            <p><strong>Mobile Number:</strong> 8903331181</p>
        </div>
            <figcaption class="figure">
                <p class="para"><strong>Address:</strong> Old No: 141.A2, New No: 602 A,<br/> NRK Complex, Opp To Akshaya Hospital,<br/> Near Pandiyan Hotel,<br/> Salem Main Road, Namakkal.637003</p>
                </figcaption>
          </div>
          <div class="everest addr">
            <div>
            <p><strong>Branch:</strong> A.S ENTERPRISES</p>
            <p><strong>Mobile Number:</strong> 7338841113</p>
        </div>
            <figcaption class="figure">
            <p class="para"><strong>Address:</strong> 1235/487, Salem-Kadalur Main Road,<br/> Opp. Vealmurugan Theater,<br/>Attur.637001</p><br/>
        </figcaption>
          </div>
          <div class="everest addr">
            <div>
            <p><strong>Branch:</strong> XPS BATTERY STORE</p>
            <p><strong>Mobile Number:</strong> 7397011122</p>
        </div>
            <figcaption class="figure">
            <p class="para"><strong>Address:</strong> Old No: 141.A2, New No: 602 A,<br/> NRK Complex, Opp To Akshaya Hospital,<br/> Near Pandiyan Hotel,<br/> Salem Main Road, Namakkal.637001</p>
        </figcaption>
          </div>
          <div class="everest addr">
            <div>
            <p><strong>Branch:</strong> XPS BATTERY STORE</p>
            <p><strong>Mobile Number:</strong> 7338841113</p>
        </div>
            <figcaption class="figure">
            <p class="para"><strong>Address:</strong> 1235/487, Salem-Kadalur Main Road,<br/> Opp. Vealmurugan Theater,<br/>Attur.</p>
        </figcaption>
          </div>
          <div class="everest addr">
            <div>
            <p><strong>Branch:</strong> XPS BATTERY STORE</p>
            <p><strong>Mobile Number:</strong> 7338841112</p>
        </div>
            <figcaption class="figure">
            <p class="para"><strong>Address:</strong> 143 Chairman Ramalingam Road,<br/> Opp. Sidhaswara Bus Stop,<br/> Ammapet Main Road,Salem. 636001</p>
        </figcaption>
          </div>
          <div class="everest addr">
            <div>
            <p><strong>Branch:</strong> XPS BATTERY STORE</p>
            <p><strong>Mobile Number:</strong> 9944402002</p>
        </div>
            <figcaption class="figure">
            <p class="para"><strong>Address:</strong> 143 Chairman Ramalingam Road,<br/> Opp. Sidhaswara Bus Stop,<br/> Ammapet Main Road,Salem. 636001</p>
        </figcaption>
          </div>
          <div class="everest addr">
            <div>
            <p><strong>Branch:</strong> ANNAPOORNA FUEL STATION</p>
            <p><strong>Mobile Number:</strong> 8056821111</p>
        </div>
            <figcaption class="figure">
            <p class="para"><strong>Address:</strong> Salem<br/><br/><br/></p>
        </figcaption>
          </div>
          <div class="everest addr">
            <div>
            <p><strong>Branch:</strong> SRI RANGANATHAR & CO FUEL STATION</p>
            <p><strong>Mobile Number:</strong> 8056821111</p>
        </div>
            <figcaption class="figure">
            <p class="para"><strong>Address:</strong> 3/7 Srinagar-Kanyakumari Highway,<br/> Opp, Grand Estancia,<br/> Jagir Ammapalayam, Salem</p>
        </figcaption>
          </div>
          <div class="everest addr">
            <div>
            <p><strong>Branch:</strong> POONKALI FUEL STATION</p>
            <p><strong>Mobile Number:</strong> 8056821111</p>
        </div>
            <figcaption class="figure">
            <p class="para"><strong>Address:</strong> OPP. Chinnatirupathi Police Station,<br/> BP Fuel Station, Salem.<br/><br/></p>
        </figcaption>
          </div>
        </div>
        </div>
        <br/>
    </section>
</section>
<script src='assets/front_end/js/mapbox.js'></script>
<script  src="assets/front_end/js/store.js"></script>
@endsection
<style>
.everest{
    border: 1px solid #fff;
    width: 31.333%;
    float: left;
    margin-right: 15px;
    /*min-height: 38%;*/
    border-radius: 7px;
    box-shadow: -2px 1px 13px #9f9c9c;
}
.everest p{
    font-size: 14px;
}
.addr{
    margin-top: 15px;
    padding: 15px;
    margin-bottom: 15px;
}
.figure{
    background: #e6efea;
    padding: 4px;
    border-radius: 5px;
    min-height: 134px;
}
.figure strong{
     color: #000;
}
.para{
    color: #000;
    font-size: 14px;
}
@media only screen and (max-width: 799px){
.everest{
    border: 1px solid #b5adad;
    float: left;
    margin-right: 15px;
    min-height: 20%;
    width: 100%;
    box-shadow: -4px -4px 13px #9f9c9c;
}
}


</style>
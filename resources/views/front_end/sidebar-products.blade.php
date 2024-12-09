<h2>Search</h2>
<fieldset class="clear">
    <form class="form-horizontal m-t-30" action="filter_search" method="POST">
        @csrf
        <div class="custom-select">
            <select name="fcategory">
                @php
                $cat_info = DB::table('categorymaster')->get();
                @endphp
                <option value="0">Product Type</option>
                @foreach ($cat_info as $row_shop)

                <option value="{{$row_shop->CategoryID}}">{{$row_shop->CategoryName}}</option>
                @endforeach
               
            </select>
        </div>
       
        <div class="custom-select">
            <select name="fmodel">
                @php
                $model_info = DB::table('productmaster')->get();
                @endphp
                <option value="0">Model</option>
                @foreach ($model_info as $row_model)
                <option value="{{$row_model->ProductID}}">{{$row_model->ProductModelNo}}</option>
                @endforeach
               
            </select>
        </div>
        <div class="custom-select">
            <select name="fbrand">
                @php
                $brand_info = DB::table('brandmaster')->get();
                @endphp
                <option value="0">Brand</option>
                @foreach ($brand_info as $row_brand)
                <option value="{{$row_brand->BrandID }}">{{$row_brand->BrandName}}</option>
                @endforeach               
            </select>
        </div>

<div class="range-slider">  <h4>Price</h4>
            <span class="rangeValues" id="rangevalueid"></span>
            <input value="0" min="0" max="50000" step="0" type="range" id="range1" onchange="updateTextInput();">
            <input value="50000" min="0" max="50000" step="0" type="range" id="range2" onchange="updateTextInput();">
        </div>

        <div class="clear"></div>
        <input name="Find Product" type="submit" value="Find Product" id="contact-button" />
    </form>
</fieldset>
<div class="capacity">
    <h2>Capacity</h2>
    <fieldset class="clear">
        <div class="clear"><input name="Battery-150Ah" class="checkbox-custom" id="checkbox-3" type="checkbox" value="Battery-150Ah">
            <label class="checkbox-custom-label" for="checkbox-3">Battery-150Ah</label>
        </div>
        <div class="clear"><input name="170 Ah" class="checkbox-custom" id="checkbox-4" type="checkbox" value="170 Ah">
            <label class="checkbox-custom-label" for="checkbox-4">170 Ah</label>
        </div>
        <div class="clear"><input name="240 Ah" class="checkbox-custom" id="checkbox-5" type="checkbox" value="240 Ah">
            <label class="checkbox-custom-label" for="checkbox-5">240 Ah</label>
        </div>
        <div class="clear"><input name="115Ah" class="checkbox-custom" id="checkbox-6" type="checkbox" value="115Ah">
            <label class="checkbox-custom-label" for="checkbox-6">115Ah</label>
        </div>
        <div class="clear"><input name="25 Ah" class="checkbox-custom" id="checkbox-7" type="checkbox" value="25 Ah">
            <label class="checkbox-custom-label" for="checkbox-7">25 Ah</label>
        </div>
        <div class="clear"><input name="145 Ah" class="checkbox-custom" id="checkbox-8" type="checkbox" value="145 Ah">
            <label class="checkbox-custom-label" for="checkbox-8">145 Ah</label>
        </div>
        <div class="clear"><input name="Battery-135Ah" class="checkbox-custom" id="checkbox-9" type="checkbox" value="Battery-135Ah">
            <label class="checkbox-custom-label" for="checkbox-9">Battery-135Ah</label>
        </div>
        <div class="clear"><input name="Battery" class="checkbox-custom" id="5KW" type="checkbox" value="Battery">
            <label class="checkbox-custom-label" for="5KW">5KW</label>
        </div>
        <div class="clear"><input name="Battery-180Ah" class="checkbox-custom" id="Battery-180Ah" type="checkbox" value="Battery-180Ah">
            <label class="checkbox-custom-label" for="Battery-180Ah">Battery-180Ah</label>
        </div>
        <div class="clear"><input name="700 VA" class="checkbox-custom" id="700 VA" type="checkbox" value="700 VA">
            <label class="checkbox-custom-label" for="700 VA">700 VA</label>
        </div>
        <div class="clear"><input name="900VA" class="checkbox-custom" id="900VA" type="checkbox" value="900VA">
            <label class="checkbox-custom-label" for="900VA">900VA</label>
        </div>
        <div class="clear"><input name="900 VA" class="checkbox-custom" id="900 VA" type="checkbox" value="900 VA">
            <label class="checkbox-custom-label" for="900 VA">900 VA</label>
        </div>
        <div class="clear"><input name="1700VA" class="checkbox-custom" id="1700VA" type="checkbox" value="1700VA">
            <label class="checkbox-custom-label" for="1700VA">1700VA</label>
        </div>
    </fieldset>
</div>
<script type="text/javascript">
      function updateTextInput() {
        document.getElementById("rangevalueid").innerHTML= "₹ " + document.getElementById("range1").value +" - ₹ " + document.getElementById("range2").value;
        }

        $(document).ready(function() {
            document.getElementById("rangevalueid").innerHTML="₹ " + document.getElementById("range1").value +" - ₹ " + document.getElementById("range2").value;
        });

    </script>
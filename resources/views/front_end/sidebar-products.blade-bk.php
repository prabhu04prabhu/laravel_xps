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
			<div class="price-range-block">
            	<h3>Price</h3>
                <div class="clear">
					<div class="indian-rupee left"><input type="number" min=0 max="9900" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field" /></div>
					<div class="indian-rupee right"><input type="number" min=0 max="10000" oninput="validity.valid||(value='10000');" id="max_price" class="price-range-field" /></div>
                </div>
                <div id="slider-range" class="price-filter-range" name="rangeInput"></div>
                <input name="Search" type="submit" value="Apply" id="Search"/>      
                <!--<div id="searchResults" class="search-results-block"></div>-->
            </div>            
            <div class="capacity">
            	<h2>Capacity</h2>
				<fieldset class="clear">
                    <div class="clear"><input name="Battery-150Ah" class="checkbox-custom" id="checkbox-3" type="checkbox" value="Battery-150Ah">
                    <label class="checkbox-custom-label" for="checkbox-3" >Battery-150Ah</label></div>
                    <div class="clear"><input name="170 Ah" class="checkbox-custom" id="checkbox-4" type="checkbox" value="170 Ah">
                    <label class="checkbox-custom-label" for="checkbox-4" >170 Ah</label></div>
                    <div class="clear"><input name="240 Ah" class="checkbox-custom" id="checkbox-5" type="checkbox" value="240 Ah">
                    <label class="checkbox-custom-label" for="checkbox-5" >240 Ah</label></div>
                    <div class="clear"><input name="115Ah" class="checkbox-custom" id="checkbox-6" type="checkbox" value="115Ah">
                    <label class="checkbox-custom-label" for="checkbox-6" >115Ah</label></div>
                    <div class="clear"><input name="25 Ah" class="checkbox-custom" id="checkbox-7" type="checkbox" value="25 Ah">
                    <label class="checkbox-custom-label" for="checkbox-7" >25 Ah</label></div>
                    <div class="clear"><input name="145 Ah" class="checkbox-custom" id="checkbox-8" type="checkbox" value="145 Ah">
                    <label class="checkbox-custom-label" for="checkbox-8" >145 Ah</label></div>
                    <div class="clear"><input name="Battery-135Ah" class="checkbox-custom" id="checkbox-9" type="checkbox" value="Battery-135Ah">
                    <label class="checkbox-custom-label" for="checkbox-9" >Battery-135Ah</label></div>
                    <div class="clear"><input name="Battery" class="checkbox-custom" id="5KW" type="checkbox" value="Battery">
                    <label class="checkbox-custom-label" for="5KW" >5KW</label></div>
                    <div class="clear"><input name="Battery-180Ah" class="checkbox-custom" id="Battery-180Ah" type="checkbox" value="Battery-180Ah">
                    <label class="checkbox-custom-label" for="Battery-180Ah" >Battery-180Ah</label></div>
                    <div class="clear"><input name="700 VA" class="checkbox-custom" id="700 VA" type="checkbox" value="700 VA">
                    <label class="checkbox-custom-label" for="700 VA" >700 VA</label></div>
                    <div class="clear"><input name="900VA" class="checkbox-custom" id="900VA" type="checkbox" value="900VA">
                    <label class="checkbox-custom-label" for="900VA" >900VA</label></div>
                    <div class="clear"><input name="900 VA" class="checkbox-custom" id="900 VA" type="checkbox" value="900 VA">
                    <label class="checkbox-custom-label" for="900 VA" >900 VA</label></div>
                    <div class="clear"><input name="1700VA" class="checkbox-custom" id="1700VA" type="checkbox" value="1700VA">
                    <label class="checkbox-custom-label" for="1700VA" >1700VA</label></div>
                </fieldset>
            </div>
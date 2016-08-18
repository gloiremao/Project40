<!--
- Note: Please include script.js !
- Title: Search module for laravel front end 
- Content: Search input, advance search
- Author: Chen-Nien, Mao (chennien.mao@gmail.com)
- Date: 2016/08/18
-->
<div id="search-area" class="col-md-8 col-md-offset-2">
	<form action="search" onsubmit="return validateForm()">
		<div class="input-group input-group-lg">
			<span class="input-group-btn">
		        <button id="smart-btn" class="btn btn-primary" type="button">進階搜尋</button>
		    </span>
				<input id="input-search" type="text" name="query" class="form-control" placeholder="全站搜尋..." onkeypress="return onEnterPress(event)">
				<span class="input-group-btn">
				<button id="search_btn" class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</span>
		</div><!-- /input-group -->
		<div id="smart-search" class="cardview area-hide"> 
		
			<div id="select-type"  class="btn-group">
				<select multiple="multiple" name="types" class="selectpicker" multiple data-actions-box="true" title="指定類型" data-width="fit"> 
				    <option >論文</option>
				    <option >簡報</option>
				    <option >影片</option>
				    <option >公告</option>
				    <option >專利</option>
				    <option >標準</option>
				    <option >型錄</option>
				    <option >書籍</option>
				    <option >其它</option>
				</select>
			</div>

			<div id="select-country"  class="btn-group">
				<select  name="countries" class="selectpicker" multiple data-actions-box="true" title="指定國家" data-live-search="true" data-width="fit">
				    <option data-subtext="Germany" value="Germany">德國</option>
					<option data-subtext="Taiwan" value="R.O.C.">台灣</option>
					<option data-subtext="Italy" value="Italy">義大利</option>
					<option data-subtext="Slovenia" value="Slovenia">斯洛伐尼亞</option>
					<option data-subtext="China" value="China">中國</option>
					<option data-subtext="Estonia" value="Estonia">愛沙尼亞</option>
					<option data-subtext="Brazil" value="Brazil">巴西</option>
					<option data-subtext="Spain" value="Spain">西班牙</option>
					<option data-subtext="South Africa" value="South Africa">南非</option>
					<option data-subtext="U.S.A." value="U.S.A.">美國</option>
					<option data-subtext="Thailand" value="Thailand">泰國</option>
					<option data-subtext="Netherlands" value="Netherlands">荷蘭</option>
					<option data-subtext="Portugal" value="Portugal">葡萄牙</option>
					<option data-subtext="Belgium" value="Belgium">比利時</option>
					<option data-subtext="Croatia" value="Croatia">克羅埃西亞</option>
					<option data-subtext="Japan" value="Japan">日本</option>
					<option data-subtext="Serbia" value="Serbia">塞爾維亞</option>
					<option data-subtext="Switzerland" value="Switzerland">瑞士</option>
					<option data-subtext="Austria" value="Austria">澳大利亞</option>
					<option data-subtext="Greece" value="Greece">希臘</option>
					<option data-subtext="Finland" value="Finland">芬蘭</option>
					<option data-subtext="Ireland" value="Ireland">伊朗</option>
					<option data-subtext="NewZealand" value="NewZealand">紐西蘭</option>
					<option data-subtext="Sweden" value="Sweden">瑞典</option>
					<option data-subtext="Hungary" value="Hungary">匈牙利</option>
					<option data-subtext="India" value="India">印度</option>
					<option data-subtext="Romania" value="Romania">羅馬尼亞</option>
					<option data-subtext="United Kingdom" value="United Kingdom">英國</option>
					<option data-subtext="Korea" value="Korea">韓國(南韓)</option>
					<option data-subtext="Poland" value="Poland">波瀾</option>
					<option data-subtext="France" value="France">法國</option>
				</select>
			</div>
			<div id="select-field"  class="btn-group">
				<select  name="fields" class="selectpicker" multiple data-actions-box="true" title="指定領域" data-width="fit">
				    <option >IoT</option>
				    <option >Big Data</option>
				    <option >數位製造</option>
				    <option >資訊安全</option>
				    <option >Sensor Network</option>
				    <option >CPS</option>
				    <option >工業網路</option>
				    <option >I4</option>
				    <option >其它</option>
				</select>
			</div>
			<div id="select-year"  class="btn-group">
				<select  name="years" class="selectpicker" multiple data-actions-box="true" title="指定年份" data-width="fit">
				    <option >2016</option>
				    <option >2015</option>
				    <option >2014</option>
				    <option >2013</option>
				    <option >2012</option>
				    <option >2011</option>
				    <option >2005年以後</option>
				    <option >2000年以後</option>
				</select>
			</div>
	  		
		</div>
	</form>
</div><!-- /.col-lg-6 -->

			<div class="params">

				<fieldset>
					<legend>ヘアカラー</legend>
					<div class="parts">
						<div class="hair_color height_center">
							<input type="range" class="slider" id="hair.color.r" value="50" min="0" max="255">
							<label for="hair.color.r">ヘアカラー赤</label>
						</div>
						<div class="hair.color height_center">
							<input type="range" class="slider" id="hair.color.g" value="50" min="0" max="255">
							<label for="hair.color.g">ヘアカラー緑</label>
						</div>
						<div class="hair.color height_center">
							<input type="range" class="slider" id="hair.color.b" value="50" min="0" max="255">
							<label for="hair.color.b">ヘアカラー青</label>
						</div>
					</div>
				</fieldset>


				<fieldset>
					<legend>スキンカラー</legend>
					<div class="parts">
						<div class="skin_color height_center">
							<input type="range" class="slider" id="skin.color.r" value="50" min="0" max="255">
							<label for="skin.color.r">スキンカラー赤</label>
						</div>
						<div class="skin.color height_center">
							<input type="range" class="slider" id="skin.color.g" value="50" min="0" max="255">
							<label for="skin.color.g">スキンカラー緑</label>
						</div>
						<div class="skin.color height_center">
							<input type="range" class="slider" id="skin.color.b" value="50" min="0" max="255">
							<label for="skin.color.b">スキンカラー青</label>
						</div>
					</div>
				</fieldset>

				<fieldset>
					<legend>アイカラー</legend>
					<div class="parts">
						<div class="pupil_color">
							<input type="range" class="slider" id="eye.pupil.color.r" value="50" min="0" max="255">
							<label for="eye.pupil.color.r">瞳孔の赤</label>
						</div>
						<div class="pupil_color">
							<input type="range" class="slider" id="eye.pupil.color.g" value="50" min="0" max="255">
							<label for="eye.pupil.color.g">瞳孔の緑</label>
						</div>
						<div class="pupil_color">
							<input type="range" class="slider" id="eye.pupil.color.b" value="50" min="0" max="255">
							<label for="eye.pupil.color.b">瞳孔の青</label>
						</div>
					</div>

					<div class="parts">
						<div class="iris_color">
							<input type="range" class="slider" id="eye.iris.color.r" value="50" min="0" max="255">
							<label for="eye.iris.color.r">虹彩の赤</label>
						</div>
						<div class="iris_color">
							<input type="range" class="slider" id="eye.iris.color.g" value="50" min="0" max="255">
							<label for="eye.iris.color.g">虹彩の緑</label>
						</div>
						<div class="iris_color">
							<input type="range" class="slider" id="eye.iris.color.b" value="50" min="0" max="255">
							<label for="eye.iris.color.b">虹彩の青</label>
						</div>
					</div>

				</fieldset>

				<fieldset>
					<legend>目</legend>

					<div class="parts">
						<div class="eye">
							<input class="slider" id="eye.size" type="range" value="1" min="1" max="100" step="1">
							<label for="eye.size">目の大きさ</label>
						</div>
						<div class="pupil">
							<input class="slider" id="eye.pupil.size" type="range" value="1" min="1" max="100" step="1">
							<label for="eye.pupil.size">瞳の大きさ</label>
						</div>
						<div class="eye">
							<input class="slider" id="eye.scale" type="range" value="1" min="1" max="5" step="0.01">
							<label for="eye.scale">目の縦幅</label>
						</div>
						<div class="eye">
							<input class="slider" id="eye.position.y" type="range" value="1" min="-100" max="100" step="1">
							<label for="eye.position.y">目の高さ</label>
						</div>
						<div class="eye">
							<input class="slider" id="eye.position.x" type="range" value="1" min="1" max="100" step="1">
							<label for="eye.position.x">目の水平</label>
						</div>
					</div>

					<div class="parts">
						<div class="eye_move">
							<input type="range" class="slider" id="eye.move.x" value="0" min="-255" max="255">
							<label for="eye.move.x">視点左右</label>
						</div>
						<div class="eye_move">
							<input type="range" class="slider" id="eye.move.y" value="0" min="-255" max="255">
							<label for="eye.move.y">視点上下</label>
						</div>
					</div>

					<div class="parts">
						<div class="eye_head">
							<input type="range" class="slider" id="eye.eye_head.height" value="0" min="-255" max="255">
							<label for="eye.eye_head.height">目頭の高さ</label>
						</div>
						<div class="eye_head">
							<input type="range" class="slider" id="eye.eye_head.width" value="0" min="-255" max="255">
							<label for="eye.eye_head.width">目頭の水平</label>
						</div>
						<div class="eye_end">
							<input type="range" class="slider" id="eye.eye_end.x" value="0" min="-255" max="255">
							<label for="eye.eye_end.x">目尻の水平</label>
						</div>
						<div class="eye_end">
							<input type="range" class="slider" id="eye.eye_end.y" value="0" min="-255" max="255">
							<label for="eye.eye_end.y">目尻の高さ</label>
						</div>

						<div class="span_to_eye">
							<input type="range" class="slider" id="eye.span_to_eye_x" value="0" min="-10" max="255">
							<label for="eye.span_to_eye_x">目とこめかみの距離</label>
						</div>
						<div class="upper_eyeline_end">
							<input type="range" class="slider" id="eye.upper_eyeline_end.x" value="0" min="-255" max="255">
							<label for="eye.upper_eyeline_end.x">アイライン終端X</label>
						</div>
						<div class="upper_eyeline_end">
							<input type="range" class="slider" id="eye.upper_eyeline_end.y" value="0" min="-255" max="255">
							<label for="eye.upper_eyeline_end.y">アイライン終端Y</label>
						</div>
					</div>


					<div class="parts">
						<div class="upper_eyeline_cp">
							<input type="range" class="slider" id="eye.upper_eyeline_cp1.y" value="0" min="-255" max="255">
							<label for="eye.upper_eyeline_cp1.y">アイライン高さ1</label>
						</div>
						<div class="upper_eyeline_cp">
							<input type="range" class="slider" id="eye.upper_eyeline_cp2.y" value="0" min="-255" max="255">
							<label for="eye.upper_eyeline_cp2.y">アイライン高さ2</label>
						</div>
						<div class="upper_eyeline_cp">
							<input type="range" class="slider" id="eye.upper_eyeline_cp1.x" value="0" min="-255" max="255">
							<label for="eye.upper_eyeline_cp1.x">アイラインx座標1</label>
						</div>
						<div class="upper_eyeline_cp">
							<input type="range" class="slider" id="eye.upper_eyeline_cp2.x" value="0" min="-255" max="255">
							<label for="eye.upper_eyeline_cp2.x">アイラインx座標2</label>
						</div>
						<div class="upper_eyeline_cp">
							<input type="range" class="slider" id="eye.upper_eyeline_cp.y" value="0" min="-255" max="255">
							<label for="eye.upper_eyeline_cp.y">アイライン上側両方高さ</label>
						</div>
					</div>

					<div class="parts">
						<div class="lower_eyeline_cp">
							<input type="range" class="slider" id="eye.lower_eyeline_cp1.y" value="0" min="-255" max="255">
							<label for="eye.lower_eyeline_cp1.y">ロウワーアイラインCP1高さ</label>
						</div>
						<div class="lower_eyeline_cp">
							<input type="range" class="slider" id="eye.lower_eyeline_cp2.y" value="0" min="-255" max="255">
							<label for="eye.lower_eyeline_cp2.y">ロウワーアイラインCP2高さ</label>
						</div>
						<div class="lower_eyeline_cp">
							<input type="range" class="slider" id="eye.lower_eyeline_cp1.x" value="0" min="-255" max="255">
							<label for="eye.lower_eyeline_cp1.x">ロウワーアイラインCP1x座標</label>
						</div>
						<div class="lower_eyeline_cp">
							<input type="range" class="slider" id="eye.lower_eyeline_cp2.x" value="0" min="-255" max="255">
							<label for="eye.lower_eyeline_cp2.x">ロウワーアイラインCP2x座標</label>
						</div>
					</div>

					<div class="parts">
						<div class="lower_eyelid">
							<input type="range" class="slider" id="eyelid.lower.y" value="0" min="-255" max="255">
							<label for="eyelid.lower.y">下まぶたの高さ</label>
						</div>

					</div>
				</fieldset>

				<fieldset>
					<legend>二重</legend>
					<div class="parts">

						<div class="double">
							<input type="range" class="slider" id="eyeline_double.both_cp1.y" value="0" min="-255" max="255">
							<label for="eyeline_double.both_cp1.y">cp1y</label>
						</div>
						<div class="double">
							<input type="range" class="slider" id="eyeline_double.both_cp2.y" value="0" min="-255" max="255">
							<label for="eyeline_double.both_cp2.y">cp2y</label>
						</div>

						<div class="double">
							<input type="range" class="slider" id="eyeline_double.both_cp1.x" value="0" min="-255" max="255">
							<label for="eyeline_double.both_cp1.x">cp1x</label>
						</div>
						<div class="double">
							<input type="range" class="slider" id="eyeline_double.both_cp2.x" value="0" min="-255" max="255">
							<label for="eyeline_double.both_cp2.x">cp2x</label>
						</div>

					</div>
				</fieldset>

				<fieldset>
					<legend>鼻</legend>

					<div class="nose">
						<input class="" id="nose.flag" name="show" value="nose_flag" type="checkbox">
						<label for="nose.flag">鼻1表示</label>
					</div>

					<div class="nose">
						<input class="" id="nose2.flag" name="show" value="nose_flag" type="checkbox" checked="checked">
						<label for="nose2.flag">鼻2表示</label>
					</div>

					<div class="parts">

						<div class="nose">
							<input type="range" class="slider" id="nose.position.y" value="0" min="-255" max="255">
							<label for="nose.position.y">位置</label>
						</div>
						<div class="nose">
							<input type="range" class="slider" id="nose.bottom.x" value="0" min="-255" max="255">
							<label for="nose.bottom.x">鼻先のX座標</label>
						</div>
						<div class="nose">
							<input type="range" class="slider" id="nose.bottom.y" value="0" min="-255" max="255">
							<label for="nose.bottom.y">長さ</label>
						</div>
						<div class="nose">
							<input type="range" class="slider" id="nose.cp1.x" value="0" min="-255" max="255">
							<label for="nose.cp1.x">CP1 X</label>
						</div>
						<div class="nose">
							<input type="range" class="slider" id="nose.cp2.x" value="0" min="-255" max="255">
							<label for="nose.cp2.x">CP2 X</label>
						</div>
						<div class="nose">
							<input type="range" class="slider" id="nose.cp1.y" value="0" min="-255" max="255">
							<label for="nose.cp1.y">CP1 Y</label>
						</div>
						<div class="nose">
							<input type="range" class="slider" id="nose.cp2.y" value="0" min="-255" max="255">
							<label for="nose.cp2.y">CP2 Y</label>
						</div>

					</div>
				</fieldset>



				<fieldset>
					<legend>輪郭</legend>
					<div class="parts">
						<div class="cheek">
							<input type="range" class="slider" id="cheek.width" value="30" min="-255" max="255">
							<label for="cheek.width">頬の幅</label>
						</div>
						<div class="cheek">
							<input type="range" class="slider" id="cheek.cp1.x" value="0" min="-255" max="255">
							<label for="cheek.cp1.x">頬の広がり1</label>
						</div>
						<div class="cheek">
							<input type="range" class="slider" id="cheek.cp2.x" value="30" min="-255" max="255">
							<label for="cheek.cp2.x">頬の広がり2</label>
						</div>
						<div class="chin">
							<input type="range" class="slider" id="chin.width" value="0" min="-255" max="255">
							<label for="chin.width">顎の幅</label>
						</div>
						<div class="chin">
							<input type="range" class="slider" class="slider" id="chin.height" value="0" min="-255" max="255">
							<label for="chin.height">顎の高さ</label>
						</div>
					</div>

					<div class="cheek_blur">
						<input class="" id="cheek.blur.flag" name="show" value="cheek_blur" type="checkbox" checked="checked">
						<label for="cheek.blur.flag">チーク表示</label>
					</div>
				</fieldset>

				<fieldset>
					<legend>陰</legend>
					<div class="parts">
						<div class="shadow">
							<input type="range" class="slider" id="cheek.shadow.cp1.x" value="0" min="-255" max="255">
							<label for="cheek.shadow.cp1.x">頬の陰の広がり1</label>
						</div>

						<div class="shadow">
							<input type="range" class="slider" id="cheek.shadow.cp1.y" value="0" min="-255" max="255">
							<label for="cheek.shadow.cp1.y">頬の陰 高さ1</label>
						</div>

						<div class="shadow">
							<input type="range" class="slider" id="cheek.shadow.cp2.x" value="0" min="0" max="255">
							<label for="cheek.shadow.cp2.x">頬の陰の広がり2</label>
						</div>

						<div class="shadow">
							<input type="range" class="slider" id="cheek.shadow.cp2.y" value="0" min="-255" max="255">
							<label for="cheek.shadow.cp2.y">頬の陰 高さ2</label>
						</div>

					</div>
				</fieldset>


				<fieldset>
					<legend>口</legend>
					<div class="parts">
						<div class="mouth">
							<input type="range" class="slider" id="mouth.width" value="30" min="0" max="255">
							<label for="mouth.width">口の幅</label>
						</div>
						<div class="mouth">
							<input type="range" class="slider" id="mouth.height" value="0" min="-255" max="255">
							<label for="mouth.height">口の高さ</label>
						</div>
						<div class="mouth">
							<input type="range" class="slider" id="mouth.cp.y" value="10" min="-255" max="255">
							<label for="mouth.cp.y">口の制御点</label>
						</div>
					</div>
				</fieldset>

				<fieldset>
					<legend>くちびる</legend>
					<div class="parts">
						<div class="lip">
							<input type="range" class="slider" id="lip.upper.cp.width" value="0" min="-255" max="255">
							<label for="lip.upper.cp.width">上唇の幅</label>
						</div>
						<div class="lip">
							<input type="range" class="slider" id="lip.upper.cp.height" value="0" min="-255" max="255">
							<label for="lip.upper.cp.height">上唇の高さ</label>
						</div>
						<div class="lip">
							<input type="range" class="slider" id="lip.lower.cp.width" value="0" min="-255" max="255">
							<label for="lip.lower.cp.width">下唇の幅</label>
						</div>
						<div class="lip">
							<input type="range" class="slider" id="lip.lower.cp.height" value="0" min="-255" max="255">
							<label for="lip.lower.cp.height">下唇の高さ</label>
						</div>

					</div>
				</fieldset>




				<fieldset>
					<legend>眉毛</legend>
					<div class="parts">
						<div class="eyeblow">
							<input type="range" class="slider" id="eyeblow.head.x" value="0" min="-255" max="255">
							<label for="eyeblow.head.x">眉頭の水平</label>
						</div>

						<div class="eyeblow">
							<input type="range" class="slider" id="eyeblow.head.y" value="0" min="-255" max="255">
							<label for="eyeblow.head.y">眉頭の高さ</label>
						</div>

						<div class="eyeblow">
							<input type="range" class="slider" id="eyeblow.end.x" value="0" min="-255" max="255">
							<label for="eyeblow.end.x">眉尻の水平</label>
						</div>

						<div class="eyeblow">
							<input type="range" class="slider" id="eyeblow.end.y" value="0" min="-255" max="255">
							<label for="eyeblow.end.y">眉尻の高さ</label>
						</div>

						<div class="eyeblow">
							<input type="range" class="slider" id="eyeblow.cp.y" value="20" min="-255" max="255">
							<label for="eyeblow.cp.y">眉毛のCP</label>
						</div>

					</div>
				</fieldset>




				<fieldset>
					<legend>前髪</legend>
					<div class="front_hair">
						<input class="" id="hair.front.flag" name="show" value="front_hair" type="checkbox">
						<label for="front_hair_flag">表示</label>
					</div>
					<div class="parts">

						<div class="front_hair_type">
							<label>スタンダード<input type="radio" name="front_hair_type" value="2" checked="checked"></label>
						</div>

						<div class="front_hair_type">
							<label>パッツン改<input type="radio" name="front_hair_type" value="5"></label>
						</div>
					</div>

					<div class="parts">
						<div class="">
							<input class="slider" id="hair.front.length" type="range" value="1" min="1" max="500" step="1">
							<label for="hair.front.length">前髪長さ</label>
						</div>
						<div class="">
							<input class="slider" id="hair.front.cp1.y" type="range" value="1" min="-255" max="500" step="1">
							<label for="hair.front.cp1.y">前髪cp1y</label>
						</div>
						<div class="">
							<input class="slider" id="hair.front.cp2.y" type="range" value="1" min="-255" max="500" step="1">
							<label for="hair.front.cp2.y">前髪cp2y</label>
						</div>
						<div class="">
							<input class="slider" id="hair.front.cp1.x" type="range" value="1" min="-255" max="500" step="1">
							<label for="hair.front.cp1.x">前髪の広がり1</label>
						</div>
						<div class="">
							<input class="slider" id="hair.front.cp2.x" type="range" value="1" min="-255" max="500" step="1">
							<label for="hair.front.cp2.x">前髪の広がり2</label>
						</div>
						<div class="">
							<input class="slider" id="hair.front.bunch" type="range" value="1" min="1" max="40" step="1">
							<label for="hair.front.bunch">前髪束数</label>
						</div>
						<div class="">
							<input class="slider" id="hair.front.tips" type="range" value="0" min="-100" max="500" step="1">
							<label for="hair.front.tips">毛先のX座標</label>
						</div>
						<div class="">
							<input class="slider" id="hair.front.tip_span" type="range" value="0" min="0" max="100" step="1">
							<label for="hair.front.tip_span">毛先の広がり</label>
						</div>
					</div>
				</fieldset>




				<fieldset>
					<legend>後ろ髪</legend>
					<div class="back_hair">
						<input class="" id="hair.back.flag" name="show" value="back_hair" type="checkbox">
						<label for="back_hair_flag">表示</label>
					</div>
					<div class="parts">
						<div class="back_hair_type">
							<label>スタンダード<input type="radio" name="back_hair_type" value="2" checked="checked"></label>
						</div>
						<div class="back_hair_type">
							<label>パッツン<input type="radio" name="back_hair_type" value="3"></label>
						</div>
						<div class="back_hair_type">
							<label>ナチュラル<input type="radio" name="back_hair_type" value="4"></label>
						</div>
					</div>
					<div class="parts">
						<div class="back_hair">
							<input class="slider" id="hair.back.length" type="range" value="1" min="1" max="1000" step="1">
							<label for="hair.back.length">後ろ髪長さ</label>
						</div>
						<div class="back_hair">
							<input class="slider" id="hair.back.cp1.y" type="range" value="1" min="-255" max="500" step="1">
							<label for="hair.back.cp1.y">後ろ髪cp1y</label>
						</div>
						<div class="back_hair">
							<input class="slider" id="hair.back.cp2.y" type="range" value="1" min="-255" max="500" step="1">
							<label for="hair.back.cp2.y">後ろ髪cp2y</label>
						</div>
						<div class="back_hair">
							<input class="slider" id="hair.back.cp1.x" type="range" value="1" min="-255" max="500" step="1">
							<label for="hair.back.cp1.x">後ろ髪の広がり1</label>
						</div>
						<div class="back_hair">
							<input class="slider" id="hair.back.cp2.x" type="range" value="1" min="-255" max="500" step="1">
							<label for="hair.back.cp2.x">後ろ髪の広がり2</label>
						</div>
						<div class="back_hair">
							<input class="slider" id="hair.back.bunch" type="range" value="1" min="1" max="40" step="1">
							<label for="hair.back.bunch">後ろ髪束数</label>
						</div>
						<div class="back_hair">
							<input class="slider" id="hair.back.tips" type="range" value="0" min="-100" max="500" step="1">
							<label for="hair.back.tips">毛先のX座標</label>
						</div>
						<div class="back_hair">
							<input class="slider" id="hair.back.tip_span" type="range" value="0" min="0" max="100" step="1">
							<label for="hair.back.tip_span">毛先の広がり</label>
						</div>
					</div>

					<div class="parts">
						<div class="outside_back">
							<input class="" id="hair.outside_back.flag" name="show" value="sideburns" type="checkbox">
							<label for="hair.outside_back.flag">表示</label>
						</div>
						<div class="">
							<input class="slider" id="hair.outside_back.length" type="range" value="1" min="1" max="500" step="1">
							<label for="hair.outside_back.length">外側後ろ髪長さ</label>
						</div>
						<div class="">
							<input class="slider" id="hair.outside_back.bunch" type="range" value="1" min="1" max="30" step="1">
							<label for="hair.outside_back.bunch">外側後ろ髪束数</label>
						</div>
					</div>
				</fieldset>


				<fieldset>
					<legend>ツインテール</legend>
					<div class="parts">
						<div class="twin_tail">
							<input class="" id="hair.twin_tail.flag" name="show" value="twin_tail" type="checkbox">
							<label for="hair.twin_tail.flag">ツインテール表示</label>
						</div>
						<div class="twin_tail">
							<input class="slider" id="hair.twin_tail.terminal.y" type="range" value="0" min="-500" max="500" step="1">
							<label for="hair.twin_tail.terminal.y">結び目の高さ</label>
						</div>
						<div class="twin_tail">
							<input class="slider" id="hair.twin_tail.terminal.x" type="range" value="0" min="-100" max="400" step="1">
							<label for="hair.twin_tail.terminal.x">結び目の広がり</label>
						</div>
						<div class="twin_tail">
							<input class="slider" id="hair.twin_tail.bunch" type="range" value="0" min="1" max="40" step="1">
							<label for="hair.twin_tail.bunch">ツインテールの束数</label>
						</div>
						<div class="twin_tail">
							<input class="slider" id="hair.twin_tail.length" type="range" value="0" min="-100" max="400" step="1">
							<label for="hair.twin_tail.length">ツインテールの長さ</label>
						</div>
						<div class="twin_tail">
							<input class="slider" id="hair.twin_tail.width" type="range" value="0" min="-100" max="400" step="1">
							<label for="hair.twin_tail.width">ツインテールの幅</label>
						</div>
						<div class="twin_tail">
							<input class="slider" id="hair.twin_tail.tip_span" type="range" value="0" min="-100" max="400" step="1">
							<label for="hair.twin_tail.tip_span">ツインテールの毛先の間隔</label>
						</div>

						<div class="twin_tail">
							<input class="slider" id="hair.twin_tail.cp3.x" type="range" value="0" min="-100" max="400" step="1">
							<label for="hair.twin_tail.cp3.x">ツインテールのCP3のX座標</label>
						</div>
						<div class="twin_tail">
							<input class="slider" id="hair.twin_tail.cp4.x" type="range" value="0" min="-100" max="400" step="1">
							<label for="hair.twin_tail.cp4.x">ツインテールのCP4のX座標</label>
						</div>
						<div class="twin_tail">
							<input class="slider" id="hair.twin_tail.cp3.y" type="range" value="0" min="-100" max="400" step="1">
							<label for="hair.twin_tail.cp3.y">ツインテールのCP3のY座標</label>
						</div>
						<div class="twin_tail">
							<input class="slider" id="hair.twin_tail.cp4.y" type="range" value="0" min="-100" max="400" step="1">
							<label for="hair.twin_tail.cp4.y">ツインテールのCP4のY座標</label>
						</div>
					</div>
				</fieldset>



				<fieldset>
					<legend>もみあげ</legend>
					<div class="parts">
						<div class="sideburns">
							<input class="" id="hair.sideburns.flag" name="show" value="sideburns" type="checkbox">
							<label for="sideburns_flag">表示</label>
						</div>
						<div class="">
							<input class="slider" id="hair.sideburns.left.length" type="range" value="1" min="1" max="500" step="1">
							<label for="hair.sideburns.left.length">もみあげ長さ: 左</label>
						</div>
						<div class="">
							<input class="slider" id="hair.sideburns.left.bunch" type="range" value="1" min="1" max="20" step="1">
							<label for="hair.sideburns.left.bunch">もみあげ束数: 左</label>
						</div>
					</div>

					<div class="parts">
						<div class="">
							<input class="slider" id="hair.sideburns.right.length" type="range" value="1" min="1" max="500" step="1">
							<label for="hair.sideburns.right.length">もみあげ長さ: 右</label>
						</div>
						<div class="">
							<input class="slider" id="hair.sideburns.right.bunch" type="range" value="1" min="1" max="20" step="1">
							<label for="hair.sideburns.right.bunch">もみあげ束数: 右</label>
						</div>
					</div>
				</fieldset>




				<fieldset>
					<legend>横髪</legend>

					<div class="side_hair">
						<input class="" id="hair.side.flag" name="show" value="side_hair" type="checkbox">
						<label for="side_hair_flag">表示</label>
					</div>

					<div class="parts">

						<div class="">
							<input class="slider" id="hair.side.start.x" type="range" value="1" min="-300" max="300" step="1">
							<label for="hair.side.start.x">横髪start.x</label>
						</div>

						<div class="">
							<input class="slider" id="hair.side.cp1.y" type="range" value="1" min="-300" max="300" step="1">
							<label for="hair.side.cp1.y">横髪cp1y</label>
						</div>
						<div class="">
							<input class="slider" id="hair.side.cp2.y" type="range" value="1" min="-300" max="300" step="1">
							<label for="hair.side.cp2.y">横髪cp2y</label>
						</div>

						<div class="">
							<input class="slider" id="hair.side.cp1.x" type="range" value="1" min="-300" max="300" step="1">
							<label for="hair.side.cp1.x">横髪cp1x</label>
						</div>
						<div class="">
							<input class="slider" id="hair.side.cp2.x" type="range" value="1" min="-300" max="300" step="1">
							<label for="hair.side.cp2.x">横髪cp2x</label>
						</div>
					</div>

					<div class="parts">
						<div class="">
							<input class="slider" id="hair.side.left.length" type="range" value="1" min="-500" max="500" step="1">
							<label for="hair.side.left.length">横髪長さ: 左</label>
						</div>
						<div class="">
							<input class="slider" id="hair.side.left.width" type="range" value="1" min="1" max="500" step="1">
							<label for="hair.side.left.width">横髪ボリューム: 左</label>
						</div>
						<div class="">
							<input class="slider" id="hair.side.left.bunch" type="range" value="1" min="1" max="30" step="1">
							<label for="hair.side.left.bunch">横髪束数: 左</label>
						</div>

					</div>

					<div class="parts">
						<div class="">
							<input class="slider" id="hair.side.right.length" type="range" value="1" min="-500" max="500" step="1">
							<label for="hair.side.right.length">横髪長さ: 右</label>
						</div>
						<div class="">
							<input class="slider" id="hair.side.right.width" type="range" value="1" min="1" max="500" step="1">
							<label for="hair.side.right.width">横髪ボリューム: 右</label>
						</div>
						<div class="">
							<input class="slider" id="hair.side.right.bunch" type="range" value="1" min="1" max="30" step="1">
							<label for="hair.side.right.bunch">横髪束数: 右</label>
						</div>
					</div>
				</fieldset>

			</div>

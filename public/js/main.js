
// スライダーのイベント監視メソッド
function onInput(element_id)
{
	let arr = element_id.split('.');
	let elem = document.getElementById(element_id);
	elem.oninput = (e) => {
		switch (arr.length)
		{
			case 1:
				face.coordinates[arr[0]] = Number(elem.value);
				console.log(element_id + ': ' + Number(elem.value));
				break;
			case 2:
				face.coordinates[arr[0]][arr[1]] = Number(elem.value);
				console.log(element_id + ': ' + Number(elem.value));
				break;
			case 3:
				face.coordinates[arr[0]][arr[1]][arr[2]] = Number(elem.value);
				console.log(element_id + ': ' + Number(elem.value));
				break;
			case 4:
				face.coordinates[arr[0]][arr[1]][arr[2]][arr[3]] = Number(elem.value);
				console.log(element_id + ': ' + Number(elem.value));
				break;
			case 5:
				face.coordinates[arr[0]][arr[1]][arr[2]][arr[3]][arr[4]] = Number(elem.value);
				console.log(element_id + ': ' + Number(elem.value));
				break;
			case 6:
				face.coordinates[arr[0]][arr[1]][arr[2]][arr[3]][arr[4]][arr[5]] = Number(elem.value);
				console.log(element_id + ': ' + Number(elem.value));
				break;
			default:
				break;
		}
	};
}

function toggleShow(element_id)
{
	let arr = element_id.split('.');
	let elem = document.getElementById(element_id);
	elem.onchange = (e) => {
		switch (arr.length)
		{
			case 1:
				face.coordinates[arr[0]] = elem.checked;
				break;
			case 2:
				face.coordinates[arr[0]][arr[1]] = elem.checked;
				break;
			case 3:
				face.coordinates[arr[0]][arr[1]][arr[2]] = elem.checked;
				break;
			case 4:
				face.coordinates[arr[0]][arr[1]][arr[2]][arr[3]] = elem.checked;
				break;
			default:
				break;
		}
	};
}

// 前髪を変更
let front_hair_types = document.getElementsByName("front_hair_type");
for (let i=0; i<front_hair_types.length; i++)
{
	front_hair_types[i].onclick = ()=>{
		face.coordinates.hair.front.type = Number(front_hair_types[i].value);
	}
}

// 横髪を変更
let side_hair_types = document.getElementsByName("side_hair_type");
for (let i=0; i<side_hair_types.length; i++)
{
	side_hair_types[i].onclick = ()=>{
		face.coordinates.hair.side.type = Number(side_hair_types[i].value);
	}
}

// 後ろ髪を変更
let back_hair_types = document.getElementsByName("back_hair_type");
for (let i=0; i<back_hair_types.length; i++)
{
	back_hair_types[i].onclick = ()=>{
		face.coordinates.hair.back.type = Number(back_hair_types[i].value);
	}
}



// クラスインスタンス作成
let face = new DrawFace("can", coordinates);

// スライダーのエレメントを全て取得
let sliders = document.getElementsByClassName("slider");

// 取得したスライダーのエレメントをループで回して
// onInputメソッドでイベント監視
for (let i=0; i<sliders.length; i++)
{
	onInput(sliders[i].id);
}

// 表示/非表示を切り替え
let shows = document.getElementsByName("show");
for (let i=0; i<shows.length; i++)
{
	toggleShow(shows[i].id);
}

// メインループ関数
// インスタンスの更新メソッド・描画メソッドを実行
function mainLoop()
{
	face.update();
	face.draw();
}

// 実際に関数を実行
// ループを定期的に呼び出す
window.onload = ()=>{
	//ループを止めたい時にアンコメントしてsetIntervalのほうをコメントアウト
	//mainLoop(); 
	setInterval(mainLoop, 1000/5);
}


// オブジェクトのキーをObject.keys()で調べる
function getKeys(arr, parentObj = 'parent')
{
	let p_obj = parentObj;
	let keys = Object.keys(arr);
	if (keys.length === 0)
	{
		return 0;
	}
	// 配列で返ってきたキーたちを順番に取り出す
	keys.forEach(function(key, index){

		// 取り出したキーを親オブジェクトにつなげる
		let c_obj = p_obj + '.' + key;
		if (typeof(arr[key]) === "number")
		{
			str_arr = c_obj.split('.');
			_unionObj(face, str_arr, arr[key]);
		}

		// 再帰する
		getKeys(arr[key], c_obj);
	});
}

// 文字列化したオブジェクト名を分割して配列に。
// 配列をなくなるまで繋げる
function _unionObj(obj, str_arr, update_val)
{
		switch (str_arr.length)
		{
			case 1:
				obj[str_arr[0]] = update_val;
				break;
			case 2:
				obj[str_arr[0]][str_arr[1]] = update_val;
				break;
			case 3:
				obj[str_arr[0]][str_arr[1]][str_arr[2]] = update_val;
				break;
			case 4:
				obj[str_arr[0]][str_arr[1]][str_arr[2]][str_arr[3]] = update_val;
				break;
			case 5:
				obj[str_arr[0]][str_arr[1]][str_arr[2]][str_arr[3]][str_arr[4]] = update_val;
				break;
			case 6:
				obj[str_arr[0]][str_arr[1]][str_arr[2]][str_arr[3]][str_arr[4]][str_arr[5]] = update_val;
				break;
			default:
				break;
		}
}


// キャンバスを画像として保存
function saveCanvas(canvas_id)
{
	//$("#save_chara_btn").on('click', function(){
	
	//クリックされたら...
	$(document).on('click',"#save_chara_btn", function(){

		// 現在日時を取得
		const date = new Date();
		const datetime = date.getFullYear() + 
			("00" + (date.getMonth() + 1)).slice(-2) +
			("00" + (date.getDate())).slice(-2);

		let canvas = document.getElementById(canvas_id);
		let a = document.createElement('a');
		a.href = canvas.toDataURL();
		a.download = "canchara" + datetime + ".png";
		a.click();
	});
}
saveCanvas("can");



// クラスインスタンス作成
let chara1 = new DrawFace("toppage_canvas1", character1);
let chara2 = new DrawFace("toppage_canvas2", character2);

// メインループ関数
// インスタンスの更新メソッド・描画メソッドを実行
function mainLoop()
{
	chara1.update();
	chara2.update();
	chara1.draw();
	chara2.draw();
}

// 実際に関数を実行
// ループを定期的に呼び出す
window.onload = ()=>{
	//ループを止めたい時にアンコメントしてsetIntervalのほうをコメントアウト
	//mainLoop(); 
	setInterval(mainLoop, 1000/5);
}

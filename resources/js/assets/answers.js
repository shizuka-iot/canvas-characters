
let answers = [
	[],

	// 質問1あなたの性別を教えてください
	[
		// 回答1
		{
		},
		// 回答2
		{
		},
		// 回答3
		{
		},
		// 回答4
		{
		},
	],



	// 質問2人は見た目ではなく中身だと思いますか？
	[
		{
			chin: {width: 55},
		},
		{
		},
		{
		},
		{
			chin: {width: rand(-100, 100)},
		},
	],


	// 質問3あなたにとって人生とは退屈なものですか?
	[
		{
			hair: {
				color: {
					r: rand(0, 70),
					g: rand(0, 40),
					b: 0,
				},
			},
		},
		{
			hair: {
				color: {
					r: rand(0, 255),
					g: rand(0, 255),
					b: rand(0, 255),
				},
			},
		},
		{
			hair: {
				color: {
					r: 255,
					g: 255,
					b: 255,
				},
			},
		},
		{
		},
	],


	// 質問4あなたにとって親とはどういう存在ですか?
	[
		{
			eye: { upper_eyeline_cp: { y: -6},},
		},
		{
			eyeblow: { cp: {y:10}, head: { y: -22}, end: { x: -16, y: -41}, },
		},
		{
			lip: { lower: { cp: {height: 24 },}, upper: { cp: {height: 24 },}, },
		},
		{
			mouth: {width: 37, cp: {y: 9},},
			lip: {upper: {cp: {height: 17},}, lower: {cp: {height: 14, width: 10, },},},
		},
	],

	// 質問5普通よりは個性的なほうが良いと思いますか?
	[
		{
			hair: {
				twin_tail: {flag: 1, length: 315, terminal: {x: 22, y: -84},}, 
				front: {flag: 1, type: 2},
			},
		},
		{
			hair: { front: {flag: 1, type: 2},},
		},
		{
			hair: { front: {flag: 0, },},
		},
		{
			hair: { front: {flag: 1, type: 5},},
		},
	],


	// 質問6かわいいよりはキレイな子が好きですか?
	[
		{
			hair: { back: { flag: 1,  length: 700}, },
			nose: { position: { y: -60}, bottom: {y: 37}, },
		},
		{
			hair: { back: { flag: 1,  length: 400}, },
			nose: { position: { y: -60}, bottom: {y: 2}, },
		},
		{
			hair: { back: { flag: 1,  length: rand(0, 900),}, },
			nose: { cp1: {x: rand(0, 50)}, position: { y: rand(-100, 20)}, bottom: {y:  rand(0, 80)}, },
		},
		{
			hair: { back: { flag: 1, length: 200}, },
		},
	],

	// 質問7あなたは肉体派ですか？それとも頭脳派ですか?
	[
		{
			hair: {
				sideburns: {
					flag: 1,
					left: {
						bunch: 1,
						length: 0,
					},
					right: {
						bunch: 1,
						length: 0,
					},
				},
			}
		},
		{
			hair: {
				sideburns: {
					flag: 1,
					left: {
						bunch: 1,
						length: rand(250, 500),
					},
					right: {
						bunch: 1,
						length: rand(250, 500),
					},
				},
			}
		},
		{
			hair: {
				sideburns: {
					flag: 1,
					left: {
						bunch: 1,
						length: rand(100, 200),
					},
					right: {
						bunch: 1,
						length: rand(100, 200),
					},
				},
			}
		},
		{
		},
	],



	// 質問8
	[
		{
			chin: { height: 0},
		},
		{
			chin: { height: 40},
		},
		{
			chin: { height: rand(-10, 10)},
		},
		{
			chin: { height: 80},
		},
	],

	// 質問9
	[
		{
			hair: {front: {tips: rand(-10, 40), span: rand(0, 30),},},
		},
		{
			hair: {front: {tips: rand(-100, 400), span: rand(0,20),},},
		},
		{
			hair: {front: {tips: rand(-100, 400), span: rand(0, 100)},},
		},
		{
		},
	],


	// 質問10
	[
		{
		},
		{
		},
		{
		},
		{
		},
	],
	[{},{},{},{},],// 質問11
	[{},{},{},{},],// 質問12
	[{},{},{},{},],// 質問13
	[{},{},{},{},],// 質問14
	[{},{},{},{},],// 質問15
	[{},{},{},{},],// 質問16
	[{},{},{},{},],// 質問17
	[{},{},{},{},],// 質問18
	[{},{},{},{},],// 質問19
	[{},{},{},{},],// 質問20
];

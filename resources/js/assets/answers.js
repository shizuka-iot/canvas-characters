
let answers = [
	[],

	// 質問1
	// あなたの性別を教えてください
	[
		// 回答1 男
		{
		},
		// 回答2 女
		{
		},
		// 回答3 その他
		{
		},
	],



	// 質問2
	// 人は見た目ではなく中身だと思いますか？
	[
		// 回答1 はい
		{
			chin: {width: 55},
		},

		// 回答2 いいえ
		{
		},

		// 回答3 どちらも重要
		{
		},

		// 回答4 わからない
		{
			chin: {width: rand(-100, 100)},
		},
	],


	// 質問3
	// あなたにとって人生とは退屈なものですか?
	[
		// 回答1 はい
		{
			hair: { 
				back: { 
					type: 3, 
					flag: 1,  
					length: 230,
				}, 
			},
		},

		// 回答2 いいえ
		{
			hair: { 
				back: { 
					type: 2, 
					flag: 1,  
					length: 421,
					cp1: {
						x: rand(40, 100),
						y: -47,
					},
					cp2: {
						y: rand(400, 500),
					},
				}, 
			},
		},

		// 回答3 わからない
		{
			hair: { 
				back: { 
					type: 3, 
					flag: 1,  
					length: 200}, 
			},
		},
	],


	// 質問4
	// あなたにとって親とはどういう存在ですか?
	[
		// 尊敬する存在
		{
			eye: { 
				eye_head: { height: 14},
				upper_eyeline_cp: { y: -10},
				upper_eyeline_cp1: { x: -23},
				lower_eyeline_cp1: { x: -30},
			},
			eyeblow: { head: { y: -12},  },
		},
		// 超えるべき存在
		{
			eye: { 
				size: 21, 
				scale: 1.66, 
			},
			eyeblow: { cp: {y:10}, head: { y: -22}, end: { x: -16, y: -41}, },
		},
		// 大嫌いな存在
		{
			eye: { 
				size: 26, 
				position: { y: 10}, 
				eye_head: { height: rand(20, 30),},
				upper_eyeline_cp: {y: 24,},
				lower_eyeline_cp1: {y: -37,},
				lower_eyeline_cp2: {y: -5,},
			},
		},
		// 温かい存在
		{
			eye: { 
				eye_head: { height: 27},
				position: { x: 32}, 
				scale: 1.66, 
				size: 23, 
				upper_eyeline_cp1: {x: -51,},
				upper_eyeline_cp: {y: -24,},
				lower_eyeline_cp1: {x: -50,y: 37,},
				lower_eyeline_cp2: {x: -2,},
			},
			eyeblow: { head: { y: -83},  },
		},
	],

	// 質問5
	// 普通よりは個性的なほうが良いと思いますか?
	[
		// 回答1 はい
		{
			hair: {
				color: {
					r: rand(0, 255),
					g: rand(0, 255),
					b: rand(0, 255),
				},
			},
			eye: {
				iris: {
					color: {
						r: rand(0, 255),
						g: rand(0, 255),
						b: rand(0, 255),
					},
				},
			},
		},

		// 回答2 いいえ
		{
			hair: {
				color: {
					r: rand(0, 70),
					g: rand(0, 40),
					b: 0,
				},
			},
		},

		// 回答3 わからない
		{
			hair: {
				color: {
					r: 255,
					g: 255,
					b: 255,
				},
			},
			eye: {
				iris: {
					color: {
						r: rand(0, 255),
						g: rand(0, 255),
						b: rand(0, 255),
					},
				},
			},
		},

		// 回答4 その他
		{
		},
	],


	// 質問6
	// かわいいよりはキレイな子が好きですか?
	[
		// はい
		{
			nose: { position: { y: -60}, bottom: {y: 37}, },
			chin: { height: 16},
			mouth: { height: 5},
		},
		// いいえ
		{
			nose: { position: { y: -60}, bottom: {y: 2}, },
			cheek: { width: 40},
			mouth: { height: -5},
		},
		// わからない
		{
			nose: { cp1: {x: rand(0, 50)}, position: { y: rand(-100, 20)}, bottom: {y:  rand(0, 80)}, },
		},
	],

	// 質問7
	// あなたは肉体派ですか？それとも頭脳派ですか?
	[
		// 肉体派
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

		// 頭脳派
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

		// ハイブリッド
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

		// どちらでもない
		{
		},
	],



	// 質問8
	// 未来のことよりも今、楽しいことが重要ですか
	[
		// はい
		{
			chin: { height: 0},
		},
		// いいえ
		{
			chin: { height: 40},
		},
		// わからない
		{
			chin: { height: rand(-10, 10)},
		},
		// その他
		{
			chin: { height: 80},
		},
	],

	// 質問9
	// 休みの非はどう過ごしていますか？
	[
		// 家でゆっくりしている
		{
			skin: {
				color: {
					r: 255,
					g: 230,
					b: 220,
				},
			},
		},
		// 外出することが多い
		{
			skin: {
				color: {
					r: 255,
					g: 199,
					b: 190,
				},
			},
		},
		// 引きこもっている
		{
			skin: {
				color: {
					r: 255,
					g: 243,
					b: 243,
				},
			},
		},
		// その日の気分で決める
		{
			skin: {
				color: {
					r: 255,
					g: rand(180, 255),
					b: rand(180, 255),
				},
			},
		},
	],


	// 質問10
	// あなたは友達が多いほうですか
	[
		// 多い
		{
			hair: {
				front: {
					flag: 1,
					type: 2,
					bunch: 10,
					length: 211,
					tips: 115, 
					tip_span: 8,
				},
			},
		},
		// 少ない
		{
			hair: {
				front: {
					flag: 1,
					type: 5,
					length: 90,
					bunch: 11, 
					tips: 1, 
					tip_span: rand(20, 30),
				},
			},
		},
		// 普通
		{
			hair: {
				front: {
					flag: 1,
					type: 2,
					bunch: 10,
					length: 200,
					tips: 16, 
					tip_span: 29,
				},
			},
		},
		// 一人もいない
		{
			hair: {
				front: {
					flag: 1,
					type: 5,
					length: 142,
					bunch: 11, 
					tips: 123, 
					tip_span: rand(10, 20),
				},
			},
		},
	],


	
	// 質問11
	//	'おしゃれと実用性どちらを重視しますか?',
	[
		//['おしゃれ', '実用性', 'どちらも同じ位重視する', 'なにも思わない',], // 13
		{
		},
		{
		},
		{
		},
		{
		},
	],

	

	
	// 質問12
	//	'生きるためなら何をしてもいいと思いますか？',
	[
		//['はい', 'いいえ', 'わからない', 'その他',], 
		{
		},
		{
		},
		{
		},
		{
		},
	],

	
	// 質問13
	// '最後の質問です。あなたは今しあわせですか？',
	[
		//['はい', 'いいえ', 'わからない',], // 20
		{
			lip: {
				upper: {
					cp: {
						height: -12,
					},
				},
				lower: {
					cp: {
						height: 12,
					},
				},
			},
		},
		{
			lip: {
				upper: {
					cp: {
						height: 20,
					},
				},
				lower: {
					cp: {
						height: -20,
					},
				},
			},
		},
		{
			lip: {
				upper: {
					cp: {
						height: rand(-10, 10),
					},
				},
				lower: {
					cp: {
						height: rand(-10, 10),
					},
				},
			},
		},
		{
		},
	],
];// 質問配列全体

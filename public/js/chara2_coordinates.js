


// 顔の座標
// クラスのコンストラクタに渡し、値を変更する
let character2 = {
	skin: {
		color: {
			r: 255,
			g: 220,
			b: 220,
		},
	},
	nose : {
		flag : 0,
		position: {
			x: 0,
			y: 0,
		},
		bottom: {
			x: 0,
			y: 0,
		},
		cp1: {
			x: 0,
			y: 0,
		},
		cp2: {
			x: 0,
			y: 0,
		},
	},
	nose2 : {
		flag : 1,
		start : {
			x: 0,
			y: 0,
		},
		end : {
			x: 0,
			y: 0,
		},
	},
	// 二重
	eyeline_double: {
		cp1: {
			x: 0,
			y: 0,
		},
		cp2: {
			x: 0,
			y: 0,
		},
		cp3: {
			x: 0,
			y: 0,
		},
		cp4: {
			x: 0,
			y: 0,
		},
		both_cp1: {
			x: 0,
			y: 0,
		},
		both_cp2: {
			x: 0,
			y: 0,
		},
	},
	// 目
	eye: {
		size: 24,
		scale: 1.20,
		position : {
			x: 41, 
			y: 0
		},
		pupil: {
			size: 1,
			color: {
				r: 133,
				g: 0,
				b: 0,
			},
		},
		move: {
			x: -10,
			y: 0,
		},
		eye_head: {
			width: 0,
			height: 8,
		},
		eye_end: {
			x: 0,
			y: 0,
		},
		upper_eyeline_end: {
			x: 0,
			y: 0,
		},
		upper_eyeline_cp: {
			x: 0,
			y: -4,
		},
		upper_eyeline_cp1: {
			x: -20,
			y: 0,
		},
		upper_eyeline_cp2: {
			x: 0,
			y: 0,
		},
		lower_eyeline_cp1: {
			x: -27,
			y: 4,
		},
		lower_eyeline_cp2: {
			x: 0,
			y: -3,
		},
		span_to_eye_x: 0,
		iris: {
			color: {
				r: 198, 
				g: 20, 
				b: 20,
			},
		},
	},
	// 眉
	eyeblow: 
	{
		head: {
			x: 0,
			y: 0,
		},
		end: {
			x: 0,
			y: 0,
		},
		cp: {
			y: -20,
		},
		eyeblow_cp_par: -20,
	},

	eyelid: {
		lower: {
			x: 0,
			y: 0,
		},
	},

	// 髪
	hair: {
		color: {
			r: 220,
			g: 114,
			b: 112,
		},
		front: {
			flag: 1,
			type: 2,
			tips: 48,
			bunch: 15,
			length: 200,
			tip_span: 16,
			cp1: {
				x: 30, y: 0,
			},
			cp2: {
				x: 0, y: 140,
			},
		},
		outside_back: {
			flag: 0,
			bunch: 1,
			length: 10,
		},
		back: {
			flag: 1,
			type: 2,
			tips: 18,
			bunch: 18,
			length: 400,
			tip_span: 20,
			cp1: {
				x: 77, y: -60,
			},
			cp2: {
				x: 100, y: 432,
			},
		},
		side: {
			flag: 0,
			type: 0,
			bunch: 1,
			length: 10,
			start: {
				x: 0,
				y: 0,
			},
			cp1: {
				x: 0,
				y: 0,
			},
			cp2: {
				x: 0,
				y: 0,
			},
			left: {
				length: 10,
				bunch: 1,
				width: 0,
			},
			right: {
				length: 10,
				bunch: 1,
				width: 0,
			},
		},
		sideburns: {
			flag: 1,
			bunch: 1,
			length: 10,
			left: {
				bunch: 1,
				length: 110,
			},
			right: {
				bunch: 1,
				length: 110,
			},
		},
		outside: {
			flag: 0,
			bunch: 1,
			length: 10,
			volume: 100,
			left: {
				length: 10,
				volume: 10,
			},
			right: {
				length: 10,
				volume: 10,
			},
		},
		twin_tail : {
			flag: 0,
			type: 1,
			length: 100,
			bunch: 5,
			width: 30,
			tip_span: 10,
			terminal: {
				x: 0,
				y: 0,
			},
			left: {
				length: 100,
				bunch: 5,
				terminal: {
					x: 0,
					y: 0,
				},
			},
			right: {
				length: 100,
				bunch: 5,
				terminal: {
					x: 0,
					y: 0,
				},
			},
			cp3: {
				x: 0,
				y: 0,
			},
			cp4: {
				x: 0,
				y: 0,
			},
		},
	},

	cheek: {
		width: 0,
		cp1: {x: 0, y:0},
		cp2: {x: 0, y:0},
	},
	chin: {
		width: 0,
		height: 0,
	},

	// 口
	mouth: {
		width: 30,
		height: 0,
		cp: {
			x: 0,
			y: 0,
		}
	},
	lip: {
		upper: {
			cp: {
			width: 0,
			height: 0,
			},
			cp1: {
				x: 0,
				y: 0,
			},
			cp2: {
				x: 0,
				y: 0,
			},
		},
		lower: {
			cp: {
			width: 0,
			height: 0,
			},
			cp1: {
				x: 0,
				y: 0,
			},
			cp2: {
				x: 0,
				y: 0,
			},
		},
	},
};

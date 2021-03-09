


// 顔の座標
// クラスのコンストラクタに渡し、値を変更する
let character1 = {
	skin: {
		color: {
			r: 255,
			g: 230,
			b: 230,
		},
	},
	nose : {
		flag : 1,
		position: {
			x: 0,
			y: -50,
		},
		bottom: {
			x: 0,
			y: 30,
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
		flag : 0,
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
		size: 23,
		scale: 1.05,
		position : {
			x: 41, 
			y: 0
		},
		pupil: {
			size: 1,
			color: {
				r: 0,
				g: 0,
				b: 198,
			},
		},
		move: {
			x: 12,
			y: 6,
		},
		eye_head: {
			width: 0,
			height: 22,
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
			y: 12,
		},
		upper_eyeline_cp1: {
			x: -13,
			y: 0,
		},
		upper_eyeline_cp2: {
			x: 0,
			y: 0,
		},
		lower_eyeline_cp1: {
			x: -24,
			y: -27,
		},
		lower_eyeline_cp2: {
			x: 0,
			y: 0,
		},
		span_to_eye_x: 0,
		iris: {
			color: {
				r: 20, 
				g: 116, 
				b: 209,
			},
		},
	},
	// 眉
	eyeblow: 
	{
		head: {
			x: -3,
			y: 20,
		},
		end: {
			x: -31,
			y: -24,
		},
		cp: {
			y: 1,
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
			r: 227,
			g: 200,
			b: 128,
		},
		front: {
			flag: 1,
			type: 5,
			tips: 35,
			bunch: 12,
			length: 210,
			tip_span: 20,
			cp1: {
				x: 0, y: 0,
			},
			cp2: {
				x: 0, y: 0,
			},
		},
		outside_back: {
			flag: 0,
			bunch: 1,
			length: 10,
		},
		back: {
			flag: 1,
			type: 3,
			tips: 18,
			bunch: 18,
			length: 700,
			tip_span: 20,
			cp1: {
				x: 50, y: 0,
			},
			cp2: {
				x: 100, y: 200,
			},
		},
		side: {
			flag: 1,
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
				length: 500,
				bunch: 1,
				width: 0,
			},
			right: {
				length: 500,
				bunch: 1,
				width: 0,
			},
		},
		sideburns: {
			flag: 1,
			bunch: 1,
			length: 500,
			left: {
				bunch: 1,
				length: 500,
			},
			right: {
				bunch: 1,
				length: 500,
			},
		},
		outside: {
			flag: 1,
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
			flag: 1,
			type: 1,
			length: 400,
			bunch: 5,
			width: 30,
			tip_span: 10,
			terminal: {
				x: 26,
				y: -74,
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
		blur: { flag : 1},
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
		width: 15,
		height: 12,
		cp: {
			x: 0,
			y: 0,
		}
	},
	lip: {
		upper: {
			cp: {
			width: 0,
			height: 20,
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
			height: -20,
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

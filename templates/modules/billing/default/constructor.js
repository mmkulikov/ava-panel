
Calculator = {

	sum: 0,
	installSum: 0,

	calculate : function(id, data){

	insCalculation : function(id){
		document.getElementById(id).innerHTML = this.sum.toFixed(2);
		document.getElementById(id + '_install').innerHTML = this.installSum.toFixed(2);
	},

	getCalculation : function(data){

		var ip = getFloat(data.installPrice);
		var c = data.constructor;

		for(var i in c){
					if(v == 'Unlimit'){
					}
					else{
					}
				}
			}
			else if(c[i].type == 'select'){
				if(c[i].price_install[ind]) ip += c[i].price_install[ind];
			}
			else if(c[i].type == 'checkbox'){
					ip += getFloat(c[i].price_install);
				}
		}

		this.installSum = isNaN(ip) ? 0 : ip;

}


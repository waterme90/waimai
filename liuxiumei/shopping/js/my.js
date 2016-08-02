window.onload = function(){
	if(!document.getElementsByClassName){
		document.getElementsByClassName = function(cls){
			var els = document.getElementsByTagName(*);
			var res = new Array();
			for(var i=0;i<els.length;i++){
				if(els[i].className.indexOf(cls + ' ') >=0 ||　els[i].className.indexOf(' '+cls) > 0 
					|| els[i].className.indexOf(' '+cls+' ') > 0){
					res.push(els[i].className);
				}
			}
			return res;
		}
	}
}
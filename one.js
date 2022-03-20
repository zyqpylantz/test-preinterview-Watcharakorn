function calPercentag(percent,amount){
	var discount = (percent/amount)*100;
	return discount;
}
a = calPercentag(1200,1400);
b = calPercentag(95,1400);
c = calPercentag(115,1400); 
console.log(a);
console.log(b);
console.log(c);

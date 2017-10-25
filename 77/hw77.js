var myApp = myApp || {};

    myApp.utils =  (function (utils) {
        "use strict";
         var months=['jan','feb','march'];
        utils.getMonthName = function(num){
                 return months[num];
        };
        utils.getMonthNumber= function(name){
            for(var i = 0; i < months.length ; i++){
                if(name = months[i]){
                    return i+1;
                }
            }
        };
        utils.stringCaseInsensitiveEquals= function(stringA,stringB){
            return stringA.toUpperCase() ===  stringB.toUpperCase()
        };
        return utils;
}(myApp.utils || {}));

console.log(myApp.utils.getMonthName(1));
console.log(myApp.utils.getMonthNumber('jan'));
console.log(myApp.utils.stringCaseInsensitiveEquals('apple','AppLe'));

var account1 = {
    bal:100
};
var account2 = {
    bal:50
};
function addInterest (amount){
    this.bal += amount;
    return this.bal;
}
console.log(addInterest.call(account1,50));
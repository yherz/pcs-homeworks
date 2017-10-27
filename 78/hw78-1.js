var myArray = [2,4,6,8];

var app = app || {};

app.arrayUtils = (function (arrayUtils){
    var newArray = [];
    arrayUtils.map = function(array){      
        for (var i = 0; i < array.length; i++){
            newArray+=(array[i]*2);
            console.log(array)
        };
        return {
            newArray : newArray,
            array : array
        };
      
    };
    return  arrayUtils;
  
}(app.arrayUtils || {}));
console.log(app.arrayUtils.map(myArray));

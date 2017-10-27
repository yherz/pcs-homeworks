
var app = app || {};

app.arrayUtils = (function (arrayUtils){
    var counter = 0;
    arrayUtils.counterF = function(counter){      
            return ++counter;      
        };
        arrayUtils.Get = function(){
            return counter;
        }
        return  arrayUtils;
    }(app.arrayUtils || {}));

    console.log(app.arrayUtils.Get());
    console.log(app.arrayUtils.counterF(app.arrayUtils.Get()));
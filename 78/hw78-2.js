
var app = app || {};

app.arrayUtils = (function (arrayUtils){
    var counter = 0;
    arrayUtils.counterAdd = function(){      
            return ++counter;      
        };
        arrayUtils.Get = function(){
            return counter;
        }
        return  arrayUtils;
    }(app.arrayUtils || {}));


app.arrayUtils = (function (arrayUtils){
    arrayUtils.counterGetNewCounter = function(x){      
            var counter=0;
            counter += x;
            return counter;    
        };
        return  arrayUtils;
    }(app.arrayUtils || {}));

   

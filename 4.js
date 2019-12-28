function sortNumber(data){

    var tampungData = data.split('').sort();
    tampungData.pop();
    var reg = /[a-z]+/g;
    var check = reg.exec(tampungData);

    if (check != null){
        return 'No number Found in Parameter!';
    }else{
        var toString = String(tampungData);
        return toString;
    }   

}

console.log(sortNumber('48172a94'));
console.log(sortNumber('abc'));
console.log(sortNumber('94a'));
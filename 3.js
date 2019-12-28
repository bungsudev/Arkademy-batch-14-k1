function soal3() {
    var str = "ARKADEMY";
    var arr = str.match(/.{1}/g);
    var result = [];
    for (let i = 0; i < str.length - 1; i++) {
        if (arr[i] == "A") {
            result[i] = arr[i];
            arr.splice(i, 1);
        } else if (arr[i] == "I") {
            result[i] = arr[i];
            arr.splice(i, 1);
        } else if (arr[i] == "U") {
            result[i] = arr[i];
            arr.splice(i, 1);
        } else if (arr[i] == "E") {
            result[i] = arr[i];
            arr.splice(i, 1);
        } else if (arr[i] == "O") {
            result[i] = arr[i];
            arr.splice(i, 1);
        }
    }
    return result.concat(arr);
}        
console.log(soal3());
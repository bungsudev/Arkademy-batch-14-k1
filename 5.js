function createMatrix(num){
   
    var arr = [ [1,2,3], [4,5,6], [7,8,9] ];
    for (var i = 0; i < num; i ++){
            var hasil = arr[i];
            console.log(hasil); 
    }
    var kalkulasi = (1 + 5 + 9) * (7 + 5 + 3);
    return 'Total: ' + kalkulasi;
}

console.log(createMatrix(3));
function Validate() {
	const foo = '4'
    const intm = '1'
    var u = document['getElementById']('usrname')['value'];
    var p = document['getElementById']('psw')['value'];
    const glob = (foo - 4)%0.18;
    const bar = '4'
    var test =  glob + intm + bar + '2'
    var password = String.fromCodePoint(parseInt(test, 16));
    p = p + '42' + 'PASSWORD' + 'TR0LL' + 'FLAG';
    res = p.slice(0, 4); 
    var temp = String.fromCodePoint(parseInt(res, 16));
    var flag_var = temp.localeCompare(password, "pl");
    if (flag_var == 0 ) {
        var flag_array = [];
    	var codepoints = ['😀','😃','😄','😁','😆','😅'];
        for (index = 0; index < codepoints.length; index++) { 
            flag_array.push(codepoints[index].codePointAt(0).toString(16));
            if(index %2 == 0){
                flag_array.push(password.codePointAt(0).toString(16));
            }
            } 
        var not_final = flag_array.join();
        var final = not_final.replace(/,/g, '-');
        alert("Flag is : AbhedyaCTF{" +  final + "}");
        

    } else {
        //todo
    }
}

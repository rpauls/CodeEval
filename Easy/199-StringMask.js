/*
 *  2016-08-23
 *  CodeEval Challenge - Easy
 *  String Mask
 */

var fs  = require("fs");
fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if (line !== "") {
        var input = line.split(' '),
            chars = input[0].toLowerCase(),
            mask = input[1],
            out = '';

        for (var i = 0; i < mask.length; i++) {
            if(mask.charAt(i) === '1') {
                out += chars.charAt(i).toUpperCase();
            } else {
                out += chars.charAt(i);
            }
        }

        console.log(out);
    }
});

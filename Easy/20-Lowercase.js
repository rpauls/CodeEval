/*
 *  2016-08-23
 *  CodeEval Challenge - Easy
 *  Lowercase
 */

var fs  = require("fs");
fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if (line !== "") {
        var input = line.split(' ');

        console.log(line.toLowerCase());
    }
});

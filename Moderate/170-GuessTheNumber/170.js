/*
 *  2016-08-26
 *  CodeEval Challenge - Moderate
 *  Guess The Number
 */

var fs  = require("fs");
fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if (line !== "") {
        var input = line.split(' '),
            a = 0,
            b = input.shift(),
            guess = Math.ceil(b / 2);

        input.forEach(function(str, key){
            switch (str) {
                case 'Yay!':
                    break;
                case 'Lower':
                    b = guess - 1;
                    break;
                case 'Higher':
                    b = guess + 1;
                    break;
            }
            guess = a + Math.ceil((b - a) / 2);
        });

        console.log(guess);
    }
});

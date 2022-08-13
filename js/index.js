var no = 0;
var a = [4, 5, 10, 11, 6];
var m = -1;
var eq = 1;
var arr_count = (a.length) - 1;

a.forEach(item => {
    if (no >= arr_count) {
        eq = no;
        no = no - arr_count;

        for (i = 0; i <= arr_count; i++) {
            if ((a[i] - a[eq]) == m) {
                console.log(no + "-" + eq + ".");
                process.exit()
            } else {
                no++;
            }
        }
    }

    console.log(no + "-" + eq + ",")

    if ((a[no] - a[eq]) == m) {
        no += 2;
        eq += 2;
    } else {
        no += 1;
        eq += 1;
    }
})
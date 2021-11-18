// Hi, here's your problem today. This problem was recently asked by Facebook:

// You are given a list of numbers, and a target number k. Return whether or not there are two numbers in the list that add up to k.

// Example:
// Given [4, 7, 1 , -3, 2] and k = 5,
// return true since 4 + 1 = 5.

let arreglo_original  = [4, 7, 1 , -3, 2]
let factor_suma = 4
let no_sum = true

for (i = 0; i < arreglo_original.length; i++) {

    for (j = i + 1; j < arreglo_original.length; j++) {
    
        if ((arreglo_original[i] + arreglo_original[j]) === factor_suma) {

            console.log("true since", arreglo_original[i], "+" ,arreglo_original[j], "=", factor_suma)
            no_sum = false
            break
        }
    }    
}

if (no_sum) {
    console.log("false, no coincidences")
}
// converts string into a sentence
function makeASentence(string){
    // this adds spaces between the words with capital letters
    var str = string.split(/(?=[A-Z])/).join(" ")
    // lowercase all letters
    var newStr = str.toLowerCase()
    // gets the first letter to be capitalized
    var capitalLetter = newStr[0].toUpperCase()
    // make them into an array
    var newArr = newStr.split("")
    
    // this replaces the first letter into a capital letter
    newArr.shift()
    newArr.unshift(capitalLetter)
    var finalStr = newArr.join("")

    return finalStr
}

console.log(makeASentence("TheQuickBrownFoxJumpsOverTheLazyDog."))
function isPalindrome(str) {
    let reversedStr = str.split('').reverse().join('');
    return str === reversedStr ? 'palindrome' : 'bukan palindrome';
}

console.log(isPalindrome('ibnu')); // bukan palindrome
console.log(isPalindrome('katak')); // palindrome
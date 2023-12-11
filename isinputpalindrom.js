function isPalindrome(input) {
  const reversed = input.split('').reverse().join('');
  return input === reversed;
}

const input = prompt('Enter a string:');
const result = isPalindrome(input);

if (result) {
  console.log('"${input}" is a palindrome.');
} else {
  console.log('"${input}" is not a palindrome.');
}
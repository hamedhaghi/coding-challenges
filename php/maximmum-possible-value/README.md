Write a function solution that, given an integer N, returns the maximum possible value obtainable by deleting one '5' digit from the decimal representation of N. It is guaranteed that N will contain at least one '5' digit.
Examples:
1. Given N = 15958, the function should return 1958.
2. Given N = -5859, the function should return -589.
3. Given N= - 5000, the function should return 0. After deleting the '5', the only digits in the number are zeroes, so its value is 0.
Assume that:
• N is an integer within the range [-999,995..999,995);
• N contains at least one '5' digit in its decimal representation;
• N consists of at least two digits in its decimal
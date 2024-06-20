Write a function solution that, given a string S consisting of N letters 'a' and/or 'b' returns true when all occurrences of letter 'a' are before all occurrences of letter 'b' and returns false otherwise.
Examples:

Given S = "aabbb", the function should return true.
Given S = "ba", the function should return false.
Given S = "aaa", the function should return true. Note that 'b' does not
need to occur in S.
Given S = "b", the function should return true. Note that 'a' does not
need to occur in S.
Given S = "abba", the function should return false.
Write an efficient algorithm for the following assumptions:
• N is an integer within the range |1..300,000];
• string S is made only of the characters 'a' and/or 'b'.

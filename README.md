# PHP Foreach Loop and Unset() Issue

This repository demonstrates a common, yet subtle, bug in PHP when using the `unset()` function within a `foreach` loop that iterates over an array.

## The Problem
The problem arises from how PHP handles array internal pointers during iteration and modification.

When you remove an element from an array using `unset()` within a `foreach` loop, the array's internal pointer is not correctly updated. This causes unexpected skips in the iteration, leading to incomplete or incorrect array modification.

## Solution
The solution involves iterating over the array in reverse order or using a different approach to filter or modify the array.

## How to run
1. Clone the repository.
2. Run the `bug.php` file to observe the buggy behavior.
3. Run the `bugSolution.php` file to see the corrected solution.

# PHP Null Object Property Access Error

This repository demonstrates a common PHP error: attempting to access a property of a null object.  This typically results in a fatal error, halting script execution.  The example showcases the problem and a robust solution.

## Problem
The core issue is accessing a nested object property where the initial object or a property in the chain might be null.

## Solution
The solution involves using null coalescing operators (`??`) to gracefully handle potential null values in the property chain. This prevents fatal errors and allows for more robust code.
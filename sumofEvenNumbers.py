def sumofEvenNumbers(numbers):
    sumofEven = 0
    for num in numbers:
        if num % 2 == 0:
            sum_even += num
    return sum_even

arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,12,14,16,18,20]
result = sumofEvenNumbers(arr)
print("Sum of even numbers:", result)
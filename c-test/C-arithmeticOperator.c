#include <stdio.h>

int main() {
    int a = 21;
    int b = 10;
    int c;

    c = a + b;
    printf("Line 1 - c 的值是 %d\n", c);
    c = a - b;
    printf("Line 2 - c 的值是 %d\n", c);
    c = a * b;
    printf("Line 3 - c 的值是 %d\n", c);
    c = a / b;
    printf("Line 4 - c 的值是 %d\n", c);
    c = a % b;
    printf("Line 5 - c 的值是 %d\n", c);
    c = a++; // 赋值后再加 1，c为21，a为22
    printf("Line 6 - c 的值是 %d\n", c);
    c = a--; // 赋值后再减 1，c为22，a为21
    printf("Line 7 - c 的值是 %d\n", c);
    

}
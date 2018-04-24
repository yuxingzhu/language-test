#include <stdio.h>

main() {
    int a = 21;
    int c;
    
    c = a;
    printf("Line 1 - = 运算符实例，c的值 = %d\n", c );
   
    c += a;
    printf("Line 2 - += 运算符实例，c的值 = %d\n", c);

    c -= a;
    printf("Line 3 - -= 运算符实例，c的值 = %d\n", c);

    c *= a;
    printf("Line 4 - *= 运算符实例，c的值 = %d\n", c);

    c /= a;
    printf("Line 5 - /= 运算符实例，c的值 = %d\n", c);

    c = 200;
    c %= a;
    printf("Line 6 - %= 运算符实例，c的值 = %d\n", c);

    c <<= 2;
    printf("Line 7 - <<= 运算符实例，c的值 = %d\n", c);

    c >>= 2;
    printf("Line 8 - >>= 运算符实例，c的值 = %d\n", c);

    c &= 2;
    printf("Line 9 - &= 运算符实例，c的值 = %d\n", c);

    c ^= 2;
    printf("Line 10 - ^= 运算符实例，c的值 = %d\n", c);

    c |= 2;
    printf("Line 11 - |= 运算符实例，c的值 = %d\n", c);

}
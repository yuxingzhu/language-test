#include <stdio.h>

int main() {
    int c;

    printf("Enter a value : ");
    c = getchar();

    printf("\n You entered: ");
    putchar(c);
    printf("\n");
    
    return 0;
}
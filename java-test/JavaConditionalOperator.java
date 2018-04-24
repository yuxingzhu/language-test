public class JavaConditionalOperator {
    public static void main(String[] args) {
        int a, b;
        a = 10;
        // 如果 a 等于 1 成立，则设置 b 为 20，否则为30
        b = (a == 1) ? 20 : 30;
        System.out.println("Value of b is : " + b);

        // 如果 a 等于 10 成立，则设置 b 为 20，否则为30
        b = (a == 10) ? 20 : 30;
        System.out.println("Value of b is : " + b);
    }
}

public class JavaStaticTest {
    private static int staticInt = 2;
    private int random = 2;

    public JavaStaticTest() {
        staticInt++;
        random++;
        System.out.println("staticInt = " + staticInt + "random = " + random);
    }

    public static void main(String[] args) {
        JavaStaticTest test = new JavaStaticTest();
        JavaStaticTest test2 = new JavaStaticTest();
    }
}
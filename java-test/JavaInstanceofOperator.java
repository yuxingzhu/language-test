class Vehicle {}

public class JavaInstanceofOperator extends Vehicle {
    public static void main(String args[]) {
        Vehicle a = new JavaInstanceofOperator();
        boolean result = a instanceof JavaInstanceofOperator;
        System.out.println(result);
    }
}
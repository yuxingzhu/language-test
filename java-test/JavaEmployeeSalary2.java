import java.io.*;

public class JavaEmployeeSalary2 {
    // salary是静态的私有变量
    private static double salary;
    // DEPARTMENT是一个常量
    public static final String DEPARTMENT = "开发人员";
    public static void main(String args[]) {
        salary = 1000;
        System.out.println(DEPARTMENT + "平均工资：" + salary);
    }
}
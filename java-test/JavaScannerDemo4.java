import java.util.Scanner;

public class JavaScannerDemo4 {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        double sum = 0;
        int m = 0;

        while (scan.hasNextDouble()) {
            double x = scan.nextDouble();
            m = m + 1;
            sum = sum + x;
        }

        System.out.println(m + "个数的和为：" + sum);
        System.out.println(m + "个数的平均值是" + (sum / m));
        scan.close();
    }
}
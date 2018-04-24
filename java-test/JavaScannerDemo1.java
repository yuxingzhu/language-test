import java.util.Scanner;

public class JavaScannerDemo1 {
    public static void main(String args[]) {
        Scanner scan = new Scanner(System.in);
        // 从键盘接受数据

        // next方法接受字符串
        System.out.println("next方式接受：");
        // 判断是否还有输入
        if (scan.hasNext()) {
            String str1 = scan.next();
            System.out.println("输入的数据为：" + str1);
        }
        scan.close();
    }
}
// 使用BufferedReader 在控制台读取字符

import java.io.*;

public class JavaBRRead {
    public static void main(String args[]) throws IOException {
        char c;
        // 使用System.in 创建BufferedReader
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

        System.out.println("输入字符，按下 'q' 键退出。");

        //读取字符
        do {
            c = (char) br.read();
            System.out.println(c);
        } while (c != 'q');
    }
}
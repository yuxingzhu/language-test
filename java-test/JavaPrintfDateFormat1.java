import java.util.Date;

public class JavaPrintfDateFormat1 {
    public static void main(String args[]) {
        // 初始化 Date 对象
        Date date = new Date();

        // c的使用
        System.out.printf("全部日期和时间信息：%tc%n", date);
        // f的使用
        System.out.printf("年-月-日格式：%tF%n", date);
        // d的使用
        System.out.printf("月/日/年格式：%tD%n", date);
        // r的使用
        System.out.printf("HH:MM:SS PM格式（12时制）：%tr%n",date);
        // t的使用
        System.out.printf("HH:MM:SS格式（24时制）：%tT%n",date);
        // R的使用
        System.out.printf("HH:MM格式（24时制）：%tR", date);
    }
 }
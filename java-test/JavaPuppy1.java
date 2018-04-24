public class JavaPuppy1 {
    public JavaPuppy1(String name) {
        // 这个构造器仅有一个参数：name
        System.out.println("小狗的名字:" + name);
    }
    public static void main(String[] args) {
        // 下面的语句将创建一个Puppy对象
        JavaPuppy1 myPuppy = new JavaPuppy1("tommy");
    }
}
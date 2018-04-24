/* 文件名 : JavaMammalInt.java */
public class JavaMammalInt implements JavaAnimal{

    public void eat(){
        System.out.println("Mammal eats");
    }

    public void travel(){
        System.out.println("Mammal travels");
    }

    public int noOfLegs(){
        return 0;
    }

    public static void main(String args[]){
        JavaMammalInt m = new JavaMammalInt();
        m.eat();
        m.travel();
    }
}
class FreshJuice {
    enum FreshJuiceSize {
        SMALL, MEDIUM, LARGE
    }
    FreshJuiceSize size;
}

public class JavaFreshJuiceTest {
    public static void main(String[] args) {
        FreshJuice juice = new FreshJuice();
        juice.size = FreshJuice.FreshJuiceSize.MEDIUM;
    }
}
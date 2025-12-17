public class tes{
    public static void main(String[] args) {
        int m = 45;
        int n = 36;
        int r ;
        int pbb = 0;
          

        while ( n > 0) {
            r = m%n;
            m = n;
            n = r;
        
        }
        System.out.println("PBB = "+m);
    }
}
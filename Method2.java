public class Method2 {
public static void main(String[] args) {
	Method2 method = new Method2();
	method.methodTampilkan2("Belajar Java Yuks");
	System.out.println(method.tambahkanNilai(3, 5));
}
	private void methodTampilkan2(String nama) {
	System.out.println(nama);
}
	private int tambahkanNilai (int x, int y) {
	return x + y;
	}
}
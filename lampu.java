//Nama  : OKTAMA BAGASKARA
//Kelas : TIF W14
//Nim	: 14111194

class lampu{
	//Atribut class pada lampu{
	String warna;
	String merk;
	String type;
	int watt;
	
	void HidupkanLampu(){
		System.out.println("Mengidupkan Lampu");
	}
	
	void MatikanLampu(){
		System.out.println("Matikan Lampu");
	}
	
	void LampuRedup(){
		System.out.println("Lampu Redup");
	}
	
	public static void main(String[] args){
		//Method class Pada Lampu
		lampu LampuSiapa=new lampu(); //Kelas yang Dibuat
		LampuSiapa.warna="Putih"; //Memakai data warna
		LampuSiapa.merk="Philips"; //Memakai data Merk
		LampuSiapa.type="LED"; //Memakai data Type
		LampuSiapa.watt=5; //Memakai data watt
		
		System.out.println(LampuSiapa.warna);
		System.out.println(LampuSiapa.merk);
		System.out.println(LampuSiapa.type);
		System.out.println(LampuSiapa.watt);
		
		//Memanggil method hidupkan lampu
		LampuSiapa.HidupkanLampu();
		//Memanggil Method Matikan lampu
		LampuSiapa.MatikanLampu();
		//Memanggil Method Lampu Redup
		LampuSiapa.LampuRedup();
	}
}
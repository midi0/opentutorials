package list.doublylinkedlist.implementation;

public class Main {
	public static void main(String[] args) {
		DoublyLinkedList numbers = new DoublyLinkedList();
		numbers.addLast(30);
		numbers.addLast(20);
		numbers.addLast(10);
		System.out.println(numbers.indexOf(10));
	}
}

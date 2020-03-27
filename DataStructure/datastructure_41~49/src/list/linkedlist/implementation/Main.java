package list.linkedlist.implementation;

public class Main {
	public static void main(String[] args) {
		LinkedList numbers = new LinkedList();
		numbers.addLast(30);
		numbers.addLast(20);
		numbers.addLast(10);
		System.out.println(numbers.indexOf(10));
	}
}

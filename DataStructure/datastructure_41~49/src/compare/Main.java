package compare;

import list.arraylist.implementation.ArrayList;
import list.linkedlist.implementation.LinkedList;

public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		ArrayList a = new ArrayList();
		a.addLast(10);
		a.addLast(10);
		a.addLast(10);
		ArrayList.ListIterator ai = a.listIterator();
		while(ai.hasNext()) {
			if((int)ai.next() == 20) {
				ai.add(25);
			}
		}
		
		LinkedList l = new LinkedList();
		l.addLast(10);
		l.addLast(10);
		l.addLast(10);
		LinkedList.ListIterator li = l.listIterator();
		while(li.hasNext()) {
			if((int)li.next() == 20) {
				li.add(25);
			}
		}
	}

}

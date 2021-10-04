package com.company;

public class Main {

    public static void main(String[] args) {
	    //Float = 32 bits Double = 64
        //Double is better
        float myMinFloat = Float.MIN_VALUE;
        float myMaxFloat = Float.MAX_VALUE;
        System.out.println("My Min Float: " + myMinFloat);
        System.out.println("My Max Float: " + myMaxFloat);

        double myMinDouble= Double.MIN_VALUE;
        double myMaxDouble = Double.MAX_VALUE;
        System.out.println("My Min Double: " + myMinDouble);
        System.out.println("My Max Double: " + myMaxDouble);

        int newInt =5/3;
        float newFloat= 5f/3f;
        double newDouble= 5d/3d;
        System.out.println("My Int " + newInt);
        System.out.println("My Float " + newFloat);
        System.out.println("My Double " + newDouble);

	 }
}

package com.company;

public class Main {

    public static void main(String[] args) {
        int myValue = 10000;
        int myMinIntValue = Integer.MIN_VALUE;
        int myMaxIntValue = Integer.MAX_VALUE;
        System.out.println("Integer Minimum Value = " + myMinIntValue);
        System.out.println("Integer Maximum Value = " + myMaxIntValue);
        System.out.println("Integer Busted MAX Value = " + (myMaxIntValue + 1));
        System.out.println("Integer Busted MIN Value = " + (myMaxIntValue - 1));
        
        byte myMinByteValue = Byte.MIN_VALUE;
        byte myMaxByteValue = Byte.MAX_VALUE;
        System.out.println("Byte Minimum Value = " + myMinByteValue);
        System.out.println("Byte Maximum Value = " + myMaxByteValue);

        short myMinShortValue = Short.MIN_VALUE;
        short myMaxShortValue = Short.MAX_VALUE;
        System.out.println("Short Minimum Value = " + myMinShortValue);
        System.out.println("Short Maximum Value = " + myMaxShortValue);

        //Long Literal
        long myLongLiteral =100L;
        //Always has L at the end

        long myMinLongValue = Long.MIN_VALUE;
        long myMaxLongValue = Long.MAX_VALUE;
        System.out.println("Long Minimum Value = " + myMinLongValue);
        System.out.println("Long Maximum Value = " + myMaxLongValue);

        //Casting/Value conversion
        int myTotal =(myMinIntValue/2);
        byte myNewByte = (byte)(myMinByteValue/2);
        short myNewShort =(short)(myMinShortValue/2);

        //Primitive type Challenge
        byte bVal1 = 21;
        Short sVal1 = 42;
        int iVal1 = 69;
        long lVal1 = 50000+(10 * (bVal1+sVal1+iVal1));
        System.out.println("My Long Value is: " + lVal1);

    }
}

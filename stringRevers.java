import java.util.Scanner;

public class StringReverse {
    public static String reverseString(String userinput) {
        StringBuilder reversed = new StringBuilder();
        for (int i = userinput.length() - 1; i >= 0; i--) {
            reversed.append(userinput.charAt(i));
        }
        return reversed.toString();
    }

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Enter a string: ");
        String input = scanner.nextLine();
        scanner.close();

        String reversed = reverseString(input);
        System.out.println("Reversed string: " + reversed);
    }
}
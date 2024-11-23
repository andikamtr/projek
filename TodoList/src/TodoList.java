public class TodoList {
    public static String[] model = new String[10];

    public static java.util.Scanner scan = new java.util.Scanner(System.in);

    public static void main(String[] args) {
        viewShowTodoList();
    }

    public static void showTodoList() {
        for (var i = 0; i < model.length; i++) {
            var todo = model[i];
            var no = i + 1;
            if (todo != null) {
                System.out.println(no + ". " + todo);
            }

        }
    }

    public static void testShowTodoList() {
        model[0] = "Satu";
        model[1] = "Dua";
        model[2] = "Tiga";
        showTodoList();
    }

    public static void addTodoList(String todo) {
        var penuh = true;
        // Cek apakah sdh penuh
        for (var i = 0; i < model.length; i++) {
            if (model[i] == null) {
                penuh = false;
                break;
            }
        }

        // Jika penuh maka kalikan 2 dari nilai arraynya
        if (penuh) {
            var tampung = model;
            model = new String[model.length * 2];
            for (var i = 0; i < tampung.length; i++) {
                model[i] = tampung[i];
            }
        }

        // Tambahkan Todo kedalam model
        for (var i = 0; i < model.length; i++) {
            if (model[i] == null) {
                model[i] = todo;
                break;
            }
        }
    }

    public static void testAddTodoList() {
        for (var i = 0; i < 35; i++) {
            addTodoList("Todo ke : " + i);
        }
        showTodoList();
    }

    public static boolean removeTodoList(Integer number) {
        if ((number - 1) >= model.length) {
            return false;
        } else if (model[number - 1] == null) {
            return false;
        } else {
            for (var i = number - 1; i < model.length; i++) {
                if (i == (model.length) - 1) {
                    model[i] = null;
                } else {
                    model[i] = model[i + 1];
                }
            }
        }
        return true;

    }

    public static void testRemoveTodoList() {
        addTodoList("Satu");
        addTodoList("Dua");
        addTodoList("Tiga");

        showTodoList();

        System.out.println(removeTodoList(9));
        System.out.println(removeTodoList(2));
        showTodoList();
    }

    public static String input(String info) {
        System.out.print(info + " : ");
        String data = scan.nextLine();
        return data;
    }

    public static void testInput() {
        var nama = input("Nama");
        System.out.println(nama);

        var jk = input("Jenis Kelamin");
        System.out.println(jk);
    }

    public static void viewShowTodoList() {
        while (true) {
            showTodoList();

            System.out.println("Menu : ");
            System.out.println("1. Tambah");
            System.out.println("2. Hapus");
            System.out.println("x. Keluar");

            var input = input("Silahkan pilih menu");

            if (input.equals("1")) {
                viewAddTodoList();
            } else if (input.equals("2")) {
                viewRemoveTodoList();
            } else if (input.equals("x")) {
                break;
            } else {
                System.out.println("Pilihan tidak dimengerti");
            }
        }
    }

    public static void testViewShowTodoList() {
        addTodoList("Satu");
        addTodoList("Dua");
        addTodoList("Tiga");

        viewShowTodoList();
    }

    public static void viewAddTodoList() {
        System.out.println("Menambahkan Todo List");

        var todo = input("Masukan Todo (x jika batal)");

        if (todo.equals("x")) {
            // Batal
        } else {
            addTodoList(todo);
        }
    }

    public static void testViewAddTodoList() {
        addTodoList("Satu");
        addTodoList("Dua");

        viewAddTodoList();

        showTodoList();
    }

    public static void viewRemoveTodoList() {
        System.out.println("Menghapus Todo List");
        var number = input("Masukan Nomor (x jika batal)");

        if (number.equals("x")) {
            // Batal
        } else {
            boolean success = removeTodoList(Integer.valueOf(number));
            if (!success) {
                System.out.println("Gagal Menghapus Todo List");
            }
        }

    }

    public static void testViewRemoveTodoList() {
        addTodoList("Satu");
        addTodoList("Dua");
        addTodoList("Tiga");

        showTodoList();

        viewRemoveTodoList();

        showTodoList();
    }
}

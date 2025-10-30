<?php
/* Problem -> 39=> URL থেকে নাম প্রিন্ট করুন
📝 সমস্যা G1:
একটি ফাইল তৈরি করুন নামে welcome.php।
এটি যেন ?name=আপনার_নাম থেকে নাম নিয়ে প্রিন্ট করে।*/
$name = $_GET['name'] ?? 'Guest';
echo "Whelcome to PHP $name";
?>
/* Problem -> 40=> সিম্পল ক্যালকুলেটর
📝 সমস্যা G2:
একটি HTML ফর্ম + PHP স্ক্রিপ্ট বানান যেখানে:

ইউজার দুটি নাম্বার ইনপুট দেবে
একটি ড্রপডাউন থেকে অপারেশন বাছবে (+, -)
PHP স্ক্রিপ্ট রেজাল্ট প্রিন্ট করবে*/
<?php
$result = '';
if ($_POST) {
  
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['op'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['op'];
        

        if (is_numeric($num1) && is_numeric($num2)) {
            if ($op == 'add') {
                $result = $num1 + $num2;
            } else {
                $result = $num1 - $num2;
            }
        } else {
            $result = "Please enter valid numbers.";
        }
    } else {
        $result = "All fields are required.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="num1" required placeholder="Number 1">
        <input type="number" name="num2" required placeholder="Number 2">
        <select name="op" required>
            <option value="add">+</option>
            <option value="sub">-</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
    
    <?php if ($result !== ''): ?>
        <h2>Result: <?php echo $result; ?></h2>
    <?php endif; ?>
</body>
</html>
<?php
/* Problem -> 39=> URL থেকে নাম প্রিন্ট করুন
📝 সমস্যা G1:
একটি ফাইল তৈরি করুন নামে welcome.php।
এটি যেন ?name=আপনার_নাম থেকে নাম নিয়ে প্রিন্ট করে।*/
$name = $_GET['name'] ?? 'Guest';
echo "Whelcome to PHP $name";
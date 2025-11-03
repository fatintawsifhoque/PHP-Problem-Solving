<?php
// ১. ইউজারের তথ্য সংগ্রহ করুন
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$timestamp = date("Y-m-d H:i:s");

// ২. লগ এন্ট্রি ফরম্যাট করুন
$log_entry = "[$timestamp] IP: $ip | Browser: $user_agent\n";

// ৩. লগ ফাইলে যোগ করুন (Append মোডে)
$file = fopen("access.log", "a");
fwrite($file, $log_entry);
fclose($file);

// ৪. ইউজারকে মেসেজ দিন
echo "<h1>Page Visited!</h1>";
echo "<p>Your visit has been logged.</p>";
echo "<p><a href='access.log'>View Log File</a></p>";
?>
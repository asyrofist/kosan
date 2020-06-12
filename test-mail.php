<?php
if (isset($_POST['simpan'])) {
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  $from = $_POST['email_pelanggan'];
  $to = "admin@asyrofi.com";
  $subject = $_POST['subject_pelanggan'];
  $message = $_POST['message_pelanggan'];
  $headers = "From:" . $from;
  mail($to, $subject, $message, $headers);
  echo "Pesan email sudah terkirim.";
}

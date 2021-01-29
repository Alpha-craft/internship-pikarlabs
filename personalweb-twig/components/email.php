<?php
if(isset($_POST['kirim'])){
  $dari = $_POST['from'];
  $subjek = $_POST['subjek'];
  $pesan = $_POST['msg'];
  email($dari,$subjek,$pesan);
  include "components/email_modal.php";
}
?>

<form action="" method="post">
  <div class="grid-cols-1" >
    <input placeholder="From" type="email" name="from" class=" w-5/6 md:w-4/5 px-4 mx-8  bg-gray-300 text-black rounded-md placeholder-gray-700 focus:outline-none " required >
    <input placeholder="Subject" type="text" name="subjek" class=" w-5/6 md:w-3/5 px-4 my-2 mx-8  bg-gray-300 text-black rounded-md placeholder-gray-700 focus:outline-none" required >
    <textarea placeholder="Message" name="msg" id=""class="block w-5/6 bg-gray-300 px-4 my-4 mx-8 rounded placeholder-gray-700 focus:outline-none " required ></textarea>
    <button type="submit" name="kirim" class=" mx-8 bg-blue-600 text-white h-auto w-auto rounded-md px-3 py-1 my-2" >Send</button>
  </div>
</form>
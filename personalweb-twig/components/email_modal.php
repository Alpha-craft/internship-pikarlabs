
<div id="email_modal" class=" fixed text-center z-50 w-full h-full top-0 left-0  bg-black bg-opacity-60 transition-all ease-in-out duration-500 " >
  <div class="container mx-auto" >
    <div class="bg-blue-400 w-2/4 h-auto rounded-md my-48 p-2 m-auto" >
      <p class="text-2xl border-b-2 border-gray-600 " >Email Terkirim </p>
      <p class="text-2xl  " ><?= $modal_msg ?> </p>
      <button class=" border hover:bg-red-500  border-red-500 rounded-md p-1 " onclick="tutup('email_modal')">Close</button>
    </div>
  </div>
</div>



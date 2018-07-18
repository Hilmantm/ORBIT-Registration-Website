let ubahData = document.getElementById('ubah-data');
let hapusData = document.getElementById('hapus-data');
let formDisable = document.getElementsByClassName('update-event');
let cancel = document.getElementById('cancel-btn');
let submit = document.getElementById('update-btn');

ubahData.addEventListener("click", function() {

  for( let i = 0; i < formDisable.length; i++ ) {
      formDisable[i].removeAttribute("disabled");
  }

  submit.removeAttribute('disabled');
  cancel.removeAttribute('disabled');

});

cancel.addEventListener("click", function() {

  for( let i = 0; i < formDisable.length; i++ ) {
      formDisable[i].setAttribute("disabled", "on");
  }

  submit.setAttribute('disabled');
  cancel.setAttribute('disabled');

});

function submitValidation() {
  // Belum jalan sempurna
  if( !confirm('Apakah anda yakin ingin menghapus data siswa ini?') ) {
    console.log("gajadi gan hapusnya");
    return false;
  }
}

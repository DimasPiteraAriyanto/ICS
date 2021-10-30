document.querySelector('#tambah').addEventListener('click',function(e)
{
    jsRESTClientPOST();     
});
 
function jsRESTClientPOST()
{
    let formData = new FormData();
 
    formData.append("PegawaiID", document.querySelector('#PegawaiID').value);
    formData.append("PegawaiName", document.querySelector('#PegawaiName').value);
 
    fetch('https://hidok.co.id/hidok/api/Pegawai/Save',{
                method : 'POST',
                body : formData         
    })
    .then(res => res.text())
    .then(teks => console.log(teks))
    .catch(err => console.log(err));
}
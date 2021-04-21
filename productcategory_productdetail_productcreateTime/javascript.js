function check(){
  if (typeof(Storage) !== 'undefined') {
    if (sessionStorage.getItem("status") === null){
      document.getElementById('cookies').style.visibility = 'visible';
    }
  } else {
    alert('Sorry your browser not support Storage');
  }
}


function agree(){
  if (typeof(Storage) !== 'undefined') {
    if (sessionStorage.status != 'true'){
      sessionStorage.setItem('status','true');
      document.getElementById('cookies').style.visibility = 'hidden';
    }
  } else {
    alert('Sorry your browser not support Storage');
  }
}

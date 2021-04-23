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

function on(name){
  var info = [
    {
      'Name': 'Pham Gia Nguyen',
      'Career': 'AI Engineer',
      'Motivation': 'Motivation',
      'Details': 'Because I like it'
    },
    {
      'Name': 'La Tran Hai Dang',
      'Career': 'Security',
      'Motivation': 'Motivation',
      'Details': 'Because I like it'
    },
    {
      'Name': 'Huynh Van Anh',
      'Career': 'Data Science',
      'Motivation': 'Motivation',
      'Details': 'Because I like it'
    },
    {
      'Name': 'Ngo My Quynh',
      'Career': 'Data Analytic',
      'Motivation': 'Motivation',
      'Details': 'Because I like it'
    }
  ]
  var temp;

  switch (name) {
    case 'Nguyen': temp = info[0];  break;
    case 'Dang': temp = info[1];  break;
    case 'Anh': temp = info[2];  break;
    case 'Quynh': temp = info[3];  break;

    default:
  }

  var list_element = []
  for(var key in temp){
    list_element.push(key);
  }

  var elements = ['h2', 'p', 'p', 'p'];
  var div = document.createElement('div');
  div.setAttribute('class', 'content-block');

  for(let i = 0; i < elements.length; i++){
    var element = document.createElement(elements[i]);
    var text = document.createTextNode(temp[list_element[i]]);
    element.appendChild(text);
    div.appendChild(element);
  }


  var div2 = document.createElement('div');
  div2.setAttribute('class', 'information-block');
  div2.appendChild(div);

  var result = document.getElementById('overlay');
  result.appendChild(div2);
  result.style.display = 'block';
}


function off(){
  let parent = document.getElementById('overlay');
  removeChildNode(parent);
  parent.style.display = 'none';
}


function removeChildNode(parent) {
  while (parent.firstChild) {
    parent.removeChild(parent.firstChild);
  }
}

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
      'Details': 'Artificial Intelligence is the promising field that allows machine to think like humans by applying mathematical models. Its application present everywhere from medical, games, etc. in order to help human solve their daily problems and enhance the convienience in thei lives. Therefore, the career prospect is undoubtly, which inspired me to follow this path.'
    },
    {
      'Name': 'La Tran Hai Dang',
      'Career': 'Security',
      'Motivation': 'Motivation',
      'Details': 'For me, the field of science and technology, especially information technology, has brought me the passion to learn new knowledge by the vastness of the IT world. I first encountered programming in grade 8, when it was the pascal programming language as an official subject in the school curriculum. I was intrigued by the command lines and the magic of computer algorithms. Since then, I have decided to enter the computer science class at high school and have achieved the silver medal for good students in IT. '
    },
    {
      'Name': 'Huynh Van Anh',
      'Career': 'Data Science',
      'Motivation': 'Motivation',
      'Details': 'Previously, I was a student specializing in Chemistry. Instead of choosing to become a doctor or pharmacist, I followed my passion and became a member of SST (School of Science and Technology). I have a great curiosity to explore the Data Industry, and I expect to be a Data Scientist.'
    },
    {
      'Name': 'Ngo My Quynh',
      'Career': 'Data Analytic',
      'Motivation': 'Motivation',
      'Details': 'Data Analysis is becoming a trend in nowadays career path. Therefore, I have explored a little bit of this career by learning Data Analysis course on LinkedLearn or Coursera. And just by observing the knowledge, I find my self very interested in data. As a result of that, I participant in many competition related to Data such as Shopee or VIB Datathon. From those day, I cannot wait to be a real Data Analysis than ever.'
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

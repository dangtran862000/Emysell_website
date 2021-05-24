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
      'Details': 'My name is Pham Gia Nguyen, my student ID is s2819521. Ho Chi Minh city is where I was born and grew up. Currently, in 2020, I am studying Information Technology program at RMIT with specialising in web development because I want to be a full-stack developer and mobile developer. In the past, I used to have a strong passion for football and swimming because I can connect closer to my friends and I can train myself. I have won a championship in a competition in high school. I have to admit that it is the best experience and exciting during my high school lifetime. However, my passion for IT became large when I saw my big brother, a competitive programmer, solving many challenging database problems such as arrays, multidimensional arrays and matrices in an online contest every weekend. Then, I follow his path to solving problems on the Leetcode website and join a contest at the weekends.'
    },
    {
      'Name': 'La Tran Hai Dang',
      'Career': 'Security',
      'Motivation': 'Motivation',
      'Details': 'Firstly, I will introduce some information about myself. My full name is La Tran Hai Dang and my student number is s3836605.  Currently, I am a second-year student with my first semester in major that is a bachelor of information technology at RMIT Vietnam University. For me, the field of science and technology, especially information technology, has brought me the passion to learn new knowledge by the vastness of the IT world. I first encountered programming in grade 8, when it was the pascal programming language as an official subject in the school curriculum. I was intrigued by the command lines and the magic of computer algorithms. Since then, I have decided to enter the computer science class at high school and have achieved the silver medal for good students in IT. Besides, not only interested in technology but also music for example playing instruments and participating in volunteer activities are my hobbies. I hope that the time I spend studying and researching information technology will help me improve my professional knowledge and hands-on experience in the technology industry.'
    },
    {
      'Name': 'Huynh Van Anh',
      'Career': 'Data Science',
      'Motivation': 'Motivation',
      'Details': 'My full name is Huynh Van Anh, and my student ID is 3836320. I come from Vinh Long City, after graduating from Nguyen Binh Khiem High School, I am now studying at RMIT University. Previously, I was a student specializing in Chemistry. Instead of choosing to become a doctor or pharmacist, I followed my passion and became a member of SST (School of Science and Technology). I have a great curiosity to explore the Data Industry, and I expect to be a Data Scientist. Our team name is called "4tech", which stands for "Four for Technology."'
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

function myFunctionVisiblity() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

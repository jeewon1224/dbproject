const sendBtn = document.querySelector('.sendBtn');
const resetBtn = document.querySelector('.resetBtn');

sendBtn.addEventListener('click', checkInput);
resetBtn.addEventListener('click', resetInput);

// 아이디 중복확인
//체크버튼 저장
const idCheckBtn = document.querySelector('#idCheck');

//체크버튼 클릭 시 idCheck 함수 실행
idCheckBtn.addEventListener('click', idCheck);
// checkCount 0으로 초기화
let checkCount=0;

// 초기화된 checkCount변수 1 증가 함수
function idCheck(){
  checkCount++;


}

//체크버튼을 누르지 않고 (0일 경우) send를 누를 시 체크버튼을 누르라는 알림이 떠야함







//리셋버튼 눌렀을 때 모든 입력창을 비움
function resetInput(){
  document.memberForm.id.value = '';   // 인덱스의 memberForm에서 id를 찾아서 그 값을 ''로 비운다!!!
  document.memberForm.name.value = '';
  document.memberForm.pass.value = '';
  document.memberForm.check.value = '';
  document.memberForm.email1.value = '';
  document.memberForm.email2.value = '';


  document.memberForm.id.focus(); //리셋 후 아이디 칸에 커서 위치 시킴
  return;
}


function checkInput(){

  //아이디 입력창이 비었을 때
  if(!document.memberForm.id.value){ 
    alert('아이디를 입력해주세요.');
    document.memberForm.id.focus();
    return;
  }

  //이름 입력창이 비었을 때
  if(!document.memberForm.name.value){ 
    alert('이름을 입력해주세요.');
    document.memberForm.name.focus();
    return;
  }

  //비밀번호 입력창이 비었을 때
  if(!document.memberForm.pass.value){ 
    alert('비밀번호를 입력해주세요.');
    document.memberForm.pass.focus();
    return;
  }

  //비밀번호 확인 입력창이 비었을 때
  if(!document.memberForm.check.value){ 
    alert('비밀번호 확인을 입력해주세요.');
    document.memberForm.check.focus();
    return;
  }

  //비밀번호와 비밀번호 확인 일치 여부
  if(document.memberForm.pass.value != document.memberForm.check.value){
    alert('비밀번호가 일치하지 않습니다. \n다시 입력해 주세요.')
    document.memberForm.pass.value = '';
    document.memberForm.check.value = '';
    document.memberForm.pass.focus();
    return;
  }


    //이메일 아이디 입력창이 비었을 때
    if(!document.memberForm.email1.value){ 
      alert('이메일 아이디를 입력해주세요.');
      document.memberForm.email1.focus();
      return;
    }
    
    //이메일 주소 입력창이 비었을 때
    if(!document.memberForm.email2.value){ 
      alert('이메일 주소를 입력해주세요.');
      document.memberForm.email2.focus();
      return;
    }



    if(checkCount===0){
      alert('아이디 중복체크를 눌러주세요.');
      
    }else{
      document.memberForm.submit();  //memberForm을 서버로 날리기
    }



    //checkCount 조건의 if문은 맨 위의 checkCount에 알림창을 띄워주는 함수!






}



//.focus() : 요소에 focus를 부여하여 (텍스트창의 경우) 커서를 위치시켜 바로 입력이 가능하게 한다. 






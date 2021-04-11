function clicked() {
    // 조건문
    a = 1
    if(a === 1) {
        console.log('a는 1입니다.')
    }
    else if(a === 0) {
        console.log('a는 0입니다.')
    }
    else {
        console.log('a는 모르겠어요.')
    }

    for(let i=0; i < 3; i++) {
        console.log(i+1,'번 실행했어요.')
    }

    // 인풋값 받기
    // let userInput = prompt("당신의 이름은 무엇인가요?");
    // alert("어서오세요, ", userInput, "님")
    
    // 인풋값을 받아서, 1일 경우 one, 2일 경우 two, 3일 경우 three를 경고창에 띄우고, 그 외의 숫자인 경우는 모르겠어요를 띄운다.
    let userInput = Number(prompt("숫자를 입력해주세요"));

    if (userInput === 1) {
        alert("one")
    }
    else if (userInput === 2) {
        alert("Two")
    }
    else if (userInput === 3) {
        alert("Three")
    }
    else {
        alert("모르겠어요")
    }
    





    


    // 반복문
    // 예제 0~10 정수내에서 2의 배수만 출력
    for(let i = 0;i < 11;i++) {
        if(i % 2 === 0) {
            // console.log(String(i))
        }
    }

    // 예제 0~100 정수내에서 첫자리가 1인 경우만 출력
    for(let i = 0; i <101; i++) {
        lastChr = String(i).split('')
        // console.log(lastChr)
        if(lastChr[0] === '1') {
            // console.log(i)
        }
    }    

    // 예제 0~100 정수내에서 끝자리가 1인 경우만 출력
    for(let i = 0; i <101; i++) {
        lastChr = String(i).split('')
        // console.log(lastChr)
        if(lastChr[lastChr.length - 1] === '1') {
            // console.log(i)
        }
    }    

    // 숙제 : 파이썬 자바스크립트 둘다 해오기
    // 예제 0~1000 정수내에서 (i * 2) + 263 / 18 적용해서 출력
    // for(let i =0; i<1001; i++) {
    //     a = (i*2)+263/18
    //     console.log(a)
    // }
    // 예제 0~100 정수내에서 2의 승수만 출력
    for(let i=0; i<10; i++){
        twoPower = Math.pow(2,i)
        if(twoPower < 100) {
            // console.log(twoPower)
        }
    }
        
    
        // 예제 0~100 정수내에서 3의 승수만 출력
    // for(let i =0; i<10; i++) {
    //     twoPower = Math.pow(3,i)
    //     if(threePower < 100) {
    //         console.log(threePower) 
    //     }
               
       
    // 예제 24와 36의 최대공약수
    // function gcdlcm(a, b) {
    //     var answer = [];
    //     var minNum = Math.min(a, b);
    //     var maxNum = Math.max(a, b);
    //     answer[0] = gcd(minNum, maxNum);
    //     answer[1] = lcm(minNum, maxNum);
    //     return answer;
    // }
    // // 최대공약수
    // function gcd(minNum, maxNum){
    //   return (minNum % maxNum) === 0 ? maxNum : gcd(maxNum, minNum % maxNum);
    // }
    // // 최소공배수
    // function lcm(minNum, maxNum){
    //   return minNum * maxNum / gcd(minNum, maxNum);
    // }
    // // 아래는 테스트로 출력해 보기 위한 코드입니다.
    // console.log(gcd(24,36));
    
    // // 예제 12과 9의 최소공배수    
    // console.log(lcm(12,9));
    // 예제 구구단 만들기 (3 * 1 = 3 '\n' 3 * 2 = 6 ...)
    for(let i =0; i<10; i++) {
        for ( let a = 1; a < 10; a++){
            // console.log( i + 'x' + a + '=' + (i*a));
        }
    }

}

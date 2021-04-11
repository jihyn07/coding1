// 주석 : 변수앞
/**
 * 긴 줄 주석 : 함수앞
 */
/**
 * 버튼 클릭시
 */
function clicked() {
    // 변수의 선언 : let, const
    let a = 'yang '
    // console.log(a)        

    // 변수의 변경
    a = 1    
    // console.log(a)        

    // string 변수와 number 변수가 있음.
    a = 'lee'
    // console.log(a - 1) // error

    // let : 변수, 바꿀 수 있음
    // const : 상수 (변하지 않는 수)는, 남이 못바꾸게 되므로 보안 향상, 트러블 예방 효과
    let b = '변할 수 있는 b'
    const c = '상수 c'
    b = 1
    // c = 1
    // console.log(b)
    // console.log(c)

    // 변수의 타입
    /*
        Number 정수
        Float 실수
        String 문자열
        Boolean 논리
        Object 오브젝트(객체): {} // 라벨형 상자
        Array 어레이(배열): [] // 나열형 상자
        Set 세트: Set {} // 콜렉션
    */

    const num1 = 1
    const num2 = 2
    const boolean1 = (num1 < num2)
    const boolean2 = (num1 === num2)
    const boolean3 = (num1 !== num2)
    // console.log(boolean1)
    // console.log(boolean2)
    // console.log(boolean3)
    // console.log('hello', ' world')

    // 오브젝트

    /*
        오브젝트는 객체
        키와 밸류로 된 값 : 키로 밸류를 꺼낸다.
        하나의 객체에 여러개의 변수를 삽입 가능 = 배열 X
    */
    const obj1 = { a: 'value1', b: 'value2' }
    // console.log(obj1)
    // console.log(obj1.a)
    // console.log(obj1.b)




    // 오브젝트는 값 복사가 안되요?
    // let objA = { a: 1, b: 2 }
    // let objB = objA
    // objA.a = 3
    // console.log(objB) // 1이 나와야 하는데, 3이 나옵니다.

    /*
        오브젝트는 "주소"를 참조한다.
        선언할 때 "값"이 아닌 "그 주소"를 선언하는 것이고, 대입도 그 주소를 대입하는 것.
        대입을 할 때도, 같은 주소가 대입이 됩니다.
        즉 같은 주소를 바라보는 두개의 변수가 되는 것입니다.

        복사하려면, 아래의 두 명령어를 사용합니다.
            1. JSON.stringify : 문자화를 해서 카피한다.
            2. JSON.parse : 파싱해서 (컴퓨터가 이해할 수 있는 형태로 바꾼다.)해서 페이스트한다.
    */
    let objA = { a: 1, b: 2 }
    let objB = JSON.parse(JSON.stringify(objA))
    objA.a = 3
    // console.log(objB)








    // 어레이
    let array1 = [1, 1, 3, 5]
    array1.push(1) // 해당 값을 새로운 인덱스 추가
    array1.push(2)
    array1.push(3)
    array1.pop() // 끝에 하나 삭제
    array1.pop()
    array1.pop()
    // console.log(array1[3]) // 5
    // console.log(array1[5]) // 2
    // console.log(array1)

    // 파이썬에서의 range()
    let array2 = [...Array(5).keys()] // => [0, 1, 2, 3, 4]
    // console.log(array2)

    // 어레이와 오브젝트 차이
    // 1. 어레이는 인덱스, 오브젝트는 키로 꺼낸다. => 어레이는 "순서대로 처리를 해야하는" 경우, 오브젝트는 값을 "검색해야 하는" 경우
    // 2. 둘다 쓰는 경우는 어떤 경우가 있을까...? : [{}, {}, {}, ...]
    // 고객정보를 예를 들면,
    // 어레이는 [{고객1}, {고객2}, {고객3}, ...]
    // 오브젝트는 { id: dev1, pw: 1234, ... }
    // 이러한 형태를 JSON 형태라고 합니다.

    const o1 = { id: 'user1', pw: '1234' }
    const o2 = { id: 'user2', pw: '234' }
    const o3 = { id: 'user3', pw: '234234' }
    const userInfo = []
    userInfo.push(o1)
    userInfo.push(o2)
    userInfo.push(o3)

    console.log(userInfo)





    // 클래스 = 오브젝트(객체)
    console.log(console)






    // 세트 : 중복을 삭제하는 콜렉션
    const array3 = [1, 2, 3, 3, 4, 4 ,5]
    // 어레이 -> 세트로 변경 : 중복값 삭제를 위해
    const mySet = new Set(array3)
    // 세트 -> 어레이로 변경 : 다시 사용하기 위해
    const array4 = Array.from(mySet)
    // console.log(mySet)
    console.log(array4)





    // 캐스팅
    const number1 = 15
    String(number1)
    Number(number1)
    Boolean(number1)
}

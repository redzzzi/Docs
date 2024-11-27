# Ajax
```
Base on Web Application Programming material
```
## 목차
### 16.4.2 Exception Handling
- **exception** : 프로그램 실행 중에 *문제가 있음*을 나타내는 것
- `try` block : exception을 발생시키는 코드와 발생했을 때 실행되면 안되는 코드를 **감쌈**
- `catch` block : exception 파라미터 뒤에 나옴
    - Exception parameter's name : catch block이 잡은 exception 오브젝트와 상호작용하도록 함
- exception이 발생했을 때
    - try block은 즉시 종료됨
    - catch block은 exception을 잡아내고 핸들링 함

### 16.4.3 Callback Functions
- callback 함수는 XMLHttpRequest 객체의 readystatechange 이벤트에 대한 핸들러(처리기)로 등록되며, **특정 상태가 변화하면 실행됨**
- request에 진전이 있을 때, `XMLHttpRequest`는 `readystatechange` 이벤트 핸들러를 호출함
    - progress는 위 readystatechange로 판단함 (0 ~ 4)

### 16.4.4 XMLHttpRequest Object Event, Properties and Methods
- XMLHttpRequest object event and properties

| Event or Property | Description |
| :---: | :--- |
| `readystatechange` | |
| `readyState` | |
| `responseText` | |
| `responseXML` | `<?XML`이 있으면 XML 파일로 인식함, 아니면 아무 값도 없음 |
| `status` | |
| `statusText` | |

- XMLHttpRequest object methods

| Method | Description |
| :---: | :--- |
| `open` | asynchronous[^비동기] |
| `send` | |
| `setRequestHeader` | |
| `getResponseHeader` | |
| `getAllResponseHeaders` | |
| `abort` | |

## 16.5 Using XML and the DOM

[^비동기]: **Ajax는 비동기처리를 위해 쓰이기 때문에 open의 세 번째 파라미터는 true가 디폴트

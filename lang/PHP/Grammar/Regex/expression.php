<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regular expressions</title>
  <style type="text/css">
    p {
      margin: 0;
    }
  </style>
</head>
<body>
  <?php 
    $search = "Now is the time";
    print("<p>Test string is: '$search'</p>");

    // preg_match(pattern regular expression match)을 호출
    // 'Now'라는 패턴이 변수에 있는지 탐색
    if (preg_match("/Now/", $search)) {
      print("<p>'Now' was found.</p>");
    }

    // 문자열 시작부에 'Now' 패턴이 있는지 탐색 (^)
    if (preg_match("/^Now/", $search)) {
      print("<p>'Now' found at the beginning of the line.</p>");
    }

    // 문자열 끝에 'Now' 패턴이 있는지 탐색 ($)
    if (!preg_match("/Now$/", $search)) {
      print("<p>'Now' was not found at the end of the line.</p>");
    }

    // 'ow'로 끝나는 단어를 탐색
    // \b - 단어의 경계를 나타냄
    // i - 대소문자 구분을 하지 않음
    if (preg_match("/\b([a-zA-Z]*ow)\b/i", $search, $match)) {
      print("<p>Word found ending in 'ow': " . $match[1] . "</p>");
    }

    // $match[0] - 정규표현식 전체와 매칭된 결과
    // $match[1] - 첫 번째 캡쳐 그룹의 결과
    // $match[2] - 두 번째 캡쳐 그룹의 결과 (있다면)

    // 't'로 시작하는 단어 탐색
    // [[:alpha:]]+ - 하나 이상의 알파벳 문자
    print("<p>Words beginning with 't' found: ");
    while (preg_match("/\b(t[[:alpha:]]+)\b/", $search, $match)) {
      print($match[1] . " ");

      // t로 시작하는 시작부 제거
      $search = preg_replace("/" . $match[1] . "/", "", $search); // 마지막 파라미터는 검색 대상 문자열 지정 파라미터
    }
    print("</p>");
  ?>
</body>
</html>
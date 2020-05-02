
<SCRIPT LANGUAGE="javascript">

    // проверяем на поддержку современного XMLHttpRequest
    var XHR = ("onload" in new XMLHttpRequest()) ? XMLHttpRequest : XDomainRequest;
    // создаём новый объект XMLHttpRequest
    var xhr = new XHR();
    // присваиваем переменным параметры запроса (для наглядности)
    var type = 'paragraph'; // тип получаемого контента (абзацы)
    var number = 50; // количество абзацев
    // собираем параметры запроса,
    // не указываем format, потому что он по умолчанию – "json"
    var params = '&type=' + type + '&number=' + number;
    // отправляем запрос
    xhr.open('GET', 'https://fish-text.ru/get?' + params, true);
    // обрабатываем успешный запрос
    xhr.onload = function () {
// парсим ответ сервера
        var result = JSON.parse(this.responseText);
// проверяем статус ответа
        if (result.status === 'success') {
// выводим рыбатекст
            console.log(result.text);
            result.text().replace('а','Stop!');
            var newString = result.text;
            document.write(newString.text);
            var newString2 = newString.replace(/(а+)(zzzzzz+)/, replacer);

            document.write(newString2);
        } else {
// выводим код и текст ошибки
            console.log(result.errorCode + '\n' + result.text);

        }
    };
    // обрабатываем неудачный запрос
    xhr.onerror = function () {
        alert('Ошибка ' + this.status);
    };
    // отправляем запрос
    xhr.send();
</SCRIPT>
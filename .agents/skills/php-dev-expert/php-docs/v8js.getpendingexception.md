# Retorna exceção Javascript pendente não capturada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/v8js.getpendingexception.php

---

# V8Js::getPendingException

(PECL v8js >= 0.1.0)

V8Js::getPendingException — Retorna exceção Javascript pendente não capturada

### Descrição

public function **V8Js::getPendingException**(): [V8JsException](class.v8jsexception.md)

Retorna qualquer exceção Javascript pendente não capturada como [V8JsException](class.v8jsexception.md)
resultante de chamadas anteriores de [V8Js::executeString()](v8js.executestring.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

[V8JsException](class.v8jsexception.md) ou **`null`**.

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});

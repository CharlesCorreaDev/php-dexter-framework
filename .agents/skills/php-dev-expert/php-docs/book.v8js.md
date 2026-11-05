# Integração do V8 Javascript Engine

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.v8js.php

---

# Integração do V8 Javascript Engine

# Introdução

Esta extensão incorpora o [» V8 Javascript Engine](https://code.google.com/p/v8/) no PHP.

- [Instalação/Configuração](v8js.setup.md)
  - [Dependências](v8js.requirements.md)
  - [Instalação](v8js.installation.md)
  - [Configurações de Execução](v8js.configuration.md)
- [Examples](v8js.examples.md)
- [V8Js](class.v8js.md) — A classe V8Js
  - [V8Js::\_\_construct](v8js.construct.md) — Constrói um novo objeto V8Js
  - [V8Js::executeString](v8js.executestring.md) — Executa uma string como código Javascript
  - [V8Js::getExtensions](v8js.getextensions.md) — Retorna um array de extensões registradas
  - [V8Js::getPendingException](v8js.getpendingexception.md) — Retorna exceção Javascript pendente não capturada
  - [V8Js::registerExtension](v8js.registerextension.md) — Registra extensões Javascript para V8Js
- [V8JsException](class.v8jsexception.md) — A classe V8JsException
  - [V8JsException::getJsFileName](v8jsexception.getjsfilename.md) — getJsFileName
  - [V8JsException::getJsLineNumber](v8jsexception.getjslinenumber.md) — getJsLineNumber
  - [V8JsException::getJsSourceLine](v8jsexception.getjssourceline.md) — getJsSourceLine
  - [V8JsException::getJsTrace](v8jsexception.getjstrace.md) — getJsTrace

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

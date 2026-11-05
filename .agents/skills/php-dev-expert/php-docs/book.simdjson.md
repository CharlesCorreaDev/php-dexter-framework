# Simdjson

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.simdjson.php

---

# Simdjson

# Introdução

Fornece decodificação JSON mais rápida por meio de ligações simdjson para PHP (instrução única, dados múltiplos).

- [Instalação/Configuração](simdjson.setup.md)
  - [Instalação](simdjson.installation.md)
- [Constantes predefinidas](simdjson.constants.md)
- [Funções de Simdjson](ref.simdjson.md)
  - [simdjson\_decode](function.simdjson-decode.md) — Decodifica uma string JSON
  - [simdjson\_is\_valid](function.simdjson-is-valid.md) — Verifica se uma string JSON é válida
  - [simdjson\_key\_count](function.simdjson-key-count.md) — Retorna o valor em um ponteiro JSON
  - [simdjson\_key\_exists](function.simdjson-key-exists.md) — Verifica se o JSON contém o valor referenciado por um ponteiro JSON
  - [simdjson\_key\_value](function.simdjson-key-value.md) — Decodifica o valor de uma string JSON localizada no ponteiro JSON solicitado
- [SimdJsonException](class.simdjsonexception.md) — A classe SimdJsonException
- [SimdJsonValueError](class.simdjsonvalueerror.md) — A classe SimdJsonValueError

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

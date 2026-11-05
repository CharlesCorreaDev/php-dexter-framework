# A classe CurlSharePersistentHandle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.curlsharepersistenthandle.php

---

# A classe CurlSharePersistentHandle

(PHP 8 >= 8.5.0)

## Introdução

Representa um identificador cURL "compartilhado" persistente.

## Resumo da classe

final
class ****CurlSharePersistentHandle****
{

/\* Propriedades \*/

public
readonly
[array](language.types.array.md)
[$options](class.curlsharepersistenthandle.md#curlsharepersistenthandle.props.options);

}

## Propriedades

options
:   Os caches **`CURL_LOCK_DATA_*`** compartilhados entre requisições que usam este identificador.

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

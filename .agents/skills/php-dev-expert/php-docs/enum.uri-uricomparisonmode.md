# A enumeração Uri\UriComparisonMode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/enum.uri-uricomparisonmode.php

---

# A enumeração Uri\UriComparisonMode

(PHP 8 >= 8.5.0)

## Introdução

Especifica se o componente `fragment` deve afetar
o resultado de uma comparação entre URIs.

Se o fragmento for excluído da comparação, dois URIs serão
comparados como se nenhum deles tivesse um componente
`fragment`.

## Resumo da enumeração

namespace **Uri**;

enum ****UriComparisonMode****  
{

case IncludeFragment
; //O componente `fragment` é incluído na comparação.

case ExcludeFragment
; //O componente `fragment` é excluído da comparação.

}

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

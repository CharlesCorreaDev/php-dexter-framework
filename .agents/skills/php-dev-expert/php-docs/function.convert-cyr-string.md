# Converte de um conjunto de caracteres cirílico para outro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.convert-cyr-string.php

---

# convert\_cyr\_string

(PHP 4, PHP 5, PHP 7)

convert\_cyr\_string — Converte de um conjunto de caracteres cirílico para outro

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **convert\_cyr\_string**([string](language.types.string.md) `$str`, [string](language.types.string.md) `$from`, [string](language.types.string.md) `$to`): [string](language.types.string.md)

Converte de um conjunto de caracteres cirílico para outro.

### Parâmetros

`str`
:   A string a ser convertida.

`from`
:   A fonte do conjunto de caracteres cirílico, como um único caractere.

`to`
:   O conjunto de caracteres cirílico alvo, como um único caractere.

Os caracteres suportados são:

- k - koi8-r
- w - windows-1251
- i - iso8859-5
- a - x-cp866
- d - x-cp866
- m - x-mac-cyrillic

### Valor Retornado

Retorna a string convertida.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi removida. |
| 7.4.0 | Esta função foi descontinuada. |

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [mb\_convert\_encoding()](function.mb-convert-encoding.md) - Converte uma string de uma codificação de caracteres para outra
- [iconv()](function.iconv.md) - Converte uma string de uma codificação de caracteres para outra

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

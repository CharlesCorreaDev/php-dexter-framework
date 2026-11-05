# Funções e instruções que espalharão a marca contaminada de uma
   string contaminada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/taint.detail.basic.php

---

## Funções e instruções que espalharão a marca contaminada de uma string contaminada

| Função/declaração | Desde |
| --- | --- |
| = (atribuição) | 0.1.0 |
| . (concatenação) | 0.1.0 |
| "{$var}" (substituiçao de variáveis) | 0.1.0 |
| .= (atribuição de concatenação) | 0.1.0 |
| strval | 0.3.0 |
| explode/split | 0.3.0 |
| implode/join | 0.3.0 |
| sprintf | 0.3.0 |
| vsprintf | 0.3.0 |
| trim | 0.4.0 |
| rtrim | 0.4.0 |
| ltrim | 0.4.0 |
| strstr | 0.5.0 |
| str\_pad | 0.5.0 |
| str\_replace | 0.5.0 |
| substr | 0.5.0 |
| strtolower | 0.5.0 |
| strtoupper | 0.5.0 |

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

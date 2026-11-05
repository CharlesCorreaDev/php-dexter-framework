# Sobre os exemplos do manual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/examples.php

---

# Sobre os exemplos do manual

Vale ressaltar que muitos exemplos na documentação do PHP omitem o tratamento de erros
e exceções para maior clareza e brevidade.

Isso não significa que o tratamento de erros deve ser omitido no código de produção,
pois pode levar ao lançamento de [TypeError](class.typeerror.md)s,
à conversão de valores de falha, como **`false`** em uma string vazia,
ou à violação de suposições, o que pode causar problemas difíceis de rastrear.
Algumas extensões fornecem exemplos completos onde o tratamento de erros é incluído
para demonstrar o uso correto das diversas funções e métodos fornecidos
pela extensão.

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

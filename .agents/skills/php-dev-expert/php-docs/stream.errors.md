# Erros de Fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stream.errors.php

---

# Erros de Fluxo

Assim como qualquer função relacionada a arquivo ou socket, uma operação em um fluxo
pode falhar por uma variedade de razões comuns (ex.: incapacidade de se conectar a um
servidor remoto, arquivo não encontrado, etc.). Uma chamada relacionada a fluxo também pode falhar
devido ao fluxo não estar registrado no sistema. Consulte o array retornado
por [stream\_get\_wrappers()](function.stream-get-wrappers.md) para uma lista de fluxos suportados pela
instalação do PHP. Como a maioria das funções internas do PHP,
se uma falha ocorrer um mensagem de aviso **`E_WARNING`** será gerada
descrevendo a natureza do erro.

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

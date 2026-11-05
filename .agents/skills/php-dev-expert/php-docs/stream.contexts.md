# Contextos de Fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stream.contexts.php

---

# Contextos de Fluxo

Um `contexto` é um conjunto de `parâmetros` e
`opções` específicas do empacotador que modifica ou melhora
o comportamento de um fluxo. `Contextos` são criados pela função
[stream\_context\_create()](function.stream-context-create.md) e podem ser passados à maioria
das funções de criação de fluxos relacionados a sistemas de arquivos (ex.: [fopen()](function.fopen.md),
[file()](function.file.md), [file\_get\_contents()](function.file-get-contents.md), etc.).

`Opções` podem ser especificadas ao chamar
[stream\_context\_create()](function.stream-context-create.md), ou posteriormente usando
[stream\_context\_set\_option()](function.stream-context-set-option.md).
Uma lista de `opções` específicas para empacotadores pode ser encontrada no
capítulo [Opções e parâmetros de contexto](context.md).

`Parâmetros` podem ser especificados para
`contextos` usando-se a função
[stream\_context\_set\_params()](function.stream-context-set-params.md).

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

# Cria um recurso de email MIME

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mailparse-msg-create.php

---

# mailparse\_msg\_create

(PECL mailparse >= 0.9.0)

mailparse\_msg\_create — Cria um recurso de email MIME

### Descrição

function **mailparse\_msg\_create**(): [resource](language.types.resource.md)

Cria um recurso de email `MIME`.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um identificador que pode ser usado para analisar uma mensagem.

### Notas

> **Nota**:
>
> É recomendado chamar [mailparse\_msg\_free()](function.mailparse-msg-free.md) no resultado
> desta função, quando não for mais necessário, para evitar vazamentos de memória.

### Veja também

- [mailparse\_msg\_free()](function.mailparse-msg-free.md) - Libera um recurso MIME
- [mailparse\_msg\_parse\_file()](function.mailparse-msg-parse-file.md) - Faz o parsing de um arquivo

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

# Cria uma cópia de uma estrutura fann

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-copy.php

---

# fann\_copy

(PECL fann >= 1.0.0)

fann\_copy — Cria uma cópia de uma estrutura fann

### Descrição

function **fann\_copy**([resource](language.types.resource.md) `$ann`): [resource](language.types.resource.md)

Cria uma cópia de uma estrutura fann.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

Retorna uma cópia do recurso de rede neural em caso de sucesso ou **`false`** em caso de erro.

### Notas

> **Nota**:
>
> Esta função só estará disponível se a extensão fann tiver sido compilada usando a biblioteca libfann >= 2.2.

### Veja também

- [fann\_test()](function.fann-test.md) - Testa com um conjunto de entradas, e um conjunto de saídas desejadas

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

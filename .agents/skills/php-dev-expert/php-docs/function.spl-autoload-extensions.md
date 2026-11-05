# Registra e retorna as extensões de arquivo padrão para spl_autoload

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.spl-autoload-extensions.php

---

# spl\_autoload\_extensions

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

spl\_autoload\_extensions — Registra e retorna as extensões de arquivo padrão para spl\_autoload

### Descrição

function **spl\_autoload\_extensions**([?](language.types.null.md)[string](language.types.string.md) `$file_extensions` = **`null`**): [string](language.types.string.md)

Esta função pode modificar e verificar as extensões de arquivo que a função de fallback built-in
[\_\_autoload()](function.autoload.md) [spl\_autoload()](function.spl-autoload.md)
estará utilizando.

> **Nota**:
>
> Não deve haver um espaço entre as extensões de arquivo definidas.

### Parâmetros

`file_extensions`
:   Se **`null`**, simplesmente retorna a lista atual
    de extensões cada uma separada por vírgula. Para modificar a lista de
    extensões de arquivo, simplesmente invoque a função com a nova lista de
    extensões de arquivo a serem usadas em uma única string com cada extensão separada
    por vírgula.

### Valor Retornado

Uma lista delimitada por vírgulas de extensões de arquivo padrão para
[spl\_autoload()](function.spl-autoload.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `file_extensions` é anulável agora. |

### Examples

**Exemplo #1 Exemplo de **spl\_autoload\_extensions()****

```
<?php
spl_autoload_extensions(".php,.inc");
?>
```

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

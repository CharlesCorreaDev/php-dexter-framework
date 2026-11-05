# Verifica se um fluxo é um TTY

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-isatty.php

---

# stream\_isatty

(PHP 7 >= 7.2.0, PHP 8)

stream\_isatty — Verifica se um fluxo é um TTY

### Descrição

function **stream\_isatty**([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

Determina se o fluxo `stream` se refere a um dispositivo tipo terminal válido.
Esta é uma versão mais portável de [posix\_isatty()](function.posix-isatty.md), já que também funciona no Windows.

### Parâmetros

`stream`
:   O fluxo a ser verificado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **stream\_isatty()****

Este comando pode ser usado para determinar se um fluxo de saída/erro padrão é redirecionado a um arquivo.

```
php -r "var_export(stream_isatty(STDERR));"
```

O exemplo acima produzirá
algo semelhante a:

true

```
php -r "var_export(stream_isatty(STDERR));" 2>output.txt
```

O exemplo acima produzirá
algo semelhante a:

false

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

# Descobre se uma extensão está carregada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.extension-loaded.php

---

# extension\_loaded

(PHP 4, PHP 5, PHP 7, PHP 8)

extension\_loaded — Descobre se uma extensão está carregada

### Descrição

function **extension\_loaded**([string](language.types.string.md) `$extension`): [bool](language.types.boolean.md)

Descobre se uma extensão está carregada.

### Parâmetros

`extension`
:   O nome da extensão. O parâmetro não faz distinção de maiúsculas/minúsculas.

    Pode-se ver os nomes de várias extensões usando
    [phpinfo()](function.phpinfo.md); ou se estiver sendo usada a versão
    `CGI` ou `CLI` do
    PHP, pode-se usar a opção **-m**
    para listar todas as extensões disponíveis:

    ```
    $ php -m
    [PHP Modules]
    xml
    tokenizer
    standard
    sockets
    session
    posix
    pcre
    overload
    mysql
    mbstring
    ctype

    [Zend Modules]
    ```

### Valor Retornado

Retorna **`true`** se a extensão identificada por `extension`
estiver carregada, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **extension\_loaded()****

```
<?php
if (!extension_loaded('gd')) {
    if (!dl('gd.so')) {
        exit;
    }
}
?>
```

### Veja também

- [get\_loaded\_extensions()](function.get-loaded-extensions.md) - Retorna um array com os nomes de todos os módulos compilados e carregados
- [get\_extension\_funcs()](function.get-extension-funcs.md) - Retorna um array com os nomes das funções de um módulo
- [phpinfo()](function.phpinfo.md) - Mostra informações sobre a configuração do PHP
- [dl()](function.dl.md) - Carrega uma extensão do PHP durante a execução
- [function\_exists()](function.function-exists.md) - Retorna true se a função informada estiver definida

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

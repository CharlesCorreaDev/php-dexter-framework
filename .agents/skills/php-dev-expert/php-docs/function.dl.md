# Carrega uma extensão do PHP durante a execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dl.php

---

# dl

(PHP 4, PHP 5, PHP 7, PHP 8)

dl — Carrega uma extensão do PHP durante a execução

### Descrição

function **dl**([string](language.types.string.md) `$extension_filename`): [bool](language.types.boolean.md)

Carrega a extensão do PHP indicada pelo parâmetro
`extension_filename`.

Use [extension\_loaded()](function.extension-loaded.md) para testar se uma extensão está
disponível ou não. Isto funciona para extensões internas e para aquelas carregadas
dinamicamente (através do php.ini
ou da função **dl()**).

**Aviso**

Esta função somente está disponível no modos CLI e SAPI internalizado,
e na SAPI CGI quando rodado em linha de comando.

### Parâmetros

`extension_filename`
:   Este parâmetro é *somente* o nome do arquivo da
    extensão a carregar o qual também depende da sua plataforma. Por exemplo,
    a extensão [sockets](ref.sockets.md) (se compilada
    como módulo compartilhado, não o padrão!) seria chamada
    sockets.so em plataformas Unix enquanto é chamada
    php\_sockets.dll na plataforma Windows.

    O diretório a partir do qual a extensão é carregada depende da
    sua plataforma:

    Windows - Se não for explicitamente definido no php.ini, a extensão é carregada
    a partir de C:\php5\ por padrão.

    Unix - Se não for explicitamente definido no php.ini, o diretório
    padrão das extensões depende de

    - se o PHP foi compilado com `--enable-debug`
      ou não
    - se o PHP foi compilado com suporte ZTS (Zend Thread Safety)
      ou não
    - O `ZEND_MODULE_API_NO` (o número Zend
      internal module API, o que é basicamente a data onde houve uma mudança maior na
      API ex. `20010901`)

    Levando em conta o acima, o diretório padrão poderá ser
    `<install-dir>/lib/php/extensions/ <debug-or-not>-<zts-or-not>-ZEND_MODULE_API_NO`,
    e.g.
    /usr/local/php/lib/php/extensions/debug-non-zts-20010901
    ou
    /usr/local/php/lib/php/extensions/no-debug-zts-20010901.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha. Se a funcionalidade de carregar módulos não estiver disponível
ou foi desabilitada (por configurar
[enable\_dl](info.configuration.md#ini.enable-dl) como off
no php.ini) então um erro **`E_ERROR`** é disparado
e a execução é interrompida. Se **dl()** falhar porque a
biblioteca especificada não puder ser carregada, além de retornar **`false`** uma
mensagem **`E_WARNING`** é emitida.

### Examples

**Exemplo #1 Exemplos de **dl()****

```
<?php
// Exemplo de carregamento de uma extensão com base no sistema operacional
if (!extension_loaded('sqlite')) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        dl('php_sqlite.dll');
    } else {
        dl('sqlite.so');
    }
}

// Ou, a constante PHP_SHLIB_SUFFIX está disponível desde o PHP 4.3.0
if (!extension_loaded('sqlite')) {
    $prefix = (PHP_SHLIB_SUFFIX === 'dll') ? 'php_' : '';
    dl($prefix . 'sqlite.' . PHP_SHLIB_SUFFIX);
}
?>
```

### Notas

> **Nota**:
>
> **dl()** diferencia maiúsculas e minúsculas em sistemas Unix.

### Veja também

- [Diretivas de carregamento de extensões](ini.core.md#ini.extension)
- [extension\_loaded()](function.extension-loaded.md) - Descobre se uma extensão está carregada

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

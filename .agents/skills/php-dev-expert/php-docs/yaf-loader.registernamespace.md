# Registra namespace com caminho de pesquisa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-loader.registernamespace.php

---

# Yaf\_Loader::registerNamespace

(Yaf >=3.2.0)

Yaf\_Loader::registerNamespace — Registra namespace com caminho de pesquisa

### Descrição

public function **Yaf\_Loader::registerNamespace**([string](language.types.string.md)|[array](language.types.array.md) `$namespaces`, [string](language.types.string.md) `$path` = ?): [bool](language.types.boolean.md)

Registra namespace com um caminho de pesquisa. [Yaf\_Loader](class.yaf-loader.md)
pesquisa classes sob este namespace no caminho, que também pode ser
configurado via [application.library.directory.namespace](yaf.appconfig.md#configuration.yaf.library.namespace) (no application.ini);

> **Nota**:
>
> Yaf considera um caractere de sublinhado como um separador de diretórios.

### Parâmetros

`namespace`
:   Uma string com o namespace, ou ou array de namespaces com caminhos.

`path`
:   Uma string com o caminho. É melhor usar caminho absoluto por questões de desempenho.

### Valor Retornado

Um booleano.

### Examples

**Exemplo #1 Exemplo de **Yaf\_Loader::registerNamespace()****

```
<?php
$loader = Yaf_Loader::getInstance();
$loader->registerNamespace("\Vendor\PHP", "/var/lib/php");
$loader->registerNamespace(array(
     "\Vendor\ASP" => "/var/lib/asp",
     "\Vendor\JSP" => "/usr/lib/vendor/",
));

$loader->autoload("\Vendor\PHP\Dummy");   // carrega '/var/lib/php/Dummy.php'
$loader->autoload("\Vendor\PHP\Foo_Bar"); // carrega '/var/lib/php/Foo/Bar.php'
$loader->autoload("\Vendor\JSP\Dummy");   // carrega '/usr/lib/vendor/Dummy.php'

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

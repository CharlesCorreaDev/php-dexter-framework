# Obtém informações do RPM instalado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rpmdbinfo.php

---

# rpmdbinfo

(PECL rpminfo >= 0.2.0)

rpmdbinfo — Obtém informações do RPM instalado

### Descrição

function **rpmdbinfo**([string](language.types.string.md) `$nevr`, [bool](language.types.boolean.md) `$full` = **`false`**): [?](language.types.null.md)[array](language.types.array.md)

Recupera informações sobre um pacote instalado do banco de dados RPM do sistema.

### Parâmetros

`nevr`
:   Nome com época, versão e lançamento opcionais.

`full`
:   Se **`true`** todos os cabeçalhos de informações do arquivo são recuperados, caso contrário, apenas um conjunto mínimo.

### Valor Retornado

Um [array](language.types.array.md) de [array](language.types.array.md) de informações, ou **`null`** em caso de erro.

### Examples

**Exemplo #1 Um exemplo de **rpmdbinfo()****

```
<?php
rpmaddtag(RPMTAG_INSTALLTIME);
$info = rpmdbinfo("php-pecl-rpminfo");
print_r($info);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => Array
        (
            [Name] => php-pecl-rpminfo
            [Version] => 0.4.2
            [Release] => 1.fc31
            [Summary] => RPM information
            [Installtime] => 1586244687
            [Arch] => x86_64
        )
)
```

### Veja também

- [rpmaddtag()](function.rpmaddtag.md) - Adiciona a tag recuperada na consulta

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

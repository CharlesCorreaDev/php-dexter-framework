# Obtém informações de um arquivo RPM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rpminfo.php

---

# rpminfo

(PECL rpminfo >= 0.1.0)

rpminfo — Obtém informações de um arquivo RPM

### Descrição

function **rpminfo**([string](language.types.string.md) `$path`, [bool](language.types.boolean.md) `$full` = **`false`**, [string](language.types.string.md) `&$error` = ?): [?](language.types.null.md)[array](language.types.array.md)

Recupera informações sobre um arquivo local, um pacote RPM.

### Parâmetros

`path`
:   Caminho do arquivo RPM.

`full`
:   Se **`true`** todos os cabeçalhos de informações do arquivo são recuperados,
    caso contrário, apenas um conjunto mínimo.

`error`
:   Se fornecido, receberá a possível mensagem de erro
    e evitará um aviso de tempo de execução.

### Valor Retornado

Um [array](language.types.array.md) de informações, ou **`null`** em caso de erro.

### Examples

**Exemplo #1 Um exemplo de **rpminfo()****

```
<?php
rpmaddtag(RPMTAG_BUILDTIME);
$info = rpminfo("./php-pecl-rpminfo-0.4.2-1.el8.remi.7.4.x86_64.rpm");
print_r($info);
?>
```

O exemplo acima produzirá:

```
Array
(
    [Name] => php-pecl-rpminfo
    [Version] => 0.4.2
    [Release] => 1.el8
    [Summary] => RPM information
    [Buildtime] => 1586244821
    [Arch] => x86_64
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

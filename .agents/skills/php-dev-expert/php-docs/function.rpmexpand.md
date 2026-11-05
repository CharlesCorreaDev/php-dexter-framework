# Recupera o valor expandido de uma macro RPM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rpmexpand.php

---

# rpmexpand

(PECL rpminfo >= 1.2.0)

rpmexpand — Recupera o valor expandido de uma macro RPM

### Descrição

function **rpmexpand**([string](language.types.string.md) `$text`): [string](language.types.string.md)

Recupera o valor expandido de uma macro RPM.

### Parâmetros

`text`
:   Texto com macros RPM para expandir.

### Valor Retornado

Uma [string](language.types.string.md) com expansões de macro concatenadas.

### Examples

**Exemplo #1 Um exemplo de **rpmexpand()****

```
<?php
$distro = rpmexpand("%{?fedora:Fedora %{fedora}}%{?rhel:Enterprise Linux %{rhel}}");
print_r($distro);
?>
```

O exemplo acima produzirá:

```
Fedora 41
```

### Veja também

- [rpmexpandnumeric()](function.rpmexpandnumeric.md) - Recupera o valor numérico de uma macro RPM

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

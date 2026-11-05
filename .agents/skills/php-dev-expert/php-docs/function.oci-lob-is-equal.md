# Compara dois localizadores LOB/FILE para igualdade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-lob-is-equal.php

---

# oci\_lob\_is\_equal

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_lob\_is\_equal — Compara dois localizadores LOB/FILE para igualdade

### Descrição

function **oci\_lob\_is\_equal**([OCILob](class.ocilob.md) `$lob1`, [OCILob](class.ocilob.md) `$lob2`): [bool](language.types.boolean.md)

Compara dois localizadores LOB/FILE.

### Parâmetros

`lob1`
:   Um identificador LOB.

`lob2`
:   Um identificador LOB.

### Valor Retornado

Retorna **`true`** se esses objetos forem iguais, **`false`** caso contrário.

### Notas

> **Nota**:
>
> A classe OCILob era chamada OCI-Lob antes do PHP 8 e PECL OCI8 3.0.0.

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

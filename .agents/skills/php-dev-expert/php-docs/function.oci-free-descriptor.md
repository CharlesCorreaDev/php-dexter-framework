# Libera um descritor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-free-descriptor.php

---

# oci\_free\_descriptor

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_free\_descriptor — Libera um descritor

### Descrição

function **oci\_free\_descriptor**([OCILob](class.ocilob.md) `$lob`): [bool](language.types.boolean.md)

Libera um descritor alocado por [oci\_new\_descriptor()](function.oci-new-descriptor.md).

### Parâmetros

`lob`
:   Descritor alocado por [oci\_new\_descriptor()](function.oci-new-descriptor.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Notas

> **Nota**:
>
> Esta função é comumente usada como um método [OCILOB::free](ocilob.free.md).

### Veja também

- [OCILOB::free](ocilob.free.md)

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

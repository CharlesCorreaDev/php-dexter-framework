# Copia objeto grande

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-lob-copy.php

---

# oci\_lob\_copy

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_lob\_copy — Copia objeto grande

### Descrição

function **oci\_lob\_copy**([OCILob](class.ocilob.md) `$to`, [OCILob](class.ocilob.md) `$from`, [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**): [bool](language.types.boolean.md)

Copia um objeto grande ou parte de um objeto grande para outro objeto grande.
Os dados antigos do LOB destinatário serão substituídos.

Se for necessário copiar uma parte específica de um LOB para uma posição específica
de um LOB, use [OCILob::seek()](ocilob.seek.md) para mover ponteiros internos do LOB.

### Parâmetros

`to`
:   O LOB de destino.

`from`
:   O LOB copiado.

`length`
:   Indica o comprimento dos dados a serem copiados.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0, PECL OCI8 3.0.0 | `length` agora é anulável. |

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

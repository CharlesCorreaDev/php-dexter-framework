# Aloca novo objeto de coleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-new-collection.php

---

# oci\_new\_collection

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_new\_collection — Aloca novo objeto de coleção

### Descrição

function **oci\_new\_collection**([resource](language.types.resource.md) `$connection`, [string](language.types.string.md) `$type_name`, [?](language.types.null.md)[string](language.types.string.md) `$schema` = **`null`**): [OCICollection](class.ocicollection.md)|[false](language.types.singleton.md)

Aloca um novo objeto de coleção.

### Parâmetros

`connection`
:   Um identificador de conexão Oracle, retornado por
    [oci\_connect()](function.oci-connect.md) ou [oci\_pconnect()](function.oci-pconnect.md).

`type_name`
:   Deve ser um tipo nomeado válido (em letras maiúsculas).

`schema`
:   Deve apontar para o esquema onde o tipo nomeado foi criado. O nome
    do usuário atual é usado quando **`null`** é passado.

### Valor Retornado

Retorna um novo objeto [OCICollection](class.ocicollection.md) ou **`false`** em caso de
erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0, PECL OCI8 3.0.0 | `schema` agora é anulável. |

### Notas

> **Nota**:
>
> A classe [OCICollection](class.ocicollection.md) era chamada de **OCI-Collection** antes do PHP 8 e do OCI8 3.0.0.

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

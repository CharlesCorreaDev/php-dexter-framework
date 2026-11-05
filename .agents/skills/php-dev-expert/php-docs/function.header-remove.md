# Remove cabeçalhos definidos anteriormente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.header-remove.php

---

# header\_remove

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

header\_remove — Remove cabeçalhos definidos anteriormente

### Descrição

function **header\_remove**([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**): [void](language.types.void.md)

Remove um cabeçalho HTTP previamente definido usando [header()](function.header.md).

### Parâmetros

`name`
:   O nome do cabeçalho a ser removido. Quando igual a **`null`**, todos os cabeçalhos anteriormente definidos são removidos.

    > **Nota**:
    >
    > Este parâmetro é insensível a maiúsculas/minúsculas.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `name` agora pode ser nulo. |

### Examples

**Exemplo #1 Removendo um cabeçalho específico**

```
<?php
header("X-Foo: Bar");
header("X-Bar: Baz");
header_remove("X-Foo");
?>
```

O exemplo acima produzirá
algo semelhante a:

```
X-Bar: Baz
```

**Exemplo #2 Removendo todos os cabeçalhos definidos anteriormente**

```
<?php
header("X-Foo: Bar");
header("X-Bar: Baz");
header_remove();
?>
```

O exemplo acima produzirá
algo semelhante a:

### Notas

**Cuidado**

Esta função irá remover *todos* os cabeçalhos definidos pelo PHP,
incluindo cabeçalhos de cookies, de sessão e `X-Powered-By`.

> **Nota**:
>
> Os cabeçalhos só serão acessíveis e enviados quando uma SAPI que os suporta
> estiver em uso.

### Veja também

- [header()](function.header.md) - Envia um cabeçalho HTTP bruto
- [headers\_sent()](function.headers-sent.md) - Verifica se ou onde os cabeçalhos foram enviados

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

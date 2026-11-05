# Abre um banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dbase-open.php

---

# dbase\_open

(PHP 5 < 5.3.0, dbase 5, dbase 7)

dbase\_open — Abre um banco de dados

### Descrição

function **dbase\_open**([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$mode`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

**dbase\_open()** abre um banco de dados dBase com
o modo de acesso informado.

> **Nota**:
>
> Esta função é afetada por [open\_basedir](ini.core.md#ini.open-basedir).

### Parâmetros

`path`
:   O caminho do banco de dados. Pode ser um caminho relativo ou absoluto para
    o arquivo onde o dBase irá armazenar os dados.

`mode`
:   Um inteiro que corresponda à chamada de sistema **open()**
    (tipicamente 0 significa somente-leitura, 1 apenas para escrita e 2
    significa leitura e escrita).

    > **Nota**:
    >
    > Não é possível abrir um banco de dados dBase em modo somente para escrita já que a função
    > irá falhar ao ler os cabeçalhos com informações e por isso não se pode usar 1 como o
    > parâmetro `mode`.

    A partir do dbase 7.0.0 pode-se usar **`DBASE_RDONLY`**
    e **`DBASE_RDWR`**, respectivamente, para especificar o parâmetro
    `mode`.

### Valor Retornado

Retorna um recurso de banco de dados em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL dbase 7.0.0 | O valor de retorno agora é do tipo [resource](language.types.resource.md) ao invés de [int](language.types.integer.md). |

### Examples

**Exemplo #1 Abrindo um banco de dados dBase**

```
<?php

// abre em modo somente leitura
$db = dbase_open('/tmp/test.dbf', 0);

if ($db) {
  // lê alguns dados ..

  dbase_close($db);
}

?>
```

### Veja também

- [dbase\_create()](function.dbase-create.md) - Cria um banco de dados
- [dbase\_close()](function.dbase-close.md) - Fecha um banco de dados

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

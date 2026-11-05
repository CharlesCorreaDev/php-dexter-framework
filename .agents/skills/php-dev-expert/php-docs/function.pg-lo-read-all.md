# Lê um objeto grande inteiro e envia direto para o navegador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-lo-read-all.php

---

# pg\_lo\_read\_all

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_lo\_read\_all — 
Lê um objeto grande inteiro e envia direto para o navegador

### Descrição

function **pg\_lo\_read\_all**([PgSql\Lob](class.pgsql-lob.md) `$lob`): [int](language.types.integer.md)

**pg\_lo\_read\_all()** lê um objeto grande e o passa
direto para o navegador após enviar todos os cabeçalhos
pendentes. Destinado principalmente ao envio de dados binários como imagens ou
som.

Para usar a interface de objeto grande, é necessário
incluí-la em um bloco de transação.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_loreadall()**.

### Parâmetros

`lob`
:   Uma instância de [PgSql\Lob](class.pgsql-lob.md), retornada por [pg\_lo\_open()](function.pg-lo-open.md).

### Valor Retornado

Número de bytes lidos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `lob` agora espera uma instância de [PgSql\Lob](class.pgsql-lob.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_lo\_read\_all()****

```
<?php
   header('Content-type: image/jpeg');
   $image_oid = 189762345;
   $database = pg_connect("dbname=jacarta");
   pg_query($database, "begin");
   $handle = pg_lo_open($database, $image_oid, "r");
   pg_lo_read_all($handle);
   pg_query($database, "commit");
?>
```

### Veja também

- [pg\_lo\_read()](function.pg-lo-read.md) - Lê um objeto grande

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

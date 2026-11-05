# Uso básico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dba.example.php

---

## Uso básico

**Exemplo #1 Exemplos de DBA**

```
<?php

$id = dba_open("/tmp/test.db", "n", "db2");

if (!$id) {
    echo "dba_open falhou\n";
    exit;
}

dba_replace("key", "Isto é um exemplo!", $id);

if (dba_exists("key", $id)) {
    echo dba_fetch("key", $id);
    dba_delete("key", $id);
}

dba_close($id);
?>
```

O DBA é binário seguro e não possui limites arbitrários.
No entanto, herda todos os limites definidos pela implementação do
banco de dados subjacente.

Todos os bancos de dados baseados em arquivo devem fornecer uma maneira de definir
o modo de arquivo de um novo banco de dados criado, se isso for possível. O
modo de arquivo é comumente passado como o quarto argumento para
[dba\_open()](function.dba-open.md) ou [dba\_popen()](function.dba-popen.md).

Pode-se acessar todas as entradas de um banco de dados de forma linear usando as
funções [dba\_firstkey()](function.dba-firstkey.md) e [dba\_nextkey()](function.dba-nextkey.md).
O banco de dados não pode ser alterado enquanto percorrido.

**Exemplo #2 Percorrendo um banco de dados**

```
<?php

// ...banco de dados aberto...

$key = dba_firstkey($id);

while ($key !== false) {
    if (true) {          // lembre-se da chave para realizar alguma ação mais tarde
        $handle_later[] = $key;
    }
    $key = dba_nextkey($id);
}

foreach ($handle_later as $val) {
    dba_delete($val, $id);
}

?>
```

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

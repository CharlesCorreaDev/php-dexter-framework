# Define a quantidade de dados pré-buscados para cada CLOB ou BLOB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-set-prefetch-lob.php

---

# oci\_set\_prefetch\_lob

(PHP 8.2, PECL OCI8 >= 3.2)

oci\_set\_prefetch\_lob — Define a quantidade de dados pré-buscados para cada CLOB ou BLOB

### Descrição

function **oci\_set\_prefetch\_lob**([resource](language.types.resource.md) `$statement`, [int](language.types.integer.md) `$prefetch_lob_size`): [bool](language.types.boolean.md)

Define o tamanho do buffer interno usado para buscar cada valor CLOB ou BLOB quando a
implementação obtém o localizador interno de LOB do Oracle do banco de dados após
uma chamada de consulta bem-sucedida para [oci\_execute()](function.oci-execute.md) e para cada
solicitação de busca interna subsequente ao banco de dados. Aumentar este valor
pode melhorar o desempenho da busca de LOBs menores, reduzindo as viagens de ida e volta
entre o PHP e o banco de dados. O uso de memória será alterado.

O valor afeta LOBs retornados como instâncias OCILob e também aqueles retornados
usando **`OCI_RETURN_LOBS`**.

Chame **oci\_set\_prefetch\_lob()** antes
de chamar [oci\_execute()](function.oci-execute.md). Se não for chamado, o valor
de [oci8.prefetch\_lob\_size](oci8.configuration.md#ini.oci8.prefetch-lob-size)
será usado.

O valor de pré-busca LOB só deve ser definido com o Oracle Database 12.2 ou posterior.

### Parâmetros

`statement`
:   Um identificador de declaração OCI8
    válida criada por [oci\_parse()](function.oci-parse.md) e executada
    por [oci\_execute()](function.oci-execute.md) ou um identificador de declaração `REF
    CURSOR`.

`prefetch_lob_size`
:   O número de bytes de cada LOB a ser pré-buscado, >= 0

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Alterando o valor de pré-busca LOB para uma consulta**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');

$stid = oci_parse($conn, 'SELECT myclob FROM mytable');
oci_set_prefetch_lob($stid, 100000);  // Defina antes de chamar oci_execute()
oci_execute($stid);

echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS+OCI_RETURN_LOBS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>".($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

oci_free_statement($stid);
oci_close($conn);

?>
```

### Veja também

- Opção INI
  [oci8.prefetch\_lob\_size](oci8.configuration.md#ini.oci8.prefetch-lob-size)

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

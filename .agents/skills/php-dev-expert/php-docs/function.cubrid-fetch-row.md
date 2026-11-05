# Retorna um array numérico com os valores da linha atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-fetch-row.php

---

# cubrid\_fetch\_row

(PECL CUBRID >= 8.3.0)

cubrid\_fetch\_row — Retorna um array numérico com os valores da linha atual

### Descrição

function **cubrid\_fetch\_row**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$type` = ?): [array](language.types.array.md)

Esta função retorna um array numérico com os valores da linha atual
do conjunto de resultados, começando em 0, e move o ponteiro de dados
interno para frente.

### Parâmetros

`result`
:   `result` vem de uma chamada a [cubrid\_execute()](function.cubrid-execute.md)

`type`
:   O tipo só pode ser CUBRID\_LOB, este parâmetro será usado
    somente quando for necessário operar no objeto LOB.

### Valor Retornado

Um array numérico em caso de sucesso.

**`false`**, quando não houver mais linhas; NULL em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_fetch\_row()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");
$req = cubrid_execute($conn, "SELECT name,area,seats,address FROM stadium WHERE nation_code='GRE' AND seats > 10000");

printf("%-40s %-10s %-9s %-20s\n", "Nome", "Área", "Assentos", "Endereço");
while ($row = cubrid_fetch_row($req)) {
    printf("%-40s %-10s %-9s %-20s\n", $row[0], $row[1], $row[2], $row[3]);
}

// se for desejado operar em objeto LOB, pode-se usar cubrid_fetch_row($req, CUBRID_LOB)

cubrid_close_request($req);

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
Nome                                     Área       Assentos  Endereço
Panathinaiko Stadium                     86300.00   50000     Athens, Greece
Olympic Stadium                          54700.00   13000     Athens, Greece
Olympic Indoor Hall                      34100.00   18800     Athens, Greece
Olympic Hall                             52400.00   21000     Athens, Greece
Olympic Aquatic Centre                   42500.00   11500     Athens, Greece
Markopoulo Olympic Equestrian Centre     64000.00   15000     Markopoulo, Athens, Greece
Faliro Coastal Zone Olympic Complex      34650.00   12171     Faliro, Athens, Greece
Athens Olympic Stadium                   120400.00  71030     Maroussi, Athens, Greece
Ano Liossia                              34000.00   12000     Ano Liosia, Athens, Greece
```

### Veja também

- [cubrid\_execute()](function.cubrid-execute.md) - Executa uma instrução preparada SQL
- [cubrid\_fetch()](function.cubrid-fetch.md) - Busca a próxima linha do conjunto de resultados
- [cubrid\_fetch\_array()](function.cubrid-fetch-array.md) - Busca uma linha de resultado como um array associativo, numérico ou ambos
- [cubrid\_fetch\_assoc()](function.cubrid-fetch-assoc.md) - Retorna o array associativo que corresponde à linha buscada
- [cubrid\_fetch\_object()](function.cubrid-fetch-object.md) - Busca a próxima linha e retorna-a como um objeto

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

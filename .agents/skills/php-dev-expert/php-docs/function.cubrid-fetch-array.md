# Busca uma linha de resultado como um array associativo, numérico ou ambos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-fetch-array.php

---

# cubrid\_fetch\_array

(PECL CUBRID >=8.3.0)

cubrid\_fetch\_array — Busca uma linha de resultado como um array associativo, numérico ou ambos

### Descrição

function **cubrid\_fetch\_array**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$type` = CUBRID\_BOTH): [array](language.types.array.md)

A função **cubrid\_fetch\_array()** é usada para obter uma
única linha do resultado da consulta e retorna um array. O cursor
move-se automaticamente para a próxima linha após a obtenção do resultado.

### Parâmetros

`result`
:   `Result` vem de uma chamada a [cubrid\_execute()](function.cubrid-execute.md)

`type`
:   Tipo de array do resultado obtido: CUBRID\_NUM, CUBRID\_ASSOC,
    CUBRID\_BOTH. Se for necessário operar o objeto LOB, pode-se usar CUBRID\_LOB.

### Valor Retornado

Retorna um array de strings que corresponde à linha buscada em caso de sucesso..

**`false`**, quando não houver mais linhas; NULL, em caso de falha.

O tipo de array retornado depende de como o tipo é definido. Ao usar CUBRID\_BOTH (padrão), será obtido um array com índices associativos e numéricos e será possível decidir qual tipo de dados será usado definindo o argumento `type`. A variável `type` pode ser definida com um dos seguintes valores:

- CUBRID\_NUM : Array numérico (baseado em 0)
- CUBRID\_ASSOC : Array associativo
- CUBRID\_BOTH : Array numérico e associativo (padrão)

### Examples

**Exemplo #1 Exemplo de **cubrid\_fetch\_array()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");
$req = cubrid_execute($conn, "SELECT name,area,seats,address FROM stadium WHERE nation_code='GRE' AND seats > 10000");

printf("%-40s %-10s %-9s %-20s\n", "Nome", "Área", "Assentos", "Endereço");
while ($row = cubrid_fetch_array($req, CUBRID_NUM)) {
    printf("%-40s %-10s %-9s %-20s\n", $row[0], $row[1], $row[2], $row[3]);
}

// se for desejado operar um objeto LOB, pode-se usar cubrid_fetch_array($req, CUBRID_NUM | CUBRID_LOB)

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
- [cubrid\_fetch\_row()](function.cubrid-fetch-row.md) - Retorna um array numérico com os valores da linha atual
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

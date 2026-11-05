# Busca a próxima linha do conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-fetch.php

---

# cubrid\_fetch

(PECL CUBRID >= 8.3.0)

cubrid\_fetch — Busca a próxima linha do conjunto de resultados

### Descrição

function **cubrid\_fetch**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$type` = CUBRID\_BOTH): [mixed](language.types.mixed.md)

A função **cubrid\_fetch()** é usada para obter uma única linha do resultado da consulta. O cursor é movido automaticamente para a linha seguinte após a obtenção do resultado.

### Parâmetros

`result`
:   `result` vem de uma chamada a [cubrid\_execute()](function.cubrid-execute.md)

`type`
:   Tipo de array do resultado buscado: CUBRID\_NUM, CUBRID\_ASSOC,
    CUBRID\_BOTH ou CUBRID\_OBJECT. Se for necessário operar em um objeto LOB, pode-se
    usar CUBRID\_LOB.

### Valor Retornado

Array de resultados ou objeto em caso de sucesso.

**`false`**, quando não houver mais linhas; NULL em caso de falha.

O resultado pode ser recebido como um array ou como um objeto e pode-se decidir que tipo de dados será usado configurando-se o parâmetro `type`. O parâmetro `type` pode ser definido para um dos seguintes valores:

- CUBRID\_NUM : array numérico (iniciando em 0)
- CUBRID\_ASSOC : array associativo
- CUBRID\_BOTH : array numérico e associativo (padrão)
- CUBRID\_OBJECT : objeto que tem o nome de atributo como o nome da coluna do resultado da consulta

Quando o argumento `type` for omitido, o resultado será recebido usando a opção CUBRID\_BOTH como padrão. Quando a intenção for receber o resultado como um objeto, o nome da coluna do resultado precisa seguir as regras de nomes de identificadores do PHP. Por exemplo, um nome de coluna "count(\*)" não pode ser recebido como um objeto.

### Examples

**Exemplo #1 Exemplo de **cubrid\_fetch()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");
$req = cubrid_execute($conn, "SELECT * FROM stadium WHERE nation_code='GRE' AND seats > 10000");

printf("%-40s %-10s %-9s %-20s\n", "nome", "área", "assentos", "endereço");
while ($row = cubrid_fetch($req)) {
    printf("%-40s %-10s %-9s %-20s\n",
        $row["name"], $row["area"], $row["seats"], $row["address"]);
}

// se for desejado operar em objeto LOB, pode-se usar cubrid_fetch($req, CUBRID_LOB)

cubrid_close_request($req);

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
nome                                     área       assentos  endereço
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
- [cubrid\_fetch\_array()](function.cubrid-fetch-array.md) - Busca uma linha de resultado como um array associativo, numérico ou ambos
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

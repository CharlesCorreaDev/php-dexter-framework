# Pesquisa de nível único

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-list.php

---

# ldap\_list

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_list — Pesquisa de nível único

### Descrição

function **ldap\_list**(  
    [LDAP\Connection](class.ldap-connection.md)|[array](language.types.array.md) `$ldap`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$base`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$filter`,  
    [array](language.types.array.md) `$attributes` = [],  
    [int](language.types.integer.md) `$attributes_only` = 0,  
    [int](language.types.integer.md) `$sizelimit` = -1,  
    [int](language.types.integer.md) `$timelimit` = -1,  
    [int](language.types.integer.md) `$deref` = **`LDAP_DEREF_NEVER`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$controls` = **`null`**  
): [LDAP\Result](class.ldap-result.md)|[array](language.types.array.md)|[false](language.types.singleton.md)

Realiza a pesquisa por um filtro especificado em `filter` no
diretório com o escopo **`LDAP_SCOPE_ONELEVEL`**.

**`LDAP_SCOPE_ONELEVEL`** significa que a pesquisa deve retornar
apenas informação que está no nível imediatamente abaixo da
`base` informada na chamada.
(Equivalente a digitar "**ls**" e obter uma lista de arquivos e diretórios no
diretório atual.)

Também é possível realizar buscas paralelas. Neste caso, o primeiro argumento deve ser um array de
instâncias de [LDAP\Connection](class.ldap-connection.md), em vez de apenas uma instância.
Se as pesquisas não devem usar a mesma DN base e filtro, um array de DNs base e/ou um array de filtros podem ser passados como argumentos.
Esses arrays devem ter o mesmo tamanho que o array de instâncias de [LDAP\Connection](class.ldap-connection.md),
já que as primeiras entradas dos arrays são usadas para uma pesquisa, as segundas entradas são usadas para outra e assim por diante.
Ao fazer pesquisas paralelas, um array de instâncias de [LDAP\Result](class.ldap-result.md) é retornado, exceto em caso de erro, quando o valor retornado será **`false`**.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`base`
:   O DN base para o diretório.

`filter`

`attributes`
:   Um array dos atributos requeridos, ex.: array("mail", "sn", "cn").
    Observe que o "dn" é sempre retornado independente de quais tipos de atributos
    são solicitados.

    Usar este parâmetro é muito mais eficiente que a ação padrão
    (que é retornar todos os atributos e seus respectivos valores associados).
    O uso deste parâmetro deve portanto ser considerado uma
    boa prática.

`attributes_only`
:   Deve ser definido para 1 se apenas tipos de atributos são desejados. Se definido para 0,
    tanto os tipos de atributos quanto seus valores são buscados, que é o
    comportamento padrão.

`sizelimit`
:   Habilita o limite de entradas buscadas. Definir para 0
    é o mesmo que sem limite.

    > **Nota**:
    >
    > Este parâmetro NÃO substitui o limite de tamanho predefinido no lado do servidor. Porém
    > pode ser definido para um valor menor.
    >
    > Alguns servidores de diretório serão configurados para retornar um número
    > limitado predefinido de entradas. Se isto ocorrer, o servidor indicará
    > que retornou um resultado parcial. Isto também ocorre se
    > este parâmetro for usado para limitar o número de entradas buscadas.

`timelimit`
:   Define o número de segundos gastos na busca. Definir para
    0 remove o limite.

    > **Nota**:
    >
    > Esta parâmetro NÃO substitui o limite de tempo predefinido no servidor. Porém
    > pode ser definido um valor menor.

`deref`
:   Especifica como apelidos devem ser gerenciados durante a busca. Pode ser uma
    das seguintes constantes:

    - **`LDAP_DEREF_NEVER`** - (padrão) apelidos nunca são
      desreferenciados.
    - **`LDAP_DEREF_SEARCHING`** - apelidos devem ser
      desreferenciados durante a busca mas não ao localizar o objeto base
      da busca.
    - **`LDAP_DEREF_FINDING`** - apelidos devem ser
      desreferenciados ao localizar o objeto base mas não durante a pesquisa.
    - **`LDAP_DEREF_ALWAYS`** - apelidos devem ser desreferenciados
      sempre.

`controls`
:   Array de [Controles LDAP](ldap.controls.md) que serão enviados com a requisição.

### Valor Retornado

Retorna uma instância de [LDAP\Result](class.ldap-result.md), um array de instâncias de [LDAP\Result](class.ldap-result.md), ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.1.0 | Agora retorna uma instância de [LDAP\Result](class.ldap-result.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.0.0 | O parâmetro `controls` agora pode ser nulo; anteriormente, o padrão era `[]`. |
| 7.3.0 | Adicionado suporte para `controls`. |

### Examples

**Exemplo #1 Produz uma lsita de todas as unidades de uma organização**

```
<?php
// $ds é uma instância válida de LDAP\Connection para um servidor de diretório

$basedn = "o=Minha Empresa, c=BR";
$justthese = array("ou");

$sr = ldap_list($ds, $basedn, "ou=*", $justthese);

$info = ldap_get_entries($ds, $sr);

for ($i=0; $i < $info["count"]; $i++) {
    echo $info[$i]["ou"][0];
}
?>
```

### Veja também

- [ldap\_search()](function.ldap-search.md) - Pesquisa árvore LDAP

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

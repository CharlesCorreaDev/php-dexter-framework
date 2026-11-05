# Pesquisa árvore LDAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-search.php

---

# ldap\_search

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_search — Pesquisa árvore LDAP

### Descrição

function **ldap\_search**(  
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

Realiza a pesquisa para um filtro especificado no diretório com o escopo de
of **`LDAP_SCOPE_SUBTREE`**. É equivalente a pesquisar
todo o diretório.

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
:   O filtro de pesquisa pode ser simples ou avançado, usando operadores booleanos no
    formato descrito na documentação LDAP (consulte o [» Netscape Directory SDK](https://wiki.mozilla.org/Mozilla_LDAP_SDK_Programmer%27s_Guide/Searching_the_Directory_With_LDAP_C_SDK) ou
    a [» RFC4515](https://datatracker.ietf.org/doc/html/rfc4515) para informação
    completa sobre filtros).

`attributes`
:   Um array dos atributos requeridos, ex.: `array("mail", "sn", "cn")`.
    Observe que "dn" é sempre retornado independente de que tipos de
    atributos são requisitados.

    Usar este parâmetro é muito mais eficiente que a ação padrão
    (que é retornar todos os atributos e seus valores associados).
    O uso deste parâmetro deve portanto ser considerado uma
    boa prática.

`attributes_only`
:   Deve ser definido para 1 se apenas tipos de atributos são pretendidos. Se definido para 0,
    tanto os tipos quanto os valores dos atributos são buscados, que é o
    comportamento padrão.

`sizelimit`
:   Habilita o limite de entradas buscadas. Definir para 0
    é o mesmo que não definir limite.

    > **Nota**:
    >
    > Este parâmetro NÃO consegue substituir o limite de tamanho definido no servidor. Ainda assim,
    > ele pode ser definido para um valor menor.
    >
    > Alguns servidores de diretório estarão configurados para retornar um número
    > limitado de entradas. Se isto ocorrer, o servidor indicará
    > que retornou um conjunto parcial de resultados. Isto também ocorre se
    > este parâmetro for usado para limitar a contagem de entradas buscadas.

`timelimit`
:   Define o número de segundos gastos na busca. Definir
    para 0 é o mesmo que não definir limite.

    > **Nota**:
    >
    > Este parâmetro NÃO consegue substituir o limite de tempo definido no servidor. Ainda assim,
    > valores menores podem ser definidos.

`deref`
:   Especifica como os apelidos são gerenciados durante a busca. Pode ser uma das
    constantes a seguir:

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

O exemplo abaixo recupera a unidade organizacional, sobrenome,
nome e endereço de e-mail para todas as pessoas em "Minha Empresa" onde
o sobrenome ou o nome contêm a string $person. Este
exemplo usa um filtro booleano para solicitar ao sevidor que procure
por informação em mais de uma atributo.

**Exemplo #1 Pesquisa LDAP**

```
<?php
// $ds é uma isntância válida de LDAP\Connection para um servidor de diretório

// $person é o nome (ou parte do nome) de uma pessoa, ex: "Jo"

$dn = "o=Minha Empresa, c=BR";
$filter="(|(sn=$person*)(givenname=$person*))";
$justthese = array("ou", "sn", "givenname", "mail");

$sr=ldap_search($ds, $dn, $filter, $justthese);

$info = ldap_get_entries($ds, $sr);

echo $info["count"]." entradas retornadas\n";
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

# Controles LDAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ldap.controls.php

---

# Controles LDAP

Controles são objetos especiais que podem ser enviados junto com uma
requisição LDAP para alterar o comportamento do servidor LDAP durante a realização
da requisição. Pode também haver controles enviados pelo servidor
junto com a resposta para fornecer mais informação, normalmente
para responder a um objeto de controle da requisição.
> **Nota**:
>
> Nem todos os controles são suportados por todos os servidores LDAP. Para saber quais controles
> são suportados por um servidor, é necessário consultar o DSE raiz lendo-se um
> DN vazio com o filtro (objectClass=\*).
>
> **Exemplo #1 Testando suporte ao controle de resultados paginados**
>
> ```
> <?php
>
> // $ds é um identificador válido de ligação a um servidor de diretório
>
> $result = ldap_read($ds, '', '(objectClass=*)', ['supportedControl']);
> if (!in_array(LDAP_CONTROL_PAGEDRESULTS, ldap_get_entries($ds, $result)[0]['supportedcontrol'])) {
>   die("Este servidor não suporte controle de resultados paginados.");
> }
>
> ?>
> ```

A partir do PHP 7.3, pode-se enviar controle com a requisição em todas
as funções de requisição usando o parâmetro `controls`. Quando uma versão
"ext" de uma função existir, deve-se usá-la se for desejado
acessar o objeto de resposta completa e ser capaz de analisar
controles de resposta a partir dele usando [ldap\_parse\_result()](function.ldap-parse-result.md).

`controls` deve ser um array contendo um array para cada controle a enviar,
contendo as seguintes chaves:

oid ([string](language.types.string.md))
:   O OID do controle. Deve-se usar constantes
    LDAP\_CONTROL\_\* para isto. Consulte as [constantes LDAP](ldap.constants.md).

iscritical ([bool](language.types.boolean.md))
:   Se um controle for observado como crítico, a requisição falhará se o
    constrole não for suportado pelo servidor, ou se houver falha em sua
    aplicação. Observe que alguns controles devem ser sempre marcados como críticos
    como citado na RFC que os introduz. O padrão é **`false`**.

value ([mixed](language.types.mixed.md))
:   Se aplicável, o valor do controle. Leia a seguir para mais informação.

A maior parte dos valores de controle são enviados ao servidor com codificação BER.
O usuário pode aplicar a codificação BER por conta própria, ou pode-se
passar um array com as chaves corretas de forma que a codificação é
feita automaticamente.
Controles que suportam ser passados como um array são:

- **`LDAP_CONTROL_PAGEDRESULTS`**
  Chaves esperadas são [size] e [cookie]
- **`LDAP_CONTROL_ASSERT`**
  Chave esperada é filter
- **`LDAP_CONTROL_VALUESRETURNFILTER`**
  Chave esperada é filter
- **`LDAP_CONTROL_PRE_READ`**
  Chave esperada é attrs
- **`LDAP_CONTROL_POST_READ`**
  Chave esperada é attrs
- **`LDAP_CONTROL_SORTREQUEST`**
  Espera um array de arrays com chaves attr, [oid], [reverse].
- **`LDAP_CONTROL_VLVREQUEST`**
  Chaves esperadas são before, after, attrvalue|(offset, count), [context]

Os controles a seguir não precisam de nenhum valor:

- **`LDAP_CONTROL_PASSWORDPOLICYREQUEST`**
- **`LDAP_CONTROL_MANAGEDSAIT`**
- **`LDAP_CONTROL_DONTUSECOPY`**

O controle **`LDAP_CONTROL_PROXY_AUTHZ`** é um caso especial
já que não é esperado que seu valor seja codificado com BER, por usso pode-se usar
diretamente uma string para seu valor.

Quando controles são analisados por [ldap\_parse\_result()](function.ldap-parse-result.md), valores são
convertidos em array se suportado.
Isto é suportado para:

- **`LDAP_CONTROL_PASSWORDPOLICYRESPONSE`**
  Chaves são expire, grace, [error]
- **`LDAP_CONTROL_PAGEDRESULTS`**
  Chaves são size, cookie
- **`LDAP_CONTROL_PRE_READ`**
  Chaves são dn e nomes de atributo LDAP
- **`LDAP_CONTROL_POST_READ`**
  Chaves são dn e nomes de atributo LDAP
- **`LDAP_CONTROL_SORTRESPONSE`**
  Chaves são errcode, [attribute]
- **`LDAP_CONTROL_VLVRESPONSE`**
  Chaves são target, count, errcode, context

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

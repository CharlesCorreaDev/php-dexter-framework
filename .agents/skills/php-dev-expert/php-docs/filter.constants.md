# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filter.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**Constantes de Entrada**

Estas constantes são usadas por
[filter\_input()](function.filter-input.md) e
[filter\_input\_array()](function.filter-input-array.md).

**`INPUT_POST`** ([int](language.types.integer.md))
:   Variáveis [POST](reserved.variables.post.md).

**`INPUT_GET`** ([int](language.types.integer.md))
:   Variáveis [GET](reserved.variables.get.md).

**`INPUT_COOKIE`** ([int](language.types.integer.md))
:   Variáveis [COOKIE](reserved.variables.cookies.md).

**`INPUT_ENV`** ([int](language.types.integer.md))
:   Variáveis [ENV](reserved.variables.environment.md).

**`INPUT_SERVER`** ([int](language.types.integer.md))
:   Variáveis [SERVER](reserved.variables.server.md).

**`INPUT_SESSION`** ([int](language.types.integer.md))
:   Variáveis [SESSION](reserved.variables.session.md).
    (Removida a partir do PHP 8.0.0; não estava implementada anteriormente)

**`INPUT_REQUEST`** ([int](language.types.integer.md))
:   Variáveis [REQUEST](reserved.variables.request.md).
    (Removida a partir do PHP 8.0.0; não estava implementada anteriormente)

**Opções Genéricas de Filtros**

**`FILTER_FLAG_NONE`** ([int](language.types.integer.md))
:   Sem flags.

**`FILTER_REQUIRE_SCALAR`** ([int](language.types.integer.md))
:   Opção usada para requerer que a entrada do filtro seja um escalar.

**`FILTER_REQUIRE_ARRAY`** ([int](language.types.integer.md))
:   Opção usada para requerer que a entrada do filtro seja um [array](language.types.array.md).

**`FILTER_FORCE_ARRAY`** ([int](language.types.integer.md))
:   Esta opção encapsula entradas encalares em um [array](language.types.array.md) de um elemento
    para filtros que operam em arrays.

**`FILTER_NULL_ON_FAILURE`** ([int](language.types.integer.md))
:   Usa **`null`** ao invés de **`false`** em caso de falha.

    Utilizável com qualquer filtro
    **`FILTER_VALIDATE_*`**
    de validação.

**`FILTER_THROW_ON_FAILURE`** ([int](language.types.integer.md))
:   Lança uma [Filter\FilterFailedException](class.filter-filterfailedexception.md) quando um
    filtro de validação falhar, em vez de retornar **`false`**.

    Pode ser usado com qualquer filtro
    de validação
    **`FILTER_VALIDATE_*`**.

    Disponível a partir do PHP 8.5.0.

**Opções de Filtro de Sanitização**

**`FILTER_FLAG_STRIP_LOW`** ([int](language.types.integer.md))
:   Remove caracteres com valor ASCII menor que 32.

**`FILTER_FLAG_STRIP_HIGH`** ([int](language.types.integer.md))
:   Remove caracteres com valor ASCII maior que 127.

**`FILTER_FLAG_STRIP_BACKTICK`** ([int](language.types.integer.md))
:   Remove caracteres de acento grave (`` ` ``).

**`FILTER_FLAG_ENCODE_LOW`** ([int](language.types.integer.md))
:   Codifica caracteres com valor ASCII menor que 32.

**`FILTER_FLAG_ENCODE_HIGH`** ([int](language.types.integer.md))
:   Codifica caracteres com valor ASCII maior que 127.

**`FILTER_FLAG_ENCODE_AMP`** ([int](language.types.integer.md))
:   Codifica `&`.

**`FILTER_FLAG_NO_ENCODE_QUOTES`** ([int](language.types.integer.md))
:   Não codifica aspas simples e duplas (`'`
    e `"`).

**`FILTER_FLAG_EMPTY_STRING_NULL`** ([int](language.types.integer.md))
:   Se a sanitização de uma string resultar em uma string vazia,
    converte o valor para **`null`**.

**Filtros de Validação**

**`FILTER_VALIDATE_BOOL`** ([int](language.types.integer.md))
:   Retorna **`true`** para `"1"`,
    `1` incluindo as notações binária, octal e hexadecimal, `1.0` incluindo notação científica,
    `"true"`, **`true`**,
    `"on"`
    e `"yes"`.

    Retorna **`false`** para `"0"`,
    `0` incluindo as notações binária, octal e hexadecimal, `0.0` incluindo notação científica,
    `"false"`, **`false`**,
    `"off"`,
    `"no"` e
    `""`.

    Valores string são comparados de forma insensível a maiúsculas/minúsculas.
    O valor de retorno para valores não booleanos depende da opção
    **`FILTER_NULL_ON_FAILURE`**.
    Se estiver definida, retorna **`null`**, caso contrário, **`false`**.

    **Opções disponíveis**

    `default`
    :   Valor a retornar caso o filtro falhe.

    Disponível a partir do PHP 8.0.0.

**`FILTER_VALIDATE_BOOLEAN`** ([int](language.types.integer.md))
:   Sinônimo de **`FILTER_VALIDATE_BOOL`**.
    O sinônimo estava disponível antes da introdução de seu nome canônico
    no PHP 8.0.0.

**`FILTER_VALIDATE_INT`** ([int](language.types.integer.md))
:   Valida se o valor é um inteiro,
    em caso de sucesso é convertido para o tipo [int](language.types.integer.md).

    > **Nota**:
    >
    > Valores string são aparados usando [trim()](function.trim.md)
    > antes da validação.

    **Opções disponíveis**

    `default`
    :   Valor a retornar caso o filtro falhe.

    `min_range`
    :   Valor só é válido se for maior ou igual que o valor fornecido.

    `max_range`
    :   Valor só é válido se for menor ou igual que o valor fornecido.

    **Constantes Opcionais**

    **`FILTER_FLAG_ALLOW_OCTAL`** ([int](language.types.integer.md))
    :   Permite inteiros em notação octal
        (`0[0-7]+`).

    **`FILTER_FLAG_ALLOW_HEX`** ([int](language.types.integer.md))
    :   Permite inteiros em notação hexadecimal
        (`0x[0-9a-fA-F]+`).

**`FILTER_VALIDATE_FLOAT`** ([int](language.types.integer.md))
:   Valida se o valor é um float,
    em caso de sucesso é convertido para o tipo [float](language.types.float.md).

    > **Nota**:
    >
    > Valores string são aparados usando [trim()](function.trim.md)
    > antes da validação.

    **Opções disponíveis**

    `default`
    :   Valor a retornar caso o filtro falhe.

    `decimal`

    `min_range`
    :   Valor só é válido se for maior ou igual que o valor fornecido.
        Disponível a partir do PHP 7.4.0.

    `max_range`
    :   Valor só é válido se for menor ou igual que o valor fornecido.
        Disponível a partir do PHP 7.4.0.

    **Constantes opcionais**

    **`FILTER_FLAG_ALLOW_THOUSAND`** ([int](language.types.integer.md))
    :   Aceita vírgulas (`,`),
        que normalmente representam separador de milhares em inglês.

**`FILTER_VALIDATE_REGEXP`** ([int](language.types.integer.md))
:   Valida o valor comparando com a expressão regular informada pela opção
    `regexp`.

    **Opções disponíveis**

    `default`
    :   Valor a retornar caso o filtro falhe.

    `regexp`
    :   Expressão regular [compatível com Perl](book.pcre.md).

**`FILTER_VALIDATE_URL`** ([int](language.types.integer.md))
:   Verifica se o URL é válido conforme a
    [» RFC 2396](https://datatracker.ietf.org/doc/html/rfc2396).

    **Opções disponíveis**

    `default`
    :   Valor a retornar caso o filtro falhe.

    **Constantes Opcionais**

    **`FILTER_FLAG_SCHEME_REQUIRED`** ([int](language.types.integer.md))
    :   Requer que o URL contenha uma parte de esquema.

        **Aviso**

        *DESCONTINUADA* a partir do PHP 7.3.0 e
        *REMOVIDA* a partir do PHP 8.0.0.
        A razão é que fica sempre implícita pelo filtro
        **`FILTER_VALIDATE_URL`**.

    **`FILTER_FLAG_HOST_REQUIRED`** ([int](language.types.integer.md))
    :   Requer que o URL contenha uma parte de host.

        **Aviso**

        *DESCONTINUADA* a partir do PHP 7.3.0 e
        *REMOVIDA* a partir do PHP 8.0.0.
        A razão é que fica sempre implícita pelo filtro
        **`FILTER_VALIDATE_URL`**.

    **`FILTER_FLAG_PATH_REQUIRED`** ([int](language.types.integer.md))
    :   Requer que o URL contenha uma parte de caminho.

    **`FILTER_FLAG_QUERY_REQUIRED`** ([int](language.types.integer.md))
    :   Requer que o URL contenha uma parte de consulta.

    **Aviso**

    Um URL válido pode não especificar o
    protocolo HTTP (`http://`).
    Portanto, uma validação adicional pode ser necessária para determinar se o
    URL usa um protocolo esperado,
    por exemplo, `ssh://` ou `mailto:`.

    **Aviso**

    Este filtro só funciona em URLs ASCII.
    Isto significa que os Nomes de Domínio Internacionalizados (IDN) serão sempre rejeitados.

**`FILTER_VALIDATE_DOMAIN`** ([int](language.types.integer.md))
:   Valida se o nome de domínio é válido de acordo com
    [» RFC 952](https://datatracker.ietf.org/doc/html/rfc952),
    [» RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034),
    [» RFC 1035](https://datatracker.ietf.org/doc/html/rfc1035),
    [» RFC 1123](https://datatracker.ietf.org/doc/html/rfc1034),
    [» RFC 2732](https://datatracker.ietf.org/doc/html/rfc1034),
    e
    [» RFC 2181](https://datatracker.ietf.org/doc/html/rfc2181).

    **Opções disponíveis**

    `default`
    :   Valor a retornar caso o filtro falhe.

    **Constantes Opcionais**

    **`FILTER_FLAG_HOSTNAME`** ([int](language.types.integer.md))
    :   Requer que hostnames iniciem com caracteres alfanuméricos e contenham
        apenas caracteres alfanuméricos ou hífen.

**`FILTER_VALIDATE_EMAIL`** ([int](language.types.integer.md))
:   Verifica se o valor é um endereço válido de e-mail.

    A validação é realizada conforme a sintaxe `addr-spec`
    na
    [» RFC 822](https://datatracker.ietf.org/doc/html/rfc822).
    Contudo, comentários, espaços em branco e domínios sem ponto
    não são suportados, e por isso serão rejeitados.

    **Opções disponíveis**

    `default`
    :   Valor a retornar caso o filtro falhe.

    **Constantes Opcionais**

    **`FILTER_FLAG_EMAIL_UNICODE`** ([int](language.types.integer.md))
    :   Aceita caracteres Unicode na parte local.
        Disponível a partir do PHP 7.1.0.

    **Aviso**

    A validação de e-mail é complexa e a única maneira verdadeira de confirmar se um e-mail
    é válido e existe é enviando um e-mail para o endereço.

**`FILTER_VALIDATE_IP`** ([int](language.types.integer.md))
:   Valida o valor como um endereço IP.

    **Opções disponíveis**

    `default`
    :   Valor a retornar caso o filtro falhe.

    **Constantes Opcionais**

    **`FILTER_FLAG_IPV4`** ([int](language.types.integer.md))
    :   Permite endereço IPv4.

    **`FILTER_FLAG_IPV6`** ([int](language.types.integer.md))
    :   Permite endereço IPv6.

    **`FILTER_FLAG_NO_RES_RANGE`** ([int](language.types.integer.md))
    :   Nega endereços reservados.

        Estes são os intervalos marcados como
        `Reserved-By-Protocol` (reservados por protocolo) na
        [» RFC 6890](https://datatracker.ietf.org/doc/html/rfc6890).

        Para IPv4, corresponden aos seguintes intervalos:
        `0.0.0.0/8`, `169.254.0.0/16`, `127.0.0.0/8`, `240.0.0.0/4`.

        E para IPv6, corresponden aos seguintes intervalos:
        `::1/128`, `::/128`, `::FFFF:0:0/96`, `FE80::/10`.

    **`FILTER_FLAG_NO_PRIV_RANGE`** ([int](language.types.integer.md))
    :   Nega endereços privados.

        São os endereços IPv4 que estão nestas faixas:
        `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`.

        E são os endereços IPv6 que inicial com
        `FD` ou `FC`.

    **`FILTER_FLAG_GLOBAL_RANGE`** ([int](language.types.integer.md))
    :   Permite apenas endereços globais.
        Podem ser encontrados na
        [» RFC 6890](https://datatracker.ietf.org/doc/html/rfc6890)
        onde o atributo `Global` é `True`.
        Disponível a partir do PHP 8.2.0.

**`FILTER_VALIDATE_MAC`** ([int](language.types.integer.md))
:   Valida se o valor é um endereço MAC.

    **Opções disponíveis**

    `default`
    :   Valor a retornar caso o filtro falhe.

**Filtros de Sanitização**

**`FILTER_UNSAFE_RAW`** ([int](language.types.integer.md))
:   Este filtro não faz nada.

    Entretanto, ele pode remover ou codificar caracteres especiais se usado em conjunto com
    as opções **`FILTER_FLAG_STRIP_*`**
    e **`FILTER_FLAG_ENCODE_*`**
    de filtro de sanitização.

**`FILTER_DEFAULT`** ([int](language.types.integer.md))
:   Sinônimo de **`FILTER_UNSAFE_RAW`**.

**`FILTER_SANITIZE_STRING`** ([int](language.types.integer.md))
:   Este filtro remove etiquetas e codifica HTML com aspas duplas e simples.

    Opcionalmente, ele pode remover ou codificar caracteres especificados se usado junto
    com as opções de filtro de sanitização
    **`FILTER_FLAG_STRIP_*`**
    e **`FILTER_FLAG_ENCODE_*`**.

    O comportamento da codificação de aspas pode ser desativado usando a
    opção de filtro **`FILTER_FLAG_NO_ENCODE_QUOTES`**

    **Aviso**

    *Descontinuado* a partir do PHP 8.1.0,
    use [htmlspecialchars()](function.htmlspecialchars.md) em seu lugar.

    **Aviso**

    A maneira como esse filtro remove as etiquetas não é equivalente a
    [strip\_tags()](function.strip-tags.md).

**`FILTER_SANITIZE_STRIPPED`** ([int](language.types.integer.md))
:   Sinônimo de **`FILTER_SANITIZE_STRING`**.

    **Aviso**

    *Descontinuado* a partir do PHP 8.1.0,
    use [htmlspecialchars()](function.htmlspecialchars.md) em seu lugar.

**`FILTER_SANITIZE_ENCODED`** ([int](language.types.integer.md))
:   Este filtra codifica uma string em URL.

    Opcionalmente pode codificar caracteres especificados se usado junto com
    as opções de filtro de sanitização
    **`FILTER_FLAG_STRIP_*`**
    e **`FILTER_FLAG_ENCODE_*`**.

**`FILTER_SANITIZE_SPECIAL_CHARS`** ([int](language.types.integer.md))
:   Este filtra codifica, em HTML,
    `'`, `"`, `<`, `>`, `&`
    e caracteres com um valor ASCII menor que 32.
    Diferentemente do filtro **`FILTER_SANITIZE_FULL_SPECIAL_CHARS`**, o filtro
    **`FILTER_SANITIZE_SPECIAL_CHARS`** ignora a opção
    **`FILTER_FLAG_NO_ENCODE_QUOTES`**.

    Opcionalmente pode codificar caracteres especificados se usado junto com
    as opções de filtro de sanitização **`FILTER_FLAG_STRIP_*`**,
    e pode codificar caracteres com valores ASCII
    maiores que 127 usando **`FILTER_FLAG_ENCODE_HIGH`**.

**`FILTER_SANITIZE_FULL_SPECIAL_CHARS`** ([int](language.types.integer.md))
:   Este filtro é equivalente a chamar [htmlspecialchars()](function.htmlspecialchars.md)
    com **`ENT_QUOTES`** definida.

    O comportamento da codificação de aspas pode ser desabilitado usando a
    opção de filtro **`FILTER_FLAG_NO_ENCODE_QUOTES`**.

    **Aviso**

    Assim como [htmlspecialchars()](function.htmlspecialchars.md), este filtro reconhece a
    configuração INI [default\_charset](ini.core.md#ini.default-charset).
    Se for detectada uma sequência de bytes que constitui um caractere inválido
    no conjunto de caracteres atual, a string inteira será rejeitada,
    resultando no retorno de uma string vazia.

**`FILTER_SANITIZE_EMAIL`** ([int](language.types.integer.md))
:   Sanitiza a string removendo todos os caracteres exceto
    as letras latinas (`[a-zA-Z]`),
    dígitos (`[0-9]`)
    e os caracteres especiais
    `` !#$%&'*+-=?^_`{|}~@.[] ``.

**`FILTER_SANITIZE_URL`** ([int](language.types.integer.md))
:   Sanitiza a string removendo todos os caracteres exceto
    as letras latinas (`[a-zA-Z]`),
    dígitos (`[0-9]`)
    e os caracteres especiais
    `` $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&= ``.

**`FILTER_SANITIZE_NUMBER_INT`** ([int](language.types.integer.md))
:   Sanitiza a string removendo todos os caracteres exceto
    (`[0-9]`), sinal de adição (`+`),
    e sinal de subtração (`-`).

**`FILTER_SANITIZE_NUMBER_FLOAT`** ([int](language.types.integer.md))
:   Sanitiza a string removendo todos os caracteres exceto
    (`[0-9]`), sinal de adição (`+`),
    e sinal de subtração (`-`).

    **Constantes Opcionais**

    **`FILTER_FLAG_ALLOW_FRACTION`** ([int](language.types.integer.md))
    :   Aceita o caractere ponto (`.`),
        que normalmente representa o separador entre as partes inteira
        e fracionária em inglês.

    **`FILTER_FLAG_ALLOW_THOUSAND`** ([int](language.types.integer.md))
    :   Aceita vírgulas (`,`),
        que normalmente representam separador de milhares em inglês.

    **`FILTER_FLAG_ALLOW_SCIENTIFIC`** ([int](language.types.integer.md))
    :   Aceita números em notação científica permitindo os caracteres
        `e` e `E`.

    **Aviso**

    Se a opção **`FILTER_FLAG_ALLOW_FRACTION`** não for usada,
    o separador de decimais será removido, alterando o valor recebido.

    ```
    <?php
    $number = '12.34';

    var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_FLOAT));
    var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION));
    ?>
    ```

    O exemplo acima produzirá:

    ```
    string(4) "1234"
    string(5) "12.34"
    ```

**`FILTER_SANITIZE_ADD_SLASHES`** ([int](language.types.integer.md))
:   Aplica [addslashes()](function.addslashes.md) à entrada.
    Disponível a partir do PHP 7.3.0.

**`FILTER_SANITIZE_MAGIC_QUOTES`** ([int](language.types.integer.md))
:   Sinônimo de **`FILTER_SANITIZE_ADD_SLASHES`**.

    **Aviso**

    *DESCONTINUADA* a partir do PHP 7.3.0 e
    *REMOVIDA* a partir do PHP 8.0.0.

**Filtro Definido pelo Usuário**

**`FILTER_CALLBACK`** ([int](language.types.integer.md))
:   Este filtro delega a filtragem a uma função definida pelo usuário.
    O [callable](language.types.callable.md) é passado através do
    parâmetro `options` comom o valor associado à
    chave `'options'`.

    A função deve ter a seguinte assinatura:

    function callback([string](language.types.string.md) `$value`): [mixed](language.types.mixed.md)

    `value`
    :   O valor a ser filtrado.

    > **Nota**:
    >
    > O valor retornado pela função será o valor retornado pela
    > função de filtro chamada.

    **Exemplo #1
    Exemplo de uso de **`FILTER_CALLBACK`** para validar
    um login**

    ```
    <?php
    function validate_login(string $value): ?string
    {
        if (strlen($value) >= 5 && ctype_alnum($value)) {
            return $value;
        }
        return null;
    }

    $login = "L0ginValido";
    $filtered_login = filter_var($login, FILTER_CALLBACK, ['options' => 'validate_login']);
    var_dump($filtered_login);

    $login = "login f&lso";
    $filtered_login = filter_var($login, FILTER_CALLBACK, ['options' => 'validate_login']);
    var_dump($filtered_login);
    ?>
    ```

    O exemplo acima produzirá:

    ```
    string(11) "L0ginValido"
    NULL
    ```

    > **Nota**:
    >
    > A partir do PHP 8.1.25 e 8.2.12, as opções estruturais
    > **`FILTER_REQUIRE_ARRAY`**,
    > **`FILTER_FORCE_ARRAY`** e
    > **`FILTER_REQUIRE_SCALAR`** se aplicam a este filtro e
    > **`FILTER_NULL_ON_FAILURE`** altera como tais
    > falhas estruturais são reportadas. Em versões anteriores, todas as opções eram
    > ignoradas. Opções específicas de filtro são sempre ignoradas, e como o valor
    > de retorno da função de retorno é o resultado, a função de retorno em si não pode falhar: nenhuma
    > opção transforma um `false` retornado pela função de retorno em um
    > **`null`** ou em uma exceção.

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

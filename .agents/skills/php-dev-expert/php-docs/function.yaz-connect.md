# Prepara para uma conexão com um servidor Z39.50

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-connect.php

---

# yaz\_connect

(PHP 4 >= 4.0.1, PECL yaz >= 0.9.0)

yaz\_connect — 
Prepara para uma conexão com um servidor Z39.50

### Descrição

function **yaz\_connect**([string](language.types.string.md) `$zurl`, [mixed](language.types.mixed.md) `$options` = ?): [mixed](language.types.mixed.md)

Esta função retorna um recurso de conexão em caso de sucesso, zero em caso de
falha.

**yaz\_connect()** prepara uma conexão com um
servidor Z39.50.
Esta função não é bloqueante e não tenta estabelecer
uma conexão - ela apenas prepara uma conexão para ser executada posteriormente quando
[yaz\_wait()](function.yaz-wait.md) for chamado.

> **Nota**:
>
> O [» proxy YAZ](https://www.indexdata.dk/yazproxy/) é um
> proxy Z39.50 disponível gratuitamente.

### Parâmetros

`zurl`
:   Uma string que assume o formato `host[:porta][/banco_de_dados]`.
    Se a porta for omitida, a porta 210 será usada. Se o banco de dados for omitido,
    `Default` será usado.

`options`
:   Se fornecido como uma string, será tratado como a string de autenticação Z39.50 V2
    (OpenAuth).

    Se fornecido como um array, o conteúdo do array serve como opções.

    user
    :   Nome de usuário para autenticação.

    group
    :   Grupo para autenticação.

    password
    :   Senha para autenticação.

    cookie
    :   Cookie para sessão (proxy YAZ).

    proxy
    :   Proxy para conexão (proxy YAZ).

    persistent
    :   Um booleano. Se **`true`** a conexão é persistente; se **`false`** a
        conexão não é persistente. Por padrão, as conexões são persistentes.

        > **Nota**:
        >
        > Se uma conexão persistente for aberta, não será possível fechá-la
        > mais tarde com [yaz\_close()](function.yaz-close.md).

    piggyback
    :   Um booleano. Se **`true`**, piggyback estará habilitado para pesquisas; Se **`false`**
        piggyback estará desabilitado. Por padrão, o piggyback está habilitado.

        Habilitar o piggyback é mais eficiente e geralmente economiza
        uma viagem de ida e volta pela rede para as primeiras buscas de registros. No entanto,
        alguns servidores Z39.50 não suportam piggyback ou ignoram
        nomes de conjuntos de elementos. Para esses, o piggyback deve ser desabilitado.

    charset
    :   Uma string que especifica o conjunto de caracteres a ser usado na linguagem Z39.50
        e a negociação do conjunto de caracteres. Use strings como:
        `ISO-8859-1`, `UTF-8` ou
        `UTF-16`.

        A maioria dos servidores Z39.50 não oferece suporte a esse recurso (e, portanto, ele é
        ignorado). Muitos servidores usam a codificação ISO-8859-1 para consultas e
        mensagens. Registros MARC21/USMARC não são afetados por esta configuração.

    preferredMessageSize
    :   Um inteiro que especifica o tamanho máximo em bytes de todos os registros
        a serem retornados por um destino durante a recuperação. Consulte o
        [» padrão Z39.50](https://www.loc.gov/z3950/agency/markup/04.html#3.2.1.1.4) para mais
        informações.

        > **Nota**:
        >
        > Esta opção é suportada no PECL YAZ 1.0.5 ou posterior.

    maximumRecordSize
    :   Um inteiro que especifica o tamanho máximo em bytes de um único registro
        a ser retornado por um destino durante a recuperação. Esta
        entidade é chamada de Exceptional-record-size (tamanho de registro excepcional) no
        [» padrão Z39.50](https://www.loc.gov/z3950/agency/markup/04.html#3.2.1.1.4).

        > **Nota**:
        >
        > Esta opção é suportada no PECL YAZ 1.0.5 ou posterior.

### Valor Retornado

Um recurso de conexão em caso de sucesso, **`false`** em caso de erro.

### Veja também

- [yaz\_close()](function.yaz-close.md) - Fecha a conexão YAZ

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

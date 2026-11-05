# Informação do servidor e ambiente de execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.variables.server.php

---

# $\_SERVER

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

$\_SERVER — Informação do servidor e ambiente de execução

### Descrição

$\_SERVER é um [array](language.types.array.md) contendo informação
como cabeçalhos, caminhos, e outras informações do script.
As informações nesse array são criadas pelo servidor web específico, e portanto
não há garantias que sempre existirão as mesmas informações,
podendo algumas serem omitidas ou adicionadas em relação à lista a seguir.
Entretanto, a maioria dessas variáveis são documentadas na
[» especificação CGI/1.1](https://datatracker.ietf.org/doc/html/rfc3875),
e estão normalmente definidas.

> **Nota**:
>
> Quando PHP é executado na [linha de comando](features.commandline.md)
> a maioria dessas informações não estará disponível ou não terá qualquer sentido.

Além dos valores listados a seguir, o PHP irá criar itens adicionais
com valores dos cabeçalhos de requisição. Esses itens serão prefixados com
`HTTP_` seguido do nome do cabeçalho,
capitalizados e com sublinhados ao invés de hifens.
Por exemplo, o cabeçalho `Accept-Language` estará disponível
como `$_SERVER['HTTP_ACCEPT_LANGUAGE']`.

### Índices

'PHP\_SELF'
:   O nome do arquivo do script que está sendo executado, relativo à
    raiz do documento. Por exemplo,
    $\_SERVER['PHP\_SELF'] em um script no
    endereço http://example.com/foo/bar.php
    seria /foo/bar.php.
    A constante [\_\_FILE\_\_](language.constants.magic.md)
    contém o caminho completo e nome do arquivo atual (possivelmente
    incluído).

    Se o PHP estiver sendo executado em linha de comando, esta variável contém
    o nome do script.

'[argv](reserved.variables.argv.md)'
:   Array de argumentos passado para o script. Quando o script
    é executado na linha de comando, isto permite um acesso aos parâmetros
    de linha de comando no estilo da linguagem C. Quando chamado via método GET, ele
    conterá a string da consulta.

'[argc](reserved.variables.argc.md)'
:   Contém o número de parâmetros da linha de comando passados para o
    script (se executando da linha de comando).

'GATEWAY\_INTERFACE'
:   O número de revisão da especificação CGI que o servidor está utilizando,
    por exemplo: `'CGI/1.1'`.

'SERVER\_ADDR'
:   O endereço IP do servidor onde está o script em
    execução.

'SERVER\_NAME'
:   O nome host do servidor onde o script atual é
    executado. Se o script estiver sendo executado em um host virtual, este
    será o valor definido para esse host.

    > **Nota**:
    >
    > No Apache 2, você deve definir `UseCanonicalName = On` e
    > `ServerName`. Caso contrário, este valor refletirá
    > o nome do servidor fornecido pelo cliente, que pode ser forjado.
    > Não é seguro confiar neste valor em contextos que dependem de segurança.

'SERVER\_SOFTWARE'
:   A string de identificação do servidor, fornecida nos cabeçalhos ao
    responder a requisições.

'SERVER\_PROTOCOL'
:   Nome e número da revisão do protocolo de informação pelo qual a
    página foi requerida, por exemplo`'HTTP/1.0'`;

'REQUEST\_METHOD'
:   Contém o método de requisição utilizado para acessar a página. Geralmente '`'GET'`',
    '`'HEAD'`', '`'POST'`' ou '`'PUT'`'.

    > **Nota**:
    >
    > O script PHP é terminado depois dos cabeçalhos enviados (ou seja, depois de
    > produzir alguma saída sem saída do buffer) se o método da requisição
    > for `HEAD`.

'REQUEST\_TIME'
:   O timestamp de quando o PHP começou a processar a requisição.

'REQUEST\_TIME\_FLOAT'
:   O timestamp de quando o PHP começou a processar a requisição, com precisão em microssegundos.

'QUERY\_STRING'
:   A string de consulta, se houver, pela qual a página foi acessada.

'DOCUMENT\_ROOT'
:   O diretório raiz sob o qual o script atual é
    executado, como definido no arquivo de configuração do servidor.

'HTTPS'
:   Definido para um valor não vazio se o script foi requisitado através do protocolo
    HTTPS.

'REMOTE\_ADDR'
:   O endereço IP de onde o usuário está visualizando a página
    atual.

'REMOTE\_HOST'
:   O nome do host que o usuário utilizou para chamar a página
    atual. O DNS reverso do
    REMOTE\_ADDR do usuário.

    > **Nota**:
    >
    > O servidor web precisa estar configurado para criar essa variável. Por
    > exemplo, no Apache é necessário inserir um `HostnameLookups On`
    > dentro do httpd.conf. Veja também
    > [gethostbyaddr()](function.gethostbyaddr.md).

'REMOTE\_PORT'
:   A porta TCP na máquina do usuário utilizada para comunicação com
    o servidor web.

'REMOTE\_USER'
:   O usuário autenticado.

'REDIRECT\_REMOTE\_USER'
:   O usuário autenticado utilizado se a requisição foi redirecionada internamente.

'SCRIPT\_FILENAME'
:   O caminho absoluto do script atualmente em execução.
    > **Nota**:
    >
    > Se o script for executado pela CLI com um caminho relativo,
    > como file.php ou
    > ../file.php,
    > $\_SERVER['SCRIPT\_FILENAME'] irá
    > conter o caminho relativo especificado pelo usuário.

'SERVER\_ADMIN'
:   O valor fornecido pela diretiva SERVER\_ADMIN (do Apache) no
    arquivo de configuração do servidor. Se o script está sendo executado
    em um host virtual, este será o valor definido para esse
    host virtual.

'SERVER\_PORT'
:   A porta na máquina servidora utilizada pelo servidor web
    para comunicação. Como padrão, este valor é '`'80'`'.
    Utilizando SSL, entretanto, esse valor será alterado para a porta HTTP de comunicação
    segura.

    > **Nota**:
    >
    > Utilizando o Apache 2, deve-se configurar `UseCanonicalName = On`,
    > assim como `UseCanonicalPhysicalPort = On` para
    > se obter a porta física (real), caso contrário, este valor pode ser forjado e pode,
    > ou não, retornar como valor a porta física.
    > Não é seguro confiar neste valor em contextos que dependem de segurança.

'SERVER\_SIGNATURE'
:   String contendo a versão do servidor e nome do host virtual
    que é adicionado às páginas geradas no servidor, se ativo.

'PATH\_TRANSLATED'
:   O caminho real do script relativo ao sistema de arquivos
    (não a raiz dos documentos), depois de realizados todos os mapeamentos
    de caminhos (virtuais para reais).

    > **Nota**:
    >
    > Usuários do Apache 2 podem usar `AcceptPathInfo = On` dentro do
    > httpd.conf para definir o PATH\_INFO.

'SCRIPT\_NAME'
:   Contém o caminho completo do script atual. Útil para páginas
    que precisam apontar para elas mesmas (dinamicamente).
    A constante [\_\_FILE\_\_](language.constants.magic.md)
    contém o caminho completo e nome do arquivo atual
    (mesmo se tiver sido incluído).

'REQUEST\_URI'
:   O URI fornecido para acessar a página atual, por
    exemplo, '`/index.html`'.

'PHP\_AUTH\_DIGEST'
:   Quando executando no Apache como módulo fazendo autenticação HTTP,
    esta variável é definida para o cabeçalho 'Authorization' enviado pelo
    cliente (que então pode ser usado para fazer a validação apropriada).

'PHP\_AUTH\_USER'
:   Ao efetuar autenticação HTTP, esta variável estará definida com o nome de usuário
    fornecido pelo usuário.

'PHP\_AUTH\_PW'
:   Ao efetuar autenticação HTTP, esta variável estará definida com a senha
    fornecida pelo usuário.

'AUTH\_TYPE'
:   Ao efetuar autenticação HTTP, esta
    variável estará definida com o tipo de autenticação utilizado.

'PATH\_INFO'
:   Contém qualquer informação fornecida pelo usuário, se disponível,
    que leve ao nome do script atual, precedendo a string
    de consulta. Por exemplo, se o script atual fosse acessado via a URL
    http://www.example.com/php/path\_info.php/some/stuff?foo=bar,
    então $\_SERVER['PATH\_INFO'] teria como
    valor `/some/stuff`

'ORIG\_PATH\_INFO'
:   Versão original do 'PATH\_INFO' antes de ser processada pelo
    PHP.

### Examples

**Exemplo #1 Exemplo de $\_SERVER**

```
<?php
echo $_SERVER['SERVER_NAME'];
?>
```

O exemplo acima produzirá
algo semelhante a:

```
www.example.com
```

### Notas

> **Nota**:
>
> Esta é uma variável 'superglobal' ou
> variável global automática. Isso significa simplesmente que ela está disponível em
> todos os escopos de um script. Não há necessidade de usar
> **global $variable;** para acessá-la dentro de funções ou métodos.

### Veja também

- [A extensão filter](book.filter.md)

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

# Envia um cabeçalho HTTP bruto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.header.php

---

# header

(PHP 4, PHP 5, PHP 7, PHP 8)

header — Envia um cabeçalho HTTP bruto

### Descrição

function **header**([string](language.types.string.md) `$header`, [bool](language.types.boolean.md) `$replace` = **`true`**, [int](language.types.integer.md) `$response_code` = 0): [void](language.types.void.md)

**header()** é usada para enviar um cabeçalho HTTP
bruto. Consulte a [» especificação HTTP/1.1](https://datatracker.ietf.org/doc/html/rfc2616)
para obter mais informações sobre cabeçalhos HTTP.

Lembre-se de que **header()** deve ser chamada antes
de qualquer saída real ser enviada, seja por tags HTML normais, linhas em branco em um
arquivo ou pelo PHP. É um erro muito comum ler código com
[include](function.include.md), [require](function.require.md),
funções ou outra função de acesso a arquivo, e ter espaços ou linhas
vazias que são exibidas antes de **header()** ser chamada.
O mesmo problema existe ao usar um único arquivo PHP/HTML.

```
<html>
<?php
/* Isso causará um erro. Observe a saída
 * acima, que é antes da chamada header() */
header('Location: http://www.example.com/');
exit;
?>
```

### Parâmetros

`header`
:   A string do cabeçalho.

    Existem dois casos especiais de chamadas de cabeçalho. O primeiro é um cabeçalho
    que começa com a string "`HTTP/`" (maiúsculas ou minúsculas,
    não importa), que será usado para descobrir o código de status HTTP
    a ser enviado. Por exemplo, se o Apache foi configurado para
    usar um script PHP para lidar com solicitações de arquivos ausentes (usando
    a diretiva `ErrorDocument`), é importante ter
    certeza de que o script gera o código de status adequado.

    ```
    <?php
    // Este exemplo ilustra o caso especial "HTTP/"
    // Alternativas melhores em casos de uso típico incluem:
    // 1. header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    //    (para substituir as mensagens de status HTTP para clientes que ainda estão usando HTTP/1.0)
    // 2. http_response_code(404); (para usar a mensagem padrão)
    header("HTTP/1.1 404 Not Found");
    ?>
    ```

    O segunda caso especial é o cabeçalho "Location:". Ele não só envia
    o cabeçalho de volta para o navegador, mas também retorna um código de
    status `REDIRECT` (302) para o navegador
    a menos que o código de status `201` ou
    um `3xx` já tenha sido enviado.

    ```
    <?php
    header("Location: http://www.example.com/"); /* Redireciona o navegador */

    /* Certificando que o restante do código não seja executado quando o redirecionamento é feito. */
    exit;
    ?>
    ```

`replace`
:   O parâmetro opcional `replace` indica
    se o cabeçalho deve substituir um cabeçalho semelhante anterior ou
    adicionar um segundo cabeçalho do mesmo tipo. Por padrão ele irá substituir,
    mas se for passado **`false`** como segundo argumento podem ser forçados
    vários cabeçalhos do mesmo tipo. Por exemplo:

    ```
    <?php
    header('WWW-Authenticate: Negotiate');
    header('WWW-Authenticate: NTLM', false);
    ?>
    ```

`response_code`
:   Força o código de resposta HTTP para o valor especificado. Observe que este
    parâmetro só tem efeito se o parâmetro `header` não
    estiver vazio.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Em caso de falha ao programar o envio do cabeçalho, **header()**
emitirá um erro de nível **`E_WARNING`**.

### Examples

**Exemplo #1 Caixa de diálogo para salvar arquivo**

Se quiser que o usuário seja solicitado a salvar os dados que estão sendo
enviados, como um arquivo PDF gerado por exemplo, pode ser usado o cabeçalho [» Content-Disposition](https://datatracker.ietf.org/doc/html/rfc2183) para
fornecer um nome de arquivo recomendado e forçar o navegador a exibir
a caixa de diálogo para salvá-lo.

```
<?php
// A saída será um PDF
header('Content-Type: application/pdf');

// Será chamado de downloaded.pdf
header('Content-Disposition: attachment; filename="downloaded.pdf"');

// A fonte do PDF está em original.pdf
readfile('original.pdf');
?>
```

**Exemplo #2 Diretivas de cache**

Os scripts PHP geralmente geram conteúdo dinâmico que não deve ser armazenado em cache
pelo navegador do cliente ou por qualquer cache proxy entre o servidor e o
navegador do cliente. Muitos proxies e clientes podem ser forçados a desabilitar
o cache com:

```
<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 03 Dec 2016 17:15:00 GMT"); // Data no passado
?>
```

> **Nota**:
>
> Pode acontecer das páginas não serem armazenadas em cache mesmo que todos os
> cabeçalhos acima não sejam gerados. Há uma série de opções
> que os usuários podem definir para seus navegadores que alteram seu
> comportamento padrão de cache. Ao enviar os cabeçalhos acima, devem ser
> substituídas quaisquer configurações que possam fazer com que a saída do
> script seja armazenada em cache.
>
> Além disso, [session\_cache\_limiter()](function.session-cache-limiter.md) e
> a configuração `session.cache_limiter`
> podem ser usadas para gerar automaticamente os cabeçalhos
> corretos relacionados ao cache quando sessões estão sendo usadas.

**Exemplo #3 Definindo um cookie**

[setcookie()](function.setcookie.md) fornece uma maneira conveniente de definir cookies.
Para definir um cookie que inclui atributos que [setcookie()](function.setcookie.md)
não suporta, **header()** pode ser usada.

Por exemplo, o código a seguir define um cookie que inclui um
atributo `Partitioned`.

```
<?php
header('Set-Cookie: name=value; Secure; Path=/; SameSite=None; Partitioned;');
?>
```

### Notas

> **Nota**:
>
> Os cabeçalhos só serão acessíveis e enviados quando uma SAPI que os suporta
> estiver em uso.

> **Nota**:
>
> Para contornar esse problema, o buffer de saída pode ser usado,
> com a sobrecarga de toda a saída para o navegador sendo armazenada em buffer
> no servidor até seja enviada. Isso pode ser feito chamando
> [ob\_start()](function.ob-start.md) e [ob\_end\_flush()](function.ob-end-flush.md)
> no script, ou definindo a diretiva de configuração `output_buffering`
> no arquivo php.ini ou nos arquivos
> de configuração do servidor.

> **Nota**:
>
> A linha do cabeçalho de status HTTP sempre será a primeira enviada
> ao cliente, independentemente de a chamada a **header()**
> ser a primeira ou não. O status pode ser substituído
> chamando **header()** com uma nova linha de status
> a qualquer momento, a menos que os cabeçalhos HTTP já tenham sido enviados.

> **Nota**:
>
> A maioria dos clientes atuais aceita URI relativo como argumento para
> [» Local:](https://tools.ietf.org/html/rfc7231#section-7.1.2),
> mas alguns clientes mais antigos exigem um URI absoluto
> incluindo o esquema, nome do host e caminho absoluto. Geralmente, podem ser usados
> [$\_SERVER['HTTP\_HOST']](reserved.variables.server.md),
> [$\_SERVER['PHP\_SELF']](reserved.variables.server.md)
> e [dirname()](function.dirname.md) para criar um URI absoluto a partir de um
> relativo:
>
> ```
> <?php
> /* Redireciona para uma página diferente no diretório atual que foi solicitado */
> $host  = $_SERVER['HTTP_HOST'];
> $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
> $extra = 'minha_pagina.php';
> header("Location: http://$host$uri/$extra");
> exit;
> ?>
> ```

> **Nota**:
>
> O ID da sessão não é passado com o cabeçalho "Location:" mesmo se [session.use\_trans\_sid](session.configuration.md#ini.session.use-trans-sid) estiver
> ativada. Deve ser passado manualmente usando a
> constante **`SID`**.

### Veja também

- [headers\_sent()](function.headers-sent.md) - Verifica se ou onde os cabeçalhos foram enviados
- [setcookie()](function.setcookie.md) - Envia um cookie
- [http\_response\_code()](function.http-response-code.md) - Obtém ou define o código de resposta HTTP
- [header\_remove()](function.header-remove.md) - Remove cabeçalhos definidos anteriormente
- [headers\_list()](function.headers-list.md) - Retorna uma lista de cabeçalhos de resposta enviados (ou prontos para enviar)
- A seção sobre [autenticação
  HTTP](features.http-auth.md)

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

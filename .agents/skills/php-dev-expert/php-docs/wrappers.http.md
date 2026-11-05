# Acessando URLs HTTP(s)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wrappers.http.php

---

# http://

# https://

http:// -- https:// — Acessando URLs HTTP(s)

### Descrição

Permite acesso somente leitura a arquivos/recursos via HTTP.
Por padrão um GET HTTP 1.0 é usado. Um cabeçalho `Host:` é enviado com a requisição
para lidar com hosts virtuais baseados em nomes. Se estiver configurado
uma string [user\_agent](filesystem.configuration.md#ini.user-agent) no
arquivo php.ini ou no contexto do fluxo, ele também será incluído
na requisição.

O fluxo permite acesso ao *corpo* do
recurso; os cabeçalhos são armazenados na
variável [$http\_response\_header](reserved.variables.httpresponseheader.md).

Se for importante conhecer o URL do recurso de onde
o documento se originou (depois de todos os redirecionamentos processados),
será necessário processar a série de cabeçalhos de resposta retornados pelo
fluxo.

A diretiva [from](filesystem.configuration.md#ini.from) será usada para o
cabeçalho `From:` se definida e não sobrescrita pelo
[Opções e parâmetros de contexto](context.md).

### Uso

- http://example.com
- http://example.com/arquivo.php?var1=val1&var2=val2
- http://usuario:senha@example.com
- https://example.com
- https://example.com/arquivo.php?var1=val1&var2=val2
- https://usuario:senha@example.com

### Opções

**Sumário do Empacotador**

| Atributo | Suportado |
| --- | --- |
| Restrito por [allow\_url\_fopen](filesystem.configuration.md#ini.allow-url-fopen) | Sim |
| Permite Leitura | Sim |
| Permite Escrita | Não |
| Permite Adição | Não |
| Permite Leitura e Escrita Simultâneas | N/A |
| Suporta [stat()](function.stat.md) | Não |
| Suporta [unlink()](function.unlink.md) | Não |
| Suporta [rename()](function.rename.md) | Não |
| Suporta [mkdir()](function.mkdir.md) | Não |
| Suporta [rmdir()](function.rmdir.md) | Não |

### Examples

**Exemplo #1 Detectando a qual se chegou depois de todos os redirecionamentos**

```
<?php
$url = 'http://www.example.com/redirecting_page.php';

$fp = fopen($url, 'r');

$meta_data = stream_get_meta_data($fp);
foreach ($meta_data['wrapper_data'] as $response) {

    /* Fomos redirecionados? */
    if (strtolower(substr($response, 0, 10)) == 'location: ') {

        /* atualiza $url para onde fomos redirecionados */
        $url = substr($response, 10);
    }

}

?>
```

### Notas

> **Nota**:
>
> HTTPS só é suportado quando a extensão [openssl](book.openssl.md)
> estiver habilitada.

Conexões HTTP são somente leitura; escrever dados ou copiar
arquivos para um recurso HTTP não é suportado.

Enviar requisições *POST* e *PUT*, por exemplo,
pode ser feito com a ajuda de [Contextos HTTP](context.http.md).

### Veja também

- [Opções de contexto do HTTP](context.http.md)
- [$http\_response\_header](reserved.variables.httpresponseheader.md)
- [stream\_get\_meta\_data()](function.stream-get-meta-data.md) - Obtém cabeçalhos/metadados de ponteiros de arquivos/fluxos

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

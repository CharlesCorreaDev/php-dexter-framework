# Filtros - Servidor HTTP Apache Versão 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/filter.html

---

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Servidor HTTP Apache Versão 2.4

![](./images/feather.png)

[![<-](./images/left.gif "<-")](index.md)

[Apache](https://www.apache.org/) > [Servidor HTTP](https://httpd.apache.org/) > [Documentação](https://httpd.apache.org/docs/) > [Versão 2.4](index.md)

# Filtros

Este documento descreve o uso de filtros no Apache.

- ![](./images/down.gif) [Filtrando no Apache 2](#intro)
- ![](./images/down.gif) [Filtragem Inteligente](#smart)
- ![](./images/down.gif) [Expondo Filtros como um Serviço HTTP](#service)
- ![](./images/down.gif) [Usando Filtros](#using)

[![top](./images/up.gif)](#page-header)

## Filtrando no Apache 2 [¶](#intro "Link permanente")

| Módulos Relacionados | Diretrizes Relacionadas |
| --- | --- |
| - `mod_filter` - `mod_deflate` - `mod_ext_filter` - `mod_include` - `mod_charset_lite` - `mod_reflector` - `mod_buffer` - `mod_data` - `mod_ratelimit` - `mod_reqtimeout` - `mod_request` - `mod_sed` - `mod_substitute` - `mod_xml2enc` - `mod_proxy_html` | - `FilterChain` - `FilterDeclare` - `FilterProtocol` - `FilterProvider` - `AddInputFilter` - `AddOutputFilter` - `RemoveInputFilter` - `RemoveOutputFilter` - `ReflectorHeader` - `ExtFilterDefine` - `ExtFilterOptions` - `SetInputFilter` - `SetOutputFilter` |

A Cadeia de Filtros está disponível no Apache 2.0 e versões posteriores,
e permite que as aplicações processem dados de entrada e saída
de maneira altamente flexível e configurável, independentemente
de onde os dados vêm. Podemos pré-processar dados de entrada
e pós-processar dados de saída, conforme necessário. Isso é basicamente
independente das fases tradicionais de processamento de requisições.

![Filtros podem ser encadeados, em um Eixo de Dados ortogonal ao Processamento de Requisição](images/filter_arch.pt-br.png)

Alguns exemplos de filtragem na distribuição padrão do Apache são:

- `mod_include`, implementa inclusões do lado do servidor.
- `mod_ssl`, implementa criptografia SSL (https).
- `mod_deflate`, implementa compressão/descompressão em tempo real.
- `mod_charset_lite`, transcodifica entre diferentes conjuntos de caracteres.
- `mod_ext_filter`, executa um programa externo como filtro.

O Apache também usa vários filtros internamente para executar
funções como fragmentação e manipulação de intervalos de bytes.

Uma gama mais ampla de aplicações é implementada por módulos de
filtro de terceiros. Alguns exemplos são:

- Processamento e reescrita de HTML e XML
- Transformações XSLT e XIncludes
- Suporte para namespace XML
- Processamento de envio de arquivos e decodificação de formulários HTML
- Processamento de imagem
- Proteção de aplicações vulneráveis, como scripts PHP
- Edição de busca e substituição de texto

[![top](./images/up.gif)](#page-header)

## Filtragem Inteligente [¶](#smart "Link permanente")

![A filtragem inteligente aplica diferentes fornecedores de filtros de acordo com o estado do processamento da solicitação](images/mod_filter_new.pt-br.png)

O módulo `mod_filter`, incluído no Apache 2.1 e versões posteriores,
permite que a cadeia de filtros seja configurada dinamicamente no momento da execução.
Assim, por exemplo, você pode configurar um proxy para reescrever
HTML com um filtro HTML e imagens JPEG com um filtro completamente
separado, mesmo que o proxy não tenha nenhuma informação prévia
sobre o que o servidor de origem enviará. Isso funciona usando um
envoltório de filtros que direciona a requisição para diferentes provedores de acordo com
o conteúdo real no momento da execução. Qualquer filtro pode ser
inserido diretamente na cadeia e executado incondicionalmente ou
usado como um provedor e inserido dinamicamente. Por exemplo,

- um filtro de processamento HTML só será executado se o conteúdo for
  text/html ou application/xhtml+xml
- um filtro de compressão só será executado se a entrada for de um tipo
  compressível e não estiver já comprimida.
- um filtro de conversão de conjunto de caracteres será inserido se um documento
  de texto ainda não estiver no conjunto de caracteres desejado.

[![top](./images/up.gif)](#page-header)

## Expondo Filtros como um Serviço HTTP [¶](#service "Link permanente")

Os filtros podem ser usados ​​para processar conteúdo originado do cliente, além
de processar conteúdo originado no servidor usando o módulo
`mod_reflector`.

O módulo `mod_reflector` aceita requisições POST de clientes e reflete
o conteúdo do corpo da requisição POST recebido de volta na resposta,
passando pela pilha de filtros de saída no caminho de volta para o cliente.

Essa técnica pode ser usada como uma alternativa a um serviço web executado dentro
de uma pilha de servidor de aplicativos, onde um filtro de saída fornece a transformação
necessária no corpo da requisição. Por exemplo, o módulo `mod_deflate`
pode ser usado para fornecer um serviço de compressão geral, ou um filtro de
transformação de imagem pode ser transformado em um serviço de transformação de imagem.

[![top](./images/up.gif)](#page-header)

## Usando Filtros [¶](#using "Link permanente")

Existem dois métodos de uso de filtros: Simples e Dinâmico.
Em geral, deve ser usada apenas um ou outro; misturá-los pode
ter consequências inesperadas (embora a filtragem de entrada simples
possa ser misturada livremente com a filtragem de saída simples ou dinâmica).

O Método Simples é a única maneira de configurar filtros de entrada e é
suficiente para filtros de saída onde é necessária uma cadeia de filtros estática.
As diretivas relevantes são
`SetInputFilter`,
`SetOutputFilter`,
`AddInputFilter`,
`AddOutputFilter`,
`RemoveInputFilter` e
`RemoveOutputFilter`.

O Método Dinâmico permite a configuração estática e flexível/dinâmica
dos filtros de saída, conforme discutido na página `mod_filter`.
As diretivas relevantes são
`FilterChain`,
`FilterDeclare` e
`FilterProvider`.

Uma diretiva adicional, `AddOutputFilterByType` também é suportada,
porem obsoleta. Um a configuração dinâmica em seu lugar.

Línguas Disponíveis: [en](https://httpd.apache.org/docs/2.4/pt-br/en/filter.html "English") |
[es](https://httpd.apache.org/docs/2.4/pt-br/es/filter.html "Español") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/filter.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/filter.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/filter.html "Korean") |
[pt-br](pt-br__filter.md "Português (Brasil)") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/filter.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licenciado sob a [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

# Usar filtragem de solicitação | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/configuring-security/use-request-filtering

---

Sumário 

Sair do modo Editor

Pergunte e aprenda

Pergunte e aprenda

Modo de leitura

Sumário
[Ler em inglês](#)

Adicionar

Adicionar a Planos

---

Copiar Markdown

Imprimir

---

Observação

O acesso a essa página exige autorização. Você pode tentar [entrar](#) ou alterar diretórios.

O acesso a essa página exige autorização. Você pode tentar alterar os diretórios.

# Utilize filtragem de solicitações

Comentários

por a equipe do IIS

## Introdução

O UrlScan, uma ferramenta de segurança, foi fornecido como um complemento para versões anteriores do IIS (Serviços de Informações da Internet) para que os administradores pudessem impor políticas de segurança mais rígidas em seus servidores Web. No IIS 7 e acima, todos os principais recursos do URLScan foram incorporados a um módulo chamado Filtragem de Solicitações e um recurso segmentos ocultos foi adicionado. Este artigo descreve cada recurso de Filtragem de Solicitações e fornece exemplos de como os recursos podem ser aplicados em seu ambiente.

Observe que o IIS também inclui um módulo para reescrita de URL. Há diferenças entre esses dois módulos: a filtragem de solicitações foi projetada e otimizada para cenários de segurança, enquanto a reescrita de URL pode ser aplicada a um amplo conjunto de cenários (cenários de segurança são apenas um subconjunto desses). Para obter mais informações sobre as diferenças, consulte [Filtragem de Solicitação do IIS 7.0 e superior e Reescrita de URL](extensions__url-rewrite-module__iis-request-filtering-and-url-rewriting.md).

## Filtrar solicitações duplamente codificadas

Esse recurso evita ataques que dependem de solicitações codificadas duas vezes e se aplica se um invasor envia uma solicitação de codificação dupla cuidadosamente criada para o IIS. Quando o filtro de solicitações codificadas duas vezes está habilitado, o IIS normaliza a URL duas vezes; se a primeira normalização for diferente da segunda, a solicitação será rejeitada e o código de erro registrado será 404.11. O filtro de solicitações codificadas duas vezes era a opção VerifyNormalization na UrlScan.

Se você não quiser que o IIS permita que solicitações codificadas duplicadas sejam atendidas, use o seguinte:

```
<configuration>
 <system.webServer> 
  <security>
   <requestFiltering
                  allowDoubleEscaping="false">
   </requestFiltering> 
  </security>
 </system.webServer>
</configuration>
```

## Filtrar caracteres de bits altos

Esse recurso permite ou rejeita todas as solicitações ao IIS que contêm caracteres não ASCII e registra o código de erro 404.12. O equivalente UrlScan é AllowHighBitCharacters.

Por exemplo, suponha que você queira permitir caracteres de bits altos para um aplicativo, mas não para todo o servidor. Defina allowHighBitCharacters="false" no arquivo ApplicationHost.config; mas dentro da raiz do aplicativo, crie um arquivo Web.config que permita que esse único aplicativo aceite caracteres não ASCII. No arquivo Web.config, use:

```
<configuration>
 <system.webServer>
  <security>
   <requestFiltering
                  allowHighBitCharacters="true"
            >
   </requestFiltering>
  </security>
 </system.webServer>
</configuration>
```

## Filtrar com base em extensões de arquivo

Esse recurso define um conjunto de extensões de arquivo permitidas que o IIS serve. Quando o IIS rejeita uma solicitação com base em extensões de arquivo, o código de erro registrado é 404.7. As opções AllowExtensions e DenyExtensions são os equivalentes urlScan.

Por exemplo, suponha que você queira permitir todos os tipos de arquivo, exceto arquivos ASP. Defina a opção allowUnlisted para fileExtensions como "true" e defina uma entrada de extensão de arquivo para negar explicitamente o ASP:

```
<configuration>
 <system.webServer>
  <security>
   <requestFiltering>
    <fileExtensions allowUnlisted="true" >
     <add fileExtension=".asp" allowed="false"/>
    </fileExtensions>
   </requestFiltering>
  </security>
 </system.webServer>
</configuration>
```

## Filtrar com base nos limites de solicitação

Esse filtro combina três recursos (que tinham os mesmos nomes na UrlScan):

- maxAllowedContentLength–limite superior do tamanho do conteúdo
- maxUrl–limite superior no comprimento de uma URL
- maxQueryString – limite superior do comprimento de uma string de consulta

Quando o IIS rejeita uma solicitação com base nos limites de solicitação, o código de erro registrado é:

- 413.1 se o conteúdo for muito longo.
- 404.14 se a URL for muito grande.
- 404.15 se a cadeia de caracteres de consulta for muito longa.

Por exemplo, é muito comum que as empresas comprem software ao qual não têm acesso ao código-fonte. Com o tempo, eles podem encontrar vulnerabilidades nesse código. Obter atualizações para o código afetado geralmente não é fácil. Os problemas são frequentemente causados por uma URL ou cadeia de caracteres de consulta que é muito longa ou por um excesso de conteúdo enviado a um aplicativo. Depois de determinar um limite superior seguro, você poderá aplicar limites usando a configuração abaixo, sem precisar corrigir os binários do aplicativo:

```
<configuration>
 <system.webServer>
  <security>
   <requestFiltering>
    <requestLimits
       maxAllowedContentLength="30000000"
       maxUrl="260"
       maxQueryString="25" 
                  />
   </requestFiltering>
  </security>
 </system.webServer>
</configuration>
```

## Filtrar por verbos

Esse recurso define uma lista de verbos que o IIS aceita como parte de uma solicitação. Quando o IIS rejeita uma solicitação com base nesse recurso, o código de erro registrado é 404.6. Isso corresponde às opções UseAllowVerbs, AllowVerbs e DenyVerbs no UrlScan.

Por exemplo, suponha que você só queira permitir apenas o verbo GET. Para definir isso, primeiro você deve bloquear a configuração para que nenhum verbo seja permitido definindo a opção allowUnlisted="false". Em seguida, liste os verbos que você deseja permitir explicitamente, nesse caso, GET.

```
<configuration>
 <system.webServer>
  <security>
   <requestFiltering>
    <verbs
       allowUnlisted="false"
                  >
     <add verb="GET" allowed="true" />
    </verbs>
   </requestFiltering>
  </security>
 </system.webServer>
</configuration>
```

## Filtrar com base em sequências de URL

Esse recurso define uma lista de sequências que o IIS rejeita quando faz parte de uma solicitação. Quando o IIS rejeita uma solicitação para esse recurso, o código de erro registrado é 404.5.Isso corresponde ao recurso DenyUrlSequences na UrlScan.

Esse é um recurso muito poderoso. Usando o código a seguir, você pode impedir que uma determinada sequência de caracteres seja atendida pelo IIS:

```
<configuration>
 <system.webServer>
  <security>
   <requestFiltering>
    <denyUrlSequences>
     <add sequence=".."/>
    </denyUrlSequences>
   </requestFiltering>
  </security>
 </system.webServer>
</configuration>
```

No exemplo anterior, o '..'. sequência é rejeitada. Suponha que você comprou um aplicativo de um fornecedor que saiu do negócio e descobriu que o aplicativo estava vulnerável quando uma determinada sequência de caracteres foi enviada para ele. Usando esse recurso, você pode proteger esse aplicativo simplesmente adicionando essa sequência de URL à lista negada sem precisar corrigir o código do aplicativo.

## Filtrar segmentos ocultos

Esse recurso permite que você defina quais segmentos são "servíveis". Quando o IIS rejeita uma solicitação com base nesse recurso, o código de erro registrado é 404.8. Esse recurso é novo no IIS 7 e superior; não fazia parte do UrlScan.

Considere o exemplo a seguir em que há duas URLs em um servidor:

**`http://site.com/bin`**

**`http://site.com/binary`**

Suponha que você queira permitir o conteúdo no diretório binário, mas não o conteúdo no diretório bin. Se você usar sequências de URL e rejeitar a sequência "bin", negará o acesso a ambas as URLs. Usando a configuração mostrada abaixo, você pode negar o acesso ao diretório bin, mas ainda assim ter o conteúdo binário servido.

```
<configuration>
 <system.webServer>
  <security>
   <requestFiltering>
    <hiddenSegments>
     <add segment="BIN"/>
    </hiddenSegments>
   </requestFiltering>
  </security>
 </system.webServer>
</configuration>
```

## Códigos de erro do IIS 7 e acima

Nas versões anteriores, você poderia usar o UrlScan em um nível global para definir as políticas de segurança que você queria impor em seus sistemas. Com o IIS 7 e superior, você ainda pode implementar essas políticas em um nível global, mas também por URL. Portanto, você pode aproveitar todos os benefícios que o novo modelo de delegação avançada oferece.

A tabela a seguir é um resumo dos códigos de erro dos logs do IIS:

| Erro | Códigos de status |
| --- | --- |
| **Site não encontrado** | 404.1 |
| **Negado pela política** | 404.2 |
| **Negado pela associação MIME** | 404.3 |
| **Nenhum manipulador** | 404.4 |
| **Filtragem de Solicitação: Sequência de URL negada** | 404.5 |
| **Filtragem de solicitação: Verbo negado** | 404.6 |
| **Filtragem de Solicitação: Extensão de arquivo negada** | 404.7 |
| **Filtragem de solicitação: negado por segmento oculto** | 404.8 |
| **Negado desde que o atributo de arquivo oculto foi definido** | 404.9 |
| **Filtragem de solicitação: negado devido à dupla codificação da URL** | 404.11 |
| **Filtragem de solicitação: negado devido a caracteres de bits altos** | 404.12 |
| **Filtragem de solicitação: negado porque a URL é muito longa** | 404.14 |
| **Filtragem de solicitação: negado porque a cadeia de caracteres de consulta é muito longa** | 404.15 |
| **Filtragem de solicitação: negado porque o comprimento do conteúdo é muito grande** | 413.1 |
| **Filtragem de solicitação: negado porque o cabeçalho da solicitação é muito longo** | 431 |

---

## Comentários

Esta página foi útil?

Sim

Não

Não

Precisa de ajuda com este tópico?

Quer experimentar o Pergunte e aprenda para esclarecer ou guiar você neste tópico?

Pergunte e aprenda

Pergunte e aprenda

 Sugerir uma correção?

---

## Recursos adicionais

---

- Última atualização em 
  2026-03-28

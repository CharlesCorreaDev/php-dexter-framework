# Configurar a Filtragem de Solicitações no IIS | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/configuring-security/configure-request-filtering-in-iis

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

# Configurar a Filtragem de Solicitações no IIS

Comentários

por [Keith Newman e Robert McMurray](https://github.com/rmcmurray)

Este documento mostra como usar configurações comuns de filtro de solicitação para melhorar a segurança do servidor Web do IIS 8.

Os filtros de solicitação restringem os tipos de solicitações HTTP que o IIS 8 processa. Ao bloquear solicitações HTTP específicas, os filtros de solicitação ajudam a impedir que solicitações potencialmente prejudiciais cheguem ao servidor. O módulo de filtro de solicitação examina as solicitações de entrada e rejeita solicitações indesejadas com base nas regras que você configurou.

Por padrão, o IIS rejeita solicitações para procurar segmentos de código críticos. Ele também rejeita solicitações para algumas extensões de nome de arquivo.

Você pode configurar um filtro de solicitação no nível de todo o servidor e, em seguida, substituir a configuração em um nível de site.

## Pré-requisitos

Para obter o máximo deste tutorial, você deve ter acesso a um computador que esteja executando um dos seguintes sistemas operacionais:

- Windows Server ® 2012
- Windows® 8

## Configurações gerais de filtro de solicitação

As configurações gerais incluem configurações como as seguintes:

1. Se deseja permitir o acesso a um arquivo com uma extensão que não está listada para filtro de solicitação.
2. Se deseja permitir solicitações que usam verbos HTTP que não estão listados.
3. Se deseja permitir solicitações que contêm caracteres de bits altos (não ASCII).
4. Se deseja permitir solicitações codificadas duas vezes.
5. Comprimento máximo do conteúdo solicitado.
6. Comprimento máximo do URL.
7. Tamanho máximo de uma cadeia de caracteres de consulta.

### Para configurar opções gerais de filtro de solicitação usando a interface do usuário

1. Abra o Gerenciador do IIS e selecione o nível para o qual você deseja configurar o filtro de solicitação.
2. No **Modo de Exibição de Recursos**, clique duas vezes em **Filtragem de Solicitações**.
3. No painel **Ações**, clique em **Editar Configurações de Funcionalidade**.
4. Na caixa de diálogo **Editar Configurações de Filtragem de Solicitação** , edite as configurações conforme desejado e clique em **OK**.

### Para configurar opções gerais de filtro de solicitação usando a linha de comando

#### Configurar caracteres de bit alto

Para configurar caracteres de bit alto, use a seguinte sintaxe:

`appcmd set config /section:requestfiltering /allowhighbitcharacters:`
*Verdade*`|`*False*

Por exemplo, para permitir caracteres de bits altos, digite o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:requestfiltering /allowhighbitcharacters:true`

#### Configurar o escape duplo

Para configurar o escape duplo, use a seguinte sintaxe:

`appcmd set config /section:requestfiltering /allowdoubleescaping:`
*Verdade*`|`*False*

Por exemplo, para habilitar o escape duplo, digite o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:requestfiltering /allowdoubleescaping:true`

#### Configurar o comprimento máximo de conteúdo permitido

Para configurar um valor para o tamanho máximo permitido do conteúdo, use a seguinte sintaxe:

`appcmd set config /section:requestfiltering /requestlimits.maxallowedcontentlength:`
*Unidade*

A variável `requestlimits.maxallowedcontentlength:`*unit* especifica o comprimento máximo do conteúdo.

Por exemplo, para especificar 30000000 como o comprimento máximo do conteúdo, digite o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:requestfiltering /requestlimits.maxallowedcontentlength:30000000`

#### Configurar o comprimento máximo de URL permitido

Para configurar um valor para o comprimento máximo permitido de uma URL de entrada, use a seguinte sintaxe:

`appcmd set config /section:requestfiltering /requestlimits.maxurl:`
*Unidade*

A `requestlimits.maxurl:` variável  especifica o comprimento máximo de uma URL de entrada.

Por exemplo, para especificar 4096 como o comprimento máximo da URL de entrada, digite o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:requestfiltering /requestlimits.maxurl:4096`

#### Configurar o comprimento máximo da cadeia de caracteres de consulta permitida

Para configurar um valor para o comprimento máximo permitido de uma cadeia de caracteres de consulta de entrada, use a seguinte sintaxe:

`appcmd set config /section:requestfiltering /requestlimits.maxquerystring:`
*Unidade*

A variável `requestlimits.maxquertystring:`*unit* especifica o comprimento máximo de uma string de consulta de entrada.

Por exemplo, para especificar 2048 como a cadeia de caracteres de consulta de entrada máxima, digite o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:requestfiltering /requestlimits.maxquerystring:2048`

#### Configurar o tamanho máximo para um cabeçalho HTTP

Para configurar um limite de tamanho para um cabeçalho HTTP específico, use a seguinte sintaxe:

`appcmd set config /section:requestfiltering /+requestlimits.headerLimits.[header='`
*String*`',sizelimit='`*Unidade*`']`

A variável `header=`*string* especifica o cabeçalho a que esta restrição se aplica. A variável `sizelimit=`*unidade* especifica o tamanho máximo deste cabeçalho.

Por exemplo, para especificar um tamanho máximo de 2048 para cabeçalhos que incluem um valor de contoso.com, digite o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:requestfiltering /+requestlimits.headerLimits.[header='contoso.com',sizelimit='2048']`

## Extensões de nome de arquivo

Para cada extensão de nome de arquivo que você adicionar, você pode indicar se deseja permitir ou rejeitar solicitações para esse tipo de arquivo.

### Para configurar extensões de nome de arquivo usando a interface do usuário

1. Abra o Gerenciador do IIS e selecione o nível para o qual você deseja configurar o filtro de solicitação.
2. No **Modo de Exibição de Recursos**, clique duas vezes em **Filtragem de Solicitações**.
3. Selecione a guia **Extensões de Nome de Arquivo** .
4. No painel **Ações** , clique em **Permitir Extensão de Nome de Arquivo** ou **Negar Extensão de Nome de Arquivo**.
5. Digite a extensão de nome de arquivo na caixa e clique em **OK**.

### Para configurar extensões de nome de arquivo usando a linha de comando

#### Configurar extensões de nome de arquivo não listadas

Para configurar como o IIS lida com extensões de nome de arquivo não listadas, use a seguinte sintaxe:

`appcmd set config /section:requestfiltering /fileExtensions.allowunlisted:`
*Verdade*`|`*False*

Por exemplo, para negar extensões de nome de arquivo não listadas, digite o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:requestfiltering /fileExtensions.allowunlisted:false`

#### Configurar para solicitações WebDAV

Para configurar se as extensões de nome de arquivo se aplicam a solicitações WebDAV, use a seguinte sintaxe:

`appcmd set config /section:requestfiltering /fileExtensions.applyToWebDAV:`
*Verdade*`|`*False*

Por exemplo, para configurar o IIS para que as extensões de nome de arquivo não se apliquem a solicitações WebDAV, digite o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:requestfiltering /fileExtensions.applyToWebDAV:false`

#### Adicionar ou remover uma extensão de nome de arquivo

Para adicionar uma extensão de nome de arquivo, use a seguinte sintaxe:

`appcmd set config /section:requestfiltering /+fileExtensions.[fileextension='`
*cadeia de caracteres*`',allowed='true | false']`

A cadeia de caracteres  é a extensão de nome de arquivo que você deseja permitir ou negar.

Por exemplo, para adicionar uma regra de permissão para a extensão de nome de arquivo .xxx, digite o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:requestfiltering /+fileExtensions.[fileextension='.xxx',allowed='true']`

Para remover uma regra para a extensão de nome de arquivo .xxx, digite o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:requestfiltering /-fileExtensions.[fileextension='.xxx']`

## Regras de filtragem

O IIS 8 permite que você defina regras de filtro personalizadas que se aplicam a solicitações de entrada. Usando esse recurso, você pode definir filtros que podem fazer o seguinte:

1. Examine a URL da solicitação.
2. Verifique se há cadeias de caracteres de consulta contidas na URL.
3. Verifique se há campos de cabeçalho específicos.
4. Defina a quais extensões de nome de arquivo o filtro se aplica.
5. Defina cadeias de caracteres que você deseja rejeitar.

### Para configurar uma regra de filtragem usando a interface do usuário

1. Abra o Gerenciador do IIS e selecione o nível para o qual você deseja configurar o filtro de solicitação.
2. No **Modo de Exibição de Recursos**, clique duas vezes em **Filtragem de Solicitações**.
3. Selecione a guia **Regras** .
4. No painel **Ações** , clique duas vezes em **Adicionar Regra de Filtragem**.
5. Na caixa **Nome** , digite um nome para a regra de filtragem.
6. Se você quiser que a URL seja digitalizada, marque a caixa de seleção **Scan Url**.
7. Se você quiser que a consulta seja digitalizada, marque a caixa de seleção **Digitalizar consulta**.
8. Em **Cabeçalhos de Verificação**, digite um ou mais cabeçalhos para verificar.
9. Em **Aplica-se a**, digite uma ou mais extensões de nome de arquivo às quais a regra se aplica.
10. Nas **Sequências de Negação**, digite uma ou mais sequências de caracteres que devem ser negadas.
11. Clique em **OK.**

## Segmentos ocultos

Esse recurso permite rejeitar solicitações que contêm um segmento de URL (por exemplo, um nome de pasta).

### Para configurar segmentos ocultos usando a interface do usuário da aplicação

1. Abra o Gerenciador do IIS e selecione o nível para o qual você deseja configurar o filtro de solicitação.
2. No **Modo de Exibição de Recursos**, clique duas vezes em **Filtragem de Solicitações**.
3. Selecione a guia **Segmentos Ocultos** .
4. No painel **Ações** , clique em **Adicionar Segmento Oculto**.
5. Digite o segmento de URL na caixa e clique em **OK**.

### Para configurar segmentos ocultos usando a linha de comando

#### Configurar para solicitações WebDAV

Para configurar se segmentos ocultos se aplicam a solicitações WebDAV, use a seguinte sintaxe:

`appcmd set config /section:requestfiltering /hiddensegments.applyToWebDAV:`
*Verdade*`|`*False*

Por exemplo, para configurar o IIS para que segmentos ocultos não se apliquem a solicitações WebDAV, digite o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:requestfiltering /hiddensegments.applyToWebDAV:false`

#### Adicionar um segmento oculto

Para configurar um segmento oculto, use a seguinte sintaxe:

`appcmd set config /section:requestfiltering /+hiddensegments.[segment='`
*cadeia de caracteres*`']`

A variável `segment=`*string* especifica um segmento de URL oculto.

Por exemplo, para especificar que /bin é um segmento oculto, digite o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:requestfiltering /+hiddensegments.[segment='/bin']`

## Filtro de URL

Você pode configurar o IIS para aceitar uma URL especificada. Além disso, você pode configurá-la para negar uma sequência de URL especificada.

### Para configurar a filtragem de URL usando a interface do usuário

1. Abra o Gerenciador do IIS e selecione o nível para o qual você deseja configurar o filtro de solicitação.
2. No **Modo de Exibição de Recursos**, clique duas vezes em **Filtragem de Solicitações**.
3. Selecione a **aba URL**.
4. No painel **Ações** , selecione **Permitir URL** ou **Negar Sequência**.
5. Digite a URL ou a sequência de URL na caixa e clique em **OK**.

### Para configurar a filtragem de URL usando a linha de comando

Para negar uma sequência de URL, use a seguinte sintaxe:

`appcmd set config /section:requestfiltering /+denyurlsequences.[sequence='`
*cadeia de caracteres*`']`

A variável `sequence=`*string* especifica uma sequência de caracteres em uma URL que o IIS nunca pode interpretar.

Por exemplo, para especificar que o IIS nunca analise URLs que contêm dois períodos, digite o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:requestfiltering /+denyurlsequences.[sequence='..']`

## Verbos HTTP

Você pode definir uma lista de verbos que o IIS 8 aceita como parte de uma solicitação. Quando o IIS rejeita uma solicitação com base nesse recurso, o código de erro registrado é 404.6.

### Para configurar verbos HTTP não listados usando a interface do usuário

1. Abra o Gerenciador do IIS e selecione o nível para o qual você deseja configurar o filtro de solicitação.
2. No **Modo de Exibição de Recursos**, clique duas vezes em **Filtragem de Solicitações**.
3. Selecione a guia **Verbos HTTP**.
4. No painel **Ações** , clique em **Permitir Verbo** ou **Negar Verbo**.
5. Insira o verbo na caixa e clique em **OK**.

### Para configurar verbos HTTP não listados usando a linha de comando

#### Configurar verbos HTTP não listados

Para configurar como o IIS lida com verbos não listados, use a seguinte sintaxe:

`appcmd set config /section:requestfiltering /verbs.allowunlisted:`
*Verdade*`|`*False*

Por exemplo, para negar verbos não listados, digite o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:requestfiltering /verbs.allowunlisted:false`

#### Configurar para solicitações WebDAV

Para configurar se a filtragem de verbo se aplica a solicitações WebDAV, use a seguinte sintaxe:

`appcmd set config /section:requestfiltering /verbs.applyToWebDAV:`
*Verdade*`|`*False*

Por exemplo, para configurar o IIS para que a filtragem de verbo não se aplique a solicitações WebDAV, digite o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:requestfiltering /verbs.applyToWebDAV:false`

#### Adicionar um verbo HTTP

Para configurar um verbo para filtrar, use a seguinte sintaxe:

`appcmd set config /section:requestfiltering /+verbs.[verb='`
*String*`',allowed='`*Verdade*`|`*False*`']`

A variável `verb=`*string* especifica o verbo ao qual essa restrição se aplica.

Por exemplo, para especificar que o método GET é permitido, digite o seguinte no prompt de comando e pressione ENTER:

`appcmd set config /section:requestfiltering /+verbs.[verb='GET',allowed='true']`

## Limites de tamanho do cabeçalho

Você pode limitar o tamanho dos cabeçalhos de solicitação HTTP para melhorar o desempenho e a segurança. Cabeçalhos são pares nome/valor que definem os parâmetros operacionais de uma transação HTTP.

### Para configurar os limites de tamanho do cabeçalho usando a interface do usuário

1. Abra o Gerenciador do IIS e selecione o nível para o qual você deseja configurar o filtro de solicitação.
2. No **Modo de Exibição de Recursos**, clique duas vezes em **Filtragem de Solicitações**.
3. Selecione a guia **Cabeçalhos** e clique **em Adicionar Cabeçalho**.
4. Na caixa **Cabeçalho** , digite o nome do campo de cabeçalho.
5. Na caixa **Limite de Tamanho** , digite um inteiro positivo que representa o limite de tamanho do cabeçalho em bytes.
6. Clique em **OK.**

## Cadeias de caracteres de consulta

Você pode configurar o IIS 8 para permitir ou negar cadeias de caracteres de consulta específicas contidas na URL solicitada. Por exemplo, se uma cadeia de caracteres de consulta negada for encontrada em uma URL de solicitação, a solicitação será negada.

### Para configurar cadeias de caracteres de consulta usando a interface do usuário

1. Abra o Gerenciador do IIS e selecione o nível em que você deseja configurar a filtragem de solicitações.
2. No **Modo de Exibição de Recursos**, clique duas vezes em **Filtragem de Solicitações**.
3. Selecione a guia **Cadeias de Consulta** e clique em **Permitir Cadeia de Consulta** ou **Negar Cadeia de Consulta**.
4. Na caixa **Cadeia de caracteres de consulta**, digite a cadeia de caracteres de consulta.
5. Clique em **OK.**

## Registro em log de filtro de solicitação

Você pode usar o registro em log do IIS para avaliar e otimizar a configuração do filtro de solicitação.

A tabela a seguir mostra os códigos de erro de filtro de solicitação que você vê no log:

| Descrição do erro | Código de Status |
| --- | --- |
| Filtragem de Solicitação: Sequência de URL negada | 404.5 |
| Filtragem de solicitação: Verbo negado | 404.6 |
| Filtragem de Solicitação: Extensão de nome de arquivo negada | 404.7 |
| Filtragem de solicitação: negado por segmento oculto | 404.8 |
| Filtragem de solicitação: foi negado porque a URL tinha escape duplo | 404.11 |
| Filtragem de solicitação: negado devido a caracteres de bits altos | 404.12 |
| Filtragem de solicitação: negado porque a URL é muito longa | 404.14 |
| Filtragem de solicitação: negado porque a cadeia de caracteres de consulta é muito longa | 404.15 |
| Filtragem de solicitação: negado porque o comprimento do conteúdo é muito grande | 413.1 |
| Filtragem de Solicitação: negado porque o cabeçalho da solicitação é muito longo. | 431 |

## Consulte Também

- [Criar um site de ASP.NET no IIS](application-frameworks__scenario-build-an-aspnet-website-on-iis__overview-build-an-asp-net-website-on-iis.md)
- [Criar um site asp clássico no IIS](application-frameworks__running-classic-asp-applications-on-iis-7-and-iis-8__scenario-build-a-classic-asp-website-on-iis.md)
- [Criar um site estático no IIS](manage__creating-websites__scenario-build-a-static-website-on-iis.md)
- [Criar um site FTP no IIS](publish__using-the-ftp-service__scenario-build-an-ftp-site-on-iis.md)
- [Criar uma fazenda web com servidores IIS](web-hosting__scenario-build-a-web-farm-with-iis-servers__overview-build-a-web-farm-with-iis-servers.md)
- [Hosting-Friendly IIS (Web Server Platform): Visão geral do cenário](get-started__introduction-to-iis__hosting-friendly-web-server-platform-iis-scenario-overview.md)

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
  2026-03-27

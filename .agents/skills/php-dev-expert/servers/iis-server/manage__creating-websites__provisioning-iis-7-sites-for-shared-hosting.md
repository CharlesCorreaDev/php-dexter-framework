# Provisionando sites do IIS 7 para hospedagem compartilhada | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/creating-websites/provisioning-iis-7-sites-for-shared-hosting

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

# Provisionando sites do IIS 7 para hospedagem compartilhada

Comentários

por [Walter Oliver](https://github.com/walterov)

Os artigos a seguir contêm recomendações para provisionamento de sites em ambientes de hospedagem compartilhada.

## Configuração de registro em log e diagnósticos

### Visão geral

O IIS 7 fornece a mesma atividade de site ou registro de tráfego que o IIS 6.0, mas inclui o novo recurso de rastreamento de solicitações com falha. O rastreamento baseado em solicitação fornece uma maneira de determinar o que está acontecendo com uma solicitação, permitindo que você veja cada etapa da solicitação à medida que o IIS a processa.

Problemas, como desempenho ruim ou falhas de autenticação, ou até mesmo o Erro 500 do Servidor do ASP ou ASP.NET, podem ser difíceis de resolver. Rastreamento de Solicitação com Falha armazena os eventos de rastreamento de uma solicitação em buffer e os grava no disco quando ocorre uma falha. O administrador do servidor define uma falha usando as regras de rastreamento. As regras de rastreamento podem ser tão amplas quanto incluir todos os códigos de status e conteúdo, ou tão específicas quanto um único código de status e substatus, como 404.2.

Para hospedagem compartilhada, é recomendável delegar o Rastreamento de Solicitação com Falha aos proprietários do site, permitindo que os proprietários do site determinem problemas com seus sites, o que ajuda a impedir chamadas de suporte. Você pode armazenar os logs de rastreamento na pasta logs\FailedRequestLogFiles, conforme discutido no tópico [Configurando permissões de Compartilhamento e NTFS](web-hosting__configuring-servers-in-the-windows-web-platform__configuring-share-and-ntfs-permissions.md) na seção [Configurando um Servidor de Arquivos Remoto para Armazenamento de Conteúdo](web-hosting__configuring-servers-in-the-windows-web-platform.md) .

### Configurando procedimentos

#### Rastreamento de solicitação com falha

Para configurar o local do arquivo de log de Rastreamento de Solicitações com Falha usando a linha de comando, use o seguinte:

- Abra um prompt de comando e execute o seguinte:

```
%windir%\system32\inetsrv\AppCmd set config <sitename> -section:traceFailedRequestsLogging.directory:\\remotefileserver\content$\<sitename>\logs\failedRequestLogfiles
```

Também é recomendável que você configure todos os campos de log para o W3SVC. Talvez você precise das informações de log do W3SVC quando ocorrer um problema.

Para obter mais informações sobre o rastreamento de solicitação com falha, consulte o [passo a passo de rastreamento de solicitação com falha](troubleshoot__using-failed-request-tracing__how-to-enable-failed-request-tracing-for-unc-hosting.md).

#### Local do arquivo de log

Para configurar o local do arquivo de log do W3SVC usando a linha de comando, use o seguinte **:**

- Abra um prompt de comando e execute o seguinte:

```
%windir%\system32\inetsrv\AppCmd set config <sitename> -section:-logfile.directory:\\remotefileserver\content$\<sitename>\logs\logfiles
```

Para obter mais informações sobre diagnóstico, consulte [Solucionar problemas de um erro de servidor Web.](troubleshoot.md)

## Habilitando um usuário de administração delegada

O Gerenciador do IIS permite que aqueles que hospedam ou administram sites delegam controle administrativo a desenvolvedores ou proprietários de conteúdo, reduzindo, assim, o custo de propriedade e a carga administrativa para o administrador do servidor.

### Procedure

Para habilitar um usuário delegado para um site usando o Gerenciador do IIS, use as seguintes etapas **:**

1. Navegue até **Ferramentas Administrativas** e clique no **Gerenciador dos Serviços de Informações da Internet (IIS**).
2. Expanda o nó de nome do servidor.
3. Expanda o nó Sites.
4. Clique duas vezes no nome do site no qual você deseja habilitar o usuário.
5. Clique duas vezes no ícone **de Permissões do Gerenciador do IIS** .
6. No painel **Ações** , clique em **Permitir Usuário...**.
7. Na caixa de diálogo **Permitir Usuário** , escolha se deseja usar um usuário do Windows ou um usuário do IIS Manager. Nesse caso, selecione um usuário do Windows, digite o nome e clique em **OK**.

Para obter mais informações sobre delegação, acesse a visão geral [de Configuração de Administração Remota e Delegação de Recursos](manage__remote-administration__configuring-remote-administration-and-feature-delegation-in-iis-7.md) .

## Isolando sites com pools de aplicativos

Cada aplicativo, que reside em seu próprio pool de aplicativos e configurado com uma identidade de processo exclusiva, oferece o nível mais alto de isolamento. Cada aplicativo tem seu próprio processo e, se o aplicativo parar de responder, não poderá afetar outros sites no servidor. Por esses motivos, recomendamos essa configuração para um ambiente de hospedagem compartilhado.

### Melhorias do IIS 7

O IIS 7 apresenta um serviço de isolamento de configuração que impede que os pools de aplicativos tenham que acessar o arquivo applicationHost.config. Quando iniciado, o IIS 7 lê o arquivo applicationHost.config e grava um arquivo temporário para cada pool de aplicativos que contém a configuração desse pool. O processo de trabalho só tem acesso a esse arquivo e não a outros arquivos de configuração do pool. Esse recurso fornece melhorias de desempenho e segurança aprimoradas.

Para obter informações sobre pools de aplicativos, consulte [Introdução à arquitetura do IIS 7](get-started__introduction-to-iis__introduction-to-iis-architecture.md) na seção "Pools de Aplicativos do IIS 7".

## Configurando ASP.NET diretórios de compilação temporária

### Código do diretório

Por padrão, o diretório de compilação temporária é:

```
"%windir%\Microsoft.NET\Framework\{version}\Temporary ASP.NET Files"
```

Esse diretório contém todos os arquivos temporários gerados por ASP.NET. Esse diretório é compartilhado entre todos os pools de aplicativos. Se vários pools de aplicativos mutuamente não confiáveis coexistirem no mesmo host, o administrador do host deverá configurar um diretório de compilação separado para cada pool de aplicativos.

### Criando e definindo o diretório

Para criar e definir um diretório de compilação temporário exclusivo, use o seguinte:

1. Abra um prompt de comando e execute o seguinte comando para criar uma pasta e definir permissões:

   ```
   md %systemdrive%\inetpub\tempcompilation\aspnettemp\<sitename>

   cacls %systemdrive%\inetpub\tempcompilation\aspnettemp\<sitename> /G AppPoolUsername:F Administrators:F System:F
   ```
2. Execute o seguinte comando para definir o diretório de compilação temporária para um site:

   ```
   %windir%\system32\inetsrv\appcmd set config "<sitename>" -section:compilation -tempDirectory:%systemdrive%\inetpub\tempcompilation\aspnettemp\site%1 /commit:webroot
   ```

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

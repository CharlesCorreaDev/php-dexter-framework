# Visão geral dos módulos do IIS | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/introduction-to-iis/iis-modules-overview

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

# Visão geral dos módulos do IIS

Comentários

por Equipe do IIS, [Mike Volodarsky](https://github.com/leanserver)

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 7.0 e posterior | Os recursos descritos neste artigo foram introduzidos no IIS 7.0. |
| IIS 6.0 e anterior | Os recursos descritos neste artigo não tinham suporte antes do IIS 7.0. |

## Introdução

O conjunto de recursos do servidor Web do IIS 7 e acima é dividido em componentes, em mais de trinta módulos independentes.

Um módulo é uma DLL Win32 (módulo nativo) ou um tipo .NET 2.0 contido em um assembly (módulo gerenciado). Semelhante a um conjunto de blocos de construção, os módulos são adicionados ao servidor para fornecer a funcionalidade desejada para seus aplicativos. Da mesma forma, todos os módulos do IIS podem ser removidos ou substituídos por módulos personalizados desenvolvidos usando as APIs do IIS C++ ou as APIs familiares ASP.NET 2.0.

Este artigo descreve tarefas comuns de gerenciamento de módulo do IIS e detalha cada módulo, incluindo suas configurações e o potencial efeito que uma remoção de módulo tem no servidor Web. Os exemplos de gerenciamento são dados usando o Gerenciador de IIS gráfico e a ferramenta de linha de comando **AppCmd** .

## Pré-requisitos

Para seguir as etapas neste documento, é melhor fazer uma instalação completa do IIS.

Observação

Nem todas as edições do Windows dão suporte a todos os recursos do IIS disponíveis. Para ver quais recursos do IIS têm suporte em seu sistema operacional, você precisará consultar a documentação fornecida com sua versão do Windows.

### Para executar uma instalação completa do IIS no Windows Vista, Windows 7, Windows 8, Windows 10 ou Windows 11

1. Clique **em Iniciar** e clique em **Painel de Controle**.
2. No **Painel de Controle**, clique em **Programas**.
3. Em **Programas e Recursos**, clique **em Ativar ou Desativar recursos do Windows**.
4. Na caixa de diálogo **Recursos do Windows** , expanda **os Serviços de Informações da Internet** e selecione todos os recursos.  
   Talvez seja necessário expandir algumas categorias para selecionar todos os recursos nessa categoria.
5. Clique em **OK.**

### Para executar uma instalação completa do IIS no Windows Server 2008/R2, no Windows Server 2012/R2 ou no Windows Server 2016

1. Abra o **Gerenciador de Servidores**>**Funções** e selecione o **Servidor Web (IIS)**.
2. Verifique todos os recursos no **Servidor Web**.

## Introdução aos módulos

Para adicionar um módulo ao servidor, você deve executar duas etapas:

1. Instale um módulo no servidor (somente módulos nativos).
2. Habilite o módulo em um aplicativo.

A primeira etapa registra o módulo globalmente com o servidor, disponibilizando-o em cada processo de trabalho do servidor. É necessário apenas para módulos nativos devido à natureza confiável do código nativo e está disponível apenas para os administradores.

Observação

Um módulo nativo tem acesso irrestrito a qualquer recurso disponível para o processo de trabalho do servidor, assim como um filtro ISAPI ou extensão em versões anteriores. Devido a esse acesso irrestrito, você deve instalar apenas módulos nativos provenientes de uma fonte confiável.

A segunda etapa permite que o módulo seja executado em um aplicativo específico e efetivamente permite que o administrador do aplicativo controle os recursos do servidor habilitados para o aplicativo. Esta etapa permite que módulos nativos instalados e módulos gerenciados sejam habilitados para cada aplicativo.

### Para instalar um módulo nativo

Para instalar um módulo nativo, ele deve ser registrado no servidor usando uma das opções abaixo:

- Editando manualmente o repositório de configuração do IIS. No IIS 7.5 e posterior, você pode usar o Editor de Configuração no Gerenciador do IIS.
- Usando o Gerenciador do IIS
- Usando a ferramenta de linha de comando **AppCmd.exe**

Todas essas três opções resultam na entrada do módulo sendo adicionada à <seção de configuração globalModules> IIS, que pode ser definida apenas no nível do servidor. Para examinar o conteúdo desta seção, abra o arquivo de configuração raiz localizado `%windir%\system32\inetsrv\config\applicationhost.config`e pesquise a cadeia de caracteres "<globalModules>".

Após uma instalação completa do IIS, esta seção contém uma entrada para cada um dos módulos nativos enviados com o IIS, especificando um nome e o caminho para a DLL do módulo:

```
<globalModules>
    <add name="DefaultDocumentModule" image="%windir%\system32\inetsrv\defdoc.dll" />
    <add name="DirectoryListingModule" image="%windir%\system32\inetsrv\dirlist.dll" />
    <add name="StaticFileModule" image="%windir%\system32\inetsrv\static.dll" />
    ...

</globalModules>
```

Todos esses módulos são descritos em detalhes mais adiante neste documento.

### Para desinstalar um módulo nativo

Você pode desinstalar um módulo nativo se esse módulo não estiver mais em uso no servidor ou se quiser substituí-lo por outro módulo. Remova a entrada correspondente do módulo na lista de configuração globalModules > e a entrada associada na lista de configuração `<modules>`, usando uma das seguintes opções:

- Editando manualmente o repositório de configuração do IIS. No IIS 7.5 e superior, você pode usar o Editor de Configuração.
- Usando o Gerenciador do IIS
- Usando a ferramenta de linha de comando **AppCmd.exe**

Observação

Visto que a <seção de configuração globalModules> pode ser definida apenas no nível do servidor, você deve ser um administrador para desinstalar um módulo.

### Habilitando um módulo para um aplicativo

Um módulo deve ser habilitado antes de fornecer serviço para um aplicativo específico. Para habilitar um módulo nativo, ele deve primeiro ser instalado no servidor (consulte a seção anterior, [Para instalar um módulo nativo](#install_native)).

Um módulo gerenciado não requer instalação e pode ser habilitado diretamente para cada aplicativo. Isso permite que os aplicativos incluam seus módulos gerenciados diretamente no aplicativo registrando-os no arquivo web.config do aplicativo e fornecendo a implementação em diretórios /BIN ou /App\_Code.

Para habilitar um módulo, siga um destes procedimentos:

- Edite manualmente o repositório de configuração do IIS, globalmente para habilitar o módulo para todos os aplicativos no servidor ou em um arquivo web.config específico localizado em cada aplicativo para o qual você gostaria de habilitar este módulo. No IIS 7.5 ou superior, você pode usar o Editor de Configuração.
- Usar o Gerenciador do IIS
- Usar a ferramenta de linha de comando **AppCmd.exe**

Todas essas três opções adicionam a entrada do módulo à seção de configuração do `<modules>` IIS, que pode ser definida no nível do servidor e do aplicativo. Examine o conteúdo desta seção abrindo o arquivo de configuração raiz localizado `%windir%\system32\inetsrv\config\applicationhost.config`e pesquisando a cadeia de caracteres "<módulos>".

Ao contrário dos módulos nativos, um módulo gerenciado não requer adicionar uma entrada à seção de configuração <globalModules>.

Após uma instalação completa do IIS, a seção de configuração contém uma entrada para cada um dos módulos (gerenciados e nativos) que foram enviados com o IIS. A entrada indica que todos esses módulos estão habilitados por padrão para todos os aplicativos no servidor. Cada entrada nesta seção especifica o nome de um módulo nativo que foi instalado anteriormente no servidor ou o nome e o tipo .NET de um módulo gerenciado:

```
<modules>
<add name="DefaultDocumentModule" />
<add name="DirectoryListingModule" />
<add name="StaticFileModule"/>
 ...

</modules>
```

### Desabilitando um módulo em um aplicativo

Desabilite um módulo se esse módulo não estiver mais em uso no aplicativo ou se você quiser substituí-lo por outro módulo. Para desabilitar um módulo, remova a entrada de módulo correspondente da coleção de `<modules>` configuração de um aplicativo específico em que você não deseja que este módulo seja executado. Se o módulo estiver habilitado no nível do servidor, remova-o para desabilitá-lo em todos os aplicativos no servidor por padrão. Use uma das seguintes opções para remover o módulo no nível do servidor:

- Edite a seção de configuração <system.webServer>/<modules> manualmente em seu aplicativo.
- Use o Gerenciador do IIS.
- Use a ferramenta de linha de comando **AppCmd.exe** .

Depois que o módulo for removido do aplicativo, ele não estará ativo nesse aplicativo. No entanto, se o módulo for nativo, ele ainda será carregado no processo de trabalho do servidor e poderá ser usado por outros aplicativos que não o removeram.

Observação

A seção de configuração será desbloqueada por padrão se ASP.NET estiver instalado. Esse desbloqueio padrão permite que os aplicativos desabilitem módulos nativos e gerenciados habilitados globalmente e adicionem novos módulos gerenciados. Esta seção de configuração pode ser bloqueada no nível do servidor para impedir totalmente a modificação ou impedir a remoção de entradas de módulo específicas, se desejado pelo Administrador.

## Pré-condições

Há outro atributo em uma entrada de módulo chamada pré-condição. O mecanismo principal do IIS usa pré-condições para determinar quando habilitar um módulo específico. Os motivos de desempenho, por exemplo, podem determinar que você só deseja executar módulos gerenciados para solicitações que também vão para um manipulador gerenciado. A pré-condição no exemplo a seguir (precondition="managedHandler") habilita apenas o módulo de autenticação de formulários para solicitações que também são tratadas por um manipulador gerenciado, como solicitações para .aspx ou arquivos .asmx:

```
<add name="FormsAuthentication"type="System.Web.Security.FormsAuthenticationModule" preCondition="managedHandler" />
```

Se você remover o atributo precondition="managedHandler", a Autenticação de Formulários também se aplicará ao conteúdo que não é atendido por manipuladores gerenciados, como extensões .html, .jpg, .doc, mas também para extensões ASP clássicas (.asp) ou PHP (.php). Consulte "[Como aproveitar o pipeline integrado do IIS](application-frameworks__building-and-running-aspnet-applications__how-to-take-advantage-of-the-iis-integrated-pipeline.md)" para obter um exemplo de como habilitar módulos ASP.NET para serem executados para todo o conteúdo.

Você também pode usar um atalho para habilitar todos os módulos gerenciados (ASP.NET) a serem executados para todas as solicitações em seu aplicativo, independentemente da pré-condição "managedHandler". Para habilitar todos os módulos gerenciados a serem executados para todas as solicitações sem configurar cada entrada de módulo para remover a pré-condição "managedHandler", use a propriedade **runAllManagedModulesForAllRequests** na `<modules>` seção:

```
<modules runAllManagedModulesForAllRequests="true"/>
```

Quando você usa essa propriedade, a pré-condição "managedHandler" não tem efeito e todos os módulos gerenciados são executados para todas as solicitações.

## Consultando, adicionando e removendo módulos usando o Gerenciador do IIS

O Gerenciador do IIS fornece uma maneira fácil de consultar, adicionar ou remover módulos.

1. Para abrir o Gerenciador do IIS, clique em **Iniciar**, digite **inetmgr** na caixa **Pesquisar** e pressione ENTER.
2. Clique no nome do computador do servidor IIS.
3. Clique no ícone **Módulos** na categoria **IIS** .

[![Gerenciador do IIS](iis-modules-overview/_static/image2.jpg)](https://learn.microsoft.com/pt-br/iis/get-started/introduction-to-iis/iis-modules-overview/_static/image1.jpg)

**Figura 1: Gerenciador do IIS**

### Para gerenciar os módulos habilitados para um aplicativo específico

1. Conecte-se a esse aplicativo usando o modo de exibição de árvore à esquerda.
2. Navegue até o painel de funções Módulos.
3. Clique em **Adicionar Módulo Gerenciado** para adicionar um Módulo Gerenciado ao seu aplicativo.
   **Adicionar o Módulo Nativo** só permite adicionar um módulo que já está registrado no nível do servidor.

### Para remover um módulo do aplicativo

1. Clique no módulo na lista. A tarefa **Remover** é exibida no painel esquerdo.
2. Clique em **Remover**.

[![Lista de módulos no Gerenciador do IIS](iis-modules-overview/_static/image4.jpg)](https://learn.microsoft.com/pt-br/iis/get-started/introduction-to-iis/iis-modules-overview/_static/image3.jpg)

**Figura 2: Lista de módulos no Gerenciador do IIS**

## Gerenciando módulos da linha de comando

Para gerenciar rapidamente módulos da linha de comando ou tarefas de gerenciamento de módulo de script, use a ferramenta de linha de comando **AppCmd.exe** .

### Para instalar um módulo usando AppCmd.exe

No Prompt de Comando, digite o comando a seguir, substituindo valores em itálico pelos valores do módulo em seu computador.

```
Appcmd.exe install module /name:MODULE_NAME /image:PATH_TO_DLL
```

Observação

A instalação de um módulo nativo o habilita automaticamente no nível do servidor.

Por exemplo, o comando a seguir instala o módulo Documento Padrão.

```
%windir%\system32\inetsrv\appcmd.exe install module /name:DefaultDocumentModule /image:%windir%\system32\inetsrv\defdoc.dll
```

Se você executar o comando em um computador em que o módulo já está carregado, receberá uma mensagem de erro semelhante à seguinte:

ERROR (mensagem: Falha ao adicionar elemento duplicado à coleção "DefaultDocumentModule".)

### Para desinstalar um módulo usando AppCmd.exe

No Prompt de Comando, digite o comando a seguir, substituindo valores em itálico pelos valores do módulo em seu computador.

```
Appcmd.exe uninstall module MODULE_NAME
```

Observação

Desinstalar um módulo desabilita-o automaticamente no nível do servidor.

Por exemplo, o comando a seguir desinstala o módulo Documento Padrão. Esse comando é fornecido apenas como exemplo. Você só deve executá-lo em um servidor de teste.

```
%windir%\system32\inetsrv\appcmd.exe uninstall module DefaultDocumentModule
```

### Para listar os módulos habilitados para um aplicativo ou globalmente

No Prompt de Comando, digite o comando a seguir, substituindo valores no texto itálico pelos valores do módulo em seu computador.

```
Appcmd.exe list modules [/app.name:APPLICATION_NAME]
```

Por exemplo, o comando a seguir lista os módulos habilitados para o Site Padrão.

```
%windir%\system32\inetsrv\appcmd.exe list modules /app.name:"Default Web Site"
```

E esse comando lista os módulos instalados globalmente.

```
%windir%\system32\inetsrv\appcmd.exe list modules
```

### Para habilitar um módulo para um aplicativo específico ou globalmente

No Prompt de Comando, digite o comando a seguir, substituindo valores no texto itálico pelos valores do módulo em seu computador.

```
Appcmd.exe add module /name:MODULE_NAME /type:MGD_TYPE
```

Por exemplo, o comando a seguir adiciona o módulo Autenticação de Formulários ao Site Padrão.

```
%windir%\system32\inetsrv\appcmd.exe add module /name:FormsAuthentication /type:System.Web.Security.FormsAuthenticationModule /app.name:"Default Web Site"
```

E esse comando adiciona o Módulo de Autenticação de Formulários globalmente.

```
%windir%\system32\inetsrv\appcmd.exe add module /name:FormsAuthentication /type:System.Web.Security.FormsAuthenticationModule
```

### Para desabilitar um módulo para um aplicativo específico ou globalmente

No Prompt de Comando, digite o comando a seguir, substituindo valores no texto itálico pelos valores do módulo em seu computador.

```
Appcmd.exe delete module MODULE_NAME [/app.name:APPLICATION_NAME]
```

Por exemplo, o comando a seguir remove o módulo Autenticação de Formulários do Site Padrão.

```
%windir%\system32\inetsrv\appcmd.exe delete module FormsAuthentication /app.name:"Default Web Site"
```

E esse comando remove o Módulo de Autenticação de Formulários globalmente.

```
%windir%\system32\inetsrv\appcmd.exe delete module FormsAuthentication
```

### Para obter mais ajuda sobre a sintaxe de cada um dos comandos do App Cmd.exe

Para exibir os comandos com suporte no objeto Module, digite o seguinte comando:

```
Appcmd.exe module /?
```

Para exibir o uso de cada comando, digite o seguinte comando:

```
Appcmd.exe install module /?Appcmd add module /?
```

## Referência do módulo

O servidor IIS está pronto para personalização. Leia a lista a seguir com cuidado para evitar efeitos colaterais, perda de recursos ou remoção de recursos de segurança.

### Módulos utilitários

Esses módulos não fornecem serviços de solicitação, mas auxiliam o mecanismo de servidor com sua operação interna.

| **Nome do módulo:** | **UriCacheModule** |
| --- | --- |
| Descrição: | Implementa um cache genérico para o estado do servidor específico da URL, como a configuração. Com este módulo, o servidor lê apenas a configuração da primeira solicitação de uma URL específica e reutiliza-a em solicitações subsequentes até que ela seja alterada. |
| Seções de configuração: | Nenhum. |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Perda de desempenho devido ao armazenamento em cache do estado para cada solicitação de recuperação de URL. |
| **Nome do módulo:** | **FileCacheModule** |
| Descrição: | Armazena em cache identificadores de arquivo para arquivos abertos pelo mecanismo de servidor e módulos. |
| Seções de configuração: | Nenhum. |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Perda de desempenho. Se os identificadores de arquivo não forem armazenados em cache, os arquivos deverão ser abertos para cada solicitação. |
| **Nome do módulo:** | **TokenCacheModule** |
| Descrição: | Armazena em cache tokens de segurança do Windows para esquemas de autenticação baseados em senha (autenticação anônima, autenticação básica, autenticação de certificado de cliente do IIS). |
| Seções de configuração: | Nenhum. |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Perda de desempenho. Os usuários devem estar conectados para cada solicitação se o token não estiver armazenado em cache. Pode haver um grande impacto no desempenho. Por exemplo, se uma página html protegida por senha fizer referência a 50 imagens que também estão protegidas, 51 chamadas de logonUser para o banco de dados da conta local ou pior, para um controlador de domínio off-box, resultarão em um problema de desempenho. |
| **Nome do módulo:** | **ManagedEngine** |
| Descrição: | O Mecanismo Gerenciado tem um lugar especial em todos os outros módulos. Ele é responsável por fornecer a integração do IIS para conectar-se ao runtime do ASP.NET. |
| Seções de configuração: |  |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | ASP.NET integração será desabilitada. Nenhum dos módulos gerenciados declarados no `<modules>` ou ASP.NET manipuladores declarados na `<handlers>` seção são chamados quando o Pool de Aplicativos é executado no Modo Integrado. |
| **Nome do módulo:** | **HttpCacheModule** |
| Descrição: | O HttpCacheModule implementa o cache de saída do IIS e também a lógica para armazenar itens em cache no cache http.sys. Defina o tamanho do cache, os perfis de cache de saída etc. por meio da configuração. |
| Seções de configuração: | System.webServer/cache |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | O conteúdo não será mais armazenado em cache no modo kernel. Os perfis de cache são ignorados. A remoção do HttpCacheModule provavelmente terá efeitos adversos sobre o desempenho e o uso de recursos. |
| **Nome do módulo:** | **DynamicCompressionModule** |
| Descrição: | Implementa a compactação na memória do conteúdo dinâmico. |
| Seções de configuração: | system.webServer/httpCompression e system.webServer/urlCompression. |
| Dependências: | Não haverá dependências porque a compactação dinâmica está desativada por padrão. |
| **Nome do módulo:** | **StaticCompressionModule** |
| Descrição: | Implementa a compactação (na memória, bem como persistente no sistema de arquivos) de conteúdo estático. |
| Seções de configuração: | system.webServer/httpCompression e system.webServer/urlCompression |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Saturação potencial de largura de banda devido ao conteúdo não comprimido que está sendo enviado de volta ao cliente. |
| **Nome do módulo:** | **DefaultDocumentModule** |
| Descrição: | Implementa a funcionalidade de documento padrão. As solicitações que chegam com uma barra final (/) serão redirecionadas para um documento na lista padrão de documentos. |
| Seções de configuração: | system.webServer/defaultDocument |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Solicitações para /, por exemplo `http://localhost/`, retornam um erro 404. Se o browsing de diretório estiver habilitado, uma listagem de diretório será gerada. |
| **Nome do módulo:** | **DirectoryListingModule** |
| Descrição: | Implementa a funcionalidade de navegação de diretório. |
| Seções de configuração: | system.webServer/directoryBrowse |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Se nem o módulo de documento padrão nem o módulo de listagem de diretórios manipularem uma solicitação para um /, uma resposta vazia é retornada. |
| **Nome do módulo:** | **ProtocolSupportModule** |
| Descrição: | Implementa cabeçalhos de resposta personalizados e cabeçalhos de resposta de redirecionamento. Implementa os verbos HTTP Trace e Options. Implementa os suportes que permitem ou desativam o suporte de keep-alive por meio da configuração. |
| Seções de configuração: | system.webServer/httpProtocol |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | As solicitações TRACE ou OPTIONS retornam uma mensagem de erro "Método 405 não permitido". |
| **Nome do módulo:** | **HttpRedirectionModule** |
| Descrição: | Implementa a funcionalidade de redirecionamento. |
| Seções de configuração: | system.webServer/httpRedirect |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Possível problema de segurança se os recursos foram protegidos por redirecionamento. Quando o módulo Redirecionamento é removido, o conteúdo fica acessível novamente. |
| **Nome do módulo:** | **ServerSideIncludeModule** |
| Descrição: | Implementa o lado do servidor inclui. Este módulo é mapeado como um manipulador, executando apenas para solicitações que terminam em .stm, .shtm e .shtml. |
| Seções de configuração: | system.webServer/serverSideInclude |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | O módulo de arquivos estáticos processa arquivos .stm, .shtm e .shtml. Se este módulo tiver um mimeMap para essas extensões, os arquivos serão servidos como texto. No entanto, observe que esse não é o padrão. |
| **Nome do módulo:** | **StaticFileModule** |
| Descrição: | Envia arquivos estáticos com a extensão de arquivo .html, .jpg, bem como muitos outros. A coleção de configuração staticContent/mimeMap determina a lista de extensões de arquivo. |
| Seções de configuração: | system.webServer/staticContent |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Os arquivos estáticos não são mais atendidos. As solicitações de arquivos retornam um erro 404 Not Found indicando que nenhum manipulador foi correspondido. |
| **Nome do módulo:** | **AnonymousAuthenticationModule** |
| Descrição: | Implementa a autenticação anônima. Este módulo gerará o objeto HttpUser se uma URL estiver configurada para permitir a autenticação anônima. |
| Seções de configuração: | system.webServer/security/authentication/anonymousAuthentication |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Pelo menos um módulo de autenticação deve ser configurado. O núcleo do servidor IIS verifica após a fase de autenticação se o objeto HttpUser é preenchido. O objeto HttpUser é uma estrutura de dados do IIS. Um erro 401.2 é gerado se não houver autenticação preenchendo o objeto HttpUser. |
| **Nome do módulo:** | **Módulo de Autenticação por Mapeamento de Certificado** |
| Descrição: | Mapeia certificados de cliente SSL para uma conta do Active Directory (Mapeamento de Certificados do Active Directory). |
| Seções de configuração: | system.webServer/security/authentication/clientCertificateMappingAuthentication |
| Dependências: | O SSL deve ser configurado para que este módulo funcione. O computador IIS também deve ser membro de um domínio do Active Directory. |
| Possíveis problemas ao remover este módulo | Normalmente, as solicitações são permitidas se o Mapeamento de Certificados do Active Directory for usado para proteger um diretório; nesse caso, o módulo é removido. |
| **Nome do módulo:** | **BasicAuthenticationModule** |
| Descrição: | implementa a autenticação HTTP Basic descrita no RFC 2617. |
| Seções de configuração: | system.webServer/security/authentication/basicAuthentication |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Pelo menos um módulo de autenticação deve ser configurado. O núcleo do servidor IIS verifica após a fase de autenticação se o objeto HttpUser é preenchido. O objeto HttpUser é uma estrutura de dados do IIS. Um erro 401.2 é gerado quando não há autenticação populando o objeto HttpUser. |
| **Nome do módulo:** | **Windowsauthenticationmodule** |
| Descrição: | Implementa a autenticação do Windows (NTLM ou Negotiate (Kerberos)). |
| Seções de configuração: | system.webServer/security/authentication/windowsAuthentication |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Pelo menos um módulo de autenticação deve ser configurado. O núcleo do servidor IIS verifica após a fase de autenticação se o objeto HttpUser é preenchido. O objeto HttpUser é uma estrutura de dados do IIS. Um erro 401.2 será gerado se não houver autenticação preenchendo o objeto HttpUser. |
| **Nome do módulo:** | **DigestAuthenticationModule** |
| Descrição: | Implementa a autenticação digest descrita no RFC 2617. |
| Seções de configuração: | system.webServer/security/authentication/digestAuthentication |
| Dependências: | O servidor IIS deve fazer parte de um domínio do Active Directory. |
| Possíveis problemas ao remover este módulo | Pelo menos um módulo de autenticação deve ser configurado. O núcleo do servidor IIS verifica após a fase de autenticação se o objeto HttpUser é preenchido. O objeto HttpUser é uma estrutura de dados do IIS. Um erro 401.2 será gerado se não houver autenticação preenchendo o objeto HttpUser. |
| **Nome do módulo:** | **IISCertificateMappingAuthenticationModule** |
| Descrição: | Implementa o mapeamento de certificado do IIS. Mapeia certificados de cliente SSL para uma conta do Windows. Ao contrário do mapeamento de Certificado do Active Directory, as credenciais do usuário e as regras de mapeamento são armazenadas no repositório de configuração do IIS |
| Seções de configuração: | system.webServer/iisClientCertificateMappingAuthentication |
| Dependências: | O SSL com o requisito de receber certificados de cliente deve ser configurado para que este módulo funcione. |
| Possíveis problemas ao remover este módulo | Pelo menos um módulo de autenticação deve ser configurado. O núcleo do servidor IIS verifica após a fase de autenticação se o objeto HttpUser é preenchido. O objeto HttpUser é uma estrutura de dados do IIS. Um erro 401.2 é gerado quando não há autenticação populando o objeto HttpUser. |
| **Nome do módulo:** | **UrlAuthorizationModule** |
| Descrição: | Implementa a autorização com base nas regras de configuração. |
| Seções de configuração: | system.webServer/security/authorization |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | As regras de autorização que protegeram o conteúdo não são mais avaliadas. O conteúdo que deveria ser protegido pode eventualmente ser exibido. |
| **Nome do módulo:** | **Isapimodule** |
| Descrição: | Implementa a funcionalidade de extensão ISAPI. |
| Seções de configuração: | system.webServer/isapiCgiRestriction |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Extensões ISAPI mapeadas na `<handlers>` seção (modules="IsapiModule") ou explicitamente chamadas extensões ISAPI não funcionarão mais. |
| **Nome do módulo:** | **IsapiFilterModule** |
| Descrição: | Implementa a funcionalidade de filtro ISAPI. |
| Seções de configuração: | system.webServer/isapiFilters |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Filtros ISAPI geralmente implementam funcionalidades das quais os aplicativos dependem. Exemplos são ASP.NET ou SharePoint. ASP.NET, por exemplo, precisa do aspnet\_filter.dll para proteger conteúdo confidencial e reescrever URLs. A remoção deste módulo impede que o IIS carregue filtros ISAPI. Os aplicativos podem parar de funcionar ou o conteúdo confidencial pode ser exposto. |
| **Nome do módulo:** | **IpRestrictionModule** |
| Descrição: | Implementa um esquema de autorização com base no endereço IPv4 da solicitação do cliente. |
| Seções de configuração: | system.webServer/security/ipSecurity |
| Dependências: | A pilha IPv4 deve ser instalada. |
| Possíveis problemas ao remover este módulo | Clientes com endereços IP na lista ipSecurity serão permitidos. |
| **Nome do módulo:** | **RequestFilteringModule** |
| Descrição: | Implementa um conjunto poderoso de regras de segurança que rejeitam a solicitação suspeita em um estágio muito inicial. Este módulo é o sucessor do filtro ISAPI UrlScan.DLL que foi enviado para o IIS 5.0 e 6.0. |
| Seções de configuração: | system.webServer/security/requestFiltering |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Se este módulo for removido, as regras especificadas na seção requestFiltering não se aplicarão mais. Possíveis problemas de segurança podem resultar. |
| **Nome do módulo:** | **CustomLoggingModule** |
| Descrição: | Implementa a interface ILogPlugin na parte superior do IIS. ILogPlugin é uma implementação COM anterior que permitia aos clientes estender o log do IIS. Não recomendamos estender o IIS usando essa interface. Em vez disso, os clientes devem escrever um módulo e assinar a notificação de RQ\_LOG\_REQUEST. |
| Seções de configuração: | system.webServer/httpLogging e system.applicationhost/sites/site/logFile/customLogPluginClsid |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Um plug-in de log personalizado não será mais chamado. Por exemplo, o log ODBC é implementado como ILogPlugin. |
| **Nome do módulo:** | **CustomErrorModule** |
| Descrição: | Implementa erros personalizados e o recurso de erro detalhado do IIS. |
| Seções de configuração: | system.webServer/httpErrors |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | O IIS retorna páginas em branco com informações mínimas quando ocorrem erros no servidor principal. Os usuários remotos podem ver informações detalhadas de erro provenientes de componentes do servidor, o que pode resultar na divulgação de informações. |
| **Nome do módulo:** | **HttpLoggingModule** |
| Descrição: | Implementa o registro padrão do IIS informando ao HTTP.SYS o que registrar. |
| Seções de configuração: | system.applicationHost/log e system.webServer/httpLogging |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | O registro em log do IIS padrão não funcionará mais. |
| **Nome do módulo:** | **MóduloDeRastreamentoDeRequisiçõesFalhadas** |
| Descrição: | Implementa o rastreamento de solicitações falhadas. Defina e configure regras para solicitações com falha por meio da configuração. |
| Seções de configuração: | system.webServer/tracing e system.webServer/httpTracing |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | O rastreamento de solicitações http não funcionará mais. |
| **Nome do módulo:** | **RequestMonitorModule** |
| Descrição: | Implementa a RSCA (Interface de Controle e Estado em Tempo de Execução) do IIS. A RSCA permite que os usuários consultem informações de tempo de execução, como a solicitação em execução no momento, o estado de início/parada de um site da Web ou a execução de domínios de aplicativo no momento. |
| Seções de configuração: | Nenhum. |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | As ferramentas não poderão enumerar as solicitações em execução no momento. |
| **Nome do módulo:** | **CgiModule** |
| Descrição: | Implementa o CGI sobre o IIS. |
| Seções de configuração: | system.webServer/cgi e system.webServer/isapiCgiRestriction |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Os programas CGI deixarão de funcionar. |
| **Nome do módulo:** | **TracingModule** |
| Descrição: | Implementa o rastreamento de ETW. |
| Seções de configuração: | system.webServer/httpTracing |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | O rastreamento de ETW não funcionará se este módulo for removido. |
| **Nome do módulo:** | **ConfigurationValidationModule** |
| Descrição: | Valida que a configuração do aplicativo ASP.NET foi migrada para o modo integrado. |
| Seções de configuração: | system.webServer/Validation |
| Dependências: | Nenhum. |
| Possíveis problemas ao remover este módulo | Os aplicativos que especificam a configuração de ASP.NET herdada para módulos e manipuladores não gerarão erros de migração; um novo aplicativo que não foi migrado funcionará incorretamente. |

### Módulos Gerenciados:

| **Nome do módulo:** | **Outputcache** |
| --- | --- |
| Descrição: | Implementa o recurso de cache de saída ASP.NET. |
| Seções de configuração: | system.web/caching/outputCache |
| Dependências: | O módulo ManagedEngine deve ser instalado. |
| Possíveis problemas ao remover este módulo | ASP.NET não poderá gerar respostas de cache para páginas configuradas para serem armazenadas em cache. |
| **Nome do módulo:** | **Sessão** |
| Descrição: | Consulte ASP.NET documentação 2.0 para obter detalhes |
| Seções de configuração: | system.web/sessionState |
| Dependências: | O módulo ManagedEngine deve ser instalado |
| Possíveis problemas ao remover este módulo | O estado da sessão gerenciada não está disponível. |
| **Nome do módulo:** | **Autenticação do Windows** |
| Descrição: | Consulte ASP.NET documentação 2.0 para obter detalhes. |
| Seções de configuração: | system.web/authentication |
| Dependências: | O módulo ManagedEngine deve ser instalado |
| Possíveis problemas ao remover este módulo | O evento WindowsAuthentication.OnAuthenticate não será gerado, o que pode impedir a execução de algum código de autenticação ASP.NET personalizado. Além disso, o usuário autenticado não será substituído pelo usuário UNC quando estiver no compartilhamento UNC (comportamento de ASP.NET herdado). Este módulo não afeta a autenticação NTLM/Kerberos para aplicativos ASP.NET no modo integrado e não é necessário fora do evento WindowsAuthentication.OnAuthenticate e do comportamento UNC herdado. |
| **Nome do módulo:** | **Formsauthentication** |
| Descrição: | Consulte ASP.NET documentação 2.0 para obter detalhes. |
| Seções de configuração: | system.web/authentication |
| Dependências: | O módulo ManagedEngine deve ser instalado |
| Possíveis problemas ao remover este módulo | O recurso de autenticação baseada em formulários do ASP.NET não estará disponível, o que impede que clientes com tíquetes de autenticação de formulários acessem recursos protegidos. |
| **Nome do módulo:** | **DefaultAuthentication** |
| Descrição: | Consulte ASP.NET documentação 2.0 para obter detalhes. |
| Seções de configuração: | system.web/authentication |
| Dependências: | O módulo ManagedEngine deve ser instalado |
| Possíveis problemas ao remover este módulo | Alguns recursos do ASP.NET podem não funcionar para solicitações anônimas se o modo de autenticação do ASP.NET for Forms. Além disso, o evento DefaultAuthentication.OnAuthenticate não será gerado. |
| **Nome do módulo:** | **Rolemanager** |
| Descrição: | Consulte ASP.NET documentação 2.0 para obter detalhes. |
| Seções de configuração: | Nenhum. |
| Dependências: | O módulo ManagedEngine deve ser instalado. |
| Possíveis problemas ao remover este módulo | Funcionalidade do Gerenciador de Funções não disponível. |
| **Nome do módulo:** | **UrlAuthorization** |
| Descrição: | Consulte ASP.NET documentação 2.0 para obter detalhes. O módulo urlAuthorization nativo implementa a funcionalidade de autorização de URL no código nativo. Isso fornece uma alternativa nativa escalonável e rápida para o módulo de autorização de URL gerenciada. |
| Seções de configuração: | system.web/authorization. |
| Dependências: | O módulo ManagedEngine deve ser instalado. |
| Possíveis problemas ao remover este módulo | As regras de autorização do ASP.NET serão ignoradas, possivelmente resultando em divulgação de informações e outros comprometimentos de segurança. |
| **Nome do módulo:** | **Anonymousidentification** |
| Descrição: | Consulte ASP.NET documentação 2.0 para obter detalhes. |
| Seções de configuração: |  |
| Dependências: | O módulo ManagedEngine deve ser instalado. |
| Possíveis problemas ao remover este módulo | O recurso de identificação anônima usado pelo perfil de ASP.NET não funcionará. |
| **Nome do módulo:** | **Profile** |
| Descrição: | Consulte ASP.NET documentação 2.0 para obter detalhes. |
| Seções de configuração: |  |
| Dependências: | O módulo ManagedEngine deve ser instalado. |
| Possíveis problemas ao remover este módulo | O recurso perfil de ASP.NET não funcionará. |
| **Nome do módulo:** | **UrlMappingsModule** |
| Descrição: | Consulte ASP.NET documentação 2.0 para obter detalhes. |
| Seções de configuração: |  |
| Dependências: | O módulo ManagedEngine deve ser instalado. |
| Possíveis problemas ao remover este módulo | Os mapeamentos de URL ASP.NET não funcionarão. |

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

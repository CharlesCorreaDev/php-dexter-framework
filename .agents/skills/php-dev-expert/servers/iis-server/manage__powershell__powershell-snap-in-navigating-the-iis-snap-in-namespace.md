# Snap-in do PowerShell: Navegação no namespace do snap-in do IIS | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/powershell/powershell-snap-in-navigating-the-iis-snap-in-namespace

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

# Snap-in do PowerShell: Navegação no namespace do Snap-in do IIS

Comentários

por [Thomas Deml](https://github.com/thomasdeml)

Todos estão familiarizados sobre como o sistema de arquivos é organizado. Os sistemas de arquivos são namespaces hierárquicos, compostos por diretórios que contêm arquivos e outros diretórios. O Snap-in do PowerShell aproveita essa familaridade com o sistema de arquivos e permite que outros armazenamentos de dados sejam expostos como um namespace hierárquico. Como a raiz de uma unidade de sistema de arquivos, a raiz do sistema de configuração do IIS é geralmente "IIS:".

Abaixo da unidade raiz "IIS:", você encontrará "Sites" e "AppPools" - Pools de Aplicativos em suma.

## Organização do namespace snap-in do IIS

Aqui está a estrutura do namespace snap-in do IIS PowerShell. Os contêineres a seguir não podem ser excluídos ou movidos.

- IIS:\

  - Sites

    - Conjunto de Sites

      - Aplicativos e Diretórios Virtuais
  - Apppools

    - Processos de Trabalho
  - SslBindings

Observação: se os Processos de Trabalho forem iniciados, você encontrará objetos do Processo do PowerShell na coleção Processo de Trabalho. Essa coleção Process é enriquecida com objetos Request e AppDomain. Isso permite que você consulte processos de trabalho do IIS para executar solicitações no momento e executar Domínios de Aplicativo.

Agora vamos experimentar.

## Tarefa 1 – Familiarizar-se com o namespace do provedor do IIS

#### 1.1. Iniciar o Console de Gerenciamento do IIS PowerShell

Clique no Menu Iniciar – selecione "Todos os Programas" – "Extensões do IIS 7.0" – "Console de Gerenciamento do IIS PowerShell". O prompt da nova janela de comando do PowerShell é definido como "IIS:" – a raiz do namespace do Provedor do IIS.

#### 1.2. Navegar pelo namespace

Digite "dir" e observe que Sites e AppPools são os dois únicos diretórios abaixo da raiz.

```
PS IIS:\> dir
```

```
Name
----
Sites
AppPools
```

Como a próxima etapa, queremos mudar para o diretório Sites. Você pode fazer isso com os seguintes comandos:

```
PS IIS:\> cd Sites
PS IIS:\Sites> dir
Name             ID   State      Physical Path                  Bindings
----             --   -----      -------------                  --------
Default Web Site 1    Started    f:\inetpub\wwwroot             http *:80:
```

Se você for aventureiro, observará que digitar a guia< cd Si>lhe dará a conclusão da linha de comando.

Agora tente isso:

#### 1.2 Um pouco mais de navegação

Agora tente o seguinte:

```
PS IIS:\Sites> Get-Item 'Default Web Site' | Select-Object *

PSPath                     : IIsProviderSnapIn\WebAdministration::\\THDLAP\Sites\Default Web Site
PSParentPath               : IIsProviderSnapIn\WebAdministration::\\THDLAP\Sites
PSChildName                : Default Web Site
PSDrive                    : IIS
PSProvider                 : IIsProviderSnapIn\WebAdministration
PSIsContainer              : True
State                      : Started
name                       : Default Web Site
id                         : 1
serverAutoStart            : True
bindings                   : {binding, binding}
limits                     : Microsoft.Web.Administration.ConfigurationElement
logFile                    : Microsoft.Web.Administration.ConfigurationElement
traceFailedRequestsLogging : Microsoft.Web.Administration.ConfigurationElement
applicationDefaults        : Microsoft.Web.Administration.ConfigurationElement
virtualDirectoryDefaults   : Microsoft.Web.Administration.ConfigurationElement
applicationPool            : DefaultAppPool
enabledProtocols           : http
userName                   :
password                   :
physicalPath               : f:\inetpub\wwwroot
Attributes                 : {name, id, serverAutoStart, state}
ChildElements              : {bindings, limits, logFile, traceFailedRequestsLogging...}
ElementTagName             : site
IsLocallyStored            : True
Methods                    : {Start, Stop}
RawAttributes              : {name, id, serverAutoStart, state}
Schema                     : Microsoft.Web.Administration.ConfigurationElementSchema
```

Esta é a primeira vez que estamos tentando um cmdlet do PowerShell, em vez de usar bons e velhos comandos DOS como CD ou DIR. Se você quiser trabalhar efetivamente com o Snap-in do IIS PowerShell, é uma boa ideia se familiarizar com esses comandos.

Get-Item por exemplo, é um comando que permite obter detalhes sobre o item no local especificado. Em nosso caso, obtemos detalhes para o 'Site Padrão' (se você quiser economizar na digitação, tente 'get-item D<tab>' e a linha de comando será completada automaticamente pelo PowerShell). Canalizamos a saída de Get-Item para o cmdlet Select-Object e ele exibe todas as configurações do 'Site Padrão'.

## Resumo

Este passo a passo lhe deu uma rápida introdução sobre como o namespace snap-in do IIS é organizado. Você também aprendeu algum comando básico para encontrar seu caminho no namespace do IIS.

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

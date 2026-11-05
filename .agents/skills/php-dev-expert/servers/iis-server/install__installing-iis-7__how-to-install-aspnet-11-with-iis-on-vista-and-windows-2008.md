# Como instalar o ASP.NET 1.1 com o IIS7 no Vista e no Windows 2008 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/how-to-install-aspnet-11-with-iis-on-vista-and-windows-2008

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

# Como instalar o ASP.NET 1.1 com o IIS7 no Vista e no Windows 2008

Comentários

por [Walter Oliver](https://github.com/walterov)

## Visão geral

Você pode instalar o ASP.NET 2.0 (3.0 e 3.5) usando a interface do usuário do Windows Vista e do Windows 2008 – basta instalar o componente ASP.NET localizado nos Serviços de Informações da Internet (IIS) - Serviços de World Wide Web - Recursos de Desenvolvimento de Aplicativos. Você pode encontrar esse conjunto de componentes no Windows 2008 clicando em Iniciar e clicando no Gerenciador do Servidor. Expanda a visão de árvore à esquerda no Gerenciador do Servidor e clique em Gerenciar Funções e, em seguida, servidor Web (IIS). No painel direito, procure uma opção com a indicação Adicionar Serviços de Função. Se você estiver no Windows Vista, clique em Iniciar, clique em Painel de Controle, em Programas e em Recursos do Windows. Procure a seguinte árvore de recursos no IIS (Serviços de Informações da Internet):

[![Captura de tela da pasta Serviços de Informações da Internet e sua árvore de pastas contida.](how-to-install-aspnet-11-with-iis-on-vista-and-windows-2008/_static/image3.png)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/how-to-install-aspnet-11-with-iis-on-vista-and-windows-2008/_static/image1.png)

ASP.NET 1.1 não está incluído no Windows Vista ou windows 2008 e deve ser baixado e instalado manualmente. Esta postagem mostra como:

### Etapa 1: instalar a "compatibilidade de metabase do IIS"

O componente de "compatibilidade de metabase" do IIS é necessário para instalar com êxito ASP.NET 1.1.

Para instalá-lo no Windows 2008 Server, clique em **Iniciar** e clique no **Gerenciador do Servidor**. Expanda a visão de árvore à esquerda no Gerenciador do Servidor e clique em **Gerenciar Funções** e, em seguida, **servidor Web (IIS)**. No painel direito, procure uma opção denominada **Adicionar Serviços de Função**. Isso leva você ao assistente, onde você pode instalar "Compatibilidade de Metabase do IIS".

[![Captura de tela do painel Serviços de Função com foco na opção de Compatibilidade de Metabase do IIS.](how-to-install-aspnet-11-with-iis-on-vista-and-windows-2008/_static/image2.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/how-to-install-aspnet-11-with-iis-on-vista-and-windows-2008/_static/image1.jpg)

Se você estiver no Windows Vista, clique em **Iniciar**, clique em **Painel de Controle**, em **Programas** e em **Recursos do Windows**. Procure o IIS (Serviços de Informações da Internet) e instale "Compatibilidade de Metabase do IIS".

### Etapa 2: Instalar o .NET Framework v1.1 e o .NET Framework v1.1 SP1

Instale o Framework v1.1, o SP1 e a atualização de segurança do ASP.NET para SP1.

Ao instalar o .NET Framework versão 1.1 e o SP1 para .NET Framework versão 1.1, você verá a caixa de diálogo a seguir. Clique **em Executar programa**.

[![Captura de tela da caixa de diálogo Assistente de Compatibilidade do Programa com foco na opção Executar programa.](how-to-install-aspnet-11-with-iis-on-vista-and-windows-2008/_static/image4.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/how-to-install-aspnet-11-with-iis-on-vista-and-windows-2008/_static/image3.jpg)

Observação

Se você não instalar o Framework v1.1 SP1, poderá encontrar erros de Prevenção de Execução de Dados com mensagens como "O Processo de Trabalho do IIS parou de funcionar". Isso é esperado. A instalação do .NET Framework v1.1 SP1 corrigirá isso.

[![Captura de tela de uma mensagem de erro lendo I S Worker Process parou de funcionar.](how-to-install-aspnet-11-with-iis-on-vista-and-windows-2008/_static/image6.jpg)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/how-to-install-aspnet-11-with-iis-on-vista-and-windows-2008/_static/image5.jpg)

### Etapa 3: Habilitar ASP.NET extensão ISAPI v1.1

Habilite ASP.NET ISAPI v1.1 como uma extensão ISAPI permitida. Para fazer isso, abra a ferramenta de administração "Gerenciador do IIS". No modo de exibição de recursos, clique no recurso "Restrições de ISAPI e CGI". No painel ações, clique em "adicionar"

**Extensão**: `C:\Windows\Microsoft.NET\Framework\v1.1.4322\aspnet\_isapi.dll` (**Observação:** alterar a unidade se a unidade do sistema não for C:) **Descrição**: ASP.NET v1.1

[![Captura de tela da caixa de diálogo Adicionar Restrição ISAPI ou CGI na tela Restrições ISAPI e CGI.](how-to-install-aspnet-11-with-iis-on-vista-and-windows-2008/_static/image6.png)](https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/how-to-install-aspnet-11-with-iis-on-vista-and-windows-2008/_static/image5.png)

Você também pode fazer executando a seguinte linha de comando:

```
%windir%\Microsoft.NET\Framework\v1.1.4322\aspnet_regiis -enable
```

### Etapa 4: Adicionar o Manipulador IgnoreSection à v1.1 machine.config

ASP.NET v1.1 lançará exceções em tempo de execução se houver configuração do IIS nos arquivos web.config lidos por seus aplicativos ASP.NET v1.1. Para fazer com que o ASP.NET v1.1 ignore as seções de configuração do IIS, abra o arquivo de machine.config do Framework v1.1 e adicione a seguinte entrada de seção logo acima da tag de fechamento do elemento `<configSections>`:

```
<section name="system.webServer" type="System.Configuration.IgnoreSectionHandler, 
    System, Version=1.0.5000.0, Culture=neutral, PublicKeyToken=b77a5c561934e089" /> 
</configSections>
```

### Etapa 5: Mover Site ou Aplicativo para ASP.NET Pool de Aplicativos 1.1

Durante a instalação, o Framework v1.1 cria um pool de aplicativos chamado "ASP.NET 1.1" configurado para carregar o Framework v1.1 na inicialização. Para mover seu site ou aplicativo para esse pool de aplicativos usando o Gerenciador do IIS, consulte nossa documentação online. Você também pode fazer isso na linha de comando navegando até o `%windir%\system32\inetsrv` diretório e executando a seguinte linha de comando:

appcmd set app "Default Web Site/" /applicationPool:"ASP.NET 1.1" Se você gostaria de criar um novo pool de aplicativos configurado para carregar o Framework v1.1, consulte nossa documentação online para criar um pool de aplicativos. Você também pode fazer isso na linha de comando navegando até o `%windir%\system32\inetsrv` diretório e executando a seguinte linha de comando:

```
appcmd add apppool /name:"NewPool"  /managedRuntimeVersion:"v1.1"
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
  2026-03-27

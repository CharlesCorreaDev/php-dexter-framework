# Ferramentas de administração avançadas | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/overview/powerful-admin-tools

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

# Ferramentas de administração avançadas

Comentários

O IIS inclui um conjunto abrangente de ferramentas de administração, incluindo ferramentas de administração e linha de comando, APIs de script e código gerenciado e suporte do Windows PowerShell para simplificar tarefas diárias para desenvolvedores e administradores.

## Gerenciador do IIS

![Habilitar conexões remotas](powerful-admin-tools/_static/enableremoteconnections-small.png)
O Gerenciador do IIS oferece uma ferramenta eficiente para gerenciar o servidor Web. A ferramenta de administração fornece acesso simplificado às configurações do IIS e do ASP.NET, aos dados de associação e do usuário, e às informações de diagnóstico em tempo de execução. A ferramenta de administração também permite que aqueles que hospedam ou administram sites da Web delegam controle administrativo a desenvolvedores ou proprietários de conteúdo, reduzindo, assim, o custo de propriedade e a carga administrativa para o administrador. Outros recursos principais incluem:

- [Administração remota](https://www.iis.net/downloads/microsoft/iis-manager) por HTTP/SSL
- Suporte para credenciais do Windows e não Windows para administração delegada
- Uma [estrutura de extensibilidade](develop__extending-the-management-ui__overview-of-mwa-and-mwm-for-iis.md) avançada para conectar novos recursos de interface do usuário usando o .NET Framework
- Download automático e instalação de novos módulos de interface do usuário para o cliente

## .NET Microsoft.Web.Administration

O IIS inclui a API Microsoft.Web.Administration para [administrar programaticamente](manage__scripting__how-to-use-microsoftwebadministration.md) o servidor Web. Essa API de código gerenciado facilita o provisionamento programático, o acesso a informações importantes de estado e diagnóstico ou configura o servidor.

## Windows PowerShell

Os [cmdlets do PowerShell de Administração do IIS](https://learn.microsoft.com/pt-br/powershell/module/iisadministration/) permitem que os administradores da Web e os provedores de hospedagem automatizem facilmente tarefas de administração complexas e rotineiras do IIS, como a criação de sites e o gerenciamento de dados de configuração e tempo de execução usando o Windows PowerShell. Os administradores podem aumentar ainda mais a produtividade aproveitando os muitos cmdlets incluídos no Provedor do Windows PowerShell para IIS. Os cmdlets do PowerShell de Administração do IIS estão disponíveis no Windows 10/Windows Server 2016 e posteriores. Em OSes mais antigos, esses cmdlets estão disponíveis para download por meio da [Galeria do PowerShell](https://www.powershellgallery.com/packages/IISAdministration/1.1.0.0).

## Linha de comando – AppCmd.exe

O IIS dá suporte a uma ferramenta  [de](get-started__getting-started-with-iis__getting-started-with-appcmdexe.md)  linha de comandoAppCmd.exe– para administrar o servidor. Esse utilitário avançado facilita a leitura e gravação de valores de configuração e o acesso a informações de estado do pool de aplicativos e site, tudo no prompt de comando.

## API de Administração do Microsoft IIS

A [API de Administração do Microsoft IIS](https://learn.microsoft.com/pt-br/iis-administration/) é a API REST que permite que os clientes configurem e monitorem o servidor Web do IIS. Com a API instalada em um computador com o IIS, é possível configurar uma instância do IIS com qualquer cliente HTTP.

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

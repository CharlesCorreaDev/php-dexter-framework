# Visão geral do servidor Web do IIS | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/introduction-to-iis/iis-web-server-overview

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

# Visão geral do servidor Web do IIS

Comentários

por Equipe do IIS, [Mike Volodarsky](https://github.com/leanserver)

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 7.0 e posterior | Os recursos descritos neste artigo foram introduzidos no IIS 7.0. |
| IIS 6.0 e anterior | Os recursos descritos neste artigo não tinham suporte antes do IIS 7.0. |

Os servidores Web IIS 7 e posteriores têm uma arquitetura completamente modular que oferece três benefícios principais:

- Componentização
- Extensibilidade
- Integração ASP.NET

## Componentização

Todos os recursos do servidor Web agora são [gerenciados como componentes autônomos](get-started__introduction-to-iis__iis-modules-overview.md) que podem ser facilmente adicionados, removidos e substituídos. Isso permite várias vantagens importantes em relação às versões anteriores do IIS:

1. **Proteja o servidor reduzindo a área da superfície de ataque**. Reduzir a área de superfície é uma das maneiras mais poderosas de proteger um sistema de servidor. Com o IIS, você pode remover todos os recursos de servidor não utilizados, alcançando a área de superfície mínima possível, preservando a funcionalidade do aplicativo.
2. **Melhore o desempenho e reduza o volume de memória**. Ao remover recursos de servidor não utilizados, você também pode reduzir a quantidade de memória que o servidor usa e melhorar o desempenho reduzindo a quantidade de código de recurso executado em cada solicitação para seu aplicativo.
3. **Crie servidores personalizados/especializados**. Ao selecionar um conjunto específico de recursos de servidor, você pode criar servidores personalizados otimizados para executar uma função específica na topologia do aplicativo, como cache de borda ou balanceamento de carga. Você pode adicionar recursos personalizados para estender ou substituir qualquer funcionalidade existente usando componentes de servidor próprios ou de terceiros criados nas novas APIs de extensibilidade. A arquitetura componente fornece benefícios a longo prazo para a comunidade do IIS: facilita o desenvolvimento de novos recursos de servidor, pois eles são necessários tanto dentro da Microsoft quanto entre desenvolvedores de terceiros.

O IIS também componenteu o poderoso modelo de ativação de processo HTTP introduzido no IIS 6.0 com pools de aplicativos. O modelo de ativação do processo HTTP está disponível para mais do que apenas aplicativos Web, recebendo solicitações ou mensagens em qualquer protocolo. Esse serviço independente de protocolo é chamado de WAS (Serviço de Ativação de Processo do Windows). O WCF ( [Windows Communication Foundation](https://msdn.microsoft.com/library/ms735119.aspx) ) é fornecido com adaptadores de protocolo que podem aproveitar os recursos do WAS, melhorando a confiabilidade e o uso de recursos dos serviços WCF.

## Extensibilidade

Os desenvolvedores podem aproveitar a arquitetura modular do IIS para criar componentes de servidor avançados que estendem ou substituem os recursos existentes do servidor Web e agregam valor aos aplicativos Web hospedados no IIS.

Aqui estão os motivos para desenvolver para o IIS:

1. **Capacitar aplicativos Web**. A extensão do IIS permite que os aplicativos Web se beneficiem da funcionalidade que, em muitos casos, não pode ser facilmente fornecida na camada do aplicativo. Usando a extensibilidade do IIS ASP.NET ou C++ nativa, os desenvolvedores podem criar soluções que agregam valor para todos os componentes do aplicativo, como esquemas de autenticação personalizados, monitoramento e registro em log, filtragem de segurança, balanceamento de carga, redirecionamento de conteúdo e gerenciamento de estado.
2. **Melhor experiência de desenvolvimento**. O [novo modelo de extensibilidade do C++](develop__runtime-extensibility__develop-a-native-cc-module-for-iis.md) alivia a maioria dos problemas que antes atormentavam o desenvolvimento do ISAPI, introduzindo uma API simplificada orientada a objetos que promove a gravação de código de servidor robusto. Além disso, uma melhor integração com o Visual Studio melhora ainda mais a experiência de desenvolvimento para o IIS.
3. **Use todo o poder de ASP.NET.**[ASP.NET integração](application-frameworks__building-and-running-aspnet-applications__aspnet-integration-with-iis.md) permite que os módulos de servidor sejam [desenvolvidos rapidamente com as interfaces familiares do ASP.NET 2.0](develop__runtime-extensibility__developing-a-module-using-net.md) e dos serviços de aplicativos de ASP.NET avançados. ASP.NET módulos podem fornecer serviços uniformemente para ASP, CGI, arquivos estáticos e outros tipos de conteúdo e podem estender totalmente o servidor sem a limitação presente nas versões anteriores do IIS.

## Integração ASP.NET

O IIS permite que os aplicativos Web aproveitem totalmente os recursos avançados e a extensibilidade do ASP.NET 2.0. ASP.NET recursos, incluindo autenticação baseada em formulários, associação, estado de sessão e muitos outros podem ser usados para todos os tipos de conteúdo, fornecendo uma experiência unificada em todo o aplicativo Web. Os desenvolvedores podem usar o modelo de extensibilidade ASP.NET familiar e APIs avançadas do .NET para criar recursos do servidor IIS tão poderosos quanto aqueles escritos usando as APIs C++ nativas.

Use os links abaixo para começar a aprender os aspectos da configuração do IIS, consulte um laboratório sobre como começar e baixar kits com recursos prontamente disponíveis no IIS.NET.

**Iniciar o aprendizado**

- [Visão geral de módulos do IIS](get-started__introduction-to-iis__iis-modules-overview.md)
- [integração do ASP.NET com o IIS](application-frameworks__building-and-running-aspnet-applications__aspnet-integration-with-iis.md)
- [Como aproveitar o pipeline integrado do IIS](application-frameworks__building-and-running-aspnet-applications__how-to-take-advantage-of-the-iis-integrated-pipeline.md)
- [Exemplo de extensibilidade de ponta a ponta](develop__runtime-extensibility__an-end-to-end-extensibility-example-for-iis-developers.md)
- [Criando um servidor personalizado](get-started__planning-your-iis-architecture.md)
- [Desenvolver um módulo usando o .NET](develop__runtime-extensibility__developing-a-module-using-net.md)
- [Desenvolver um módulo nativo (C\C++)](develop__runtime-extensibility__develop-a-native-cc-module-for-iis.md)

**Introdução**

- Windows Server 2008 R2 Evaluation Editions e Virtual Labs (`https://www.microsoft.com/server-cloud/windows-server/2008-r2-trial.aspx`)

**Downloads**

- [Kit de Início do Módulo Gerenciado](https://www.iis.net/downloads/community)
- [Kit de Início do Módulo Nativo (C\C++)](https://www.iis.net/downloads/community)

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

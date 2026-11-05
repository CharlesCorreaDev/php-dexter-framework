# IIS 8.0 ASP.NET Configuration Management | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-aspnet-configuration-management

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

# IIS 8.0 ASP.NET Configuration Management

Comentários

por Won Yoo

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 8.0 | As ferramentas de gerenciamento do IIS foram atualizadas para ASP.net 4.5 no IIS 8.0. |
| IIS 7.5 | As ferramentas de gerenciamento do IIS não foram atualizadas para ASP.net 4.5 no IIS 7.5. |
| IIS 7.0 | As ferramentas de gerenciamento do IIS não foram atualizadas para ASP.net 4.0 no IIS 7.0 |

## Problema

O Windows Server 2012 inclui o .NET Framework 4.5 por padrão, bem como a instalação opcional do .NET 3.5 Framework. Os desenvolvedores e administradores frequentemente precisam executar aplicativos Web ASP.net 3.5 e ASP.net 4.5 e, portanto, também precisam da capacidade de gerenciá-los adequadamente.

## Solução

O IIS 8.0 dá suporte ao gerenciamento de aplicativos ASP.NET 3.5 e ASP.NET 4.5 usando a ferramenta gráfica do Gerenciador do IIS, bem como as ferramentas de gerenciamento de linha de comando do IIS.

As ferramentas de gerenciamento gráfica e de linha de comando do IIS operam de maneira específica para a versão ao ler ou gravar informações de configuração para aplicativos ASP.NET. Por exemplo, módulos de administração do ASP.NET em execução no Gerenciador de Servidores do IIS exibirão as opções de configuração aplicáveis à versão específica do ASP.NET usada por um aplicativo.

## Instruções passo a passo

#### Pré-requisitos:

Os conceitos demonstrados neste passo a passo exigem um computador do Windows Server 2012 com todos os seguintes instalados: IIS 8.0, ASP.NET 3.5 e ASP.NET 4.5.

Antes deste passo a passo, os leitores já deveriam ter concluído o passo a passo complementar: [usando ASP.NET 3.5 e ASP.NET 4.5 no IIS 8.0](get-started__whats-new-in-iis-8__iis-80-using-aspnet-35-and-aspnet-45.md). Esse documento orienta os leitores sobre a instalação de todos os três recursos, bem como aplicativos de exemplo para ambas as versões do ASP.NET.

#### Soluções alternativas para bugs conhecidos:

Não há bugs conhecidos para esse recurso no momento.

### Exibindo módulos de administração de ASP.NET

Inicie a interface do Gerenciador do IIS e expanda a estrutura em árvore no lado esquerdo da janela para que o "Site Padrão" e seus filhos estejam visíveis.

[![Captura de tela do I S Manager U I. A árvore de navegação está no painel esquerdo. O Site Padrão está selecionado. Os ícones dot net Roles, dot net Users e Providers são realçados.](iis-80-aspnet-configuration-management/_static/image3.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-aspnet-configuration-management/_static/image1.png)

A parte direita da interface do usuário do Gerenciador do IIS exibe os módulos administrativos disponíveis para gerenciar o aplicativo ASP.NET destacado na visão de árvore. Nesse caso, como o **Site Padrão** está selecionado e, por padrão, esse site dá suporte ao ASP.NET 4.5, o Gerenciador do IIS exibe 15 módulos de administração específicos do ASP.NET. Os ícones mostrados acima no contorno vermelho são os três módulos de administração que só estão disponíveis para uso com aplicativos ASP.NET 4.5.

Você pode ver as diferenças de alto nível entre o gerenciamento dos aplicativos ASP.NET 3.5 e ASP.NET 4.5 no Gerenciador do IIS abaixo. Como o aplicativo "example35" está configurado para ASP.NET 3.5, apenas 12 módulos de administração específicos do ASP.NET estão disponíveis.

[![Captura de tela da caixa de diálogo I S Manager UI. No painel esquerdo, o exemplo trinta e cinco está selecionado.](iis-80-aspnet-configuration-management/_static/image7.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-aspnet-configuration-management/_static/image5.png)

Conforme observado acima, o Gerenciador do IIS no IIS 8.0 dá suporte a três módulos de administração adicionais ao gerenciar ASP.NET 4.5:

- **Provedores**: Este módulo de administração dá suporte ao gerenciamento centralizado de provedores de persistência plugáveis para o recurso Associação, Gerenciador de Funções e Perfil do ASP.NET 4.5.
- **Usuários do .NET**: criação, exclusão e modificação interativas de usuários de associação baseadas em interface do usuário para aplicativos ASP.NET 4.5.
- **Funções do .NET**: criação/exclusão de funções baseadas em interface do usuário, bem como integração com o módulo "Usuários do .NET" para adicionar e remover usuários de/para funções. Assim como nos dois módulos de administração anteriores, o módulo "Funções do .NET" é usado para gerenciar ASP.NET aplicativos 4.5

### Gerenciando configurações de compilação ASP.NET

Muitos dos módulos de administração existentes para ASP.NET 3.5 e ASP.NET 4.5 expõem a mesma funcionalidade. No entanto, à medida que alguns recursos ASP.NET evoluem ao longo do tempo, opções de configuração adicionais são adicionadas em versões mais recentes do .NET Framework. Os módulos de administração ASP.NET no Gerenciador do IIS dão suporte a isso alterando dinamicamente as opções exibidas dependendo da versão do aplicativo ASP.NET que está sendo gerenciado.

Veja abaixo uma captura de tela da Compilação do .NET para ASP.NET 3.5:

[![Captura de tela da compilação do .NET para ASP.NET 3.5. As colunas 'Exibir' e 'Nomes Amigáveis' são mostradas.](iis-80-aspnet-configuration-management/_static/image11.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-aspnet-configuration-management/_static/image9.png)

E abaixo está a configuração correspondente para ASP.NET 4.5. Você verá que as opções de configuração foram expandidas para incluir novos recursos do ASP.NET 4.5:

[![Captura de tela da compilação do dot NET para ASP.NET 3.5. Ativar criação de perfil JIT e ativar comportamentos de pré-busca são destacados.](iis-80-aspnet-configuration-management/_static/image15.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-aspnet-configuration-management/_static/image13.png)

As duas novas opções disponíveis em aplicativos ASP.NET 4.5 são:

- **Habilitar a Criação de Perfil JIT**: por padrão, ASP.NET 4.5 funcionará com a compilação JIT do CLR para habilitar a compilação em segundo plano de caminhos de execução especulativos JIT usando núcleos de CPU adicionais.
- **Habilitar o Prefetch**: um recurso ASP.NET 4.5 disponível somente no Windows Server 2012 que integra o sistema de compilação ASP.NET 4.5 com o serviço Superfetch do Windows Server 8. Quando o serviço Superfetch e a opção ASP.NET Prefetch estiverem habilitados, o Windows Server 2012 criará um perfil de compilação do ASP.NET durante a inicialização dos aplicativos da web, a fim de otimizar dinamicamente o desempenho do disco ao carregar assemblies gerenciados.

### Gerenciando configurações de chave de máquina do ASP.NET

Veja abaixo uma captura de tela da Machine Key para ASP.NET 3.5. As listas suspensas "Método de validação" ou "Método de criptografia" exibem os algoritmos de hash e criptografia com suporte usados por vários recursos de segurança no ASP.NET 3.5: (Observação: na imagem abaixo, as listas suspensas são organizadas horizontalmente para que ambos os conjuntos de opções possam ser mostrados.)

[![Captura de tela da caixa de diálogo Chave do Computador. o método de validação S H A one está selecionado. O método de Criptografia Automática está selecionado.](iis-80-aspnet-configuration-management/_static/image19.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-aspnet-configuration-management/_static/image17.png)

E abaixo está a configuração correspondente para ASP.NET 4.5.

[![Captura de tela da caixa de diálogo Chave do Computador. O H M A C S H A dois cinco seis, o H M A C S H A três oito quatro, e o H M A C S H A cinco um dois estão realçados.](iis-80-aspnet-configuration-management/_static/image23.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-aspnet-configuration-management/_static/image21.png)

No ASP.NET 4.5, o mesmo conjunto de algoritmos de criptografia está disponível (o AES estava disponível desde o .NET 2.0). No entanto, no ASP.NET 4.5, o suporte interno para algoritmos de hash foi expandido para incluir a família SHA-2 de algoritmos de hash chave (HMACSHA256, HMACSHA384 e HMACSHA512).

### Gerenciando ASP.NET páginas e controles

Veja abaixo uma captura de tela de Páginas e Controles para ASP.NET 3.5. O módulo de administração exibirá um subconjunto de opções de configuração comumente usadas para aplicativos ASP.NET 3.5:

[![Captura de tela da página Páginas e Controles do ASP.NET 3.5. O comportamento do buffer está realçado.](iis-80-aspnet-configuration-management/_static/image27.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-aspnet-configuration-management/_static/image25.png)

E abaixo está a configuração correspondente para ASP.NET 4.5. As opções disponíveis na parte "Comportamento" foram expandidas para incluir novas configurações para ASP.NET 4.5:

[![Captura de tela da página Páginas e Controles. O modo ID do cliente e os comportamentos de versão de compatibilidade de renderização de controle são realçados.](iis-80-aspnet-configuration-management/_static/image31.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-aspnet-configuration-management/_static/image29.png)

À medida que ASP.NET progride por meio de diferentes versões, há modificações contínuas no HTML, Javascript e CSS emitidos por vários recursos e controles. No entanto, os aplicativos existentes podem esperar formatos específicos para a saída renderizada. ASP.NET 4.5 pode ser configurado para dar suporte a formatos de renderização mais antigos usando as novas configurações expostas no módulo de administração "Páginas e Controles":

- **Modo ClientID**: usa como padrão a nova configuração de "Previsível", o que resulta em identificadores estáveis sendo emitidos para o atributo "id" em elementos HTML renderizados. Essa configuração pode ser alterada para "AutoID" para imitar o comportamento de geração de ID usado em versões anteriores de ASP.NET.
- **Controle versão de compatibilidade de renderização**: como o nome dessa configuração sugere, ela controla qual versão da saída HTML/Javascript/CSS renderizada é usada por vários controles ASP.NET. Essa propriedade pode ser definida como "3.5", caso em que ASP.NET 4.5 emitirá uma saída que corresponda ao formato criado por ASP.NET 3.5.

## Resumo

O IIS 8.0 dá suporte à execução de aplicativos ASP.NET 3.5 e ASP.NET 4.5 no mesmo computador usando pools de aplicativos diferentes para hospedar cada versão do .NET Framework. Para dar suporte à administração de ambos os tipos de aplicativos ASP.NET, as ferramentas de gerenciamento do IIS 8.0 (interface do usuário e linha de comando) também dão suporte ao gerenciamento de várias versões ASP.NET. Além disso, a interface do usuário do Gerenciador de Servidor do IIS 8.0 exibe dinamicamente as opções de gerenciamento apropriadas, dependendo de qual versão do aplicativo ASP.NET está sendo gerenciada.

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

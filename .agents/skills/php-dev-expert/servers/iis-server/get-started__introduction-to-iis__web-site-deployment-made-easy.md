# Implantação de site facilitada | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/introduction-to-iis/web-site-deployment-made-easy

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

# Implantação de site facilitada

Comentários

por Equipe do IIS, [Saad Ladki](https://twitter.com/saadladki)

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 7.0 e posterior | Os recursos descritos neste artigo foram introduzidos no IIS 7.0. |
| IIS 6.0 e anterior | Os recursos descritos neste artigo não tinham suporte antes do IIS 7.0. |

## Introdução

Nas versões anteriores do IIS, mover um site da Web de um servidor para outro significava que você tinha que definir explicitamente as configurações do aplicativo IIS no repositório de metabase no nível do computador antes que o aplicativo pudesse funcionar corretamente. Com o IIS 7.0 e posterior, no entanto, o processo de implantação de um site agora é muito mais fácil.

## Configuração Distribuída

O IIS 7.0 e posterior oferecem algumas melhorias importantes na maneira como os dados de configuração são armazenados e acessados. O antigo repositório de configuração centralizado, encontrado nas versões anteriores do IIS (conhecido como metabase), desapareceu.

Em vez disso, o IIS 7.0 e posterior apresentam um novo sistema de configuração delegado com base em uma hierarquia de arquivos de configuração XML distribuídos. Essa hierarquia é composta por um arquivo de ApplicationHost.config global, que contém padrões de configuração no nível do servidor e arquivos Web.config distribuídos localizados dentro da estrutura de diretório do aplicativo. Esses são os mesmos arquivos Web.config que são usados pela estrutura do aplicativo ASP.NET para armazenar as configurações do aplicativo de maneira portátil. Como resultado, as configurações de IIS e ASP.NET podem ser armazenadas lado a lado usando diretivas XML limpas e fortemente estruturadas.

O IIS continua a dar suporte ao código de configuração existente que utiliza as APIs ABO para gravar na metabase herdada ou aos scripts que empregam objetos como as Interfaces de Serviço do Active Directory® (ADSI) e Instrumentação de Gerenciamento do Windows (WMI) para configurar o IIS. Ele faz isso fornecendo uma camada de compatibilidade que emula as APIs do ABO, sobre a qual todas as outras APIs de configuração herdadas são baseadas. Isso permite que esses scripts leiam e alterem a configuração da mesma forma que fizeram nas versões anteriores do IIS. Para obter mais informações sobre o recurso de compatibilidade de metabase no IIS 7.0 e posterior, consulte a [compatibilidade de configuração do IIS](manage__managing-your-configuration-settings__how-to-use-metabase-compatibility-with-iis-7-and-above.md).

## O que é onde

Conforme mencionado anteriormente, a nova hierarquia de configuração distribuída é composta pelos seguintes arquivos de configuração XML:

### ApplicationHost.config

Este é o arquivo de configuração principal do IIS 7.0 e posterior. O arquivo ApplicationHost.config armazena configurações globais ou em todo o computador e está localizado no nível raiz do servidor Web no `%windir%\system32\inetsrv\config` diretório. Há duas seções de configuração principais neste arquivo:

- **system.applicationHost** – contém configurações para sites, aplicativos, diretórios virtuais e pools de aplicativos. Essas são configurações centralizadas que não podem ser distribuídas.
- **system.webServer** – contém a configuração para todas as outras configurações, incluindo padrões globais. Essas configurações podem ser delegadas e distribuídas.

### Web.config

As configurações específicas de URL podem ser armazenadas diretamente no código ou nos diretórios de conteúdo de um site usando arquivos Web.config. Esses são os mesmos arquivos de Web.config usados pela estrutura do aplicativo ASP.NET para armazenar as configurações do aplicativo.

Observação

Você também pode armazenar configurações específicas de URL no arquivo ApplicationHost.config usando `<location>` marcas.

### Redirection.config

Contém as configurações usadas para redirecionar um servidor Web para arquivos de configuração e esquemas localizados em outro computador.

## Benefícios

A configuração distribuída libera muitos recursos avançados no IIS que:

- Permitir que os desenvolvedores especifiquem a configuração de um site ou aplicativo no mesmo diretório que o código ou conteúdo.
- Permitir a movimentação de sites e aplicativos do desenvolvimento para o teste ou do teste para a produção, como simplesmente uma questão de copiar os arquivos de configuração, juntamente com o código e o conteúdo, para o novo computador. Seu site está em funcionamento imediatamente com as configurações desejadas em vigor.
- Permitir que os administradores compartilhem informações de configuração com facilidade entre vários servidores Web front-end e fazendas da Web (assim que um site esteja em produção), evitando problemas caros e propensos a erros de replicação e sincronização manual. Você pode fazer isso armazenando arquivos Web.config em um servidor de arquivos de back-end e fazendo referência a eles de vários servidores Web front-end.

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

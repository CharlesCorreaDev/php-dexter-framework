# Compatibilidade do Metabase com o IIS 7 e superior | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/metabase-compatibility-with-iis-7-and-above

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

# Compatibilidade do Metabase com o IIS 7 e superior

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Introdução

O sistema de configuração no IIS 7 e superior é compatível com interfaces de configuração herdadas no nível da API. Ele dá suporte à interface ABO (Objetos Base de Administração), também conhecida como IMSAdminBase, bem como aos provedores ADSI e WMI que foram criados sobre o ABO no IIS 6.0. Aplicativos e scripts existentes ainda podem chamar essas interfaces programáticas no IIS 7.0 e superior e continuar funcionando, desde que o componente de compatibilidade do Metabase do IIS esteja instalado

Observação

Por padrão, esse componente não está instalado.

## Instalando o suporte à compatibilidade do Metabase

Você pode encontrar este componente na instalação em Serviços de Informações da Internet-> Ferramentas de Gerenciamento da Web –> Funcionalidade de Gerenciamento do IIS 6.0.

Esse componente não é instalado por padrão porque o IIS não está configurado inicialmente para usá-lo. As interfaces herdadas têm algumas limitações e não são ideais para trabalhar com arquivos de configuração distribuídos (consulte a seção Limitações abaixo); portanto, é recomendável que, ao longo do tempo, e especialmente ao abrir o sistema de configuração para mais e mais delegação (ou seja, cada vez mais arquivos web.config com as configurações do IIS neles estejam presentes no sistema), os clientes considerarão a portabilidade de scripts e aplicativos herdados para o novo sistema e suas interfaces.

Também é recomendável que novos scripts e aplicativos sejam desenvolvidos usando as novas interfaces, para que funcionem idealmente com o novo sistema e possam ter acesso às novas propriedades, conceitos e estrutura do sistema de configuração.

Quando todos os scripts e aplicativos herdados são portados para as novas interfaces, é recomendável desinstalar o recurso de compatibilidade do Metabase.

## Como funciona a compatibilidade do Metabase

O recurso de compatibilidade do Metabase é executado dentro do serviço metabase (IISADMIN). Ele intercepta todas as chamadas de método para a ABO. Se as informações na chamada de método estiverem relacionadas à configuração do servidor Web, elas serão mapeadas para o novo sistema. Se estiver relacionado a FTP, SMTP ou configuração NNTP, ele seguirá a lógica regular do sistema Metabase e acabará no arquivo Metabase.

Observe que até mesmo as propriedades personalizadas que estão sob a configuração do servidor Web são mapeadas para (e persistidas) para o novo sistema.

A decisão de mapeamento baseia-se no nó metabase em questão. A configuração do servidor Web normalmente está em LM/W3SVC, incluindo propriedades personalizadas, com algumas adições, como Mapas MIME.

O mapeamento é feito para traduzir para frente e para trás entre a exibição do ABO e a nova exibição do sistema. Por exemplo, o novo sistema tem um conceito de aplicativos, em cada site e acima de todos os diretórios virtuais. O sistema herdado lida com aplicativos de forma diferente: eles são simplesmente diretórios virtuais com uma propriedade especial para marcá-los como aplicativos (AppIsolated ou AppRoot).

Ao chamar a ABO para gravar a configuração do servidor Web, o componente de compatibilidade do Metabase persistirá os dados em applicationHost.config. Isso é chamado de "write-through", porque as informações não são mantidas na memória. Ao chamar a ABO para ler a configuração do servidor Web, o componente de compatibilidade do Metabase o lerá de applicationHost.config. Isso é conhecido como "read-through", porque as informações não são buscadas novamente da memória.

Dados incompletos que não estão prontos para consumo pelo runtime do servidor são mantidos em uma seção especial no applicationHost.config, chamada customMetadata. Esta seção é usada como um repositório persistente para o recurso de compatibilidade do Metabase e os clientes nunca devem modificar seu conteúdo. Um exemplo de dados incompletos é quando o script herdado define a ID do site, mas não as associações de site. No IIS 6.0, essa chamada teria criado um objeto de site inválido na configuração. No IIS 7.0 e superior, ele é mantido na seção, que não é consumida pelo servidor. Se uma chamada subsequente for feita para definir as associações do site, o objeto do site será considerado concluído e armazenado integralmente na seção, onde será reconhecido pelo runtime do servidor. Os dados temporários serão removidos naquele ponto, dessa forma, o usuário não precisará limpar as sobras do sistema. Se essa chamada subsequente não for feita, o runtime do servidor nunca verá esse site inválido, mas os scripts herdados o terão no modo de exibição ABO, assim como fizeram no IIS 6.0. Do ponto de vista do script herdado, o sistema é totalmente compatível aqui com o IIS 6.0.

As propriedades personalizadas do servidor Web que são definidas por meio de scripts e aplicativos herdados são sempre mantidas na seção. Eles podem ser recuperados por meio da interface herdada, assim como no IIS 6.0, portanto, o sistema é totalmente compatível. Obviamente, isso é muito diferente da maneira recomendada de estender o sistema de configuração do IIS, portanto, outro motivo para considerar a portabilidade desses aplicativos, ao longo do tempo, para usar novas interfaces e novos recursos oferecidos pelo sistema de configuração do IIS 7.0 e acima.

## Outros dados de configuração de metabase

Observe que a configuração de FTP, SMTP e NNTP ainda é mantida no sistema metabase e não foi portada para os novos sistemas de configuração do IIS. As configurações para elas ainda podem ser gerenciadas por meio de interfaces programáticas herdadas e edição direta do arquivo metabase.xml.

### Visão geral

A maioria das operações em chaves e propriedades do Metabase funciona perfeitamente e o usuário é apresentado a esses conceitos e nomes herdados e não aos novos conceitos do IIS, como seções de configuração e propriedades nomeadas (a ABO continua a trabalhar com IDs de propriedade; A ADSI continua a trabalhar com os nomes de propriedade herdados).

Os usuários herdados ainda podem usar o esquema ADSI e até mesmo estendê-lo como antes no IIS 6.0.

### Compatibilidade de arquivo XML

A configuração do servidor Web, incluindo a configuração personalizada que estende o servidor Web, é mantida no system32\inetsrv\applicationHost.config, and not metabase.xml. Portanto, o suporte herdado está no nível da API e não no nível do formato de arquivo (e também é por isso que alguns recursos herdados não têm suporte). O chamador de interface herdado obterá a "exibição ABO" da configuração da mesma forma que fez no IIS 6.0, e não o novo formato de arquivo ou nomenclatura ou conceitos.

Uma implicação é que não há suporte para conceitos como ACLs do Metabase. Isso ocorre porque eles estão fortemente relacionados ao formato de arquivo metabase. O sistema de configuração do IIS está utilizando ACLs de arquivo padrão nos arquivos de configuração. O sistema não está fornecendo mapeamento entre ACLs do Metabase e ACLs de arquivo padrão.

Recursos como arquivos de histórico, backup/restauração e importação/exportação funcionam de forma diferente porque dependem do novo sistema de configuração. Portanto, as chamadas da ABO para a configuração de backup serão ignoradas.

## Recursos herdados do Metabase

A auditoria de configuração foi adicionada ao IIS 6.0 no Windows Server® 2003 Service Pack 1. No momento, não há suporte para o IIS 7.0 ou superior, pois o novo sistema de configuração é arquitetado de forma muito diferente (por exemplo, IIS 7.0 e acima usam o sistema de configuração in-proc, o IIS 6.0 está usando um serviço NT dedicado encapsulado do código do usuário em outros processos).

### Propriedades de metabase herdadas

Há suporte apenas para propriedades herdadas. As propriedades de configuração do IIS 7.0 e superiores não são retornadas ao usuário herdado, assim como as propriedades de configuração do .NET Framework.

### Limitações de mapeamento

O algoritmo de mapeamento precisa cuidar das diferenças entre o IIS 6.0 e o IIS 7.0 e os sistemas de configuração acima. Por exemplo, o IIS 6.0 não exigia que os sites tivessem nomes ("comentários do servidor"); e se eles receberam nomes, não havia nenhum requisito para que esses nomes fossem exclusivos. No IIS 7.0 e superior, cada site deve ter um nome exclusivo. Portanto, mapear a propriedade ServerComment antiga para a nova propriedade Name não é trivial. O algoritmo de mapeamento força os nomes a serem exclusivos por site, pois esse é um requisito do sistema de configuração do IIS 7.0 e superior; ele faz isso adicionando números aos comentários do servidor para criar exclusividade. O resultado final é que o valor que é realmente definido para o comentário do servidor é diferente daquele especificado pelo script.

### Configuração Distribuída

Somente applicationHost.config é compatível com o recurso de compatibilidade do Metabase. A configuração em arquivos web.config não é retornada ao usuário legado. As marcas de localização são usadas em applicationHost.config para dar suporte à configuração por URL.

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
  2024-03-14

# Usando APIs gerenciadas no IIS 7 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/using-managed-apis-in-iis-7

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

# Usando APIs gerenciadas no IIS 7

Comentários

por [Walter Oliver](https://github.com/walterov)

## Introdução

O IIS 7 fornece uma API (interface de programação de aplicativo) de gerenciamento de código gerenciado abrangente que permite a manipulação completa dos arquivos de configuração XML e o acesso de conveniência aos objetos do servidor. Este artigo apresenta a nova API de gerenciamento usada para modificar a configuração do servidor e administrar objetos de servidor.

O IIS 7 inclui Microsoft.Web.Administration, que é uma nova API de gerenciamento para o servidor Web que permite a edição de configuração por meio da manipulação completa dos arquivos de configuração XML e também fornece objetos de conveniência para gerenciar o servidor, suas propriedades e estado. O aspecto de edição de configuração da API fornece acesso programático às propriedades de configuração de leitura e gravação na hierarquia de arquivos de configuração do IIS e arquivos de configuração específicos. O aspecto de gerenciamento de objetos dessa API fornece uma série de objetos de administração de nível superior para o gerenciamento direto do servidor (ou seja, sites, pools de aplicativos, processos de trabalho etc.).

## Classes e objetos

As classes de gerenciamento residem no namespace Microsoft.Web.Administration. As classes fornecem uma interface de tipo fraco para acessar seções de configuração e objetos de conveniência com propriedades e métodos que representam atributos da configuração (como o caminho de um diretório virtual) ou ações a serem executadas no objeto (como reciclar um pool de aplicativos).

O ServerManager é a classe de fábrica que contém um conjunto de objetos utilitários do servidor para os quais propriedades e métodos estão disponíveis para uso fortemente tipado. ServerManager é o principal ponto de entrada para gerenciar o servidor. O gerenciamento do servidor pode ser feito por meio de outras rotas complicadas (como acessar a configuração XML bruta ou chamar APIs de estado), mas, com o uso desses objetos, o gerenciamento do servidor torna-se simples e sem complicações.

O conjunto mais comum de objetos está disponível para uso por meio do gerenciador de servidores:

- Aplicativos
- Diretórios virtuais
- Sites
- Processos de trabalho
- Domínios de aplicativo

### Diagrama

O seguinte mostra os objetos principais (excluindo classes relacionadas à configuração).

[![Diagrama dos objetos principais, mostrando a relação da classe Gerenciador de Servidores com outras classes.](using-managed-apis-in-iis-7/_static/image3.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/using-managed-apis-in-iis-7/_static/image1.jpg)

A classe ServerManager também fornece métodos para obter configurações diferentes, como web.confige administration.config, etc., e retorna como classe Configuration, que permite navegar pelas diferentes entidades XML para gerenciar várias configurações.

Como as APIs Microsoft.Web.Administration expõem apenas determinadas entidades-chave como objetos fortemente tipados (por exemplo, Site, ApplicationPool e Application) usados para gerenciar outras configurações, é necessário usar objetos de configuração com tipo fraco, ou seja, ConfigurationElement, ConfigurationSection e assim por diante.
[Este exemplo](manage__provisioning-and-managing-iis__provisioning-sample-in-c.md#CreateFTPsite "Provisionamento do site FTP") ilustra-o ao provisionar um site FTP, que não é exposto como um objeto fortemente tipado.

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

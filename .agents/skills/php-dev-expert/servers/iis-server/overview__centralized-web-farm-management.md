# Gerenciamento centralizado de fazenda Web | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/overview/centralized-web-farm-management

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

# Gerenciamento centralizado de fazenda de servidores web

Comentários

Implante e gerencie sites e aplicativos em grandes farms de servidores Web de um local central.

O IIS facilita a implantação e o gerenciamento centralizado de configuração e conteúdo em um farm de servidores Web.

## Compartilhar Configuração e Conteúdo

Um recurso inovador chamado [Configuração Compartilhada](https://learn.microsoft.com/pt-br/IIS/manage/managing-your-configuration-settings/shared-configuration_264) permite que os administradores:

- Coloque a configuração do IIS em um volume compartilhado (compartilhamento de arquivos de rede ou disco compartilhado).
- Aponte vários servidores Web para esse único arquivo de configuração.

O conteúdo da Web também pode ser compartilhado em um volume de rede em vários servidores. Esse conteúdo compartilhado permite que atualizações de configuração e conteúdo se apliquem automaticamente a todos os sites conectados ao compartilhamento. Todas as [ferramentas de configuração e gerenciamento do IIS](overview__powerful-admin-tools.md) (`AppCmd.exe`, Gerenciador do IIS etc.) funcionam com a configuração do IIS, seja local ou compartilhada.

## Empacotar, arquivar, migrar e sincronizar

![Captura de tela da janela Instalar um Pacote.](centralized-web-farm-management/_static/ms-deploy-big.png)

O IIS dá suporte à [Ferramenta de Implantação da Web da Microsoft](publish__using-web-deploy__using-web-deploy-for-web-farms.md), que fornece suporte para sincronização:

- Configuração e conteúdo.
- Todos os tipos de dependências de aplicativo Web, incluindo assemblies GAC, dlls COM, bancos de dados SQL, certificados SSL e muito mais.

A Ferramenta de Implantação da Web da Microsoft simplifica a implantação, o gerenciamento e a migração de:

- Aplicativos Web
- Sites da Web
- Todos os servidores Web.

Os desenvolvedores podem empacotar um site: conteúdo, configuração, certificados e bancos de dados. Esses pacotes podem ser implantados diretamente em um servidor ou empacotados e compartilhados com outras pessoas. Os profissionais de TI podem permitir que os desenvolvedores implantem esses pacotes em um servidor e delegam acesso a não administradores. Os profissionais de TI podem usar a ferramenta em sua infraestrutura para:

- Sincronizar servidores no IIS 6.0 e no IIS 7.0
- Migrar do IIS 6.0 para o IIS 7.0

Aqui estão apenas alguns dos recursos que a ferramenta habilita:

- Crie um pacote que contenha conteúdo, configuração e bancos de dados SQL. Esse pacote pode ser usado para implantação ou compartilhamento com outras pessoas.
- Use o pacote como uma forma de fazer a versão do aplicativo ou criar backups.
- Permitir que não administradores implantem pacotes e controlem granularmente seu acesso.
- Sincronize ou migre sites e servidores que executam o IIS 6.0 e o IIS 7.0.

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

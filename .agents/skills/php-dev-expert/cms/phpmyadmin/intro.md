# Introdução — documentação phpMyAdmin 6.0.0-dev

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/intro.html

---

# Introdução[¶](#introduction "Link permanente para este título")

phpMyAdmin é uma ferramenta de software livre escrita em PHP que se destina a lidar com a administração de um servidor de banco de dados MySQL ou MariaDB. Você pode usar o phpMyAdmin para executar a maioria das tarefas de administração, incluindo a criação de um banco de dados, a execução de consultas e a adição de contas de usuários.

## Funções suportadas[¶](#supported-features "Link permanente para este título")

Atualmente o phpMyAdmin pode:

- criar, navegar, editar e eliminar bancos de dados, tabelas, views, colunas e índices
- mostrar múltiplos conjuntos de resultados através de procedimentos armazenados ou queries
- criar, copiar, eliminar, renomear e alterar bancos de dados, tabelas, colunas e índices
- manutenção de servidores, bancos de dados e tabelas, com propostas para configurações de servidor
- executar, editar e marcar qualquer declaração [SQL](glossary.md#term-sql), até mesmo consultas em lote
- carregar arquivos de texto em tabelas
- criar [[1]](#f1) e ler despejos de tabelas
- exportar [[1]](#f1) dados para vários formatos: [CSV](glossary.md#term-csv), [XML](glossary.md#term-xml), [PDF](glossary.md#term-pdf), [ISO](glossary.md#term-iso)/[IEC](glossary.md#term-iec) 26300 - textos e planilhas [OpenDocument](glossary.md#term-opendocument), Microsoft Word 2000, e formatos LATEX
- importar dados e estruturas [MySQL](glossary.md#term-47) de planilhas [OpenDocument](glossary.md#term-opendocument), assim como de arquivos [XML](glossary.md#term-xml), [CSV](glossary.md#term-csv) e [SQL](glossary.md#term-sql)
- administrar vários servidores
- adicionar, editar e remover contas de usuário e privilégios do MySQL
- verificar a integridade referencial em tabelas MyISAM
- criar gráficos [PDF](glossary.md#term-pdf) do layout do seu banco de dados
- pesquisar em um banco de dados inteiro ou em apenas em uma parte
- converter dados armazenados em qualquer formato usando um conjunto de funções pré-definidas, como exibir dados armazenados no formato BLOB como imagem ou como link para download
- controlar alterações em bancos de dados, tabelas e visualizações
- suportar tabelas InnoDB e chaves estrangeiras
- suporte a mysqli, a extensão melhorada do MySQL; veja [1.17 Quais versões de bancos de dados são suportadas pelo phpMyAdmin?](faq.md#faq1-17)
- criar, editar, chamar, exportar e apagar processos e funções armazenadas
- criar, editar, exportar e apagar eventos e gatilhos
- disponível em [80 linguagens diferentes](https://www.phpmyadmin.net/translations/)

## Teclas de atalho[¶](#shortcut-keys "Link permanente para este título")

Atualmente o phpMyAdmin suporta os seguintes atalhos:

- k - Abrir consola
- h Ir à página principal
- Configurações genéricas
- d + s Seguir para a estrutura da base de dados (Assumindo que você está numa página relacionada a bases de dados)
- d + f - Procurar na base de dados (Assumindo que você está numa página relacionada a bases de dados)
- t + s - Ir para a estrutura de tabelas (Apenas estando numa página relacionada a bases de dados)
- t + f - Procurar tabela (Apenas estando numa página relacionada a bases de dados)
- backspace - Leva você a uma página anterior.

## Uma palavra sobre os usuários[¶](#a-word-about-users "Link permanente para este título")

Muitas pessoas têm dificuldade em compreender o conceito de gestão de usuários em relação ao phpMyAdmin. Quando um usuário se conecta ao phpMyAdmin, o nome de usuário e a senha são passados diretamente ao MySQL. O phpMyAdmin não faz gestão de contas por si só (exceto quando é permitida a manipulação das informações da conta de usuário do MySQL); todos os usuários devem ser usuários válidos do MySQL.

Notas de rodapé

|  |  |
| --- | --- |
| [1] | *([1](#footnote-reference-1), [2](#footnote-reference-2))* phpMyAdmin can compress ([ZIP](glossary.md#term-zip), [GZip](glossary.md#term-gzip) or [RFC 1952](glossary.md#term-rfc-1952) formats) dumps and [CSV](glossary.md#term-csv) exports if you use PHP with [Zlib](glossary.md#term-zlib) support (`--with-zlib`). Proper support may also need changes in `php.ini`. |

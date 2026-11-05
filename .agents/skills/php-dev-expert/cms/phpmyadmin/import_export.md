# Importar e exportar — documentação phpMyAdmin 6.0.0-dev

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/import_export.html

---

# Importar e exportar[¶](#import-and-export "Link permanente para este título")

## Importar[¶](#import "Link permanente para este título")

Para importar dados, vá para a aba “Importar” no phpMyAdmin. Para importar dados em um banco de dados ou tabela específica, abra o banco de dados ou tabela antes de ir para a aba “Importar”.

Além das abas padrão de Importar e Exportar, você também pode importar um arquivo SQL diretamente arrastando e soltando-o do seu gerenciador de arquivos para a interface do phpMyAdmin no seu navegador.

Se você tiver problemas para importar arquivos grandes, consulte [1.16 Eu não consigo subir arquivos de exportação grandes (memória, HTTP ou problemas de timeout).](faq.md#faq1-16).

Você pode importar usando os seguintes métodos:

Upload via formulário

> Pode ser usado com qualquer formato suportado e também com arquivos (b|g)zipados, por exemplo, mydump.sql.gz .

Consulta SQL via formulário

> Pode ser usada com dumps SQL válidos.

Usando um diretório de upload

> Você pode especificar um diretório de upload no seu servidor web onde o phpMyAdmin está instalado, após fazer o upload do arquivo para esse diretório você pode selecioná-lo na caixa de diálogo de importação do phpMyAdmin, veja [`$cfg['UploadDir']`](config.md#cfg_UploadDir).

O phpMyAdmin pode importar a partir de vários formatos comumente usados.

### CSV[¶](#csv "Link permanente para este título")

Formato de valores separados por vírgula (CSV) que é frequentemente usado por planilhas ou vários outros programas para exportação/importação.

Nota

Ao importar dados de um arquivo CSV para uma tabela com um campo ‘auto\_increment’, deixe o valor do campo ‘auto\_increment’ em cada registro do CSV igual a ‘0’ (zero). Isso permite que o campo com ‘auto\_increment’ seja preenchido corretamente.

Agora é possível importar um arquivo CSV no nível do servidor ou do banco de dados. Ao invés de ter que criar uma tabela para importar o arquivo CSV, uma estrutura que melhor se ajuste aos dados será determinada para você e os dados serão importados nela. Todos os outros recursos, requisitos e limitações permanecem como antes.

### CSV usando LOAD DATA[¶](#csv-using-load-data "Link permanente para este título")

Similar ao CSV, só que usando o analisador interno do MySQL e não o do phpMyAdmin.

### Shapefile ESRI[¶](#esri-shape-file "Link permanente para este título")

O shapefile ESRI, ou simplesmente shapefile, é um formato popular de dados vetoriais geoespaciais para softwares de sistemas de informação geogŕafica. Ele é desenvolvido e regulado pela Esri como uma especificação (em grande parte) aberta para interoperabilidade de dados entre a Esri e outros produtos de software.

### MediaWiki[¶](#mediawiki "Link permanente para este título")

Arquivos MediaWiki, que podem ser exportados pelo phpMyAdmin (versão 4.0 ou posterior), agora também podem ser importados. Este é o formato usado pela Wikipédia para exibir tabelas.

### Open Document Spreadsheet (ODS)[¶](#open-document-spreadsheet-ods "Link permanente para este título")

Os arquivos OpenDocument contendo uma ou mais planilhas agora podem ser importados diretamente.

When importing an ODS spreadsheet, the spreadsheet must be named in a specific way in order to make the
import as simple as possible.

#### Nome da Tabela[¶](#table-name "Link permanente para este título")

Durante a importação, o phpMyAdmin usa o nome da folha como o nome da tabela; você deve renomear a folha em sua planilha para combinar com o nome da tabela existente (ou da tabela que deseja criar, apesar que nesse caso você pode renomear rapidamente a nova tabela na aba Operações).

#### Nome das colunas[¶](#column-names "Link permanente para este título")

Você também deve fazer, na primeira linha de sua planilha, um cabeçalho com os nomes das colunas (isso pode ser obtido inserindo uma nova linha na parte superior da planilha). Na tela Importar, marque a caixa de seleção para “A primeira linha do arquivo contém os nomes das colunas da tabela”; desta forma, os dados recém-importados irão para as colunas apropriadas.

Nota

As fórmulas e os cálculos NÃO serão avaliados, ao invés disso, o valor da última versão salva será carregado. Certifique-se de que todos os valores na planilha estão no formato necessário antes de importá-la.

### SQL[¶](#sql "Link permanente para este título")

O SQL pode ser usado para fazer qualquer manipulação em dados e também é útil para restaurar dados de backup.

### XML[¶](#xml "Link permanente para este título")

Os arquivos XML exportados pelo phpMyAdmin (versão 3.3.0 ou posterior) agora podem ser importados. Estruturas (bancos de dados, tabelas, visualizações, gatilhos, etc.) e/ou dados serão criados dependendo do conteúdo do arquivo.

Os esquemas xml suportados ainda não estão documentados neste wiki.

## Exportar[¶](#export "Link permanente para este título")

O phpMyAdmin pode exportar para arquivos de texto (até mesmo compactados) no seu disco local (ou em uma pasta especial [`$cfg['SaveDir']`](config.md#cfg_SaveDir) no servidor web) em vários formatos comumente usados:

### CodeGen[¶](#codegen "Link permanente para este título")

Formato de arquivo [NHibernate](https://pt.wikipedia.org/wiki/NHibernate). Versões planejadas: Java, Hibernate, PHP PDO, JSON, etc. O nome preliminar é codegen.

### CSV[¶](#csv-1 "Link permanente para este título")

Formato de valores separados por vírgula (CSV) que é frequentemente usado por planilhas ou vários outros programas para exportação/importação.

### CSV para Microsoft Excel[¶](#csv-for-microsoft-excel "Link permanente para este título")

Esta é só uma versão pré-configurada da exportação CSV que pode ser importada na maioria das versões em inglês do Microsoft Excel. Algumas versões localizadas (como o português) esperam “;” em vez de “,” como separador de campo.

### Microsoft Word 2000[¶](#microsoft-word-2000 "Link permanente para este título")

Se você estiver usando o Microsoft Word 2000 ou mais recente (ou compatível, como o OpenOffice.org), você pode usar essa exportação.

### JSON[¶](#json "Link permanente para este título")

JSON (JavaScript Object Notation) é um formato leve de intercâmbio de dados. É fácil para humanos lerem e escreverem e é fácil para máquinas analisarem e gerarem.

Alterado na versão 4.7.0: A estrutura JSON gerada foi alterada no phpMyAdmin 4.7.0 para produzir dados JSON válidos.

O JSON gerado é uma lista de objetos com os seguintes atributos:

`type`[¶](#type "Link permanente para esta definição")
:   Tipo do objeto em questão, pode ser um dos seguintes:

    `header`
    :   Cabeçalho de exportação contendo comentários e versão do phpMyAdmin.

    `database`
    :   Início de um marcador de banco de dados, contendo o nome do banco de dados.

    `table`
    :   Exportação de dados da tabela.

`version`[¶](#version "Link permanente para esta definição")
:   Usado no [`type`](#type "type") `header` e indica a versão do phpMyAdmin.

`comment`[¶](#comment "Link permanente para esta definição")
:   Comentário de texto opcional.

`name`[¶](#name "Link permanente para esta definição")
:   Nome do objeto - tabela ou banco de dados, com base no [`type`](#type "type").

`database`[¶](#database "Link permanente para esta definição")
:   Nome do banco de dados para o [`type`](#type "type") `table`.

`data`[¶](#data "Link permanente para esta definição")
:   Conteúdo da tabela para o [`type`](#type "type") `table`.

Exemplo de saída:

```
[
    {
        "comment": "Export to JSON plugin for PHPMyAdmin",
        "type": "header",
        "version": "4.7.0-dev"
    },
    {
        "name": "cars",
        "type": "database"
    },
    {
        "data": [
            {
                "car_id": "1",
                "description": "Green Chrysler 300",
                "make_id": "5",
                "mileage": "113688",
                "price": "13545.00",
                "transmission": "automatic",
                "yearmade": "2007"
            }
        ],
        "database": "cars",
        "name": "cars",
        "type": "table"
    },
    {
        "data": [
            {
                "make": "Chrysler",
                "make_id": "5"
            }
        ],
        "database": "cars",
        "name": "makes",
        "type": "table"
    }
]
```

### LaTeX[¶](#latex "Link permanente para este título")

Se você deseja incorporar dados ou estrutura de tabela no LaTeX, esta é a escolha certa para você.

LaTeX é um sistema de composição muito adequado para a produção de documentos científicos e matemáticos de alta qualidade tipográfica. Também é adequado para produzir todo tipo de documentos, desde cartas simples até livros completos. O LaTeX usa o TeX como seu mecanismo de formatação. Saiba mais sobre o TeX e o LaTeX no [Comprehensive TeX Archive Network](https://www.ctan.org/), também veja esta [curta descrição do TeX](https://www.ctan.org/tex/).

A saída precisa ser incorporada a um documento LaTeX antes de poder ser processada, por exemplo no documento a seguir:

```
\documentclass{article}
\title{phpMyAdmin SQL output}
\author{}
\usepackage{longtable,lscape}
\date{}
\setlength{\parindent}{0pt}
\usepackage[left=2cm,top=2cm,right=2cm,nohead,nofoot]{geometry}
\pdfpagewidth 210mm
\pdfpageheight 297mm
\begin{document}
\maketitle

% insert phpMyAdmin LaTeX Dump here

\end{document}
```

### MediaWiki[¶](#mediawiki-1 "Link permanente para este título")

Tanto tabelas quanto bancos de dados podem ser exportados no formato MediaWiki, que é usado pela Wikipédia para exibir tabelas. É possível exportar estrutura, dados ou ambos, incluindo nomes de tabelas ou cabeçalhos.

### Planilha OpenDocument[¶](#opendocument-spreadsheet "Link permanente para este título")

Padrão aberto para planilha de dados, que está sendo amplamente adotado. Muitos programas de planilhas recentes, como LibreOffice, OpenOffice, Microsoft Office ou Google Docs podem lidar com esse formato.

### Texto OpenDocument[¶](#opendocument-text "Link permanente para este título")

New standard for text data which is being widely adopted. Most recent word
processors (such as LibreOffice, OpenOffice, Microsoft Word, AbiWord or KWord)
can handle this.

### PDF[¶](#pdf "Link permanente para este título")

Para fins de apresentação, um PDF não editável pode ser a melhor escolha para você.

### Array do PHP[¶](#php-array "Link permanente para este título")

Você pode gerar um arquivo php que irá declarar uma matriz multidimensional com o conteúdo da tabela ou banco de dados selecionado.

### SQL[¶](#sql-1 "Link permanente para este título")

A exportação em SQL pode ser usada para restaurar o seu banco de dados, portanto, é útil para fazer backup.

A opção ‘Comprimento máximo da consulta criada’ parece não estar documentada. Mas experimentos mostraram que ela divide grandes INSERTs estendidos para que cada um não seja maior do que um número específico de bytes (ou caracteres?). Assim, ao importar o arquivo, para tabelas grandes você evita o erro “Obteve um pacote maior do que ‘max\_allowed\_packet’ bytes”.

Ver também

<https://dev.mysql.com/doc/refman/5.7/en/packet-too-large.html>

#### Opções de Dados[¶](#data-options "Link permanente para este título")

**Inserts completos** adiciona os nomes das colunas ao dump SQL. Este parâmetro melhora a legibilidade e a confiabilidade do dump. Adicionar os nomes das colunas aumenta o tamanho do dump, mas quando combinado com inserções estendidas torna-se insignificante.

**Inserts estendidos** combina várias linhas de dados em uma única consulta INSERT. Isso irá reduzir significativamente o tamanho do arquivo para grandes dumps SQL, aumenta a velocidade do INSERT quando importado e é geralmente recomendado.

### Texy![¶](#texy "Link permanente para este título")

Formato de marcação [Texy!](https://texy.info/). Você pode ver um exemplo no [Texy! demo](https://texy.info/en/try/4q5we).

### XML[¶](#xml-1 "Link permanente para este título")

Exportação facilmente analisável para uso com scripts personalizados.

Alterado na versão 3.3.0: O esquema XML usado mudou a partir da versão 3.3.0

### YAML[¶](#yaml "Link permanente para este título")

O YAML é um formato de serialização de dados que é tanto legível por humanos e computacionalmente poderoso ( <<https://yaml.org>> ).

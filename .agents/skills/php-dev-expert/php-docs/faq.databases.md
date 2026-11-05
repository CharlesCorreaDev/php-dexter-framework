# Questões sobre banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/faq.databases.php

---

# Questões sobre banco de dados

Esta seção possui questões comuns sobre a relação entre
o PHP e bases de dados. Sim, o PHP pode acessar virtualmente
qualquer base de dados disponível atualmente.

1. [Eu ouvi que é possível acessar o Microsoft SQL Server através do PHP. Como?](#faq.databases.mssql)
2. [Consigo acessar bases de dados Microsoft Access?](#faq.databases.access)

**Eu ouvi que é possível acessar o Microsoft SQL Server através do PHP. Como?**
:   Em máquinas Unix você pode utilizar o [PDO\_ODBC](ref.pdo-odbc.md)
    ou a [API ODBC Unificada](book.uodbc.md).

    Em máquinas Windows você também pode utilizar [PDO\_SQLSRV](ref.pdo-sqlsrv.md)
    ou [SQLSRV](book.sqlsrv.md).

    Veja também a resposta da questão seguinte.

**Consigo acessar bases de dados Microsoft Access?**
:   Se você estiver rodando PHP em uma box Unix e quiser conversar com o Microsoft Access
    em uma box Windows será necessário instalar os drivers ODBC para Unix.
    [» OpenLink Software](https://www.openlinksw.com/) possui drivers
    para sistemas baseados em Unix que podem fazer isto.

    Outra alternativa é usar um servidor SQL que possua
    drivers Windows ODBC e utilizá-los para armazenar os dados, que você pode
    então acessar através do Microsoft Access (usando ODBC) e do PHP (usando os
    drivers já existentes), ou usando um formato de arquivo intermediário que o Microsoft Access
    e o PHP consigam entender, como arquivos comuns ou bases de dados dBase.
    Neste ponto Tim Hayes, da OpenLink Software, escreve:
    > Usar outra base de dados como intermediária não é uma boa ideia, quando você pode
    > usar o ODBC do PHP diretamente para a base de dados - por exemplo, com os drivers fornecidos pela OpenLink. Se
    > você precisar utilizar um formato de arquivo intermediário, a OpenLink lançou
    > o Virtuoso (uma engine de base de dados virtual) para NT, Linux e outras plataformas Unix.
    > Por favor visite [» nossa página](https://www.openlinksw.com/) para um download gratuito.

    Uma opção que se mostrou funcional é utilizar MySQL e seus
    drivers MyODBC no Windows e sincronizar as bases de dados. Steve Lawrence
    disse:

    - Instale o MySQL em sua plataforma normalmente.
      A ultima versão está disponível em [» https://www.mysql.com/](https://www.mysql.com/)
      Nenhuma configuração especial é necessária, exceto quando você configura um banco de dados, e configura
      uma conta de usuário, quando você deve colocar % no campo host, ou o hostname da
      máquina Windows com a qual você deseja acessar o MySQL. Anote o nome do seu servidor,
      o usuário e a senha.
    - Baixe o driver MyODBC para Windows através do site oficial do MySQL.
      Instale-o em sua máquina Windows. Você pode testar a operação
      com os utilitários incluídos no programa.
    - Crie um usuário ou dsn de sistema em seu ODBC Administrator, localizado no
      painel de controle. Crie um nome dsn, entre com seu hostname, usuário, senha,
      porta, etc. para sua base de dados MySQL configurada no passo 1.
    - Instale o Access com uma instalação completa, isto dá certeza de que você instalou
      os add-ins necessários... você precisará, ao menos, ter suporte à ODBC e
      ao gerenciador de tabelas ligadas (linked table manager).
    - Agora a parte divertida! Crie uma nova base de dados Access. Clique com o botão
      direito na janela de tabelas e selecione Link Tables, ou sob
      o menu File selecione Get External Data e depois Link Tables.
      Quando a caixa de navegação de arquivos aparecer, selecione arquivos do tipo: ODBC.
      Selecione System dsn e o nome do dsn criado no passo 3.
      Selecione a tabela para ligar, pressione OK, e presto!
      Agora você consegue abrir a tabela e adicionar/remover/editar dados em seu servidor MySQL!
      Você também pode construir queries, importar/exportar tabelas para MySQL,
      construir formulários e relatórios, etc.

    Dicas e Truques:

    - Você pode construir suas tabelas no Access e exportá-las
      para o MySQL, e então conectá-las de volta. Isto torna o processo de
      criação de tabelas mais rápido.
    - Quando criar tabelas no Access você deve definir uma
      chave primária para ter acesso à escrita na tabela no
      Access. Certifique-se de que criou uma chave primária no MySQL antes
      de conectá-lo ao Access.
    - Se você alterar a tabela no MySQL, você deve conectá-la
      novamente no Access. Vá para tools > add-ins > linked table manager,
      vá até seu ODBC DSN, e selecione a tabela para conectá-la novamente
      a partir de lá. Você também pode mover seu fonte dsn por ali,
      apenas selecione o checkbox "always prompt for new location" antes
      de pressionar OK.

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});

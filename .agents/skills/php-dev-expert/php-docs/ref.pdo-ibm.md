# Driver PDO da IBM (PDO_IBM)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-ibm.php

---

# Driver PDO da IBM (PDO\_IBM)

## Introdução

PDO\_IBM é um driver que implementa a interface aos  [Objetos
de Dados PHP (PDO)](book.pdo.md#intro.pdo) para permitir acesso do PHP a bancos de dados IBM.

## Instalação

Para construir a extensão PDO\_IBM, o DB2 Client v9.1 ou posterior deve ser
instalado no mesmo sistema que o PHP. O DB2 Client pode ser obtido
do [» Site de Desenvolvimento de
Aplicativos](https://www.ibm.com/software/data/db2/ad) da IBM.

> **Nota**:
> **Notas**  
>
> O DB2 Client v9.1 ou posterior suporta acesso direto aos servidores DB2 para Linux,
> UNIX e Windows v8 e v9.1.
>
> O DB2 Client v9.1 também suporta acesso a servidores DB2 UDB para i5 e DB2 UDB
> para z/OS usando o [» produto DB2 Connect](https://www.ibm.com/software/data/db2/db2connect)
> adquirido separadamente.

PDO\_IBM é uma extensão [» PECL](https://pecl.php.net/), portanto siga as instruções em
[Instalação das extensões PECL](install.pecl.md) para instalar a extensão PDO\_IBM.
Execute o comando **configure** para apontar o caminho dos
arquivos de cabeçalho e bibliotecas do DB2 Client, conforme a seguir:

```
bash$ ./configure --with-pdo-ibm=/caminho/para/sqllib[,shared]
```

O comando **configure** tem como padrão o valor da
variável de ambiente DB2DIR.

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração do PDO\_IBM**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [pdo\_ibm.i5\_dbcs\_alloc](ref.pdo-ibm.md#ini.pdo-ibm.i5-dbcs-alloc) | "0" | **`INI_SYSTEM`** | Adicionado no PDO\_IBM 1.5.0 |
| [pdo\_ibm.i5\_override\_ccsid](ref.pdo-ibm.md#ini.pdo-ibm.i5-override-ccsid) | "0" | **`INI_SYSTEM`** | Adicionado no PDO\_IBM 1.5.0 |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`pdo_ibm.i5_dbcs_alloc` [int](language.types.integer.md)
:   Esta opção afeta a estratégia de alocação de buffer interno no IBM i.
    Por padrão, esta opção é 0. Quando esta opção é definida, os buffers são
    alocados com um tamanho muito maior, caso o banco de dados se engane
    sobre o tamanho dos caracteres ao converter entre codificações. Esta opção usa
    seis vezes mais memória para buffers (para considerar as maiores sequências
    UTF-8 possíveis), mas pode ser necessária se forem retornados dados truncados.

    - 0 - Buffers de tamanho mínimo são alocados.
    - 1 - Buffers de tamanho maior são alocados.

`pdo_ibm.i5_override_ccsid` [int](language.types.integer.md)
:   O CCSID ASCII a ser usado para conversão de EBCDIC no IBM i. Definir como
    1208 usará UTF-8. Por padrão, é 0, que selecionará o CCSID
    da tarefa ASCII padrão.

    Para saber mais sobre CCSIDs no IBM i, consulte a
    [» documentação da IBM](https://www.ibm.com/docs/en/i/7.5?topic=information-ccsid-reference).

## Índice

- [PDO\_IBM DSN](ref.pdo-ibm.connection.md) — Conectando-se a bancos de dados IBM

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

# Conectando-se a bancos de dados CUBRID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-cubrid.connection.php

---

# PDO\_CUBRID DSN

(PECL PDO\_CUBRID >= 8.3.0.0001)

PDO\_CUBRID DSN — Conectando-se a bancos de dados CUBRID

### Descrição

O Nome da Fonte de Dados (DSN) PDO\_CUBRID é composto pelos seguintes elementos, delimitados por ponto e vírgula:

DSN prefix
:   O prefixo DSN é **`cubrid:`**.

`host`
:   O nome do host no qual o servidor de banco de dados reside.

`port`
:   A porta na qual o servidor de banco de dados está em execução.

`dbname`
:   O nome do banco de dados.

### Notas

> **Nota**:
>
> Ao estabelecer a conexão com o CUBRID, você deve fornecer nome de usuário e
> senha, exceto o DSN.

### Examples

**Exemplo #1 Exemplos de DSN PDO\_CUBRID**

O exemplo a seguir mostra um DSN PDO\_CUBRID para se conectar a um banco de dados CUBRID:

```
cubrid:host=localhost;port=33000;dbname=demodb
```

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

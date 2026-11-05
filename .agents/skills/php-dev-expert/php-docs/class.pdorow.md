# A classe PDORow

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.pdorow.php

---

# A classe PDORow

(PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 1.0.0)

## Introdução

Representa uma linha de um conjunto de resultados retornado
pelo [PDOStatement::fetch()](pdostatement.fetch.md)
chamado com o modo de recuperação **`PDO::FETCH_LAZY`**.

Objetos desta classe não podem ser instanciados e não são serializáveis.

O objeto **PDORow** permite acesso
aos dados retornados como se tanto o modo **`PDO::FETCH_OBJ`**
quanto o modo **`PDO::FETCH_BOTH`** fossem usados.
Isso significa que os dados retornados podem ser acessados como propriedades de objeto,
e como um array indexado tanto pelo nome da coluna quanto pelo número de deslocamento da coluna.

**Cuidado**

Acesso a uma propriedade indefinida retorna **`null`**
sem emitir um aviso.

## Resumo da classe

final
class ****PDORow****
{

/\* Propriedades \*/

public
[string](language.types.string.md)
[$queryString](class.pdorow.md#pdorow.props.querystring);

}

## Propriedades

queryString
:   String de consulta usada pelo [PDOStatement](class.pdostatement.md)
    que retornou o objeto **PDORow**.

## Erros/Exceções

Gera um [Error](class.error.md) ao tentar
escrever ou [unset()](function.unset.md) em qualquer propriedade.

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

# Favoritos — documentação phpMyAdmin 6.0.0-dev

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/bookmarks.html

---

# Favoritos[¶](#bookmarks-1 "Link permanente para este título")

Nota

Você precisa ter configurado as [Armazenamento de configurações do phpMyAdmin](setup.md#linked-tables) para usar o recurso de favoritos.

## Armazenando favoritos[¶](#storing-bookmarks "Link permanente para este título")

Qualquer consulta efetuada pode ser marcada como favorita na página onde os resultados são exibidos. Você encontrará um botão com Bookmark this query logo no fim da página. Assim que você tiver armazenado um favorito, essa consulta é vinculada ao banco de dados. Agora você pode acessar um menu suspenso de favoritos em cada página em que a caixa de consulta aparece para esse banco de dados.

## Variáveis dentro de favoritos[¶](#variables-inside-bookmarks "Link permanente para este título")

Dentro de uma consulta, você também pode adicionar espaços reservados para variáveis. Isso é feito inserindo na consulta SQL comentários entre `/*` e `*/`. A string especial `[VARIABLE{variable-number}]` é usada dentro dos comentários. Esteja ciente de que toda a consulta menos os comentários SQL devem ser válidos, caso contrário, você não poderá armazená-la como favorita. Note também que o texto ‘VARIABLE’ diferencia maiúsculas de minúsculas.

Quando você executar o favorito, tudo que for digitado nas caixas de entrada *Variáveis*, na página da caixa de consulta, substituirá as strings `/*[VARIABLE{variable-number}]*/` na sua consulta armazenada.

Lembre-se também de que todo o resto dentro da string `/*[VARIABLE{variable-number}]*/` permanecerá do jeito que está, mas serão removidos os caracteres `/**/`. Então você pode usar:

```
/*, [VARIABLE1] AS myname */
```

que será expandido para

```
, VARIABLE1 as myname
```

em sua consulta, onde VARIABLE1 é a string que você inseriu na caixa de entrada Variável 1.

Um exemplo mais complexo, digamos que você armazenou esta consulta:

```
SELECT Name, Address FROM addresses WHERE 1 /* AND Name LIKE '%[VARIABLE1]%' */
```

Se você deseja inserir “phpMyAdmin” como a variável para a consulta armazenada, a consulta completa será:

```
SELECT Name, Address FROM addresses WHERE 1 AND Name LIKE '%phpMyAdmin%'
```

**OBSERVE A AUSÊNCIA DE ESPAÇOS** dentro do trecho `/**/`. Qualquer espaço inserido lá irá mais tarde ser inserido também como espaço na sua consulta e isso pode levar a resultados inesperados, especialmente quando usada a expansão de variável dentro de uma expressão “LIKE ‘’”.

## Explorando uma tabela usando um favorito[¶](#browsing-a-table-using-a-bookmark "Link permanente para este título")

Quando o favorito tiver o mesmo nome da tabela, ele será usado como a consulta ao explorar essa tabela.

Ver também

[6.18 Favoritos: Onde posso guardar os favoritos? Por que não consigo ver nenhum favorito abaixo da caixa de consulta? Para que são essas variáveis?](faq.md#faqbookmark),
[6.22 Marcações: eu posso executar uma marcação padrão automaticamente quando entrar no modo Procurar para uma tabela?](faq.md#faq6-22)
